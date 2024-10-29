<?php
require_once 'CartaoCredito.php';
require_once 'Boleto.php';

use PagamentoSistema\CartaoCredito;
use PagamentoSistema\Boleto;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style>
	*{
		font-size: 1.5rem;
	}
</style>
<body>
<?php
// Instanciando os objetos
$cartao = new CartaoCredito();
$boleto = new Boleto();

// Chamando o método processarPagamento em cada objeto
echo $cartao->processarPagamento(333.99) . "<br>";
echo $boleto->processarPagamento(20.50) . "<br>";
?>
</body>
</html>

