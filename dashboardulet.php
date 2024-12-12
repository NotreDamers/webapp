<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="./dashboardulet.css"/>
        <title>FoodieBayan</title>

    </head>
    <body>
<!-- Sidebar -->
<div class="sidebar">
        <div class="icon">
            <div class="circle">
                <img src="images/AYAYA.png">
            </div>
        </div>
        <div class="icon">
            <div class="circle">
                <img src="images/home-button.png" alt="Home">
            </div>
        </div>
        <div class="icon">
            <img src="images/Shopping cart.png" alt="Cart">
        </div>
        <div class="icon">
            <img src="images/Shopping bag.png" alt="Briefcase">
        </div>
        <div class="icon mt-auto">
            <img src="images/settings.png" alt="Settings">
        </div>
    </div>   
<!-- Sidebar END  -->

<div class="main" style="padding-left: 80px;">
    <!-- Navbar on dashboard page start  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/ayaya1.jpg" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                FoodieBayan
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="images/location_on.png" alt="Link1" width="20" height="20"> Link 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="images/notifications.png" alt="Link2" width="20" height="20"> Link 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="images/account_circle.png" alt="Link3" width="20" height="20"> Link 3</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- Navbar on dashboard page start  -->
<!-- dashboard page start  -->
    <div class="parent">
        <!-- banner start  -->
        <div class="banner"> 
            <div class="inner-banner"> 
                
            </div>
        </div>
        <!-- banner end  -->
        <!-- dash start  -->
        <div class="dash">  
            <div class="dash_head" style="padding-left: 10px;">
                <h1> Food Menu </h1>
            </div>
            <div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-placeholder"></div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Pancit Bihon</h5>
                                <p class="card-text">Php 100</p>
                                <button class="btn btn-outline-primary">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-placeholder"></div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Pancit Bihon</h5>
                                <p class="card-text">Php 100</p>
                                <button class="btn btn-outline-primary">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-placeholder"></div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Pancit Bihon</h5>
                                <p class="card-text">Php 100</p>
                                <button class="btn btn-outline-primary">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-placeholder"></div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Pancit Bihon</h5>
                                <p class="card-text">Php 100</p>
                                <button class="btn btn-outline-primary">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-placeholder"></div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Pancit Bihon</h5>
                                <p class="card-text">Php 100</p>
                                <button class="btn btn-outline-primary">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-placeholder"></div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Pancit Bihon</h5>
                                <p class="card-text">Php 100</p>
                                <button class="btn btn-outline-primary">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </div>
        <!-- dash end  -->
        <!-- order start  -->
        <div class="order"> 
        <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">On Process</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Completed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Canceled</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="list-group">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Pancit Bihon</h5>
                            <small class="text-muted">On Process</small>
                        </div>
                        <p class="mb-1">2 Pancit Bihon</p>
                        <small class="text-muted">10 Dec 2024</small>
                        <div class="text-end text-danger">₱100</div>
                    </div>
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Pancit Bihon</h5>
                            <small class="text-muted">On Process</small>
                        </div>
                        <p class="mb-1">2 Pancit Bihon</p>
                        <small class="text-muted">10 Dec 2024</small>
                        <div class="text-end text-danger">₱100</div>
                    </div>
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Pancit Bihon</h5>
                            <small class="text-muted">On Process</small>
                        </div>
                        <p class="mb-1">2 Pancit Bihon</p>
                        <small class="text-muted">10 Dec 2024</small>
                        <div class="text-end text-danger">₱100</div>
                    </div>
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Pancit Bihon</h5>
                            <small class="text-muted">On Process</small>
                        </div>
                        <p class="mb-1">2 Pancit Bihon</p>
                        <small class="text-muted">10 Dec 2024</small>
                        <div class="text-end text-danger">₱100</div>
                    </div>
                </div>
                <div class="order-summary mt-3">
                    <div class="summary-item">
                        <span>Item</span>
                        <span>400</span>
                    </div>
                    <div class="summary-item">
                        <span>Discount</span>
                        <span>58.2</span>
                    </div>
                    <div class="summary-item">
                        <span>Shipping fee</span>
                        <span>Free</span>
                    </div>
                    <div class="summary-item summary-total">
                        <span>Total</span>
                        <span>341.8</span>
                    </div>
                </div>
                <div class="d-grid mt-3">
                    <button class="btn btn-danger">Tracking Order</button>
                </div>
            </div>
        </div>
    </div>
        </div>
        <!-- order end  -->
        <div class="vertical-line"></div>
    </div>
<!-- dashboard page end  -->            
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>