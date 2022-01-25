<div class="content-table">
    <h3>{{ __('Users') }}</h3>

    <a  href="{{route('users.create')}}" class="btn btn-primary title new link_ajax" data-dataType="html">{{ __('New') }}</a>
    <div class="table-responsive">
        <table class="dataTable table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>{{__('Avatar')}}</th>
                    <th>{{__('Full Name')}}</th>
                    <th>{{__('Profile')}}</th>
                    <th>{{__('E-mail')}}</th>
                    <th>{{__('Actions')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $key => $value)
                <tr>
                    <td><img style="max-width:50px" alt="avatar" class="img-fluid img-thumbnail" src="{{asset('avatar/'.$value['avatar'])}}" /></td>
                    <td>{{$value['nombre_usuario'].' '.$value['apellido_usuario']}}</td>
                    <td>{{$value['profile']['nombre_perfil']}}</td>
                    <td>{{$value['email']}}</td>
        			
                    @if($value['bloqueado'] == 0)
                        @if($value['id'] == Auth::user()->id)  
                        <td> 
                            <a class="btn btn-moderation edit link_ajax" data-dataType = "html" href="{{route('users.edit',$value['crypt_id'])}}"><i class="fa fa-pen"></i> {{ __('Edit') }} </a>                    
                        </td>
                        @else             
                        <td> 
                            <a class="btn btn-moderation edit link_ajax" data-dataType = "html" href="{{route('users.edit',$value['crypt_id'])}}"><i class="fa fa-pen"></i> {{ __('Edit') }} </a>

                            <a class="btn btn-moderation delete link_ajax" data-dataType = "json" href="{{route('users.lock_user',$value['crypt_id'])}}"><i class="fas fa-lock"></i> {{ __('Lock') }} </a>

                            <a class="btn btn-moderation edit link_ajax" data-dataType = "json" href="{{route('users.reset_password',$value['crypt_id'])}}"><i class="fas fa-history"></i> {{ __('Reset Password') }} </a>
                        </td> 
                        @endif           
                    @else
                    <td> 
                        <a class="btn btn-moderation active link_ajax" data-dataType = "json" href="{{route('users.unlock_user',$value['crypt_id'])}}"><i class="fas fa-lock-open"></i> {{ __('Unlock') }} </a>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>