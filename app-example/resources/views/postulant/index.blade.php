<div class="content-table">
    <div class="leyend-data">Bienvenidos a la página de Creación de Postulantes</div>
    <div class="col-md-9">

        <div class="content-space te-0">

            {{ Form::open(['route'=>'postulant.create','id'=>'frmCreate','autocomplete'=>'Off', 'class' => 'validate' ]) }}
            <div class="row">
                  <div class="col-mx-12 col-sm-12 col-md-6 mb-3">
                      {{ Form::label('cantidad_cupos', __('Cantidad de cupos para habilitar'), ['class' => 'required mb-1'])}}
                      {{ Form::text('cantidad_cupos', null, ['class' => 'form-control  required', 'id'=> 'cantidad_cupos','placeholder'=>__('Cantidad de cupos'),'maxlength'=>'3']) }}       
                  </div>      

                <div class="col-5 mx-auto">
                  <a class="btn btn-secondary back link_ajax" data-dataType="html" href="{{route('users-new-ingreso')}}"> {{ __('Back') }} </a>

                  {{ Form::button(__('Save'), [ 'id' => 'save','class' => 'btn btn-primary save', 'type' => 'submit']) }}
                </div>
            </div>
            
            {{ Form::close() }} 

        </div>

    </div>
</div>
