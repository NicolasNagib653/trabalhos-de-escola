const input = document.querySelector('#Cpf')

input.addEventListener('keypress', () =>{
    let inputlength = input.value.length

    if(inputlength === 3 || inputlength === 7){
        input.value += '.'
    }
    else if(inputlength === 11){
        input.value += "-"
    }
    
})

const date = document.getElementById('date')

function validate(item) {
    item.setCustomValidity('');
    item.checkValidity('');

    if(item == date){
        let hoje = new Date();
        let dnasc = new Date(date.value);

        let idade = hoje.getFullYear() - dnasc.getFullYear() 
        let m = hoje.getMonth() - dnasc.getMonth()
        if(m < 0 || (m === 0 && hoje.getDate() < dnasc.getDate())){
            idade--;
        }

        if(idade >= 0) document.getElementById('idade').value = idade + 'anos';
        else document.getElementById(idade).value = 'Ainda não nascido';

        if(idade > 130) item.setCustomValidity('Há algo errado com sua idade');
        else if(idade >= 18) item.setCustomValidity('');
        else item.setCustomValidity('Você precisa ser maior de 18 anos');
    }
}

date.addEventListener('input', function(){validate(date)});