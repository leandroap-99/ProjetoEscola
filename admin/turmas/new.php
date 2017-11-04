<?php include_once '../layout/_topo.php'; ?>
<?php require_once '../../include/data/database-periodos.php'; ?>
<?php verificarLogin() ?>

<form action="#" method="POST">
  <div class="form-group">
    <label>Turmas</label>
    <input type="text" name="id" class="form-control" required>
  </div>

    <button type="submit" class="btn btn-default">Salvar</button>
</form>

<?php
if ($_POST) {
$id = $_POST['id'];



insere_turmas($id);
header ('Location:index.php');
}
?>

<?php include_once '../layout/_rodape.php'; ?>