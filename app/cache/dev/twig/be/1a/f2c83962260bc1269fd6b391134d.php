<?php

/* VinllaLandingBundle:Default:base.html.twig */
class __TwigTemplate_be1af2c83962260bc1269fd6b391134d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">

<head>
\t<title>Vinlla, A Simple Community Cloud Hosting</title>
\t<meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/vinllalanding/css/font.css\" type=\"text/css\" media=\"screen\" />
\t<link rel=\"stylesheet\" href=\"/bundles/vinllalanding/css/reset.css\" type=\"text/css\" media=\"screen\" /> 
\t<link rel=\"stylesheet\" href=\"/bundles/vinllalanding/css/master.css\" type=\"text/css\" media=\"screen\" /> 
\t<link rel=\"stylesheet\" href=\"/bundles/vinllalanding/css/skin.css\" type=\"text/css\" media=\"screen\" /> 
\t<link rel=\"stylesheet\" href=\"/bundles/vinllalanding/css/tipsy.css\" type=\"text/css\" media=\"screen\" /> 

\t<script src=\"/bundles/vinllalanding/js/jquery-1.4.4.min.js\" type=\"text/javascript\"></script>
\t<script src=\"/bundles/vinllalanding/js/jquery.tipsy.js\" type=\"text/javascript\"></script>
\t<script src=\"/bundles/vinllalanding/js/functions.js\" type=\"text/javascript\"></script>
\t<script src=\"/bundles/vinllalanding/js/css_browser_selector.js\" type=\"text/javascript\"></script>

\t<!--[if IE 6]>
\t<link rel=\"stylesheet\" href=\"css/ie6.css\" type=\"text/css\" media=\"screen\" /> 
\t<script src=\"js/ie6pngFix.js\"></script>
\t<script>
\t\tDD_belatedPNG.fix('#logoFixPNG, .topSeparator, .productPrice, ul.iconBulletList img, #arrowButtonFixPNG, .footerSeparator, a.buttonLink');
\t</script>
\t<![endif]-->
<!--<script type=\"text/javascript\">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15706088-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>-->
</head>

<body>
\t<div id=\"mainWrapper\">
\t\t<!-- Top Section Starts Here -->
\t\t<div id=\"topWrapper\">
\t\t\t<div class=\"logo fl\">
\t\t\t\t<a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VinllaLandingBundle_homepage"), "html", null, true);
        echo "\" title=\"Conversion - Premium Landing Page\"><img src=\"/bundles/vinllalanding/images/vinllalogo.png\" width=\"250px\" id=\"logoFixPNG\" /></a>
\t\t\t</div> <!-- end logo -->
\t\t\t
\t\t\t
\t\t\t<ul class=\"socialNav fr\">
\t\t\t\t<li><a href=\"#\" title=\"Facebook\"><img src=\"/bundles/vinllalanding/img/social/facebook.png\" alt=\"Facebook\" /></a></li>
\t\t\t\t<li><a href=\"#\" title=\"Twitter\"><img src=\"/bundles/vinllalanding/img/social/twitter.png\" alt=\"Twitter\" /></a></li>
\t\t\t</ul>
\t\t</div> <!-- end topWrapper -->
\t\t";
        // line 53
        $this->displayBlock('main', $context, $blocks);
        // line 55
        echo "\t\t<div class=\"horizontalSep\"><!-- --></div>


\t\t<!-- Footer Section Starts Here -->
\t\t<div class=\"footerMenu\">
\t\t\t<div class=\"fl\" id=\"socialMedia\">
\t\t\t\t<h3>Ikuti Perkembangan Kami</h3>
\t\t\t\t
\t\t\t\t<p>Anda dapat mengikuti perkembangan Vinlla lewat Media Sosial</p>
\t\t\t\t
\t\t\t\t<ul class=\"socialNav\">
\t\t\t\t\t<li><a href=\"#\" title=\"Facebook\"><img src=\"/bundles/vinllalanding/img/social/facebook.png\" alt=\"Facebook\" /></a></li>
\t\t\t\t\t<li><a href=\"#\" title=\"Twitter\"><img src=\"/bundles/vinllalanding/img/social/twitter.png\" alt=\"Twitter\" /></a></li>
\t\t\t\t</ul>
\t\t\t</div> <!-- end socialMedia -->
\t\t\t
\t\t\t<div class=\"footerSeparator fl\"><!-- --></div>
\t\t\t
\t\t\t<div id=\"subscribe\" class=\"fl\">
\t\t\t\t<h3>Status Pengembangan</h3>
\t\t\t\t
\t\t\t\t<p>Vinlla sedang dalam tahap Alfa 1</p>
\t\t\t\t
\t\t\t</div> <!-- end subscribe -->
\t\t\t
\t\t\t<div class=\"footerSeparator fl\"><!-- --></div>

\t\t\t<div id=\"contactInformation\" class=\"fl\">
\t\t\t\t<h3>Kontak Kami</h3>
\t\t\t\t
\t\t\t\t<p>Gedung Ilkom (FPMIPA-C)<br/>
\t\t\t\tJl. Dr. Setiabudhi 229 Bandung 40154<br/>
\t\t\t\tJawa Barat, Indonesia <br/>
\t\t\t\tTelp: 085279916229<br /><br />
\t\t\t\t
\t\t\t\t<a href=\"mailto:contact@mycompany.com\" title=\"Send us a message\">vinlla@poss-upi.org</a>
\t\t\t\t</p>
\t\t\t</div> <!-- end contactInformation -->
\t\t</div> <!-- end footerMenu -->
\t</div> <!-- end mainWrapper -->
\t
\t<div id=\"footerInformation\">
\t\t<p>&copy; Copyright 2012 POSS-UPI Infrastructure Development Team. All rights reserved.</p>
\t</div> <!-- end footerInformation -->
</body>
</html>";
    }

    // line 53
    public function block_main($context, array $blocks = array())
    {
        // line 54
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "VinllaLandingBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
