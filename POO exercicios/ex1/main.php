<?php
require_once 'Eletronico.php';
require_once 'Alimento.php';

$produto1 = new Eletronico("Iphone 9", 1500, 10);
$produto2 = new Alimento("Feijão", 20, 50);
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
echo "Produto 1:<br>";
echo "Nome: " . $produto1->getNome() . "<br>";
echo "Preço: " . $produto1->getPreco() . "<br>";
echo "Quantidade: " . $produto1->getQuantidade() . "<br>";
echo "Categoria: " . $produto1->getCategoria() . "<br><br>";

echo "Produto 2:<br>";
echo "Nome: " . $produto2->getNome() . "<br>";
echo "Preço: " . $produto2->getPreco() . "<br>";
echo "Quantidade: " . $produto2->getQuantidade() . "<br>";
echo "Categoria: " . $produto2->getCategoria() . "<br><br>";

echo "Total de produtos criados: " . Produto::$totalProdutos . "<br>";
?>

</body>
</html>

