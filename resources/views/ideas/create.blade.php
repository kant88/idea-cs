@extends('layouts.app')

@section('content')

    <h1>アイデア新規作成ページ</h1>

    {!! Form::model($idea, ['route' => 'confirmIdea']) !!}
        <div style="line-height:2.5;">
            <div class="form-group">
            {!! Form::label('problem', '課題:') !!}
    　　      {!! Form::textarea('problem', $idea->problem, ['class' => 'form-control', 'rows' => 5, 'placeholder'=>"食に関してあなたが感じる課題をご記入ください。"]) !!}
            </div>
            <div class="form-group">
        　　{!! Form::label('content', 'アイデア:') !!}
        　　{!! Form::textarea('content', $idea->content, ['class' => 'form-control', 'rows' => 5, 'placeholder'=>"課題を解決するためのアイデアをご記入ください。"]) !!}
            </div>
            <div style="margin-top:10px">
                {!! Form::submit('投稿', ['class'=> 'btn btn-success btn-lg']) !!}
            </div>
        </div>
    {!! Form::close() !!}

@endsection