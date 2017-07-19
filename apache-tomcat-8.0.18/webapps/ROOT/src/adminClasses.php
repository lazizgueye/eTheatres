<?php
//on se connecte a notre base
$base= mysql_connect('localhost','root','');
mysql_select_db('bdschool',$base);

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>UCAO - ST MICHEL</title> 
	<meta http-equiv="content-type"content="text/html;charset=utf-8">	
	<meta name="keywords" content="Template, Theme, web, html5, css3" />	
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	<script language="JavaScript">
	    /* SCRIPT EDITE SUR L'EDITEUR JAVASCRIPT http://www.editeurjavascript.com */
		function zizheur(){
	      navvers = navigator.appVersion.substring(0,1);
          if (navvers > 3)
			navok = true;
		  else
			navok = false;
			today = new Date;
			jour = today.getDay();
			numero = today.getDate();
		  if (numero<10)
			numero = "0"+numero;
			mois = today.getMonth();
          if (navok)
			annee = today.getFullYear();
		  else
			annee = today.getYear();
			TabJour = new Array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
			TabMois = new Array("janvier","f&eacute;vrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","d&eacute;cembre");
			messageDate = TabJour[jour] + " " + numero + " " + TabMois[mois] + " " + annee;
			document.write(messageDate);
		}
		
		function testValeur(){
			<?php 	if (@$_POST['btRechClass']== "Rechercher"){
						@$_POST['Recherch'] = "1" ;
					}
			?>;			
		}
		
       </script>

