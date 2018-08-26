@extends('layouts.default')
@section('head', 'Multi')
@section('heading', 'Form')

@section('content')

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table id="datatable" class="table table-striped table-bordered responsive nowrap" style="width:100%">
        <thead>
        <tr>
            <th >#</th>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Company</th>
            <th>Amount</th>
            <th>Available</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->company}}</td>
                <td>{{$product->amount}}</td>
                <td>{{$product->available ? 'Yes' : 'No'}}</td>
                <td><a href="{{ route('pdf',$product->id) }}">PDF</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop