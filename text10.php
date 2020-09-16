<?php 

$host = 'localhost';
$db = 'my_tasks';
$user = 'root';
$pass = 'root';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$text = $_POST['text'];
$pdo = new PDO($dsn, $user, $pass, $opt);

$sql = "SELECT * FROM my_form WHERE text=:text";
$stm = $pdo->prepare($sql);
$stm->execute(['text' => $text]);
$task = $stm->fetch();

if (!empty($task)) {
	$message = "Запись уже существует!";
	$_SESSION['message'] = $message;

	header("Location: /my_task_10.php");
	exit;
}

$sql = "INSERT INTO my_form (text) VALUES (:text)";
$stm = $pdo->prepare($sql);
$stm->execute(['text' => $text]);

header("Location: /my_task_10.php");