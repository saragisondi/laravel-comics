@extends('layout.main')

@section('title')
  Info Details
@endsection

@section('content')

<main>
    <div class="sec-blue">
        <h2>Info Details</h2>
    </div>


    <div class="card">
        <img src="{{$card['thumb']}}" alt="">
        <div class="info-card">
            <h3><strong>Titolo:</strong> {{$card['title']}}</h3>
            <h4><strong>Prezzo:</strong> {{$card['price']}}</h4>
            <h4><strong>Serie di appartenenza:</strong> {{$card['series']}}</h4>
            <h4><strong>Uscita:</strong> {{$card['sale_date']}}</h4>
            <h4><strong>Tipo:</strong> {{$card['type']}}</h4>
            <p><strong>Descrizione:</strong> {{$card['description']}}</p>
        </div>

        <a href="{{route('comics')}}"><button>Torna indietro</button></a>
    </div>

</main>



@endsection
