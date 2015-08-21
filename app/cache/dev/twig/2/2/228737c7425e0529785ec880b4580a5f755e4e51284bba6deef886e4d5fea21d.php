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
        $__internal_d4d1c58a6c186ab8c8e4ceeddeea1e9c1a2c7ab7fbf852f13231deb8e2f1f95e = $this->env->getExtension("native_profiler");
        $__internal_d4d1c58a6c186ab8c8e4ceeddeea1e9c1a2c7ab7fbf852f13231deb8e2f1f95e->enter($__internal_d4d1c58a6c186ab8c8e4ceeddeea1e9c1a2c7ab7fbf852f13231deb8e2f1f95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4d1c58a6c186ab8c8e4ceeddeea1e9c1a2c7ab7fbf852f13231deb8e2f1f95e->leave($__internal_d4d1c58a6c186ab8c8e4ceeddeea1e9c1a2c7ab7fbf852f13231deb8e2f1f95e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_161d0065700b30791e7e77f993ae688c8675ea1ac30e1ca632770b6abd838d92 = $this->env->getExtension("native_profiler");
        $__internal_161d0065700b30791e7e77f993ae688c8675ea1ac30e1ca632770b6abd838d92->enter($__internal_161d0065700b30791e7e77f993ae688c8675ea1ac30e1ca632770b6abd838d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_161d0065700b30791e7e77f993ae688c8675ea1ac30e1ca632770b6abd838d92->leave($__internal_161d0065700b30791e7e77f993ae688c8675ea1ac30e1ca632770b6abd838d92_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1757cb771d3bbdce36b156fb782870b5b8879cc0d15a2731c6154bd9d03df2a6 = $this->env->getExtension("native_profiler");
        $__internal_1757cb771d3bbdce36b156fb782870b5b8879cc0d15a2731c6154bd9d03df2a6->enter($__internal_1757cb771d3bbdce36b156fb782870b5b8879cc0d15a2731c6154bd9d03df2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1757cb771d3bbdce36b156fb782870b5b8879cc0d15a2731c6154bd9d03df2a6->leave($__internal_1757cb771d3bbdce36b156fb782870b5b8879cc0d15a2731c6154bd9d03df2a6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_06a75610e6a77ce7fd077fe28433dad6893f76d6ddef5bab48bd382b52d485f3 = $this->env->getExtension("native_profiler");
        $__internal_06a75610e6a77ce7fd077fe28433dad6893f76d6ddef5bab48bd382b52d485f3->enter($__internal_06a75610e6a77ce7fd077fe28433dad6893f76d6ddef5bab48bd382b52d485f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_06a75610e6a77ce7fd077fe28433dad6893f76d6ddef5bab48bd382b52d485f3->leave($__internal_06a75610e6a77ce7fd077fe28433dad6893f76d6ddef5bab48bd382b52d485f3_prof);

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
