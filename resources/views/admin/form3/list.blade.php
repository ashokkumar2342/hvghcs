<div class="row"> 
<table id="village_wise_list" class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>Village</th>
			<th>Household Covered</th>
			<th>Highrisk Household</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($Form3s as $Form3)
		<tr>
			<td>{{ $Form3->Villages->name_e }}</td>
			<td>{{ $Form3->household_covered }}</td>
			<td>{{ $Form3->household_covered }}</td>
			<td>
			<a href="" title="" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a> 
			<a  select-triger="village_select_box" success-popup="true" onclick="callAjax(this,'{{ route('admin.form3.delete',$Form3->id) }}')" title="" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
			</td>
		</tr> 
		@endforeach
	</tbody>
</table>
</div>