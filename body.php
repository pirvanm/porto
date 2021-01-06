<html>



<body>
    <!-- Adaugare in "Schema pentru toata pagina" -->
    <div class="container">
        <!-- Exemplu pentru constructie  -->
        <!-- https://getbootstrap.com/docs/4.5/layout/grid/ -->
        <!-- S1 Sectiunea De Navigare -->



        <?php
        // include('s1.php');
        // include('s2.php');
        // include('s3.php');
        //include('s4.php');
        include('s5.php');
        include('s6.php');
        ?>






        <!-- Inchidere Sectiunea Experienta Numar -->
    </div>

    <!-- Inchiderea Sectiunii Experienta -->
    <!-- Inchiderea Finala -->
    </div>
</body>

</html>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script>
    // https://stackoverflow.com/questions/9446318/bootstrap-tooltips-not-working
    // e bine sa faci research promit :)!
    $(document).ready(function() {
        $("body").tooltip({
            selector: '[data-toggle=tooltip]'
        });
    });

    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>