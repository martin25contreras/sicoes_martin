{{ Form::open(['route'=>'staff_area.store','id'=>'frmStaff','autocomplete'=>'Off', 'class' => 'validate' ]) }}

    <div class="row">
        <div class="col-mx-12 col-sm-12 col-md-6 mb-3">
            <div class="form-group floating-label">
                {{ Form::text('docente', $nombre_apellido , ['class' => 'form-control required ', "required"=>"required", 'id'=> 'docente', 'placeholder' => __('Docente'), 'readonly'=>'readonly'])}}
                {{Form::label('model', __('Docente'), ['class' => 'title'])}}
            </div>  
        </div>
        <div class="col-mx-12 col-sm-12 col-md-6 mb-3">
            <div class="form-group floating-label">
                {{ Form::text('cedula', $item['cedula'] , ['class' => 'form-control required ', "required"=>"required", 'id'=> 'cedula', 'placeholder' => __('Cédula'), 'readonly'=>'readonly'])}}
                {{Form::label('cedula', __('Cédula'), ['class' => 'title'])}}
            </div>  
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group floating-label">
                {{Form::label('materias', __('Áreas de Formación'), ['class' => 'selec2label required'])}}
                {{Form::select('materias', $areaMaterias, null, ['id'=>'materias', 'class'=>'form-select select2', 'placeholder'=>__('Select...')])}}
            </div>  
        </div>
    </div>
    <div class="col-5 mx-auto">
        {{ Form::button(__('Save'), [ 'id' => 'save','class' => 'btn btn-primary save']) }} 
    </div>
{{ Form::close() }}
<script type="text/javascript">
$(document).ready(function() {
    $('#materias').select2({
        width: '300px'
    });
    $("#save").on("click", function (){
        if($('#materias').valid()){
            $.post('{{route("staff_area.store")}}', $('#frmStaff').serialize(), function (response){
                if (response['status'] == 1) {
                    Swal.fire(
                        response['title'],
                        response['message'],
                        response['type_message']);

                $('#asigneAreas').modal('hide');
                }else{

                    toastr.error(response.message);
                }

            }, 'json').fail(function () {
                Swal.close();
                toastr.error('{{ __('Your request could not be processed') }}');
            });
        }
    });
});    
</script>