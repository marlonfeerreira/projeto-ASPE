<?php
$pdo = new PDO('sqlite:bancodedados.sqlite');

$pdo->exec('CREATE TABLE IF NOT EXISTS atendimento(
    nome_discente TEXT,
    matrícula TEXT,
    curso TEXT,
    data_solicitação TEXT,
    solicitante TEXT,
    setor_solicitante TEXT,
    periodo TEXT,
    modalidade TEXT,
    ano TEXT,
    relato_solicitação TEXT,
    atendimento_assessoria_pedagogica TEXT,
    encaminhamentos TEXT)');

    // if($pdo->query("SELECT * FROM atendimento")->fetch()){
//     $pdo ->exec("INSERT INTO atendimento (nome_discente,  matrícula, curso, data_solicitação, solicitante, setor_solicitante, periodo, modalidade, ano, relato_solicitação, atendimento_assessoria_pedagogica, encaminhamentos)
//     VALUES ")
// }
?>
