<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package final_350
 */

get_header(); ?>


<?php wp_enqueue_script("jquery"); ?>




	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'benefits' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>



			<ol>
			<div class="jlist">

		<li><h1 class="first">Physical Benefits of Meditation</h1></li>
			<p>With meditation, the physiology undergoes a change and every cell in the body is filled with more prana (energy). This results in joy, peace, enthusiasm as the level of prana in the body increases.</p>

				<p>On a physical level, meditation:</p>
			<ul>	
				<li>Lowers high blood pressure</li>
				<li>Lowers the levels of blood lactate, reducing anxiety attacks</li>
				<li>Decreases tension-related pain, such as, tension headaches, ulcers, insomnia, muscle and joint problems</li>
				<li>Increases serotonin production that improves mood and behavior</li>
				<li>Improves the immune system</li>
				<li>Increases the energy level, as you gain an inner source of energy</li>
			</ul>

		</div>

		<div class="jlist">

		<li><h1 class="first">Mental Benefits of Meditation</h1></li>

			<p>Meditation brings the brainwave pattern into an relaxed state that promotes healing. The mind becomes fresh, delicate and beautiful. With regular practice of meditation:
		<ul>	
			<li>Anxiety decreases</li>
			<li>Emotional stability improves</li>
			<li>Creativity increases</li>
			<li>Happiness increases</li>
			<li>Intuition develops</li>
			<li>Gain clarity and peace of mind</li>
			<li>Problems become smaller</li>
			<li>Meditation sharpens the mind by increasing focus and expands through relaxation</li>
			<li>A sharp mind without expansion causes tension, anger and frustration</li>
			<li>An expanded consciousness without sharpness can lead to lack of action/progress</li>
			<li>The balance of a sharp mind and an expanded consciousness brings perfection</li>
			<li>Meditation makes you aware – that your inner attitude determines your happiness.</li>
		</ul>
			</div>

		    <div class="jlist">

		<li><h1 class="first">Other Benefits of Meditation</h1></li>

			<ul>
			<li>Emotional steadiness and harmony</li>

			It cleanses and nourishes you from within and calms you, whenever you feel overwhelmed, unstable, or emotionally shut down.

			<li>Meditation brings harmony in creation</li>

			When you meditate, you are in the space of vastness, calmness and joy and this is what you emit into the environment, bringing harmony to the Creation/planet.

			<li>Personal Transformation</li>

			Meditation can bring about a true personal transformation. As you learn more about yourself, you’ll naturally start discovering more about yourself.</li>
		</ul>
		</div>
	</ol>


	<script type="text/javascript">	

	jQuery('.jlist').click(function(){
		jQuery(this).hide();

	});

	</script>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
