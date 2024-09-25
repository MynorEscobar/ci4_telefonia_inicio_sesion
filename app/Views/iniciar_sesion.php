<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="card shadow-lg form-signin">
    <div class="card-body p-5">
        <h1 class="fs-4 card-title fw-bold mb-4">Iniciar sesión</h1>
        <form method="POST" action="<?=base_url('autenticacion');?>" autocomplete="off">
            <?=csrf_field();?>
            <div class="mb-3">
                <label class="mb-2" for="user">Usuario</label>
                <input type="text" class="form-control" name="user" id="user" required autofocus placeholder="usuario">
            </div>

            <div class="mb-3">
                <div class="mb-2 w-100">
                    <label for="password">Contraseña</label>
                    <a href="<?=base_url('recuperar_contra')?>" class="float-end">
                        Olvide mi contraseña
                    </a>
                </div>
                <input type="password" class="form-control" name="password" id="password" required placeholder="contraseña">
            </div>

            <button type="submit" class="btn btn-primary">
                Ingresar
            </button>
        </form>

    </div>
    <div class="card-footer py-3 border-0">
        <div class="text-center">
            ¿No tienes una cuenta? <a href="<?=base_url('registrar');?>" class="text-dark">Registrate aquí</a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>