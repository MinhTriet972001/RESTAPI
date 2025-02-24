<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{env('APP_URL')}}">
    <title>INSPINIA | Dashboard v.2</title>

    <link href="backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="backend/font-awesome/css/font-awesome.css" rel="stylesheet">


    <link href="backend/css/animate.css" rel="stylesheet">
    <link href="backend/css/style.css" rel="stylesheet">
    <link href="backend/css/cus.css" rel="stylesheet">
    @if(isset($config['css']) && is_array($config['css']))
    @foreach($config['css'] as $key => $val)
        <link rel="stylesheet" href="{{ $val }}">
    @endforeach
@endif

<script src="backend/js/jquery-3.1.1.min.js"></script>
</head>

<body class="fixed-navigation">
    <div id="wrapper">
  @include('be.dashboard.compoment.silerbar')

        <div id="page-wrapper" class="gray-bg sidebar-content">

@include('be.dashboard.compoment.navbar')
      @include($template);

            </div>
    @include('be.dashboard.footer')

        </div>

    </div>

  @include('be.dashboard.compoment.script')
</body>
</html>
