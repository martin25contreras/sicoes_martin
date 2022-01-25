<div class="content-table">
    <h3>{{ __('Indicadores de Lapso') }}</h3>

    <a href="{{route('indicators_lapses.create')}}" class="btn btn-primary title new link_ajax" data-dataType="html">{{ __('New') }}</a>

    <div class="leyend-data">Bienvenidos a la pagina de Indicadores de Lapso</div>
    <div class="table-responsive">
        <table class="dataTable table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>{{__('Lapso Escolar')}}</th>
                    <th>{{__('Indicador')}}</th>
                    <th>{{__('Competencia')}}</th>
                    <th>{{__('Actions')}}</th>

                </tr>
            </thead>
            <tbody>
                @foreach($indicatorsLapse as $key => $value)
                <tr>
                    <td>{{__($value['statuses'])}}</td>
                    <td>{{$value['indicador']}}</td>
                    <td>{{$value['competencia']}}</td>
                    <td> 
                        <a class="btn btn-moderation edit link_ajax" data-dataType="html" href="{{route('indicators_lapses.edit',$value['crypt_id'])}}"><i class="fa fa-pen"></i> {{ __('Edit') }} </a>
                    </td>     
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
