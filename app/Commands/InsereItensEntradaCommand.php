<?php

namespace App\Commands;

use Illuminate\Contracts\Bus\SelfHandling;
use App\ItensEntrada;

class InsereItensEntradaCommand implements SelfHandling
{
    private $itensNfEntradas;
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(\App\ItensNfEntradas $itensNfEntradas)
    {
       $this->itensNfEntradas = $itensNfEntradas;
    }

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {
        $itnf = $this->itensNfEntradas;
        $itemEntrada = new ItensEntrada();
        $itemEntrada->id_item_nf_entrada = $itnf->id;
        $itemEntrada->data_doc = $itnf->nfEntrada->data_emissao;
        $itemEntrada->id_produto = $itnf->produto->id;
        $itemEntrada->saldo = $itnf->quantidade;

        $itemEntrada->save();
    }
}
