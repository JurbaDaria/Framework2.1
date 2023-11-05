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

/* task/list.html.twig */
class __TwigTemplate_c5d66f28dffc2cf8cc710c37ceee3f25 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/list.html.twig"));

        // line 1
        echo " ";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Список задач</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Заголовок</th>
                <th>Срок выполнения</th>
                <th>Категория</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 15
            echo "                <tr>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "dueDate", [], "any", false, false, false, 17), "d.m.Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "category", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </tbody>
    </table>

    <div class=\"pagination\">
        ";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 25, $this->source); })()), "page", [], "any", false, false, false, 25) > 1)) {
            // line 26
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tasks_list", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 26, $this->source); })()), "page", [], "any", false, false, false, 26) - 1)]), "html", null, true);
            echo "\">Предыдущая</a>
        ";
        }
        // line 28
        echo "
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 29, $this->source); })()), "pages", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 30
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tasks_list", ["page" => $context["page"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
        ";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 33, $this->source); })()), "page", [], "any", false, false, false, 33) < twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 33, $this->source); })()), "pages", [], "any", false, false, false, 33))) {
            // line 34
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tasks_list", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 34, $this->source); })()), "page", [], "any", false, false, false, 34) + 1)]), "html", null, true);
            echo "\">Следующая</a>
        ";
        }
        // line 36
        echo "    </div>

    <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tasks_create");
        echo "\" class=\"btn btn-primary\">Создать задачу</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "task/list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  153 => 38,  149 => 36,  143 => 34,  141 => 33,  138 => 32,  127 => 30,  123 => 29,  120 => 28,  114 => 26,  112 => 25,  106 => 21,  97 => 18,  93 => 17,  89 => 16,  86 => 15,  82 => 14,  69 => 3,  59 => 2,  48 => 40,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {#templates/task/list.html.twig#}
{% block body %}
    <h1>Список задач</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Заголовок</th>
                <th>Срок выполнения</th>
                <th>Категория</th>
            </tr>
        </thead>
        <tbody>
            {% for task in tasks %}
                <tr>
                    <td>{{ task.title }}</td>
                    <td>{{ task.dueDate|date('d.m.Y') }}</td>
                    <td>{{ task.category }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <div class=\"pagination\">
        {% if pagination.page > 1 %}
            <a href=\"{{ path('app_tasks_list', {'page': pagination.page - 1}) }}\">Предыдущая</a>
        {% endif %}

        {% for page in pagination.pages %}
            <a href=\"{{ path('app_tasks_list', {'page': page}) }}\">{{ page }}</a>
        {% endfor %}

        {% if pagination.page < pagination.pages %}
            <a href=\"{{ path('app_tasks_list', {'page': pagination.page + 1}) }}\">Следующая</a>
        {% endif %}
    </div>

    <a href=\"{{ path('app_tasks_create') }}\" class=\"btn btn-primary\">Создать задачу</a>
{% endblock %}

", "task/list.html.twig", "/Users/dariajurba/Desktop/учёба/framework/my_project_directory/templates/task/list.html.twig");
    }
}
