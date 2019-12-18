<?php

/* @FOSUser/Registration/register_user.html.twig */
class __TwigTemplate_6b63c277106ea5a6ae7617d793a1093a4766d037d955e35aa28882837c2c512e extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_user.html.twig"));

        // line 2
        echo "

";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 6
        echo "


<!-- Page layout -->
<section class=\"content-section\">
  <div class=\"container\">

    <div class=\"title-row heading\">
      <div class=\"col-md-8\">
        <section class=\"content-section\"> 
\t<div class=\"container\">
\t\t
      <div class=\"row-float contents pad-top-large\">
<div>&nbsp;
  <div class=\"comment-respond\">
   <div class=\"row\">
        <div class=\"col-lg-offset-4 col-xs-5 col-md-5 col-lg-5\">
            <div class=\"form-group\" onclick=\"usager()\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label', array("label_attr" => array("class" => "radio-inline"), "label" => "JE SUIS"));
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("label_attr" => array("class" => "radio-inline")));
        echo "
            </div>
        </div>
    </div>
    <div class=\" col-xs-6 col-md-6 col-lg-6\"> ";
        // line 31
        echo "        <div class=\"form-group\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom"));
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
        </div>
        ";
        // line 37
        echo "        ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "administre", array(), "any", true, true)) {
            // line 38
            echo "            <div class=\"form-group\" id=\"adminis\" style=\"display: none;\">
                <div class=\"form-group\">
                    ";
            // line 40
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "administre", array()), "prenom", array()), 'label', array("required" => false, "label" => "Votre prénom"));
            echo "
                    ";
            // line 41
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "administre", array()), "prenom", array()), 'widget', array("required" => false, "attr" => array("placeholder" => "Votre/vos prénom(s)")));
            echo "
                </div>
            </div>
        ";
        }
        // line 45
        echo "
        ";
        // line 47
        echo "        ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mairie", array(), "any", true, true)) {
            // line 48
            echo "            <div class=\"form-group\" id=\"mairie\" style=\"display: none;\">
                <div class=\"form-group\">
                    ";
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mairie", array()), "description", array()), 'label', array("required" => false, "label" => "Description de la mairie"));
            echo "
                    ";
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mairie", array()), "description", array()), 'widget', array("required" => false, "attr" => array("placeholder" => "La description de votre mairie")));
            echo "
                </div>
                <div class=\"form-group\">
                    ";
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mairie", array()), "service", array()), 'label', array("required" => false, "label" => "Service de la mairie"));
            echo "
                    ";
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mairie", array()), "service", array()), 'widget', array("required" => false, "attr" => array("placeholder" => "Les services proposés par votre mairie")));
            echo "
                </div>
            </div>
        ";
        }
        // line 59
        echo "
        <div class=\"form-group\">
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label" => "Nom d'utilisateur"));
        echo "
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("placeholder" => "Entrez votre nom d'utilisateur")));
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Adresse email"));
        echo "
            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => "Entrez votre adresse e-mail")));
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label" => "Mot de passe"));
        echo "
            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("placeholder" => "Entrez votre mot de passe")));
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label" => "Confirmer le mot de passe"));
        echo "
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("placeholder" => "Rétapez le mot de passe")));
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'label');
        echo "
            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "
            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("placeholder" => "Votre numéro de téléphone")));
        echo "
        </div>
    </div>

    <div class=\"col-xs-6 col-md-6 col-lg-6\">
        <div class=\"form-group\">
            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), "pays", array()), 'label');
        echo "
            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), "pays", array()), 'errors');
        echo "
            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), "pays", array()), 'widget', array("attr" => array("placeholder" => "Votre adresse")));
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), "ville", array()), 'label');
        echo "
            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), "ville", array()), 'errors');
        echo "
            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), "ville", array()), 'widget', array("attr" => array("placeholder" => "Votre ville")));
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), "rue", array()), 'label', array("label" => "Numéro de rue"));
        echo "
            ";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), "rue", array()), 'errors');
        echo "
            ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), "rue", array()), 'widget', array("attr" => array("placeholder" => "Numéro de rue")));
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 107
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), "codePostal", array()), 'label', array("label" => "Code postal"));
        echo "
            ";
        // line 108
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), "codePostal", array()), 'errors');
        echo "
            ";
        // line 109
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), "codePostal", array()), 'widget', array("attr" => array("placeholder" => "Code postal", "onchange" => "monepci(this.value)")));
        echo "
        </div>

        ";
        // line 112
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mairie", array(), "any", true, true)) {
            // line 113
            echo "            <div class=\"form-group\" id=\"maire\" style=\"display: none;\">
                ";
            // line 114
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mairie", array()), "epci", array()), 'label', array("label" => "EPCI"));
            echo "
                ";
            // line 115
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mairie", array()), "epci", array()), 'errors');
            echo "
                ";
            // line 116
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mairie", array()), "epci", array()), 'widget', array("attr" => array("placeholder" => "Votre EPCI")));
            echo "
            </div>
        ";
        }
        // line 119
        echo "
        <div class=\"form-group\">
            ";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "indicatif", array()), 'label', array("label" => "Indicatif de votre pays"));
        echo "
            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "indicatif", array()), 'errors');
        echo "
            ";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "indicatif", array()), 'widget', array("attr" => array("placeholder" => "L'indicatif de votre pays")));
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 126
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "langue", array()), 'label', array("label" => "Votre Langue (parlée)"));
        echo "
            ";
        // line 127
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "langue", array()), 'errors');
        echo "
            ";
        // line 128
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "langue", array()), 'widget', array("attr" => array("placeholder" => "Votre langue")));
        echo "
        </div>
        ";
        // line 130
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "administre", array(), "any", true, true)) {
            // line 131
            echo "                <div class=\"form-group\" id=\"administ\" style=\"display: none;\">
                    <div class=\"form-group\">
                        ";
            // line 133
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "administre", array()), "langueMat", array()), 'label', array("required" => false, "label" => "Votre langue maternelle"));
            echo "
                        ";
            // line 134
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "administre", array()), "langueMat", array()), 'widget', array("required" => false, "attr" => array("placeholder" => "Votre langue maternelle")));
            echo "
                    </div>
                </div>
        ";
        }
        // line 138
        echo "    </div>

    <div class=\"row \">

        <div class=\"col-lg-offset-5 col-xs-5 col-md-5 col-lg-5\">
            <div class=\"form-group\">
                <label>
                    <input type=\"checkbox\" class=\"input-checked\" required />
                    \"En créant ce compte, je reconnais avoir pris connaissance des
                <a href=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lsi_market_homepage");
        echo "\">conditions d'utilisations</a>, de la politique de confidentialité et la charte sur les cookies et je les accepte.\"
                </label>

                ";
        // line 155
        echo "
                ";
        // line 158
        echo "            </div>
            <input type=\"submit\" value=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\"/>
        </div>
   
