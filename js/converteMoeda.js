function numberParaReal(numero){ 
var formatado = "R$" + numero.toFixed(2).replace(".",",");
return formatado;
}



function realParaNumber(texto){   
var compativelComParsefloat = texto.replace("R$","");
compativelComParsefloat = compativelComParsefloat.replace(",",".");
var valor = parseFloat(compativelComParsefloat);
return valor;
}