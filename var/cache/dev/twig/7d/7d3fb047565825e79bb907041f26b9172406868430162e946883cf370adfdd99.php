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

/* Product/detail.twig */
class __TwigTemplate_25a7ca9a4394c4f42feebdcf10edfc67b2e535b774b1002a369ca4a6f700e0ae extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Product/detail.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Product/detail.twig"));

        // line 13
        $context["body_class"] = "product_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Product/detail.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 16
        echo "\t<style>

\t\t.slick-slider {
\t\t\tmargin-bottom: 30px;
\t\t}

\t\t.slick-dots {
\t\t\tposition: absolute;
\t\t\tbottom: -45px;
\t\t\tdisplay: block;
\t\t\twidth: 100%;
\t\t\tpadding: 0;
\t\t\tlist-style: none;
\t\t\ttext-align: center;
\t\t}

\t\t.slick-dots li {
\t\t\tposition: relative;
\t\t\tdisplay: inline-block;
\t\t\twidth: 20px;
\t\t\theight: 20px;
\t\t\tmargin: 0 5px;
\t\t\tpadding: 0;

\t\t\tcursor: pointer;
\t\t}

\t\t.slick-dots li button {
\t\t\tfont-size: 0;
\t\t\tline-height: 0;
\t\t\tdisplay: block;
\t\t\twidth: 20px;
\t\t\theight: 20px;
\t\t\tpadding: 5px;
\t\t\tcursor: pointer;
\t\t\tcolor: transparent;
\t\t\tborder: 0;
\t\t\toutline: none;
\t\t\tbackground: transparent;
\t\t}

\t\t.slick-dots li button:hover,
\t\t.slick-dots li button:focus {
\t\t\toutline: none;
\t\t}

\t\t.slick-dots li button:hover:before,
\t\t.slick-dots li button:focus:before {
\t\t\topacity: 1;
\t\t}

\t\t.slick-dots li button:before {
\t\t\tcontent: \" \";
\t\t\tline-height: 20px;
\t\t\tposition: absolute;
\t\t\ttop: 0;
\t\t\tleft: 0;
\t\t\twidth: 12px;
\t\t\theight: 12px;
\t\t\ttext-align: center;
\t\t\topacity: .25;
\t\t\tbackground-color: black;
\t\t\tborder-radius: 50%;

\t\t}

\t\t.slick-dots li.slick-active button:before {
\t\t\topacity: .75;
\t\t\tbackground-color: black;
\t\t}

\t\t.slick-dots li button.thumbnail img {
\t\t\twidth: 0;
\t\t\theight: 0;
\t\t}
\t</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 95
        echo "\t<script>
\t\teccube.classCategories = ";
        // line 96
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getClassCategoriesAsJson((isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 96, $this->source); })()));
        echo ";

// 規格2に選択肢を割り当てる。
function fnSetClassCategories(form, classcat_id2_selected) {
var \$form = \$(form);
var product_id = \$form.find('input[name=product_id]').val();
var \$sele1 = \$form.find('select[name=classcategory_id1]');
var \$sele2 = \$form.find('select[name=classcategory_id2]');
eccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
}

";
        // line 107
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 107)) {
            echo "fnSetClassCategories(\$('#form1'), ";
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "classcategory_id2", [], "any", false, false, false, 107), "vars", [], "any", false, false, false, 107), "value", [], "any", false, false, false, 107));
            echo ");
";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 108
($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 108)) {
            // line 109
            echo "eccube.checkStock(\$('#form1'), ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 109, $this->source); })()), "id", [], "any", false, false, false, 109), "html", null, true);
            echo ", ";
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "classcategory_id1", [], "any", false, false, false, 109), "vars", [], "any", false, false, false, 109), "value", [], "any", false, false, false, 109));
            echo ", null);";
        }
        // line 110
        echo "\t</script>
\t<script>
\t\t\$(function () { // bfcache無効化
\$(window).bind('pageshow', function (event) {
if (event.originalEvent.persisted) {
location.reload(true);
}
});

\$('.item_visual').slick({
dots: false,
arrows: false,
responsive: [
{
breakpoint: 768,
settings: {
dots: true
}
}
]
});

\$('.slideThumb').on('click', function () {
var index = \$(this).attr('data-index');
\$('.item_visual').slick('slickGoTo', index, false);
})
});
\t</script>
\t<script>
\t\t\$(function () {
\$('.add-cart').on('click', function (event){
";
        // line 141
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 141)) {
            // line 142
            echo "// 規格1フォームの必須チェック
if (\$('#classcategory_id1').val() == '__unselected' || \$('#classcategory_id1').val() == '') {
\$('#classcategory_id1')[0].setCustomValidity('";
            // line 144
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("項目が選択されていません"), "html", null, true);
            echo "');
return true;
} else {
\$('#classcategory_id1')[0].setCustomValidity('');
}
";
        }
        // line 150
        echo "
";
        // line 151
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 151)) {
            // line 152
            echo "// 規格2フォームの必須チェック
if (\$('#classcategory_id2').val() == '__unselected' || \$('#classcategory_id2').val() == '') {
\$('#classcategory_id2')[0].setCustomValidity('";
            // line 154
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("項目が選択されていません"), "html", null, true);
            echo "');
return true;
} else {
\$('#classcategory_id2')[0].setCustomValidity('');
}
";
        }
        // line 160
        echo "
