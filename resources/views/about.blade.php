@extends('layout.app')
@section('content') 
<style>
    body{
      background-color: #09070F;
    }
  </style>
@include('partials.navbar')
<div class="card card_b bg-dark text-white">
    <img src="{{asset('images/big-banner4.png')}}" class="" alt="" height='500'>
    <div class="card-img-overlay">
      <h5 class="card-1 text-center pt-5">DINGANGANA</h5>
      <p class=" card-2 card-t text-center pt-2">A PROPOS DE NOUS</p>
    </div>
  </div> 
  @endsection