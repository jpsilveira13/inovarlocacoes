<?php

namespace inovarlocacoes\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use inovarlocacoes\Cidade;
use inovarlocacoes\Equipamento;
use inovarlocacoes\Estado;
use inovarlocacoes\Franqueado;
use inovarlocacoes\Http\Requests;
use inovarlocacoes\Http\Controllers\Controller;
use inovarlocacoes\MensagemFranqueado;

class SiteController extends Controller
{
    private $equipamento;
    private $franqueado;
    private $cidade;
    private $estado;

    public function __construct(Equipamento $equipamento,Franqueado $franqueado, Cidade $cidade, Estado $estado){
        $this->cidade = $cidade;
        $this->franqueado = $franqueado;
        $this->estado = $estado;
        $this->equipamento = $equipamento;
    }

    public function hotsite($url_nome){

        $idCidade = $this->cidade->where('url_nome',$url_nome)->first()->id;
        $franqueado = $this->franqueado->where('cidade_id',$idCidade)->first();
        $equipamentos = $this->equipamento->take(12)->orderBy(DB::raw('RAND()'))->get();
        return view('site.hotsite', [
            'title' => 'inovarlocacoes.com.br | A maior locadora de equipamentos do Brasil.',
            'franqueado' => $franqueado,
            'equipamentos' => $equipamentos
        ]);
    }

    public function sobre(){

        return view('site.sobre');
    }

    public function unidades(){
        $estados = $this->estado->orderBy('nome','asc')->get();

        $unidades = $this->franqueado->get();

        return view('site.unidades',compact('unidades','estados'));
    }

    public function buscaFranquia(){
        $estado_id = Input::get('estado_id');
        if($estado_id){
            $achado = $this->franqueado->where('estado_id',$estado_id)->with('cidade','estado')->get();
        }else{
            $achado = $this->franqueado->with('cidade','estado')->get();
        }
        return Response::json($achado);
    }

    public function sendEmailTest(){
        Mail::send('emails.teste', ['msg' => 'hello'], function ($message) {
            $message->from('suporte@inovarlocacoes.com.br', 'João Paulo');

            $message->to('samotinho@gmail.com', 'Pedro 2')->subject('My Test Email!');
        });


    }

    public function formFranqueado(){
        $inputData = Input::get('formData');

        parse_str($inputData, $formFields);
        $userData = array(
            'email_franqueado'   =>  $formFields['email_franqueado'],
            'nome_franqueado'    =>  $formFields['nome_franqueado'],
            'nome'               =>  $formFields['nome'],
            'email'              =>  $formFields['email'],
            'telefone'           =>  $formFields['telefone'],
            'conheceu'           =>  $formFields['conheceu'],
            'mensagem'           =>  $formFields['mensagem'],

        );

        $rules = array(
            'nome'      =>  'required',
            'email'     =>  'required',
            'mensagem'    =>  'required',
        );

        $validator = Validator::make($userData,$rules);
        if($validator->fails()){
            return Response::json(array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            ));
        }else {
            Mail::send('emails.contactFranqueado',$userData,function($message) use ($userData){
                $message->from('naoresponder@inovarlocacoes.com.br', 'Inovar Locações');

                $message->to($userData['email_franqueado']);
                $message->subject($userData['nome']. ', mandou uma mensagem para você. ');

            });
            if(MensagemFranqueado::create($userData)) {
                //return success  message
                return Response::json(array(
                    'success' => true
                ));
            }

        }
    }
}