// 個数フォームのチェック
if (\$('#quantity').val() < 1) {
\$('#quantity')[0].setCustomValidity('";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("1以上で入力してください。"), "html", null, true);
        echo "');
return true;
} else {
\$('#quantity')[0].setCustomValidity('');
} event.preventDefault();
\$form = \$('#form1');
\$.ajax({
url: \$form.attr('action'),
type: \$form.attr('method'),
data: \$form.serialize(),
dataType: 'json',
beforeSend: function (xhr, settings) { // Buttonを無効にする
\$('.add-cart').prop('disabled', true);
}
}).done(function (data) { // レスポンス内のメッセージをalertで表示
\$.each(data.messages, function () {
\$('#ec-modal-header').html(this);
});

\$('.ec-modal').show()

// カートブロックを更新する
\$.ajax({url: \"";
        // line 185
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("block_cart");
        echo "\", type: 'GET', dataType: 'html'}).done(function (html) {
\$('.ec-headerRole__cart').html(html);
});
}).fail(function (data) {
alert('";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートへの追加に失敗しました。"), "html", null, true);
        echo "');
}).always(function (data) { // Buttonを有効にする
\$('.add-cart').prop('disabled', false);
});
});
});

\$('.ec-modal-wrap').on('click', function (e) { // モーダル内の処理は外側にバブリングさせない
e.stopPropagation();
});
\$('.ec-modal-overlay, .ec-modal, .ec-modal-close, .ec-inlineBtn--cancel').on('click', function () {
\$('.ec-modal').hide()
});
\t</script>
\t<script type=\"application/ld+json\">
\t\t{
\t\t        \"@context\": \"https://schema.org/\",
\t\t        \"@type\": \"Product\",
\t\t        \"name\": \"";
        // line 207
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 207, $this->source); })()), "name", [], "any", false, false, false, 207), "html", null, true);
        echo "\",
\t\t        \"image\": [
\t\t";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 209, $this->source); })()), "ProductImage", [], "any", false, false, false, 209));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 210
            echo "\t\t\t\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 210, $this->source); })()), "request", [], "any", false, false, false, 210), "schemeAndHttpHost", [], "any", false, false, false, 210), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["img"], "save_image"), "html", null, true);
            echo "\"
\t\t\t";
            // line 211
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 211)) {
                echo ",
\t\t\t";
            }
            // line 213
            echo "
\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 215
            echo "\t\t\t\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 215, $this->source); })()), "request", [], "any", false, false, false, 215), "schemeAndHttpHost", [], "any", false, false, false, 215), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
            echo "\"
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "\t\t],
\t\t        \"description\": \"";
        // line 218
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_replace_filter(((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_list", [], "any", true, true, false, 218)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_list", [], "any", false, false, false, 218), twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 218, $this->source); })()), "description_detail", [], "any", false, false, false, 218))) : (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 218, $this->source); })()), "description_detail", [], "any", false, false, false, 218))), ["
" => "", "" => ""]), 0, 300), "html", null, true);
        echo "\",
\t\t";
        // line 219
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 219, $this->source); })()), "code_min", [], "any", false, false, false, 219)) {
            // line 220
            echo "\t\t\t\"sku\": \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 220, $this->source); })()), "code_min", [], "any", false, false, false, 220), "html", null, true);
            echo "\",
\t\t";
        }
        // line 222
        echo "\t\t\"offers\": {
\t\t            \"@type\": \"Offer\",
\t\t            \"url\": \"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 224, $this->source); })()), "id", [], "any", false, false, false, 224)]), "html", null, true);
        echo "\",
\t\t            \"priceCurrency\": \"";
        // line 225
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 225, $this->source); })()), "currency", [], "any", false, false, false, 225), "html", null, true);
        echo "\",
\t\t            \"price\":
\t\t";
        // line 227
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 227, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 227), "html", null, true);
        echo ",
\t\t            \"availability\": \"";
        // line 228
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 228, $this->source); })()), "stock_find", [], "any", false, false, false, 228)) ? ("InStock") : ("OutOfStock"));
        echo "\"
\t\t        }
\t\t    }
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 234
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 235
        echo "\t<div class=\"ec-productRole\">
\t\t<div class=\"ec-grid2\">
\t\t\t<div class=\"ec-grid2__cell\">
\t\t\t\t<div class=\"ec-sliderItemRole\">

\t\t\t\t\t<div class=\"item_visual\">
\t\t\t\t\t\t";
        // line 241
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 241, $this->source); })()), "ProductImage", [], "any", false, false, false, 241));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
            // line 242
            echo "\t\t\t\t\t\t\t<div class=\"slide-item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["ProductImage"], "save_image"), "html", null, true);
            echo "\" alt=\"";
            ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 242)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 242, $this->source); })()), "name", [], "any", false, false, false, 242), "html", null, true))) : (print ("")));
            echo "\"></div>
\t\t\t\t\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 244
            echo "\t\t\t\t\t\t\t<div class=\"slide-item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
            echo "\" alt=\"";
            ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 244)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 244, $this->source); })()), "name", [], "any", false, false, false, 244), "html", null, true))) : (print ("")));
            echo "\"/></div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item_nav\">
