function calcular() {
var formulario = document.getElementById("formulario");
var kilos = +formulario.kilos.value;
var metros = +formulario.metros.value;
var altura = (metros * 100) / 100;
var imc = kilos / (altura * altura);
formulario.imc.value = imc.toFixed(2);

if (imc < 18.5) {
    alert("Você está abaixo do peso ideal.");
        }
        else if (imc > 18.5 && imc <= 24.9) {
            alert("Você está no peso ideal.");
        }
        else if (imc > 24.9 && imc <= 30) {
            alert("Você está com sobrepeso.");
        }
        else {
            alert("Você está acima do peso.");
        }
}
