@extends('dashboard.layouts.main')


@section('main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>{{ $course->title }}</h1>
        <div class="d-grid gap-2 d-flex">
            <a href="{{ route('courses.index') }}" class="btn btn-sm btn-warning">
                <i class="ti ti-arrow-back-up"></i> Back
            </a>
            <a href="{{ route('courses.index') }}" class="btn btn-sm btn-primary">
                <i class="ti ti-edit"></i> Edit
            </a>
            <a href="{{ route('courses.index') }}" class="btn btn-sm btn-danger">
                <i class="ti ti-trash"></i> Delete
            </a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                {!! $course->body !!}
            </div>
        </div>
    </div>
@endsection
