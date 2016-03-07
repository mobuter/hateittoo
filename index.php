<?php
include 'global_html.php';

if(file_exists('tour.xml')) {
    $tour = simplexml_load_file('tour.xml');
	$listTour  = '';
    foreach($tour->show as $show) {		
		$facebookLink = '';
		if($show->facebook) { $facebookLink = anchor("Facebook",$show->facebook,'target="_blank" class="facebook"'); }
		$listTour .= tr(td(p($show->date,'class="date"').p($show->location,'class="location"')).td($facebookLink));
	}
}

$htmlOutput = 
'<!DOCTYPE html>'
.html(
	head(
		'<link rel="stylesheet" type="text/css" href="css/global.css">
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<script src="js/jquery-1.12.1.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">'
	)
	.body(
		div(
			div(
				div(
					h2(anchor(img('css/img/logo.png'),''),'class="logo"')
					.ul(
						li(anchor("Tour",'tour'))
						.li(anchor("About the band",'about'))
						.li(anchor("Purple Mountains",'purple-mountains'))
						.li(anchor("It's about time",'about-time'))
						.li(anchor("Contact",'contact'))
					)
				,'class="wrapper"')
			,'class="menu-content"')
		,'class="menu-wrapper"')
		.div(
			div('','class="texture-intro parallax" data-speed="5" data-element="texture-intro" data-method="background-position-y" data-direction="+"')
			.div('','class="second-texture-intro parallax" data-speed="20" data-element="second-texture-intro" data-method="background-position-y" data-direction="+"')
			.button("Menu",'class="menu-button"')
			.div(
				h1(anchor(img('css/img/logo.png'),''),'class="logo"')
				.anchor("More about Purple Mountains",'#','class="more-link button-link"')
			,'class="intro-content"')
			.anchor(span("Tour dates"),'','class="tour-button"')
		,'class="intro section"')
		
		.div(
			div('','class="texture-tour parallax" data-speed="5" data-element="texture-tour" data-method="background-position-y" data-direction="+"')
			.div('','class="second-texture-intro parallax" data-speed="20" data-element="second-texture-intro" data-method="background-position-y" data-direction="+"')
			.div(
				div(
					h2("Tour".span(" dates"))
					.anchor("Book Hate it Too",'mailto:hateittooband@gmail.com','class="button-link"')
				,'class="right-tour"')
				.div(
					table(
						$listTour
					)
				,'class="left-tour"')
			,'class="wrapper"')
		,'class="tour parallax" data-speed="15" data-element="tour" data-method="background-position-y" data-direction="-"')
		
		.div(
			div(
				div(
					h2(span("About ").span("the ")."band")
				,'class="left-about"')
				.div(
					p("Hate it Too started out in 2008, by the banks of the St-Lawrence River in Trois-Pistoles, Québec. The band, which at first was only a hobby for a couple of high school kids, turned out to be a more serious project as 2010 began.")
					.p("In the summer of 2012, the band moved to Québec City and recorded their first release: “It’s About Time”, which came out in November later that year. The EP consisted of the quartet’s best tracks since its inception.")
					.p("At the dawn of 2013, the Québec City outfit started working on its first full length record. It took nearly two years - and a bass player change - for the band to start recording its first effort, Purple Mountains. The debut album came out on August 18th, 2015. ")
					.p("Hate it too is currently promoting the album across the Province of Quebec and is looking forward for new opportunities to get their music heard around the globe. Purple Mountains, as well as the EP, has sold many copies in different places in Europe, Asia, South America and of course North America. They shared the stage with talented acts such as Gob, Bigwig, Seaway, Old Man Markley, The Brains, Mute, A Wilhelm Scream, Dance Laury Dance, Sandveiss, Cobra Skulls, The Hunters, and the list goes on. ")
				,'class="right-about"')
			,'class="wrapper"')
		,'class="about"')
		
		.div(
			div(
				div(
					img('css/img/cover-purple.png')
				,'class="right-album"')
				.div(
					h2("Purple".span(" Mountains"))
					.p("2015",'class="year"')
					.p("01. Twelve's the New Eight / 02. Be Sharps / 03. Empty Your Bottles / 04. Dead Again / 05. Eviction Notice / 06. Boats / 07. Anchors  / 08. Main St. / 09. Purple Mountains / 10. The Leap ",'class="tracklist"')
					.anchor("Watch Twelve’s the New Eight on Youtube",'https://www.youtube.com/watch?v=PfcB91JezJs','target="_blank" class="button-link"')
					.anchor("Listen on Bandcamp",'https://hateittoo.bandcamp.com/album/purple-mountains','target="_blank" class="button-link"')
				,'class="left-album"')
			,'class="wrapper"')
		,'class="purple-mountains parallax" data-speed="15" data-element="purple-mountains" data-method="background-position-y" data-direction="+"')
		
		.div(
			div(
				div(
					img('css/img/cover-about-time.png')
				,'class="left-album"')
				.div(
					h2("It's about".span(" time"))
					.p("2012",'class="year"')
					.p("01. Blistering Lights / 02. Highway Twenty / 03. The Gold Rush / 04. Sinking Habtis / 05. Bottled ",'class="tracklist"')
					.anchor("Listen on Bandcamp",'https://hateittoo.bandcamp.com/album/its-about-time-ep','target="_blank" class="button-link"')
					
				,'class="right-album"')
			,'class="wrapper"')
		,'class="about-time parallax" data-speed="15" data-element="about-time" data-method="background-position-y" data-direction="+"')
		
		.div(
			div(
				h2("Booking")
				.anchor("hateittooband@gmail.com",'mailto:hateittooband@gmail.com')
				
				.h2("Contact")
				.anchor("hateittooband@gmail.com",'mailto:hateittooband@gmail.com')
				
				.p("&copy; Hate it Too 2016 - All right reserved",'class="copyright"')
			,'class="wrapper"')
		,'class="contact section parallax" data-speed="15" data-element="contact" data-method="background-position-y" data-direction="-"')
	)
);

