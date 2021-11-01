@extends('layouts.app')

@section('title', 'Edit job')

@section('content')
    <form action="{{ route('jobs.update', $job->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class=" my-10">
            <label for="name">Name:</label>
            <textarea name="name" id="name" row="5" class=" p-2 bg-gray-200 @error('name') is-invalid @enderror"></textarea>

            @error('location')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class=" my-10">
            <label for="location">Location:</label>
            <textarea name="location" id="location" row="5" class=" p-2 bg-gray-200 @error('location') is-invalid @enderror"></textarea>

            @error('location')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class=" my-10">
            <label for="description">Description:</label>
            <textarea name="description" id="description" row="5" class=" p-2 bg-gray-200 @error('description') is-invalid @enderror"></textarea>

            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>>

        <button type="submit" class="btn btn-blue">Update</button>
    </form>
@endsection
