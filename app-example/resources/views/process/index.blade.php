<div class="content-table">
    <h3>{{ __('Registrar Procesos') }}</h3>

    <a href="{{route('process.create')}}" class="btn btn-primary title new link_ajax" data-dataType="html">{{ __('New') }}</a>

    <div class="leyend-data">Bienvenidos a la pagina de Creacion de process</div>
    <div class="table-responsive">
        <table class="dataTable table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>{{__('Nombre del proceso')}}</th>
                    <th>{{__('Descripcion')}}</th>
                    <th>{{__('Order')}}</th>
                    <th>{{__('Estatus')}}</th>
                    <th>{{__('Actions')}}</th>

                </tr>
            </thead>
            <tbody>
                @foreach($Process as $key => $value)
                <tr>
                    <td>{{__($value['nombre_proceso'])}}</td>
                    <td>{{__($value['descripcion'])}}</td>
                    <td>{{$value['order']}}</td>
                    <td>{{($value['estatus']==0 ? __('Inactivo'):__('Activo'))}}</td>
                    @if($value['estatus'] == 1)
                        <td> 
                            <a class="btn btn-moderation edit link_ajax" data-dataType="html" href="{{route('process.edit',$value['crypt_id'])}}"><i class="fa fa-pen"></i> {{ __('Edit') }} </a>
                            <a class="btn btn-moderation delete link_ajax" data-dataType="json" href="{{route('process.change_status',[$value['crypt_id'], 0])}}"><i class="fa fa-trash"></i> {{ __('Delete') }} </a>
                        </td>            
                    @else
                        <td> 
                            <a class="btn btn-moderation active link_ajax" data-dataType="json" href="{{route('process.change_status',[$value['crypt_id'], 1])}}"><i class="fas fa-history"></i> {{ __('Activate') }} </a>
                        </td>
                    @endif       
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