</div>


</div></div>
    </div>
\t</div>
  </section>      
      </div>
    </div>
    <div class=\"row-float contents pad-top-large\">
      
    </div>
  </div>
</section>
<!-- Page layout // -->

";
        // line 178
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 178,  356 => 159,  353 => 158,  350 => 155,  344 => 147,  333 => 138,  326 => 134,  322 => 133,  318 => 131,  316 => 130,  311 => 128,  307 => 127,  303 => 126,  297 => 123,  293 => 122,  289 => 121,  285 => 119,  279 => 116,  275 => 115,  271 => 114,  268 => 113,  266 => 112,  260 => 109,  256 => 108,  252 => 107,  245 => 103,  241 => 102,  237 => 101,  230 => 97,  226 => 96,  222 => 95,  215 => 91,  211 => 90,  207 => 89,  198 => 83,  194 => 82,  190 => 81,  184 => 78,  180 => 77,  176 => 76,  170 => 73,  166 => 72,  162 => 71,  156 => 68,  152 => 67,  148 => 66,  142 => 63,  138 => 62,  134 => 61,  130 => 59,  123 => 55,  119 => 54,  113 => 51,  109 => 50,  105 => 48,  102 => 47,  99 => 45,  92 => 41,  88 => 40,  84 => 38,  81 => 37,  76 => 34,  72 => 33,  68 => 32,  65 => 31,  58 => 26,  54 => 25,  50 => 24,  30 => 6,  26 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}


