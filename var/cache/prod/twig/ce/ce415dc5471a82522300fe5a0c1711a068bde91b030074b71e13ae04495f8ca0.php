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
class __TwigTemplate_7b2838a4eabb7261a183518d96c705221dc8c6967585f1d553fdc639450013f4 extends \Eccube\Twig\Template
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
        // line 13
        $context["menus"] = [0 => "product", 1 => "product_edit"];
        // line 22
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/product.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "\t";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_registration"), "html", null, true);
        echo "
";
    }

    // line 18
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "\t";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_management"), "html", null, true);
        echo "
";
    }

    // line 24
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 43
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if ((($context["has_class"] ?? null) == false)) {
            // line 67
            echo "if (\$(\"# ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 67), "stock_unlimited", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\").prop(\"checked\")) {
\$(\"# ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 68), "stock", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68), "html", null, true);
            echo "\").attr(\"disabled\", \"disabled\").val('');
} else {
\$(\"# ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 70), "stock", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70), "html", null, true);
            echo "\").removeAttr(\"disabled\");
}
\$(\"# ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 72), "stock_unlimited", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72), "html", null, true);
            echo "\").on(\"click change\", function () {
if (\$(this).prop(\"checked\")) {
\$(\"# ";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 74), "stock", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74), "html", null, true);
            echo "\").attr(\"disabled\", \"disabled\").val('');
} else {
\$(\"# ";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 76), "stock", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76), "html", null, true);
            echo "\").removeAttr(\"disabled\");
}
});";
        }
        // line 79
        echo "var proto_img = '<div class=\"c-form__fileUploadThumbnail\" style=\"background-image:url(\\'__path__\\');\">' + '<a class=\"delete-image\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>' + '</div>';
var proto_add = '";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_images", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "prototype", [], "any", false, false, false, 80), 'widget');
        echo "';
var proto_del = '";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete_images", [], "any", false, false, false, 81), "vars", [], "any", false, false, false, 81), "prototype", [], "any", false, false, false, 81), 'widget');
        echo "';";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "images", [], "any", false, false, false, 81));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_images", [], "any", false, false, false, 86));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete_images", [], "any", false, false, false, 91));
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
        echo twig_escape_filter($this->env, _twig_default_filter(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_images", [], "any", false, false, false, 127)), 0), "html", null, true);
        echo ";
\$('# ";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_image", [], "any", false, false, false, 128), "vars", [], "any", false, false, false, 128), "id", [], "any", false, false, false, 128), "html", null, true);
        echo "').fileupload({
url: \"";
        // line 129
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_image_add");
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_image", [], "any", false, false, false, 173), "vars", [], "any", false, false, false, 173), "id", [], "any", false, false, false, 173), "html", null, true);
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
    }

    // line 225
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 251), 'widget');
        echo "
