<?php

    $str     = 'センテンススプリングでも文春でもどっちでもいいだろ';
    $options = array('-d', '/usr/local/lib/mecab/dic/mecab-ipadic-neologd');

    $mecab = new MeCab_Tagger($options);
    $nodes = $mecab->parseToNode($str);

    foreach ($nodes as $n)
    {
        echo $n->getSurface() . "<br />";
        echo $n->getFeature() . "<br />";
    }
    