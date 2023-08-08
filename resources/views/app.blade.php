<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name ="description" content="{{$seo->description}}"/>
    <meta name ="keywords" content="{{$seo->keywords}}"/>
    <meta name ="og::siteName" content="{{$seo->ogSiteName}}"/>
    <meta name ="og::title" content="{{$seo->ogTitle}}"/>
    <meta name ="og::Image" content="{{$seo->ogImage}}"/>
    <meta name ="og::description" content="{{$seo->ogDescription}}"/>
    <meta name ="Sadia" content=""/>
    <title>{{$seo->title}}</title>

    <!--Assests-->
    <link rel='icon' type='image/x-icon'  href="{{asset('assets/favicon.ico')}}"/>
    <link rel='stylesheet' href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css')}}"/>
    <link rel='stylesheet' href="{{asset('css/bootstrap.css')}}"/>
    <link rel='stylesheet' href = "{{asset('css/style.css')}}"/>
    <script src="{{asset('js/axios.min.js')}}"></script>

  </head>
  
  
<body class="d-flex flex-column h-100">
  
@include('components.navbar')
@include('components.loader')

<div class="" id ="content-div">

@yield('content');


</div>

@include('components.footer')


<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>


   
  

  