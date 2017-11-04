<?php include_once '../layout/_topo.php'; ?>
<?php require_once '../../include/data/database-periodos.php'; ?>
<?php verificarLogin() ?>

<form action="#" method="POST">
  <div class="form-group">
    <label>Periodo</label>
    <input type="text" name="descricao" class="form-control" required>
  </div>

    <button type="submit" class="btn btn-default">Salvar</button>
</form>

<?php
if ($_POST) {
$descricao = $_POST['descricao'];



insere_periodo($descricao);
header ('Location:index.php');
}
?>

<?php include_once '../layout/_rodape.php'; ?>