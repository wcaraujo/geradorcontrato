$(document).ready(function () {

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



$(document).ready(function() {

            $("#formularioContrato").submit(function(e){
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: $(this).attr("action"),
                    data: $(this).serialize(),
                    success: function(mensagem){
                        //alert("ok");
                        $("#retorno").html(mensagem);
                        //$("#retorno").html(mensagem).slideDown('slow');
                        
                        $("#formularioContrato").trigger('reset');
               

                    },           
                });
            });
            
        });