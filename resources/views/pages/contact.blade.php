@extends('layouts.default')
@section('head', 'Database')
@section('heading', 'Edit Miner Details')
@section('content')
<div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('miners.index') }}"> Back</a>

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


    <form action="{{ route('miners.update',$Miner->id) }}" method="POST">

        @csrf

        @method('PUT')


         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">
    
                        <strong>Mine Name:</strong>
    
                        <input type="text" name="mine" value="{{ $Miner->mine }}"class="form-control" placeholder="e.g Dhliwayo Mine">
    
                    </div>
    
                </div>
    
            
        
                    <div class="col-xs-12 col-sm-12 col-md-12">
        
                            <div class="form-group">
            
                                <strong>Mine Registration Number:</strong>
            
                                <input type="text" name="reg" value="{{ $Miner->reg }}" class="form-control" placeholder="e.g 34A111">
            
                            </div>
            
                        </div>
        
                        <div class="col-xs-12 col-sm-12 col-md-12">
        
                                <div class="form-group">
                
                                    <strong> Location :</strong>
                
                                    <input type="text" name="location" value="{{ $Miner->location }}" class="form-control" placeholder="e.g 20 km from OK">
                
                                </div>
                
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
        
                                    <div class="form-group">
                    
                                        <strong> District:</strong>
                    
                                        <input type="text" name="district" value="{{ $Miner->district }}"class="form-control" placeholder="e.g Bubi">
                    
                                    </div>
                    
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
        
                                        <div class="form-group">
                        
                                            
                        
                                            <label class="col-xs-12 col-sm-12 col-md-12"for="province"><strong> Province:</strong></label>
                                            {{-- <input type="text" name="province" class="form-control" placeholder="e.g Mat South"> --}}
                                            <select class="form-control col-md-7 col-xs-12" name="province" id="province">
                                                    <option value="{{ $Miner->province }}" selected>{{ $Miner->province }}</option>
                                                    <option value="Mat South" >Matebeleland South</option>
                                                    <option value="Mat North" >Matebeleland North</option>
                                                    <option value="Midlands" >Midlands</option>
                                                    <option value="Byo" >Bulawayo</option>
                                                    <option value="Manica" >Manicaland</option>
                                                    <option value="Mash East" >Mashonaland East</option>
                                                    <option value="Mash West" >Mashonaland West</option>
                                                    <option value="Masvingo" >Masvingo</option>
                                                    <option value="Mash Central" >Mashonaland Central</option>
                                                    <option value="Hre" >Harare</option>
                                                    
                                                </select>
                                        </div>
                        
                                    </div>
        
                        <div class="col-xs-12 col-sm-12 col-md-12">
        
                                <div class="form-group">
                
                                    <strong>Mine Owner:</strong>
                
                                    <input type="text" name="owner" value="{{ $Miner->owner }}"class="form-control" placeholder="e.g John Dhlamini">
                
                                </div>
                
                            </div>
        
                          
        
                                <div class="col-xs-12 col-sm-12 col-md-12">
        
                                        <div class="form-group">
                        
                                            <strong>Contact Person:</strong>
                        
                                            <input type="text" name="contact" value="{{ $Miner->contact }}"class="form-control" placeholder="e.g John Doe">
                        
                                        </div>
                        
                                    </div>
        
                                    <div class="col-xs-12 col-sm-12 col-md-12">
        
                                            <div class="form-group">
                            
                                                <strong>Contact's Number:</strong>
                            
                                                <input type="text" name="number" value="{{ $Miner->number }}"class="form-control" placeholder="e.g 782698947">
                            
                                            </div>
                            
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
        
                                                <div class="form-group">
                                
                                                    <strong>Contact's Email:</strong>
                                
                                                    <input type="text" name="email" value="{{ $Miner->email }}"class="form-control" placeholder="e.g jdlamini@email.com">
                                
                                                </div>
                                
                                            </div>
        
                                            <div class="col-xs-12 col-sm-12 col-md-12">
        
                                                    <div class="form-group">
                                    
                                                        <label class="col-xs-12 col-sm-12 col-md-12"for="type"><strong> Type: </strong></label>
                                                        {{-- <input type="text" name="type" class="form-control" placeholder="e.g Company"> --}}
                                                        <select class="form-control col-md-7 col-xs-12" name="type" id="type">
                                                                <option value="{{ $Miner->type }}" selected>{{ $Miner->type }}</option>
                                                                <option value="Individual" >Individual</option>
                                                                <option value="Syndicate" >Syndicate</option>
                                                                <option value="Comapny" >Company</option>
                                                                <option value="Tribute" >Tribute</option>
                                                            </select>
                                    
                                                    </div>
                                    
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
        
                                                        <div class="form-group">
                                        
                                                            <strong>Status:</strong>
                                        
                                                            <input type="text" name="output" value="{{ $Miner->output }}"class="form-control" placeholder=" e.g VatLeach Installed">
                                        
                                                        </div>
                                        
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
        
                                                            <div class="form-group">
                                            
                                                                <strong>File No:</strong>
                                            
                                                                <input type="text" name="fileno" value="{{ $Miner->fileno }}" class="form-control" placeholder="e.g SSMS-333">
                                            
                                                            </div>
                                            
                                                        </div>
        
    
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    
                        <button type="submit" class="btn btn-primary">Submit</button>
    
                </div>
        </div>


    </form>



@stop