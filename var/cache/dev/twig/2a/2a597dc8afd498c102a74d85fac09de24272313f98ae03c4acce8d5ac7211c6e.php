<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @admin/Product/product.twig */
class __TwigTemplate_3a91e52eed0e4be379e6a77c2bd2a24264e3235d5e2ac41a272a8df478364661 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/product.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/product.twig"));

        // line 13
        $context["menus"] = [0 => "product", 1 => "product_edit"];
        // line 22
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/product.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 16
        echo "\t";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_registration"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        // line 19
        echo "\t";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_management"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 25
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fileupload/jquery.fileupload.css", "admin"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fileupload/jquery.fileupload-ui.css", "admin"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">
\t<style>
\t\t#thumb div {
\t\t\tfloat: left;
\t\t\tmargin: 4px
\t\t}

\t\t.ui-state-highlight {
\t\t\theight: 70px;
\t\t\twidth: 70px;
\t\t\tborder: dashed 1px #ccc;
\t\t\tbackground: #fff;
\t\t}
\t</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 44
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/vendor/jquery.ui.widget.js", "admin"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.iframe-transport.js", "admin"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.fileupload.js", "admin"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.fileupload-process.js", "admin"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.fileupload-validate.js", "admin"), "html", null, true);
        echo "\"></script>
\t<script>
\t\tvar bootstrapTooltip = \$.fn.tooltip.noConflict();
\t</script>
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
\t<script>
\t\t\$.fn.tooltip = bootstrapTooltip;
\$(document).on('drop dragover', function (e) {
e.preventDefault();
});
\$(function () { // Todo: fix drag&drop style
\$(\"#thumb\").sortable({
cursor: 'move',
opacity: 0.7,
placeholder: 'ui-state-highlight',
update: function (event, ui) {
updateSortNo();
}
});";
        // line 66
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 66, $this->source); })()) == false)) {
            // line 67
            echo "if (\$(\"# ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "class", [], "any", false, false, false, 67), "stock_unlimited", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\").prop(\"checked\")) {
\$(\"# ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "class", [], "any", false, false, false, 68), "stock", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68), "html", null, true);
            echo "\").attr(\"disabled\", \"disabled\").val('');
} else {
\$(\"# ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "class", [], "any", false, false, false, 70), "stock", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70), "html", null, true);
            echo "\").removeAttr(\"disabled\");
}
\$(\"# ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "class", [], "any", false, false, false, 72), "stock_unlimited", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72), "html", null, true);
            echo "\").on(\"click change\", function () {
if (\$(this).prop(\"checked\")) {
\$(\"# ";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "class", [], "any", false, false, false, 74), "stock", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74), "html", null, true);
            echo "\").attr(\"disabled\", \"disabled\").val('');
} else {
\$(\"# ";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "class", [], "any", false, false, false, 76), "stock", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76), "html", null, true);
            echo "\").removeAttr(\"disabled\");
}
});";
        }
        // line 79
        echo "var proto_img = '<div class=\"c-form__fileUploadThumbnail\" style=\"background-image:url(\\'__path__\\');\">' + '<a class=\"delete-image\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>' + '</div>';
var proto_add = '";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "add_images", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "prototype", [], "any", false, false, false, 80), 'widget');
        echo "';
var proto_del = '";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "delete_images", [], "any", false, false, false, 81), "vars", [], "any", false, false, false, 81), "prototype", [], "any", false, false, false, 81), 'widget');
        echo "';";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "images", [], "any", false, false, false, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 82
            echo "var \$img = \$(proto_img.replace(/__path__/g, '";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "vars", [], "any", false, false, false, 82), "value", [], "any", false, false, false, 82), "save_image"), "html", null, true);
            echo "'));
var \$widget = \$('";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["image"], 'widget');
            echo "');
\$widget.val('";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "vars", [], "any", false, false, false, 84), "value", [], "any", false, false, false, 84), "html", null, true);
            echo "');
\$(\"#thumb\").append(\$img.append(\$widget));";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "add_images", [], "any", false, false, false, 86));
        foreach ($context['_seq'] as $context["_key"] => $context["add_image"]) {
            // line 87
            echo "var \$img = \$(proto_img.replace(/__path__/g, '";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["add_image"], "vars", [], "any", false, false, false, 87), "value", [], "any", false, false, false, 87), "temp_image"), "html", null, true);
            echo "'));
var \$widget = \$('";
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["add_image"], 'widget');
            echo "');
\$widget.val('";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["add_image"], "vars", [], "any", false, false, false, 89), "value", [], "any", false, false, false, 89), "html", null, true);
            echo "');
\$(\"#thumb\").append(\$img.append(\$widget));";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['add_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "delete_images", [], "any", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["delete_image"]) {
            // line 92
            echo "\$(\"#thumb\").append('";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["delete_image"], 'widget');
            echo "');";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delete_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "var hideThumbnail = function () {
if (\$(\"#thumb div\").length > 0) {
\$(\"#icon_no_image\").css(\"display\", \"none\");
\$('#message').html(\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "\");
} else {
\$(\"#icon_no_image\").css(\"display\", \"\");
\$('#message').empty();
}
};
// Todo: fix update sort by drag&drop
var updateSortNo = function () {
\$(\"#thumb div\").each(function (index) {
\$(this).find(\".sort_no_images\").remove();
filename = \$(this).find(\"input[type='hidden']\").val();
\$sortNo = \$('<input type=\"hidden\" class=\"sort_no_images\" name=\"sort_no_images[]\" />');
\$sortNo.val(filename + '//' + parseInt(index + 1));
\$(this).append(\$sortNo);
});
};
hideThumbnail();
updateSortNo();
// Delete of images
var count_del = 0;
\$(\"#thumb\").on(\"click\", '.delete-image', function () {
var \$new_delete_image = \$(proto_del.replace(/__name__/g, count_del));
var thumbnail = \$(this).parents('div.c-form__fileUploadThumbnail');
var src = \$(thumbnail).find('input').val();
\$new_delete_image.val(src);
\$(\"#thumb\").append(\$new_delete_image);
\$(thumbnail).remove();
hideThumbnail();
updateSortNo();
count_del++;
});
var count_add = ";
        // line 127
        echo twig_escape_filter($this->env, _twig_default_filter(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "add_images", [], "any", false, false, false, 127)), 0), "html", null, true);
        echo ";
\$('# ";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "product_image", [], "any", false, false, false, 128), "vars", [], "any", false, false, false, 128), "id", [], "any", false, false, false, 128), "html", null, true);
        echo "').fileupload({
url: \"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_image_add");
        echo "\",
type: \"post\",
sequentialUploads: true,
dataType: 'json',
dropZone: \$('#upload-zone'),
done: function (e, data) {
\$('.progress').hide();
\$.each(data.result.files, function (index, file) {
var path = '";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("", "temp_image"), "html", null, true);
        echo "' + file;
var \$img = \$(proto_img.replace(/__path__/g, path));
var \$new_img = \$(proto_add.replace(/__name__/g, count_add));
\$new_img.val(file);
\$child = \$img.append(\$new_img);
\$('#thumb').append(\$child);
count_add++;
});
hideThumbnail();
updateSortNo();
},
fail: function (e, data) {
alert(\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.upload_error"), "html", null, true);
        echo "\");
},
always: function (e, data) {
\$('.progress').hide();
\$('.progress .progress-bar').width('0%');
},
start: function (e, data) {
\$('.progress').show();
},
acceptFileTypes: /(\\.|\\/)(gif|jpe?g|png)\$/i,
maxFileSize: 10000000,
maxNumberOfFiles: 10,
progressall: function (e, data) {
var progress = parseInt(data.loaded / data.total * 100, 10);
\$('.progress .progress-bar').css('width', progress + '%');
},
processalways: function (e, data) {
if (data.files.error) {
alert(\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.upload_error"), "html", null, true);
        echo "\");
}
}
});
// 画像アップロード
\$('#file_upload').on('click', function () {
\$('# ";
        // line 173
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "product_image", [], "any", false, false, false, 173), "vars", [], "any", false, false, false, 173), "id", [], "any", false, false, false, 173), "html", null, true);
        echo "').click();
});

var mainTags = \$('#allTags');
var adminProductTag = \$('#admin_product_Tag');
\$('input', adminProductTag).each(function () {
if (\$(this).is(':checked')) {
\$('button[data-tag-id=\"' + \$(this).val() + '\"]').removeClass('btn-outline-secondary').addClass('btn-outline-primary');
}
});
mainTags.on('click', 'button.btn', function () {
var btnTag = \$(this);
var tagId = btnTag.data('tag-id');
if (btnTag.hasClass('btn-outline-primary')) {
btnTag.removeClass('btn-outline-primary').addClass('btn-outline-secondary');
\$('input[value=\"' + tagId + '\"]', mainTags).prop('checked', false);
} else {
btnTag.removeClass('btn-outline-secondary').addClass('btn-outline-primary');
\$('input[value=\"' + tagId + '\"]', mainTags).prop('checked', true);
}
});

var confirmFormChange = function (form, target, modal) {
var returnLink = form.find('input[type=\"hidden\"][name*=\"return_link\"]'),
saveBtn = modal.find('a[data-action=\"save\"]'),
cancelBtn = modal.find('a[data-action=\"cancel\"]');
modal.on('hidden.bs.modal', function () {
returnLink.val('');
});
saveBtn.on('click', function () {
returnLink.val(\$(this).data('return-link'));
\$(this).addClass('disabled');
form.submit();
});
target.on('click', function () {
modal.find('.modal-body .screen-name').text(\$(this).attr('title'));
modal.modal('show');
saveBtn.data('return-link', \$(this).attr('href'));
cancelBtn.attr('href', \$(this).attr('href'));
return false;
});
};
confirmFormChange(\$('#form1'), \$('a[data-action=\"confirm\"]'), \$('#confirmFormChangeModal'))
});

