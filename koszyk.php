<?php

class Produkt //tworzy klasę
{
    public $Nazwa;
    public $Cena;
    public $Kolor;
    public $Podatek;

    public function setCena($cena)  //tworzymy funkcje ktora nadaje wartosc wlasciwosciom obiektow
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


class Koszyk
{
    public $produkty_w_koszyku;
    public $liczba_sztuk;
    public $podsumowanie;
    public $wartosc_koszyka;

    public function DodajProduktDoKoszyka(Produkt $produkt, $ilosc_sztuk)
    {
        $this->produkty_w_koszyku[$produkt->Nazwa] = $produkt;
        if (array_key_exists($produkt->Nazwa, $this->produkty_w_koszyku)) {
        }

        if (array_key_exists($produkt->Nazwa, $this->liczba_sztuk)) {
            $this->liczba_sztuk[$produkt->Nazwa] = $this->liczba_sztuk[$produkt->Nazwa] + $ilosc_sztuk;
        } else {
            $this->liczba_sztuk[$produkt->Nazwa] = $ilosc_sztuk;
        }
    }


    public function PodliczZamowienie()
    {
        foreach ($this->produkty_w_koszyku as $produkt) {
            /** @var Produkt $produkt */
            $nazwaProduktu = $produkt->Nazwa;
            $ilosc = $this->liczba_sztuk[$nazwaProduktu];
            $cena = $produkt->Cena;
            $suma = $cena * $ilosc;

            echo sprintf("%s %s x %s = %s\n", $nazwaProduktu, $ilosc, $cena, $suma);
        }
    }

    public function WydrukujParagon()
    {
        echo "Wartość produktów w koszyku: ";
        $this->wartosc_koszyka = array_sum($this->podsumowanie);
        echo $this->wartosc_koszyka . " PLN." . PHP_EOL;
    }

    public function IloscProduktowWKoszyku()
    {
        echo "W koszyku znajduje się: " . array_sum($this->liczba_sztuk);
    }                           
    public function SumaKoszyka()
    {
        foreach($this->produkty_w_koszyku as $product){
        }
    }
    

}


$koszyk1 = new Koszyk();
$koszyk1->DodajProduktDoKoszyka($rama, 1);
$koszyk1->DodajProduktDoKoszyka($gripy, 1);
$koszyk1->DodajProduktDoKoszyka($widelec, 1);
$koszyk1->DodajProduktDoKoszyka($opona, 1);
$koszyk1->DodajProduktDoKoszyka($obrecze, 1);
$koszyk1->DodajProduktDoKoszyka($widelec, 1);
$koszyk1->DodajProduktDoKoszyka($rama, 4);
$koszyk1->DodajProduktDoKoszyka($opona, 1);
$koszyk1->PodliczZamowienie();
$koszyk1->IloscProduktowWKoszyku();

print_r($koszyk1);
