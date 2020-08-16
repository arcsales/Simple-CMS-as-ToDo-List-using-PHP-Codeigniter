<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="active"><a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>users/register">Register <span class="sr-only">(current)</span></a></li>
                <?php if ($this->session->userdata('logged_in')) : ?>
                    <li><a class="nav-link" href="<?php echo base_url(); ?>projects">Projects <span class="sr-only">(current)</span></a></li>
                <?php endif; ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if ($this->session->userdata('logged_in')) : ?>
                    <li class="active"><a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout <span class="sr-only">(current)</span></a></li>
                <?php else : ?>
                    <li class="active"><a class="nav-link" href="<?php echo base_url(); ?>users/login">Login <span class="sr-only">(current)</span></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">

            <div class="col-3">
                <?php $this->load->view('users/login_view'); ?>
            </div>
            <div class="col-9">
                <?php $this->load->view($main_view); ?>
            </div>
        </div>
    </div>

</body>

</html>