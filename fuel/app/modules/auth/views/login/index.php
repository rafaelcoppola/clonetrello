<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php

    use Fuel\Core\Asset;

    echo Asset::css('bootstrap.min.css'); ?>
    <title>TrelloClone</title>
</head>
<style>
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }
</style>

<body>
    <section id="app" class="vh-100" style="background-color: #7594d5;">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100 card shadow bg-body rounded">
                <div class="col-md-6 col-lg-7 col-xl-6">
                    <?php echo Asset::img('logo.svg', array('class' => 'img-fluid')); ?>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-5 offset-xl-1">
                    <h1>TrelloClone</h1>
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                    <?php echo Form::open(); ?>
                        <?php if (Session::get_flash('error')) : ?>
                            <div class="alert alert-danger text-center">
                                <?php echo Session::get_flash('error') ?>
                            </div>
                        <?php endif; ?>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form1Example13" class="form-control form-control-lg" name="username">
                            <label class="form-label" for="form1Example13">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form1Example23" class="form-control form-control-lg" name="password">
                            <label class="form-label" for="form1Example23">Password</label>
                        </div>

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                <label class="form-check-label" for="form1Example3"> Remember me </label>
                            </div>
                            <a href="#!">Forgot password?</a>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                        </div>
                    <?php echo Form::close(); ?>
                    <modal-form></modal-form>
                </div>
            </div>
            <!-- <button>Open Modal</button> -->


        </div>
    </section>
    <?php echo Asset::js('vue.global.prod.js'); ?>
    <?php echo Asset::js('main.js'); ?>
    <?php echo Asset::js('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'); ?>
    <?php echo Asset::js('/components/modalnewacc.js'); ?>
</body>
<script>
    app.mount('#app')
</script>


</html>