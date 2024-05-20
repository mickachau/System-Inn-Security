//** Funcion para confirmar si se desea eliminar el usuario

function confirmacion (ev){
    if(confirm("¿Esta seguro que desea eliminar este registro?")){
    return true;
    }else{
        ev.preventDefault();
    }
}

let linkEliminar = document.querySelectorAll('.table_item_link');
for(let i=0; i<linkEliminar.length; i++ ){
    linkEliminar[i].addEventListener('click', confirmacion);
}
