function deletar(id){
    console.log('remover', id);
    window.location.assign('./lib/valida.php?remover=' + id)
}

function editar(id){
    console.log('Editar', id);
    window.location.assign('./lib/valida.php?editar=' + id)
}
