function test_form(){
    let name = document.forms["formprofessor"]["professor"].value
    let cpf = document.forms["formprofessor"]["cpf"].value
    if(name === ""){
        alert("You can't subimit the form without name")
        return false
    }else if(cpf === ""){
        alert("You can't subimit the form without cpf")
        return false
    }

    return true
}

function mask_cpf(input){
    let value =input.value
    input.setAttribute("maxlength",14)
    if(value.length == 3 || value.length == 7){
        input.value = value + '.'
    }
    if(value.length == 11){
        input.value = value + '-'
    }
    return true
}

function mask_cep(input){
    let value =input.value
    input.setAttribute("maxlength",9)
    if(value.length == 5){
        input.value = value + '-'
    }
}

function mask_tel(input){
    let value =input.value
    input.setAttribute("maxlength",15)
    if(value.length == 1){
        input.value = '(' + value
    } 
    if(value.length == 3){
        input.value = value  + ')' + ' '
    } 
    
    if(value.length == 10){
        input.value = value  + '-'
    }
}