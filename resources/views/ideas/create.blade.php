@extends('layouts.app')

@section('content')

<div class="container-fluid">
    
    <div class="row">
        <h1>アイデア新規作成ページ</h1>
       
        {!! Form::model($idea, ['route' => 'confirmIdeapost']) !!}
        <div class="col-md-offset-1 col-md-10 col-md-offset-1" style="line-height:2.5;">
            <div class="form-group" style="margin-top:10px">
            {!! Form::label('problem', '問1．あなたが感じる、あなたの職場の問題点はなんでしょうか。') !!}
            {!! Form::textarea('problem', $idea->problem, ['class' => 'form-control', 'rows' => 5, 'placeholder'=>"職場の問題点"]) !!}
            </div>
            <div class="form-group">
            {!! Form::label('content', '問2．課題を解決するためのアイデアをご記入ください。') !!}
            {!! Form::textarea('content', $idea->content, ['class' => 'form-control', 'rows' => 5, 'placeholder'=>"アイデア"]) !!}
            </div>
        </div>
        
        <div class="col-md-offset-1 col-md-10 col-md-offset-1" style="margin-top:30px; margin-bottom:30px;">
            {!! Form::submit('投稿', ['class'=> 'btn btn-success btn-lg btn-block']) !!}
        </div>
            {!! Form::close() !!}
    </div>
</div>
<!-- yahoo 係り受け解析
    <div id="result">
        <h2>解析結果</h2>
        <table width="622px" cellpadding="5" cellspacing="1"style="float:left" border=solid>
        <tbody>
        <?php
            $appid = env('YAHOO_APPLICATION_ID');
            function escapestring($str) {
                return htmlspecialchars($str, ENT_QUOTES);
            }
            $sentence = "上司に職員同士の関係や雰囲気を報告、別のチームに配属させるなど対策してもらう。";
            if ($sentence != "")
            {
                echo "<tr>";
                echo "<td>文節</td>";
                echo "<td>係り先の文節</td>";
                echo "</tr>";
                $request = "http://jlp.yahooapis.jp/DAService/V1/parse?appid=" . $appid . "&sentence=" . urlencode($sentence);
                $responsexml = simplexml_load_file($request);
                $size = count($responsexml->Result->ChunkList->Chunk);
                for ($i= 0; $i < $size; $i++)
                {
                    $chunk = $responsexml->Result->ChunkList->Chunk[$i];
                    $depend_chunk_id = intval($chunk->Dependency);
                    if ($depend_chunk_id >= 0)
                    {
                        $depend_chunk = $responsexml->Result->ChunkList->Chunk[$depend_chunk_id];
                    }
                    echo "<tr>";
                    echo "<td>";
                    foreach ($chunk->MorphemList->Morphem as $morph)
                    {
                        echo escapestring($morph->Surface);
                    }
                    echo "</td>";
                    echo "<td>";
                    if ($depend_chunk_id < 0)
                    {
                        echo "-> 文末";
                    }
                    else
                    {
                        echo "-> ";
                        foreach ($depend_chunk->MorphemList->Morphem as $t_morph)
                        {
                            echo escapestring($t_morph->Surface);
                        }
                    }
                    echo "</td>";
                    echo "</tr>";
                }
            }
        ?>
        </tbody>
        </table>
    </div>
-->
    <script src="{{asset('/js/question.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('/css/tab.css') }}">
-
@endsection