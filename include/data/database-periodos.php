<?php 

require_once 'conexao.php';

function insere_periodo($descricao){
	$con = conecta();

	$sql = "INSERT INTO tb_periodos (descricao) VALUES ('{$descricao}')";

	pg_query($con, $sql);
	
	desconecta($con);
}

function lista_periodos(){

	$con = conecta();

	$sql = "SELECT * FROM tb_periodos";

    $result = pg_query($con, $sql);
    $found = pg_fetch_all($result);

    desconecta($con);

    return $found;

}

function lista_periodo_por_id($id){
	$con = conecta();

	$sql = "SELECT * FROM tb_periodos WHERE id = {$id}";

    $result = pg_query($con, $sql);
    $found = pg_fetch_assoc($result);

    desconecta($con);

    return $found;
}

function edita_periodo($periodos){
	$con = conecta();

	$sql = "UPDATE tb_periodos SET descricao = '{$periodos['descricao']}' WHERE id = {$periodos['id']}";

	pg_query($con, $sql);
	
	desconecta($con);
}

function exclui_periodo($id){
	$con = conecta();

	$sql = "DELETE FROM tb_periodos WHERE id = {$id}";

	pg_query($con, $sql);

	desconecta($con);

}
function lista_cursos(){

	$con = conecta();

	$sql = "SELECT * FROM tb_cursos order by id asc";

    $result = pg_query($con, $sql);
    $found = pg_fetch_all($result);

    desconecta($con);

    return $found;
}

function insere_cursos($descricao){
	$con = conecta();

	$sql = "INSERT INTO tb_cursos (nome) VALUES ('{$descricao}')";

	pg_query($con, $sql);
	
	desconecta($con);
}

function lista_cursos_por_id($id){
	$con = conecta();

	$sql = "SELECT * FROM tb_cursos WHERE id = {$id}";

    $result = pg_query($con, $sql);
    $found = pg_fetch_assoc($result);

    desconecta($con);

    return $found;
}

function edita_curso($curso){
	$con = conecta();

	$sql = "UPDATE tb_cursos SET nome = '{$curso['nome']}' WHERE id = {$curso['id']}";

	pg_query($con, $sql);
	
	desconecta($con);
}
function exclui_curso($id){
	$con = conecta();

	$sql = "DELETE FROM tb_cursos WHERE id = {$id}";

	pg_query($con, $sql);

	desconecta($con);

}

function lista_turmas(){

	$con = conecta();

	$sql = "SELECT * FROM tb_turmas order by id asc";

    $result = pg_query($con, $sql);
    $found = pg_fetch_all($result);

    desconecta($con);

    return $found;
}
function insere_turmas($id){
	$con = conecta();

	$sql = "INSERT INTO tb_turmas (id,curso_id,periodo_id,instrutor_id) VALUES 
	('{$id}','1','5','1')";

	pg_query($con, $sql);
	
	desconecta($con);
}

function lista_turmas_por_id($id){
	$con = conecta();

	$sql = "SELECT * FROM tb_turmas WHERE id = {$id}";

    $result = pg_query($con, $sql);
    $found = pg_fetch_assoc($result);

    desconecta($con);

    return $found;
}
function edita_turma($turma){
	$con = conecta();

	$sql = "UPDATE tb_turmas SET instrutor_id = '{$turma2['id2']}' WHERE id = {$turma['id']}";

	pg_query($con, $sql);
	
	desconecta($con);
}
function exclui_turma($id){
	$con = conecta();

	$sql = "DELETE FROM tb_turmas WHERE id = {$id}";

	pg_query($con, $sql);

	desconecta($con);

}

function lista_alunos(){

	$con = conecta();

	$sql = "SELECT * FROM tb_alunos";

    $result = pg_query($con, $sql);
    $found = pg_fetch_all($result);

    desconecta($con);

    return $found;
}
function lista_matricula(){

	$con = conecta();

	$sql = "SELECT * FROM tb_matriculas";

    $result = pg_query($con, $sql);
    $found = pg_fetch_all($result);

    desconecta($con);

    return $found;
}

// echo "<pre>";
// // insere_periodo('noturno');
// // exclui_periodo(3);

// $periodo = ['id' => 1, 'descricao' => 'matutino'];
// edita_periodo($periodo);

// $periodos = lista_periodos();

// var_dump($periodos);