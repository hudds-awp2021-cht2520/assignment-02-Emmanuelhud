@extends('layouts.app')


@section('title', 'All of our Available Jobs')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    @section('content')
    <form action="{{ route('jobs.index') }}" method="GET">
        @csrf

        <div class=" my-10">
            <label for="search">Search</label>
            <input name="search" id="search" class=" p-2 bg-gray-200 @error('search') is-invalid @enderror" />

            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-blue">Search</button>
    </form>

    @foreach ($jobs as $job)
        <article>
            <h3><a href="{{ route('jobs.show', $job->id) }}">{{ $job->name }}</a></h3>

            <p>{{ $job->description }}</p>

            <p>
                Up votes: {{ $job->up_votes }}<br>
                Down votes: {{ $job->down_votes }}
            </p>
            
            <form action="{{ route('jobs.upvote', $job->id) }}" method="POST">
                @csrf
                
                <button type="submit" class="btn">Up Vote</button>
            </form>
            
            <form action="{{ route('jobs.downvote', $job->id) }}" method="POST">
                @csrf

                <button type="submit" class="btn">Down Vote</a>
            </form>


            @if (Auth::user() && Auth::user()->id === $job->user_id)
                <form action="{{ route('jobs.destroy', $job->id) }}" method="POST">
                    <a class="btn btn-blue" href="{{ route('jobs.show', $job->id) }}">Show</a>
                    <a class="btn btn-blue" href="{{ route('jobs.edit', $job->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-red">Delete</button>
                </form>
            @endif
        </article>
        
    @endforeach


    
@endsection