</head>
<body>
&nbsp&nbsp&nbsp&nbsp<font color="black" size="1"><strong><SCRIPT LANGUAGE="JavaScript">zizheur()</SCRIPT> </strong></font>       <!--a href="#" Onclick="JavaScript:window.open('ajout1.php?monchoix=1','ajout_clients','menubar=no,status=no,scrollbars=no,resizable=no,width=750,height=400,left=125,top=100')">Ajout client</a--> &nbsp;&nbsp;&nbsp;
	<!--start: Wrapper -->
	<div id="wrapper">
		
		<!--start: Container -->
		<div class="container">
		
		
			<!--start: Header -->
			<header>
			
				<!--start: Row -->
				<div class="row">
					
					<!--start: Logo class="logo span4"            ZONE DE CONNEXION   -->
					<div> 
						<table border="0" width="100%">
							<tbody>
								<script language="php">															
									if(@$_SESSION['pseudo'] == ''){									
										echo'<tr><td colspan="6" height="9"></td></tr>';							
										echo'<tr>';
											echo'<td width="17"  height="12"></td>';
											echo'<td rowspan="2"><a class="brand" href="./index.php"> <img src="img/ucao/stmichel.jpg" alt="logo" width="295px"/></a></td>';
											echo'<td width="90"></td>';
											echo'<td> Identifiant : </td>';
											echo'<td colspan="2"> Password : </td>';																
										echo'</tr>';
										echo'<form action="./connexion.php" method="post" name="form">';
											echo'<tr>';
												echo'<td height="15"></td>';
												echo'<td></td>';
												echo'<td width="100" valign="top"><input name="pseudo" style="width:70px; height:12px;" type="text" /></td>';
												echo'<td width="110">';
														echo'<input name="pwd" style="width:70px; height:12px;" type="password" />';
														echo'</br><a href="#"><u> Mot de passe Oublié ?</u></a>';
												echo'</td>';
												echo'<td valign="top"><input type="submit" Value="Connexion" name="connex" style="width:80px;" /></td>';
											echo'</tr>';
										echo'</form>';									
									}
									else{
										echo'<tr><td colspan="6" height="13"></td></tr>';								
										echo'<tr>';
											echo'<td width="17"  height="12"></td>';
											echo'<td rowspan="2"><a class="brand" href="./index.php"> <img src="img/ucao/stmichel.jpg" alt="logo" width="295px"/></a></td>';
											echo'<td width="90" colspan="4"></td>';								
										echo'</tr>';
										echo'<tr>';
											echo'<td height="15" colspan="2"></td>';
											//echo'<td></td>';
											echo'<td width="160" valign="top" align="right"> '.$_SESSION['heur'].' &nbsp'.$_SESSION['civilite'].'&nbsp <strong>'.$_SESSION['nomUtilisateur']. '</strong></td>';
											//echo'<td width="80" valign="top"> '.$_SESSION['civilite'].' <strong>'.$_SESSION['nomUtilisateur']. '</strong></td>';
											echo'<td width="15" ></td>';
											echo'<td valign="top"><a href="./Deconnexion.php"> <u> Deconnexion </u></a></td>';	
										echo'</tr>';
										}													
								</script>	
							</tbody>
						</table>
					</div>
					<!--end: Logo                             FIN  ZONE DE CONNEXION   -->
					
				</div>
				<!--end: Row -->
						
			</header>
			<!--end: Header-->
			
			<!--start: Navigation-->	
			<div class="navbar navbar-inverse">
    			<div class="navbar-inner">
        			<div class="container">
          				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            				<span class="icon-bar"></span>
            				<span class="icon-bar"></span>
            				<span class="icon-bar"></span>
          				</a>
          				<div class="nav-collapse collapse">
            				<ul class="nav">
              					<li><a href="index.php">Acceuil</a></li>
								<li><a href="etudiant.php">Etudiants</a></li>
								
								<script language="php">
								
									if((@$_SESSION['acces'] == "admin")||(@$_SESSION['acces'] == "caissier")){									
										echo'<li class="dropdown">';
											echo'<a href="#" class="dropdown-toggle" data-toggle="dropdown">Inscriptions <b class="caret"></b></a>';
											echo'<ul class="dropdown-menu">';
												echo'<li><a href="nouvelleInscription.php">Nouvelle Inscription</a></li>';
												echo'<li><a href="reInscription.php">Ré-Inscription</a></li>';
												echo'<li><a href="modifierCoordonnees.php">Modifier Coordonnées</a></li>';
											echo'</ul>';
										echo'</li>';
										echo'<li><a href="scolarite.php">Scolarités</a></li>';
										echo'<li><a href="classes.php">Classes</a></li>';
										
										if(@$_SESSION['acces'] == "admin"){										
											echo'<li class="dropdown">';
											echo'<a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrations <b class="caret"></b></a>';
											echo'<ul class="dropdown-menu">';
												echo'<li class="active"><a href="adminClasses.php">Gestion Classes</a></li>';
												echo'<li><a href="adminUtilisateurs.php">Gestion Utilisateurs</a></li>';
												echo'<li><a href="adminBD.php">Gestion Base de Donnees</a></li>';
											echo'</ul>';
										echo'</li>';
										}
										
									}
									if((@$_SESSION['acces'] == "admin")||(@$_SESSION['acces'] == "note")){
										echo'<li><a href="rlvNotes.php">Relevés de Notes</a></li>';
									}
								</script>
								
              					<li><a href="contact.php">Contact</a></li>
            				</ul>
          				</div>
        			</div>
      			</div>
    		</div>
			<!--end: Navigation-->
			
		</div>
		<!--end: Container-->
				
		<!--start: Container -->
    	<div class="container">
			
			<hr><!--------------------------------------------- le code a mettre ici  --------------------------------------------------------------->
				
				<table border="0" width="90%" name="tab" align="center">
					<tbody>
						<tr>
							<td align="center"> Promotion: <input value="<?php echo $_SESSION['anneeDbt'];?>" name="txtAnnee" style="width:100px;" type="text" /> / <input value="<?php echo $_SESSION['anneeFin'];?>" name="txtAnneef" style="width:100px;" type="text" /></td>
							<td></td>
						</tr>
						<tr>
							<td colspan="2" height="10"></td> <!-- espace -->
						</tr>
						<tr>
							<td>
								<SCRIPT LANGUAGE="JavaScript">testValeur()</SCRIPT>
								<?php
									if(@$_POST['Recherch'] == "1"){
										echo'<form action="./adminClasses.php" method="post" name="form" align="center">
												Entrer L ID de la Classe : <input name="txtRechClass" style="width:200px;" type="text" placeholder="IdClasse" value="'.@$_POST['txtRechClass'].'"/>  <input type="submit" Value="Rechercher" name="btRechClass" style="width:100px;"/>
											</form>';
										
										if (@$_POST['btRechClass'] == "Rechercher"){
											$idClass = @$_POST['txtRechClass'];										
											$sql = 'SELECT idclasse,nom,inscription,mensualite,ouvertureScolaire,fermetureScolaire 
													FROM `classes` 
													WHERE anneed="'.$_SESSION['anneeDbt'].'" 
													and anneef="'.$_SESSION['anneeFin'].'" 
													and idclasse ="'.$idClass.'"'; 
													
											$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error()); 
											$req2 = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error()); 
											$data = mysql_fetch_array($req); 
											
											if ($idClass == $data['idclasse'] ){										
												echo '<table width="100%" cellspacing="0" celladding="0" border="1"   align="right" >';
														echo '	<tr class="table_acc">
																	<th class="th_acc"> Options </th>
																	<th class="th_acc">IdClasse</th> 
																	<th class="th_acc"> Libelle </th>
																	<th class="th_acc"> Montant Inscription</th>
																	<th class="th_acc"> Montant Scolarite</th>
																	<th class="th_acc"> Date Ouverture</th>
																	<th class="th_acc"> Date Fermeture</th>
																</tr>';
														while( $data2 = mysql_fetch_array($req2) ){ //le nom a la premiere cellule | le prenom a la deuxieme | le lien modifier associé à un ID envoyé au fichier esp_modifié a la troiseme
															 echo '	<tr>';
																		echo'<td><a  href="#" Onclick="JavaScript:window.open('."'administrations.php?var=afficheClass&NumClass=".$data2['idclasse']."'".','."'ajout_clients'".','."'width=850,height=600,left=255,top=10'".')" >Afficher</a> ;
																				<a  href="#" Onclick="JavaScript:window.open('."'administrations.php?var=modifClass&NumClass=".$data2['idclasse']."'".','."'ajout_clients'".','."'width=850,height=600,left=255,top=10'".')" >Modifier </a>
																			</td>';
																		echo'<td>&nbsp;'.$data2['idclasse'].'</td>
																		<td>&nbsp;'.$data2['nom'].'</td>
																		<td>&nbsp;'.$data2['inscription'].' Fcfa </td>
																		<td>&nbsp;'.$data2['mensualite'].' Fcfa </td>
																		<td>&nbsp;'.$data2['ouvertureScolaire'].'</td>
																		<td>&nbsp;'.$data2['fermetureScolaire'].'</td></tr>';
														}
												echo '</table>';
											}
											else {
												if($idClass <>"")
													echo '<font size="2" color="red"><strong>Cet id Classe &nbsp;&nbsp; <u>'.$idClass.'</u> &nbsp;&nbsp; n appartient pas a la BD</strong></font>';
											}
										}
										
										for($i=0;$i<8;$i++) echo "</br>"; 
										echo'<a href="adminClasses.php" align="center"><strong><button> RETOUR </button></strong></a>';
										//echo'</br></br><button style="cursor:pointer; font-class:verdana;" ">Ajouter &nbsp;</button>';
									}
									else{
										$sql = 'SELECT idclasse,nom,inscription,mensualite,ouvertureScolaire,fermetureScolaire 
												FROM `classes` 
												WHERE anneed="'.$_SESSION['anneeDbt'].'" 
												and anneef="'.$_SESSION['anneeFin'].'" 
												order by idclasse ASC';// where inscriptions.idEtudiant="' .$idEtudiant. '"';
										$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error()); 
													
											echo '<table width="100%" cellspacing="0" celladding="0" border="1"   align="right" >'; //width="95"
														echo '	<tr class="table_acc">
																	<th class="th_acc"> Options </th>
																	<th class="th_acc">IdClasse</th> 
																	<th class="th_acc"> Libelle </th>
																	<th class="th_acc"> Montant Inscription</th>
																	<th class="th_acc"> Montant Scolarite</th>
																	<th class="th_acc"> Date Ouverture</th>
																	<th class="th_acc"> Date Fermeture</th>
																</tr>';
														while( $data = mysql_fetch_array($req) ){ //le nom a la premiere cellule | le prenom a la deuxieme | le lien modifier associé à un ID envoyé au fichier esp_modifié a la troiseme
															 echo '	<tr>';
																		echo'<td><a  href="#" Onclick="JavaScript:window.open('."'administrations.php?var=afficheClass&NumClass=".$data['idclasse']."'".','."'ajout_clients'".','."'width=850,height=600,left=255,top=10'".')" >Afficher</a> ;
																				<a  href="#" Onclick="JavaScript:window.open('."'administrations.php?var=modifClass&NumClass=".$data['idclasse']."'".','."'ajout_clients'".','."'width=850,height=600,left=255,top=10'".')" >Modifier </a>
																			</td>';
																		echo'<td>&nbsp;'.$data['idclasse'].'</td>
																		<td>&nbsp;'.$data['nom'].'</td>
																		<td>&nbsp;'.$data['inscription'].' Fcfa </td>
																		<td>&nbsp;'.$data['mensualite'].' Fcfa </td>
																		<td>&nbsp;'.$data['ouvertureScolaire'].'</td>
																		<td>&nbsp;'.$data['fermetureScolaire'].'</td></tr>';
														} 
											echo '</table>';
										}
									mysql_close ();
								?>
							</td>
							<td valign="top" align="right"><button style="cursor:pointer; font-class:verdana;" Onclick="JavaScript:window.open('administrations.php?var=ajoutClass','ajout_clients','width=850,height=600,left=255,top=10')">Ajouter &nbsp;</button>
								<form action="./adminClasses.php" method="post" name="form">								
									<button style="cursor:pointer; font-class:verdana;" type="submit" name="Recherch" value="1">Rechercher &nbsp;</button>						
								</form>
							</td>
						</tr>
						
						<tr>
							<td colspan="2" height="10"></td> <!-- espace -->
						</tr>
					</tbody>
				</table>
				
			<hr><!--------------------------------------------- le code a mettre fin ici  --------------------------------------------------------------->				
					
		</div>
		<!-- end: Container -->			
		<hr>
			
	</div>
	<!--end: Wrapper-->

		<!--start: Container -->
    	<div class="container">		

      		<!-- start: Footer Menu -->
			<div id="footer-menu" class="hidden-tablet hidden-phone">

				<!-- start: Container -->
				<div class="container">
				
					<!-- start: Row -->
					<div class="row">

						<!-- start: Footer Menu Logo -->
						<div class="span1">
							<div id="footer-menu-logo">
								<a href="#"><img src="img/ucao/ucao.jpg" alt="logo" /></br>
											<img src="img/ucao/logo.png" alt="logo" />
								</a>
							</div>
						</div>
						<!-- end: Footer Menu Logo -->

						<!-- start: Footer Menu Links-->
						<div class="span10">
						
							<div id="footer-menu-links">

								<ul id="footer-nav">
							
								
								<table border="0"  height="170" align="center">						
									<tr>
										<td valign="top"><li class="active"><a href="index.php">Acceuil</a></li></td>
										<td valign="top"><li><a href="etudiant.php">Etudiants</a></li></td>												
											<script language="php">			
											
												if((@$_SESSION['acces'] == "admin")||(@$_SESSION['acces'] == "caissier")){									
													echo'<ul id="footer-nav">
														<td valign="top"><li><a href="#"> Inscriptions</a></li></br>
															<li><a href="nouvelleInscription.php">Nouvelle Inscription</a></li></br>
															<li><a href="reInscription.php">Ré-Inscription</a></li></br>
															<li><a href="modifierCoordonnees.php">Modifier Coordonnées</a></li>
														</td>
														<td valign="top"><li><a href="scolarite.php">Scolarités</a></li></td>
														<td valign="top"><li><a href="classes.php">Classes</a></li></td></u>';
														
													if(@$_SESSION['acces'] == "admin"){										
														echo'<td valign="top"><li><a href="#">Administrations</a></li></br>
																<li><a href="adminClasses.php">Gestion Classes</a></li></br>
																<li><a href="adminUtilisateurs.php">Gestion Utilisateurs</a></li></br>
																<li><a href="adminBD.php">Gestion Base de Donnees</a></li>
															</td>';		
													}		
												}
												if((@$_SESSION['acces'] == "admin")||(@$_SESSION['acces'] == "note")){
													echo'<td valign="top"><li><a href="rlvNotes.php">Relevés de Notes</a></li></td>';
												}
											</script>													
										<td valign="top"><li><a href="contact.php">Contact</a></li></td>
									</tr>
								</table>	
				
									
								</ul>

							</div>
						
						</div>
						<!-- end: Footer Menu Links-->

						<!-- start: Footer Menu Back To Top -->
						<div class="span1">
							
							<div id="footer-menu-back-to-top">
								<a href="#"></a>
							</div>
					
						</div>
						<!-- end: Footer Menu Back To Top -->
				
					</div>
					<!-- end: Row -->
				
				</div>
				<!-- end: Container  -->	

			</div>	
			<!-- end: Footer Menu -->

			
	
		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Wrapper  -->


	<!-- start: Copyright -->
	<div id="copyright">
	
		<!-- start: Container -->
		<div class="container">
		
				<p>
					&copy; 2014, creativeLabs. <a href="leop.aventure-informatique.com" alt="braaa!">G.A.L</a> Designed by Ziz@(o€uR... <img src="img/poland.png" alt="Poland" style="margin-top:-4px">
				</p>
	
		</div>
		<!-- end: Container  -->
		
	</div>	
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script def src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>
