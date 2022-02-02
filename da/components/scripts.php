<!-- scripts -->
<script src="js/wow.min.js"></script>

<script>
    new WOW().init();
</script>


<!-- AOS LINK -->
<!-- <script src=" https://unpkg.com/aos@next/dist/aos.js">
</script>

<script>
    AOS.init({
        duration: 500,
        once: true,
        offset: 300
    });
</script> -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
<script>
    
    $(function() {
    $(window).scroll(function () {
       if ($(this).scrollTop() >10) {
        //    console.log($(this));
        //    console.log($(this).scrollTop());
        $('nav').addClass('navBackgroundStart')
       } 
       if ($(this).scrollTop() < 10) {
          $('nav').removeClass('navBackgroundStart')
       } 
    });
    });
    </script>