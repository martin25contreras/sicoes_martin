
<div class="content-table"> 


  <div class="row">

    <div class="col-md-3">
        <h3 class="left"><i class="fa fa-user"></i>{{ __('Pagos por Caja') }}</h3> 
    </div>

    <div class="col-md-9">

      <div class="content-space te-0">

        {{ Form::open(['route'=>'payments.create_payment','id'=>'frmStore','autocomplete'=>'Off','class' => 'validate' ]) }}
          <div class="form-group mb-2">
          </div>
          <div class="row g-2 mb-3">
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{Form::label('primer_nombre', __('Primer Nombre del Estudiante'), ['class' => ' mb-1'])}}
              {{ Form::text('primer_nombre', null, ['class' => 'form-control  alpha ', 'id'=> 'primer_nombre','placeholder'=>__('Primer nombre del Estudiante'),]) }}
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{Form::label('segundo_nombre', __('Segundo Nombre del Estudiante'), ['class' => ' mb-1'])}}
              {{ Form::text('segundo_nombre', null, ['class' => 'form-control alpha ', 'id'=> 'second_name_student','placeholder'=>__('Segundo nombre del Estudiante'), ]) }}  
            </div>
          </div>
          <div class="row g-2 mb-3">
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{Form::label('primer_apellido', __('Primer Apellido del Estudiante'), ['class' => ' mb-1'])}}
              {{ Form::text('primer_apellido', null, ['class' => 'form-control  alpha ', 'id'=> 'primer_apellido','placeholder'=>__('Primer Apellido del Estudiante'),]) }}
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{Form::label('segundo_apellido', __('Segundo Apellido del Estudiante'), ['class' => ' mb-1'])}}
              {{ Form::text('segundo_apellido', null, ['class' => 'form-control alpha ', 'id'=> 'segundo_apellido','placeholder'=>__('Segundo Apellido del Estudiante'), ]) }}
            </div>
          </div>
          <div class="col-5 mx-auto">
              {{ Form::button(__('Buscar'), ['class' => 'btn btn-primary search', 'id' => 'save', 'type' => 'submit']) }}
          </div>
        {{ Form::close() }}
      </div>
    </div>
  <div>
</div>