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

/* apicalls/employees.html.twig */
class __TwigTemplate_596ecadb59846e460778f7739feda5474c445d1cfa4deee8698dbf5a4427d96e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apicalls/employees.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "apicalls/employees.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Symfrest Employee";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h1>Employees</h1>

\t";
        // line 8
        if ((isset($context["employees"]) || array_key_exists("employees", $context) ? $context["employees"] : (function () { throw new RuntimeError('Variable "employees" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>\t\t\t\t
\t\t\t\t\t<th>Emp ID</th>
\t\t\t\t\t<th>First Name</th>
\t\t\t\t\t<th>Last Name</th>
\t\t\t\t\t<th>Email</th>
\t\t\t\t\t<th>Mobile</th>
\t\t\t\t\t<th>Telephone</th>
\t\t\t\t\t<th>DOB</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>\t\t\t\t
\t\t\t\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["employees"]) || array_key_exists("employees", $context) ? $context["employees"] : (function () { throw new RuntimeError('Variable "employees" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 23
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 24), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "firstName", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "lastName", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "email", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "mobile", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "telephone", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "dateofbirth", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</tr>\t\t\t\t
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        } else {
            // line 37
            echo "\t\t<p>No articles to display</p>
\t";
        }
        // line 39
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "apicalls/employees.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 39,  140 => 37,  135 => 34,  125 => 30,  121 => 29,  117 => 28,  113 => 27,  109 => 26,  105 => 25,  101 => 24,  98 => 23,  94 => 22,  79 => 9,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Symfrest Employee{% endblock %}

{% block body %}
\t<h1>Employees</h1>

\t{% if employees %}
\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>\t\t\t\t
\t\t\t\t\t<th>Emp ID</th>
\t\t\t\t\t<th>First Name</th>
\t\t\t\t\t<th>Last Name</th>
\t\t\t\t\t<th>Email</th>
\t\t\t\t\t<th>Mobile</th>
\t\t\t\t\t<th>Telephone</th>
\t\t\t\t\t<th>DOB</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>\t\t\t\t
\t\t\t\t{% for employee in employees %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{employee.id }}</td>
\t\t\t\t\t\t<td>{{employee.firstName }}</td>
\t\t\t\t\t\t<td>{{employee.lastName }}</td>
\t\t\t\t\t\t<td>{{employee.email }}</td>
\t\t\t\t\t\t<td>{{employee.mobile }}</td>
\t\t\t\t\t\t<td>{{employee.telephone }}</td>
\t\t\t\t\t\t<td>{{employee.dateofbirth}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</tr>\t\t\t\t
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t{% else %}
\t\t<p>No articles to display</p>
\t{% endif %}

{% endblock %}

", "apicalls/employees.html.twig", "F:\\xampp\\htdocs\\symfonyapps\\rest_api_project\\templates\\apicalls\\employees.html.twig");
    }
}
