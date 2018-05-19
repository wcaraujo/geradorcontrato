<html>
<head>
    <title>Atualização Cadastral</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="js/jquery-3.1.1.js" type="text/javascript"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>

</head>
<body>
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form method="POST" novalidate="novalidate" style="display: block;">
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <label>Plano*</label>
                    <select name="plano" class="form-control selectpicker" >
                        <option value=" ">-</option>
                        <option>UAR-CP</option>
                        <option>USRC</option>
                        <option >USR-CP</option>
                        <option >UPRC</option>
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
                    <label>Nome*</label>
                    <input type="text" class="form-control" name="nome" id="nome_benef"  style="text-transform: uppercase;">
                </div>
                <div class="col-sm-3 cp-data">
                    <label>Data de Nascimento*</label>
                    <input type="text" class="form-control" name="datanascimento" id="datanascimento" style="text-transform: uppercase;">
                </div>
                <div class="col-sm-3">
                    <label>Estado Civil*</label>
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
                    <label>CPF*</label>
                    <input type="text" class="form-control" name="cpf" id="cpf" style="text-transform: uppercase;">
                </div>
                <div class="col-sm-3">
                    <label>Cartão Nacional de Saúde</label>
                    <input type="text" class="form-control" name="cns" id="cartao_nacional_saude" style="text-transform: uppercase;">
                </div>
                <div class="col-sm-3">
                    <label>RG*</label>
                    <input type="text" class="form-control" name="rg" id="rg" style="text-transform: uppercase;">
                </div>
                <div class="col-sm-3">
                    <label>Orgão Emissor*</label>
                    <select name="estadocivil" class="form-control selectpicker" >
                        <option value=" ">-</option>
                        <option>SSP</option>
                        <option>Outros Emissores</option>                            
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label>Nome do Pai*</label>
                    <input type="text" class="form-control" name="nomepai" id="nomepai" style="text-transform: uppercase;">
                </div>
                <div class="col-sm-6">
                    <label>Nome do Mãe*</label>
                    <input type="text" class="form-control" name="nomemae" id="nomemae" style="text-transform: uppercase;">                    
                </div>
            </div>               
            <div class="row">
                <div class="col-sm-3">
                    <label>CEP*</label>
                    <input type="text" class="form-control" name="cep" id="cep" style="text-transform: uppercase;">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <label>Endereço*</label>
                    <input type="text" class="form-control" name="rua" id="rua" style="text-transform: uppercase;">
                </div>
                <div class="col-sm-3">
                    <label>Bairro*</label>
                    <input type="text" class="form-control" name="bairro" id="bairro" style="text-transform: uppercase;">
                </div>  
                <div class="col-sm-3">
                    <label>Cidade*</label>
                    <input type="text" class="form-control" name="cidade" id="cidade" style="text-transform: uppercase;">
                </div>
                <div class="col-sm-1">
                    <label>Estado*</label>
                    <input type="text" class="form-control" name="uf" id="uf" style="text-transform: uppercase;">
                </div>
            </div>                          
            <div class="row">
                <div class="col-sm-4">
                    <label>E-mail</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="email@dominio.com.br" style="text-transform: uppercase;">
                </div>
                <div class="col-sm-4">
                    <label>Telefone Residencial</label>
                    <input type="text" class="form-control" name="telefone1" id="telefone1" placeholder="xx-xxxxxxxx" maxlength="20" style="text-transform: uppercase;">
                </div>
                <div class="col-sm-4">
                    <label>Celular*</label>
                    <input type="text" class="form-control" name="telefone2" id="telefone2" placeholder="xx-xxxxxxxxx" maxlength="20" style="text-transform: uppercase;">
                </div>                
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label>Comercial/Contato</label>
                    <input type="text" class="form-control" name="telefone3" id="telefone3" placeholder="xx-xxxxxxxx" maxlength="20" style="text-transform: uppercase; border-color: orange;">
                </div>                    
            </div>

            <div class="row">
                <div class="col-sm-10">
                    <label>OBS. Caso não haja nenhuma alteração, também é necessário a confirmação das informações.</label>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group ">
                    <button type="submit" class="btn btn-success">Gerar Contrato</button>
                    <button type="reset" class="btn btn-warning"> Limpar Dados</button>

                </div>
            </div>
        </form>
        <br>
    </div>
    <div class="col-md-2"></div>        
</body>
</html>