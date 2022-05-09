<?php if (!defined('ROOT_PATH')) die ('can not access') ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">

                <?php if(!empty($state)): ?>
                    <?php if($state === 'fail'): ?>
                        <div class="alert alert-danger my-2">
                            Tài khoản hoặc mật khẩu không chính xác.
                        </div>
                    <?php elseif($state === 'empty'): ?>
                        <div class="alert alert-danger my-2">
                            Vui lòng nhập dữ liệu.
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

                <form action="?c=login&m=handle" method="post" class="my-3 p-3 border">
                    <div class="form-group">
                        <label for="txtUsername">Username: </label>
                        <input type="text" class="form-control" name="txtUsername" id="txtUsername">
                    </div>
                    <div class="form-group">
                        <label for="txtPassword">Password: </label>
                        <input type="password" class="form-control" name="txtPassword" id="txtPassword">
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnLogin" id="btnLogin">Login</button>
                </form>
            </div>
        </div>

    </div>
</main>
