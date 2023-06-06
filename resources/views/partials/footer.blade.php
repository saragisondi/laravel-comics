@php
  $footerTop = config('menus.footerTop');
  $footerMiddle = config('menus.footerMiddle');
  $footerBottom = config('menus.footerBottom');

@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <footer>
        <!-- FOOTER TOP -->
        <div class="footer-top">

          <ul>
            @foreach ($footerTop as $link)
            <li>
                <a href="{{route($link['href'])}}" class="{{Route::currentRouteName() === ['href'] ? 'active' : ''}}">
                <img src="{{Vite::asset($link['img'])}}" alt="{{$link['text']}}">
                <span>{{$link['text']}}</span>
                </a>
            </li>
            @endforeach
          </ul>

        </div>

        <!-- FOOTER MIDDLE -->
        <div class="footer-middle">

            <!-- left-->
            <div class="left">

            <div class="row">
              <div class="container-list">
                <div class="col" >
                  @foreach ($footerMiddle as $linkTitle)
                  <h2>{{$linkTitle['title']}}</h2>
                  <ul>
                    @endforeach

                    <li >
                      {{-- <a href="#">{{$linkTitle[$links]}}</a> --}}
                    </li>


                  </ul>

                </div>
              </div>
            </div>

            </div>

            <!-- right -->
            <div class="right">

            <div class="container-img">
                <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="logo">
            </div>
            </div>

        </div>


        <!-- FOOTER BOTTOM -->
        <div class="footer-bottom">
          <button>SIGN-UP NOW!</button>
          <div class="social">
            <h2>FOLLOW US</h2>
            <div>
              <ul>
                @foreach ($footerBottom as $link)
                <li>
                    <img src="{{Vite::asset($link['img'])}}" alt="social">
                </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>

        </footer>

</body>
</html>
