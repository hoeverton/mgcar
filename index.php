<?php
require('db/conexao.php'); 
if (isset($_POST["nome"]) && isset($_POST["cel"])) {
  if(empty($_POST["nome"]) or empty($_POST["nome"])){
    $erro_geral = "Todos os campos são obrigatorios!";
    echo $erro_geral;
  }else{
    $nome = limparPost($_POST["nome"]);
    $cel = limparPost($_POST["cel"]);

    

    $sql= $pdo->prepare("INSERT INTO usuarios VALUES (null,?,?)");
    $sql->execute(array($nome,$cel));
  }
  
    
      
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Somos um empresa de rastreamento veicular">
  <meta name="keywords" content="rastreamento, veiculos,moto,frotas,carros particulares,app,assistencia 24 horas">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/responsivo.css">
  <link rel="stylesheet" href="./style/bootstrap.min.css">
  <title>Document</title>
</head>
<body>
  <nav class="navbar-topo">
      <div class="logo">
        <img src="./img/lOGO_HORIZONTAL copiar.png" width="135" alt="" srcset="">
      </div>
      <div class="menu">
        <a href="https://www.facebook.com/profile.php?id=100079894730541" class="link-icones-topo-sociais-primeiro" target="_blank"><img src="./img/facebook (1).png" alt=facebook" class="icones-topo-sociais"></a>
        <a href="https://www.instagram.com/mgcartelemetria/" class="link-icones-topo-sociais" target="_blank"><img src="./img/instagram (1).png" alt="instagram" class="icones-topo-sociais"></a>
        <a href="https://api.whatsapp.com/send?phone=5541995002460&amp;text=Ol%C3%A1%2C%20eu%20quero%20mais%20informa%C3%A7%C3%B5es%20sobre%20rastreamento%20veicular" class="link-icones-topo-sociais" target="_blank"><img src="./img/whatsapp (5).png" alt="whatssapp" class="icones-topo-sociais"></a>
      </div>
  </nav>
  <section class="container-geral">
    <div class="banner">
      <img src="./img/Banner1 copiar.jpg"   class="img-banner img-fuid" alt="">
    </div>
    <div class="whats-desc">
          <div class="desc">
              <div class="desc-int">
                <h1>Quer um desconto  ?</h1>
                <p>Deixe seu contato para concorrer um desconto </p>
              </div>
          </div>
          <div class="whats">

              <div class="formulario-whatsapp">
                <form action="" method="post" class="form-menor-whats">
                  <label for="usuario">Nome</label>
                  <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
                  
                  <label for="senha">Celular</label>
                  <input type="tel" name="cel" id="cel" placeholder="Digite com 55 + DDD">
                  <button type="submit" name="submit">Enviar</button>
                </form>
              </div>
            
          </div>
    </div>
    <div class="somos" id="somos">
        <div class="somos-int">
          <h2 class="quem">Quem Somos</h2>
           <p>Somos uma empresa que presta serviços de rastreamento de veiculas particulares e para frotas, estamos a 23 anos no ramo automobilístico, contamos com sistema inteligente para náuticos e para maquinas agrícolas. Temos o melhor sistema de rastreamento veicular com uma especializada em monitoramento e instalação, fornecemos aparelhos de última geração.</p>
        </div>
    </div>
    <div class="p-4 p-md-5 mb-4 rounded text-bg-dark text-center mt-2" id="servicos">
      <span class="servicos"><h2 class="quem">Serviços</h2></span>
      
      <div class="row">
        <div class="col">
            <img class="rast" width="40" src="./img/rastreamento.png" alt="">
          <p>Monitoramos particulare e frotas</p>
        </div>
        <div class="col">
          <img class="rast" width="40" src="./img/rastreamento.png" alt="">
          <p>Controle de consumo</p>
        </div>
        <div class="col">
          <img class="rast" width="40" src="./img/rastreamento.png" alt="">
          <p>Controle de horários</p>
        </div>
        <div class="col">
          <img class="rast" width="40" src="./img/rastreamento.png" alt="">
          <p>Rotas e trajetos</p>
        </div>
        <div class="col">
          <img class="rast" width="40" src="./img/rastreamento.png" alt="">
          <p>Suporte   24 horas</p>
        </div>
        <div class="col">
          <img class="rast" width="40" src="./img/rastreamento.png" alt="">
          <p>Sistema mobile ilimitado</p>
        </div>
        <div class="col">
          <img class="rast" width="40" src="./img/rastreamento.png" alt="">
          <p>Monitoramento em todo Brasil</p>
        </div>
        <div class="col">
          <img class="rast" width="40" src="./img/rastreamento.png" alt="">
          <p>Sistema bloqueio em caso de roubo</p>
        </div>
      </div>
    </div>
    <div class="whats-plug">
      <a target="_blank" href="https://api.whatsapp.com/send?phone=5541995002460&amp;text=Ol%C3%A1%2C%20eu%20quero%20mais%20informa%C3%A7%C3%B5es%20sobre%20rastreamento%20veicular" target="_blank"> <img src="./img/whatsapp (5).png" style="width: 50px;" alt="" srcset=""></a>
   </div>
  </section>
  <footer>
  <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">© 2022 Company, Inc</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#somos" class="nav-link px-2 text-muted">Quem Somos</a></li>
      <li class="nav-item"><a href="#servicos" class="nav-link px-2 text-muted">Serviços</a></li>
      
      
    </ul>
  </footer>
</div>
  </footer>
</body>
</html>