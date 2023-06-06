@php
  $menu_header = config('menus.header_menu');
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>
</head>
<body>

    <header>
        <!--LOGO -->
        <div class="container-img">
            <img src="/img/dc-logo.png" alt="logo">
        </div>

        <!-- NAVBAR -->
        <nav>
            <ul>
              @foreach ($menu_header as $link)
              <li>
                  <a href="{{route($link['href'])}}" class="{{Route::currentRouteName() === $link['href'] ? 'active' : ''}}">{{$link['text']}}</a>
              </li>
              @endforeach

            </ul>

        </nav>

    </header>

</body>
</html>
