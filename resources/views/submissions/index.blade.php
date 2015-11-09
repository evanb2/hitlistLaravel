@extends('submissions.master')

@section('content')

    @foreach ($submissions as $submission)
        <a href="/submissions/{{ $submission->id }}"><h3>{{ $submission->artist_name }}</h3></a>

    @endforeach

    <a href="/submissions/create">Form</a>

@stop
