//**modo oscuro

const Switch = document.querySelector('.switch');

document.addEventListener('DOMContentLoaded', e=>{
    cargarLightModeDesdeLocalStorage()
    Switch.addEventListener('click', toggleLightMode) 
})

function toggleLightMode(){
    Switch.classList.toggle('active');
    document.body.classList.toggle('active');
    guardarLightModeEnLocalStorage(Switch.classList.contains('active'));
}

function guardarLightModeEnLocalStorage(estado){
    localStorage.setItem('lightMode', estado)
}

function cargarLightModeDesdeLocalStorage(){
    const lightModeModeGuardado = localStorage.getItem('lightMode') === 'true'
    if(lightModeModeGuardado){
        Switch.classList.add('active');
        document.body.classList.add('active');
    }
}




