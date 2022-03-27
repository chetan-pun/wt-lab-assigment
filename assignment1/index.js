let randomNumber = Math.round((Math.random()*19)+1);
let enteredNumber = document.getElementById('input')
let num = document.getElementById('num');
let output = document.getElementById('output');
let score = document.getElementById('score');
let enter = document.getElementById('enter');




if(document.getElementById('highest') !== null){
    document.getElementById('highest').innerText = `Highest score : ${localStorage.getItem('highest')}`
}

console.log(localStorage.getItem('highest'))
function checkNumber(a){
    if(a === randomNumber){
        
        output.innerText = 'You won';
        num.innerText = randomNumber;

        if(localStorage.getItem('highest') === null){
            
            localStorage.setItem('highest',score.innerText);
        }
        else{
            if(score.innerText > +localStorage.getItem('highest')){
                localStorage.setItem('highest',score.innerText);
                document.getElementById('highest').innerText = `Highest score : ${localStorage.getItem('highest')}`

            }
        }

    }else if(a>randomNumber){
        output.innerText = 'Smaller';
        score.innerText = +score.innerText - 2;
    }
    else{
        output.innerText = 'Greater';
        score.innerText = +score.innerText - 2;
    }
}


enter.addEventListener('click',function(){

    if(+score.innerText === 0){
        return alert('You lost');
    }
    checkNumber(+enteredNumber.value)
})



document.getElementById('again').addEventListener('click',function(){
    enteredNumber.value = null;
    score.innerText = 20;
    output.innerText = 'Guess number between 1-20';
    num.innerText = '?';
    randomNumber = Math.round((Math.random()*19)+1);
})
