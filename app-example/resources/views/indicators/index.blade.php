 <div class="content-table">
    <h3>{{ __('Indicadores') }}</h3>

    <a href="{{route('indicators.create')}}" class="btn btn-primary title new link_ajax" data-dataType="html">{{ __('New') }}</a>

    <div class="leyend-data">Bienvenidos a la pagina de Indicadores</div>
    <div class="table-responsive">
        <table class="dataTable table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>{{__('Indicadores')}}</th>
                    <th>{{__('Materia')}}</th>
                    <th>{{__('Estatus')}}</th>
                    <th>{{__('Actions')}}</th>

                </tr>
            </thead>
            <tbody>
                @foreach($indicators as $key => $value)
                <tr>
                    <td>{{$value['nombre']}}</td>
                    <td>{{__($value['statuses_indicators'])}}</td>
                    <td>{{__($value['estatus'])}}</td>
                    <td> 
                        <a class="btn btn-moderation edit link_ajax" data-dataType="html" href="{{route('indicators.edit',$value['crypt_id'])}}"><i class="fa fa-pen"></i> {{ __('Edit') }} </a>
                    </td>     
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
