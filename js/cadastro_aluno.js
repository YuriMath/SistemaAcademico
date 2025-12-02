
function test_form() {
    let aluno = document.forms["formalunos"]["aluno"].value;
    let cpf   = document.forms["formalunos"]["cpf"].value;

    if (aluno == "" ) {
        alert("Nome do aluno não informado");
        document.forms["formalunos"]["aluno"].focus();
        return false;
    }
    
    if (cpf == "") {
        alert("CPF do aluno não informado");
        document.forms["formalunos"]["cpf"].focus();
        return false;
    }
    
    return true;

}