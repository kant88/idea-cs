@extends('layouts.app')

@section('content')
    
<h1>確認ページ</h1>
<div style="margin-top:20px">
<h4>問題点：{{$idea->problem}}</h4>
<h4>アイデア：{{$idea->content}}</h4>
</div>

<div style="margin-top:20px">
{!! Form::model($idea, ['route' => 'ideas.store']) !!}
    {!! Form::submit('送信する', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}
</div>
<div style="margin-top:10px">
{!! link_to_route('confirmNameget', '訂正する', null, ['class' => 'btn btn-warning']) !!}
<!--
{!! Form::model($idea, ['route' => 'confirmNamepost']) !!}
    {!! Form::submit('訂正する', ['class' => 'btn btn-warning']) !!}
{!! Form::close() !!}
-->
</div>

@endsection