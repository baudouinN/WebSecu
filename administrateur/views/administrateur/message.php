<!DOCTYPE html>
<html>
<head>
	      <style>
   div.adminPage{
      min-height:  2000px;
      position: relative;
   }
   div.static {   
    position: relative;
    left: 190px;
    max-width: 400px;
    top: 200px;
    float: left;
   }
   div#myForm{   
    position: relative;
    left: 300px;
    top: 400px;
    float: left;
   }
   div#statice {  
    position: relative;
    margin-right: 400px;
    margin-left: 500px;
    max-width: 400px;
    top: 200px;
    
   }

</style>
</head>

	<header>
		<div classe="admininfo">
		<form id="myForm" action="http://localhost/ProjetWebSecu/administrateur"  method="POST">
              <input type="text" name="recepteur" > <br/>
            <input type="text" name="message"  style="width: 400px; height: 200px;" >

            <button id="sub" type="submit" name="submit">envoyer</button> 
    	</form>
    </div>
		<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
		<script src="js/administrateur.js"></script>
	</header>	
</html>
