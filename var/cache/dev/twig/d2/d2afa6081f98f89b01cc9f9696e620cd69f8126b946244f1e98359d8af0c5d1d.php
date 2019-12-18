<?php

/* layout.html.twig */
class __TwigTemplate_af40be3577134db13918094e0209b329a75e4825b1a92b1a47f6c9dccd73213c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8 \" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "
   </head>
<body>

<!--[if lt IE 9]>
   <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class=\"navigation-mobile\">
   <div>
      <i class=\"iconic iconic-close\" id=\"mobileNav2\"></i>
   </div>
   <ul>\t
       <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lsi_market_homepage");
        echo "\">Accueil</a></li>
       <li><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_liste_annonce");
        echo "\">Annonces</a></li>
       <li class=\"dropdown\">
           <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Mon espace</a>
\t   <ul class=\"dropdown-menu\">
\t      <li class=\"dropdown\">
                 <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Espace offreur</a>
\t\t <ul class=\"dropdown-menu\">
\t\t     <li><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_mes_annonces");
        echo "\">Mes annonces</a></li>
\t\t     <li><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_reservations_sur_mes_annonces");
        echo "\">Réservations sur mes annonces</a></li>
\t\t</ul>
\t      </li>
\t     <li class=\"dropdown\">
                   <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Espace demandeur</a>
\t\t   <ul class=\"dropdown-menu\">
\t\t      <li><a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_mes_reservations");
        echo "\">Mes réservations</a></li>
\t\t      <li><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_mes_commandes");
        echo "\">Mes commandes</a></li>
\t          </ul>
\t      </li>\t\t\t    \t\t\t\t
\t   </ul>
       </li>
       <li><a href=\"#\">Profils</a>
\t   <ul class=\"dropdown-menu\">
\t      <li><a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lsi_market_a_propos");
        echo "\">A propos</a></li>
\t      <li><a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lsi_market_coordonnees_bancaires");
        echo "\">Coordonnées bancaires</a></li>
\t   </ul>
       </li>
       <li><a href=\"#\">Contact</a></li>
       <li><a href=\"aide\">Aide</a></li> 
        ";
        // line 69
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 70
            echo "           <li class=\"dropdown\">
               <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Messagerie<span class=\"caret\"></span></a>
                   <ul class=\"dropdown-menu\">
                       <li><a href=\"";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_traitement_msgrecu");
            echo "\">Messages recus</a></li>
                       <li><a href=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_traitement_msgenvoye");
            echo "\">Messages envoyes</a></li>                       
                   </ul>
            </li>
           <li class=\"dropdown\">
               <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "<span class=\"caret\"></span></a>
                   <ul class=\"dropdown-menu\">
                       <li><a href=\"";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Profil</a></li>
                       <li><a href=\"";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_mon_espace");
            echo "\">Mon espace</a> </li>
                       ";
            // line 82
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_MAIRIE"), "method")) {
                // line 83
                echo "                           <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_ajouter_annonce");
                echo "\">Créer une annonce</a> </li>
                       ";
            }
            // line 85
            echo "                       <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a>
                       </li>
                    </ul>
            </li>

           ";
        } else {
            // line 91
            echo "              ";
            // line 93
            echo "                  <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Mon compte</a></li>
              ";
        }
        // line 94
        echo " 
   </ul>
</div>
 
<div class=\"wrap\">

<!-- Header  -->

<header class=\"header-v2-mid\">  
      <div class=\"container\">              
      <div class=\"logo\" data-wow-delay=\"200ms\">
      <a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lsi_market_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/logo_civilinc.png"), "html", null, true);
        echo "\" height=\"60\" width=\"60\" alt=\"\" class=\"logo_layout\"\"></a>
    </div>  
           <div class=\"navigation menu_layout\">
              <a href=\"#\" class=\"navigation-button\" id=\"mobileNav\"><i class=\"iconic iconic-menu\"></i></a>               
              <ul>
\t         <li><a href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lsi_market_homepage");
        echo " \" class=\"menu_blue meta-civilinc\">Accueil</a></li>
                 <li><a href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_liste_annonce");
        echo "\" class=\"menu_blue meta-civilinc\">Annonces</a></li>
";
        // line 112
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 113
            echo "\t\t
<li><a href=\"#\" class=\"menu-item-has-children menu_blue meta-civilinc\">Mon espace</a>
\t\t\t\t<ul class=\"dir-right level-1 sub-menu\">
\t\t\t   <li><a href=\"#\">Espace offreur</a>
\t\t\t\t\t   <ul class=\"dir-left\">
\t\t\t\t\t\t   <li><a href=\"";
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_mes_annonces");
            echo "\">Mes annonces</a></li>
