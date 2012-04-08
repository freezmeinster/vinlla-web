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
\t\t\t\t\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fiturs"));
        foreach ($context['_seq'] as $context["_key"] => $context["fitur"]) {
            // line 13
            echo "\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VinllaLandingBundle_feature", array("id" => $this->getAttribute($this->getContext($context, "fitur"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fitur"), "nama"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fitur'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "\t\t\t\t</ul>
\t\t\t</div> <!-- end productText -->
\t\t\t
\t\t\t<div class=\"productPrice fr\">
\t\t\t\t<div class=\"productPriceContainer\">
\t\t\t\t\t<div id=\"buttonDarkBG\">
\t\t\t\t\t\t<a class=\"buttonLink\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VinllaLandingBundle_download"), "html", null, true);
        echo "\" title=\"\">Unduh Gratis</a>
\t\t\t\t\t</div> <!-- end buttonDarkBG -->
\t\t\t\t</div> <!-- end productPriceContainer -->
\t\t\t</div> <!-- end productPrice -->
\t\t</div> <!-- end productHeadingType1 -->
\t\t<div class=\"tabbedArea\">
\t\t\t<div class=\"tabHeading\">
\t\t        <ul class=\"tabs\">
\t\t\t\t\t";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "infos"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 30
            echo "\t\t            <li><a href=\"#tab";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "judul"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 32
        echo "\t\t        </ul>
\t        </div> <!-- end tabHeading -->
\t  \t\t
\t  \t\t<div class=\"tabContainer\">
\t\t\t\t";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "infos"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 37
            echo "\t\t        <div class=\"tabContent\" id=\"tab";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\" style=\"display: none;\">
\t\t\t\t\t";
            // line 38
            echo $this->getAttribute($this->getContext($context, "info"), "isi");
            echo "
\t\t        </div>
\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 41
        echo "\t        </div> <!-- end tabContainer -->
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
