<?php
	
	// FUNÇÃO PARA VALIDAÇÃO DE LOGIN

	$usuario_autenticado = false;

	session_start();

	$usuarios_fundat = array(
		array('usuario' => 'fundat@teste.aju', 'senha' => '12345')
	);

	foreach ($usuarios_fundat as $user) {
		if($user['usuario'] == $_POST['usuario'] && $user['senha'] == $_POST['senha']){
			$usuario_autenticado = true;
		}
	}

	if ($usuario_autenticado) {
		$_SESSION['autenticado'] = 'SIM';
		header('Location: home.php');
	} else {
		$_SESSION['autenticado'] = 'NAO';
		header('Location: index.php?login=erro');
	}

?>