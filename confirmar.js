document.getElementById("signup-form").addEventListener("submit", function(event) {
    const senha = document.getElementById("senha").value;
    const password = document.getElementById("password").value;
    const passwordError = document.getElementById("password-error");

    if (password !== confirmPassword) {
        passwordError.textContent = "As senhas não coincidem.";
        event.preventDefault(); 
    } else {
        passwordError.textContent = ""; 
    }
});

function mascaraCPF(event) {
    const input = event.target;
    const value = input.value.replace(/\D/g, '');
    const formattedValue = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4'); 

    input.value = formattedValue;
}
const inputCPF = document.getElementById('cpf');
inputCPF.addEventListener('input', mascaraCPF);

function mascaraCEP(event) {
    const input = event.target;
    const value = input.value.replace(/\D/g, ''); 
    const formattedValue = value.replace(/(\d{5})(\d{3})/, '$1-$2'); 

    input.value = formattedValue;
}
const inputCEP = document.getElementById('cep');
inputCEP.addEventListener('input', mascaraCEP);

function lettersOnly(evt) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
        ((evt.which) ? evt.which : 0));
    if ((charCode !== 32) && (charCode > 31 && (charCode < 65 || charCode > 90) &&
        (charCode < 97 || charCode > 122))) {
        alert("Digite apenas letras");
        return false;
    }
    return true;
}
document.addEventListener("DOMContentLoaded", function () {
    var senha = document.getElementById("senha");
    var confirmacaoSenha = document.getElementById("password");

    senha.addEventListener("input", function () {
        if (senha.value !== confirmacaoSenha.value) {
            confirmacaoSenha.setCustomValidity("As senhas não coincidem");
        } else {
            confirmacaoSenha.setCustomValidity("");
        }
    });

    confirmacaoSenha.addEventListener("input", function () {
        if (senha.value !== confirmacaoSenha.value) {
            confirmacaoSenha.setCustomValidity("As senhas não coincidem");
        } else {
            confirmacaoSenha.setCustomValidity("");
        }
    });
});