\t\t\t\t\t\t";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 248, $this->source); })()), "ProductImage", [], "any", false, false, false, 248));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
            // line 249
            echo "\t\t\t\t\t\t\t<div class=\"slideThumb\" data-index=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 249), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["ProductImage"], "save_image"), "html", null, true);
            echo "\" alt=\"\"></div>
\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"ec-grid2__cell\">
\t\t\t\t<div
\t\t\t\t\tclass=\"ec-productRole__profile\">
\t\t\t\t\t";
        // line 258
        echo "\t\t\t\t\t<div class=\"ec-productRole__title\">
\t\t\t\t\t\t<div class=\"ec-headingSubtitle\">";
        // line 259
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 259, $this->source); })()), "subtitle", [], "any", false, false, false, 259), "html", null, true);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 262
        echo "\t\t\t\t\t<div class=\"ec-productRole__title\">
\t\t\t\t\t\t<h2 class=\"ec-headingTitle\">";
        // line 263
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 263, $this->source); })()), "name", [], "any", false, false, false, 263), "html", null, true);
        echo "</h2>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 266
        echo "\t\t\t\t\t<ul class=\"ec-productRole__tags\">
\t\t\t\t\t\t";
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 267, $this->source); })()), "Tags", [], "any", false, false, false, 267));
        foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
            // line 268
            echo "\t\t\t\t\t\t\t<li class=\"ec-productRole__tag tag_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "id", [], "any", false, false, false, 268), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["Tag"], "html", null, true);
            echo "</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 270
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        // line 272
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 272, $this->source); })()), "hasProductClass", [], "any", false, false, false, 272)) {
            // line 273
            echo "<div class=\"ec-productRole__priceRegular\">
\t\t\t\t\t\t\t";
            // line 274
            if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 274, $this->source); })()), "getPrice01Min", [], "any", false, false, false, 274)) && (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 274, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, false, 274) == twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 274, $this->source); })()), "getPrice01IncTaxMax", [], "any", false, false, false, 274)))) {
                // line 275
                echo "\t\t\t\t\t\t\t\t<span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("通常価格"), "html", null, true);
                echo "：<span class=\"price01-default\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 275, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, false, 275)), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"ec-productRole__priceRegularTax\">";
                // line 277
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t";
            } elseif (( !(null === twig_get_attribute($this->env, $this->source,             // line 278
(isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 278, $this->source); })()), "getPrice01Min", [], "any", false, false, false, 278)) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 278, $this->source); })()), "getPrice01Max", [], "any", false, false, false, 278)))) {
                // line 279
                echo "\t\t\t\t\t\t\t\t<span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("通常価格"), "html", null, true);
                echo "：<span class=\"price01-default\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 279, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, false, 279)), "html", null, true);
                echo "～
\t\t\t\t\t\t\t\t\t\t";
                // line 280
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 280, $this->source); })()), "getPrice01IncTaxMax", [], "any", false, false, false, 280)), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"ec-productRole__priceRegularTax\">";
                // line 282
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t";
            }
            // line 284
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 286
            echo "\t\t\t\t\t\t";
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 286, $this->source); })()), "getPrice01Max", [], "any", false, false, false, 286))) {
                // line 287
                echo "\t\t\t\t\t\t\t<span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("通常価格"), "html", null, true);
                echo "：";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 287, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, false, 287)), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t<span class=\"ec-productRole__priceRegularTax\">";
                // line 288
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t";
            }
            // line 290
            echo "\t\t\t\t\t";
        }
        // line 291
        echo "\t\t\t\t\t";
        // line 292
        echo "\t\t\t\t\t<div class=\"ec-productRole__price\">
\t\t\t\t\t\t";
        // line 293
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 293, $this->source); })()), "hasProductClass", [], "any", false, false, false, 293)) {
            // line 294
            if ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 294, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 294) == twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 294, $this->source); })()), "getPrice02IncTaxMax", [], "any", false, false, false, 294))) {
                // line 295
                echo "\t\t\t\t\t\t\t\t<div class=\"ec-price\">
\t\t\t\t\t\t\t\t\t<span class=\"ec-price__price price02-default\">";
                // line 296
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 296, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 296)), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"ec-price__tax\">";
                // line 297
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } else {
                // line 300
                echo "\t\t\t\t\t\t\t\t<div class=\"ec-price\">
\t\t\t\t\t\t\t\t\t<span class=\"ec-price__price price02-default\">";
                // line 301
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 301, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 301)), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t～
\t\t\t\t\t\t\t\t\t\t";
                // line 303
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 303, $this->source); })()), "getPrice02IncTaxMax", [], "any", false, false, false, 303)), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"ec-price__tax\">";
                // line 304
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 307
            echo "\t\t\t\t\t\t";
        } else {
            // line 308
            echo "\t\t\t\t\t\t\t<div class=\"ec-price\">
\t\t\t\t\t\t\t\t<span class=\"ec-price__price\">";
            // line 309
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 309, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 309)), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<span class=\"ec-price__tax\">";
            // line 310
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 313
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 315
        echo "\t\t\t\t\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 315, $this->source); })()), "code_min", [], "any", false, false, false, 315))) {
            // line 316
            echo "\t\t\t\t\t\t<div class=\"ec-productRole__code\">
