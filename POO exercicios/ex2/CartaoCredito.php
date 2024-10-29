<?php
namespace PagamentoSistema;

require_once 'Pagamento.php';

class CartaoCredito implements Pagamento {
    public function processarPagamento($valor) {
        return "Pagamento de R$" . number_format($valor, 2, ',', '.') . " via Cartão de Crédito processado com sucesso";
    }
}
?>
