<?php
require_once 'vendor/autoload.php';
$redis = new Predis\Client([
    'scheme' => 'tcp',
    'host'   => '127.0.0.1',
    'port'   => 6379,
]);

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nameUser = $_POST['nome'];
    $inputData = $_POST['data'];

    $userId = session_id();
    
    // Cria um array associativo com o nome e a mensagem
    $userEntry = [
        'name' => $nameUser,
        'message' => $inputData,
    ];

    // Armazena os dados no Redis usando a chave única do usuário
    $redis->rpush("user:$userId:entries", json_encode($userEntry));
}

$userId = session_id();

// Recupera todas as entradas do usuário atual
$userEntries = $redis->lrange("user:$userId:entries", 0, -1);

?>

<form method="post">
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="data" placeholder="Digite algo">
    <button type="submit">Enviar</button>
</form>

<div>
    <h2>Últimas mensagens:</h2>
    <ul>
        <?php foreach ($userEntries as $entry): ?>
            <?php $decodedEntry = json_decode($entry, true); ?>
            <li>
                Nome: <?php echo $decodedEntry['name']; ?> - Mensagem: <?php echo $decodedEntry['message']; ?>
            </li>
        <?php
                 endforeach; ?>

    </ul>
</div>