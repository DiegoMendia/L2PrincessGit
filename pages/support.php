<?php if(!$indexing) { echo "<script>document.location.replace('./');</script>"; exit; } ?>
<center><h1 style="color: #953f4d; text-decoration: underline">SOPORTE</h1>

<div class='pddInner'>

	La unica forma donde podras contactarnos, es por nuestra fanpage. Por consultas o cualquier otro motivo escribinos. <br />
	<h3 style="color: #85929E; text-decoration: underline">- L2 Princess - Staff</h3><br><br><br><br><br>  

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
	
	<h1><?php echo $LANG[29002]; ?></h1>
	<div class='pddInner'>
		<?php echo $LANG[12998]; ?>
	</div>
	<style>
		.faceIndex { width: <?php echo $fbWidth; ?>px !important; }
	</style>
	<div class='faceIndex'>
		<div class="fb-page" data-href="<?php echo $facePage; ?>" data-width="<?php echo $fbWidth; ?>" data-height="<?php echo $fbHeight; ?>" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="<?php echo $facePage; ?>"><a href="<?php echo $facePage; ?>"></a></blockquote></div></div>
	</div>
	
<?php } ?>
