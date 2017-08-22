/* global $*/

function showContent(selected) {
    $("#hintSpace div").hide();
    $("#"+selected).show();
}

//何を選んだかを受け取って、表示するidを返す関数

function q_content(key){
    // console.log('hint: ', hint)
    for (var i = 0; i < 7; i++) {
        if (i == key){
            return `whats${i}`;
        } 
}
}

$(document).ready(function() {
    
   $("#hintSpace div").hide();
});

function selectwhats(obj) {
    
var idx = obj.selectedIndex;
    
var value = obj.options[idx].value; // 値 $whatsのkey 0とか1とか2とか
var text  = obj.options[idx].text;  // 表示テキスト 雰囲気や気分を・・みたいなやつ
    
console.log('value: ', value);
console.log('text: ', text);
    
document.getElementById("question").innerHTML = text;
var a = q_content(value); //whats2とかを取得

showContent(a);
    
return false;
}
