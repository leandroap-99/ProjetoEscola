<?php include_once '../layout/_topo.php'; ?>
<?php require_once '../../include/data/database-periodos.php'; ?>
<?php verificarLogin() ?>


<div class="cointainer">

	<div class="page-header">
		<h2>Gerenciar <small>Alunos</small></h2>
	</div>
	
</div>

	<table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Aluno</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach (lista_alunos() as $alunos) : ?>

            <tr>
                <th scope="row"><?php echo $alunos['id']; ?></th>
                <td><?php echo $alunos['nome']; ?></td>
                <td>
                	<a class="btn btn-info" href="/DexterEscola/admin/alunos/edit.php?id=<?php echo $alunos['id']; ?>" role="button"><span class="glyphicon glyphicon-edit"></span> Editar alunos</a>
                	<form action="/DexterEscola/admin/alunos/delete.php" method="post" class="action-delete">
                        <input type="hidden" name="id" value="<?php echo $periodo['id']; ?>">
                        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Excluir Aluno</button>
                    </form>
                </td>
            </tr>

        <?php endforeach; ?>

        </tbody>
    </table>

	<div class="pull-right">
    	<a class="btn btn-primary" href="/DexterEscola/admin/alunos/new.php" role="button"><span class="glyphicon glyphicon-plus"></span> Novo Aluno</a>
	</div>
	
	<div class="clearfix"></div>
	
</div>

<?php include_once '../layout/_rodape.php'; ?>
<?php include_once '../layout/_rodape.php'; ?>