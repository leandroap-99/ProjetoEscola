<?php include_once '../layout/_topo.php'; ?>
<?php require_once '../../include/data/database-periodos.php'; ?>
<?php 


if ($_GET) {
$turma = lista_turmas_por_id($_GET['id']);

}

?>
<h2>Editar</h2>


<form action="#" method="POST">
  <div class="form-group">
    <label>Turma</label>
    <input type="text" name="id2" class="form-control" value="<?= $turma['id']?>" required>
  </div>

    <input type="hidden" name="id"  value="<?php echo $turma['id'];?>">
    <a class= "btn btn-warning" href="/DexterEscola/admin/turmas/index.php"role="button">Voltar</a>
    
 
    <button type="submit" class="btn btn-default">Salvar</button>
</form>
<?php
if ($_POST) {
$turma = $_POST['id2'];
edita_turma($turma);
//var_dump($turma);



}
?>
<?php_include_once '../layout/_rodape.php'; ?>