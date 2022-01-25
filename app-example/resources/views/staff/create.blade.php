<div class="content-table"> 

    <div class="row">

        <div class="col-md-3">
            <h3 class="left"><i class="fa fa-id-badge"></i>{{__('Registrar Personal')}} </h3> 
        </div>

        <div class="col-md-9">

            <div class="content-space te-0">

                {{ Form::open(['route'=>'staff.store','id'=>'frmStaff','autocomplete'=>'Off', 'class' => 'validate' ]) }}

                <div class="row">
         
                    <div class="col-mx-12 col-sm-12 col-md-6">

                        {{Form::label('nombres', __('Nombres'), ['class' => 'required mb-1'])}}
                        {{ Form::text('nombres', null, ['class' => 'form-control  alpha required', 'id'=> 'nombres','placeholder'=>__('Nombres'),]) }}
                    </div>
                    <div class="col-mx-12 col-sm-12 col-md-6">

                        {{Form::label('apellidos', __('Apellidos'), ['class' => 'required mb-1'])}}
                        {{ Form::text('apellidos', null, ['class' => 'form-control  alpha required', 'id'=> 'apellidos','placeholder'=>__('Apellidos'),]) }}
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 ">

                        {{Form::label('document_type', __('Type Document'), ['class' => 'required mb-1'])}}
                        {{ Form::select('document_type', $document_type,null, ['class' => 'form-select required', 'id'=> 'document_type','placeholder'=>__('Select...')]) }} 
                            
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        
                        {{Form::label('cedula', __('Cédula'), ['class' => 'required mb-1'])}}
                        {{ Form::text('cedula','', ['class' => 'form-control  number required', 'id'=> 'cedula','placeholder'=>__('Cedula'), 'maxlength'=>'8']) }} 
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                            
                        {{Form::label('direccion', __('Dirección'), ['class' => 'required mb-1'])}}
                        {{ Form::text('direccion', '', ['class' => 'form-control  alphanum required', 'id'=> 'direccion','placeholder'=>__('Direccion'), 'maxlength'=>'100']) }} 
                       
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">

                        {{Form::label('correo', __('Correo'), ['class' => 'required mb-1'])}}
                        {{ Form::text('correo', null, ['class' => 'form-control email required', 'id'=> 'correo','placeholder'=>__('Correo')]) }} 
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                            
                        {{Form::label('telefono_casa', __('Telefono de Casa'), ['class' => 'required mb-1'])}}
                        {{ Form::text('telefono_casa', null, ['class' => 'form-control number required', 'id'=> 'telefono_casa','placeholder'=>__('Phone'),'minlength'=>'11','maxlength'=>'11']) }}
                            
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        
                        {{Form::label('telefono_movil', __('Telefono Móvil'), ['class' => 'required mb-1'])}}
                        {{ Form::text('telefono_movil', null, ['class' => 'form-control number required', 'id'=> 'telefono_movil','placeholder'=>__('Telefono Móvil'),'minlength'=>'11','maxlength'=>'11']) }}
                        
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 mb-4">

                        {{  Form::label('', __('Fecha Nacimiento'), ['class' => 'required title'])}}    
                        {{  Form::text('fecha_nacimiento', '', ['id'=>'fecha_nacimiento','class'=>'form-control required date_in', 'placeholder'=>__('Fecha Nacimiento'), 'readonly' => true ]) }}
                    </div>
                    <div class="col-mx-12 col-sm-12 col-md-6 mb-3">

                        {{ Form::label('cargo', __('Cargo'), ['class' => 'required title'])}}

                        {{ Form::select('cargo',  ['Maestra Integral'=>__('Maestra Integral'), 'Maestra Especialista'=>__('Maestra Especialista'), 'Coordinador'=>__('Coordinador')],null, ['class' => 'form-select required', 'id'=> 'cargo','placeholder'=>__('Select...')]) }}
                    </div>
                </div>
                <div class="col-5 mx-auto">
                    <a class="btn btn-secondary back link_ajax" data-dataType="html" href="{{route('staff')}}"> {{ __('Back') }} </a>

                    {{ Form::button(__('Save'), [ 'id' => 'save','class' => 'btn btn-primary save', 'type' => 'submit']) }}
                </div>
                
                {{ Form::close() }} 

            </div>

        </div>

    </div>

</div>