\t\t\t\t\t\t\t";
            // line 317
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品コード"), "html", null, true);
            echo "：
\t\t\t\t\t\t\t<span class=\"product-code-default\">";
            // line 318
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 318, $this->source); })()), "code_min", [], "any", false, false, false, 318), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
            // line 319
            if ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 319, $this->source); })()), "code_min", [], "any", false, false, false, 319) != twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 319, $this->source); })()), "code_max", [], "any", false, false, false, 319))) {
                // line 320
                echo "\t\t\t\t\t\t\t\t\t～
\t\t\t\t\t\t\t\t\t";
                // line 321
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 321, $this->source); })()), "code_max", [], "any", false, false, false, 321), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            }
            // line 323
            echo "\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 326
        echo "\t\t\t\t\t";
        // line 327
        echo "\t\t\t\t\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 327, $this->source); })()), "ProductCategories", [], "any", false, false, false, 327))) {
            // line 328
            echo "\t\t\t\t\t\t<div class=\"ec-productRole__category\">
\t\t\t\t\t\t\t<div>";
            // line 329
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("関連カテゴリ"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t";
            // line 330
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 330, $this->source); })()), "ProductCategories", [], "any", false, false, false, 330));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
                // line 331
                echo "\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t";
                // line 333
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, false, 333), "path", [], "any", false, false, false, 333));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                    // line 334
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
                    echo "?category_id=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 334), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, false, 334), "html", null, true);
                    echo "</a>";
                    // line 335
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 335) == false)) {
                        // line 336
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span>＞</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 339
                echo "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 342
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 344
        echo "\t\t\t\t\t<form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_add_cart", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 344, $this->source); })()), "id", [], "any", false, false, false, 344)]), "html", null, true);
        echo "\" method=\"post\" id=\"form1\" name=\"form1\">
\t\t\t\t\t\t";
        // line 345
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 345, $this->source); })()), "stock_find", [], "any", false, false, false, 345)) {
            // line 346
            echo "\t\t\t\t\t\t\t<div class=\"ec-productRole__actions\">
\t\t\t\t\t\t\t\t";
            // line 347
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 347)) {
                // line 348
                echo "\t\t\t\t\t\t\t\t\t<div class=\"ec-select\">
\t\t\t\t\t\t\t\t\t\t";
                // line 349
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 349, $this->source); })()), "classcategory_id1", [], "any", false, false, false, 349), 'widget');
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 350
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 350, $this->source); })()), "classcategory_id1", [], "any", false, false, false, 350), 'errors');
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                // line 352
                if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 352)) {
                    // line 353
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"ec-select\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 354
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 354, $this->source); })()), "classcategory_id2", [], "any", false, false, false, 354), 'widget');
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 355
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 355, $this->source); })()), "classcategory_id2", [], "any", false, false, false, 355), 'errors');
                    echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 358
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 359
            echo "\t\t\t\t\t\t\t\t<div class=\"ec-numberInput\">
\t\t\t\t\t\t\t\t\t<span>";
            // line 360
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 361
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 361, $this->source); })()), "quantity", [], "any", false, false, false, 361), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 362
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 362, $this->source); })()), "quantity", [], "any", false, false, false, 362), 'errors');
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ec-productRole__btn\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"ec-blockBtn--action add-cart\">
\t\t\t\t\t\t\t\t\t";
            // line 367
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに入れる"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 371
            echo "\t\t\t\t\t\t\t<div class=\"ec-productRole__btn\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"ec-blockBtn--action\" disabled=\"disabled\">
\t\t\t\t\t\t\t\t\t";
            // line 373
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ただいま品切れ中です。"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 377
        echo "
\t\t\t\t\t\t";
        // line 378
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 378, $this->source); })()), 'rest');
        echo "
\t\t\t\t\t</form>
\t\t\t\t\t<div class=\"ec-modal\">
\t\t\t\t\t\t<div class=\"ec-modal-overlay\">
\t\t\t\t\t\t\t<div class=\"ec-modal-wrap\">
\t\t\t\t\t\t\t\t<span class=\"ec-modal-close\">
\t\t\t\t\t\t\t\t\t<span class=\"ec-icon\"><img src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross-dark.svg"), "html", null, true);
        echo "\" alt=\"\"/></span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div id=\"ec-modal-header\" class=\"text-center\">";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに追加しました。"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"ec-modal-box\">
\t\t\t\t\t\t\t\t\t<div class=\"ec-role\">
\t\t\t\t\t\t\t\t\t\t<span class=\"ec-inlineBtn--cancel\">";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お買い物を続ける"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 390
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
        echo "\" class=\"ec-inlineBtn--action\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートへ進む"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 396
        if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 396, $this->source); })()), "option_favorite_product", [], "any", false, false, false, 396)) {
            // line 397
            echo "\t\t\t\t\t\t<form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_add_favorite", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 397, $this->source); })()), "id", [], "any", false, false, false, 397)]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t<div class=\"ec-productRole__btn\">
