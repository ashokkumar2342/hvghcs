<table id="phc_datatable" class="table table-striped table-hover">
    <thead>
        <tr>
            <th>States</th>
            <th>District</th>
            <th>CHC List</th>
            <th>PHC List Code</th>
            <th>PHC List Name</th> 
            <th>Action</th>
             
        </tr>
    </thead>
    <tbody>
       @foreach ($PHCLists as $PHCList)
       
        <tr>
            <td>{{ $PHCList->states->name_e or '' }}</td>
            <td>{{ $PHCList->district->name_e or '' }}</td>
            <td>{{ $PHCList->CHCList->name_e or '' }}</td>
            <td>{{ $PHCList->code }}</td>
            <td>{{ $PHCList->name_e }}</td>
            
            <td class="text-nowrap">
                 
                <a onclick="callPopupLarge(this,'{{ route('admin.Master.phc.list.edit',$PHCList->id) }}')" title="" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>
                <a href="{{ route('admin.Master.BlockMCSDelete',Crypt::encrypt($PHCList->id)) }}" onclick="return confirm('Are you sure you want to delete this item?');"  title="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
            </td>
        </tr> 
       @endforeach
    </tbody>
</table>