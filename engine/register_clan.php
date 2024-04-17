<?php


if(!isset($indexing)) { exit; }

$key = isset($_POST['key']) ? vCode($_POST['key']) : '';
if($key != $_SESSION['key']) { fim('', 'SESSION', './?page=register_clan'); }


if(empty($_POST['clanname']) || empty($_POST['leadername'])) {
	fim($LANG[12058]);
}


if($captcha_register_on == 1) {
	$captcha = vCode($_POST['captcha']);
	require_once('captcha/securimage.php');
	$securimage = new Securimage();
	if($securimage->check($captcha) == false) {
		fim($LANG[12057]);
	}
}


    $check = getimagesize($_FILES["crest"]["tmp_name"]);

    if($check[0] != 24 || $check[1] != 12)
    {
    	$check = false;
    	echo "<script>alert('El tamaño de la imagen debe ser de 24x12.');</script>";
    	header("Location: 127.0.0.1/?page=img_error");
        exit;
    }

    if($check !== false){
        $image = $_FILES['crest']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
        
      	$Host = '127.0.0.1'; // Endereço do host
	$dbName = 'valhein_db'; // Nome do banco
	$Username = 'root'; // Usuário
	$Password = ''; // Senha
        
        $db = new mysqli($Host, $Username, $Password, $dbName);
        
        if($db->connect_error){
            die("Connection failed");
        }        
        
        $insertar = $db->query("INSERT into clan (leader_name, clan_name, imagenes, creado) VALUES ('".$_POST['clanname']."','".$_POST['clanname']."', '$imgContenido', now())");
        if($insertar){
        	header("Location: 127.0.0.1");
        }else{
            echo "Ha fallado la subida, intente nuevamente.";
            header("Location: 127.0.0.1");
        } 
    }else{
        echo "Por favor seleccione imagen a subir.";
        header("Location: 127.0.0.1");
    }





