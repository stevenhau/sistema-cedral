<?php
include __DIR__ . '/../../../controllers/desarrolloController.php';
include __DIR__ . '../../layouts/header.php';
$desarrollo = new DesarrolloController();
$id = $_GET["id"];
$desarrollos = $desarrollo->optenerDesarrollo($id);
$msg = $desarrollo->editar($id, $_POST);
?>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Desarrollos</h1>
<?=$msg;?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Modificar Desarrollo</h6>
    </div>
    <div class="card-body">

        <form action="/editar-desarrollo?id=<?= $id; ?>" method="POST">
            <div class="form-group">
                <input type="text" class="form-control form-control-user" name="name_develop" value="<?= $desarrollos["nombre"] ?>" placeholder="Escribe el nombre del nuevo Desarrollo" required>
            </div>
            <input class="btn btn-success add_develop" type="submit" name="action" value="Modificar">
            <a class="btn btn-danger" href="/desarrollos">Regresar al listado</a>
        </form>

    </div><!-- Final del Card Body -->
</div>

<?php include __DIR__ . '../../layouts/footer.php'; ?>