<?php

namespace inovarlocacoes\Http\Controllers;

use Illuminate\Http\Request;

use inovarlocacoes\Arquivo;
use inovarlocacoes\Http\Requests;
use inovarlocacoes\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
class ArquivoController extends Controller
{
    private $arquivo;

    public function __construct(Arquivo $arquivo){
        $this->arquivo = $arquivo;
    }

    public function index(){
        $arquivos = $this->arquivo->orderBy('id','desc')->paginate(12);

        return view('admin.arquivos.index',compact('arquivos'));
    }

    public function getArquivos(){
        $arquivos = $this->arquivo->orderBy('id','desc')->paginate(22);

        return view('admin.manual',compact('arquivos'));
    }

    public function totalNoticia(){
        $arquivos = $this->arquivo->orderBy('id','desc')->paginate(12);
        return view('admin.arquivos.index',compact('arquivos'));
    }

    public function novoArquivo(){
        $categorias = $this->arquivo->select('categoria')->orderBy('categoria','asc')->distinct()->get();
        $extensoes = $this->arquivo->select('extensao')->orderBy('extensao','asc')->distinct()->get();



        return view('admin.arquivos.cad_arquivo',compact('categorias','extensoes'));
    }

    public  function salvarArquivo(Request $request){
        $arquivo = $this->arquivo->fill($request->all());

        $arquivoUp = $request->file('arquivo');
        $arquivo->url = str_slug($arquivoUp->getClientOriginalName());
        $arquivo->extensao = '.'.$arquivoUp->getClientOriginalExtension();

        $arquivoUp->move(public_path().'/arquivos/', $arquivo->url.$arquivo->extensao);


        $request->session()->flash('alert-success','Arquivo cadastrado com sucesso!');
        $arquivo->save();
        return redirect()->route('arquivos');
    }

    public function deletaArquivo(Request $request,$id){
        $arquivo = $this->arquivo->find($id);
        if($arquivo->url){
            if (file_exists(public_path() . '/arquivos/' . $arquivo->url.$arquivo->extensao))
                File::delete(public_path() . '/arquivos/' . $arquivo->url.$arquivo->extensao);

        }
        $arquivo->delete();
        $request->session()->flash('alert-success-delete','Notícia deletada com sucesso!');
        return redirect()->route('arquivos');
    }
}
