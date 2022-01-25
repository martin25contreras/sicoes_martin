<div class="content-table">
    <h3>{{ __('Assign Access Profile') }}</h3> 

    <div class="content-space">
            <strong>{{ Form::label('avatar', __('Selected in Process : '), ['class' => '']) }}</strong>

        <div class="row">

            <div class="col-md-3">

                <ul class="nav nav-tabs nav-justified" id="pills-tab" role="tablist">
                    @foreach($menu as $key => $value)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link {{($key==0 ? 'active':'' )}}" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#menu{{$value['id']}}" type="button" role="tab" aria-controls="pills-home" aria-selected="true">{{__($value['nombre_menu'])}}</button>
                        </li>
                   @endforeach
                </ul>
            </div>

            <div class="col-md-9">

                <div class="bodytable mb-3">
                    {!! Form::open(array('action'=>'ProfileProcessController@store', 'method'=>'post', "class"=>"validate")) !!}
                        {{ Form::hidden('profile_id', $profile_id2) }}
                    <div class="tab-content body-size" id="pills-tabContent">
                        @foreach($menu as $key => $value)
                            <div class="tab-pane fade show {{($key==0 ? 'active':'' )}}" id="menu{{$value['id']}}" role="tabpanel" aria-labelledby="pills-home-tab">
                                <table class="">
                                    <thead>
                                       <tr>
                                            <th scope='col'>{{ Form::checkbox('select_all', 1, false, ['class' => 'form-check-input', 'id'=> 'select_all', 'onClick' => "selectAll(this, '$key')"])}}</th>

                                            <th>{{__('Name')}}</th>
                                            <th>{{__('Description')}}</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($value['process'] as $key2 => $value2)
                                       
                                            <tr>                                            
                                                <td>{{ Form::checkbox('special_permission[]', $value2['crypt_id'], (in_array($profile_id, $value2['profile_array'])) , ['class' => 'form-check-input check_'.$key]) }} </td>

                                                <td>{{__($value2['nombre_proceso'])}}</td>
                                                <td>{{__($value2['descripcion'])}}</td>
                                            </tr>
                                        @endforeach
                                   </tbody>
                                </table>
                           </div>
                        @endforeach
                        
                    </div>
                    <div class="col-5 mx-auto">  
                            <a class="btn btn-secondary back link_ajax" data-dataType="html" href="{{route('profiles')}}"> {{ __('Back') }} </a>
                            {{ Form::button('<i class="fa fa-save"></i> '.__('Save'), ['class' => 'btn btn-primary', 'type' => 'submit']) }}
                        </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>  
    </div>
</div>

<script type="text/javascript">
    function selectAll(obj,value)
    {
        if($(obj).prop("checked") == true){
            $("input.check_"+value).prop("checked", true);
        }else{
            $("input.check_"+value).prop("checked", false);
        }
    }
</script>