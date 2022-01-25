
<div class="content-table"> 


  <div class="row">

    <div class="col-md-3">
        <h3 class="left"><i class="fa fa-user"></i>{{ __('Planilla para el Postulante') }}</h3> 
    </div>

    <div class="col-md-9">

      <div class="content-space te-0">

        {{ Form::open(['route'=>'postulant.store','id'=>'frmStore','autocomplete'=>'Off','class' => 'validate' ]) }}
          <div class="form-group mb-2">
          </div>
          {{-- <div class="form-group mb-3 le-0">  
            {{ Form::label('avatar', __('Avatar'), ['class' => '']) }}
            <div class="row mb-3" id="avatars">
              @foreach($AVATARS as $value)
                <img data-value="{{$value}}" style="max-width:50px" alt="avatar" class="img-avatar img-fluid img-thumbnail" src="{{asset('avatar/'.$value)}}"/>
              @endforeach
            </div>
            {{ Form::hidden('avatar', null, ['id'=> 'avatar'])}}
          </div> --}}
          <div class="row g-2 mb-3">
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{Form::label('first_name_student', __('Nombre del Estudiante'), ['class' => 'required mb-1'])}}
              {{ Form::text('first_name_student', null, ['class' => 'form-control  alpha required', 'id'=> 'first_name_student','placeholder'=>__('Nombre del Estudiante'),]) }}
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{Form::label('last_name_student', __('Apellido del Estudiante'), ['class' => 'required mb-1'])}}
              {{ Form::text('last_name_student', null, ['class' => 'form-control alpha required', 'id'=> 'last_name_student','placeholder'=>__('Apellido del Estudiante'), ]) }}  
            </div>
          </div>
          <div class="row g-2 mb-3">
            {{-- <div class="col-xs-6 col-sm-6 col-md-6 ">
              {{Form::label('document_type', __('Type Document'), ['class' => 'mb-1'])}}
              {{ Form::select('document_type', $document_type, null, ['class' => 'form-select ', 'id'=> 'document_type','placeholder'=>__('Select...')]) }}
            </div> --}}
            <div class="col-xs-6 col-sm-6 col-md-6">            
              {{ Form::label('document_type_student', __('Document'), ['class' => 'mb-1'])}}
              {{ Form::text('document_type_student', null, ['class' => 'form-control  number', 'id'=> 'document_type_student','placeholder'=>__('Cédula del estudiante'), 'maxlength'=>'8']) }} 
            </div>
          </div>
          <div class="row g-2 mb-3"> 
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{  Form::label('', __('Fecha Nacimiento'), ['class' => 'required title'])}}    
              {{  Form::text('date_birth', '', ['id'=>'date_birth','class'=>'form-control required date_in', 'placeholder'=>__('Fecha Nacimiento'), 'readonly' => true ]) }}
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{Form::label('grade', __('Grado a postular'), ['class' => 'required mb-1'])}}
              {{ Form::text('grade', null, ['class' => 'form-control alpha required', 'id'=> 'grade','placeholder'=>__('Grado'), ]) }}  
            </div>
          </div>
          <div class="row g-2 mb-3">
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{Form::label('first_name_parent', __('Nombre del Representante'), ['class' => 'required mb-1'])}}
              {{ Form::text('first_name_parent', null, ['class' => 'form-control  alpha required', 'id'=> 'first_name_parent','placeholder'=>__('Nombre del Representante'),]) }}
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{Form::label('last_name_parent', __('Apellido del Representante'), ['class' => 'required mb-1'])}}
              {{ Form::text('last_name_parent', null, ['class' => 'form-control alpha required', 'id'=> 'last_name_parent','placeholder'=>__('Apellido del Representante'), ]) }}  
            </div>
          </div>
          <div class="row g-2 mb-3">
            {{-- <div class="col-xs-6 col-sm-6 col-md-6 ">
              {{Form::label('document_type', __('Type Document'), ['class' => 'required mb-1'])}}
              {{ Form::select('document_type', $document_type, null, ['class' => 'required form-select ', 'id'=> 'document_type','placeholder'=>__('Select...')]) }}
            </div> --}}
            <div class="col-xs-6 col-sm-6 col-md-6">            
              {{ Form::label('document_type_parent', __('Documento del Padre'), ['class' => 'required mb-1'])}}
              {{ Form::text('document_type_parent', null, ['class' => 'form-control number required', 'id'=> 'document_type_parent','placeholder'=>__('Document'), 'maxlength'=>'8']) }} 
            </div>
          </div>
          <div class="row g-2 mb-3">
            {{-- <div class="col-xs-6 col-sm-6 col-md-6 ">
              {{Form::label('operator', __('Número de la Operadora'), ['class' => 'required mb-1'])}}
              {{ Form::select('operator', $defaultCodeOperatorCountries, null, ['class' => 'form-select required', 'id'=> 'operator','placeholder'=>__('Select...')]) }} 
            </div> --}}
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{Form::label('phone', __('Número Telefónico'), ['class' => 'required mb-1'])}}
              {{ Form::text('phone', null, ['class' => 'form-control number required', 'id'=> 'phone','placeholder'=>__('Número Telefónico'),'minlength'=>'7','maxlength'=>'7']) }}
            </div>
          </div>
          <div class="mb-3">
            {{Form::label('email', __('Correo Electrónico'), ['class' => 'required mb-1'])}}
            {{ Form::text('email', null, ['class' => 'form-control email required', 'id'=> 'email','placeholder'=>__('Correo Electrónico')]) }} 
          </div>        
          <div class="mb-3">
            {{Form::label('address', __('Dirección'), ['class' => 'required mb-1'])}}
            {{ Form::text('address', null, ['class' => 'form-control alpha required', 'id'=> 'address','placeholder'=>__('Dirección')]) }}
          </div>
          <div class="col-5 mx-auto">
              {{ Form::button(__('Save'), ['class' => 'btn btn-primary save', 'id' => 'save', 'type' => 'submit']) }}
          </div>
          {{-- 
            FALTA COLOCAR UN INPUT DE TIPO FILE PARA LOS ARCHIVOS  --}}
        {{ Form::close() }}
      </div>
    </div>
  <div>
</div>