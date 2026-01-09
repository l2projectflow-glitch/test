<?php if(!$indexing) { exit; } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--
	
	Desenvolvido pela Atualstudio
	www.atualstudio.com

          ##########
       ################
    ######          ######
   #####              #####
  ####         ....    ####
 ####        ########  ####
 ####       ########## ####
  ####      ########## ####
  #####       ######## ####
   #####        ****** ####
     ######################
         ################
	
	Website Version 4.0
	
-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="keywords" content="<?php echo strtolower($server_name.', '.$server_chronicle); ?>, l2, lineage, lineage2, lineage 2, lainiege, laineage, lainiage, lineage dois, lineage ii, internacional, international, portuguese, english, espanish, espanol, espanhol, portugues, ingles, gringo, br, 1x, 5x, 10x, 30x, 50x, 70x, 100x, 150x, 200x, 300x, 1000x, free fun, diversao gratis, gratuito, gratuitamente, free fun, new server, novo servidor, o melhor servidor de lineage 2, o melhor servidor"/>
<meta name="description" content="<?php echo $server_name; ?>, the best server of Lineage 2 <?php echo $server_chronicle; ?>. Join us for free and play!"/>
<link rel="shortcut icon" href="../imgs/favicon.ico">
<title><?php echo $server_name." - ".$server_chronicle; ?></title>
<link rel="image_src" href="https://<?php echo $panel_url; ?>/../imgs/logo.jpg" />
<meta property="og:title" content="<?php echo $server_name." - ".$server_chronicle; ?>" />
<meta property="og:site_name" content="<?php echo $server_name; ?>" />
<meta property="og:url" content="https://<?php echo $panel_url; ?>" />
<meta property="og:description" content="<?php echo $server_name; ?>, the best server of Lineage 2 <?php echo $server_chronicle; ?>. Join us for free and play!" />
<meta property="og:type" content="website" />
<meta property="og:image" content="https://<?php echo $panel_url; ?>/../imgs/image_src.jpg" />

<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/global2.css" media="all" />
 <?php if($ucpf5 == 1) { ?> 
 <link rel="stylesheet" type="text/css" href="css/global<?php echo $ucpColor[$numero1]; ?>.css" media="all" />
 <?php } ?>
<?php if($ucpf5 == 0) { ?> 
<link rel="stylesheet" type="text/css" href="css/global<?php echo $ucpColor1; ?>.css" media="all" />
 <?php } ?>	
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/global.js?1"></script>
<div id='quadrado'><link rel="stylesheet" type="text/css" href="css/global.css" media="all" /></div>
<script src="https://www.mercadopago.com/v2/security.js" view="https://kosglad.com.br/"></script>
</head>

<body>
<div class='server_status'>
					</div>

