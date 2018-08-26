@extends('layouts.default')
@section('head', 'Multi')
@section('heading', 'Form')

@section('content')
<h1>Add New Product - Step 2</h1>
<hr>

    <table id="datatable" class="table table-striped table-bordered responsive nowrap" style="width:100%">
            <thead>
        <tr>
    
            <th>No</th>
    
            <th>Mine Name</th>
    
            <th>Mine Reg</th>
    
            <th>Shift 1 Milled Tons</th>
    
            <th>Shift 2 Milled Tons</th>
    
            <th>Bullion Gross</th>
            <th>Percentage</th>
            <th>Bullion Fine</th>
            <th> Receipt</th>
            <th>Agency</th>
            <th>Status</th>
            <th> Amount for gold sold</th>
            <th>Gold Sold</th>
            <th>Comment</th>   
        </tr>
    </thead>
    <tbody>
        @foreach ($updates as $update)
    
        <tr>
    
            <td>{{ ++$i }}</td>
    
            <td>{{ $update->mine }}</td>
    
            <td>{{ $update->reg }}</td>
    
            <td>{{ $update->s1milled }}</td>
    
            <td>{{ $update->s2milled }}</td>
            <td>{{ $update->bgross }}</td>
    
            <td>{{ $update->percent }}</td>
    
            <td>{{ $update->bfine }}</td>
    
            <td>{{ $update->receipt }}</td>
            <td>{{ $update->agency }}</td>
            <td>{{ $update->status }}</td>
            <td>{{ $update->amount }}</td>
            <td>{{ $update->goldsold }}</td>
            <td>{{ $update->comment }}</td>
           
    
        </tr>
    
        @endforeach
    </tbody>
    </table> --}}
{!! $updates->links() !!} 
   
    <form action="{{ route('report_2p') }}" method="post">
      {{ csrf_field() }}
      

          <textarea name="editor1" id="editor1" rows="10" cols="80">
              This is my textarea to be replaced with CKEditor.
          </textarea>
          <script>
              // Replace the <textarea id="editor1"> with a CKEditor
              // instance, using default configuration.
              CKEDITOR.replace( 'editor1' );
          </script>
      

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
</div>
@stop
