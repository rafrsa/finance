<h1 class="page-header">Categorias</h1>

<div class="row">
    <div class="col-md-12">
        <a href="" class="btn btn-primary">Nova</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
        <?php
            foreach ($listaCategorias as $key => $value) { ?>
                <tr>
                    <th scope="row"><?php echo $value['id']; ?></th>
                    <td><?php echo $value['nome']; ?></td>
                    <td>
                        <a href="/cadastros/categorias/editar/<?php echo $value['id']; ?>"><img src="<?php echo IMGPATH; ?>if_Modify_132500.png"></a>
                        <a href="/cadastros/categorias/excluir/<?php echo $value['id']; ?>"><img src="<?php echo IMGPATH; ?>if_Close_132419.png"></a>
                    </td>
                </tr>
        <?php } ?>
            </tbody>
        </table>

        <?php
        if($retorno){ ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Categoria removida com sucesso!
            </div>
        <?php } ?>
    </div>
</div>