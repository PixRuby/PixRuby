<?php

// Defina os dados da versão
$versao = "1.0.7";
$code = 7;
$titulo = "Nova atualização";
$mensagem = "Atualize o aplicativo";
$link = "https://play.google.com/store/apps/details?id=com.pixruby";
$status = "ok";

// Crie um array associativo com os dados
$dados = array(
    'versao' => $versao,
    'code' => $code,
    'titulo' => $titulo,
    'mensagem' => $mensagem,
    'link' => $link,
    'status' => $status
);

// Converta o array para formato JSON sem escapar caracteres Unicode
$json = json_encode($dados, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

// Defina o cabeçalho para indicar que a resposta é JSON
header('Content-Type: application/json');

// Imprima o JSON
echo $json;

?>
