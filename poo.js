/*
class Usuario { //classe e definição dentro do bloco / definição do assunto, e tudo referente a classe é colocada dentro do bloco
    constructor () { //quando a classe é instânciada, é executado automaticamente
        this.nome = 'Bono'; //O this refere-se a algo dessa classe. 
    }
    listar() {
        //console.log('Lista usuario' , this.nome);
        this.mostrarMensagem();
    }
    editar() {
        console.log('Edita usuario');
    }
    cadastrar() {
        console.log('Cadastro feio');
    }
    mostrarMensagem(){
        alert('Mensagem p/ o usuário');
    }
}
let user = new Usuario; //pega as classes e joga na memoria, pega a classe e transforma no obj user...
//console.log(Usuario) //chama metodo do obj console
//metodo tem (), atributo não
user.listar();
*/

class Calculadora {

    constructor() // Executado assim que instancia a classe.
    {
        const operacao = document.getElementById('operacao').value;
        try{
            this.calcula(operacao);
        }catch(e){
            alert('Escolha uma operação');
        }
    }

    calcula(operacao)
    {
        const n1 = document.getElementById('num1').value;
        const n2 = document.getElementById('num2').value;

        let resultado;

        switch(operacao){
            case 'soma':
                resultado = this.soma(n1, n2);
                break;
            case 'subtracao':
                resultado = this.subtracao(n1, n2);
                break;
            default:
                throw SyntaxError('Operação não disponível');
        }

        this.exibeResultado(resultado);
    }

    soma(nm1, nm2)
    {
        let n1 =  Number(nm1);
        let n2 =  Number(nm2);

        return n1 + n2;
    }

    subtracao(nm1, nm2)
    {
        let n1 =  Number(nm1);
        let n2 =  Number(nm2);

        return n1 - n2;
    }

    exibeResultado(res)
    {
        document.getElementById('resultado').innerText = res;
    }

    static metodoStatico(){
        console.log("executou");
    }
}

class CalculadoraAvancada extends Calculadora {

    constructor(){
        super(); // Executa o constructor da classe que está sendo herdada. No caso executando o constructor da Calculadora.
    }
    
    multiplicacao(nm1, nm2)
    {
        let n1 =  Number(nm1);
        let n2 =  Number(nm2);

        return n1 * n2;
    }

    divisao(nm1, nm2)
    {
        let n1 =  Number(nm1);
        let n2 =  Number(nm2);

        return n1 / n2;
    }

    
    calcula(operacao) // Executando um Polimorfismo. Alterando a função existente porém só nessa classe. Se utilizar a "original" não seria afetado.
    {
        const n1 = document.getElementById('num1').value;
        const n2 = document.getElementById('num2').value;

        let resultado;

        switch(operacao){
            case 'soma':
                resultado = this.soma(n1, n2);
                break;
            case 'subtracao':
                resultado = this.subtracao(n1, n2);
                break;
            case 'multiplicacao':
                resultado = this.multiplicacao(n1, n2);
                break;
            case 'divisao':
                resultado = this.divisao(n1, n2);
                break;
            default:
                throw SyntaxError('Operação não disponível');
        }

        this.exibeResultado(resultado);
    }

}

document.getElementById('calc').addEventListener('click', function(e){
    e.preventDefault();
    
    Calculadora.metodoStatico();
    
    const obj = new CalculadoraAvancada; // Instancia a classe.
});