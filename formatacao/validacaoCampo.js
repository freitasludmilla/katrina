<script language="JavaScript" >
function enviardados()
{

if(document.dados.nome.value=="" ||
document.dados.nome.value.length < 8)
{
alert( "Preencha campo NOME corretamente!" );
document.dados.nome.focus();
return false;
}
}
return true;


</script>