// searchWordの実行
\$('#search-category').on('input', function () {
searchWord(\$(this).val(), \$('.category-li'));
});
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 225
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 226
        echo "\t<!-- 移動確認モーダル-->
\t<div class=\"modal fade\" id=\"confirmFormChangeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"confirmFormChangeModal\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\">";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_title"), "html", null, true);
        echo "</h5>
\t\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">×</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<p class=\"screen-name\"></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<a class=\"btn btn-ec-conversion\" data-action=\"save\" href=\"javascript:void(0)\">
\t\t\t\t\t\t";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_save_and_move"), "html", null, true);
        echo "
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn btn-ec-sub\" data-action=\"cancel\" href=\"javascript:void(0)\">
\t\t\t\t\t\t";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_move_only"), "html", null, true);
        echo "
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\" novalidate enctype=\"multipart/form-data\">
\t\t";
        // line 251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), "_token", [], "any", false, false, false, 251), 'widget');
        echo "
\t\t";
        // line 252
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 252, $this->source); })()), "return_link", [], "any", false, false, false, 252), 'widget');
        echo "
\t\t<div class=\"c-contentsArea__cols\">
\t\t\t<div class=\"c-contentsArea__primaryCol\">
\t\t\t\t<div class=\"c-primaryCol\">
\t\t\t\t\t<div class=\"card rounded border-0 mb-4\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t<span class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product__card_title"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4 text-right\">
\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" href=\"#basicConfig\" aria-expanded=\"false\" aria-controls=\"basicConfig\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up fa-lg\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse show ec-cardCollapse\" id=\"basicConfig\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t";
        // line 275
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 275, $this->source); })()), "id", [], "any", false, false, false, 275)) {
            // line 276
            echo "\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 278
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.product_id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 279
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_id"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 284
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 284, $this->source); })()), "id", [], "any", false, false, false, 284), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 288
        echo "\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.subtitle"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t";
        // line 295
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 295, $this->source); })()), "subtitle", [], "any", false, false, false, 295), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 296
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 296, $this->source); })()), "subtitle", [], "any", false, false, false, 296), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.name"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-primary ml-1\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t";
        // line 309
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 309, $this->source); })()), "name", [], "any", false, false, false, 309), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 310, $this->source); })()), "name", [], "any", false, false, false, 310), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 313
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 313, $this->source); })()) == false)) {
            // line 314
            echo "\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 316
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.sale_type"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 317
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_type"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-primary ml-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 320
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 325
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 325, $this->source); })()), "class", [], "any", false, false, false, 325), "sale_type", [], "any", false, false, false, 325), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 329
        echo "\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.image"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.image"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t<br>";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.image_size"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"thumb\" class=\"c-form__fileUploadThumbnails clearfix\"></div>
