@extends('admin.layout.base')
@section('body')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Pending Village</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right"> 
                </ol>
            </div>
        </div> 
        <div class="card card-info"> 
            <div class="card-body">
                <form action="{{ route('admin.send.pending.village') }}" method="post" class="add_form form-horizontal" accept-charset="utf-8" no-reset="false"> 
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                {{-- {{ Form::label('Date','Date',['class'=>' control-label']) }}                          --}}
                                <div class="form-group">  
                                     <input type="date" name="date" class="form-control"> 
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-4" id="menu_list">
                             <input type="submit" class="form-control btn btn-success">
                        </div>               
                    </div>
                </form>  
            </div> 
        </div>
    </div> 
</section>
@endsection 

