@extends('layouts.app')

@section('title', 'Showing ' . $job->name)

@section('content')
    <p>{{ $job->location }}</p><br>
    <p>{{ $job->description }}</p>
@endsection
