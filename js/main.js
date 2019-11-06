function validacao(){
	if (document.form.nome.value ==""){
	   alert("Por favor, preencha o campo nome.");
	   document.form.nome.focus();
	   return false;
}

	if (document.form.sobrenome.value ==""){
	   alert("Por favor, preencha o campo sobrenome.");
	   document.form.sobrenome.focus();
	   return false;
}
	if (document.form.email.value ==""||
	    document.form.email.value.indexOf('@')==-1 ||
	    document.form.email.value.indexOf('.')==-1){

	   alert("Por favor, digite um endereço de email válido.");
	   document.form.email.focus();
	   return false;
}
	var senha = document.getElementById('senhaCampo');
	if (senha.value.length < 6 || senha.value.length > 10) {
		alert('Informe uma senha com no minimo seis caracteres e no maximo 10 caracteres');
		return false;
	}
}