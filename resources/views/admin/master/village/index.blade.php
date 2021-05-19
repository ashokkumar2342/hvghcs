@extends('admin.layout.base')
@section('body')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Add Village</h3>
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
                            <form action="{{ route('admin.Master.village.store') }}" method="post" class="add_form" select-triger="block_select_box" no-reset="true" button-click="btn_click_by_form">
                                {{ csrf_field() }} 
                                    <div class="row"> 
                                    <div class="col-lg-4 form-group">
                                        <label for="exampleInputEmail1">States</label>
                                        <span class="fa fa-asterisk"></span>
                                        <select name="states" id="state_select_box" class="form-control" onchange="callAjax(this,'{{ route('admin.Master.stateWiseDistrict') }}','district_select_box')">
                                            <option selected disabled>Select States</option>
                                            @foreach ($States as $State)
                                            <option value="{{ $State->id }}">{{ $State->code }}--{{ $State->name_e }}</option>  
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label for="exampleInputEmail1">District</label>
                                        <span class="fa fa-asterisk"></span>
                                        <select name="district" class="form-control" id="district_select_box" onchange="callAjax(this,'{{ route('admin.Master.DistrictWiseBlock') }}','block_select_box')">
                                            <option selected disabled>Select District</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label for="exampleInputEmail1">Block MCS</label>
                                        <span class="fa fa-asterisk"></span>
                                        <select name="block_mcs" class="form-control" id="block_select_box" data-table="district_table" onchange="callAjax(this,'{{ route('admin.Master.villageTable') }}','village_table')">
                                            <option selected disabled>Select Block MCS</option>
                                             
                                        </select>
                                    </div> 
                                    <div class="col-lg-4 form-group">
                                        <label for="exampleInputEmail1">Village Code</label>
                                        <span class="fa fa-asterisk"></span>
                                        <input type="text" name="code" class="form-control" placeholder="Enter Code" maxlength="5">
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label for="exampleInputPassword1">Village Name</label>
                                        <span class="fa fa-asterisk"></span>
                                        <input type="text" name="village_name" class="form-control" placeholder="Enter Name" maxlength="50">
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label for="exampleInputPassword1">House Holds</label>
                                         
                                        <input type="text" name="house_holds" class="form-control" placeholder="Enter House Holds" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label for="exampleInputPassword1">Population</label>
                                         
                                        <input type="text" name="population" class="form-control" placeholder="Enter Population" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label for="exampleInputPassword1">CHC ID</label>
                                        <span class="fa fa-asterisk"></span>
                                        <input type="text" name="chc_id" class="form-control" placeholder="Enter CHC ID" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label for="exampleInputPassword1">PHC ID</label>
                                        <span class="fa fa-asterisk"></span>
                                        <input type="text" name="phc_id" class="form-control" placeholder="Enter PHC ID" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                    </div>
                                     
                                     
                                </div> 
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-primary ">Submit</button>
                                </div>
                            </form> 
                    </div>
                    <div class="col-lg-12" id="village_table">
                        <div class="card card-primary table-responsive"> 
                            <table id="village_table" class="table table-striped table-hover control-label">
                                <thead>
                                    <tr>
                                        <th class="text-nowrap">States</th>
                                         <th class="text-nowrap">District</th>
                                         <th class="text-nowrap">Block MCS</th>
                                         <th class="text-nowrap">Village Code</th>
                                         <th class="text-nowrap">Village Name</th>
                                         <th class="text-nowrap">House Holds</th>
                                         <th class="text-nowrap">Population</th>
                                         <th class="text-nowrap">CHC ID</th>
                                         <th class="text-nowrap">PHC ID</th>

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

