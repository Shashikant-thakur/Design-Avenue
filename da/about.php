<!DOCTYPE html>
<html lang="en">

<head>

    <!-- my style sheet -->
    <link rel="stylesheet" href="./css/about.css">

    <!-- header -->
    <?php include('./components/header.php'); ?>

    <title>Design Avenue</title>

</head>

<body>

    <!-- navbar -->
    <?php include('./components/navbar.php'); ?>

    <div class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 p-5">
                    <object class="mt-3" itemprop="video" type="video">
                        <iframe style="width: 100%; min-height: 325px; max-height: 100%; object-fit: cover;border-radius: 5px;"
                            src="https://www.youtube.com/embed/6-_xNf5uCS4" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen="true"></iframe>
                    </object>
                </div>
                <div class="col-12 col-lg-6 px-5 mt-5 mt-lg-0" style="align-items: center; align-self: center;">
                    <h4>We are not just company</h4>
                    <h1>But we are more like a community...</h1>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad laborum, aliquid ex eaque
                        laudantium minima voluptatem architecto, magni inventore ut iusto alias. Magni sunt saepe eius
                        eos eum aspernatur iste!</span>
                    <br>
                    <button class="btn btn-primary mt-3">Start Now</button>
                </div>
            </div>
        </div>
        <div class="container-fluid numIncrease" style="margin-top:200px;">
        <div class="row my-5 text-center justify-content-center">
            <h1 class="text-center mb-3">Our achievements</h1>
            <div class="col-6 col-md-2 p-3 text-center justify-content-center ">

                <div class="py-2">
                    <span class="traniers"></span><span style=" font: 1000 40px system-ui;color:#2F4858;
                   ">+</span> <br> <span style="color:#2F4858;"><b>Compaigns</b></span>
                </div>
            </div>
            <div class="col-6 col-md-2  text-center justify-content-center p-3">
                <div class=" py-2">
    
                    <span class="membership"></span><span style=" font: 1000 40px system-ui;color:#2F4858;
                   ">+</span>
                    <br><span style="color:#2F4858;"><b>Customer</b></span>
                </div>
            </div>
            <div class="col-6 col-md-2 p-3 text-center justify-content-center">
                <div class="py-2">
                    <span class="companies"></span> <span style=" font: 1000 40px system-ui;color:#2F4858;
                   ">+</span><br> <span style="color:#2F4858;"><b>Countries</b></span>
                </div>
            </div>
            <div class="col-6 col-md-2 p-3 text-center justify-content-center">
                <div class="py-2">
                    <span class="year"></span><span style=" font: 1000 40px system-ui;color:#2F4858;
                   ">+</span> <br> <span style="color:#2F4858;"><b>Year Experience</b></span>
                </div>
            </div>
        </div>
    </div>
    </div>
