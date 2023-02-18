<!DOCTYPE HTML>
<!--
    Broadcast by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-PTMHH8QG8Z"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-PTMHH8QG8Z');
		</script>
		
        <title>{{ trans('message.site_title') }}</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../css/main.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.min.js"></script>
    </head>
    <body>

        <!-- Header -->
            <header id="header">
                <ul>
                    <li><a href="/">{{ trans('message.site_name') }}</a>&nbsp; /</li>
                    <li><a target="_blank" href="https://www.facebook.com/zimages.media"><img src="../images/icons/ic-fb.png" /></a> /</li>
                    <li><a href="https://chat.zalo.me/"><img src="../images/icons/ic-zalo.png" /></a> /</li>
                    <li><img src="../images/icons/ic-tel.png" /><span>038.2040.081</span></li>
                </ul>
                <a href="#menu">Menu</a>
            </header>

        <!-- Nav -->
            <nav id="menu">
                <ul class="links">
                    <li><a href="">{{ trans('message.menu.home') }}</a></li>
                    <li>
                        <a href="{{ Config::get('constants.link.schema') }}{{ Config::get('constants.link.site_no_lang') }}">EN /</a>
                        <a href="{{ Config::get('constants.link.schema') }}vi.{{ Config::get('constants.link.site_no_lang') }}">VI</a>
                    </li>
                    <li><a href="">{{ trans('message.menu.contact') }}</a></li>
                </ul>
            </nav>