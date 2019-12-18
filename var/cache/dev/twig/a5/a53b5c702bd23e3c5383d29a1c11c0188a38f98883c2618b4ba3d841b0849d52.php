<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_3d8479918ae1fab213012fd5098c305491cbc9ce75d8c0c6d57f2e2f3877156f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'volet' => array($this, 'block_volet'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_volet($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "volet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "volet"));

        // line 4
        echo "    ";
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 5
            echo "        ";
            // line 6
            echo "    ";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_PART"), "method")) {
            // line 7
            echo "        ";
            $this->loadTemplate("LSIMarketBundle::layout_administre.html.twig", "FOSUserBundle::layout.html.twig", 7)->display($context);
            // line 8
            echo "    ";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_MAIRIE"), "method")) {
            // line 9
            echo "        ";
            $this->loadTemplate("LSIMarketBundle::layout_mairie.html.twig", "FOSUserBundle::layout.html.twig", 9)->display($context);
            // line 10
            echo "    ";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method")) {
            // line 11
            echo "        ";
            $this->loadTemplate("LSIMarketBundle::layout_admin.html.twig", "FOSUserBundle::layout.html.twig", 11)->display($context);
            // line 12
            echo "    ";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_SUPER_ADMIN"), "method")) {
            // line 13
            echo "        ";
            $this->loadTemplate("LSIMarketBundle::layout_superadmin.html.twig", "FOSUserBundle::layout.html.twig", 13)->display($context);
            // line 14
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
    ";
        // line 20
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 21
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 22
                echo "            <div class=\"row\">
                <div class=\"alert alert-";
                // line 23
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                    ";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "


    ";
        // line 33
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 35
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 34
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 34,  155 => 33,  144 => 35,  141 => 33,  136 => 29,  130 => 28,  120 => 24,  116 => 23,  113 => 22,  108 => 21,  103 => 20,  100 => 18,  91 => 17,  80 => 14,  77 => 13,  74 => 12,  71 => 11,  68 => 10,  65 => 9,  62 => 8,  59 => 7,  56 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layout.html.twig' %}

{% block volet %}
    {% if not app.user %}
        {#{{ render(controller(\"LSIMarketBundle:Market:index\")) }}#}
    {% elseif app.user.hasRole('ROLE_PART') %}
        {% include 'LSIMarketBundle::layout_administre.html.twig' %}
    {% elseif app.user.hasRole('ROLE_MAIRIE') %}
        {% include 'LSIMarketBundle::layout_mairie.html.twig' %}
    {% elseif app.user.hasRole('ROLE_ADMIN') %}
        {% include 'LSIMarketBundle::layout_admin.html.twig' %}
    {% elseif app.user.hasRole('ROLE_SUPER_ADMIN') %}
        {% include 'LSIMarketBundle::layout_superadmin.html.twig' %}
    {% endif %}
{% endblock volet %}

{% block body %}

    {# On affiche les messages flash que définissent les contrôleurs du bundle #}
    {% for key, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"row\">
                <div class=\"alert alert-{{ key }}\">
                    {{ message|trans({}, 'FOSUserBundle') }}
                </div>
            </div>
        {% endfor %}
    {% endfor %}



    {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}
    {% block fos_user_content %}
    {% endblock fos_user_content %}

{% endblock body %}", "FOSUserBundle::layout.html.twig", "C:\\wamp\\www\\laschekina0311\\src\\LSI\\MarketBundle/Resources/views/layout.html.twig");
    }
}
