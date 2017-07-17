@extends('layouts.app')

@section('content')
    
<h1>確認ページ</h1>
<p>問題点：{{$idea->problem}}</p>
<p>アイデア：{{$idea->content}}</p>

{!! Form::model($idea, ['route' => 'ideas.store']) !!}
    {!! Form::submit('送信する', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}

{!! Form::model($idea, ['route' => 'confirmName']) !!}
    {!! Form::submit('訂正する', ['class' => 'btn btn-warning']) !!}
{!! Form::close() !!}


@endsection