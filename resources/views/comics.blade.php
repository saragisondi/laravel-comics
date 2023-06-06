@extends('layout.main')

@section('content')


{{-- @dump($cards) --}}
<main>

  <div class="jumbotron"></div>

  <div class="current-series">
    <span>CURRENT SERIES</span>
  </div>


  <div class="container-cards">
      @foreach ($cards as $card)
      <div class="cards">
        <div class="container">
          <a href="{{route('comics-details', ['slug' => $card['slug']])}}">
            <div class="container-img">
              <img src="{{($card['thumb'])}}" alt="{{$card['title']}}">
            </div>
  
            <div class="container-title">
              <div>{{$card['title']}}</div>
            </div>
  
          </div>
  
        </a>

      </div>


      @endforeach
    </div>


    <div class="container-button">
        <button>LOAD MORE</button>
    </div>






  </main>
    @endsection
