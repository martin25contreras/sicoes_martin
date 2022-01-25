{{-- @extends('layouts.plantilla')

@section('title', 'Create Asignacion')

@section('content')
    <h1>En esta pagina podrás registar al personal de la institución</h1>
    <form action="{{ route('Staffarea.store' ) }}" method="post"> 
        @csrf

        <center>
            <h3>Seleccione al Docente para Asignar un área de formación</h3>
            <label for="">Personal: <br> 
                <select name="personal" >
                    <option value="">Seleccione...</option>
                    @foreach ($staff as $item)                    
                        <option value="{{ $item->cedula; }}"> {{ $item->nombres;}} {{ $item->apellidos;}}</option>
                    @endforeach
                </select>
            </label><br><br> 
            <input type="submit" value="Enviar">
        </center> 

    </form>
@endsection --}}

<div class="content-table"> 

    <div class="row">

        <div class="col-md-3">
            <h3 class="left"><i class="fa fa-id-badge"></i>{{__('Registrar Personal del Área')}} </h3> 
        </div>

        <div class="col-md-9">

            <div class="content-space te-0">

                {{ Form::open(['route'=>'staff_area.store','id'=>'frmStaff','autocomplete'=>'Off', 'class' => 'validate' ]) }}

                <div class="row">
         
                {{--     <div class="col-xs-6 col-sm-6 col-md-6 ">
                            {{Form::label('document_type', __('Type Document'), ['class' => 'required mb-1'])}}
                            {{ Form::select('document_type', $document_type,null, ['class' => 'form-select required', 'id'=> 'document_type','placeholder'=>__('Select...')]) }} 
                            
                    </div>
                          
                    <div class="col-mx-12 col-sm-12 col-md-6 mb-3">

                        {{ Form::label('cargo', __('Cargo'), ['class' => 'required title'])}}

                        {{ Form::select('cargo',  ['Maestra Integral'=>__('Maestra Integral'), 'Maestra Especialista'=>__('Maestra Especialista'), 'Coordinador'=>__('Coordinador')],null, ['class' => 'form-select required', 'id'=> 'cargo','placeholder'=>__('Select...')]) }}                        
                    </div> --}}                  

                    <div class="leyend-data">Seleccione al Docente para Asignar un área de formación</div>
                    <div class="col-mx-12 col-sm-12 col-md-6 mb-3">
                        
                        <label for="">Personal: <br> 
                            <select class="form-select required" name="personal" >
                                <option value="">Seleccione...</option>
                                @foreach ($staff as $item)                    
                                    <option value="{{ $item->cedula }}"> {{ $item->nombres}} {{ $item->apellidos}}</option>
                                @endforeach
                            </select>
                        </label><br><br> 
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
