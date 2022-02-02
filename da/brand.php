<!DOCTYPE html>
<html lang="en">

<head>

    <!-- my style sheet -->
    <link rel="stylesheet" href="./css/technology.css">

    <!-- header -->
    <?php include('./components/header.php'); ?>

    <title>Design Avenue</title>

</head>

<body>
    <!-- navbar -->
    <?php include('./components/navbar.php'); ?>

    <div class="container-fluid tech-bg">

       <div class="container">
       <div class="row">
            <div class="col-12 offset-12 offset-lg-0 col-lg-4 p-5 order-3 order-sm-first text-center" id="mycontainer1" style="align-items: center; align-self: center; padding: 10px;">
                <h4 id="welcome_text1" class="text-center">Welcome to Design Avenue</h4>
                <span class="text-center" id="web_dev" hidden>Some Description card 1</span>
                <span class="text-center" id="digital_prod_dev" hidden>Some Description card 2</span>
            </div>

            <!-- <div class="col-12 col-lg-8 text-center bg-success" id="showWeb" style="position: relative;">

                <div class="card p-3 website"  onclick="showWeb()" style="border-radius: 20px; width: 50%; z-index: 2; position: absolute; box-shadow: 0px 10px 10px grey;">
                    <img src="./imgs/web-dev.jpg" width="300px" height="300px" style="object-fit: cover;" class="card-img-top" alt="web-dev-img">
                    <div class="card-body" >
                        <h5 class="card-title text-center" >Website Development</h5>
                        <a href="#" class="btn btn-primary">Do Something</a>
                    </div>
                </div>
                <div class="card p-3 digital" onclick="showDigital()" id="showDigital" style="border-radius: 20px; width: 50%; z-index: 1; margin-left: 30%; position: absolute; box-shadow: 5px 10px 10px grey;">
                    <img src="./imgs/prod-dev.jpg" width="300px" height="300px" style="object-fit: cover;" class="card-img-top" alt="web-dev-img">
                    <div class="card-body">
                        <h5 class="card-title text-center">Digital Product Development</h5>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div> -->
          
            <div class="col-12 col-sm-6 col-lg-4 order-4" onmouseover="showEffect('web_dev',1)" onmouseleave="removeEffect('web_dev',1)">
                <div class="card hover-effect p-3 on_hover" style="border-radius: 20px;">
                    <img src="./imgs/web-dev.jpg" width="100%" height="300px" style="object-fit: cover;" class="card-img-top" alt="web-dev-img">
                    <div class="card-body">
                        <h5 class="card-title text-center">Website Development</h5>
                        <!-- <a href="#" class="btn btn-primary">Do Something</a> -->
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-sm-6 col-lg-4 order-2 order-lg-last" onmouseover="showEffect('digital_prod_dev',1)" onmouseleave="removeEffect('digital_prod_dev',1)">
                <div class="card p-3 on_hover" style="border-radius: 20px;">
                    <img src="./imgs/prod-dev.jpg" width="100%" height="300px" style="object-fit: cover;" class="card-img-top" alt="web-dev-img">
                    <div class="card-body">
                        <h5 class="card-title  text-center">Digital Product Development</h5>
                        <!-- <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ad repudiandae architecto quia esse debitis itaque. Vel dolor corrupti aspernatur, nesciunt suscipit molestias dolores repudiandae, in est ipsam accusamus voluptatem?</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 col-sm-6 col-lg-4 order-4 "  onmouseover="showEffect('UX_Consulting',2)" onmouseleave="removeEffect('UX_Consulting',2)">
                <div class="card p-3 on_hover" style="border-radius: 20px;">
                    <img src="./imgs/mobi.jpg" width="100%" height="300px" style="object-fit: cover;" class="card-img-top" alt="web-dev-img">
                    <div class="card-body">
                        <h5 class="card-title text-center">UX Consulting & Advisory</h5>
                        <!-- <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ad repudiandae architecto quia esse debitis itaque. Vel dolor corrupti aspernatur, nesciunt suscipit molestias dolores repudiandae, in est ipsam accusamus voluptatem?</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 offset-12 offset-lg-0 col-lg-4 order-2 " onmouseover="showEffect('prod_cons',2)" onmouseleave="removeEffect('prod_cons',2)">
                <div class="card p-3 on_hover" style="border-radius: 20px;">
                    <img src="./imgs/laptop.jpg" width="100%" height="300px" style="object-fit: cover;" class="card-img-top" alt="web-dev-img">
                    <div class="card-body">
                        <h5 class="card-title text-center">Product Consulting & Advisory</h5>
                        <!-- <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ad repudiandae architecto quia esse debitis itaque. Vel dolor corrupti aspernatur, nesciunt suscipit molestias dolores repudiandae, in est ipsam accusamus voluptatem?</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>

            <div class="col-12  col-lg-4 p-5  order-3  order-sm-first  order-lg-last text-center"  style="align-items: center; align-self: center; padding: 10px;" id="mycontainer2">
                <h4 id="welcome_text2" class="text-center">We are not just a company..</h4>
                <span class="text-center" id="UX_Consulting" hidden>Some Description card 1</span>
                <span class="text-center" id="prod_cons" hidden>Some Description card 2</span>
            </div>
        </div>
       </div>
    </div>
    <div class="container-fluid">
        <!-- footer -->
        <?php include('./components/footer.php')?>
    </div>

    <script>
        function showEffect(x,y) {
            document.getElementById(x).removeAttribute('hidden');
            // document.getElementById('mycontainer'+y).style.backgroundColor='white';
            document.getElementById('mycontainer'+y).style.padding='20px'
            document.getElementById('welcome_text'+y).setAttribute('hidden','hidden');
        }
        function removeEffect(x,y) {
            document.getElementById('welcome_text'+y).removeAttribute('hidden');
            // document.getElementById('mycontainer'+y).style.backgroundColor='';
            document.getElementById('mycontainer'+y).style.padding='10px'
            document.getElementById(x).setAttribute('hidden','hidden');
        }

        // function showDigital(){
        //     document.getElementById('showDigital').style.zIndex=3;
        //     document.getElementById('showWeb').style.zIndex=1;
        // }
        // function showWeb(){
        //     document.getElementById('showDigital').style.zIndex=1;
        //     document.getElementById('showWeb').style.zIndex=3;
        // }
    </script>
    <!-- scripts -->
    <?php include('./components/scripts.php'); ?>
</body>

</html>