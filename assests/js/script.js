function deletar(id){
    let r = confirm("Tem certeza que deseja deletar essa linha?");

    if(r === true){
        window.location.assign('./lib/valida.php?deletar=' + id);
    }

    return;
}

function editar(id){
    let r = confirm("Tem certeza que deseja editar essa linha?");

    if(r === true){
        window.location.assign('./lib/valida.php?editar=' + id);
    }

    return;
}
