@extends('layouts.app')

@section('title', 'All of our Available Jobs')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    @foreach ($jobs as $job)
        <article>
            <h3><a href="{{ route('jobs.show', $job->id) }}">{{ $job->name }}</a></h3>

            <p>{{ $job->description }}</p>

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


    {{ $jobs->links() }}
@endsection
