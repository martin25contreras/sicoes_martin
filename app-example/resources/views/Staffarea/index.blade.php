<div class="content-table">
    <h3>{{ __('Personal del Área') }}</h3>
    <div class="leyend-data">{{ __('Bienvenidos a la página de Asignación de Áreas de Formación') }}</div>
    <div class="table-responsive">
        <table class="dataTable table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>{{__('Cedula')}}            </th>
                    <th>{{__('Nombre del Docente')}}</th>
                    <th>{{__('Cargo')}}             </th>
                    <th>{{__('Actions')}}           </th>
                </tr>
            </thead>
            <tbody>
                @foreach($staffarea as $key => $value)
                    <tr>                
                        <td>{{ $value['nombre_documento'] }}</td>
                        <td>{{ $value['nombre_apellido'] }}</td> 
                        <td>{{ $value['cargo'] }}</td> 
                        <td> 
                            <a onClick="asigne_areas('{{$value['crypt_id']}}');" data-bs-toggle="modal" data-bs-target="#asigneAreas" href="#" class="btn btn-moderation edit" title="{{ __('Asignar')}}"><i class="fa fa-list"></i>{{ __('Asignar Materias')}}</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>    
    <div class="modal" id="asigneAreas" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                {{ Form::button('x', [ 'id' => 'close','class' => 'close-modal','type'=>'button','data-bs-dismiss'=>'modal','aria-label'=>'Close']) }}
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa fa-clipboard-list style"></i> Asignar Materias</h5>
                </div>
                <div id="consultAreas" class="modal-body"></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function asigne_areas(value){

    $("#consultAreas").empty();
        loadingWait();
    $.get('SA001.asigne/'+value, function(response) {
        Swal.close();
        $("#consultAreas").html(response);
    }).fail(function(){
        Swal.close();
        toastr.error('{{ __('Your request could not be processed') }}');
    });
   
}
</script>