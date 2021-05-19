@extends('admin.layout.base')
@section('body')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Report</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                
                </ol>
            </div>
        </div> 
        <div class="card card-info"> 
            <div class="card-body">
                <form action="{{ route('admin.report.generate') }}" method="post">
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
                    <div class="col-lg-12 form-group text-center">
                        <input type="submit" class="btn btn-success" value="Report Generate">
                         
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

