<!DOCTYPE html>
<html>
<head>
    <title>Title of the document</title>
</head>

<body>

<?php

    class Mokinys {
        public $vardas;
        public $pavarde;
    }

    $mokinys1 = new Mokinys();
    $mokinys1->vardas = "Jonas";
    $mokinys1->pavarde = "Jonaitis";

    $mokinys2 = new Mokinys();
    $mokinys2->vardas = "Petras";
    $mokinys2->pavarde = "Petraitis";

    $mokinys3 = new Mokinys();
    $mokinys3->vardas = "Ona";
    $mokinys3->pavarde = "Onute";

    $mokiniai = array($mokinys1, $mokinys2, $mokinys3);

    class Trimestras {
        public $chemija;
        public $fizika;
        public $matematika;
    }

    $vidurkis1 = new Trimestras();
    $vidurkis1->chemija = "6";
    $vidurkis1->fizika = "6";
    $vidurkis1->matematika = "6";

    $vidurkis2 = new Trimestras();
    $vidurkis2->chemija = "10";
    $vidurkis2->fizika = "10";
    $vidurkis2->matematika = "10";

    $vidurkis3 = new Trimestras();
    $vidurkis3->chemija = "8";
    $vidurkis3->fizika = "8";
    $vidurkis3->matematika = "8";


?>

</body>

</html>



