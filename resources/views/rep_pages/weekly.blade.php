@extends('layouts.default')
@section('head', 'Report')
@section('heading', 'Weekly Report')

@section('content')



    <div class="pull-right">

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
                    <b>Report </b>
                    <br>
                    <br>
                    <b>Tel:</b> +263 9 67326
                    <br>
                    <b>Email:</b> admin@ssms.co.zw
                    <br>
                    
                </div>
                <!-- /.col -->
          
            </div>
            
                <div class="col-sm-4 ">
                                  
                            <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                                    <i class="fa fa-calendar"></i>&nbsp;
                                    <span>Date Range</span> <i class="fa fa-caret-down"></i>
                                </div> 
                            </div>        
        
                <div class="col-sm-4 ">
                    <label class="col-xs-12 col-sm-12 col-md-12"for="mine"><strong> For Mine:</strong></label>
                    <select class="form-control col-md-7 col-xs-12" name="mine" id="status">
                            <option value="" selected>Select</option>
                            <option value="Boss Bob" >Boss Bob</option>
                            <option value="Joy" >Joy</option>
                        
                </div>   
        

       
        
     {{-- <table id="datatable" class="table table-striped table-bordered responsive nowrap" style="width:100%">
            <thead>
                    <tr>
        
                    
                        <th>Mine Name</th>
        
                        <th>Shift 1 Milled Tons</th>
        
                        <th>Shift 2 Milled Tons</th>
        
                        <th>Bullion Gross</th>
                        <th>Percentage</th>
                        <th>Bullion Fine</th>
                        <th> Receipt</th>
                        <th>Agency</th>
                        <th>Comment</th>
        
        
        
                    </tr>
                </thead>
        
                @for($i = 0; $i < count($reports); $i++)
                <tbody>
                    <tr>
                
                        
                        <td>{{ $reports[$i]->mine }}</td>
                
                        <td>{{ $reports[$i]->s1milled }}</td>
                
                        <td>{{ $reports[$i]->s2milled }}</td>
                        <td>{{ $reports[$i]->bgross }}</td>
                
                        <td>{{ $reports[$i]->percent }}</td>
                
                        <td>{{ $reports[$i]->bfine }}</td>
                
                        <td>{{ $reports[$i]->receipt }}</td>
                        <td>{{ $reports[$i]->agency }}</td>
                        <td>{{ $reports[$i]->status }}</td>
                    
                        <td>{{ $reports[$i]->comment }}</td>
                    </tr>
                </tbody>
                @endfor
        </table> --}}
    
    
       
    

            

        

@stop