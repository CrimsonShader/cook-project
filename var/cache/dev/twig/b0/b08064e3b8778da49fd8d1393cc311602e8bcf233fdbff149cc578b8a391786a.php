<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b95f7ab30d76a04980f24bd0199c881ce189c1a769f07275d0dfd7c1b15da1bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_057bc0e1286b641e0c2681161d0b1471355e7e6fdb5d714280bed21190d19d64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_057bc0e1286b641e0c2681161d0b1471355e7e6fdb5d714280bed21190d19d64->enter($__internal_057bc0e1286b641e0c2681161d0b1471355e7e6fdb5d714280bed21190d19d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_93abf64508046b0be7dd26e352cf8f6421a35afa429b218049c34af50b4d0f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93abf64508046b0be7dd26e352cf8f6421a35afa429b218049c34af50b4d0f74->enter($__internal_93abf64508046b0be7dd26e352cf8f6421a35afa429b218049c34af50b4d0f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_057bc0e1286b641e0c2681161d0b1471355e7e6fdb5d714280bed21190d19d64->leave($__internal_057bc0e1286b641e0c2681161d0b1471355e7e6fdb5d714280bed21190d19d64_prof);

        
        $__internal_93abf64508046b0be7dd26e352cf8f6421a35afa429b218049c34af50b4d0f74->leave($__internal_93abf64508046b0be7dd26e352cf8f6421a35afa429b218049c34af50b4d0f74_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e77c634848fe18e31085247d53fd4c046f4a92ab38dc273b68b2b7aa8bcc4e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e77c634848fe18e31085247d53fd4c046f4a92ab38dc273b68b2b7aa8bcc4e2a->enter($__internal_e77c634848fe18e31085247d53fd4c046f4a92ab38dc273b68b2b7aa8bcc4e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4f38e7cf5f7c9b97b0980449c02e0c45bbf09d67a9a7e1d55bc8b472eb4477b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f38e7cf5f7c9b97b0980449c02e0c45bbf09d67a9a7e1d55bc8b472eb4477b7->enter($__internal_4f38e7cf5f7c9b97b0980449c02e0c45bbf09d67a9a7e1d55bc8b472eb4477b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4f38e7cf5f7c9b97b0980449c02e0c45bbf09d67a9a7e1d55bc8b472eb4477b7->leave($__internal_4f38e7cf5f7c9b97b0980449c02e0c45bbf09d67a9a7e1d55bc8b472eb4477b7_prof);

        
        $__internal_e77c634848fe18e31085247d53fd4c046f4a92ab38dc273b68b2b7aa8bcc4e2a->leave($__internal_e77c634848fe18e31085247d53fd4c046f4a92ab38dc273b68b2b7aa8bcc4e2a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a08c0e63f4c47cdcc876fcd3af44863e1115a0f465a5621532a69070525ed3ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a08c0e63f4c47cdcc876fcd3af44863e1115a0f465a5621532a69070525ed3ee->enter($__internal_a08c0e63f4c47cdcc876fcd3af44863e1115a0f465a5621532a69070525ed3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e5fd2af1b030329664531d6611f36975eb12846bfc0c0e9ffb9b264b09cdeeff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fd2af1b030329664531d6611f36975eb12846bfc0c0e9ffb9b264b09cdeeff->enter($__internal_e5fd2af1b030329664531d6611f36975eb12846bfc0c0e9ffb9b264b09cdeeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e5fd2af1b030329664531d6611f36975eb12846bfc0c0e9ffb9b264b09cdeeff->leave($__internal_e5fd2af1b030329664531d6611f36975eb12846bfc0c0e9ffb9b264b09cdeeff_prof);

        
        $__internal_a08c0e63f4c47cdcc876fcd3af44863e1115a0f465a5621532a69070525ed3ee->leave($__internal_a08c0e63f4c47cdcc876fcd3af44863e1115a0f465a5621532a69070525ed3ee_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85b524ac3b334f0ee767756396ab84bede504858a6637666a3df41703ad8a22e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85b524ac3b334f0ee767756396ab84bede504858a6637666a3df41703ad8a22e->enter($__internal_85b524ac3b334f0ee767756396ab84bede504858a6637666a3df41703ad8a22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ca76aed8ff53d06377bb9475a155b8c617c079b5333cc05582b72b95a6b8d3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca76aed8ff53d06377bb9475a155b8c617c079b5333cc05582b72b95a6b8d3db->enter($__internal_ca76aed8ff53d06377bb9475a155b8c617c079b5333cc05582b72b95a6b8d3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ca76aed8ff53d06377bb9475a155b8c617c079b5333cc05582b72b95a6b8d3db->leave($__internal_ca76aed8ff53d06377bb9475a155b8c617c079b5333cc05582b72b95a6b8d3db_prof);

        
        $__internal_85b524ac3b334f0ee767756396ab84bede504858a6637666a3df41703ad8a22e->leave($__internal_85b524ac3b334f0ee767756396ab84bede504858a6637666a3df41703ad8a22e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\cook-project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
