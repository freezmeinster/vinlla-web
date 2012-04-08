<?php

/* VinllaLandingBundle:Admin:info_update.html.twig */
class __TwigTemplate_75a7742035ed4ec1bdb71d93ad307fcf extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VinllaLandingBundle_admin_info_update", array("id" => $this->getContext($context, "info_id"))), "html", null, true);
        echo "\" method=\"POST\" class=\"form\">
\t
            <fieldset>
                <div class=\"widget\">
                    <div class=\"title\"><h6>Tambah Fitur</h6></div>

                    <div class=\"formRow\">
                        <div class=\"formLeft\">";
        // line 15
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "judul"));
        echo "</div>
                        <div class=\"clear\"></div>
                    </div>
\t\t\t\t<div class=\"formRow\">
                        <div class=\"formLeft\">";
        // line 19
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "slug"));
        echo "</div>
                        <div class=\"clear\"></div>
                    </div>
\t\t\t\t
\t\t\t\t<div class=\"widget\">
                        <div class=\"formLeft\">";
        // line 24
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "isi"), array("attr" => array("class" => "editor")));
        echo "</div>
                        <div class=\"clear\"></div>
                    </div>
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
                    <div class=\"formSubmit\"><input type=\"submit\" value=\"Perbarui\" class=\"redB\" /></div>
                    <div class=\"clear\"></div>

\t\t\t\t</div>
\t\t\t</fieldset>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "VinllaLandingBundle:Admin:info_update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