\t\t\t\t\t\t\t\t";
            // line 399
            if (((isset($context["is_favorite"]) || array_key_exists("is_favorite", $context) ? $context["is_favorite"] : (function () { throw new RuntimeError('Variable "is_favorite" does not exist.', 399, $this->source); })()) == false)) {
                // line 400
                echo "\t\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--cancel\">
\t\t\t\t\t\t\t\t\t\t";
                // line 401
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入りに追加"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t";
            } else {
                // line 404
                echo "\t\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--cancel\" disabled=\"disabled\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入りに追加済です。"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t";
            }
            // line 407
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t";
        }
        // line 410
        echo "\t\t\t\t\t<div class=\"ec-productRole__description\">";
        echo twig_nl2br(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 410, $this->source); })()), "description_detail", [], "any", false, false, false, 410));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 415
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 415, $this->source); })()), "freearea", [], "any", false, false, false, 415)) {
            // line 416
            echo "\t\t\t<div class=\"ec-productRole__description\">
\t\t\t\t";
            // line 417
            echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 417, $this->source); })()), "freearea", [], "any", false, false, false, 417)));
            echo "
\t\t\t</div>
\t\t";
        }
        // line 420
        echo "\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Product/detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  973 => 420,  967 => 417,  964 => 416,  962 => 415,  953 => 410,  948 => 407,  941 => 404,  935 => 401,  932 => 400,  930 => 399,  924 => 397,  922 => 396,  911 => 390,  907 => 389,  901 => 386,  896 => 384,  887 => 378,  884 => 377,  877 => 373,  873 => 371,  866 => 367,  858 => 362,  854 => 361,  850 => 360,  847 => 359,  844 => 358,  838 => 355,  834 => 354,  831 => 353,  829 => 352,  824 => 350,  820 => 349,  817 => 348,  815 => 347,  812 => 346,  810 => 345,  805 => 344,  801 => 342,  793 => 339,  777 => 336,  775 => 335,  767 => 334,  750 => 333,  746 => 331,  742 => 330,  738 => 329,  735 => 328,  732 => 327,  730 => 326,  725 => 323,  720 => 321,  717 => 320,  715 => 319,  711 => 318,  707 => 317,  704 => 316,  701 => 315,  698 => 313,  692 => 310,  688 => 309,  685 => 308,  682 => 307,  676 => 304,  672 => 303,  667 => 301,  664 => 300,  658 => 297,  654 => 296,  651 => 295,  649 => 294,  647 => 293,  644 => 292,  642 => 291,  639 => 290,  634 => 288,  627 => 287,  624 => 286,  620 => 284,  615 => 282,  610 => 280,  603 => 279,  601 => 278,  597 => 277,  589 => 275,  587 => 274,  584 => 273,  581 => 272,  578 => 270,  567 => 268,  563 => 267,  560 => 266,  555 => 263,  552 => 262,  547 => 259,  544 => 258,  536 => 251,  517 => 249,  500 => 248,  496 => 246,  485 => 244,  467 => 242,  449 => 241,  441 => 235,  431 => 234,  416 => 228,  412 => 227,  407 => 225,  403 => 224,  399 => 222,  393 => 220,  391 => 219,  386 => 218,  383 => 217,  373 => 215,  359 => 213,  354 => 211,  348 => 210,  330 => 209,  325 => 207,  304 => 189,  297 => 185,  272 => 163,  267 => 160,  258 => 154,  254 => 152,  252 => 151,  249 => 150,  240 => 144,  236 => 142,  234 => 141,  201 => 110,  194 => 109,  192 => 108,  186 => 107,  172 => 96,  169 => 95,  159 => 94,  73 => 16,  63 => 15,  52 => 11,  50 => 13,  37 => 11,);
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
{% extends 'default_frame.twig' %}

{% set body_class = 'product_page' %}

{% block stylesheet %}
\t<style>

\t\t.slick-slider {
\t\t\tmargin-bottom: 30px;
\t\t}

\t\t.slick-dots {
\t\t\tposition: absolute;
\t\t\tbottom: -45px;
\t\t\tdisplay: block;
\t\t\twidth: 100%;
\t\t\tpadding: 0;
\t\t\tlist-style: none;
\t\t\ttext-align: center;
\t\t}

\t\t.slick-dots li {
\t\t\tposition: relative;
\t\t\tdisplay: inline-block;
\t\t\twidth: 20px;
\t\t\theight: 20px;
\t\t\tmargin: 0 5px;
\t\t\tpadding: 0;

\t\t\tcursor: pointer;
\t\t}

\t\t.slick-dots li button {
\t\t\tfont-size: 0;
\t\t\tline-height: 0;
\t\t\tdisplay: block;
\t\t\twidth: 20px;
\t\t\theight: 20px;
\t\t\tpadding: 5px;
\t\t\tcursor: pointer;
\t\t\tcolor: transparent;
\t\t\tborder: 0;
\t\t\toutline: none;
\t\t\tbackground: transparent;
\t\t}

\t\t.slick-dots li button:hover,
\t\t.slick-dots li button:focus {
\t\t\toutline: none;
\t\t}

\t\t.slick-dots li button:hover:before,
\t\t.slick-dots li button:focus:before {
\t\t\topacity: 1;
\t\t}

