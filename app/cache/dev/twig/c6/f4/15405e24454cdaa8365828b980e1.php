<?php

/* VinllaLandingBundle:Admin:feature_add.html.twig */
class __TwigTemplate_c6f415405e24454cdaa8365828b980e1 extends Twig_Template
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
        echo "Tambah Fitur Vinlla";
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
  <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VinllaLandingBundle_admin_feature_add"), "html", null, true);
        echo "\" method=\"POST\" class=\"form\">
\t
            <fieldset>
                <div class=\"widget\">
                    <div class=\"title\"><h6>Tambah Fitur</h6></div>

                    <div class=\"formRow\">
                        <div class=\"formLeft\">";
        // line 15
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "nama"));
        echo "</div>
                        <div class=\"clear\"></div>
                    </div>
\t\t\t\t
\t\t\t\t<div class=\"formRow\">
                        <div class=\"formLeft\">";
        // line 20
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "keterangan"));
        echo "</div>
                        <div class=\"clear\"></div>
                    </div>
\t\t\t\t\t";
        // line 23
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
        return "VinllaLandingBundle:Admin:feature_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
