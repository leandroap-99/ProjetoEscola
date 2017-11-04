<?php include_once '../layout/_topo.php'; ?>
<?php require_once '../../include/data/database-periodos.php'; ?>
<?php 


if ($_GET) {
$periodo = lista_periodo_por_id($_GET['id']);

}
?>

<h2>Editar</h2>


<form action="#" method="POST">
  <div class="form-group">
    <label>Periodo</label>
    <input type="text" name="periodo" class="form-control" value="<?= $periodo['descricao']?>" required>
  </div>

    <input type="hidden" name="id"  value="<?php echo $periodo['id'];?>">
    <a class= "btn btn-warning" href="/DexterEscola/admin/periodos/index.php"role="button">Voltar</a>
    
 
    <button type="submit" class="btn btn-default">Salvar</button>
</form>
<?php
if ($_POST) {
$updatePeriodo = [
'descricao'=> $_POST['periodo'],
'id' => $_POST['id']

];
edita_periodo($updatePeriodo);
header ('Location:index.php');

}
?>
<?php_include_once '../layout/_rodape.php'; ?>