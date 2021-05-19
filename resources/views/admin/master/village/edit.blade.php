<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Edit</h4>
      <button type="button" id="btn_close" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="{{ route('admin.Master.village.villageUpdate',$village->id) }}" method="post" class="add_form" select-triger="block_select_box" button-click="btn_close">
      {{ csrf_field() }}
      <div class="card-body row"> 
          <div class="col-lg-4 form-group">
              <label for="exampleInputEmail1">Village Code</label>
              <span class="fa fa-asterisk"></span>
              <input type="text" name="code" class="form-control" placeholder="Enter Code" maxlength="5" value="{{ $village->code }}">
          </div>
          <div class="col-lg-4 form-group">
              <label for="exampleInputPassword1">Village Name</label>
              <span class="fa fa-asterisk"></span>
              <input type="text" name="village_name" class="form-control" placeholder="Enter Name (English)" maxlength="50" value="{{ $village->name_e }}">
          </div> 
          <div class="col-lg-4 form-group">
              <label for="exampleInputPassword1">House Holds</label>
               
              <input type="text" name="house_holds" class="form-control" placeholder="Enter House Holds" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $village->house_holds }}">
          </div>
          <div class="col-lg-4 form-group">
              <label for="exampleInputPassword1">Population</label>
               
              <input type="text" name="population" class="form-control" placeholder="Enter Population" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $village->population }}">
          </div>
          <div class="col-lg-4 form-group">
              <label for="exampleInputPassword1">CHC ID</label>
              <span class="fa fa-asterisk"></span>
              <input type="text" name="chc_id" class="form-control" placeholder="Enter CHC ID" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $village->chc_id }}">
          </div>
          <div class="col-lg-4 form-group">
              <label for="exampleInputPassword1">PHC ID</label>
              <span class="fa fa-asterisk"></span>
              <input type="text" name="phc_id" class="form-control" placeholder="Enter PHC ID" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ $village->phc_id }}">
          </div>
         <div class="col-lg-12 text-center form-group">
          <button type="submit" class="btn btn-primary form-control">Update</button>
        </div>
           
        </div>
      </form>
    </div>
  </div>
</div>

