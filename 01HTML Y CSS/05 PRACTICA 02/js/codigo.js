const passInput = document.querySelector ('input[ type=password]');
const icon = document.querySelector('i');
passInput.addEventListener('input', function(){
    if(this.value.length > 0){
        icon.classList.add('show');
    } else{
        icon.classList.remove('show');
    }
});

icon.addEventListener('mousedown', function(){
    passInput.setAttribute('type', 'text');
});
icon.addEventListener('mouseup', function(){ 
    passInput.setAttribute('type', 'password'); 
})

const pas = document.getElementById('pas');
pas.addEventListener('input', function(){
    if(this.value.length<=6){
        pas.classList.add('red');
    }else if(this.value.length>=6){
        pas.classList.remove('red');
        pas.classList.add('green');
    }else {
        pas.classList.remove('green');
    }
});