\t\t\t\t\t\t   <li><a href=\"";
            // line 119
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_reservations_sur_mes_annonces");
            echo "\">Réservations sur mes annonces</a></li>
\t\t\t\t\t   </ul>
\t\t\t\t</li>
\t\t\t   <li><a href=\"#\">Espace demandeur</a>
\t\t\t\t\t<ul class=\"dir-left\">
\t\t\t\t\t\t   <li><a href=\"";
            // line 124
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_mes_reservations");
            echo "\">Mes réservations</a></li>
\t\t\t\t\t\t   <li><a href=\"";
            // line 125
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_mes_commandes");
            echo "\">Mes commandes</a></li>
\t\t\t\t\t   </ul>
\t\t\t\t   </li>
           <li class=\"dropdown\">
               <a href=\"#\">Messagerie</a>
                   <ul class=\"dir-left\">
                       <li><a href=\"";
            // line 131
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_traitement_msgrecu");
            echo "\">Messages recus</a></li>
                       <li><a href=\"";
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_traitement_msgenvoye");
            echo "\">Messages envoyes</a></li>                       
                   </ul>
            </li>

                                <li><a href=\"#\">Profils</a>
\t\t\t\t\t   <ul class=\"dir-left\">
\t\t\t\t\t\t   <li><a href=\"";
            // line 138
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lsi_market_a_propos");
            echo "\">A propos</a></li>
\t\t\t\t\t\t   <li><a href=\"";
            // line 139
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lsi_market_coordonnees_bancaires");
            echo "\">Coordonnées bancaires</a></li>
\t\t\t\t\t\t   
\t\t\t\t\t   </ul>
\t\t\t\t   </li>
\t\t\t\t    \t\t\t\t
\t\t\t\t</ul>
\t\t\t </li>
";
        }
        // line 146
        echo "  \t 
                 <li><a href=\"#\" class=\"menu_blue meta-civilinc\">Contact</a></li>
\t         <li><a href=\"aide\" class=\"menu_blue meta-civilinc\">Aide</a></li>
                 <li class=\"menu-item-has-children\">
                 ";
        // line 150
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 151
            echo "                 <li class=\"menu-item-has-children\"><a href=\"#\" class=\"menu_blue meta-civilinc\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), 10), "html", null, true);
            echo "<span class=\"caret\"></span></a>
                   <ul class=\"sub-menu\">
                       <li><a href=\"";
            // line 153
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Profil</a></li>
                       <li><a href=\"";
            // line 154
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_mon_espace");
            echo "\">Mon espace</a> </li>
                       ";
            // line 155
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_MAIRIE"), "method")) {
                // line 156
                echo "                           <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_ajouter_annonce");
                echo "\">Créer une annonce</a> </li>
                       ";
            }
            // line 158
            echo "                       <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a></li>
                    </ul>
                 </li>
                 ";
        } else {
            // line 162
            echo "                  <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Mon compte</a></li>
                 ";
        }
        // line 163
        echo "  
\t         
              </ul>
           </div>\t
           <div class=\"search-box\" style=\"position: relative; bottom: 15px\">
                 ";
        // line 168
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("LSIMarketBundle:Market:rechPrincipale"));
        echo "  
           </div> 
    </div>
</header>
<!-- Header // -->




<!-- Page layout // -->
<section class=\"content-section\"  >
  <div class=\"container\">
 <br><br><br>

      ";
        // line 183
        echo "         ";
        $this->displayBlock('body', $context, $blocks);
        // line 186
        echo "      ";
        echo " 

  </div>
</section>
<!-- Page layout // -->









";
        // line 200
        $this->displayBlock('footer', $context, $blocks);
        // line 211
        echo "
        ";
        // line 212
        $this->displayBlock('javascripts', $context, $blocks);
        // line 232
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CIVILINC";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            ";
        // line 8
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"/>
            <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/css/layout.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.3.3/dist/leaflet.css\" integrity=\"sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==\"crossorigin=\"\"/>
            <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/logo_civilinc.png"), "html", null, true);
        echo "\">\t
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/css/style.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/iconic.css"), "html", null, true);
        echo "\">

            <meta name=\"viewport\" content=\"width=device-width\"/>
            <!-- Lien pour le calendrier -->
           
            <!--[if lt IE 10 ]>
            <style type=\"text/css\">
               .navigation-mobile{
               display: none;
               }
            </style>
            <![endif]-->   
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 183
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 184
        echo "
         ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 200
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 201
        echo "<!-- Footer -->

