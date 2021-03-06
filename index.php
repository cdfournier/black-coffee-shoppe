<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $headers = 'From: Black Coffee Shoppe';
    $to = 'info@blackcoffeeshoppe.com';
    $subject = 'Black Coffee Shoppe Contact Form';

    $body = "From: $name\n E-Mail: $email\n Phone: $phone\n Message:\n $message";

	if ($_POST['submit']) {
		if (mail ($to, $subject, $body, $from)) {
		$feedback = '<p>Thank you. Your message has been sent. We&#39;ll be in touch soon.</p>';
	} else {
		$feedback = '<p>Oops. Something went wrong. Would you please try again?</p>';
	}
	}
?>

<!doctype html>
<html lang="en">


<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Black Coffee Shoppe specializes in providing creative services for small businesses. We also do pro bono work for certified charitable organizations.">
<meta name="author" content="Chris Fournier">
<meta name="keywords" content="Black Coffee, black coffee, coffee, black coffee shoppe, shoppe, marketing, design, creative, strategy, management, communication, Christopher Fournier, Chris Fournier">
<meta name="google-site-verification" content="YgnQtrZEtnYHo_da7UW1Ixj8NRA9WNH4MvU5nW0nBvA" />

<title>Black Coffee Shoppe Creative Design</title>

<!-- vendor css files -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">

<!-- brand css files -->
<link rel="stylesheet" href="assets/css/master.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44441011-1', 'auto');
  ga('require', 'autotrack');
  ga('send', 'pageview');
</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>
<script async src='assets/js/autotrack.js'></script>

</head>


<body>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MS7JQ9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MS7JQ9');</script>
<!-- End Google Tag Manager -->

<header>
  <nav>
  	<ul role="menubar">
  		<li role="menuitem"><a href="#about" data-scroll>About</a></li>
  		<li role="menuitem"><a href="#contact" data-scroll>Contact</a></li>
  	</ul>
	</nav>
</header> <!-- close header -->

<div class="content" role="main">

<section id="welcome">
  <div class="logo reveal"><object type="image/svg+xml" data="assets/img/logo.svg"><img class="reveal" src="assets/img/logo.png" alt="Black Coffee Shoppe logo"></object></div>
  <h1 class="reveal">Black Coffee Shoppe delivers hand-crafted strategies, concepts and designs. And we love great coffee.</h1>
</section> 
<!-- close welcome -->

<div id="cafe"></div>

<section id="about">
  <h1 style="display: none;">About Black Coffee Shoppe</h1>
  <article class="reveal">
  <h2>Black Coffee Shoppe is a small collective of diverse creative professionals with a passion for executing big ideas.</h2>
  <p>We specialize in creative services for small businesses and also do pro bono work for certified charitable organizations. We've created a fluid business model that enables us to work in scalable, agile teams driven by measurable results, productivity and deadlines. This means we are only as big as you need us to be.</p>
  <p>We offer a range of services that are unique to each client's needs and each project. Our specialties include web design &amp; development, print collateral design and branding.</p>
  </article>
  <aside class="reveal">
  <h3>Services</h3>
  <ul>
    <li>Design &amp; Development</li>
    <li>Responsive websites</li>
    <li>Content Management Systems</li>
    <li>Web Design</li>
    <li>Brand development</li>
    <li>Brand guidelines</li>
    <li>Research</li>
    <li>Positioning</li>
    <li>Photography</li>
    <li>Signage</li>
    <li>Merchandising</li>
    <li>Point of sale</li>
    <li>Packaging</li>
  </ul>
  </aside>
</section> 
<!-- close about -->

<div id="chemex"></div>

<!-- <div id="espresso"></div> -->

<section id="contact">
  <h1 style="display: none;">Contact Black Coffee Shoppe</h1>
  <article class="reveal">
	<p>For more information about us, if you have a project in mind, or if you would like to sit down for coffee, please fill out the form below and we will get in touch with you. Please include your telephone number. We will not respond to inquiries that do not include a telephone number.</p>
	</article>
	<div id="feedback"><? echo $feedback; ?></div>
  <form id="contact-form" class="reveal" method="post" action="index.php#contact" autocomplete="on">
    <div class="field">
      <input type="text" name="name" id="name" placeholder="Your Name" required>
      <label for="name">Name</label>
    </div>
    <div class="field">
      <input type="email" name="email" id="email" placeholder="Your Email" required>
      <label for="email">Email</label>
    </div>
    <div class="field">
      <input type="tel" name="phone" id="phone" placeholder="Your Phone" required>
      <label for="phone">Phone</label>
    </div>
    <div class="field">
      <input type="text" name="message" id="message" placeholder="What do you have in mind?" required>
      <label for="message">Message</label>
    </div>  
    <button id="submit" type="submit" name="submit" value="Submit">Send</button>
  </form>
</section>
<!-- close contact -->

<footer>
  <p>Copyright &copy;2017 Black Coffee Shoppe</p>
</footer>

</div>
<!-- close content -->

<!-- javascript libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="assets/js/blackcoffeeshoppe.js"></script>
<script src="https://cdn.jsdelivr.net/scrollreveal.js/3.0.9/scrollreveal.min.js"></script>
<script>
  window.sr = ScrollReveal({ reset: true });
  sr.reveal('.reveal');
</script>


</body>
</html>