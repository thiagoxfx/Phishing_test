
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EBBQ7X3VR1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EBBQ7X3VR1');
</script>


<?php

include("ClassVisitas.php");

$Visitas=new ClassVisitas();
$Visitas->VerificaUsuario();




  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      echo"Bem-Vindo usuário da Prefeitura Municipal de Nova Lima, $login_cookie <br>";
      echo"\n<br/>";
      echo"<font color='red'>PARA ALTERAR A SUA SENHA, BASTA CLICAR NO LINK ABAIXO</font>";
    }else{
      echo"Bem-Vindo usuario da Prefeitura Municipal de Nova Lima <br>";
      echo"Para não perder sua conta<font color='red'> ALTERE SUA SENHA IMEDIATAMENTE</font> clicando no link abaixo";
      echo"<br><a href='cadastro.html'>Alterar senha Zimbra</a>";
    }
?>
