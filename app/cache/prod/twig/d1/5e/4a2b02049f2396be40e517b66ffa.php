<?php

/* JobeetBundle:Default:index.html.twig */
class __TwigTemplate_d15e4a2b02049f2396be40e517b66ffa extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        echo twig_escape_filter($this->env, $_name_, "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "JobeetBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
