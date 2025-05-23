<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8" />
  <title>Blogge | Personal Blog Site</title>

  <!--Meta For No Index-->
  <meta name="robots" content="noindex, Nofollow, Noimageindex">

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <!-- Theme Stylesheet -->
  <link href="{{asset('frontendtemplate/css/style.css')}}" rel="stylesheet" />

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.svg" type="image/x-icon" />
  <link rel="icon" href="images/favicon.svg" type="image/x-icon" />
</head>

<body>

<!-- Navbar Start -->
@include('frontend.includes.header')
<!-- Navbar End -->

@yield('content')

@include('frontend.includes.footer')

@yield('script')
</body>

</html>