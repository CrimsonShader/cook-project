<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c70c05b27d37c0edea3d3826acbd9420e04844a6a0d01d5bf50a4dfaff34b6f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_296efa194ce5535db29a2d19768fb366d4941c85bfe6183889caa49e948d6f1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_296efa194ce5535db29a2d19768fb366d4941c85bfe6183889caa49e948d6f1c->enter($__internal_296efa194ce5535db29a2d19768fb366d4941c85bfe6183889caa49e948d6f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7bac88315c162f297f103870bd0a733bca1d6672452721903862c53b2ba5a1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bac88315c162f297f103870bd0a733bca1d6672452721903862c53b2ba5a1e2->enter($__internal_7bac88315c162f297f103870bd0a733bca1d6672452721903862c53b2ba5a1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_296efa194ce5535db29a2d19768fb366d4941c85bfe6183889caa49e948d6f1c->leave($__internal_296efa194ce5535db29a2d19768fb366d4941c85bfe6183889caa49e948d6f1c_prof);

        
        $__internal_7bac88315c162f297f103870bd0a733bca1d6672452721903862c53b2ba5a1e2->leave($__internal_7bac88315c162f297f103870bd0a733bca1d6672452721903862c53b2ba5a1e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d5a8b099fc0a463d8901144a5808263ce6b18a1fbe02fb0271b6cd0fb6d8336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5a8b099fc0a463d8901144a5808263ce6b18a1fbe02fb0271b6cd0fb6d8336->enter($__internal_5d5a8b099fc0a463d8901144a5808263ce6b18a1fbe02fb0271b6cd0fb6d8336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fcc7ad73aee0a40a9490457a0a43ebb8050e3014db0a32e0962963dc388acf5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc7ad73aee0a40a9490457a0a43ebb8050e3014db0a32e0962963dc388acf5b->enter($__internal_fcc7ad73aee0a40a9490457a0a43ebb8050e3014db0a32e0962963dc388acf5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fcc7ad73aee0a40a9490457a0a43ebb8050e3014db0a32e0962963dc388acf5b->leave($__internal_fcc7ad73aee0a40a9490457a0a43ebb8050e3014db0a32e0962963dc388acf5b_prof);

        
        $__internal_5d5a8b099fc0a463d8901144a5808263ce6b18a1fbe02fb0271b6cd0fb6d8336->leave($__internal_5d5a8b099fc0a463d8901144a5808263ce6b18a1fbe02fb0271b6cd0fb6d8336_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b59a4c92af5813d4c4bf864257d54294071dbe987cf619840f98277e30c4fd58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b59a4c92af5813d4c4bf864257d54294071dbe987cf619840f98277e30c4fd58->enter($__internal_b59a4c92af5813d4c4bf864257d54294071dbe987cf619840f98277e30c4fd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b62fbe6ca4206b0bac4fc163fc2d0cb7ae0bf317965897e617007b92e97f4bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b62fbe6ca4206b0bac4fc163fc2d0cb7ae0bf317965897e617007b92e97f4bef->enter($__internal_b62fbe6ca4206b0bac4fc163fc2d0cb7ae0bf317965897e617007b92e97f4bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b62fbe6ca4206b0bac4fc163fc2d0cb7ae0bf317965897e617007b92e97f4bef->leave($__internal_b62fbe6ca4206b0bac4fc163fc2d0cb7ae0bf317965897e617007b92e97f4bef_prof);

        
        $__internal_b59a4c92af5813d4c4bf864257d54294071dbe987cf619840f98277e30c4fd58->leave($__internal_b59a4c92af5813d4c4bf864257d54294071dbe987cf619840f98277e30c4fd58_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c95e1e37d3a36135f2bb7167910c0090b382af9e0e3d344d389b96b4440c15d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c95e1e37d3a36135f2bb7167910c0090b382af9e0e3d344d389b96b4440c15d->enter($__internal_4c95e1e37d3a36135f2bb7167910c0090b382af9e0e3d344d389b96b4440c15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fe432be22bd0e663a0a8bad31b6db4d1ca32fec97f01e85d22c9c685ae908e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe432be22bd0e663a0a8bad31b6db4d1ca32fec97f01e85d22c9c685ae908e56->enter($__internal_fe432be22bd0e663a0a8bad31b6db4d1ca32fec97f01e85d22c9c685ae908e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fe432be22bd0e663a0a8bad31b6db4d1ca32fec97f01e85d22c9c685ae908e56->leave($__internal_fe432be22bd0e663a0a8bad31b6db4d1ca32fec97f01e85d22c9c685ae908e56_prof);

        
        $__internal_4c95e1e37d3a36135f2bb7167910c0090b382af9e0e3d344d389b96b4440c15d->leave($__internal_4c95e1e37d3a36135f2bb7167910c0090b382af9e0e3d344d389b96b4440c15d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\cook-project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
