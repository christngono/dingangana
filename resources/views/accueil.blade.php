@extends('layout.app')
@section('content') 

@include('partials.navbar') 

@include('partials.banner')

<div class="container ">
    <div class="row">
        <h3 class='mt-4 titre col-md-5 col-12'>Découvrez nos merveilleux contes</h3>
    </div>
    <div class='row justify-content-center py-5 '>
        @foreach($medias as $media)
               <div class="col-md-3 col-6 ">
                  <a href="{{Route('showvideo', ['id'=>$media->id, 'typecontent'=>'vidéo version bassa'])}}" class='v'>
                    <div class="card card-a">
                      <img src="{{$media->linkmedia}}" class="card-img-top" alt="..."/>
                      <div class="card-body">
                        <p class="card-title">{{$media->title}}</p>
                        <a class="act-3"><i class="bi bi-play-circle-fill"></i>regarder</a>
                      </div>
                    </div>
                  </a>
                </div>
        @endforeach
    </div>
</div>


<div class="container-fluid  section1">
    <div class='row py-5 mt-3 justify-content-center'>
        <div class='col-md-4 col-12'>
            <p></p>
          <p class='sec1'>Les belles histoires commencent bien quelque part</p>
          <p class='sec11'>des contes uniques</p>
        </div>
        <div class='col-12 col-md-4'>
          <img src="{{asset('images/madame_chantal.jpg')}}" class='rot' alt="" height='220'>
        </div>
    
    </div>
  
</div>

<!-- section presentation -->
<div class="container-fluid  section2">
    <div class='row py-5 justify-content-center'>
        <div class='col-md-4 col-12'>
            <img src="{{asset('images/famille.jpg')}}" class='rot' alt="" height='220'>
          </div>
        <div class='col-md-4 col-12'>
            <p></p>
          <p class='sec1'>FAITES VOUS PLAISIR EN FAMILLE</p>
          <p class='sec11'>avec des histoires de chez nous.</br>Decouvrez plus de 18 contes d'afrique en divers versions</p>

        </div>

    </div>
</div>


<div class='ro py-5 container-fluid'>
  <div class="row px-2 py-4 d-flex justify-content-between">
    <div class="col-4  it text-center">
      <i class="bi bi-laptop"></i><br/>
      <span class=' text-white'>Accessible sur tous les supports</span>
     </div>
    <div class="col-4 it text-center">
      <i class="bi bi-chat-square-heart"></i><br/>
      <span  class=' text-white'>Disponible sur tous les supports</span>
    </div>
    <div class="col-4 it text-center">
      <i class="bi bi-wallet2"></i><br/>
      <span  class=' text-white'>Tous les paiements disponible </span>
    </div>
  </div>
</div>
@include('partials.footer')

@endsection
