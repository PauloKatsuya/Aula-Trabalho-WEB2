<?php
require_once 'Produto.php';

class Alimento extends Produto {
    public function getCategoria() {
        return "Alimento";
    }
}
?>
