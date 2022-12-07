<title>Trab. De Redes</title>
<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		body {
			background-color: #c0c0ff;
			background-image: url("images.jpeg");
			background-position: center;	/*deixa a imagem no centro*/
			background-size: cover;			/*tamanho, cover = cobrir*/
			background-attachment: fixed;	/*a imagem fica fixada na página, se movendo junto com o scroll*/
			
		}
	</style>
</head>
<body>


<h1>Trabalho de Rede de Computadores</h1>

<?php
	echo nl2br("Alunos: José Barros, Nícolas Tasquetto e Rafael Tischler
	Turma: 3º M.S.I. B")
?>
<h2>Introdução:</h2>

<?php
	echo nl2br("Este projeto foi realizado para uma atividade da diciplina de redes que consistia em criar um servidor do tipo LAMP, Linux, Appax, MySQL e PHP, e hospedar um site criado pelo grupo, além do mais, nele, deve-se por as principais dificuldades que o grupo enfrentou e o seu feedback sobre a atividade")
?>
	
<h2>Dificuldades:</h2>

<?php
	echo nl2br("- Baixar distro Linux com internet de SVS
				- Criar uma maquina virtual
				- Dowload e instalação do servidor LAMP
				- Achar os comandos certos para usar no terminal linux
				- Aprender uma linguagem de programação nova
				- Aprender comandos básicos de HTML")
?>

<h2>Feedback:</h2>

<?php
	echo nl2br("- Disafiadora
	- Diferenciada
	- Interessante
	")
?>

<img src="Tux.png">
<style>
	img {				/*configurações da imagem*/
		opacity: 85%;	/*ocupacidade*/
	}
	img:hover {			/*configurações da imagem quando o mouse estiver sobre a imagem*/
		opacity: .25;		/*ocupacidade*/
	}
</style>
</body>
</html>