<div class="content-table"> 
    <div class="row">

        <div class="col-md-3">
            <h3 class="left"><i class="fa fa-chart-bar"></i>{{__('Editar Indicadores de Lapso')}} </h3> 

        </div>

        <div class="col-md-9">

            <div class="content-space te-0">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="note-footer mb-4"><i class="fa fa-exclamation"></i>
                        {{__('En esta pagina podras editar los indicadores de lapso')}}
                    </div>
                </div> 

                {{ Form::open(['route'=>'indicators_lapses.update','id'=>'frmUpdate','autocomplete'=>'Off', 'class' => 'validate' ]) }}

                    {{ Form::hidden('id', (isset($item['crypt_id']))?$item['crypt_id']:"")}}

                    <div class="row">
                    <div class="col-mx-12 col-sm-12 col-md-4 mb-3">

                       {{ Form::label('id_indicador', __('Indicador'), ['class' => 'required title'])}}

                        {{ Form::select('id_indicador', $indicators, (isset($item['indicador_id']))?$item['indicador_id']:"" , ['class' => 'form-select required', 'id'=> 'id_indicador','placeholder'=>__('Select...')]) }}  
                    </div>
                                           
                    </div>

                    <div class="col-5 mx-auto">
                        <a class="btn btn-secondary back link_ajax" data-dataType="html" href="{{route('indicators_lapses')}}">{{ __('Back') }} </a>

                        {{ Form::button(__('Save'), [ 'id' => 'update','class' => 'btn btn-primary save', 'type' => 'submit']) }}
                    </div>
                   
                {{ Form::close() }} 

            </div>

        </div>

    </div>

</div>