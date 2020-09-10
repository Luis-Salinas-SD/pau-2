<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>particles.js</title>
        <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
        <meta name="author" content="Vincent Garreau" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" media="screen" href="../../vendor/bootstrap/css/bootstrap.css">
        <?php include("../../includes/head_login.php"); ?>
    </head>
    <body>

        <!-- count particles -->
       

        <!-- particles.js container -->
        
        <div id="particles-js"> 
              
       <?php include("../../includes/form_wizard_principal_2.php"); ?>
              </div>
        <!-- scripts -->
        <script src="particles.js"></script>
        <script src="app.js"></script>

        <!-- stats.js -->
<!--        <script src="stats.js"></script>-->
        <script>
                    var count_particles, stats, update;
                    stats = new Stats;
                    stats.setMode(0);
                    stats.domElement.style.position = 'absolute';
                    stats.domElement.style.left = '0px';
                    stats.domElement.style.top = '0px';
                    document.body.appendChild(stats.domElement);
                    count_particles = document.querySelector('.js-count-particles');
                    update = function () {
                        stats.begin();
                        stats.end();
                        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
                            count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
                        }
                        requestAnimationFrame(update);
                    };
                    requestAnimationFrame(update);
        </script>
           <?php include("../../includes/scripts.php"); ?> 
      
    
    </body>
</html>