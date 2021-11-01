@extends('layouts.app')

@section('title', 'Showing ' . $job->title)

@section('content')
    <p>{{ $job->location }}</p>

@section('content')
    <p>{{ $job->description }}</p>
@endsection
