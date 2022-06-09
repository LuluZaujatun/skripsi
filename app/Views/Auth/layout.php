<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Web Monitoring</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('sb admin') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('sb admin') ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?php echo base_url('sb admin') ?>/img/logo.png" rel="shortcut icon">

    <?= $this->renderSection('pageStyles') ?>
</head>

<body class="bg-danger">

    <main role="main" class="container">
        <?= $this->renderSection('main') ?>
    </main>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="sticky-footer-white">

        <div class="copyright text-white text-center">
            <span>Copyright &copy; Website by Lulu Zaujatun <?= date('Y'); ?></span>
        </div>

    </footer>
    <!-- End of Footer -->
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('sb admin') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('sb admin') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?= $this->renderSection('pageScripts') ?>
</body>

</html>