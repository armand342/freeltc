<?php

system ('rm fre.php');
//system ('rm cookie.txt');
error_reporting(0);
system('clear');

//include 'cfg.php';
//system('rm key.txt');
system("clear");
//error_reporting(0);
$hitam = "\033[0;30m";
$merah = "\033[1;31m";
$biru = "\033[1;34m";
$hijau = "\033[1;32m";
$kuning = "\033[1;33m";
$putih = "\033[1;37m";
$pink = "\033[1;95m";

//latar
$hitam1 = "\033[0;100m";
$merah1 = "\033[1;101m";
$biru1 = "\033[1;104m";
$hijau1 = "\033[1;102m";
$kuning1 = "\033[1;103m";
$putih1 = "\033[1;107m";
$nc = "\033[0m";

/* START COLOR */
$Black = "\033[0;30m";
$Black2 = "\033[1;30m";
$Red = "\033[0;31m";
$Red2 = "\033[1;31m";
$Green = "\033[0;32m";
$Green2 = "\033[1;32m";
$Yellow = "\033[0;33m";
$Yellow2 = "\033[1;33m";
$Blue = "\033[0;34m";
$Blue2 = "\033[1;34m";
$Purple = "\033[0;35m";
$Purple2 = "\033[1;35m";
$Cyan = "\033[0;36m";
$Cyan2 = "\033[1;36m";
$White = "\033[0;37m";
$White2 = "\033[1;37m";

//date_default_timezone_set("Asia/Jayapura");



//system("rm cookie.txt");

//error_reporting(0);



function url($url) {
	//include 'cfg.php';
	$headers = array();
	$headers[] = "";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$res = curl_exec($ch);
	return $res;
}

$res = url("https://controlc.com/45818017");
//echo $res."\n";exit;
$link1 = explode('content="[tpb]', $res);
$link = explode('Password:', $link1[1]);
//echo $link[0]."\n";
$pw1 = explode('Password: ', $res);
$pw = explode(' [/tpb]', $pw1[1]);
//echo $pass[0]."\n";
$note = $link[0];
$pass = $pw[0];
if ($pass == "off") {
	$o = "\033[1;32m[\033[1;31mOFFLINE\033[1;32m]";
} else {
	$o = "\033[1;32m[ONLINE]";
}
if ($pass == "update") {
	$o = "\033[1;32m[\033[1;91mUPDATE\033[1;92m]";
}
if ($res == "") {
	$o = "\033[1;37m[\033[1;36mERROR\033[1;37m] ";
}

$del = date("D");
$date = date("m/d/Y");
//date_default_timezone_set('Asia/jayapura');
$currenttime = date('h:i:s A l ', time());
$banner = "$Cyan2
                ███████╗ █████╗ ██╗  ██╗██████╗  █████╗  █████╗  █████╗
                ╚══███╔╝██╔══██╗██║  ██║██╔══██╗██╔══██╗██╔══██╗██╔══██╗
                  ███╔╝ ███████║███████║██████╔╝███████║╚██████║╚██████║
                 ███╔╝  ██╔══██║██╔══██║██╔══██╗██╔══██║ ╚═══██║ ╚═══██║
                ███████╗██║  ██║██║  ██║██║  ██║██║  ██║ █████╔╝ █████╔╝
                ╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝ ╚════╝  ╚════╝
$Green2=======================================>$kuning$del$Green2<=========================================$kuning
[+] Creator        : Zahra99                                                      [+]
[+] Telegram       : @nisa_zahra99                                                [+]
[+] Whatsapp       : 081240020785                                                 [+]
[+] Donation DOGE  : DNpXWiwZW7YBYNYD892BNi9NUPYA5fEaFt                           [+]
$Green2=====================================================================================$Cyan2
[×] Script         :  FREELITECOIN                                                [×]
[×] Script Status  :  $o                                      $Cyan2              [×]
$Green2===============================>$pink $currenttime$hijau<==============================\n\n";

if ($res == "") {
	echo $banner;
	echo "$merah KONEKSI TERPUTUS.\n";
	echo "$merah TIDAK DAPAT TERHUBUNG KE SERVER.\n";
	echo "$merah PERIKSA KONEKSI ANDA LALU COBA LAGI.\n";
	echo "$merah PASTIKAN UNTUK TIDAK MENGGUNAKAN VPN.\n";
	exit;
}
if ($pass == 'update') {
	system("clear");
	echo $hijau;
	echo $banner;
	sleep(1);
	echo "$Cyan2 Info : $note\n";
	echo "$biru ◼ \033[1;91mAuthor Telah Melakukan Perubahan Terhadap Script \n";
	echo "$biru ◼ \033[1;95mSilahkan Hubungi Author Untuk Informasi Update \n";

	exit;
}

