<footer>
      <div class="wrapper">
        <a title="Pomiet" href="/"><img class="logo" src="<?php bloginfo('template_directory'); ?>/images/footer-logo.png" alt="Pomiet"></a>
        <!--<ul class="global-nav">
          <li><a title="Home" href="/">Home</a></li>
<!--          <li><a title="Contact Us" href="/contact-us/">Contact Us</a></li>--*>
          <li><a title="Jargon" href="/jargon/">Jargon</a></li>
        </ul>-->
        <div class="contact-info">
          <p>Pomiet<br>
          P.O. Box 49721<br>
          Dayton, OH 45449</p>
          <p>Email us at <a href="mailto:innovate@pomiet.com">innovate@pomiet.com</a>.</p>
        </div>
        <nav class="main-navigation">
          <a class="uncover<?php if(is_page('Uncover')){echo " current";} ?>" href="/uncover/" title="Uncover">Uncover</a>
          <a class="inspire<?php if(is_page('Inspire')){echo " current";} ?>" href="/inspire/" title="Inspire">Inspire</a>
          <a class="impact<?php if(is_page('Impact')){echo " current";} ?>" href="/impact/" title="Impact">Impact</a>
        </nav>

        <p class="copyright">The User-centered, Lean Software Development Partner</p>
        <p class="copyright">&copy;2012 Pomiet all rights reserved</p>
      </div>
    </footer>

	<?php wp_footer(); ?>


<!-- here comes the javascript -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>


<!--Typekit -->
<script type="text/javascript" src="http://use.typekit.com/esu1jeq.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<!-- Scripts -->
<script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/respond.min.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
	 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.
-->	 
<script type="text/javascript">

 var _gaq = _gaq || [];
 _gaq.push(['_setAccount', 'UA-26805738-1']);
 _gaq.push(['_trackPageview']);

 (function() {
   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 })();

</script>

	
</body>

</html>
