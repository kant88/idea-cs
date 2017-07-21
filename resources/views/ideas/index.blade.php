@extends('layouts.app')

@section('content')

    <h1 style="margin-bottom:30px">アイデア一覧</h1>

    @if (count($ideas) > 0)
        @foreach ($ideas as $idea)
        <table class="table table-striped table-bordered" style="table-layout: fixed;">
            <!--<tr><th class="col-xs-1">id</th><th class="col-xs-5.5">課題</th><th class="col-xs-5.5">アイデア</th></tr>-->
            <tr><th style="width:5%;">id</th><th style="width:45%;">課題</th><th style="width:45%;">アイデア</th></tr>
            <tr><td>{{$idea->id}}</td><td>{{$idea->problem}}</td><td>{{$idea->content}}</td></tr>
        </table>
        @endforeach
    @endif

@endsection
