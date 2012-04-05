<?php

/* VinllaBlogBundle:Default:index.html.twig */
class __TwigTemplate_581b36209eb0685e1bcfba751195a5f6 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "VinllaBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
