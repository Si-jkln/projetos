//Váriaveis sevem para armazenar dados

var numero = 5; //tipo inteiro
var nome = 'Jussi'; // tipo string
var preco = 19.90; // tipo decimal
var ativo = true; // tipo booleano
var idade = 70;
var querVotar = true

alert('Olá ' + nome);

//estrutura condicional 
// > maior
// < menor
// >= maior igual
// <= menor igual
// === identico
// !== diferente 
// && e
// || ou

//verifica sei idad for maior que 18 "E" idade menor que 65
if(idade >= 18 && idade <= 65){
    alert('Pode votar ' + nome + ' idade é: ' + idade);

} 
else if(idade > 65 && querVotar == true){
    alert("pode votar, mas não é obrigatorio");

} else{
    alert('Não pode votar');
}

//estrutura de repetição
var contador = 0;
console.log("teste")

//enquanto contador for menor que 10
while (contador <= 10){
    //imprime o contador
    console.log(contador);
    //soma +1 ao contador
    contador++;
}


//criando listas
var nomes = ['Nando', 'Astrogildo', 'Omar', 'Enéias', 'Silvio'];
//imprima o nando
console.log(nomes[0]);
console.log(nomes[1]);

//var inicial -condição de continuação - incrementador
for(contador = 0; contador < nomes.length; contador++){
    console.log(nomes[contador]);
}

var num1;


//criado funções 
function fazerVenda(){
    num1 = document.getElementById("n1").value;
    console.log("Venda efetuada!"s);
    alert("Venda efetuada");
}

















