<?php

/* LSIMarketBundle::monespace.html.twig */
class __TwigTemplate_57eca9706e15afbc1217a59a250f54365a5abea3e918fc22af69aaf72bcded04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LSIMarketBundle::monespace.html.twig", 1);
        $this->blocks = array(
            'volet' => array($this, 'block_volet'),
            'body' => array($this, 'block_body'),
            'monespace' => array($this, 'block_monespace'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LSIMarketBundle::monespace.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LSIMarketBundle::monespace.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_volet($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "volet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "volet"));

        // line 10
        echo "    ";
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 11
            echo "        ";
            // line 12
            echo "    ";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_PART"), "method")) {
            // line 13
            echo "        ";
            $this->loadTemplate("LSIMarketBundle::layout_administre.html.twig", "LSIMarketBundle::monespace.html.twig", 13)->display($context);
            // line 14
            echo "        ";
            // line 15
            echo "    ";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_MAIRIE"), "method")) {
            // line 16
            echo "        ";
            $this->loadTemplate("LSIMarketBundle::layout_mairie.html.twig", "LSIMarketBundle::monespace.html.twig", 16)->display($context);
            // line 17
            echo "    ";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method")) {
            // line 18
            echo "        ";
            $this->loadTemplate("LSIMarketBundle::layout_admin.html.twig", "LSIMarketBundle::monespace.html.twig", 18)->display($context);
            // line 19
            echo "    ";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_SUPER_ADMIN"), "method")) {
            // line 20
            echo "        ";
            $this->loadTemplate("LSIMarketBundle::layout_superadmin.html.twig", "LSIMarketBundle::monespace.html.twig", 20)->display($context);
            // line 21
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "
    ";
        // line 26
        $this->displayBlock('monespace', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_monespace($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "monespace"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "monespace"));

        // line 27
        echo "
<!-- Page layout -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/css/katniss.css"), "html", null, true);
        echo "\">
     <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/css/Ionicons/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/css/Ionicons/css/ionicons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/css/perfect-scrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/css/rickshaw/rickshaw.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <div class=\"title-row heading\">
      <div class=\"col-md-12\">
        <h1>Mon espace</h1>

      </div>
    </div>
      <hr>

      <blockquote class=\"v1\" style=\"background: #ffffff\">
      <h3>Message de l'EPCI de  - 12/10/2018</h3><br>
      <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/img2.jpg"), "html", null, true);
        echo "\"  class=\"wd-90 rounded-circle\" style=\"float: right;margin-bottom:15px\" alt=\"Image\">
      <h5><p>Notre objectif étant de mettre en location 100% de nos équipements, Merci de les mettre en valeur à travers des photos de bonnes qualitées et une description claire et succincte des équipements<br>
      D'après les statistiques prévionnelles, le budget prévisionnel sera dépassé de 35% par rapport à notre meilleur score de 2018. </p><h5>
      <small>Emmanuel Doe</small>     
      </blockquote>
     <hr>

     <!-- Properties description -->
     <div class=\"row pad-top-large\">
       <div class=\"container\">
         <div class=\"properties-descriptions tabs-vertical\" role=\"tabpanel\">
           <ul class=\"nav nav-tabs\">
             <li class=\"active\"><a href=\"#compte\" data-toggle=\"tab\">MON COMPTE</a></li>
             <li><a href=\"#engagements\" data-toggle=\"tab\">MES ENGAGEMENTS</a></li>
             <li><a href=\"#annonces\" data-toggle=\"tab\">MES ANNONCES</a></li>
            <!-- <li><a href=\"#location\" data-toggle=\"tab\">MES LOCATIONS</a></li>-->
             <li><a href=\"#syntese\" data-toggle=\"tab\">MA SYNTHESE</a></li>
           </ul>
           <div class=\"tab-content\">
             <div class=\"tab-pane fade in active\" id=\"compte\">               
               <div class=\"contents\">
                      <article class=\"section__wrapper\">        
            <!-- Menu - Info -->
            <div class=\"search-interaction row-float\">
              <div  id=\"map-cotnent2\">
                <div class=\"map-search-form row-float\" >
                  <div class=\"container\">
                    <div class=\"row pad-top-large\">
                      <div class=\"form-tab\">
                      <a class=\"active\"  href=\"#form-1\">Coordonnées</a>
                      <a href=\"#form-2\">Habilitations</a>
                      <a href=\"#form-3\">Paramètres</a>
                      </div>
                    </div>
                    <div class=\"form-content form-cotent-map\">
                      <form class=\"form-1\" id=\"form-1\">
                        <div class=\"row pad-top-large\">
                          <div class=\"col-md-9\" style=\"text-align:left\">
                            <!-- bloc coordonées-->
                                                                                                              
<table class=\"table table-striped\">
        ";
        // line 87
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 88
            echo "
        ";
        } else {
            // line 90
            echo "            <tr>
                <td style=\"width:120px\">";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom"), "html", null, true);
            echo "</td>
                <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 95
        echo "
        ";
        // line 96
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_PART"), "method")) {
            // line 97
            echo "            <tr>
                <td>";
            // line 98
            echo "Prenom";
            echo "</td>
                <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "administre", array()), "prenom", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td>";
            // line 102
            echo "Langue maternelle";
            echo "</td>
                <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "administre", array()), "langueMat", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td>";
            // line 106
            echo "Photo de profil";
            echo "</td>
                <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "administre", array()), "photoProfil", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 109
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_MAIRIE"), "method")) {
            // line 110
            echo "            <tr>
                <td>";
            // line 111
            echo "Description";
            echo "</td>
                <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "mairie", array()), "description", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td>";
            // line 115
            echo "Service";
            echo "</td>
                <td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "mairie", array()), "service", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 119
        echo "
        <tr>
            <td>";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
        echo "</td>
            <td>";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "html", null, true);
        echo "</td>
            <td>";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</td>
        </tr>
        ";
        // line 128
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 129
            echo "
        ";
        } else {
            // line 131
            echo "            ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "telephone", array(), "any", true, true) &&  !null)) {
                // line 132
                echo "                <tr>
                    <td>";
                // line 133
                echo "Numéro de téléphone";
                echo "</td>
                    <td>";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "telephone", array()), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            // line 137
            echo "            ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "adresse", array(), "any", false, true), "rue", array(), "any", true, true) &&  !null)) {
                // line 138
                echo "                <tr>
                    <td>";
                // line 139
                echo "Rue";
                echo "</td>
                    <td>";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "adresse", array()), "rue", array()), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            // line 143
            echo "            ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "adresse", array(), "any", false, true), "codePostal", array(), "any", true, true) &&  !null)) {
                // line 144
                echo "                <tr>
                    <td>";
                // line 145
                echo "Code postal";
                echo "</td>
                    <td>";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "adresse", array()), "codePostal", array()), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            // line 149
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "adresse", array(), "any", false, true), "ville", array(), "any", true, true) &&  !null)) {
                // line 150
                echo "                <tr>
                    <td>";
                // line 151
                echo "Ville";
                echo "</td>
                    <td>";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "adresse", array()), "ville", array()), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            // line 155
            echo "             ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "adresse", array(), "any", false, true), "pays", array(), "any", true, true) &&  !null)) {
                // line 156
                echo "                <tr>
                    <td>";
                // line 157
                echo "Pays";
                echo "</td>
                    <td>";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "adresse", array()), "pays", array()), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            // line 161
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "indicatif", array(), "any", true, true) &&  !null)) {
                // line 162
                echo "                <tr>
                    <td>";
                // line 163
                echo "Téléphone";
                echo "</td>
                    <td> + ";
                // line 164
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "indicatif", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "telephone", array()), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            // line 167
            echo "           
        ";
        }
        // line 169
        echo "    </table>
    
    <a href=\"";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" class=\"btn btn-primary btn-large pull-right\">Modifier mon profil</a>
    
<br><br><br>              
                                                                                                            <div class=\"col-md-10\">
                                                                                  <div class=\"headline v3 text-center\"><br><br><h4>Membres de la mairie</h4></div></br>
                                                                                                                  </div>
                                                                                                                     <!-- Agents -->
                              <div class=\"content-panel agents-portfolio\">

                                <div class=\"project-list\">        
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/mairie/1.jpg"), "html", null, true);
        echo "\" style=\"height:205px;width:262px;object-fit: cover;\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">LISA DHO</span>
                                    
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/mairie/2.jpg"), "html", null, true);
        echo "\" style=\"height:205px;width:262px;object-fit: cover;\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">PATRICK JOB</span>
                                     
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/mairie/3.jpg"), "html", null, true);
        echo "\" style=\"height:205px;width:262px;object-fit: cover;\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">LOIC TEGE</span>
                                    
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/mairie/4.jpg"), "html", null, true);
        echo "\" style=\"height:205px;width:262px;object-fit: cover;\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">FRANCK DURANT</span>                                   
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                              <br><br><br>              
                                                                                                            <div class=\"col-md-10\">
                                                                                  <div class=\"headline v3 text-center\"><br><br><h4>Membres habilités à gérer les annonces</h4></div></br>
                                                                                                                  </div>
                                                                                                                     <!-- Agents -->
                              <div class=\"content-panel agents-portfolio\">

                                <div class=\"project-list\">        
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/habilitation/14202195290_4ac1d5a92b_b.jpg"), "html", null, true);
        echo "\" height=\"205\" width=\"262\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">LISA MARIA</span>
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/habilitation/9325995752_e4b4d0044a_b.jpg"), "html", null, true);
        echo "\" height=\"205\" width=\"262\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">JONATHAN LOR</span>
                       
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/habilitation/8203794182_8004f8f636_b.jpg"), "html", null, true);
        echo "\" height=\"205\" width=\"262\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">MICK CHRITIAN</span>
                      
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/habilitation/9675018730_f3ab9ab065_b.jpg"), "html", null, true);
        echo "\" height=\"205\" width=\"262\" alt=\"\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">MICK DURANT</span>
                              
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>  
                                                      
                                                                                                                <!-- fin bloc coordonées-->         
                          </div>            
                        </div>
                      </form>  
                      <form class=\"form-1 hidden\" id=\"form-2\">
                        <div class=\"row pad-top-large\">
                          <div class=\"col-md-9\" style=\"text-align:left\">
                            <!-- bloc habilitations -->
                                <br>
                                <div class=\"headline v3 text-center\"><h4>Ajout d'un membre</h4></div></br>

                              <div class=\"col-md-5\">

                                  <figure class=\"image-box\">
                                      <img src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/member.jpg"), "html", null, true);
        echo "\" height=\"189\" width=\"165\" alt=\"\">
                                  </figure>
                                  <br>
                                   <label class=\"custom-file\">
                                        <input type=\"file\" id=\"file\" class=\"custom-file-input\">
                                        <span class=\"custom-file-control\"></span>
                                        </label>
                              </div>
                              <div class=\"col-md-7\">
                                 <div class=\"form-layout\">
";
        // line 355
        echo "

                  ";
        // line 358
        echo "                   
                    <a href=\"";
        // line 359
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Inscrire membre mairie</a>              
              </div>
</div>

       <br><br><br>
