<?php
require_once 'Produto.php';

class Eletronico extends Produto {
    public function getCategoria() {
        return "Eletrônico";
    }
}
?>