\t\t\t\t\t\t\t\t\t\t<p id=\"message\"></p>
\t\t\t\t\t\t\t\t\t\t<div id=\"upload-zone\" class=\"media py-5 border-ec-dashed mb-2 rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cloud-upload fa-3x text-ec-lightGray mx-3 align-middle\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_image_description"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 347
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 347, $this->source); })()), "product_image", [], "any", false, false, false, 347), 'widget', ["attr" => ["accept" => "image/*", "style" => "display:none;"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 348
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 348, $this->source); })()), "product_image", [], "any", false, false, false, 348), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-ec-regular mr-2\" onclick=\"\$('#admin_product_product_image').click()\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.file_select"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.media-body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.media -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.description_detail"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.description_detail"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t";
        // line 366
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 366, $this->source); })()), "description_detail", [], "any", false, false, false, 366), 'widget', ["attr" => ["rows" => "8"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 367
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 367, $this->source); })()), "description_detail", [], "any", false, false, false, 367), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block mb-2\" data-toggle=\"collapse\" href=\"#addComment\" role=\"button\" aria-expanded=\"false\" aria-controls=\"addComment\">
\t\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold text-ec-black\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 372
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.description_list__add"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"collapse ec-collapse\" id=\"addComment\">
\t\t\t\t\t\t\t\t\t<div class=\"row bg-ec-formGray pt-3 mb-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.description_list"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.description_list"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 388
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 388, $this->source); })()), "description_list", [], "any", false, false, false, 388), 'widget', ["attr" => ["rows" => "4"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 389
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 389, $this->source); })()), "description_list", [], "any", false, false, false, 389), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 394
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 394, $this->source); })()) == false)) {
            // line 395
            echo "\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 398
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_price"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-primary ml-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 400
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 406
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 406, $this->source); })()), "class", [], "any", false, false, false, 406), "price02", [], "any", false, false, false, 406), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 407
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 407, $this->source); })()), "class", [], "any", false, false, false, 407), "price02", [], "any", false, false, false, 407), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 413
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.normal_price"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 414
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.normal_price"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 420
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 420, $this->source); })()), "class", [], "any", false, false, false, 420), "price01", [], "any", false, false, false, 420), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 421
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 421, $this->source); })()), "class", [], "any", false, false, false, 421), "price01", [], "any", false, false, false, 421), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 428
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-primary ml-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 430
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 436
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 436, $this->source); })()), "class", [], "any", false, false, false, 436), "stock", [], "any", false, false, false, 436), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 437
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 437, $this->source); })()), "class", [], "any", false, false, false, 437), "stock", [], "any", false, false, false, 437), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 439
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 440
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 441
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 442
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 443
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 444
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 445
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 446
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 447
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 448
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 449
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 450
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 450, $this->source); })()), "class", [], "any", false, false, false, 450), "stock_unlimited", [], "any", false, false, false, 450), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 455
        echo "\t\t\t\t\t\t\t\t\t<div class=\"row\"> <div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.search_word"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 457
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.search_word"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 463
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 463, $this->source); })()), "search_word", [], "any", false, false, false, 463), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 464
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 464, $this->source); })()), "search_word", [], "any", false, false, false, 464), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
        // line 469
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 469, $this->source); })()) == false)) {
            // line 470
            echo "\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 472
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.product_code"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 473
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 479
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 479, $this->source); })()), "class", [], "any", false, false, false, 479), "code", [], "any", false, false, false, 479), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 480
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 480, $this->source); })()), "class", [], "any", false, false, false, 480), "code", [], "any", false, false, false, 480), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 486
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.sale_limit"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 487
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_limit"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 493
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 493, $this->source); })()), "class", [], "any", false, false, false, 493), "sale_limit", [], "any", false, false, false, 493), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 494
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 494, $this->source); })()), "class", [], "any", false, false, false, 494), "sale_limit", [], "any", false, false, false, 494), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 500
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.delivery_duration"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 501
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.delivery_duration"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 507
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 507, $this->source); })()), "class", [], "any", false, false, false, 507), "delivery_duration", [], "any", false, false, false, 507), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 508
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 508, $this->source); })()), "class", [], "any", false, false, false, 508), "delivery_duration", [], "any", false, false, false, 508), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t";
            // line 513
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 513, $this->source); })()), "option_product_delivery_fee", [], "any", false, false, false, 513)) {
                // line 514
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 517
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.delivery_fee"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 522
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 522, $this->source); })()), "class", [], "any", false, false, false, 522), "delivery_fee", [], "any", false, false, false, 522), 'widget');
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 523
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 523, $this->source); })()), "class", [], "any", false, false, false, 523), "delivery_fee", [], "any", false, false, false, 523), 'errors');
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 528
            echo "\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 528, $this->source); })()), "option_product_tax_rule", [], "any", false, false, false, 528)) {
                // line 529
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 532
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tax_rate"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 537
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 537, $this->source); })()), "class", [], "any", false, false, false, 537), "tax_rate", [], "any", false, false, false, 537), 'widget');
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 538
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 538, $this->source); })()), "class", [], "any", false, false, false, 538), "tax_rate", [], "any", false, false, false, 538), 'errors');
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 543
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 544
        echo "
\t\t\t\t\t\t\t\t";
        // line 546
        echo "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 546, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 546), "eccube_form_options", [], "any", false, false, false, 546), "auto_render", [], "any", false, false, false, 546); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 547
            echo "\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 547), "eccube_form_options", [], "any", false, false, false, 547), "form_theme", [], "any", false, false, false, 547)) {
                // line 548
                echo "\t\t\t\t\t\t\t\t\t\t";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 548), "eccube_form_options", [], "any", false, false, false, 548), "form_theme", [], "any", false, false, false, 548)], true);
                // line 549
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 551
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 553
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 553), "label", [], "any", false, false, false, 553)), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 557
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 558
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 563
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 564
        echo "
\t\t\t\t\t\t\t\t";
        // line 565
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 565, $this->source); })()) == false)) {
            // line 566
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 566, $this->source); })()), "class", [], "any", false, false, false, 566), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 566), "eccube_form_options", [], "any", false, false, false, 566), "auto_render", [], "any", false, false, false, 566); }));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 567
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 567), "eccube_form_options", [], "any", false, false, false, 567), "form_theme", [], "any", false, false, false, 567)) {
                    // line 568
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 568), "eccube_form_options", [], "any", false, false, false, 568), "form_theme", [], "any", false, false, false, 568)], true);
                    // line 569
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 571
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 573
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 573), "label", [], "any", false, false, false, 573)), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 577
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 578
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 583
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 584
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 585
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 589
        if ( !(null === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 589, $this->source); })()))) {
            // line 590
            echo "\t\t\t\t\t\t<div class=\"card rounded border-0 mb-4\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 594
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.product_class"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 596
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__card_title"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-4 text-right\">
\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" href=\"#standardConfig\" aria-expanded=\"false\" aria-controls=\"standardConfig\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"collapse show ec-cardCollapse\" id=\"standardConfig\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t";
            // line 610
            if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 610, $this->source); })()) == true)) {
                // line 611
                echo "\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t\t\t\t<thead class=\"table-active\">
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"pl-3 pt-2 pb-2\">";
                // line 613
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category1__short"), "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"pt-2 pb-2\">";
                // line 614
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category2__short"), "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"pt-2 pb-2\">";
                // line 615
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code__short"), "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"pt-2 pb-2\">";
                // line 616
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock"), "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"pr-3 pt-2 pb-2\">";
                // line 617
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.price"), "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 620
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 620, $this->source); })()), "ProductClasses", [], "any", false, false, false, 620));
                foreach ($context['_seq'] as $context["_key"] => $context["Class"]) {
                    // line 621
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["Class"], "visible", [], "any", false, false, false, 621) == 1)) {
                        // line 622
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"pl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 624
                        if (twig_get_attribute($this->env, $this->source, $context["Class"], "hasClassCategory1", [], "any", false, false, false, 624)) {
                            // line 625
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Class"], "ClassCategory1", [], "any", false, false, false, 625), "name", [], "any", false, false, false, 625), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 627
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 629
                        if (twig_get_attribute($this->env, $this->source, $context["Class"], "hasClassCategory2", [], "any", false, false, false, 629)) {
                            // line 630
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Class"], "ClassCategory2", [], "any", false, false, false, 630), "name", [], "any", false, false, false, 630), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 632
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                        // line 633
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Class"], "code", [], "any", false, false, false, 633), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 635
                        if (twig_get_attribute($this->env, $this->source, $context["Class"], "stock_unlimited", [], "any", false, false, false, 635)) {
                            // line 636
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock_unlimited__short"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 638
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Class"], "stock", [], "any", false, false, false, 638), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 640
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"pr-3\">";
                        // line 641
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Class"], "price02", [], "any", false, false, false, 641)), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 644
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 645
                echo "\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t";
            }
            // line 648
            echo "
\t\t\t\t\t\t\t\t\t<div class=\"d-block text-center text-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 650
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_product_class", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 650, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular\" data-action=\"confirm\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class_registration")]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__confirm_of_product"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 656
        echo "\t\t\t\t\t<div class=\"card rounded border-0 mb-4\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 660
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.free_area"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"card-title\">";
        // line 661
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.free_area__card_title"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4 text-right\">
\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" href=\"#freeArea\" aria-expanded=\"false\" aria-controls=\"freeArea\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up fa-lg\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 676
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.free_area"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 680
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 680, $this->source); })()), "free_area", [], "any", false, false, false, 680), 'widget', ["id" => "wysiwyg-area", "attr" => ["rows" => "8"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 681
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 681, $this->source); })()), "free_area", [], "any", false, false, false, 681), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"c-contentsArea__secondaryCol\">
\t\t\t\t<div class=\"c-secondaryCol\">
\t\t\t\t\t";
        // line 693
        if ( !(null === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 693, $this->source); })()))) {
            // line 694
            echo "\t\t\t\t\t\t<div class=\"card rounded border-0 mb-4\">
\t\t\t\t\t\t\t<div class=\"collapse show ec-cardCollapse\" id=\"preview\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-block text-center\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-block btn-ec-regular\" target=\"_blank\" href=\"";
            // line 698
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 698, $this->source); })())]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.preview"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.preview"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 704
        echo "\t\t\t\t\t<div class=\"card rounded border-0 mb-4\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t<span class=\"card-title\">";
        // line 709
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category__product_card_title"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4 text-right\">
\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" href=\"#category\" aria-expanded=\"false\" aria-controls=\"category\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up fa-lg\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse show ec-cardCollapse\" id=\"category\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-addon1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"search-category\" class=\"form-control\" type=\"search\" placeholder=\"";
        // line 730
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.search_category"), "html", null, true);
        echo "\" aria-label=\"Search\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
        // line 748
        echo "
