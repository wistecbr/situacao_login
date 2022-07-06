const detelarUser = (id) => {
    const result = confirm(`Deseja mesmo exluir o usuário de id: ${id}`)
    if(result){
        window.location.assign(`./lib/valida.php?deletar=users&id=${id}`);
    }
    return
} 
const editarUser = (id) => {
    const result = confirm(`Deseja mesmo editar o usuário de id: ${id}`)
    if(result){
        window.location.assign(`./editUser.php?id=${id}`);
    }
    return
}
