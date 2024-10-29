<?php
abstract class Produto {
    protected $nome;
    protected $preco;
    protected $quantidade;
    public static $totalProdutos = 0;

    public function __construct($nome, $preco, $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        self::$totalProdutos++;
    }

    abstract public function getCategoria();

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }
}
?>