\t\t.slick-dots li button:before {
\t\t\tcontent: \" \";
\t\t\tline-height: 20px;
\t\t\tposition: absolute;
\t\t\ttop: 0;
\t\t\tleft: 0;
\t\t\twidth: 12px;
\t\t\theight: 12px;
\t\t\ttext-align: center;
\t\t\topacity: .25;
\t\t\tbackground-color: black;
\t\t\tborder-radius: 50%;

\t\t}

\t\t.slick-dots li.slick-active button:before {
\t\t\topacity: .75;
\t\t\tbackground-color: black;
\t\t}

\t\t.slick-dots li button.thumbnail img {
\t\t\twidth: 0;
\t\t\theight: 0;
\t\t}
\t</style>
{% endblock %}

{% block javascript %}
\t<script>
\t\teccube.classCategories = {{ class_categories_as_json(Product)|raw }};

// 規格2に選択肢を割り当てる。
function fnSetClassCategories(form, classcat_id2_selected) {
var \$form = \$(form);
var product_id = \$form.find('input[name=product_id]').val();
var \$sele1 = \$form.find('select[name=classcategory_id1]');
var \$sele2 = \$form.find('select[name=classcategory_id2]');
eccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
}

{% if form.classcategory_id2 is defined %}fnSetClassCategories(\$('#form1'), {{ form.classcategory_id2.vars.value|json_encode|raw }});
{% elseif form.classcategory_id1 is defined %}
eccube.checkStock(\$('#form1'), {{ Product.id }}, {{ form.classcategory_id1.vars.value|json_encode|raw }}, null);{% endif %}
\t</script>
\t<script>
\t\t\$(function () { // bfcache無効化
\$(window).bind('pageshow', function (event) {
if (event.originalEvent.persisted) {
location.reload(true);
}
});

\$('.item_visual').slick({
dots: false,
arrows: false,
responsive: [
{
breakpoint: 768,
settings: {
dots: true
}
}
]
});

\$('.slideThumb').on('click', function () {
var index = \$(this).attr('data-index');
\$('.item_visual').slick('slickGoTo', index, false);
})
});
\t</script>
\t<script>
\t\t\$(function () {
\$('.add-cart').on('click', function (event){
{% if form.classcategory_id1 is defined %}
// 規格1フォームの必須チェック
if (\$('#classcategory_id1').val() == '__unselected' || \$('#classcategory_id1').val() == '') {
\$('#classcategory_id1')[0].setCustomValidity('{{ '項目が選択されていません'|trans }}');
return true;
} else {
\$('#classcategory_id1')[0].setCustomValidity('');
}
{% endif %}

{% if form.classcategory_id2 is defined %}
// 規格2フォームの必須チェック
if (\$('#classcategory_id2').val() == '__unselected' || \$('#classcategory_id2').val() == '') {
\$('#classcategory_id2')[0].setCustomValidity('{{ '項目が選択されていません'|trans }}');
return true;
} else {
\$('#classcategory_id2')[0].setCustomValidity('');
}
{% endif %}

// 個数フォームのチェック
if (\$('#quantity').val() < 1) {
\$('#quantity')[0].setCustomValidity('{{ '1以上で入力してください。'|trans }}');
return true;
} else {
\$('#quantity')[0].setCustomValidity('');
} event.preventDefault();
\$form = \$('#form1');
\$.ajax({
url: \$form.attr('action'),
type: \$form.attr('method'),
data: \$form.serialize(),
dataType: 'json',
beforeSend: function (xhr, settings) { // Buttonを無効にする
\$('.add-cart').prop('disabled', true);
}
}).done(function (data) { // レスポンス内のメッセージをalertで表示
\$.each(data.messages, function () {
\$('#ec-modal-header').html(this);
});

\$('.ec-modal').show()

// カートブロックを更新する
\$.ajax({url: \"{{ url('block_cart') }}\", type: 'GET', dataType: 'html'}).done(function (html) {
\$('.ec-headerRole__cart').html(html);
});
}).fail(function (data) {
alert('{{ 'カートへの追加に失敗しました。'|trans }}');
}).always(function (data) { // Buttonを有効にする
\$('.add-cart').prop('disabled', false);
});
});
});

\$('.ec-modal-wrap').on('click', function (e) { // モーダル内の処理は外側にバブリングさせない
e.stopPropagation();
});
\$('.ec-modal-overlay, .ec-modal, .ec-modal-close, .ec-inlineBtn--cancel').on('click', function () {
\$('.ec-modal').hide()
});
\t</script>
\t<script type=\"application/ld+json\">
\t\t{
\t\t        \"@context\": \"https://schema.org/\",
\t\t        \"@type\": \"Product\",
\t\t        \"name\": \"{{ Product.name }}\",
\t\t        \"image\": [
\t\t{% for img in Product.ProductImage %}
\t\t\t\"{{ app.request.schemeAndHttpHost }}{{ asset(img, 'save_image') }}\"
\t\t\t{% if not loop.last %},
\t\t\t{% endif %}

\t\t{% else %}
\t\t\t\"{{ app.request.schemeAndHttpHost }}{{ asset(''|no_image_product, 'save_image') }}\"
\t\t{% endfor %}
\t\t],
\t\t        \"description\": \"{{ Product.description_list | default(Product.description_detail) | replace({'\\n': '', '\\r': ''}) | slice(0,300) }}\",
\t\t{% if Product.code_min %}
\t\t\t\"sku\": \"{{ Product.code_min }}\",
\t\t{% endif %}
\t\t\"offers\": {
\t\t            \"@type\": \"Offer\",
\t\t            \"url\": \"{{ url('product_detail', {'id': Product.id}) }}\",
\t\t            \"priceCurrency\": \"{{ eccube_config.currency }}\",
\t\t            \"price\":
\t\t{{ Product.getPrice02IncTaxMin }},
\t\t            \"availability\": \"{{ Product.stock_find ? \"InStock\" : \"OutOfStock\" }}\"
\t\t        }
\t\t    }
\t</script>
{% endblock %}

