var current = 1;
function loadFormStep(){

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var steps = $("fieldset").length;
	var currentMenuPage = null;


//formularios paso a paso
    setProgressBar(current);
    $(".next").click(function(){

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                    current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                    });
                next_fs.css({'opacity': opacity});
                },
            duration: 500
            });
        setProgressBar(++current);

    });

//formularios paso a paso
    $(".previous").click(function(){

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                    current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                    });
                previous_fs.css({'opacity': opacity});
                },
            duration: 500
            });
        setProgressBar(--current);
    });

    function setProgressBar(curStep){
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
        .css("width",percent+"%")
    }

    $(".submit").click(function(){
        return false;
    });
}


const configUser = window.matchMedia('(prefers-color-scheme: dark)');
const localConfig = localStorage.getItem('tema');

$(function (){
    
    const boton = $('#switch');

    if(localConfig === 'dark'){
        boton.addClass('active');

    }else if(localConfig === 'light'){
        boton.removeClass('active');        
    }    	
	
	$("a.menu-item").on('click', function (e){
		e.preventDefault();
	});
		
	$('.menu-bar').on('click', function(){
		$('.sidebar').toggleClass('hide');
		$('.main-content').toggleClass('large');
	});

});

function getMenuAction(obj, route){
	currentMenuPage = obj;
	
	$('main').html(translation_msg.loading);
	$(".sub-menu a, #home").removeClass('current');
	$("li").removeClass('in');
	$(obj).addClass('current');
	$(obj).parent().parent().parent('li').addClass('in');
	loadingWait();
	$.get(route, function (html) {
		$('main').html(html);
		applyFormats();
		ajaxLink();
		ajaxForm();
	}, 'html').fail(function () {
		Swal.close();
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'Error en el AjAX!'
		});
	}).fail(function () {
		// Swal.close();
	}).done(function () {
		Swal.close();
	});		
}


function ajaxLink(){
	$('main').find('a.link_ajax').on('click', function (e){
		
		dataDataType = $(this).attr('data-dataType');
		
		e.preventDefault();
		if (dataDataType!=null){		
			
			loadingWait();
			$.get($(this).attr('href'), function (html){
				
				if (typeof(html)=="string"){
					Swal.close();
					$('main').html(html);
					applyFormats();				
					ajaxLink();
					ajaxForm();
				}else{
					if (html.status==-1){
						alert(html.message);
						document.location.reload();
					}else{
						if (html.status==1){
							if (html.redirect!=''){
								sendAjax(html.redirect);
							}
							
						}
						Swal.fire({
							html: html.message,
							icon: html.type_message,
							confirmButtonText: "Ok",
							allowOutsideClick: false
						});
					}
				}
			}, dataDataType).fail(function (){ 
				//alert("Error");
				//Swal.close();
			}).done(function (){  });
		}else{
			Swal.fire({
					html: 'wrong dataType',
					icon: 'error',
					confirmButtonText: "Ok",
					allowOutsideClick: false
				});	
		}
	});
}


function sendAjax(url){
	//$("main").html('Loading...');
	//loadingWait();
	$.get(url, function (response){
		// Swal.close();
		//$('main').html('Loading...');
		$('main').html(response);
		
		applyFormats()
		ajaxLink();
		ajaxForm();
	}, 'html').fail(function (){
		alert('Error');
		Swal.close();
	});	
}



function ajaxForm(){

	$('main').find('form.validate').each(function (cont, obj){
		DataType = $(obj).attr('data-dataType')||'json';
		$(obj).ajaxForm({
			dataType: DataType,
			beforeSubmit: function(arr, Form, options){
				if (Form.valid()==true){
					loadingWait();
					return true;
				}else{
                    toastr.error(MSG_VALIDATION);					
					return false;
				}
			},
			complete: function(){
				//Swal.close();
	        },
	        error: function (response, status, err) {
                Swal.close();
                Swal.fire({
                    html: 'Error: ' + response.status,
                    icon: 'error',
                    confirmButtonText: "Ok",
                    allowOutsideClick: false
                }, function (){
                    window.location.reload();
                });
            },
			success: function(response, status, xhr) {
				if (DataType=='json'){	
					if (response.status==-1){
						alert(response.message);
						document.location.reload();
					}else{
						if (response.status==1){
							if (response.redirect!=''){
								Swal.fire({
                                    html: response.message,
                                    icon: response.type_message,
                                    confirmButtonText: "Ok",
                                    allowOutsideClick: false
                                });
								sendAjax(response.redirect);
								/*
								$.get(response.redirect, function (html){
									Swal.close();
									$('main').html('Loading...');
									$('main').html(html);
									
									applyFormats()
									ajaxLink();
									ajaxForm();
									
									
								}, 'html').fail(function (){ alert("Error")});
								*/
							}else{
								Swal.close();
								Swal.fire({
									html: response.message,
									icon: response.type_message,
									confirmButtonText: "Ok",
									allowOutsideClick: false
								});

								/*** CLASE NOTCLEAN PARA NO LIMPIAR EL FORMULARIO O CAMPO- UTILIZARLO EN LA CLASE VALIDATE DEL FORM**/
								$(obj).not('.notClean').resetForm();
                                $('.dataTable').each(function(){
                                    $(this).dataTable().fnClearTable();
                                });
							}
						}else{
							
							Swal.fire({
								html: response.message,
								icon: response.type_message,
								confirmButtonText: "Ok",
								allowOutsideClick: false
							});	
						}
					}
				}else{
					Swal.close();
					
					$('main').html(response);
					
					applyFormats()
					ajaxLink();
					ajaxForm();
				}
			}
		});	
	});
	
}

