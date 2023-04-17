<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Section 2</title>
   
</head>
<body>

    <?php
    $car = array();
    $car[0]["tensp"] = "Service";
    $car[0]["mota"] = "Trying to catch up with very new social network? Do you find yourself juggling with copy and images to make sure to share at least.";
    $car[0]["anhsp"] = "https://vidhantravels.com/img/cars/bmw.jpg";

    $car[1]["tensp"] = "Best Coverage";
    $car[1]["mota"] = "Trying to catch up with very new social network? Do you find yourself juggling with copy and images to make sure to share at least.";
    $car[1]["anhsp"] = "https://i.pinimg.com/736x/37/67/52/376752e6c8548f30282a8d315faf1b3d--bmw-cars-cars-motorcycles.jpg";

    $car[2]["tensp"] = "Lowest";
    $car[2]["mota"] = "Trying to catch up with very new social network? Do you find yourself juggling with copy and images to make sure to share at least.";
    $car[2]["anhsp"] = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4sij6hWXWmIylQqn3k0G7VApmxFHhz0JNLKizg2_2qzhr5KQjNgk-rp6uK6zzw3wcplU&usqp=CAU";
    ?>
    <div class="section2">
        <div class="title"><b>
                <h2 class="titleh2">OUR SERVICES</h2>
            </b>
        </div>
        <div>
            <div class="productcar">
                <div class="product">
                    <?php
                    $n = count($car);
                    for ($i = 0; $i < $n; $i++) {
                    ?>
                        <div class=" col-12 ">
                            <div class="col-3">
                                <img class="card-img-top" src="<?php echo $car[$i]["anhsp"] ?>" alt="">
                                <br>
                                <div class="card-title product-title text-center h5" style="color:white"><?php echo $car[$i]["tensp"] ?></div>
                                <div class="price text-center h6" style="color:gray" ><?php echo $car[$i]["mota"] ?></div>
                                <br>
                                <a class="detail"  href="">
                                    <button class="btn btn-success" style="margin-bottom:40px;">Read More -> </button>
                                </a>
                                <br>
                             </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>
</html>