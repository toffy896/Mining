@extends('layouts.default')
@section('head', 'Database')
@section('heading', 'Show Details')
@section('content')

    <div class="row">

            <div class="col-lg-12 margin-tb">



                <div class="pull-right">

                    <a class="btn btn-primary" href="{{ route('miners.index') }}"> Back</a>
                    <a class="btn btn-primary" href="{{ route('miners.edit',$Miner->id) }}">Edit</a>

                </div>

            </div>

        </div>


        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Mine Name:</strong>

                    {{ $Miner->mine }}

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">
    
                        <strong>Mine Registration Number:</strong>
    
                        {{ $Miner->reg }}
    
                    </div>
    
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">
        
                            <strong> Location :</strong>
        
                            {{ $Miner->location }}, {{ $Miner->district }}, {{ $Miner->province }}
        
                        </div>
        
                    </div>

                <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">
        
                            <strong>Mine Owner:</strong>
        
                            {{ $Miner->owner }}
        
                        </div>
        
                    </div>

                  

                        <div class="col-xs-12 col-sm-12 col-md-12">

                                <div class="form-group">
                
                                    <strong>Contact Person:</strong>
                
                                    {{ $Miner->contact }}
                
                                </div>
                
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">

                                    <div class="form-group">
                    
                                        <strong>Contacts's Number:</strong>
                    
                                        {{ $Miner->number }}
                    
                                    </div>
                    
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">

                                        <div class="form-group">
                        
                                            <strong>Contacts's Email:</strong>
                        
                                            {{ $Miner->email }}
                        
                                        </div>
                        
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                            <div class="form-group">
                            
                                                <strong>Type:</strong>
                            
                                                {{ $Miner->type }}
                            
                                            </div>
                            
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">

                                                <div class="form-group">
                                
                                                    <strong>Status:</strong>
                                
                                                    {{ $Miner->output }}
                                
                                                </div>
                                
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">

                                                    <div class="form-group">
                                    
                                                        <strong>File No:</strong>
                                    
                                                        {{ $Miner->fileno }}
                                    
                                                    </div>
                                    
                                                </div>

            

        </div>
@endsection
