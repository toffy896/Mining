@extends('layouts.default')
@section('head', 'Production')
@section('heading', 'Prodution status')

@section('content')
<div class="pull-right">

        <a class="btn btn-success" href="{{ route('miners.index') }}"> Go to Database</a>
        <a class="btn btn-info" href="{{ route('updates.index') }}">Production History</a>
        <a class="btn btn-primary" href="{{ route('updates.create') }}">Daily input</a>

    </div>
 <table id="datatable" class="table table-striped table-bordered responsive nowrap" style="width:100%">
            <thead>
        <tr>

            <th>No</th>

            <th>Mine Name</th>

            <th>Shift 1 Milled Tons</th>

            <th>Shift 2 Milled Tons</th>

            <th>Bullion Gross</th>
            <th>Percentage</th>
            <th>Bullion Fine</th>
            <th>Last updated</th>


        </tr>
    </thead>
    <tbody>
        @foreach ($statuss as $status)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $status->mine }}</td>

            <td>{{ $status->s1milled }}</td>

            <td>{{ $status->s2milled }}</td>
            <td>{{ $status->bgross }}</td>

            <td>{{ $status->percent }}</td>

            <td>{{ $status->bfine }}</td>

            <td>{{ $status->updated_at }}</td>



        </tr>

        @endforeach
    </tbody>
    </table>


    {!! $statuss->links() !!}

@stop