<div class=\"col-md-10\">
  <div class=\"headline v3 text-center\"><br><br><h4>Habilitation des membres</h4></div></br>
                                  </div>
                                     <!-- Agents -->
                              <div class=\"content-panel agents-portfolio\">

                              <p>PERSONNES HABILITEES A FAIRE UN DEVIS</p>

                                <div class=\"project-list\">        
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/habilitation/14202195290_4ac1d5a92b_b.jpg"), "html", null, true);
        echo "\" height=\"205\" width=\"262\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">LISA MARIA</span>
                                    <img src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/delete.png"), "html", null, true);
        echo "\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\">
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/habilitation/9325995752_e4b4d0044a_b.jpg"), "html", null, true);
        echo "\" height=\"205\" width=\"262\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">JONATHAN LOR</span>
                                    <img src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/delete.png"), "html", null, true);
        echo "\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\"> 
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/habilitation/8203794182_8004f8f636_b.jpg"), "html", null, true);
        echo "\" height=\"205\" width=\"262\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">MICK CHRITIAN</span>
                                    <img src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/delete.png"), "html", null, true);
        echo "\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\">
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/habilitation/9675018730_f3ab9ab065_b.jpg"), "html", null, true);
        echo "\" height=\"205\" width=\"262\" alt=\"\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">MICK DURANT</span>
                                    <img src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/delete.png"), "html", null, true);
        echo "\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\">
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                              
                              <div class=\"content-panel agents-portfolio\">
                                <p>PERSONNES HABILITEES A SIGNER UN CONTRAT D'ACHAT</p>
                                <div class=\"project-list\">        
                                <div class=\"project\">
                                    <div class=\"data\">
                                      <a href=\"#\"><img src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/habilitation/14202195290_4ac1d5a92b_b.jpg"), "html", null, true);
        echo "\" height=\"205\" width=\"262\"></a>
                                      <span class=\"meta-list3\">
                                    <span class=\"status\">LISA MARIA</span>
                                    <img src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/delete.png"), "html", null, true);
        echo "\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\">
                                      </span> 
                                    </div>
                                </div>
                                <div class=\"project\">
                                  <div class=\"data\">
                                  <a href=\"#\">
                                  <img src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/habilitation/9325995752_e4b4d0044a_b.jpg"), "html", null, true);
        echo "\" height=\"205\" width=\"262\">
                                  <span class=\"meta-list3\">
                                  <span class=\"status\">JONATHAN LOR</span>
                                  <img src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/delete.png"), "html", null, true);
        echo "\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\">
                                  </span>
                                  </a>
                                  </div>
                                </div>

                                <div class=\"project\">
                                  <div class=\"data\">
                                  <a href=\"#\">
                                  <img src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/habilitation/9675018730_f3ab9ab065_b.jpg"), "html", null, true);
        echo "\" height=\"205\" width=\"262\" alt=\"\">
                                  <span class=\"meta-list3\">
                                  <span class=\"status\">MICK DURANT</span>
                                  <img src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/delete.png"), "html", null, true);
        echo "\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\"> 
                                  </span>
                                  </a>
                                  </div>
                                </div>
                                
                              </div>
                              </div>
                              
                              <div class=\"content-panel agents-portfolio\">
                                <p>PERSONNES HABILITEES A AJOUTER UNE REFERENCE</p>
                                <div class=\"project-list\">        
                                <div class=\"project\">
                                  <div class=\"data\">
                                  <a href=\"#\">
                                  <img src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/habilitation/14202195290_4ac1d5a92b_b.jpg"), "html", null, true);
        echo "\" height=\"205\" width=\"262\">
                                  <span class=\"meta-list3\">
                                  <span class=\"status\">LISA MARIA</span>
                                  <img src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/delete.png"), "html", null, true);
        echo "\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\">
                                  </span>
                                  </a>
                                  </div>
                                </div>
                                <div class=\"project\">
                                  <div class=\"data\">
                                  <a href=\"#\">
                                  <img src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/habilitation/9325995752_e4b4d0044a_b.jpg"), "html", null, true);
        echo "\" height=\"205\" width=\"262\">
                                  <span class=\"meta-list3\">
                                  <span class=\"status\">JONATHAN LOR</span>
                                  <img src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/delete.png"), "html", null, true);
        echo "\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\">                                 
                                  </span>
                                  </a>
                                  </div>
                                </div>
                                
                                </div>
                              </div>
                              <div class=\"content-panel agents-portfolio\">
                                <p>PERSONNES HABILITEES A SIGNER UN CONTRAT DE VENTE</p>
                                <div class=\"project-list\">        
                                <div class=\"project\">
                                  <div class=\"data\">
                                  <a href=\"#\">
                                  <img src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/habilitation/14202195290_4ac1d5a92b_b.jpg"), "html", null, true);
        echo "\" height=\"205\" width=\"262\">
                                  <span class=\"meta-list3\">
                                  <span class=\"status\">LISA MARIA</span>
                                  <img src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/delete.png"), "html", null, true);
        echo "\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\">
                                  </span>
                                  </a>
                                  </div>
                                </div>
                                <div class=\"project\">
                                  <div class=\"data\">
                                  <a href=\"#\">
                                  <img src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/habilitation/9325995752_e4b4d0044a_b.jpg"), "html", null, true);
        echo "\" height=\"205\" width=\"262\">
                                  <span class=\"meta-list3\">
                                  <span class=\"status\">JONATHAN LOR</span>
                                  <img src=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/delete.png"), "html", null, true);
        echo "\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\">                    
                                  </span>
                                  </a>
                                  </div>
                                </div>
                                <div class=\"project\">
                                  <div class=\"data\">
                                  <a href=\"#\">
                                  <img src=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/habilitation/8203794182_8004f8f636_b.jpg"), "html", null, true);
        echo "\" height=\"205\" width=\"262\">
                                  <span class=\"meta-list3\">
                                  <span class=\"status\">MICK CHRITIAN</span>
                                  <img src=\"";
        // line 519
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/delete.png"), "html", null, true);
        echo "\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\">
                                  </span>
                                  </a>
                                  </div>
                                </div>
                                <div class=\"project\">
                                  <div class=\"data\">
                                  <a href=\"#\">
                                  <img src=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/habilitation/9675018730_f3ab9ab065_b.jpg"), "html", null, true);
        echo "\" height=\"205\" width=\"262\" alt=\"\">
                                                                                                                                  </a>
                                  <span class=\"meta-list3\">
                                  <span class=\"status\">MICK DURANT</span>
                                  <img src=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/delete.png"), "html", null, true);
        echo "\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\"> 
                                  </span>
                                  
                                  </div>
                                                                                                                                  
                                </div>
                                
                                </div>
                              </div>                                                       
                              
                                                                                                                        <!--Gestion des habilitations -->

                                                                                                                        <div class=\"col-md-12\" style=\"margin-top:20px\">
                                                                                                                           <div class=\"headline v3 text-center\"><h4>Gestion des habilitations</h4></div></br>
                                                                                                                        </div>
                                                                                                                        <div class=\"col-md-9\">
                                                              <table style=\"width:100%\">
                                                                <tr>
                                                                  <td style=\"width:30%\">
                                                                    <p>MICK DURANT
                                                                  </td>
                                                                  <td style=\"width:70%\">
                                                                    <div class=\"custom-select\" style=\"width:100%;\">
                                                                       <select>
                                                                        <option value=\"0\">HABILITE(E) A FAIRE UN DEVIS</option>
                                                                        <option value=\"1\">HABILITE(E) A SIGNER UN CONTRAT D'ACHAT</option>
                                                                        <option value=\"2\">HABILITE(E) A AJOUTER UNE REFERENCE</option>
                                                                        <option value=\"3\">HABILITE(E) A SIGNER UN CONTRAT DE VENTE</option>
                                                                       </select>
                                                                    </div>
                                                                  </td>
                                                                </tr>
                                                                <tr>
                                                                  <td> 
                                                                    <p>JONATHAN LOR
                                                                  </td>
                                                                  <td>
                                                                    <div class=\"custom-select\" style=\"width:100%;\">
                                                                      <select>
                                                                        <option value=\"0\">HABILITE(E) A FAIRE UN DEVIS</option>
                                                                        <option value=\"1\">HABILITE(E) A SIGNER UN CONTRAT D'ACHAT</option>
                                                                        <option value=\"2\">HABILITE(E) A AJOUTER UNE REFERENCE</option>
                                                                        <option value=\"3\">HABILITE(E) A SIGNER UN CONTRAT DE VENTE</option>
                                                                      </select>
                                                                    </div>
                                                                  </td>
                                                                </tr>
                                                                <tr>
                                                                  <td>
                                                                    <p>LISA MARIA</a>
                                                                  </td>
                                                                  <td>
                                                                    <div class=\"custom-select\" style=\"width:100%;\">
                                                                      <select>
                                                                        <option value=\"0\">HABILITE(E) A FAIRE UN DEVIS</option>
                                                                        <option value=\"1\">HABILITE(E) A SIGNER UN CONTRAT D'ACHAT</option>
                                                                        <option value=\"2\">HABILITE(E) A AJOUTER UNE REFERENCE</option>
                                                                        <option value=\"3\">HABILITE(E) A SIGNER UN CONTRAT DE VENTE</option>
                                                                      </select>
                                                                    </div>
                                                                  </td>
                                                                </tr>
                                                                <tr>
                                                                  <td>
                                                                    <p>MICK CHRITIAN</a>
                                                                  </td>
                                                                   <td>
                                                                    <div class=\"custom-select\" style=\"width:100%;\">
                                                                      <select>
                                                                        <option value=\"0\">HABILITE(E) A FAIRE UN DEVIS</option>
                                                                        <option value=\"1\">HABILITE(E) A SIGNER UN CONTRAT D'ACHAT</option>
                                                                        <option value=\"2\">HABILITE(E) A AJOUTER UNE REFERENCE</option>
                                                                        <option value=\"3\">HABILITE(E) A SIGNER UN CONTRAT DE VENTE</option>
                                                                      </select>
                                                                    </div>
                                                                   </td>
                                                                </tr>
                                                                                                    </table>
                                                                                                                                                                                                                                                        <button class=\"pull-right btn btn-info\" style=\"margin-top:10px\">Enregistrer</button>
  
                            <!-- fin bloc habilitation -->  
                          </div>  
                        </div>
                      </form>
                      <form class=\"form-1 hidden\" id=\"form-3\">
                        <div class=\"row pad-top-large\">
                          <div class=\"col-md-12\" style=\"text-align:left\">
    xxxxxxx                       <!-- bloc paramètre -->

                            <!-- fin bloc paramètre -->
                          </div>
                        </div>  
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Menu - Info -->    
          </article>
  
         </div>               
            </div>
            <div class=\"tab-pane fade\" id=\"engagements\">               
               <div class=\"contents\">
          <article class=\"section__wrapper\">
          <!-- Menu - Info -->
      <div class=\"search-interaction row-float\">
        <div  id=\"map-cotnent2\">
          <div class=\"map-search-form row-float\" >
            <div class=\"container\">
              <div class=\"row pad-top-large\">
                <div class=\"form-tab\">
                <a href=\"#form-4\">Démarches</a>
                <a href=\"#form-5\">Budget</a>
                <a class=\"active\" href=\"#form-6\">Archives</a>
                </div>
              </div>
              <div class=\"form-content form-cotent-map\">
                <form class=\"form-1\" id=\"form-4\">
                  <div class=\"row pad-top-large\">
                    <div class=\"col-md-12\" style=\"text-align:left\">
                      <!-- bloc info -->
                        <!-- Bloc démarches -->
                                                                                                           <br>
                                                                                                            <div class=\"col-md-9\">
                                                                                                                       <div class=\"tag-box tag-box-v2\">
                                                                                                                       <h3>Les étapes de ma démarche d’engagement simplifiée</h3>

                                                                                                                           ";
        // line 660
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("LSIMarketBundle:Market:demarcheAnnonce"));
        echo "

                                                                                                                    </div>
                                                                                                                </div> 
                                                                                                            <div class=\"col-md-10\">
                              <div class=\"headline v3 text-center\">
                                <p><h3>Contacter un conseillé</h3></p>
                              </div>
                              Vous souhaitez avoir un renseignement, n'hésitez pas à envoyer un mail à un de nos agents.
                              <div class=\"row pad-top-small layout-flex\">
                                <div class=\"col-md-2\">
                                  <div class=\"content-box-2\">
                                    <figure class=\"image-box\">
                                      <img src=\"";
        // line 673
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/img5.jpg"), "html", null, true);
        echo "\" height=\"278\" width=\"330\" alt=\"\">
                                    </figure>
                                    <div class=\"contents\">
                                      <h3 class=\"heading-style-1\">Jhon Doe</h3>
                                    
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col-md-9\">
                                  <div class=\"content-box-2 agents-contact\">
                                    <div class=\"heading\">
                                      <h5>Contact jhone doe</h5>
                                    </div>
                                    <form class=\"form-content pad-top-small\" data-parsley-validate>
                                      <div class=\"row\">
                                        <div class=\"col-md-12 form-group-1\">
                                          <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Name\" required data-parsley-required-message=\"Merci d'entrer votre nom\" name=\"name\">
                                        </div>
                                        <div class=\"col-md-12 form-group-1\">
                                          <input type=\"text\" class=\"form-control input-lg\" placeholder=\"E-mail ID\" required data-parsley-required-message=\"Merci d'entrer votre adresse mail\" name=\"email\">
                                        </div>
                                      </div>
                                      <div class=\"row\">
                                        <div class=\"col-md-12 form-group-1\">
                                          <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Téléphone\" required data-parsley-required-message=\"Entrer votre numéro de téléphone\" data-parsley-min=\"10\" name=\"contact\">
                                        </div>
                                        <div class=\"col-md-12 form-group-1\">
                                          <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Entrer votre ville\" required name=\"location\">
                                        </div>
                                      </div>
                                      <div class=\"row\">
                                        <div class=\"form-group-1 col-md-12\">
                                          <textarea class=\"form-control\" placeholder=\"Entrer votre question\" rows=\"5\"  required data-parsley-minlength=\"20\" data-parsley-minlength-message = \"\"  data-parsley-validation-threshold=\"10\" data-parsley-maxlength=\"100\" name=\"message\"></textarea>
                                        </div>
                                      </div>
                                      <div class=\"row pad-top-small\">
                                        <div class=\"col-md-10\">
                                          <button class=\"btn btn-primary btn-large pull-right\">Envoyer</button>
                                        </div>
                                        <div class=\"text-success col-xs-10 hidden form-messges text-center\">
                                          <p>Vous aurez une réponse dans les plus brefs délais.</p>
                                        </div>
                                      </div>
                                    </form>
                                    <div class=\"info-box-1\">
                                      <h5><span>N'hésitez pas à nous contacter</span></h5>
                                      <p><span class=\"large-text-1\"><span class=\"iconic-phone-square\"></span>+33 1 34 54 54 54 </span> (09H00 - 18H00 / Lundi à samedi)</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
        
                      <!-- fin bloc démarches -->
                    </div>            
                  </div>
                </form>  
                <form class=\"form-1 hidden\" id=\"form-5\">
                  <div class=\"row pad-top-large\">
                    <div class=\"col-md-12\" style=\"text-align:left\">
                      <!-- bloc budget -->
                                                                                        <br>  
                      Ma période d’engagement du budget de JJ/MM/AA à JJ/MM/AA

                                                                                        <p>Mon budget achat la période : ";
        // line 737
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "mairie", array()), "budgetInitial", array()), "html", null, true);
        echo " €</p>
                      <!-- fin bloc budget -->  
                    </div>  
                  </div>
                </form>
                <form class=\"form-1 hidden\" id=\"form-6\">
                  <div class=\"row pad-top-large\">
                    <div class=\"col-md-12\" style=\"text-align:left\">
                                                                                        <br>
                      <!-- bloc archives -->
                                                                                          <div class=\"col-md-9\">
                                                                                              <div class=\"text-box text-box-v2 box-shadow shadow-effect-2\">
                                                                                                                         
                                                                                                                         <h2>Exercice 2019</h2></br> 
                                                                                                                         - <a href=\"#\">Budget annuelle achat entre EPCI</a> <a href='";
        // line 751
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a> </br>
                                                                                                                         - <a href=\"#\">Décision légale sur la gestion des biens publics</a> <a href='";
        // line 752
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                         <div id=\"archive_2019\" class=\"tohide\">
                                                                                                                            - <a href=\"#\">Décision EPCI</a> <a href='";
        // line 754
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a> </br>
                                                                                                                            - <a href=\"#\">Déclaration de mise à disposition</a> <a href='";
        // line 755
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                         </div>
                                                                                                                         
                                                                                                                         <button id=\"bt-contact\" type=\"button\" class=\"btn btn-primary btn-group-lg btn-large pull-right\" data-target=\"#archive_2019\">Afficher/cacher des documents</button> 
                                                                                                                         
                                                                                                                        
                                                                                                                         <br>
                                                                                                                         <div class=\"headline v3\">
                                                                                                                            <p>Archiver un document</p>
                                                                                                                         </div>
                                                                                                                         
                                                                                                                           <input type=\"file\" id=\"file\">
                                                                                                                           <span class=\"custom-file-control\"></span>
                                                                                                                         
                                                                                                                         <button class=\"btn btn-primary btn-large pull-right\">Enregistrer</button>
                                                                                                                         <br>
                                                                                              </div>
                                                                                         </div>
                      <div class=\"col-md-9\">
                                                                                              <div class=\"text-box text-box-v2 box-shadow shadow-effect-2\">
                                                                                                                         
                                                                                                                          <h2>Exercice 2018</h2></br> 
                                                                                                                         - <a href=\"#\">Budget annuelle achat entre EPCI</a> <a href='";
        // line 777
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                         - <a href=\"#\">Décision légale sur la gestion des biens publics</a> <a href='";
        // line 778
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                         <div id=\"archive_2018\" class=\"tohide\">
                                                                                                                            - <a href=\"#\">Facture location Camion 15/09/2017 au 25/11/2017</a> <a href='";
        // line 780
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                            - <a href=\"#\">Facture location Benne 07/04/2017 au 23/09/2017</a> <a href='";
        // line 781
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                         
                                                                                                                            - <a href=\"#\">Décision générale EPCI</a> <a href='";
        // line 783
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a> </br>
                                                                                                                            - <a href=\"#\">Déclaration de mise à disposition des camions</a> <a href='";
        // line 784
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                            - <a href=\"#\">Officialisation de l'intégration dans l'EPCI</a> <a href='";
        // line 785
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a> </br>
                                                                                                                            - <a href=\"#\">Externalisation de la location des éléments</a> <a href='";
        // line 786
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                         </div>
                                                                                                                         
                                                                                                                         <button id=\"bt-contact\" type=\"button\" class=\"btn btn-primary btn-group-lg btn-large pull-right\" data-target=\"#archive_2018\">Afficher/cacher des documents</button> 
                                                                                                                         
                                                                                                                        
                                                                                                                         <br>
                                                                                                                         <div class=\"headline v3\">
                                                                                                                            <p>Archiver un document</p>
                                                                                                                         </div>
                                                                                                                         
                                                                                                                           <input type=\"file\" id=\"file\">
                                                                                                                           <span class=\"custom-file-control\"></span>
                                                                                                                         
                                                                                                                         <button class=\"btn btn-primary btn-large pull-right\">Enregistrer</button>
                                                                                                                         <br>
                                                                                              </div>
                                                                                         </div>
                                                                                         <div class=\"col-md-9\">
                                                                                              <div class=\"text-box text-box-v2 box-shadow shadow-effect-2\">
                                                                                                                         
                                                                                                                          <h2>Exercice 2017</h2> :</br> 
                                                                                                                         - <a href=\"#\">Budget annuelle achat entre EPCI</a></br>
                                                                                                                         - <a href=\"#\">Décision légale sur la gestion des biens publics</a> <a href='";
        // line 809
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                         <div id=\"archive_2017\" class=\"tohide\">
                                                                                                                            - <a href=\"#\">Facture location Camion 15/09/2016 au 25/11/2016</a> <a href='";
        // line 811
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                            - <a href=\"#\">Facture location Benne 07/04/2016 au 23/09/2016</a> <a href='";
        // line 812
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                         
                                                                                                                            - <a href=\"#\">Décision EPCI des mairies</a> <a href='";
        // line 814
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a> </br>
                                                                                                                            - <a href=\"#\">Déclaration de mise à disposition des agendats</a> <a href='";
        // line 815
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                         </div>
                                                                                                                         
                                                                                                                         <button id=\"bt-contact\" type=\"button\" class=\"btn btn-primary btn-group-lg btn-large pull-right\" data-target=\"#archive_2017\">Afficher/cacher des documents</button> 
                                                                                                                         
                                                                                                                        
                                                                                                                         <br>
                                                                                                                         <div class=\"headline v3\">
                                                                                                                            <p>Archiver un document</p>
                                                                                                                         </div>
                                                                                                                         
                                                                                                                           <input type=\"file\" id=\"file\">
                                                                                                                           <span class=\"custom-file-control\"></span>
                                                                                                                         
                                                                                                                         <button class=\"btn btn-primary btn-large pull-right\">Enregistrer</button>
                                                                                                                         <br>
                                                                                              </div>
                                                                                          </div>
                      <!-- fin bloc archives -->
                    </div>
                  </div>  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Menu - Info --> 
                  </article>
        
      </div>      
            </div>
            <div class=\"tab-pane fade\" id=\"annonces\">               
                <div class=\"contents\">
              
          <article class=\"section__wrapper\">
                  <!-- Menu - Info -->
            <div class=\"search-interaction row-float\">
              <div  id=\"map-cotnent2\">
                <div class=\"map-search-form row-float\" >
                  <div class=\"container\">
                    <div class=\"row pad-top-large\">
                      <div class=\"form-tab\">
                      <a class=\"active\"  href=\"#form-7\">Créer</a>
                      <a href=\"#form-8\">Modifier</a>
                      <a href=\"#form-9\">Réservations</a>
                      <a href=\"#form-10\">Biens MAD</a>
                      <a href=\"#form-11\">Facturations</a>
                      <a href=\"#form-12\">Paramètres</a>
                      </div>
                    </div>
                    <div class=\"form-content form-cotent-map\">
                      <form class=\"form-1\" id=\"form-7\">
                        <div class=\"row pad-top-large\">
                          <div class=\"col-md-12\" style=\"text-align:left\">
                            <!-- bloc créer une annonce-->
                            
 
                            <!-- fin bloc info créer une annonce -->
                          </div>            
                        </div>
                      </form>  
                      <form class=\"form-1 hidden\" id=\"form-8\">
                        <div class=\"row pad-top-large\">
                          <div class=\"col-md-12\" style=\"text-align:left\">
                            <!-- bloc info -->  
                            Modifier
                            <!-- fin bloc info -->  
                          </div>  
                        </div>
                      </form>
                      <form class=\"form-1 hidden\" id=\"form-9\">
                        <div class=\"row pad-top-large\">
                          <div class=\"col-md-12\" style=\"text-align:left\">
                            <!-- Bbloc réservations -->
                            
                          </div>
                        </div>  
                      </form>
                      <form class=\"form-1 hidden\" id=\"form-10\">
                        <div class=\"row pad-top-large\">
                          <div class=\"col-md-9\" style=\"text-align:left\">
                            <!-- Biens MAD -->
                              
