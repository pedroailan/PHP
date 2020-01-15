<?php

	// FUNÇÃO PARA MANIPULAR OS DADOS DO FORMULÁRIO

	$tipo = str_replace('#', '-', $_POST['Tipo']);
	$quantidade = str_replace('#', '-', $_POST['Quantidade']);
	$data = str_replace('#', '-', $_POST['Data']);

	$texto = '<br/>' . 'TIPO:' . $tipo .'<br/>'. 'QUANTIDADE:'  . $quantidade .'<br/>'. 'DATA:' . $data . '<br/>';

	$arquivo = fopen('arquivo.hd', 'a');

	fwrite($arquivo, $texto);

	fclose($arquivo);

	header('Location: cadastrar.php');
?>