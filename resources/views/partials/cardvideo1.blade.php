@foreach($medias1 as $media1)
<div class="col-md-2 col-6">
  <a href="{{Route('showvideo', ['id'=>$media1->id, 'typecontent'=>'vidéo version francaise'])}}" class='v'>
      <div class="card card-a mt-2">
        <img src="{{$media1->linkmedia}}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-title">{{$media1->title}}</p>
          <a class='act-3'><i class="bi bi-play-circle-fill"></i></i> regarder</a>
        </div>
      </div>
    </a>
    </div>
@endforeach