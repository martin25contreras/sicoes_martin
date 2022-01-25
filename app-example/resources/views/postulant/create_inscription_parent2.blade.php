
<div class="content-table"> 


  <div class="row">

    <div class="col-md-3">
        <h3 class="left"><i class="fa fa-user"></i>{{ __('Planilla de Inscripción Madre') }}</h3> 
    </div>

    <div class="col-md-9">

      <div class="content-space te-0">

        {{ Form::open(['route'=>'postulant.store_representative2','id'=>'frmStore','autocomplete'=>'Off','class' => 'validate' ]) }}
          <div class="form-group mb-2">
          </div>
          <div class="row g-2 mb-3">
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{Form::label('primer_nombre', __('Primer Nombre del Estudiante'), ['class' => 'required mb-1'])}}
              {{ Form::text('primer_nombre', null, ['class' => 'form-control  alpha required', 'id'=> 'primer_nombre','placeholder'=>__('Primer nombre del Estudiante'),]) }}
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{Form::label('segundo_nombre', __('Segundo Nombre del Estudiante'), ['class' => 'required mb-1'])}}
              {{ Form::text('segundo_nombre', null, ['class' => 'form-control alpha required', 'id'=> 'second_name_student','placeholder'=>__('Segundo nombre del Estudiante'), ]) }}  
            </div>
          </div>
          <div class="row g-2 mb-3">
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{Form::label('primer_apellido', __('Primer Apellido del Estudiante'), ['class' => 'required mb-1'])}}
              {{ Form::text('primer_apellido', null, ['class' => 'form-control  alpha required', 'id'=> 'primer_apellido','placeholder'=>__('Primer Apellido del Estudiante'),]) }}
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{Form::label('segundo_apellido', __('Segundo Apellido del Estudiante'), ['class' => 'required mb-1'])}}
              {{ Form::text('segundo_apellido', null, ['class' => 'form-control alpha required', 'id'=> 'segundo_apellido','placeholder'=>__('Segundo Apellido del Estudiante'), ]) }}
            </div>
          </div>
          <div class="row g-2 mb-3">
            {{-- <div class="col-xs-6 col-sm-6 col-md-6 ">
              {{Form::label('document_type', __('Type Document'), ['class' => 'mb-1'])}}
              {{ Form::select('document_type', $document_type, null, ['class' => 'form-select ', 'id'=> 'document_type','placeholder'=>__('Select...')]) }}
            </div> --}}
            <div class="col-xs-6 col-sm-6 col-md-6">            
              {{ Form::label('cedula', __('Document'), ['class' => 'mb-1'])}}
              {{ Form::text('cedula', null, ['class' => 'form-control  number', 'id'=> 'cedula','placeholder'=>__('Cédula del estudiante'), 'maxlength'=>'8']) }} 
            </div>
          </div>
          <div class="mb-3">
            {{Form::label('correo', __('Correo Electrónico'), ['class' => 'mb-1'])}}
            {{ Form::text('correo', null, ['class' => 'form-control email', 'id'=> 'correo','placeholder'=>__('Correo Electrónico')]) }} 
          </div>        
          <div class="row g-2 mb-3"> 
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{  Form::label('fecha_nacimiento', __('Fecha Nacimiento'), ['class' => 'required title'])}}    
              {{  Form::text('fecha_nacimiento', '', ['id'=>'fecha_nacimiento','class'=>'form-control required date_in', 'placeholder'=>__('Fecha Nacimiento'), 'readonly' => true ]) }}
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{Form::label('grade', __('Grado a cursar'), ['class' => 'required mb-1'])}}
              {{ Form::text('grade', null, ['class' => 'form-control alpha required', 'id'=> 'grade','placeholder'=>__('Grado'), ]) }}  
            </div>
          </div>
          <div class="row g-2 mb-3">
            {{-- <div class="col-xs-6 col-sm-6 col-md-6 ">
              {{Form::label('operator', __('Número de la Operadora'), ['class' => 'required mb-1'])}}
              {{ Form::select('operator', $defaultCodeOperatorCountries, null, ['class' => 'form-select required', 'id'=> 'operator','placeholder'=>__('Select...')]) }} 
            </div> --}}
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{Form::label('telefono', __('Número Telefónico'), ['class' => 'mb-1'])}}
              {{ Form::text('telefono', null, ['class' => 'form-control number', 'id'=> 'telefono','placeholder'=>__('Número Telefónico'),'minlength'=>'7','maxlength'=>'7']) }}
            </div>
          </div>
          <div class="mb-3">
            {{Form::label('direccion', __('Dirección'), ['class' => 'required mb-1'])}}
            {{ Form::text('direccion', null, ['class' => 'form-control alpha required', 'id'=> 'direccion','placeholder'=>__('Dirección')]) }}
          </div>
          <div class="row g-2 mb-3">
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{Form::label('ocupacion', __('Ocupación'), ['class' => 'required mb-1'])}}
              {{ Form::text('ocupacion', null, ['class' => 'form-control  alpha required', 'id'=> 'ocupacion','placeholder'=>__('Ocupación'),]) }}
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{Form::label('tipo_ocupación', __('Tipo de Ocupación'), ['class' => 'required mb-1'])}}
              {{ Form::text('tipo_ocupación', null, ['class' => 'form-control alpha required', 'id'=> 'tipo_ocupación','placeholder'=>__('Tipo de Ocupación'), ]) }}
            </div>
          </div>
          <div class="mb-3">
            {{Form::label('direccion_ocupación', __('Dirección de Ocupación'), ['class' => 'required mb-1'])}}
            {{ Form::text('direccion_ocupación', null, ['class' => 'form-control alpha required', 'id'=> 'direccion_ocupacion','placeholder'=>__('Dirección de Ocupación')]) }}
          </div>
          {{Form::label('principal_parent', __('¿Representante Principal?'), ['class' => 'form-check-label'])}}  
          <div class="form-check">
            {{ Form::checkbox('principal_parent', 1, false, ['class' => 'form-check-input', 'id'=> 'principal_parent']) }}
            {{Form::label('principal_parent', __('Si'), ['class' => 'form-check-label'])}}
        </div>
        <div class="form-check">
          {{ Form::checkbox('principal_parent', 1, true, ['class' => 'form-check-input', 'id'=> 'principal_parent']) }}
          {{Form::label('principal_parent', __('No'), ['class' => 'form-check-label'])}}
        </div>
          <div class="col-5 mx-auto">
              {{ Form::button(__('Save'), ['class' => 'btn btn-primary save', 'id' => 'save', 'type' => 'submit']) }}
          </div>
        {{ Form::close() }}
      </div>
    </div>
  <div>
</div>