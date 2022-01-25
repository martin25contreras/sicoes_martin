<div class="content-table">
    <h3>{{ __('Personal') }}</h3>

    <a href="{{route('staff.create')}}" class="btn btn-primary title new link_ajax" data-dataType="html">{{ __('New') }}</a>

    <div class="leyend-data">Bienvenidos a la pagina del Personal</div>
    <div class="table-responsive">
        <table class="dataTable table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>{{__('Nombres')}}</th>
                    <th>{{__('Apellidos')}}</th>
                    <th>{{__('Correo')}}</th>
                    <th>{{__('Telefono Movil')}}</th>
                    <th>{{__('Telefono Casa')}}</th>
                    <th>{{__('Cargo')}}</th>
                    <th>{{__('Fecha Nacimiento')}}</th>
                    <th>{{__('Actions')}}</th>

                </tr>
            </thead>
            <tbody>
                @foreach($staff as $key => $value)
                <tr>
                    <td>{{$value['nombres']}}</td>
                    <td>{{$value['apellidos']}}</td> 
                    <td>{{$value['correo']}}</td> 
                    <td>{{$value['telefono_movil']}}</td> 
                    <td>{{$value['telefono_casa']}}</td> 
                    <td>{{__($value['cargo'])}}</td> 
                    <td>{{$value['fecha_nacimiento']}}</td> 
                    <td> 
                        <a class="btn btn-moderation edit link_ajax" data-dataType="html" href="{{route('staff.edit',$value['crypt_id'])}}"><i class="fa fa-pen"></i> {{ __('Edit') }} </a>
                    </td>     
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
