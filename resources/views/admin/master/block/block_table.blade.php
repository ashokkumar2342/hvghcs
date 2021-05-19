<table id="block_datatable" class="table table-striped table-hover">
    <thead>
        <tr>
            <th>States</th>
            <th>District</th>
<<<<<<< HEAD
            <th>Block Code</th>
            <th>Block Name</th> 
=======
            <th>Code</th>
            <th>Name (English)</th>
>>>>>>> 9859879ffb595b76d6b8bc59bb9470889f3fa584
            <th>Action</th>
             
        </tr>
    </thead>
    <tbody>
       @foreach ($BlocksMcs as $BlockMc)
<<<<<<< HEAD
       
=======
>>>>>>> 9859879ffb595b76d6b8bc59bb9470889f3fa584
        <tr>
            <td>{{ $BlockMc->states->name_e or '' }}</td>
            <td>{{ $BlockMc->district->name_e or '' }}</td>
            <td>{{ $BlockMc->code }}</td>
            <td>{{ $BlockMc->name_e }}</td>
<<<<<<< HEAD
            
            <td class="text-nowrap">
                 
=======
            <td class="text-nowrap">
>>>>>>> 9859879ffb595b76d6b8bc59bb9470889f3fa584
                <a onclick="callPopupLarge(this,'{{ route('admin.Master.BlockMCSEdit',$BlockMc->id) }}')" title="" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>
                <a href="{{ route('admin.Master.BlockMCSDelete',Crypt::encrypt($BlockMc->id)) }}" onclick="return confirm('Are you sure you want to delete this item?');"  title="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
            </td>
        </tr> 
       @endforeach
    </tbody>
</table>