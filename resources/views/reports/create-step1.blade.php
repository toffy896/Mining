@extends('layouts.default')
@section('head', 'Multi')
@section('heading', 'Form')

@section('content')
<h1>Create Report - Step 1</h1>
    <hr>
    <form action="{{ route('report_1p') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Report Name</label>
            <input type="text" value="{{{ $report->name or '' }}}" class="form-control" id="taskTitle"  name="name">
        </div>

        

 >

                    <fieldset>
                            <div class="control-group">
                              <div class="controls">
                                <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                                  <input type="text" class="form-control has-feedback-left" id="single_cal2" value="{{{ $report->start_date or '' }}}" name="start_date" aria-describedby="inputSuccess2Status2">
                                  <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                  <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                                </div>
                              </div>
                            </div>
                          </fieldset>

                          <fieldset>
                                <div class="control-group">
                                  <div class="controls">
                                    <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left" id="single_cal1"  aria-describedby="inputSuccess2Status" value="{{{ $report->end_date or '' }}}" name="end_date" >
                                      <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                      <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                    </div>
                                  </div>
                                </div>
                              </fieldset>
                 


        <div class="form-group">
            <label for="description">Mine Name</label>
            <select class="form-control" name="mine">
                <option {{{ (isset($report->mine) && $report->mine == 'Apple') ? "selected=\"selected\"" : "" }}}>Boss Bob</option>
                <option {{{ (isset($report->mine) && $report->mine == 'Google') ? "selected=\"selected\"" : "" }}}>Joy</option>
                <option {{{ (isset($report->mine) && $report->mine == 'Mi') ? "selected=\"selected\"" : "" }}}>Filabusi</option>
                <option {{{ (isset($report->mine) && $report->mine == 'Samsung') ? "selected=\"selected\"" : "" }}}>Samsung</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description">Type of report</label><br/>
            <label class="radio-inline"><input type="radio" name="type" value="1" {{{ (isset($report->type) && $report->type == '1') ? "checked" : "" }}}> Weekly</label>
            <label class="radio-inline"><input type="radio" name="type" value="0" {{{ (isset($report->type) && $report->type == '0') ? "checked" : "" }}}> Monthly</label>
        </div>

        <div class="form-group">
                <label for="description">Author</label>
                <select class="form-control" name="author">
                    <option>{{ Auth::user()->name }}</option>
                </select>
            </div>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Next Step</button>
    </form>

@stop