
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Corporate Blue Theme - Contact Form</title>
<meta name="keywords" content="corporate blue, theme, free templates, website templates, CSS, HTML" />
<meta name="description" content="Corporate Blue Theme is a free website template provided by tooplate.com" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
  
  
 .submit {
	margin: 5px 0px;
	padding: 3px 14px;
	font-weight: bold;
	border: 1px solid #dfdfdf;
	background: #F3F3F3;
}
  </style>

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
 
function visibilite(thingId) 
{
	var targetElement;targetElement = document.getElementById(thingId) ;
	if (targetElement.style.display == "none")
	{targetElement.style.display = "" ;} 
	else {targetElement.style.display = "none" ;}
}
 
</script>
<!--   Free Website Template by t o o p l a t e . c o m   -->
</head>
<body> 

<div id="tooplate_header_wrapper">
	<div id="tooplate_header">
    
    	<div id="site_title">
            <h1><a rel="nofollow" href="http://www.tooplate.com"><!--<img src="images/tooplate_logo.png" alt="logo" />--><span>System de soumission des papiers</span></a></h1>
        </div> <!-- end of site_title -->
	<div id="header_right">
        
        	<div id="social_box">
                
                <div class="cleaner"></div>
			</div>   
			         
             <div id="search_box">
			 
                <form action="#" method="get">
                    <input type="text" value="Chercher" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                  <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
                </form>
            </div>
            	
        </div>
	</div>
</div>

<div id="tooplate_middle_wrapper">
	<div id="tooplate_middle">
    
  <img src="image/conference.jpg" alt="Image 01" />
     <div id="middle_content">
       <form method="post" action="confirm_conect.php" id="form">
 <table border="0" align="center" width="50%">
  <tr>
    <td height="53" align="center" ><input type="text" placeholder="Login" class="input" name="login" required/></td>
  
  
    <td height="53" align="center" ><input type="password" placeholder="mot de passe" class="input" name="pwd" required /></td>
  </tr>
 <tr><td align="center">
  <select name="type">
  <option value="" selected="selected">choisir type</option>
  <option value="responsable">Responsable</option>
   <option value="examinateur">Examinateur</option>
    <option value="auteur">auteur</option>
<option value="admin">Administrateur</option>
  
  </select>
 </td>
 </tr>
  <tr>
    <td height="56" align="center" ><input id="Button1" type="submit" value="Connexion" width="101px" height="30px" class="submit"  /> </td>
  </tr><tr><td width="465" height="22" align="center">
	<a href="pass_oublie.php"  class="lien" >Mot de passe oubli�?</a> </td><td>  <a href="inscription.php" class="lien">Creer un compte</a> </td>
  <td width="101"></td>
  </tr>
</table>

</form>

           <!-- <div class="wwu_btn"><a href="#"></a></div>-->
        </div>
		</div>
</div>
 <div id="tooplate_menu">
                
    <ul>
       <li><a href="index.html" >Acceuil</a></li>
        <li><a href="conference.php">Conf&eacute;rence</a></li>
   
      <li><a href="inscription.php">Inscription</a></li>
        <li><a href="contact.html">Contact</a></li><li><a href="soumettre_papier.php">papier </a></li>

    </ul>    	

	<div class="cleaner"></div>
</div> <!-- end of tooplate_menu -->
   
<div id="tooplate_content">
<?php
include 'connexion.php';

$num=0;
$login=$_POST['login'];
$password=$_POST['pwd'];
$type=$_POST['type'];
if($type=='examinateur')
{

$req="select * from examinateur where login='$login' and password='$password' and situation=1";
$res=mysql_query($req) or die(mysql_error());
$num=mysql_fetch_row($res);
$log=mysql_fetch_row($res);

if($num>0)
echo "<center>inscription au conference fait avec succée</center>";
else 
echo "verfier vos information login au mot de passe incorrecte" ;

}

else if($type=="auteur")
{
$login=$_POST['login'];
$password=$_POST['pwd'];

//session_start(); //on d�marre une session
	//$_SESSION['login'] = $login;
//session_register();
$req="select * from auteur where login='$login' and password='$password' and situation=1";
$res=mysql_query($req) ;
$ligne=mysql_fetch_row($res);
 if (@mysql_num_rows($res)>0)
 { 
echo "<center>inscription au conference fait avec succée</center>";
}
else
echo "verfier vos information login ou mot de passe incorrect";

}
else if($type=="")
{
//session_start(); //on d�marre une session
	//$_SESSION['login'] = $login;
//session_register();
$req="select * from utilisateur where login='$login' and password='$password' ";
$res=mysql_query($req) ;
$ligne=mysql_fetch_row($res);
 if (@mysql_num_rows($res)>0)
 {

echo "<center>inscription au conference fait avec succée</center>";
}

else
echo "verfier vos information login ou mot de passe incorrect";


}

else if($type=="responsable")
{

$login=$_POST['login'];
$password=$_POST['pwd'];
$req="select * from responsable where login='$login' and password='$password' and situation=1";
$res=mysql_query($req) ;
$ligne=mysql_fetch_row($res);
 if (@mysql_num_rows($res)>0)

echo "<center>inscription au conference fait avec succée</center>";
//session_start(); //on d�marre une session
	//$_SESSION['login'] = $login;
//session_register();
else
echo "verifier vos information mot de passe ou login incorrecte";

}
else if($type=="admin")
{if(!empty($_POST['login']) && !empty($_POST['pwd'])){
$num=0;
$login=$_POST['login'];
$password=$_POST['pwd'];
$req="select * from admin where login='$login' and password='$password' ";
$res=mysql_query($req) or die(mysql_error());
$num=mysql_num_rows($res);
if($num>0)
echo "<center>inscription au conference fait avec succée</center>";
else
echo "<center>verifier votre param�tre de connexion</center>";



}

}


?>
</div>
<div id="tooplate_footer_wrapper">
     <div id="tooplate_footer">
     
        Copyright � 2048 <a href="#">Company Name</a>
    
    </div> <!-- end of tooplate_footer -->
</div> 
</body>
</html>
