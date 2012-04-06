<?php

/* VinllaLandingBundle:Admin:base.html.twig */
class __TwigTemplate_f545afe4a1d27d1772ab2aed2b036869 extends Twig_Template
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

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">

<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;\" />
<title>Crown - premium responsive admin template for backend systems</title>
<link href=\"/bundles/vinllalanding/admin/css/main.css\" rel=\"stylesheet\" type=\"text/css\" />

<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/jquery.min.js\"></script>

<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/spinner/ui.spinner.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/spinner/jquery.mousewheel.js\"></script>

<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/jquery-ui.min.js\"></script>

<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/charts/excanvas.min.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/charts/jquery.flot.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/charts/jquery.flot.orderBars.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/charts/jquery.flot.pie.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/charts/jquery.flot.resize.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/charts/jquery.sparkline.min.js\"></script>

<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/forms/uniform.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/forms/jquery.cleditor.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/forms/jquery.validationEngine-en.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/forms/jquery.validationEngine.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/forms/jquery.tagsinput.min.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/forms/autogrowtextarea.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/forms/jquery.maskedinput.min.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/forms/jquery.dualListBox.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/forms/jquery.inputlimiter.min.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/forms/chosen.jquery.min.js\"></script>

<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/wizard/jquery.form.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/wizard/jquery.validate.min.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/wizard/jquery.form.wizard.js\"></script>

<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/uploader/plupload.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/uploader/plupload.html5.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/uploader/plupload.html4.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/uploader/jquery.plupload.queue.js\"></script>

<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/tables/datatable.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/tables/tablesort.min.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/tables/resizable.min.js\"></script>

<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/ui/jquery.tipsy.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/ui/jquery.collapsible.min.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/ui/jquery.prettyPhoto.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/ui/jquery.progress.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/ui/jquery.timeentry.min.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/ui/jquery.colorpicker.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/ui/jquery.jgrowl.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/ui/jquery.breadcrumbs.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/ui/jquery.sourcerer.js\"></script>

<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/calendar.min.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/plugins/elfinder.min.js\"></script>

<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/custom.js\"></script>

<script type=\"text/javascript\" src=\"/bundles/vinllalanding/admin/js/charts/chart.js\"></script>

</head>

<body>
<!-- Left side content -->
<div id=\"leftSide\">
    <div class=\"logo\"><a href=\"index.html\"><img src=\"/bundles/vinllalanding/admin/images/logo.png\" alt=\"\" /></a></div>
    
    <!-- Left navigation -->
    <ul id=\"menu\" class=\"nav\">
        <li class=\"dash\"><a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VinllaLandingBundle_admin_index"), "html", null, true);
        echo "\" title=\"\" class=\"active\"><span>Dashboard</span></a></li>
        <li class=\"charts\"><a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VinllaLandingBundle_admin_feature_list"), "html", null, true);
        echo "\" title=\"\"><span>Feature Control</span></a></li>
        <li class=\"forms\"><a href=\"#\" title=\"\" class=\"exp\"><span>Forms stuff</span><strong>4</strong></a>
            <ul class=\"sub\">
                <li><a href=\"forms.html\" title=\"\">Form elements</a></li>
                <li><a href=\"form_validation.html\" title=\"\">Validation</a></li>
                <li><a href=\"form_editor.html\" title=\"\">WYSIWYG and file uploader</a></li>
                <li class=\"last\"><a href=\"form_wizards.html\" title=\"\">Wizards</a></li>
            </ul>
        </li>
    </ul>
</div>


<!-- Right side -->
<div id=\"rightSide\">

    <!-- Top fixed navigation -->
    <div class=\"topNav\">
        <div class=\"wrapper\">
            <div class=\"welcome\"><a href=\"#\" title=\"\"><img src=\"/bundles/vinllalanding/admin/images/userPic.png\" alt=\"\" /></a><span>Howdy, Eugene!</span></div>
            <div class=\"userNav\">
                <ul>
                    <li><a href=\"login.html\" title=\"\"><img src=\"/bundles/vinllalanding/admin/images/icons/topnav/logout.png\" alt=\"\" /><span>Logout</span></a></li>
                </ul>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>
    
    
    <!-- Title area -->
    <div class=\"titleArea\">
        <div class=\"wrapper\">
            <div class=\"pageTitle\">
                <h5>";
        // line 108
        $this->displayBlock('title', $context, $blocks);
        echo "</h5>
                <span>";
        // line 109
        $this->displayBlock('tag', $context, $blocks);
        echo "</span>
            </div>
           
            <div class=\"clear\"></div>
        </div>
    </div>
    
    <div class=\"line\"></div>
    
    <!-- Main content wrapper -->
    <div class=\"wrapper\">
    ";
        // line 120
        $this->displayBlock('main', $context, $blocks);
        // line 122
        echo "    </div>
    
    <!-- Footer line -->
    <div id=\"footer\">
        <div class=\"wrapper\">Hahahah</a></div>
    </div>

</div>

<div class=\"clear\"></div>
</body>

</html>";
    }

    // line 108
    public function block_title($context, array $blocks = array())
    {
    }

    // line 109
    public function block_tag($context, array $blocks = array())
    {
    }

    // line 120
    public function block_main($context, array $blocks = array())
    {
        // line 121
        echo "\t";
    }

    public function getTemplateName()
    {
        return "VinllaLandingBundle:Admin:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
