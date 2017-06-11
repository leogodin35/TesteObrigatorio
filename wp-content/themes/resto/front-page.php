<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package resto
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <!-- Inicio da Homepage -->
      <div id="main-banner">
        <img src="<?php echo(get_template_directory_uri()); ?>/imagens/banner.jpg" alt="Bem vindo a Resto">
      </div>

      <div class="wrapper">
        <section id="home-menu">
          <h2>Menu</h2>
          <ul>
            <li>
              <span class="prato">Prato do Dia</span>
              <span class="preco">$30</span>
              <span class="descricao">Queijo, tomate, cebola</span>
            </li>
            <li>
              <span class="prato">Prato do Dia</span>
              <span class="preco">$30</span>
              <span class="descricao">Queijo, tomate, cebola</span>
            </li>
            <li>
              <span class="prato">Prato do Dia</span>
              <span class="preco">$30</span>
              <span class="descricao">Queijo, tomate, cebola</span>
            </li>
            <li>
              <span class="prato">Prato do Dia</span>
              <span class="preco">$30</span>
              <span class="descricao">Queijo, tomate, cebola</span>
            </li>
            <li>
              <span class="prato">Prato do Dia</span>
              <span class="preco">$30</span>
              <span class="descricao">Queijo, tomate, cebola</span>
            </li>
            <li>
              <span class="prato">Prato do Dia</span>
              <span class="preco">$30</span>
              <span class="descricao">Queijo, tomate, cebola</span>
            </li>
            <li>
              <span class="prato">Prato do Dia</span>
              <span class="preco">$30</span>
              <span class="descricao">Queijo, tomate, cebola</span>
            </li>
            <li>
              <span class="prato">Prato do Dia</span>
              <span class="preco">$30</span>
              <span class="descricao">Queijo, tomate, cebola</span>
            </li>
          </ul>
        </section>

        <section id="figuras">
          <ul>
            <li>
              <img src="imagens/thumb1.jpg" alt="">
              <a href="#">Prato do dia</a>
              <span>$30</span>
              <span class="rating"></span>
            </li>
            <li>
              <img src="imagens/thumb1.jpg" alt="">
              <a href="#">Prato do dia</a>
              <span>$30</span>
              <span class="rating"></span>
            </li>
            <li>
              <img src="imagens/thumb1.jpg" alt="">
              <a href="#">Prato do dia</a>
              <span>$30</span>
              <span class="rating"></span>
            </li>
            <li>
              <img src="imagens/thumb1.jpg" alt="">
              <a href="#">Prato do dia</a>
              <span>$30</span>
              <span class="rating"></span>
            </li>
          </ul>
        </section>
      </div>
      <!-- Fim da Homepage -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
