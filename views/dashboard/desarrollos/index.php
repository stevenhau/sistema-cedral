<?php 
include __DIR__ . '/../../../controllers/desarrolloController.php';
include __DIR__ . '../../layouts/header.php';
$desarrollo = new DesarrolloController();
$desarrollo->agregar($_POST);
$desarrollos = $desarrollo->listar();
?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Desarrollos</h1>
<p class="mb-4">Lista de los desarrollos</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="/agregar-desarrollo" class="btn btn-primary btn-icon-split">
            <span class="text">Agregar Nuevo Desarrollo</span>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($desarrollos as $desarrollo): ?>
                    <tr>
                        <td><?=$desarrollo["nombre"];?></td>
                        <td>
                            <a href="/editar-desarrollo?id=<?=$desarrollo["id"];?>" class="btn btn-warning btn-circle">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-circle btn-detele" data-id="<?=$desarrollo["id"];?>">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div><!-- Final del Card Body -->
</div>




<?php include __DIR__ . '../../layouts/footer.php'; ?>