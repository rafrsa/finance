<h1 class="page-header">Categorias</h1>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
        </tr>
    </thead>
    <tbody>
<?php
    foreach ($listaCategorias as $key => $value) { ?>
        <tr>
            <th scope="row"><?php echo $value['id']; ?></th>
            <td><?php echo $value['nome']; ?></td>
        </tr>
<?php } ?>
    </tbody>
</table>
