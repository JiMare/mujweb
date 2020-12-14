<?php

function preloz(string $prekladovyRetezec): string
{
    return TEXTY[$prekladovyRetezec] ?? $prekladovyRetezec;
}

function najdiUzivatelePodleEmailu($email, $pdo)
{
    $dotaz = $pdo->prepare("SELECT * FROM uzivatel WHERE email = :email");
    $dotaz->execute(["email" => $email]);
    $uzivatel = $dotaz->fetch(PDO::FETCH_ASSOC);

    if($uzivatel){
    return new Uzivatel($uzivatel["id"], $uzivatel["prezdivka"], $uzivatel["heslo"], $uzivatel["email"],
    $uzivatel["administrator"]);
    } else{
        return null;
    }
}


function najdiUzivatelePodleId($id, $pdo)
{
    $dotaz = $pdo->prepare("SELECT * FROM uzivatel WHERE id = :id");
    $dotaz->execute(["id"=>$id]);
    $uzivatel = $dotaz->fetch(PDO::FETCH_ASSOC);

    if($uzivatel){
    return new Uzivatel($uzivatel["id"], $uzivatel["prezdivka"], $uzivatel["heslo"], $uzivatel["email"],
    $uzivatel["administrator"]);
    } else{
        return null;
    }
}

function najdiSluzbuPodleId($id, $pdo)
{
    $dotaz = $pdo->prepare("SELECT * FROM sluzba WHERE id = :id");
    $dotaz->execute(["id"=>$id]);
    $sluzba = $dotaz->fetch(PDO::FETCH_ASSOC);

    if($sluzba){
        return new Sluzba($sluzba["id"], $sluzba["nazev"], $sluzba["popis"], $sluzba["ikona"], 
        $sluzba["cena"]);
    }else{    
        return null;
    }
}



function najdiSluzby($pdo) : array
{
    $dotaz = $pdo->prepare("SELECT * FROM sluzba");
    $dotaz->execute();
    $vysledek = $dotaz->fetchAll(PDO::FETCH_ASSOC);

    $sluzby = [];
    if($vysledek){
        foreach($vysledek as $sluzba){
            $sluzby[] = new Sluzba($sluzba["id"], $sluzba["nazev"], $sluzba["popis"], $sluzba["ikona"], $sluzba["cena"]);
        }
    }

   
    return $sluzby;
}



?>










