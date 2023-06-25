@foreach($medias2 as $media2)
<div class="col-md-2 col-6">
  <a href="{{Route('showvideo', ['id'=>$media2->id,'typecontent'=>'vidéo version hybride'])}}" class='v'>
      <div class="card card-a mt-2">
        <img src="{{$media2->linkmedia}}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-title">{{$media2->title}}</p>
          <a class='act-3'><i class="bi bi-play-circle-fill"></i></i> regarder</a>
        </div>
      </div>
    </a>
    </div>
@endforeach