<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS - <?php echo $_settings->info('name') ?></title>
    <?php require_once('inc/header.php') ?>
</head>
<body class="bg-dark">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url ?>">
                <img src="<?php echo validate_image($_settings->info('logo'))?>" class="d-inline-block align-top" alt="" height="30">
                <?php echo $_settings->info('short_name') ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url ?>">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url ?>?page=lms">LMS Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url ?>?page=about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ml-2" href="<?php echo base_url ?>admin">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- LMS Content -->
    <div class="container py-5 mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-white mb-4">Leave Management System</h2>
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Features</h4>
                                <ul>
                                    <li>Easy Leave Application Process</li>
                                    <li>Multiple Leave Types</li>
                                    <li>Real-time Leave Balance Tracking</li>
                                    <li>Automated Approval Workflow</li>
                                    <li>Comprehensive Reporting</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h4>How to Use</h4>
                                <ol>
                                    <li>Login to your account</li>
                                    <li>Navigate to Leave Applications</li>
                                    <li>Fill in the leave request form</li>
                                    <li>Submit for approval</li>
                                    <li>Track your application status</li>
                                    <li>Sample admin : admin</li>
                                    <li>Sample admin password : admin123</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('inc/footer.php') ?>
</body>
</html> 