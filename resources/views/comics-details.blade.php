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
            <h3>Titolo: {{$card['title']}}</h3>
            <h4>Prezzo: {{$card['price']}}</h4>
            <h4>Serie di appartenenza: {{$card['series']}}</h4>
            <h4>Uscita: {{$card['sale_date']}}</h4>
            <h4>Tipo: {{$card['type']}}</h4>
            <p>Descrizione: {{$card['description']}}</p>
        </div>

        <a href="{{route('comics')}}"><button>Torna indietro</button></a>
    </div>

</main>



@endsection
