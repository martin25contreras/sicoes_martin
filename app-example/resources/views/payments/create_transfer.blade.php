
<div class="content-table"> 


  <div class="row">

    <div class="col-md-3">
        <h3 class="left"><i class="fa fa-user"></i>{{ __('Planilla de Inscripción Estudiante') }}</h3> 
    </div>

    <div class="col-md-9">

      <div class="content-space te-0">
        {{-- 
          LOS DATOS BASICOS DEL ESTUDIANTE DEBEN SER SACADOS DE LA BASE DE DATOS
          --}}
        {{ Form::open(['route'=>'payments.store_payment','id'=>'frmStore','autocomplete'=>'Off','class' => 'validate' ]) }}
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
          <div class="row g-2 mb-3">
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{Form::label('grade', __('Grado a cursar'), ['class' => ' mb-1'])}}
              {{ Form::text('grade', null, ['class' => 'form-control alpha ', 'id'=> 'grade','placeholder'=>__('Grado'), ]) }}  
            </div>
          </div>
          <div class="row g-2 mb-3">
            <div class="col-xs-6 col-sm-6 col-md-6 ">
              {{Form::label('meses', __('Meses a Pagar'), ['class' => ' mb-1'])}}
              <div class="form-check">
                {{ Form::checkbox('enero', 1, false, ['class' => 'form-check-input', 'id'=> 'enero']) }}
                {{Form::label('enero', __('Enero'), ['class' => 'form-check-label'])}}
              </div>
              <div class="form-check">
                {{ Form::checkbox('febrero', 1, false, ['class' => 'form-check-input', 'id'=> 'febrero']) }}
                {{Form::label('febrero', __('Febrero'), ['class' => 'form-check-label'])}}
              </div>
              <div class="form-check">
                {{ Form::checkbox('marzo', 1, false, ['class' => 'form-check-input', 'id'=> 'marzo']) }}
                {{Form::label('marzo', __('Marzo'), ['class' => 'form-check-label'])}}
              </div>
              <div class="form-check">
                {{ Form::checkbox('abril', 1, false, ['class' => 'form-check-input', 'id'=> 'abril']) }}
                {{Form::label('abril', __('Abril'), ['class' => 'form-check-label'])}}
              </div>
              <div class="form-check">
                {{ Form::checkbox('mayo', 1, false, ['class' => 'form-check-input', 'id'=> 'mayo']) }}
                {{Form::label('mayo', __('Mayo'), ['class' => 'form-check-label'])}}
              </div>
              <div class="form-check">
                {{ Form::checkbox('junio', 1, false, ['class' => 'form-check-input', 'id'=> 'junio']) }}
                {{Form::label('junio', __('Junio'), ['class' => 'form-check-label'])}}
              </div>
              <div class="form-check">
                {{ Form::checkbox('julio', 1, false, ['class' => 'form-check-input', 'id'=> 'julio']) }}
                {{Form::label('julio', __('Julio'), ['class' => 'form-check-label'])}}
              </div>
              <div class="form-check">
                {{ Form::checkbox('agosto', 1, false, ['class' => 'form-check-input', 'id'=> 'agosto']) }}
                {{Form::label('agosto', __('Agosto'), ['class' => 'form-check-label'])}}
              </div>
              <div class="form-check">
                {{ Form::checkbox('septiembre', 1, false, ['class' => 'form-check-input', 'id'=> 'septiembre']) }}
                {{Form::label('septiembre', __('Septiembre'), ['class' => 'form-check-label'])}}
              </div>
              <div class="form-check">
                {{ Form::checkbox('octubre', 1, false, ['class' => 'form-check-input', 'id'=> 'octubre']) }}
                {{Form::label('octubre', __('Octubre'), ['class' => 'form-check-label'])}}
              </div>
              <div class="form-check">
                {{ Form::checkbox('noviembre', 1, false, ['class' => 'form-check-input', 'id'=> 'noviembre']) }}
                {{Form::label('noviembre', __('Noviembre'), ['class' => 'form-check-label'])}}
              </div>
              <div class="form-check">
                {{ Form::checkbox('diciembre', 1, false, ['class' => 'form-check-input', 'id'=> 'diciembre']) }}
                {{Form::label('diciembre', __('Diciembre'), ['class' => 'form-check-label'])}}
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{Form::label('tipo_pago', __('Tipo de Pago'), ['class' => ' mb-1'])}}
              <div class="form-check">
                {{ Form::checkbox('mensualidad', 1, false, ['class' => 'form-check-input', 'id'=> 'mensualidad']) }}
                {{Form::label('mensualidad', __('Mensualidad'), ['class' => 'form-check-label'])}}
              </div>
              <div class="form-check">
                {{ Form::checkbox('acajo', 1, false, ['class' => 'form-check-input', 'id'=> 'acajo']) }}
                {{Form::label('acajo', __('Acajo'), ['class' => 'form-check-label'])}}
              </div>
            </div>
          </div>
          <div class="row g-2 mb-3">
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{Form::label('numero_referencia', __('Número de Referencia'), ['class' => ' mb-1'])}}
              {{ Form::text('numero_referencia', null, ['class' => 'form-control alpha ', 'id'=> 'numero_referencia','placeholder'=>__('Número de referencia'), ]) }}
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              {{  Form::label('fecha_pago', __('Fecha de Pago'), ['class' => ' title'])}}    
              {{  Form::text('fecha_pago', '', ['id'=>'fecha_pago','class'=>'form-control  date_in', 'placeholder'=>__('Fecha de pago'), 'readonly' => true ]) }}
            </div>
          </div>
          <div class="mb-3">
            {{Form::label('transferencia', __('Imagen de la Transferencia'), ['class' => 'form-check-label'])}}<br>
            <input type="file" name="" id="">
          </div>
          <div class="col-5 mx-auto">
            {{ Form::button(__('Pagar'), ['class' => 'btn btn-primary save', 'id' => 'save', 'type' => 'submit']) }}
          </div>
        {{ Form::close() }}
      </div>
    </div>
  <div>
</div>