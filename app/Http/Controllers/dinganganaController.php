<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class dinganganaController extends Controller
{
    public function accueil()
    {
        $medias = Post::all()->take(4);
        return view('accueil',[
            'medias'=> $medias
        ]);
        return view('accueil');
    }
    public function about()
    {
        return view('about');
    }
    // display all video 
    public function showmedia()
    {
        //$medias = Post::all();
        $medias = Post::where('typecontent','vidéo version bassa')->get();
        $medias1=Post::where('typecontent','vidéo version francaise')->get();
        $medias2=Post::where('typecontent','vidéo version hybride')->get();
        return view('show',[
            'medias'=> $medias,
            'medias1'=>$medias1,
            'medias2'=>$medias2
        ]);
    }




    public function move()
    {
        return view('move');
    }
    public function showvideo($id, $typecontent)
    {
        $medias = Post::find($id);
        $categories=Post::where('typecontent',$typecontent)->get();
        return view('showvideo',[
            'medias'=> $medias,
            'categories'=>$categories
        ]);

    }
    //display content of one video
    public function display($id,$typecontent)
    {
        $medias = Post::find($id);
        $categories=Post::where('typecontent',$typecontent)->get();
        return view('display',[
            'medias'=> $medias,
            'categories'=>$categories
        ]);
     
    }
    public function history()
    {
        return view('history');
    }
    public function showaudio()
    {
        return view('showaudio');
    }
    public function store(Request $request)
    {
      // Storage::disk('local')->put('linkmedia', $request->linkmedia);
    Post::create([
        'title'=> $request->title,
        'description'=> $request->description,
        'linkmedia'=>$request->linkmedia,
        'miniature'=>$request->miniature,
        'auther'=>$request->auther,
        'slug'=>$request->slug,
        'typecontent'=>$request->typecontent,
        'teaser'=>$request->teaser

    ]);
    }
    
    public function create()
    {
        return view('create');
    }

    public function displayaudio(){
        return view('listaudio');
    }



}