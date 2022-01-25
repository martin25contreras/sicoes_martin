<div class="content-table">
    <h3>{{ __('Profiles') }}</h3>

    <a  href="{{route('profiles.create')}}" class="btn btn-primary title new link_ajax" data-dataType="html">{{ __('New') }}</a>
    <div class="table-responsive">
        <table class="dataTable table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>{{__('Profile')}}</th>
                    <th>{{__('Description')}}</th>
                    <th>{{__('Code')}}</th>
                    <th>{{__('Actions')}}</th>
                    <th>{{__('Assign Access Profile')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($profile as $key => $value)
                <tr>
                    <td>{{$value['nombre_perfil']}}</td>
                    <td>{{$value['descripcion']}}</td>
                    <td>{{$value['code']}}</td>
                     @if($value['estatus'] == 1)
                    <td> 
                        <a class="btn btn-moderation edit link_ajax" href="{{route('profiles.edit',$value['crypt_id'])}}" data-dataType="html"><i class="fa fa-pen"></i> {{ __('Edit') }} </a>
                        <a class="btn btn-moderation delete link_ajax" href="{{route('profiles.delete',$value['crypt_id'])}}" data-dataType="json"><i class="fa fa-trash"></i> {{ __('Delete') }} </a>
                    </td>            
                    @else
                    <td> 
                        <a class="btn btn-moderation active link_ajax" href="{{route('profiles.reactivate',$value['crypt_id'])}}" data-dataType="json"><i class="fas fa-history"></i> {{ __('Activate') }} </a>
                    </td>
                    @endif 
                    <td> <a class="btn btn-moderation edit link_ajax" href="{{route('profiles.process',$value['crypt_id'])}}" data-dataType="html"><i class="fa fa-pen"></i> {{ __('Assign Access Profile') }} </a> 
                    </td>          
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


        