<!DOCTYPE html>
<html>
<head>
<?php include 'headers.php';?>
			<title>MEXFON - Comprar Plan</title>

            
            
            



</head>




<body>

<?php include 'topbar.php';?>

<?php include 'green-menu.php';?>








<section id="enviop1"  class="formclass" >

<div class="contain ">
    
 
    <div class="flex ">
        
        <div class="col pack" id="p1" >
            
            <h2>PAQUETE 1</h2>
            
            <p class="days">
                3 DÍAS
                <br>
                600mb
            </p>
            
            <img src="img/50pesos.png" alt="$50">
            <p>Mensajes, llamadas y <br> redes sociales ilimitadas*</p>
            
            
            <div class="btndiv">
                
                 <a href="" class="btn">COMPRAR</a>
                
            </div>
           
            
        </div>
        

            
            
        <div class="col mastercol" id="contacto-form" >
            
              <h2>DIRECCIÓN DE ENVÍO</h2>

               <div class="container">
                  <form action="/action_page.php">

                    <input type="text" id="fname" name="firstname" placeholder="Nombre" required>
                    
                    <div class="flex">
                                
                                <div class="col l">
                                    
                                    <input type="text" id="noint" name="noint" placeholder="No. Int" required>

                                    
                                </div>
                                
                                <div class="col r">
                                    
                                    <input type="text" id="noext" name="noext" placeholder="No. Ext" required>

                                    
                                </div>
                                
                        </div>


                    <input type="text" id="colonia" name="colonia" placeholder="Colonia">


                    <input type="text" id="Ciudad" name="Ciudad" placeholder="Ciudad">
                    
                    <input type="text" id="Estado" name="Estado" placeholder="Estado">


       

                    <div class="center">

                        <input type="submit" value="ENVIAR" class="btn">

                    </div>


                  </form>
                </div>

            
        </div>
            
  
        
        
     
        
 
        
    </div>
    
           
    
</div>

</section>



<?php include 'bot-bar.php';?>

</body>
</html>