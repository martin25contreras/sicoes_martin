<div class="content-table mb-3"> 

	<h3>{{ __('Access Restricteds') }}</h3>

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
	            <div class="form-group floating-label">
					{{ Form::label('', __('Profiles Users'), ['class' => 'required title'])}}   
					{{ Form::select('user_id', $Users, null,  ['class' => 'form-select select2','placeholder' => __('All Users'), 'id'=> 'user_id'])}}
				</div>
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
					<th>{{__('Date')}}</th>
					<th>{{__('IP')}}</th>
					<th>{{__('Module')}}</th>
				</tr>
			</thead>
			<tbody>
				@foreach($History as $key => $value)
				<tr>
					<td>{{$key+1}}</td>
					<td>{{$value['full_name']}}</td>
					<td>{{show_full_date($value['fecha_inicio'])}}</td>
					<td>{{$value['ip']}}</td>
					<td>{{__($value['nombre_proceso'])}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">
 $(document).ready(function() {
	  $('#date_range').on('change', function() {
	  		var date_range = $('#date_range').val();
	  		$('#date_in').val(date_range.substr(0,3)+date_range.substr(3,3)+date_range.substr(6,4));
	  		$('#date_out').val(date_range.substr(13,3)+date_range.substr(16,3)+date_range.substr(19,5));
	  });
 });
 </script>