<table id="block_datatable" class="table table-striped table-hover">
    <thead>
        <tr>
            <th>States</th>
            <th>District</th>
            <th>CHC List Code</th>
            <th>CHC List Name</th> 
            <th>Action</th>
             
        </tr>
    </thead>
    <tbody>
       @foreach ($CHCLists as $CHCList)
       
        <tr>
            <td>{{ $CHCList->states->name_e or '' }}</td>
            <td>{{ $CHCList->district->name_e or '' }}</td>
            <td>{{ $CHCList->code }}</td>
            <td>{{ $CHCList->name_e }}</td>
            
            <td class="text-nowrap">
                 
                <a onclick="callPopupLarge(this,'{{ route('admin.Master.chc_list.edit',$CHCList->id) }}')" title="" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>
                <a href="{{ route('admin.Master.BlockMCSDelete',Crypt::encrypt($CHCList->id)) }}" onclick="return confirm('Are you sure you want to delete this item?');"  title="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
            </td>
        </tr> 
       @endforeach
    </tbody>
</table>