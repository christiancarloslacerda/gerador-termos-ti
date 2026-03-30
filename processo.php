<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //verifica se clicou em enviar
//validção de segurança 3|4
if(!empty($_POST['nomeColaborador']) && !empty($_POST['departamento']) && !empty($_POST['equipamentoPrincipal']) && !empty($_POST['acessoriosInclusos']) && !empty($_POST['codigoPatrimonio'])
     ){
//covertendo as array em variavel
$nomeColaborador = $_POST['nomeColaborador'];
$departamento = $_POST['departamento'];
$equipamentoPrincipal = $_POST['equipamentoPrincipal'];
$acessoriosInclusos = $_POST['acessoriosInclusos'];
$codigoPatrimonio = $_POST['codigoPatrimonio'];
$acessorioIncluso = implode(", ", $acessoriosInclusos); //pega essa variavel e armazena o array escolhido usavel;

//criacaodevariaveisantecipadas
$acessorioIncluso=""; //cria a variavel q vai armazenar os acessorios

$clausulaExtra = "";

//parte condicional
if($equipamentoPrincipal == "notebook" || $equipamentoPrincipal == "smartphone"){
     $clausulaExtra ="<p> ATENÇÃO: <i> Este é um equipamento móvel. Em caso de roubo fora das dependências da empresa, o colaborador tem 24h para apresentar o Boletim de Ocorrência.<i></p>";
}
elseif($equipamentoPrincipal == "desktop"){
     $clausulaExtra ="<p> ATENÇÃO: <i> ATENÇÃO: Equipamento de uso interno. É terminantemente proibida a remoção deste equipamento do escritório. </i></p>";
}
if($departamento == "diretoria"){
     $mensagemDiretoria = "<p>Suporte Técnico Nível VIP - Atendimento 24h.</p>";
}
//mensagem formal
 echo "<p><b>TERMO DE RESPONSABILIDADE DE EQUIPAMENTO </b></p>
 <br><br> <p> Eu, $nomeColaborador, do departamento de  $departamento, declaro ter<br>
 recebido nesa data o equipamento $equipamentoPrincipal (Patrimônio: $codigoPatrimonio),<br>
 juntamente com os seguintes acessórios: $acessorioIncluso.<br><br>
 ";
 echo $clausulaExtra;
 echo $mensagemDiretoria;


}else{
     echo "<p> <i> Erro: Preenchimento Incompleto. <br> Volte e preencha todos os dados.</i></p>";

}
}
?>