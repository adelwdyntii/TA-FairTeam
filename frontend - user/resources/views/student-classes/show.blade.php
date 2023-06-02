@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Detail Class</div>
                <div class="card-body"> ... </div>
            </div>
            <div class="card my-4">
                <div class="card-header">Students</div>
                <div class="card-body">
                    @php
                        $students = $studentClass->students;
                    @endphp
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th></th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($students))
                                @php
                                    $no =1;
                                @endphp
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-outline-secondary"
                                             href="{{ route('students.show',$student->id) }}">
                                            View</a>
                                            <a class="btn btn-sm btn-success"
                                             href="{{ route('payments.create',['student_id'=>$student->id]) }}">
                                            Add Payment</a>
                                        </td>
                                        <td>{{ $student->user->name}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="99">No Data</td>
                                </tr>   
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection