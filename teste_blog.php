<?php
 $arquivo_origem = "./usrcp-saida.rtf";
 $arquivo_destino = "./teste/";

 if (copy($arquivo_origem, $arquivo_destino))
 {
  echo "Arquivo copiado com Sucesso.";
 }
 else
 {
  echo "Erro ao copiar arquivo.";
 }
?>