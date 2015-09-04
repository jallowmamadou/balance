<?php #page specific processing



 ?>
@extends('layouts/admin')

@section('title', 'Page Title')


@section('container')

    {!! Form::model($data, ['route'=>['memberships.store', $data->id],"class"=>"form-horizontal", 'files'=>true]) !!}
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @include('__partials.message')
        @include('__partials/registrationForm')
    {!!Form::close()!!}
@endsection