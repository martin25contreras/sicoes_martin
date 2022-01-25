<div class="content-table mb-3">
	<h3>{{ __('Monitoring of Login') }}</h3> 

	<div class="content-space "> 
		{{ Form::open(['id' => 'formlogin', 'class' => 'validate' , 'autocomplete' => 'Off','data-dataType'=>'html']) }}
		<div class="row g-2">
			<div class="col-xs-12 col-sm-12 col-md-3 mb-4">
				{{	Form::label('', __('Date'), ['class' => 'required title'])}}    
				{{	Form::text('date_range', null, ['id'=>'date_range','class'=>'form-control required date_range', 'placeholder'=>__('Date Start'), 'required' => 'required' ]) }}

				{{ Form::hidden('date_in', date('d/m/Y'), ['id'=> 'date_in'])}}
				{{ Form::hidden('date_out', date('d/m/Y'), ['id'=> 'date_out'])}}
			</div>

			<div class="col-xs-11 col-sm-11 col-md-5 te-1 mb-3">
				{{ Form::label('', __('Profiles Users'), ['class' => 'required title'])}}   
				{{ Form::select('user_id', $Users, null,  ['class' => 'form-select select2','placeholder' => __('All Users'), 'id'=> 'user_id'])}}
			</div>

			<div class="col-xs-1 col-sm-1 col-md-1">
				{{ Form::button('<i class="fa fa-search"></i>', ['class' => 'btn btn-primary mt-4', 'id' => 'submit', 'type' => 'submit']) }}
			</div>
		</div>
		{{ Form::close() }}  
	</div>
	<div class="table-responsive">
		<table class="dataTable table" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>N&deg;</th>
					<th>{{__('User')}}</th>
					<th>{{__('Start Date')}}</th>
					<th>{{__('Date End')}}</th>
					<th>{{__('IP')}}</th>
				</tr>
			</thead>
			<tbody>
				@foreach($History as $key => $value)
				<tr>
					<td>{{$key+1}}</td>
					<td>{{$value['full_name']}}</td>
					<td>{{show_full_date($value['fecha_entrada'])}}</td>
					<td>{{show_full_date($value['fecha_salida'])}}</td>
					<td>{{$value['ip']}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
