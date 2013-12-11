@extends('includes.template')

@section('content')

<article class="col1">
    <h2>Contact</h2>
    <p>I am based in Auckland, New Zealand</p>

</article>
<div>

    <h2>Fill in the form to send me an email</h2>
    {{ Form::open(array('url' => 'pages/contact')) }}

    {{ Form::label('name', 'Your Name '), $errors->first('name','<span class="error">:message</p>') }}
    {{ Form::text('name', null, array('placeholder'=>'Enter your full name')) }}
    <br>
    {{ Form::label('email', 'Your Email '), $errors->first('email','<span class="error">:message</p>') }}
    {{ Form::text('email', null, array('placeholder'=>'Enter your email address')) }}
    <br>
    {{ Form::label('subject', 'Subject '), $errors->first('subject','<span class="error">:message</p>') }}
    {{ Form::text('subject', null, array('placeholder'=>'The email\'s subject')) }}
    <br>
    {{ Form::label('email_message', 'Message '), $errors->first('email_message','<p class="error">:message</p>') }}
    {{ Form::textarea('email_message', null, array('placeholder'=>'The email\'s message')) }}
    <br>
    {{ Form::reset('Reset') }}
    {{ Form::submit('Send', array('id' => 'submit')) }}
    {{ Form::close() }}

    </fieldset></form>
</div>

@stop