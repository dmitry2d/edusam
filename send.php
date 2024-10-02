<?php
$token = "8123627762:AAEk8WqsTq1zIlXTQIhsXGORM2WAkOuGkNY";
$chat_id = "-1002316403414";

//Определяем переменные для передачи данных из нашей формы
$recaptcha=$_POST['g_recaptcha_response'];

if(!empty($recaptcha)){
	$google_url="https://www.google.com/recaptcha/api/siteverify";
	$secret='6Ldwkk0qAAAAAOVErXRgSZI5I0oOaAG8TeJW_FFP'; // Секретный ключ
	$ip=$_SERVER['REMOTE_ADDR'];
	$url=$google_url."?secret=".$secret."&response=".$recaptcha."&remoteip=".$ip;
	$res=getCurlData($url);
	$res= json_decode($res, true);

	if($res['success'] && $res['score'] >= 0.7){
		$name = htmlspecialchars($_POST['name']);
		$date = htmlspecialchars($_POST['date']);
		$vu = htmlspecialchars($_POST['vu']);
		$vu_date = htmlspecialchars($_POST['vu_date']);
		$phone = htmlspecialchars($_POST['phone']);

		//Собираем в массив то, что будет передаваться боту
		$arr = array(
			'ФИО:' => $name,
			'Дата рождения:' => $date,
			'Серия и номер ВУ:' => $vu,
			'Дата выдачи ВУ:' => $vu_date,
			'Телефон:' => $phone
		);

		//Настраиваем внешний вид сообщения в телеграме
		foreach($arr as $key => $value) {
			$txt .= "<b>".$key."</b> ".$value."%0A";
		};

		//Передаем данные боту
		$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

		//Выводим сообщение об успешной отправке
		if ($sendToTelegram) {
		  echo "Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.";
		}

		//А здесь сообщение об ошибке при отправке
		else {
			//alert('Что-то пошло не так. ПОпробуйте отправить форму ещё раз.');
		}

	} else {
		echo 'Извините, но Ваши действия похожи на автоматические!';
	}
}

function getCurlData($url){
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_TIMEOUT, 10);
	curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
	$curlData = curl_exec($curl);
	curl_close($curl);
	return $curlData;
}
?>