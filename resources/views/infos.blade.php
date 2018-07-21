@extends('layouts.master')

@section('title')
    Infos
@endsection

@section('sidebar')
    Contenu SIDEBAR
@endsection

@section('content')
    {!! Form::open(['url' => 'user']) !!}
        {!! Form::label('name', 'Entrez votre nom: ') !!}
        {!! Form::text('name', 'Jean-Claude Dusse') !!}
        {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}
@endsection