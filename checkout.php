<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Checkout Mirror Fashion</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/bootstrap.css">        
    </head>
    
    <body>
        
        <style>body {padding-top: 70px;}</style>
        <style>.navbar {margin: 0;}</style>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">Mirror Fashion</a>
                <button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse"><span class="glyphicon glyphicon-align-justify"></span></button>
            </div>
            
            <ul class="nav navbar-nav collapse navbar-collapse">
                <li><a href="sobre.php" title="link para a pagina sobre a empresa mirror fashion">Sobre</a></li>
                <li><a href="#">Ajuda</a></li>
                <li><a href="#">Perguntas Frequentes</a></li>
                <li><a href="#">Entre em contato</a></li>
            </ul>
        </nav>
        
        <div class="jumbotron">
            <div class="container">
                <h1>Ótima escolha!</h1>
                <p>Obrigado por comprar na Mirror Fashion!
                Preencha seus dados para efetivar a compra.</p>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                
                <div class="col-sm-4 col-lg-3">
                    
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h2 class="panel-title">Sua compra</h2>
                        </div><!-- fim do .panel-heading -->

                        <div class="panel-body">
                            
                            <img src="img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png" class="img-thumbnail img-responsive">
                            
                            <dl>
                                <dt>Produto</dt>
                                <dd><?php echo $_POST['nome'] ?></dd>

                                <dt>Preço</dt>
                                <dd id="preco"><?php echo $_POST['preco'] ?></dd>

                                <dt>Cor</dt>
                                <dd><?php echo $_POST['cor'] ?></dd>

                                <dt>Tamanho</dt>
                                <dd><?php echo $_POST['tamanho'] ?></dd>
                            </dl>
                            
                            <div class="form-group">
                                <label for="qt">Quantidade</label>
                                <input id="qt" class="form-control" type="number" min="0" max="99" value="1">
                            </div>
                            
                            <div class="form-group">
                                <label for="total">Total</label>
                                <output for="qt valor" id="total" class="form-control">
                                    <?= $_POST["preco"] ?>
                                </output>
                            </div>
                            
                        </div><!-- fim do .panel-body -->

                    </div><!-- fim do panel -->
                    
                </div>

                    <form class="col-sm-8 col-lg-9">
                        
                        <div class="row">

                            <fieldset class="col-md-6"> <!-- fieldset para dados pessoais -->

                                <legend>Dados pessoais</legend>

                                <div class="form-group">
                                    <label for="nome">Nome completo</label>
                                    <input type="text" class="form-control" id="nome" name="nome" autofocus required="required">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
                                </div>

                                <div class="form-group">
                                    <label for="cpf">CPF</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required="required" data-mask="999.999.999-99">
                                </div>

                                <div>
                                    <label>
                                        <input type="checkbox" value="sim" name="span" checked>
                                        Quero receber  spam da Mirror Fashion
                                    </label>
                                </div>

                            </fieldset><!-- fim do fieldset para dados pessoais -->

                            <fieldset class="col-md-6"> <!-- fieldset para o cartão de crédto -->

                                <legend>Cartão de crédito</legend>

                                <div class="form-group">
                                    <label for="numero-cartao">Número - CVV</label>
                                    <input type="text" class="form-control" id="numero-cartao" name="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
                                </div>

                                <div class="form-group">
                                    <label for="bandeira-cartao">Bandeira</label>
                                    <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                                        <option value="master">MasterCard</option>
                                        <option value="visa">VISA</option>
                                        <option value="amex">American Express</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="validade-cartao">Validade</label>
                                    <input type="month" class="control" id="validade-cartao" name="validade-cartao">
                                </div>

                            </fieldset><!-- fim do fieldset para o cartão de crédito -->
                            
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg pull-right">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                            Confirmar Pedido
                        </button>
                    </form>
            </div><!-- fim .row -->
        </div><!-- fim .container -->
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/inputmask-plugin.js"></script>        
        <script src="js/converteMoeda.js"></script>
        <script src="js/testaconversao.js"></script>
        <script src="js/total.js"></script>
    </body>
</html>