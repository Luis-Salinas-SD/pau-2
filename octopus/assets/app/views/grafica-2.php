
<!doctype html>
<html class="fixed">
    <?php include("../../includes/head.php"); ?>
    <body>
        <section class="body">

            <!-- start: header -->
            <?php include("../../includes/header.php"); ?>
            <!-- end: header -->

            <div class="inner-wrapper">
                <!-- start: sidebar -->
                <?php include("../../includes/sidebar.php"); ?>
                <!-- end: sidebar -->
                <?php include("../../includes/aside_blank_page.php"); ?> 
                <!-- inicio principal de blank page -->


                <?php include("../../includes/cabecera_graficas.php"); ?> 
                <!-- final principal de blank page -->

                <section role="main" class="content-body">
                    <?php include("../../includes/grafica_real_time_chart_principal.php"); ?> 
                </section>

            </div>

        </section>

        <?php include("../../includes/scripts.php"); ?>

    </body>
</html>