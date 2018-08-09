<?php
require ('_header.php');
// Conexão com base de dados
include_once("conexao.php");

// Query que lê artigos na ordem das datas do mais novo para o mais antigo
// Não lê artigos futuros
$sql = "SELECT ID, data, titulo, resumo, imagem, categorias FROM artigos WHERE data <= NOW() AND status = '1' ORDER BY data DESC";

// Executa a query
$res = mysqli_query($conn, $sql);

// Loop para "varrer" artigos
$style = "nWhite";
while ($artigo = mysqli_fetch_assoc($res)):

	echo "<div class=\"{$style}\">\n";
	echo "<img src=\"{$artigo['imagem']}?ik\" alt=\"{$artigo['titulo']}\" style=\"max-width:100%\">\n";
	echo "<h3><a href=\"/leartigo.php?id={$artigo['ID']}\">{$artigo['titulo']}	</a></h3>\n";
	echo "<p>{$artigo['resumo']}</p>\n";
	echo "</div>\n\n";
	
	if($style == "nWhite") 
		$style = "nBlack";
	else
		$style = "nWhite";

endwhile;


require ('_footer.php');
?>