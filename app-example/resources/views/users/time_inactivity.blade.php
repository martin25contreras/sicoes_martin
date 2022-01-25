<div class="content-table"> 
	<h3>{{ __('Time Inactivity') }}</h3> 
	<div class="content-space">
		{{ Form::open(['return'=>null,'id' => 'formTimer', 'class' => 'validate notClean' , 'autocomplete' => 'Off']) }}
		<div class="row ">
			<div class="col-xs-11 col-sm-11 col-md-3 mb-3">
				<div class="form-group floating-label">
                    {{ Form::hidden('inactivity_time', 0, ['id'=> 'inactivity_time' ]) }}
                    {{ Form::text('inactivity_time2', msToTime($timer->timer), ['class' => 'form-control required', "readonly"=>"readonly" ,'id'=> 'inactivity_time2','placeholder'=> __('Time Inactivity'),  'required' => 'required' ]) }}
                    {{ Form::label('inactivity_time', __('Time Inactivity'), ['class' => 'title']) }}
				</div>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1">
				{{ Form::button('<i class="fa fa-save"></i>', ['class' => 'btn btn-primary', 'id' => 'saveFormTimer']) }}
			</div>
			<div class="col-xs-12 col-sm-12 col-md-9">
				<div class="note-footer"><i class="fa fa-exclamation"></i>
			   		{{__('The Downtime Format is HOUR: MINUTES: SECONDS.')}}
			 	</div>
			</div>
		</div>
		{{ Form::close() }}
	</div>	
</div>
<script type="text/javascript">
$(document).ready(function () {
	$('#inactivity_time2').datetimeEntry({datetimeFormat: 'H:M:S', spinnerImage:null});
	$('#inactivity_time').val($('#inactivity_time2').datetimeEntry('getOffset') / 1000);
	
	$('#inactivity_time2').on("change", function(){
	    $('#inactivity_time').val($('#inactivity_time2').datetimeEntry('getOffset') / 1000);
	});
    $('#saveFormTimer').on('click', function(){
        Swal.fire({
            title: "{{ __('¿Do you wish to save changes?') }}",
            icon: 'question',
            showDenyButton: true,
            allowOutsideClick: false,
            allowEscapeKey: false,
            confirmButtonText: "{{ __('Save') }}",
            confirmButtonColor: "var(--color-primary)",
            denyButtonText: "{{ __('Cancel') }}",
            denyButtonColor: "var(--bs-gray)",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.post("{{route('users.time_inactivity')}}", $('#formTimer').serialize(), function(response){
                    if(response['status'] == 1){
                        Swal.fire(
                            response['title'],
                            response['message'],
                            response['type_message']
                        );
                    }else{
                        Swal.fire(
                            response['title'],
                            response['message'],
                            response['type_message']
                        );
                    }
                },'json').fail(function(){
                    toastr.error('{{ __('Your request could not be processed') }}');
                    Swal.close();
                });
            }
        });
    });
});
</script>