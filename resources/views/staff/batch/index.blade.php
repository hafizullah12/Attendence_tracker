@extends('staff.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Batch</div>

                <div class="panel-body">
                    <a class="btn btn-primary pull-right" href="{{ route('staff.batch.create') }}">Add Batch</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Batchs as $Index => $Batch)
                            <tr>
                                <td>{{ $Index + 1 }}</td>
                                <td>{{ $Batch->name }}</td>
                                <td>{{ $Batch->description }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection