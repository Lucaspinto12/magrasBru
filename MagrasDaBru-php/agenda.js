var buttonNovoEvento = document.getElementById('buttonNovoEvento');
var buttonCancelar = document.getElementById('buttonCancelar');
var novoEvento = document.getElementById('novoEvento');
var novoEvento = document.getElementById('novoEvento');
var formNovoEvento = document.getElementById('formNovoEvento');
var inputNomeEvento = document.getElementById('nomeEvento');
var inputDataEvento = document.getElementById('dataEvento');
function mostrarnovoEvento(){

 novoEvento.classList.remove('d-none');
}
function ocultarNovoEvento(){

    novoEvento.classList.add('d-none');
}
function salvarNovoEvento(event){
    event.preventDefault();
       var nomeEvento = inputNomeEvento.value;
      var dataEvento = new Date(inputDataEvento.value);
    console.log('salvar Novo Evento');
}
buttonNovoEvento.addEventListener('click', mostrarnovoEvento);
buttonCancelar.addEventListener('click', ocultarNovoEvento);
formNovoEvento.addEventListener('submit', salvarNovoEvento ); 