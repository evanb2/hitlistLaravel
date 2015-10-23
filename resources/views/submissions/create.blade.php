@extends('submissions.index')

@section('content')

    {!! Form::open(['url' => 'submissions']) !!}
        @include('submissions._form', ['submitBtnText' => 'Submit'])
    {!! Form::close() !!}

    @include('errors.list')

@stop
