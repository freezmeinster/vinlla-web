<?php

/* VinllaLandingBundle:Admin:index.html.twig */
class __TwigTemplate_8d6d2b31a3657d229d56f4e094ff964f extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return "VinllaLandingBundle:Admin:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "VinllaLandingBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
