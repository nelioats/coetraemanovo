<?php

namespace App\Http\Controllers;

use App\Models\Bibliotec;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BibliotecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biblitoec = Bibliotec::all();
        return view('back.bibliotec.index',compact('biblitoec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.bibliotec.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $messages = [

            'filepublicacao.required' => 'O arquivo é obrigatório.',
            'filepublicacao.max' => 'O tamanho máximo do arquivo é 2MB.',
            'filepublicacao.mimes' => 'O arquivo deve ser do tipo PDF.',


        ];

        //verificação dos inputs
        $this->validate($request,[
            'filepublicacao' => 'required|max:2000|mimes:pdf'

        ], $messages);

        $novaPublicacao = new Bibliotec();
        $novaPublicacao->organizacao = $request->organizacao;
        $novaPublicacao->tipomaterial = $request->tipomaterial;
        $novaPublicacao->titulo = $request->titulo;
        $novaPublicacao->resumo = $request->resumo;
        $novaPublicacao->autores = $request->autores;
        $novaPublicacao->orientadores = $request->orientadores;
        $novaPublicacao->anopublicacao = $request->anopublicacao;
        $novaPublicacao->parceiro = $request->parceiro;

        //salvando arquivo
        $nameid = uniqid(date('HisYmd'));
        $extension = $request->filepublicacao->extension();
        $nameFile = "{$nameid}.{$extension}";
        $request->filepublicacao->move(public_path('publicacoes'), $nameFile);

         //salvando nome do arquivo no banco
         $novaPublicacao->filepublicacao_path = $nameFile;


        $novaPublicacao->save();

        return redirect()->route('bibliotec_list')->with(['success' => 'Publicação cadastrada com sucesso!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $publicacao = Bibliotec::find($id);
        return view('back.bibliotec.edit',compact('publicacao'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all(),$id);

        $biblitoec = Bibliotec::find($id);

        $biblitoec->organizacao = $request->organizacao;
        $biblitoec->tipomaterial = $request->tipomaterial;
        $biblitoec->titulo = $request->titulo;
        $biblitoec->resumo = $request->resumo;
        $biblitoec->autores = $request->autores;
        $biblitoec->orientadores = $request->orientadores;
        $biblitoec->anopublicacao = $request->anopublicacao;
        $biblitoec->parceiro = $request->parceiro;

        if($request->filepublicacao != null){
            //se for diferente de null, prq o usuario inseriu outro arquivo
            //deletar o existe e criar o novo

            //deletando
            $file_path = public_path("publicacoes/{$biblitoec->filepublicacao_path}");
            if(file_exists($file_path)) {
                unlink($file_path);
            }
            //salvando novo arquivo

            $nameid = uniqid(date('HisYmd'));
            $extension = $request->filepublicacao->extension();
            $nameFile = "{$nameid}.{$extension}";
            $request->filepublicacao->move(public_path('publicacoes'), $nameFile);

            //salvando nome do arquivo no banco
            $biblitoec->filepublicacao_path = $nameFile;
        }

         $biblitoec->save();
         return redirect()->route('bibliotec_list')->with(['success' => 'Publicação atualizada com sucesso!']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biblitoec = Bibliotec::find($id);

         //deletando arquivo
         $file_path = public_path("publicacoes/{$biblitoec->filepublicacao_path}");
         if(file_exists($file_path)) {
             unlink($file_path);
         }

        $biblitoec->delete();
        return redirect()->route('bibliotec_list')->with(['success' => 'Publicação removida com sucesso!']);
    }
}
