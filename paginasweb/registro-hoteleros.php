<?php
 session_start(); 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Registro Hotelero</title>
 	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="../img/logo-trivago.png">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- jquery-->
  <script type="text/javascript" src="../libs/jquery.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <!--bootstrap date picker -->
  <link rel="stylesheet" type="text/css" href="../libs/bootstrap-datepicker/css/bootstrap-datepicker.css">
  <script type="text/javascript" src="../libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <!-- nuevos iconos -->
  <link rel="stylesheet" type="text/css" media="all" href="../css/whhg.css" />
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
  	<link rel="stylesheet" href="../css/estandares.css">
    <style type="text/css">
      @media screen and (min-width: 1500px){
           #form-registro-hotelero{
              width: 40%;
              margin-left: 20px;
            }

      }  

      @media screen and (max-width: 1500px){

           #info-registro-hotelero{
              width: 100%;
            }

             #form-registro-hotelero{
              width: 100%;
              margin: 40px;
            }
      }    
    </style>
</head>
<body>

<div style="max-width: 2000px; box-sizing: border-box;">
   <nav class="navbar  navbar-fixed-top" style="background-color: #ffffff; border-color: #9a9d9f; width: 100%" >
	   <div class="container " style="padding: 12px; height: 60px; width: 100%;">  
	     <div class=row style="width: 100%">
          <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12" style="width: 100%;">
     	        <a href="#"> <img src="../img/trivagoHM.png" style="margin-top: 5px"> </a>
          </div>
       </div>
     </div>
     <div style="background-color: #9a9d9f; height: 1px; border-color:#9a9d9f; "></div>
  </nav>


  <div class="container-fluid" style="padding-bottom: 25px; padding-top: 75px; width: 100%;">
    <div class="row" style="width: 100%;">
      
      <div id="info-registro-hotelero" class="col-md-6" style="text-align: justify;  ">
  	    <div class="card card-inverse" style="background-color: #5e666a; border-color: #5e666a; padding: 10px;background-color: rgba(0,0,0,0.65); margin-top: 25px; margin-left: 25px;">
         <div class="card-block">
            <h3 class="card-title" style="color:#ffffff; font-weight: 600; padding: 20px">Encuentre su hotel y cree una cuenta gratis</h3>
            <p class="card-text" style="color:#ffffff; font-size-adjust: 15px; padding: 20px;" > Está a un paso de empezar a gestionar sus hoteles en trivago. Rellene el formulario para ayudarnos a verificar su identidad. Sus datos personales están a salvo y no los compartiremos.</p>
         </div>
       </div>
      </div>
    <!--</div>
  </div>-->
      <div id="form-registro-hotelero" class="col-md-6" style="border-style: ridge;padding-bottom: 15px;  margin-top: 22px; margin-left: 10px; display: inline-block;"> 
  	   	<div style="padding: 20px;">
  		  	<table  >	
  			   <tr>    
  			   		<td colspan="2"  style="padding-top: 20px;">
  			   			<label for="txt_nomehotel">Nombre Del Hotel</label>
                <input type="text" class="form-control" name="nombre_hotel" id="txt_nomehotel" placeholder="Busque su Hotel" style="width: 95%; height: 50px;" >
 	 			   		  <p class="hint-formfield p-0">
  			   		</p>
 				    </td>
  			   </tr>
  			   <tr>
  			   	  <td colspan="2"  style="padding-top: 20px;">
  			   			<label for="slc_tra">Tratamiento</label>
  			   			<select name="selcttra" class="form-control" id="slc_tra" class="form-control" style="height: 50px; width: 95%;"> 
  			   			  	<option value="1">Señor</option>
                    <option value="2">Señora</option>
                </select>
  			   		</td>
  			   </tr>  
  			   <tr>
  			   		 <td colspan="2"  style="padding-top: 20px;">
  			   		    <label for="cargo_id">Cargo </label>
  			   				<select  name="cargo" id="cargo_id" class="form-control" style="height: 50px; width: 95%;">
  			   				<option value="1">
                                    Propietario
                            </option><option value="2">
                                    Director general
                            </option><option value="3">
                                    Subdirector
                            </option><option value="4">
                                    Director de marca
                            </option><option value="5">
                                    Director de desarrollo empresarial
                            </option><option value="6">
                                    Director de e-commerce
                            </option><option value="7">
                                    Director financiero
                            </option><option value="8">
                                    Empleado de recepción
                            </option><option value="9">
                                    Director de marketing
                            </option><option value="10">
                                    Recepcionista
                            </option><option value="11">
                                    Empleado de reservas
                            </option><option value="12">
                                    Director de reservas
                            </option><option value="13">
                                    Director de ingresos
                            </option><option value="14">
                                    Director de habitaciones
                            </option><option value="15">
                                    Director de ventas
                            </option><option value="16">
                                    Director de ventas y marketing
                            </option><option value="17">
                                    Director de recepción
                            </option><option value="18" selected="selected">
                                    Otro cargo
                            </option></select>
  			   		 </td>
  			   </tr> 
  			   <tr style="padding-top: 30px;">
  			   		<td>
                <div class="form-group"  style="padding-top: 20px;">
                    <label  for="nombre-usr"> Nombre</label>
                    <input type="text" class="form-control" id="nombre-usr" style="width: 90%; height: 50px;" >
                </div>
              </td>
              <td  style="padding-top: 20px;">
  			   	    <div class="form-group" style="padding-right: 80px">
  						    <label class="Apellido" for="apellido-usr">Apellido</label>
  					     	<input type="text" class="form-control" id="apellido-usr" style="width: 153%; height: 50px"> 
						    </div>
              </td>
  			   </tr>	
  			   <tr>
  			   		<td  style="padding-top: 5px;">
                 <strong> Telefono<br></strong>  
  			   			 <select name="slcttel" id="slct_tel" style="height: 50px; width: 90%;">
  			   			 <option value="AF">
                                    Afganistán (+93)
                            </option><option value="AL">
                                    Albania (+355)
                            </option><option value="DE">
                                    Alemania (+49)
                            </option><option value="AD">
                                    Andorra (+376)
                            </option><option value="AO">
                                    Angola (+244)
                            </option><option value="AG">
                                    Antigua y Barbuda (+1)
                            </option><option value="SA">
                                    Arabia Saudí (+966)
                            </option><option value="DZ">
                                    Argelia (+213)
                            </option><option value="AR">
                                    Argentina (+54)
                            </option><option value="AM">
                                    Armenia (+374)
                            </option><option value="AW">
                                    Aruba (+297)
                            </option><option value="AU">
                                    Australia (+61)
                            </option><option value="AT">
                                    Austria (+43)
                            </option><option value="AZ">
                                    Azerbaiyán (+994)
                            </option><option value="BQ">
                                    BES Islands (+599)
                            </option><option value="BS">
                                    Bahamas (+1)
                            </option><option value="BH">
                                    Bahrain (+973)
                            </option><option value="BD">
                                    Bangladesh (+880)
                            </option><option value="BB">
                                    Barbados (+1)
                            </option><option value="BZ">
                                    Belize (+501)
                            </option><option value="BJ">
                                    Benín (+229)
                            </option><option value="BM">
                                    Bermuda (+1)
                            </option><option value="BY">
                                    Bielorrusia (+375)
                            </option><option value="BO">
                                    Bolivia (+591)
                            </option><option value="BA">
                                    Bosnia-Herzegovina (+387)
                            </option><option value="BW">
                                    Botsuana (+267)
                            </option><option value="BR">
                                    Brasil (+55)
                            </option><option value="BN">
                                    Brunei (+673)
                            </option><option value="BG">
                                    Bulgaria (+359)
                            </option><option value="BF">
                                    Burkina Faso (+226)
                            </option><option value="BI">
                                    Burundi (+257)
                            </option><option value="BT">
                                    Bután (+975)
                            </option><option value="BE">
                                    Bélgica (+32)
                            </option><option value="CV">
                                    Cabo Verde (+238)
                            </option><option value="KH">
                                    Camboya (+855)
                            </option><option value="CM">
                                    Camerún (+237)
                            </option><option value="CA">
                                    Canadá (+1)
                            </option><option value="TD">
                                    Chad (+235)
                            </option><option value="CL">
                                    Chile (+56)
                            </option><option value="CN">
                                    China (+86)
                            </option><option value="CY">
                                    Chipre (+357)
                            </option><option value="CO">
                                    Colombia (+57)
                            </option><option value="KM">
                                    Comoras (+269)
                            </option><option value="KP">
                                    Corea del Norte (+850)
                            </option><option value="KR">
                                    Corea del Sur (+82)
                            </option><option value="CR">
                                    Costa Rica (+506)
                            </option><option value="CI">
                                    Costa de Marfil (+225)
                            </option><option value="XR">
                                    Crimea (+)
                            </option><option value="HR">
                                    Croacia (+385)
                            </option><option value="CU">
                                    Cuba (+53)
                            </option><option value="CW">
                                    Curazao (+599)
                            </option><option value="DK">
                                    Dinamarca (+45)
                            </option><option value="DM">
                                    Dominica (+1)
                            </option><option value="US">
                                    EE. UU. (+1)
                            </option><option value="EC">
                                    Ecuador (+593)
                            </option><option value="EG">
                                    Egipto (+20)
                            </option><option value="SV">
                                    El Salvador (+503)
                            </option><option value="AE">
                                    Emiratos Árabes Unidos (+971)
                            </option><option value="ER">
                                    Eritrea (+291)
                            </option><option value="SK">
                                    Eslovaquia (+421)
                            </option><option value="SI">
                                    Eslovenia (+386)
                            </option><option value="ES" >
                                    España (+34)
                            </option><option value="EE">
                                    Estonia (+372)
                            </option><option value="ET">
                                    Etiopía (+251)
                            </option><option value="PH">
                                    Filipinas (+63)
                            </option><option value="FI">
                                    Finlandia (+358)
                            </option><option value="FJ">
                                    Fiyi (+679)
                            </option><option value="FR">
                                    Francia (+33)
                            </option><option value="GA">
                                    Gabón (+241)
                            </option><option value="GM">
                                    Gambia (+220)
                            </option><option value="GE">
                                    Georgia (+995)
                            </option><option value="GH">
                                    Ghana (+233)
                            </option><option value="GI">
                                    Gibraltar (+350)
                            </option><option value="GR">
                                    Grecia (+30)
                            </option><option value="GD">
                                    Grenada (+1)
                            </option><option value="GL">
                                    Groenlandia (+299)
                            </option><option value="GU">
                                    Guam (+1)
                            </option><option value="GT">
                                    Guatemala (+502)
                            </option><option value="GF">
                                    Guayana Francesa (+594)
                            </option><option value="GG">
                                    Guernsey (+44)
                            </option><option value="GN">
                                    Guinea (+224)
                            </option><option value="GQ">
                                    Guinea Ecuatorial (+240)
                            </option><option value="GW">
                                    Guinea-Bissau (+245)
                            </option><option value="GY">
                                    Guyana (+592)
                            </option><option value="HT">
                                    Haiti (+509)
                            </option><option value="NL">
                                    Holanda (+31)
                            </option><option value="HN" selected="selected">
                                    Honduras (+504)
                            </option><option value="HK">
                                    Hong Kong (+852)
                            </option><option value="HU">
                                    Hungría (+36)
                            </option><option value="IN">
                                    India (+91)
                            </option><option value="ID">
                                    Indonesia (+62)
                            </option><option value="IQ">
                                    Irak (+964)
                            </option><option value="IE">
                                    Irlanda (+353)
                            </option><option value="IR">
                                    Irán (+98)
                            </option><option value="IS">
                                    Islandia (+354)
                            </option><option value="KY">
                                    Islas Caimán (+1)
                            </option><option value="CK">
                                    Islas Cook (+682)
                            </option><option value="FO">
                                    Islas Feroe (+298)
                            </option><option value="MV">
                                    Islas Maldivas (+960)
                            </option><option value="FK">
                                    Islas Malvinas (+500)
                            </option><option value="MH">
                                    Islas Marshall (+692)
                            </option><option value="SB">
                                    Islas Salomón (+677)
                            </option><option value="TC">
                                    Islas Turcas y Caicos (+1)
                            </option><option value="VI">
                                    Islas Vírgenes  de los EE.UU. (+1)
                            </option><option value="VG">
                                    Islas Vírgenes (+1)
                            </option><option value="IL">
                                    Israel (+972)
                            </option><option value="IT">
                                    Italia (+39)
                            </option><option value="JM">
                                    Jamaica (+1)
                            </option><option value="JP">
                                    Japón (+81)
                            </option><option value="JE">
                                    Jersey (+44)
                            </option><option value="JO">
                                    Jordania (+962)
                            </option><option value="KZ">
                                    Kazajstán (+7)
                            </option><option value="KE">
                                    Kenia (+254)
                            </option><option value="KG">
                                    Kirguistán (+996)
                            </option><option value="KI">
                                    Kiribati (+686)
                            </option><option value="XK">
                                    Kosovo (+383)
                            </option><option value="KW">
                                    Kuwait (+965)
                            </option><option value="LA">
                                    Laos (+856)
                            </option><option value="LS">
                                    Lesoto (+266)
                            </option><option value="LV">
                                    Letonia (+371)
                            </option><option value="LR">
                                    Liberia (+231)
                            </option><option value="LY">
                                    Libia (+218)
                            </option><option value="LI">
                                    Liechtenstein (+423)
                            </option><option value="LT">
                                    Lituania (+370)
                            </option><option value="LU">
                                    Luxemburgo (+352)
                            </option><option value="LB">
                                    Líbano (+961)
                            </option><option value="MO">
                                    Macau (+853)
                            </option><option value="MG">
                                    Madagascar (+261)
                            </option><option value="MY">
                                    Malasia (+60)
                            </option><option value="MW">
                                    Malawi (+265)
                            </option><option value="ML">
                                    Mali (+223)
                            </option><option value="MT">
                                    Malta (+356)
                            </option><option value="MP">
                                    Marianas Septentrionales (+1)
                            </option><option value="MA">
                                    Marruecos (+212)
                            </option><option value="MQ">
                                    Martinique (+596)
                            </option><option value="MR">
                                    Mauritania (+222)
                            </option><option value="YT">
                                    Mayotte (+262)
                            </option><option value="FM">
                                    Micronesia (+691)
                            </option><option value="MD">
                                    Moldavia (+373)
                            </option><option value="MN">
                                    Mongolia (+976)
                            </option><option value="ME">
                                    Montenegro (+382)
                            </option><option value="MS">
                                    Montserrat (UK) (+1)
                            </option><option value="MZ">
                                    Mozambique (+258)
                            </option><option value="MM">
                                    Myanmar (+95)
                            </option><option value="MX">
                                    México (+52)
                            </option><option value="MC">
                                    Mónaco (+377)
                            </option><option value="NA">
                                    Namibia (+264)
                            </option><option value="NR">
                                    Nauru (+674)
                            </option><option value="NP">
                                    Nepal (+977)
                            </option><option value="NI">
                                    Nicaragua (+505)
                            </option><option value="NG">
                                    Nigeria (+234)
                            </option><option value="NU">
                                    Niue (+683)
                            </option><option value="NF">
                                    Norfolk Island (+672)
                            </option><option value="NO">
                                    Noruega (+47)
                            </option><option value="NC">
                                    Nueva Caledonia (+687)
                            </option><option value="NZ">
                                    Nueva Zelanda (+64)
                            </option><option value="NE">
                                    Níger (+227)
                            </option><option value="OM">
                                    Omán (+968)
                            </option><option value="PW">
                                    Palau (+680)
                            </option><option value="PS">
                                    Palestinian Territories (+970)
                            </option><option value="PA">
                                    Panamá (+507)
                            </option><option value="PG">
                                    Papúa Nueva Guinea (+675)
                            </option><option value="PK">
                                    Paquistán (+92)
                            </option><option value="PY">
                                    Paraguay (+595)
                            </option><option value="PE">
                                    Perú (+51)
                            </option><option value="PF">
                                    Polinesia Francesa (+689)
                            </option><option value="PL">
                                    Polonia (+48)
                            </option><option value="PT">
                                    Portugal (+351)
                            </option><option value="PR">
                                    Puerto Rico (+1)
                            </option><option value="QA">
                                    Qatar (+974)
                            </option><option value="GB">
                                    Reino Unido (+44)
                            </option><option value="CF">
                                    República Centroafricana (+236)
                            </option><option value="CZ">
                                    República Checa (+420)
                            </option><option value="CD">
                                    República Democrática del Congo (+243)
                            </option><option value="DO">
                                    República Dominicana (+1)
                            </option><option value="MK">
                                    República Macedonia (+389)
                            </option><option value="MU">
                                    República de Mauricio (+230)
                            </option><option value="CG">
                                    República del Congo (+242)
                            </option><option value="RE">
                                    Reunión (+262)
                            </option><option value="RO">
                                    Rumanía (+40)
                            </option><option value="RU">
                                    Rusia (+7)
                            </option><option value="RW">
                                    Rwanda (+250)
                            </option><option value="EH">
                                    Sahara Occidental (+212)
                            </option><option value="WS">
                                    Samoa (+685)
                            </option><option value="AS">
                                    Samoa Americana (+1)
                            </option><option value="KN">
                                    San Cristóbal y Nieves (+1)
                            </option><option value="SM">
                                    San Marino (País) (+378)
                            </option><option value="VC">
                                    San Vicente y las Granadinas (+1)
                            </option><option value="SH">
                                    Santa Elena, Ascensión y Tristán de Acuña (+290)
                            </option><option value="LC">
                                    Santa Lucía (+1)
                            </option><option value="ST">
                                    Santo Tomé y Príncipe (+239)
                            </option><option value="SN">
                                    Senegal (+221)
                            </option><option value="RS">
                                    Serbia (+381)
                            </option><option value="SC">
                                    Seychelles (+248)
                            </option><option value="SL">
                                    Sierra Leona (+232)
                            </option><option value="SG">
                                    Singapur (+65)
                            </option><option value="SY">
                                    Siria (+963)
                            </option><option value="SO">
                                    Somalia (+252)
                            </option><option value="LK">
                                    Sri Lanka (+94)
                            </option><option value="ZA">
                                    Sudáfrica (+27)
                            </option><option value="SD">
                                    Sudán (+249)
                            </option><option value="SE">
                                    Suecia (+46)
                            </option><option value="CH">
                                    Suiza (+41)
                            </option><option value="SR">
                                    Suriname (+597)
                            </option><option value="SZ">
                                    Swazilandia (+268)
                            </option><option value="TH">
                                    Tailandia (+66)
                            </option><option value="TW">
                                    Taiwan (+886)
                            </option><option value="TZ">
                                    Tanzania (+255)
                            </option><option value="TJ">
                                    Tayikistán (+992)
                            </option><option value="TL">
                                    Timor Oriental (+670)
                            </option><option value="TG">
                                    Togo (+228)
                            </option><option value="TK">
                                    Tokelau (+690)
                            </option><option value="TO">
                                    Tonga (+676)
                            </option><option value="TT">
                                    Trinidad y Tobago (+1)
                            </option><option value="TM">
                                    Turkmenistán (+993)
                            </option><option value="TR">
                                    Turquía (+90)
                            </option><option value="TV">
                                    Tuvalu (+688)
                            </option><option value="TN">
                                    Túnez (+216)
                            </option><option value="UA">
                                    Ucrania (+380)
                            </option><option value="UG">
                                    Uganda (+256)
                            </option><option value="UY">
                                    Uruguay (+598)
                            </option><option value="UZ">
                                    Uzbekistán (+998)
                            </option><option value="VU">
                                    Vanuatu (+678)
                            </option><option value="VE">
                                    Venezuela (+58)
                            </option><option value="VN">
                                    Vietnam (+84)
                            </option><option value="YE">
                                    Yemen (+967)
                            </option><option value="DJ">
                                    Yibuti (+253)
                            </option><option value="ZM">
                                    Zambia (+260)
                            </option><option value="ZW">
                                    Zimbaue (+263)
                            </option></select>
  			   		 </td>
  			   		 <td style="padding-top: 20px; margin: 25px; padding-left: " >
  			   			 <input type="text" class="form-control" name="txt_tel" id="txt_tel" placeholder="32364307 " style="width: 90%; height: 50px;">
  			   		 </td>
  			   	</tr>
  			   	<tr>
  			   		  <td colspan="2"  style="padding-top: 20px;">
  			   		    <label for="correo">E-mail </label>
  			   		  	<input type="E-mail" class="form-control" name="emailof" id="correo" placeholder="E-mail@trivago.com" style="height: 50px; width: 95%;">
  			   		  </td>
  			   	</tr>
  			   	<tr>
  			   		  <td colspan="2"  style="padding-top: 20px;">
  			   		    <label for="pwd">Contraseña </label>
  			   		    <input type="password" class="form-control" name="password_txt" id="pwd" placeholder="*******" style="height: 50px; width: 95%;">
  			   		   
  			   		  </td>
  			   	</tr>
  			    <tr>
  			       	<td colspan="2"  style="padding-top: 20px;">
     		             <input type="checkbox" name="chk_frances" id="chk_frances"> Confirmo que soy un empleado autorizado y acepto los terminos y condiciones de Trivago Hotel Manager 
                </td>
            </tr>
            <tr>
               <th>
                  <button id="crear-cuenta" class="btn btn-primary" style="line-height: 2.0; font-weight: 600; margin-top: 15px"  >Crear Cuenta Gratuita</button>             	
               </th>	
            </tr>
      </table>
      <div style="background-color: #ebeced; padding-top: 10px; padding-bottom: 10px; text-align: center; margin-top: 10px">
       Ya tienes cuenta?<a href="#"> Inicie Sesion</a>
     </div>
     </div>
     
   </div>
   </div>
   </div>

  

 		<div style="background-color: #293339;"  >
 		  <div class="row">
		 	       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-top: 15px; padding-left: 200px;" >
   	       	     	       <table>
   	       	     	          <th style="color: #ffffff;"  >trivago GmbH <small style="color: #ffffff; width: px" >Bennigsen-Platz 1, 40474 Düsseldorf, Deutschland</small><th>sassdad
   	       	     	        </table>




   	       	     	 
   	    		    </div>
   	    		    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"  style="padding-right: 100px; padding-top: 45px; padding-left: 200px " >
   	    		         <select name="slctpais" id="slctpaisid" class="form-control"  
   	    		         style="background-color: #293339;; color: #ffffff; height: 45px;"> 
   	    		         	<option style="padding: 10px" value="1">
   	    		         	España	
   	    		         	</option>
   	    		         	<option value="2">
   	    		         		Japon
   	    		         	</option>
   	    		         	<option value="3">
   	    		         		USA
   	    		         	</option>
   	    		         	<option value="4">
   	    		         		Honduras
   	    		         	</option>
   	    		         	<option value="5">
   	    		         		Mexico
   	    		         	</option>


   	    		         </select>
   	    		    	
   	    		    </div>
                 </div>
                 <div style="padding-left: 175px">
                 	 <a href="www.faceook.com"><img src="../img/facebook.png" alt="..." class="img-circle" style="width: 32px; height: 32px; margin: 10px;">
                 	 </a> 

                 	 <a href="www.faceook.com"><img src="../img/facebook.png" alt="..." class="img-circle" style="width: 32px; height: 32px; margin-right: 10px" >
                 	 </a>

                 	 <a href="www.faceook.com"><img src="../img/facebook.png" alt="..." class="img-circle" style="width: 32px; height: 32px">
                 	 </a>

                 </div>
              

             <div class="container-fluid" style="background-color: #293339; padding: 30px;">
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="color: #ffffff; text-align: left; padding-left: 145px">
               
			   Nosotros<br>
			   Empleo<br>
			   Puestos vacantes<br>
			   Empleo<br>
			   Prensa<br>
			   Ayuda<br>
			   Expedia<br>
     	
     		  </div>
     		  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="color: #ffffff;  padding: 50px; padding-top: 0px;">
     		    Aplicaciones móviles: estés donde estés<br>
				Hotel Manager: la plataforma para hoteleros<br>
				Blog de Hotel Manager: ideas para hoteleros<br>
				Comunidad: para amantes de los hoteles<br>
				Room5: inspiración para tus viajes<br>
     	
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="color: #ffffff; ">
     	       Preguntas frecuentes<br>
				Contacto<br>
				Iniciar sesión<br>
				Restablecer contraseña<br>
				Términos y condiciones<br>
				Política de privacidad<br>
				Información legal<br>
              </div>
            </div>  




            <div class="container-fluid" style="background-color: #37454d; padding: 35px;" >
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="color: #ffffff">
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="color: #ffffff">

                <img src="../img/logoabajo.png" style="padding-left: 80px;"><br>
                 <small style="padding: 20px; color:#9ba2a6;">       Copyright 2017 | trivago Todos los derechos reservados</small>


              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" >
              </div>
            	

            </div>
            

               
 	   	 </div>
      </div> 		
  		<script type="text/javascript" src="../js/registro-hoteleros.js" >  </script>
</body>
</html>