@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Edit Class</div>
        <div class="card-body">
          @if (session('successMessage'))
            <div class="alert alert-success">
              {{ session('successMessage') }}
            </div>
          @endif
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <form method="POST"
            action="{{ route('student-classes.update', $studentClass->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group row">
              <label for="name"
                class="col-md-4 col-form-label text-md-right">
                Name
              </label>
              <div class="col-md-6">
                <input
                  type="text"
                  class="form-control
                  @error('name') is-invalid @enderror"
                  id="name"
                  name="name"
                  value="{{ old('name', $studentClass->name) }}"
                  required
                  placeholder="ex. RPL-1">
                @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="major"
                class="col-md-4 col-form-label text-md-right">
                Major
              </label>
              <div class="col-md-6">
                <input
                  type="text"
                  class="form-control
                  @error('major') is-invalid @enderror"
                  id="major"
                  name="major"
                  value="{{ old('major', $studentClass->major) }}"
                  required
                  placeholder="ex. Rekayasa Perangkat Lunak">
                @error('major')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  Submit
                </button>
                <a class="btn btn-outline-secondary"
                  href="{{ route('student-classes.index') }}">
                  Back
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection