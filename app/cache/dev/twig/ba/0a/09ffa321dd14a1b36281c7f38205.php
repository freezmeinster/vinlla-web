<?php

/* VinllaLandingBundle:Admin:feature_list.html.twig */
class __TwigTemplate_ba0a09ffa321dd14a1b36281c7f38205 extends Twig_Template
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
        echo "List fitur Vinlla";
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
        echo " <div class=\"widget\">

            <div class=\"title\"><h6>List Fiture</h6></div>                          
            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display dTable\">
            <thead>
            <tr>
            <th>Fitur</th>
            <th>Keterangan</th>
\t\t\t<th>Aksi</th>
            </tr>
            </thead>
            <tbody>
\t\t\t";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fiturs"));
        foreach ($context['_seq'] as $context["_key"] => $context["fitur"]) {
            // line 20
            echo "            <tr class=\"gradeX\">
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fitur"), "nama"), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fitur"), "keterangan"), "html", null, true);
            echo "</td>
\t\t\t<td>
\t\t\t\t<a style=\"margin: 5px;\" class=\"smallButton\" title=\"\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VinllaLandingBundle_admin_feature_update", array("id" => $this->getAttribute($this->getContext($context, "fitur"), "id"))), "html", null, true);
            echo "\">
\t\t\t\t\t<img alt=\"\" src=\"/bundles/vinllalanding/admin/images/icons/color/pencil.png\">
\t\t\t\t</a></td>
            </tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fitur'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 29
        echo "            </tbody>
            </table>  
        </div>
\t\t<div class=\"horControlB\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<a title=\"\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VinllaLandingBundle_admin_feature_add"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img alt=\"\" src=\"/bundles/vinllalanding/admin/images/icons/control/16/pencil.png\">
\t\t\t\t\t\t<span>Tambah Fitur</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "VinllaLandingBundle:Admin:feature_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
