<?php

/* LSIMarketBundle:market:modifier.html.twig */
class __TwigTemplate_b5a583130e2b2c748c5092706269fa9aa660304814b20497c3ebcb0858f89bcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LSIMarketBundle:market:modifier.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LSIMarketBundle:market:modifier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LSIMarketBundle:market:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- Page layout -->
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
            <h2>Modifier l'annonce</h2>
            <h3>Informations Générales </h3>
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("claas" => "form-control", "novalidate" => "novalidate")));
        echo "
            <div class=\"col-xs-6 col-md-6 col-lg-6\">
                <div class=\"form-group\">
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'row');
        echo "
                </div>
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
                <div class=\"form-group\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nature", array()), 'row', array("attr" => array("placeholder" => "nature de l'annonce")));
        echo "
                </div>
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nature", array()), 'errors');
        echo "
                <div class=\"form-group\">
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonction", array()), 'row', array("attr" => array("placeholder" => "fonction de l'annonce")));
        echo "
                </div>
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonction", array()), 'errors');
        echo "
                <div class=\"form-group\">
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "
                </div>
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
                <div class=\"form-group\">
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeforfait", array()), 'row');
        echo "
                </div>
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeforfait", array()), 'errors');
        echo "
                <div class=\"form-group\">
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixDefaut", array()), 'row');
        echo "
                </div>
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixDefaut", array()), 'errors');
        echo "
                <div class=\"form-group\">
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regleCond", array()), 'row');
        echo "
                </div>
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regleCond", array()), 'errors');
        echo "
                <div class=\"form-group\">
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'row');
        echo "
                </div>
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'errors');
        echo "
            </div>
            <div class=\"col-xs-6 col-md-6 col-lg-6\">
                <div class=\"form-group\">
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeAnnul", array()), 'row');
        echo "
                </div>
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeAnnul", array()), 'errors');
        echo "
                <div class=\"form-group\">
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), "pays", array()), 'row', array("attr" => array("placeholder" => "Donner le pays")));
        echo "
                </div>
                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), "pays", array()), 'errors');
        echo "
                <div class=\"form-group\">
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), "ville", array()), 'row', array("attr" => array("placeholder" => "Donner la ville")));
        echo "
                </div>
                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), "ville", array()), 'errors');
        echo "
                <div class=\"form-group\">
                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), "rue", array()), 'row', array("attr" => array("placeholder" => "Donner la rue")));
        echo "
                </div>
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), "rue", array()), 'errors');
        echo "
                <div class=\"form-group\">
                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), "codePostal", array()), 'row', array("attr" => array("placeholder" => "Donner le Code postal")));
        echo "
                </div>
                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), "codePostal", array()), 'errors');
        echo "
                <div class=\"form-group\">
                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "assurances", array()), 'row', array("attr" => array("placeholder" => "Assurance")));
        echo "
                </div>
                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "assurances", array()), 'errors');
        echo "
                ";
        // line 86
        echo "                <div class=\"form-group\" id=\"\" data-prototype=\"\">
                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "images", array()), 'widget');
        echo "
                        <h6 style=\"font-weight: bold; font-family: Arial, Helvetica, sans-serif\">Liste des images de l'annonce</h6>
                            ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["listimg"]);
        foreach ($context['_seq'] as $context["_key"] => $context["listimg"]) {
            // line 90
            echo "                               ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["listimg"], "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
                // line 91
                echo "                                    ";
                // line 93
                echo "                                            <img
                                                src=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["list"], "webPath", array())), "html", null, true);
                echo "\"
                                                alt=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "alt", array()), "html", null, true);
                echo "\"
                                                style=\"width: 80px;\"
                                            />
                                       ";
                // line 100
                echo "                               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listimg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                    <input type=\"button\" id=\"add_code\" value=\"autres images\" class=\"btn btn-warning pull-right\"/>
                </div>
                ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "images", array()), 'errors');
        echo "

                <br/> <br/>
            ";
        // line 107
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Modifier l'annonce", "attr" => array("class" => "btn btn-warning", "id" => "btn-save")));
        echo "
            ";
        // line 108
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        </div>
    </div>
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 127
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
   ";
        // line 134
        echo "    <script>
        \$(document).ready(function () {
            // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
            var \$container = \$('div#lsi_marketbundle_annonce_images');

            // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
            var index = \$container.find(':input').length;

            // On ajoute un nouveau champ à chaque click sur le bouton
            \$('#add_code').click(function (e) {
                addImage(\$container);
                e.preventDefault(); // Pour éviter qu'un # apparaissent dans l'URL
                return false;
            });

            // On ajoute automatiquement le 1er champ sans le bouton de suppression
            if ( index == 0 ){
                addImage(\$container);
            }else{
                // S'il existe déjà des champs de codes
                \$container.children('div').each(function () {
                    addDeleteLink(\$(this));
                });
            }

            // Fonction pour ajouter un formulaire de code postal
            function addImage(\$container) {
                var template;

                if (index == 0){
                    template = \$container.attr('data-prototype')
                        .replace(/__name__label__/g, 'Image 1')
                        .replace(/__name__/g, index)
                    ;
                }else{
                    template = \$container.attr('data-prototype')
                        .replace(/__name__label__/g, 'Image '+ (index +1))
                        .replace(/__name__/g, index)
                    ;
                }

                // On crée un objet jquery qui contiendra le template
                var \$prototype = \$(template);

                // On ajoute au prototype un lien pour pouvoir supprimer le code postal
                if(index == 0){

                }else{
                    addDeleteLink(\$prototype);
                    if (index > 0){
                        index --;}
                }

                // On ajoute le prototype modifié à la fin de la balise <div>
                \$container.append(\$prototype);

                // On incrémente l'index
                index++;
            }

            // La fonction pour supprimer un code postal
            function addDeleteLink(\$prototype) {
                // Création du bouton
                var \$deleteButton = \$('<input type=\"button\" value=\"Supprimer\" class=\"btn btn-danger\"/>');

                // Ajout du bouton
                \$prototype.append(\$deleteButton);

                // Ajout d'un listener sur le clic du lien pour supprimer la catégorie
                \$deleteButton.click(function(e) {
                    \$prototype.remove();
                    if (index > 0){
                        index --;}
                    e.preventDefault(); // évite qu'un # apparaisse dans l'URL

                    return false;

                });
            }
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "LSIMarketBundle:market:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 134,  306 => 127,  297 => 126,  271 => 108,  267 => 107,  261 => 104,  257 => 102,  251 => 101,  245 => 100,  239 => 95,  235 => 94,  232 => 93,  230 => 91,  225 => 90,  221 => 89,  216 => 87,  213 => 86,  209 => 77,  204 => 75,  199 => 73,  194 => 71,  189 => 69,  184 => 67,  179 => 65,  174 => 63,  169 => 61,  164 => 59,  159 => 57,  154 => 55,  147 => 51,  142 => 49,  137 => 47,  132 => 45,  127 => 43,  122 => 41,  117 => 39,  112 => 37,  107 => 35,  102 => 33,  97 => 31,  92 => 29,  87 => 27,  82 => 25,  77 => 23,  72 => 21,  66 => 18,  50 => 4,  41 => 3,  11 => 1,);
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

{% block body %}
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
            <h2>Modifier l'annonce</h2>
            <h3>Informations Générales </h3>
            {{ form_start(form, {'attr' : {'claas' : 'form-control', 'novalidate':'novalidate'}}) }}
            <div class=\"col-xs-6 col-md-6 col-lg-6\">
                <div class=\"form-group\">
                    {{ form_row(form.titre) }}
                </div>
                {{ form_errors(form.titre) }}
                <div class=\"form-group\">
                    {{ form_row(form.nature, {'attr': {'placeholder': 'nature de l\\'annonce'}}) }}
                </div>
                {{ form_errors(form.nature) }}
                <div class=\"form-group\">
                    {{ form_row(form.fonction, {'attr': {'placeholder': 'fonction de l\\'annonce'}}) }}
                </div>
                {{ form_errors(form.fonction) }}
                <div class=\"form-group\">
                    {{ form_row(form.description) }}
                </div>
                {{ form_errors(form.description) }}
                <div class=\"form-group\">
                    {{ form_row(form.typeforfait) }}
                </div>
                {{ form_errors(form.typeforfait) }}
                <div class=\"form-group\">
                    {{ form_row(form.prixDefaut) }}
                </div>
                {{ form_errors(form.prixDefaut) }}
                <div class=\"form-group\">
                    {{ form_row(form.regleCond) }}
                </div>
                {{ form_errors(form.regleCond) }}
                <div class=\"form-group\">
                    {{ form_row(form.categorie) }}
                </div>
                {{ form_errors(form.categorie) }}
            </div>
            <div class=\"col-xs-6 col-md-6 col-lg-6\">
                <div class=\"form-group\">
                    {{ form_row(form.typeAnnul) }}
                </div>
                {{ form_errors(form.typeAnnul)}}
                <div class=\"form-group\">
                    {{ form_row(form.adresse.pays, {'attr': {'placeholder': 'Donner le pays'}}) }}
                </div>
                {{ form_errors(form.adresse.pays) }}
                <div class=\"form-group\">
                    {{ form_row(form.adresse.ville,  {'attr': {'placeholder': 'Donner la ville'}}) }}
                </div>
                {{ form_errors(form.adresse.ville) }}
                <div class=\"form-group\">
                    {{ form_row(form.adresse.rue, {'attr': {'placeholder': 'Donner la rue'}}) }}
                </div>
                {{ form_errors(form.adresse.rue) }}
                <div class=\"form-group\">
                    {{ form_row(form.adresse.codePostal,  {'attr': {'placeholder': 'Donner le Code postal'}}) }}
                </div>
                {{ form_errors(form.adresse.codePostal) }}
                <div class=\"form-group\">
                    {{ form_row(form.assurances,  {'attr': {'placeholder': 'Assurance'}}) }}
                </div>
                {{ form_errors(form.assurances) }}
                {#<ul class=\"form-group\">
                    {% for listimage in form.images %}
                        <li>
                            {{ form_widget(listimage) }}
                            {{ form_errors(listimage) }}
                        </li>
                    {% endfor %}
                </ul>#}
                <div class=\"form-group\" id=\"\" data-prototype=\"\">
                    {{ form_widget(form.images) }}
                        <h6 style=\"font-weight: bold; font-family: Arial, Helvetica, sans-serif\">Liste des images de l'annonce</h6>
                            {% for listimg in listimg %}
                               {% for list in listimg.images %}
                                    {#<ul>
                                        <li style=\"list-style: none; position: relative; right: 40px\">#}
                                            <img
                                                src=\"{{ asset(list.webPath) }}\"
                                                alt=\"{{ list.alt }}\"
                                                style=\"width: 80px;\"
                                            />
                                       {# </li>
                                    </ul>#}
                               {% endfor %}
                            {% endfor %}
                    <input type=\"button\" id=\"add_code\" value=\"autres images\" class=\"btn btn-warning pull-right\"/>
                </div>
                {{ form_errors(form.images) }}

                <br/> <br/>
            {{ form_widget(form.save, {'label':'Modifier l\\'annonce','attr' : {'class' : 'btn btn-warning', 'id': 'btn-save'}}) }}
            {{ form_end(form) }}
        </div>
        </div>
    </div>
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
{% endblock %}


{% block javascripts %}
    {{ parent() }}
   {# <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>#}
    <script>
        \$(document).ready(function () {
            // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
            var \$container = \$('div#lsi_marketbundle_annonce_images');

            // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
            var index = \$container.find(':input').length;

            // On ajoute un nouveau champ à chaque click sur le bouton
            \$('#add_code').click(function (e) {
                addImage(\$container);
                e.preventDefault(); // Pour éviter qu'un # apparaissent dans l'URL
                return false;
            });

            // On ajoute automatiquement le 1er champ sans le bouton de suppression
            if ( index == 0 ){
                addImage(\$container);
            }else{
                // S'il existe déjà des champs de codes
                \$container.children('div').each(function () {
                    addDeleteLink(\$(this));
                });
            }

            // Fonction pour ajouter un formulaire de code postal
            function addImage(\$container) {
                var template;

                if (index == 0){
                    template = \$container.attr('data-prototype')
                        .replace(/__name__label__/g, 'Image 1')
                        .replace(/__name__/g, index)
                    ;
                }else{
                    template = \$container.attr('data-prototype')
                        .replace(/__name__label__/g, 'Image '+ (index +1))
                        .replace(/__name__/g, index)
                    ;
                }

                // On crée un objet jquery qui contiendra le template
                var \$prototype = \$(template);

                // On ajoute au prototype un lien pour pouvoir supprimer le code postal
                if(index == 0){

                }else{
                    addDeleteLink(\$prototype);
                    if (index > 0){
                        index --;}
                }

                // On ajoute le prototype modifié à la fin de la balise <div>
                \$container.append(\$prototype);

                // On incrémente l'index
                index++;
            }

            // La fonction pour supprimer un code postal
            function addDeleteLink(\$prototype) {
                // Création du bouton
                var \$deleteButton = \$('<input type=\"button\" value=\"Supprimer\" class=\"btn btn-danger\"/>');

                // Ajout du bouton
                \$prototype.append(\$deleteButton);

                // Ajout d'un listener sur le clic du lien pour supprimer la catégorie
                \$deleteButton.click(function(e) {
                    \$prototype.remove();
                    if (index > 0){
                        index --;}
                    e.preventDefault(); // évite qu'un # apparaisse dans l'URL

                    return false;

                });
            }
        })
    </script>
{% endblock javascripts %}
", "LSIMarketBundle:market:modifier.html.twig", "C:\\wamp\\www\\laschekina0311\\laschekina0311\\src\\LSI\\MarketBundle/Resources/views/market/modifier.html.twig");
    }
}
