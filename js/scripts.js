$(document).ready(function () {

    // Método para pular campos teclando ENTER
    $('.pula').on('keypress', function (e) {
        var tecla = (e.keyCode ? e.keyCode : e.which);

        if (tecla == 13) {
            campo = $('.pula');
            indice = campo.index(this);

            if (campo[indice + 1] !== null) {
                proximo = campo[indice + 1];
                proximo.focus();
                e.preventDefault(e);
            }
        }
    });


    // Mascaras 
    $(document).ready(function() {
       $("#cpf").inputmask({
        mask: ["999.999.999-99", ],
        keepStatic: true
    });
       $("#cns").inputmask({
        mask: ["999999999999999", ],
        keepStatic: true
    });
       $("#datanascimento").inputmask({
        mask: ["99/99/9999", ],
        keepStatic: true
    });
       $("#cep").inputmask({
        mask: ["99999-999", ],
        keepStatic: true
    });
       $("#telefone1").inputmask({
        mask: ["(99) 9999-9999", "(99) 99999-9999", ],
        keepStatic: true
    });
       $("#telefone2").inputmask({
        mask: ["(99) 9999-9999", "(99) 99999-9999", ],
        keepStatic: true
    });
   });


    // Consultar o CEP
    $('#cep').on('blur', function () {

        if ($.trim($("#cep").val()) != "") {
            $("#mensagem").html('(Aguarde, consultando CEP ...)');
            $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep=" + $("#cep").val(), function () {
                if (resultadoCEP["resultado"]) {
                    $("#rua").val(unescape(resultadoCEP["tipo_logradouro"]) + " " + unescape(resultadoCEP["logradouro"]));
                    $("#bairro").val(unescape(resultadoCEP["bairro"]));
                    $("#cidade").val(unescape(resultadoCEP["cidade"]));
                    $("#uf").val(unescape(resultadoCEP["uf"]));
                }
                //$("#mensagem").html('');
            });
        }
    });
});


