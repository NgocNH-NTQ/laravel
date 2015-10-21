
@extends('layouts.master')
@section('title','List User')
@section('sidebar','Select')
@section('content-name','List User')
@section('content')
    @if (Session::has('message_success'))
        <div class="alert alert-success">{{Session::get('message_success')}}</div>
    @endif
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Order</th>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1 ?>
        @foreach( $aryUsers as $userData)
        <tr>
            <th scope="row">{{ $i }}</th>
            <td>{{$userData['name']}}</td>
            <td>{{$userData['age']}}</td>
            <td>{{$userData['email']}}</td>
            <td>{{$userData['phone']}}</td>
            <td>{{$userData['address']}}</td>
            <td>
                <div class="action-buttons">
                    <a href="{{ $userData['id']}}/edit" data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="{{ $userData['id']}}/delete" class="trash" data-toggle="tooltip" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>
                </div>
            </td>
        </tr>
        <?php $i++; ?>
        @endforeach
        </tbody>
    </table>

    <script type="text/javascript">

        jQuery(document).ready(function($){
            window.setTimeout(function() {
                $("div.alert-success").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove();
                });
            }, 1000);
        });

    </script>


@endsection