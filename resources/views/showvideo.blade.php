@extends('layout.app')
@section('content') 
<style>
    body{
      background-color: #09070F;
    }
  </style>
@include('partials.navbar')
<div class="container ra ro mt-4">
 <div class='row justify-content-center py-5 text-white' >
<div class="col-md-3 col-12">
   <img src="{{$medias->linkmedia}}" class="card-img ra"  alt="...">
</div>
<div class="col-md-6 col-12 py-1 titre-v">
 <h3>{{$medias->title}}</h3>

 <p class='pt-4'>{{$medias->description}}</p>
    <strong class="wi wi-strong-wind fs-7">Auteur: </strong>
    <span class='fs-7'>{{$medias->auther}}</span>
    <p class='pt-4'> <a class='act-3' href="{{Route('media.show',['id'=>$medias->id, 'typecontent'=>$medias->typecontent])}}"><i class="bi bi-play-circle-fill"></i></i> regarder</a>
      <a class='act-3' href="{{Route('media.show',['id'=>$medias->id,'typecontent'=>$medias->typecontent])}}"> <i class="bi bi-soundwave"></i> ecouter</a>
     
    </p>
    <span><i class="bi bi-star-fill fs-7"></i></span><span class ='fs-7'>  | {{$medias->typecontent}} | <i class="bi bi-laptop"></i> | <i class="bi bi-broadcast"></i> | <i class="bi bi-collection-play-fill"></i></span>
   
 </div>

</div>
</div>
<div class="container mt-2">
    <div class="row">
        <h3 class='mt-4 titre col-md-5 col-12'>Decouvrez des contes similiares</h3>
    </div>
<div class='row ra justify-content-center py-5' style="">
  @foreach($categories as $category)
<div class="col-md-2 col-6">
  
    <a href="{{Route('showvideo', ['id'=>$category->id, 'typecontent'=>$category->typecontent])}}" class='v'>
      <div class="card card-a mt-2">
        <img src="{{$category->linkmedia}}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-title">{{$category->title}}</p>
          <a class='act-3'><i class="bi bi-play-circle-fill"></i></i> regarder</a>
        </div>
      </div>
    </a>
    </div>
    @endforeach
   
</div>  
</div>
@include('partials.footer')
@endsection