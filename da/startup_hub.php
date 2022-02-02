<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/startup_hub.css">
    <title>startup hub</title>
</head>

<body>        
    <?php
            include('./components/navbar.php'); 
        ?>
    <div class="heading">
            <div id="head_arrow_c">
            <h1  id="head1">Do you own a startup?</h1>
            <!-- <a class="btn button_1" href="#" ><img src="/imgs/next.png" height="60px" width="60px" style="object-fit: cover;"></img></a> -->

                
            </div>
    </div>

    <div class="serve ">
        <h1 id="p1">How can Design Avenue<br> serve you?</h1>

        <div class="container-fluid " id="cards">
            <div class="row" id="cardsss">
                <div class="col-sm-12 col-md-6 col-lg-4 p-2 " id="card1">
                    <div class="" id="c1">
                        <div>
                            <h1>Design Solution</h1>
                            <!-- <h5>your company our design</h5> -->
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 p-2" id="card2">
                    <div class="" id="c2">
                        <h1>Branding and comm</h1>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 " id="card3">
                    <div class="" id="c3">
                        <h1>Advisory</h1>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- <div class="cards">
        <div id="card1"><h1>Design Solution</h1></div>
        <div id="card2"><h1>Branding and comm</h1></div>
        <div id="card3"><h1>Advisory</h1></div>
    </div> -->

    <div id="cont1">
        <div class="text">

            <h1 id="p2">Don't Worry?</h1>

            <h2 id="p3">We work on collab model where we will <br>act like a founder or a core team & work <br> on
                hybrid
                norms.</h4>
        </div>
    </div>
    <a href="#">
        <span class="glyphicon glyphicon-arrow-right"></span>
    </a></span>


    <!-- Form -->
    <div class="form">
        <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                    <div class="card">
                        <h5 class="text-center mb-4">Submit your query</h5>
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
    <!-- form__ -->
    
    <!-- <div class="container-fluid">
        <section id="how can we help">
                <div class="container text-center" style="padding-top: 10rem; padding-bottom: 5rem;">
                    <h6>Fill out the form and we’ll be in touch soon!</h6>
                    <h1 class="mb-5">How can we help you?</h1>
                    <div class="row px-lg-5">
                        <div class="col-12 col-md-6">
                            <input type="text" class="form-control my-4" placeholder="Your name" autocomplete="off" />
                            <input type="email" class="form-control my-4" placeholder="Your email" autocomplete="off" />
    
                            <input type="number" class="form-control my-4" placeholder="Your phone number" autocomplete="off" />
    
                        </div>
                        <div class="col-12 col-md-6">
                            <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Your message"
                                autocomplete="off"></textarea>
                        </div>
                    </div>
                    <div class="row mt-5 px-lg-5">
                        <div class="col-sm-12 col-md-6">
                            <div class="d-flex justify-content-center align-items-start">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 text-end px-2">
                            <button class="btn btn-primary btn-lg text-end"> Send message</button>
                        </div>
                    </div>
                </div>
    
            </section>
        </div> -->

        
 

    </div>
    <?php 
        include('components/footer.php')
    ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    </body>
</html>