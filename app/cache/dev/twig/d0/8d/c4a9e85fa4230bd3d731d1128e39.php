<?php

/* VinllaLandingBundle:Admin:media_add.html.twig */
class __TwigTemplate_d08dc4a9e85fa4230bd3d731d1128e39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'tag' => array($this, 'block_tag'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VinllaLandingBundle:Admin:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Tambah Media Vinlla";
    }

    // line 4
    public function block_tag($context, array $blocks = array())
    {
        echo "Anda dapat melakukan manajemen infromasi dari list fitur vinlla ";
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
\t<form action=\"#\" method=\"post\" ";
        // line 8
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    <fieldset>
                <div class=\"widget\">
                    <div class=\"title\"><h6>Tambah Media</h6></div>

                    <div class=\"formRow\">
                        <div class=\"formLeft\">";
        // line 14
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "name"));
        echo "</div>
                        <div class=\"clear\"></div>
                    </div>
\t\t\t\t<div class=\"formRow\">
                        <div class=\"formLeft\">";
        // line 18
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "file"));
        echo "</div>
                        <div class=\"clear\"></div>
                    </div>

\t\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
                    <div class=\"formSubmit\"><input type=\"submit\" value=\"Tambah\" class=\"redB\" /></div>
                    <div class=\"clear\"></div>

\t\t\t\t</div>
\t\t\t</fieldset>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "VinllaLandingBundle:Admin:media_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
