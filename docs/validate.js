    const form = document.querySelector('#form');
    const nameInput = document.querySelector('#name');
    const adressInput = document.querySelector('#adress');
    const cityInput = document.querySelector('#city');
    const emailInput = document.querySelector('#email');
    const pontorefInput = document.querySelector('#pontoref');
    const passwordInput = document.querySelector('#password');
    const repetInput = document.querySelector('#repet');
    const sexoInput = document.querySelector('#sexo');
    const adicionaisInput = document.querySelector('#adicionais');
    const campos = document.querySelectorAll('.required');

    form.addEventListener("submit",(event)=>{
        event.preventDefault();

   
    //Verifica se o nome está vazio    
    if(nameInput.value === ""){
        alert("Por favor, preencha o seu nome");
        return;
    } 
     //Verifica se o endereço está vazio
     if(adressInput.value === ""){
        alert("Por favor, preencha o seu endereço");
        return;
    }   
      //Verifica se a cidade está vazio
      if(cityInput.value === ""){
        alert("Por favor, preencha sua cidade");
        return;
    }  
    
     //Verifica se o email é valido
     if(emailInput.value === "" || !isEmailValid(emailInput.value)){
        alert("Por favor, preencha o seu email");
        return;
    }    
      //Verifica se o ponto de ref está vazio
      if(pontorefInput.value === ""){
        alert("Por favor, preencha o ponto de refêencia");
        return;
    }  
      //Verifica se a senha é válida
      if(!validatePassword(passwordInput.value,8)){
        alert("A Senha precisa ter no mínimo 8 dígitos");
        return;
    } 
      //Verifica se a senha é igual
      if(!comparePassword(repetInput.value == passwordInput)){
        alert("Aa Senhas precisam iguais");
        return;
    } 

    //Se todos os campos estiverem preenchidos, envie o form
    form.submit()
    });

    //Função que valida o email
    function isEmailValid(email){
        //cria uma regex para validar email
        const emailRegex = new RegExp(
            //usuario12@host.com.br
            /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-A]{2,}$/
        );

        if(emailRegex.test(email)){
            return true;
        }
         return false;       
    } 
    //Função para validar senha 
    function validatePassword(password, minDigits) {
        if(password.length >= minDigits){
        //senha válida
        return true;
    }   
        return false;      
    }
    

    