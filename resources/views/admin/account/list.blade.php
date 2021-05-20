@extends('admin.layout.base')
@section('body')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>List Users</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right"> 
                </ol>
            </div>
        </div> 
        <div class="card card-info">
          <div class="card-body"> 
            <a hidden data-table="user_list" id="btn_user_list" onclick="callAjax(this,'{{ route('admin.account.user.list') }}','user_list_table')" title="">aaa</a>
            <div id="user_list_table">
              
            </div>
          </div>
        </div>
    </div>     
    </section>
    @endsection
@push('links')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
@endpush
@push('scripts')
 <script type="text/javascript" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript">
     $(document).ready(function(){
        $('#dataTable').DataTable();
        $('#btn_user_list').click();
    }); 
</script> 
   
@endpush