<div class=\"row\">
                <div class=\"col-lg-3\">
                    <h2>Mes annonces</h2>
                </div>
                <div class=\"col-lg-offset-6 col-lg-3\">
                    <a href=\"";
        // line 904
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_ajouter_annonce");
        echo "\" class=\"btn btn-primary btn-large pull-right\">Ajouter une annonce</a>
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
        // line 917
        if ((isset($context["mesannonces"]) || array_key_exists("mesannonces", $context))) {
            // line 918
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mesannonces"]) ? $context["mesannonces"] : $this->getContext($context, "mesannonces")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
                // line 919
                echo "                    <tr>
                        <td>
                            ";
                // line 921
                echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 924
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateCreation", array()), "d/m/Y"), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 927
                if (($this->getAttribute($context["annonce"], "annonceEtat", array()) == "A")) {
                    // line 928
                    echo "                                Publiée
                              ";
                } else {
                    // line 930
                    echo "                                Non publiée
                            ";
                }
                // line 932
                echo "                        </td>
                        <td>
                            <a href=\"";
                // line 934
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_voir_annonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
                echo "\" class=\"iconic iconic-visibility\"></a>
                        </td>
                    </tr>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 938
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
            // line 944
            echo "              ";
        }
        // line 945
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







                            <!-- fin Biens MAD -->
                          </div>            
                        </div>
                      </form>  
                      <form class=\"form-1 hidden\" id=\"form-11\">
                        <div class=\"row pad-top-large\">
                          <div class=\"col-md-9\" style=\"text-align:left\">
                            <!-- bloc info -->
                                                                                                                <p><blockquote class=\"v1\">  
                            JE SUIS PRENEUR
                            </blockquote></p>
                                                                                                                
                            <div class=\"tag-box tag-box-v1\">
                                                                                                                    <h3>Mes devis</h3>
                                                                                                                                            
                                                                                                                <br>
                                                                                                                <div class=\"headline v3 text-center\">
                                                                                                                   <h4>Mes demandes de devis en cours de validation de l’Offreur</h4>
                                                                                                                </div>

                                                                                                                <table id=\"annonce\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                           <thead>
                                   <tr class=\"info\">
                                      <th>N°</th>
                                      <th>Créé</th>
                                      <th>Description</th>
                                      <th>Etat</th>
                                   </tr>
                               </thead>
                            <tbody>
                           ";
        // line 992
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["annonce"]) {
            if (($this->getAttribute($context["annonce"], "reserveEtat", array()) == "A")) {
                // line 993
                echo "                            <tr>
                               <td>
                                   ";
                // line 995
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "
                               </td>
                               <td>
                                       ";
                // line 998
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["annonce"], "annonce", array()), "dateCreation", array()), "d/m/Y"), "html", null, true);
                echo "
                               </td>
                               <td>
                                ";
                // line 1001
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annonce"], "annonce", array()), "description", array()), "html", null, true);
                echo "
                               </td>
                                   
                                    <td>
                                      En attente de validation
                                    </td>
                               <td>
                                   <a href=\"";
                // line 1008
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_voir_annonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
                echo "\" class=\"iconic iconic-visibility\"></a>
                               </td>
                            </tr>
                            ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 1012
            echo "                            <tr class=\"alert alert-info\">
                               <td colspan=\"3\">
                                   <center><strong>Vous n'avez aucun devis !</strong></center>
                               </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1018
        echo "                            </tbody>
                            <tfoot>
                            <tr class=\"info\">
                            <th>N°</th>
                            <th>Créé</th>
                            <th>Description</th>
                            <th>Etat</th>
                            </tr>
                            </tfoot>
                            </table><br><br>

                                                                                                                <div class=\"headline v3 text-center\">                                                                                                                
                                <h4>Mes devis refusés</h4>
                            </div>
                                                                                                                <table id=\"annonce\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                           <thead>
                                   <tr class=\"info\">
                                      <th>N°</th>
                                      <th>Créé</th>
                                      <th>Description</th>
                                      <th>Etat</th>
                                   </tr>
                               </thead>
                            <tbody>
                             ";
        // line 1042
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["annonce"]) {
            if (($this->getAttribute($context["annonce"], "reserveEtat", array()) == "R")) {
                // line 1043
                echo "                              ";
                // line 1044
                echo "                            <tr>
                               <td>
                                   ";
                // line 1046
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "
                               </td>
                               <td>
                                       ";
                // line 1049
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["annonce"], "annonce", array()), "dateCreation", array()), "d/m/Y"), "html", null, true);
                echo "
                               </td>
                               <td>
                                ";
                // line 1052
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annonce"], "annonce", array()), "description", array()), "html", null, true);
                echo "
                               </td>
                                   
                                    <td>
                                      <strong>Dévis refusé</strong>
                                    </td>
                                   
                               <td>
                                   <a href=\"";
                // line 1060
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_voir_annonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
                echo "\" class=\"iconic iconic-visibility\"></a>
                               </td>
                            </tr>
                            ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 1064
            echo "                            <tr class=\"alert alert-info\">
                               <td colspan=\"3\">
                                   <center><strong>Vous n'avez aucun devis refusé!</strong></center>
                               </td>
                            </tr>
                            
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1071
        echo "                            </tbody>
                            <tfoot>
                            <tr class=\"info\">
                            <th>N°</th>
                            <th>Créé</th>
                            <th>Description</th>
                            <th>Etat</th>
                            </tr>
                            </tfoot>
                            </table><br><br>

                                                                                                                <div class=\"headline v3 text-center\">
                                <h4>Mes devis validés</h4>
                            </div>                            

                                                                                                                <table id=\"annonce\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                           <thead>
                                   <tr class=\"info\">
                                      <th>N°</th>
                                      <th>Créé</th>
                                      <th>Description</th>
                                      <th>Etat</th>
                                   </tr>
                               </thead>
                            <tbody>
                             ";
        // line 1096
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["annonce"]) {
            if (($this->getAttribute($context["annonce"], "reserveEtat", array()) == "V")) {
                // line 1097
                echo "                             
                            <tr>
                               <td>
                                   ";
                // line 1100
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "
                               </td>
                               <td>
                                       ";
                // line 1103
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["annonce"], "annonce", array()), "dateCreation", array()), "d/m/Y"), "html", null, true);
                echo "
                               </td>
                               <td>
                                ";
                // line 1106
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annonce"], "annonce", array()), "description", array()), "html", null, true);
                echo "
                               </td>
                                   
                                    <td>
                                      <strong>Dévis validé</strong>
                                    </td>
                                   
                               <td>
                                   <a href=\"";
                // line 1114
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_voir_annonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
                echo "\" class=\"iconic iconic-visibility\"></a>
                               </td>
                            </tr>
                            ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 1118
            echo "                            <tr class=\"alert alert-info\">
                               <td colspan=\"3\">
                                   <center><strong>Vous n'avez aucun devis validé !</strong></center>
                               </td>
                            </tr>
                            
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1125
        echo "                            </tbody>
                            <tfoot>
                            <tr class=\"info\">
                            <th>N°</th>
                            <th>Créé</th>
                            <th>Description</th>
                            <th>Etat</th>
                            </tr>
                            </tfoot>
                            </table><br><br>

                                                                                                                </div>
                                                                                                                <div class=\"tag-box tag-box-v1\">
                            <h3>Mes facturations</h3>
                                                                                                                <br>
                            <div class=\"headline v3 text-center\">
                               <h4>Mes factures à recevoir</h4>
                            </div>

                                                                                                                <table id=\"annonce\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                           <thead>
                                   <tr class=\"info\">
                                      <th>N°</th>
                                      <th>Créé</th>
                                      <th>Description</th>
                                      <th>Etat</th>
                                   </tr>
                               </thead>
                            <tbody>
                            ";
        // line 1154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["annonce"]) {
            if (($this->getAttribute($context["annonce"], "reserveEtat", array()) == "V")) {
                // line 1155
                echo "                            
                            <tr>
                               <td>
                                   ";
                // line 1158
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "
                               </td>
                               <td>
                                           ";
                // line 1161
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["annonce"], "annonce", array()), "dateCreation", array()), "d/m/Y"), "html", null, true);
                echo "
                               </td>
                               <td>
                                   ";
                // line 1164
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annonce"], "annonce", array()), "description", array()), "html", null, true);
                echo "
                               </td>
                               
                                <td> <a class=\"btn btn-success\" href=\"#\"> Consulter la facture</a></td>
                              
                               ";
                // line 1172
                echo "                            </tr>
                            ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 1174
            echo "                            <tr class=\"alert alert-info\">
                               <td colspan=\"3\">
                                   <center><strong>Vous n'avez aucune facture !</strong></center>
                               </td>
                            </tr>
                            
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1181
        echo "                            </tbody>
                            <tfoot>
                            <tr class=\"info\">
                            <th>N°</th>
                            <th>Créé</th>
                            <th>Description</th>
                            <th>Etat</th>
                            </tr>
                            </tfoot>
                            </table><br><br>

                            <div class=\"headline v3 text-center\">
                                <h4>Mes factures archivées</h4>
                            </div>  

                                                                                                                <table id=\"annonce\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                           <thead>
                                   <tr class=\"info\">
                                      <th>N°</th>
                                      <th>Créé</th>
                                      <th>Description</th>
                                      <th>Etat</th>
                                   </tr>
                               </thead>
                            <tbody>
                            ";
        // line 1206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["annonce"]) {
            if (($this->getAttribute($context["annonce"], "reserveEtat", array()) == "V")) {
                // line 1207
                echo "                          
                            <tr>
                               <td>
                                   ";
                // line 1210
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "
                               </td>
                               <td>
                                           ";
                // line 1213
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["annonce"], "annonce", array()), "dateCreation", array()), "d/m/Y"), "html", null, true);
                echo "
                               </td>
                               <td>
                                   ";
                // line 1216
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annonce"], "annonce", array()), "description", array()), "html", null, true);
                echo "
                               </td>
                               
                                <td> <a class=\"btn btn-warning\" href=\"#\"> Archiver la facture</a></td>
                              
                              ";
                // line 1224
                echo "                            </tr>
                            ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 1226
            echo "                            <tr class=\"alert alert-info\">
                               <td colspan=\"3\">
                                   <center><strong>Vous n'avez aucune facture à archiver !</strong></center>
                               </td>
                            </tr>
                            
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1233
        echo "                            </tbody>
                            <tfoot>
                            <tr class=\"info\">
                            <th>N°</th>
                            <th>Créé</th>
                            <th>Description</th>
                            <th>Etat</th>
                            </tr>
                            </tfoot>
                            </table><br><br>
                                                                                                                </div>

                                                                                                                <p><blockquote class=\"v1\">
                            JE SUIS OFFREUR
                            </blockquote></p>
                            
                                                                                                                <div class=\"tag-box tag-box-v1\">
                                                                                                                <p><h3>Mes devis</h3></p>
                                                                                                                <br>
                            <div class=\"headline v3 text-center\">
                                <h4>Mes devis en attente de validation</h4>
                            </div>
                                                                                                                <table id=\"annonce\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                           <thead>
                                   <tr class=\"info\">
                                      <th>N°</th>
                                      <th>Créé</th>
                                      <th>Description</th>
                                      <th>Etat</th>
                                   </tr>
                               </thead>
                            <tbody>
                            ";
        // line 1265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annoncesR"]) ? $context["annoncesR"] : $this->getContext($context, "annoncesR")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["annonceR"]) {
            if (($this->getAttribute($context["annonceR"], "reserveEtat", array()) == "A")) {
                // line 1266
                echo "                            
                            <tr>
                               <td>
                                   ";
                // line 1269
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "
                               </td>
                               <td>
                                       ";
                // line 1272
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["annonceR"], "annonce", array()), "dateCreation", array()), "d/m/Y"), "html", null, true);
                echo "
                               </td>
                               <td>
                                ";
                // line 1275
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annonceR"], "annonce", array()), "description", array()), "html", null, true);
                echo "
                               </td>
                                   
                                    <td>
                                      En attente de validation
                                    </td>
                                   
                               <td>
                                   <a href=\"";
                // line 1283
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_voir_annonce", array("id" => $this->getAttribute($context["annonceR"], "id", array()))), "html", null, true);
                echo "\" class=\"iconic iconic-visibility\"></a>
                               </td>
                            </tr>
                            ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 1287
            echo "                            <tr class=\"alert alert-info\">
                               <td colspan=\"3\">
                                   <center><strong>Vous n'avez aucun devis en attente de validation !</strong></center>
                               </td>
                            </tr>
                            
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['annonceR'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1294
        echo "                            </tbody>
                            <tfoot>
                            <tr class=\"info\">
                            <th>N°</th>
                            <th>Créé</th>
                            <th>Description</th>
                            <th>Etat</th>
                            </tr>
                            </tfoot>
                            </table><br><br>

  
                                                                                                                <div class=\"headline v3 text-center\">                                                                                                                
                                <h4>Mes devis refusés</h4>
                            </div>
                                                                                                                <table id=\"annonce\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                           <thead>
                                   <tr class=\"info\">
                                  <th>N°</th>
                                  <th>Créé</th>
                                  <th>Description</th>
                                  <th>Etat</th>
                                   </tr>
                               </thead>
                            <tbody>
                             ";
        // line 1319
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annoncesR"]) ? $context["annoncesR"] : $this->getContext($context, "annoncesR")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["annonceR"]) {
            if (($this->getAttribute($context["annonceR"], "reserveEtat", array()) == "R")) {
                // line 1320
                echo "                            
                            <tr>
                               <td>
                                   ";
                // line 1323
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "
                               </td>
                               <td>
                                       ";
                // line 1326
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["annonceR"], "annonce", array()), "dateCreation", array()), "d/m/Y"), "html", null, true);
                echo "
                               </td>
                               <td>
                                ";
                // line 1329
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annonceR"], "annonce", array()), "description", array()), "html", null, true);
                echo "
                               </td>
                                   
                                    <td>
                                      <strong>Dévis refusé</strong>
                                    </td>
                                   
                               <td>
                                   <a href=\"";
                // line 1337
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_voir_annonce", array("id" => $this->getAttribute($context["annonceR"], "id", array()))), "html", null, true);
                echo "\" class=\"iconic iconic-visibility\"></a>
                               </td>ter</a>
                            </tr>
                            ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 1341
            echo "                            <tr class=\"alert alert-info\">
                               <td colspan=\"3\">
                                   <center><strong>Vous n'avez aucun devis refusé !</strong></center>
                               </td>
                            </tr>
                            
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['annonceR'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1348
        echo "                            </tbody>
                            <tfoot>
                            <tr class=\"info\">
                            <th>N°</th>
                            <th>Créé</th>
                            <th>Description</th>
                            <th>Etat</th>
                            </tr>
                            </tfoot>
                            </table><br><br>


                            <div class=\"headline v3 text-center\">
                                <h4>Mes devis validés</h4>
                            </div>
                                                                                                                <table id=\"annonce\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                           <thead>
                                   <tr class=\"info\">
                                      <th>N°</th>
                                      <th>Créé</th>
                                      <th>Description</th>
                                      <th>Etat</th>
                                   </tr>
                               </thead>
                            <tbody>
                           ";
        // line 1373
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annoncesR"]) ? $context["annoncesR"] : $this->getContext($context, "annoncesR")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["annonceR"]) {
            if (($this->getAttribute($context["annonceR"], "reserveEtat", array()) == "V")) {
                // line 1374
                echo "                           
                            <tr>
                               <td>
                                   ";
                // line 1377
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "
                               </td>
                               <td>
                                       ";
                // line 1380
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["annonceR"], "annonce", array()), "dateCreation", array()), "d/m/Y"), "html", null, true);
                echo "
                               </td>
                               <td>
                                ";
                // line 1383
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annonceR"], "annonce", array()), "description", array()), "html", null, true);
                echo "
                               </td>
                                   
                                    <td>
                                     <strong>Dévis validé</strong>
                                    </td>
                                   
                               <td>
                                   <a href=\"";
                // line 1391
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_voir_annonce", array("id" => $this->getAttribute($context["annonceR"], "id", array()))), "html", null, true);
                echo "\" class=\"iconic iconic-visibility\"></a>
                               </td>
                            </tr>
                            ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 1395
            echo "                            <tr class=\"alert alert-info\">
                               <td colspan=\"3\">
                                   <center><strong>Vous n'avez aucun devis validé !</strong></center>
                               </td>
                            </tr>
                            
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['annonceR'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1402
        echo "                            </tbody>
                            <tfoot>
                            <tr class=\"info\">
                            <th>N°</th>
                            <th>Créé</th>
                            <th>Description</th>
                            <th>Etat</th>
                            </tr>
                            </tfoot>
                            </table><br><br>
 
                                                                                                                </div>

                                                                                                                <div class=\"tag-box tag-box-v1\">
                            <h3>Mes facturations</h3>

                            <div class=\"headline v3 text-center\">
                                <h4>Mes factures à établir</h4>
                            </div>
                                                                                                          <table id=\"annonce\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                           <thead>
                                   <tr class=\"info\">
                                      <th>N°</th>
                                      <th>Créé</th>
                                      <th>Description</th>
                                      <th>Etat</th>
                                   </tr>
                               </thead>
                            <tbody>
                            ";
        // line 1431
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annoncesR"]) ? $context["annoncesR"] : $this->getContext($context, "annoncesR")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["annonceR"]) {
            if (($this->getAttribute($context["annonceR"], "reserveEtat", array()) == "V")) {
                // line 1432
                echo "                             
                            <tr>
                               <td>
                                   ";
                // line 1435
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "
                               </td>
                               <td>
                                           ";
                // line 1438
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["annonceR"], "annonce", array()), "dateCreation", array()), "d/m/Y"), "html", null, true);
                echo "
                               </td>
                               <td>
                                   ";
                // line 1441
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annonceR"], "annonce", array()), "description", array()), "html", null, true);
                echo "
                               </td>
                               
                                <td> <a class=\"btn btn-success\" href=\"#\"> Génerer la pré-facture </a></td>
                              
                               ";
                // line 1449
                echo "                            </tr>
                            ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 1451
            echo "                            <tr class=\"alert alert-info\">
                               <td colspan=\"3\">
                                   <center><strong>Vous n'avez aucune facture !</strong></center>
                               </td>
                            </tr>
                            
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['annonceR'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1458
        echo "                            </tbody>
                            <tfoot>
                            <tr class=\"info\">
                            <th>N°</th>
                            <th>Créé</th>
                            <th>Description</th>
                            <th>Etat</th>
                            </tr>
                            </tfoot>
                            </table><br><br>


                            <div class=\"headline v3 text-center\">
                                <h4>Mes factures envoyées</h4>
                            </div>
                                                                                                                <table id=\"annonce\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                           <thead>
                                   <tr class=\"info\">
                                      <th>N°</th>
                                      <th>Créé</th>
                                      <th>Description</th>
                                      <th>Etat</th>
                                   </tr>
                               </thead>
                            <tbody>
                            ";
        // line 1483
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annoncesR"]) ? $context["annoncesR"] : $this->getContext($context, "annoncesR")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["annonceR"]) {
            if (($this->getAttribute($context["annonceR"], "reserveEtat", array()) == "V")) {
                // line 1484
                echo "                              
                            <tr>
                               <td>
                                   ";
                // line 1487
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "
                               </td>
                               <td>
                                           ";
                // line 1490
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["annonceR"], "annonce", array()), "dateCreation", array()), "d/m/Y"), "html", null, true);
                echo "
                               </td>
                               <td>
                                   ";
                // line 1493
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annonceR"], "annonce", array()), "description", array()), "html", null, true);
                echo "
                               </td>
                               
                                <td> <a class=\"btn btn-warning\" href=\"#\"> Archiver la facture </a></td>
                              
                               ";
                // line 1501
                echo "                           </tr>
                            ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 1503
            echo "                            <tr class=\"alert alert-info\">
                               <td colspan=\"3\">
                                   <center><strong>Vous n'avez aucune facture !</strong></center>
                               </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['annonceR'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1509
        echo "                            </tbody>
                            <tfoot>
                            <tr class=\"info\">
                            <th>N°</th>
                            <th>Créé</th>
                            <th>Description</th>
                            <th>Etat</th>
                            </tr>
                            </tfoot>
                            </table><br><br>
                                                                                                                </div>  
                            <!-- fin bloc facturation --> 
                          </div>  
                        </div>
                      </form>
                      <form class=\"form-1 hidden\" id=\"form-12\">
                        <div class=\"row pad-top-large\">
                          <div class=\"col-md-12\" style=\"text-align:left\">
                            <!-- Bloc paramètres -->
                                                                                                            <br><br>
                                                                                                            <div class=\"col-md-9\">
                                                                                                                       <div class=\"tag-box tag-box-v2\">
                                                                                                                         Attention, vous ne devez pas dépasser votre budget annuel lors des réservations des produits disponibles en location.</br>
                                                                                                                         Toute location entraînant un dépassement du budget prévisionnel nécessitera le téléchargement des documents nécessaires à la justification.</br>
                                                                                                                         Notre service juridique se fera un plaisir de vous assister pour compléter votre dossier.
                                                                                                                          Vos documents téléchargés sont accessibles ici :</br> 
                                                                                                                         - <a href=\"";
        // line 1535
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lsi_market_homepage");
        echo "\">Budget annuelle achat entre EPCI</a></br>
                                                                                                                         - <a href=\"";
        // line 1536
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lsi_market_homepage");
        echo "\">Décision légale sur la gestion des biens publics</a>
 
                                                                                                                       </div>
                                                                                                           </div>                               
                                                                                                         <div class=\"widget widget-newsletter\">
                             <div class=\"col-md-4\">
                             <h4>Gestion du budget annuel d'achat</h4>
                               <div class=\"form-content newsletter-sidebar\">
                                 ";
        // line 1544
        if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "mairie", array()), "budgetInitial", array()))) {
            // line 1545
            echo "                                    <div class=\"row\">
                                      <div class=\"form-group\">
                                         <p><span class=\"alert alert-info\">Budget annuel : ";
            // line 1547
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "mairie", array()), "budgetInitial", array()), "html", null, true);
            echo " €</span></p>
                                      </div>
                                      <div class=\"form-group\">
                                         <p><span class=\"alert alert-info\">Budget restant : ";
            // line 1550
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "mairie", array()), "budgetRestant", array()), "html", null, true);
            echo " €</span></p>
                                      </div>
                                    
                                      <div class=\"form-group\">
                                         <p><span class=\"alert alert-info\">Vous avez déjà définit un budget </span></p>
                                      </div>
                                 </div>  
                               ";
        } else {
            // line 1558
            echo "                                 <form method=\"POST\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_mon_espace");
            echo "\">
                                     <div class=\"form-group\">
                                         <input type=\"text\" placeholder=\"Budget annuel\" name=\"budget\" id=\"budget\" class=\"form-control input-lg\" required>
                                     </div>
                                     <div class=\"row\">
                                         ";
            // line 1563
            if (((isset($context["erreur"]) || array_key_exists("erreur", $context)) && ((isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur")) != ""))) {
                // line 1564
                echo "                                             ";
                echo twig_escape_filter($this->env, (isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur")), "html", null, true);
                echo "
                                         ";
            }
            // line 1566
            echo "                                     </div>
                                      <div class=\"form-group\">
                                        <input type=\"submit\" value=\"Valider\" name=\"val\" id=\"val\" class=\"pull-right btn btn-info\" />
                                      </div>
                                      <div class=\"form-messges hidden\">
                                      </div>
                                 </form>
                               ";
        }
        // line 1573
        echo "       
                              </div>
                                                                                                                     
                             </div>                                                                                                                 
                           
                           <div class=\"col-md-5\">
                               <h4>Gestion des prix avant MAD</h4>
                               <div class=\"form-content newsletter-sidebar\">
                                 <form data-parsley-validate>
                                  <div class=\"form-group\">
                                    <input type=\"text\" placeholder=\"Remise pour mon EPCI : 40%\" name=\"name\" class=\"form-control input-lg\" required>
                                  </div>
                                  <div class=\"form-group\">
                                    <input type=\"text\" placeholder=\"Remise pour les associations de mon EPCI : 15%\" name=\"email\" class=\"form-control input-lg\" required>
                                  </div>
                                  <div class=\"form-group\">
                                    <button class=\"pull-right btn btn-info\">Valider</button>
                                  </div>
                                  <div class=\"form-messges hidden\">         
                                  </div>
                                </form>       
                              </div>
                           </div>
  
                                                                                                         <div class=\"col-md-9\" style=\"margin-top:20px\">
                                                                                                            <div class=\"headline v3 text-center\"><h4>Gestion des CGU / CGV / Assurances</h4></div></br>
                                                                                                            <p><a href=\"#\">Conditions d'utilisations</a> <button id=\"bt-contact\" type=\"button\" class=\"pull-right btn btn-default btn-xs\" data-target=\"#cgu\">Modifier</button></p>
                                                                                                             <div id=\"cgu\" class=\"tohide\">
                                                                                                             <input type=\"file\" id=\"file\">
                                                                                                                  <span class=\"custom-file-control\"></span>
                                                                                                                  <button class=\"btn btn-primary btn-large pull-right\">Enregistrer</button>
                                                                                                                         <br>
                                                                                                             </div>
                                                                                                            <p><a href=\"#\">Conditions de vente</a> <button class=\"pull-right btn btn-default btn-xs\">Modifier</button></p>
                                                                                                            <p><a href=\"#\">Contrat d'assurance</a> <button class=\"pull-right btn btn-default btn-xs\">Modifier</button></p>
                                                                                                         </div>


                                                                                                         <div class=\"col-md-9\" style=\"margin-top:20px\">
                                                                                                            <div class=\"headline v3 text-center\"><h4>Planning global des biens</h4></div></br>
                                                                                                         <div> 

                            <!-- fin bloc paramètres -->
                          </div>
                        </div>  
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Menu - Info --> 
          </article>
        
                </div>                 
            </div>

            <div class=\"tab-pane fade\" id=\"syntese\">               
        <div class=\"contents\">
          <article class=\"section__wrapper\">
          <!-- Menu - Info -->
            <div class=\"search-interaction row-float\">
              <div  id=\"map-cotnent2\">
                <div class=\"map-search-form row-float\" >
                  <div class=\"container\">
                    <div class=\"row pad-top-large\">
                      <div class=\"form-tab\">
                      <a class=\"active\"  href=\"#form-17\">TDB</a>
                      <a href=\"#form-18\">Synthèse</a>
                      </div>
                    </div>
                    <div class=\"form-content form-cotent-map\">
                      <form class=\"form-1\" id=\"form-17\">
                        <div class=\"row pad-top-large\">
                          <div class=\"col-md-12\" style=\"text-align:left\">
                            <!-- bloc TDB -->
                            
                                                                                                                        <br>
                              <div class=\"col-md-9\"
                               <div class=\"kt-pagebody\">
                               
                                  <div class=\"row row-sm\">
                                    <div class=\"col-lg-4\">
                                    <div class=\"card pd-20\">
                                      <h6 class=\"tx-12 tx-uppercase tx-inverse tx-bold mg-b-15\">Rapport de location</h6>
                                      <div class=\"d-flex mg-b-10\">
                                      <div class=\"bd-r pd-r-10\">
                                        <label class=\"tx-12\">Aujourd'hui</label>
                                        <p class=\"tx-lato tx-inverse tx-bold\">1,898</p>
                                      </div>
                                      <div class=\"bd-r pd-x-10\">
                                        <label class=\"tx-12\">Semaine</label>
                                        <p class=\"tx-lato tx-inverse tx-bold\">32,112</p>
                                      </div>
                                      <div class=\"pd-l-10\">
                                        <label class=\"tx-12\">Mois</label>
                                        <p class=\"tx-lato tx-inverse tx-bold\">72,067</p>
                                      </div>
                                      </div><!-- d-flex -->
                                      <div class=\"progress mg-b-10\">
                                      <div class=\"progress-bar wd-50p\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">50%</div>
                                      </div>
                                      <p class=\"tx-12 mg-b-0\">Maecenas tempus, tellus eget condimentum rhoncus</p>
                                    </div><!-- card -->
                                    </div><!-- col-4 -->
                                    <div class=\"col-lg-4 mg-t-20 mg-lg-t-0\">
                                    <div class=\"card pd-20 bg-app-primary bd-0 tx-white-6\">
                                      <h6 class=\"tx-12 tx-uppercase tx-white mg-b-15\">Rapport de MAD</h6>
                                      <div class=\"d-flex mg-b-10\">
                                      <div class=\"bd-r bd-white-2 pd-r-10\">
                                        <label class=\"tx-12\">Aujourd'hui</label>
                                        <p class=\"tx-lato tx-white tx-bold\">1,898</p>
                                      </div>
                                      <div class=\"bd-r bd-white-2 pd-x-10\">
                                        <label class=\"tx-12\">Semaine</label>
                                        <p class=\"tx-lato tx-white tx-bold\">32,112</p>
                                      </div>
                                      <div class=\"pd-l-10\">
                                        <label class=\"tx-12\">Mois</label>
                                        <p class=\"tx-lato tx-white tx-bold\">72,067</p>
                                      </div>
                                      </div><!-- d-flex -->
                                      <div class=\"progress bg-white-2 mg-b-10\">
                                      <div class=\"progress-bar bg-warning wd-50p\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">50%</div>
                                      </div>
                                      <p class=\"tx-12 mg-b-0\">Maecenas tempus, tellus eget condimentum rhoncus</p>
                                    </div><!-- card -->
                                    </div><!-- col-4 -->
                                    <div class=\"col-lg-4 mg-t-20 mg-lg-t-0\">
                                    <div class=\"card pd-20 bg-dark bd-0 tx-white-6\">
                                      <h6 class=\"tx-12 tx-uppercase tx-white mg-b-15\">Rapport des stocks</h6>
                                      <div class=\"d-flex mg-b-10\">
                                      <div class=\"bd-r bd-white-2 pd-r-10\">
                                        <label class=\"tx-12\">Aujourd'hui</label>
                                        <p class=\"tx-lato tx-white tx-bold\">1,898</p>
                                      </div>
                                      <div class=\"bd-r bd-white-2 pd-x-10\">
                                        <label class=\"tx-12\">Semaine</label>
                                        <p class=\"tx-lato tx-white tx-bold\">32,112</p>
                                      </div>
                                      <div class=\"pd-l-10\">
                                        <label class=\"tx-12\">Mois</label>
                                        <p class=\"tx-lato tx-white tx-bold\">72,067</p>
                                      </div>
                                      </div><!-- d-flex -->
                                      <div class=\"progress bg-white-2 mg-b-10\">
                                      <div class=\"progress-bar bg-info  wd-50p\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">50%</div>
                                      </div>
                                      <p class=\"tx-12 mg-b-0\">Maecenas tempus, tellus eget condimentum rhoncus</p>
                                    </div><!-- card -->
                                    </div><!-- col-4 -->
                                  </div><!-- row -->

                                  <div class=\"row row-sm mg-t-20\">
                                    <div class=\"col-xl-8\">
                                    <div class=\"card bd-gray-300\">
                                      <div class=\"card-header bg-gray-100 pd-y-15 pd-x-20\">
                                      <h6 class=\"card-title tx-uppercase tx-12 mg-b-0\">Historique des transactions</h6>
                                      </div><!-- card-header -->
                                      <div class=\"table-responsive\">
                                      <table class=\"table table-white mg-b-0 tx-12\">
                                        <tbody>
                                        <tr>
                                          <td class=\"pd-l-20 tx-center\">
                                          <img src=\"";
        // line 1737
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/img1.jpg"), "html", null, true);
        echo "\"  class=\"wd-36 rounded-circle\" alt=\"Image\">
                                          </td>
                                          <td>
                                          <a href=\"\" class=\"tx-inverse tx-14 tx-medium d-block\">Mark K. Peters</a>
                                          <span class=\"tx-11 d-block\">EPCI: Paris</span>
                                          </td>
                                          <td class=\"tx-12\">
                                          <span class=\"square-8 bg-success mg-r-5 rounded-circle\"></span> Attente de validation
                                          </td>
                                          <td>Just Now</td>
                                        </tr>
                                        <tr>
                                          <td class=\"pd-l-20 tx-center\">
                                          <img src=\"";
        // line 1750
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/img2.jpg"), "html", null, true);
        echo "\"  class=\"wd-36 rounded-circle\" alt=\"Image\">
                                          </td>
                                          <td>
                                          <a href=\"\" class=\"tx-inverse tx-14 tx-medium d-block\">Karmen F. Brown</a>
                                          <span class=\"tx-11 d-block\">EPCI: IDF</span>
                                          </td>
                                          <td class=\"tx-12\">
                                          <span class=\"square-8 bg-warning mg-r-5 rounded-circle\"></span> Attente verification
                                          </td>
                                          <td>Apr 21, 2017 8:34am</td>
                                        </tr>
                                        <tr>
                                          <td class=\"pd-l-20 tx-center\">
                                          <img src=\"";
        // line 1763
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/img3.jpg"), "html", null, true);
        echo "\"  class=\"wd-36 rounded-circle\" alt=\"Image\">
                                          </td>
                                          <td>
                                          <a href=\"\" class=\"tx-inverse tx-14 tx-medium d-block\">Gorgonio Magalpok</a>
                                          <span class=\"tx-11 d-block\">EPCI: Toulouse</span>
                                          </td>
                                          <td class=\"tx-12\">
                                          <span class=\"square-8 bg-success mg-r-5 rounded-circle\"></span> Retour réalisé
                                          </td>
                                          <td>Apr 10, 2017 4:40pm</td>
                                        </tr>
                                        <tr>
                                          <td class=\"pd-l-20 tx-center\">
                                          <img src=\"";
        // line 1776
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/img5.jpg"), "html", null, true);
        echo "\"  class=\"wd-36 rounded-circle\" alt=\"Image\">
                                          </td>
                                          <td>
                                          <a href=\"\" class=\"tx-inverse tx-14 tx-medium d-block\">Ariel T. Hall</a>
                                          <span class=\"tx-11 d-block\">EPCI: IDF</span>
                                          </td>
                                          <td class=\"tx-12\">
                                          <span class=\"square-8 bg-warning mg-r-5 rounded-circle\"></span>Paiement en attente
                                          </td>
                                          <td>Apr 02, 2017 6:45pm</td>
                                        </tr>
                                        <tr>
                                          <td class=\"pd-l-20 tx-center\">
                                          <img src=\"";
        // line 1789
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/img4.jpg"), "html", null, true);
        echo "\"  class=\"wd-36 rounded-circle\" alt=\"Image\">
                                          </td>
                                          <td>
                                          <a href=\"\" class=\"tx-inverse tx-14 tx-medium d-block\">John L. Goulette</a>
                                          <span class=\"tx-11 d-block\">EPCI: Nante</span>
                                          </td>
                                          <td class=\"tx-12\">
                                          <span class=\"square-8 bg-pink mg-r-5 rounded-circle\"></span> Paiement validée
                                          </td>
                                          <td>Mar 30, 2017 10:30am</td>
                                        </tr>
                                        <tr>
                                          <td class=\"pd-l-20 tx-center\">
                                          <img src=\"";
        // line 1802
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/img5.jpg"), "html", null, true);
        echo "\"  class=\"wd-36 rounded-circle\" alt=\"Image\">
                                          </td>
                                          <td>
                                          <a href=\"\" class=\"tx-inverse tx-14 tx-medium d-block\">John L. Goulette</a>
                                          <span class=\"tx-11 d-block\">EPCI: Auxerre</span>
                                          </td>
                                          <td class=\"tx-12\">
                                          <span class=\"square-8 bg-pink mg-r-5 rounded-circle\"></span> Demande annulée
                                          </td>
                                          <td>Mar 30, 2017 10:30am</td>
                                        </tr>
                                        </tbody>
                                      </table>
                                      </div><!-- table-responsive -->
                                      <div class=\"card-footer tx-12 pd-y-15 bd-gray-300 bd-t\">
                                      <a href=\"\"><i class=\"fa fa-angle-down mg-r-5\"></i>Historique des transactions</a>
                                      </div><!-- card-footer -->
                                    </div><!-- card -->

                                    <div class=\"row row-sm mg-t-20\">
                                      <div class=\"col-sm-6\">
                                      <div class=\"card\">
                                        <div class=\"card-body pd-b-0\">
                                        <h6 class=\"card-body-title tx-12 tx-spacing-2 mg-b-20 tx-success\">Annonces MAD</h6>
                                        <h2 class=\"tx-lato tx-inverse\">4</h2>
                                        <p class=\"tx-12\"><span class=\"tx-success\">2.5%</span> d'équipement en location </p>
                                        </div><!-- card-body -->
                                        <div id=\"rs1\" class=\"ht-50 ht-sm-70 mg-r--1\"></div>
                                      </div><!-- card -->
                                      </div><!-- col-6 -->
                                      <div class=\"col-sm-6 mg-t-20 mg-sm-t-0\">
                                      <div class=\"card\">
                                        <div class=\"card-body pd-b-0\">
                                        <h6 class=\"card-body-title tx-12 tx-spacing-2 mg-b-20 tx-danger\">En attente de location</h6>
                                        <h2 class=\"tx-lato tx-inverse\">12</h2>
                                        <p class=\"tx-12\"><span class=\"tx-success\">2.5%</span> de location en moins de 24H00</p>
                                        </div><!-- card-body -->
                                        <div id=\"rs2\" class=\"ht-50 ht-sm-70 mg-r--1\"></div>
                                      </div><!-- card -->
                                      </div><!-- col-6 -->
                                      <div class=\"col-sm-6 mg-t-20\">
                                      <div class=\"card\">
                                        <div class=\"card-body pd-b-0\">
                                        <h6 class=\"card-body-title tx-12 tx-spacing-2 mg-b-20 tx-info\">En attente de paiement</h6>
                                        <h2 class=\"tx-lato tx-inverse\">4</h2>
                                        <p class=\"tx-12\"><span class=\"tx-success\">2.5%</span> de paiement en 72 heures</p>
                                        </div><!-- card-body -->
                                        <div id=\"rs3\" class=\"ht-50 ht-sm-70 mg-r--1\"></div>
                                      </div><!-- card -->
                                      </div><!-- col-6 -->
                                      <div class=\"col-sm-6 mg-t-20\">
                                      <div class=\"card\">
                                        <div class=\"card-body pd-b-0\">
                                        <h6 class=\"card-body-title tx-12 tx-spacing-2 mg-b-20 tx-primary\">Annulées</h6>
                                        <h2 class=\"tx-lato tx-inverse\">5</h2>
                                        <p class=\"tx-12\"><span class=\"tx-success\">2.5%</span> d'annulation automatique</p>
                                        </div><!-- card-body -->
                                        <div id=\"rs4\" class=\"ht-50 ht-sm-70 mg-r--1\"></div>
                                      </div><!-- card -->
                                      </div><!-- col-6 -->
                                    </div><!-- row -->

                                    

                                    </div><!-- col-8 -->
                                    <div class=\"col-xl-4 mg-t-20\">


                                    <div class=\"card bd-0\">
                                      <div id=\"map1\"></div>
                                     
                                    </div><!-- card -->

                                    <div class=\"card mg-t-20\">
                                      <div class=\"card-header d-flex justify-content-between\">
                                      <span class=\"tx-uppercase tx-12 tx-medium tx-inverse\">Derniers échanges</span>
                                      <a href=\"\" class=\"tx-gray-600\"><i class=\"icon ion-more\"></i></a>
                                      </div><!-- card-header -->
                                      <div class=\"list-group list-group-flush\">
                                      <div class=\"list-group-item\">
                                        <div class=\"media\">
                                        <img src=\"";
        // line 1883
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/img1.jpg"), "html", null, true);
        echo "\"  class=\"wd-30 rounded-circle\" alt=\"\">
                                        <div class=\"media-body mg-l-10\">
                                          <h6 class=\"mg-b-0 tx-inverse tx-13\">Katherine Lumaad</h6>
                                          <p class=\"mg-b-0 tx-gray-500 tx-12\">an hour ago</p>
                                        </div><!-- media-body -->
                                        </div><!-- media -->
                                        <p class=\"mg-t-10 mg-b-0 tx-13\">The European languages are members of the same family. Their separate existence is a myth...</p>
                                      </div><!-- list-group-item -->
                                      <div class=\"list-group-item\">
                                        <div class=\"media\">
                                        <img src=\"";
        // line 1893
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/img2.jpg"), "html", null, true);
        echo "\"  class=\"wd-30 rounded-circle\" alt=\"\">
                                        <div class=\"media-body mg-l-10\">
                                          <h6 class=\"mg-b-0 tx-inverse tx-13\">Mary Grace Ceballos</h6>
                                          <p class=\"mg-b-0 tx-gray-500 tx-12\">2 hours ago</p>
                                        </div><!-- media-body -->
                                        </div><!-- media -->
                                        <p class=\"mg-t-10 mg-b-0 tx-13\">The European languages are members of the same family. Their separate existence is a myth...</p>
                                      </div><!-- list-group-item -->
                                      <div class=\"list-group-item\">
                                        <div class=\"media\">
                                        <img src=\"";
        // line 1903
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/img4.jpg"), "html", null, true);
        echo "\"  class=\"wd-30 rounded-circle\" alt=\"\">
                                        <div class=\"media-body mg-l-10\">
                                          <h6 class=\"mg-b-0 tx-inverse tx-13\">Rowella Sombrio</h6>
                                          <p class=\"mg-b-0 tx-gray-500 tx-12\">3 hours ago</p>
                                        </div><!-- media-body -->
                                        </div><!-- media -->
                                        <p class=\"mg-t-10 mg-b-0 tx-13\">The European languages are members of the same family. Their separate existence is a myth...</p>
                                      </div><!-- list-group-item -->
                                      </div><!-- list-group -->
                                      <div class=\"card-footer\">
                                      <a href=\"\" class=\"tx-12\"><i class=\"fa fa-angle-down mg-r-5\"></i> Show all messages</a>
                                      </div><!-- card-footer -->
                                    </div><!-- card -->
                                    </div>

                            <!-- fin bloc TDB -->
                          </div>            
                        </div>
                      </form>  
                      <form class=\"form-1 hidden\" id=\"form-18\">
                        <div class=\"row pad-top-large\">
                          <div class=\"col-md-12\" style=\"text-align:left\">
                            <!-- bloc info -->  
                            Etat de synthèse
                            <!-- fin bloc info -->  
                          </div>  
                        </div>
                      </form>             
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- Menu - Info -->
          </article>
        </div>      
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- Properties description // -->
    
    
  </div>
</section>
<!-- Page layout // -->


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1955
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1956
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/js/vendor/vendor.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 1957
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/js/main.js"), "html", null, true);
        echo "\"></script> 
<script type=\"text/javascript\" src=\"";
        // line 1958
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/js/select.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">

\$(\".tohide\").hide();
\$(\".btn-group-lg\").on(\"click\", function() {
  var target = \$(this).data(\"target\");
  if(target!==undefined) {
    \$(target).toggle();
      \$(this).toggleClass(\"active\",\$(target).is(\":visible\"));
  }
});

</script>   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "LSIMarketBundle::monespace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2721 => 1958,  2717 => 1957,  2712 => 1956,  2703 => 1955,  2643 => 1903,  2630 => 1893,  2617 => 1883,  2533 => 1802,  2517 => 1789,  2501 => 1776,  2485 => 1763,  2469 => 1750,  2453 => 1737,  2287 => 1573,  2277 => 1566,  2271 => 1564,  2269 => 1563,  2260 => 1558,  2249 => 1550,  2243 => 1547,  2239 => 1545,  2237 => 1544,  2226 => 1536,  2222 => 1535,  2194 => 1509,  2183 => 1503,  2176 => 1501,  2168 => 1493,  2162 => 1490,  2156 => 1487,  2151 => 1484,  2145 => 1483,  2118 => 1458,  2106 => 1451,  2099 => 1449,  2091 => 1441,  2085 => 1438,  2079 => 1435,  2074 => 1432,  2068 => 1431,  2037 => 1402,  2025 => 1395,  2015 => 1391,  2004 => 1383,  1998 => 1380,  1992 => 1377,  1987 => 1374,  1981 => 1373,  1954 => 1348,  1942 => 1341,  1932 => 1337,  1921 => 1329,  1915 => 1326,  1909 => 1323,  1904 => 1320,  1898 => 1319,  1871 => 1294,  1859 => 1287,  1849 => 1283,  1838 => 1275,  1832 => 1272,  1826 => 1269,  1821 => 1266,  1815 => 1265,  1781 => 1233,  1769 => 1226,  1762 => 1224,  1754 => 1216,  1748 => 1213,  1742 => 1210,  1737 => 1207,  1731 => 1206,  1704 => 1181,  1692 => 1174,  1685 => 1172,  1677 => 1164,  1671 => 1161,  1665 => 1158,  1660 => 1155,  1654 => 1154,  1623 => 1125,  1611 => 1118,  1601 => 1114,  1590 => 1106,  1584 => 1103,  1578 => 1100,  1573 => 1097,  1567 => 1096,  1540 => 1071,  1528 => 1064,  1518 => 1060,  1507 => 1052,  1501 => 1049,  1495 => 1046,  1491 => 1044,  1489 => 1043,  1483 => 1042,  1457 => 1018,  1446 => 1012,  1436 => 1008,  1426 => 1001,  1420 => 998,  1414 => 995,  1410 => 993,  1404 => 992,  1355 => 945,  1352 => 944,  1341 => 938,  1332 => 934,  1328 => 932,  1324 => 930,  1320 => 928,  1318 => 927,  1312 => 924,  1306 => 921,  1302 => 919,  1296 => 918,  1294 => 917,  1278 => 904,  1186 => 815,  1182 => 814,  1177 => 812,  1173 => 811,  1168 => 809,  1142 => 786,  1138 => 785,  1134 => 784,  1130 => 783,  1125 => 781,  1121 => 780,  1116 => 778,  1112 => 777,  1087 => 755,  1083 => 754,  1078 => 752,  1074 => 751,  1057 => 737,  990 => 673,  974 => 660,  842 => 531,  835 => 527,  824 => 519,  818 => 516,  807 => 508,  801 => 505,  790 => 497,  784 => 494,  767 => 480,  761 => 477,  750 => 469,  744 => 466,  726 => 451,  720 => 448,  708 => 439,  702 => 436,  692 => 429,  686 => 426,  669 => 412,  663 => 409,  652 => 401,  646 => 398,  635 => 390,  629 => 387,  618 => 379,  612 => 376,  592 => 359,  589 => 358,  585 => 355,  572 => 296,  543 => 270,  529 => 259,  515 => 248,  502 => 238,  478 => 217,  464 => 206,  450 => 195,  436 => 184,  420 => 171,  416 => 169,  412 => 167,  404 => 164,  400 => 163,  397 => 162,  394 => 161,  388 => 158,  384 => 157,  381 => 156,  378 => 155,  372 => 152,  368 => 151,  365 => 150,  362 => 149,  356 => 146,  352 => 145,  349 => 144,  346 => 143,  340 => 140,  336 => 139,  333 => 138,  330 => 137,  324 => 134,  320 => 133,  317 => 132,  314 => 131,  310 => 129,  308 => 128,  303 => 126,  299 => 125,  293 => 122,  289 => 121,  285 => 119,  279 => 116,  275 => 115,  269 => 112,  265 => 111,  262 => 110,  260 => 109,  255 => 107,  251 => 106,  245 => 103,  241 => 102,  235 => 99,  231 => 98,  228 => 97,  226 => 96,  223 => 95,  217 => 92,  213 => 91,  210 => 90,  206 => 88,  204 => 87,  160 => 46,  144 => 33,  140 => 32,  136 => 31,  132 => 30,  128 => 29,  124 => 27,  106 => 26,  103 => 25,  94 => 24,  83 => 21,  80 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  63 => 14,  60 => 13,  57 => 12,  55 => 11,  52 => 10,  43 => 9,  11 => 1,);
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

{# Variables :
    
    annonce et annonceR : accessible à uniquement à l'intérieur des boubles for dans lesquelles elles sont définies
    
#}

{% block volet %}
    {% if not app.user %}
        {#{{ render(controller(\"LSIMarketBundle:Market:index\")) }}#}
    {% elseif app.user.hasRole('ROLE_PART') %}
        {% include 'LSIMarketBundle::layout_administre.html.twig' %}
        {#{{ render(controller(\"LSIMarketBundle:Espace:administreIndex\")) }}#}
    {% elseif app.user.hasRole('ROLE_MAIRIE') %}
        {% include 'LSIMarketBundle::layout_mairie.html.twig' %}
    {% elseif app.user.hasRole('ROLE_ADMIN') %}
        {% include 'LSIMarketBundle::layout_admin.html.twig' %}
    {% elseif app.user.hasRole('ROLE_SUPER_ADMIN') %}
        {% include 'LSIMarketBundle::layout_superadmin.html.twig' %}
    {% endif %}
{% endblock volet %}

{% block body %}

    {% block monespace %}

<!-- Page layout -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/lsimarket/css/katniss.css') }}\">
     <link href=\"{{ asset('bundles/lsimarket/css/Ionicons/css/font-awesome.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/lsimarket/css/Ionicons/css/ionicons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/lsimarket/css/perfect-scrollbar.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/lsimarket/css/rickshaw/rickshaw.min.css') }}\" rel=\"stylesheet\">


    <div class=\"title-row heading\">
      <div class=\"col-md-12\">
        <h1>Mon espace</h1>

      </div>
    </div>
      <hr>

      <blockquote class=\"v1\" style=\"background: #ffffff\">
      <h3>Message de l'EPCI de  - 12/10/2018</h3><br>
      <img src=\"{{ asset('bundles/lsimarket/images/img2.jpg') }}\"  class=\"wd-90 rounded-circle\" style=\"float: right;margin-bottom:15px\" alt=\"Image\">
      <h5><p>Notre objectif étant de mettre en location 100% de nos équipements, Merci de les mettre en valeur à travers des photos de bonnes qualitées et une description claire et succincte des équipements<br>
      D'après les statistiques prévionnelles, le budget prévisionnel sera dépassé de 35% par rapport à notre meilleur score de 2018. </p><h5>
      <small>Emmanuel Doe</small>     
      </blockquote>
     <hr>

     <!-- Properties description -->
     <div class=\"row pad-top-large\">
       <div class=\"container\">
         <div class=\"properties-descriptions tabs-vertical\" role=\"tabpanel\">
           <ul class=\"nav nav-tabs\">
             <li class=\"active\"><a href=\"#compte\" data-toggle=\"tab\">MON COMPTE</a></li>
             <li><a href=\"#engagements\" data-toggle=\"tab\">MES ENGAGEMENTS</a></li>
             <li><a href=\"#annonces\" data-toggle=\"tab\">MES ANNONCES</a></li>
            <!-- <li><a href=\"#location\" data-toggle=\"tab\">MES LOCATIONS</a></li>-->
             <li><a href=\"#syntese\" data-toggle=\"tab\">MA SYNTHESE</a></li>
           </ul>
           <div class=\"tab-content\">
             <div class=\"tab-pane fade in active\" id=\"compte\">               
               <div class=\"contents\">
                      <article class=\"section__wrapper\">        
            <!-- Menu - Info -->
            <div class=\"search-interaction row-float\">
              <div  id=\"map-cotnent2\">
                <div class=\"map-search-form row-float\" >
                  <div class=\"container\">
                    <div class=\"row pad-top-large\">
                      <div class=\"form-tab\">
                      <a class=\"active\"  href=\"#form-1\">Coordonnées</a>
                      <a href=\"#form-2\">Habilitations</a>
                      <a href=\"#form-3\">Paramètres</a>
                      </div>
                    </div>
                    <div class=\"form-content form-cotent-map\">
                      <form class=\"form-1\" id=\"form-1\">
                        <div class=\"row pad-top-large\">
                          <div class=\"col-md-9\" style=\"text-align:left\">
                            <!-- bloc coordonées-->
                                                                                                              
<table class=\"table table-striped\">
        {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_ADMIN') %}

        {% else %}
            <tr>
                <td style=\"width:120px\">{{ 'Nom'|trans }}</td>
                <td>{{ app.user.nom }}</td>
            </tr>
        {% endif %}

        {% if app.user.hasRole('ROLE_PART') %}
            <tr>
                <td>{{ 'Prenom' }}</td>
                <td>{{ app.user.administre.prenom }}</td>
            </tr>
            <tr>
                <td>{{ 'Langue maternelle' }}</td>
                <td>{{ app.user.administre.langueMat }}</td>
            </tr>
            <tr>
                <td>{{ 'Photo de profil' }}</td>
                <td>{{ app.user.administre.photoProfil }}</td>
            </tr>
        {% elseif app.user.hasRole('ROLE_MAIRIE') %}
            <tr>
                <td>{{ 'Description' }}</td>
                <td>{{ app.user.mairie.description }}</td>
            </tr>
            <tr>
                <td>{{ 'Service' }}</td>
                <td>{{ app.user.mairie.service }}</td>
            </tr>
        {% endif %}

        <tr>
            <td>{{ 'Username'|trans }}</td>
            <td>{{ app.user.username }}</td>
        </tr>
        <tr>
            <td>{{ 'Email'|trans }}</td>
            <td>{{ app.user.email }}</td>
        </tr>
        {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_ADMIN') %}

        {% else %}
            {% if user.telephone is defined and not null %}
                <tr>
                    <td>{{ 'Numéro de téléphone' }}</td>
                    <td>{{ app.user.telephone }}</td>
                </tr>
            {% endif %}
            {% if app.user.adresse.rue is defined and not null %}
                <tr>
                    <td>{{ 'Rue' }}</td>
                    <td>{{ app.user.adresse.rue }}</td>
                </tr>
            {% endif %}
            {% if app.user.adresse.codePostal is defined and not null %}
                <tr>
                    <td>{{ 'Code postal' }}</td>
                    <td>{{ app.user.adresse.codePostal }}</td>
                </tr>
            {% endif %}
            {% if user.adresse.ville is defined and not null %}
                <tr>
                    <td>{{ 'Ville' }}</td>
                    <td>{{ app.user.adresse.ville }}</td>
                </tr>
            {% endif %}
             {% if app.user.adresse.pays is defined and not null %}
                <tr>
                    <td>{{ 'Pays' }}</td>
                    <td>{{ app.user.adresse.pays }}</td>
                </tr>
            {% endif %}
            {% if app.user.indicatif is defined and not null %}
                <tr>
                    <td>{{ 'Téléphone' }}</td>
                    <td> + {{ app.user.indicatif }} {{ app.user.telephone }}</td>
                </tr>
            {% endif %}
           
        {% endif %}
    </table>
    
    <a href=\"{{ path('fos_user_profile_edit') }}\" class=\"btn btn-primary btn-large pull-right\">Modifier mon profil</a>
    
<br><br><br>              
                                                                                                            <div class=\"col-md-10\">
                                                                                  <div class=\"headline v3 text-center\"><br><br><h4>Membres de la mairie</h4></div></br>
                                                                                                                  </div>
                                                                                                                     <!-- Agents -->
                              <div class=\"content-panel agents-portfolio\">

                                <div class=\"project-list\">        
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"{{ asset('bundles/lsimarket/images/mairie/1.jpg') }}\" style=\"height:205px;width:262px;object-fit: cover;\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">LISA DHO</span>
                                    
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"{{ asset('bundles/lsimarket/images/mairie/2.jpg') }}\" style=\"height:205px;width:262px;object-fit: cover;\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">PATRICK JOB</span>
                                     
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"{{ asset('bundles/lsimarket/images/mairie/3.jpg') }}\" style=\"height:205px;width:262px;object-fit: cover;\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">LOIC TEGE</span>
                                    
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"{{ asset('bundles/lsimarket/images/mairie/4.jpg') }}\" style=\"height:205px;width:262px;object-fit: cover;\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">FRANCK DURANT</span>                                   
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                              <br><br><br>              
                                                                                                            <div class=\"col-md-10\">
                                                                                  <div class=\"headline v3 text-center\"><br><br><h4>Membres habilités à gérer les annonces</h4></div></br>
                                                                                                                  </div>
                                                                                                                     <!-- Agents -->
                              <div class=\"content-panel agents-portfolio\">

                                <div class=\"project-list\">        
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"{{ asset('bundles/lsimarket/images/habilitation/14202195290_4ac1d5a92b_b.jpg') }}\" height=\"205\" width=\"262\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">LISA MARIA</span>
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"{{ asset('bundles/lsimarket/images/habilitation/9325995752_e4b4d0044a_b.jpg') }}\" height=\"205\" width=\"262\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">JONATHAN LOR</span>
                       
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"{{ asset('bundles/lsimarket/images/habilitation/8203794182_8004f8f636_b.jpg') }}\" height=\"205\" width=\"262\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">MICK CHRITIAN</span>
                      
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"{{ asset('bundles/lsimarket/images/habilitation/9675018730_f3ab9ab065_b.jpg') }}\" height=\"205\" width=\"262\" alt=\"\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">MICK DURANT</span>
                              
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>  
                                                      
                                                                                                                <!-- fin bloc coordonées-->         
                          </div>            
                        </div>
                      </form>  
                      <form class=\"form-1 hidden\" id=\"form-2\">
                        <div class=\"row pad-top-large\">
                          <div class=\"col-md-9\" style=\"text-align:left\">
                            <!-- bloc habilitations -->
                                <br>
                                <div class=\"headline v3 text-center\"><h4>Ajout d'un membre</h4></div></br>

                              <div class=\"col-md-5\">

                                  <figure class=\"image-box\">
                                      <img src=\"{{ asset('bundles/lsimarket/images/member.jpg') }}\" height=\"189\" width=\"165\" alt=\"\">
                                  </figure>
                                  <br>
                                   <label class=\"custom-file\">
                                        <input type=\"file\" id=\"file\" class=\"custom-file-input\">
                                        <span class=\"custom-file-control\"></span>
                                        </label>
                              </div>
                              <div class=\"col-md-7\">
                                 <div class=\"form-layout\">
{#
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label class=\"form-control-label\">Prénom: <span class=\"tx-danger\">*</span></label>
                  <input class=\"form-control\" type=\"text\" name=\"firstname\" value=\"\" placeholder=\"Entrer le prénom\">
                </div>
              </div><!-- col-6 -->
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label class=\"form-control-label\">Nom: <span class=\"tx-danger\">*</span></label>
                  <input class=\"form-control\" type=\"text\" name=\"lastname\" value=\"\" placeholder=\"Entrer le nom\">
                </div>
              </div><!-- col-6 -->
              <div class=\"col-md-6\">
                <div class=\"form-group mg-b-10-force\">
                  <label class=\"form-control-label\">Pseudo: <span class=\"tx-danger\">*</span></label>
                  <input class=\"form-control\" type=\"text\" name=\"address\" value=\"\" placeholder=\"Entrer un pseudo\">
                </div>
              </div><!-- col-6 -->
              <div class=\"col-md-6\">
                <div class=\"form-group mg-b-10-force\">
                  <label class=\"form-control-label\">Adresse email: <span class=\"tx-danger\">*</span></label>
                  <input class=\"form-control\" type=\"text\" name=\"email\" value=\"\" placeholder=\"Entrer votre email\">
                </div>
              </div><!-- col-6 -->
             <div class=\"col-md-12\">
                <div class=\"form-group mg-b-10-force\">
                  <label class=\"form-control-label\">Fonction: <span class=\"tx-danger\">*</span></label>
                  <input class=\"form-control\" type=\"text\" name=\"fonction\" value=\"\" placeholder=\"Entrer la fonction\">
                </div>
              </div><!-- col-6 -->




                  <div style=\"text-align:left;\">

                  Le membre est autorisé à :
                  </div>
                  <br>


                       <input type=\"checkbox\"> Faire un devis<br>
                       <input type=\"checkbox\"> Signer un contrat d'achat<br>
                       <input type=\"checkbox\"> Ajouter une référence<br>
                       <input type=\"checkbox\"> Signer un contrat de vente<br>


                  <br>#}


                  {#<button class=\"pull-right btn btn-info\" style=\"margin-top:10px\">Créer le membre</button>#}
                   
                    <a href=\"{{ path('fos_user_registration_register') }}\">Inscrire membre mairie</a>              
              </div>
</div>

       <br><br><br>
<div class=\"col-md-10\">
  <div class=\"headline v3 text-center\"><br><br><h4>Habilitation des membres</h4></div></br>
                                  </div>
                                     <!-- Agents -->
                              <div class=\"content-panel agents-portfolio\">

                              <p>PERSONNES HABILITEES A FAIRE UN DEVIS</p>

                                <div class=\"project-list\">        
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"{{ asset('bundles/lsimarket/images/habilitation/14202195290_4ac1d5a92b_b.jpg') }}\" height=\"205\" width=\"262\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">LISA MARIA</span>
                                    <img src=\"{{ asset('bundles/lsimarket/images/delete.png') }}\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\">
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"{{ asset('bundles/lsimarket/images/habilitation/9325995752_e4b4d0044a_b.jpg') }}\" height=\"205\" width=\"262\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">JONATHAN LOR</span>
                                    <img src=\"{{ asset('bundles/lsimarket/images/delete.png') }}\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\"> 
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"{{ asset('bundles/lsimarket/images/habilitation/8203794182_8004f8f636_b.jpg') }}\" height=\"205\" width=\"262\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">MICK CHRITIAN</span>
                                    <img src=\"{{ asset('bundles/lsimarket/images/delete.png') }}\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\">
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  <div class=\"project\">
                                    <div class=\"data\">
                                    <a href=\"#\">
                                    <img src=\"{{ asset('bundles/lsimarket/images/habilitation/9675018730_f3ab9ab065_b.jpg') }}\" height=\"205\" width=\"262\" alt=\"\">
                                    <span class=\"meta-list3\">
                                    <span class=\"status\">MICK DURANT</span>
                                    <img src=\"{{ asset('bundles/lsimarket/images/delete.png') }}\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\">
                                    </span>
                                    </a>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                              
                              <div class=\"content-panel agents-portfolio\">
                                <p>PERSONNES HABILITEES A SIGNER UN CONTRAT D'ACHAT</p>
                                <div class=\"project-list\">        
                                <div class=\"project\">
                                    <div class=\"data\">
                                      <a href=\"#\"><img src=\"{{ asset('bundles/lsimarket/images/habilitation/14202195290_4ac1d5a92b_b.jpg') }}\" height=\"205\" width=\"262\"></a>
                                      <span class=\"meta-list3\">
                                    <span class=\"status\">LISA MARIA</span>
                                    <img src=\"{{ asset('bundles/lsimarket/images/delete.png') }}\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\">
                                      </span> 
                                    </div>
                                </div>
                                <div class=\"project\">
                                  <div class=\"data\">
                                  <a href=\"#\">
                                  <img src=\"{{ asset('bundles/lsimarket/images/habilitation/9325995752_e4b4d0044a_b.jpg') }}\" height=\"205\" width=\"262\">
                                  <span class=\"meta-list3\">
                                  <span class=\"status\">JONATHAN LOR</span>
                                  <img src=\"{{ asset('bundles/lsimarket/images/delete.png') }}\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\">
                                  </span>
                                  </a>
                                  </div>
                                </div>

                                <div class=\"project\">
                                  <div class=\"data\">
                                  <a href=\"#\">
                                  <img src=\"{{ asset('bundles/lsimarket/images/habilitation/9675018730_f3ab9ab065_b.jpg') }}\" height=\"205\" width=\"262\" alt=\"\">
                                  <span class=\"meta-list3\">
                                  <span class=\"status\">MICK DURANT</span>
                                  <img src=\"{{ asset('bundles/lsimarket/images/delete.png') }}\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\"> 
                                  </span>
                                  </a>
                                  </div>
                                </div>
                                
                              </div>
                              </div>
                              
                              <div class=\"content-panel agents-portfolio\">
                                <p>PERSONNES HABILITEES A AJOUTER UNE REFERENCE</p>
                                <div class=\"project-list\">        
                                <div class=\"project\">
                                  <div class=\"data\">
                                  <a href=\"#\">
                                  <img src=\"{{ asset('bundles/lsimarket/images/habilitation/14202195290_4ac1d5a92b_b.jpg') }}\" height=\"205\" width=\"262\">
                                  <span class=\"meta-list3\">
                                  <span class=\"status\">LISA MARIA</span>
                                  <img src=\"{{ asset('bundles/lsimarket/images/delete.png') }}\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\">
                                  </span>
                                  </a>
                                  </div>
                                </div>
                                <div class=\"project\">
                                  <div class=\"data\">
                                  <a href=\"#\">
                                  <img src=\"{{ asset('bundles/lsimarket/images/habilitation/9325995752_e4b4d0044a_b.jpg') }}\" height=\"205\" width=\"262\">
                                  <span class=\"meta-list3\">
                                  <span class=\"status\">JONATHAN LOR</span>
                                  <img src=\"{{ asset('bundles/lsimarket/images/delete.png') }}\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\">                                 
                                  </span>
                                  </a>
                                  </div>
                                </div>
                                
                                </div>
                              </div>
                              <div class=\"content-panel agents-portfolio\">
                                <p>PERSONNES HABILITEES A SIGNER UN CONTRAT DE VENTE</p>
                                <div class=\"project-list\">        
                                <div class=\"project\">
                                  <div class=\"data\">
                                  <a href=\"#\">
                                  <img src=\"{{ asset('bundles/lsimarket/images/habilitation/14202195290_4ac1d5a92b_b.jpg') }}\" height=\"205\" width=\"262\">
                                  <span class=\"meta-list3\">
                                  <span class=\"status\">LISA MARIA</span>
                                  <img src=\"{{ asset('bundles/lsimarket/images/delete.png') }}\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\">
                                  </span>
                                  </a>
                                  </div>
                                </div>
                                <div class=\"project\">
                                  <div class=\"data\">
                                  <a href=\"#\">
                                  <img src=\"{{ asset('bundles/lsimarket/images/habilitation/9325995752_e4b4d0044a_b.jpg') }}\" height=\"205\" width=\"262\">
                                  <span class=\"meta-list3\">
                                  <span class=\"status\">JONATHAN LOR</span>
                                  <img src=\"{{ asset('bundles/lsimarket/images/delete.png') }}\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\">                    
                                  </span>
                                  </a>
                                  </div>
                                </div>
                                <div class=\"project\">
                                  <div class=\"data\">
                                  <a href=\"#\">
                                  <img src=\"{{ asset('bundles/lsimarket/images/habilitation/8203794182_8004f8f636_b.jpg') }}\" height=\"205\" width=\"262\">
                                  <span class=\"meta-list3\">
                                  <span class=\"status\">MICK CHRITIAN</span>
                                  <img src=\"{{ asset('bundles/lsimarket/images/delete.png') }}\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\">
                                  </span>
                                  </a>
                                  </div>
                                </div>
                                <div class=\"project\">
                                  <div class=\"data\">
                                  <a href=\"#\">
                                  <img src=\"{{ asset('bundles/lsimarket/images/habilitation/9675018730_f3ab9ab065_b.jpg') }}\" height=\"205\" width=\"262\" alt=\"\">
                                                                                                                                  </a>
                                  <span class=\"meta-list3\">
                                  <span class=\"status\">MICK DURANT</span>
                                  <img src=\"{{ asset('bundles/lsimarket/images/delete.png') }}\" height=\"20\" width=\"20\" style=\"margin-top: 2%;margin-left: 60px;\"> 
                                  </span>
                                  
                                  </div>
                                                                                                                                  
                                </div>
                                
                                </div>
                              </div>                                                       
                              
                                                                                                                        <!--Gestion des habilitations -->

                                                                                                                        <div class=\"col-md-12\" style=\"margin-top:20px\">
                                                                                                                           <div class=\"headline v3 text-center\"><h4>Gestion des habilitations</h4></div></br>
                                                                                                                        </div>
                                                                                                                        <div class=\"col-md-9\">
                                                              <table style=\"width:100%\">
                                                                <tr>
                                                                  <td style=\"width:30%\">
                                                                    <p>MICK DURANT
                                                                  </td>
                                                                  <td style=\"width:70%\">
                                                                    <div class=\"custom-select\" style=\"width:100%;\">
                                                                       <select>
                                                                        <option value=\"0\">HABILITE(E) A FAIRE UN DEVIS</option>
                                                                        <option value=\"1\">HABILITE(E) A SIGNER UN CONTRAT D'ACHAT</option>
                                                                        <option value=\"2\">HABILITE(E) A AJOUTER UNE REFERENCE</option>
                                                                        <option value=\"3\">HABILITE(E) A SIGNER UN CONTRAT DE VENTE</option>
                                                                       </select>
                                                                    </div>
                                                                  </td>
                                                                </tr>
                                                                <tr>
                                                                  <td> 
                                                                    <p>JONATHAN LOR
                                                                  </td>
                                                                  <td>
                                                                    <div class=\"custom-select\" style=\"width:100%;\">
                                                                      <select>
                                                                        <option value=\"0\">HABILITE(E) A FAIRE UN DEVIS</option>
                                                                        <option value=\"1\">HABILITE(E) A SIGNER UN CONTRAT D'ACHAT</option>
                                                                        <option value=\"2\">HABILITE(E) A AJOUTER UNE REFERENCE</option>
                                                                        <option value=\"3\">HABILITE(E) A SIGNER UN CONTRAT DE VENTE</option>
                                                                      </select>
                                                                    </div>
                                                                  </td>
                                                                </tr>
                                                                <tr>
                                                                  <td>
                                                                    <p>LISA MARIA</a>
                                                                  </td>
                                                                  <td>
                                                                    <div class=\"custom-select\" style=\"width:100%;\">
                                                                      <select>
                                                                        <option value=\"0\">HABILITE(E) A FAIRE UN DEVIS</option>
                                                                        <option value=\"1\">HABILITE(E) A SIGNER UN CONTRAT D'ACHAT</option>
                                                                        <option value=\"2\">HABILITE(E) A AJOUTER UNE REFERENCE</option>
                                                                        <option value=\"3\">HABILITE(E) A SIGNER UN CONTRAT DE VENTE</option>
                                                                      </select>
                                                                    </div>
                                                                  </td>
                                                                </tr>
                                                                <tr>
                                                                  <td>
                                                                    <p>MICK CHRITIAN</a>
                                                                  </td>
                                                                   <td>
                                                                    <div class=\"custom-select\" style=\"width:100%;\">
                                                                      <select>
                                                                        <option value=\"0\">HABILITE(E) A FAIRE UN DEVIS</option>
                                                                        <option value=\"1\">HABILITE(E) A SIGNER UN CONTRAT D'ACHAT</option>
                                                                        <option value=\"2\">HABILITE(E) A AJOUTER UNE REFERENCE</option>
                                                                        <option value=\"3\">HABILITE(E) A SIGNER UN CONTRAT DE VENTE</option>
                                                                      </select>
                                                                    </div>
                                                                   </td>
                                                                </tr>
                                                                                                    </table>
                                                                                                                                                                                                                                                        <button class=\"pull-right btn btn-info\" style=\"margin-top:10px\">Enregistrer</button>
  
                            <!-- fin bloc habilitation -->  
                          </div>  
                        </div>
                      </form>
                      <form class=\"form-1 hidden\" id=\"form-3\">
                        <div class=\"row pad-top-large\">
                          <div class=\"col-md-12\" style=\"text-align:left\">
    xxxxxxx                       <!-- bloc paramètre -->

                            <!-- fin bloc paramètre -->
                          </div>
                        </div>  
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Menu - Info -->    
          </article>
  
         </div>               
            </div>
            <div class=\"tab-pane fade\" id=\"engagements\">               
               <div class=\"contents\">
          <article class=\"section__wrapper\">
          <!-- Menu - Info -->
      <div class=\"search-interaction row-float\">
        <div  id=\"map-cotnent2\">
          <div class=\"map-search-form row-float\" >
            <div class=\"container\">
              <div class=\"row pad-top-large\">
                <div class=\"form-tab\">
                <a href=\"#form-4\">Démarches</a>
                <a href=\"#form-5\">Budget</a>
                <a class=\"active\" href=\"#form-6\">Archives</a>
                </div>
              </div>
              <div class=\"form-content form-cotent-map\">
                <form class=\"form-1\" id=\"form-4\">
                  <div class=\"row pad-top-large\">
                    <div class=\"col-md-12\" style=\"text-align:left\">
                      <!-- bloc info -->
                        <!-- Bloc démarches -->
                                                                                                           <br>
                                                                                                            <div class=\"col-md-9\">
                                                                                                                       <div class=\"tag-box tag-box-v2\">
                                                                                                                       <h3>Les étapes de ma démarche d’engagement simplifiée</h3>

                                                                                                                           {{ render(controller('LSIMarketBundle:Market:demarcheAnnonce')) }}

                                                                                                                    </div>
                                                                                                                </div> 
                                                                                                            <div class=\"col-md-10\">
                              <div class=\"headline v3 text-center\">
                                <p><h3>Contacter un conseillé</h3></p>
                              </div>
                              Vous souhaitez avoir un renseignement, n'hésitez pas à envoyer un mail à un de nos agents.
                              <div class=\"row pad-top-small layout-flex\">
                                <div class=\"col-md-2\">
                                  <div class=\"content-box-2\">
                                    <figure class=\"image-box\">
                                      <img src=\"{{ asset('bundles/lsimarket/images/img5.jpg') }}\" height=\"278\" width=\"330\" alt=\"\">
                                    </figure>
                                    <div class=\"contents\">
                                      <h3 class=\"heading-style-1\">Jhon Doe</h3>
                                    
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col-md-9\">
                                  <div class=\"content-box-2 agents-contact\">
                                    <div class=\"heading\">
                                      <h5>Contact jhone doe</h5>
                                    </div>
                                    <form class=\"form-content pad-top-small\" data-parsley-validate>
                                      <div class=\"row\">
                                        <div class=\"col-md-12 form-group-1\">
                                          <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Name\" required data-parsley-required-message=\"Merci d'entrer votre nom\" name=\"name\">
                                        </div>
                                        <div class=\"col-md-12 form-group-1\">
                                          <input type=\"text\" class=\"form-control input-lg\" placeholder=\"E-mail ID\" required data-parsley-required-message=\"Merci d'entrer votre adresse mail\" name=\"email\">
                                        </div>
                                      </div>
                                      <div class=\"row\">
                                        <div class=\"col-md-12 form-group-1\">
                                          <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Téléphone\" required data-parsley-required-message=\"Entrer votre numéro de téléphone\" data-parsley-min=\"10\" name=\"contact\">
                                        </div>
                                        <div class=\"col-md-12 form-group-1\">
                                          <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Entrer votre ville\" required name=\"location\">
                                        </div>
                                      </div>
                                      <div class=\"row\">
                                        <div class=\"form-group-1 col-md-12\">
                                          <textarea class=\"form-control\" placeholder=\"Entrer votre question\" rows=\"5\"  required data-parsley-minlength=\"20\" data-parsley-minlength-message = \"\"  data-parsley-validation-threshold=\"10\" data-parsley-maxlength=\"100\" name=\"message\"></textarea>
                                        </div>
                                      </div>
                                      <div class=\"row pad-top-small\">
                                        <div class=\"col-md-10\">
                                          <button class=\"btn btn-primary btn-large pull-right\">Envoyer</button>
                                        </div>
                                        <div class=\"text-success col-xs-10 hidden form-messges text-center\">
                                          <p>Vous aurez une réponse dans les plus brefs délais.</p>
                                        </div>
                                      </div>
                                    </form>
                                    <div class=\"info-box-1\">
                                      <h5><span>N'hésitez pas à nous contacter</span></h5>
                                      <p><span class=\"large-text-1\"><span class=\"iconic-phone-square\"></span>+33 1 34 54 54 54 </span> (09H00 - 18H00 / Lundi à samedi)</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
        
                      <!-- fin bloc démarches -->
                    </div>            
                  </div>
                </form>  
                <form class=\"form-1 hidden\" id=\"form-5\">
                  <div class=\"row pad-top-large\">
                    <div class=\"col-md-12\" style=\"text-align:left\">
                      <!-- bloc budget -->
                                                                                        <br>  
                      Ma période d’engagement du budget de JJ/MM/AA à JJ/MM/AA

                                                                                        <p>Mon budget achat la période : {{ app.user.mairie.budgetInitial }} €</p>
                      <!-- fin bloc budget -->  
                    </div>  
                  </div>
                </form>
                <form class=\"form-1 hidden\" id=\"form-6\">
                  <div class=\"row pad-top-large\">
                    <div class=\"col-md-12\" style=\"text-align:left\">
                                                                                        <br>
                      <!-- bloc archives -->
                                                                                          <div class=\"col-md-9\">
                                                                                              <div class=\"text-box text-box-v2 box-shadow shadow-effect-2\">
                                                                                                                         
                                                                                                                         <h2>Exercice 2019</h2></br> 
                                                                                                                         - <a href=\"#\">Budget annuelle achat entre EPCI</a> <a href='{{ path('fos_user_security_login') }}' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a> </br>
                                                                                                                         - <a href=\"#\">Décision légale sur la gestion des biens publics</a> <a href='{{ path('fos_user_security_login') }}' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                         <div id=\"archive_2019\" class=\"tohide\">
                                                                                                                            - <a href=\"#\">Décision EPCI</a> <a href='{{ path('fos_user_security_login') }}' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a> </br>
                                                                                                                            - <a href=\"#\">Déclaration de mise à disposition</a> <a href='{{ path('fos_user_security_login') }}' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                         </div>
                                                                                                                         
                                                                                                                         <button id=\"bt-contact\" type=\"button\" class=\"btn btn-primary btn-group-lg btn-large pull-right\" data-target=\"#archive_2019\">Afficher/cacher des documents</button> 
                                                                                                                         
                                                                                                                        
                                                                                                                         <br>
                                                                                                                         <div class=\"headline v3\">
                                                                                                                            <p>Archiver un document</p>
                                                                                                                         </div>
                                                                                                                         
                                                                                                                           <input type=\"file\" id=\"file\">
                                                                                                                           <span class=\"custom-file-control\"></span>
                                                                                                                         
                                                                                                                         <button class=\"btn btn-primary btn-large pull-right\">Enregistrer</button>
                                                                                                                         <br>
                                                                                              </div>
                                                                                         </div>
                      <div class=\"col-md-9\">
                                                                                              <div class=\"text-box text-box-v2 box-shadow shadow-effect-2\">
                                                                                                                         
                                                                                                                          <h2>Exercice 2018</h2></br> 
                                                                                                                         - <a href=\"#\">Budget annuelle achat entre EPCI</a> <a href='{{ path('fos_user_security_login') }}' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                         - <a href=\"#\">Décision légale sur la gestion des biens publics</a> <a href='{{ path('fos_user_security_login') }}' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                         <div id=\"archive_2018\" class=\"tohide\">
                                                                                                                            - <a href=\"#\">Facture location Camion 15/09/2017 au 25/11/2017</a> <a href='{{ path('fos_user_security_login') }}' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                            - <a href=\"#\">Facture location Benne 07/04/2017 au 23/09/2017</a> <a href='{{ path('fos_user_security_login') }}' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                         
                                                                                                                            - <a href=\"#\">Décision générale EPCI</a> <a href='{{ path('fos_user_security_login') }}' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a> </br>
                                                                                                                            - <a href=\"#\">Déclaration de mise à disposition des camions</a> <a href='{{ path('fos_user_security_login') }}' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                            - <a href=\"#\">Officialisation de l'intégration dans l'EPCI</a> <a href='{{ path('fos_user_security_login') }}' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a> </br>
                                                                                                                            - <a href=\"#\">Externalisation de la location des éléments</a> <a href='{{ path('fos_user_security_login') }}' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                         </div>
                                                                                                                         
                                                                                                                         <button id=\"bt-contact\" type=\"button\" class=\"btn btn-primary btn-group-lg btn-large pull-right\" data-target=\"#archive_2018\">Afficher/cacher des documents</button> 
                                                                                                                         
                                                                                                                        
                                                                                                                         <br>
                                                                                                                         <div class=\"headline v3\">
                                                                                                                            <p>Archiver un document</p>
                                                                                                                         </div>
                                                                                                                         
                                                                                                                           <input type=\"file\" id=\"file\">
                                                                                                                           <span class=\"custom-file-control\"></span>
                                                                                                                         
                                                                                                                         <button class=\"btn btn-primary btn-large pull-right\">Enregistrer</button>
                                                                                                                         <br>
                                                                                              </div>
                                                                                         </div>
                                                                                         <div class=\"col-md-9\">
                                                                                              <div class=\"text-box text-box-v2 box-shadow shadow-effect-2\">
                                                                                                                         
                                                                                                                          <h2>Exercice 2017</h2> :</br> 
                                                                                                                         - <a href=\"#\">Budget annuelle achat entre EPCI</a></br>
                                                                                                                         - <a href=\"#\">Décision légale sur la gestion des biens publics</a> <a href='{{ path('fos_user_security_login') }}' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                         <div id=\"archive_2017\" class=\"tohide\">
                                                                                                                            - <a href=\"#\">Facture location Camion 15/09/2016 au 25/11/2016</a> <a href='{{ path('fos_user_security_login') }}' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                            - <a href=\"#\">Facture location Benne 07/04/2016 au 23/09/2016</a> <a href='{{ path('fos_user_security_login') }}' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                         
                                                                                                                            - <a href=\"#\">Décision EPCI des mairies</a> <a href='{{ path('fos_user_security_login') }}' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a> </br>
                                                                                                                            - <a href=\"#\">Déclaration de mise à disposition des agendats</a> <a href='{{ path('fos_user_security_login') }}' class=\"iconic iconic-trash-o\" style=\"margin-top:-5px; float:right;\"></a></br>
                                                                                                                         </div>
                                                                                                                         
                                                                                                                         <button id=\"bt-contact\" type=\"button\" class=\"btn btn-primary btn-group-lg btn-large pull-right\" data-target=\"#archive_2017\">Afficher/cacher des documents</button> 
                                                                                                                         
                                                                                                                        
                                                                                                                         <br>
                                                                                                                         <div class=\"headline v3\">
                                                                                                                            <p>Archiver un document</p>
                                                                                                                         </div>
                                                                                                                         
                                                                                                                           <input type=\"file\" id=\"file\">
                                                                                                                           <span class=\"custom-file-control\"></span>
                                                                                                                         
                                                                                                                         <button class=\"btn btn-primary btn-large pull-right\">Enregistrer</button>
                                                                                                                         <br>
                                                                                              </div>
                                                                                          </div>
                      <!-- fin bloc archives -->
                    </div>
                  </div>  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Menu - Info --> 
                  </article>
        
      </div>      
            </div>
            <div class=\"tab-pane fade\" id=\"annonces\">               
                <div class=\"contents\">
              
          <article class=\"section__wrapper\">
                  <!-- Menu - Info -->
            <div class=\"search-interaction row-float\">
              <div  id=\"map-cotnent2\">
                <div class=\"map-search-form row-float\" >
                  <div class=\"container\">
                    <div class=\"row pad-top-large\">
                      <div class=\"form-tab\">
                      <a class=\"active\"  href=\"#form-7\">Créer</a>
                      <a href=\"#form-8\">Modifier</a>
                      <a href=\"#form-9\">Réservations</a>
                      <a href=\"#form-10\">Biens MAD</a>
                      <a href=\"#form-11\">Facturations</a>
                      <a href=\"#form-12\">Paramètres</a>
                      </div>
                    </div>
                    <div class=\"form-content form-cotent-map\">
                      <form class=\"form-1\" id=\"form-7\">
                        <div class=\"row pad-top-large\">
                          <div class=\"col-md-12\" style=\"text-align:left\">
                            <!-- bloc créer une annonce-->
                            
 
                            <!-- fin bloc info créer une annonce -->
                          </div>            
                        </div>
                      </form>  
                      <form class=\"form-1 hidden\" id=\"form-8\">
                        <div class=\"row pad-top-large\">
                          <div class=\"col-md-12\" style=\"text-align:left\">
                            <!-- bloc info -->  
                            Modifier
                            <!-- fin bloc info -->  
                          </div>  
                        </div>
                      </form>
                      <form class=\"form-1 hidden\" id=\"form-9\">
                        <div class=\"row pad-top-large\">
                          <div class=\"col-md-12\" style=\"text-align:left\">
                            <!-- Bbloc réservations -->
                            
                          </div>
                        </div>  
                      </form>
                      <form class=\"form-1 hidden\" id=\"form-10\">
                        <div class=\"row pad-top-large\">
                          <div class=\"col-md-9\" style=\"text-align:left\">
                            <!-- Biens MAD -->
                              
<div class=\"row\">
                <div class=\"col-lg-3\">
                    <h2>Mes annonces</h2>
                </div>
                <div class=\"col-lg-offset-6 col-lg-3\">
                    <a href=\"{{ path('ls_imarket_ajouter_annonce') }}\" class=\"btn btn-primary btn-large pull-right\">Ajouter une annonce</a>
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
                  {% if mesannonces is defined %}
                  {% for annonce in mesannonces %}
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
                              {% else %}
                                Non publiée
                            {% endif %}
                        </td>
                        <td>
                            <a href=\"{{ path('ls_imarket_voir_annonce', {'id': annonce.id})}}\" class=\"iconic iconic-visibility\"></a>
                        </td>
                    </tr>
                {% else %}
                    <tr class=\"alert alert-info\">
                        <td colspan=\"3\">
                            <center><strong>Vous n'avez ajouté aucune annonce !</strong></center>
                        </td>
                    </tr>
                {% endfor %}
              {% endif %}
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







                            <!-- fin Biens MAD -->
                          </div>            
                        </div>
                      </form>  
                      <form class=\"form-1 hidden\" id=\"form-11\">
                        <div class=\"row pad-top-large\">
                          <div class=\"col-md-9\" style=\"text-align:left\">
                            <!-- bloc info -->
                                                                                                                <p><blockquote class=\"v1\">  
                            JE SUIS PRENEUR
                            </blockquote></p>
                                                                                                                
                            <div class=\"tag-box tag-box-v1\">
                                                                                                                    <h3>Mes devis</h3>
                                                                                                                                            
                                                                                                                <br>
                                                                                                                <div class=\"headline v3 text-center\">
                                                                                                                   <h4>Mes demandes de devis en cours de validation de l’Offreur</h4>
                                                                                                                </div>

                                                                                                                <table id=\"annonce\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                           <thead>
                                   <tr class=\"info\">
                                      <th>N°</th>
                                      <th>Créé</th>
                                      <th>Description</th>
                                      <th>Etat</th>
                                   </tr>
                               </thead>
                            <tbody>
                           {% for key, annonce in annonces if annonce.reserveEtat == 'A' %}
                            <tr>
                               <td>
                                   {{ key + 1 }}
                               </td>
                               <td>
                                       {{ annonce.annonce.dateCreation|date('d/m/Y') }}
                               </td>
                               <td>
                                {{ annonce.annonce.description }}
                               </td>
                                   
                                    <td>
                                      En attente de validation
                                    </td>
                               <td>
                                   <a href=\"{{ path('ls_imarket_voir_annonce', {'id': annonce.id})}}\" class=\"iconic iconic-visibility\"></a>
                               </td>
                            </tr>
                            {% else %}
                            <tr class=\"alert alert-info\">
                               <td colspan=\"3\">
                                   <center><strong>Vous n'avez aucun devis !</strong></center>
                               </td>
                            </tr>
                            {% endfor %}
                            </tbody>
                            <tfoot>
                            <tr class=\"info\">
                            <th>N°</th>
                            <th>Créé</th>
                            <th>Description</th>
                            <th>Etat</th>
                            </tr>
                            </tfoot>
                            </table><br><br>

                                                                                                                <div class=\"headline v3 text-center\">                                                                                                                
                                <h4>Mes devis refusés</h4>
                            </div>
                                                                                                                <table id=\"annonce\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                           <thead>
                                   <tr class=\"info\">
                                      <th>N°</th>
                                      <th>Créé</th>
                                      <th>Description</th>
                                      <th>Etat</th>
                                   </tr>
                               </thead>
                            <tbody>
                             {% for key, annonce in annonces if annonce.reserveEtat == 'R' %}
                              {# {% if annonce.reserveEtat == 'R' %} #}
                            <tr>
                               <td>
                                   {{ key + 1 }}
                               </td>
                               <td>
                                       {{ annonce.annonce.dateCreation|date('d/m/Y') }}
                               </td>
                               <td>
                                {{ annonce.annonce.description }}
                               </td>
                                   
                                    <td>
                                      <strong>Dévis refusé</strong>
                                    </td>
                                   
                               <td>
                                   <a href=\"{{ path('ls_imarket_voir_annonce', {'id': annonce.id})}}\" class=\"iconic iconic-visibility\"></a>
                               </td>
                            </tr>
                            {% else %}
                            <tr class=\"alert alert-info\">
                               <td colspan=\"3\">
                                   <center><strong>Vous n'avez aucun devis refusé!</strong></center>
                               </td>
                            </tr>
                            
                            {% endfor %}
                            </tbody>
                            <tfoot>
                            <tr class=\"info\">
                            <th>N°</th>
                            <th>Créé</th>
                            <th>Description</th>
                            <th>Etat</th>
                            </tr>
                            </tfoot>
                            </table><br><br>

                                                                                                                <div class=\"headline v3 text-center\">
                                <h4>Mes devis validés</h4>
                            </div>                            

                                                                                                                <table id=\"annonce\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                           <thead>
                                   <tr class=\"info\">
                                      <th>N°</th>
                                      <th>Créé</th>
                                      <th>Description</th>
                                      <th>Etat</th>
                                   </tr>
                               </thead>
                            <tbody>
                             {% for key, annonce in annonces if annonce.reserveEtat == 'V' %}
                             
                            <tr>
                               <td>
                                   {{ key + 1 }}
                               </td>
                               <td>
                                       {{ annonce.annonce.dateCreation|date('d/m/Y') }}
                               </td>
                               <td>
                                {{ annonce.annonce.description }}
                               </td>
                                   
                                    <td>
                                      <strong>Dévis validé</strong>
                                    </td>
                                   
                               <td>
                                   <a href=\"{{ path('ls_imarket_voir_annonce', {'id': annonce.id})}}\" class=\"iconic iconic-visibility\"></a>
                               </td>
                            </tr>
                            {% else %}
                            <tr class=\"alert alert-info\">
                               <td colspan=\"3\">
                                   <center><strong>Vous n'avez aucun devis validé !</strong></center>
                               </td>
                            </tr>
                            
                            {% endfor %}
                            </tbody>
                            <tfoot>
                            <tr class=\"info\">
                            <th>N°</th>
                            <th>Créé</th>
                            <th>Description</th>
                            <th>Etat</th>
                            </tr>
                            </tfoot>
                            </table><br><br>

                                                                                                                </div>
                                                                                                                <div class=\"tag-box tag-box-v1\">
                            <h3>Mes facturations</h3>
                                                                                                                <br>
                            <div class=\"headline v3 text-center\">
                               <h4>Mes factures à recevoir</h4>
                            </div>

                                                                                                                <table id=\"annonce\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                           <thead>
                                   <tr class=\"info\">
                                      <th>N°</th>
                                      <th>Créé</th>
                                      <th>Description</th>
                                      <th>Etat</th>
                                   </tr>
                               </thead>
                            <tbody>
                            {% for key, annonce in annonces if annonce.reserveEtat == 'V'%}
                            
                            <tr>
                               <td>
                                   {{ key + 1 }}
                               </td>
                               <td>
                                           {{ annonce.annonce.dateCreation|date('d/m/Y') }}
                               </td>
                               <td>
                                   {{ annonce.annonce.description }}
                               </td>
                               
                                <td> <a class=\"btn btn-success\" href=\"#\"> Consulter la facture</a></td>
                              
                               {# <td>
                                   <a href=\"{{ path('ls_imarket_voir_annonce', {'id': annonce.id})}}\" class=\"iconic iconic-visibility\"></a>
                               </td> #}
                            </tr>
                            {% else %}
                            <tr class=\"alert alert-info\">
                               <td colspan=\"3\">
                                   <center><strong>Vous n'avez aucune facture !</strong></center>
                               </td>
                            </tr>
                            
                            {% endfor %}
                            </tbody>
                            <tfoot>
                            <tr class=\"info\">
                            <th>N°</th>
                            <th>Créé</th>
                            <th>Description</th>
                            <th>Etat</th>
                            </tr>
                            </tfoot>
                            </table><br><br>

                            <div class=\"headline v3 text-center\">
                                <h4>Mes factures archivées</h4>
                            </div>  

                                                                                                                <table id=\"annonce\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                           <thead>
                                   <tr class=\"info\">
                                      <th>N°</th>
                                      <th>Créé</th>
                                      <th>Description</th>
                                      <th>Etat</th>
                                   </tr>
                               </thead>
                            <tbody>
                            {% for key, annonce in annonces if annonce.reserveEtat == 'V' %}
                          
                            <tr>
                               <td>
                                   {{ key + 1 }}
                               </td>
                               <td>
                                           {{ annonce.annonce.dateCreation|date('d/m/Y') }}
                               </td>
                               <td>
                                   {{ annonce.annonce.description }}
                               </td>
                               
                                <td> <a class=\"btn btn-warning\" href=\"#\"> Archiver la facture</a></td>
                              
                              {#  <td>
                                   <a href=\"{{ path('ls_imarket_voir_annonce', {'id': annonce.id})}}\" class=\"iconic iconic-visibility\"></a>
                               </td> #}
                            </tr>
                            {% else %}
                            <tr class=\"alert alert-info\">
                               <td colspan=\"3\">
                                   <center><strong>Vous n'avez aucune facture à archiver !</strong></center>
                               </td>
                            </tr>
                            
                            {% endfor %}
                            </tbody>
                            <tfoot>
                            <tr class=\"info\">
                            <th>N°</th>
                            <th>Créé</th>
                            <th>Description</th>
                            <th>Etat</th>
                            </tr>
                            </tfoot>
                            </table><br><br>
                                                                                                                </div>

                                                                                                                <p><blockquote class=\"v1\">
                            JE SUIS OFFREUR
                            </blockquote></p>
                            
                                                                                                                <div class=\"tag-box tag-box-v1\">
                                                                                                                <p><h3>Mes devis</h3></p>
                                                                                                                <br>
                            <div class=\"headline v3 text-center\">
                                <h4>Mes devis en attente de validation</h4>
                            </div>
                                                                                                                <table id=\"annonce\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                           <thead>
                                   <tr class=\"info\">
                                      <th>N°</th>
                                      <th>Créé</th>
                                      <th>Description</th>
                                      <th>Etat</th>
                                   </tr>
                               </thead>
                            <tbody>
                            {% for key, annonceR in annoncesR if annonceR.reserveEtat == 'A' %}
                            
                            <tr>
                               <td>
                                   {{ key + 1 }}
                               </td>
                               <td>
                                       {{ annonceR.annonce.dateCreation|date('d/m/Y') }}
                               </td>
                               <td>
                                {{ annonceR.annonce.description }}
                               </td>
                                   
                                    <td>
                                      En attente de validation
                                    </td>
                                   
                               <td>
                                   <a href=\"{{ path('ls_imarket_voir_annonce', {'id': annonceR.id})}}\" class=\"iconic iconic-visibility\"></a>
                               </td>
                            </tr>
                            {% else %}
                            <tr class=\"alert alert-info\">
                               <td colspan=\"3\">
                                   <center><strong>Vous n'avez aucun devis en attente de validation !</strong></center>
                               </td>
                            </tr>
                            
                            {% endfor %}
                            </tbody>
                            <tfoot>
                            <tr class=\"info\">
                            <th>N°</th>
                            <th>Créé</th>
                            <th>Description</th>
                            <th>Etat</th>
                            </tr>
                            </tfoot>
                            </table><br><br>

  
                                                                                                                <div class=\"headline v3 text-center\">                                                                                                                
                                <h4>Mes devis refusés</h4>
                            </div>
                                                                                                                <table id=\"annonce\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                           <thead>
                                   <tr class=\"info\">
                                  <th>N°</th>
                                  <th>Créé</th>
                                  <th>Description</th>
                                  <th>Etat</th>
                                   </tr>
                               </thead>
                            <tbody>
                             {% for key, annonceR in annoncesR if annonceR.reserveEtat == 'R' %}
                            
                            <tr>
                               <td>
                                   {{ key + 1 }}
                               </td>
                               <td>
                                       {{ annonceR.annonce.dateCreation|date('d/m/Y') }}
                               </td>
                               <td>
                                {{ annonceR.annonce.description }}
                               </td>
                                   
                                    <td>
                                      <strong>Dévis refusé</strong>
                                    </td>
                                   
                               <td>
                                   <a href=\"{{ path('ls_imarket_voir_annonce', {'id': annonceR.id})}}\" class=\"iconic iconic-visibility\"></a>
                               </td>ter</a>
                            </tr>
                            {% else %}
                            <tr class=\"alert alert-info\">
                               <td colspan=\"3\">
                                   <center><strong>Vous n'avez aucun devis refusé !</strong></center>
                               </td>
                            </tr>
                            
                            {% endfor %}
                            </tbody>
                            <tfoot>
                            <tr class=\"info\">
                            <th>N°</th>
                            <th>Créé</th>
                            <th>Description</th>
                            <th>Etat</th>
                            </tr>
                            </tfoot>
                            </table><br><br>


                            <div class=\"headline v3 text-center\">
                                <h4>Mes devis validés</h4>
                            </div>
                                                                                                                <table id=\"annonce\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                           <thead>
                                   <tr class=\"info\">
                                      <th>N°</th>
                                      <th>Créé</th>
                                      <th>Description</th>
                                      <th>Etat</th>
                                   </tr>
                               </thead>
                            <tbody>
                           {% for key, annonceR in annoncesR if annonceR.reserveEtat == 'V' %}
                           
                            <tr>
                               <td>
                                   {{ key + 1 }}
                               </td>
                               <td>
                                       {{ annonceR.annonce.dateCreation|date('d/m/Y') }}
                               </td>
                               <td>
                                {{ annonceR.annonce.description }}
                               </td>
                                   
                                    <td>
                                     <strong>Dévis validé</strong>
                                    </td>
                                   
                               <td>
                                   <a href=\"{{ path('ls_imarket_voir_annonce', {'id': annonceR.id})}}\" class=\"iconic iconic-visibility\"></a>
                               </td>
                            </tr>
                            {% else %}
                            <tr class=\"alert alert-info\">
                               <td colspan=\"3\">
                                   <center><strong>Vous n'avez aucun devis validé !</strong></center>
                               </td>
                            </tr>
                            
                            {% endfor %}
                            </tbody>
                            <tfoot>
                            <tr class=\"info\">
                            <th>N°</th>
                            <th>Créé</th>
                            <th>Description</th>
                            <th>Etat</th>
                            </tr>
                            </tfoot>
                            </table><br><br>
 
                                                                                                                </div>

                                                                                                                <div class=\"tag-box tag-box-v1\">
                            <h3>Mes facturations</h3>

                            <div class=\"headline v3 text-center\">
                                <h4>Mes factures à établir</h4>
                            </div>
                                                                                                          <table id=\"annonce\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                           <thead>
                                   <tr class=\"info\">
                                      <th>N°</th>
                                      <th>Créé</th>
                                      <th>Description</th>
                                      <th>Etat</th>
                                   </tr>
                               </thead>
                            <tbody>
                            {% for key, annonceR in annoncesR if annonceR.reserveEtat == 'V' %}
                             
                            <tr>
                               <td>
                                   {{ key + 1 }}
                               </td>
                               <td>
                                           {{ annonceR.annonce.dateCreation|date('d/m/Y') }}
                               </td>
                               <td>
                                   {{ annonceR.annonce.description }}
                               </td>
                               
                                <td> <a class=\"btn btn-success\" href=\"#\"> Génerer la pré-facture </a></td>
                              
                               {# <td>
                                   <a href=\"{{ path('ls_imarket_voir_annonce', {'id': annonce.id})}}\">Consulter</a>
                               </td> #}
                            </tr>
                            {% else %}
                            <tr class=\"alert alert-info\">
                               <td colspan=\"3\">
                                   <center><strong>Vous n'avez aucune facture !</strong></center>
                               </td>
                            </tr>
                            
                            {% endfor %}
                            </tbody>
                            <tfoot>
                            <tr class=\"info\">
                            <th>N°</th>
                            <th>Créé</th>
                            <th>Description</th>
                            <th>Etat</th>
                            </tr>
                            </tfoot>
                            </table><br><br>


                            <div class=\"headline v3 text-center\">
                                <h4>Mes factures envoyées</h4>
                            </div>
                                                                                                                <table id=\"annonce\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                           <thead>
                                   <tr class=\"info\">
                                      <th>N°</th>
                                      <th>Créé</th>
                                      <th>Description</th>
                                      <th>Etat</th>
                                   </tr>
                               </thead>
                            <tbody>
                            {% for key, annonceR in annoncesR if annonceR.reserveEtat == 'V' %}
                              
                            <tr>
                               <td>
                                   {{ key + 1 }}
                               </td>
                               <td>
                                           {{ annonceR.annonce.dateCreation|date('d/m/Y') }}
                               </td>
                               <td>
                                   {{ annonceR.annonce.description }}
                               </td>
                               
                                <td> <a class=\"btn btn-warning\" href=\"#\"> Archiver la facture </a></td>
                              
                               {# <td>
                                   <a href=\"{{ path('ls_imarket_voir_annonce', {'id': annonce.id})}}\">Consulter</a>
                               </td>
 #}                           </tr>
                            {% else %}
                            <tr class=\"alert alert-info\">
                               <td colspan=\"3\">
                                   <center><strong>Vous n'avez aucune facture !</strong></center>
                               </td>
                            </tr>
                            {% endfor %}
                            </tbody>
                            <tfoot>
                            <tr class=\"info\">
                            <th>N°</th>
                            <th>Créé</th>
                            <th>Description</th>
                            <th>Etat</th>
                            </tr>
                            </tfoot>
                            </table><br><br>
                                                                                                                </div>  
                            <!-- fin bloc facturation --> 
                          </div>  
                        </div>
                      </form>
                      <form class=\"form-1 hidden\" id=\"form-12\">
                        <div class=\"row pad-top-large\">
                          <div class=\"col-md-12\" style=\"text-align:left\">
                            <!-- Bloc paramètres -->
                                                                                                            <br><br>
                                                                                                            <div class=\"col-md-9\">
                                                                                                                       <div class=\"tag-box tag-box-v2\">
                                                                                                                         Attention, vous ne devez pas dépasser votre budget annuel lors des réservations des produits disponibles en location.</br>
                                                                                                                         Toute location entraînant un dépassement du budget prévisionnel nécessitera le téléchargement des documents nécessaires à la justification.</br>
                                                                                                                         Notre service juridique se fera un plaisir de vous assister pour compléter votre dossier.
                                                                                                                          Vos documents téléchargés sont accessibles ici :</br> 
                                                                                                                         - <a href=\"{{ path('lsi_market_homepage') }}\">Budget annuelle achat entre EPCI</a></br>
                                                                                                                         - <a href=\"{{ path('lsi_market_homepage') }}\">Décision légale sur la gestion des biens publics</a>
 
                                                                                                                       </div>
                                                                                                           </div>                               
                                                                                                         <div class=\"widget widget-newsletter\">
                             <div class=\"col-md-4\">
                             <h4>Gestion du budget annuel d'achat</h4>
                               <div class=\"form-content newsletter-sidebar\">
                                 {% if app.user.mairie.budgetInitial is not null %}
                                    <div class=\"row\">
                                      <div class=\"form-group\">
                                         <p><span class=\"alert alert-info\">Budget annuel : {{ app.user.mairie.budgetInitial }} €</span></p>
                                      </div>
                                      <div class=\"form-group\">
                                         <p><span class=\"alert alert-info\">Budget restant : {{ app.user.mairie.budgetRestant }} €</span></p>
                                      </div>
                                    
                                      <div class=\"form-group\">
                                         <p><span class=\"alert alert-info\">Vous avez déjà définit un budget </span></p>
                                      </div>
                                 </div>  
                               {% else %}
                                 <form method=\"POST\" action=\"{{ path('ls_imarket_mon_espace') }}\">
                                     <div class=\"form-group\">
                                         <input type=\"text\" placeholder=\"Budget annuel\" name=\"budget\" id=\"budget\" class=\"form-control input-lg\" required>
                                     </div>
                                     <div class=\"row\">
                                         {% if erreur is defined and erreur != \"\" %}
                                             {{ erreur }}
                                         {% endif %}
                                     </div>
                                      <div class=\"form-group\">
                                        <input type=\"submit\" value=\"Valider\" name=\"val\" id=\"val\" class=\"pull-right btn btn-info\" />
                                      </div>
                                      <div class=\"form-messges hidden\">
                                      </div>
                                 </form>
                               {% endif %}       
                              </div>
                                                                                                                     
                             </div>                                                                                                                 
                           
                           <div class=\"col-md-5\">
                               <h4>Gestion des prix avant MAD</h4>
                               <div class=\"form-content newsletter-sidebar\">
                                 <form data-parsley-validate>
                                  <div class=\"form-group\">
                                    <input type=\"text\" placeholder=\"Remise pour mon EPCI : 40%\" name=\"name\" class=\"form-control input-lg\" required>
                                  </div>
                                  <div class=\"form-group\">
                                    <input type=\"text\" placeholder=\"Remise pour les associations de mon EPCI : 15%\" name=\"email\" class=\"form-control input-lg\" required>
                                  </div>
                                  <div class=\"form-group\">
                                    <button class=\"pull-right btn btn-info\">Valider</button>
                                  </div>
                                  <div class=\"form-messges hidden\">         
                                  </div>
                                </form>       
                              </div>
                           </div>
  
                                                                                                         <div class=\"col-md-9\" style=\"margin-top:20px\">
                                                                                                            <div class=\"headline v3 text-center\"><h4>Gestion des CGU / CGV / Assurances</h4></div></br>
                                                                                                            <p><a href=\"#\">Conditions d'utilisations</a> <button id=\"bt-contact\" type=\"button\" class=\"pull-right btn btn-default btn-xs\" data-target=\"#cgu\">Modifier</button></p>
                                                                                                             <div id=\"cgu\" class=\"tohide\">
                                                                                                             <input type=\"file\" id=\"file\">
                                                                                                                  <span class=\"custom-file-control\"></span>
                                                                                                                  <button class=\"btn btn-primary btn-large pull-right\">Enregistrer</button>
                                                                                                                         <br>
                                                                                                             </div>
                                                                                                            <p><a href=\"#\">Conditions de vente</a> <button class=\"pull-right btn btn-default btn-xs\">Modifier</button></p>
                                                                                                            <p><a href=\"#\">Contrat d'assurance</a> <button class=\"pull-right btn btn-default btn-xs\">Modifier</button></p>
                                                                                                         </div>


                                                                                                         <div class=\"col-md-9\" style=\"margin-top:20px\">
                                                                                                            <div class=\"headline v3 text-center\"><h4>Planning global des biens</h4></div></br>
                                                                                                         <div> 

                            <!-- fin bloc paramètres -->
                          </div>
                        </div>  
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Menu - Info --> 
          </article>
        
                </div>                 
            </div>

            <div class=\"tab-pane fade\" id=\"syntese\">               
        <div class=\"contents\">
          <article class=\"section__wrapper\">
          <!-- Menu - Info -->
            <div class=\"search-interaction row-float\">
              <div  id=\"map-cotnent2\">
                <div class=\"map-search-form row-float\" >
                  <div class=\"container\">
                    <div class=\"row pad-top-large\">
                      <div class=\"form-tab\">
                      <a class=\"active\"  href=\"#form-17\">TDB</a>
                      <a href=\"#form-18\">Synthèse</a>
                      </div>
                    </div>
                    <div class=\"form-content form-cotent-map\">
                      <form class=\"form-1\" id=\"form-17\">
                        <div class=\"row pad-top-large\">
                          <div class=\"col-md-12\" style=\"text-align:left\">
                            <!-- bloc TDB -->
                            
                                                                                                                        <br>
                              <div class=\"col-md-9\"
                               <div class=\"kt-pagebody\">
                               
                                  <div class=\"row row-sm\">
                                    <div class=\"col-lg-4\">
                                    <div class=\"card pd-20\">
                                      <h6 class=\"tx-12 tx-uppercase tx-inverse tx-bold mg-b-15\">Rapport de location</h6>
                                      <div class=\"d-flex mg-b-10\">
                                      <div class=\"bd-r pd-r-10\">
                                        <label class=\"tx-12\">Aujourd'hui</label>
                                        <p class=\"tx-lato tx-inverse tx-bold\">1,898</p>
                                      </div>
                                      <div class=\"bd-r pd-x-10\">
                                        <label class=\"tx-12\">Semaine</label>
                                        <p class=\"tx-lato tx-inverse tx-bold\">32,112</p>
                                      </div>
                                      <div class=\"pd-l-10\">
                                        <label class=\"tx-12\">Mois</label>
                                        <p class=\"tx-lato tx-inverse tx-bold\">72,067</p>
                                      </div>
                                      </div><!-- d-flex -->
                                      <div class=\"progress mg-b-10\">
                                      <div class=\"progress-bar wd-50p\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">50%</div>
                                      </div>
                                      <p class=\"tx-12 mg-b-0\">Maecenas tempus, tellus eget condimentum rhoncus</p>
                                    </div><!-- card -->
                                    </div><!-- col-4 -->
                                    <div class=\"col-lg-4 mg-t-20 mg-lg-t-0\">
                                    <div class=\"card pd-20 bg-app-primary bd-0 tx-white-6\">
                                      <h6 class=\"tx-12 tx-uppercase tx-white mg-b-15\">Rapport de MAD</h6>
                                      <div class=\"d-flex mg-b-10\">
                                      <div class=\"bd-r bd-white-2 pd-r-10\">
                                        <label class=\"tx-12\">Aujourd'hui</label>
                                        <p class=\"tx-lato tx-white tx-bold\">1,898</p>
                                      </div>
                                      <div class=\"bd-r bd-white-2 pd-x-10\">
                                        <label class=\"tx-12\">Semaine</label>
                                        <p class=\"tx-lato tx-white tx-bold\">32,112</p>
                                      </div>
                                      <div class=\"pd-l-10\">
                                        <label class=\"tx-12\">Mois</label>
                                        <p class=\"tx-lato tx-white tx-bold\">72,067</p>
                                      </div>
                                      </div><!-- d-flex -->
                                      <div class=\"progress bg-white-2 mg-b-10\">
                                      <div class=\"progress-bar bg-warning wd-50p\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">50%</div>
                                      </div>
                                      <p class=\"tx-12 mg-b-0\">Maecenas tempus, tellus eget condimentum rhoncus</p>
                                    </div><!-- card -->
                                    </div><!-- col-4 -->
                                    <div class=\"col-lg-4 mg-t-20 mg-lg-t-0\">
                                    <div class=\"card pd-20 bg-dark bd-0 tx-white-6\">
                                      <h6 class=\"tx-12 tx-uppercase tx-white mg-b-15\">Rapport des stocks</h6>
                                      <div class=\"d-flex mg-b-10\">
                                      <div class=\"bd-r bd-white-2 pd-r-10\">
                                        <label class=\"tx-12\">Aujourd'hui</label>
                                        <p class=\"tx-lato tx-white tx-bold\">1,898</p>
                                      </div>
                                      <div class=\"bd-r bd-white-2 pd-x-10\">
                                        <label class=\"tx-12\">Semaine</label>
                                        <p class=\"tx-lato tx-white tx-bold\">32,112</p>
                                      </div>
                                      <div class=\"pd-l-10\">
                                        <label class=\"tx-12\">Mois</label>
                                        <p class=\"tx-lato tx-white tx-bold\">72,067</p>
                                      </div>
                                      </div><!-- d-flex -->
                                      <div class=\"progress bg-white-2 mg-b-10\">
                                      <div class=\"progress-bar bg-info  wd-50p\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">50%</div>
                                      </div>
                                      <p class=\"tx-12 mg-b-0\">Maecenas tempus, tellus eget condimentum rhoncus</p>
                                    </div><!-- card -->
                                    </div><!-- col-4 -->
                                  </div><!-- row -->

                                  <div class=\"row row-sm mg-t-20\">
                                    <div class=\"col-xl-8\">
                                    <div class=\"card bd-gray-300\">
                                      <div class=\"card-header bg-gray-100 pd-y-15 pd-x-20\">
                                      <h6 class=\"card-title tx-uppercase tx-12 mg-b-0\">Historique des transactions</h6>
                                      </div><!-- card-header -->
                                      <div class=\"table-responsive\">
                                      <table class=\"table table-white mg-b-0 tx-12\">
                                        <tbody>
                                        <tr>
                                          <td class=\"pd-l-20 tx-center\">
                                          <img src=\"{{ asset('bundles/lsimarket/images/img1.jpg') }}\"  class=\"wd-36 rounded-circle\" alt=\"Image\">
                                          </td>
                                          <td>
                                          <a href=\"\" class=\"tx-inverse tx-14 tx-medium d-block\">Mark K. Peters</a>
                                          <span class=\"tx-11 d-block\">EPCI: Paris</span>
                                          </td>
                                          <td class=\"tx-12\">
                                          <span class=\"square-8 bg-success mg-r-5 rounded-circle\"></span> Attente de validation
                                          </td>
                                          <td>Just Now</td>
                                        </tr>
                                        <tr>
                                          <td class=\"pd-l-20 tx-center\">
                                          <img src=\"{{ asset('bundles/lsimarket/images/img2.jpg') }}\"  class=\"wd-36 rounded-circle\" alt=\"Image\">
                                          </td>
                                          <td>
                                          <a href=\"\" class=\"tx-inverse tx-14 tx-medium d-block\">Karmen F. Brown</a>
                                          <span class=\"tx-11 d-block\">EPCI: IDF</span>
                                          </td>
                                          <td class=\"tx-12\">
                                          <span class=\"square-8 bg-warning mg-r-5 rounded-circle\"></span> Attente verification
                                          </td>
                                          <td>Apr 21, 2017 8:34am</td>
                                        </tr>
                                        <tr>
                                          <td class=\"pd-l-20 tx-center\">
                                          <img src=\"{{ asset('bundles/lsimarket/images/img3.jpg') }}\"  class=\"wd-36 rounded-circle\" alt=\"Image\">
                                          </td>
                                          <td>
                                          <a href=\"\" class=\"tx-inverse tx-14 tx-medium d-block\">Gorgonio Magalpok</a>
                                          <span class=\"tx-11 d-block\">EPCI: Toulouse</span>
                                          </td>
                                          <td class=\"tx-12\">
                                          <span class=\"square-8 bg-success mg-r-5 rounded-circle\"></span> Retour réalisé
                                          </td>
                                          <td>Apr 10, 2017 4:40pm</td>
                                        </tr>
                                        <tr>
                                          <td class=\"pd-l-20 tx-center\">
                                          <img src=\"{{ asset('bundles/lsimarket/images/img5.jpg') }}\"  class=\"wd-36 rounded-circle\" alt=\"Image\">
                                          </td>
                                          <td>
                                          <a href=\"\" class=\"tx-inverse tx-14 tx-medium d-block\">Ariel T. Hall</a>
                                          <span class=\"tx-11 d-block\">EPCI: IDF</span>
                                          </td>
                                          <td class=\"tx-12\">
                                          <span class=\"square-8 bg-warning mg-r-5 rounded-circle\"></span>Paiement en attente
                                          </td>
                                          <td>Apr 02, 2017 6:45pm</td>
                                        </tr>
                                        <tr>
                                          <td class=\"pd-l-20 tx-center\">
                                          <img src=\"{{ asset('bundles/lsimarket/images/img4.jpg') }}\"  class=\"wd-36 rounded-circle\" alt=\"Image\">
                                          </td>
                                          <td>
                                          <a href=\"\" class=\"tx-inverse tx-14 tx-medium d-block\">John L. Goulette</a>
                                          <span class=\"tx-11 d-block\">EPCI: Nante</span>
                                          </td>
                                          <td class=\"tx-12\">
                                          <span class=\"square-8 bg-pink mg-r-5 rounded-circle\"></span> Paiement validée
                                          </td>
                                          <td>Mar 30, 2017 10:30am</td>
                                        </tr>
                                        <tr>
                                          <td class=\"pd-l-20 tx-center\">
                                          <img src=\"{{ asset('bundles/lsimarket/images/img5.jpg') }}\"  class=\"wd-36 rounded-circle\" alt=\"Image\">
                                          </td>
                                          <td>
                                          <a href=\"\" class=\"tx-inverse tx-14 tx-medium d-block\">John L. Goulette</a>
                                          <span class=\"tx-11 d-block\">EPCI: Auxerre</span>
                                          </td>
                                          <td class=\"tx-12\">
                                          <span class=\"square-8 bg-pink mg-r-5 rounded-circle\"></span> Demande annulée
                                          </td>
                                          <td>Mar 30, 2017 10:30am</td>
                                        </tr>
                                        </tbody>
                                      </table>
                                      </div><!-- table-responsive -->
                                      <div class=\"card-footer tx-12 pd-y-15 bd-gray-300 bd-t\">
                                      <a href=\"\"><i class=\"fa fa-angle-down mg-r-5\"></i>Historique des transactions</a>
                                      </div><!-- card-footer -->
                                    </div><!-- card -->

                                    <div class=\"row row-sm mg-t-20\">
                                      <div class=\"col-sm-6\">
                                      <div class=\"card\">
                                        <div class=\"card-body pd-b-0\">
                                        <h6 class=\"card-body-title tx-12 tx-spacing-2 mg-b-20 tx-success\">Annonces MAD</h6>
                                        <h2 class=\"tx-lato tx-inverse\">4</h2>
                                        <p class=\"tx-12\"><span class=\"tx-success\">2.5%</span> d'équipement en location </p>
                                        </div><!-- card-body -->
                                        <div id=\"rs1\" class=\"ht-50 ht-sm-70 mg-r--1\"></div>
                                      </div><!-- card -->
                                      </div><!-- col-6 -->
                                      <div class=\"col-sm-6 mg-t-20 mg-sm-t-0\">
                                      <div class=\"card\">
                                        <div class=\"card-body pd-b-0\">
                                        <h6 class=\"card-body-title tx-12 tx-spacing-2 mg-b-20 tx-danger\">En attente de location</h6>
                                        <h2 class=\"tx-lato tx-inverse\">12</h2>
                                        <p class=\"tx-12\"><span class=\"tx-success\">2.5%</span> de location en moins de 24H00</p>
                                        </div><!-- card-body -->
                                        <div id=\"rs2\" class=\"ht-50 ht-sm-70 mg-r--1\"></div>
                                      </div><!-- card -->
                                      </div><!-- col-6 -->
                                      <div class=\"col-sm-6 mg-t-20\">
                                      <div class=\"card\">
                                        <div class=\"card-body pd-b-0\">
                                        <h6 class=\"card-body-title tx-12 tx-spacing-2 mg-b-20 tx-info\">En attente de paiement</h6>
                                        <h2 class=\"tx-lato tx-inverse\">4</h2>
                                        <p class=\"tx-12\"><span class=\"tx-success\">2.5%</span> de paiement en 72 heures</p>
                                        </div><!-- card-body -->
                                        <div id=\"rs3\" class=\"ht-50 ht-sm-70 mg-r--1\"></div>
                                      </div><!-- card -->
                                      </div><!-- col-6 -->
                                      <div class=\"col-sm-6 mg-t-20\">
                                      <div class=\"card\">
                                        <div class=\"card-body pd-b-0\">
                                        <h6 class=\"card-body-title tx-12 tx-spacing-2 mg-b-20 tx-primary\">Annulées</h6>
                                        <h2 class=\"tx-lato tx-inverse\">5</h2>
                                        <p class=\"tx-12\"><span class=\"tx-success\">2.5%</span> d'annulation automatique</p>
                                        </div><!-- card-body -->
                                        <div id=\"rs4\" class=\"ht-50 ht-sm-70 mg-r--1\"></div>
                                      </div><!-- card -->
                                      </div><!-- col-6 -->
                                    </div><!-- row -->

                                    

                                    </div><!-- col-8 -->
                                    <div class=\"col-xl-4 mg-t-20\">


                                    <div class=\"card bd-0\">
                                      <div id=\"map1\"></div>
                                     
                                    </div><!-- card -->

                                    <div class=\"card mg-t-20\">
                                      <div class=\"card-header d-flex justify-content-between\">
                                      <span class=\"tx-uppercase tx-12 tx-medium tx-inverse\">Derniers échanges</span>
                                      <a href=\"\" class=\"tx-gray-600\"><i class=\"icon ion-more\"></i></a>
                                      </div><!-- card-header -->
                                      <div class=\"list-group list-group-flush\">
                                      <div class=\"list-group-item\">
                                        <div class=\"media\">
                                        <img src=\"{{ asset('bundles/lsimarket/images/img1.jpg') }}\"  class=\"wd-30 rounded-circle\" alt=\"\">
                                        <div class=\"media-body mg-l-10\">
                                          <h6 class=\"mg-b-0 tx-inverse tx-13\">Katherine Lumaad</h6>
                                          <p class=\"mg-b-0 tx-gray-500 tx-12\">an hour ago</p>
                                        </div><!-- media-body -->
                                        </div><!-- media -->
                                        <p class=\"mg-t-10 mg-b-0 tx-13\">The European languages are members of the same family. Their separate existence is a myth...</p>
                                      </div><!-- list-group-item -->
                                      <div class=\"list-group-item\">
                                        <div class=\"media\">
                                        <img src=\"{{ asset('bundles/lsimarket/images/img2.jpg') }}\"  class=\"wd-30 rounded-circle\" alt=\"\">
                                        <div class=\"media-body mg-l-10\">
                                          <h6 class=\"mg-b-0 tx-inverse tx-13\">Mary Grace Ceballos</h6>
                                          <p class=\"mg-b-0 tx-gray-500 tx-12\">2 hours ago</p>
                                        </div><!-- media-body -->
                                        </div><!-- media -->
                                        <p class=\"mg-t-10 mg-b-0 tx-13\">The European languages are members of the same family. Their separate existence is a myth...</p>
                                      </div><!-- list-group-item -->
                                      <div class=\"list-group-item\">
                                        <div class=\"media\">
                                        <img src=\"{{ asset('bundles/lsimarket/images/img4.jpg') }}\"  class=\"wd-30 rounded-circle\" alt=\"\">
                                        <div class=\"media-body mg-l-10\">
                                          <h6 class=\"mg-b-0 tx-inverse tx-13\">Rowella Sombrio</h6>
                                          <p class=\"mg-b-0 tx-gray-500 tx-12\">3 hours ago</p>
                                        </div><!-- media-body -->
                                        </div><!-- media -->
                                        <p class=\"mg-t-10 mg-b-0 tx-13\">The European languages are members of the same family. Their separate existence is a myth...</p>
                                      </div><!-- list-group-item -->
                                      </div><!-- list-group -->
                                      <div class=\"card-footer\">
                                      <a href=\"\" class=\"tx-12\"><i class=\"fa fa-angle-down mg-r-5\"></i> Show all messages</a>
                                      </div><!-- card-footer -->
                                    </div><!-- card -->
                                    </div>

                            <!-- fin bloc TDB -->
                          </div>            
                        </div>
                      </form>  
                      <form class=\"form-1 hidden\" id=\"form-18\">
                        <div class=\"row pad-top-large\">
                          <div class=\"col-md-12\" style=\"text-align:left\">
                            <!-- bloc info -->  
                            Etat de synthèse
                            <!-- fin bloc info -->  
                          </div>  
                        </div>
                      </form>             
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- Menu - Info -->
          </article>
        </div>      
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- Properties description // -->
    
    
  </div>
</section>
<!-- Page layout // -->


    {% endblock monespace %}
{% endblock body %}

{% block javascripts %}
<script type=\"text/javascript\" src=\"{{ asset('bundles/lsimarket/js/vendor/vendor.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('bundles/lsimarket/js/main.js') }}\"></script> 
<script type=\"text/javascript\" src=\"{{ asset('bundles/lsimarket/js/select.js') }}\"></script>
<script type=\"text/javascript\">

\$(\".tohide\").hide();
\$(\".btn-group-lg\").on(\"click\", function() {
  var target = \$(this).data(\"target\");
  if(target!==undefined) {
    \$(target).toggle();
      \$(this).toggleClass(\"active\",\$(target).is(\":visible\"));
  }
});

</script>   
{% endblock javascripts %}  ", "LSIMarketBundle::monespace.html.twig", "C:\\wamp\\www\\laschekina0311\\laschekina0311\\src\\LSI\\MarketBundle/Resources/views/monespace.html.twig");
    }
}
