<?php
/*
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage waf
 */

get_header(); ?>

<div id="content" class="row">
	<div class="box-100 hero">
		<h1 class="hero_h1"><?php the_field("page_header", 21) ?></h1>
		<p><?php the_field("page_subheader", 21) ?></p>
	</div>
</div>

<div class="row">
	<div class="box-50 hover-zoom" id="st">
		<div id="overlay1">
			<a href="/services#st">
			<h2 class="image-text_hover underline">Strength Training<br>Programs</h2>
			</a>
		</div>
	</div>

	<div class="box-50" id="wl">
		<div id="overlay2">
			<a href="/services#wl">
			<h2 class="image-text_hover underline">Weight Loss<br>Programs</h2>
			</a>
		</div>
	</div>
</div>

<div class="row t1">
	<div class="box-100">
		<img alt="Photo of Janis" class="circleImage" src="<?php echo get_bloginfo('template_url') ?>/images/janisAboutv2.jpg"/>
		<h2><span class="underline">Meet</span> Janis Wade</h2>
		<p>Since 2001, I have had the privilege of helping clients achieve their health and fitness goals. I am a Personal Trainer certified by the American College of Sports Medicine with emphasis on strength and balance training, and a Wellness Coach certified by Wellcoaches with expertise in weight loss coaching.</p>
		<a class="button"href="/about">Visit the about page</a>
	</div>
</div>

<div class="row">
	<div class="box-100">
		<h2>Janis' clients are <span class="underline">saying</span>...</h2>
		<div class="hdPgBlock">
			<h3>I need to lose weight.</h3>
				<p>“Janis’ classes are fun and full of food for thought. Working with Janis, I have gradually lost 15 pounds - I am almost down to the weight I was when I got married over 25 years ago. My new shape makes me feel stronger and more self-confident in all areas of my life. Thank you, Janis!”</p>
				<p class="cite">-Group Strength Training Client</p>
		</div>
		<div class="hdPgBlock">
			<h3>My clothes don’t fit.</h3>
			<p>“I’ve lost 28 pounds working with Janis. I have taken control of my exercise and eating and have so much more confidence in how I look.  I just bought new jeans, in a size I haven’t seen since college. So what’s the secret? I think it’s the combination of regular strength training, coaching, and being accountable to someone who really cares. My program with Janis is sustainable. I’m making changes that I’m able to live with, and that makes all the difference.”    </p>
			<p class="cite">-Personal Training and Group Weight Loss Client</p>
		</div>
		<div class="hdPgBlock">
			<h3>I need to mix up my workouts.</h3>
			<p>“Janis has a way of making you work hard while maintaining safety. She puts a new spin on each and every exercise so my muscles never get used to the same routine. No stone is left unturned and every muscle in my body gets worked. My body feels tighter, especially in that tough belly area. I had heard from others that once you get under Janis’ “spell” you’ll never want to leave. Now, I’m hooked.”</p>
			<p class="cite">-Group Strength Training Client</p>
		</div>
		<a href="/testimonials" class="button">View All Testimonials</a>
		<!-- <div class="hdPgBlock">
			<h3>I’m struggling with Menopause.</h3>
			<p>“When I hit menopause I felt like my body had been taken over by something that was out of my control.  Suddenly, I had put on 10 lbs, all my clothes were tight, and I had lost my confidence. I reached out to Janis and jumped into one of her strength training classes. Janis has a style unlike any other trainer I have worked with. She holds the space for you to dig deep to get your best workout, while your safety is her top priority. She cares about all the parts of who you are and focuses on what your are struggling with.  She shares all her years of wisdom with you, and has a sense of humor that makes your workout one of the best parts of your day. I always leave with a positive attitude and a smile. I’ve lost the 10 lbs and feel more toned than ever.”</p>
			<p class="cite">-Group Strength Training Client</p>
		</div>
		<div class="hdPgBlock">
			<h3>My doctor told me I have to lift weights.</h3>
			<p>“As a nurse practitioner I spend a good deal of time discussing preventive measures my patients can take to maintain good health. So as I approached my 60th birthday I decided it was time for me to take a taste of my own “medicine”. Janis has provided me with an extremely individualized fitness program that has increased my strength, and promoted a greater sense of wellness than I had a decade ago. She demonstrates a broad knowledge of exercise science while taking great care to work around and protect any of the aches and pains we all seem to have as we age. Working with Janis has truly made me feel I am doing all I can to stay strong and fit for life!”</p>
			<p class="cite">-Group Strength Training Client</p>
		</div>
		<div class="hdPgBlock">
			<h3>I can’t drop the pounds the way I used to.</h3>
			<p>“I’m doing the workouts you and I did together and am almost down to my ideal weight. I don’t have a scale up here at my summer house, but I’m fitting into clothes I haven’t been able to wear for a few years. Thanks again for all your help.”</p>
			<p class="cite">-Personal Training Client</p>
		</div>
		<div class="hdPgBlock">
			<h3>I’m feeling stuck.</h3>
			<p>“Working with Janis, I have come to believe that I can accomplish a weight loss goal that has previously been sitting out there, unattainable. I was “stuck”, and she helped me break through the negative cycle and onto a path leading to my goal.”</p>
			<p class="cite">-Group Strength Training and Weight Loss Coaching Client</p>
		</div> -->
	</div>
</div>
<?php
// get_sidebar();
get_footer();
