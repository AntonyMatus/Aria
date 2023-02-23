<?php
    session_start();

    if (!isset($_SESSION['auth_id'])) {
        header('Location: login.php');
    }

    $rol = isset($_SESSION['rol']) ? $_SESSION['rol'] : 0;

    if (!boolval($rol)) {
        header('Location: index.php');
    }

    require 'backend/connection.php';

    $sql = "SELECT * FROM users_table"; 
    $query = $connection->prepare($sql); 
    $query->execute(); 
    $users = $query->fetchAll(PDO::FETCH_OBJ);
?>

<?php include 'components/header.php' ?>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Usuarios</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <button onclick="openModalUser()" class="btn btn-client float-right my-3">
                                Crear <i class="fas fa-plus-circle"></i>
                            </button>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Correo electronico</th>
                                        <th>Rol</th>
                                        <th>Editar</th>
                                        <th>Borrar</th>
                                    </tr>
                                </thead>    
                                <tbody>
                                    <?php foreach ($users as $item) { ?>
                                        <tr>
                                            <td>
                                                <?php echo $item->name; ?>
                                            </td>
                                            <td>
                                                <?php echo $item->email; ?>
                                            </td>
                                            <td>
                                                <?php 

                                                    switch ($item->rol) {
                                                        case 0:
                                                            echo '<span class="badge badge-warning">Usuario</span>';
                                                            break;

                                                        case 1:
                                                            echo '<span class="badge badge-success">Admistrador</span>';
                                                            break;
                                                    
                                                        default:
                                                                echo '<span class="badge badge-secondary">Desconocido</span>';
                                                            break;
                                                    } 
                                                ?>
                                            </td>
                                            <td>
                                                <button
                                                    type="button"
                                                    onclick="editUser(<?php echo $item->id; ?>)"
                                                    class="btn btn-success"
                                                >
                                                    <i class="far fa-edit"></i>
                                                </button>
                                            </td>
                                            <td>
                                                <button
                                                    type="button"
                                                    onclick="deleteUser(<?php echo $item->id; ?>)"
                                                    class="btn btn-danger"
                                                >
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
    </div>

    <div class="modal fade" id="modal-users" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Formuario usuarios</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form onsubmit="submitForm(event)" id="form-users">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input 
                                type="text"
                                name="name"
                                id="name"
                                class="form-control"
                                placeholder="Ingresar nombre" 
                                required
                            />
                        </div>
                        <div class="form-group">
                            <label>Correo electronico</label>
                            <input 
                                type="email" 
                                name="email"
                                id="email"
                                class="form-control"
                                placeholder="Ingresar correo electronico" 
                                required
                            />
                        </div>
                        <div id="input-text-password" class="form-group">
                            <label>Contraseña</label>
                            <input 
                                type="password"
                                name="password"
                                id="password"
                                class="form-control"
                                placeholder="Ingresar contraseña"
                            />
                        </div>
                        <div class="form-group">
                            <label>Rol</label>
                            <select name="rol" id="rol" class="form-control" required>
                                <option value="">Elegir rol</option>
                                <option value="0">Usuario</option>
                                <option value="1">Administrador</option>
                            </select>
                        </div>
                        <div id="input-check-password" class="form-check mb-4 d-none">
                            <input
                                type="checkbox"
                                name="change_password"
                                id="change_password"
                                class="form-check-input"
                                onchange="changePassword(event)"
                            />
                            <label class="form-check-label" for="change_password">
                                Cambiar contraseña
                            </label>
                        </div>
                        <div id="btn-options" class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">
                                Guardar
                            </button>
                            <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">
                                Cancelar
                            </button>
                        </div>
                        <div  id="loading" class="d-none row justify-content-center">
                            <div class="spinner-border" role="status">
                                <span class="sr-only">Guardando...</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include 'components/footer.php' ?>