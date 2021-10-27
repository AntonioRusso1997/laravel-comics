@extends('layouts.app')

@section('title', 'Homepage')

@section('content')

<main>
  <div class="main-content">
    <div class="main-title">CURRENT SERIES</div>
    <div class="comics-section">
      <div class="comics-box">
          @foreach ($fumetti as $fumetto)
            <div class="card">
                <div class="card-img">
                <img src="{{ $fumetto['thumb'] }}" alt="{{ $fumetto['title'] }}">
                </div>
                <h3>{{ $fumetto['series'] }}</h3>
            </div>
          @endforeach
        
      </div>
    </div>
    <button>LOAD MORE</button>
  </div>
   
</main>

@endsection