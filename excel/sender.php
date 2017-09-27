<?php
/**
 * Функция, обеспечивающие работу скрипта
**/

class sender
{
	public $smtp_data;
	public $mail_content;

	public function __construct($email,$site_name,$subject,$body,$password) {
		print "Работает конструктор <br>";
		$this->smtp_data = array(
			"host"			=> 'mx1.hostinger.ru',			// SMTP сервер
			"debug"			=> 2,						// Уровень логирования
			"debugoutput"	=> 'html',					//формат вывода лога, если включено логирование
			"auth"			=> true,					// Авторизация на сервере SMTP. Если ее нет - false
			"port"			=> 587,					// Порт SMTP сервера
			"username"		=> $email, // Логин на SMTP сервере
			"password"		=> $password, 				// Пароль на SMTP сервере
			"fromname"		=> $site_name, 		// Отображаемое имя отправителя
			"replyto"		=> array(
				"address"	=> '', 	// адрес почты для ответа
				"name"		=> ''	//отображаемое имя владельца ящика
			),
			"notification"	=> array(
				"address"	=> '',	// Почта оповещения админа (не оповещать- оставить пустым)
				"name"		=> ''	//отображаемое имя владельца ящика
			),
			"secure"		=> 'starttls', 					// Тип шифрования. Например ssl или tls
			"charset"		=> 'UTF-8',					//кодировка отправляемых писем
			"verify"		=> '0'						// Верификация сертификата. 0 -выкл, 1 - вкл (выключить при возникновении ошибок связанных с SSL сертификатами при отправке)
		);
		//сожержимое письма(тема, шапка и подвал письма)
		$this->mail_content = array(
			'title'		=> $subject,
			'header'	=> $body,
			'footer'	=> ''
		);
	}






	/**
	 *		Функция "склеивает" сообщение со статичным хедером и футером 
	 *		
	**/
	private function fullText($text)
	{
	    if(!empty($text))
	    {
	        return $this->mail_content['header'] . $text . $this->mail_content['footer'];
	    }
	    else
	    {
	        die("Отсутствует текст письма");
	    }
	}


	/**
	 * функция отправки сообщения на почту об успешной оплате
	 * используется, если включена отправка почты
	 * если отправка прошла успешна - возвращает 0, иначе - лог ошибок
	 * принимаемые данные:
	 *		$smtp_data 		- массив данных для подключения к SMTP
	 *		$message_data	- массив данных содержимого самого письма и адресата
	**/
	function sendMail($smtp_data, $message_data)
	{
		require_once("PHPMailer/PHPMailerAutoload.php"); // подключаем PHPMailer
		$mail = new PHPMailer;
		$mail->isSMTP();
		if($smtp_data['verify'] == 0)
		{
			$mail->SMTPOptions = array(
			    'ssl' => array(
			        'verify_peer' => false,
			        'verify_peer_name' => false,
			        'allow_self_signed' => true
			    ));
		}

		$mail->Host       	= $smtp_data['host'];
		$mail->SMTPDebug  	= $smtp_data['debug'];
		$mail->Debugoutput	= $smtp_data['debugoutput'];
		$mail->SMTPAuth   	= $smtp_data['auth'];
		$mail->Port       	= $smtp_data['port'];
		$mail->Username   	= $smtp_data['username'];
		$mail->Password   	= $smtp_data['password'];
		$mail->SMTPSecure	= $smtp_data['secure'];
		$mail->CharSet 		= $smtp_data['charset'];

		$mail->setFrom($smtp_data['username'], $smtp_data['fromname']);
		//$mail->setFrom($smtp_data['fromname_1'], $smtp_data['fromname']);
		$mail->addReplyTo($smtp_data['replyto']['address'], $smtp_data['replyto']['name']);
		if(!empty($smtp_data['notification']['address']))
		{
			$mail->addAddress($smtp_data['notification']['address'], $smtp_data['notification']['name']);
		}
		$mail->addAddress($message_data['to'], $message_data['to_name']);
		$mail->Subject = $message_data['title'];
		$mail->msgHTML($this->fullText($message_data['text']));
		$mail->AltBody = strip_tags($this->fullText($message_data['alt_text']));

		if (!$mail->send()) 
		{
   			die("Mailer Error: " . $mail->ErrorInfo);
		} 
		else 
		{
    		return 0;
		}
	}
	
}

?>