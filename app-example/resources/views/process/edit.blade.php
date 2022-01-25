<div class="content-table"> 
    <div class="row">

        <div class="col-md-3">
            <h3 class="left"><i class="fa fa-list-ol"></i>{{__('Editar Procesos')}} </h3> 

        </div>

        <div class="col-md-9">

            <div class="content-space te-0">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="note-footer mb-4"><i class="fa fa-exclamation"></i>
                        {{__('En esta pagina podras editar el process del sistema')}}
                    </div>
                </div> 

                {{ Form::open(['route'=>'process.update','id'=>'frmUpdate','autocomplete'=>'Off', 'class' => 'validate' ]) }}

                    {{ Form::hidden('id', $item['crypt_id'])}}

                    <div class="row">
                        @if(Auth::user()->special_permission == 1)  

                            <div class="col-mx-12 col-sm-12 col-md-6 mb-3">
                                {{ Form::label('name_process', __('Nombre del proceso'), ['class' => 'required mb-1'])}}
                                {{ Form::text('name_process', __($item['nombre_proceso']), ['class' => 'form-control required', 'id'=> 'name_process','placeholder'=>__('Nombre del proceso'),'maxlength'=>'50']) }}       
                            </div>
                        @endif         

                        <div class="col-mx-12 col-sm-12 col-md-6 mb-3">
                            {{ Form::label('description', __('Descripcion del proceso'), ['class' => 'required mb-1'])}}
                            {{ Form::text('description', __($item['descripcion']), ['class' => 'form-control  required', 'id'=> 'description','placeholder'=>__('Descripcion del proceso'),'maxlength'=>'50']) }}       
                        </div>                    
                        @if(Auth::user()->special_permission == 1)  

                            <div class="col-mx-12 col-sm-12 col-md-6 mb-3">
                                {{ Form::label('route', __('Ruta'), ['class' => 'required mb-1'])}}
                                {{ Form::text('route',$item['route'], ['class' => 'form-control icp iconpicker required', 'id'=> 'route','placeholder'=>__('Ruta'),'maxlength'=>'50']) }}       
                            </div>
                        @endif         
                        @if(Auth::user()->special_permission == 1)  

                            <div class="col-mx-12 col-sm-12 col-md-6 mb-3">

                                {{ Form::label('menu', __(' Menu'), ['class' => 'required title'])}}

                                <select name="menu" id="menu" class="form-select required">
                                    <option value="">{{__('Select...')}}</option>
                                    @foreach($menu as $value)
                                        <option value="{{ $value->id }}" {{ $value->id == $item['menu_id'] ? 'selected' : '' }}>{{ __($value->nombre_menu) }}</option>
                                    @endforeach
                                </select>

                            </div>
                        @endif         
                    </div>
                    <div class="col-5 mx-auto">
                        <a class="btn btn-secondary back link_ajax" data-dataType="html" href="{{route('process')}}">{{ __('Back') }} </a>

                        {{ Form::button(__('Save'), [ 'id' => 'update','class' => 'btn btn-primary save', 'type' => 'submit']) }}
                    </div>
                   
                {{ Form::close() }} 

            </div>

        </div>

    </div>

</div>