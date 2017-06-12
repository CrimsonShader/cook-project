<?php

/* base.html.twig */
class __TwigTemplate_3596e0743f6caebb4b1bf204a8165ae17ef42ac14157831b8276cacab8b268e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e47747cb9f4ed96eb81e698e15963f9a2886e4462025f34cc3720b689a21899c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e47747cb9f4ed96eb81e698e15963f9a2886e4462025f34cc3720b689a21899c->enter($__internal_e47747cb9f4ed96eb81e698e15963f9a2886e4462025f34cc3720b689a21899c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_84f386d1ff0f75ff1153651fbeb22187411372ab045629e923cc7e2eb1666b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f386d1ff0f75ff1153651fbeb22187411372ab045629e923cc7e2eb1666b34->enter($__internal_84f386d1ff0f75ff1153651fbeb22187411372ab045629e923cc7e2eb1666b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e47747cb9f4ed96eb81e698e15963f9a2886e4462025f34cc3720b689a21899c->leave($__internal_e47747cb9f4ed96eb81e698e15963f9a2886e4462025f34cc3720b689a21899c_prof);

        
        $__internal_84f386d1ff0f75ff1153651fbeb22187411372ab045629e923cc7e2eb1666b34->leave($__internal_84f386d1ff0f75ff1153651fbeb22187411372ab045629e923cc7e2eb1666b34_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a56fe92d968ff3799882547266b66614c8806959794cc27a8cdefa72aa006cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a56fe92d968ff3799882547266b66614c8806959794cc27a8cdefa72aa006cf->enter($__internal_0a56fe92d968ff3799882547266b66614c8806959794cc27a8cdefa72aa006cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d405a4a8f5c6509c7639b683b46a812708d3fc9484264749592638b27e2483b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d405a4a8f5c6509c7639b683b46a812708d3fc9484264749592638b27e2483b4->enter($__internal_d405a4a8f5c6509c7639b683b46a812708d3fc9484264749592638b27e2483b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d405a4a8f5c6509c7639b683b46a812708d3fc9484264749592638b27e2483b4->leave($__internal_d405a4a8f5c6509c7639b683b46a812708d3fc9484264749592638b27e2483b4_prof);

        
        $__internal_0a56fe92d968ff3799882547266b66614c8806959794cc27a8cdefa72aa006cf->leave($__internal_0a56fe92d968ff3799882547266b66614c8806959794cc27a8cdefa72aa006cf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bfbf6d4ef0ebaef0f44e82e54b061c3001fd03a5310e1ee9cd430a0fd34f2152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfbf6d4ef0ebaef0f44e82e54b061c3001fd03a5310e1ee9cd430a0fd34f2152->enter($__internal_bfbf6d4ef0ebaef0f44e82e54b061c3001fd03a5310e1ee9cd430a0fd34f2152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6087b43c2e6decac9c9fa23ed6024d522648ce0bc013aa60426d0e2ca2afc13f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6087b43c2e6decac9c9fa23ed6024d522648ce0bc013aa60426d0e2ca2afc13f->enter($__internal_6087b43c2e6decac9c9fa23ed6024d522648ce0bc013aa60426d0e2ca2afc13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6087b43c2e6decac9c9fa23ed6024d522648ce0bc013aa60426d0e2ca2afc13f->leave($__internal_6087b43c2e6decac9c9fa23ed6024d522648ce0bc013aa60426d0e2ca2afc13f_prof);

        
        $__internal_bfbf6d4ef0ebaef0f44e82e54b061c3001fd03a5310e1ee9cd430a0fd34f2152->leave($__internal_bfbf6d4ef0ebaef0f44e82e54b061c3001fd03a5310e1ee9cd430a0fd34f2152_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_642bb2dce2767fbb7aeafbea68db65117ee32adafa1804552703a9308af315a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_642bb2dce2767fbb7aeafbea68db65117ee32adafa1804552703a9308af315a0->enter($__internal_642bb2dce2767fbb7aeafbea68db65117ee32adafa1804552703a9308af315a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ce80b800f50c5778cad20cea41fe3d0d29eff9e0bc97316ea66866444fa2789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce80b800f50c5778cad20cea41fe3d0d29eff9e0bc97316ea66866444fa2789->enter($__internal_6ce80b800f50c5778cad20cea41fe3d0d29eff9e0bc97316ea66866444fa2789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6ce80b800f50c5778cad20cea41fe3d0d29eff9e0bc97316ea66866444fa2789->leave($__internal_6ce80b800f50c5778cad20cea41fe3d0d29eff9e0bc97316ea66866444fa2789_prof);

        
        $__internal_642bb2dce2767fbb7aeafbea68db65117ee32adafa1804552703a9308af315a0->leave($__internal_642bb2dce2767fbb7aeafbea68db65117ee32adafa1804552703a9308af315a0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9aa9e2ccf3ad3198f698334122321fe8ab4e0f022cf4b45a011651614c09a40c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa9e2ccf3ad3198f698334122321fe8ab4e0f022cf4b45a011651614c09a40c->enter($__internal_9aa9e2ccf3ad3198f698334122321fe8ab4e0f022cf4b45a011651614c09a40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f68e943b7a32e5a6625d31fb965d4475f08a5ae35dffdbc58ce483cf5aaa28a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68e943b7a32e5a6625d31fb965d4475f08a5ae35dffdbc58ce483cf5aaa28a1->enter($__internal_f68e943b7a32e5a6625d31fb965d4475f08a5ae35dffdbc58ce483cf5aaa28a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f68e943b7a32e5a6625d31fb965d4475f08a5ae35dffdbc58ce483cf5aaa28a1->leave($__internal_f68e943b7a32e5a6625d31fb965d4475f08a5ae35dffdbc58ce483cf5aaa28a1_prof);

        
        $__internal_9aa9e2ccf3ad3198f698334122321fe8ab4e0f022cf4b45a011651614c09a40c->leave($__internal_9aa9e2ccf3ad3198f698334122321fe8ab4e0f022cf4b45a011651614c09a40c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\cook-project\\app\\Resources\\views\\base.html.twig");
    }
}
