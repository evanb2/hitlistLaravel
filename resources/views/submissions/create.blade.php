@extends('submissions.master')

@section('content')

    {!! Form::open(['url' => 'submissions', 'class' => 'form-horizontal', 'id' => 'hitlist_form']) !!}
        @include('submissions._form', ['submitBtnText' => 'Submit'])
    {!! Form::close() !!}

    @include('errors.list')

@stop
