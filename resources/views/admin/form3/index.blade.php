@extends('admin.layout.base')
@section('body')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Form3</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                
                </ol>
            </div>
        </div> 
        <div class="card card-info"> 
            <div class="card-body">
                <form action="" method="post" class="add_form">
                {{ csrf_field() }} 
                <div class="row"> 
                    <div class="col-lg-3 form-group">
                    <label for="exampleInputEmail1">States</label>
                    <span class="fa fa-asterisk"></span>
                    <select name="states" id="state_select_box" class="form-control" onchange="callAjax(this,'{{ route('admin.Master.stateWiseDistrict') }}','district_select_box')">
                        <option selected disabled>Select States</option>
                        @foreach ($States as $State)
                        <option value="{{ $State->id }}">{{ $State->code }}--{{ $State->name_e }}</option>  
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-3 form-group">
                    <label for="exampleInputEmail1">District</label>
                    <span class="fa fa-asterisk"></span>
                    <select name="district" class="form-control" id="district_select_box" onchange="callAjax(this,'{{ route('admin.Master.DistrictWiseBlock') }}','block_select_box')">
                        <option selected disabled>Select District</option>
                    </select>
                </div>
                <div class="col-lg-3 form-group">
                    <label for="exampleInputEmail1">Block MCS</label>
                    <span class="fa fa-asterisk"></span>
                    <select name="block" class="form-control select2" id="block_select_box" onchange="callAjax(this,'{{ route('admin.Master.BlockWiseVillage') }}'+'?id='+this.value+'&district_id='+$('#district_select_box').val(),'village_select_box')">
                        <option selected disabled>Select Block MCS</option> 
                    </select>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label for="exampleInputEmail1">Village</label>
                        <span class="fa fa-asterisk"></span>
                        <select name="village" class="form-control select2" id="village_select_box" multiselect-form="true">
                            <option selected disabled>Select Village</option>
                        </select>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>For Date</label>
                        <input type="date" name="for_date" class="form-control">
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>Household Covered</label>
                        <input type="text" name="household_covered" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>Highrisk Household</label>
                        <input type="text" name="highrisk_household" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>Screened M</label>
                        <input type="text" name="screened_m" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>Screened F</label>
                        <input type="text" name="screened_f" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>Screened O</label>
                        <input type="text" name="screened_o" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>ILI Found</label>
                        <input type="text" name="ili_found" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>Contact Ccovid Positive</label>
                        <input type="text" name="contact_covid_positive" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>Home Isolated</label>
                        <input type="text" name="home_isolated" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>Reported VHQ</label>
                        <input type="text" name="reported_vhq" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>Age Less 45</label>
                        <input type="text" name="age_less_45" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>Age More 45</label>
                        <input type="text" name="age_more_45" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>Comorbid DM</label>
                        <input type="text" name="comorbid_dm" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>Comorbid HT</label>
                        <input type="text" name="comorbid_ht" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>Comorbid Lung</label>
                        <input type="text" name="comorbid_lung" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>Comorbid Cancer</label>
                        <input type="text" name="comorbid_cancer" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>Comorbid Others</label>
                        <input type="text" name="comorbid_others" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>Referred Isolation</label>
                        <input type="text" name="referred_isolation" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>Rat Tested</label>
                        <input type="text" name="rat_tested" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>Rat Positive</label>
                        <input type="text" name="rat_positive" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>RTPCR Tested</label>
                        <input type="text" name="rtpcr_tested" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div> 
                    <div class="col-lg-3 form-group">
                        <label>RTPCR Positive</label>
                        <input type="text" name="rtpcr_positive" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>Care Isolation VHQ</label>
                        <input type="text" name="care_isolation_vhq" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="col-lg-3 form-group">
                        <label>Refered Higher VHQ</label>
                        <input type="text" name="refered_higher_vhq" class="form-control" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="col-lg-12 form-group text-center">
                        <input type="submit" class="btn btn-success">
                         
                     </div> 
                </div>
            </form>
            </div> 
        </div>
    </div> 
    </section>
    @endsection
    @push('scripts')
    <script>
        // $('#district_select_box').trigger('change');
        // $('#district_table').DataTable();
    </script>
    @endpush

