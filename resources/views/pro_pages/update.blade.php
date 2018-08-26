@extends('layouts.default')
@section('head', 'Production')
@section('heading', 'Daily Input History Update')

@section('content')
<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('updates.index') }}"> Back </a>

        </div>

    </div>

</div>


@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif


<form action="{{ route('updates.update' ,$update->id) }}" method="POST">

    @csrf

    @method('PUT')

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Mine Name:</strong>

                <input type="text" name="mine" value="{{ $update->mine }}"  class="form-control" >

            </div>

        </div>

    

            <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">
    
                        <strong>Mine Registration Number:</strong>
    
                        <input type="text" name="reg" value="{{ $update->reg }}" class="form-control" >
    
                    </div>
    
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">
        
                            <strong> Shift 1 Milled Tons :</strong>
        
                            <input type="text" name="s1milled" value="{{ $update->s1milled }}" class="form-control" >
        
                        </div>
        
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">
        
                            <strong> Shift 2 Milled Tons :</strong>
        
                            <input type="text" name="s2milled" value="{{ $update->s2milled }}"class="form-control" >
        
                        </div>
        
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">
        
                            <strong>Bullion Gross:</strong>
        
                            <input type="text" name="bgross" value="{{ $update->bgross }}" class="form-control" >
        
                        </div>
        
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">
        
                            <strong>Percentage:</strong>
        
                            <input type="text" name="percent" value="{{ $update->percent }}" class="form-control" >
        
                        </div>
        
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">
        
                            <strong>Bullion Fine:</strong>
        
                            <input type="text" name="bfine" value="{{ $update->bfine }}" class="form-control" >
        
                        </div>
        
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">
        
                            <strong>Receipt Number:</strong>
        
                            <input type="text" name="receipt" value="{{ $update->receipt }}" class="form-control" >
        
                        </div>
        
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">
        
                            
        
                            <label class="col-xs-12 col-sm-12 col-md-12"for="agency"><strong> Agency:</strong></label>
                            {{-- <input type="text" name="province" class="form-control" placeholder="e.g Mat South"> --}}
                            <select class="form-control col-md-7 col-xs-12" name="agency" value="{{ $update->agency }}" id="agency">
                                    <option value="" selected>Select</option>
                                    <option value="FPR" >FPR</option>
                                    <option value="Corner" >Corner</option>
                                   
                                    
                                </select>
                        </div>
        
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">
        
                            
        
                            <label class="col-xs-12 col-sm-12 col-md-12"for="status"><strong> Production:</strong></label>
                            {{-- <input type="text" name="province" class="form-control" placeholder="e.g Mat South"> --}}
                            <select class="form-control col-md-7 col-xs-12" name="status" value="{{ $update->status }}" id="status">
                                    <option value="" selected>Select</option>
                                    <option value="Yes" >Yes</option>
                                    <option value="No" >No</option>
                                    <option value="Ceased" >Ceased</option>
                                   
                                    
                                </select>
                        </div>
        
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">
        
                            <strong>Amount:</strong>
        
                            <input type="text" name="amount" value="{{ $update->amount }}" class="form-control" >
        
                        </div>
        
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">
        
                            <strong>Gold sold:</strong>
        
                            <input type="text" name="goldsold" value="{{ $update->goldsold }}"  class="form-control" >
        
                        </div>
        
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">

                            <div class="form-group">
            
                                <strong> Comment:</strong>
            
                                <input type="text" name="comment" value="{{ $update->comment }}" class="form-control" placeholder="e.g Bubi">
            
                            </div>
            
                        </div>
                       


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>


</form>

@stop