function deletar(id){
    let r = confirm("Confirmar remoção.");

    if(r === true){
        window.location.assign('./lib/validate.php?deletar=' + id);
    }

    return;
}

function editar(id){
    let r = confirm("Confirmar remoção.");

    if(r === true){
        window.location.assign('./lib/validate.php?editar=' + id);
    }
    
    return;
}