<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Agregar producto</h1>
        </div>
        <div class="col-12">
            <form action="" method="post">
                <div class="form-row">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Código</label>
                                    <input type="text" class="form-control" id="txtCodigo" name="txtCodigo" placeholder="Ejem: PROD00012">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Ejem: Camiseta roja">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Categoria</label>
                                    <select name="cmbCategoria" id="cmbCategoria" class="form-control">
                                        <option value="Textil">Textil</option>
                                        <option value="Promocional">Promocional</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Precio</label>
                                    <input type="number" class="form-control" id="txtPrecio" name="txtPrecio" placeholder="Ejem: 10.00">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Existencia</label>
                                    <input type="number" class="form-control" id="txtExistencias" name="txtExistencias" placeholder="Ejem: 10">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Descripción</label>
                                    <textarea type="text" class="form-control" id="txtDescripcion" name="txtDescripcion" placeholder="Descripción ...."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center">
                    <button type="submit" name="add" class="btn btn-primary">Guardar</button>
                    <a href="./index.php" class="btn btn-danger">Cancelar</a>
                </p>
            </form>
        </div>
    </div>
</div>