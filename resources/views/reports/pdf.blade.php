@extends('layouts.default')
@section('head', 'Multi')
@section('heading', 'Form')

@section('content')

<div class="container">

    <div class="col-sm-4 ">
            SSMS
            <address>
                            <strong>Small Scale Mining Supplies</strong>
                            <br>6 Cowden Road
                            <br>SteelDale
                            <br>Bulawayo
                            <br>Zimbabwe
                        </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 ">
            GG
            <address>
                            <strong>Head Office</strong>
                            <br>5 Luton Street            
                            <br>Belmont
                            <br>Bulawayo
                            <br>Zimbabwe
                        </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 ">
            <b>Report {{$product->id}} </b>
            <br>
            
            <b>Tel:</b> +263 9 67326
            <br>
            <b>Email:</b> admin@ssms.co.zw
            <br>
            
        </div>
        <!-- /.col -->
  
    </div>

    <div class="container"> 
            <table class="table table-bordered responsive nowrap" style="width:100%">
                    <tr>
                        <td><i class="fa fa-calendar"></i>&nbsp;
                            <span>Date Range</span> {{$product->amount}} <i class="fa fa-caret-down"></i></td>
                        <td><strong>Mine Name</strong> {{$product->company}}</td>
                    </tr>
                    </div>

            <div class="container">         
<table id="datatable" class="table table-striped table-bordered responsive nowrap" style="width:100%">
    <tr>
        <td>Product Name:</td>
        <td><strong>{{$product->name}}</strong></td>
    </tr>
    <tr>
        <td>Product Amount:</td>
        <td><strong>{{$product->amount}}</strong></td>
    </tr>
    <tr>
        <td>Product Company:</td>
        <td><strong>{{$product->company}}</strong></td>
    </tr>
    <tr>
        <td>Product Available:</td>
        <td><strong>{{$product->available ? 'Yes' : 'No'}}</strong></td>
    </tr>
    <tr>
        <td>Product Description:</td>
        <td><strong>{{$product->description}}</strong></td>
    </tr>
    <tr>
        <td>Product Image:</td>
        <td><strong><img alt="Product Image" src="/storage/productimg/{{$product->productImg}}"/></strong></td>
    </tr>
</table>  
</div> 
@stop