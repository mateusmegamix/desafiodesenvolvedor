<?php
	$this->assign('title','GabrielArantes | Home');
	$this->assign('nav','home');

	$this->display('_Header.tpl.php');
?>

	<div class="container">

		<!-- Main hero unit for a primary marketing message or call to action -->
		<div class="hero-unit">
			<h1>DESAFIO DESENVOLVEDOR</h1>
			<br>
			<p>Acesso ao CRUD solicitado:</p>
			
			
			
			<p><a class="btn btn-primary" href="./usuarios">CRUD Usuarios</a></p>
		</div>

		

<?php
	$this->display('_Footer.tpl.php');
?>