<footer class=\"footer-sub\">
  <div class=\"container\">
    <div class=\"footer-text-1\"><p>Copyright Civilinc © 2018. Tous droits réservés.</</p></div>
    <div class=\"footer-text-2 text-right\"><p>Réalisé par <a href=\"http://www.graphitys-web-design.com/\">Graphitys Web Design</a></p></div>
  </div>
</footer>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 212
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 213
        echo "            ";
        // line 214
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/js/vendor/vendor.js"), "html", null, true);
        echo "\"></script>         
            <script type=\"text/javascript\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/js/main.js"), "html", null, true);
        echo "\"></script>
            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
            <script src=\"//code.jquery.com/jquery-3.3.1.js\"></script>
            <script src=\"//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
            <script src=\"//cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js\"></script>
            <script src=\"https://unpkg.com/leaflet@1.3.3/dist/leaflet.js\" integrity=\"sha512-tAGcCfR4Sc5ZP5ZoVz0quoZDYX5aCtEm/eu1KhSLj2c9eFrylXZknQYmxUssFaVJKvvc0dJQixhGjG2yXWiV9Q==\" crossorigin=\"\">
            </script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.fr.min.js\"></script>

           <!--  Lien pour le calendrier  -->

            ";
        // line 231
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 231,  500 => 215,  495 => 214,  493 => 213,  484 => 212,  465 => 201,  456 => 200,  445 => 184,  436 => 183,  413 => 15,  409 => 14,  405 => 13,  400 => 11,  395 => 8,  393 => 7,  384 => 6,  366 => 5,  354 => 232,  352 => 212,  349 => 211,  347 => 200,  330 => 186,  327 => 183,  310 => 168,  303 => 163,  297 => 162,  289 => 158,  283 => 156,  281 => 155,  277 => 154,  273 => 153,  267 => 151,  265 => 150,  259 => 146,  248 => 139,  244 => 138,  235 => 132,  231 => 131,  222 => 125,  218 => 124,  210 => 119,  206 => 118,  199 => 113,  197 => 112,  193 => 111,  189 => 110,  179 => 105,  166 => 94,  160 => 93,  158 => 91,  148 => 85,  142 => 83,  140 => 82,  136 => 81,  132 => 80,  127 => 78,  120 => 74,  116 => 73,  111 => 70,  109 => 69,  101 => 64,  97 => 63,  87 => 56,  83 => 55,  74 => 49,  70 => 48,  60 => 41,  56 => 40,  42 => 28,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8 \" />
        <title>{% block title %}CIVILINC{% endblock %}</title>
        {% block stylesheets %}
            {# Liens CSS de Bootstrap #}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"/>
            <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.css\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/lsimarket/css/layout.css') }}\"/>
            <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.3.3/dist/leaflet.css\" integrity=\"sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==\"crossorigin=\"\"/>
            <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('bundles/lsimarket/images/logo_civilinc.png') }}\">\t
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/lsimarket/css/style.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/lsimarket/iconic.css') }}\">

            <meta name=\"viewport\" content=\"width=device-width\"/>
            <!-- Lien pour le calendrier -->
           
            <!--[if lt IE 10 ]>
            <style type=\"text/css\">
               .navigation-mobile{
               display: none;
               }
            </style>
            <![endif]-->   
        {% endblock stylesheets  %}

   </head>
<body>

<!--[if lt IE 9]>
   <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class=\"navigation-mobile\">
   <div>
      <i class=\"iconic iconic-close\" id=\"mobileNav2\"></i>
   </div>
   <ul>\t
       <li><a href=\"{{ path('lsi_market_homepage') }}\">Accueil</a></li>
       <li><a href=\"{{ path('ls_imarket_liste_annonce') }}\">Annonces</a></li>
       <li class=\"dropdown\">
           <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Mon espace</a>
\t   <ul class=\"dropdown-menu\">
\t      <li class=\"dropdown\">
                 <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Espace offreur</a>
\t\t <ul class=\"dropdown-menu\">
\t\t     <li><a href=\"{{ path('ls_imarket_mes_annonces') }}\">Mes annonces</a></li>
\t\t     <li><a href=\"{{ path('ls_imarket_reservations_sur_mes_annonces') }}\">Réservations sur mes annonces</a></li>
\t\t</ul>
\t      </li>
\t     <li class=\"dropdown\">
                   <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Espace demandeur</a>
