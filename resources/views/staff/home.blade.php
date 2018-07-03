@extends('staff.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>Departments</h4>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="{{ route('staff.department.index') }}">List Departments</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('staff.department.create') }}">Add Department</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <h4>Batch</h4>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="{{ route('staff.batch.index') }}">List Batch</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('staff.batch.create') }}">Add Batch</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4>Semister</h4>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="{{ route('staff.semister.index') }}">List Semister</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('staff.semister.create') }}">Add Semister</a>
                                </li>
                        </ul>
                        </div>
                        <div class="col-md-4">
                            <h4>Students</h4>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="{{ route('staff.student.index') }}">List Students</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('staff.student.create') }}">Add Student</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4>Attendance</h4>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="{{ route('staff.attendance.create') }}">Take Attendance</a>
                                    </li>
                                    <li class="list-group-item">
                                    <a href="{{ route('staff.attendance.create') }}">view Attendance</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
