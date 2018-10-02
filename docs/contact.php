<?php
/**
 * Created by PhpStorm.
 * User: SMARTINEZ
 * Date: 2/10/2018
 * Time: 8:50 AM
 */
	$response = array();
	$name = (isset($_REQUEST['name'])) ? filter_var($_REQUEST['name'], FILTER_SANITIZE_STRING) : null ;
	$lastName = (isset($_REQUEST['lastName'])) ? filter_var($_REQUEST['lastName'], FILTER_SANITIZE_STRING) : null ;
	$email = (isset($_REQUEST['email'])) ? filter_var($_REQUEST['email'], FILTER_SANITIZE_STRING) : null ;
	$phone =  (isset($_REQUEST['phone'])) ? filter_var($_REQUEST['phone'], FILTER_SANITIZE_STRING) : null ;
	$city = (isset($_REQUEST['city'])) ? filter_var($_REQUEST['city'], FILTER_SANITIZE_STRING) : null ;

if ($name!=null && $lastName!=null && $email!=null && $phone!=null && $city!=null) {


    $msg="<table><thead><th colspan='2'>Un nuevo mensaje ha sido enviado desde la Campaña web de Yamaki Nueva serie QSC:</th></thead>
	<tbody>
	<tr><td><strong>Nombre: </strong></td><td>".$name."</td></tr>
	<tr><td><strong>Apellido: </strong></td><td>".$lastName."</td></tr>
	<tr><td><strong>E-Mail: </strong></td><td>".$email."</td></tr>
	<tr><td><strong>Celular: </strong></td><td>".$phone."</td></tr>
	<tr><td><strong>Desde la Ciudad: </strong></td><td>".$city."</td></tr>
	</tbody>
	</table>
	";
    $title = "Nuevo mensaje de contacto en YAMAKI QSC";
    $to = 'mercadeo@yamaki.com';

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $headers .= 'To: '.$to.'' . "\r\n";
    $headers .= 'From: Servicio Al Cliente <mercadeo@yamaki.com>' . "\r\n";

    if(mail( $to, $title, $msg, $headers)){
        $response['message'] = "exito";
        $response['success'] = true;
    }
    else{
        $response['message'] = "error";
        $response['success'] = false;
    }
}
echo json_encode($response);
