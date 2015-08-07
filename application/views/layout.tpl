<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name='yandex-verification' content='' />
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="language" content="ru">

    <title>{block name="title"}Магазин Apple Киев - Купить iPhone 4S, iPhone 4, New iPad  AppleKiev{/block}</title>
    <meta name="keywords" content="{block name="keywords"}Купить iPhone 4S, купить iPhone 4, купить New iPad, купить айфон 4с, купить айпад 16Гб, Сервис{/block}">
    <meta name="description" content="{block name="description"}Купить iPhone 4S, iPhone 4, New iPad, MacBook гарантия 12 мес, доставка по Киеву и Украине. Сервис. Отзывы, характеристики. +38(099) 125-63-23{/block}">

    <link rel="stylesheet" href="/frontend/styles/{block name="style"}main.css{/block}" type="text/css">

    {block name="scripts"}
    <script type="text/javascript" src="/frontend/javascript/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/frontend/javascript/jquery.corner.js"></script>
    <script type="text/javascript" src="/frontend/javascript/menu_slide.js"></script>
    {/block}

    {literal}
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-17451062-6']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>

        <script type="text/javascript">
            $(document).ready(function(){
                $(".con-cen").corner("round 6px").parent().css('padding', '1px 1px 1px 1px').corner("round 8px");
                $("#link").corner("round 6px").parent().css('padding', '1px').corner("round 8px");
            });
        </script>
    {/literal}
</head>
<body>
<div id="wrapper">
    <div id="header">
    {include file="menu.tpl"}
    </div>
    <div class="clear"></div>

    <div class="clear"></div>

    <div id="middle">
        <div id="container">
            <div class="clear"></div>
            {block name="content-block"}{/block}
        </div>

    </div>


    <div id="footer">
        <div class="left"></div>
        <div class="footer-content">
            {block name="footer"}{/block}
            <br>
            <br>
            <div class="footer-logo">
                <img alt="footer apple logo" src="/frontend/images/logo/apple_footer.png">
            </div>
            <div class="footer-copyright">
                © <a href="//applekiev.com.ua">AppleKiev</a>, 2011 - 2012
            </div>
            <div class="counter">
            {include file="counter_live.tpl"}

            {include file="counter_ya.tpl"}
            </div>
        </div>
        <div class="right"></div>
    </div>
    <div class="clear"></div>
</div>
</body>
</html>