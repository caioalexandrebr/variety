/* NOME E E-MAIL VÃLIDO */
function validacao() {

	var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

	if(document.form.name.value==""){
		document.form.name.style.border = "1px solid #ef3c59";
		document.form.name.style.padding = "13px 20px 13px 40px";
		alert("Por favor, preencha o campo nome.");
		document.form.name.focus();
		return false;
	}
	/*if(document.form.email.value=="" || document.form.email.value.indexOf('@')==-1 || document.form.email.value.indexOf('.')==-1 || !filter.test(document.form.email.value) ) {
		document.form.email.style.border = "1px solid #ef3c59";
		alert("Por favor, digite um endereÃ§o de e-mail vÃ¡lido.");
		document.form.email.focus();
		return false;
	}*/
}

/* MÃ¡scara Phone (DDD) 00000-0000 */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,"");             //Remove tudo o que nÃ£o Ã© dÃ­gito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parÃªnteses em volta dos dois primeiros dÃ­gitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hÃ­fen entre o quarto e o quinto dÃ­gitos
    return v;
}
function id( el ){
	return document.getElementById( el );
}
window.onload = function(){
	id('phone').onkeyup = function(){
		mascara( this, mtel );
	}
}