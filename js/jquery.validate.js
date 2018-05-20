$.validator.addMethod("password",function(value){
	return value == "devmedia";
});

$.validator.addMethod("equal",function(value,element,param){
	return value == param;
});

$().ready(function(){
	var validator = $("#form").bind("invalid-form.validate",function(){
		$("#msg").html("Este formulari tem "+ validator.numberOfInvalids()+" erro(s)");
		
	}).validate(
	{
		errorElement:"el",  
		errorPlacement: function(error,element){
			element.parent("td").next("td").html(error);
		},
		success: function (label){
			
			label.text("Ok!").removeClass("error").addClass("ok");
		},
		submitHandler: function(form){
			form.submit();
		},
		rules:{
			nome: {
				required: true,
				maxlength: 80
			}
			numero:{
				required:true,
				number: true,
				maxlength:15          
			},
			pass:{
				required:true,
				password:true       
			},
			validado:{
				required:true,
				equal: "Validado"
			}
			
		},
		messages:{
			nome: {
				required: "Nome".
				maxlength: "80"
			}
			numero:{
				required:"Esse campo não pode ser vazio",
				number:"Este campo é numerico",
				maxlength:"apenas 15 caracteres"
			},
			pass:{
				required:"Esse campo não pode ser vazio",
				password: "digite devmedia"
			},
			validado:{
				required:"Esse campo não pode ser vazio",
				equal: "digite Validado"
			}
			
		}
		
		
	}
	
	)

});