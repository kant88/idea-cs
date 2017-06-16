@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Idea-CS</h1>
        </div>
    </div>
    <div class="text-left" class="row">
        <form>
        <label class="col-offset-2-md-4 control-label">クラウドワークス上の名前(必須)</label>
        <input type="text" class="col-md-3-offset-2" class="form-control">
        </form>
    </div>
    <div>
        <br>
        <p><u>事前アンケート</u></p>
        <p>1. 次のなかから関心のある・・・</p>
        <input type="radio" name="check" value="check1">check1　
        <input type="radio" name="check" value="check2">check2　
        <input type="radio" name="check" value="check3">check3　
        <input type="radio" name="check" value="check4" checked >未回答
    </div>
    <br>
    <div class="text-center">
        <button type="button" class="btn btn-primary">回答用のページへ</button>
    </div>
@endsection