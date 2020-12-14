<?php


$akce = $_GET["akce"] ?? null;
$id = $_GET["id"] ?? null;

if ($akce === "prepniAdmin" and $id) {
    $dotaz = $pdo->prepare("SELECT * FROM uzivatel WHERE id = :id");
    $dotaz->execute(["id" => $id]);
    $uzivatel = $dotaz->fetch(PDO::FETCH_ASSOC);

    if ($uzivatel) {
        $dotaz = $pdo->prepare("UPDATE uzivatel SET administrator = :admin WHERE id = :id");
        $vysledek = $dotaz->execute([
            "admin" => $uzivatel["administrator"] ? 0 : 1,
            "id" => $id,
            ]
        );
    }
    header("location: ?stranka=uzivatel");
    exit;
} else {
    $dotaz = $pdo->prepare("SELECT * FROM uzivatel");
    $dotaz->execute();
    $uzivateleDb = $dotaz->fetchAll(PDO::FETCH_ASSOC);

    $uzivatele = [];

    foreach ($uzivateleDb as $uzivatel) {
        $uzivatele[] = new Uzivatel($uzivatel["id"], $uzivatel["prezdivka"], $uzivatel["heslo"], $uzivatel["email"], $uzivatel["administrator"]);
    }

    $template = "uzivatel";
}


?>