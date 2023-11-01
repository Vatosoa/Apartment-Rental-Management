<?php
    require('inc/essentials.php');
    adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">

    <?php require('inc/header.php'); ?>
    
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">SETTINGS</h3>

                <!-- General Settings Action -->
                <div class="card">
            
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sù" data-bs-toggle="modal" data-bs-target="#general-s">Edit</button>
                        </div>
                        <h5 class="card-su btitle mb-1 fw-bold">Site Title</h5>
                        <p class="card-text">content</p>
                        <h5 class="card-subtitle mb-1 fw-bold">About us</h5>
                        <p class="card-text">content</p>
                    </div>
                </div>

                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="false">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                <button type="button" class="btn- close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                </div></div>

            </div>
        </div>
    </div>
</body>    <?php require('inc/scripts.php'); ?>

 </html>