{% block main %}
\t<div class=\"ec-productRole\">
\t\t<div class=\"ec-grid2\">
\t\t\t<div class=\"ec-grid2__cell\">
\t\t\t\t<div class=\"ec-sliderItemRole\">

\t\t\t\t\t<div class=\"item_visual\">
\t\t\t\t\t\t{% for ProductImage in Product.ProductImage %}
\t\t\t\t\t\t\t<div class=\"slide-item\"><img src=\"{{ asset(ProductImage, 'save_image') }}\" alt=\"{{ loop.first ? Product.name : '' }}\"></div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"slide-item\"><img src=\"{{ asset(''|no_image_product, 'save_image') }}\" alt=\"{{ loop.first ? Product.name : '' }}\"/></div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item_nav\">
\t\t\t\t\t\t{% for ProductImage in Product.ProductImage %}
\t\t\t\t\t\t\t<div class=\"slideThumb\" data-index=\"{{ loop.index0 }}\"><img src=\"{{ asset(ProductImage, 'save_image') }}\" alt=\"\"></div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"ec-grid2__cell\">
\t\t\t\t<div
\t\t\t\t\tclass=\"ec-productRole__profile\">
\t\t\t\t\t{# サブタイトル #}
\t\t\t\t\t<div class=\"ec-productRole__title\">
\t\t\t\t\t\t<div class=\"ec-headingSubtitle\">{{ Product.subtitle }}</div>
\t\t\t\t\t</div>
\t\t\t\t\t{# 商品名 #}
\t\t\t\t\t<div class=\"ec-productRole__title\">
\t\t\t\t\t\t<h2 class=\"ec-headingTitle\">{{ Product.name }}</h2>
\t\t\t\t\t</div>
\t\t\t\t\t{# タグ #}
\t\t\t\t\t<ul class=\"ec-productRole__tags\">
\t\t\t\t\t\t{% for Tag in Product.Tags %}
\t\t\t\t\t\t\t<li class=\"ec-productRole__tag tag_{{ Tag.id }}\">{{ Tag }}</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t\t{# 通常価格 #}
\t\t\t\t\t{% if Product.hasProductClass -%}
\t\t\t\t\t\t<div class=\"ec-productRole__priceRegular\">
\t\t\t\t\t\t\t{% if Product.getPrice01Min is not null and Product.getPrice01IncTaxMin == Product.getPrice01IncTaxMax %}
\t\t\t\t\t\t\t\t<span class=\"ec-productRole__priceRegularPrice\">{{ '通常価格'|trans }}：<span class=\"price01-default\">{{ Product.getPrice01IncTaxMin|price }}</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"ec-productRole__priceRegularTax\">{{ '税込'|trans }}</span>
\t\t\t\t\t\t\t{% elseif Product.getPrice01Min is not null and Product.getPrice01Max is not null %}
\t\t\t\t\t\t\t\t<span class=\"ec-productRole__priceRegularPrice\">{{ '通常価格'|trans }}：<span class=\"price01-default\">{{ Product.getPrice01IncTaxMin|price }}～
\t\t\t\t\t\t\t\t\t\t{{ Product.getPrice01IncTaxMax|price }}</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"ec-productRole__priceRegularTax\">{{ '税込'|trans }}</span>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{% if Product.getPrice01Max is not null %}
\t\t\t\t\t\t\t<span class=\"ec-productRole__priceRegularPrice\">{{ '通常価格'|trans }}：{{ Product.getPrice01IncTaxMin|price }}</span>
\t\t\t\t\t\t\t<span class=\"ec-productRole__priceRegularTax\">{{ '税込'|trans }}</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t{# 販売価格 #}
\t\t\t\t\t<div class=\"ec-productRole__price\">
\t\t\t\t\t\t{% if Product.hasProductClass -%}
\t\t\t\t\t\t\t{% if Product.getPrice02IncTaxMin == Product.getPrice02IncTaxMax %}
\t\t\t\t\t\t\t\t<div class=\"ec-price\">
\t\t\t\t\t\t\t\t\t<span class=\"ec-price__price price02-default\">{{ Product.getPrice02IncTaxMin|price }}</span>
\t\t\t\t\t\t\t\t\t<span class=\"ec-price__tax\">{{ '税込'|trans }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<div class=\"ec-price\">
\t\t\t\t\t\t\t\t\t<span class=\"ec-price__price price02-default\">{{ Product.getPrice02IncTaxMin|price }}
\t\t\t\t\t\t\t\t\t\t～
\t\t\t\t\t\t\t\t\t\t{{ Product.getPrice02IncTaxMax|price }}</span>
\t\t\t\t\t\t\t\t\t<span class=\"ec-price__tax\">{{ '税込'|trans }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"ec-price\">
\t\t\t\t\t\t\t\t<span class=\"ec-price__price\">{{ Product.getPrice02IncTaxMin|price }}</span>
\t\t\t\t\t\t\t\t<span class=\"ec-price__tax\">{{ '税込'|trans }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t{# 商品コード #}
\t\t\t\t\t{% if Product.code_min is not empty %}
\t\t\t\t\t\t<div class=\"ec-productRole__code\">
\t\t\t\t\t\t\t{{ '商品コード'|trans }}：
\t\t\t\t\t\t\t<span class=\"product-code-default\">{{ Product.code_min }}
\t\t\t\t\t\t\t\t{% if Product.code_min != Product.code_max %}
\t\t\t\t\t\t\t\t\t～
\t\t\t\t\t\t\t\t\t{{ Product.code_max }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{# 関連カテゴリ #}
\t\t\t\t\t{% if Product.ProductCategories is not empty %}
\t\t\t\t\t\t<div class=\"ec-productRole__category\">
\t\t\t\t\t\t\t<div>{{ '関連カテゴリ'|trans }}</div>
\t\t\t\t\t\t\t{% for ProductCategory in Product.ProductCategories %}
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t{% for Category in ProductCategory.Category.path %}
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ url('product_list') }}?category_id={{ Category.id }}\">{{ Category.name }}</a>
\t\t\t\t\t\t\t\t\t\t\t{%- if loop.last == false %}
\t\t\t\t\t\t\t\t\t\t\t\t<span>＞</span>
\t\t\t\t\t\t\t\t\t\t\t{% endif -%}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<form action=\"{{ url('product_add_cart', {id:Product.id}) }}\" method=\"post\" id=\"form1\" name=\"form1\">
\t\t\t\t\t\t{% if Product.stock_find %}
\t\t\t\t\t\t\t<div class=\"ec-productRole__actions\">
\t\t\t\t\t\t\t\t{% if form.classcategory_id1 is defined %}
\t\t\t\t\t\t\t\t\t<div class=\"ec-select\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.classcategory_id1) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.classcategory_id1) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% if form.classcategory_id2 is defined %}
\t\t\t\t\t\t\t\t\t\t<div class=\"ec-select\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.classcategory_id2) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.classcategory_id2) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<div class=\"ec-numberInput\">
\t\t\t\t\t\t\t\t\t<span>{{ '数量'|trans }}</span>
\t\t\t\t\t\t\t\t\t{{ form_widget(form.quantity) }}
\t\t\t\t\t\t\t\t\t{{ form_errors(form.quantity) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ec-productRole__btn\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"ec-blockBtn--action add-cart\">
\t\t\t\t\t\t\t\t\t{{ 'カートに入れる'|trans }}
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"ec-productRole__btn\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"ec-blockBtn--action\" disabled=\"disabled\">
\t\t\t\t\t\t\t\t\t{{ 'ただいま品切れ中です。'|trans }}
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{{ form_rest(form) }}
\t\t\t\t\t</form>
\t\t\t\t\t<div class=\"ec-modal\">
\t\t\t\t\t\t<div class=\"ec-modal-overlay\">
\t\t\t\t\t\t\t<div class=\"ec-modal-wrap\">
\t\t\t\t\t\t\t\t<span class=\"ec-modal-close\">
\t\t\t\t\t\t\t\t\t<span class=\"ec-icon\"><img src=\"{{ asset('assets/icon/cross-dark.svg') }}\" alt=\"\"/></span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div id=\"ec-modal-header\" class=\"text-center\">{{ 'カートに追加しました。'|trans }}</div>
\t\t\t\t\t\t\t\t<div class=\"ec-modal-box\">
\t\t\t\t\t\t\t\t\t<div class=\"ec-role\">
\t\t\t\t\t\t\t\t\t\t<span class=\"ec-inlineBtn--cancel\">{{ 'お買い物を続ける'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ url('cart') }}\" class=\"ec-inlineBtn--action\">{{ 'カートへ進む'|trans }}</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% if BaseInfo.option_favorite_product %}
\t\t\t\t\t\t<form action=\"{{ url('product_add_favorite', {id:Product.id}) }}\" method=\"post\">
\t\t\t\t\t\t\t<div class=\"ec-productRole__btn\">
\t\t\t\t\t\t\t\t{% if is_favorite == false %}
\t\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--cancel\">
\t\t\t\t\t\t\t\t\t\t{{ 'お気に入りに追加'|trans }}
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--cancel\" disabled=\"disabled\">{{ 'お気に入りに追加済です。'|trans }}
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"ec-productRole__description\">{{ Product.description_detail|raw|nl2br }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{% if Product.freearea %}
\t\t\t<div class=\"ec-productRole__description\">
\t\t\t\t{{ include(template_from_string(Product.freearea)) }}
\t\t\t</div>
\t\t{% endif %}
\t</div>
{% endblock %}
", "Product/detail.twig", "C:\\MAMP\\htdocs\\ec-cube\\src\\Eccube\\Resource\\template\\default\\Product\\detail.twig");
    }
}
