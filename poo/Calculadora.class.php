<?php
class Calculadora{

    private ?int $n1;
    private ?int $n2;

    public function __construct( $n1, $n2 ) // Não são as variáveis acima.
    {
        $this->n1 = $n1; // Recebendo o valor do private acima.
        $this->n2 = $n2;
    }

    public function soma():int // Retorna inteiro
    {
        return $this->n1 + $this->n2;
    }

    public function subtracao():int
    {
        return $this->n1 - $this->n2;
    }

    public function __destruct()
    {
        echo 'Obrigado pela visita';
    }
}

/** 
 * 
 * Private - O método só vai poder ser acessado de dentro da própria classe, mesmo se a classe for herdade não vai conseguir acessar.
 * Protected
 * Public
 * 
 * unset() - Destrói qualquer variável.
 * **/