{{-- @extends('layouts.plantilla')

@section('title', 'staff Edit')

@section('content')
    <h1>En esta pagina podras editar su Indicador</h1>
    <form action="{{ route('staff.update', $staff) }}" method="post"> 
        
        @csrf

        @method('put')

        <label for="">Nombres: <br> 
            <input type="text" name="nombres" value="{{ $staff->nombres; }}">
        </label><br><br>  
        <label for="">Apellidos: <br> 
            <input type="text" name="apellidos" value="{{ $staff->apellidos; }}">
        </label><br><br>  
        <label for="">Cédula: <br> 
            <input type="text" name="cedula" value="{{ $staff->cedula; }}" readonly>
        </label><br><br>  
        <label for="">Dirección: <br> 
            <textarea name="direccion" id="" cols="40" rows="5">{{ $staff->direccion; }}</textarea>
        </label><br><br>  
        <label for="">Correo Personal: <br> 
            <input type="email" name="correo" value="{{ $staff->correo; }}">
        </label><br><br>  
        <label for="">Teléfono Móvil: <br> 
            <input type="text" name="telefono" placeholder="codigo - numero" value="{{ $staff->telefono; }}">
        </label><br><br>  
        <label for="">Teléfono Casa: <br> 
            <input type="text" name="telefono_casa" placeholder="codigo - numero" value="{{ $staff->telefono_casa; }}">
        </label><br><br>  
        <label for="">Fecha de Nacimiento: <br> 
            <input type="text" name="fecha" value="{{ $staff->ano_nacimiento; }}-{{ $staff->mes_nacimiento; }}-{{ $staff->dia_nacimiento; }}">
        </label><br><br>  
        <label for="">Cargo: <br> 
            <select name="cargo">
                <option value="{{ $staff->cargo; }}"> {{ $staff->cargo; }}</option>
                <option value="Maestra Integral">Maestra Integral</option>
                <option value="Maestra Especialista">Maestra Especialista</option>
                <option value="Coordinador">Coordinador</option>
            </select>
        </label><br><br>      
        <input type="submit" value="Actualizar">
    </form>
@endsection
 --}}

 <div class="content-table"> 

    <div class="row">

        <div class="col-md-3">
            <h3 class="left"><i class="fa fa-id-badge"></i>{{__('Editar Personal del Área')}} </h3> 
        </div>

        <div class="col-md-9">

            <div class="content-space te-0">

                {{ Form::open(['route'=>'staff.update','id'=>'frmUpdate','autocomplete'=>'Off', 'class' => 'validate' ]) }}
                    {{ Form::hidden('id', (isset($item['crypt_id']))?$item['crypt_id']:"", ['id'=> 'id'])}}                

                <div class="row">
         
                    <div class="col-mx-12 col-sm-12 col-md-6">

                        {{Form::label('nombres', __('Nombres'), ['class' => 'required mb-1'])}}
                        {{ Form::text('nombres',  (isset($item['nombres']))?$item['nombres']:"", ['class' => 'form-control  alpha required', 'id'=> 'nombres','placeholder'=>__('Nombres'),]) }}
                    </div>
                    <div class="col-mx-12 col-sm-12 col-md-6">

                        {{Form::label('apellidos', __('Apellidos'), ['class' => 'required mb-1'])}}
                        {{ Form::text('apellidos',  (isset($item['apellidos']))?$item['apellidos']:"", ['class' => 'form-control  alpha required', 'id'=> 'apellidos','placeholder'=>__('Apellidos'),]) }}
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 ">
                            {{Form::label('document_type', __('Type Document'), ['class' => 'required mb-1'])}}
                            {{ Form::select('document_type', $document_type, (isset($item['tipo_documento_id']))?$item['tipo_documento_id']:"", ['class' => 'form-select required', 'id'=> 'document_type','placeholder'=>__('Select...')]) }} 
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                            
                        {{Form::label('cedula', __('Cedula'), ['class' => 'required mb-1'])}}
                        {{ Form::text('cedula', (isset($item['cedula']))?$item['cedula']:"", ['class' => 'form-control  number required', 'id'=> 'cedula','placeholder'=>__('Cedula'), 'maxlength'=>'8']) }} 
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                            
                        {{Form::label('direccion', __('Direccion'), ['class' => 'required mb-1'])}}
                        {{ Form::text('direccion',  (isset($item['direccion']))?$item['direccion']:"", ['class' => 'form-control  alphanum required', 'id'=> 'direccion','placeholder'=>__('Direccion'), 'maxlength'=>'100']) }}        
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        {{Form::label('correo', __('Correo'), ['class' => 'required mb-1'])}}
                        {{ Form::text('correo',  (isset($item['correo']))?$item['correo']:"", ['class' => 'form-control email required', 'id'=> 'correo','placeholder'=>__('Correo')]) }} 
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        
                        {{Form::label('telefono_movil', __('Telefono Móvil'), ['class' => 'required mb-1'])}}
                        {{ Form::text('telefono_movil',  (isset($item['telefono_movil']))?$item['telefono_movil']:"", ['class' => 'form-control number required', 'id'=> 'telefono_movil','placeholder'=>__('Telefono Móvil'),'minlength'=>'12','maxlength'=>'12']) }}
                        
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 mb-2">
                            
                        {{Form::label('telefono_casa', __('Telefono de Casa'), ['class' => 'required mb-1'])}}
                        {{ Form::text('telefono_casa',  (isset($item['telefono_casa']))?$item['telefono_casa']:"", ['class' => 'form-control number required', 'id'=> 'telefono_casa','placeholder'=>__('Telefono de Casa'),'minlength'=>'12','maxlength'=>'12']) }}                            
                    </div>
                        {{  Form::label('', __('Fecha Nacimiento'), ['class' => 'required title mb-4'])}}    

                     <div class="col-xs-12 col-sm-12 col-md-4 mb-4">
                        <div class="form-group floating-label">
                            {{  Form::number('dia_nacimiento', (isset($item['dia_nacimiento']))?$item['dia_nacimiento']:"", ['id'=>'dia_nacimiento','class'=>'form-control number required day','required'=>'required', 'placeholder' => __('Dia de Nacimiento') ]) }}
                            {{Form::label('dia_nacimiento', __('Dia de Nacimiento'), ['class' => 'title'])}}
                        </div>
                    </div>
                     <div class="col-xs-12 col-sm-12 col-md-4 mb-4">
                        <div class="form-group floating-label">
                            {{  Form::text('mes_nacimiento',(isset($item['mes_nacimiento']))?$item['mes_nacimiento']:"", ['id'=>'mes_nacimiento','class'=>'form-control required month','required'=>'required', 'placeholder' => __('mes_nacimiento'), 'readonly' => true ]) }}
                            {{Form::label('mes_nacimiento', __('Mes de Nacimiento'), ['class' => 'title'])}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 mb-4">
                        <div class="form-group floating-label">
                            {{  Form::text('ano_nacimiento',(isset($item['ano_nacimiento']))?$item['ano_nacimiento']:"", ['id'=>'ano_nacimiento','class'=>'form-control required year', 'required'=>'required', 'placeholder' => __('Año de Nacimiento'), 'readonly' => true ]) }}
                            {{Form::label('ano_nacimiento', __('Año de Nacimiento'), ['class' => 'title'])}}
                        </div>
                    </div>                                     
                    <div class="col-mx-12 col-sm-12 col-md-6 mb-3">

                        {{ Form::label('cargo', __('Cargo'), ['class' => 'required title'])}}

                        {{ Form::select('cargo', ['Maestra Integral'=>__('Maestra Integral'), 'Maestra Especialista'=>__('Maestra Especialista'), 'Coordinador'=>__('Coordinador')],  (isset($item['cargo']))?$item['cargo']:"", ['class' => 'form-select required', 'id'=> 'cargo','placeholder'=>__('Select...')]) }}                        
                    </div>                  
                </div>
                <div class="col-5 mx-auto">
                    <a class="btn btn-secondary back link_ajax" data-dataType="html" href="{{route('staff_area')}}"> {{ __('Back') }} </a>

                    {{ Form::button(__('Save'), [ 'id' => 'save','class' => 'btn btn-primary save', 'type' => 'submit']) }}
                </div>
                
                {{ Form::close() }} 

            </div>

        </div>

    </div>

</div>