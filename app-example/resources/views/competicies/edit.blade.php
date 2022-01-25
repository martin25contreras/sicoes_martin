 <div class="content-table"> 
    <div class="row">

        <div class="col-md-3">
            <h3 class="left"><i class="fa fa-file-alt"></i>{{__('Editar Competencias')}} </h3> 

        </div>

        <div class="col-md-9">

            <div class="content-space te-0">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="note-footer mb-4"><i class="fa fa-exclamation"></i>
                        {{__('En esta pagina podras editar una competencia')}}
                    </div>
                </div> 

                {{ Form::open(['route'=>'competicies.update','id'=>'frmUpdate','autocomplete'=>'Off', 'class' => 'validate' ]) }}

                    {{ Form::hidden('id', (isset($item['crypt_id']))?$item['crypt_id']:"")}}

                    <div class="row">
                        <div class="col-mx-12 col-sm-12 col-md-12 mb-3">
                            {{ Form::label('nombre_competencia', __('Nombre Competencia'), ['class' => 'required mb-1'])}}
                            {{ Form::text('nombre_competencia', (isset($item['nombre_competencia']))?$item['nombre_competencia']:"", ['class' => 'form-control required', 'id'=> 'nombre_competencia','placeholder'=>'Competencias','maxlength'=>'50']) }}
                        </div>
                    </div>
                    <div class="col-5 mx-auto">
                        <a class="btn btn-secondary back link_ajax" data-dataType="html" href="{{route('competicies')}}">{{ __('Back') }} </a>

                        {{ Form::button(__('Save'), [ 'id' => 'update','class' => 'btn btn-primary save', 'type' => 'submit']) }}
                    </div>
                   
                {{ Form::close() }} 

            </div>

        </div>

    </div>

</div>