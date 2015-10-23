@extends('submissions.index')

@section('content')

    {!! Form::open(['url' => 'submissions', 'class' => 'form-horizontal']) !!}
        @include('submissions._form', ['submitBtnText' => 'Submit'])
    {!! Form::close() !!}

    @include('errors.list')

@stop
