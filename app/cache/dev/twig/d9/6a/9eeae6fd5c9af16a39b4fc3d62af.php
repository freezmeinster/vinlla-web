<?php

/* VinllaLandingBundle:Default:index.html.twig */
class __TwigTemplate_d96a9eeae6fd5c9af16a39b4fc3d62af extends Twig_Template
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
        echo "\t\t\t\t<!-- Product Heading Section Starts Here -->
\t\t<div class=\"productHeadingType1\">
\t\t\t<img src=\"/bundles/vinllalanding/img/productBox.jpg\" alt=\"Conversion - Premium Landing Page\" class=\"productImg fl\" />
\t\t\t
\t\t\t<div class=\"productText fl\">
\t\t\t\t<h1>Vinlla Cloud</h1>
\t\t\t\t
\t\t\t\t<ul class=\"checkList\">
\t\t\t\t\t<li>Mendukung Sistem Operasi 32-Bit dan 64-Bit </li>
\t\t\t\t</ul>
\t\t\t</div> <!-- end productText -->
\t\t\t
\t\t\t<div class=\"productPrice fr\">
\t\t\t\t<div class=\"productPriceContainer\">
\t\t\t\t\t<div id=\"buttonDarkBG\">
\t\t\t\t\t\t<a class=\"buttonLink\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VinllaLandingBundle_download"), "html", null, true);
        echo "\" title=\"\">Unduh Gratis</a>
\t\t\t\t\t</div> <!-- end buttonDarkBG -->
\t\t\t\t</div> <!-- end productPriceContainer -->
\t\t\t</div> <!-- end productPrice -->
\t\t</div> <!-- end productHeadingType1 -->
\t\t<div class=\"tabbedArea\">
\t\t\t<div class=\"tabHeading\">
\t\t        <ul class=\"tabs\">  
\t\t            <li class=\"active\"><a href=\"#tab1\">Tentang Vinlla</a></li>  
\t\t            <li><a href=\"#tab2\">Arsitektur Vinlla</a></li>
\t\t\t\t\t<li><a href=\"#tab3\">Instalasi Vinlla</a></li>
\t\t        </ul>
\t        </div> <!-- end tabHeading -->
\t  \t\t
\t  \t\t<div class=\"tabContainer\">
\t\t        <div class=\"tabContent\" id=\"tab1\" style=\"display: none;\">
\t\t        \t<p>This section can be used to showcase a product image or just to show text.</p>

\t\t        \t<p>
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porta commodo varius. Etiam gravida, nibh in luctus dictum, nisl justo dictum odio, id imperdiet metus lorem varius eros. 
\t\t\t\t\t</p><p>
\t\t\t\t\tDonec vitae elit orci. In sit amet eros sit amet nunc lobortis volutpat a non lectus. Nam magna augue, interdum sed placerat vel, rhoncus id metus. Donec a pulvinar augue. Sed interdum viverra vulputate. Cras \t\t\t\t\tsuscipit condimentum ipsum non congue. In gravida molestie sapien, eu ultricies tortor rhoncus quis. 
\t\t\t\t\t
\t\t\t\t\t</p><p>Pellentesque vestibulum nisl quis dui bibendum feugiat rhoncus nunc adipiscing. Mauris vel magna eget mi egestas rhoncus. Suspendisse vitae turpis et arcu tristique auctor luctus non lorem.
\t\t        \t</p>
\t\t        </div>  
\t\t        <div class=\"tabContent\" id=\"tab2\" style=\"display: none;\">
\t\t        \t<h2>Section title</h2>
\t\t        \t<p>
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porta commodo varius. Etiam gravida, nibh in luctus dictum, nisl justo dictum odio, id imperdiet metus lorem varius eros. 
\t\t\t\t\t</p><p>
\t\t\t\t\tDonec vitae elit orci. In sit amet eros sit amet nunc lobortis volutpat a non lectus. Nam magna augue, interdum sed placerat vel, rhoncus id metus. Donec a pulvinar augue. Sed interdum viverra vulputate. Cras \t\t\t\t\tsuscipit condimentum ipsum non congue. In gravida molestie sapien, eu ultricies tortor rhoncus quis. 
\t\t\t\t\t
\t\t\t\t\t</p><p>Pellentesque vestibulum nisl quis dui bibendum feugiat rhoncus nunc adipiscing. Mauris vel magna eget mi egestas rhoncus. Suspendisse vitae turpis et arcu tristique auctor luctus non lorem.
\t\t        \t</p>
\t\t        </div>
\t        </div> <!-- end tabContainer -->
\t\t</div>

\t\t
";
    }

    public function getTemplateName()
    {
        return "VinllaLandingBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
