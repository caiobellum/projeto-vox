<?php
// Configurações do banco de dados
$host = 'postgres';
$db = 'vox';
$user = 'postgres';
$pass = 'teste21';

// Conecta ao banco de dados PostgreSQL
$dsn = "pgsql:host=$host;dbname=$db";
try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Não foi possível conectar ao banco de dados: " . $e->getMessage());
}

// Recebe e valida os dados do formulário
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

// Função para validar email
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// Verifica se todos os campos foram preenchidos
if (empty($name) || empty($email) || empty($password)) {
    echo 'Todos os campos são obrigatórios.';
    exit;
}

// Verifica o formato do email
if (!isValidEmail($email)) {
    echo 'O email fornecido não é válido.';
    exit;
}

// Verifica a senha
if (strlen($password) < 8) {
    echo 'A senha deve conter pelo menos 8 caracteres.';
    exit;
}

// Prepara e executa a inserção no banco de dados
try {
    $stmt = $pdo->prepare("INSERT INTO USUARIO (NOME, EMAIL, SENHA) VALUES (:name, :email, :password)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password); // Criptografa a senha
    $stmt->execute();
    
    // Redireciona para a página de sucesso
    header('Location: success.php');
    exit;

} catch (PDOException $e) {
    echo 'Erro ao registrar usuário: ' . $e->getMessage();
}
?>
