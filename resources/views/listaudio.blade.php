@extends('layout.app')
@section('content') 
@include('partials.navbar')
<style>
  body{
    background-color: #09070F; 
  }
</style>
<div class="container  ra ro mt-4 ">
  <div class="row">
        <div class="col-md-12">
          <a class='text-white card_link' href="{{route('showaudio')}}">
            <div class='card-minia mt-1'>
              <span class='num_card'>1</span>
              <img src="{{asset('images/miniature/generique.png')}}" height="60" class="rounded-lg" alt="...">
              <i class="bi bi-music-note-list"></i>
              <span class='name_card'>le roi et la marie</span>
            </div>
          </a>
        </div>
        <div class="col-md-12">
          <a class='text-white card_link' href="{{route('showaudio')}}">
            <div class='card-minia mt-1'>
              <span class='num_card'>1</span>
              <img src="{{asset('images/miniature/generique.png')}}" height="60" class="rounded-lg" alt="...">
              <i class="bi bi-music-note-list"></i>
              <span class='name_card'>le mariage du Roi</span>
            </div>
          </a>
        </div>
        <div class="col-md-12">
          <a class='text-white card_link' href="{{route('showaudio')}}">
            <div class='card-minia mt-1'>
              <span class='num_card'>2</span>
              <img src="{{asset('images/miniature/generique.png')}}" height="60" class="rounded-lg" alt="...">
              <i class="bi bi-music-note-list"></i>
              <span class='name_card'>Le mariage du Roi</span>
            </div>
          </a>
        </div>
        <div class="col-md-12">
          <a class='text-white card_link' href="{{route('showaudio')}}">
            <div class='card-minia mt-1'>
              <span class='num_card'>1</span>
              <img src="{{asset('images/miniature/generique.png')}}" height="60" class="rounded-lg" alt="...">
              <i class="bi bi-music-note-list"></i>
              <span class='name_card'>le roi et la marie</span>
            </div>
          </a>
        </div>
        <div class="col-md-12">
          <a class='text-white card_link' href="{{route('showaudio')}}">
            <div class='card-minia mt-1'>
              <span class='num_card'>1</span>
              <img src="{{asset('images/miniature/generique.png')}}" height="60" class="rounded-lg" alt="...">
              <i class="bi bi-music-note-list"></i>
              <span class='name_card'>le roi et la marie</span>
            </div>
          </a>
        </div>
        <div class="col-md-12">
          <a class='text-white card_link' href="{{route('showaudio')}}">
            <div class='card-minia mt-1'>
              <span class='num_card'>1</span>
              <img src="{{asset('images/miniature/generique.png')}}" height="60" class="rounded-lg" alt="...">
              <i class="bi bi-music-note-list"></i>
              <span class='name_card'>le roi et la marie</span>
            </div>
          </a>
        </div>
        <div class="col-md-12">
          <a class='text-white card_link' href="{{route('showaudio')}}">
            <div class='card-minia mt-1'>
              <span class='num_card'>1</span>
              <img src="{{asset('images/miniature/generique.png')}}" height="60" class="rounded-lg" alt="...">
              <i class="bi bi-music-note-list"></i>
              <span class='name_card'>le roi et la marie</span>
            </div>
          </a>
        </div>
        <div class="col-md-12">
          <a class='text-white card_link' href="{{route('showaudio')}}">
            <div class='card-minia mt-1'>
              <span class='num_card'>1</span>
              <img src="{{asset('images/miniature/generique.png')}}" height="60" class="rounded-lg" alt="...">
              <i class="bi bi-music-note-list"></i>
              <span class='name_card'>le roi et la marie</span>
            </div>
          </a>
        </div>
  </div>
</div>

 

   



@include('partials.footer')
@endsection