\t\t\t\t\t\t\t\t<div class=\"c-directoryTree--register rounded border mb-3 p-3\">
\t\t\t\t\t\t\t\t\t";
        // line 750
        $macros["renderMacro"] = $this;
        // line 751
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TopCategories"]) || array_key_exists("TopCategories", $context) ? $context["TopCategories"] : (function () { throw new RuntimeError('Variable "TopCategories" does not exist.', 751, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["TopCategory"]) {
            // line 752
            echo "\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 753
            echo twig_call_macro($macros["renderMacro"], "macro_tree", [(isset($context["ChoicedCategoryIds"]) || array_key_exists("ChoicedCategoryIds", $context) ? $context["ChoicedCategoryIds"] : (function () { throw new RuntimeError('Variable "ChoicedCategoryIds" does not exist.', 753, $this->source); })()), $context["TopCategory"], twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 753, $this->source); })()), "Category", [], "any", false, false, false, 753)], 753, $context, $this->getSourceContext());
            echo "
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TopCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 756
        echo "\t\t\t\t\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 756, $this->source); })()), "Category", [], "any", false, false, false, 756), 'errors');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-block text-center\">
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-block btn-ec-regular\" data-action=\"confirm\" href=\"";
        // line 759
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_category");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category_management")]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.move_to_category"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card rounded border-0 mb-4\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t<span class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 770
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tag__product_card_title"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4 text-right\">
\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" href=\"#tag\" aria-expanded=\"false\" aria-controls=\"tag\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up fa-lg\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"collapse show ec-cardCollapse\" id=\"tag\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t";
        // line 784
        if ((twig_length_filter($this->env, (isset($context["Tags"]) || array_key_exists("Tags", $context) ? $context["Tags"] : (function () { throw new RuntimeError('Variable "Tags" does not exist.', 784, $this->source); })())) > 0)) {
            // line 785
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Tags"]) || array_key_exists("Tags", $context) ? $context["Tags"] : (function () { throw new RuntimeError('Variable "Tags" does not exist.', 785, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
                // line 786
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block mb-2 mr-2\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-primary\" type=\"button\">";
                // line 787
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "name", [], "any", false, false, false, 787), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 790
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 791
        echo "
\t\t\t\t\t\t\t\t<div class=\"d-block mb-3\" data-toggle=\"collapse\" href=\"#allTags\" role=\"button\" aria-expanded=\"false\" aria-controls=\"allTags\">
\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold\">";
        // line 795
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.save_tag"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"collapse p-3 bg-ec-lightGray mb-3 ec-collapse\" id=\"allTags\">
\t\t\t\t\t\t\t\t\t<div class=\"d-none\">
\t\t\t\t\t\t\t\t\t\t";
        // line 800
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 800, $this->source); })()), "Tag", [], "any", false, false, false, 800), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 802
        if ((twig_length_filter($this->env, (isset($context["TagsList"]) || array_key_exists("TagsList", $context) ? $context["TagsList"] : (function () { throw new RuntimeError('Variable "TagsList" does not exist.', 802, $this->source); })())) > 0)) {
            // line 803
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["TagsList"]) || array_key_exists("TagsList", $context) ? $context["TagsList"] : (function () { throw new RuntimeError('Variable "TagsList" does not exist.', 803, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
                // line 804
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block mb-2 mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-secondary\" type=\"button\" data-tag-id=\"";
                // line 805
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "id", [], "any", false, false, false, 805), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "name", [], "any", false, false, false, 805), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 808
            echo "\t\t\t\t\t\t\t\t\t";
        }
        // line 809
        echo "
\t\t\t\t\t\t\t\t\t<div class=\"d-block mb-3\" data-toggle=\"collapse\" href=\"#allTags\" role=\"button\" aria-expanded=\"false\" aria-controls=\"allTags\"></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"d-block text-center\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 814
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_tag");
        echo "\" class=\"btn btn-block btn-ec-regular\" data-action=\"confirm\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tag_management")]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.move_to_tag"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card rounded border-0 mb-4\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t<span class=\"card-title\">";
        // line 823
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.create_date__card_title"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4 text-right\">
\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" href=\"#update\" aria-expanded=\"false\" aria-controls=\"update\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up fa-lg\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse show ec-cardCollapse\" id=\"update\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-flag mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 837
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<span>：";
        // line 840
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 840, $this->source); })()), "create_date", [], "any", false, false, false, 840)), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-refresh mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 846
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<span>：";
        // line 849
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 849, $this->source); })()), "update_date", [], "any", false, false, false, 849)), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 855
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.last_updater"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<span>：";
        // line 858
        ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 858, $this->source); })()), "Creator", [], "any", false, false, false, 858)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 858, $this->source); })()), "Creator", [], "any", false, false, false, 858), "name", [], "any", false, false, false, 858), "html", null, true))) : (print ("")));
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card rounded border-0 mb-4\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 868
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.shop_memo"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 870
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.shop_memo"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4 text-right\">
\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" href=\"#shopMemo\" aria-expanded=\"false\" aria-controls=\"shopMemo\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up fa-lg\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse show ec-cardCollapse\" id=\"shopMemo\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t";
        // line 884
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 884, $this->source); })()), "note", [], "any", false, false, false, 884), 'widget', ["attr" => ["rows" => "8"]]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 885
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 885, $this->source); })()), "note", [], "any", false, false, false, 885), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"c-conversionArea\">
\t\t\t<div class=\"c-conversionArea__container\">
\t\t\t\t<div class=\"row justify-content-between align-items-center\">
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<div class=\"c-conversionArea__leftBlockItem\">
\t\t\t\t\t\t\t<a class=\"c-baseLink\" href=\"";
        // line 897
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_page", ["page_no" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 897), "get", [0 => "eccube.admin.product.search.page_no"], "method", true, true, false, 897)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 897), "get", [0 => "eccube.admin.product.search.page_no"], "method", false, false, false, 897), "1")) : ("1"))]), "html", null, true);
        echo "\" data-action=\"confirm\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list")]), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<span>";
        // line 899
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t";
        // line 906
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 906, $this->source); })()), "Status", [], "any", false, false, false, 906), 'widget');
        echo "
