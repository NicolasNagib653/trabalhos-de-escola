var cpf = document.getElementById("icpf")

cpf.addEventListener('keypress', () => {
    let cpflength = cpf.value.length
    if (cpflength === 3 || cpflength === 7) {
        cpf.value += '.';
    } else
        if (cpflength === 11) {
            cpf.value += "-";
        }
})

var senha    = document.getElementById('isenha')
var consenha = document.getElementById('iconsenha')

function validateSenha(){
    if(senha.value !== consenha.value){
        consenha.setCustomValidity('As senhas são diferentes')
    } else{
        consenha.setCustomValidity('')
    }
}

consenha.addEventListener('input', validate);

const date = document.getElementById('idata');

function validate() {
    date.setCustomValidity(''); // Limpe a mensagem de erro

    let hoje  = new Date();
    let dnasc = new Date(date.value);

    let idade = hoje.getFullYear() - dnasc.getFullYear();
    let m = hoje.getMonth() - dnasc.getMonth();
    if (m < 0 || (m === 0 && hoje.getDate() < dnasc.getDate())) {
        idade--;
    }

    if (idade >= 0) {
        document.getElementById('idade').value = idade + ' anos';
    } else {
        document.getElementById('idade').value = 'Ainda não nascido';
    }

    if (idade > 130) {
        date.setCustomValidity('Há algo errado com sua idade');
    } else if (idade >= 18) {
        date.setCustomValidity('');
    } else {
        date.setCustomValidity('Você precisa ser maior de 18 anos');
    }
}

date.addEventListener('input', validate);
senha.addEventListener('input', validateSenha);
consenha.addEventListener('input', validateSenha);
