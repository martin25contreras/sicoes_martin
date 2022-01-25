<div class="table-responsive">
    <table class="dataTable table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>{{__('Nombre del Estudiante')}}</th>
                <th>{{__('Grado')}}</th>
                <th>{{__('Nombre del Representante')}}</th>
                <th>{{__('Correo')}}</th>
                <th>{{__('Número de teléfono')}}</th>
                <th>{{__('Estatus')}}</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($arrayPostulant as $key => $value)
            <tr>
                <td><img style="max-width:50px" alt="avatar" class="img-fluid img-thumbnail" src="{{asset('avatar/'.$value['avatar'])}}" /></td>
                <td>{{$value['nombre_usuario'].' '.$value['apellido_usuario']}}</td>
                <td>{{$value['email']}}</td>
                <td>{{$value['password_decrypt']}}</td>
            </tr>
            @endforeach --}}
        </tbody>
    </table>
</div>