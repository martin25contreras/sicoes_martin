<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/icon.png') }}">
        <link rel="mask-icon" href="{{ asset('img/icon.png') }}" color="#5bbad5">

        <script src="{{ asset('js/jquery/jquery-3.6.0.min.js') }}"></script>

        <!-- CSS only -->
        <link href="{{ asset('css/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/boostrap_css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/fontawesome/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('css/select2/select2.css') }}" rel="stylesheet">
        <link href="{{ asset('css/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/toastr/toastr.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/datepicker/bootstrap-datepicker.css') }}" rel="stylesheet">
        <link href="{{ asset('css/autoComplete/jquery-ui.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/dateTimerEntry/datetimeentry.css') }}"  rel="stylesheet">     
        <link href="{{ asset('css/daterangepicker/daterangepicker.css') }}" rel="stylesheet">  


        <script src="{{ asset('js/jqueryForm/jquery.form.min.js') }}"></script>
        <script src="{{ asset('js/formValidate/jquery.validate.min.js') }}"></script>

        @if (app()->getLocale()!= 'en')
        <script src="{{ asset('js/formValidate/messages_'.app()->getLocale().'.js') }}"></script>
        @endif


        <!-- JavaScript Bundle with Popper -->
        <script src="{{ asset('js/boostrap/bootstrap.bundle.min.js') }}"></script>

        <script src="{{ asset('js/select2/select2.js') }}"></script>
        <script src="{{ asset('js/select2/select2.'.app()->getLocale().'.js') }}"></script>


        <script src="{{ asset('js/sweetalert2/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('js/toastr/toastr.min.js') }}"></script>

        <script src="{{ asset('js/datatables/datatables.min.js') }}"></script>
        <script src="{{ asset('js/datepicker/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('js/alphaNum/jquery.alphanum.js') }}"></script>
        <script src="{{ asset('js/fontAwesome/brands.min.js') }}"></script>
        <script src="{{ asset('js/autoComplete/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('js/inputmask/jquery.inputmask.js') }}"></script>
        <script src="{{ asset('js/daterangepicker/moment.min.js') }}"></script>
        <script src="{{ asset('js/daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('js/iconpicker/iconpicker.js') }}"></script>
        <script src="{{ asset('js/dateTimeEntry/plugin.min.js') }}"></script>  
        <script src="{{ asset('js/dateTimeEntry/datetimeentry.min.js') }}"></script>
        
        <script src="{{ asset('js/main.js') }}"></script>
        <title>{{ config('app.name') }}</title>
    </head>
    <body class="{{Auth::user()->theme_name }}" oncontextmenu="return false;">

        <div class="sidebar close">
            <div class="logo-details">
                <i class='fa fa-shield-alt'></i>
                <span class="logo_name">Sicoes</span>
            </div>
            <ul class="nav-links">
                <li>
                    <div class="profile-details">
                        <div class="profile-content">
                            <img alt="avatar" src="{{asset('avatar/'.Auth::user()->avatar)}}" />
                        </div>
                        <div class="name-job">
                            <div class="profile_name">{{ Auth::user()->username }}</div>
                            <div class="job">{{ Auth::user()->nombre_usuario.' '.Auth::user()->apellido_usuario}}</div>
                        </div>
                        <a href="logout" data-toggle="tooltip" data-placement="left" title="Cerrar Sesión">
                            <i class='fa fa-power-off off'></i>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
        <section class="home-section">
            <div class="home-content">
                <i class='fa fa-list'></i>
            </div>
        </section>
        @if(Session::has('msg'))
            <script type="text/javascript">
                toastr['{{ Session::get('msg')['type_message'] }}']('{{ Session::get('msg')['message'] }}');
            </script>
        @endif
        <div class="main-content">
            <header>
                <h3>
                    @yield('title')
                </h3>
            </header>
            <main>

                @yield('content')

            </main>

            <div class="footer">
                2022 &#169; Desing By Instituto Técnico Jesús Obrero - SICOES
            </div>

        </div>
        <script type="text/javascript">
            var MSG_VALIDATION = "{{__('Please Check the Form')}}";
            var translation_msg = {
                "very_weak"           : "{{__('very weak')}}",
                "weak"                : "{{__('weak')}}",
                "medium"              : "{{__('medium')}}",
                "average"             : "{{__('average')}}",
                "strong"              : "{{__('strong')}}",    
                "pass_not_match"      : "{{__('Password not match')}}",    
                "confirmed"           : "{{__('Confirmed')}}",    
            }   
    

            $(function (){
                idleLogout();

                @if (session()->get('currentModule')!= null)
                    $("#link_{{session()->get('currentModule')}}").click();
                @endif
            });
            
            function loadingWait(params){
                
                Swal.fire({
                        title: '{{__("Please Wait ... !")}}',
                        html: '{{__("Processing Data")}}',
                        allowOutsideClick: false, showConfirmButton: false,
                        onBeforeOpen: () => {
                            Swal.showLoading()
                        },
                    });
            }

            function idleLogout() {
                var time = {{ Auth::user()->tiempo_inactividad }};
                var t;
                var time_remaing = 0;
                var time_out = time; // value in seconds
                window.onload = resetTimer;
                window.onmousemove = resetTimer;
                window.onmousedown = resetTimer; // catches touchscreen presses as well      
                window.ontouchstart = resetTimer; // catches touchscreen swipes as well 
                window.onclick = resetTimer; // catches touchpad clicks as well
                window.onkeypress = resetTimer;
                window.addEventListener('scroll', resetTimer, true); // improved; see comments

                var myVar = setInterval(myTimer, 1000);
                function myTimer() {
                    time_remaing++;
                    if (time_remaing == time_out) {
                        Swal.fire({
                            title: "{{ __('Do you want to extend the session?') }}",
                            icon: 'question',
                            showDenyButton: true,
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            confirmButtonText: "{{ __('Yes') }}",
                            confirmButtonColor: "var(--color-primary)",                            
                            denyButtonText: "{{ __('Not') }}",                                                       
                            denyButtonColor: "var(--bs-gray)"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                resetTimer();

                            } else if (result.isDenied) {
                                clearInterval(myVar);
                                logout_timer();
                            }
                        });
                    }
                    if (time_remaing == (time_out + 10)) {
                        clearInterval(myVar);
                        logout_timer();
                    }
                }
                function resetTimer() {
                    time_remaing = 0;
                }
                function logout_timer() {
                    Swal.close();
                    $.get('{{route("logout")}}', function (){ 
                        window.location.reload();
                    });
                }
            }
            //Sidebar y Header
            let arrow = document.querySelectorAll(".arrow");
            for (var i = 0; i < arrow.length; i++) {
                arrow[i].addEventListener("click", (e)=>{
                    let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
                    arrowParent.classList.toggle("showMenu");
                });
            }
            let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".home-content");
            let body = document.querySelector(".main-content");
            sidebarBtn.addEventListener("click", ()=>{
                sidebar.classList.toggle("close");
                body.classList.toggle("close");
            }); 
        </script>        
    </body>
</html>