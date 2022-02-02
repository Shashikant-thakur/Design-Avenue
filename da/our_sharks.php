<!doctype html>
<html lang="en">

<head>
    <!-- header -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <!-- Aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./css/da_fam.css">
    <title>Design Avenue</title>
    <!-- my style sheet -->
</head>
<?php
    include('./components/navbar.php'); 

?>
<body class="px-1">

    <!-- bg image
        <div class="bg-img">
            <img class="img-1" src="./imgs/litho_bg_img_1.jpg" alt="bg-img">
        </div> -->

    <!-- Main container -->
    <!-- home -->
    <!-- <section
        style="padding:18rem 5rem;      background-image: linear-gradient(to right top,#0039e3,#4132e0,#5e28dd,#741bd9,#8600d4);">
        <div class="d-flex flex-column justify-content-center align-items-center text-white"
            style="background-image: url('')">
            <h1>Da Fam</h1>
            <p>Lorem ipus grav</p>
        </div> -->

    <!-- </section> -->

    <!-- how can we help? -->

    <!-- locations -->
    <h1 class="text-center" id="text1" style="padding-top:200px"> We are on a mission to help startups | business <br>
    in multiple ways</h1>

    <!-- maps and locations -->
    <section id="cards3" style="background-color:#fff6f7;  padding:12rem 0; " style="background-color: #65BAA8;">
        <!-- 3 cards i -->
        <div class="container">
            <div>
                <div class="text-center d-flex flex-column " style="margin-bottom:3rem;">
                    <h1>Our Team
                    </h1>

                </div>
                <div class="row">
                    <div class="col-12 col-sm-3 text-center">
                        <img class="rounded-circle mt-2 mt-sm-0" src="./imgs/avtar28.jpg" width="90%" alt="img">
                        <h5 class="p-3">Some Text</h5>
                    </div>
                    <div class="col-12 col-sm-3 text-center">
                        <img class="rounded-circle mt-2 mt-sm-0" src="./imgs/avtar28.jpg" width="90%" alt="img" id="">
                        <h5 class="p-3">Some Text</h5>
                        
                    </div>
                    <div class="col-12 col-sm-3 text-center">
                        <img class="rounded-circle mt-2 mt-sm-0" src="./imgs/avtar28.jpg" width="90%" alt="img">
                        <h5 class="p-3">Some Text</h5>
                        
                    </div>
                    <div class="col-12 col-sm-3 text-center">
                        <img class="rounded-circle mt-2 mt-sm-0" src="./imgs/avtar28.jpg" width="90%" alt="img">
                        <h5 class="p-3">Some Text</h5>
                        
                    </div>

                </div>
            </div>

        </div>

    </section>



    <!-- form  -->    
    <div class="form">
        <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                    <div class="card">
                        <h5 class="text-center mb-4">Fill the form to get in touch with us</h5>
                        <form class="form-card" onsubmit=" ">
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3"></label> <input type="text" id="fname" name="fname"
                                        placeholder="First name"> </div>

                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3"></label>
                                    <input type="text" id="lname" name="lname" placeholder="Enter your last name">
                                </div>
                            </div>

                            <!-- email -->
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3"></label> <input type="text" id="email" name="email"
                                        placeholder="Email" onblur="validate(3)"> </div>


                                        <!-- contact_no -->
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3"></label> <input type="text" id="mob" name="mob"
                                        placeholder="Contact No.">
                                </div>
                            </div>

                            <!-- company -->
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3"></label>
                                    <input type="text" id="job" name="job" placeholder="Company">
                                </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex"> <label
                                        class="form-control-label px-3">How can we value you<span class="text-danger">
                                            *</span></label>
                                    <select class="custom-select my-1 mr-sm-2" id="selector">
                                        <option selected>Choose...</option>
                                        <option value="1">Technology</option>
                                        <option value="2">Advisory</option>
                                        <option value="3">Marketing</option>
                                    </select>
                                    <input type="text" id="ans" name="ans" placeholder="Any Other">

                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="form-group col-sm-6"> <button type="submit"
                                        class="btn-block btn-primary">Submit</button> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    <?php 
        include('./components/footer.php')
    ?>
</div>    
    <!-- scripts -->
    <!-- AOS LINK -->
    <script src=" https://unpkg.com/aos@next/dist/aos.js">
    </script>

    <script>
        AOS.init({
            duration: 500,
            once: true,
            offset: 300
        });
    </script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>

</html>