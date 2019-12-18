<?php

/* LSIMarketBundle:market:demarche.html.twig */
class __TwigTemplate_6bb8573b83e592e93f0f8703f6e4a9a76fdb0879d80e25ea3c002b62be9f68d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LSIMarketBundle:market:demarche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LSIMarketBundle:market:demarche.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        echo "
<table class=\"table table-condensed\">
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formdemarche"]) ? $context["formdemarche"] : $this->getContext($context, "formdemarche")), 'form_start');
        echo "
    <tr>
        <td>
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formdemarche"]) ? $context["formdemarche"] : $this->getContext($context, "formdemarche")), "docbien", array()), 'label');
        echo "
        </td>
        <td>
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formdemarche"]) ? $context["formdemarche"] : $this->getContext($context, "formdemarche")), "docbien", array()), 'widget');
        echo "
        </td>
        <td style=\"width:5%\"> <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/ko.png"), "html", null, true);
        echo "\" height=\"20\" width=\"20\" style=\"margin-left:10px\"> </td>
    </tr>
    <tr>
        <td>
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formdemarche"]) ? $context["formdemarche"] : $this->getContext($context, "formdemarche")), "docbudget", array()), 'label');
        echo "
        </td>
        <td>
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formdemarche"]) ? $context["formdemarche"] : $this->getContext($context, "formdemarche")), "docbudget", array()), 'widget');
        echo "
        </td>
        <td style=\"width:5%\"> <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/ko.png"), "html", null, true);
        echo "\" height=\"20\" width=\"20\" style=\"margin-left:10px\"> </td>
    </tr>
    <tr>
        <td>
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formdemarche"]) ? $context["formdemarche"] : $this->getContext($context, "formdemarche")), "docdecision", array()), 'label');
        echo "
        </td>
        <td>
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formdemarche"]) ? $context["formdemarche"] : $this->getContext($context, "formdemarche")), "docdecision", array()), 'widget');
        echo "
        </td>
        <td style=\"width:5%\"> <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/ko.png"), "html", null, true);
        echo "\" height=\"20\" width=\"20\" style=\"margin-left:10px\"> </td>
    </tr>
    <tr>
        <td>
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formdemarche"]) ? $context["formdemarche"] : $this->getContext($context, "formdemarche")), "docdecisionbudget", array()), 'label');
        echo "
        </td>
        <td>
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formdemarche"]) ? $context["formdemarche"] : $this->getContext($context, "formdemarche")), "docdecisionbudget", array()), 'widget');
        echo "
        </td>
        <td style=\"width:5%\"> <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/ko.png"), "html", null, true);
        echo "\" height=\"20\" width=\"20\" style=\"margin-left:10px\"> </td>
    </tr>
    <tr>
        <td>
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formdemarche"]) ? $context["formdemarche"] : $this->getContext($context, "formdemarche")), "conditionlocation", array()), 'label');
        echo "
        </td>
        <td>
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formdemarche"]) ? $context["formdemarche"] : $this->getContext($context, "formdemarche")), "conditionlocation", array()), 'widget');
        echo "
        </td>
        <td style=\"width:5%\"> <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/ko.png"), "html", null, true);
        echo "\" height=\"20\" width=\"20\" style=\"margin-left:10px\"> </td>
    </tr>
    <tr>
        <td>
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formdemarche"]) ? $context["formdemarche"] : $this->getContext($context, "formdemarche")), "contratassurance", array()), 'label');
        echo "
        </td>
        <td>
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formdemarche"]) ? $context["formdemarche"] : $this->getContext($context, "formdemarche")), "contratassurance", array()), 'widget');
        echo "
        </td>
        <td style=\"width:5%\"> <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/ko.png"), "html", null, true);
        echo "\" height=\"20\" width=\"20\" style=\"margin-left:10px\"> </td>
    </tr>
    <button type=\"submit\" class=\"pull-right btn btn-success\" style=\"position: relative; top: 295px\" value=\"demarche\" name=\"btn-demarche\" id=\"demarche\">Envoyer</button>

    ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formdemarche"]) ? $context["formdemarche"] : $this->getContext($context, "formdemarche")), 'form_end');
        echo "
</table>



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "LSIMarketBundle:market:demarche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 2,  162 => 1,  146 => 63,  139 => 59,  134 => 57,  128 => 54,  121 => 50,  116 => 48,  110 => 45,  103 => 41,  98 => 39,  92 => 36,  85 => 32,  80 => 30,  74 => 27,  67 => 23,  62 => 21,  56 => 18,  49 => 14,  44 => 12,  38 => 9,  32 => 6,  28 => 4,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block stylesheets %}
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
{% endblock %}

<table class=\"table table-condensed\">
    {{ form_start(formdemarche) }}
    <tr>
        <td>
            {{ form_label(formdemarche.docbien) }}
        </td>
        <td>
            {{ form_widget(formdemarche.docbien) }}
        </td>
        <td style=\"width:5%\"> <img src=\"{{ asset('bundles/lsimarket/images/ko.png') }}\" height=\"20\" width=\"20\" style=\"margin-left:10px\"> </td>
    </tr>
    <tr>
        <td>
            {{ form_label(formdemarche.docbudget) }}
        </td>
        <td>
            {{ form_widget(formdemarche.docbudget) }}
        </td>
        <td style=\"width:5%\"> <img src=\"{{ asset('bundles/lsimarket/images/ko.png') }}\" height=\"20\" width=\"20\" style=\"margin-left:10px\"> </td>
    </tr>
    <tr>
        <td>
            {{ form_label(formdemarche.docdecision) }}
        </td>
        <td>
            {{ form_widget(formdemarche.docdecision) }}
        </td>
        <td style=\"width:5%\"> <img src=\"{{ asset('bundles/lsimarket/images/ko.png') }}\" height=\"20\" width=\"20\" style=\"margin-left:10px\"> </td>
    </tr>
    <tr>
        <td>
            {{ form_label(formdemarche.docdecisionbudget) }}
        </td>
        <td>
            {{ form_widget(formdemarche.docdecisionbudget) }}
        </td>
        <td style=\"width:5%\"> <img src=\"{{ asset('bundles/lsimarket/images/ko.png') }}\" height=\"20\" width=\"20\" style=\"margin-left:10px\"> </td>
    </tr>
    <tr>
        <td>
            {{ form_label(formdemarche.conditionlocation) }}
        </td>
        <td>
            {{ form_widget(formdemarche.conditionlocation) }}
        </td>
        <td style=\"width:5%\"> <img src=\"{{ asset('bundles/lsimarket/images/ko.png') }}\" height=\"20\" width=\"20\" style=\"margin-left:10px\"> </td>
    </tr>
    <tr>
        <td>
            {{ form_label(formdemarche.contratassurance) }}
        </td>
        <td>
            {{ form_widget(formdemarche.contratassurance) }}
        </td>
        <td style=\"width:5%\"> <img src=\"{{ asset('bundles/lsimarket/images/ko.png') }}\" height=\"20\" width=\"20\" style=\"margin-left:10px\"> </td>
    </tr>
    <button type=\"submit\" class=\"pull-right btn btn-success\" style=\"position: relative; top: 295px\" value=\"demarche\" name=\"btn-demarche\" id=\"demarche\">Envoyer</button>

    {{ form_end(formdemarche) }}
</table>



", "LSIMarketBundle:market:demarche.html.twig", "C:\\wamp\\www\\laschekina0311\\laschekina0311\\src\\LSI\\MarketBundle/Resources/views/market/demarche.html.twig");
    }
}
