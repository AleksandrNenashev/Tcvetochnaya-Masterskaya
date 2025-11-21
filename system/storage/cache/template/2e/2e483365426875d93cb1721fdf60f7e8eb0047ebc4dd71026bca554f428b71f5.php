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

/* extension/module/oc3x_storage_cleaner.twig */
class __TwigTemplate_9cfd4de6ba2a63f792a618294d79f1ba956fc3c203942b0d00a6728c8564aca5 extends Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-oc3x_storage_cleaner_status\">";
        // line 30
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"btn-group\" data-toggle=\"buttons\">
                    ";
        // line 33
        if (($context["oc3x_storage_cleaner_status"] ?? null)) {
            // line 34
            echo "                    <label class=\"btn btn-warning\"><input type=\"radio\" name=\"oc3x_storage_cleaner_status\" value=\"0\" autocomplete=\"off\">";
            echo ($context["text_disabled"] ?? null);
            echo "</label>
                    <label class=\"btn btn-warning active\"><input type=\"radio\" name=\"oc3x_storage_cleaner_status\" value=\"1\" autocomplete=\"off\" checked=\"checked\">";
            // line 35
            echo ($context["text_enabled"] ?? null);
            echo "</label>
                    ";
        } else {
            // line 37
            echo "                    <label class=\"btn btn-warning active\"><input type=\"radio\" name=\"oc3x_storage_cleaner_status\" value=\"0\" autocomplete=\"off\" checked=\"checked\">";
            echo ($context["text_disabled"] ?? null);
            echo "</label>
                    <label class=\"btn btn-warning\"><input type=\"radio\" name=\"oc3x_storage_cleaner_status\" value=\"1\" autocomplete=\"off\">";
            // line 38
            echo ($context["text_enabled"] ?? null);
            echo "</label>
\t\t\t\t\t";
        }
        // line 39
        echo " 
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-oc3x_storage_cleaner_size\">";
        // line 44
        echo ($context["entry_size"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"btn-group\" data-toggle=\"buttons\">
                    ";
        // line 47
        if (($context["oc3x_storage_cleaner_size"] ?? null)) {
            // line 48
            echo "                    <label class=\"btn btn-warning\"><input type=\"radio\" name=\"oc3x_storage_cleaner_size\" value=\"0\" autocomplete=\"off\">";
            echo ($context["text_disabled"] ?? null);
            echo "</label>
                    <label class=\"btn btn-warning active\"><input type=\"radio\" name=\"oc3x_storage_cleaner_size\" value=\"1\" autocomplete=\"off\" checked=\"checked\">";
            // line 49
            echo ($context["text_enabled"] ?? null);
            echo "</label>
                    ";
        } else {
            // line 51
            echo "                    <label class=\"btn btn-warning active\"><input type=\"radio\" name=\"oc3x_storage_cleaner_size\" value=\"0\" autocomplete=\"off\" checked=\"checked\">";
            echo ($context["text_disabled"] ?? null);
            echo "</label>
                    <label class=\"btn btn-warning\"><input type=\"radio\" name=\"oc3x_storage_cleaner_size\" value=\"1\" autocomplete=\"off\">";
            // line 52
            echo ($context["text_enabled"] ?? null);
            echo "</label>
\t\t\t\t\t";
        }
        // line 53
        echo " 
                  </div>
                </div>
              </div>
        </form>
      </div>
     </div>
    </div>
  </div>
</div>
";
        // line 63
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/module/oc3x_storage_cleaner.twig";
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
        return array (  183 => 63,  171 => 53,  166 => 52,  161 => 51,  156 => 49,  151 => 48,  149 => 47,  143 => 44,  136 => 39,  131 => 38,  126 => 37,  121 => 35,  116 => 34,  114 => 33,  108 => 30,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/oc3x_storage_cleaner.twig", "");
    }
}
