<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('titulo')</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
</head>
<body>
<header>
	<div id="logo">
		<img src="#" alt="logo da ADPAN">
		<h3>Assembleia de Deus Ponte Alta do Norte</h3>
	</div>
	<nav>
		<ul>
			<li><a href="/">Início</li>
			<li><a href="/new">Cadastrar</li>
			<li><a href="#">Login</li>
		</ul>
	</nav>
	
</header>
<main>@yield('conteudo')</main>

<footer>Todos os direitos reservados 2025-2025. Desenvolvido por <a href="https://www.linkedin.com/in/eliabemota/" target="_blank">Eliabe Ribeiro Mota</a> </footer>
</body>
</html>