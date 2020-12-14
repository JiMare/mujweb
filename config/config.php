<?php

const MOJE_UDAJE = [
    "jmeno" => "Jitka",
    "prijmeni" => "Marešová",
    "datumNarozeni" => "10. 2. 1978",
    "adresa" => "Krč 13, Protivín, 39811",
    "telefon" => "721 642 353",
    "email" => "zoa@seznam.cz"
];

/*$jmeno = "Jitka";
$prijmeni = "Marešová";*/




$jaJsem = [preloz("povolani1"), preloz("povolani2"), preloz("povolani3")];

$vzdelani = [
    ["nazev" => "Gymnasium U Libeňského zámku", "obor" => "Střední škola", "od" =>1993, "do" => 1997, "popis" => "všeobecné gymnasium"],
    ["nazev" => "Kurz Czechitas", "obor" => "HTML & CSS, Python", "od" => 2019, "do" => 2020, "popis" => "jednodenní úvodní kurzy do tvorby webu a programování"],
    ["nazev" => "Kurz Czechitas", "obor" => "PHP, Python", "od" => 2020, "do" => 2021, "popis" => "intenzivní pravidelný kurz PHP a druhé pokračování programovacího jazyka Python"]
];

//$skola2 = ["nazev" => "Škola 1", "obor" => "Nějaký obor", "od" => 2010, "do" => 2014];
//$skola3 = ["nazev" => "Škola 1", "obor" => "Nějaký obor", "od" => 2010, "do" => 2014];

function vypisVzdelani(array $skoly){

    $htmlVystup = "";

    foreach ($skoly as $skola){
        $htmlVystup .= "<div class=\"resume-wrap d-flex ftco-animate\">
        <div class=\"icon d-flex align-items-center justify-content-center\">
            <span class=\"flaticon-ideas\"></span>
        </div>
        <div class=\"text pl-3\">
            <span class=\"date\">". $skola["od"] . " - ". $skola["do"] ."</span>
            <h2>" .$skola["obor"]."</h2>
            <span class=\"position\">" . $skola["nazev"] . "</span>
            <p>" . $skola["popis"] . "</p>
        </div>
        </div>";
    }
    return $htmlVystup;
}

$pracovniZkusenosti = [
    ["pozice" => "Ošetřovatelka koní", "firma" => "Statek Hamouz", "od" => 1998, "do" => 1999, "popis" => "fyzioterapie zvířat"],
    ["pozice" => "Au-pair", "firma" => "Student agency", "od" => 2001, "do" => 2002, "popis" => "au-pair pobyt ve Velké Británii"],
    ["pozice" => "Zpracování dat", "firma" => "Bisnode", "od" => 2005, "do" => 2020, "popis" => "zapisování účetních výkazů"]
];

function vypisPracovniZkusenosti(array $prace){
    $htmlVystup = "";
    foreach ($prace as $zkusenost){
        $htmlVystup .= "<div class=\"resume-wrap d-flex ftco-animate\">
        <div class=\"icon d-flex align-items-center justify-content-center\">
            <span class=\"flaticon-ideas\"></span>
        </div>
        <div class=\"text pl-3\">
            <span class=\"date\">" . $zkusenost["od"] . " - " . $zkusenost["do"] . "</span>
            <h2>" . $zkusenost["pozice"] . "</h2>
            <span class=\"position\">" . $zkusenost["firma"] . "</span>
            <p>" . $zkusenost["popis"] . "</p>
        </div>
    </div>";
    }
    return $htmlVystup;
}

$hlavniSchopnosti = [
    ["schopnost" => "HTML", "hodnota" => 50],
    ["schopnost" => "CSS", "hodnota" => 30],
    ["schopnost" => "Javascript", "hodnota" => 20],
    ["schopnost" => "C#", "hodnota" => 60]
];
$vedlejsiSchopnosti = [
    ["schopnost" => "Python", "hodnota" => 30],
    ["schopnost" => "Java", "hodnota" => 30],
    ["schopnost" => "PHP", "hodnota" => 40],
    ["schopnost" => "CSS3", "hodnota" => 50],
    ["schopnost" => "C#", "hodnota" => 60],
    ["schopnost" => "HTML5", "hodnota" => 70],
    ["schopnost" => "Testování", "hodnota" => 30]
];



$sluzby = najdiSluzby($pdo);


$menu = [
    ["text" => preloz("menu.domu"), "stranka" => "domu", "id" => "#home-section"],
    ["text" => preloz("menu.omne"), "stranka" => "domu", "id" => "#about-section"],
    ["text" => preloz("menu.zivotopis"), "stranka" => "domu", "id" => "#resume-section"],
    ["text" => preloz("menu.sluzby"), "stranka" => "domu", "id" => "#services-section"],
    ["text" => preloz("menu.blog"), "stranka" => "blog", "id" => ""],
];

?>










