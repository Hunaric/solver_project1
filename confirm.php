<?php
require_once 'db.php';

$userId = $_GET['id'];
$token = $_GET['token'];

$query = "SELECT * FROM utilisateurs WHERE id = ?";
$req = $pdo->prepare($query);
$req->execute([$userId]);
$user = $req->fetch();

if($user && $token == $user->confirmation_token)
{
    $query = "UPDATE utilisateurs SET confirmation_token = NULL,confirmed_at = NOW() WHERE id = ?";
    $req = $pdo->prepare($query);
    $req->execute([$userId]);
    $_SESSION['flash']['success'] = "Votre compte a bien été validé.";
    $_SESSION['auth'] = $user;

    header('Location: profil.php');
}
else
{
    $_SESSION['flash']['danger'] = "Ce compte n'existe pas.";
    header('Location: rejoindre.php');

}