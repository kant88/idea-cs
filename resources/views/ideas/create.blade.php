@extends('layouts.app')

@section('content')

    <h1>アイデア新規作成ページ</h1>

    {!! Form::model($idea, ['route' => 'ideas.store']) !!}
    
    <div style="line-height:2.5;">
        <div>
            {!! Form::label('problem', '課題:') !!}
            {!! Form::textarea('problem', null, ['class' => 'form-control', 'rows' => 5, 'placeholder'=>"食に関してあなたが感じる課題をご記入ください。"]) !!}
        </div>
        <div>
            {!! Form::label('content', 'アイデア:') !!}
            {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => 5, 'placeholder'=>"課題を解決するためのアイデアをご記入ください。"]) !!}
        </div>
    </div>
    <div style="margin-top:10px">
        {!! Form::submit('投稿', ['class'=> 'btn btn-success btn-lg']) !!}
    </div>
    {!! Form::close() !!}

@endsection