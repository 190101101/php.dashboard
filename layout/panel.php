<?php $main = new core\controller; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $main->view('admin', 'requires', 'admin/meta'); ?>
        <?php $main->view('admin', 'requires', 'admin/css'); ?>
    </head>
    <body class="sb-nav-fixed">
        <?php $main->view('admin', 'requires', 'admin/navbar'); ?>

        <div id="layoutSidenav">
            <?php $main->view('admin', 'requires', 'admin/sidebar'); ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <?php breadcrumb(); ?>
                        <?php echo $data['VIEW']; ?>
                    </div>
                </main>
                <?php $main->view('admin', 'requires', 'admin/footer'); ?>
            </div>
        </div>
        <?php $main->view('admin', 'requires', 'admin/js'); ?>
    </body>
</html>
