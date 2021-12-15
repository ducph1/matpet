<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content='index, follow' name='robots' />
  <meta name="theme-color" content="#006f6a" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />

  <meta id="metaDescription" name="description"
    content="Website bán thú cưng giá rẻ, pet đẹp, phù hợp với mọi người yêu động vật, muốn tìm cho mình một em pet đáng iu">
  <meta property="og:description"
    content="Website bán thú cưng giá rẻ, pet đẹp, phù hợp với mọi người yêu động vật, muốn tìm cho mình một em pet đáng iu" />
  <meta property="og:type" content="website" />

  <meta property="og:url" content="" />

  <meta property='og:image' content='' />
  <meta property="og:image:width" content="250" />
  <meta property="og:image:height" content="250" />

  <meta property="og:image:type" content="image/jpeg" />

  <link rel="alternate" type="application/rss+xml" title="Website bán thú cưng giá rẻ" href="" />
  <meta http-equiv="REFRESH" content="1800" />
  <link rel="manifest" href="/manifest.json" />
  <script data-ad-client="ca-pub-7192675112301972" async
    src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

  <link rel="apple-touch-icon" sizes="57x57" href="">
  <link rel="apple-touch-icon" sizes="114x114" href="">
  <link rel="apple-touch-icon" sizes="72x72" href="">
  <link rel="apple-touch-icon" sizes="144x144" href="">
  <link rel="apple-touch-icon" sizes="60x60" href="">
  <link rel="apple-touch-icon" sizes="120x120" href="">
  <link rel="apple-touch-icon" sizes="76x76" href="">
  <link rel="apple-touch-icon" sizes="152x152" href="">
  <link rel="apple-touch-icon" sizes="180x180" href="">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Coiny&family=Dosis&family=Open+Sans:wght@300;400;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="./assets/font-icon/fontawesome-free-5.15.4-web/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
  <link rel="stylesheet" href="./assets/css/base.css" />
  <link rel="stylesheet" href="./assets/css/grid.css" />

  @yield('css')
</head>

<body>
  <div class="wrap">
    @include('components.header')

    @yield('content')

    @include('components.footer')

  </div>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  @yield('js')
</body>

</html>
