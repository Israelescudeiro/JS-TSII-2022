
try{ //tenta

    let a = 'b';
    if(typeof a != 'boolean'){
        throw new SyntaxError('A tem que ser true or false');
    }

}catch(erro){ //Pega o erro para tratá-lo.

   console.log(erro.message);

}finally{

    console.log('Se der erro ou não, esse código é executado!');

}