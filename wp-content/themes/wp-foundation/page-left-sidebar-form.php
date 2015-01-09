<?php
/*

  Template Name: Left Side Bar Form
 */
  ?><?php get_header(); ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="row">
    <div class="twelve columns product-headline">
        <h1 class="xl"><?php the_field('page_heading'); ?></h1>

        <?php
        ob_start();
        the_content();
        $the_content = ob_get_contents();
        ob_end_clean();
        ?>

    </div>
</div>
<div class="row fpwd-landing-page" id="main-content-row">
    <div class="four columns product-left">
		<?php dynamic_sidebar( 'sidebar3' ); ?>	
	<form class="wpcf7-form">
		FIRST NAME <br>
		<input type="text">
		LAST NAME <br>
		<input type="text">
		EMAIL <br>
		<input type="text">
		PHONE <br>
		<input type="text">
		COMPANY <br>
		<input type="text">
		JOB TITLE <br>
		<input type="text">
		<p>DO YOU CURRENTLY USE STEEL OR AIR SUSPENSION SYSTEMS?</p>
		<input type="radio" name="SUSPENSION SYSTEMS" value="STEEL" checked>STEEL
		<br>
		<input type="radio" name="SUSPENSION SYSTEMS" value="AIR" >AIR
		<br>
		<input type="submit" value="Submit">
	</form>
    </div>
    <div class="eight columns">
		<div class="no-padding">
			<? echo $the_content; ?>
        </div>
    </div>
</div>

    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>