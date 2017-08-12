/* global $ */

// tabを表示させる
function showTab(selector) {
    // .tabs-menu を全て非activeにする
    $(".tabs-menu div").removeClass("active");
    // .aだけactiveにする
    $(".tabs-menu #"+selector).addClass("active");
}

// contentを表示させる
function showContent(selector) {
    // .tabs-content divのうちaに該当するものだけを表示
    $(".tabs-content div").hide();
    $(selector).show();
}

//tab-idを受け取ってcontent-idを返す関数
function tabcontent(tab){
    // console.log('tab: ', tab)
    if (tab == "tab-menu-a"){
        return "#tabs-a";
    } else if (tab == "tab-menu-b"){
        return "#tabs-b";
    } else if (tab == "tab-menu-c"){
        return "#tabs-c";
    }
}

$(document).ready(function() {
    // 初期状態として1番目のタブを表示
    showTab("tab-menu-a");
    showContent("#tabs-a");

    // タブがクリックされたらコンテンツを表示
    $(".tabs-menu div").click(function() {
        // idの値を受け取ってshowTab()関数に渡す
        var selector = $(this).attr("id");
        showTab(selector);
        showContent(tabcontent(selector));
        // hrefにページ遷移しない
        return false;
    });
});