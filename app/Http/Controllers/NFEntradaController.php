<?php

namespace App\Http\Controllers;

use App\Parceiro;
use App\NFEntrada;
use App\Commands\InsereItensEntradaCommand;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NFEntradaController extends Controller
{
    
    private $nfEntrada;
    public function __construct(NfEntrada $nfEntrada)
    {
        $this->nfEntrada = $nfEntrada;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nfentradas = NFEntrada::paginate(11);
        return view('nfentradas.index',['nfentradas'=>$nfentradas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parceiros = Parceiro::select(DB::raw("cnpj || ' - ' || nome as desc"),'id')->lists('desc','id');
        return view('nfentradas.create',['parceiros'=>$parceiros]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $nfe = $this->nfEntrada->create($input);
        $itensNfe = $input['itemNF'];
        foreach ($itensNfe as $itemNfe) {
            
            $inf = new \App\ItensNfEntradas;

            $inf->id_nf_entrada = $nfe->id;
            $inf->num_item = $itemNfe['num_item'];
            $inf->id_produto = \App\Produto::where('part_number',$itemNfe['part_number'])->first()->id;
            $inf->quantidade = $itemNfe['quantidade'];
            $inf->valor_unitario = $itemNfe['valor_unitario'];

            $inf->save();

            $this->dispatch(
               new InsereItensEntradaCommand($inf)
            );
        }
        return redirect('nfentradas/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nfe = $this->nfEntrada->find($id);
        return view('nfentradas.show',compact('nfe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NFEntrada::find($id)->delete();
        return redirect('nfentradas/index');
    }
}
