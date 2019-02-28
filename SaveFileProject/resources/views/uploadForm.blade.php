@extends('app')
@section('content')

    <div class="container">
        <h1>Upload File</h1>
        // Para poder user Frorm:: debes instalar 
        // composer require "laravelcollective/html":"^5.3.0"

       
        {!! Form::open(['action' => 'ScanFileController@store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    
            {!! Form::file('image') !!}
            {!! Form::submit('Upload') !!}
        {!! Form::close() !!}
    </div>
 
@endsection