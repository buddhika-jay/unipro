<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_228737c7425e0529785ec880b4580a5f755e4e51284bba6deef886e4d5fea21d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e75c6735d874fbca0d072c6999f13fabf95c2346361c9ab3862b670881649c9 = $this->env->getExtension("native_profiler");
        $__internal_7e75c6735d874fbca0d072c6999f13fabf95c2346361c9ab3862b670881649c9->enter($__internal_7e75c6735d874fbca0d072c6999f13fabf95c2346361c9ab3862b670881649c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e75c6735d874fbca0d072c6999f13fabf95c2346361c9ab3862b670881649c9->leave($__internal_7e75c6735d874fbca0d072c6999f13fabf95c2346361c9ab3862b670881649c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_83f57a79786e0794a29469aa7f1aa77c7afcae76731d91b2db8749af8b4755e9 = $this->env->getExtension("native_profiler");
        $__internal_83f57a79786e0794a29469aa7f1aa77c7afcae76731d91b2db8749af8b4755e9->enter($__internal_83f57a79786e0794a29469aa7f1aa77c7afcae76731d91b2db8749af8b4755e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_83f57a79786e0794a29469aa7f1aa77c7afcae76731d91b2db8749af8b4755e9->leave($__internal_83f57a79786e0794a29469aa7f1aa77c7afcae76731d91b2db8749af8b4755e9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5495e902af294211fc05d8966a08054793620824e63c098f1ce0c5d5208157e8 = $this->env->getExtension("native_profiler");
        $__internal_5495e902af294211fc05d8966a08054793620824e63c098f1ce0c5d5208157e8->enter($__internal_5495e902af294211fc05d8966a08054793620824e63c098f1ce0c5d5208157e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5495e902af294211fc05d8966a08054793620824e63c098f1ce0c5d5208157e8->leave($__internal_5495e902af294211fc05d8966a08054793620824e63c098f1ce0c5d5208157e8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef3ec1369b077d4f60f429ace6940b7be6e4b7c75d7496666c5a9f46a0aa32ac = $this->env->getExtension("native_profiler");
        $__internal_ef3ec1369b077d4f60f429ace6940b7be6e4b7c75d7496666c5a9f46a0aa32ac->enter($__internal_ef3ec1369b077d4f60f429ace6940b7be6e4b7c75d7496666c5a9f46a0aa32ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ef3ec1369b077d4f60f429ace6940b7be6e4b7c75d7496666c5a9f46a0aa32ac->leave($__internal_ef3ec1369b077d4f60f429ace6940b7be6e4b7c75d7496666c5a9f46a0aa32ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
