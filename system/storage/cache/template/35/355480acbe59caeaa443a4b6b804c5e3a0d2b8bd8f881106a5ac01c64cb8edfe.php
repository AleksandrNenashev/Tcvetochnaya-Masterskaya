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

/* setting/setting.twig */
class __TwigTemplate_d9b25e17efd3f7c9347254e09067e27bd13ff6b3770857dbddedcdb4a0ce9b01 extends Template
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
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_server"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 44
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 46
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
                  ";
        // line 47
        if (($context["error_meta_title"] ?? null)) {
            // line 48
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_meta_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 49
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 52
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 54
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 58
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 60
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 64
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">                    
                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 68
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 68) == ($context["config_theme"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 69);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 69);
                echo "</option>                    
                    ";
            } else {
                // line 70
                echo "                    
                    <option value=\"";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 71);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 71);
                echo "</option>                    
                    ";
            }
            // line 73
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 79
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">                    
                    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 83
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 83) == ($context["config_layout_id"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 84);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 84);
                echo "</option>                    
                    ";
            } else {
                // line 85
                echo "                    
                    <option value=\"";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 86);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 86);
                echo "</option>                    
                    ";
            }
            // line 88
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 95
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 97
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 98
        if (($context["error_name"] ?? null)) {
            // line 99
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 100
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 103
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 105
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\" />
                  ";
        // line 106
        if (($context["error_owner"] ?? null)) {
            // line 107
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_owner"] ?? null);
            echo "</div>
                  ";
        }
        // line 108
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 111
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 113
        echo ($context["entry_address"] ?? null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                  ";
        // line 114
        if (($context["error_address"] ?? null)) {
            // line 115
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_address"] ?? null);
            echo "</div>
                  ";
        }
        // line 116
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 119
        echo ($context["help_geocode"] ?? null);
        echo "\">";
        echo ($context["entry_geocode"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 121
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 125
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 127
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 128
        if (($context["error_email"] ?? null)) {
            // line 129
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 130
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 133
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 135
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 136
        if (($context["error_telephone"] ?? null)) {
            // line 137
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                  ";
        }
        // line 138
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 141
        echo ($context["entry_fax"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 143
        echo ($context["config_fax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 147
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 148
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 149
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 153
        echo ($context["help_open"] ?? null);
        echo "\">";
        echo ($context["entry_open"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 155
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 159
        echo ($context["help_comment"] ?? null);
        echo "\">";
        echo ($context["entry_comment"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 161
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                </div>
              </div>
              ";
        // line 164
        if (($context["locations"] ?? null)) {
            // line 165
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 166
            echo ($context["help_location"] ?? null);
            echo "\">";
            echo ($context["entry_location"] ?? null);
            echo "</span></label>
                <div class=\"col-sm-10\"> ";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 168
                echo "                  <div class=\"checkbox\">
                    <label> ";
                // line 169
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 169), ($context["config_location"] ?? null))) {
                    // line 170
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 170);
                    echo "\" checked=\"checked\" />
                      ";
                    // line 171
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 171);
                    echo "
                      ";
                } else {
                    // line 173
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 173);
                    echo "\" />
                      ";
                    // line 174
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 174);
                    echo "
                      ";
                }
                // line 175
                echo " </label>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo " </div>
              </div>
              ";
        }
        // line 179
        echo " </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 182
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">                    
                    ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 186
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 186) == ($context["config_country_id"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 187
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 187);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 187);
                echo "</option>                    
                    ";
            } else {
                // line 188
                echo "                    
                    <option value=\"";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 189);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 189);
                echo "</option>                    
                    ";
            }
            // line 191
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 196
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-timezone\">";
        // line 203
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    ";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 207
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 207) == ($context["config_timezone"] ?? null))) {
                // line 208
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 208);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 208);
                echo "</option>
                      ";
            } else {
                // line 210
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 210);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 210);
                echo "</option>
                      ";
            }
            // line 212
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 217
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">                    
                    ";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 221
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 221) == ($context["config_language"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 222
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 222);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 222);
                echo "</option>                    
                    ";
            } else {
                // line 223
                echo "                    
                    <option value=\"";
                // line 224
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 224);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 224);
                echo "</option>                    
                    ";
            }
            // line 226
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 231
        echo ($context["entry_admin_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">                    
                    ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 235
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 235) == ($context["config_admin_language"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 236
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 236);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 236);
                echo "</option>                    
                    ";
            } else {
                // line 237
                echo "                    
                    <option value=\"";
                // line 238
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 238);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 238);
                echo "</option>                    
                    ";
            }
            // line 240
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 245
        echo ($context["help_currency"] ?? null);
        echo "\">";
        echo ($context["entry_currency"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">                    
                    ";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 249
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 249) == ($context["config_currency"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 250
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 250);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 250);
                echo "</option>                    
                    ";
            } else {
                // line 251
                echo "                    
                    <option value=\"";
                // line 252
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 252);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 252);
                echo "</option>                    
                    ";
            }
            // line 254
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency-engine\">";
        // line 259
        echo ($context["entry_currency_engine"] ?? null);
        echo "</label>              
                <div class=\"col-sm-10\">
                  <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-control\">
                    ";
        // line 262
        if ( !($context["config_currency_engine"] ?? null)) {
            // line 263
            echo "                    <option value=\"\" selected>";
            echo ($context["text_none"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 265
            echo "                    <option value=\"\">";
            echo ($context["text_none"] ?? null);
            echo "</option>
                    ";
        }
        // line 267
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 268
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 268) == ($context["config_currency_engine"] ?? null))) {
                // line 269
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 269);
                echo "\" selected>";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 269);
                echo "</option>
                    ";
            } else {
                // line 271
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 271);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 271);
                echo "</option>
                    ";
            }
            // line 273
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency_engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">

          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Выводится модулем autocalc_price_option в карточке товара\">Дополнительная валюта <i>(autocalc)</i>:</span></label>
          <div class=\"col-sm-10\">
            <select name=\"config_currency2\" id=\"input-currency\" class=\"form-control\">
              <option value=\"\">";
        // line 282
        echo ($context["text_none"] ?? null);
        echo "</option>
              ";
        // line 283
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 284
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 284) == ($context["config_currency2"] ?? null))) {
                // line 285
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 285);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 285);
                echo "</option>
                ";
            } else {
                // line 287
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 287);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 287);
                echo "</option>
                ";
            }
            // line 289
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
        echo "            </select>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Акция на опции пропорционально акции на товар (autocalc_price_option)\">Акция на опции <i>(autocalc)</i>:</span></label>
          <div class=\"col-sm-10\">
            <label class=\"radio-inline\"> 
              ";
        // line 297
        if (($context["config_autocalc_option_special"] ?? null)) {
            // line 298
            echo "              <input type=\"radio\" name=\"config_autocalc_option_special\" value=\"1\" checked=\"checked\" />
              ";
            // line 299
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        } else {
            // line 301
            echo "              <input type=\"radio\" name=\"config_autocalc_option_special\" value=\"1\" />
              ";
            // line 302
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        }
        // line 304
        echo "            </label>
            <label class=\"radio-inline\">
              ";
        // line 306
        if ( !($context["config_autocalc_option_special"] ?? null)) {
            // line 307
            echo "              <input type=\"radio\" name=\"config_autocalc_option_special\" value=\"0\" checked=\"checked\" />
              ";
            // line 308
            echo ($context["text_no"] ?? null);
            echo "
              ";
        } else {
            // line 310
            echo "              <input type=\"radio\" name=\"config_autocalc_option_special\" value=\"0\" />
              ";
            // line 311
            echo ($context["text_no"] ?? null);
            echo "
              ";
        }
        // line 313
        echo "            </label>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Скидка на опции пропорционально скидке на товар (autocalc_price_option)\">Скидка на опции <i>(autocalc)</i>:</span></label>
          <div class=\"col-sm-10\">
            <label class=\"radio-inline\">
              ";
        // line 320
        if (($context["config_autocalc_option_discount"] ?? null)) {
            // line 321
            echo "              <input type=\"radio\" name=\"config_autocalc_option_discount\" value=\"1\" checked=\"checked\" />
              ";
            // line 322
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        } else {
            // line 324
            echo "              <input type=\"radio\" name=\"config_autocalc_option_discount\" value=\"1\" />
              ";
            // line 325
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        }
        // line 327
        echo "            </label>
            <label class=\"radio-inline\">
              ";
        // line 329
        if ( !($context["config_autocalc_option_discount"] ?? null)) {
            // line 330
            echo "              <input type=\"radio\" name=\"config_autocalc_option_discount\" value=\"0\" checked=\"checked\" />
              ";
            // line 331
            echo ($context["text_no"] ?? null);
            echo "
              ";
        } else {
            // line 333
            echo "              <input type=\"radio\" name=\"config_autocalc_option_discount\" value=\"0\" />
              ";
            // line 334
            echo ($context["text_no"] ?? null);
            echo "
              ";
        }
        // line 336
        echo "            </label>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Отключении функции умножения на количество (autocalc_price_option)\">Не умножать на количество <i>(autocalc)</i>:</span></label>
          <div class=\"col-sm-10\">
            <label class=\"radio-inline\">
              ";
        // line 343
        if (($context["config_autocalc_not_mul_qty"] ?? null)) {
            // line 344
            echo "              <input type=\"radio\" name=\"config_autocalc_not_mul_qty\" value=\"1\" checked=\"checked\" />
              ";
            // line 345
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        } else {
            // line 347
            echo "              <input type=\"radio\" name=\"config_autocalc_not_mul_qty\" value=\"1\" />
              ";
            // line 348
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        }
        // line 349
        echo " </label>
            <label class=\"radio-inline\">
              ";
        // line 351
        if ( !($context["config_autocalc_not_mul_qty"] ?? null)) {
            // line 352
            echo "              <input type=\"radio\" name=\"config_autocalc_not_mul_qty\" value=\"0\" checked=\"checked\" />
              ";
            // line 353
            echo ($context["text_no"] ?? null);
            echo "
              ";
        } else {
            // line 355
            echo "              <input type=\"radio\" name=\"config_autocalc_not_mul_qty\" value=\"0\" />
              ";
            // line 356
            echo ($context["text_no"] ?? null);
            echo "
              ";
        }
        // line 358
        echo "            </label>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Автоматический выбор первой опции (radio,select). (autocalc_price_option)\">Выбор первой опции <i>(autocalc)</i>:</span></label>
          <div class=\"col-sm-10\">
            <label class=\"radio-inline\">
              ";
        // line 365
        if (($context["config_autocalc_select_first"] ?? null)) {
            // line 366
            echo "              <input type=\"radio\" name=\"config_autocalc_select_first\" value=\"1\" checked=\"checked\" />
              ";
            // line 367
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        } else {
            // line 369
            echo "              <input type=\"radio\" name=\"config_autocalc_select_first\" value=\"1\" />
              ";
            // line 370
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        }
        // line 372
        echo "            </label>
            <label class=\"radio-inline\">
              ";
        // line 374
        if ( !($context["config_autocalc_select_first"] ?? null)) {
            // line 375
            echo "              <input type=\"radio\" name=\"config_autocalc_select_first\" value=\"0\" checked=\"checked\" />
              ";
            // line 376
            echo ($context["text_no"] ?? null);
            echo "
              ";
        } else {
            // line 378
            echo "              <input type=\"radio\" name=\"config_autocalc_select_first\" value=\"0\" />
              ";
            // line 379
            echo ($context["text_no"] ?? null);
            echo "
              ";
        }
        // line 381
        echo "            </label>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Скрыть вывод наценки для опции. (autocalc_price_option)\">Не показывать цену опции <i>(autocalc)</i>:</span></label>
          <div class=\"col-sm-10\">
            <label class=\"radio-inline\">
              ";
        // line 388
        if (($context["config_autocalc_hide_option_price"] ?? null)) {
            // line 389
            echo "              <input type=\"radio\" name=\"config_autocalc_hide_option_price\" value=\"1\" checked=\"checked\" />
              ";
            // line 390
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        } else {
            // line 392
            echo "              <input type=\"radio\" name=\"config_autocalc_hide_option_price\" value=\"1\" />
              ";
            // line 393
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        }
        // line 395
        echo "            </label>
            <label class=\"radio-inline\">
              ";
        // line 397
        if ( !($context["config_autocalc_hide_option_price"] ?? null)) {
            // line 398
            echo "              <input type=\"radio\" name=\"config_autocalc_hide_option_price\" value=\"0\" checked=\"checked\" />
              ";
            // line 399
            echo ($context["text_no"] ?? null);
            echo "
              ";
        } else {
            // line 401
            echo "              <input type=\"radio\" name=\"config_autocalc_hide_option_price\" value=\"0\" />
              ";
            // line 402
            echo ($context["text_no"] ?? null);
            echo "
              ";
        }
        // line 404
        echo "            </label>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Добавлять выбранные опции в хеш (#) url. (autocalc_price_option)\">Выбранные опции в URL <i>(autocalc)</i>:</span></label>
          <div class=\"col-sm-10\">
            <label class=\"radio-inline\">
              ";
        // line 411
        if (($context["config_autocalc_hash_url"] ?? null)) {
            // line 412
            echo "              <input type=\"radio\" name=\"config_autocalc_hash_url\" value=\"1\" checked=\"checked\" />
              ";
            // line 413
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        } else {
            // line 415
            echo "              <input type=\"radio\" name=\"config_autocalc_hash_url\" value=\"1\" />
              ";
            // line 416
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        }
        // line 418
        echo "            </label>
            <label class=\"radio-inline\">
              ";
        // line 420
        if ( !($context["config_autocalc_hash_url"] ?? null)) {
            // line 421
            echo "              <input type=\"radio\" name=\"config_autocalc_hash_url\" value=\"0\" checked=\"checked\" />
              ";
            // line 422
            echo ($context["text_no"] ?? null);
            echo "
              ";
        } else {
            // line 424
            echo "              <input type=\"radio\" name=\"config_autocalc_hash_url\" value=\"0\" />
              ";
            // line 425
            echo ($context["text_no"] ?? null);
            echo "
              ";
        }
        // line 427
        echo "            </label>
          </div>
        </div>
        <div class=\"form-group\">
      
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 432
        echo ($context["help_currency_auto"] ?? null);
        echo "\">";
        echo ($context["entry_currency_auto"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 434
        if (($context["config_currency_auto"] ?? null)) {
            // line 435
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    ";
            // line 436
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 438
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    ";
            // line 439
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 440
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 441
        if ( !($context["config_currency_auto"] ?? null)) {
            // line 442
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    ";
            // line 443
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 445
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    ";
            // line 446
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 447
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 451
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">                    
                    ";
        // line 454
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 455
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 455) == ($context["config_length_class_id"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 456
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 456);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 456);
                echo "</option>                    
                    ";
            } else {
                // line 457
                echo "                    
                    <option value=\"";
                // line 458
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 458);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 458);
                echo "</option>                    
                    ";
            }
            // line 460
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 465
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">                    
                    ";
        // line 468
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 469
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 469) == ($context["config_weight_class_id"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 470
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 470);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 470);
                echo "</option>                    
                    ";
            } else {
                // line 471
                echo "                    
                    <option value=\"";
                // line 472
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 472);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 472);
                echo "</option>                    
                    ";
            }
            // line 474
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 481
        echo ($context["text_product"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 483
        echo ($context["help_product_count"] ?? null);
        echo "\">";
        echo ($context["entry_product_count"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 485
        if (($context["config_product_count"] ?? null)) {
            // line 486
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 487
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 489
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 490
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 491
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 492
        if ( !($context["config_product_count"] ?? null)) {
            // line 493
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 494
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 496
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 497
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 498
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 502
        echo ($context["help_limit_admin"] ?? null);
        echo "\">";
        echo ($context["entry_limit_admin"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 504
        echo ($context["config_limit_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_admin"] ?? null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 505
        if (($context["error_limit_admin"] ?? null)) {
            // line 506
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_limit_admin"] ?? null);
            echo "</div>
                    ";
        }
        // line 507
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 511
        echo ($context["text_review"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 513
        echo ($context["help_review"] ?? null);
        echo "\">";
        echo ($context["entry_review"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 515
        if (($context["config_review_status"] ?? null)) {
            // line 516
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 517
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 519
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 520
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 521
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 522
        if ( !($context["config_review_status"] ?? null)) {
            // line 523
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 524
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 526
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 527
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 528
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 532
        echo ($context["help_review_guest"] ?? null);
        echo "\">";
        echo ($context["entry_review_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 534
        if (($context["config_review_guest"] ?? null)) {
            // line 535
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 536
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 538
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 539
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 540
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 541
        if ( !($context["config_review_guest"] ?? null)) {
            // line 542
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 543
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 545
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 546
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 547
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 552
        echo ($context["text_voucher"] ?? null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 554
        echo ($context["help_voucher_min"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_min"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 556
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 557
        if (($context["error_voucher_min"] ?? null)) {
            // line 558
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_min"] ?? null);
            echo "</div>
                    ";
        }
        // line 559
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 562
        echo ($context["help_voucher_max"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_max"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 564
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 565
        if (($context["error_voucher_max"] ?? null)) {
            // line 566
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_max"] ?? null);
            echo "</div>
                    ";
        }
        // line 567
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 571
        echo ($context["text_tax"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 573
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 575
        if (($context["config_tax"] ?? null)) {
            // line 576
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 577
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 579
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 580
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 581
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 582
        if ( !($context["config_tax"] ?? null)) {
            // line 583
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 584
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 586
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 587
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 588
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 592
        echo ($context["help_tax_default"] ?? null);
        echo "\">";
        echo ($context["entry_tax_default"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 595
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 596
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 597
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 598
            echo "                      
                      <option value=\"shipping\">";
            // line 599
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 601
        echo "                      ";
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 602
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 603
            echo "                      
                      <option value=\"payment\">";
            // line 604
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 605
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 610
        echo ($context["help_tax_customer"] ?? null);
        echo "\">";
        echo ($context["entry_tax_customer"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 613
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 614
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 615
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 616
            echo "                      
                      <option value=\"shipping\">";
            // line 617
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 619
        echo "                      ";
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 620
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 621
            echo "                      
                      <option value=\"payment\">";
            // line 622
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 623
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 629
        echo ($context["text_account"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 631
        echo ($context["help_customer_online"] ?? null);
        echo "\">";
        echo ($context["entry_customer_online"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 633
        if (($context["config_customer_online"] ?? null)) {
            // line 634
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 635
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 637
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 638
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 639
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 640
        if ( !($context["config_customer_online"] ?? null)) {
            // line 641
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 642
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 644
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 645
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 646
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 650
        echo ($context["help_customer_activity"] ?? null);
        echo "\">";
        echo ($context["entry_customer_activity"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 652
        if (($context["config_customer_activity"] ?? null)) {
            // line 653
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 654
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 656
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 657
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 658
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 659
        if ( !($context["config_customer_activity"] ?? null)) {
            // line 660
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 661
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 663
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 664
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 665
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 669
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 671
        if (($context["config_customer_search"] ?? null)) {
            // line 672
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 673
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 675
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 676
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 677
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 678
        if ( !($context["config_customer_search"] ?? null)) {
            // line 679
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 680
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 682
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 683
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 684
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 688
        echo ($context["help_customer_group"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">                      
                      ";
        // line 691
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 692
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 692) == ($context["config_customer_group_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 693
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 693);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 693);
                echo "</option>                      
                      ";
            } else {
                // line 694
                echo "                      
                      <option value=\"";
                // line 695
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 695);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 695);
                echo "</option>                      
                      ";
            }
            // line 697
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 702
        echo ($context["help_customer_group_display"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 703
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 704
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 705
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 705), ($context["config_customer_group_display"] ?? null))) {
                // line 706
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 706);
                echo "\" checked=\"checked\" />
                        ";
                // line 707
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 707);
                echo "
                        ";
            } else {
                // line 709
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 709);
                echo "\" />
                        ";
                // line 710
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 710);
                echo "
                        ";
            }
            // line 711
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 714
        echo "                    ";
        if (($context["error_customer_group_display"] ?? null)) {
            // line 715
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_customer_group_display"] ?? null);
            echo "</div>
                    ";
        }
        // line 716
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 719
        echo ($context["help_customer_price"] ?? null);
        echo "\">";
        echo ($context["entry_customer_price"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 721
        if (($context["config_customer_price"] ?? null)) {
            // line 722
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 723
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 725
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 726
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 727
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 728
        if ( !($context["config_customer_price"] ?? null)) {
            // line 729
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 730
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 732
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 733
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 734
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 738
        echo ($context["help_login_attempts"] ?? null);
        echo "\">";
        echo ($context["entry_login_attempts"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 740
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 741
        if (($context["error_login_attempts"] ?? null)) {
            // line 742
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_login_attempts"] ?? null);
            echo "</div>
                    ";
        }
        // line 743
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 746
        echo ($context["help_account"] ?? null);
        echo "\">";
        echo ($context["entry_account"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 749
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 750
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 751
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 751) == ($context["config_account_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 752
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 752);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 752);
                echo "</option>                      
                      ";
            } else {
                // line 753
                echo "                      
                      <option value=\"";
                // line 754
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 754);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 754);
                echo "</option>                      
                      ";
            }
            // line 756
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 762
        echo ($context["text_checkout"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 764
        echo ($context["help_invoice_prefix"] ?? null);
        echo "\">";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 766
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 770
        echo ($context["help_cart_weight"] ?? null);
        echo "\">";
        echo ($context["entry_cart_weight"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 772
        if (($context["config_cart_weight"] ?? null)) {
            // line 773
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 774
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 776
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 777
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 778
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 779
        if ( !($context["config_cart_weight"] ?? null)) {
            // line 780
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 781
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 783
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 784
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 785
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 789
        echo ($context["help_checkout_guest"] ?? null);
        echo "\">";
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 791
        if (($context["config_checkout_guest"] ?? null)) {
            // line 792
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 793
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 795
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 796
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 797
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 798
        if ( !($context["config_checkout_guest"] ?? null)) {
            // line 799
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 800
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 802
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 803
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 804
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 808
        echo ($context["help_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 811
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 812
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 813
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 813) == ($context["config_checkout_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 814
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 814);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 814);
                echo "</option>                      
                      ";
            } else {
                // line 815
                echo "                      
                      <option value=\"";
                // line 816
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 816);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 816);
                echo "</option>                      
                      ";
            }
            // line 818
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 823
        echo ($context["help_order_status"] ?? null);
        echo "\">";
        echo ($context["entry_order_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">                      
                      ";
        // line 826
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 827
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 827) == ($context["config_order_status_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 828
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 828);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 828);
                echo "</option>                      
                      ";
            } else {
                // line 829
                echo "                      
                      <option value=\"";
                // line 830
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 830);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 830);
                echo "</option>                      
                      ";
            }
            // line 832
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 837
        echo ($context["help_processing_status"] ?? null);
        echo "\">";
        echo ($context["entry_processing_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 839
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 840
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 841
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 841), ($context["config_processing_status"] ?? null))) {
                // line 842
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 842);
                echo "\" checked=\"checked\" />
                          ";
                // line 843
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 843);
                echo "
                          ";
            } else {
                // line 845
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 845);
                echo "\" />
                          ";
                // line 846
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 846);
                echo "
                          ";
            }
            // line 847
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 849
        echo " </div>
                    ";
        // line 850
        if (($context["error_processing_status"] ?? null)) {
            // line 851
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_processing_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 852
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 855
        echo ($context["help_complete_status"] ?? null);
        echo "\">";
        echo ($context["entry_complete_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 857
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 858
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 859
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 859), ($context["config_complete_status"] ?? null))) {
                // line 860
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 860);
                echo "\" checked=\"checked\" />
                          ";
                // line 861
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 861);
                echo "
                          ";
            } else {
                // line 863
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 863);
                echo "\" />
                          ";
                // line 864
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 864);
                echo "
                          ";
            }
            // line 865
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 867
        echo " </div>
                    ";
        // line 868
        if (($context["error_complete_status"] ?? null)) {
            // line 869
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_complete_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 870
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 873
        echo ($context["help_fraud_status"] ?? null);
        echo "\">";
        echo ($context["entry_fraud_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">                      
                      ";
        // line 876
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 877
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 877) == ($context["config_fraud_status_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 878
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 878);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 878);
                echo "</option>                      
                      ";
            } else {
                // line 879
                echo "                      
                      <option value=\"";
                // line 880
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 880);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 880);
                echo "</option>                      
                      ";
            }
            // line 882
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 887
        echo ($context["help_api"] ?? null);
        echo "\">";
        echo ($context["entry_api"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 890
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 891
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 892
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 892) == ($context["config_api_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 893
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 893);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 893);
                echo "</option>                      
                      ";
            } else {
                // line 894
                echo "                      
                      <option value=\"";
                // line 895
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 895);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 895);
                echo "</option>                      
                      ";
            }
            // line 897
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 903
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 905
        echo ($context["help_stock_display"] ?? null);
        echo "\">";
        echo ($context["entry_stock_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 907
        if (($context["config_stock_display"] ?? null)) {
            // line 908
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 909
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 911
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 912
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 913
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 914
        if ( !($context["config_stock_display"] ?? null)) {
            // line 915
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 916
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 918
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 919
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 920
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 924
        echo ($context["help_stock_warning"] ?? null);
        echo "\">";
        echo ($context["entry_stock_warning"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 926
        if (($context["config_stock_warning"] ?? null)) {
            // line 927
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 928
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 930
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 931
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 932
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 933
        if ( !($context["config_stock_warning"] ?? null)) {
            // line 934
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 935
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 937
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 938
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 939
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 943
        echo ($context["help_stock_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 945
        if (($context["config_stock_checkout"] ?? null)) {
            // line 946
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 947
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 949
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 950
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 951
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 952
        if ( !($context["config_stock_checkout"] ?? null)) {
            // line 953
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 954
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 956
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 957
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 958
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 963
        echo ($context["text_affiliate"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 965
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">                      
                      ";
        // line 968
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 969
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 969) == ($context["config_affiliate_group_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 970
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 970);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 970);
                echo "</option>                      
                      ";
            } else {
                // line 971
                echo "                      
                      <option value=\"";
                // line 972
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 972);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 972);
                echo "</option>                      
                      ";
            }
            // line 974
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 979
        echo ($context["help_affiliate_approval"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 981
        if (($context["config_affiliate_approval"] ?? null)) {
            // line 982
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 983
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 985
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 986
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 987
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 988
        if ( !($context["config_affiliate_approval"] ?? null)) {
            // line 989
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 990
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 992
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 993
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 994
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 998
        echo ($context["help_affiliate_auto"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1000
        if (($context["config_affiliate_auto"] ?? null)) {
            // line 1001
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1002
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1004
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 1005
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1006
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1007
        if ( !($context["config_affiliate_auto"] ?? null)) {
            // line 1008
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1009
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1011
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 1012
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1013
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 1017
        echo ($context["help_affiliate_commission"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 1019
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 1023
        echo ($context["help_affiliate"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 1026
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 1027
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1028
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1028) == ($context["config_affiliate_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 1029
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1029);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1029);
                echo "</option>                      
                      ";
            } else {
                // line 1030
                echo "                      
                      <option value=\"";
                // line 1031
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1031);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1031);
                echo "</option>                      
                      ";
            }
            // line 1033
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1039
        echo ($context["text_return"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 1041
        echo ($context["help_return"] ?? null);
        echo "\">";
        echo ($context["entry_return"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 1044
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 1045
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1046
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1046) == ($context["config_return_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 1047
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1047);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1047);
                echo "</option>                      
                      ";
            } else {
                // line 1048
                echo "                      
                      <option value=\"";
                // line 1049
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1049);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1049);
                echo "</option>                      
                      ";
            }
            // line 1051
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 1056
        echo ($context["help_return_status"] ?? null);
        echo "\">";
        echo ($context["entry_return_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">                      
                      ";
        // line 1059
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 1060
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1060) == ($context["config_return_status_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 1061
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1061);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1061);
                echo "</option>                      
                      ";
            } else {
                // line 1062
                echo "                      
                      <option value=\"";
                // line 1063
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1063);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1063);
                echo "</option>                      
                      ";
            }
            // line 1065
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1071
        echo ($context["text_captcha"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1073
        echo ($context["help_captcha"] ?? null);
        echo "\">";
        echo ($context["entry_captcha"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 1076
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 1077
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1078
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1078) == ($context["config_captcha"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 1079
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1079);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1079);
                echo "</option>                      
                      ";
            } else {
                // line 1080
                echo "                      
                      <option value=\"";
                // line 1081
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1081);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1081);
                echo "</option>                      
                      ";
            }
            // line 1083
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1088
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1090
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1091
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1092
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1092), ($context["config_captcha_page"] ?? null))) {
                // line 1093
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1093);
                echo "\" checked=\"checked\" />
                          ";
                // line 1094
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1094);
                echo "
                          ";
            } else {
                // line 1096
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1096);
                echo "\" />
                          ";
                // line 1097
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1097);
                echo "
                          ";
            }
            // line 1098
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1100
        echo " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1107
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1108
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 1109
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1113
        echo ($context["help_icon"] ?? null);
        echo "\">";
        echo ($context["entry_icon"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1114
        echo ($context["icon"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1115
        echo ($context["config_icon"] ?? null);
        echo "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1121
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1123
        echo ($context["help_mail_engine"] ?? null);
        echo "\">";
        echo ($context["entry_mail_engine"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">                      
                      ";
        // line 1126
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            echo "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 1127
            echo ($context["text_mail"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 1128
            echo "                      
                      <option value=\"mail\">";
            // line 1129
            echo ($context["text_mail"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 1131
        echo "                      ";
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            echo "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 1132
            echo ($context["text_smtp"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 1133
            echo "                      
                      <option value=\"smtp\">";
            // line 1134
            echo ($context["text_smtp"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 1135
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1140
        echo ($context["help_mail_parameter"] ?? null);
        echo "\">";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1142
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1146
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1148
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1152
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1154
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1158
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1160
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1164
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1166
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1170
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1172
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1177
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1179
        echo ($context["help_mail_alert"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1182
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1183
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1183), ($context["config_mail_alert"] ?? null))) {
                // line 1184
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1184);
                echo "\" checked=\"checked\" />
                          ";
                // line 1185
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1185);
                echo "
                          ";
            } else {
                // line 1187
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1187);
                echo "\" />
                          ";
                // line 1188
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1188);
                echo "
                          ";
            }
            // line 1189
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1191
        echo " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1195
        echo ($context["help_mail_alert_email"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1197
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1204
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1206
        echo ($context["help_maintenance"] ?? null);
        echo "\">";
        echo ($context["entry_maintenance"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1208
        if (($context["config_maintenance"] ?? null)) {
            // line 1209
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1210
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1212
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1213
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1214
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1215
        if ( !($context["config_maintenance"] ?? null)) {
            // line 1216
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1217
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1219
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1220
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1221
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1225
        echo ($context["help_seo_url"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1227
        if (($context["config_seo_url"] ?? null)) {
            // line 1228
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1229
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1231
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1232
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1233
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1234
        if ( !($context["config_seo_url"] ?? null)) {
            // line 1235
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1236
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1238
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1239
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1240
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1244
        echo ($context["help_robots"] ?? null);
        echo "\">";
        echo ($context["entry_robots"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1246
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1250
        echo ($context["help_compression"] ?? null);
        echo "\">";
        echo ($context["entry_compression"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1252
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1257
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1259
        echo ($context["help_secure"] ?? null);
        echo "\">";
        echo ($context["entry_secure"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1261
        if (($context["config_secure"] ?? null)) {
            // line 1262
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1263
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1265
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1266
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1267
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1268
        if ( !($context["config_secure"] ?? null)) {
            // line 1269
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1270
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1272
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1273
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1274
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1278
        echo ($context["help_password"] ?? null);
        echo "\">";
        echo ($context["entry_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1280
        if (($context["config_password"] ?? null)) {
            // line 1281
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1282
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1284
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1285
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1286
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1287
        if ( !($context["config_password"] ?? null)) {
            // line 1288
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1289
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1291
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1292
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1293
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1297
        echo ($context["help_shared"] ?? null);
        echo "\">";
        echo ($context["entry_shared"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1299
        if (($context["config_shared"] ?? null)) {
            // line 1300
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1301
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1303
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1304
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1305
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1306
        if ( !($context["config_shared"] ?? null)) {
            // line 1307
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1308
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1310
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1311
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1312
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1316
        echo ($context["help_encryption"] ?? null);
        echo "\">";
        echo ($context["entry_encryption"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1318
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    ";
        // line 1319
        if (($context["error_encryption"] ?? null)) {
            // line 1320
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_encryption"] ?? null);
            echo "</div>
                    ";
        }
        // line 1321
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1325
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1327
        echo ($context["help_file_max_size"] ?? null);
        echo "\">";
        echo ($context["entry_file_max_size"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1329
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1333
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1335
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1339
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1341
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1346
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1348
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1350
        if (($context["config_error_display"] ?? null)) {
            // line 1351
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1352
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1354
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1355
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1356
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1357
        if ( !($context["config_error_display"] ?? null)) {
            // line 1358
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1359
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1361
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1362
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1363
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1367
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1369
        if (($context["config_error_log"] ?? null)) {
            // line 1370
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1371
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1373
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1374
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1375
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1376
        if ( !($context["config_error_log"] ?? null)) {
            // line 1377
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1378
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1380
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1381
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1382
        echo "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1386
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1388
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1389
        if (($context["error_log"] ?? null)) {
            // line 1390
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_log"] ?? null);
            echo "</div>
                    ";
        }
        // line 1391
        echo " </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1403
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1425
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1434
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1440
        echo ($context["config_zone_id"] ?? null);
        echo "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1447
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>
";
        // line 1462
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "setting/setting.twig";
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
        return array (  4002 => 1462,  3984 => 1447,  3974 => 1440,  3965 => 1434,  3953 => 1425,  3928 => 1403,  3914 => 1391,  3908 => 1390,  3906 => 1389,  3900 => 1388,  3895 => 1386,  3889 => 1382,  3884 => 1381,  3881 => 1380,  3876 => 1378,  3873 => 1377,  3871 => 1376,  3868 => 1375,  3863 => 1374,  3860 => 1373,  3855 => 1371,  3852 => 1370,  3850 => 1369,  3845 => 1367,  3839 => 1363,  3834 => 1362,  3831 => 1361,  3826 => 1359,  3823 => 1358,  3821 => 1357,  3818 => 1356,  3813 => 1355,  3810 => 1354,  3805 => 1352,  3802 => 1351,  3800 => 1350,  3795 => 1348,  3790 => 1346,  3780 => 1341,  3773 => 1339,  3764 => 1335,  3757 => 1333,  3748 => 1329,  3741 => 1327,  3736 => 1325,  3730 => 1321,  3724 => 1320,  3722 => 1319,  3716 => 1318,  3709 => 1316,  3703 => 1312,  3698 => 1311,  3695 => 1310,  3690 => 1308,  3687 => 1307,  3685 => 1306,  3682 => 1305,  3677 => 1304,  3674 => 1303,  3669 => 1301,  3666 => 1300,  3664 => 1299,  3657 => 1297,  3651 => 1293,  3646 => 1292,  3643 => 1291,  3638 => 1289,  3635 => 1288,  3633 => 1287,  3630 => 1286,  3625 => 1285,  3622 => 1284,  3617 => 1282,  3614 => 1281,  3612 => 1280,  3605 => 1278,  3599 => 1274,  3594 => 1273,  3591 => 1272,  3586 => 1270,  3583 => 1269,  3581 => 1268,  3578 => 1267,  3573 => 1266,  3570 => 1265,  3565 => 1263,  3562 => 1262,  3560 => 1261,  3553 => 1259,  3548 => 1257,  3538 => 1252,  3531 => 1250,  3522 => 1246,  3515 => 1244,  3509 => 1240,  3504 => 1239,  3501 => 1238,  3496 => 1236,  3493 => 1235,  3491 => 1234,  3488 => 1233,  3483 => 1232,  3480 => 1231,  3475 => 1229,  3472 => 1228,  3470 => 1227,  3463 => 1225,  3457 => 1221,  3452 => 1220,  3449 => 1219,  3444 => 1217,  3441 => 1216,  3439 => 1215,  3436 => 1214,  3431 => 1213,  3428 => 1212,  3423 => 1210,  3420 => 1209,  3418 => 1208,  3411 => 1206,  3406 => 1204,  3394 => 1197,  3387 => 1195,  3381 => 1191,  3373 => 1189,  3368 => 1188,  3363 => 1187,  3358 => 1185,  3353 => 1184,  3351 => 1183,  3348 => 1182,  3344 => 1181,  3337 => 1179,  3332 => 1177,  3322 => 1172,  3317 => 1170,  3308 => 1166,  3303 => 1164,  3294 => 1160,  3287 => 1158,  3278 => 1154,  3273 => 1152,  3264 => 1148,  3257 => 1146,  3248 => 1142,  3241 => 1140,  3234 => 1135,  3229 => 1134,  3226 => 1133,  3221 => 1132,  3216 => 1131,  3211 => 1129,  3208 => 1128,  3203 => 1127,  3199 => 1126,  3191 => 1123,  3186 => 1121,  3177 => 1115,  3171 => 1114,  3165 => 1113,  3158 => 1109,  3152 => 1108,  3148 => 1107,  3139 => 1100,  3131 => 1098,  3126 => 1097,  3121 => 1096,  3116 => 1094,  3111 => 1093,  3109 => 1092,  3106 => 1091,  3102 => 1090,  3097 => 1088,  3085 => 1083,  3078 => 1081,  3075 => 1080,  3068 => 1079,  3063 => 1078,  3059 => 1077,  3055 => 1076,  3047 => 1073,  3042 => 1071,  3029 => 1065,  3022 => 1063,  3019 => 1062,  3012 => 1061,  3007 => 1060,  3003 => 1059,  2995 => 1056,  2983 => 1051,  2976 => 1049,  2973 => 1048,  2966 => 1047,  2961 => 1046,  2957 => 1045,  2953 => 1044,  2945 => 1041,  2940 => 1039,  2927 => 1033,  2920 => 1031,  2917 => 1030,  2910 => 1029,  2905 => 1028,  2901 => 1027,  2897 => 1026,  2889 => 1023,  2880 => 1019,  2873 => 1017,  2867 => 1013,  2862 => 1012,  2859 => 1011,  2854 => 1009,  2851 => 1008,  2849 => 1007,  2846 => 1006,  2841 => 1005,  2838 => 1004,  2833 => 1002,  2830 => 1001,  2828 => 1000,  2821 => 998,  2815 => 994,  2810 => 993,  2807 => 992,  2802 => 990,  2799 => 989,  2797 => 988,  2794 => 987,  2789 => 986,  2786 => 985,  2781 => 983,  2778 => 982,  2776 => 981,  2769 => 979,  2757 => 974,  2750 => 972,  2747 => 971,  2740 => 970,  2735 => 969,  2731 => 968,  2725 => 965,  2720 => 963,  2713 => 958,  2708 => 957,  2705 => 956,  2700 => 954,  2697 => 953,  2695 => 952,  2692 => 951,  2687 => 950,  2684 => 949,  2679 => 947,  2676 => 946,  2674 => 945,  2667 => 943,  2661 => 939,  2656 => 938,  2653 => 937,  2648 => 935,  2645 => 934,  2643 => 933,  2640 => 932,  2635 => 931,  2632 => 930,  2627 => 928,  2624 => 927,  2622 => 926,  2615 => 924,  2609 => 920,  2604 => 919,  2601 => 918,  2596 => 916,  2593 => 915,  2591 => 914,  2588 => 913,  2583 => 912,  2580 => 911,  2575 => 909,  2572 => 908,  2570 => 907,  2563 => 905,  2558 => 903,  2545 => 897,  2538 => 895,  2535 => 894,  2528 => 893,  2523 => 892,  2519 => 891,  2515 => 890,  2507 => 887,  2495 => 882,  2488 => 880,  2485 => 879,  2478 => 878,  2473 => 877,  2469 => 876,  2461 => 873,  2456 => 870,  2450 => 869,  2448 => 868,  2445 => 867,  2437 => 865,  2432 => 864,  2427 => 863,  2422 => 861,  2417 => 860,  2415 => 859,  2412 => 858,  2408 => 857,  2401 => 855,  2396 => 852,  2390 => 851,  2388 => 850,  2385 => 849,  2377 => 847,  2372 => 846,  2367 => 845,  2362 => 843,  2357 => 842,  2355 => 841,  2352 => 840,  2348 => 839,  2341 => 837,  2329 => 832,  2322 => 830,  2319 => 829,  2312 => 828,  2307 => 827,  2303 => 826,  2295 => 823,  2283 => 818,  2276 => 816,  2273 => 815,  2266 => 814,  2261 => 813,  2257 => 812,  2253 => 811,  2245 => 808,  2239 => 804,  2234 => 803,  2231 => 802,  2226 => 800,  2223 => 799,  2221 => 798,  2218 => 797,  2213 => 796,  2210 => 795,  2205 => 793,  2202 => 792,  2200 => 791,  2193 => 789,  2187 => 785,  2182 => 784,  2179 => 783,  2174 => 781,  2171 => 780,  2169 => 779,  2166 => 778,  2161 => 777,  2158 => 776,  2153 => 774,  2150 => 773,  2148 => 772,  2141 => 770,  2132 => 766,  2125 => 764,  2120 => 762,  2107 => 756,  2100 => 754,  2097 => 753,  2090 => 752,  2085 => 751,  2081 => 750,  2077 => 749,  2069 => 746,  2064 => 743,  2058 => 742,  2056 => 741,  2050 => 740,  2043 => 738,  2037 => 734,  2032 => 733,  2029 => 732,  2024 => 730,  2021 => 729,  2019 => 728,  2016 => 727,  2011 => 726,  2008 => 725,  2003 => 723,  2000 => 722,  1998 => 721,  1991 => 719,  1986 => 716,  1980 => 715,  1977 => 714,  1969 => 711,  1964 => 710,  1959 => 709,  1954 => 707,  1949 => 706,  1947 => 705,  1944 => 704,  1940 => 703,  1934 => 702,  1922 => 697,  1915 => 695,  1912 => 694,  1905 => 693,  1900 => 692,  1896 => 691,  1888 => 688,  1882 => 684,  1877 => 683,  1874 => 682,  1869 => 680,  1866 => 679,  1864 => 678,  1861 => 677,  1856 => 676,  1853 => 675,  1848 => 673,  1845 => 672,  1843 => 671,  1838 => 669,  1832 => 665,  1827 => 664,  1824 => 663,  1819 => 661,  1816 => 660,  1814 => 659,  1811 => 658,  1806 => 657,  1803 => 656,  1798 => 654,  1795 => 653,  1793 => 652,  1786 => 650,  1780 => 646,  1775 => 645,  1772 => 644,  1767 => 642,  1764 => 641,  1762 => 640,  1759 => 639,  1754 => 638,  1751 => 637,  1746 => 635,  1743 => 634,  1741 => 633,  1734 => 631,  1729 => 629,  1721 => 623,  1716 => 622,  1713 => 621,  1708 => 620,  1703 => 619,  1698 => 617,  1695 => 616,  1690 => 615,  1686 => 614,  1682 => 613,  1674 => 610,  1667 => 605,  1662 => 604,  1659 => 603,  1654 => 602,  1649 => 601,  1644 => 599,  1641 => 598,  1636 => 597,  1632 => 596,  1628 => 595,  1620 => 592,  1614 => 588,  1609 => 587,  1606 => 586,  1601 => 584,  1598 => 583,  1596 => 582,  1593 => 581,  1588 => 580,  1585 => 579,  1580 => 577,  1577 => 576,  1575 => 575,  1570 => 573,  1565 => 571,  1559 => 567,  1553 => 566,  1551 => 565,  1545 => 564,  1538 => 562,  1533 => 559,  1527 => 558,  1525 => 557,  1519 => 556,  1512 => 554,  1507 => 552,  1500 => 547,  1495 => 546,  1492 => 545,  1487 => 543,  1484 => 542,  1482 => 541,  1479 => 540,  1474 => 539,  1471 => 538,  1466 => 536,  1463 => 535,  1461 => 534,  1454 => 532,  1448 => 528,  1443 => 527,  1440 => 526,  1435 => 524,  1432 => 523,  1430 => 522,  1427 => 521,  1422 => 520,  1419 => 519,  1414 => 517,  1411 => 516,  1409 => 515,  1402 => 513,  1397 => 511,  1391 => 507,  1385 => 506,  1383 => 505,  1377 => 504,  1370 => 502,  1364 => 498,  1359 => 497,  1356 => 496,  1351 => 494,  1348 => 493,  1346 => 492,  1343 => 491,  1338 => 490,  1335 => 489,  1330 => 487,  1327 => 486,  1325 => 485,  1318 => 483,  1313 => 481,  1299 => 474,  1292 => 472,  1289 => 471,  1282 => 470,  1277 => 469,  1273 => 468,  1267 => 465,  1255 => 460,  1248 => 458,  1245 => 457,  1238 => 456,  1233 => 455,  1229 => 454,  1223 => 451,  1217 => 447,  1212 => 446,  1209 => 445,  1204 => 443,  1201 => 442,  1199 => 441,  1196 => 440,  1191 => 439,  1188 => 438,  1183 => 436,  1180 => 435,  1178 => 434,  1171 => 432,  1164 => 427,  1159 => 425,  1156 => 424,  1151 => 422,  1148 => 421,  1146 => 420,  1142 => 418,  1137 => 416,  1134 => 415,  1129 => 413,  1126 => 412,  1124 => 411,  1115 => 404,  1110 => 402,  1107 => 401,  1102 => 399,  1099 => 398,  1097 => 397,  1093 => 395,  1088 => 393,  1085 => 392,  1080 => 390,  1077 => 389,  1075 => 388,  1066 => 381,  1061 => 379,  1058 => 378,  1053 => 376,  1050 => 375,  1048 => 374,  1044 => 372,  1039 => 370,  1036 => 369,  1031 => 367,  1028 => 366,  1026 => 365,  1017 => 358,  1012 => 356,  1009 => 355,  1004 => 353,  1001 => 352,  999 => 351,  995 => 349,  990 => 348,  987 => 347,  982 => 345,  979 => 344,  977 => 343,  968 => 336,  963 => 334,  960 => 333,  955 => 331,  952 => 330,  950 => 329,  946 => 327,  941 => 325,  938 => 324,  933 => 322,  930 => 321,  928 => 320,  919 => 313,  914 => 311,  911 => 310,  906 => 308,  903 => 307,  901 => 306,  897 => 304,  892 => 302,  889 => 301,  884 => 299,  881 => 298,  879 => 297,  870 => 290,  864 => 289,  856 => 287,  848 => 285,  845 => 284,  841 => 283,  837 => 282,  827 => 274,  821 => 273,  813 => 271,  805 => 269,  802 => 268,  797 => 267,  791 => 265,  785 => 263,  783 => 262,  777 => 259,  765 => 254,  758 => 252,  755 => 251,  748 => 250,  743 => 249,  739 => 248,  731 => 245,  719 => 240,  712 => 238,  709 => 237,  702 => 236,  697 => 235,  693 => 234,  687 => 231,  675 => 226,  668 => 224,  665 => 223,  658 => 222,  653 => 221,  649 => 220,  643 => 217,  637 => 213,  631 => 212,  623 => 210,  615 => 208,  612 => 207,  608 => 206,  602 => 203,  592 => 196,  580 => 191,  573 => 189,  570 => 188,  563 => 187,  558 => 186,  554 => 185,  548 => 182,  543 => 179,  538 => 177,  530 => 175,  525 => 174,  520 => 173,  515 => 171,  510 => 170,  508 => 169,  505 => 168,  501 => 167,  495 => 166,  492 => 165,  490 => 164,  482 => 161,  475 => 159,  466 => 155,  459 => 153,  452 => 149,  446 => 148,  442 => 147,  433 => 143,  428 => 141,  423 => 138,  417 => 137,  415 => 136,  409 => 135,  404 => 133,  399 => 130,  393 => 129,  391 => 128,  385 => 127,  380 => 125,  371 => 121,  364 => 119,  359 => 116,  353 => 115,  351 => 114,  345 => 113,  340 => 111,  335 => 108,  329 => 107,  327 => 106,  321 => 105,  316 => 103,  311 => 100,  305 => 99,  303 => 98,  297 => 97,  292 => 95,  278 => 88,  271 => 86,  268 => 85,  261 => 84,  256 => 83,  252 => 82,  246 => 79,  233 => 73,  226 => 71,  223 => 70,  216 => 69,  211 => 68,  207 => 67,  201 => 64,  192 => 60,  187 => 58,  178 => 54,  173 => 52,  168 => 49,  162 => 48,  160 => 47,  154 => 46,  149 => 44,  141 => 39,  137 => 38,  133 => 37,  129 => 36,  125 => 35,  121 => 34,  117 => 33,  112 => 31,  106 => 28,  102 => 26,  94 => 22,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/setting.twig", "");
    }
}
