<?
$query = 'INSERT INTO account(username, password) VALUES(:username, :password);';
$stmt = $db->prepare($query);
$stmt->bindValue(':username', $_POST['username'], PDO::PARAM_STR);
$stmt->bindValue(':password', password_hash($_POST['password'], PASSWORD_DEFAULT), PDO::PARAM_STR);
$stmt->execute();
?>