{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {#{{ form_widget(form) }}#}



<!-- Page layout -->
<section class=\"content-section\">
  <div class=\"container\">

    <div class=\"title-row heading\">
      <div class=\"col-md-8\">
        <section class=\"content-section\"> 
\t<div class=\"container\">
\t\t
      <div class=\"row-float contents pad-top-large\">
<div>&nbsp;
  <div class=\"comment-respond\">
   <div class=\"row\">
        <div class=\"col-lg-offset-4 col-xs-5 col-md-5 col-lg-5\">
            <div class=\"form-group\" onclick=\"usager()\">
                {{ form_label(form.type, 'JE SUIS' , {'label_attr' : {'class' : 'radio-inline'}}) }}
                {{ form_errors(form.type) }}
                {{ form_widget(form.type, {'label_attr' : {'class' : 'radio-inline'}}) }}
            </div>
        </div>
    </div>
    <div class=\" col-xs-6 col-md-6 col-lg-6\"> {#Block de gauche#}
        <div class=\"form-group\">
            {{ form_label(form.nom, 'Nom') }}
            {{ form_errors(form.nom) }}
            {{ form_widget(form.nom) }}
        </div>
        {# Affiche l'input prénom pour l'inscription d'un administré #}
        {% if form.administre is defined %}
            <div class=\"form-group\" id=\"adminis\" style=\"display: none;\">
                <div class=\"form-group\">
                    {{ form_label(form.administre.prenom, 'Votre prénom', {'required': false}) }}
                    {{ form_widget(form.administre.prenom, {'required': false, 'attr' : {'placeholder' : 'Votre/vos prénom(s)'}}) }}
                </div>
            </div>
        {% endif %}

        {# Affiche les inputs description et service pour l'inscription d'une mairie #}
        {% if form.mairie is defined %}
            <div class=\"form-group\" id=\"mairie\" style=\"display: none;\">
                <div class=\"form-group\">
                    {{ form_label(form.mairie.description, 'Description de la mairie', {'required': false}) }}
                    {{ form_widget(form.mairie.description, {'required': false, 'attr' : {'placeholder' : 'La description de votre mairie'}}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.mairie.service, 'Service de la mairie', {'required': false}) }}
                    {{ form_widget(form.mairie.service, {'required': false, 'attr' : {'placeholder' : 'Les services proposés par votre mairie'}}) }}
                </div>
            </div>
        {% endif %}

        <div class=\"form-group\">
            {{ form_label(form.username, 'Nom d\\'utilisateur') }}
            {{ form_errors(form.username) }}
            {{ form_widget(form.username, {'attr' : {'placeholder' : 'Entrez votre nom d\\'utilisateur'}}) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.email, 'Adresse email') }}
            {{ form_errors(form.email) }}
            {{ form_widget(form.email, {'attr' : {'placeholder' : 'Entrez votre adresse e-mail'}}) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.plainPassword.first, 'Mot de passe') }}
            {{ form_errors(form.plainPassword.first) }}
            {{ form_widget(form.plainPassword.first, {'attr' : {'placeholder' : 'Entrez votre mot de passe'}}) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.plainPassword.second, 'Confirmer le mot de passe') }}
            {{ form_errors(form.plainPassword.second) }}
            {{ form_widget(form.plainPassword.second, {'attr' : {'placeholder' : 'Rétapez le mot de passe'}}) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.telephone) }}
            {{ form_errors(form.telephone) }}
            {{ form_widget(form.telephone, {'attr' : {'placeholder' : 'Votre numéro de téléphone'}}) }}
        </div>
    </div>

    <div class=\"col-xs-6 col-md-6 col-lg-6\">
        <div class=\"form-group\">
            {{ form_label(form.adresse.pays) }}
            {{ form_errors(form.adresse.pays) }}
            {{ form_widget(form.adresse.pays, {'attr' : {'placeholder' : 'Votre adresse'}}) }}
        </div>

        <div class=\"form-group\">
            {{ form_label(form.adresse.ville) }}
            {{ form_errors(form.adresse.ville) }}
            {{ form_widget(form.adresse.ville, {'attr' : {'placeholder' : 'Votre ville'}}) }}
        </div>

        <div class=\"form-group\">
            {{ form_label(form.adresse.rue, 'Numéro de rue') }}
            {{ form_errors(form.adresse.rue) }}
            {{ form_widget(form.adresse.rue, {'attr' : {'placeholder' : 'Numéro de rue'}}) }}
        </div>

        <div class=\"form-group\">
            {{ form_label(form.adresse.codePostal, 'Code postal') }}
            {{ form_errors(form.adresse.codePostal) }}
            {{ form_widget(form.adresse.codePostal, {'attr' : {'placeholder' : 'Code postal', 'onchange': 'monepci(this.value)'}}) }}
        </div>

        {% if form.mairie is defined %}
            <div class=\"form-group\" id=\"maire\" style=\"display: none;\">
                {{ form_label(form.mairie.epci, 'EPCI') }}
                {{ form_errors(form.mairie.epci) }}
                {{ form_widget(form.mairie.epci, {'attr':{'placeholder':'Votre EPCI'}}) }}
            </div>
        {% endif %}

        <div class=\"form-group\">
            {{ form_label(form.indicatif, 'Indicatif de votre pays') }}
            {{ form_errors(form.indicatif) }}
            {{ form_widget(form.indicatif, {'attr' : {'placeholder' : 'L\\'indicatif de votre pays'}}) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.langue, 'Votre Langue (parlée)') }}
            {{ form_errors(form.langue) }}
            {{ form_widget(form.langue, {'attr' : {'placeholder' : 'Votre langue'}}) }}
        </div>
        {% if form.administre is defined %}
                <div class=\"form-group\" id=\"administ\" style=\"display: none;\">
                    <div class=\"form-group\">
                        {{ form_label(form.administre.langueMat, 'Votre langue maternelle', {'required': false}) }}
                        {{ form_widget(form.administre.langueMat, {'required': false, 'attr' : {'placeholder' : 'Votre langue maternelle'}}) }}
                    </div>
                </div>
        {% endif %}
    </div>

    <div class=\"row \">

        <div class=\"col-lg-offset-5 col-xs-5 col-md-5 col-lg-5\">
            <div class=\"form-group\">
                <label>
                    <input type=\"checkbox\" class=\"input-checked\" required />
                    \"En créant ce compte, je reconnais avoir pris connaissance des
                <a href=\"{{ path('lsi_market_homepage') }}\">conditions d'utilisations</a>, de la politique de confidentialité et la charte sur les cookies et je les accepte.\"
                </label>

                {#{{ form_label(form.cgu, '\"En créant ce compte, je reconnais avoir pris connaissance des ')  }}
                <a href=\"{{ path('lsi_market_homepage') }}\">conditions d'utilisations</a>, de la politique de confidentialité et la charte sur les cookies et je les accepte\"
                #}{#{{ form_errors(form.cgu) }}
                <div class=\"col-sm-10\">#}{#
                {{ form_widget(form.cgu) }}#}

                {#, {'attr': {'class': 'form-control'}}
            </div>#}
            </div>
            <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" class=\"btn btn-primary\"/>
        </div>
   
</div>


</div></div>
    </div>
\t</div>
  </section>      
      </div>
    </div>
    <div class=\"row-float contents pad-top-large\">
      
    </div>
  </div>
</section>
<!-- Page layout // -->

{{ form_end(form) }}

", "@FOSUser/Registration/register_user.html.twig", "C:\\wamp\\www\\marketplace\\src\\LSI\\MarketBundle\\Resources\\views\\Registration\\register_user.html.twig");
    }
}
