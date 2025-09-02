<?php
$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['imagem'])) {
    $img = $data['imagem'];
    $img = str_replace('data:image/png;base64,', '', $img);
    $img = base64_decode($img);

    $nome = "foto_" . time() . ".png";
    file_put_contents("uploads/$nome", $img);

    echo "Foto salva com sucesso: $nome";
} else {
    echo "Nenhuma imagem recebida.";
}