@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Detail Student</div>
        <div class="card-body">
          ...
        </div>
      </div>
      <div class="card my-4">
        <div class="card-header">Payments</div>
        <div class="card-body">
          <a class="btn btn-sm btn-success"
            href="{{ route('payments.create', ['student_id' => $student->id]) }}">
            Add Payment
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection