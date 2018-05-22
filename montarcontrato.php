<?php
$modelo = "";
$contrato = $_POST['plano'];
$tabela = $_POST['tabela'];

echo $contrato;

$dados = array('nome' => $_POST['nome'],
    'datanascimento' => $_POST['datanascimento'],
    'estadocivil' => $_POST['estadocivil'],
    'cpf' => $_POST['cpf'],
    'cns' => $_POST['cns'],
    'rg' => $_POST['rg'],
    'orgaoemissor' => $_POST['orgaoemissor'],
    'nomepai' => $_POST['nomepai'],
    'nomemae' => $_POST['nomemae'],
    'cep' => $_POST['cep'],
    'rua' => $_POST['rua'],
    'bairro' => $_POST['bairro'],
    'cidade' => $_POST['cidade'],
    'uf' => $_POST['uf'],
    'telefone1' => $_POST['telefone1'],
    'telefone2' => $_POST['telefone2'],
    'email' => $_POST['email']);

//echo json_encode($dados);

if ($contrato == "UAR-CP") {
   $modelo = "./modelo-contrato/UAR-CP/UAR-CP.rtf";   
} else if ($contrato == "USR") {
   $modelo = "./modelo-contrato/USR/USR.rtf";   
} else if ($contrato == "UPR") {
   $modelo = "./modelo-contrato/UPR/UPR.rtf";   
} else if ($contrato == "USR-CP") {
   $modelo = "./modelo-contrato/USR-CP/USR-CP.rtf";   
} else if ($contrato == "USN") {
   $modelo = "./modelo-contrato/USN/USN.rtf";   
} else if ($contrato == "UPN") {
   $modelo = "./modelo-contrato/UPN/UPN.rtf";   
}

$saida = populate_RTF($dados, $modelo);

$arquivoFinal = "arq-saida/usrcp-saida.rtf"; /* Indica qual o arquivo de saida */
$conteudo = fopen($arquivoFinal, "w"); /* Abre o arquivo de saida e coloca o ponteiro na primeira posição */
fwrite($conteudo, $saida); /* Escreve os dados no arquivo de saida */
fclose($conteudo); /* Fecha o arquivo final */

//echo "<p>$saida</p>";
/*
// Realizar download automatico do arquivo
header("Content-Type: application/octetstream");
header("Content-Disposition: attachment; filename=" . basename($arquivoFinal));
header("Pragma: no-cache");
header("Expires: 0");
header("Content-Length: " . filesize($arquivoFinal));

readfile($arquivoFinal);
*/

// Funcao que gera o arquivo de saida
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