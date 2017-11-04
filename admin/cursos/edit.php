<?php include_once '../layout/_topo.php'; ?>
<?php require_once '../../include/data/database-periodos.php'; ?>
<?php 


if ($_GET) {
$curso = lista_cursos_por_id($_GET['id']);

}

?>
<h2>Editar</h2>


<form action="#" method="POST">
  <div class="form-group">
    <label>curso</label>
    <input type="text" name="curso" class="form-control" value="<?= $curso['nome']?>" required>
  </div>

    <input type="hidden" name="id"  value="<?php echo $curso['id'];?>">
    <a class= "btn btn-warning" href="/DexterEscola/admin/cursos/index.php"role="button">Voltar</a>
    
 
    <button type="submit" class="btn btn-default">Salvar</button>
</form>
<?php
if ($_POST) {
$curso = [
'nome'=> $_POST['curso'],
'id' => $_POST['id']

];
edita_curso($curso);
header ('Location:index.php');

}
?>
<?php_include_once '../layout/_rodape.php'; ?>