<!-- 
    <div class="container-fluid numIncrease">
        <div class="row my-5 text-center justify-content-center">
            <div class="col-6 col-sm-3 p-2 text-center justify-content-center ">
                <div class="py-2">
                    <span class="traniers"></span><span style=" font: 1000 40px system-ui;color:#2F4858;
                   ">+</span> <br> <span style="color:#2F4858;"><b>Compaigns</b></span>
                </div>
            </div>
            <div class="col-6 col-sm-3  text-center justify-content-center p-2">
                <div class=" py-2">
    
                    <span class="membership"></span><span style=" font: 1000 40px system-ui;color:#2F4858;
                   ">+</span>
                    <br><span style="color:#2F4858;"><b>Customer</b></span>
                </div>
            </div>
            <div class="col-6 col-sm-3 p-2 text-center justify-content-center">
                <div class="py-2">
                    <span class="companies"></span> <span style=" font: 1000 40px system-ui;color:#2F4858;
                   ">+</span><br> <span style="color:#2F4858;"><b>Countries</b></span>
                </div>
            </div>
            <div class="col-6 col-sm-3 p-2 text-center justify-content-center">
                <div class="py-2">
                    <span class="year"></span><span style=" font: 1000 40px system-ui;color:#2F4858;
                   ">+</span> <br> <span style="color:#2F4858;"><b>Year Experience</b></span>
                </div>
            </div>
        </div>
    </div> -->
    <!-- carousel container -->
    <div class="container-fluid testimonal_container  pb-3">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-4 offset-sm-2 offset-md-4 ">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active px-2 text-center" style="padding: 30px;"
                            data-bs-interval="10000">

                            <h5 class="text-center">Art freedom and creativity</h5>
                            <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio
                                maiores quod illum mollitia deleniti dignissimos tempora
                                obcaecati doloribus voluptas soluta vitae sunt odio maxime, est accusantium adipisci
                                ducimus
                                perferendis excepturi.</span>
                            <h6 class="text-center mt-5" style="color: #FF6464;">James Bond</h6>
                        </div>
                        <div class="carousel-item px-2 text-center" style="padding: 30px;" data-bs-interval="5000">

                            <h5 class="text-center">Art freedom and creativity</h5>
                            <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio
                                maiores quod illum mollitia deleniti dignissimos tempora
                                obcaecati doloribus voluptas soluta vitae sunt odio maxime, est accusantium adipisci
                                ducimus
                                perferendis excepturi.</span>
                            <h6 class="text-center mt-5" style="color: #FF6464;">James Bond</h6>
                        </div>
                        <div class="carousel-item px-2 text-center" style="padding: 30px;">

                            <h5 class="text-center">Art freedom and creativity</h5>
                            <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio
                                maiores quod illum mollitia deleniti dignissimos tempora
                                obcaecati doloribus voluptas soluta vitae sunt odio maxime, est accusantium adipisci
                                ducimus
                                perferendis excepturi.</span>
                            <h6 class="text-center mt-5" style="color: #FF6464;">James Bond</h6>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="button" class="btn btn primary" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-skip-backward-fill text-primary" viewBox="0 0 16 16">
                            <path
                                d="M.5 3.5A.5.5 0 0 0 0 4v8a.5.5 0 0 0 1 0V8.753l6.267 3.636c.54.313 1.233-.066 1.233-.697v-2.94l6.267 3.636c.54.314 1.233-.065 1.233-.696V4.308c0-.63-.693-1.01-1.233-.696L8.5 7.248v-2.94c0-.63-.692-1.01-1.233-.696L1 7.248V4a.5.5 0 0 0-.5-.5z" />
                        </svg>

                    </button>

                    <button type="button" class="btn btn primary" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-skip-forward-fill text-primary" viewBox="0 0 16 16">
                            <path
                                d="M15.5 3.5a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V8.753l-6.267 3.636c-.54.313-1.233-.066-1.233-.697v-2.94l-6.267 3.636C.693 12.703 0 12.324 0 11.693V4.308c0-.63.693-1.01 1.233-.696L7.5 7.248v-2.94c0-.63.693-1.01 1.233-.696L15 7.248V4a.5.5 0 0 1 .5-.5z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- bg image -->
    <!-- <div class="bg-img">
        <img class="img-1 filter-dark" src="./imgs/about-us-bg_img_1.jpg" alt="bg-img">
    </div> -->

    <!-- <div class="show_case" id="show_case">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-12 col-md-6">
                                <img src="./imgs/about_us_img_2.jpg" width="100%" class="rounded-start" alt="...">
                            </div>
                            <div class="col-12 col-md-6 welcome_text">
                                <div class="card-body p-2 p-md-5">
                                    <h5 class="card-title" id="point_here">We started this company 10 years ago out of a
                                        desire to design and build amazing things.</h5>
                                    <p class="card-text" style="color: rgb(95, 91, 91);">Lorem ipsum dolor sit, amet
                                        consectetur adipisicing elit. Sint sunt nisi
                                        veritatis ullam illum tempore, harum beatae labore ab perspiciatis maxime porro
                                        tempora animi vero sit hic quia accusantium neque.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="#">Company Overview</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mt-2 mt-lg-0">
                    <div class="card" style="height: 100%;">
                        <img src="./imgs/about-us-img-3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">About digital agency</h5>
                            <p class="card-text">Lorem ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem ipsum has been the industry's standard dummy text.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- This code will be used in DA fam Page -->
    <!-- <div class="container" style="padding-top: 100px;">
        <div class="row">
            <div class="col-12 col-sm-8">
                <h2>25 years we have created websites for global brands. Our success
                    story.</h2>
            </div>

            <div class="col-12 col-sm-4 text-center text-sm-end mt-2 mt-sm-0">
               
                <button type="button" class="btn btn-primary p-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-badge-hd cursor-pointer" viewBox="0 0 16 16">
                        <path
                            d="M7.396 11V5.001H6.209v2.44H3.687V5H2.5v6h1.187V8.43h2.522V11h1.187zM8.5 5.001V11h2.188c1.811 0 2.685-1.107 2.685-3.015 0-1.894-.86-2.984-2.684-2.984H8.5zm1.187.967h.843c1.112 0 1.622.686 1.622 2.04 0 1.353-.505 2.02-1.622 2.02h-.843v-4.06z" />
                        <path
                            d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
                    </svg> Watch Our Story
                </button>

             
                <div class="modal border-0 fade bg-transparent" id="exampleModal" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog border-0 modal-dialog-centered bg-transparent">
                        <div class="modal-content border-0 p-0 m-0 bg-transparent">
                         
                            <button type="button" class="btn-close bg-light" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            <div class="modal-body  border-0 p-0 m-0 bg-transparent">
                                <object class="mt-3" itemprop="video" type="video">
                                    <iframe style="width: 100%; min-height: 250px; object-fit: cover;"
                                        src="https://www.youtube.com/embed/VxBvqMQH6q4" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen="true"></iframe>
                                </object>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-12 col-sm-6 col-md-3 my-2 text-center border_effect">
                <img class="" src="https://via.placeholder.com/200x100" width="100%" alt="img">
            </div>
            <div class="col-12 col-sm-6 col-md-3  my-2 text-center border_effect">
                <img class="" src="https://via.placeholder.com/200x100" width="100%" alt="img">
            </div>
            <div class="col-12 col-sm-6 col-md-3  my-2 text-center border_effect">
                <img class="" src="https://via.placeholder.com/200x100" width="100%" alt="img">
            </div>
            <div class="col-12 col-sm-6 col-md-3  my-2 text-center border_effect">
                <img class="" src="https://via.placeholder.com/200x100" width="100%" alt="img">
            </div>
        </div>

    </div> -->


    <!-- this code can be used in consultations page -->
    <!-- <div class="container-fluid  mt-2  what_we_offer text-center">
        <span class="text-dark">Browse amazing social media features</span>
        <h2 class="mt-4 col-12 col-md-6 offset-md-3 padding_100">We offer a full range of digital marketing services!
        </h2>

        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-6 mt-3" data-aos="fade-left">
                    <div class="service_card">
                        <div class="row">
                            <div class="col-12 col-sm-3 p-2 p-sm-5 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                                    class="bi bi-app-indicator" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                                    <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                </svg>
                            </div>
                            <div class="col-12 col-sm-9 p-5 text-start">
                                <h3 class="d-flex justify-content-start">Digital Solutions</h3>
                                <span class="text-start d-flex justify-content-start service_description">Lorem ipsum,
                                    dolor sit amet consectetur adipisicing elit. Sint laboriosam rerum animi at libero
                                    porro,
                                    explicabo illo, corrupti architecto modi quasi eum quidem, aliquid dolore? Earum
                                    quam enim a consequatur?</span>

                                <button class="btn btn-primary">Know More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 offset-0 offset-sm-3 mt-3" data-aos="fade-left">
                    <div class="service_card">
                        <div class="row">
                            <div class="col-12 col-sm-3 p-2 p-sm-5 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                                    class="bi bi-app-indicator" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                                    <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                </svg>
                            </div>
                            <div class="col-12 col-sm-9 p-5 text-start">
                                <h3 class="d-flex justify-content-start">Branding and Communications</h3>
                                <span class="text-start d-flex justify-content-start service_description">Lorem ipsum,
                                    dolor sit amet consectetur adipisicing elit. Sint laboriosam rerum animi at libero
                                    porro,
                                    explicabo illo, corrupti architecto modi quasi eum quidem, aliquid dolore? Earum
                                    quam enim a consequatur?</span>
                                <button class="btn btn-primary ">Know More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 offset-0 offset-sm-6 mt-3" data-aos="fade-left">
                    <div class="service_card">
                        <div class="row">
                            <div class="col-12 col-sm-3 p-2 p-sm-5 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                                    class="bi bi-app-indicator" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                                    <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                </svg>
                            </div>
                            <div class="col-12 col-sm-9 p-5 text-start">
                                <h3 class="d-flex justify-content-start">Advisory</h3>
                                <span class="text-start d-flex justify-content-start service_description">Lorem ipsum,
                                    dolor sit amet consectetur adipisicing elit. Sint laboriosam rerum animi at libero
                                    porro,
                                    explicabo illo, corrupti architecto modi quasi eum quidem, aliquid dolore? Earum
                                    quam enim a consequatur?</span>
                                <button class="btn btn-primary">Know More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> -->

    <div class="container-fluid" id="footer__">
        <!-- footer -->
        <?php include('./components/footer.php'); ?>
    </div>


    <!-- scripts -->
    <?php include('./components/scripts.php'); ?>
    <script>
       $(window).scroll(function () {
         var ledd=$('.start>.year');
        console.log(ledd,"jhnjh")
        });

        $(window).scroll(function () {
            var topHeight=$(this).scrollTop();
            $('.numIncrease').each(function () {

                let $this = $(this);
                // console.log($this);
                // console.log($this.offset().top,$('.js-trigger').offset().top)
                if ($this.offset().top -500 <= topHeight) {

                    if (!$this.hasClass('start')) {
                        // console.log("ghghg");
                        $this.addClass('start');
                        // .siblings()
                        // .removeClass('start'); 
                    }
                }

            });

        });
    </script>



</body>

</html>