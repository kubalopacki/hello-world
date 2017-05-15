<?php

class Produkt //tworzy klasę
{
    public $cena; //definiujemy jakie wlasciwosci maja obiekty danej klasy

    public function setCena($cena)  //tworzymy funckje ktora nadaje wartosc wlasciwosciom obiektow
    {
        $this->cena = $cena;  //przypisuje wartosc

    }

    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;
    }

    public function setKolor($kolor)
    {
        $this->kolor = $kolor;
    }

    public function setPodatek($podatek)
    {
        $this->podatek = $podatek;
    }


}

$rama = new Produkt;  //nowy produkt klasy Produkt
$rama->setCena("1299"); //wlasciwosci cena nadajemy wartosc
$rama->setNazwa("Rama");
$rama->setKolor("Czerwony");
$rama->setPodatek("0.1");

$widelec = new Produkt;
$widelec->setCena("499");
$widelec->setNazwa("Widelec");
$widelec->setKolor("Czarny");
$widelec->setPodatek("0.1");


$kierownica = new Produkt;
$kierownica->setCena("229");
$kierownica->setNazwa("Kierownica");
$kierownica->setKolor("Czarny");
$kierownica->setPodatek("0.1");

$mostek = new Produkt;
$mostek->setCena("189");
$mostek->setNazwa("Mostek");
$mostek->setKolor("Chrom");
$mostek->setPodatek("0.1");

$gripy = new Produkt;
$gripy->setCena("29");
$gripy->setNazwa("Gripy");
$gripy->setKolor("Czarny");
$gripy->setPodatek("0.1");

$piasta_przod = new Produkt;
$piasta_przod->setCena("259");
$piasta_przod->setNazwa("Piasta Przednia");
$piasta_przod->setKolor("Chrom");
$piasta_przod->setPodatek("0.1");

$obrecze = new Produkt;
$obrecze->setCena("400");
$obrecze->setNazwa("Obrecze");
$obrecze->setKolor("Czarne");
$obrecze->setPodatek("0.1");

$opony = new Produkt;
$opony->setCena("200");
$opony->setNazwa("Opony");
$opony->setKolor("Czarny");
$opony->setPodatek("0.1");

$produkty = [             //tworzy tablice w ktorych indeksami sa nazwy produktow
    $opony,
    $obrecze,
    $rama,
    $widelec,
    $kierownica,
    $mostek,
    $gripy,
    $piasta_przod,
];


foreach ($produkty as $produkt) {          //kazdy indeks w tablicy $produkty traktuj jako $produkt
    $nazwa = $produkt->nazwa;              //$nazwa to nazwa która jest przypisana $produktowi($nazwa)
    $cena = $produkt->cena;                //$cena to cena która jest przypisana $profuktowi($cena)
    $kolor = $produkt->kolor;


}

/*
$suma_netto = 0;
foreach ($produkty as $produkt) {
    $suma_netto = $suma_netto + $produkt->cena;
}
echo "Suma netto koszyka wynosi: " . $suma_netto . PHP_EOL;

$suma_brutto = 0;
foreach ($produkty as $produkt) {
    $suma_brutto = $suma_brutto + ($produkt->cena * (1 + $produkt->podatek));
}
echo "Suma brutto koszyka wynosi: " . $suma_brutto . PHP_EOL;
*/


class Koszyk
{                               //wlasciwosci ktore ma posiadac obiekt ktorym jest koszyk
    public $wartosc_koszyka;   //oblicza wartosc wszystkich produktow zawartych w koszyku
    public $liczba_sztuk;     //przechowuje ilosc sztuk poszczegolnych produktow
    public $produkty;        //jedną z właściwości koszyka są zawarte w nim produkty


    public function DodajProduktDoKoszyka($produkt) // funkcja dodająca do koszyka zadany produkt
    {
        $this->produkty[] = $produkt;
    }

    /*
        public function obliczcene()
        {
            foreach ($produkty as $produkt)
        }

    */

}

$koszyk1 = new Koszyk;
$koszyk1->DodajProduktDoKoszyka($opony, 5);
$koszyk1->DodajProduktDoKoszyka($opony);
$koszyk1->DodajProduktDoKoszyka($rama);
$koszyk1->DodajProduktDoKoszyka($obrecze);
$koszyk1->DodajProduktDoKoszyka($mostek);
$koszyk1->DodajProduktDoKoszyka($widelec);
$koszyk1->DodajProduktDoKoszyka($piasta_przod);
$koszyk1->DodajProduktDoKoszyka($kierownica);
$koszyk1->DodajProduktDoKoszyka($gripy);


print_r($koszyk1);