<section href='./' class='<?php echo $language; ?>'>
		<div class='header'>
		
		<div class='icon-top'></div>
		
		<a href='./' class='server-name'><?php echo $server_name; ?></a>
		
		<div style='float: right;'>
			
			<div class='langs'>
				Idioma: 
				<span>
		<a href='?changelang=en' class='en' title='English' onclick="document.location.replace('./index.php?changelang=en<?php echo $addp; ?>');return false;"><span></span></a>
		<a href='?changelang=pt' class='pt' title='Portugu&ecirc;s' onclick="document.location.replace('./index.php?changelang=pt<?php echo $addp; ?>');return false;"><span></span></a>
		<a href='?changelang=es' class='es' title='Espa&ntilde;ol' onclick="document.location.replace('./index.php?changelang=es<?php echo $addp; ?>');return false;"><span></span></a>
	</span>
	</div>
	
				<div class='opts'>
				<a href='./?module=configs&page=changedata' title='Configurações'><i class='fa fa-cog'></i></a>
				<a href='./?engine=logout' title='Sair'><i class='fa fa-sign-out'></i></a>
			</div>
			
		</div>
		
	</div>
	

		
	
	
		
	<div class='all'>
			
			<div class='menu'>
				
				<div><div><?php if($logged != 1) { ?>
				
		
		
		
			<div class='miniLogo'></div>
					
					<nav>
				<nav>
					
					<a href='./'<?php echo ($p == 'index' ? " class='actived'" : ""); ?>>
						<div class='icon'><i class='fa fa-home'></i></div>Home
					</a>
					
					<a href='../'>
						<div class='icon'><i class='fa fa-arrow-circle-left'></i></div>Site Oficial					</a>
				</nav>
				
		</nav>
				
				</div></div>
				
			</div>
			
			<div class='bluArea'>
				
				<div class='loggedInfo'>
					
					<div class='blue-bg-5'></div>
					
					<div class='userCts'>
						
						<div class='avatar'>
							<div>
								<img src='<?php echo "imgs/avatar/$avatar[$numero].jpg"?>' />					</div>
						</div>
						
						<div class='acc'>
								<?php echo $LANG[29010]; ?>
								<span><?php echo $server_name; ?></span>						</div>
						
					</div>
					<div class='donbox'></div><div class='endbox'></div>
					<div class='donbox'>
						
						<div class='donateButtons'>
							
								<div class='two'>
								<a href='./?page=register'><div class='icon'><i class='fa fa-user-plus'></i></div><?php echo $LANG[12077]; ?></a>
								<a href='./?page=forgot'><div class='icon'><i class='fa fa-key'></i></div><?php echo $LANG[99999]; ?></a>
							</div>
													</div>
						
					</div>
					
					
					
					<div class='endbox'></div>
					
				</div>
				
				
				<div class='whitArea'>
					
					
			
			<article>
					<?php
	$pagesExceptions = array('register', 'forgot', 'forgot_confirm'); 
	if(!$logged && $m == '' && in_array($p, $pagesExceptions)) {
		
		require('./pages/'.$p.'.php');
		
	} else if(!$logged) {
	?>
	<ul class="breadcrumb">
							<li><i class='fa fa-home'></i><?php echo $LANG[39000]; ?></li>
						</ul>
						
	
		
		<div class='smallCenter'>
			
			<div style='text-align: center; font-weight: bold; color: #000;'><?php echo $LANG[39007]; ?></div><br />
		
			<form class='usarJquery' action='./?engine=login' method='POST'>
				
				<?php $_SESSION['lkey'] = md5(time().rand(100,999).$uniqueKey); echo "<input type='hidden' name='lkey' value='".$_SESSION['lkey']."' />"; ?>
				
				<label class='formpadrao'>
					<div>
						<div class='desc'>Login:</div>
						<div class='camp'><input type='text' name='ucp_login' autocomplete='off' value='' /></div>
					</div>
				</label>
				
				<label class='formpadrao'>
					<div>
						<div class='desc'><?php echo $LANG[12049]; ?>:</div>
						<div class='camp'><input type='password' name='ucp_passw' autocomplete='off' value='' /></div>
					</div>
				</label>
				
				<?php if($funct['forgot'] == 1 || !empty($link_forgot)) {
					
					echo "
					<div class='grayArea'>
						".$LANG[12020]." <a href='".($funct['forgot'] == 1 ? "./?page=forgot" : $link_forgot)."'>".$LANG[12034]."</a>
					</div>
					";
					
				}
				
				if($captcha_cp_on == 1) { ?>
				
					<label class='formpadrao captcha'>
						<div>
							<div class='desc'><img style='margin:5px 0 0 0;' class='captchaImage' src='captcha/securimage_show.php?sid=<?php echo md5(uniqid()) ?>' /></div>
							<div class='camp'><input type='text' id='captchaInput' maxlength='5' name='captcha' autocomplete='off' /></div>
							<a tabindex='-1' href='#'><img src='captcha/refresh.png' /></a>
						</div>
					</label>
					
				<?php } ?>
				
				<div class='accessButton'>
					<input type='submit' class='default big' value='Login' />
				</div>
				
			</form>
			
		
			
		</div><?php } else { ?><?php } ?>
			</article>
	<?php } else { ?>
		
		
					<div class='miniLogo'></div>
					
					<nav>
				<nav>
					
					<a href='./'<?php echo ($p == 'index' ? " class='actived'" : ""); ?>>
						<div class='icon'><i class='fa fa-home'></i></div>Home
					</a>
					
					<span <?php echo ($m == 'donate/' ? " class='actived'" : ""); ?>>
						<span><div class='icon'><i class='fa fa-money'></i></div><?php echo $LANG[12039]; ?></span>
						<div class='dropdown'>
							<?php
							if($funct['donate'] == 1) { echo "<a href='./?module=donate&page=add'>".$LANG[39010]." ".$coinName_mini."'s"."</a>"; }
							
							if($funct['trnsf1'] == 1 || $funct['trnsf2'] == 1) { echo "
								<a href='./?module=donate&page=transfer'>".$LANG[10013]." ".$coinName_mini."'s"."</a>
								<a href='./?module=donate&page=transfers_list'>".$LANG[40037]."</a>"; }
							?>
						</div>
					</span>
					
					<?php
					
					if($funct['gamst1'] == 1 || $funct['gamst2'] == 1 || $funct['gamst3'] == 1 || $funct['gamst4'] == 1 || $funct['gamst5'] == 1 || $funct['gamst6'] == 1 || $funct['gamst7'] == 1) {
						echo "
						<span".($m == 'stats/' ? " class='actived'" : "").">
							<span><div class='icon'><i class='fa fa-bar-chart'></i></div>Game Stats</span>
							<div class='dropdown'>
								".($funct['gamst1'] == 1 ? "<a href='./?module=stats&page=toppvp'>Top PvP</a>" : "")."
								".($funct['gamst2'] == 1 ? "<a href='./?module=stats&page=toppk'>Top PK</a>" : "")."
								".($funct['gamst3'] == 1 ? "<a href='./?module=stats&page=topclan'>Top Clan</a>" : "")."
								".($funct['gamst4'] == 1 ? "<a href='./?module=stats&page=toponline'>Top Online</a>" : "")."
								".($funct['gamst5'] == 1 ? "<a href='./?module=stats&page=oly_rank'>Grand Olympiad</a>" : "")."
								".($funct['gamst6'] == 1 ? "<a href='./?module=stats&page=boss'>Boss Status</a>" : "")."
								".($funct['gamst7'] == 1 ? "<a href='./?module=stats&page=siege'>Castle & Siege</a>" : "")."
							</div>
						</span>
						";
					}
					
					if($funct['config'] == 1) {
						echo "
						<a href='./?module=configs&page=changedata'".($m == 'configs/' ? " class='actived'" : "").">
							<div class='icon'><i class='fa fa-cog'></i></div>".$LANG[39012]."
						</a>
						";
					}
					
					?>
				
					<a href='./?engine=logout'>
						<div class='icon'><i class='fa fa-lock'></i></div><?php echo $LANG[12023]; ?>
					</a>
					
					<a href='/'>
						<div class='icon'><i class='fa fa-arrow-circle-left'></i></div>WebSite Official					</a>
				</nav>
				
		</nav>
				
				</div></div>
				
			</div>
			
			<div class='bluArea'>
				
				<div class='loggedInfo'>
					
					<div class='blue-bg-5'></div>
					
					<div class='userCts'>
						
						<div class='avatar'>
							<div>
								<img src='<?php echo "imgs/avatar/$avatar[$numero].jpg"?>' />							</div>
						</div>
						
						<div class='acc'>
							<?php echo $_SESSION['acc']; ?>						<span>
						<?php echo date ("d/M/Y H:i:s") ?>
								</span>
						</div>
						
						<a class='altpass' href='./?module=configs&page=changedata' title='Configurações'><?php echo $LANG[999999]; ?></a>
					
					</div>	
					<div class='donbox1'></div><div class='endbox'></div>  
						<div class='donbox'>
						<div class='saldo'>
														Saldo							<span><span><?php
						if(empty($port)) {
							$saldo = DB::Executa("SELECT saldo FROM site_balance WHERE account = '".$_SESSION['acc']."' LIMIT 1");
						} else {
							$saldo = DB::Executa("SELECT TOP 1 saldo FROM site_balance WHERE account = '".$_SESSION['acc']."'", "SITE");
						}
						if(count($saldo) == 0) { $saldo[0]['saldo'] = 0; }
						?><span><span><?php echo intval(trim($saldo[0]['saldo']))."</span> ".$coinName_mini."'s" ; ?></span>
						</div>
						
						<div class='donateButtons'>
							
							<div class='one'>
								<a href='./?module=donate&page=add'><div class='icon'><i class='fa fa-plus-circle'></i></div><?php echo $LANG[39010]; ?> &nbsp &nbsp<span><?php echo $coinName_mini; ?></span></a>
								<a href='./?module=donate&page=transfer'><div class='icon'><i class='fa fa-exchange'></i></div><?php echo $LANG[10013]; ?>&nbsp &nbsp<span><?php echo $coinName_mini; ?></span></a>
							</div>
							<div class='two'>
								<a href='./?module=donate&page=transfers_list'><div class='icon'><i class='fa fa-random'></i></div><?php echo $LANG[40037]; ?></a>
							</div>
													</div>	
						
				
				</div><div class='endbox'></div>
				</div>
				<div class='whitArea'>
					
					
			
			<article>
				<?php require('./pages/'.$p.'.php'); ?>
			</article>
			<?php } ?>
		</div></div>
		
	
	
</section>
<script type='text/javascript'>
	$(function(){
		var aH = parseInt($('article').height());
		var nH = parseInt($('nav > div').height());
		if(aH > nH) {
			var fH = aH;
		} else {
			var fH = nH;
		}
		$('nav, .orangeBg, aside, nav > div, article').css({ 'min-height': ''+(fH+36+40)+'px' });
	});
</script>

<footer>
	&copy; <?php echo date('Y'); ?> <?php echo $server_name; ?> - All rights reserved<br />
	<span>Lineage 2 User Panel</span>
</footer>

<?php
if(!empty($_SESSION['aAlert_msg'])) {
	echo "<script>atualAlert('".$_SESSION['aAlert_msg']."', '".$_SESSION['aAlert_act']."', '".(isset($_SESSION['aAlert_url']) ? $_SESSION['aAlert_url'] : '')."');</script>";
	$_SESSION['aAlert_msg'] = ''; $_SESSION['aAlert_act'] = ''; $_SESSION['aAlert_url'] = ''; unset($_SESSION['aAlert_msg']); unset($_SESSION['aAlert_act']); unset($_SESSION['aAlert_url']);
}
?>

<!-- Important Terms to JS Scripts -->
<input type='hidden' id='l11015' value='<?php echo ($LANG[11015]); ?>' />
<input type='hidden' id='l11016' value='<?php echo ($LANG[11016]); ?>' />
<input type='hidden' id='l20001' value='<?php echo ($LANG[20001]); ?>' />
<input type='hidden' id='l12004' value='<?php echo ($LANG[12004]); ?>' />
<input type='hidden' id='l40044' value='<?php echo ($LANG[40044]); ?>' />

</body>
</html>
