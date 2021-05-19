<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Edit</h4>
      <button type="button" id="btn_close" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="{{ route('admin.Master.chc_list.store',$CHCList->id) }}" method="post" class="add_form" select-triger="district_select_box" button-click="btn_close">
        {{ csrf_field() }}
        <div class="box-body"> 
        <div class="row">
            <input type="hidden" name="states" value="{{ $CHCList->states_id }}">
            <input type="hidden" name="district" value="{{ $CHCList->districts_id }}"> 
          <div class="form-group col-lg-6">
            <label for="exampleInputEmail1">CHC List Code</label>
            <span class="fa fa-asterisk"></span>
            <input type="text" name="code" class="form-control" placeholder="Enter Code" value="{{ $CHCList->code }}" maxlength="5">
          </div>
          <div class="form-group col-lg-6">
            <label for="exampleInputPassword1">CHC List Name</label>
            <span class="fa fa-asterisk"></span>
            <input type="text" name="name" class="form-control" placeholder="Enter Name (English)" value="{{ $CHCList->name_e }}" maxlength="50">
          </div>
           
           
           
           
        </div>
        </div> 
        <div class="modal-footer justify-content-between">
          <button type="submit" class="btn btn-success">Update</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>

