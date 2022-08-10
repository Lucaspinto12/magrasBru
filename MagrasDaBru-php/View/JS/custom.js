async function visUsuario(id){
    //console.log(id);
    const dados = await fetch('visualizar.php?id=' + id);
    const resposta = await dados.json();
    //console.log(resposta);

    if(!resposta['status']){
        document.getElementById('msgAlerta').innerHTML = resposta['msg'];
    }else{
        document.getElementById('msgAlerta').innerHTML = "";
        const visModal = new bootstrap.Modal(document.getElementById('visUsuarioModal'));
        visModal.show();

        document.getElementById("idUsuario").innerHTML = resposta['dados'].id;
        document.getElementById("nomeUsuario").innerHTML = resposta['dados'].nome;
        document.getElementById("emailUsuario").innerHTML = resposta['dados'].email;
        document.getElementById("logradouroUsuario").innerHTML = resposta['dados'].logradouro;
        document.getElementById("numeroUsuario").innerHTML = resposta['dados'].numero;
    }

}