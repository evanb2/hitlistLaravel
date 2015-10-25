@extends('submissions.master')

@section('content')

    @foreach ($submissions as $submission)
        <h3>{{ $submission->artist_name }}</h3>

    @endforeach

    <a href="/submissions/create">Form</a>

@stop
