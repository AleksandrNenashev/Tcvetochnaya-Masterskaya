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

/* flowertheme/template/product/search.twig */
class __TwigTemplate_ed08eedbfb0c5a60d6c445e68d7e9c8e29b232c367bb45e6ab7ff248fbc532ab extends Template
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
        echo "
<div id=\"product-search\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <label class=\"control-label\" for=\"input-search\">";
        // line 18
        echo ($context["entry_search"] ?? null);
        echo "</label>
      <div class=\"row\">
        <div class=\"col-sm-4\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 21
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\" />
        </div>
        <div class=\"col-sm-3\">
          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 25
        echo ($context["text_category"] ?? null);
        echo "</option>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 27
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 27) == ($context["category_id"] ?? null))) {
                // line 28
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 28);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 28);
                echo "</option>
            ";
            } else {
                // line 30
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 30);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 30);
                echo "</option>
            ";
            }
            // line 32
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 33
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 33) == ($context["category_id"] ?? null))) {
                    // line 34
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 34);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 34);
                    echo "</option>
            ";
                } else {
                    // line 36
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 36);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 36);
                    echo "</option>
            ";
                }
                // line 38
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 38));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 39
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 39) == ($context["category_id"] ?? null))) {
                        // line 40
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 40);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 40);
                        echo "</option>
            ";
                    } else {
                        // line 42
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 42);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 42);
                        echo "</option>
            ";
                    }
                    // line 44
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "          </select>
        </div>
        <div class=\"col-sm-3\">
          <label class=\"checkbox-inline\">
            ";
        // line 51
        if (($context["sub_category"] ?? null)) {
            // line 52
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 54
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
            ";
        }
        // line 56
        echo "            ";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
        </div>
      </div>
      <p>
        <label class=\"checkbox-inline\">
          ";
        // line 61
        if (($context["description"] ?? null)) {
            // line 62
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
          ";
        } else {
            // line 64
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
          ";
        }
        // line 66
        echo "          ";
        echo ($context["entry_description"] ?? null);
        echo "</label>
      </p>
      <input type=\"button\" value=\"";
        // line 68
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\" />
      <h2>";
        // line 69
        echo ($context["text_search"] ?? null);
        echo "</h2>
      ";
        // line 70
        if (($context["products"] ?? null)) {
            // line 71
            echo "      <div class=\"row\">
        <div class=\"col-md-6 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 74
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 75
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        <div class=\"sort col-md-6 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 80
            echo ($context["text_sort"] ?? null);
            echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 83
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 83) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 84
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 84);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 84);
                    echo "</option>
              ";
                } else {
                    // line 86
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 86);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 86);
                    echo "</option>
              ";
                }
                // line 88
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "            </select>
          </div>
        </div>
      </div>
      <div class=\"row\"> ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 94
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-thumb\">
            <div class=\"image\"><a href=\"";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 96);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 96);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 96);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 96);
                echo "\" class=\"img-responsive\" /></a></div>
            <div>
              <div class=\"caption\">
                <h4><a href=\"";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 99);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 99);
                echo "</a></h4>
                <div class=\"price-button\">
                  <div class=\"product-price\">
                        ";
                // line 102
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 102)) {
                    // line 103
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 103)) {
                        // line 104
                        echo "                          <span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 104);
                        echo "</span>
                          ";
                    } else {
                        // line 105
                        echo " <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 105);
                        echo "</span> <span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 105);
                        echo "</span>  ";
                    }
                    // line 106
                    echo "                          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 106)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 106);
                        echo "</span> ";
                    }
                    // line 107
                    echo "                        ";
                }
                // line 108
                echo "                    </div>
                    <div class=\"product-button\">
                        <button type=\"button\" class=\"btn btn-primary btn-lg btn-block\" onclick=\"cart.add('";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 110);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 110);
                echo "');\">";
                echo ($context["button_cart"] ?? null);
                echo "</button>
                    </div>
                  </div>
                </div>
                <div class=\"button-cw\">
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 115
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 115);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                </div>
                </div>    
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 123
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 124
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 127
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 129
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 130
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 179
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "flowertheme/template/product/search.twig";
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
        return array (  477 => 179,  425 => 130,  420 => 129,  414 => 127,  408 => 124,  404 => 123,  400 => 121,  386 => 115,  374 => 110,  370 => 108,  367 => 107,  358 => 106,  351 => 105,  345 => 104,  342 => 103,  340 => 102,  332 => 99,  320 => 96,  316 => 94,  312 => 93,  306 => 89,  300 => 88,  292 => 86,  284 => 84,  281 => 83,  277 => 82,  272 => 80,  264 => 75,  260 => 74,  255 => 71,  253 => 70,  249 => 69,  245 => 68,  239 => 66,  235 => 64,  231 => 62,  229 => 61,  220 => 56,  216 => 54,  212 => 52,  210 => 51,  204 => 47,  198 => 46,  192 => 45,  186 => 44,  178 => 42,  170 => 40,  167 => 39,  162 => 38,  154 => 36,  146 => 34,  143 => 33,  138 => 32,  130 => 30,  122 => 28,  119 => 27,  115 => 26,  111 => 25,  102 => 21,  96 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "flowertheme/template/product/search.twig", "");
    }
}
