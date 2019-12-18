<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_d2a29a38efd45d58f76a3820d16384de3d3d1fd248b263d0601900d3dadd9a4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_user.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        function usager() {

            var valeur;

            // Le bouton 'mairie'
            if (document.getElementById('fos_user_registration_form_type_0').checked){
                mairie.style.display = '';
                document.getElementById
                ('fos_user_registration_form_mairie_description').setAttribute('required', 'required');
                document.getElementById
                ('fos_user_registration_form_mairie_service').setAttribute('required', 'required');
                document.getElementById('fos_user_registration_form_nom').
                setAttribute('placeholder', 'Entrez le nom de votre mairie. Ex: Mairie de Paris');

                maire.style.display = '';
                document.getElementById('fos_user_registration_form_mairie_epci').setAttribute('required', 'required')

                adminis.style.display = 'none';
                document.getElementById
                ('fos_user_registration_form_administre_prenom').removeAttribute('required');

                document.getElementById
                ('fos_user_registration_form_administre_langueMat').removeAttribute('required');

                administ.style.display = 'none';
                document.getElementById('fos_user_registration_form_administre_')

                valeur = document.getElementById('fos_user_registration_form_type_0').value;
            // Le bouton 'administré'
            }else if(document.getElementById('fos_user_registration_form_type_1').checked){
                adminis.style.display = '';
                document.getElementById
                ('fos_user_registration_form_administre_prenom').setAttribute('required', 'required');

                administ.style.display = '';
                document.getElementById
                ('fos_user_registration_form_administre_langueMat').setAttribute('required', 'required');

                document.getElementById('fos_user_registration_form_nom').
                setAttribute('placeholder', 'Entrez votre nom. Ex: Jean');

                // Cacher les champs relatifs à la mairie
                mairie.style.display = 'none';
                document.getElementById
                ('fos_user_registration_form_mairie_description').removeAttribute('required');
                document.getElementById
                ('fos_user_registration_form_mairie_service').removeAttribute('required');
                maire.style.display = 'none';
                document.getElementById('fos_user_registration_form_mairie_epci').removeAttribute('required');

                valeur = document.getElementById('fos_user_registration_form_type_0').value;
            }
        }
    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 8,  60 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_user.html.twig\" %}
{% endblock fos_user_content %}

{% block javascripts %}
    {{ parent() }}

    <script>
        function usager() {

            var valeur;

            // Le bouton 'mairie'
            if (document.getElementById('fos_user_registration_form_type_0').checked){
                mairie.style.display = '';
                document.getElementById
                ('fos_user_registration_form_mairie_description').setAttribute('required', 'required');
                document.getElementById
                ('fos_user_registration_form_mairie_service').setAttribute('required', 'required');
                document.getElementById('fos_user_registration_form_nom').
                setAttribute('placeholder', 'Entrez le nom de votre mairie. Ex: Mairie de Paris');

                maire.style.display = '';
                document.getElementById('fos_user_registration_form_mairie_epci').setAttribute('required', 'required')

                adminis.style.display = 'none';
                document.getElementById
                ('fos_user_registration_form_administre_prenom').removeAttribute('required');

                document.getElementById
                ('fos_user_registration_form_administre_langueMat').removeAttribute('required');

                administ.style.display = 'none';
                document.getElementById('fos_user_registration_form_administre_')

                valeur = document.getElementById('fos_user_registration_form_type_0').value;
            // Le bouton 'administré'
            }else if(document.getElementById('fos_user_registration_form_type_1').checked){
                adminis.style.display = '';
                document.getElementById
                ('fos_user_registration_form_administre_prenom').setAttribute('required', 'required');

                administ.style.display = '';
                document.getElementById
                ('fos_user_registration_form_administre_langueMat').setAttribute('required', 'required');

                document.getElementById('fos_user_registration_form_nom').
                setAttribute('placeholder', 'Entrez votre nom. Ex: Jean');

                // Cacher les champs relatifs à la mairie
                mairie.style.display = 'none';
                document.getElementById
                ('fos_user_registration_form_mairie_description').removeAttribute('required');
                document.getElementById
                ('fos_user_registration_form_mairie_service').removeAttribute('required');
                maire.style.display = 'none';
                document.getElementById('fos_user_registration_form_mairie_epci').removeAttribute('required');

                valeur = document.getElementById('fos_user_registration_form_type_0').value;
            }
        }
    </script>
    {#<script>
        \$(document).ready(function () {
            \$('#fos_user_registration_form_adresse_codePostal').on('change', function monepci (valu) {
                valu = \$(this).val();
                alert(valu);
                \$.ajax({
                    type: 'GET',
                    url: '{{ path('ls_imarket_mon_epci') }}',
                    data: { 'cp': valu },
                    dataType: 'json',
                    success: function (json) {
                        \$(\"#fos_user_registration_form_mairie_epi\").html(json);
                        //alert(json);
                        //alert('Code postal Ok!!');
                    },
                    error: function (data) {
                        alert(cp);
                    }
                })
            })
        })
    </script>#}
{% endblock javascripts %}", "@FOSUser/Registration/register.html.twig", "C:\\wamp\\www\\laschekina0311\\src\\LSI\\MarketBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
