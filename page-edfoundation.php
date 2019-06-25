<?php
//Names the page template for each section
/*
Template Name: Educational Foundation
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	while ( have_posts() ) : the_post(); ?>
	<?php //Page Heading
	get_template_part( 'template-parts/content', 'page-heading' );
	?>
	<!--Page Content-->
	<div class="row gutter-small expanded content-area">
		<div class="small-12 medium-8 large-9 gutter-small entry-content" id="main" tabindex="0">
			<?php //Page Heading
			get_template_part( 'template-parts/content', 'page-alert' );
			?>
			<?php
			the_content();
			?>
			<?php if (is_page('438')):
			?>
			<div id="cp_widget_8b41ad5b-6dc6-45ba-9aca-face3508ba86">...</div>
			<script type="text/javascript">
			var cpo = []; cpo["_object"] ="cp_widget_8b41ad5b-6dc6-45ba-9aca-face3508ba86"; cpo["_fid"] = "AwPAYdMGlcd_";
			var _cpmp = _cpmp || []; _cpmp.push(cpo);
			(function() { var cp = document.createElement("script"); cp.type = "text/javascript";
			cp.async = true; cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
			var c = document.getElementsByTagName("script")[0];
			c.parentNode.insertBefore(cp, c); })(); </script><noscript><span>Germanna Community CollegeEducational  Foundation Art Collection</span><span>Cadow Art Collection</span><span>Artic Prowl</span><span>Artic Prowl by Carl Arlen
			14 X 20
			$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>orientation</span><span> 1</span><span>height</span><span> 1024</span><span>Bluebird</span><span>Bluebird by Carl Arlen
			14 x 20
			$240</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.01</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/6/2002 1:55:43 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>By the Docks</span><span>By the Docks by Carl Arlen
			14 X 20
			$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>orientation</span><span> 1</span><span>height</span><span> 1024</span><span>Fluffing Up</span><span>Fluffing Up by Carl Arlen
			14 x 20
			$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>orientation</span><span> 1</span><span>height</span><span> 1024</span><span>Great Horned</span><span>Great Horned by Carl Arlen
			14 x 20
			$240
			</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0111111114</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/6/2002 2:08:19 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>GULLS</span><span>Gulls by Carl Arlen
			14 X 20
			$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>orientation</span><span> 1</span><span>height</span><span> 1024</span><span>HAWK'S COUNTRY</span><span>Hawk's Country by Carl Alden
			14 x 20
			$240</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.01</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/6/2002 2:05:45 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Majesty</span><span>Majesty by Carl Alden
			14 x 20
			$280</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/6/2002 1:56:26 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Mister Toad</span><span>Mister Toad by Carl Alden
			14 x 20
			$280 </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>orientation</span><span> 1</span><span>height</span><span> 1024</span><span>One of a Kind</span><span>One of a Kind by Carl Arlen
			14 x 20
			$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>orientation</span><span> 1</span><span>height</span><span> 1024</span><span>Raven</span><span>Raven by Carl Arlen
			14 x 20
			$280</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.01</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/6/2002 1:59:14 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>The Bandit</span><span>The Bandit
			14 x 20
			$240</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0153846154</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/6/2002 1:57:51 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Wary Study</span><span>Wary Study by Carl Arlen
			14 x 20
			$240</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.008333334</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/6/2002 1:58:35 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Western-King Risker</span><span>Western-King Risker by Carl Arlen
			14 x 20
			$</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>orientation</span><span> 1</span><span>height</span><span> 1024</span><span>Yodeling-Common Loon</span><span>Yodeling-Common Loon by Carl Arlen
			'14 x 20
			$240</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.01</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/6/2002 2:03:11 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Dreaming Impressionism # 1, 1996-97
		</span><span>Dreaming Impressionism # 1, 1996-97
		Barbara Astman
		12 x 19.5
		$230</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 3/22/2002 6:58:23 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Dreaming Impressionism # 3, 1996-97
	</span><span>Dreaming Impressionism # 3, 1996-97
	Barbara Astman
	12 x 19.5
	$230</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0153846154</span><span>width</span><span> 1024</span><span>originaldate</span><span> 3/22/2002 6:54:31 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Dreaming Impressionism # 4, 1996-97
</span><span>Dreaming Impressionism # 4, 1996-97
Barbara Astman
12 x 19.5
$230</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 3/22/2002 6:55:30 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Dreaming Impressionism # 7, 1996-97
</span><span>Dreaming Impressionism # 7, 1996-97
Barbara Astman
12 x 19.5
$230</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0153846154</span><span>width</span><span> 1024</span><span>originaldate</span><span> 3/22/2002 6:53:50 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Dreaming Impressionism # 8, 1996-97
</span><span>Dreaming Impressionism # 8, 1996-97
Barbara Astman
12 x 19.5
$230</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 3/22/2002 6:57:23 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Dreaming Impressionism # 13, 1996-97
</span><span>Dreaming Impressionism # 13, 1996-97
Barbara Astman
12 x 19.5
$230</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 3/22/2002 6:57:54 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Dreaming Impressionism # 14, 1996-97
</span><span>Dreaming Impressionism # 14, 1996-97
Barbara Astman
12 x 19.5
$230</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0153846154</span><span>width</span><span> 1024</span><span>originaldate</span><span> 3/22/2002 6:56:12 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Red Series, Badminton, 1980-81
</span><span>Red Series, Badminton, 1980-81
Barbara Astman
12 x 19.5
$230</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>height</span><span> 1024</span><span>Dreaming Impressionism # 15, 1996-97
</span><span>Dreaming Impressionism # 15, 1996-97
Barbara Astman
12 x 19.5
$230</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 3/22/2002 6:56:47 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Red Series, Fruit, 1980-81
</span><span>Red Series, Fruit, 1980-81
Barbara Astman
12 x 19.5
$230</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>height</span><span> 1024</span><span>Red Series, Hat, 1980-81
</span><span>Red Series, Hat, 1980-81
Barbara Astman
12 x 19.5
$230</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>height</span><span> 1024</span><span>Red Series, Phone, 1980-81
</span><span>Red Series, Phone, 1980-81
Barbara Astman
12 x 19.5
$230</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>height</span><span> 1024</span><span>Red Series, Ping Pong, 1980-81
</span><span>Red Series, Ping Pong, 1980-81
Barbara Astman
12 x 19.5
$230</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>height</span><span> 1024</span><span>Red Series, Watering Pineapple, 1980-81
</span><span>Red Series, Watering Pineapple, 1980-81
Barbara Astman
12 x 19.5
$230</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>height</span><span> 1024</span><span>Seeing and Being Seen # 3R, 1994-97
</span><span>Seeing and Being Seen # 3R, 1994-97
Barbara Astman
12 x 19.5
$230</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0153846154</span><span>width</span><span> 1024</span><span>originaldate</span><span> 3/22/2002 6:59:29 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Seeing and Being Seen # 5, 1995-97
</span><span>Seeing and Being Seen # 5, 1995-97
Barbara Astman
12 x 19.5
$230</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 3/22/2002 7:00:28 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Seeing and Being Seen # 7, 1995-97
</span><span>Seeing and Being Seen # 7, 1995-97
Barbara Astman
12 x 19.5
$230</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0153846154</span><span>width</span><span> 1024</span><span>originaldate</span><span> 3/22/2002 6:59:57 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Seeing and Being Seen # 8, 1995-97
</span><span>Seeing and Being Seen # 8, 1995-97
Barbara Astman
12 x 19.5
$230</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 3/22/2002 6:58:58 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Seeing and Being Seen #9R, 1994-97
</span><span>Seeing and Being Seen #9R, 1994-97
Barbara Astman
12 x 19.5
$230</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 3/22/2002 7:01:01 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Travelouge Series, Brief Encounter, 1986
</span><span>Travelouge Series, Brief Encounter, 1986
Barbara Astman
12 x 19.5
$230</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>height</span><span> 1024</span><span>Travelouge Series, Does He, 1986
</span><span>Travelouge Series, Does He, 1986
Barbara Astman
12 x 19.5
$230</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>height</span><span> 1024</span><span>Travelouge Series, I Dream…., 1986
</span><span>Travelouge Series, I Dream…., 1986
Barbara Astman
12 x 19.5
$230</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>height</span><span> 1024</span><span>Travelouge Series, Young Italian Men, 1986
</span><span>Travelouge Series, Young Italian Men, 1986
Barbara Astman
12 x 19.5
$230</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>height</span><span> 1024</span><span>Dream IV
</span><span>Dream IV
Lynn E. Baker
30 x 22
$230</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Dream V
</span><span>Dream V
Lynn E. Baker
30 x 22
$230</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Interior
</span><span>Interior
Guy Bardone
20 x 26.5
$980
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 731</span><span>orientation</span><span> 1</span><span>height</span><span> 935</span><span>Cove at Dusk</span><span>Cove at Dusk
Tricia Berg
43 x36
$660</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 898</span><span>orientation</span><span> 1</span><span>height</span><span> 755</span><span>Alberta, Canada, 1988
</span><span>Alberta, Canada, 1988
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Austria, 1994
</span><span>Austria, 1994
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 751</span><span>orientation</span><span> 1</span><span>height</span><span> 1023</span><span>Costa Rica, 1987
</span><span>Costa Rica, 1987
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>County Mayo, Ireland, 1980
</span><span>County Mayo, Ireland, 1980
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Cumbria, England
</span><span>Cumbria, England
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Cumbria, England
</span><span>Cumbria, England
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Izamal, Yucatan, Mexico, 1986
</span><span>Izamal, Yucatan, Mexico, 1986
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 728</span><span>orientation</span><span> 1</span><span>height</span><span> 1023</span><span>Midi Pyrenes, 1991
</span><span>Midi Pyrenes, 1991
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Midi Pyrenes, 1991
</span><span>Midi Pyrenes, 1991
Robert Bordeaux
19 x 12.5
$240 </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Ontario, Canada
</span><span>Ontario, Canada
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Ontario, Canada
</span><span>Ontario, Canada
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Ontario, Canada
</span><span>Ontario, Canada
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Ontario, Canada
</span><span>Ontario, Canada
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Ontario, Canada
</span><span>Ontario, Canada
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Ontario, Canada
</span><span>Ontario, Canada
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Ontario, Canada
</span><span>Ontario, Canada
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Ontario, Canada
</span><span>Ontario, Canada
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Ontario, Canada
</span><span>Ontario, Canada
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Ontario, Canada
</span><span>Ontario, Canada
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Ontario, Canada
</span><span>Ontario, Canada
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Ontario, Canada
</span><span>Ontario, Canada
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Ontario, Canada
</span><span>Ontario, Canada
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Ontario, Canada
</span><span>Ontario, Canada
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Ontario, Canada
</span><span>Ontario, Canada
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Oregon, U.S.A.
</span><span>Oregon, U.S.A.
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Oregon, U.S.A.
</span><span>Oregon, U.S.A.
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Palengue, Chiapas, Mexico
</span><span>Palengue, Chiapas, Mexico
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Palengue, Chiapas, Mexico
</span><span>Palengue, Chiapas, Mexico
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Quebec, Canada, 1983
</span><span>Quebec, Canada, 1983
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Scotland, 1985
</span><span>Scotland, 1985
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>South Carolina. U.S.A., 1993
</span><span>South Carolina. U.S.A., 1993
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Sri Lanca, 1978
</span><span>Sri Lanca, 1978
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Vermont, U.S.A., 1995
</span><span>Vermont, U.S.A., 1995
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Yorkshire, England
</span><span>Yorkshire, England
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Yorkshire, England
</span><span>Yorkshire, England
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Yorkshire, England
</span><span>Yorkshire, England
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Yorkshire, England
</span><span>Yorkshire, England
Robert Bordeaux
19 x 12.5
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1024</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>Along the Rail</span><span>Along the Rail
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:40:19 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Birth, Lake Superior
</span><span>Birth, Lake Superior
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0181818176</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 7:12:13 PM</span><span>fnumber</span><span> 2.8</span><span>cameramodel</span><span> CYBERSHOT</span><span>Blue Morning
</span><span>Blue Morning
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 7:22:43 PM</span><span>fnumber</span><span> 3.4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Bursting Cloud
</span><span>Bursting Cloud
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 7:09:12 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>
Claremont
</span><span>Claremont
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0153846154</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:42:50 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Clarington
</span><span>Clarington
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0105263162</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:58:04 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Cloudy Day
</span><span>Cloudy Day
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 7:17:15 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Enniskillen
</span><span>Enniskillen
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0117647061</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:49:55 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Farmer's Road
</span><span>Farmer's Road
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 7:16:11 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Fireball</span><span>Fireball
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:33:44 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Hay Fields
</span><span>Hay Fields
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0133333337</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:51:58 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Last Bale</span><span>Last Bale
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0117647061</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:39:40 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Maple Morning
</span><span>Maple Morning
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0153846154</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:36:11 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Morning Light
</span><span>Morning Light
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0125</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:58:42 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Northern Sky
</span><span>Northern Sky
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 7:14:02 PM</span><span>fnumber</span><span> 3.4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Ontario Country
</span><span>Ontario Country
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0153846154</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 7:27:34 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Open Gate
</span><span>Open Gate
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 7:20:18 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Rolling
</span><span>Rolling
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0153846154</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:42:15 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Pearl
</span><span>Pearl
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0133333337</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:38:54 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Rock Lake
</span><span>Rock Lake
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 7:23:58 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Snowy Morning
</span><span>Snowy Morning
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.00952381</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:46:23 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Southern Ontario
</span><span>Southern Ontario
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 7:25:21 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Sleeping Giant
</span><span>Sleeping Giant
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 7:11:19 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Spring Morning
</span><span>Spring Morning
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 7:10:20 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Swirling Clouds
</span><span>Swirling Clouds
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 7:21:24 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Three Barns
</span><span>Three Barns
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0142857144</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:56:41 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Time to Rise
</span><span>Time to Rise
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0142857144</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:43:25 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Upon an Opening
</span><span>Upon an Opening
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 7:26:35 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Wheat Field
</span><span>Wheat Field
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 7:19:24 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Wincester
</span><span>Wincester
Norman R. Brown
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0125</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:56:03 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Farm Work
</span><span>Farm Work
Zora Buchanan
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>orientation</span><span> 1</span><span>height</span><span> 1024</span><span>Flower Stall
</span><span>Flower Stall
Zora Buchanan
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>orientation</span><span> 1</span><span>height</span><span> 1024</span><span>Life Force
</span><span>Life Force
Zora Buchanan
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0153846154</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 5:55:21 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Networking
</span><span>Networking
Zora Buchanan
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0125</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 5:56:00 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Postcards from Paris
</span><span>Postcards from Paris
Zora Buchanan
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0125</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:30:48 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Sparkling Flowers
</span><span>Sparkling Flowers
Zora Buchanan
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0133333337</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:05:39 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Summer Arrangement
</span><span>Summer Arrangement
Zora Buchanan
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>orientation</span><span> 1</span><span>height</span><span> 1024</span><span>Summer Arrangement
</span><span>Summer Arrangement
Zora Buchanan
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0125</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:25:54 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Sun Filled Flowers
</span><span>Sun Filled Flowers
Zora Buchanan
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0111111114</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 5:52:29 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Sunday Morning Boats
</span><span>Sunday Morning Boats
Zora Buchanan
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:18:45 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Through the Garden
</span><span>Through the Garden
Zora Buchanan
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0142857144</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:21:12 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Time Out
</span><span>Time Out
Zora Buchanan
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0153846154</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 5:56:43 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Whispering Foilage
</span><span>Whispering Foilage
Zora Buchanan
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>orientation</span><span> 1</span><span>height</span><span> 1024</span><span>White Flowers in a Red Pot
</span><span>White Flowers in a Red Pot
Zora Buchanan
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>orientation</span><span> 1</span><span>height</span><span> 1024</span><span>The Fish Place
</span><span>The Fish Place
Zora Buchanan
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 5:54:41 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Harmony in Red I
</span><span>Harmony in Red I
Jennifer Carlton
25 x 29
$150</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 584</span><span>width</span><span> 550</span><span>orientation</span><span> 1</span><span>camerasoftware</span><span> Adobe Photoshop CS2 </span><span>Harmony in Red II
</span><span>Harmony in Red II
Jennifer Carlton
25 x 29
$150</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>height</span><span> 598</span><span>width</span><span> 569</span><span>orientation</span><span> 1</span><span>camerasoftware</span><span> Adobe Photoshop CS2 </span><span>Keylon's Afternoon
</span><span>Keylon's Afternoon
Jennifer Carlton
25 x 29
$150</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 556</span><span>height</span><span> 516</span><span>Warm Days I
</span><span>Warm Days I
Douglas Carney
21 x 28
$320</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>orientation</span><span> 1</span><span>height</span><span> 1024</span><span>Warm Days II
</span><span>Warm Days II
21 x 28
$320</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>orientation</span><span> 1</span><span>height</span><span> 1024</span><span>August
</span><span>August
Ray Ciarrochi
28 x 38
$200</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 974</span><span>orientation</span><span> 1</span><span>height</span><span> 710</span><span>Southerly View
</span><span>Southerly View
Ray Ciarrochi
28 x 38
$200</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 480</span><span>focallength</span><span> 13.6</span><span>exposuretime</span><span> 0.0105263162</span><span>width</span><span> 640</span><span>originaldate</span><span> 7/9/2002 6:55:01 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Another Goose
</span><span>Another Goose
B. St. Clair
14 x 20
$240</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0125</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 8:08:40 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Big Game
</span><span>Big Game
B. St. Clair
14 x 20
$240</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 8:07:22 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Bob's Boat
</span><span>Bob's Boat
B. St. Clair
14 x 20
$240</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 8:04:28 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Covered Bridge
</span><span>Covered Bridge
B. St. Clair
14 x 20
$240</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0153846154</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 8:11:35 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Dry Bones
</span><span>Dry Bones
B. St. Clair
14 x 20
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>orientation</span><span> 1</span><span>height</span><span> 1024</span><span>Early Morning Oats
</span><span>Early Morning Oats
B. St. Clair
14 x 20
$240</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 8:12:05 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>End of the Trail
</span><span>End of the Trail
B. St. Clair
14 x 20
$240</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 8:07:58 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Every Day
</span><span>Every Day
B. St. Clair
14 x 20
$240</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0153846154</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 8:12:32 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Fish Bay
</span><span>Fish Bay
B. St. Clair
14 x 20
$240</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 8:09:37 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Hanselman's
</span><span>Hanselman's
B. St. Clair
14 x 20
$240</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 8:11:05 PM</span><span>fnumber</span><span> 3.4</span><span>cameramodel</span><span> CYBERSHOT</span><span>John & Polly
</span><span>John & Polly
B. St. Clair
14 x 20
$240</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 8:03:00 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Kervin's Dock
</span><span>Kervin's Dock
B. St. Clair
14 x 20
$240</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 8:03:40 PM</span><span>fnumber</span><span> 3.4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Small Game
</span><span>Small Game
B. St. Clair
14 x 20
$240</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 8:06:50 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Spring Thaw
</span><span>Spring Thaw
B. St. Clair
14 x 20
$240</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 4/5/2002 8:10:35 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Window on the Pines
</span><span>Window on the Pines
B. St. Clair
14 x 20
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>orientation</span><span> 1</span><span>height</span><span> 1024</span><span>Anthony-My Nephew
</span><span>Anthony-My Nephew
Neville Clark
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>orientation</span><span> 1</span><span>height</span><span> 1024</span><span>Broadview & Gerrard
</span><span>Broadview & Gerrard
Neville Clark
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0125</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:19:21 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Down the Lane
</span><span>Down the Lane
Neville Clark
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0133333337</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:19:59 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Jacqueline II
</span><span>Jacqueline II
Neville Clark
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>orientation</span><span> 1</span><span>height</span><span> 1024</span><span>Jacqueline in Solitude
</span><span>Jacqueline in Solitude
Neville Clark
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>orientation</span><span> 1</span><span>height</span><span> 1024</span><span>Kids at the Beach
</span><span>Kids at the Beach
Neville Clark
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0111111114</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:13:48 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Kids at the Marsh
</span><span>Kids at the Marsh
Neville Clark
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0142857144</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 5:53:06 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Looking Across the Field
</span><span>Looking Across the Field
Neville Clark
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0125</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 5:54:02 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Market Day
</span><span>Market Day
Neville Clark
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0117647061</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:04:26 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Moment of Reflection
</span><span>Moment of Reflection
Neville Clark
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>orientation</span><span> 1</span><span>height</span><span> 1024</span><span>Pensive
</span><span>Pensive
Neville Clark
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>orientation</span><span> 1</span><span>height</span><span> 1024</span><span>Playing at the Beach
</span><span>Playing at the Beach
Neville Clark
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0117647061</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:06:56 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>The Old Boat Yard
</span><span>The Old Boat Yard
Neville Clark
14 x 20
$160</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0117647061</span><span>width</span><span> 1024</span><span>originaldate</span><span> 6/4/2002 6:15:39 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>The Rose Petal Dress
</span><span>The Rose Petal Dress
Neville Clark
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>orientation</span><span> 1</span><span>height</span><span> 1024</span><span>Lone Pear on White Paper & Newsprint, 1991
</span><span>Lone Pear on White Paper & Newsprint, 1991
Rick Zolkower
12 x 19.5
$200</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0142857144</span><span>width</span><span> 1024</span><span>originaldate</span><span> 3/22/2002 6:53:17 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Pears and Grapes, 1985
</span><span>Pears and Grapes, 1985
Rick Zolkower
12 x 19.5
$200</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 3/22/2002 6:43:45 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Poodle on Leash with Cement Patterns, 1991
</span><span>Poodle on Leash with Cement Patterns, 1991
Rick Zolkower
12 x 19.5
$200</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0153846154</span><span>width</span><span> 1024</span><span>originaldate</span><span> 3/22/2002 6:50:16 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Rider's Leg with Saddle, 1987
</span><span>Rider's Leg with Saddle, 1987
Rick Zolkower
12 x 19.5
$200</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 3/22/2002 6:48:17 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Shirt by Stollery, 1986
</span><span>Shirt by Stollery, 1986
Rick Zolkower
12 x 19.5
$200</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0125</span><span>width</span><span> 1024</span><span>originaldate</span><span> 3/22/2002 6:51:47 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Stairwell and Banister, 1981
</span><span>Stairwell and Banister, 1981
Rick Zolkower
12 x 19.5
$200</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>height</span><span> 1024</span><span>Store Window, 1983
</span><span>Store Window, 1983
Rick Zolkower
12 x 19.5
$200</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>height</span><span> 1024</span><span>Swan in Box with String and Wrapping, 1986
</span><span>Swan in Box with String and Wrapping, 1986
Rick Zolkower
12 x 19.5
$200</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0166666675</span><span>width</span><span> 1024</span><span>originaldate</span><span> 3/22/2002 6:48:47 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Walking Shadows - Boardwalk, Toronto, 1982
</span><span>Walking Shadows - Boardwalk, Toronto, 1982
Rick Zolkower
12 x 19.5
$200</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 768</span><span>height</span><span> 1024</span><span>Wolfhound on Beach, 1985
</span><span>Wolfhound on Beach, 1985
Rick Zolkower
12 x 19.5
$200</span><span>cameramake</span><span> SONY</span><span>orientation</span><span> 1</span><span>height</span><span> 768</span><span>focallength</span><span> 18.3</span><span>exposuretime</span><span> 0.0153846154</span><span>width</span><span> 1024</span><span>originaldate</span><span> 3/22/2002 6:47:18 PM</span><span>fnumber</span><span> 4</span><span>cameramodel</span><span> CYBERSHOT</span><span>Banff, Alberta, 1993</span><span>Banff, Alberta, 1993
Serge Clemente
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Barcelone, Espagne, 1994</span><span>Barcelone, Espagne, 1994
Serge Clemente
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Barcelone, Espagne, 1994</span><span>Barcelone, Espagne, 1994
Serge Clemente
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Bruxelles, Belgique, 1992</span><span>Bruxelles, Belgique, 1992
Serge Clemente
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Cuba, La Havane, 1989</span><span>Cuba, La Havane, 1989
Serge Clemente
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Cuba, La Havane, 1989</span><span>Cuba, La Havane, 1989
Serge Clemente
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Cuba, La Havane, 1989</span><span>Cuba, La Havane, 1989
Serge Clemente
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Cuba, La Havane, 1989</span><span>Cuba, La Havane, 1989
Serge Clemente
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Cuba, La Havane, 1989</span><span>Cuba, La Havane, 1989
Serge Clemente
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Cuba, La Havane, 1989</span><span>Cuba, La Havane, 1989
Serge Clemente
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Hong Kong, H.K., 1995</span><span>Hong Kong, H.K., 1995
Serge Clemente
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Montreal, Quebec, 1984</span><span>Montreal, Quebec, 1984
Serge Clemente
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Montreal, Quebec, 1994</span><span>Montreal, Montreal, Quebec, 1994
Serge Clemente
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Montreal, Quebec, 1995</span><span>Montreal, Quebec, 1995
Serge Clemente
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Paris, France, 1992</span><span>Paris, France, 1992
Serge Clemente
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Peronnes-les-Binches, Belgique, 1992</span><span>Peronnes-les-Binches, Belgique, 1992
Serge Clemente
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Perou, Cuzco, 1989</span><span>Perou, Cuzco, 1989
Serge Clemente
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Perou, Cuzco, 1989</span><span>Perou, Cuzco, 1989
Serge Clemente
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Rome, Italie, Colisee, 1984</span><span>Rome, Italie, Colisee, 1984
Serge Clemente
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Semeur, Mariemont, Belique, 1992</span><span>Semeur, Mariemont, Belique, 1992
Serge Clemente
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Curious glance</span><span>Curious glance
Cyril Cox
14 x 20
$180 </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Misty Morning</span><span>Misty Morning
Cyril Cox
14 x 20
$180 </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Northern Visitor</span><span>Northern Visitor
Cyril Cox
14 x 20
$180 </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Silent Snowfall</span><span>Silent Snowfall
Cyril Cox
14 x 20
$180 </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Spring Arrival</span><span>Spring Arrival
Cyril Cox
14 x 20
$180 </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Taking Flight</span><span>Taking Flight
Cyril Cox
14 x 20
$180 </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>The Last Look</span><span>The Last Look
Cyril Cox
14 x 20
$180 </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>The Prospector</span><span>The Prospector
Cyril Cox
14 x 20
$180 </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Threatening Skies</span><span>Threatening Skies
Cyril Cox
14 x 20
$180 </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Watching and Waiting</span><span>Watching and Waiting
Cyril Cox
14 x 20
$180 </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Winter Corn</span><span>Winter Corn
Cyril Cox
14 x 20
$180 </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Winter Sentinels</span><span>Winter Sentinels
Cyril Cox
14 x 20
$180 </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Along the Mossy Shore</span><span>Along the Mossy Shore
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Autumn Calling</span><span>Autumn Calling
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Cougar Crossing</span><span>Cougar Crossing
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Cafe</span><span>Café
William Crighton
26.5 x 21
$230</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Quiet Afternoon</span><span>Quiet Afternoon
William Crighton
26.5 x 21
$230</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 99</span><span>height</span><span> 128</span><span>Flower Market</span><span>Flower Market
William Crighton
26.5 x 21
$230</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Landscape with Single Cedar</span><span>Landscape with Single Cedar
Dallman
29 x 41
$730</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>A Fine Spring Day</span><span>A Fine Spring Day
Claudio D'Angelo
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Black Bear Family</span><span>Black Bear Family
Claudio D'Angelo
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Black Bear in the Chickchocs</span><span>Black Bear in the Chickchocs
Claudio D'Angelo
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Broad Winged Hawk</span><span>Broad Winged Hawk
Claudio D'Angelo
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Caribu, Mount Jacques Cartier</span><span>Caribu, Mount Jacques Cartier
Claudio D'Angelo
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Crows by the Woods</span><span>Crows by the Woods
Claudio D'Angelo
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Deer in a Clear Cut</span><span>Deer in a Clear Cut
Claudio D'Angelo
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Hunting for Voles</span><span>Hunting for Voles
Claudio D'Angelo
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Loon Tapestry</span><span>Loon Tapestry
Claudio D'Angelo
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Peregrine</span><span>Peregrine
Claudio D'Angelo
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Spring Reflections</span><span>Spring Reflections
Claudio D'Angelo
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>St. Lawrence Archipelago</span><span>St. Lawrence Archipelago
Claudio D'Angelo
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>White Owl</span><span>White Owl
Claudio D'Angelo
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Ermine</span><span>Ermine
Claudio D'Angelo
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Horse In Venetian Landscape</span><span>Horse In Venetian Landscape
Bernard, de Clavier
44 x 34
$800
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 127</span><span>height</span><span> 99</span><span>Golden Tradition II</span><span>Golden Tradition II
Kathy Haines Dench
22 x 30
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Tiffany II</span><span>Tiffany II
Kathy Haines Dench
22 x 30
$240</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Picking Salt</span><span>Picking Salt
Dorothy D. Dennison
24 x 35.5
$400</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 92</span><span>Wild Asters</span><span>Wild Asters
Dorothy D. Dennison
23.75 x 35.5
$400</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 87</span><span>height</span><span> 128</span><span>Yesterday, Today, Tomorrow</span><span>Yesterday, Today, Tomorrow
Dorothy D. Dennison
30 x 22
$400</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 95</span><span>After Nodle, 1998</span><span>After Nodle, 1998
Lynn Donoghue
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Baroque Tulips, 1998</span><span>Baroque Tulips, 1998
Lynn Donoghue
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Big Orange Daisy, 1998</span><span>Big Orange Daisy, 1998
Lynn Donoghue
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Birthday, 1998</span><span>Birthday, 1998
Lynn Donoghue
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Blown Tulip, 1998</span><span>Blown Tulip, 1998
Lynn Donoghue
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Blue Sky Pansies, 1998</span><span>Blue Sky Pansies, 1998
Lynn Donoghue
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Calla  Lilies, 1998</span><span>Calla  Lilies, 1998
Lynn Donoghue
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Calla  Lilies II, 1998</span><span>Calla  Lilies II, 1998
Lynn Donoghue
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Calla  Lilies/Blue, 1998</span><span>Calla  Lilies/Blue, 1998
Lynn Donoghue
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Calla Lilies/Pink, 1998</span><span>Calla Lilies/Pink, 1998
Lynn Donoghue
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Crocus Blue, 1998</span><span>Crocus Blue, 1998
Lynn Donoghue
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Daffodils, 1998</span><span>Daffodils, 1998
Lynn Donoghue
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Daisies, 1998</span><span>Daisies, 1998
Lynn Donoghue
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Dark Wax Iris, 1997</span><span>Dark Wax Iris, 1997
Lynn Donoghue
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Floating Iris, 1998</span><span>Floating Iris, 1998
Lynn Donoghue
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Floating Iris, 1998</span><span>Floating Iris, 1998
Lynn Donoghue
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Gathered Tulips, 1998</span><span>Gathered Tulips, 1998
Lynn Donoghue
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Jeff's Tulips, 1998</span><span>Jeff's Tulips, 1998
Lynn Donoghue
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Leaning Tulips, 1998</span><span>Leaning Tulips, 1998
Lynn Donoghue
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Lilies and Buds, 1998</span><span>Lilies and Buds, 1998
Lynn Donoghue
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Water Meadow I</span><span>Water Meadow I
Mick Dorrant
18 x 24.5
$250 </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Water Meadow II</span><span>Water Meadow II
Mick Dorrant
18 x 24.5
$250
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Bald Eagle Study</span><span>Bald Eagle Study
Michael Dumas
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Borderline-Red Tail Hawk</span><span>Borderline-Red Tail Hawk
Michael Dumas
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Flood Plain-Whooping Crane</span><span>Flood Plain-Whooping Crane
Michael Dumas
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Great Blue Heron Study</span><span>Great Blue Heron Study
Michael Dumas
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>High Point-belted King Fisher</span><span>High Point-belted King Fisher
Michael Dumas
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Highland Pool-Hooded Grebe</span><span>Highland Pool-Hooded Grebe
Michael Dumas
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Laneway-Bobwhite</span><span>Laneway-Bobwhite
Michael Dumas
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Northwest Legend-Grizzly Bear</span><span>Northwest Legend-Grizzly Bear
Michael Dumas
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Pine Woods-Gray Jay</span><span>Pine Woods-Gray Jay
Michael Dumas
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Quietude-Yellow Throated Warbler</span><span>Quietude-Yellow Throated Warbler
Michael Dumas
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>River Bed-Rainbow Trout</span><span>River Bed-Rainbow Trout
Michael Dumas
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Swift Fox-Great Plains Winter</span><span>Swift Fox-Great Plains Winter
Michael Dumas
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>The Getaway-American Kestrel</span><span>The Getaway-American Kestrel
Michael Dumas
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Wet Spring, Saw Whet Owl</span><span>Wet Spring, Saw Whet Owl
Michael Dumas
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>April Willow-Evening Grasbeak</span><span>April Willow-Evening Grasbeak
Michael Dumas
14 x 20
$180</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Atlin Keeper
</span><span>Atlin Keeper
Robert Genn
20 x 23.75
$450</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Counter Light
</span><span>Counter Light
Robert Genn
20 x 23.75
$450</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Satshensheni Monument</span><span>Satshensheni Monument
Robert Genn
20 x 23.75
$450</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Sunrise on the Olympia</span><span>Sunrise on the Olympia
Robert Genn
20 x 23.75
$450</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>The Sound and the Fury</span><span>The Sound and the Fury
Robert Genn
20 x 23.75
$450</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Arboretum Pathway</span><span>Arboretum Pathway
Carson Gladson
30 x 22
$80</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Arboretum Vista</span><span>Arboretum Vista
Carson Gladson
30 x 22
$80</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Reflections on Lake Melancholy</span><span>Reflections on Lake Melancholy
Carson Gladson
30 x 22
$80</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Anemones</span><span>Anemones
Ellen Gunn
20 x 18
$170</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Floral Sensation</span><span>Floral Sensation
Ellen Gunn
24 x 24
$170</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 126</span><span>height</span><span> 128</span><span>Floral Still Life Collection II</span><span>Floral Still Life Collection II
Ellen Gunn
18 x 20
$170</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Floral Still Life Collection IV</span><span>Floral Still Life Collection IV
Ellen Gunn
18 x 20
$170</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Garden Moments I</span><span>Garden Moments I
Ellen Gunn
26.75 x 22
$400</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 106</span><span>Garden Moments II</span><span>Garden Moments II
Ellen Gunn
26.75 x 22
$400</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 104</span><span>Old Roses</span><span>Old Roses
Ellen Gunn
20 x 18
$170</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Petite Fluer Suite I</span><span>Petite Fluer Suite I
Ellen Gunn
20 x 18
$170</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Petite Fluer Suite II</span><span>Petite Fluer Suite II
Ellen Gunn
20 x 18
$170</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Petite Fluer Suite III</span><span>Petite Fluer Suite III
Ellen Gunn
20 x 18
$170</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Petite Fluer Suite IV</span><span>Petite Fluer Suite IV
Ellen Gunn
20 x 18
$170</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Pleasant View</span><span>Pleasant View
Ellen Gunn
24 x 24
$250</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 127</span><span>height</span><span> 128</span><span>Season's End II</span><span>Season's End II
Ellen Gunn
34 x 24
$400</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 89</span><span>Spring Ranunculus</span><span>Spring Ranunculus
Ellen Gunn
20 x 18
$450</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>St. Tropez Tulips</span><span>St. Tropez Tulips
Ellen Gunn
20 x 18
$170
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Still Life with Lillies I</span><span>Still Life with Lillies I
Ellen Gunn
35 x 35
$170
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 127</span><span>height</span><span> 128</span><span>Still Life with Lillies II</span><span>Still Life with Lillies II
Ellen Gunn
35 x 35
$450</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 126</span><span>height</span><span> 128</span><span>Winter Light II (a)</span><span>Winter Light II (a)
Ellen Gunn
20 x 24
$230</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Atlin Keeper</span><span>Atlin Keeper
Robert Genn
20 x 23.75
$450</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Counter Light</span><span>Counter Light
Robert Genn
20 x 23.75
$450</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Dare Beach</span><span>Dare Beach
Robert Genn
20 x 23.75
$450</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>The Last of the Ninstints</span><span>The Last of the Ninstints
Robert Genn
20 x 23.75
$450</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Late Afternoon-McCannell Lake</span><span>Late Afternoon-McCannell Lake
Robert Genn
20 x 23.75
$450</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Morning on the West Coast Trail</span><span>Morning on the West Coast Trail
Robert Genn
20 x 23.75
$450</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Robert Genn and Emily Carr</span><span>Robert Genn and Emily Carr
Robert Genn
20 x 23.75
$450</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Coconut Palm I, 1989</span><span>Coconut Palm I, 1989
Martha Henrikson
19.5 x 12
$250</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Eye in the Sky, 1997</span><span>Eye in the Sky, 1997
Martha Henrikson
19.5 x 12
$250</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Icefields Parkway II, 1993</span><span>Icefields Parkway II, 1993
Martha Henrikson
19.5 x 12
$250</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Inside Passage, 1994</span><span>Inside Passage, 1994
Martha Henrikson
19.5 x 12
$250</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Oak Creek-Canyon Road, 1994</span><span>Oak Creek-Canyon Road, 1994
Martha Henrikson
19.5 x 12
$250</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Old P. R. Dock, 1992</span><span>Old P. R. Dock, 1992
Martha Henrikson
19.5 x 12
$250</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Prince Rupert Dock, 1992</span><span>Prince Rupert Dock, 1992
Martha Henrikson
19.5 x 12
$250</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Sandbank, 1992</span><span>Sandbank, 1992
Martha Henrikson
19.5 x 12
$250</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Via I, 1993</span><span>Via I, 1993
Martha Henrikson
19.5 x 12
$250</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Way to Prince Rupert, 1992-93</span><span>Way to Prince Rupert, 1992-93
Martha Henrikson
19.5 x 12
$250</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Eve's Dream</span><span>Eve's Dream
Richard Hall
39 x 51
$900</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 97</span><span>height</span><span> 128</span><span>Palace Retreat</span><span>Palace Retreat
Richard Hall
34 x 47
$800</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 83</span><span>Big Clear Creek</span><span>Big Clear Creek
Max Hayslette
22 x 30
$60</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Cranberry Delight I</span><span>Cranberry Delight I
Max Hayslette
30 x 22
$60</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Cranberry Delight II</span><span>Cranberry Delight II
Max Hayslette
30 x 22
$60</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Greenbrier Suite III</span><span>Greenbrier Suite III
Max Hayslette
22 x 19
$100</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Lapis Moon I</span><span>Lapis Moon I
Max Hayslette
22 x 30
$60</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Lapis Moon II</span><span>Lapis Moon II
Max Hayslette
22 x 30
$60</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Le Moulin a Eau</span><span>Le Moulin a Eau
Max Hayslette
22 x 30
$60</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Lower Meadow Creek</span><span>Lower Meadow Creek
Max Hayslette
30 x 22
$60</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Memories of the Night</span><span>Memories of the Night
Max Hayslette
22 x 30
$60</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Moon Ascending I</span><span>Moon Ascending I
Max Hayslette
22 x 30
$60</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Moon Ascending II</span><span>Moon Ascending II
Max Hayslette
22 x 30
$60</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Rivers at Sunrise I</span><span>Rivers at Sunrise I
Max Hayslette
30 x 22
$60</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Rivers at Sunrise II</span><span>Rivers at Sunrise II
Max Hayslette
30 x 22
$60</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Song of the Samurai</span><span>Song of the Samurai
Max Hayslette
22 x 30
$60</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Sunrise at Dyes Inlet I</span><span>Sunrise at Dyes Inlet I
Max Hayslette
24 x 30
$360</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 97</span><span>Sunrise at Dyes Inlet II</span><span>Sunrise at Dyes Inlet II
Max Hayslette
24 x 30
$360</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 91</span><span>Sunrise Suite III</span><span>Sunrise Suite III
Max Hayslette
20 x 25
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Sunrise Suite IV</span><span>Sunrise Suite IV
Max Hayslette
20 x 25
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Bird of Paradise, 1988</span><span>Bird of Paradise, 1988
Martha Henrikson
19.5 x 12
$250</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Point de Bute Baptist Church, 1996</span><span>Point de Bute Baptist Church, 1996
Thaddeus Holownia
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Pontiac, 1996</span><span>Pontiac, 1996
Thaddeus Holownia
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Queen Street, 13 Busy Street, 1989</span><span>Queen Street, 13 Busy Street, 1989
Thaddeus Holownia
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Queen Street, Big Bop, 1986-96</span><span>Queen Street, Big Bop, 1986-96
Thaddeus Holownia
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Queen Street, Bikes, 1986-96</span><span>Queen Street, Bikes, 1986-96
Thaddeus Holownia
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Queen Street, Cameron House, 1986-96</span><span>Queen Street, Cameron House, 1986-96
Thaddeus Holownia
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Queen Street, Market, 1989</span><span>Queen Street, Market, 1989
Thaddeus Holownia
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Britton's Mill</span><span>Britton's Mill
John Joy
14 x 20
$170
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Building Peticodiac, New Brunswick, 1986</span><span>Building Peticodiac, New Brunswick, 1986
Thaddeus Holownia
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Cape Broyle, Newfoundland</span><span>Cape Broyle, Newfoundland
Thaddeus Holownia
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Carousel, Kansas, 1996</span><span>Carousel, Kansas, 1996
Thaddeus Holownia
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>De Salvo's Mill</span><span>De Salvo's Mill
John Joy
14 x 20
$170
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span> Eagle Lake</span><span>Eagle Lake
John Joy
14 x 20
$170
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Eden Mill</span><span>Eden Mill
John Joy
14 x 20
$170
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Egg 1, 1997</span><span>Egg 1, 1997
Thaddeus Holownia
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Egg II, 1997</span><span>Egg II, 1997
Thaddeus Holownia
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Evening-Loon Lake</span><span>Evening-Loon Lake
John Joy
14 x 20
$170
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Freeman's Yarker Mill</span><span>Freeman's Yarker Mill
John Joy
14 x 20
$170
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Fudge's Mill</span><span>Fudge's Mill
John Joy
14 x 20
$170
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Haliburton Lake</span><span>Haliburton Lake
John Joy
14 x 20
$170
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Head Lake</span><span>Head Lake
John Joy
14 x 20
$170
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>High Marsh Road, 1988</span><span>High Marsh Road, 1988
Thaddeus Holownia
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Hodgson's Mill</span><span>Hodgson's Mill
John Joy
14 x 20
$170
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Homage to Fox Talbot I, 1996</span><span>Homage to Fox Talbot I, 1996
Thaddeus Holownia
19.5 x 12
$270
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Homage to Fox Talbot II, 1996</span><span>Homage to Fox Talbot II, 1996
Thaddeus Holownia
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Jolicure Pond, October, 1996</span><span>Jolicure Pond, October, 1996
Thaddeus Holownia
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>July, De Salvo's Mill</span><span>July, De Salvo's Mill
John Joy
14 x 20
$170
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Kenissis Lake</span><span>Kenissis Lake
John Joy
14 x 20
$170
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Kinmount Mill</span><span>Kinmount Mill
John Joy
14 x 20
$170
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Late October</span><span>Late October
John Joy
14 x 20
$170
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Loon Lake</span><span>Loon Lake
John Joy
14 x 20
$170
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>March, Norland</span><span>March, Norland
John Joy
14 x 20
$170
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Millrook Mill</span><span>Millrook Mill
John Joy
14 x 20
$170
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Morning Shadow</span><span>Morning Shadow
John Joy
14 x 20
$170
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Morning-Holmes Pond</span><span>Morning-Holmes Pond
John Joy
14 x 20
$170
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Point de Bute Baptist Church, 1996</span><span>Point de Bute Baptist Church, 1996
Thaddeus Holownia
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Point de Bute Baptist Church, 1996</span><span>Point de Bute Baptist Church, 1996
Thaddeus Holownia
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled, 1992</span><span>Untitled, 1992
Morry Katz
12 x 19.5
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled, 1992</span><span>Untitled, 1992
Morry Katz
12 x 19.5
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled, 1992</span><span>Untitled, 1992
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled, 1992</span><span>Untitled, 1992
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 88</span><span>height</span><span> 128</span><span>Untitled, 1992</span><span>Untitled, 1992
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 89</span><span>height</span><span> 128</span><span>Untitled, 1993</span><span>Untitled, 1993
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled, 1994</span><span>Untitled, 1994
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 90</span><span>height</span><span> 128</span><span>Untitled, 1994</span><span>Untitled, 1994
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled, 1994</span><span>Untitled, 1994
Morry Katz
12 x 19.5
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled, 1994</span><span>Untitled, 1994
Morry Katz
12 x 19.5
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled, 1994</span><span>Untitled, 1994
Morry Katz
12 x 19.5
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 92</span><span>height</span><span> 128</span><span>Untitled, 1994</span><span>Untitled, 1994
Morry Katz
12 x 19.5
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled, 1994</span><span>Untitled, 1994
Morry Katz
12 x 19.5
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled, 1994</span><span>Untitled, 1994
Morry Katz
12 x 19.5
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled, 1995 </span><span>Untitled, 1995
Morry Katz
12 x 19.5
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled, 1995 </span><span>Untitled, 1995
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled, 1995 </span><span>Untitled, 1995
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled, 1992</span><span>Untitled, 1992
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled, 1992</span><span>Untitled, 1992
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled, 1992</span><span>Untitled, 1992
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Three Sheared Sheep, 1931</span><span>Three Sheared Sheep, 1931
Andre Kertesz
19.5 x 12
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Underwater Swimmer, Esztergom, Hungary, 1917</span><span>Underwater Swimmer, Esztergom, Hungary, 1917
Andre Kertesz
19.5 x 12
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Boksai Ter, Budapest, 1914</span><span>Boksai Ter, Budapest, 1914
Andre Kertesz
19.5 x 12
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Buy, November 15, 1962</span><span>Buy, November 15, 1962
Andre Kertesz
12 x 19.5
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Carnival, Paris, 1926</span><span>Carnival, Paris, 1926
Andre Kertesz
19.5 x 12
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Carrefour, Blois, 1930</span><span>Carrefour, Blois, 1930
Andre Kertesz
19.5 x 12
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Chez Mondrian, 1926</span><span>Chez Mondrian, 1926
Andre Kertesz
12 x 19.5
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Circus, Budapest, 1920</span><span>Circus, Budapest, 1920
Andre Kertesz
12 x 19.5
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Disappearing Act, 1955</span><span>Disappearing Act, 1955
Andre Kertesz
12 x 19.5
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Empire State Building in a Puddle, 1967</span><span>Empire State Building in a Puddle, 1967
Andre Kertesz
12 x 19.5
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Ernest, Paris, 1931</span><span>Ernest, Paris, 1931
Andre Kertesz
12 x 19.5
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Fence with Snow, Washington Square, New York, 1959</span><span>Fence with Snow, Washington Square, New York, 1959
Andre Kertesz
19.5 x 12
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Flowers for Elizabeth, New York, 1975</span><span>Flowers for Elizabeth, New York, 1975
Andre Kertesz
19.5 x 12
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Fork, Paris, 1928</span><span>Fork, Paris, 1928
Andre Kertesz
19.5 x 12
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Gypsy Girl, Arles, 1979</span><span>Gypsy Girl, Arles, 1979
Andre Kertesz
19.5 x 12
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Homing Ship, 1944</span><span>Homing Ship, 1944
Andre Kertesz
12 x 19.5
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>In MoMa Sculpture Court, 1967</span><span>In MoMa Sculpture Court, 1967
Andre Kertesz
12 x 19.5
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Lost Cloud, New York, 1937</span><span>Lost Cloud, New York, 1937
Andre Kertesz
12 x 19.5
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Lovers, Budapest, 1915</span><span>Lovers, Budapest, 1915
Andre Kertesz
19.5 x 12
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Martinique, Jan. 1, 1972</span><span>Martinique, Jan. 1, 1972
Andre Kertesz
19.5 x 12
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Meiji Shrine, Tokyo, 1968</span><span>Meiji Shrine, Tokyo, 1968
Andre Kertesz
19.5 x 12
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Meudon, 1928</span><span>Meudon, 1928
Andre Kertesz
12 x 19.5
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Mondrian's glasses and Pipe, Paris 1926</span><span>Mondrian's glasses and Pipe, Paris 1926
Andre Kertesz
19.5 x 12
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>My Mother's Hands, Budapest, 1919</span><span>My Mother's Hands, Budapest, 1919
Andre Kertesz
19.5 x 12
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Satiric Dancer, 1926</span><span>Satiric Dancer, 1926
Andre Kertesz
12 x 19.5
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Storm from My Window, Paris, 1920</span><span>Storm from My Window, Paris, 1920
Andre Kertesz
19.5 x 12
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>The Place de la Concorde on a Rainy Day, 1928</span><span>The Place de la Concorde on a Rainy Day, 1928
Andre Kertesz
12 x 19.5
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Venessa Harwood, 1981</span><span>Venessa Harwood, 1981
Andre Kertesz
12 x 19.5
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Williamsburg, Virginia, 1948</span><span>Williamsburg, Virginia, 1948
Andre Kertesz
12 x 19.5
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled, 1964 (Roof Corner)</span><span>Untitled, 1964 (Roof Corner)
Andre Kertesz
12 x 19.5
$210</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Interior Shimmer</span><span>Interior Shimmer
David Kessler
42 x 31
$700</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 97</span><span>Tangled Reflection</span><span>Tangled Reflection
David Kessler
42 x 31
$700</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 97</span><span>Untitled 46</span><span>Untitled 46
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 47</span><span>Untitled 47
B.A. King
12 x 19.5
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 48</span><span>Untitled 48
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 49</span><span>Untitled 49
B.A. King
12 x 19.5
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled 1</span><span>Untitled 1
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 2</span><span>Untitled 2
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 3</span><span>Untitled 3
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 4</span><span>Untitled 4
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 5</span><span>Untitled 5
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 6</span><span>Untitled 6
B.A. King
12 x 19.5
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 7</span><span>Untitled 7
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 8</span><span>Untitled 8
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 9</span><span>Untitled 9
B.A. King
12 x 19.5
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled 10</span><span>Untitled 10
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 11</span><span>Untitled 11
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 12</span><span>Untitled 12
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled 13</span><span>Untitled 13
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 14</span><span>Untitled 14
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 15</span><span>Untitled 15
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 16</span><span>Untitled 16
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 17</span><span>Untitled 17
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 18</span><span>Untitled 18
B.A. King
12 x 19.5
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 19</span><span>Untitled 19
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 20</span><span>Untitled 20
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled 21</span><span>Untitled 21
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 22</span><span>Untitled 22
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 23</span><span>Untitled 23
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 24</span><span>Untitled 24
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 25</span><span>Untitled 25
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 26</span><span>Untitled 26
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 27</span><span>Untitled 27
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled 28</span><span>Untitled 28
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 29</span><span>Untitled 29
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 30</span><span>Untitled 30
B.A. King
12 x 19.5
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 31</span><span>Untitled 31
B.A. King
12 x 19.5
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled 32</span><span>Untitled 32
B.A. King
12 x 19.5
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span> Untitled 33</span><span>Untitled 33
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 34</span><span>Untitled 34
B.A. King
12 x 19.5
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled 35</span><span>Untitled 35
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 36</span><span>Untitled 36
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled 37</span><span>Untitled 37
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 38</span><span>Untitled 38
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 39</span><span>Untitled 39
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 40</span><span>Untitled 40
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 41</span><span>Untitled 41
B.A. King
12 x 19.5
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 42</span><span>Untitled 42
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 43</span><span>Untitled 43
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled 44</span><span>Untitled 44
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Untitled 45</span><span>Untitled 45
B.A. King
19.5 x 12
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Blue Grouse</span><span>Blue Grouse
J.F. Lansdowne
20 x 23.75
$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Great Blue Heron</span><span>Great Blue Heron
J.F. Lansdowne
20 x 23.75
$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Pileated Woodpecker</span><span>Pileated Woodpecker
J.F. Lansdowne
20 x 23.75
$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Pintailed Ducks</span><span>Pintailed Ducks
J.F. Lansdowne
20 x 23.75
$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Pygmy Owl</span><span>Pygmy Owl
J.F. Lansdowne
20 x 23.75
$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Sora Rails</span><span>Sora Rails
J.F. Lansdowne
20 x 23.75
$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Western Sandpiper</span><span>Western Sandpiper
J.F. Lansdowne
20 x 23.75
$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Wood Ducks</span><span>Wood Ducks
J.F. Lansdowne
20 x 23.75
$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Fate Takes Hand</span><span>Fate Takes Hand
Seymour Leichman
30 x 22
$800</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 92</span><span>height</span><span> 128</span><span>John Wayne</span><span>John Wayne
Seymour Leichman
21 x 26.5
$800</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>OK Corral</span><span>OK Corral
Seymour Leichman
30 x 22
$800</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 90</span><span>height</span><span> 128</span><span>The Drive In</span><span>The Drive In
Seymour Leichman
22 x 29.5
$800</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Some Sports</span><span>Some Sports
Seymour Leichman
19 x 17.5
$800</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 126</span><span>Flower Medley</span><span>Flower Medley
Louisa Li
30 x22
$90</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Flowering Vine by the Stream</span><span>Flowering Vine by the Stream
Louisa Li
22 x 30
$90</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Spring Blooms Along the Ravine</span><span>Spring Blooms Along the Ravine
Louisa Li
30 x22
$90</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Still Life by Window</span><span>Still Life by Window
Louisa Li
22 x 30
$90</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>The Brook</span><span>The Brook
Louisa Li
22 x 30
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Late Spring, 1982</span><span>Late Spring, 1982
Carol Marino
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Late Spring, 1982</span><span>Late Spring, 1982
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Leaves of Polaroid, 1988</span><span>Leaves of Polaroid, 1988
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>L'image jaune, 1979</span><span>L'image jaune, 1979
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Oh No, More Flowers!, 1988</span><span>Oh No, More Flowers!, 1988
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Think of the Sea as an Artist, 1978</span><span>Think of the Sea as an Artist, 1978
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Trio, 1994</span><span>Trio, 1994
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Trio in Blue</span><span>Trio in Blue
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Trio in Blue</span><span>Trio in Blue
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Untitled</span><span>Untitled
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Veils, 1982</span><span>Veils, 1982
Carol Marino
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Amaryllis Totem, 1997</span><span>Amaryllis Totem, 1997
Carol Marino
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Baie Grise, 1978</span><span>Baie Grise, 1978
Carol Marino
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Cold Snap, 1979</span><span>Cold Snap, 1979
Carol Marino
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Every Dull has its Bright Wave, 1979</span><span>Every Dull has its Bright Wave, 1979
Carol Marino
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Four + Four = Nine, 1980</span><span>Four + Four = Nine, 1980
Carol Marino
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Late Spring, 1982</span><span>Late Spring, 1982
Carol Marino
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Picador</span><span>Picador
Fletcher Martin
24 x 40
$720</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Painted Desert</span><span>Painted Desert
Oliviero Masi
19.75 x 27.5
$300</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Poppies</span><span>Poppies
Oliviero Masi
27.5 x 19.5
$300</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 95</span><span>height</span><span> 128</span><span>After the Snow</span><span>After the Snow
Oliviero Masi
20 x 27.5
$300</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Birches and Corn Field</span><span>Birches and Corn Field
Oliviero Masi
20 x 27.5
$300</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Dunes</span><span>Dunes
Oliviero Masi
19.75 x 27.5
$300</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Gallup</span><span>Gallup
Oliviero Masi
20 x 29
$300</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 98</span><span>height</span><span> 128</span><span>Snow Mist </span><span>Snow Mist
Tom Mathews
14 x 20
$160st </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Unsettled Sky</span><span>Unsettled Sky
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Victorian Brick</span><span>Victorian Brick
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Whimsical Orchard</span><span>Whimsical Orchard
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>White Christmas</span><span>White Christmas
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Winter's End</span><span>Winter's End
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Blowing Snow</span><span>Blowing Snow
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Cityscape</span><span>Cityscape
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Evergreen</span><span>Evergreen
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Fall Colours</span><span>Fall Colours
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Old Houses</span><span>Old Houses
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Prince Edward County</span><span>Prince Edward County
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Red Barn</span><span>Red Barn
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Row on Row</span><span>Row on Row
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Sailor's Revelry</span><span>Sailor's Revelry
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Fendi Woman in Black, 1986</span><span>Fendi Woman in Black, 1986
Sheila Metzner
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Gladiola/Apple Still Life, 1981Gladiola/Apple Still Life, 1981</span><span>Gladiola/Apple Still Life, 1981
Sheila Metzner
12 x 19.5
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Grey Vase, Vanda Orchid, 1980</span><span>Grey Vase, Vanda Orchid, 1980
Sheila Metzner
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Homage to Man Ray, 1983</span><span>Homage to Man Ray, 1983
Sheila Metzner
12 x 19.5
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Indomitable Spirit, 1989</span><span>Indomitable Spirit, 1989
Sheila Metzner
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Jessica Lange, Red, 1988</span><span>Jessica Lange, Red, 1988
Sheila Metzner
12 x 19.5
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Marie Sophie, 1989</span><span>Marie Sophie, 1989
Sheila Metzner
12 x 19.5
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Modern Vase Tulip, 1980</span><span>Modern Vase Tulip, 1980
Sheila Metzner
12 x 19.5
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Mouille Shapes, 1986</span><span>Mouille Shapes, 1986
Sheila Metzner
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Rosemary, Bracelets, 1984</span><span>Rosemary, Bracelets, 1984
Sheila Metzner
12 x 19.5
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Sunrise Over New York, 1988</span><span>Sunrise Over New York, 1988
Sheila Metzner
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Uma, Mask, 1985</span><span>Uma, Mask, 1985
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Uma, Patou Dress, 1983</span><span>Uma, Patou Dress, 1983
Sheila Metzner
12 x 19.5
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Volta, 1989</span><span>Volta, 1989
Sheila Metzner
12 x 19.5
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Black and White Still Life, Nantucket, 1984</span><span>Black and White Still Life, Nantucket, 1984
Sheila Metzner
19.5 x 12
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Dunund, T.C., 1985</span><span>Dunund, T.C., 1985
Sheila Metzner
12 x 19.5
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Fendi Finger, 1986</span><span>Fendi Finger, 1986
Sheila Metzner
12 x 19.5
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Narwhales</span><span>Narwhales
Bruce Muir
20 x 23.75
$300</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Pacific Whitesides</span><span>Pacific Whitesides
Bruce Muir
20 x 23.75
$300</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Porlier Pass</span><span>Porlier Pass
Bruce Muir
20 x 23.75
$300</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Return to Clayoquot</span><span>Return to Clayoquot
Bruce Muir
20 x 23.75
$300</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Trophy Rainbows</span><span>Trophy Rainbows
Bruce Muir
20 x 23.75
$300</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Arctic Ballet</span><span>Arctic Ballet
Bruce Muir
20 x 23.75
$300</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Berring Strait</span><span>Bering Strait
Bruce Muir
20 x 23.75
$300</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Catalina Islands</span><span>Catalina Islands
Bruce Muir
20 x 23.75
$300</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Coast Rainbows</span><span>Coast Rainbows
Bruce Muir
20 x 23.75
$300</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Leviathan</span><span>Leviathan
Bruce Muir
20 x 23.75
$300</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Back Country Harvest I</span><span>Back Country Harvest I
Doug Oliver
33 x 26
$320
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 99</span><span>height</span><span> 128</span><span>Back Country Harvest II</span><span>Back Country Harvest II
Doug Oliver
33 x 26
$320
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 97</span><span>height</span><span> 128</span><span>Fortune of Summer</span><span>Fortune of Summer
Doug Oliver
36 x 46
$580</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 101</span><span>Heel Rock</span><span>Heel Rock
Onley
13 x 20
$320
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Lynn Channel</span><span>Lynn Channel
Onley
13 x 20
$320
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Montague Bay-Saliano Island</span><span>Montague Bay-Saliano Island
Onley
13 x 20
$320
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Old Man River</span><span>Old Man River
Onley
13 x 20
$320
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Pitt River</span><span>Pitt River
Onley
13 x 20
$320
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Rock-Murray's Inlet</span><span>Rock-Murray's Inlet
Onley
13 x 20
$320
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Shower, Olsen Farm</span><span>Shower, Olsen Farm
Onley
13 x 20
$320
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Black Rock off Lookout Island</span><span>Black Rock off Lookout Island
Onley
13 x 20
$320
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Cheam Peak</span><span>Cheam Peak
Onley
13 x 20
$320
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Drift Logs-Ambleside</span><span>Drift Logs-Ambleside
Onley
13 x 20
$320
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Woman Possessed</span><span>Woman Possessed
Peter Paone
30 x22
$1300</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Fish At Home</span><span>Fish At Home
Peter Paone
30 x 22
$1300</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 93</span><span>height</span><span> 128</span><span>The Indian</span><span>The Indian
Peter Paone
22 x 29.5
$1300</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Prelude</span><span>Prelude
Robert Pelleu
12.5 x 19
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Rock Pool</span><span>Rock Pool
Robert Pelleu
12.5 x 19
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>The French</span><span>The French
Robert Pelleu
12.5 x 19
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>The Red Forest</span><span>The Red Forest
Robert Pelleu
12.5 x 19
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>The White Forest</span><span>The White Forest
Robert Pelleu
12.5 x 19
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Algoma Canyon</span><span>Algoma Canyon
Robert Pelleu
12.5 x 19
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Ashburn</span><span>Ashburn
Robert Pelleu
12.5 x 19
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Autumn Reflection</span><span>Autumn Reflection
Robert Pelleu
12.5 x 19
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Awakening</span><span>Awakening
Robert Pelleu
12.5 x 19
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Call of the Loon</span><span>Call of the Loon
Robert Pelleu
12.5 x 19
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Cattails</span><span>Cattails
Robert Pelleu
12.5 x 19
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Glen Major</span><span>Glen Major
Robert Pelleu
12.5 x 19
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Grazing</span><span>Grazing
Robert Pelleu
12.5 x 19
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Hidden Pond</span><span>Hidden Pond
Robert Pelleu
12.5 x 19
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Northern Reflections</span><span>Northern Reflections
Robert Pelleu
12.5 x 19
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>A Small River in the Valley, 1997</span><span>A Small River in the Valley, 1997
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Afternoon Colours, 1988</span><span>Afternoon Colours, 1988
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>An Alberta Summer, 1992</span><span>An Alberta Summer, 1992
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Autumn Wilderness, 1988</span><span>Autumn Wilderness, 1988
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Bow Valley Park, 1993</span><span>Bow Valley Park, 1993
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Branches Without Leaves, 1988</span><span>Branches Without Leaves, 1988
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>By the Water's Edge, 1997</span><span>By the Water's Edge, 1997
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Clearcut Patchworks</span><span>Clearcut Patchworks
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Colors of September, 1993</span><span>Colors of September, 1993
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>December Morning, 1990</span><span>December Morning, 1990
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Foothills Beaver Dam, 1989</span><span>Foothills Beaver Dam, 1989
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Frazier Canyon in July, 1997</span><span>Frazier Canyon in July, 1997
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Frazier Canyon, 1995</span><span>Frazier Canyon, 1995
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Mist in Autumn, 1987</span><span>Mist in Autumn, 1987
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Mountains in Quebec Near Vermont, 1988</span><span>Mountains in Quebec Near Vermont, 1988
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Near Ghost River, 1993</span><span>Near Ghost River, 1993
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Near Red Rock Canyon, 1991</span><span>Near Red Rock Canyon, 1991
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Northern River, 1997</span><span>Northern River, 1997
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Pink Hills in the Distance, 1987</span><span>Pink Hills in the Distance, 1987
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Quiet Afternoon, 1988</span><span>Quiet Afternoon, 1988
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Rushing Water, 1993</span><span>Rushing Water, 1993
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Sheep River Country, 1988</span><span>Sheep River Country, 1988
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>South Facing Meadow, 1994</span><span>South Facing Meadow, 1994
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Still Water, 1991</span><span>Still Water, 1991
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Sunlight on the Beach, 1988</span><span>Sunlight on the Beach, 1988
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Swirling Clouds over Abercorn, 1988</span><span>Swirling Clouds over Abercorn, 1988
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>The Edge of an Island, 1996</span><span>The Edge of an Island, 1996
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>The Garden, 1998</span><span>The Garden, 1998
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>The Red Tree, 1996</span><span>The Red Tree, 1996
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Trail at L. O'Hara, 1993</span><span>Trail at L. O'Hara, 1993
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Uncultivated Land, 1993</span><span>Uncultivated Land, 1993
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Where the Orchards Grow, 1997</span><span>Where the Orchards Grow, 1997
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Wilderness, 1996</span><span>Wilderness, 1996
Catherine Perehudoff
19.5 x 12
$220</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Persquile, Ontario, 1997</span><span>Persquile, Ontario, 1997
Simeon Posen
19.5 x 12
$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Perth, Ontario, 1997</span><span>Perth, Ontario, 1997
Simeon Posen
19.5 x 12
$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Simcoe, Ontario, 1997</span><span>Simcoe, Ontario, 1997
Simeon Posen
19.5 x 12
$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Simcon, Ontario, 1997</span><span>Simcon, Ontario, 1997
Simeon Posen
19.5 x 12
$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Tweed, Ontario, 1997</span><span>Tweed, Ontario, 1997
Simeon Posen
19.5 x 12
$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Warkworth, Ontario, 1995</span><span>Warkworth, Ontario, 1995
Simeon Posen
19.5 x 12
$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Warkworth, Ontario, 1995</span><span>Warkworth, Ontario, 1995
Simeon Posen
19.5 x 12
$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Bacchus Woods, Simcoe, Ontario, 1996</span><span>Bacchus Woods, Simcoe, Ontario, 1996
Simeon Posen
19.5 x 12
$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Eastern Townships, Quebec, 1997</span><span>Eastern Townships, Quebec, 1997
Simeon Posen
19.5 x 12
$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Foxboro, Ontario, 1994</span><span>Foxboro, Ontario, 1994
Simeon Posen
19.5 x 12
$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Isfahan Bazaar, Iran, 1976</span><span>Isfahan Bazaar, Iran, 1976
Simeon Posen
19.5 x 12
$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Long Point, Ontario, 1996</span><span>Long Point, Ontario, 1996
Simeon Posen
19.5 x 12
$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Madoc, Ontario, 1997</span><span>Madoc, Ontario, 1997
Simeon Posen
19.5 x 12
$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Nantanz Mosque, Iran, 1976</span><span>Nantanz Mosque, Iran, 1976
Simeon Posen
19.5 x 12
$280</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Howling Wolf</span><span>Howling Wolf
Robert Pow
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Lone Sentry</span><span>Lone Sentry
Robert Pow
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Moose</span><span>Moose
Robert Pow
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Mountain Lion</span><span>Mountain Lion
Robert Pow
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Teal Ducks</span><span>Teal Ducks
Robert Pow
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Wolf Family</span><span>Wolf Family
Robert Pow
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Wolf on Alert</span><span>Wolf on Alert
Robert Pow
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Wolf Pack</span><span>Wolf Pack
Robert Pow
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Canada Goose</span><span>Canada Goose
Robert Pow
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Common Loon</span><span>Common Loon
Robert Pow
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Grizzly Bear</span><span>Grizzly Bear
Robert Pow
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Grizzly Bear Family</span><span>Grizzly Bear Family
Robert Pow
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Gamble Oyster Sheds</span><span>Gamble Oyster Sheds
Elizabeth Reed
20 x 17
$230</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Old Mill Gamble</span><span>Old Mill Gamble
Elizabeth Reed
24.5 x 29.5
$340</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 97</span><span>Jupiter 1900-1924 (Blue)</span><span>Jupiter 1900-1924 (Blue)
Charles Ross
29 x 40.5
$700</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 90</span><span>Venus 1951-1976 (Green)</span><span>Venus 1951-1976 (Green)
Charles Ross
29 x 40.5
$700</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 93</span><span>Lake Como</span><span>Lake Como
Robert Schaar
26 x 21
$160
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Lake Como Vista</span><span>Lake Como Vista
Robert Schaar
26 x 21
$160
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Equilibrium Tightrope</span><span>Equilibrium Tightrope
Georges Schreiber
31.75 x 21.5
$420</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 92</span><span>height</span><span> 128</span><span>La Mer</span><span>La Mer
Georges Schreiber
26.25 x 19.75
$420</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>The Bride and the Widow</span><span>The Bride and the Widow
Georges Schreiber
20 x 26
$420</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>The Thinker</span><span>The Thinker
Georges Schreiber
22 x 32
$420</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Thus It Came to Pass</span><span>Thus It Came to Pass
Georges Schreiber
19.75 x 25.75
$420</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 98</span><span>Trapeze</span><span>Trapeze
Georges Schreiber
22 x 32
$420</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Aqua I</span><span>Aqua I
A. Shanet
11.5 x 10
$80</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Aqua II</span><span>Aqua II
A. Shanet
11.5 x 10
$80</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Aqua III</span><span>Aqua III
A. Shanet
11.5 x 10
$80</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Fire 1</span><span>Fire 1
A. Shanet
11.5 x 10
$80</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Fire 2</span><span>Fire 2
A. Shanet
11.5 x 10
$80</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Fire 3</span><span>Fire 3
A. Shanet
11.5 x 10
$80</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Alone</span><span>Alone
Carol Shelton
14 x 20
$290</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Blue Rocks</span><span>Blue Rocks
Carol Shelton
14 x 20
$290</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Home At Last</span><span>Home At Last
Carol Shelton
14 x 20
$290</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Isle of Skye</span><span>Isle of Skye
Carol Shelton
14 x 20
$290</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Moose Harbour</span><span>Moose Harbour
Carol Shelton
14 x 20
$290</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Petty Harbour</span><span>Petty Harbour
Carol Shelton
14 x 20
$290</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>South Shore</span><span>South Shore
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>The Crooked Hill</span><span>The Crooked Hill
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>The Picnic</span><span>The Picnic
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>The Caretaker</span><span>The Caretaker
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>The Meeting</span><span>The Meeting
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>The Crooked Hill</span><span>The Crooked Hill
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Twilling Gate</span><span>Twilling Gate
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Arbor Rose</span><span>Arbor Rose
Greg Singley
31.5 x 24
$330</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 86</span><span>height</span><span> 128</span><span>Blue Gate</span><span>Blue Gate
Greg Singley
31.5 x 24
$330</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 86</span><span>height</span><span> 128</span><span>Cascading  Rose</span><span>Cascading  Rose
Greg Singley
31.5 x 24
$330</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 86</span><span>height</span><span> 128</span><span>Euro Garden I</span><span>Euro Garden I
Greg Singley
33 x 25
$330</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 93</span><span>height</span><span> 127</span><span>Euro Garden II</span><span>Euro Garden II
Greg Singley
33 x 25
$330</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 94</span><span>height</span><span> 128</span><span>Spring Medley Revisited II</span><span>Spring Medley Revisited II
Greg Singley
30 x 24
$360</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 99</span><span>height</span><span> 127</span><span>White Rose Arbor</span><span>White Rose Arbor
Greg Singley
31.5 x 24
$330</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 85</span><span>height</span><span> 128</span><span>Summer Passion</span><span>Summer Passion</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Yesterday</span><span>Yesterday</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Woodland Fantasy</span><span>Woodland Fantasy</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Winter Wonderland</span><span>Winter Wonderland</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>The Old Maple</span><span>The Old Maple</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Scarecrow</span><span>Scarecrow</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Still Waters</span><span>Still Waters
Murray Smith
14 x 20
$260</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Still Morning</span><span>Still Morning
Murray Smith
14 x 20
$260</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Summer Passion</span><span>Summer Passion
Murray Smith
14 x 20
$260</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Scarecrow</span><span>Scarecrow
Murray Smith
14 x 20
$260</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>The Old Maple</span><span>The Old Maple
Murray Smith
14 x 20
$260</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Winter Wonderland</span><span>Winter Wonderland
Murray Smith
14 x 20
$260</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Woodland Fantasy</span><span>Woodland Fantasy
Murray Smith
14 x 20
$260</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Yesterday</span><span>Yesterday
Murray Smith
14 x 20
$260</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Gingerbread</span><span>Gingerbread
Murray Smith
14 x 20
$260</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Sentinel</span><span>Sentinel
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Scarecrow</span><span>Scarecrow</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Gingerbread</span><span>Gingerbread
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Betsy</span><span>Betsy
Murray Smith
14 x 20
$260</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Awaiting the Return</span><span>Awaiting the Return
Murray Smith
14 x 20
$260</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Harborside I</span><span>Harborside I
Norman Smith
19.5 x 25
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Harborside II</span><span>Harborside II
Norman Smith
19.25 x 24
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Harborside III</span><span>Harborside III
Norman Smith
19.5 x 25
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Harborside 4</span><span>Harborside 4
Norman Smith
15 x 11.5
$270</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Summer Through the window, 1987</span><span>Summer Through the window, 1987
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Time Changes, 1997</span><span>Time Changes, 1997</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Banjo Music, 1998</span><span>Banjo Music, 1998
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Blue Garden Window, 1997</span><span>Blue Garden Window, 1997
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Blues From the Night, 1987</span><span>Blues From the Night, 1987
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Daytime Rising, 1987</span><span>Daytime Rising, 1987
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Deep Breathing, 1997</span><span>Deep Breathing, 1997
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Dreaming of Summer, 1988</span><span>Dreaming of Summer, 1988
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Favorite Spaces, 1997</span><span>Favorite Spaces, 1997
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Five Songs, 1997</span><span>Five Songs, 1997
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Four Aces, 1997</span><span>Four Aces, 1997
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Near Srping, 1987</span><span>Near Srping, 1987
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Odd Numbers, 1998</span><span>Odd Numbers, 1998
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Off the Wall, 1978</span><span>Off the Wall, 1978
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Painting to Music, 1998</span><span>Painting to Music, 1998
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Salt Air, 1987</span><span>Salt Air, 1987
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Space for Spring, 1998</span><span>Space for Spring, 1998
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Summer Air, 1987</span><span>Summer Air, 1987
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Summer Jazz, 1987</span><span>Summer Jazz, 1987
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 96</span><span>height</span><span> 128</span><span>Sailor's Revelry</span><span>Sailor's Revelry
</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Snow Mist</span><span>Snow Mist
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Victorian Brick</span><span>Victorian Brick
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Whimsical Orchard</span><span>Whimsical Orchard
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>White Christmas</span><span>White Christmas
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Winter's End</span><span>Winter's End
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Blowing Snow</span><span>Blowing Snow
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Cityscape</span><span>Cityscape
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Evergreen</span><span>Evergreen
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Fall Colours</span><span>Fall Colours
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Old Houses</span><span>Old Houses
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Prince Edward County</span><span>Prince Edward County
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Red Barn</span><span>Red Barn
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span><span>Row on Row</span><span>Row on Row
Tom Mathews
14 x 20
$160</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 128</span><span>height</span><span> 96</span></noscript>
<?php endif; ?>
</div>
<footer class="entry-footer">
<?php gcc_wp_2018_entry_footer(); ?>
</footer><!-- .entry-footer -->
<?php get_sidebar(); ?>
</div><!--.pagecontent-->
<?php endwhile; // End of the loop. ?>
</article>
<?php
get_footer();