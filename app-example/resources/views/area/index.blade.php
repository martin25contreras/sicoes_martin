 <div class="content-table">
    <h3>{{ __('Área') }}</h3>

    <a href="{{route('area.create')}}" class="btn btn-primary title new link_ajax" data-dataType="html">{{ __('New') }}</a>

    <div class="leyend-data">Bienvenidos a la pagina de Área</div>
    <div class="table-responsive">
        <table class="dataTable table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>{{__('Área de Formación')}}</th>
                    <th>{{__('Grado')}}</th>
                    <th>{{__('Sección')}}</th>
                    <th>{{__('Carga Horaria')}}</th>
                    <th>{{__('Actions')}}</th>

                </tr>
            </thead>
            <tbody>
                @foreach($area as $key => $value)
                <tr>
                    <td>{{$value['nombre']}}</td>
                    <td>{{$value['grado']}}</td>
                    <td>{{$value['seccion']}}</td>
                    <td>{{$value['carga_horaria']}}</td>
                    <td> 
                        <a class="btn btn-moderation edit link_ajax" data-dataType="html" href="{{route('area.edit',$value['crypt_id'])}}"><i class="fa fa-pen"></i> {{ __('Edit') }} </a>
                    </td>     
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
