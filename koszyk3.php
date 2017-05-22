<?php

class Produkt //tworzy klasę
{
    public $Nazwa;
    public $Cena;
    public $Kolor;
    public $Podatek;

    public function setCena($cena)  //tworzymy funckje ktora nadaje wartosc wlasciwosciom obiektow
    {
        $this->Cena = $cena;  //przypisuje wartosc zmiennej $cena
    }

    public function setNazwa($nazwa)
    {
        $this->Nazwa = $nazwa;
    }

    public function setKolor($kolor)
    {
        $this->Kolor = $kolor;
    }

    public function setPodatek($podatek)
    {
        $this->Podatek = $podatek;
    }


}

$rama = new Produkt;  //nowy produkt klasy Produkt
$rama->setCena("1299"); //wlasciwosci cena nadaje wartosc
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

$opona = new Produkt;
$opona->setCena("200");
$opona->setNazwa("Opona");
$opona->setKolor("Czarny");
$opona->setPodatek("0.1");


class Koszyk                        //tworzy klase Koszyk
{                                   //wlasciwosci ktore ma posiadac obiekt ktorym jest koszyk
    public $produkty_w_koszyku;     //wlasciwosc mowiaca jaki produkt jest w koszyku
    public $liczba_sztuk;
    public $paragon; //wlasciwosc mowiaca o ilosci poszczegolnych produktow w koszyku


    public function DodajProduktDoKoszyka($produkt, $ilosc_sztuk)         // funkcja dodająca do koszyka zadany produkt
    {
        $this->produkty_w_koszyku[] = $produkt;             //tworzy z wlasciwosci produkty_w_koszyku tablice, w ktorej wartosciami sa obiekty klasy Produkt
        
        $this->liczba_sztuk[$produkt->Cena] = $ilosc_sztuk;     //tworzy kolejna tablice w ktorej nazwy sa kluczami a wartosciami ilosc sztuk
        $this->paragon[$produkt->Nazwa . "*" . $ilosc_sztuk] = $ilosc_sztuk * $produkt->Cena;
    }


}


$koszyk1 = new Koszyk();                    //tworzy nowy obiekt klasy koszyk
$koszyk1->DodajProduktDoKoszyka($rama, 5);     //dodaje produkt
$koszyk1->DodajProduktDoKoszyka($gripy, 6);
$koszyk1->DodajProduktDoKoszyka($widelec, 3);
$koszyk1->DodajProduktDoKoszyka($opona, 4);
$koszyk1->DodajProduktDoKoszyka($rama, 3);

print_r($koszyk1->paragon);
echo "Suma koszyka=" . array_sum($koszyk1->paragon);
