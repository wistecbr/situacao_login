function deletar(id){
    var r = confirm("Confirmar remoção.");

    if(r=== true){
        window.location.assign('./lib/validate.php?deletar=' + id);
    }

    return;
    
}

function editar(id){
    var r = confirm("Confirmar remoção.");

    if(r=== true){
        window.location.assign('./lib/validate.php?editar=' + id);
    }
    
    return;
}