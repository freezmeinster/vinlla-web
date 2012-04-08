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
        echo "\t\t<div class=\"testimonialContainer\">
\t\t\t<div id=\"boxHeading\">
\t\t\t\t<h3>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fitur"), "nama"), "html", null, true);
        echo "</h3>
\t\t\t</div> <!-- end boxHeading -->
\t\t\t
\t\t\t<ul class=\"testimonials\">
\t\t\t\t<li>
\t\t\t\t\t";
        // line 11
        echo $this->getAttribute($this->getContext($context, "fitur"), "keterangan");
        echo "
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
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
