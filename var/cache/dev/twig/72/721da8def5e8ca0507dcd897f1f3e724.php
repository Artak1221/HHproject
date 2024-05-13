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

/* form/elfinder_designed.html.twig */
class __TwigTemplate_83eebe879cb81b97e14975fc5493b415 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'elfinder_designed_row' => [$this, 'block_elfinder_designed_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/elfinder_designed.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/elfinder_designed.html.twig"));

        // line 1
        $this->displayBlock('elfinder_designed_row', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_elfinder_designed_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "elfinder_designed_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "elfinder_designed_row"));

        // line 2
        echo "    <style>
        .elfinder-design {
            position: relative;
        }

        .elfinder-design input {
            opacity: 0 !important;
            z-index: 9;
            cursor: pointer;
            width: 100%;
        }

        .elfinder-mask {
            position: absolute;
            height: 100%;
            left: 0;
            top: 0;
            background: #222d32;
            color: white;
            font-size: 16px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 3px;
            width: max-content;
            padding: 0 15px;
        }

        .image-wrapper {
            margin: 10px 0;
            width: 300px;
            display: flex;
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 4px 5px 0 rgb(0 0 0 / 14%), 0 1px 10px 0 rgb(0 0 0 / 12%), 0 2px 4px -1px rgb(0 0 0 / 30%);
        }
    </style>

    <div class=\"elfinder-design\">
        <div class=\"elfinder-mask\">
            Choose A File
        </div>
        <input type=\"text\" ";
        // line 44
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 44, $this->source); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 44, $this->source); })()), "html", null, true);
            echo "\" ";
        }
        // line 45
        echo "               data-type=\"elfinder-input-field\"/>
        ";
        // line 46
        if (((isset($context["enable"]) || array_key_exists("enable", $context) ? $context["enable"] : (function () { throw new RuntimeError('Variable "enable" does not exist.', 46, $this->source); })()) && array_key_exists("instance", $context))) {
            // line 47
            echo "            <script type=\"text/javascript\" charset=\"utf-8\">
                live('click', '[data-type=\"elfinder-input-field\"][id=\"";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "\"]', function (event) {
                    console.warn('Test');
                    var childWin = window.open(\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("elfinder", ["instance" => (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 50, $this->source); })()), "homeFolder" => (isset($context["homeFolder"]) || array_key_exists("homeFolder", $context) ? $context["homeFolder"] : (function () { throw new RuntimeError('Variable "homeFolder" does not exist.', 50, $this->source); })())]), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 50, $this->source); })()), "html", null, true);
            echo "\", \"popupWindow\", \"height=450, width=900\");
                });

                function live(eventType, elementQuerySelector, cb) {
                    document.addEventListener(eventType, function (event) {
                        var qs = document.querySelectorAll(elementQuerySelector);
                        if (qs) {
                            var el = event.target, index = -1;
                            while (el && ((index = Array.prototype.indexOf.call(qs, el)) === -1)) {
                                el = el.parentElement;
                            }
                            if (index > -1) {
                                cb.call(el, event);
                            }
                        }
                    })
                }

                function setValue(value, element_id) {
                    document.querySelector('[data-type=\"elfinder-input-field\"]' + (element_id ? '[id=\"' + element_id + '\"]' : '')).value = value;
                    document.querySelector('.show_image_' + element_id + ' img').src = value;
                }
            </script>
        ";
        }
        // line 74
        echo "    </div>



    ";
        // line 78
        if ((twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "vars", [], "any", false, false, false, 78), "value", [], "array", false, false, false, 78), ".")) == "pdf")) {
            // line 79
            echo "        <a style=\"    display: block;
    margin: 20px 0;
    padding: 10px 20px;
    background: #222d32;
    width: max-content;
    color: white;
    font-size: 18px;\" target=\"_blank\" href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "vars", [], "any", false, false, false, 85), "value", [], "array", false, false, false, 85)), "html", null, true);
            echo "\">Show File</a>
    ";
        } else {
            // line 87
            echo "        <div class=\"image-wrapper show_image_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "vars", [], "any", false, false, false, 87), "id", [], "array", false, false, false, 87), "html", null, true);
            echo "\">
            <img src=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "vars", [], "any", false, false, false, 88), "value", [], "array", false, false, false, 88)), "html", null, true);
            echo "\" width=\"100%\" alt=\"\">
        </div>
    ";
        }
        // line 91
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "form/elfinder_designed.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  189 => 91,  183 => 88,  178 => 87,  173 => 85,  165 => 79,  163 => 78,  157 => 74,  128 => 50,  123 => 48,  120 => 47,  118 => 46,  115 => 45,  107 => 44,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block elfinder_designed_row %}
    <style>
        .elfinder-design {
            position: relative;
        }

        .elfinder-design input {
            opacity: 0 !important;
            z-index: 9;
            cursor: pointer;
            width: 100%;
        }

        .elfinder-mask {
            position: absolute;
            height: 100%;
            left: 0;
            top: 0;
            background: #222d32;
            color: white;
            font-size: 16px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 3px;
            width: max-content;
            padding: 0 15px;
        }

        .image-wrapper {
            margin: 10px 0;
            width: 300px;
            display: flex;
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 4px 5px 0 rgb(0 0 0 / 14%), 0 1px 10px 0 rgb(0 0 0 / 12%), 0 2px 4px -1px rgb(0 0 0 / 30%);
        }
    </style>

    <div class=\"elfinder-design\">
        <div class=\"elfinder-mask\">
            Choose A File
        </div>
        <input type=\"text\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}
               data-type=\"elfinder-input-field\"/>
        {% if enable and instance is defined %}
            <script type=\"text/javascript\" charset=\"utf-8\">
                live('click', '[data-type=\"elfinder-input-field\"][id=\"{{ id }}\"]', function (event) {
                    console.warn('Test');
                    var childWin = window.open(\"{{ path('elfinder', {'instance': instance, 'homeFolder': homeFolder }) }}?id={{ id }}\", \"popupWindow\", \"height=450, width=900\");
                });

                function live(eventType, elementQuerySelector, cb) {
                    document.addEventListener(eventType, function (event) {
                        var qs = document.querySelectorAll(elementQuerySelector);
                        if (qs) {
                            var el = event.target, index = -1;
                            while (el && ((index = Array.prototype.indexOf.call(qs, el)) === -1)) {
                                el = el.parentElement;
                            }
                            if (index > -1) {
                                cb.call(el, event);
                            }
                        }
                    })
                }

                function setValue(value, element_id) {
                    document.querySelector('[data-type=\"elfinder-input-field\"]' + (element_id ? '[id=\"' + element_id + '\"]' : '')).value = value;
                    document.querySelector('.show_image_' + element_id + ' img').src = value;
                }
            </script>
        {% endif %}
    </div>



    {% if form.vars['value']|split('.')|last == 'pdf' %}
        <a style=\"    display: block;
    margin: 20px 0;
    padding: 10px 20px;
    background: #222d32;
    width: max-content;
    color: white;
    font-size: 18px;\" target=\"_blank\" href=\"{{ asset(form.vars['value']) }}\">Show File</a>
    {% else %}
        <div class=\"image-wrapper show_image_{{ form.vars['id'] }}\">
            <img src=\"{{ asset(form.vars['value']) }}\" width=\"100%\" alt=\"\">
        </div>
    {% endif %}

{% endblock %}", "form/elfinder_designed.html.twig", "C:\\Users\\Toolbox\\Documents\\HHproject\\templates\\form\\elfinder_designed.html.twig");
    }
}