\t\t";
        // line 252
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "return_link", [], "any", false, false, false, 252), 'widget');
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
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 275)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 284), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "subtitle", [], "any", false, false, false, 295), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 296
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "subtitle", [], "any", false, false, false, 296), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 309), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 310), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 313
        if ((($context["has_class"] ?? null) == false)) {
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 325), "sale_type", [], "any", false, false, false, 325), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_image", [], "any", false, false, false, 347), 'widget', ["attr" => ["accept" => "image/*", "style" => "display:none;"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 348
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_image", [], "any", false, false, false, 348), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description_detail", [], "any", false, false, false, 366), 'widget', ["attr" => ["rows" => "8"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 367
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description_detail", [], "any", false, false, false, 367), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description_list", [], "any", false, false, false, 388), 'widget', ["attr" => ["rows" => "4"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 389
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description_list", [], "any", false, false, false, 389), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 394
        if ((($context["has_class"] ?? null) == false)) {
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 406), "price02", [], "any", false, false, false, 406), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 407
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 407), "price02", [], "any", false, false, false, 407), 'errors');
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 420), "price01", [], "any", false, false, false, 420), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 421
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 421), "price01", [], "any", false, false, false, 421), 'errors');
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 436), "stock", [], "any", false, false, false, 436), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 437
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 437), "stock", [], "any", false, false, false, 437), 'errors');
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 450), "stock_unlimited", [], "any", false, false, false, 450), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "search_word", [], "any", false, false, false, 463), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 464
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "search_word", [], "any", false, false, false, 464), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
        // line 469
        if ((($context["has_class"] ?? null) == false)) {
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 479), "code", [], "any", false, false, false, 479), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 480
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 480), "code", [], "any", false, false, false, 480), 'errors');
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 493), "sale_limit", [], "any", false, false, false, 493), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 494
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 494), "sale_limit", [], "any", false, false, false, 494), 'errors');
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 507), "delivery_duration", [], "any", false, false, false, 507), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 508
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 508), "delivery_duration", [], "any", false, false, false, 508), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t";
            // line 513
            if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_product_delivery_fee", [], "any", false, false, false, 513)) {
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
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 522), "delivery_fee", [], "any", false, false, false, 522), 'widget');
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 523
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 523), "delivery_fee", [], "any", false, false, false, 523), 'errors');
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 528
            echo "\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_product_tax_rule", [], "any", false, false, false, 528)) {
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
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 537), "tax_rate", [], "any", false, false, false, 537), 'widget');
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 538
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 538), "tax_rate", [], "any", false, false, false, 538), 'errors');
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
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 546), "eccube_form_options", [], "any", false, false, false, 546), "auto_render", [], "any", false, false, false, 546); }));
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
        if ((($context["has_class"] ?? null) == false)) {
            // line 566
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 566), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 566), "eccube_form_options", [], "any", false, false, false, 566), "auto_render", [], "any", false, false, false, 566); }));
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
        if ( !(null === ($context["id"] ?? null))) {
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
            if ((($context["has_class"] ?? null) == true)) {
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
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductClasses", [], "any", false, false, false, 620));
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
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_product_class", ["id" => ($context["id"] ?? null)]), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "free_area", [], "any", false, false, false, 680), 'widget', ["id" => "wysiwyg-area", "attr" => ["rows" => "8"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 681
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "free_area", [], "any", false, false, false, 681), 'errors');
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
        if ( !(null === ($context["id"] ?? null))) {
            // line 694
            echo "\t\t\t\t\t\t<div class=\"card rounded border-0 mb-4\">
\t\t\t\t\t\t\t<div class=\"collapse show ec-cardCollapse\" id=\"preview\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-block text-center\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-block btn-ec-regular\" target=\"_blank\" href=\"";
            // line 698
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => ($context["id"] ?? null)]), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["TopCategories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["TopCategory"]) {
            // line 752
            echo "\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 753
            echo twig_call_macro($macros["renderMacro"], "macro_tree", [($context["ChoicedCategoryIds"] ?? null), $context["TopCategory"], twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Category", [], "any", false, false, false, 753)], 753, $context, $this->getSourceContext());
            echo "
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TopCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 756
        echo "\t\t\t\t\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Category", [], "any", false, false, false, 756), 'errors');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-block text-center\">
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-block btn-ec-regular\" data-action=\"confirm\" href=\"";
        // line 759
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_category");
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
        if ((twig_length_filter($this->env, ($context["Tags"] ?? null)) > 0)) {
            // line 785
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Tags"] ?? null));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Tag", [], "any", false, false, false, 800), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 802
        if ((twig_length_filter($this->env, ($context["TagsList"] ?? null)) > 0)) {
            // line 803
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["TagsList"] ?? null));
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
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_tag");
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
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "create_date", [], "any", false, false, false, 840)), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "update_date", [], "any", false, false, false, 849)), "html", null, true);
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
        ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "Creator", [], "any", false, false, false, 858)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "Creator", [], "any", false, false, false, 858), "name", [], "any", false, false, false, 858), "html", null, true))) : (print ("")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, false, 884), 'widget', ["attr" => ["rows" => "8"]]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 885
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, false, 885), 'errors');
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
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_page", ["page_no" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 897), "get", [0 => "eccube.admin.product.search.page_no"], "method", true, true, false, 897)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 897), "get", [0 => "eccube.admin.product.search.page_no"], "method", false, false, false, 897), "1")) : ("1"))]), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Status", [], "any", false, false, false, 906), 'widget');
        echo "
\t\t\t\t\t\t\t\t";
        // line 907
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Status", [], "any", false, false, false, 907), 'errors');
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

        ob_start(function () { return ''; });
        try {
            // line 737
            echo "\t\t\t\t\t\t\t\t\t";
            $macros["selfMacro"] = $this;
            // line 738
            echo "\t\t\t\t\t\t\t\t\t<li class=\"c-directoryTree--registerItem category-li\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"admin_product_category_";
            // line 739
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 739), "html", null, true);
            echo "\" name=\"admin_product[Category][]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 739), "html", null, true);
            echo "\" ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 739), ($context["ChoicedIds"] ?? null))) {
                echo " checked ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t<label for=\"admin_product_category_";
            // line 740
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 740), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", [], "any", false, false, false, 740), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 742
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [], "any", false, false, false, 742));
            foreach ($context['_seq'] as $context["child"] => $context["ChildCategory"]) {
                // line 743
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_call_macro($macros["selfMacro"], "macro_tree", [($context["ChoicedIds"] ?? null), $context["ChildCategory"], ($context["form"] ?? null)], 743, $context, $this->getSourceContext());
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
        return array (  1700 => 745,  1691 => 743,  1687 => 742,  1680 => 740,  1670 => 739,  1667 => 738,  1664 => 737,  1649 => 736,  1636 => 910,  1630 => 907,  1626 => 906,  1616 => 899,  1609 => 897,  1594 => 885,  1590 => 884,  1573 => 870,  1568 => 868,  1555 => 858,  1549 => 855,  1540 => 849,  1534 => 846,  1525 => 840,  1519 => 837,  1502 => 823,  1486 => 814,  1479 => 809,  1476 => 808,  1465 => 805,  1462 => 804,  1457 => 803,  1455 => 802,  1450 => 800,  1442 => 795,  1436 => 791,  1433 => 790,  1424 => 787,  1421 => 786,  1416 => 785,  1414 => 784,  1397 => 770,  1379 => 759,  1372 => 756,  1363 => 753,  1360 => 752,  1355 => 751,  1353 => 750,  1349 => 748,  1340 => 730,  1316 => 709,  1309 => 704,  1296 => 698,  1290 => 694,  1288 => 693,  1273 => 681,  1269 => 680,  1262 => 676,  1244 => 661,  1240 => 660,  1234 => 656,  1221 => 650,  1217 => 648,  1212 => 645,  1206 => 644,  1200 => 641,  1197 => 640,  1191 => 638,  1185 => 636,  1183 => 635,  1178 => 633,  1175 => 632,  1169 => 630,  1167 => 629,  1163 => 627,  1157 => 625,  1155 => 624,  1151 => 622,  1148 => 621,  1144 => 620,  1138 => 617,  1134 => 616,  1130 => 615,  1126 => 614,  1122 => 613,  1118 => 611,  1116 => 610,  1099 => 596,  1094 => 594,  1088 => 590,  1086 => 589,  1080 => 585,  1077 => 584,  1071 => 583,  1063 => 578,  1059 => 577,  1052 => 573,  1048 => 571,  1042 => 569,  1039 => 568,  1036 => 567,  1031 => 566,  1029 => 565,  1026 => 564,  1020 => 563,  1012 => 558,  1008 => 557,  1001 => 553,  997 => 551,  991 => 549,  988 => 548,  985 => 547,  980 => 546,  977 => 544,  974 => 543,  966 => 538,  962 => 537,  954 => 532,  949 => 529,  946 => 528,  938 => 523,  934 => 522,  926 => 517,  921 => 514,  919 => 513,  911 => 508,  907 => 507,  898 => 501,  894 => 500,  885 => 494,  881 => 493,  872 => 487,  868 => 486,  859 => 480,  855 => 479,  846 => 473,  842 => 472,  838 => 470,  836 => 469,  828 => 464,  824 => 463,  815 => 457,  811 => 456,  808 => 455,  799 => 450,  797 => 449,  795 => 448,  793 => 447,  791 => 446,  789 => 445,  787 => 444,  785 => 443,  783 => 442,  781 => 441,  779 => 440,  777 => 439,  773 => 437,  769 => 436,  760 => 430,  755 => 428,  745 => 421,  741 => 420,  732 => 414,  728 => 413,  719 => 407,  715 => 406,  706 => 400,  701 => 398,  696 => 395,  694 => 394,  686 => 389,  682 => 388,  673 => 382,  669 => 381,  657 => 372,  649 => 367,  645 => 366,  637 => 361,  633 => 360,  620 => 350,  615 => 348,  611 => 347,  607 => 346,  592 => 334,  587 => 332,  583 => 331,  579 => 329,  572 => 325,  564 => 320,  558 => 317,  554 => 316,  550 => 314,  548 => 313,  542 => 310,  538 => 309,  530 => 304,  525 => 302,  516 => 296,  512 => 295,  505 => 291,  500 => 288,  493 => 284,  485 => 279,  481 => 278,  477 => 276,  475 => 275,  459 => 262,  446 => 252,  442 => 251,  432 => 244,  426 => 241,  413 => 231,  406 => 226,  402 => 225,  347 => 173,  338 => 167,  317 => 149,  302 => 137,  291 => 129,  287 => 128,  283 => 127,  249 => 96,  244 => 93,  236 => 92,  232 => 91,  224 => 89,  220 => 88,  215 => 87,  211 => 86,  203 => 84,  199 => 83,  194 => 82,  188 => 81,  184 => 80,  181 => 79,  175 => 76,  170 => 74,  165 => 72,  160 => 70,  155 => 68,  150 => 67,  148 => 66,  127 => 48,  123 => 47,  119 => 46,  115 => 45,  110 => 44,  106 => 43,  86 => 26,  81 => 25,  77 => 24,  70 => 19,  66 => 18,  59 => 16,  55 => 15,  50 => 11,  48 => 22,  46 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Product/product.twig", "C:\\MAMP\\htdocs\\ec-cube\\src\\Eccube\\Resource\\template\\admin\\Product\\product.twig");
    }
}