\t\t\t\t\t\t\t\t";
        // line 907
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 907, $this->source); })()), "Status", [], "any", false, false, false, 907), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 910
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 736
    public function macro_tree($__ChoicedIds__ = null, $__Category__ = null, $__form__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "ChoicedIds" => $__ChoicedIds__,
            "Category" => $__Category__,
            "form" => $__form__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            // line 737
            echo "\t\t\t\t\t\t\t\t\t";
            $macros["selfMacro"] = $this;
            // line 738
            echo "\t\t\t\t\t\t\t\t\t<li class=\"c-directoryTree--registerItem category-li\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"admin_product_category_";
            // line 739
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 739, $this->source); })()), "id", [], "any", false, false, false, 739), "html", null, true);
            echo "\" name=\"admin_product[Category][]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 739, $this->source); })()), "id", [], "any", false, false, false, 739), "html", null, true);
            echo "\" ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 739, $this->source); })()), "id", [], "any", false, false, false, 739), (isset($context["ChoicedIds"]) || array_key_exists("ChoicedIds", $context) ? $context["ChoicedIds"] : (function () { throw new RuntimeError('Variable "ChoicedIds" does not exist.', 739, $this->source); })()))) {
                echo " checked ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t<label for=\"admin_product_category_";
            // line 740
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 740, $this->source); })()), "id", [], "any", false, false, false, 740), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 740, $this->source); })()), "name", [], "any", false, false, false, 740), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 742
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 742, $this->source); })()), "children", [], "any", false, false, false, 742));
            foreach ($context['_seq'] as $context["child"] => $context["ChildCategory"]) {
                // line 743
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_call_macro($macros["selfMacro"], "macro_tree", [(isset($context["ChoicedIds"]) || array_key_exists("ChoicedIds", $context) ? $context["ChoicedIds"] : (function () { throw new RuntimeError('Variable "ChoicedIds" does not exist.', 743, $this->source); })()), $context["ChildCategory"], (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 743, $this->source); })())], 743, $context, $this->getSourceContext());
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child'], $context['ChildCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 745
            echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@admin/Product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1778 => 745,  1769 => 743,  1765 => 742,  1758 => 740,  1748 => 739,  1745 => 738,  1742 => 737,  1721 => 736,  1702 => 910,  1696 => 907,  1692 => 906,  1682 => 899,  1675 => 897,  1660 => 885,  1656 => 884,  1639 => 870,  1634 => 868,  1621 => 858,  1615 => 855,  1606 => 849,  1600 => 846,  1591 => 840,  1585 => 837,  1568 => 823,  1552 => 814,  1545 => 809,  1542 => 808,  1531 => 805,  1528 => 804,  1523 => 803,  1521 => 802,  1516 => 800,  1508 => 795,  1502 => 791,  1499 => 790,  1490 => 787,  1487 => 786,  1482 => 785,  1480 => 784,  1463 => 770,  1445 => 759,  1438 => 756,  1429 => 753,  1426 => 752,  1421 => 751,  1419 => 750,  1415 => 748,  1406 => 730,  1382 => 709,  1375 => 704,  1362 => 698,  1356 => 694,  1354 => 693,  1339 => 681,  1335 => 680,  1328 => 676,  1310 => 661,  1306 => 660,  1300 => 656,  1287 => 650,  1283 => 648,  1278 => 645,  1272 => 644,  1266 => 641,  1263 => 640,  1257 => 638,  1251 => 636,  1249 => 635,  1244 => 633,  1241 => 632,  1235 => 630,  1233 => 629,  1229 => 627,  1223 => 625,  1221 => 624,  1217 => 622,  1214 => 621,  1210 => 620,  1204 => 617,  1200 => 616,  1196 => 615,  1192 => 614,  1188 => 613,  1184 => 611,  1182 => 610,  1165 => 596,  1160 => 594,  1154 => 590,  1152 => 589,  1146 => 585,  1143 => 584,  1137 => 583,  1129 => 578,  1125 => 577,  1118 => 573,  1114 => 571,  1108 => 569,  1105 => 568,  1102 => 567,  1097 => 566,  1095 => 565,  1092 => 564,  1086 => 563,  1078 => 558,  1074 => 557,  1067 => 553,  1063 => 551,  1057 => 549,  1054 => 548,  1051 => 547,  1046 => 546,  1043 => 544,  1040 => 543,  1032 => 538,  1028 => 537,  1020 => 532,  1015 => 529,  1012 => 528,  1004 => 523,  1000 => 522,  992 => 517,  987 => 514,  985 => 513,  977 => 508,  973 => 507,  964 => 501,  960 => 500,  951 => 494,  947 => 493,  938 => 487,  934 => 486,  925 => 480,  921 => 479,  912 => 473,  908 => 472,  904 => 470,  902 => 469,  894 => 464,  890 => 463,  881 => 457,  877 => 456,  874 => 455,  865 => 450,  863 => 449,  861 => 448,  859 => 447,  857 => 446,  855 => 445,  853 => 444,  851 => 443,  849 => 442,  847 => 441,  845 => 440,  843 => 439,  839 => 437,  835 => 436,  826 => 430,  821 => 428,  811 => 421,  807 => 420,  798 => 414,  794 => 413,  785 => 407,  781 => 406,  772 => 400,  767 => 398,  762 => 395,  760 => 394,  752 => 389,  748 => 388,  739 => 382,  735 => 381,  723 => 372,  715 => 367,  711 => 366,  703 => 361,  699 => 360,  686 => 350,  681 => 348,  677 => 347,  673 => 346,  658 => 334,  653 => 332,  649 => 331,  645 => 329,  638 => 325,  630 => 320,  624 => 317,  620 => 316,  616 => 314,  614 => 313,  608 => 310,  604 => 309,  596 => 304,  591 => 302,  582 => 296,  578 => 295,  571 => 291,  566 => 288,  559 => 284,  551 => 279,  547 => 278,  543 => 276,  541 => 275,  525 => 262,  512 => 252,  508 => 251,  498 => 244,  492 => 241,  479 => 231,  472 => 226,  462 => 225,  401 => 173,  392 => 167,  371 => 149,  356 => 137,  345 => 129,  341 => 128,  337 => 127,  303 => 96,  298 => 93,  290 => 92,  286 => 91,  278 => 89,  274 => 88,  269 => 87,  265 => 86,  257 => 84,  253 => 83,  248 => 82,  242 => 81,  238 => 80,  235 => 79,  229 => 76,  224 => 74,  219 => 72,  214 => 70,  209 => 68,  204 => 67,  202 => 66,  181 => 48,  177 => 47,  173 => 46,  169 => 45,  164 => 44,  154 => 43,  128 => 26,  123 => 25,  113 => 24,  100 => 19,  90 => 18,  77 => 16,  67 => 15,  56 => 11,  54 => 22,  52 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
{% extends '@admin/default_frame.twig' %}

{% set menus = ['product', 'product_edit'] %}

{% block title %}
\t{{ 'admin.product.product_registration'|trans }}
{% endblock %}
{% block sub_title %}
\t{{ 'admin.product.product_management'|trans }}
{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block stylesheet %}
\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/fileupload/jquery.fileupload.css', 'admin') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/fileupload/jquery.fileupload-ui.css', 'admin') }}\">
\t<link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">
\t<style>
\t\t#thumb div {
\t\t\tfloat: left;
\t\t\tmargin: 4px
\t\t}

\t\t.ui-state-highlight {
\t\t\theight: 70px;
\t\t\twidth: 70px;
\t\t\tborder: dashed 1px #ccc;
\t\t\tbackground: #fff;
\t\t}
\t</style>
{% endblock stylesheet %}

