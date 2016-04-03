<?php
error_reporting(0);

require_once "../recaptchalib.php";
include_once('../model/FlisolModel.php');

// your secret key
$secret = "6LcL0xoTAAAAAITVSBiPE6M0ei16X3vbxaVJg2vn";

// empty response
$response = null;

// check secret key
$reCaptcha = new ReCaptcha($secret);

// if submitted check response
if ($_POST["g-recaptcha-response"]) {
	$response = $reCaptcha->verifyResponse(
		$_SERVER["REMOTE_ADDR"],
		$_POST["g-recaptcha-response"]
	);
}

if ($response != null && $response->success) {


    $flisol = new FlisolModel();

    if (isset($_POST)) {

        $flisol->setCidade($_POST['cidade']);
        $flisol->setCategoriaId($_POST['categoria_id']);
        $flisol->setNome($_POST['nome']);
        $flisol->setEmail(strtolower($_POST['email']));
        $flisol->setEndereco($_POST['endereco']);
        $flisol->setTelefone($_POST['telefone']);


        $flisol->setInstituicao($_POST['instituicao']);
        $flisol->setSemestre($_POST['semestre']);
        $flisol->setLink($_POST['link']);
        $flisol->setResumo($_POST['resumo']);


        print $flisol->adicionarInscrito();
    }

} else { ?>
    <p class="text-error">Dados invalidos! Por favor, preencha o captcha corretamente.<p>
<?php } ?>

