@extends('layouts.master')
@section('title','Create User')
@section('sidebar','Menu Create')
@section('content-name','Create User')
@section('content')
    <div class="col-md-7">
        <form class="form-horizontal">
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" placeholder="Name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAge" class="col-sm-2 control-label">Age</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputAge" placeholder="Age" min="1">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPhone" class="col-sm-2 control-label">Phone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPhone" placeholder="Phone">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress" class="col-sm-2 control-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputAddress" placeholder="Address">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <div class="col-md-5">
        <div class="panel panel-info">
            <div class="panel-heading">Read me</div>
            <div class="panel-body">
                <ol>
                    <li>Fill all Field</li>
                    <li>Click submit to add new user</li>
                </ol>
            </div>
        </div>
    </div>

@endsection
