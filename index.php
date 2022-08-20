<?php

$main = '<p class="question">～を確信する</p> <form method="post"> <label for="text3" class="l_text3"></label> <input id="text3" type="text" name="answer" class="input" placeholder="答えを入力してください"> <div class="text_underline"></div> <input type="submit" class="submit" value="送信"/> </form>';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST["answer"])) {
        if ($_POST['answer'] == "I am sure that SV") {
            $main = '<p class="correct">正解!</p><div class="button"><a href="https://google.com" class="next"><span>次の問題へ</span></a></div>';
        } else if ($_POST['answer'] == 'I am sure that S V') {
            $main = '<p class="correct">正解!</p><div class="button"><a href="https://google.com" class="next"><span>次の問題へ</span></a></div>';
        } else if ($_POST['answer'] == 'I am sure (that) S V') {
            $main = '<p class="correct">正解!</p><div class="button"><a href="https://google.com" class="next"><span>次の問題へ</span></a></div>';
        } else if ($_POST['answer'] == 'I am sure (that) SV') {
            $main = '<p class="correct">正解!</p><div class="button"><a href="https://google.com" class="next"><span>次の問題へ</span></a></div>';
        } else {
            $main = '';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>English | Words</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&family=Roboto&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
</head>
<body>
    <iframe src="header/index.html" frameborder="0" scrolling="no" width="100%"></iframe>
    <?php echo $main ?>
</body>
<style>
    .submit{
        background: linear-gradient(135deg, #ffd900, #0079c7);
        color: #fff;
        font-weight: bold;
        border-radius: 8px;
        transition: 0.3s;
        border: 2px solid #0079c7;
        background: #fff;
        color: #0079c7;
        width: 100%;
        max-width: 200px;
        box-sizing: border-box;
        padding: 10px;
        display: block;
        margin: 5% auto;
        position: relative;
        text-align: center;
        font-family: 'Noto Sans JP', sans-serif;
        font-weight: 400;
        font-size: 1.5rem;
    }
    .submit:hover{
        background: #0079c7;
        color: #fff;
    }
    .submit:active, .submit:focus{
        top: 2px;
    }
    #text3{
        font-size: 32px;
        width: 100%;
        border: none;
        outline: none;
        padding-bottom: 8px;
        box-sizing: border-box; /*横幅の解釈をpadding, borderまでとする*/
        text-align: center;
        font-family: 'Noto Sans JP', sans-serif;
        font-weight: 400;
    }
    .text_underline{
        position: relative; /*.text_underline::beforeの親要素*/
        border-top: 1px solid #c2c2c2; /*text3の下線*/
    }

    /*共通のstyle*/
    .text_underline::before,
    .text_underline::after {
        position: absolute;
        bottom: 0px; /*中央配置*/
        width: 0px; /*アニメーションで0pxから50%に*/
        height: 2px; /*高さ*/
        content: '';
        background-color: #0079c7; /*アニメーションの色*/
        transition: all 0.5s;
        -webkit-transition: all 0.5s;
    }

    /*中央から右へのアニメーション*/
    .text_underline::before{
        left: 50%; /*中央配置*/
    }

    /*中央から左へのアニメーション*/
    .text_underline::after{
        right: 50%; /*中央配置*/
    }

    #text3:focus + .text_underline::before,
    #text3:focus + .text_underline::after{
        width: 50%;
    }
    .question{
        font-family: 'Noto Sans JP', sans-serif;
        font-size: 9rem;
        text-align: center;

    }
    form {
        position: relative;
        z-index: 1;
        background: #ffffff;
        max-width: 30%;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
    }
    .form input{
        font-family: 'Noto Sans JP', sans-serif;
        font-weight: 300;
        font-style: normal;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
    }
    .correct{
        margin-top: 18%;
        font-family: 'Noto Sans JP', sans-serif;
        font-weight: 900;
        color: #e30000;
        font-size: 9em;
        text-align: center;
        animation-name: fadeIn;
        animation-fill-mode:backwards;
        animation-duration:0.3s;
        animation-timing-function:ease-in;
        animation-delay: 0.5s;
        animation-direction:normal;
    }
    @keyframes fadeIn {
        0%{opacity: 0;}
        100%{opacity: 1;}
    }
    *,
    *:before,
    *:after {
        -webkit-box-sizing: inherit;
        box-sizing: inherit;
    }

    html {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        font-size: 62.5%;
    }

    .next{
        background: linear-gradient(135deg, #ffd900, #0079c7);
        color: #fff;
        font-weight: bold;
        border-radius: 8px;
        transition: 0.3s;
        border: 2px solid #0079c7;
        background: #fff;
        color: #0079c7;
        width: 100%;
        max-width: 200px;
        box-sizing: border-box;
        padding: 10px;
        display: block;
        margin: 5% auto;
        position: relative;
        text-align: center;
        font-family: 'Noto Sans JP', sans-serif;
        font-weight: 400;
        font-size: 1.5rem;
    }
    .next:hover{
        background: #0079c7;
        color: #fff;
    }
    .next:active, .next:focus{
        top: 2px;
    }
    .button{
        padding: 30px 10px;
        width: 100%;
        text-align: center;
    }
</style>
</html>