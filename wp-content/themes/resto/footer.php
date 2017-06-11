<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resto
 */

?>

	</div><!-- #content -->

	<footer>
		<div class="wrapper">
			<ul>
				<li>Restaurante New York</li>
				<li>Endereço</li>
				<li>Rua, Bairro</li>
				<li>Telefone</li>
			</ul>
			<ul>
				<li>Restaurante France</li>
				<li>Endereço</li>
				<li>Rua, Bairro</li>
				<li>Telefone</li>
			</ul>
			<ul>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Carreira</a></li>
				<li><a href="#">Trabalhe Conosco</a></li>
				<li><a href="#">Contato</a></li>
			</ul>
			<ul>
				<li><img src="<?php echo(get_template_directory_uri()); ?>/imagens/white_logo.png" alt="logo"></li>
				<li>&copy; Todos os direitos reservados</li>
			</ul>
		</div><!-- .wrapper -->
	</footer><!-- footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
