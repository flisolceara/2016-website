<?php
error_reporting(0);
session_start();

include_once('flisol2016/model/FlisolModel.php');
include_once('flisol2016/controller/SegurancaController.php');

$model = new FlisolModel();
$cidade = (isset($_GET['cidade']))?$_GET['cidade']:NULL;
$inscritos = $model->listarInscritos($cidade);

