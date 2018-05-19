<?php

$tipoContrato = 2;     /* Informação virão por POST */
$nomeContrato = "";    /* Nome do modelo do contrato que estara no servidor */

/* Array com as informações que virão por POST */
$dados = array('nome' => 'William Cardozo Araujo',
    'datanascimento' => '03/10/1994');

function populate_RTF($vars, $doc_file) {

    $replacements = array('\\' => "\\\\",
        '{' => "\{",
        '}' => "\}");

    $document = file_get_contents($doc_file);
    if (!$document) {
        return false;
    }

    foreach ($vars as $key => $value) {
        $search = "%%" . strtoupper($key) . "%%";

        foreach ($replacements as $orig => $replace) {
            $value = str_replace($orig, $replace, $value);
        }

        $document = str_replace($search, $value, $document);
    }

    return $document;
}

if ($tipoContrato == 1) {
    $nomeContrato = "./contratos/usrcp.rtf"; 
} else
if ($tipoContrato == 2) {
    $nomeContrato = "./contratos/usrc.rtf"; 
}

$saida = populate_RTF($dados, $nomeContrato);

$arquivoFinal = "arq-saida/usrcp-saida.rtf"; /* Indica qual o arquivo de saida */
$conteudo = fopen($arquivoFinal, "w"); /* Abre o arquivo de saida e coloca o ponteiro na primeira posição */
fwrite($conteudo, $saida); /* Escreve os dados no arquivo de saida */
fclose($conteudo); /* Fecha o arquivo final */

//echo "<p>$saida</p>";

header("Content-Type: application/octetstream");
header("Content-Disposition: attachment; filename=" . basename($arquivoFinal));
header("Pragma: no-cache");
header("Expires: 0");
header("Content-Length: " . filesize($arquivoFinal));

readfile($arquivoFinal);


