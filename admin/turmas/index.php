<?php include_once '../layout/_topo.php'; ?>
<?php require_once '../../include/data/database-periodos.php'; ?>
<?php verificarLogin() ?>


<div class="cointainer">

	<div class="page-header">
		<h2>Gerenciar <small>Turmas</small></h2>
	</div>
	
</div>
<table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Turmas</th>
            <th>Curso Id</th>
            <th>Periodo</th>
            <th>Instrutor</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach (lista_turmas() as $turmas) : ?>

            <tr>
                <th scope="row"><?php echo $turmas['id']; ?></th>
                <td><?php echo $turmas['id']; ?></td>
                <td><?php echo $turmas['curso_id']; ?></td>
                <td><?php echo $turmas['periodo_id']; ?></td>
                <td><?php echo $turmas['instrutor_id']; ?></td>
                
                <td>
                	<a class="btn btn-info" href="/DexterEscola/admin/turmas/edit.php?id=<?php echo $turmas['id']; ?>" role="button"><span class="glyphicon glyphicon-edit"></span> Editar Turma</a>
                	<form action="/DexterEscola/admin/turmas/delete.php" method="post" class="action-delete">
                        <input type="hidden" name="id" value="<?php echo $turmas['id']; ?>">
                        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Excluir Turmas</button>
                    </form>
                </td>
            </tr>

        <?php endforeach; ?>

        </tbody>
    </table>

	<div class="pull-right">
    	<a class="btn btn-primary" href="/DexterEscola/admin/turmas/new.php" role="button"><span class="glyphicon glyphicon-plus"></span> Nova Turma</a>
	</div>
	
	<div class="clearfix"></div>
	
</div>







<?php include_once '../layout/_rodape.php'; ?>