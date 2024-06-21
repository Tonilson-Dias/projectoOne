document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const email = document.getElementById('email').value;
    const senha = document.getElementById('senha').value;
    
    if (!email || !senha) {
        alert('Por favor, preencha todos os campos!');
    } else {
        alert('Login realizado com sucesso!');
        // Aqui você pode adicionar a lógica para enviar o formulário ao servidor
    }
});

