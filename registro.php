<!DOCTYPE html>
<html>
<head>
<title>MEXFON</title>
<?php include 'headers.php';?>
			<title>MEXFON - REGISTRO</title>

            
            
            



</head>




<body>



<?php include 'topbar.php';?>

<?php include 'green-menu.php';?>









<section id="registro"   >

<div class="contain formclass">
    

            
            <h1>REGISTRO</h1>
    

            <div class="container">
               
               <form action="/action_page.php">
                
                <div class="flex">
                    
                    
                    <div class="col">
                        
                         <input type="text" id="user" name="user" placeholder="Nombre de usuario" required>
                         
                          <input type="text" id="email" name="email" placeholder="Correo electrónico*" required>
                          
                           <input type="password" id="pass" name="pass"  placeholder="Contraseña">
                           
                            <input type="password" id="pass-again" name="pass-again"  placeholder="Confirmar contraseña">
                            
                            <div class="flex">
                                
                                <div class="col l">
                                    
                                    <input type="text" id="name" name="name" placeholder="Nombre" required>

                                    
                                </div>
                                
                                <div class="col r">
                                    
                                    <input type="text" id="lastname" name="lastname" placeholder="Apellidos" required>

                                    
                                </div>
                                
                            </div>
                            
                            
                            <input type="date" id="birth" name="birth" placeholder="Fecha de nacimiento   dd/mm/yyyy" required>
                          
                           
                        
                        
                    </div>
                    
                    <div class="col">
                        
                        <p><b>Dirección de Envío</b></p>
                        
                        <input type="text" id="delivery-name" name="delivery-name" placeholder="Nombre" required>
                        
                        <div class="flex">
                                
                                <div class="col l">
                                    
                                    <input type="text" id="noint" name="noint" placeholder="No. Int" required>

                                    
                                </div>
                                
                                <div class="col r">
                                    
                                    <input type="text" id="noext" name="noext" placeholder="No. Ext" required>

                                    
                                </div>
                                
                        </div>
                           
                           <input type="text" id="colonia" name="colonia" placeholder="Colonia" required>
                         
                          <input type="text" id="city" name="city" placeholder="Ciudad*" required>
                           
                           <input type="text" id="state" name="state" placeholder="Estado" required>
                         
       
                            
                        
                        
                        
                    </div>
                    
                </div>
                
               
                
                
       

                    <div class="toleft">
                        <div class="cbox">
                            
                          <input type="checkbox" id="seller" name="seller" value="seller">
                          <label for="seller">Registrarme como vendedor</label><br><br>
                            
                        </div>
                         
                        <div class="cbox">
                            
                          <input type="checkbox" id="terms" name="terms" value="terms">
                          <label for="terms">Acepto términos y condiciones</label><br><br>
                            
                        </div>
                       

                        <input type="submit" value="REGISTRARME" class="btn">

                    </div>

                </form>
                  

                
                
            </div>
                  
            
    </div>


</section>




<?php include 'bot-bar.php';?>

</body>
</html>