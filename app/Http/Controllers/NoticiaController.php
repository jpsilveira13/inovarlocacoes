<?php

namespace inovarlocacoes\Http\Controllers;

use Illuminate\Http\Request;

use inovarlocacoes\Http\Requests;
use inovarlocacoes\Http\Controllers\Controller;
use inovarlocacoes\Noticia;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



class NoticiaController extends Controller
{
    private $noticia;

    public function __construct(Noticia $noticia){
        $this->noticia = $noticia;
    }


    public function totalNoticia(){
        $noticias = $this->noticia->orderBy('id','desc')->paginate(12);
        return view('admin.noticia.index',compact('noticias'));

    }
    public function pegaNoticia($url_noticia){
        $noticia = $this->noticia->where('url_site',$url_noticia)->first();

        return view('admin.noticia',compact('noticia'));
    }

    public function novaNoticia(){

        return view('admin.noticia.cad_noticia');
    }

    public function salvarNoticia(Request $request){
        $noticia = $this->noticia->fill($request->all());
        $noticia->url_site = str_slug($request->get('titulo'));
        $image = $request->file('arquivo');

        $renamed = md5(date('Ymdhms').$image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
        $image->move(public_path().'/banner/',$renamed);


        $noticia->url_image = $renamed;

        $request->session()->flash('alert-success','Notícia cadastrado com sucesso!');
        $noticia->save();
        return redirect()->route('noticias');

    }

    public function editarNoticia($id){
        $noticia = $this->noticia->find($id);
        return view('admin.noticia.edit',compact('noticia'));
    }

    public function updateNoticia(Request $request,$id){
        $this->noticia->find($id)->update($request->all());
        return redirect()->route('noticias');
    }

    public function deletaNoticia(Request $request,$id){

        $noticia = $this->noticia->find($id);
        if($noticia->url_image){
            if (file_exists(public_path() . '/banner/' . $noticia->url_image))
                File::delete(public_path() . '/banner/' . $noticia->url_image);

        }
        $noticia->delete();
        $request->session()->flash('alert-success-delete','Notícia deletada com sucesso!');
        return redirect()->route('noticias');

    }



}

