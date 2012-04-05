<?php

/* VinllaLandingBundle:Default:download.html.twig */
class __TwigTemplate_4548bde2959e2a924f998ef6d2b7439c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VinllaLandingBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "\t\t\t\t

\t\t<!-- Product Testimonial Section Starts Here -->
\t\t<div class=\"testimonialContainer\">
\t\t\t<div id=\"boxHeading\">
\t\t\t\t<h3>Dapatkan Vinlla Sekarang </h3>
\t\t\t</div> <!-- end boxHeading -->
\t\t\t
\t\t\t<ul class=\"testimonials\">
\t\t\t\t<li>
\t\t\t\t\tDownload Vinlla Node dan Nodemanager di sini :
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div> <!-- end testimonials -->
\t\t

\t\t
";
    }

    public function getTemplateName()
    {
        return "VinllaLandingBundle:Default:download.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
