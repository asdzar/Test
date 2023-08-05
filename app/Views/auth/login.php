<?= $this->extend('auth/template/index'); ?>

<?= $this->section('template'); ?>

<div class="row">
    <div class="col-lg">
        <form>
            <div class="mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control form-control-sm" id="inputEmail3">
                </div>
            </div>
            <div class="mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control form-control-sm" id="inputPassword3">
                </div>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </div>
</div>

<<?= $this->endSection(); ?>