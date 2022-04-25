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

/* account/order.html.twig */
class __TwigTemplate_4045e80480697f85c9773586cf4e348e87a4ad83a5c8a848a5f6f3a5c1b38100 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mes commandes";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <h1>Mes commandes</h1>
        <a href=";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo ">Retour</a>

    <br/>
  
    ";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 12, $this->source); })())) == 0)) {
            // line 13
            echo "        <p>Vous n'avez pas encore fait de commandes. <br/> 
        </p>

    ";
        } else {
            // line 17
            echo "            <table class=\"table mt-4\">
                <thead>
                    <tr>
                        <th scope=\"col\">Reference</th>
                        <th scope=\"col\">Passee le</th>
                        <th scope=\"col\">Statut</th>
                        <th scope=\"col\">Produit(s)</th>
                        <th scope=\"col\">Total</th>
                        <th scope=\"col\"></th>
                    </tr>
                </thead>

                <tbody>
                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 31
                echo "                    
                        <tr>
                            <td><span class=\"badge badge-primary\">";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 33), "html", null, true);
                echo "</span></td>
                            <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 36
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "state", [], "any", false, false, false, 36) == 1)) {
                    // line 37
                    echo "                                    Paiement effectue
                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 38
$context["order"], "state", [], "any", false, false, false, 38) == 2)) {
                    // line 39
                    echo "                                    Preparation en cours
                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 40
$context["order"], "state", [], "any", false, false, false, 40) == 3)) {
                    // line 41
                    echo "                                    Livraison en cours
                                ";
                }
                // line 43
                echo "                            </td>
                            <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderDetails", [], "any", false, false, false, 44)), "html", null, true);
                echo "</td>
                            <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["order"], "carrierPrice", [], "any", false, false, false, 45) + twig_get_attribute($this->env, $this->source, $context["order"], "getTotal", [], "any", false, false, false, 45)) / 100), 2), "html", null, true);
                echo "</td>
                            <td class=\"text-right\"><a href=";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 46)]), "html", null, true);
                echo ">Voir ma commande</a></td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                </tbody>
            </table>

             

        </div> 

    ";
        }
        // line 57
        echo "    
    
    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 57,  175 => 49,  166 => 46,  162 => 45,  158 => 44,  155 => 43,  151 => 41,  149 => 40,  146 => 39,  144 => 38,  141 => 37,  139 => 36,  134 => 34,  130 => 33,  126 => 31,  122 => 30,  107 => 17,  101 => 13,  99 => 12,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes commandes{% endblock %}

{% block content %}

    <h1>Mes commandes</h1>
        <a href={{ path('account') }}>Retour</a>

    <br/>
  
    {% if orders|length == 0 %}
        <p>Vous n'avez pas encore fait de commandes. <br/> 
        </p>

    {% else %}
            <table class=\"table mt-4\">
                <thead>
                    <tr>
                        <th scope=\"col\">Reference</th>
                        <th scope=\"col\">Passee le</th>
                        <th scope=\"col\">Statut</th>
                        <th scope=\"col\">Produit(s)</th>
                        <th scope=\"col\">Total</th>
                        <th scope=\"col\"></th>
                    </tr>
                </thead>

                <tbody>
                    {% for order in orders %}
                    
                        <tr>
                            <td><span class=\"badge badge-primary\">{{ order.reference }}</span></td>
                            <td>{{ order.createdAt|date('d/m/Y') }}</td>
                            <td>
                                {% if order.state == 1 %}
                                    Paiement effectue
                                {% elseif order.state == 2 %}
                                    Preparation en cours
                                {% elseif order.state == 3 %}
                                    Livraison en cours
                                {% endif %}
                            </td>
                            <td>{{ order.orderDetails|length }}</td>
                            <td>{{ ((order.carrierPrice + order.getTotal) / 100) |number_format(2) }}</td>
                            <td class=\"text-right\"><a href={{ path('account_order_show', {'reference' : order.reference}) }}>Voir ma commande</a></td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>

             

        </div> 

    {% endif %}
    
    
    

{% endblock %}", "account/order.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Symfony\\OmiyaProject\\Omiya-Site-Ecommerce-main\\templates\\account\\order.html.twig");
    }
}
