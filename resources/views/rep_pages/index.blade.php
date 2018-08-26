@extends('layouts.default')
@section('head', 'Report')
@section('heading', 'Choose Report')

@section('content')
<div class="row">

        <div class="col-lg-12 margin-tb">
    
            <div class="pull-right">
    
                <a class="btn btn-primary" href="{{ route('reports.index') }}"> Back </a>
    
            </div>
    
        </div>
    
    </div>
    
    <form action="{{ route('reports.create') }}" method="GET">
    
        @csrf
    
    
         <div class="row">
    
            <div class="col-xs-12 col-sm-12 col-md-12">
    
                <div class="form-group">
                    
                        {{-- <label class="col-xs-12 col-sm-12 col-md-12"for="mine"><strong> Agency:</strong></label>
                        {{-- <input type="text" name="province" class="form-control" placeholder="e.g Mat South"> --}}
                        {{-- <select class="form-control col-md-7 col-xs-12" name="mine" id="mine">
    
                                            @foreach($reports as $report)
                              <option value="{{ $reports->id }}">{{ $reports->mine }}</option>
                            @endforeach
                          </select> --}} 
    
                    
    
                </div>
    
            </div>
    
        </div>
@stop