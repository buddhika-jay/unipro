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
        $__internal_d1268423219e41794e846b09379e3cba7a40a91c572ddc59102b64f935c8e59e = $this->env->getExtension("native_profiler");
        $__internal_d1268423219e41794e846b09379e3cba7a40a91c572ddc59102b64f935c8e59e->enter($__internal_d1268423219e41794e846b09379e3cba7a40a91c572ddc59102b64f935c8e59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d1268423219e41794e846b09379e3cba7a40a91c572ddc59102b64f935c8e59e->leave($__internal_d1268423219e41794e846b09379e3cba7a40a91c572ddc59102b64f935c8e59e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_79125fdc302191c5493a47ff71b0858cd7173de9526a4e207c8369db99a75b7f = $this->env->getExtension("native_profiler");
        $__internal_79125fdc302191c5493a47ff71b0858cd7173de9526a4e207c8369db99a75b7f->enter($__internal_79125fdc302191c5493a47ff71b0858cd7173de9526a4e207c8369db99a75b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_79125fdc302191c5493a47ff71b0858cd7173de9526a4e207c8369db99a75b7f->leave($__internal_79125fdc302191c5493a47ff71b0858cd7173de9526a4e207c8369db99a75b7f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7c6c5f2c74b50e77ce0386eb89ddfa1c4bb1f2a56fb9ff1f64d2e769a7f47345 = $this->env->getExtension("native_profiler");
        $__internal_7c6c5f2c74b50e77ce0386eb89ddfa1c4bb1f2a56fb9ff1f64d2e769a7f47345->enter($__internal_7c6c5f2c74b50e77ce0386eb89ddfa1c4bb1f2a56fb9ff1f64d2e769a7f47345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7c6c5f2c74b50e77ce0386eb89ddfa1c4bb1f2a56fb9ff1f64d2e769a7f47345->leave($__internal_7c6c5f2c74b50e77ce0386eb89ddfa1c4bb1f2a56fb9ff1f64d2e769a7f47345_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9a46920691e1b9efa677923514d4ade9c038a79e9131928ef009e9b1580f476 = $this->env->getExtension("native_profiler");
        $__internal_a9a46920691e1b9efa677923514d4ade9c038a79e9131928ef009e9b1580f476->enter($__internal_a9a46920691e1b9efa677923514d4ade9c038a79e9131928ef009e9b1580f476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a9a46920691e1b9efa677923514d4ade9c038a79e9131928ef009e9b1580f476->leave($__internal_a9a46920691e1b9efa677923514d4ade9c038a79e9131928ef009e9b1580f476_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b065f32282c85af0b27cedf37df45c31efdbb34c6f194c97d2bf629b9050e77d = $this->env->getExtension("native_profiler");
        $__internal_b065f32282c85af0b27cedf37df45c31efdbb34c6f194c97d2bf629b9050e77d->enter($__internal_b065f32282c85af0b27cedf37df45c31efdbb34c6f194c97d2bf629b9050e77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b065f32282c85af0b27cedf37df45c31efdbb34c6f194c97d2bf629b9050e77d->leave($__internal_b065f32282c85af0b27cedf37df45c31efdbb34c6f194c97d2bf629b9050e77d_prof);

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
