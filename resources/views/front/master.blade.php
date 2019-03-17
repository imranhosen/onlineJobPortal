<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('front')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('front')}}/css/custom.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/stylesheet.css">


    <link rel="icon" href="{{asset('front')}}/images/icon.png" >
    <title>Jobs Zone</title>
</head>
<body>

@yield('body')
<div id="feedbacks" class="popup-trigger" data-toggle="modal" data-target="#myModal" onClick="_gaq.push(['_trackEvent', 'ButtonClick', 'Feedback', '/', , true]);" style="
                  top: 500px; background-color: #1abd9c!important;">
</div>
@include('front.includes.footer')
</body>
<script src="{{asset('front')}}/js/jquery.js"></script>
<script src="{{asset('front')}}/js/bootstrap.js"></script>

</html>