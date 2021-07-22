<?php 

function TekRakam($Sayi){
	
	$BirlerHanesi = mb_substr($Sayi, 0, 1, 'UTF-8');

	switch ($BirlerHanesi) {
		case '1':
			$Yazi = "Bir";
			break;
		case '2':
			$Yazi = "İki";
			break;
		case '3':
			$Yazi = "Üç";
			break;
		case '4':
			$Yazi = "Dört";
			break;
		case '5':
			$Yazi = "Beş";
			break;
		case '6':
			$Yazi = "Altı";
			break;
		case '7':
			$Yazi = "Yedi";
			break;
		case '8':
			$Yazi = "Sekiz";
			break;
		case '9':
			$Yazi = "Dokuz";
			break;
		case '0':
			$Yazi = "Sıfır";
			break;
	}

	return $Yazi;

}



function İkiRakam($Sayi){

	$BirlerHanesi = mb_substr($Sayi, 1, 1, 'UTF-8');

	switch ($BirlerHanesi) {
		case '1':
			$birler = "Bir";
			break;
		case '2':
			$birler = "İki";
			break;
		case '3':
			$birler = "Üç";
			break;
		case '4':
			$birler = "Dört";
			break;
		case '5':
			$birler = "Beş";
			break;
		case '6':
			$birler = "Altı";
			break;
		case '7':
			$birler = "Yedi";
			break;
		case '8':
			$birler = "Sekiz";
			break;
		case '9':
			$birler = "Dokuz";
			break;
		case '0':
			$birler = "";
			break;
	}


	$OnlukHanesi = mb_substr($Sayi, 0, 1, 'UTF-8');

	switch ($OnlukHanesi) {
		case '1':
			$onluk = "On";
			break;
		case '2':
			$onluk = "Yirmi";
			break;
		case '3':
			$onluk = "Otuz";
			break;
		case '4':
			$onluk = "Kırk";
			break;
		case '5':
			$onluk = "Elli";
			break;
		case '6':
			$onluk = "Altmış";
			break;
		case '7':
			$onluk = "Yetmiş";
			break;
		case '8':
			$onluk = "Seksen";
			break;
		case '9':
			$onluk = "Doksan";
			break;
	}
	return $onluk.$birler;



}



function UcRakam($Sayi){

	$BirlerHanesi = mb_substr($Sayi, 2, 2, 'UTF-8');
	switch ($BirlerHanesi) {
		case '1':
			$birler = "Bir";
			break;
		case '2':
			$birler = "İki";
			break;
		case '3':
			$birler = "Üç";
			break;
		case '4':
			$birler = "Dört";
			break;
		case '5':
			$birler = "Beş";
			break;
		case '6':
			$birler = "Altı";
			break;
		case '7':
			$birler = "Yedi";
			break;
		case '8':
			$birler = "Sekiz";
			break;
		case '9':
			$birler = "Dokuz";
			break;
		case '0':
			$birler = "";
			break;
	}


	$OnlukHanesi = mb_substr($Sayi, 1, 1, 'UTF-8');
	switch ($OnlukHanesi) {
		case '1':
			$onluk = "On";
			break;
		case '2':
			$onluk = "Yirmi";
			break;
		case '3':
			$onluk = "Otuz";
			break;
		case '4':
			$onluk = "Kırk";
			break;
		case '5':
			$onluk = "Elli";
			break;
		case '6':
			$onluk = "Altmış";
			break;
		case '7':
			$onluk = "Yetmiş";
			break;
		case '8':
			$onluk = "Seksen";
			break;
		case '9':
			$onluk = "Doksan";
			break;
		case '0':
			$onluk = "";
			break;
	}


	$YuzlerHanesi = mb_substr($Sayi, 0, 1, 'UTF-8');
	switch ($YuzlerHanesi) {
		case '1':
			$yuzluk = "Yüz";
			break;
		case '2':
			$yuzluk = "İkiyüz";
			break;
		case '3':
			$yuzluk = "Üçyüz";
			break;
		case '4':
			$yuzluk = "Dörtyüz";
			break;
		case '5':
			$yuzluk = "Beşyüz";
			break;
		case '6':
			$yuzluk = "Altıyüz";
			break;
		case '7':
			$yuzluk = "Yediyüz";
			break;
		case '8':
			$yuzluk = "Sekizyüz";
			break;
		case '9':
			$yuzluk = "Dokuzyüz";
			break;
	}


	return $yuzluk.$onluk.$birler;


}


function DortRakam($Sayi){

	$BirlerHanesi = substr($Sayi, 3, 3);
	switch ($BirlerHanesi) {
		case '1':
			$birler = "Bir";
			break;
		case '2':
			$birler = "İki";
			break;
		case '3':
			$birler = "Üç";
			break;
		case '4':
			$birler = "Dört";
			break;
		case '5':
			$birler = "Beş";
			break;
		case '6':
			$birler = "Altı";
			break;
		case '7':
			$birler = "Yedi";
			break;
		case '8':
			$birler = "Sekiz";
			break;
		case '9':
			$birler = "Dokuz";
			break;
		case '0':
			$birler = "";
			break;
	}


	$OnlukHanesi = substr($Sayi, 2, 1);
	switch ($OnlukHanesi) {
		case '1':
			$onluk = "On";
			break;
		case '2':
			$onluk = "Yirmi";
			break;
		case '3':
			$onluk = "Otuz";
			break;
		case '4':
			$onluk = "Kırk";
			break;
		case '5':
			$onluk = "Elli";
			break;
		case '6':
			$onluk = "Altmış";
			break;
		case '7':
			$onluk = "Yetmiş";
			break;
		case '8':
			$onluk = "Seksen";
			break;
		case '9':
			$onluk = "Doksan";
			break;
		case '0':
			$onluk = "";
			break;
	}


	$YuzlerHanesi = substr($Sayi, 1, 1);
	switch ($YuzlerHanesi) {
		case '1':
			$yuzluk = "Yüz";
			break;
		case '2':
			$yuzluk = "İkiyüz";
			break;
		case '3':
			$yuzluk = "Üçyüz";
			break;
		case '4':
			$yuzluk = "Dörtyüz";
			break;
		case '5':
			$yuzluk = "Beşyüz";
			break;
		case '6':
			$yuzluk = "Altıyüz";
			break;
		case '7':
			$yuzluk = "Yediyüz";
			break;
		case '8':
			$yuzluk = "Sekizyüz";
			break;
		case '9':
			$yuzluk = "Dokuzyüz";
			break;
		case '0':
			$yuzluk = "";
			break;
	}


	$BinlerHanesi = substr($Sayi, 0, 1);
	switch ($BinlerHanesi) {
		case '1':
			$binler = "Bin";
			break;
		case '2':
			$binler = "İkibin";
			break;
		case '3':
			$binler = "Üçbin";
			break;
		case '4':
			$binler = "Dörtbin";
			break;
		case '5':
			$binler = "Beşbin";
			break;
		case '6':
			$binler = "Altıbin";
			break;
		case '7':
			$binler = "Yedibin";
			break;
		case '8':
			$binler = "Sekizbin";
			break;
		case '9':
			$binler = "Dokuzbin";
			break;
	}
	return $binler.$yuzluk.$onluk.$birler;
}


echo DortRakam(1314)."<br />";

