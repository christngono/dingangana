@extends('layout.app')
@section('content') 
@include('partials.navbar')
<style>
body{
    background-color: #09070F; 
}

</style>

<div class="container  ra ro mt-4 ">
 
        <div class="row ">
            <div class="col-md-6 col-12 pt-4 ty">
                <H2 class=''>{{$medias->title}}</H2>
                <h4>{{$medias->typecontent}}</h4>
            </div>
           
        </div>
        <div class='row justify-content-around my-3 pb-5 text-white'>
                <div class="col-md-6 col-12 px-4 pb-5">
                     
                    <video controls preload="auto" class='videoplay' controlslist="nodownload" data-setup=''loop>
                        <source src="{{$medias->teaser}}" type='video/mp4'>
                    </video>
                  
                    <!-- envideo-->
                    <div>
                        <span class=' ml-2' data-toggle="collapse" data-target="#collapseExample"><i class="bi bi-chat-left-text"></i> (10) |  </span> <span><i class="bi bi-star-fill"></i> (15)</span>
                    </div>
                       <!--  formulaire commentaire -->

                        <div class="collapse" id="collapseExample">
                           <form>
                            <p>Super film</p>
                            <p>pas mal ...</p>

                              <div class="form-group">
                                <label for="exampleFormControlTextarea1 black" >laisser votre commentaire</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                              <button type="submit" class="btn btn-primary float-right">envoyer</button>
                            </form>

                        </div>
                          <!--  end formulaire commentaire -->
                          
                    
                
                </div>
                <div class="col-md-4 col-12  py-2 cover-mania ">
                  @foreach($categories as $category)
                  <a class='text-white' href="{{Route('media.show',['id'=>$category->id, 'typecontent'=>$category->typecontent])}}">
                    <div class=' card-minia mt-1'>
                      <img src="{{$category->linkmedia}}" height="60" class="rounded-lg" alt="...">
                        <span>{{$category->title}}</span>
                    </div>
                  </a>
                    @endforeach
                </div>
        </div>

</div>
<div class='container-fluid'>
    <div class="row my-5 px-2 py-4 d-flex justify-content-between">
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