\t\t   <ul class=\"dropdown-menu\">
\t\t      <li><a href=\"{{ path('ls_imarket_mes_reservations') }}\">Mes réservations</a></li>
\t\t      <li><a href=\"{{ path('ls_imarket_mes_commandes') }}\">Mes commandes</a></li>
\t          </ul>
\t      </li>\t\t\t    \t\t\t\t
\t   </ul>
       </li>
       <li><a href=\"#\">Profils</a>
\t   <ul class=\"dropdown-menu\">
\t      <li><a href=\"{{ path('lsi_market_a_propos') }}\">A propos</a></li>
\t      <li><a href=\"{{ path('lsi_market_coordonnees_bancaires') }}\">Coordonnées bancaires</a></li>
\t   </ul>
       </li>
       <li><a href=\"#\">Contact</a></li>
       <li><a href=\"aide\">Aide</a></li> 
        {% if app.user %}
           <li class=\"dropdown\">
               <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Messagerie<span class=\"caret\"></span></a>
                   <ul class=\"dropdown-menu\">
                       <li><a href=\"{{ path('ls_imarket_traitement_msgrecu') }}\">Messages recus</a></li>
                       <li><a href=\"{{ path('ls_imarket_traitement_msgenvoye') }}\">Messages envoyes</a></li>                       
                   </ul>
            </li>
           <li class=\"dropdown\">
               <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">{{ app.user.username }}<span class=\"caret\"></span></a>
                   <ul class=\"dropdown-menu\">
                       <li><a href=\"{{ path('fos_user_profile_show') }}\">Profil</a></li>
                       <li><a href=\"{{ path('ls_imarket_mon_espace') }}\">Mon espace</a> </li>
                       {% if app.user.hasRole('ROLE_MAIRIE') %}
                           <li><a href=\"{{ path('ls_imarket_ajouter_annonce') }}\">Créer une annonce</a> </li>
                       {% endif %}
                       <li><a href=\"{{ path('fos_user_security_logout') }}\">Se déconnecter</a>
                       </li>
                    </ul>
            </li>

           {% else %}
              {#<li><a href=\"{{ path('fos_user_registration_register') }}\">
                  <span class=\"glyphicon glyphicon-user\"></span> S'inscrire</a></li>#}
                  <li><a href=\"{{ path('fos_user_security_login') }}\">Mon compte</a></li>
              {% endif %} 
   </ul>
</div>
 
<div class=\"wrap\">

<!-- Header  -->

<header class=\"header-v2-mid\">  
      <div class=\"container\">              
      <div class=\"logo\" data-wow-delay=\"200ms\">
      <a href=\"{{ path('lsi_market_homepage') }}\"><img src=\"{{ asset('bundles/lsimarket/images/logo_civilinc.png')}}\" height=\"60\" width=\"60\" alt=\"\" class=\"logo_layout\"\"></a>
    </div>  
           <div class=\"navigation menu_layout\">
              <a href=\"#\" class=\"navigation-button\" id=\"mobileNav\"><i class=\"iconic iconic-menu\"></i></a>               
              <ul>
\t         <li><a href=\"{{ path('lsi_market_homepage') }} \" class=\"menu_blue meta-civilinc\">Accueil</a></li>
                 <li><a href=\"{{ path('ls_imarket_liste_annonce') }}\" class=\"menu_blue meta-civilinc\">Annonces</a></li>
{% if app.user %}
\t\t
<li><a href=\"#\" class=\"menu-item-has-children menu_blue meta-civilinc\">Mon espace</a>
\t\t\t\t<ul class=\"dir-right level-1 sub-menu\">
\t\t\t   <li><a href=\"#\">Espace offreur</a>
\t\t\t\t\t   <ul class=\"dir-left\">
\t\t\t\t\t\t   <li><a href=\"{{ path('ls_imarket_mes_annonces') }}\">Mes annonces</a></li>
\t\t\t\t\t\t   <li><a href=\"{{ path('ls_imarket_reservations_sur_mes_annonces') }}\">Réservations sur mes annonces</a></li>
\t\t\t\t\t   </ul>
\t\t\t\t</li>
\t\t\t   <li><a href=\"#\">Espace demandeur</a>
\t\t\t\t\t<ul class=\"dir-left\">
\t\t\t\t\t\t   <li><a href=\"{{ path('ls_imarket_mes_reservations') }}\">Mes réservations</a></li>
\t\t\t\t\t\t   <li><a href=\"{{ path('ls_imarket_mes_commandes') }}\">Mes commandes</a></li>
\t\t\t\t\t   </ul>
\t\t\t\t   </li>
           <li class=\"dropdown\">
               <a href=\"#\">Messagerie</a>
                   <ul class=\"dir-left\">
                       <li><a href=\"{{ path('ls_imarket_traitement_msgrecu') }}\">Messages recus</a></li>
                       <li><a href=\"{{ path('ls_imarket_traitement_msgenvoye') }}\">Messages envoyes</a></li>                       
                   </ul>
            </li>

                                <li><a href=\"#\">Profils</a>
\t\t\t\t\t   <ul class=\"dir-left\">
\t\t\t\t\t\t   <li><a href=\"{{ path('lsi_market_a_propos') }}\">A propos</a></li>
\t\t\t\t\t\t   <li><a href=\"{{ path('lsi_market_coordonnees_bancaires') }}\">Coordonnées bancaires</a></li>
\t\t\t\t\t\t   
\t\t\t\t\t   </ul>
\t\t\t\t   </li>
\t\t\t\t    \t\t\t\t
\t\t\t\t</ul>
\t\t\t </li>
{% endif %}  \t 
                 <li><a href=\"#\" class=\"menu_blue meta-civilinc\">Contact</a></li>
\t         <li><a href=\"aide\" class=\"menu_blue meta-civilinc\">Aide</a></li>
                 <li class=\"menu-item-has-children\">
                 {% if app.user %}
                 <li class=\"menu-item-has-children\"><a href=\"#\" class=\"menu_blue meta-civilinc\">{{ app.user.username|truncate(10) }}<span class=\"caret\"></span></a>
                   <ul class=\"sub-menu\">
                       <li><a href=\"{{ path('fos_user_profile_show') }}\">Profil</a></li>
                       <li><a href=\"{{ path('ls_imarket_mon_espace') }}\">Mon espace</a> </li>
                       {% if app.user.hasRole('ROLE_MAIRIE') %}
                           <li><a href=\"{{ path('ls_imarket_ajouter_annonce') }}\">Créer une annonce</a> </li>
                       {% endif %}
                       <li><a href=\"{{ path('fos_user_security_logout') }}\">Se déconnecter</a></li>
                    </ul>
                 </li>
                 {% else %}
                  <li><a href=\"{{ path('fos_user_security_login') }}\">Mon compte</a></li>
                 {% endif %}  
\t         
              </ul>
           </div>\t
           <div class=\"search-box\" style=\"position: relative; bottom: 15px\">
                 {{ render(controller('LSIMarketBundle:Market:rechPrincipale')) }}  
           </div> 
    </div>
</header>
<!-- Header // -->




<!-- Page layout // -->
<section class=\"content-section\"  >
  <div class=\"container\">
 <br><br><br>

      {# Block central #}
         {% block body %}

         {% endblock body %}
      {# End Block central #} 

  </div>
</section>
<!-- Page layout // -->









{% block footer %}
<!-- Footer -->

<footer class=\"footer-sub\">
  <div class=\"container\">
    <div class=\"footer-text-1\"><p>Copyright Civilinc © 2018. Tous droits réservés.</</p></div>
    <div class=\"footer-text-2 text-right\"><p>Réalisé par <a href=\"http://www.graphitys-web-design.com/\">Graphitys Web Design</a></p></div>
  </div>
</footer>
</div>
{% endblock footer %}

        {% block javascripts %}
            {# Liens JS de Bootstrap #}
            <script type=\"text/javascript\" src=\"{{ asset('bundles/lsimarket/js/vendor/vendor.js') }}\"></script>         
            <script type=\"text/javascript\" src=\"{{ asset('bundles/lsimarket/js/main.js') }}\"></script>
            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
            <script src=\"//code.jquery.com/jquery-3.3.1.js\"></script>
            <script src=\"//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
            <script src=\"//cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js\"></script>
            <script src=\"https://unpkg.com/leaflet@1.3.3/dist/leaflet.js\" integrity=\"sha512-tAGcCfR4Sc5ZP5ZoVz0quoZDYX5aCtEm/eu1KhSLj2c9eFrylXZknQYmxUssFaVJKvvc0dJQixhGjG2yXWiV9Q==\" crossorigin=\"\">
            </script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.fr.min.js\"></script>

           <!--  Lien pour le calendrier  -->

            {# <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/lib/jquery.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/lib/moment.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.default-settings.js') }}\"></script> #}
        {% endblock %}
    </body>
</html>
", "layout.html.twig", "C:\\wamp\\www\\laschekina0311\\app\\Resources\\views\\layout.html.twig");
    }
}
