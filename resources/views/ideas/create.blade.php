@extends('layouts.app')

@section('content')

    <h1>アイデア新規作成ページ</h1>

    {!! Form::model($idea, ['route' => 'ideas.store']) !!}
    
    <div>
        {!! Form::label('problem', '課題:') !!}
        {!! Form::text('problem') !!}
    </div>
    <div>
        {!! Form::label('content', 'アイデア:') !!}
        {!! Form::text('content') !!}
    </div>

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection