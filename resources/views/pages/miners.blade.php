@extends('layouts.default')
@section('head', 'Database')
@section('heading', 'List of Miners')

@section('content')
     
                                <div class="pull-right">

                                        <a class="btn btn-success" href="{{ route('miners.create') }}"> Create New Product</a>
                        
                                    </div>
                                 <table id="datatable" class="table table-striped table-bordered responsive nowrap" style="width:100%">
                                            <thead>
                                        <tr>
                                
                                            <th>No</th>
                                
                                            <th>Mine Name</th>

                                            <th>Owner</th>

                                            <th>Status</th>
                                
                                            <th>Location</th>
                                
                                            <th width="280px">Action</th>
                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Miners as $Miner)
                                
                                        <tr>
                                
                                            <td>{{ ++$i }}</td>
                                
                                            <td>{{ $Miner->mine }}</td>

                                            <td>{{ $Miner->owner }}</td>

                                            <td>{{ $Miner->output }}</td>
                                
                                            <td>{{ $Miner->location }}, <strong>{{ $Miner->district }}, {{ $Miner->province }}</strong></td>
                                
                                            <td>
                                
                                                <form action="{{ route('miners.destroy',$Miner->id) }}" method="POST">
                                
                                
                                                    <a class="btn btn-info" href="{{ route('miners.show',$Miner->id) }}">Show</a>
                                
                                                    <a class="btn btn-primary" href="{{ route('miners.edit',$Miner->id) }}">Edit</a>
                                
                                
                                                    @csrf
                                
                                                    @method('DELETE')
                                
                                
                                
                                
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                
                                                </form>
                                
                                            </td>
                                
                                        </tr>
                                
                                        @endforeach
                                    </tbody>
                                    </table>
                                
                                
                                    {!! $Miners->links() !!}
                                
                                

 @stop
