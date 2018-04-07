<h1 class="page-header">Nova Categoria</h1>

<?php
if(isset($id)){ ?>
    <div class="row">
        <div class="col-md-12">
            <form role="form" method="post" action="/cadastros/categorias/nova/salvar">
                <div class="form-group">
                    <label>ID da Categoria</label>
                    <input readonly type="text" name="txtIdCategoria" id="txtIdCategoria" class="form-control" value="<?php echo $nomeCategoria[0]["id"]; ?>"/>
                </div>
                <div class="form-group">
                    <label>Nome da Categoria</label>
                    <input type="text" name="txtNomeCategoria" id="txtNomeCategoria" class="form-control" value="<?php echo $nomeCategoria[0]["nome"]; ?>"/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Salvar"/>
                </div>
            </form>
        </div>
    </div>
<?php }else{ ?>
    <div class="row">
        <div class="col-md-12">
            <form role="form" method="post" action="/cadastros/categorias/nova/salvar">
                <div class="form-group">
                    <label>Nome da Categoria</label>
                    <input type="text" name="txtNomeCategoria" id="txtNomeCategoria" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Salvar"/>
                </div>
            </form>
        </div>
    </div>

<?php } ?>