function applyFormats(){
	loadFormStep();
	$("table.dataTable").DataTable(
		{
			responsive: false,
	        language: {
					url: URL_LANGUAJE_DATATABLE
				}
		}
		
	);
	$("input[type=number]").on('input', function () {
        if ($(this).hasAttr('maxlength')) {
            if (this.value.length > this.maxLength) {
                this.value = this.value.slice(0, this.maxLength);
            }
        }
    });
	
	/** CLASES select(campo de selcet sencillo) y select2(campo de select con buscador) **/
	$("select.select2").select2();

	/** CLASES alphanum para campos que admiten letras y numeros**/
	$('.alphanum').alphanum();

	/** CLASES alpha para campos que admiten solos mayusculas**/
	$('.alpha').alpha();

	/** CLASES number para campos solo numericos**/
	$('.number').numeric();
	
	/*** CLASES PARA CAMPO MES ***/
    $('.month').datepicker({
        format: 'mm',
        minViewMode: "months",
        autoclose: true,
        language: datepickerlang,
        closeOnDateSelect: true,
    });

	/*** CLASES PARA CAMPO AÑO ***/    
    $('.year').datepicker({
        format: 'yyyy',
        minViewMode: "years",
        autoclose: true,
        language: datepickerlang,
        closeOnDateSelect: true,
    });

	/*** CLASES PARA CAMPO fecha formato 00/00/000 ***/
    $('.date_in').datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true,
        language: datepickerlang,
        closeOnDateSelect: true,
        endDate: new Date()
    });

	/*** CLASES PARA CAMPOS rango de fecha(DESDE/HASTA) ***/
    $('.date_range').daterangepicker({
        maxDate         : new Date(),
        locale: {
            format      : 'DD/MM/YYYY',
            applyLabel  : rangepicker_apply,
            cancelLabel : rangepicker_cancel,
            daysOfWeek  : rangepicker_days,
            monthNames  : rangepicker_months,
        }
    });

	/*** CLASES PARA CAMPOS DET TIPO EMAIL ***/    
	$('.email').inputmask("email");

}

$.fn.hasAttr = function (name) {
    return this.attr(name) !== undefined;
};


/**** CHECK PASSWORD msg ***/
function checkPasswordStrength(password) {
    var number     = /([0-9])/;
    var upperCase  = /([A-Z])/;
    var lowerCase  = /([a-z])/;
    var specialCharacters = /([-,~,!,@,#,$,%,^,&,*,_,+,=,?,>,<,.])/;

    var characters     = (password.length >= 8 && password.length <= 15 );
    var capitalletters = password.match(upperCase) ? 1 : 0;
    var loweletters    = password.match(lowerCase) ? 1 : 0;
    var numbers        = password.match(number) ? 1 : 0;
    var special        = password.match(specialCharacters) ? 1 : 0;

    this.update_info('length', password.length >= 8 && password.length <= 15);
    this.update_info('capital', capitalletters);
    this.update_info('small', loweletters);
    this.update_info('number', numbers);
    this.update_info('special', special);

    var total = characters + capitalletters + loweletters + numbers + special;
    this.password_meter(total);
}

function update_info(criterion, isValid) {
    var $passwordCriteria = $('#passwordCriterion').find('li[data-criterion="' + criterion + '"]');
    if (isValid) {
        $passwordCriteria.removeClass('invalid').addClass('valid');
    } else {
        $passwordCriteria.removeClass('valid').addClass('invalid');
    }
}

function password_meter(total) {
    var meter = $('#password-strength-status');
    meter.removeClass();
    if (total === 0) {
        meter.html('');
    } else if (total === 1) {
        meter.addClass('veryweak-password').html(translation_msg.very_weak);
    } else if (total === 2) {
        meter.addClass('weak-password').html(translation_msg.weak);
    } else if (total === 3) {
        meter.addClass('medium-password').html(translation_msg.medium);
    } else if (total === 4) {
        meter.addClass('average-password').html(translation_msg.average);
    } else {
        meter.addClass('strong-password').html(translation_msg.strong);
    }
}

function passwordConfirmed(password, password2) {

    var confirmed = password == password2 ? 1 : 0;
    this.update_info2('confirmed', confirmed);

    var total = confirmed;
    this.password_meter2(total);
}

function update_info2(criterion, isValid) {
    var $passwordCriteria = $('#passwordCriterion2').find('li[data-criterion="' + criterion + '"]');
    if (isValid) {
        $passwordCriteria.removeClass('invalid').addClass('valid');
    } else {
        $passwordCriteria.removeClass('valid').addClass('invalid');
    }
}

function password_meter2(total) {
    var meter = $('#password-strength-status2');
    meter.removeClass();
    if (total === 0) {
        meter.addClass('veryweak-password').html(translation_msg.pass_not_match);
    }else {
        meter.addClass('strong-password').html(translation_msg.confirmed);
    }
}

function saveDate(f){
    f1 = f.split('/');
    return f1[2]+'-'+f1[1]+'-'+f1[0];
}

function msToTime(s) {
    // Pad to 2 or 3 digits, default is 2
    function pad(n, z) {
        z = z || 2;
        return ('00' + n).slice(-z);
    }
    var ms = s % 1000;
    s = (s - ms) / 1000;
    var secs = s % 60;
    s = (s - secs) / 60;
    var mins = s % 60;
    var hrs = (s - mins) / 60;

    return pad(hrs) + ':' + pad(mins) + ':' + pad(secs);
}
