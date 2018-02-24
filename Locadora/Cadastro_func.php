<!DOCTYPE html>
    <html>
        <head>
            <title>Cadastro de Funcionário</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
            maximum-scale=1.0,minimum-scale=1.0">
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="css/MeuEstilo.css">
        </head>
        <body class="imagem">
            <div class="container padrao">
                
                <form method="post" action="?enviar=true" class="">
                 
                    <fieldset class="col-md-offset-3">
                    <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" name="nome" placeholder="Digite seu Nome" class="form-control tamanho">
                    </div>
                    <div class="form-group">
                    <label class="control-label">Telefone:</label>
                    <input type="tel" name="fone" placeholder="Digite seu número" class="form-control tamanho">
                    </div>
                    <div class="form-group">
                    <label class="control-label">Endereço</label>
                    <input type="text" name="endereco" placeholder="Digite seu Endereço" class="form-control tamanho">
                    </div>
                    
                    </fieldset>
                    
                </form>
            </div>
             <div class="icone row">
                <!--
                    <img src="imagens/desempenho.jpg"/>
                -->
                </div>
        </body>
    </html>