<div class="content-table">
    <h3>{{ __('Competencias') }}</h3>

    <a href="{{route('competicies.create')}}" class="btn btn-primary title new link_ajax" data-dataType="html">{{ __('New') }}</a>

    <div class="leyend-data">Bienvenidos a la pagina de Competencias</div>
    <div class="table-responsive">
        <table class="dataTable table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>{{__('Nombre de la Competencia')}}</th>
                    <th>{{__('Año Escolar')}}</th>
                    <th>{{__('Estatus')}}</th>
                    <th>{{__('Actions')}}</th>

                </tr>
            </thead>
            <tbody>
                @foreach($competicies as $key => $value)
                <tr>
                    <td>{{$value['nombre_competencia']}}</td>
                    <td>{{$value['ano_escolar']}}</td>
                    <td>{{__($value['estatus'])}}</td>
                    <td> 
                        <a class="btn btn-moderation edit link_ajax" data-dataType="html" href="{{route('competicies.edit',$value['crypt_id'])}}"><i class="fa fa-pen"></i> {{ __('Edit') }} </a>
                    </td>     
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
