			<div class="newsletter newsletter-subscription">
				<form action="<?php echo home_url( '/wp-content/plugins/newsletter/do/subscribe.php' ); ?>" method="post" class="widget widget-newsletter" onsubmit="return newsletter_check(this)">
					<fieldset>
						<legend>Cadastro</legend>
						<p class="intro">Receba nossas novidades e promoções se cadastrando com nosso formulário abaixo:</p>
						<p class="field field-nome">
							<label for="nome">Nome</label>
							<input type="text" name="nn" id="nome" class="newsletter-firstname text" placeholder="Nome" required aria-required="true">
						</p>
						<p class="field field-email">
							<label for="email">E-mail</label>
							<input type="email" name="ne" id="email" class="newsletter-email text" placeholder="E-mail" required aria-required="true">
						</p>
						<p class="submit">
							<button type="submit" class="newsletter-submit button">Enviar</button>
						</p>
					</fieldset>
				</form>
			</div>