if ($pass == 'off') {
	system("clear");
	echo $banner;

	sleep(1);
	echo "$Cyan2 Info : $note\n";
	echo "$merah Script Telah Dinonaktifkan Oleh Pembuat \n";
	exit;
}
if ($pass == "run") {
if ($del == "Mon"){
	$url1 = "http://controlc.com/1489e53a";
}
if ($del == "Tue"){
	$url1 = "http://controlc.com/a9055f0e";
}
if ($del == "Wed"){
	$url1 = "http://controlc.com/e049e147";
}
if ($del == "Thu"){
	$url1 = "http://controlc.com/6ea2ae8e";
}
if ($del == "Fri"){
	$url = "http://controlc.com/12a91638";
}
if ($del == "Sat"){
	$url1 = "http://controlc.com/3eead964";
}
if ($del == "Sun"){
	$url1 = "http://controlc.com/c2bbaeeb";
}


	$res = url($url1);
	$link1 = explode('Link: ', $res);
	$link = explode(' Password:', $link1[1]);

	$pw1 = explode('[tpcolor=#FF0000]', $res);
	$pw = explode('[', $pw1[1]);
	//	echo $pw[0]."\n";
	//	exit;
	//echo $pass[0]."\n";

	$pass = $pw[0];

	$read = file_get_contents("key.txt");
	if ($read == $pass) {
		echo $banner;
		//echo "$Cyan2 Info : $note\n";
		echo "$hijau UPLOADING PASSWORD •\r";
		sleep(1);
		echo "$hijau UPLOADING PASSWORD • •\r";
		sleep(1);
		echo "$hijau UPLOADING PASSWORD • • •\r";
		sleep(1);
	}
	if ($read !== $pass) {
		system ('clear');
		echo $banner;
		echo "\n $merah Visit This Link To Get Password :$hijau $link[0]\n";
		echo "$kuning  Password :$hitam \n";
		$p = trim(fgets(STDIN));

		system ('clear');
		echo $banner;
		//echo "$Cyan2 Info : $note\n";
		echo "$hijau CHECKING PASSWORD •\r";
		sleep(1);
		echo "$hijau CHECKING PASSWORD • •\r";
		sleep(1);
		echo "$hijau CHECKING PASSWORD • • •\r";
		sleep(1);
		if ($p == "") {
			exit;
		}
		if ($pass == $p) {
			$save = fopen("key.txt", "w");
			fwrite($save, $p);
			fclose($save);
			system('clear');
			echo $banner;
			//echo "$Cyan2 Info : $note\n";
			echo $kuning ." [".$putih."√".$kuning."]".$hijau." OPEN SCRIPT SUCCESS            \r";
			sleep (3);
		} else {
			system('clear');
			echo $banner;
			echo $kuning ." [".$merah."x".$kuning."]".$merah." PASSWORD WRONG \n";
			exit;
		}
	}

system ('rm key.txt');


	if (!file_exists('cfg.php')) {
		system('clear');
		echo $banner;

		echo $lin;

		echo "$pink [".$putih."≡$pink]$kuning=>$Cyan2 Login\n\n";
		echo "$hijau Email :$putih ";
		$email = trim(fgets(STDIN));
		echo "$hijau Password :$putih ";
		$pass = trim(fgets(STDIN));
		$save = fopen('cfg.php', 'w');
		fwrite($save, "<?
      ");
		fwrite($save, '$email = "'.$email.'";
      ');
		fwrite($save, '$pass = "'.$pass.'";
      ');
		fwrite($save, "?>");
		fclose($save);
	}
	include 'cfg.php';
	
	function ua() {
		$head = [
			"Host" => "faucet.dogecoinmine.pro",
			"Content-Type" => "application/x-www-form-urlencoded; charset=UTF-8",
			"User-Agent" => "Dalvik/2.1.0 (Linux; U; Android 10; V2027 Build/QP1A.190711.020)",
			"Connection" => "Keep-Alive",

		];
		foreach ($head as $body => $uy) {
			$mhn[] = $body.": ".$uy;
		}
		return $mhn;
	}

	function post($url, $post = 0, $httpheader = 0, $proxy = 0) {
		// url, postdata, http headers, proxy, uagent
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		if ($post) {
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		}
		if ($httpheader) {
			curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
		}
		if ($proxy) {
			curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
			curl_setopt($ch, CURLOPT_PROXY, $proxy);
			// curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
		}
		curl_setopt($ch, CURLOPT_HEADER, true);
		$response = curl_exec($ch);
		$httpcode = curl_getinfo($ch);
		if (!$httpcode) return "Curl Error : ".curl_error($ch); else {
			$header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
			$body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
			curl_close($ch);
			return array($header, $body);
		}
	}

	system('clear');
	$url = "https://faucet.dogecoinmine.pro/api/login";
	$data = "password=$pass&get_login=any&email=$email&";
	$res = post($url, $data, ua());
	$res = json_decode($res[1]);
	$nama = $res->{0}->name;
	$poin = $res->{0}->points;
	$id = $res->{0}->id;
	$reff = $res->{0}->referral_code;
	echo "$kuning Username :$putih $nama\n";
	echo "$kuning Poin     :$putih $poin\n";
	//echo " Referal : $reff";
	while (true) {
		
		
		
	$res = url($url1);
	$link1 = explode('Link: ', $res);
	$link2 = explode(' Password:', $link1[1]);

		if ($link2[0] !== $link[0]) {
			echo "$putih script stoped!!\n";
			exit;
		}
		$a = rand(1, 30);
		$b = $poin+$a;

		$url = "https://faucet.dogecoinmine.pro/api/update_points";
		$data = "user_id=$id&update_point=any&new_point=$b&";
		$res = post($url, $data, ua());
		$res = json_decode($res[1]);
		$cek = $res->status;

		$url = "https://faucet.dogecoinmine.pro/api/login";
		$data = "password=$pass&get_login=any&email=$email&";
		$res = post($url, $data, ua());
		$res = json_decode($res[1]);
		$poin = $res->{0}->points;
		if ($cek == '1') {
			echo "$Cyan2 Scratch :$putih $a |$$kuning Update Poin :$putih $poin\n";
		}
		sleep(3);
		//print_r($res);
	}
}
?>
