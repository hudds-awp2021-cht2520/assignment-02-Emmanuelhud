@extends('layouts.app')

@section('title', 'Latest Jobs')

@section('content')
    @foreach ($latestJobs as $job)
        <article>
            <h3><a href="{{ route('jobs.show', $job->id) }}">{{ $job->user->name }}</a></h3>

            <p>{{ $job->comments }}</p>
        </article>
    @endforeach
@endsection

