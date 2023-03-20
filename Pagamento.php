<?php

class Pagamento  
{
    private const PAGMENTO = $this->metodo_pagamento[0];
    private const TABELLA = 'sc_pagamento';
    /**
     * Identificastivo della società
     */
    private int $societa;

    /**
     * Id dell'utente/genitore che fa il pagamento
     */
    private int $utente;

    /**
     * Ammontare del pagamento
     */
    private string $ammontare;

    /**
     * Numero ricevuta
     */
    private string $ricevuta;

    /**
     * Metodo di pagamento
     */
    private array metodo_pagamento = ['contanti', 'bancomat', 'bonifico']; 

    public function __construct(int $societa, int $atleta, string $ammontare, string $ricevuta, string $metodo)
    {
        $this->societa = $societa;
        $this->atleta = $atleta;
        $this->ammontare = $ammontare;
        $this->ricevuta = $ricevuta;

        if(array_key_exist($metodo, $this->metodo_pagamento))
        {
            $this->metodo = $metodo;
        }

        $this->metodo = $this->PAGMENTO;
    }

    public function salva(): bool
    {

    }
}

