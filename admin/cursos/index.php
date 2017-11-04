<?php include_once '../layout/_topo.php'; ?>
<?php require_once '../../include/data/database-periodos.php'; ?>
<?php verificarLogin() ?>


<div class="cointainer">

	<div class="page-header">
		<h2>Gerenciar <small>Cursos</small></h2>
	</div>
	
</div>

<table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Cursos</th>
            <th>Tipo</th>
            <th>Carga Horaria</th>
            <th>Requisitos</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach (lista_cursos() as $cursos) : ?>

            <tr>
                <th scope="row"><?php echo $cursos['id']; ?></th>
                <td><?php echo $cursos['nome']; ?></td>
                <td><?php echo $cursos['tipo']; ?></td>
                <td><?php echo $cursos['carga_horaria']; ?></td>
                <td><?php echo $cursos['requisitos']; ?></td>
                <td>
                	<a class="btn btn-info" href="/DexterEscola/admin/cursos/edit.php?id=<?php echo $cursos['id']; ?>" role="button"><span class="glyphicon glyphicon-edit"></span> Editar Curso</a>
                	<form action="/DexterEscola/admin/cursos/delete.php" method="post" class="action-delete">
                        <input type="hidden" name="id" value="<?php echo $cursos['id']; ?>">
                        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Excluir Cursos</button>
                    </form>
                </td>
            </tr>

        <?php endforeach; ?>

        </tbody>
    </table>

	<div class="pull-right">
    	<a class="btn btn-primary" href="/DexterEscola/admin/cursos/new.php" role="button"><span class="glyphicon glyphicon-plus"></span> Novo Curso</a>
	</div>
	
	<div class="clearfix"></div>
	
</div>



<?php include_once '../layout/_rodape.php'; ?>