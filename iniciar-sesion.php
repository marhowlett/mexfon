<!DOCTYPE html>
<html>
<head>
<title>MEXFON</title>
<?php include 'headers.php';?>
<title>MEXFON - INICIA SESIÓN</title>

            
            
            



</head>




<body>


<?php include 'topbar.php';?>

<?php include 'green-menu.php';?>









<section id="iniciar"   >

<div class="contain formclass">
    

            
            <h1>INICIAR SESIÓN</h1>


            <div class="container">
                
                
                    <form action="/action_page.php">

                    <input type="text" id="user" name="user" placeholder="Usuario / Correo electrónico / Número de Teléfono" required>
                    
                    
                    <input type="password" id="pass" name="pass"  placeholder="Contraseña">


       

                    <div class="toleft">
                        
                        <a href="olvide.php">Olvidé mi contraseña </a>

                        <input type="submit" value="INGRESAR" class="btn">

                    </div>


                  </form>

                
                
            </div>
                  
            
    </div>


</section>



<?php include 'bot-bar.php';?>

</body>
</html>