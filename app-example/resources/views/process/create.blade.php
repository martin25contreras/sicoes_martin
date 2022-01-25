 <div class="content-table"> 

    <div class="row">

        <div class="col-md-3">
            <h3 class="left"><i class="fa fa-list-ol"></i>{{__('Registrar Procesos')}} </h3> 
        </div>

        <div class="col-md-9">

            <div class="content-space te-0">

                {{ Form::open(['route'=>'process.store','id'=>'frmprocess','autocomplete'=>'Off', 'class' => 'validate' ]) }}

                <div class="row">
                    <div class="col-mx-12 col-sm-12 col-md-6 mb-3">
                        {{ Form::label('name_process', __('Nombre del proceso'), ['class' => 'required mb-1'])}}
                        {{ Form::text('name_process', null, ['class' => 'form-control  required', 'id'=> 'name_process','placeholder'=>__('Nombre del proceso'),'maxlength'=>'50']) }}       
                    </div>
                    <div class="col-mx-12 col-sm-12 col-md-6 mb-3">
                        {{ Form::label('description', __('Descripcion del proceso'), ['class' => 'required mb-1'])}}
                        {{ Form::text('description', null, ['class' => 'form-control  required', 'id'=> 'description','placeholder'=>__('Descripcion del proceso'),'maxlength'=>'50']) }}       
                    </div>  
                    @if(Auth::user()->special_permission == 1)  

                        <div class="col-mx-12 col-sm-12 col-md-6 mb-3">
                            {{ Form::label('route', __('Ruta'), ['class' => 'required mb-1'])}}
                            {{ Form::text('route', null, ['class' => 'form-control required', 'id'=> 'route','placeholder'=>__('Ruta'),'maxlength'=>'50']) }}       
                        </div>
                    @endif         

                    <div class="col-mx-12 col-sm-12 col-md-6 mb-3">
                        {{ Form::label('order', __('Order'), ['class' => 'required mb-1'])}}
                        {{ Form::number('order', $order, ['class' => 'form-control number required', 'id'=> 'order','placeholder'=>__('Order'),'minlength'=>'1','readonly'=> true]) }}       
                    </div>
  
                    @if(Auth::user()->special_permission == 1)               

                        <div class="col-mx-12 col-sm-12 col-md-4 mb-3">
                            {{ Form::label('menu', __(' Menu'), ['class' => 'required title'])}}

                            <select class="form-select required" id="menu" name="menu">

                                <option selected="selected" value="">{{__('Select...')}}</option>

                                @foreach($menu as $value)

                                    <option value="{{$value['id']}}">{{__($value['nombre_menu'])}}</option>

                                @endforeach                        
                            </select>      
                        </div>
                    @endif     

                </div>
                <div class="col-5 mx-auto">
                    <a class="btn btn-secondary back link_ajax" data-dataType="html" href="{{route('process')}}"> {{ __('Back') }} </a>

                    {{ Form::button(__('Save'), [ 'id' => 'save','class' => 'btn btn-primary save', 'type' => 'submit']) }}
                </div>
                
                {{ Form::close() }} 

            </div>

        </div>

    </div>

</div>