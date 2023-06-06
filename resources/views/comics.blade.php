@extends('layout.main')

@section('content')
<main>

  <div class="jumbotron"></div>

  <div class="current-series">
    <span>CURRENT SERIES</span>
  </div>


  <div class="container-cards">
      @foreach ($cards as $card)
      <div class="cards">
        <div class="container">
          <div class="container-img">
            <img src="{{($card['thumb'])}}" alt="{{$card['title']}}">
          </div>

          <div class="container-title">
            <div>{{$card['title']}}</div>
          </div>

        </div>

      </div>


      @endforeach
    </div>


    <div class="container-button">
        <button>LOAD MORE</button>
    </div>






  </main>
    @endsection