{% block javascript %}
\t<script src=\"{{ asset('assets/js/vendor/fileupload/vendor/jquery.ui.widget.js', 'admin') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/fileupload/jquery.iframe-transport.js', 'admin') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/fileupload/jquery.fileupload.js', 'admin') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/fileupload/jquery.fileupload-process.js', 'admin') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/fileupload/jquery.fileupload-validate.js', 'admin') }}\"></script>
\t<script>
\t\tvar bootstrapTooltip = \$.fn.tooltip.noConflict();
\t</script>
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
\t<script>
\t\t\$.fn.tooltip = bootstrapTooltip;
\$(document).on('drop dragover', function (e) {
e.preventDefault();
});
\$(function () { // Todo: fix drag&drop style
\$(\"#thumb\").sortable({
cursor: 'move',
opacity: 0.7,
placeholder: 'ui-state-highlight',
update: function (event, ui) {
updateSortNo();
}
});{% if has_class == false %}
if (\$(\"# {{ form.class.stock_unlimited.vars.id }}\").prop(\"checked\")) {
\$(\"# {{ form.class.stock.vars.id }}\").attr(\"disabled\", \"disabled\").val('');
} else {
\$(\"# {{ form.class.stock.vars.id }}\").removeAttr(\"disabled\");
}
\$(\"# {{ form.class.stock_unlimited.vars.id }}\").on(\"click change\", function () {
if (\$(this).prop(\"checked\")) {
\$(\"# {{ form.class.stock.vars.id }}\").attr(\"disabled\", \"disabled\").val('');
} else {
\$(\"# {{ form.class.stock.vars.id }}\").removeAttr(\"disabled\");
}
});{% endif %}
var proto_img = '<div class=\"c-form__fileUploadThumbnail\" style=\"background-image:url(\\'__path__\\');\">' + '<a class=\"delete-image\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>' + '</div>';
var proto_add = '{{ form_widget(form.add_images.vars.prototype) }}';
var proto_del = '{{ form_widget(form.delete_images.vars.prototype) }}';{% for image in form.images %}
var \$img = \$(proto_img.replace(/__path__/g, '{{ asset(image.vars.value, 'save_image') }}'));
var \$widget = \$('{{ form_widget(image) }}');
\$widget.val('{{ image.vars.value }}');
\$(\"#thumb\").append(\$img.append(\$widget));{% endfor %}
{% for add_image in form.add_images %}
var \$img = \$(proto_img.replace(/__path__/g, '{{ asset(add_image.vars.value, 'temp_image') }}'));
var \$widget = \$('{{ form_widget(add_image) }}');
\$widget.val('{{ add_image.vars.value }}');
\$(\"#thumb\").append(\$img.append(\$widget));{% endfor %}
{% for delete_image in form.delete_images %}
\$(\"#thumb\").append('{{ form_widget(delete_image) }}');{% endfor %}
var hideThumbnail = function () {
if (\$(\"#thumb div\").length > 0) {
\$(\"#icon_no_image\").css(\"display\", \"none\");
\$('#message').html(\"{{ 'admin.common.drag_and_drop_description'|trans }}\");
} else {
\$(\"#icon_no_image\").css(\"display\", \"\");
\$('#message').empty();
}
};
// Todo: fix update sort by drag&drop
var updateSortNo = function () {
\$(\"#thumb div\").each(function (index) {
\$(this).find(\".sort_no_images\").remove();
filename = \$(this).find(\"input[type='hidden']\").val();
\$sortNo = \$('<input type=\"hidden\" class=\"sort_no_images\" name=\"sort_no_images[]\" />');
\$sortNo.val(filename + '//' + parseInt(index + 1));
\$(this).append(\$sortNo);
});
};
hideThumbnail();
updateSortNo();
// Delete of images
var count_del = 0;
\$(\"#thumb\").on(\"click\", '.delete-image', function () {
var \$new_delete_image = \$(proto_del.replace(/__name__/g, count_del));
var thumbnail = \$(this).parents('div.c-form__fileUploadThumbnail');
var src = \$(thumbnail).find('input').val();
\$new_delete_image.val(src);
\$(\"#thumb\").append(\$new_delete_image);
\$(thumbnail).remove();
hideThumbnail();
updateSortNo();
count_del++;
});
var count_add = {{ form.add_images|length|default(0) }};
\$('# {{ form.product_image.vars.id }}').fileupload({
url: \"{{ url('admin_product_image_add') }}\",
type: \"post\",
sequentialUploads: true,
dataType: 'json',
dropZone: \$('#upload-zone'),
done: function (e, data) {
\$('.progress').hide();
\$.each(data.result.files, function (index, file) {
var path = '{{ asset('', 'temp_image') }}' + file;
var \$img = \$(proto_img.replace(/__path__/g, path));
var \$new_img = \$(proto_add.replace(/__name__/g, count_add));
\$new_img.val(file);
\$child = \$img.append(\$new_img);
\$('#thumb').append(\$child);
count_add++;
});
hideThumbnail();
updateSortNo();
},
fail: function (e, data) {
alert(\"{{ 'admin.common.upload_error'|trans }}\");
},
always: function (e, data) {
\$('.progress').hide();
\$('.progress .progress-bar').width('0%');
},
start: function (e, data) {
\$('.progress').show();
},
acceptFileTypes: /(\\.|\\/)(gif|jpe?g|png)\$/i,
maxFileSize: 10000000,
maxNumberOfFiles: 10,
progressall: function (e, data) {
var progress = parseInt(data.loaded / data.total * 100, 10);
\$('.progress .progress-bar').css('width', progress + '%');
},
processalways: function (e, data) {
if (data.files.error) {
alert(\"{{ 'admin.common.upload_error'|trans }}\");
}
}
});
// 画像アップロード
\$('#file_upload').on('click', function () {
\$('# {{ form.product_image.vars.id }}').click();
});

var mainTags = \$('#allTags');
var adminProductTag = \$('#admin_product_Tag');
\$('input', adminProductTag).each(function () {
if (\$(this).is(':checked')) {
\$('button[data-tag-id=\"' + \$(this).val() + '\"]').removeClass('btn-outline-secondary').addClass('btn-outline-primary');
}
});
mainTags.on('click', 'button.btn', function () {
var btnTag = \$(this);
var tagId = btnTag.data('tag-id');
if (btnTag.hasClass('btn-outline-primary')) {
btnTag.removeClass('btn-outline-primary').addClass('btn-outline-secondary');
\$('input[value=\"' + tagId + '\"]', mainTags).prop('checked', false);
} else {
btnTag.removeClass('btn-outline-secondary').addClass('btn-outline-primary');
\$('input[value=\"' + tagId + '\"]', mainTags).prop('checked', true);
}
});

var confirmFormChange = function (form, target, modal) {
var returnLink = form.find('input[type=\"hidden\"][name*=\"return_link\"]'),
saveBtn = modal.find('a[data-action=\"save\"]'),
cancelBtn = modal.find('a[data-action=\"cancel\"]');
modal.on('hidden.bs.modal', function () {
returnLink.val('');
});
saveBtn.on('click', function () {
returnLink.val(\$(this).data('return-link'));
\$(this).addClass('disabled');
form.submit();
});
target.on('click', function () {
modal.find('.modal-body .screen-name').text(\$(this).attr('title'));
modal.modal('show');
saveBtn.data('return-link', \$(this).attr('href'));
cancelBtn.attr('href', \$(this).attr('href'));
return false;
});
};
confirmFormChange(\$('#form1'), \$('a[data-action=\"confirm\"]'), \$('#confirmFormChangeModal'))
});

// searchWordの実行
\$('#search-category').on('input', function () {
searchWord(\$(this).val(), \$('.category-li'));
});
\t</script>
{% endblock javascript %}

{% block main %}
\t<!-- 移動確認モーダル-->
\t<div class=\"modal fade\" id=\"confirmFormChangeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"confirmFormChangeModal\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\">{{ 'admin.common.move_to_confirm_title'|trans }}</h5>
\t\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">×</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<p class=\"screen-name\"></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<a class=\"btn btn-ec-conversion\" data-action=\"save\" href=\"javascript:void(0)\">
\t\t\t\t\t\t{{ 'admin.common.move_to_confirm_save_and_move'|trans }}
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn btn-ec-sub\" data-action=\"cancel\" href=\"javascript:void(0)\">
\t\t\t\t\t\t{{ 'admin.common.move_to_confirm_move_only'|trans }}
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\" novalidate enctype=\"multipart/form-data\">
\t\t{{ form_widget(form._token) }}
\t\t{{ form_widget(form.return_link) }}
\t\t<div class=\"c-contentsArea__cols\">
\t\t\t<div class=\"c-contentsArea__primaryCol\">
\t\t\t\t<div class=\"c-primaryCol\">
\t\t\t\t\t<div class=\"card rounded border-0 mb-4\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t<span class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t{{ 'admin.product.product__card_title'|trans }}
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4 text-right\">
\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" href=\"#basicConfig\" aria-expanded=\"false\" aria-controls=\"basicConfig\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up fa-lg\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse show ec-cardCollapse\" id=\"basicConfig\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t{% if Product.id %}
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.product_id'|trans }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'admin.product.product_id'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<p>{{ Product.id }}</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'admin.product.subtitle'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.subtitle) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.subtitle) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'admin.product.name'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-primary ml-1\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ 'admin.common.required'|trans }}
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.name) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.name) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% if has_class == false %}
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.sale_type'|trans }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'admin.product.sale_type'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-primary ml-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ 'admin.common.required'|trans }}
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.class.sale_type) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.image'|trans }}\">
\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'admin.product.image'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t<br>{{ 'admin.product.image_size'|trans }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"thumb\" class=\"c-form__fileUploadThumbnails clearfix\"></div>
\t\t\t\t\t\t\t\t\t\t<p id=\"message\"></p>
\t\t\t\t\t\t\t\t\t\t<div id=\"upload-zone\" class=\"media py-5 border-ec-dashed mb-2 rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cloud-upload fa-3x text-ec-lightGray mx-3 align-middle\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t{{ 'admin.common.drag_and_drop_image_description'|trans }}
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.product_image, { attr : { accept : 'image/*', style : 'display:none;' } }) }}
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.product_image) }}
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-ec-regular mr-2\" onclick=\"\$('#admin_product_product_image').click()\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ 'admin.common.file_select'|trans }}
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.media-body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.media -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.description_detail'|trans }}\">
\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'admin.product.description_detail'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.description_detail, { attr : { rows : \"8\"} }) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.description_detail) }}
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block mb-2\" data-toggle=\"collapse\" href=\"#addComment\" role=\"button\" aria-expanded=\"false\" aria-controls=\"addComment\">
\t\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold text-ec-black\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ 'admin.product.description_list__add'|trans }}
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"collapse ec-collapse\" id=\"addComment\">
\t\t\t\t\t\t\t\t\t<div class=\"row bg-ec-formGray pt-3 mb-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.description_list'|trans }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'admin.product.description_list'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.description_list, { attr : { rows : \"4\"} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.description_list) }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% if has_class == false %}
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'admin.product.sale_price'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-primary ml-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ 'admin.common.required'|trans }}
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.class.price02) }}
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.class.price02) }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.normal_price'|trans }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'admin.product.normal_price'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.class.price01) }}
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.class.price01) }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'admin.product.stock'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-primary ml-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ 'admin.common.required'|trans }}
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.class.stock) }}
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.class.stock) }}
\t\t\t\t\t\t\t\t\t\t\t\t{# TODO: form_layoutの調整 #}
\t\t\t\t\t\t\t\t\t\t\t\t{#<div class=\"form-check mb-2\">#}
\t\t\t\t\t\t\t\t\t\t\t\t{#<input class=\"form-check-input\"#}
\t\t\t\t\t\t\t\t\t\t\t\t{#id=\"{{ form.class.stock_unlimited.vars.id }}\"#}
\t\t\t\t\t\t\t\t\t\t\t\t{#name=\"{{ form.class.stock_unlimited.vars.full_name }}\"#}
\t\t\t\t\t\t\t\t\t\t\t\t{#type=\"checkbox\"#}
\t\t\t\t\t\t\t\t\t\t\t\t{#value=\"{{ form.class.stock_unlimited.vars.value }}\">#}
\t\t\t\t\t\t\t\t\t\t\t\t{#<label class=\"form-check-label\"#}
\t\t\t\t\t\t\t\t\t\t\t\t{#for=\"{{ form.class.stock_unlimited.vars.id }}\">#}
\t\t\t\t\t\t\t\t\t\t\t\t{#{{ 'admin.product.product.stock_unlimited'|trans }}#}
\t\t\t\t\t\t\t\t\t\t\t\t{#</label>#}
\t\t\t\t\t\t\t\t\t\t\t\t{#</div>#}
\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.class.stock_unlimited) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<div class=\"row\"> <div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.search_word'|trans }}\">
\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'admin.product.search_word'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.search_word) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.search_word) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t{% if has_class == false %}
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.product_code'|trans }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'admin.product.product_code'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.class.code) }}
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.class.code) }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.sale_limit'|trans }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'admin.product.sale_limit'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.class.sale_limit) }}
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.class.sale_limit) }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.delivery_duration'|trans }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'admin.product.delivery_duration'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.class.delivery_duration) }}
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.class.delivery_duration) }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t{% if BaseInfo.option_product_delivery_fee %}
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'admin.product.delivery_fee'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.class.delivery_fee) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.class.delivery_fee) }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if BaseInfo.option_product_tax_rule %}
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'admin.product.tax_rate'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.class.tax_rate) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.class.tax_rate) }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{# エンティティ拡張の自動出力 #}
\t\t\t\t\t\t\t\t{% for f in form|filter(f => f.vars.eccube_form_options.auto_render) %}
\t\t\t\t\t\t\t\t\t{% if f.vars.eccube_form_options.form_theme %}
\t\t\t\t\t\t\t\t\t\t{% form_theme f f.vars.eccube_form_options.form_theme %}
\t\t\t\t\t\t\t\t\t\t{{ form_row(f) }}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ f.vars.label|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(f) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(f) }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t{% if has_class == false %}
\t\t\t\t\t\t\t\t\t{% for f in form.class|filter(f => f.vars.eccube_form_options.auto_render) %}
\t\t\t\t\t\t\t\t\t\t{% if f.vars.eccube_form_options.form_theme %}
\t\t\t\t\t\t\t\t\t\t\t{% form_theme f f.vars.eccube_form_options.form_theme %}
\t\t\t\t\t\t\t\t\t\t\t{{ form_row(f) }}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ f.vars.label|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(f) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(f) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% if id is not null %}
\t\t\t\t\t\t<div class=\"card rounded border-0 mb-4\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.product_class'|trans }}\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ 'admin.product.product_class__card_title'|trans }}
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-4 text-right\">
\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" href=\"#standardConfig\" aria-expanded=\"false\" aria-controls=\"standardConfig\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"collapse show ec-cardCollapse\" id=\"standardConfig\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t{% if has_class == true %}
\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t\t\t\t<thead class=\"table-active\">
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"pl-3 pt-2 pb-2\">{{ 'admin.product.class_category1__short'|trans }}</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"pt-2 pb-2\">{{ 'admin.product.class_category2__short'|trans }}</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"pt-2 pb-2\">{{ 'admin.product.product_code__short'|trans }}</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"pt-2 pb-2\">{{ 'admin.product.stock'|trans }}</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"pr-3 pt-2 pb-2\">{{ 'admin.product.price'|trans }}</th>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t{% for Class in Product.ProductClasses %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if Class.visible == 1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"pl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if Class.hasClassCategory1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ Class.ClassCategory1.name }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if Class.hasClassCategory2 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ Class.ClassCategory2.name }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ Class.code }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if Class.stock_unlimited %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ 'admin.product.stock_unlimited__short'|trans }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ Class.stock }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"pr-3\">{{ Class.price02|price }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t<div class=\"d-block text-center text-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('admin_product_product_class', { 'id' : id }) }}\" class=\"btn btn-ec-regular\" data-action=\"confirm\" title=\"{{ 'admin.common.move_to_confirm_message'|trans({ '%name%' : 'admin.product.product_class_registration'|trans }) }}\">{{ 'admin.product.product_class__confirm_of_product'|trans }}</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"card rounded border-0 mb-4\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.free_area'|trans }}\">
\t\t\t\t\t\t\t\t\t\t<span class=\"card-title\">{{ 'admin.product.free_area__card_title'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4 text-right\">
\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" href=\"#freeArea\" aria-expanded=\"false\" aria-controls=\"freeArea\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up fa-lg\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t<span>{{ 'admin.product.free_area'|trans }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.free_area, {id: 'wysiwyg-area', attr : { rows : \"8\"} }) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.free_area) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"c-contentsArea__secondaryCol\">
\t\t\t\t<div class=\"c-secondaryCol\">
\t\t\t\t\t{% if id is not null %}
\t\t\t\t\t\t<div class=\"card rounded border-0 mb-4\">
\t\t\t\t\t\t\t<div class=\"collapse show ec-cardCollapse\" id=\"preview\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-block text-center\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-block btn-ec-regular\" target=\"_blank\" href=\"{{ url('product_detail', {id:id}) }}\" title=\"{{ 'admin.product.preview'|trans }}\">{{ 'admin.product.preview'|trans }}</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"card rounded border-0 mb-4\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t<span class=\"card-title\">{{ 'admin.product.category__product_card_title'|trans }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4 text-right\">
\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" href=\"#category\" aria-expanded=\"false\" aria-controls=\"category\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up fa-lg\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse show ec-cardCollapse\" id=\"category\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-addon1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"search-category\" class=\"form-control\" type=\"search\" placeholder=\"{{ 'admin.product.search_category'|trans }}\" aria-label=\"Search\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t{% macro tree(ChoicedIds, Category, form) %}
\t\t\t\t\t\t\t\t\t{% import _self as selfMacro %}
\t\t\t\t\t\t\t\t\t<li class=\"c-directoryTree--registerItem category-li\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"admin_product_category_{{ Category.id }}\" name=\"admin_product[Category][]\" value=\"{{ Category.id }}\" {% if Category.id in ChoicedIds %} checked {% endif %}>
\t\t\t\t\t\t\t\t\t\t<label for=\"admin_product_category_{{ Category.id }}\">{{ Category.name }}</label>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t{% for child,ChildCategory in Category.children %}
\t\t\t\t\t\t\t\t\t\t\t\t{{ selfMacro.tree(ChoicedIds, ChildCategory, form) }}
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endmacro %}

