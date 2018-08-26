@extends('layouts.default')
@section('head', 'Production')
@section('heading', 'Daily Input History')

@section('content')
<div class="pull-right">

    <a class="btn btn-success" href="{{ route('miners.index') }}"> Go to Database</a>
    <a class="btn btn-success" href="{{ route('statuss.index') }}"> go to status</a>

</div>
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

        <th width="280px">Action</th>

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
        <td>

            <form action="{{ route('updates.destroy',$update->id) }}" method="POST">


                <a class="btn btn-info" href="{{ route('updates.edit',$update->id) }}">Edit</a>

                            @csrf

            </form>

        </td>

    </tr>

    @endforeach
</tbody>
</table>


{!! $updates->links() !!}

@stop