<!-- Link -->
<?php include("include/link.php"); ?>
<!-- Link -->

<link rel="stylesheet" href="1111.css">
<title>Admin</title>

</head>

<body>
    <div class="container">
        <div class="row header">
            <div class="col-md-12">

                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active txt-head" aria-current="page" href="nhahang.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link txt-head" href="#">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link txt-head" href="#">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link txt-head" href="#">Food</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link txt-head" href="#">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link txt-head" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">N.Food</th>
                            <th scope="col">Price</th>
                            <th scope="col">Q.Ty</th>
                            <th scope="col">Total</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Pizza</td>
                            <td>10.00</td>
                            <td>2</td>
                            <td>20.00</td>
                            <td>2020-11-30 04:07:17</td>
                            <td class="dl">Delivered</td>
                            <td>Jana Bush</td>
                            <td>+1 (562) 101-2028</td>
                            <td>tydujy@mailinator.com</td>
                            <td>Minima iure ducimus</td>
                            <td>
                                <div class="ud">UPdate Oder</div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Burger</td>
                            <td>4.00</td>
                            <td>4</td>
                            <td>16.00</td>
                            <td>2020-11-30 03:52:43</td>
                            <td class="dl">Delivered</td>
                            <td>Kelly Dillard</td>
                            <td>+1 (908) 913-3106</td>
                            <td>fexekihor@mailinator.com</td>
                            <td>Incidunt ipsum add</td>
                            <td>
                                <div class="ud">UPdate Oder</div>
                            </td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                            <td>Momo</td>
                            <td>6.00</td>
                            <td>3</td>
                            <td>18.00</td>
                            <td>2020-11-30 03:49:48</td>
                            <td class="cc">Cancelled</td>
                            <td>Bradley Farrell</td>
                            <td>+1 (576) 913-3106</td>
                            <td>zuhafiq@mailinator.com</td>
                            <td>Duis aliqua Qui lor</td>
                            <td>
                                <div class="ud">UPdate Oder</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <!-- Footer -->
        <?php include("include/footer.php"); ?>
        <!-- End -->