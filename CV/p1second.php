<?php 
  $nom = "junior Essono";
  $architecture = "Architecte logiciel / DevOps";
 
if(isset($_POST['mailform'])){

    $originaire = "originaire de l'ouest Cameroun";
    $marié = "marié deux enfants - santé RAS";
    $datenaiss = 'née le 20 octobre 1986 a douala';
    $resident = 'residant a Ndogbong';
    $ville = 'Douala-cameroun';
    $map = 'Map: 4.053276, 9.765047';
    $num = '(237)  659003009';
    $mobile = 'mobile,telegramme,whatsApp';
    $email = 'junioressono@gmail.com';
    $goog = 'Google+.Twitter,Linkedin,Github';
$header="MIME-Version: 1.0\r\n";
$header.='From:"yakamsynthia"<natimarie2@gmail.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
   
		<div align="center">
        <p > ...........................</p> </br>
        <p > junior Essono </p> </br>
        <p > ...........................</p>
        <p> Architecte logiciel / DevOps </p>
        <p > originaire de l\'ouest cameroun </p> </br>
        <p >  marié deux enfants - santé RAS </p> </br>
        <p > née le 20 octobre 1986 a douala </p></br>
        <p > residant a Ndogbong </p></br>
	    <p >Douala-cameroun </p></br>
        <p >Map: 4.053276, 9.765047 </p></br>
        <p >(237)  659003009 </p></br>
        <p >(237) mobile,telegramme,whatsApp </p></br>
        <p >(237)  659003009 </p></br>
        <p >junioressono@gmail.com </p></br>
		</div>
	</body>
</html>
';

mail("natimarie2@gmail.com", "Synthia's CV", $message, $header);
}
?>

<form method="POST" action="">

<div class="middle_part">
                
                    <div class="btn_add" name="mailform" type="submit" onClick="alert('cv envoyé');">
                        <img src="images/Plus +_24px.png" alt="">
                    </div>

                    
    
                    <div class="block_anniv">
                        <img src="images/birthday_cake_24px.png" alt="">
                        <span>
                           Née le 20 Octobre 1986
                           <br> Originaire du Sud Cameroun
                            <br>Marié, 02 enfants - Santé RAS
                        </span>
                       
                    </div>
                    
          
                      <div class="separation_bar"></div>
    
    
      
                    <div class="block_location">
                        <img src="images/Location Pin_50px.png" alt="">
                        <!-- <span class="icon" style="align-self: center;"><i class="fa fa-map-marker fa-2x" aria-hidden="true" ></i></span> -->
                        <span>
                          Résidant à Ndogbong
                          <br>Douala-Cameroun
                          <br>Map: 4.053276, 9.765047
                      </span>
        
                    </div>
                    
        
                    <div class="separation_bar"></div>
        
        
                    <div class="block_phone">
                        <img src="images/phone_50px.png" alt="">
                        <span>
                            (237) 674 053 983
                            <br>Mobile, Telegram, Whatsapp
                        </span>
                       
                    </div>
    
                    
                    <div class="separation_bar"></div>
        
        
                    <div class="block_email">
                        <img src="images/Mail_50px.png" alt="">
                        <span>
                            junioressono@gmail.com
                           <br>Google+, Twitter, Linkedin, Github
                        </span>
                        
                    </div>
    
    
                    <div class="block_info">
                        <span class="maj"><b>+45 PROJETS</b></span>
                        <div class="rose"></div> 
                        <span>+31 CONTRATS</span>
                        <span>12 ANS D'EXP</span>
                        
                    </div>
                    <!-- <div class="rose"></div> -->
    
 </div>

 </form>