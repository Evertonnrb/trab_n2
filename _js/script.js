//alert("work");
function validaCpf(){
   //var _cpf = document.getElementById('cpf').value;  
   if(cpf.value == "" && cpf.value.length<1){
        alert("Preencha o campo CPF");
        document.getElementById('cpf').value;
        return false;
   } 
   if(isNaN(cpf)){
       alert("Cpf inválido");
       document.getElementById.innerHtml = "";
       return false;
   }
   if(cpf<13){
       alert("Cpf inválido");
       document.getElementById.innerHtml = "";
        return false;
    }
   return true;
};

function validaForm(frm){
    if(frm.nome.value=="" || frm.nome.value == null || frm.nome.value.length<3){
        alert("Preencha o campo nome");
        frm.nome.focus();
        return false;
    }
    if(frm.sobrenome.value=="" || frm.sobrenome.value == null || frm.sobrenome.value.length<3){
        alert("Preencha o campo sobrenome");
        frm.nome.focus();
        return false;
    }
    return true;
};









