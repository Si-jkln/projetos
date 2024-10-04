
//representa o botão de menu da classe celular
var iconeMenu = document.querySelector('.celular');
//represeta a lista do menu que esta invisel
var listaMenu = document.querySelector('.opcoes');

//monitora icone do menu, se esta tendo algum clique
iconeMenu.addEventListener('click', function() {
    //alternar classe 'opcoes' para 'mostrarMenu'
    listaMenu.classList.toggle('mostrarMenu');
});
