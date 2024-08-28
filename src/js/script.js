document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Obtém os valores dos campos
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Valida os campos
    if (!name || !email || !password) {
        alert('Todos os campos são obrigatórios.');
        return;
    }

    // Valida o formato do email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert('Por favor, insira um email válido.');
        return;
    }

    // Valida a senha
    if (password.length < 8) {
        alert('A senha deve conter pelo menos 8 caracteres.');
        return;
    }

    document.getElementById('registrationForm').submit()
 
}

);