\t\t\t\t\t\t\t\t<div class=\"c-directoryTree--register rounded border mb-3 p-3\">
\t\t\t\t\t\t\t\t\t{% import _self as renderMacro %}
\t\t\t\t\t\t\t\t\t{% for TopCategory in TopCategories %}
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t{{ renderMacro.tree(ChoicedCategoryIds, TopCategory, form.Category) }}
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t{{ form_errors(form.Category) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-block text-center\">
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-block btn-ec-regular\" data-action=\"confirm\" href=\"{{ path('admin_product_category') }}\" title=\"{{ 'admin.common.move_to_confirm_message'|trans({ '%name%' : 'admin.product.category_management'|trans}) }}\">{{ 'admin.product.move_to_category'|trans }}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card rounded border-0 mb-4\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t<span class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t{{ 'admin.product.tag__product_card_title'|trans }}
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4 text-right\">
\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" href=\"#tag\" aria-expanded=\"false\" aria-controls=\"tag\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up fa-lg\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"collapse show ec-cardCollapse\" id=\"tag\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t{% if(Tags|length > 0) %}
\t\t\t\t\t\t\t\t\t{% for Tag in Tags %}
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block mb-2 mr-2\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-primary\" type=\"button\">{{ Tag.name }}</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t<div class=\"d-block mb-3\" data-toggle=\"collapse\" href=\"#allTags\" role=\"button\" aria-expanded=\"false\" aria-controls=\"allTags\">
\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold\">{{ 'admin.product.save_tag'|trans }}</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"collapse p-3 bg-ec-lightGray mb-3 ec-collapse\" id=\"allTags\">
\t\t\t\t\t\t\t\t\t<div class=\"d-none\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.Tag) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% if(TagsList|length > 0) %}
\t\t\t\t\t\t\t\t\t\t{% for Tag in TagsList %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block mb-2 mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-secondary\" type=\"button\" data-tag-id=\"{{ Tag.id }}\">{{ Tag.name }}</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t<div class=\"d-block mb-3\" data-toggle=\"collapse\" href=\"#allTags\" role=\"button\" aria-expanded=\"false\" aria-controls=\"allTags\"></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"d-block text-center\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('admin_product_tag') }}\" class=\"btn btn-block btn-ec-regular\" data-action=\"confirm\" title=\"{{ 'admin.common.move_to_confirm_message'|trans({ '%name%' : 'admin.product.tag_management'|trans }) }}\">{{ 'admin.product.move_to_tag'|trans }}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card rounded border-0 mb-4\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t<span class=\"card-title\">{{ 'admin.product.create_date__card_title'|trans }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4 text-right\">
\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" href=\"#update\" aria-expanded=\"false\" aria-controls=\"update\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up fa-lg\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse show ec-cardCollapse\" id=\"update\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-flag mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t<span>{{ 'admin.common.create_date'|trans }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<span>：{{ Product.create_date|date_min }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-refresh mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t<span>{{ 'admin.common.update_date'|trans }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<span>：{{ Product.update_date|date_min }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t<span>{{ 'admin.common.last_updater'|trans }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<span>：{{ Product.Creator ? Product.Creator.name }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card rounded border-0 mb-4\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.shop_memo'|trans }}\">
\t\t\t\t\t\t\t\t\t\t<span class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t{{ 'admin.common.shop_memo'|trans }}
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-lg ml-1\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4 text-right\">
\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" href=\"#shopMemo\" aria-expanded=\"false\" aria-controls=\"shopMemo\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up fa-lg\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse show ec-cardCollapse\" id=\"shopMemo\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t{{ form_widget(form.note, { attr : { rows : \"8\"} }) }}
\t\t\t\t\t\t\t\t{{ form_errors(form.note) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"c-conversionArea\">
\t\t\t<div class=\"c-conversionArea__container\">
\t\t\t\t<div class=\"row justify-content-between align-items-center\">
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<div class=\"c-conversionArea__leftBlockItem\">
\t\t\t\t\t\t\t<a class=\"c-baseLink\" href=\"{{ path('admin_product_page', { page_no : app.session.get('eccube.admin.product.search.page_no')|default('1') } ) }}\" data-action=\"confirm\" title=\"{{ 'admin.common.move_to_confirm_message'|trans({'%name%' : 'admin.product.product_list'|trans }) }}\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<span>{{ 'admin.product.product_list'|trans }}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t{{ form_widget(form.Status) }}
\t\t\t\t\t\t\t\t{{ form_errors(form.Status) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-ec-conversion px-5\" type=\"submit\">{{ 'admin.common.registration'|trans }}</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>
{% endblock %}
", "@admin/Product/product.twig", "C:\\MAMP\\htdocs\\ec-cube\\src\\Eccube\\Resource\\template\\admin\\Product\\product.twig");
    }
}
