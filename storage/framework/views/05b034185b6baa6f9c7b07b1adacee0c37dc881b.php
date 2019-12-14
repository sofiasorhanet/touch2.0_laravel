<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                
                background-image:url('../images/fondo.jpg');
                background-size:contain;
               
  

              
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 10px 20px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                margin:10px 20px 10px 0px;
                background: #19D4B5 ;
                box-shadow: 0px 5px 0px #1EC4A9    ;
                border: solid 3px #19D4B5;



            }

            .m-b-md {
                margin-bottom: 30px;
            }

            img{
                width: 300px;
                margin-top: 50px;
                border-radius: 160px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
               

            <div class="content">

                 <div class="links">
                    <a href="#">Nosotros</a>
                    <a href="<?php echo e(url('/preguntasFrecuentes')); ?>">Preguntas Frecuentes</a>
                    <a href="#">Testimonios</a>
                    
                </div>

                <div class="title m-b-md">
                    <div class="col-6">
                        <img  class="img-fluid" src="/images/logo_circulo.jpg" alt="">
                    </div>
                    <div>
                          <?php if(Route::has('login')): ?>
                <div class="links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
                    </div>
                    
                </div>

               
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\Users\sofia\Desktop\touch2.0_laravel\resources\views/welcome.blade.php ENDPATH**/ ?>