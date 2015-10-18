
@extends('layouts.master')
@section('title','List User')
@section('sidebar','Select')
@section('content-name','List User')
@section('content')
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
        <tr>
            <th scope="row">1</th>
            <td>Mark Jackson</td>
            <td>24</td>
            <td>mackjackson@gmail.com</td>
            <td>0987865462</td>
            <td>New York, USA</td>
            <td>
                <div class="action-buttons">
                    <a href="{{asset('/create')}}" data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="#" class="trash" data-toggle="tooltip" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>
                </div>
            </td>
        </tr>

        </tbody>
    </table>


@endsection