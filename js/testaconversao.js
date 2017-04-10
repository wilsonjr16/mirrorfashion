var formatado = numberParaReal(9.9);
var numero = realParaNumber("R$120,35");

console.log(formatado);
console.log(numero);

if(formatado == "R$9,90") {
    console.log("Conversão de moeda está funcionando");
}else{
    console.log("conversão de moeda não está funcionando");
}