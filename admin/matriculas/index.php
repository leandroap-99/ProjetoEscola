<?php include_once '../layout/_topo.php'; ?>
<?php verificarLogin() ?>


<div class="cointainer">

	<div class="page-header">
		<h2>Gerenciar <small>Matrículas</small></h2>
	</div>
	
</div>

table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Matriculas</th>
            <th>id_Aluno</th>
            <
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach (lista_matricula() as $matricula) : ?>

            <tr>
                <th scope="row"><?php echo $matricula['id']; ?></th>
                <td><?php echo $matricula['aluno_id']; ?></td>
             
                <td>
                	<a class="btn btn-info" href="/DexterEscola/admin/matriculas/edit.php?id=<?php echo $matricula['id']; ?>" role="button"><span class="glyphicon glyphicon-edit"></span> Editar matricula</a>
                	<form action="/DexterEscola/admin/matriculas/delete.php" method="post" class="action-delete">
                        <input type="hidden" name="id" value="<?php echo $matricula['id']; ?>">
                        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Excluir matricula</button>
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



<?php include_once '../layout/_rodape.php'; ?>