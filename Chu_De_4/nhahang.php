<!-- Link -->
<?php include("include/link.php"); ?>
<!-- Link -->

<link rel="stylesheet" href="style.css">
<title>wowFood</title>

<!-- Header -->
</head>

<body>
    <div class="container">
        <!-- Logo -->
        <div class="row header">
            <div class="col-md-6">
                <nav class="navbar navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="nhahang.php">
                            <img src="image/logo.png" class="img-fluid" alt="" width="200" height="70">
                        </a>
                    </div>
                </nav>
            </div>

            <div class="col-md-6">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid table-responsive">
                        <a class="navbar-brand txt-head" href="nhahang.php">Home</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link txt-head" href="#">Categories</a>
                                <a class="nav-link txt-head" href="exp-food.php">Foods</a>
                                <a class="nav-link txt-head" href="admin.php">Admin</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Search -->
        <div class="row search">
            <div class="col-md-12">
                <nav class="navbar navbar-light">
                    <div class="container-fluid">
                        <form class="d-flex">
                            <input class="form-control me-2 txs" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success text-white bg-danger" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Explore Food -->
        <div class="row exp-food">
            <div class="col-md-12">
                <h1 class="txt-food">Explore Food</h1>
                <div class="row row-cols-1 row-cols-md-3 g-4 exp-grp">
                    <div class="col">
                        <div class="card h-100 exp-car">
                            <img src="image/pizza.jpg" class="card-img-top exp-img" alt="...">
                            <div class="title">Pizza</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 exp-car">
                            <img src="image/burger.jpg" class="card-img-top exp-img" alt="...">
                            <div class="title">Burger</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 exp-car">
                            <img src="image/momo.jpg" class="card-img-top exp-img" alt="...">
                            <div class="title">Momo</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menu Food -->
        <div class="row mn-food">
            <h1 class="txt-food">Food Menu</h1>
            <div class="row menu-food">

                <div class="card mb-3 mn-car" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="image/menu-momo.jpg" class="img-fluid rounded-start mn-img" alt="...">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h4 class="card-title">Food title</h4>
                                <h5>$23</h5>
                                <p class="card-text">Made with Italian Sauce, Chicken, and organice vegetatables.</p>
                                <button class="btn btn-outline-success text-white bg-danger" type="submit">Oder
                                    now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 mn-car" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="image/menu-momo.jpg" class="img-fluid rounded-start mn-img" alt="...">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h4 class="card-title">Food title</h4>
                                <h5>$23</h5>
                                <p class="card-text">Made with Italian Sauce, Chicken, and organice vegetatables.</p>
                                <button class="btn btn-outline-success text-white bg-danger" type="submit">Oder
                                    now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 mn-car" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="image/menu-momo.jpg" class="img-fluid rounded-start mn-img" alt="...">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h4 class="card-title">Food title</h4>
                                <h5>$23</h5>
                                <p class="card-text">Made with Italian Sauce, Chicken, and organice vegetatables.</p>
                                <button class="btn btn-outline-success text-white bg-danger" type="submit">Oder
                                    now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 mn-car" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="image/menu-momo.jpg" class="img-fluid rounded-start mn-img" alt="...">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h4 class="card-title">Food title</h4>
                                <h5>$23</h5>
                                <p class="card-text">Made with Italian Sauce, Chicken, and organice vegetatables.</p>
                                <button class="btn btn-outline-success text-white bg-danger" type="submit">Oder
                                    now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 mn-car" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="image/menu-momo.jpg" class="img-fluid rounded-start mn-img" alt="...">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h4 class="card-title">Food title</h4>
                                <h5>$23</h5>
                                <p class="card-text">Made with Italian Sauce, Chicken, and organice vegetatables.</p>
                                <button class="btn btn-outline-success text-white bg-danger" type="submit">Oder
                                    now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 mn-car" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="image/menu-momo.jpg" class="img-fluid rounded-start mn-img" alt="...">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h4 class="card-title">Food title</h4>
                                <h5>$23</h5>
                                <p class="card-text">Made with Italian Sauce, Chicken, and organice vegetatables.</p>
                                <button class="btn btn-outline-success text-white bg-danger" type="submit">Oder
                                    now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more">
                    <a href="exp-food.php"><i class="fa fa-hand-point-right"></i> See All Foods <i
                            class="fa fa-hand-point-left"></i></a>
                </div>
            </div>
        </div>

<!-- Footer -->
<?php include("include/footer.php"); ?>
<!-- End -->