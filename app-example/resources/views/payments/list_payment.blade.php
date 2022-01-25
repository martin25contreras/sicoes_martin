<div class="table-responsive">
    <table class="dataTable table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>{{__('Nombre del Estudiante')}}</th>
                <th>{{__('Grado')}}</th>
                <th>{{__('Sección')}}</th>
                <th>{{__('Pagar')}}</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($dataEstudiante as $key => $value)
            <tr>
                <td><img style="max-width:50px" alt="avatar" class="img-fluid img-thumbnail" src="{{asset('avatar/'.$value['avatar'])}}" /></td>
                <td>{{$value['nombre_usuario'].' '.$value['apellido_usuario']}}</td>
                <td>{{$value['email']}}</td>
                <td>{{$value['password_decrypt']}}</td>
            </tr>
            @endforeach --}}
            {{ Form::open(['route'=>'payments.store','id'=>'frmStore','autocomplete'=>'Off','class' => 'validate' ]) }}
            <tr>
                <td>Martiín</td>
                <td>Primero</td>
                <td>A</td>
                <td>
                    {{ Form::button(__('Pagar'), ['class' => 'btn btn-primary next', 'id' => 'save', 'type' => 'submit']) }}
                </td>
            </tr>
            {{ Form::close() }}
        </tbody>
    </table>
</div>