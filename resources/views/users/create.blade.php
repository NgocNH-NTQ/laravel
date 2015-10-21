@extends('layouts.master')
@section('title','Create User')
@section('sidebar','Menu Create')
@section('content-name','Create User')
@section('content')
    <div class="col-md-7">
        {!! Form::open(array('url' => 'create', 'class' => 'form-horizontal')) !!}
        <!--<form class="form-horizontal">-->
            <div class="form-group @if ($errors->has('name')) {{ "has-error" }} @endif">
                <label for="inputName" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10 ">
                    <div class="control-group error">
                    <!--<input type="text" class="form-control" id="inputName" placeholder="Name">-->
                    {!!Form::text('name', $userData['name'] ? $userData['name']: '',array('class' => 'form-control', 'placeholder' => 'Name'))!!}
                    </div>
                    @if ($errors->has('name'))
                        <p class="text-danger"> {{$errors->first('name')}} </p>
                    @endif
                </div>
            </div>
            <div class="form-group @if ($errors->has('age')) {{ "has-error" }} @endif">
                <label for="inputAge" class="col-sm-2 control-label">Age</label>
                <div class="col-sm-10">
                    <!--<input type="number" class="form-control" id="inputAge" placeholder="Age" min="1">-->
                    {!! Form::number('age', $userData['age'] ? $userData['age']: '', array('class' =>'form-control', 'placeholder'=>'Age', 'min'=>'1')) !!}
                    @if ($errors->has('age'))
                        <p class="text-danger"> {{$errors->first('age')}} </p>
                    @endif
                </div>
            </div>
            <div class="form-group @if ($errors->has('email')) {{ "has-error" }} @endif">
                <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <!--<input type="email" class="form-control" id="inputEmail" placeholder="Email">-->
                    {!! Form::email('email', $userData['email'] ? $userData['email']: '', array('class' =>'form-control', 'placeholder'=>'Email')) !!}
                    @if ($errors->has('email'))
                        <p class="text-danger"> {{$errors->first('email')}} </p>
                    @endif
                </div>
            </div>
            <div class="form-group @if ($errors->has('phone')) {{ "has-error" }} @endif">
                <label for="inputPhone" class="col-sm-2 control-label">Phone</label>
                <div class="col-sm-10">
                    <!--<input type="text" class="form-control" id="inputPhone" placeholder="Phone">-->
                    {!! Form::text('phone', $userData['phone'] ? $userData['phone']: '', array('class' =>'form-control', 'placeholder'=>'Phone')) !!}
                    @if ($errors->has('phone'))
                        <p class="text-danger"> {{$errors->first('phone')}} </p>
                    @endif
                </div>
            </div>
            <div class="form-group @if ($errors->has('address')) {{ "has-error" }} @endif">
                <label for="inputAddress" class="col-sm-2 control-label">Address</label>
                <div class="col-sm-10">
                    <!--<input type="text" class="form-control" id="inputAddress" placeholder="Address">-->
                    {!! Form::text('address', $userData['address'] ? $userData['address']: '', array('class' =>'form-control', 'placeholder'=>'Address')) !!}
                    @if ($errors->has('address'))
                        <p class="text-danger"> {{$errors->first('address')}} </p>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <!--<button type="submit" class="btn btn-primary">Submit</button>-->
                    {!! Form::submit($userData['id'] ? 'Update': 'Submit', array('class' => 'btn btn-primary')) !!}
                </div>
            </div>
        <!--</form>-->
        {!! Form::close() !!}
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
