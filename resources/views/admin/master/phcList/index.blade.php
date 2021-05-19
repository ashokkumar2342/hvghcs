@extends('admin.layout.base')
@section('body')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Add PHC List</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right"> 
                </ol>
            </div>
        </div> 
        <div class="card card-info"> 
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12"> 
                            <form action="{{ route('admin.Master.phc.list.store') }}" method="post" class="add_form" no-reset="true" select-triger="chc_list_select_box"  reset-input-text="">
                                {{ csrf_field() }} 
                                    <div class="row"> 
                                    <div class="col-lg-4 form-group">
                                        <label for="exampleInputEmail1">States</label>
                                        <span class="fa fa-asterisk"></span>
                                        <select name="states" class="form-control"  onchange="callAjax(this,'{{ route('admin.Master.stateWiseDistrict') }}','district_select_box')">
                                            <option selected disabled>Select States</option>
                                            @foreach ($States as $State)
                                            <option value="{{ $State->id }}">{{ $State->code }}--{{ $State->name_e }}</option>  
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label for="exampleInputEmail1">District</label>
                                        <span class="fa fa-asterisk"></span>
                                        <select name="district" class="form-control" id="district_select_box" data-table="block_datatable" onchange="callAjax(this,'{{ route('admin.Master.dis.chc.list') }}'+'?district_id='+$('#district_select_box').val(),'chc_list_select_box')">
                                            <option selected disabled>Select District</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label for="exampleInputEmail1">CHC List</label>
                                        <span class="fa fa-asterisk"></span>
                                        <select name="chc_list" class="form-control" id="chc_list_select_box" data-table="phc_datatable" onchange="callAjax(this,'{{ route('admin.Master.phc.list.table') }}','phc_list')">
                                            <option selected disabled>Select Block MCS</option>
                                             
                                        </select>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="exampleInputEmail1">PHC List Code</label>
                                        <span class="fa fa-asterisk"></span>
                                        <input type="text" name="code" id="code" class="form-control" placeholder="Enter Code" maxlength="5">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="exampleInputPassword1">PHC List Name</label>
                                        <span class="fa fa-asterisk"></span>
                                        <input type="text" name="name" id="name_english" class="form-control" placeholder="Enter Name" maxlength="50">
                                    </div> 
                                </div> 
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form> 
                    </div>
                    <div class="col-lg-12">
                        <div class="card card-primary table-responsive" id="phc_list"> 
                             <table id="" class="table table-striped table-hover control-label">
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
                                    
                                 </tbody>
                             </table>
                        </div> 
                    </div> 
                 
            </div> 
        </div> 
    </section>
    @endsection
    @push('scripts')
    <script type="text/javascript">
        $('#btn_click_by_form').click();
         
    </script>
    @endpush 

