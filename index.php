<html>
<head>
    <title>Atualização Cadastral</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="js/jquery-3.1.1.js" type="text/javascript"></script>

    <script src="js/scripts.js" type="text/javascript"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>    


    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form method="POST" novalidate="novalidate" id="form" action="montarcontrato.php" style="display: block;">
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <label>Plano</label>
                    <select name="plano" class="form-control selectpicker" required>
                        <option value=" ">-</option>
                        <option>UAR-CP</option>
                        <option>USRC</option>
                        <option >UPRC</option>
                        <option >USR-CP</option>                        
                        <option >USNC</option>
                        <option >UPNC</option>                                   
                    </select>
                </div>
                <div class="col-sm-3">
                    <label>Tabela</label>
                    <select name="tabela" class="form-control selectpicker" >
                        <option value=" ">-</option>
                        <option>1ª</option>
                        <option>2ª</option>
                        <option>3ª</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome" maxlength="50" id="nome" style="text-transform: uppercase;" required>
                </div>
                <div class="col-sm-3 cp-data">
                    <label>Data de Nascimento</label>
                    <input type="text" class="form-control" name="datanascimento" id="datanascimento" style="text-transform: uppercase;">
                </div>
                <div class="col-sm-3">
                    <label>Estado Civil</label>
                    <select name="estadocivil" class="form-control selectpicker" >
                        <option value=" ">-</option>
                        <option>Solteiro(a)</option>
                        <option>Casado(a)</option>
                        <option >Divorciado(a)</option>
                        <option >Viuvo(a)</option>
                        <option >Outro</option>
                    </select>
                </div>
            </div>
            <div class="row">                   
                <div class="col-sm-3">
                    <label>CPF</label>
                    <input type="text" class="form-control" name="cpf" id="cpf" style="text-transform: uppercase;">
                </div>
                <div class="col-sm-3">
                    <label>Cartão Nacional de Saúde</label>
                    <input type="text" class="form-control" name="cns" maxlength="15" id="cns" style="text-transform: uppercase;">
                </div>
                <div class="col-sm-3">
                    <label>RG</label>
                    <input type="text" class="form-control" name="rg" id="rg" style="text-transform: uppercase;">
                </div>
                <div class="col-sm-3">
                    <label>Orgão Emissor</label>
                    <select name="orgaoemissor" class="form-control selectpicker" >
                        <option value=" ">-</option>
                        <option>SSP</option>
                        <option>Outros Emissores</option>                            
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label>Nome do Pai</label>
                    <input type="text" class="form-control" name="nomepai" id="nomepai" style="text-transform: uppercase;">
                </div>
                <div class="col-sm-6">
                    <label>Nome da Mãe</label>
                    <input type="text" class="form-control" name="nomemae" id="nomemae" style="text-transform: uppercase;">                    
                </div>
            </div>               
            <div class="row">
                <div class="col-sm-3">
                    <label>CEP</label>
                    <input type="text" class="form-control" name="cep" id="cep" style="text-transform: uppercase;">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <label>Endereço</label>
                    <input type="text" class="form-control" name="rua" id="rua" style="text-transform: uppercase;">
                </div>
                <div class="col-sm-3">
                    <label>Bairro</label>
                    <input type="text" class="form-control" name="bairro" id="bairro" style="text-transform: uppercase;">
                </div>  
                <div class="col-sm-3">
                    <label>Cidade</label>
                    <input type="text" class="form-control" name="cidade" id="cidade" style="text-transform: uppercase;">
                </div>
                <div class="col-sm-1">
                    <label>Estado</label>
                    <input type="text" class="form-control" name="uf" id="uf" style="text-transform: uppercase;">
                </div>
            </div>                          
            <div class="row">
             <div class="col-sm-3">
                <label>Telefone 1</label>
                <input type="text" class="form-control" name="telefone1" id="telefone1" style="text-transform: uppercase;">
            </div>
            <div class="col-sm-3">
                <label>Telefone 2</label>
                <input type="text" class="form-control" name="telefone2" id="telefone2" style="text-transform: uppercase;">
            </div>   
            <div class="col-sm-6">
                <label>E-mail</label>
                <input type="text" class="form-control" name="email" id="email">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2">
            <button type="submit" class="btn btn-primary"><span>Gerar Contrato</span></button>                
            </div>
        </div>
    </form>
</div>
<div class="col-md-2"></div> 
</body>
</html>