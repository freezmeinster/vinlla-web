<?php

/* VinllaLandingBundle:Default:feature.html.twig */
class __TwigTemplate_344ff62efc1b1b03c7ed69fbf033d585 extends Twig_Template
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
\t\t\t\t<h3>Our Customers About Us</h3>
\t\t\t</div> <!-- end boxHeading -->
\t\t\t
\t\t\t<ul class=\"testimonials\">
\t\t\t\t<li>
\t\t\t\t\tThis is a great product. I got it a while ago and i couldn’t be happier with my choice. 
\t\t\t\t\tIt’s definitely a good investment if you work in my field.
\t\t\t\t\t<br /><br />
\t\t\t\t\t<span>John Doe, CEO Great Company</span>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\tAnother great testimonial.
\t\t\t\t\t<br /><br />
\t\t\t\t\t<span>Author, CEO Great Company</span>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div> <!-- end testimonials -->
\t\t

\t\t
";
    }

    public function getTemplateName()
    {
        return "VinllaLandingBundle:Default:feature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
