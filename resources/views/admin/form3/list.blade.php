<div class="row"> 
<table id="village_wise_list" class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>Date</th>
			<th>Household Covered</th>
			<th>Highrisk Household</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($Form3s as $Form3)
		<tr>
			<td>{{ date('d-m-Y',strtotime($Form3->fordate)) }}</td>
			<td>{{ $Form3->household_covered }}</td>
			<td>{{ $Form3->household_covered }}</td>
			<td>
			<a onclick="callPopupLarge(this,'{{ route('admin.form3.edit',$Form3->id) }}')" title="Edit" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a> 
			<a  select-triger="village_select_box" success-popup="true" onclick="callAjax(this,'{{ route('admin.form3.delete',$Form3->id) }}')" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
			</td>
		</tr> 
		@endforeach
	</tbody>
</table>
</div>