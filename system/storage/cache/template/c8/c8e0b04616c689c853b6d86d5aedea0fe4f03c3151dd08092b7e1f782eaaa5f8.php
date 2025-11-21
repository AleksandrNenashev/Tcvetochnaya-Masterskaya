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

/* common/developer.twig */
class __TwigTemplate_b62e8a37cef0c7db52fbfde091a1db8fd611ac4e3f627099f698c5f613901a61 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"modal-dialog\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\"><i class=\"fa fa-cog\"></i> ";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h4>
    </div>
    <div class=\"modal-body\">
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td>";
        // line 11
        echo ($context["column_component"] ?? null);
        echo "</td>
            
\t\t\t<td style=\"width: 200px;\">";
        // line 13
        echo ($context["entry_cache"] ?? null);
        echo "</td>
\t\t
            <td class=\"text-right\" style=\"width: 1px;\">";
        // line 15
        echo ($context["column_action"] ?? null);
        echo "</td>
          </tr>
        </thead>
        <tr>
          <td>";
        // line 19
        echo ($context["entry_theme"] ?? null);
        echo "</td>
          <td ><div class=\"btn-group\" data-toggle=\"buttons\">";
        // line 20
        if (($context["developer_theme"] ?? null)) {
            // line 21
            echo "              <label class=\"btn btn-success active\" ";
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
              <input type=\"radio\" name=\"developer_theme\" value=\"1\" autocomplete=\"off\" ";
            // line 22
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo " checked/>
              ";
            // line 23
            echo ($context["button_on"] ?? null);
            echo "
              </label>
              ";
        } else {
            // line 26
            echo "              <label class=\"btn btn-success\" ";
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
              <input type=\"radio\" name=\"developer_theme\" value=\"1\" autocomplete=\"off\" ";
            // line 27
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo "/>
              ";
            // line 28
            echo ($context["button_on"] ?? null);
            echo "
              </label>
              ";
        }
        // line 31
        echo "              
              ";
        // line 32
        if ( !($context["developer_theme"] ?? null)) {
            // line 33
            echo "              <label class=\"btn btn-danger active\" ";
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
              <input type=\"radio\" name=\"developer_theme\" value=\"0\" autocomplete=\"off\" ";
            // line 34
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo " checked/>
              ";
            // line 35
            echo ($context["button_off"] ?? null);
            echo "
              </label>
              ";
        } else {
            // line 38
            echo "              <label class=\"btn btn-danger\" ";
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
              <input type=\"radio\" name=\"developer_theme\" value=\"0\" autocomplete=\"off\" ";
            // line 39
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo "/>
              ";
            // line 40
            echo ($context["button_off"] ?? null);
            echo "
              </label>
              ";
        }
        // line 42
        echo "</div></td>
          <td class=\"text-right\"><button type=\"button\" value=\"theme\" data-toggle=\"tooltip\" title=\"";
        // line 43
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-refresh\"></i></button></td>
        </tr>
        <tr>
          <td>";
        // line 46
        echo ($context["entry_sass"] ?? null);
        echo "</td>
          <td><div class=\"btn-group\" data-toggle=\"buttons\">";
        // line 47
        if (($context["developer_sass"] ?? null)) {
            // line 48
            echo "              <label class=\"btn btn-success active\">
                <input type=\"radio\" name=\"developer_sass\" value=\"1\" autocomplete=\"off\" checked>
                ";
            // line 50
            echo ($context["button_on"] ?? null);
            echo "</label>
              ";
        } else {
            // line 52
            echo "              <label class=\"btn btn-success\">
                <input type=\"radio\" name=\"developer_sass\" value=\"1\" autocomplete=\"off\">
                ";
            // line 54
            echo ($context["button_on"] ?? null);
            echo "</label>
              ";
        }
        // line 56
        echo "              ";
        if ( !($context["developer_sass"] ?? null)) {
            // line 57
            echo "              <label class=\"btn btn-danger active\">
                <input type=\"radio\" name=\"developer_sass\" value=\"0\" autocomplete=\"off\" checked>
                ";
            // line 59
            echo ($context["button_off"] ?? null);
            echo "</label>
              ";
        } else {
            // line 61
            echo "              <label class=\"btn btn-danger\">
                <input type=\"radio\" name=\"developer_sass\" value=\"0\" autocomplete=\"off\">
                ";
            // line 63
            echo ($context["button_off"] ?? null);
            echo "</label>
              ";
        }
        // line 64
        echo "</div></td>
          <td class=\"text-right\"><button type=\"button\" value=\"sass\" data-toggle=\"tooltip\" title=\"";
        // line 65
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-refresh\"></i></button></td>
        </tr>
      </table>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('input[name=\\'developer_theme\\'], input[name=\\'developer_sass\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=common/developer/edit&user_token=";
        // line 74
        echo ($context["user_token"] ?? null);
        echo "',\t\t
\t\ttype: 'post',
        data: \$('input[name=\\'developer_theme\\']:checked, input[name=\\'developer_sass\\']:checked'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('input[name=\\'developer_theme\\'], input[name=\\'developer_sass\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('input[name=\\'developer_theme\\'], input[name=\\'developer_sass\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
            }

            if (json['success']) {
\t\t\t\t\$('#modal-developer .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}\t\t\t
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});\t
});\t

\$('#modal-developer table button').on('click', function() {
\tvar element = this;
\t
\t\$.ajax({
\t\turl: 'index.php?route=common/developer/' + \$(element).attr('value') + '&user_token=";
        // line 105
        echo ($context["user_token"] ?? null);
        echo "',\t\t
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
            }

            if (json['success']) {
\t\t\t\t\$('#modal-developer .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}\t\t\t
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "common/developer.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  259 => 105,  225 => 74,  213 => 65,  210 => 64,  205 => 63,  201 => 61,  196 => 59,  192 => 57,  189 => 56,  184 => 54,  180 => 52,  175 => 50,  171 => 48,  169 => 47,  165 => 46,  159 => 43,  156 => 42,  150 => 40,  144 => 39,  137 => 38,  131 => 35,  125 => 34,  118 => 33,  116 => 32,  113 => 31,  107 => 28,  101 => 27,  94 => 26,  88 => 23,  82 => 22,  75 => 21,  73 => 20,  69 => 19,  62 => 15,  57 => 13,  52 => 11,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/developer.twig", "");
    }
}
