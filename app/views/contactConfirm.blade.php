@extends('includes.template')

@section('content')

<div>
    <h1>Your email has been sent</h1>
    <h3>{{ HTML::link('home','Return to home page.') }}</h3>
</div>

@stop