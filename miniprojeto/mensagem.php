
<div style="background-color: white">
  <h2>Site do Grêmio</h2>
  <img src="https://www.gremio.net/assets_site/img/logo-gremio.png" class="img-responsive" alt="Grêmio Foot-Ball Porto Alegrense">
</div>
<div style="background-color: white">
  <br><br>
  <a href="index.php"> Inicio </a>
  <a href="?pg=quemsomos"> Quem somos </a>
  <a href="?pg=faleconosco"> Fale Conosco </a>
</div>
<br><br>
<div style="background-color: white">
<?php
$nome= $_REQUEST['nome'];
$email=$_REQUEST['email'];

echo "Obrigado $nome por nos mandar esta mensagem. <br>
Estaremos entrando em contato pelo email $email<br>
Vamos Grêmio!!!";

?>
<div style="background-color: white">
<br><br>
  <h2>Direitos Reservados de Luis Eduardo</h2>
</div>
<link rel ="stylesheet" href="style.css">