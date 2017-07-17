@extends('layouts.app')

@section('content')
    
<h1>確認ページ</h1>
<div style="margin-top:20px">
<p>問題点：{{$idea->problem}}</p>
<p>アイデア：{{$idea->content}}</p>
</div>

<div style="margin-top:20px">
{!! Form::model($idea, ['route' => 'ideas.store']) !!}
    {!! Form::submit('送信する', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}
</div>
<div style="margin-top:10px">
{!! Form::model($idea, ['route' => 'confirmName']) !!}
    {!! Form::submit('訂正する', ['class' => 'btn btn-warning']) !!}
{!! Form::close() !!}
</div>

@endsection