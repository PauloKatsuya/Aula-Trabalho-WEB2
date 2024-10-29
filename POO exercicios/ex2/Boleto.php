<?php
namespace PagamentoSistema;

require_once 'Pagamento.php';

class Boleto implements Pagamento {
    public function processarPagamento($valor) {
        return "Pagamento de R$" . number_format($valor, 2, ',', '.') . " via Boleto processado com sucesso";
    }
}
?>
