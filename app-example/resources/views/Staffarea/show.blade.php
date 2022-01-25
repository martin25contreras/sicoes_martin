{{-- @extends('layouts.plantilla')

@section('title', 'Create Asignacion')

@section('content') --}}
<div class="content-table"> 

    <div class="row">

        <div class="col-md-3">
            <h3 class="left"><i class="fa fa-id-badge"></i>{{__('Crear Asignación')}} </h3> 
        </div>

        <div class="col-md-9">

            <div class="content-space te-0">
                <?php
                    $c = 0;

                    $asignadasArray = [];
                    $index = 0;
                    foreach ($staffarea as $item) {
                        $asignadasArray[$index] = $item->area_id;
                        $index++;
                    }
                ?>

                <div class="leyend-data">En esta pagina podrás registar al personal de la institución</div>
                {{ Form::open(['route'=>'staff_area.asigne','id'=>'frmAsigne','autocomplete'=>'Off', 'class' => 'validate' ]) }}

{{-- 
    <form action="{{ route('Staffarea.asigne') }}" method="post"> 
        @csrf
 --}}
                <div class="row">
        

                    @foreach ($staff as $item)                    
                       <p>Docente: <strong> {{ $item->nombres }} {{ $item->apellidos }} </strong> </p>
                       <p>Cédula: <strong> {{ $item->cedula }} </strong> 
                        <input type="text" name="cedula" value="{{ $item->cedula }}" hidden></p>
                       <p>Cargo: <strong> {{ $item->cargo }}  </strong> </p>
                    @endforeach
        
                    <h2> {{$error}} </h2>
        
            {{-- <h3>Seleccione al Docente para Asignar un área de formación</h3> --}}
                    <div class="leyend-data">Seleccione al Docente para Asignar un área de formación</div>

                    <label for="">Área de Formación: <br> 
                        @foreach ($area as $item)
                            <?php
                                $cont = 0;
                                for ($i=0; $i < count($asignadasArray); $i++) {
                                    if ($asignadasArray[$i] == $item->id) {
                                        $cont++;
                                        $c++;
                                    }
                                }
                                if ($cont == 0) {
                                    ?>
                                <label for="">
                                    <input type="checkbox" name="array[]" id="" value="{{ $item->id }}"> {{ $item->nombre}} - {{ $item->grado}}{{ $item->seccion}}
                                </label>
                            <?php
                                    $c++;
                                }
                                if ($c%3 ==0) {
                                    echo "<br>";
                                }
                            ?>
                        @endforeach
                    </label><br><br> 
                    <div class="col-5 mx-auto">
                        <a class="btn btn-secondary back link_ajax" data-dataType="html" href="{{route('staff_area')}}"> {{ __('Back') }} </a>

                        {{ Form::button(__('Save'), [ 'id' => 'save','class' => 'btn btn-primary save', 'type' => 'submit']) }}
                    </div>
                
                {{ Form::close() }} 
        
            </div>

        </div>

    </div>

</div>
{{-- @endsection --}}
