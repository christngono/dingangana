@extends('layout.app')
@section('content') 
<style>
  body{
    background-color: #09070F;
  }
</style>
@include('partials.navbar')
<div class="card card_b bg-dark text-white">
    <img src="{{asset('images/big-banner1.png')}}" class="" alt="" height='500'>
    <div class="card-img-overlay">
      <h5 class="card-1 text-center pt-5">DINGANGANA</h5>
      <p class=" card-2 card-t text-center pt-2">Le lion voulait manger le lievre</p>
    </div>
  </div> 
  <div class="container">
<div class="row">
    <h3 class='mt-4 titre col-md-5 col-12' > <i class="bi bi-laptop"></i> les contes en Bassaa</h3>
</div>
<div class='row ra justify-content-center py-5' style="">
  <!-- remplacer -->
  @include('partials.cardvideo')
    <!---1-->
   <!---- 4--->
    <div class='col-8 text-end pt-5 text-white'><i class="bi bi-caret-right-fill"></i> Decouvrir toutes les vidéos</div>
</div>  
<div class="row">
    <h3 class='mt-4 titre col-md-5 col-12'> <i class="bi bi-laptop"></i> les contes en français</h3>
</div>
<div class='row ra justify-content-center py-5' style="">
 @include('partials.cardvideo1')
    <!---- 1--->   
    <div class='col-8 text-end pt-5 text-white'><i class="bi bi-caret-right-fill"></i> Decouvrir toutes les vidéos</div>
</div>  
<div class="row">
    <h3 class='mt-4 titre col-md-5 col-12'> <i class="bi bi-laptop"></i> les contes en version traduite</h3>
</div>
<div class='row ra justify-content-center py-5' style="">
  @include('partials.cardvideo2')
    <div class='col-8 text-end pt-5 text-white'><i class="bi bi-caret-right-fill"></i> Decouvrir toutes les vidéos</div>
</div>    
</div>
<div class='container-fluid'>
    <div class="row my-5 px-4 py-4 d-flex justify-content-between">
      <div class="col-4  it text-center">
        <i class="bi bi-laptop"></i><br/>
        <span class='ia'>Accessible sur tous les supports</span>
       </div>
      <div class="col-4 it text-center">
        <i class="bi bi-chat-square-heart"></i><br/>
        <span class='ia'>Disponible sur tous les supports</span>
      </div>
      <div class="col-4 it text-center">
        <i class="bi bi-wallet2"></i><br/>
        <span class='ia'>Tous les paiements disponible </span>
      </div>
    </div>
  </div>
  @include('partials.footer')
@endsection