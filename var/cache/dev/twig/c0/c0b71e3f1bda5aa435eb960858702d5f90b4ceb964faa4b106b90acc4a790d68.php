<?php

/* @LSIMarket/mairie/mesannonce_content.html.twig */
class __TwigTemplate_8dc28010b14ed5040d8678c48ed073a93e11ef1edf5f090807641f96a6b4c5ed extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LSIMarket/mairie/mesannonce_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LSIMarket/mairie/mesannonce_content.html.twig"));

        // line 1
        echo "<body>
    <div id=\"page\" class=\"row\">
        <div>
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <h2>Mes annonces</h2>
                </div>
                <div class=\"col-lg-offset-6 col-lg-3\">
                    <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_ajouter_annonce");
        echo "\" class=\"btn btn-info\">Ajouter une annonce</a>
                </div>
            </div>
            <table id=\"annonce\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                <thead>
                <tr class=\"success\">
                    <th>Titre de l'annonce</th>
                    <th>Date de publication</th>
                    <th>Etat</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["annonce"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 23
            echo "                    <tr>
                        <td>
                            ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateCreation", array()), "d/m/Y"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 31
            if (($this->getAttribute($context["annonce"], "annonceEtat", array()) == "A")) {
                // line 32
                echo "                                Publiée
                            ";
            }
            // line 34
            echo "                        </td>
                        <td>
                            <a role=\"buton\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_voir_annonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">Consulter</a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "                    <tr class=\"alert alert-info\">
                        <td colspan=\"3\">
                            <center><strong>Vous n'avez ajouté aucune annonce !</strong></center>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </tbody>
                <tfoot>
                <tr class=\"info\">
                    <th>Titre de l'annonce</th>
                    <th>Date de publication</th>
                    <th>Etat</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>


</body>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@LSIMarket/mairie/mesannonce_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 46,  91 => 40,  82 => 36,  78 => 34,  74 => 32,  72 => 31,  66 => 28,  60 => 25,  56 => 23,  51 => 22,  35 => 9,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body>
    <div id=\"page\" class=\"row\">
        <div>
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <h2>Mes annonces</h2>
                </div>
                <div class=\"col-lg-offset-6 col-lg-3\">
                    <a href=\"{{ path('ls_imarket_ajouter_annonce') }}\" class=\"btn btn-info\">Ajouter une annonce</a>
                </div>
            </div>
            <table id=\"annonce\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                <thead>
                <tr class=\"success\">
                    <th>Titre de l'annonce</th>
                    <th>Date de publication</th>
                    <th>Etat</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                {% for annonce in annonce %}
                    <tr>
                        <td>
                            {{ annonce.titre }}
                        </td>
                        <td>
                            {{ annonce.dateCreation|date('d/m/Y') }}
                        </td>
                        <td>
                            {% if annonce.annonceEtat == 'A' %}
                                Publiée
                            {% endif %}
                        </td>
                        <td>
                            <a role=\"buton\" href=\"{{ path('ls_imarket_voir_annonce', {'id': annonce.id})}}\">Consulter</a>
                        </td>
                    </tr>
                {% else %}
                    <tr class=\"alert alert-info\">
                        <td colspan=\"3\">
                            <center><strong>Vous n'avez ajouté aucune annonce !</strong></center>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
                <tfoot>
                <tr class=\"info\">
                    <th>Titre de l'annonce</th>
                    <th>Date de publication</th>
                    <th>Etat</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>


</body>", "@LSIMarket/mairie/mesannonce_content.html.twig", "C:\\wamp\\www\\laschekina0311\\laschekina0311\\src\\LSI\\MarketBundle\\Resources\\views\\mairie\\mesannonce_content.html.twig");
    }
}
