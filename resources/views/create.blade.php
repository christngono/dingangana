@extends('layout.app')
@section('content') 
@include('partials.navbar')
<div class="container mt-5">
    <div class="row">
        <h2>INSERE UNE VIDEO</h2>
    </div>
    <div class="row">
        <div class="col-md-6 col-12">
         
            <form action="{{route('create.store')}}" method='POST' enctype="multipart/form-data">
                @csrf
                <div class="row pt-2">
                    <div class="col">
                        <label for="title">Titre de la vidéo</label>
                        <input type="text" name='title' class="form-control" placeholder="Titre de la vidéo">
                    </div>
                    <div class="col">
                        <label for="auther">Nom de l'auteur</label>
                        <input type="text" name='auther' class="form-control" placeholder="Nom de l'auteur">
                    </div>
                </div>

                <div class="row pt-2">

                    <div class="col">
                        <label for="miniature" class="form-label">Notre image miniature</label>
                        <input class="form-control form-control-lg"   name='miniature' placeholder="miniature"  type="file">
                      </div>
                    <div class="col">
                        <label for="typecontent">le format</label>
                        <select class="form-control"  name="typecontent">
                            <option value='Audio version bassa'>Audio version bassa</option>
                            <option value='Audio version française'>Audio version français</option>
                            <option value='Audio version hybride'>Audio version hybride</option>
                            <option value='vidéo version bassa'>vidéo version bassa</option>
                            <option value='vidéo version français'>vidéo version française</option>
                            <option value='vidéo version hybride'>vidéo version hybride</option>
                          </select>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <label for="linkmedia">le lien de la vidéo</label>
                        <input type="text" name='linkmedia' class="form-control" placeholder="le lien de la video">
                    </div>
                    <div class="col">
                        <label for="slug">le slug</label>
                        <input type="text" name='slug' class="form-control" placeholder="le slug">
                    </div>
                </div>
                <div class="form-group">
                    <label for="teaser">Video de Teaser</label>
                    <input type="text" name='teaser' class="form-control" placeholder="video de teaser">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="3" name='description'></textarea>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Créer</button>
                </div>
                

            </form>
        </div>
    </div>
</div>
@endsection