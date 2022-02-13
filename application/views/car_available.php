    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="userprofile.css">

        <title>Home</title>
    </head>

    <body>
        <section >
            <?php
                echo '<h3 style="text-align:center; margin-left:20px; margin-top:25px;">Available Car To Rent</h3>
                <div class="container">';
                    if($username){
                        echo'<div class="row main-row">';
                        foreach($randomguide as $row){
                            echo '<div class="col md-4 mb-5">
                            <div class="card p-3" style="width: 18rem;">
                                    <img class="card-img-top shadow" src="profile_images/'.$row->guide_image.'" alt="Profile image" >
                                    <div class="card-body">
                                    <h5 class="card-title">'.$row->guidename.'</h5>
                                    <p class="card-text">'.$row->city.'</p>
                                    <a href="user_profile.php?id='.$row->guideid.'" class="btn btn-outline-dark">See profile</a>
                                    </div>
                                    </div>
                                </div>';
                        }
                        echo'</div></div>';
                    }
                    else{
                        echo '<h3 class="nouser">No local guide currently registered from this city!</h3><br/>';
                    }
                    echo'</div></div><div style="text-align:right; margin-right: 80px; margin-top:-10px margin-bottom:20px;">
                    <a href="./userguideview.php"  class="btn btn-outline-dark">View more</a></div>';
            ?>
        </section> <br><br>

        <section>
            <?php
                echo '<h1  style="text-align:left; margin-left:20px">To Shop</h1>
                <div class="container">';
                    if($randomproduct){
                        echo'<div class="row main-row">';
                        foreach($randomproduct as $row){
                            echo '<div class="col md-4 mb-5">
                            <div class="card p-3" style="width: 18rem;">
                                    <img class="card-img-top shadow" src="products/'.$row->productimage.'" alt="Profile image" >
                                    <div class="card-body">
                                    <h5 class="card-title">'.$row->productname.'</h5>
                                    <p class="card-text">Rs '.$row->price.'</p>
                                    <a href="productprofile.php?id='.$row->productid.'" class="btn btn-outline-dark">View Item</a>
                                    </div>
                                    </div>
                                </div>';
                        }
                        echo'</div></div>';
                    }
                    else{
                        echo '<h3 class="nouser">No Product Found!</h3><br/>';
                    }
                    echo'</div></div><div style="text-align:right; margin-right: 50px; margin-bottom:20px;">
                    <a href="./userproductview.php" class="btn btn-outline-dark" style="text-align:right;">View more</a></div>';
            ?>
        </section><br>


                <!-- Optional JavaScript; choose one of the two! -->

                <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

                <!-- Font awesome -->
                <script src="https://kit.fontawesome.com/f50b25f16a.js" crossorigin="anonymous"></script>
                <!-- jQuery -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

                <script>
                    $(document).ready(function() {
                        // Add smooth scrolling to all links
                        $("a").on('click', function(event) {

                            // Make sure this.hash has a value before overriding default behavior
                            if (this.hash !== "") {
                                // Prevent default anchor click behavior
                                event.preventDefault();

                                // Store hash
                                var hash = this.hash;

                                // Using jQuery's animate() method to add smooth page scroll
                                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                                $('html, body').animate({
                                    scrollTop: $(hash).offset().top
                                }, 800, function() {

                                    // Add hash (#) to URL when done scrolling (default click behavior)
                                    window.location.hash = hash;
                                });
                            } // End if
                        });
                    });

                    $(window).scroll(function() {
                        $('nav').toggleClass('scrolled', $(this).scrollTop() > 200);
                    });
                </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    </body>

    </html>