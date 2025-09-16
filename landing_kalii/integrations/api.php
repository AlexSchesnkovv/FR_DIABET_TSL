<?php
/*
	Получение указания партнёрки -> подтягивание соответсвенного файла пратнёрки
	-> заполнение необходимых полей по файлу -> возвращение результата
	-> Добавить новый hidden в форму, как partnerId

	26 файлов id + 

*/

echo $_POST['partnerId'];

//Получение value_id
if (isset($_POST['partnerId'])) {
	$sourceId = $_POST['partnerId'];
}
echo $sourceId;
//Получение всех неймингов в папке
$namePartner = scandir('./id/', SCANDIR_SORT_DESCENDING);

//Обработка выбора партёнрки
// Заполняем
switch ($sourceId) {
	case "a":
		require_once './id/aff1.php';
		$resultChoice = "a";
		break;
	case "b":
		require_once './id/affscalecpa.php';
		$resultChoice = "b";
		break;
	case "c":
		require_once './id/affstar.php';
		$resultChoice = "c";
		break;
	case "d":
		require_once './id/aray.php';
		$resultChoice = "d";
		break;
	case "e":
		require_once './id/cashfactories.php';
		$resultChoice = "e";
		break;
	case "f":
		require_once './id/cc.php';
		$resultChoice = "f";
		break;
	case "g":
		require_once './id/cpaecom.php';
		$resultChoice = "g";
		break;
	case "h":
		require_once './id/cpagetti.php';
		$resultChoice = "h";
		break;
	case "i":
		require_once './id/dr_cash.php';
		$resultChoice = "i";
		break;
	case "j":
		require_once './id/everad.php';
		$resultChoice = "j";
		break;
	case "k":
		require_once './id/ezaff.php';
		$resultChoice = "k";
		break;
	case "l":
		require_once './id/inb_v2.php';
		$resultChoice = "l";
		break;
	case "m":
		require_once './id/leadbit.php';
		$resultChoice = "m";
		break;
	case "n":
		require_once './id/leadreaktor.php';
		$resultChoice = "n";
		break;
	case "o":
		require_once './id/leadrock.php';
		$resultChoice = "o";
		break;
	case "p":
		require_once './id/lemonad.php';
		$resultChoice = "p";
		break;
	case "q":
		require_once './id/lucky.php';
		$resultChoice = "q";
		break;
	case "r":
		require_once './id/metacpa.php';
		$resultChoice = "r";
		break;
	case "s":
		require_once './id/offer_store.php';
		$resultChoice = "s";
		break;
	case "t":
		require_once './id/rocketprofit.php';
		$resultChoice = "t";
		break;
	case "u":
		require_once './id/shakes.php';
		$resultChoice = "u";
		break;
	case "v":
		require_once './id/skylead.php';
		$resultChoice = "v";
		break;
	case "w":
		require_once './id/terra_lead.php';
		$resultChoice = "w";
		break;
	case "x":
		require_once './id/traffic_light.php';
		$resultChoice = "x";
		break;
	case "y":
		require_once './id/webwork.php';
		$resultChoice = "y";
		break;
	case "z":
		require_once './id/m1.php';
		$resultChoice = "z";
		break;
	case "a2":
		require_once './id/cpaomni.php';
		$resultChoice = "a2";
		break;
	case "b2":
		require_once './id/adcombo.php';
		$resultChoice = "b2";
		break;
	case "c2":
		require_once './id/kma.php';
		$resultChoice = "c2";
		break;
	case "d2":
		require_once './id/imperialeads.php';
		$resultChoice = "d2";
		break;
	default:
		$resultChoice = null;
}
// echo "Папка текущего файла: " . __DIR__ . "\n";
// echo "Текущая рабочая папка: " . getcwd() . "\n";
// echo "Корень веб-сервера: " . $_SERVER['DOCUMENT_ROOT'] . "\n";
?>