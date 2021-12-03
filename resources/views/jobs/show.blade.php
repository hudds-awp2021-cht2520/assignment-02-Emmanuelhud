@extends('layouts.app')

@section('title', 'Showing ' . $job->name)

@section('content')
    <p>{{ $job->location }}</p><br>
    <p>{{ $job->description }}</p>

<br><br><br><br>

<h3>
Rate this product
</h3>

    <form action="{{ route('jobs.store') }}" method="POST">
        @csrf

        <div class=" my-10">
            <label for="rating">Rating:</label>
            <textarea name="rating" id="rating" row="5" class=" p-2 bg-gray-200 @error('rating') is-invalid @enderror"></textarea>

            @error('rating')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class=" my-10">
            <label for="comment">Comment:</label>
            <textarea name="comment" id="location" row="5" class=" p-2 bg-gray-200 @error('comment') is-invalid @enderror"></textarea>

            @error('comment')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

    <p>{{ $rating->location }}</p><br>
    <p>{{ $rating->description }}</p>

    @endsection
