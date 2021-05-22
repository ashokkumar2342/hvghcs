<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Edit</h4>
      <button type="button" id="btn_close" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="{{ route('admin.form3.store',$Form3->id) }}" method="post" class="add_form" select-triger="village_select_box">
        {{ csrf_field() }}
        <div class="box-body">
        <div class="card card-info row">
                        <div class="card-header">
                        <h3 class="card-title" style="font-size: 14px">Total No. Of Persons</h3> 
                        </div>
                        <div class="row">
                            <input type="hidden" name="states" value="{{ $Form3->states_id }}">       
                            <input type="hidden" name="district" value="{{ $Form3->districts_id }}">       
                            <input type="hidden" name="block" value="{{ $Form3->blocks_id }}">       
                            <input type="hidden" name="village" value="{{ $Form3->village_id }}">  
                            <div class="col-lg-4 form-group">
                                <label>For Date</label>
                                <span class="fa fa-asterisk"></span>
                                <input type="date" name="for_date" class="form-control" value="{{ $Form3->fordate }}">
                            </div>
                            <div class="col-lg-4 form-group">
                                <label>Household Covered</label>
                                <span class="fa fa-asterisk"></span>
                                <input type="text" name="household_covered" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->household_covered }}">
                            </div>
                            <div class="col-lg-4 form-group">
                                <label>Highrisk Household</label>
                                <span class="fa fa-asterisk"></span>
                                <input type="text" name="highrisk_household" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->highrisk_household }}">
                            </div>
                        </div>
                    </div>
                    <div class="card card-info row">
                        <div class="card-header">
                        <h3 class="card-title" style="font-size: 14px">Total No. Of Persons</h3> 
                        </div>
                        <div class="row">
                            <div class="col-lg-4 form-group">
                                <label>Screened M</label>
                                <input type="text" name="screened_m" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->screened_m }}">
                            </div>
                            <div class="col-lg-4 form-group">
                                <label>Screened F</label>
                                <input type="text" name="screened_f" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->screened_f }}">
                            </div>
                            <div class="col-lg-4 form-group">
                                <label>Screened O</label>
                                <input type="text" name="screened_o" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->screened_o }}">
                            </div>
                        </div>
                    </div>
                    <div class="card card-info row">
                        <div class="card-header">
                        <h3 class="card-title" style="font-size: 14px">Total No. Of Persons</h3> 
                        </div>
                        <div class="row">
                            <div class="col-lg-2 form-group">
                                <label>Comorbid DM</label>
                                <input type="text" name="comorbid_dm" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->comorbid_dm }}">
                            </div>
                            <div class="col-lg-2 form-group">
                                <label>Comorbid HT</label>
                                <input type="text" name="comorbid_ht" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->comorbid_ht }}">
                            </div>
                            <div class="col-lg-2 form-group">
                                <label>Comorbid Lung</label>
                                <input type="text" name="comorbid_lung" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->comorbid_lung }}">
                            </div>
                            <div class="col-lg-2 form-group">
                                <label>Comorbid Cancer</label>
                                <input type="text" name="comorbid_cancer" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->comorbid_cancer }}">
                            </div>
                            <div class="col-lg-4 form-group">
                                <label>Comorbid Others</label>
                                <input type="text" name="comorbid_others" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->fordate }}">
                            </div>
                        </div>
                    </div>
                    <div class="card card-info row">
                        <div class="card-header">
                        <h3 class="card-title" style="font-size: 14px">Total No. Of Persons</h3> 
                        </div>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label>Age Less 45</label>
                                <input type="text" name="age_less_45" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->age_less45 }}">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Age More 45</label>
                                <input type="text" name="age_more_45" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->age_more45 }}">
                            </div>
                        </div>
                    </div> 
                    <div class="card card-info row">
                        <div class="card-header">
                        <h3 class="card-title" style="font-size: 14px">Total No. Of Persons</h3> 
                        </div>
                        <div class="row">
                            <div class="col-lg-3 form-group">
                                <label>ILI Found</label>
                                <input type="text" name="ili_found" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->ili_found }}">
                            </div>
                            <div class="col-lg-3 form-group">
                                <label>Contact Ccovid Positive</label>
                                <input type="text" name="contact_covid_positive" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->contact_covid_positive }}">
                            </div>
                            <div class="col-lg-3 form-group">
                                <label>Home Isolated</label>
                                <input type="text" name="home_isolated" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->home_isolated }}">
                            </div>
                            <div class="col-lg-3 form-group">
                                <label>Reported VHQ</label>
                                <input type="text" name="reported_vhq" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->reported_vhq }}">
                            </div>
                            
                            
                            <div class="col-lg-3 form-group">
                                <label>Referred Isolation</label>
                                <input type="text" name="referred_isolation" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->referred_isolation }}">
                            </div>
                            <div class="col-lg-3 form-group">
                                <label>Rat Tested</label>
                                <input type="text" name="rat_tested" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->rat_tested }}">
                            </div>
                            <div class="col-lg-3 form-group">
                                <label>Rat Positive</label>
                                <input type="text" name="rat_positive" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->rat_positive }}">
                            </div>
                            <div class="col-lg-3 form-group">
                                <label>RTPCR Tested</label>
                                <input type="text" name="rtpcr_tested" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->rtpcr_tested }}">
                            </div> 
                            <div class="col-lg-4 form-group">
                                <label>RTPCR Positive</label>
                                <input type="text" name="rtpcr_positive" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->rtpcr_positive }}">
                            </div>
                            <div class="col-lg-4 form-group">
                                <label>Care Isolation VHQ</label>
                                <input type="text" name="care_isolation_vhq" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->care_isolation_vhq }}">
                            </div>
                            <div class="col-lg-4 form-group">
                                <label>Refered Higher VHQ</label>
                                <input type="text" name="refered_higher_vhq" class="form-control" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $Form3->refered_higher_vhq }}">
                            </div>
                        </div>
                    </div> 
          <div class="box-footer text-center" style="margin-top: 30px">
            <button type="submit" class="btn btn-primary form-control">Update</button>
          </div>
      </form>
    </div>
  </div>
</div>

