<!DOCTYPE html>
    
    
    <html>
        <head>
            <title>Exercicio Teste</title>
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,
            minimum-scale=1.0">
        </head>
        <body>
           <section class="row">
               <section class="col-md-4">
                   <table class="table table-striped table-hover">
                     <caption>Tabelas de Cd's</caption>
                     <tr>
                        <th>Nome</th>
                        <th>Nome do Album</th>
                        <th>Estilo</th>
                     </tr>
                     <tr>
                        <?php
                           include_once("Cd.php");
                          $cd = new Cd("Luan Santana","Dois Corações","Sertanejo");
                          $cd->informar();
                     ?>
                     </tr>
                   </table>
               </section>
               <section class="col-md-4">
                  <table class="table table-striped table-hover">
                    <caption>Tabelas de DVD'S</caption>
                    <tr>
                        <th>Titulo</th>
                        <th>Estilo</th>
                    </tr>
                    <tr>
                        <?php
                           include_once("Dvd.php");
                           $dvd = new  Dvd("O Vingador","Ação");
                           $dvd->informar();
                        ?>
                    </tr>
                  </table>
               </section>
               <section class="col-md-4 table-responsive">
                    <table class="table table-hovers table-condensed">
                        <caption>Tabela de Bluray</caption>
                        <tr class="success">
                            <th>Titulo</th>
                            <th>Estilo</th>
                            <th>Resolução</th>
                        </tr>
                        <tr>
                            <?php
                            include_once("Bluray.php");
                            $bluray = new Bluray("O Mentiroso","Comédia","Full HD");
                            $bluray->informar();
                            ?>
                        </tr>
                    </table>
               </section>
           </section>
           
           <?php
           echo "<br>";
           include_once("Usuario.php");
           include_once("Teste.php");
           include_once("Locadora.php");
           include_once("Locacao.php");
           $teste = new Teste();
           $locadora = new Locadora(new Usuario("","","",0),new Funcionario("","","",0),new Cd("","",""),new Dvd("",""),
                                    new Bluray("","",""),new Locacao(new Usuario("","","",0),new Cd("","","")) );
           $userA = new Usuario("Ricardo","3439-5149","Rua Manoel",4);
           $userB = new Usuario("Ricardo","3439-5149","Rua Manoel",4);
           $userC = $userA;
           $teste->comparar($userA,$userC);
           echo "<br>";
            if(gettype($userA) == "object"){
                echo "É um objeto!!";
            }
           $usuario = $teste->criarUsuario("Williams Ricardo","3439-5149","Rua Manoel de souza",4);
           $funcionario = $teste->criarUsuario("Williams Ricardo","3439-5149","Rua Manoel de souza",4);
           ?>
           <ul>
            <?php
            echo "<li>".$usuario->getNome()."</li>";
            echo "<li>".$usuario->getEndereco()."</li>";
            echo "<li>".$usuario->getTelefone()."</li>";
            echo "<li>".$usuario->getQtd_locacao()."</li>";
            echo "<h3>Funcionario</h3>";
            echo "<br>";
            
            echo "<li>".$funcionario->getNome()."</li>";
            echo "<li>".$funcionario->getEndereco()."</li>";
            echo "<li>".$funcionario->getTelefone()."</li>";
            $locar = $locadora->criarUsuario("Williams Ricardo","3439-5149","Rua Manoel de souza",5);
            
            echo "<h3>Locadora</h3><br>";
            
            echo "<li>".$locar->getNome()."</li>";
            echo "<li>".$locar->getEndereco()."</li>";
            echo "<li>".$locar->getTelefone()."</li>";
            echo "<li>".$locar->getQtd_locacao()."</li>";
            echo "<li>".$teste->objeto($locar)."</li>";
            ?>
           </ul>
        </body>
    </html>
