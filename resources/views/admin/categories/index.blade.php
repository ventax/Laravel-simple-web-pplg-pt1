@extends('admin.dashboard')
@section('content')
    <h1>Category</h1>
    <form action="{{ url('admin/category') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">Title</label>
            <input type="text" name="Title" class="form-control">
        </div>
    </form>
    <div class="mb-3">
        <label for="">Description</label>
        <textarea class="form-control" name="description" rows="5"></textarea>
    </div>
    <button class="btn btn-primary">Save</button>
    {{-- <button class="btn btn-primary">Andreano Gaming</button> --}}
@endsection
