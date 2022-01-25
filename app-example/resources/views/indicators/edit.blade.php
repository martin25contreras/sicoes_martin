 <div class="content-table"> 
    <div class="row">

        <div class="col-md-3">
            <h3 class="left"><i class="fa fa-chart-pie"></i>{{__('Editar Indicadores')}} </h3> 

        </div>

        <div class="col-md-9">

            <div class="content-space te-0">
                {{-- {{ Form::label('', __('En esta pagina podras editar una indicators'), ['class' => 'mb-4'])}} --}}

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="note-footer mb-4"><i class="fa fa-exclamation"></i>
                        {{__('En esta pagina podras editar una indicadores')}}
                    </div>
                </div> 

                {{ Form::open(['route'=>'indicators.update','id'=>'frmUpdate','autocomplete'=>'Off', 'class' => 'validate' ]) }}

                    {{ Form::hidden('id', (isset($item['crypt_id']))?$item['crypt_id']:"")}}

                    <div class="row">
                        <div class="col-mx-12 col-sm-12 col-md-8 mb-3">
                            {{ Form::label('nombre', __('Nombre Indicadores'), ['class' => 'required mb-1'])}}
                            {{ Form::text('nombre', (isset($item['nombre']))?$item['nombre']:"", ['class' => 'form-control required', 'id'=> 'nombre_indicators','placeholder'=>'Indicadores','maxlength'=>'50']) }}
                        </div>
                    </div>

                    <div class="col-5 mx-auto">
                        <a class="btn btn-secondary back link_ajax" data-dataType="html" href="{{route('indicators')}}">{{ __('Back') }} </a>

                        {{ Form::button(__('Save'), [ 'id' => 'update','class' => 'btn btn-primary save', 'type' => 'submit']) }}
                    </div>
                   
                {{ Form::close() }} 

            </div>

        </div>

    </div>

</div>