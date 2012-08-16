<?php
require_once 'inc/standard.php';
$page = new Page('error', ALL);
$page->addExtraMeta('<style>h1,h2,h3 {color:#000000;}h1 {font-size:2.8em;}h2 {font-size:1.6em;}h3 {font-size:1.4em;}h4 {font-size:.9em;}a, a:visited {text-decoration:none;color:#FFFFFF;}/* @end *//* @group Message */#message {text-align:center;clear:both;height:auto;margin:10px 0 0 0;}#message button {position:relative;right:3px;top:3px;font-family:courier new;font-weight:bold;float:right;}.success {border:1px solid #669966;background:#CCFFCC;}.failure {border:1px solid #F9930C;background:#FFFFC9;}/* @end *//* @group Header *//* @end *//* @group Nav *//* @end *//* @group Content */.clear {clear:both;padding:0px;margin:0px;}.right {float:right;}.left {float:left;}#container {width:800px;min-height:300px;text-align:left;margin:10px 20%;width:60%;}/* @end *//* @group Footer */#copyright {clear:both;margin:0 auto;text-align:center;font-size:11px;opacity:1;color:#cccccc;}#copyright p {float:left;width:100%;margin-bottom:0;text-align:center;color:#ccc;}.clear {clear:both;padding:0px;margin:0px;width:1px;height:1px;}/* @end *//* @group other */html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td {margin:0;padding:0;border:0;outline:0;font-weight:inherit;font-style:inherit;font-size:100%;font-family:inherit;vertical-align:baseline;}:focus {outline:0;}body {line-height:1;color:black;background:white;}ol,ul {list-style:none;}table {border-collapse:separate;border-spacing:0;}caption,th,td {text-align:left;font-weight:normal;}blockquote:before,blockquote:after,q:before,q:after {content:"";}blockquote,q {quotes:"" "";}.left {text-align:left;}.center {text-align:center;margin:auto;display:inline-block;}.right {text-align:right;}div,dl {float:left;width:100%;}div:after {content:".";display:block;height:0;clear:both;visibility:hidden;}.clearfix {display:inline-block;}div#wrapper {width:800px;margin:0 auto;float:none;position:relative;}div#header {height:100px;margin:10px 0 0 0;}div#header p {margin:0;padding:0;}div#logo {float:left;width:400px;}div#logo img {float:left;margin:0 0 0 0;height:80px;}div#logoname {float:left;vertical-align:middle;width:100px;text-align:center;margin-top:25px;}div.loginmini {width:335px;float:right;text-align:right;}div#mark img {margin-top:11px;}a.menu-item:hover {background-color:#CCCCCC;-webkit-transition:all .25s ease-out;-moz-transition:all .25s ease-out;text-decoration:underline;border-right:1px ridge #000;border-left:1px ridge #000;}div#navigation-section {border:1px double #DDD;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;position:relative;z-index:20;width:100%;margin:10px 0 0 0;background-color:#f5f5f5;background:-moz-linear-gradient(90deg, #d3d3d3 0%, #efefef 100%) #EFEFEF;background:-webkit-gradient(linear, left bottom, left top, from(#d3d3d3), to(#efefef)) #EFEFEF;}div#navigation-section ul {margin:0;float:left;display:inline;}div#navigation-section ul li {display:inline;}div#navigation-section ul li img {margin-top:7px;}#navigation-section ul li a.menu-item {float:left;display:block;padding:13px 11px 14px 11px;border-top:1px solid transparent;border-left:1px solid transparent;border-right:1px solid transparent;font-weight:bold;cursor:pointer;color:#333;text-decoration:none;-webkit-transition:all .15s ease-out;-moz-transition:all .15s ease-out;}#nav {padding:0 5% 0 5%;width:90%;}body,dl,p,td,th,h1,h2,h3,h4,h5,h6,caption,pre,blockquote,input,textarea,small {font-size:12px;line-height:18px;}h1 {font-size:30px;line-height:36px;margin-bottom:18px;}h2 {font-size:24px;line-height:36px;margin-bottom:18px;}h3 {font-size:18px;}h4 {font-size:14px;}h5 {font-size:12px;}h6 {font-size:10px;}p {margin:0 0 18px 0;}p.last {margin-bottom:0;}li {line-height:18px;}ul,ol {margin:0 0 18px 0;}table {margin-bottom:18px;}content td {line-height:18px;}img {border:0;}body,ul,ol,li,dl,p,td,th,h1,h2,h3,h4,h5,h6,caption,pre,blockquote,input,textarea {font-family:arial,helvetica;color:#444;}input.readonly {color:#999;background-color:#F3F3F3;}h1,h2,h3,h4,h5,h6 {font-family:helvetica;}h1,h2 {font-weight:bold;letter-spacing:-1px;}h4,h5,h6 {color:#333;}small {margin:0;padding:0;}legend {font-weight:bold;}strong {font-weight:bold;}em {font-style:italic;}.light {color:#aaa;}.meta {color:#999;}.meta a {color:#999;text-decoration:underline;}.meta a:hover {color:#36c;}a {text-decoration:none;color:#36c;}a:visited {color:#7af;}a:hover {text-decoration:underline;}a:focus {text-decoration:underline;}a.nolink:hover {text-decoration:none;cursor:text;}a.nolink:link {text-decoration:none;cursor:text;}a.nolink:focus {text-decoration:none;cursor:text;}a.nolink:active {text-decoration:none;cursor:text;}.required {color:#ff3333;}label {clear:both;display:inline;font-weight:bold;text-align:left;}input[type=text],input[type=password],input[type=email],textarea {display:inline;border:1px solid #bbb;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;}input[type=submit], input[type=button] {float:right;color:#333;font-weight:bold;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:10px;-webkit-transition:all .25s ease-out;-moz-transition:all .25s ease-out;border:1px double #acacac;background:-moz-linear-gradient(90deg, #a8a8a8 11.5%, #dbdbdb 100%) #CCC;background:-webkit-gradient(linear, left bottom, left top, color-stop(0.115, #a8a8a8), to(#dbdbdb)) #CCC;}input[type=submit]:hover {-webkit-transition:all .15s ease-out;-moz-transition:all .15s ease-out;cursor:pointer;border-color:#7c7c7c;background:-moz-linear-gradient(90deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 100%, rgba(0, 0, 0, 0) 100%) #e6e6e6;background:-webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, 0)), to(rgba(0, 0, 0, 0)), to(rgba(0, 0, 0, 0))) #e6e6e6;}/* @end */.forgot {float:right;color:#999999;}.error {border:1px double #FF6666;}#splash_left {border:1px solid #BBB;width:490px;height:200px;margin:0px;float:left;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;background-image:url("'.WEBSITE.'/images/splash_bg.png");background:-moz-linear-gradient(90deg, rgba(0, 0, 0, 0.5) 0%, rgba(255, 255, 255, 0) 90.4%), url("htttp://esc.eng.uci.edu/escan/images/splash_bg.png") repeat;background:-webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, 0.5)), color-stop(0.904, rgba(255, 255, 255, 0))), url("'.WEBSITE.'/images/splash_bg.png") repeat;}#splash_right {float:right;width:290px;}#splash_left_inside {margin:15px 25px;width:80%;}#splash_left_inside h1, #splash_left_inside h2, #splash_left_inside h3, #splash_left_inside h4, #splash_left_inside h5, #splash_left_inside h6 {color:#FFFFFF;}.dropdown {background:#f5f5f5 no-repeat left top;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;width:92%;margin:2%;padding:2%;border:1px double #6d6d6d;}</style>');
$page->addExtraMeta('<style>#box {text-align: left;float: left;background-color: #FFF;color: #425f7f;font-size: 14px;}#box .fieldname {clear: none;display: table;float: left;width: 120px
	font-weight: normal;font-size: 14px;margin: 3px 0 0 0;color: #777;}#box .textarea {width: 60%;clear: none;float: right;}#box #header_container {
	background-image: url("'.WEBSITE.'/images/box_header.png");background-repeat: repeat-x;border: 1px solid #BBB;-moz-border-radius-topleft: 10px;-moz-border-radius-topright: 10px;-webkit-border-top-left-radius: 10px;-webkit-border-top-right-radius: 10px;border-top-left-radius: 10px;border-top-right-radius: 10px;}#box #header_container span {font-family: Arial;color: #f8f8f8;font-weight: bold;}.alert {text-align: left;float: left;}.disclaimer {padding: 10px 0;text-align: left;font-size: 11px;display: inline;color: #777;}.separator {width: 100%;margin: 10px 0px;height: 1px;border-top: solid 1px #CCC;}#box_wrapper {height: 100%;background-color: #ececec;border-bottom: 1px solid #BBB;border-right: 1px solid #BBB;border-left: 1px solid #BBB;-webkit-border-bottom-left-radius: 10px;-webkit-border-bottom-right-radius: 10px;-moz-border-radius-bottomleft: 10px;-moz-border-radius-bottomright: 10px;border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;}#box_inside {margin: 20px 10%;padding: 0px;float: left;width: 80%;}#box_badge a {color: #36C;margin-top: 25px;float: right;margin-right: 20px;}#box_badge a:visited {color: #36C;}#box h2#title {width: auto;float: left;text-align: left;margin: 15px 25px;}.row {width: 100%;clear: both;display: inline;margin: 2px 0 0 0;}.event_row {width: 100%;clear: both;display: inline;}.item {width: 96%;clear: both;display: inline;padding: 0px 2%;border-top: solid 1px #CCC;cursor: pointer;}.item:hover {background-color: #CCCCCC;-webkit-transition: all .25s ease-out;-moz-transition: all .25s ease-out;}</style>');

$box = new Box('404 Error');
$box->setContent('<p>The page you were looking for does not exist. </p>');
$content = $box->display();
$page->setContent($content);
$page->buildPage();
?>