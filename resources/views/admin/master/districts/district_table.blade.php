<table id="district_datatable" class="table table-striped table-hover control-label">
    <thead>
        <tr>
            <th>States</th>
<<<<<<< HEAD
            <th>Districts Code</th>
            <th>Districts Name</th> 
=======
            <th>Code</th>
            <th>Name (English)</th>
>>>>>>> 9859879ffb595b76d6b8bc59bb9470889f3fa584
            <th>Action</th>
             
        </tr>
    </thead>
    <tbody> 
@foreach ($Districts as $District)
<<<<<<< HEAD
 
=======
>>>>>>> 9859879ffb595b76d6b8bc59bb9470889f3fa584
 <tr>
     <td>{{ $District->states->name_e or '' }}</td>
     <td>{{ $District->code }}</td>
     <td>{{ $District->name_e }}</td>
<<<<<<< HEAD
      
     <td class="text-nowrap">
          
=======
     <td class="text-nowrap">
>>>>>>> 9859879ffb595b76d6b8bc59bb9470889f3fa584
         <a onclick="callPopupLarge(this,'{{ route('admin.Master.districtsEdit',$District->id) }}')" title="" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>
         <a href="{{ route('admin.Master.districtsDelete',Crypt::encrypt($District->id)) }}" onclick="return confirm('Are you sure you want to delete this item?');"  title="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
     </td>
 </tr> 
@endforeach
</tbody>
</table>