<?php if(!$indexing) { echo "<script>document.location.replace('./');</script>"; exit; } ?>

<center>
<h1 style="color: #953f4d; text-decoration: underline">DONACIONES</h1><br>
<h1 style="color: #953f4d; font-size: 15px!important; text-decoration: underline">TODAS LAS DONACIONES SON DESTINADAS A LAS MEJORAS Y ACTUALIZACIONES DEL SERVIDOR</h1><br>


Al donar usted está ayudando a mantener el servidor online, con calidad y siempre actualizado.<br>
Usted obtiene Donate Coin's como recompensa por la colaboración que pueden ser canjeados por diversos items in-game.<br>

<br></br></br></br>
	Para concretar una donacion, por favor escribirnos al privado en FACEBOOK.</br></br>
	<h3 style="color: #85929E; text-decoration: underline">- L2 Princess - Staff</h3><br><br><br><br>



	</center>
<?php if(!empty($facePage)) {
	
	echo "<a style='display:table;margin: 0 auto;' target='_blank' href='".$facePage."' class='default dbig'>FanPage</a><br /><hr />";
	
	if(!empty($facePage) && $faceBoxOn != 1) {
		echo "
		<div id=\"fb-root\"></div>
		<script>
			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = \"//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.7&appId=577018195656213\";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		";
	}
	
	?>
	
	<h1><?php echo $LANG[15000]; ?></h1>
	<div class='pddInner'>
		<?php echo $LANG[12998]; ?>
	</div>
	<style>
		.faceIndex { width: <?php echo $fbWidth; ?>px !important; }
	</style>
	<div class='faceIndex'>
		<div class="fb-page" data-href="<?php echo $facePage; ?>" data-width="<?php echo $fbWidth; ?>" data-height="<?php echo $fbHeight; ?>" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="<?php echo $facePage; ?>"><a href="<?php echo $facePage; ?>"></a></blockquote></div></div>
	</div>

	
<!--	<h1 style="color: #953f4d; font-size: 16px!important; text-decoration: underline">¿QUÉ SE PUEDE DONAR?</h1><br>
Pack Books of Giants x10 = <b style="color: #953f4d"> $50</b></br>
Pack Lifes Stones Mids x10 = <b style="color: #953f4d"> $40</b></br>
Pack Lifes Stones High x10 = <b style="color: #953f4d"> $60</b></br>
Pack Lifes Stones Top x10 = <b style="color: #953f4d"> $100</b></br>
Flying Dragón = <b style="color: #953f4d"> $100</b></br>
Nobles $100 = <b style="color: #953f4d"> $100</b></br>
Personaje Hero 15 días = <b style="color: #953f4d"> $200</b></br>
Personaje Hero 30 días = <b style="color: #953f4d"> $350</b></br>
Personaje Hero Eterno = <b style="color: #953f4d"> $500</b></br>
Personaje Vip 15 días = <b style="color: #953f4d"> $200</b></br>
Personaje Vip 30 días = <b style="color: #953f4d"> $350</b></br>
Personaje Vip eterno = <b style="color: #953f4d"> $500</b></br>
Cambio de nombre = <b style="color: #953f4d"> $100</b></br>
Cambio de sexo = <b style="color: #953f4d"> $100</b></br>
Coin lvl 80 = <b style="color: #953f4d"> $100</b></br>
Clan lvl 8 con skills = <b style="color: #953f4d"> $500</b></br>
Joyas c/u = <b style="color: #953f4d"> $300</b></br></br></br>

Con la compra de +$1000 te llevas 15% en Coins.</br></br>

Todo lo obtenido mediante donaciones tambien puede obtenerse farmeando y participando de eventos.</br></br></br></br> 
	<?php echo $LANG[12115]; ?><br /><br /> -->




	
<?php } ?>