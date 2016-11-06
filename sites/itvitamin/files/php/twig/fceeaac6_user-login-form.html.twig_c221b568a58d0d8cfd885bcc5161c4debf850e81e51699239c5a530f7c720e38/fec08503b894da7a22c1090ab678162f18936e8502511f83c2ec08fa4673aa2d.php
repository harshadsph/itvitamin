<?php

/* sites/itvitamin.dd/themes/itvitamin/templates/user-login-form.html.twig */
class __TwigTemplate_65f3b1ab43c210c802b057b3dc75e1fee85e1fddb817f0275b87c84d4fc65f24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "
<p>";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["intro_tex"]) ? $context["intro_tex"] : null), "html", null, true));
        echo "</p>

<div class=\"fb_user-login-button-wrapper\"><a href=\"/user/simple-fb-connect\"><img src=\"/sites/itvitamin.dd/themes/itvitamin/images/facebook-sign-in.png\"/></a></div>

<div class=\"itvitamin-user-login-form-wrapper\">
  ";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["form"]) ? $context["form"] : null), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "sites/itvitamin.dd/themes/itvitamin/templates/user-login-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  46 => 2,  43 => 1,);
    }
}
/* */
/* <p>{{intro_tex}}</p>*/
/* */
/* <div class="fb_user-login-button-wrapper"><a href="/user/simple-fb-connect"><img src="/sites/itvitamin.dd/themes/itvitamin/images/facebook-sign-in.png"/></a></div>*/
/* */
/* <div class="itvitamin-user-login-form-wrapper">*/
/*   {{ form }}*/
/* </div>*/
/* */
