<?php

/* base.html.twig */
class __TwigTemplate_2e4630c6b4727dd5dff102df02435838d41376b243c5130a4d2d760f14178809 extends Twig_Template
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
        $__internal_1a2c8b45fb4ba0228a4b56b26bf1e72c5745f9a8b42fac0cbe27e9785bd16045 = $this->env->getExtension("native_profiler");
        $__internal_1a2c8b45fb4ba0228a4b56b26bf1e72c5745f9a8b42fac0cbe27e9785bd16045->enter($__internal_1a2c8b45fb4ba0228a4b56b26bf1e72c5745f9a8b42fac0cbe27e9785bd16045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_1a2c8b45fb4ba0228a4b56b26bf1e72c5745f9a8b42fac0cbe27e9785bd16045->leave($__internal_1a2c8b45fb4ba0228a4b56b26bf1e72c5745f9a8b42fac0cbe27e9785bd16045_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_55d23e1d818ca44d47434257cd592b268acce0db30d859754970e0e9ea352563 = $this->env->getExtension("native_profiler");
        $__internal_55d23e1d818ca44d47434257cd592b268acce0db30d859754970e0e9ea352563->enter($__internal_55d23e1d818ca44d47434257cd592b268acce0db30d859754970e0e9ea352563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_55d23e1d818ca44d47434257cd592b268acce0db30d859754970e0e9ea352563->leave($__internal_55d23e1d818ca44d47434257cd592b268acce0db30d859754970e0e9ea352563_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b64362fb8f320daa69bfdcad2eccad08dcdaccfaeb6bcb8165f3b66a71eaa7ad = $this->env->getExtension("native_profiler");
        $__internal_b64362fb8f320daa69bfdcad2eccad08dcdaccfaeb6bcb8165f3b66a71eaa7ad->enter($__internal_b64362fb8f320daa69bfdcad2eccad08dcdaccfaeb6bcb8165f3b66a71eaa7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b64362fb8f320daa69bfdcad2eccad08dcdaccfaeb6bcb8165f3b66a71eaa7ad->leave($__internal_b64362fb8f320daa69bfdcad2eccad08dcdaccfaeb6bcb8165f3b66a71eaa7ad_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5073bedac4e243b60648a55bac6ff201c3a7e507d1186872ac8ccf0d03ab2944 = $this->env->getExtension("native_profiler");
        $__internal_5073bedac4e243b60648a55bac6ff201c3a7e507d1186872ac8ccf0d03ab2944->enter($__internal_5073bedac4e243b60648a55bac6ff201c3a7e507d1186872ac8ccf0d03ab2944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5073bedac4e243b60648a55bac6ff201c3a7e507d1186872ac8ccf0d03ab2944->leave($__internal_5073bedac4e243b60648a55bac6ff201c3a7e507d1186872ac8ccf0d03ab2944_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e1cac85c4c3512e433385f660962d8542c4d70bb1c013d6fe1079602321c1a3 = $this->env->getExtension("native_profiler");
        $__internal_2e1cac85c4c3512e433385f660962d8542c4d70bb1c013d6fe1079602321c1a3->enter($__internal_2e1cac85c4c3512e433385f660962d8542c4d70bb1c013d6fe1079602321c1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2e1cac85c4c3512e433385f660962d8542c4d70bb1c013d6fe1079602321c1a3->leave($__internal_2e1cac85c4c3512e433385f660962d8542c4d70bb1c013d6fe1079602321c1a3_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
