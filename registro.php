<?php include 'app/include/head.php'; ?>

<div class="container mt-4">
    <div class="card-deck">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">CURSOS</h4>
                <h1 class="card-text text-center">2</h1>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">TALLERES</h4>
                <h1 class="card-text text-center">3</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="py-5 text-center">
        <h2>REGISTRO</h2>
        <p class="lead">Recuerde que solo puede escoger <strong>solo un CURSO</strong> y <strong>varios TALLERES</strong>
        </p>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">

            <form>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="nombres">Nombres</label>
                        <input type="text" class="form-control" name="nombres" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" name="correo" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control" name="direccion" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="nacionalidad">Nacionalidad</label>
                        <input type="text" class="form-control" name="nacionalidad" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cedula">Cedula</label>
                        <input type="numer" class="form-control" name="cedula" required>
                    </div>
                </div>

                <hr class="mb-4">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="country">CURSOS</label>
                        <select class="custom-select d-block w-100" id="cursos" required>
                            <option value="">Escoger...</option>
                            <option>CURSO 1</option>
                            <option>CURSO 2</option>
                        </select>
                        <small class="text-muted">Puede escoger solo un CURSO</small>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="state">TALLERES</label>
                        <select class="custom-select d-block w-100" id="state" required>
                            <option value="">Escoger...</option>
                            <option>TALLER 1</option>
                            <option>TALLER 2</option>
                        </select>
                        <small class="text-muted">Puede escoger varios TALLERES</small>
                    </div>
                </div>
                <hr class="mb-4">
                <div class="text-center">
                    <button class="btn btn-primary btn-lg" type="submit">REGISTRAR</button>
                </div>
            </form>
            
        </div>
    </div>