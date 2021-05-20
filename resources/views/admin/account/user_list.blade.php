
<table id="user_list" class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th>Sr.No.</th> 
      <th>Name</th>
      <th>Mobile</th> 
      <th>Role</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @php
    $arrayId=1;

    @endphp
    @foreach($accounts as $account)
{{-- @if ($account->id==1)
@continue
@endif --}}
<tr>
  <td>{{ $arrayId ++ }}</td>
  <input type="hidden" name="user_id[]" value="{{ $account->id }}"> 
  <td>{{ $account->first_name }} {{ $account->last_name}}</td>
  <td>{{ $account->mobile }}</td> 

  <td>{{ $account->name or '' }}</td>
  <td>
    <a  button-click="btn_user_list" success-popup="true" onclick="callAjax(this,'{{ route('admin.account.send.sms',Crypt::encrypt($account->id)) }}')" title="Send SMS" class="btn btn-primary btn-xs" style="color:#fff">Send SMS</a>
  </td>
{{-- <td>

<a href="{{ route('admin.account.r_status',$account->id) }}" data-parent="tr" class="label {{ ($account->r_status == 1) ?'btn-success':'btn-danger'}} btn btn-xs">{{ ($account->r_status == 1)? 'A' : 'D' }}</a>
<a href="{{ route('admin.account.w_status',$account->id) }}" data-parent="tr" class="label {{ ($account->w_status == 1) ?'btn-success':'btn-danger'}} btn btn-xs">{{ ($account->w_status == 1)? 'A' : 'D' }}</a>
<a href="{{ route('admin.account.d_status',$account->id) }}" data-parent="tr" class="label {{ ($account->d_status == 1) ?'btn-success':'btn-danger'}} btn btn-xs">{{ ($account->d_status == 1)? 'A' : 'D' }}</a>

</td> --}}
{{-- <td> --}}
{{--  <a href="{{ route('admin.account.status',$account->id) }}" data-parent="tr" class="label {{ ($account->status == 1) ?'btn-success':'btn-danger'}} btn btn-xs">{{ ($account->status == 1)? 'Active' : 'Inactive' }}</a>
</td>  
<td>

<a class="btn btn-info btn-xs"  onclick="callPopupLarge(this,'{{ route('admin.account.minu',[$account->id]) }}')"><i class="fa fa-bars"></i></a>

</td>                
<td> 

@if(App\Helper\MyFuncs::menuPermission()->r_status == 1)
<a href="#" onclick="callPopupLarge(this,'{{ route('admin.account.edit',[$account->id]) }}')" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
@endif

@if(App\Helper\MyFuncs::menuPermission()->d_status == 1)

<a  href="{{ route('admin.account.delete',Crypt::encrypt($account->id)) }}" onclick="return confirm('Are you sure to delete this data ?')"  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>

@endif --}}
{{-- </td> --}}
</tr> 
@endforeach
</tbody>
</table>
