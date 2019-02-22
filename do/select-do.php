<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/carpeta-unica.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
   color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>


<?
session_start();

header('Content-Type: text/html; charset=UTF-8');



  include("seguridad.php");  
  include("cnx.php"); 
 

    $usuario=$_SESSION['user']; 
    $dop_final=$_SESSION['dop'];
	$nombre_final =$_SESSION['nom']; 

  

	      ///consulta informacion del usuario////
	
	  
	    $query="SELECT * FROM usuarios_do WHERE cct='$usuario'; "; 
        $result= mysql_query($query) or die (mysql_error());
		while ($row = @mysql_fetch_array($result)){
			
		     ///Regreso valores del la consulta/// 
        $nombre=$row['nom_esc'];
	  
	    $do_log=$row['do']; 
		 /*
	    $nombre=$row['nombre'];
		$paterno=$row['paterno'];
		$materno=$row['materno'];
		$cargo=$row['cargo'];
		$espacio=" ";	
		$inspector="$nombre$espacio$paterno$espacio$materno";	
		*/
}
	/////////////////Genero variables de session ////////////// 
	
	   $_SESSION['no_esc']=$nombre;
	   $nombre_final=$_SESSION['no_esc'];
	   
	   $_SESSION['do_esc']=$do_log;
	   $do_final=$_SESSION['do_esc'];
	   	   
	   
	/// cierro la consulta

mysql_close($query);


?>

<!-- InstanceBeginEditable name="doctitle" -->
<title>Documento sin título</title>
<link href="fuentes.css" rel="stylesheet" type="text/css" />
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <link href="style2.css" rel="stylesheet">
  <script src="functions.js"></script>



<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link href="../css/desing.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />

<link href="../fuentes.css" rel="stylesheet" type="text/css" />

<link href="../css/tables.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body bgcolor="#EFEFEF" class="fondo">
<div id="container_stc">
  <div class="header" id="header_stc"></div>
  <div class="login" id="login">
    <table width="976" height="30" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="78">&nbsp;</td>
        <td width="78">&nbsp;</td>
        <td width="78">&nbsp;</td>
        <td colspan="2" align="right"><i class="fa fa-user-circle-o" style="font-size:24px;color:red"></i><? echo "<span class='usuarioBold'> USUARIO: $nombre_final </span>" ?><? echo "<span class='usuarioBold'>| $usuario </span>" ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="622">&nbsp; </td>  
      </tr>
    </table>
  </div>
<div id="menu_stc">
 
  <ul>

   <!-----------------MENÚ------------------>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">PLANTILLA</a>
    <div class="dropdown-content">
      <a href="select-do.php">DOCENTE</a>
      <a href="select-do-adm.php">ADMINISTRATIVO</a>
      <a href="select-do-dir.php">DIRECTIVO</a>
      <a href="select-do-his.php">HISTORIAL</a> 
  
  
    <!-----------------MENÚ------------------>
  
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><i class="fa fa-cog fa-spin" style="font-size:18px"></i></a>
    <div class="dropdown-content">
      <a href="../nivel_central/menu.php">INICIO</a>
      <a href="salir.php">SALIR</a>
     
    
    </div>
  </li>
</ul> 



</div>
  <div id="body_stc"><!-- InstanceBeginEditable name="body" -->
  
    <form name="general" method="post" action="result_docente.php">
    <br />
    <br />
  <div class="full">
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ZONA ESCOLAR</h2>
<!--<select name="do"           id="do">-->
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="continentes" class="color_fondo2" id="continentes">
  <option value="0">Seleccione</option>
</select>
</div>

<div>
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CCT</h2>
<p>
  <!--<select name="cct" id="cct">-->
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select name="paises" class="color_fondo2" id="paises">
    <option value="0">Seleccione</option>
  </select>
</p>
<p>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit" name="button" id="button" value="Enviar" />
  
</p>
</div>
  
   <br />
   <br />
   <br />
    <br />
    
    </form>
    
    
  <!-- InstanceEndEditable --></div>
  <div class="footer" id="footer_stc"></div>
</div>

</body>
<!-- InstanceEnd --></html>