$onReadyJs = "
	$('.menu-button').click(function() {
		$('.menu-wrapper').toggleClass('move-in');
		return false;
	});

	$('.menu-wrapper ul a').click(function() {
		var destination = '.' + $(this).attr('href'),
		timer = $(destination).offset().top;
		if(timer > 2000) { timer = 2000; }
		
		$('body,html').animate({scrollTop: $(destination).offset().top }, timer);
		$('.menu-wrapper').toggleClass('move-in');
		return false;
	});

	$('.intro .more-link').click(function() {
		$('body,html').animate({scrollTop: $('.purple-mountains').offset().top }, 1500);
		return false;
	});

	$('.tour-button').click(function() {
		$('body,html').animate({scrollTop: $('.tour').offset().top }, 1500);
		return false;
	});
	
	$(window).scroll(function() {
		$('.parallax').each(function() {
			var element = '.' + $(this).data('element'),speed = $(this).data('speed'),direction = $(this).data('direction'),method = $(this).data('method'),element_position = $(this).offset().top, element_height = $(this).outerHeight(), window_position = $(window).scrollTop(),window_height = $(window).height(),position = 0;
			if(element_position <= (window_position + window_height) && window_position <= element_position + element_height ) {								
				position = ((window_position + window_height) - element_position) /100 * speed;
				$(element).css({ 'background-position-y':  direction + position + 'px' });
			}
		});
		
	});
	
	initWebsite();
	$(window).resize(function() { initWebsite(); });
";

$jsFunction = "
	function initWebsite() { 
		$('.section').css({'height':$(window).height()}); 
	}
";

echo $htmlOutput.'<script>'.$jsFunction.' $(document).ready(function() { '.$onReadyJs.' });</script>';

?>