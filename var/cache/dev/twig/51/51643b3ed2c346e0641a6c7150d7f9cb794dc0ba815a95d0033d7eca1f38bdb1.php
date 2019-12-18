<?php

/* LSIMarketBundle:market:index.html.twig */
class __TwigTemplate_eb6d8b0b42095c1ac2b256bf23ede4e32d50c7cfa42087f593fcc1bb56761f21 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LSIMarketBundle:market:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LSIMarketBundle:market:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>CIVILINC</title>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->   
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/logo_civilink.png"), "html", null, true);
        echo "\"> 
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/iconic.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/css/jquery-ui-1.10.3.custom.min.css"), "html", null, true);
        echo "\">
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>

<div class=\"navigation-mobile\">
   <div>
      <i class=\"iconic iconic-close\" id=\"mobileNav2\"></i>
   </div>
   <ul> 
        <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lsi_market_homepage");
        echo "\">Accueil</a>   
        </li>
        <li class=\"menu-item-has-children\"><a href=\"#a_propos\">Qui sommes nous ?</a>
           <ul class=\"dir-right level-1 sub-menu\">
               <li><a href=\"#a_propos\">Un concept Innovant</a></li>
               <li><a href=\"#histoire\">Une histoire et des valeurs de service public</a></li>
          </ul>    
        </li>
        <li class=\"menu-item-has-children\"><a href=\"#respect\">Notre solution</a>
            <ul class=\"dir-right level-1 sub-menu\">
                <li><a href=\"#respect\">Respect des marchés publics</a></li>
                <li><a href=\"#solution\">Une solution complète</a></li>
            </ul>   
        </li>
        <li><a href=\"#annonces\">Publiez vos annonces</a></li>      
        <li><a href=\"#\">Aide</a></li>
        <li><a href=\"#contact\">Contact</a></Li>
        <li>
           ";
        // line 49
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 50
            echo "              <a href='";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_mon_espace");
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
           ";
        } else {
            // line 52
            echo "              <a href='";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "'>Mon compte</a>
           ";
        }
        // line 53
        echo "  
       </li>
   </ul>
</div>

<div class=\"wrap\">

<!-- Header  -->
  <header class=\"main-header header-home\" style=\"background-image: url(";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/banner/banner-6.jpg"), "html", null, true);
        echo ")\">
  <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/banner/banner-6.jpg"), "html", null, true);
        echo "\"  class=\"banner-img\" alt=\"\">
  <div class=\"header-content\">
 <div class=\"header-V2-civilinc\"> 
 <!--        <div class=\"navigation-bar\">-->
        <div class=\"container\">
           <div class=\"logo wow \" data-wow-delay=\"200ms\"  style=\"margin-top:-10px;margin-left:-30px\">
              <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lsi_market_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/logo_civilinc.png"), "html", null, true);
        echo "\" height=\"100\" width=\"100\" alt=\"\" class=\"logo_layout logo_home\"  ></a>
           </div>  
           <div class=\"navigation menu_layout\">
              <a href=\"#\" class=\"navigation-button\" id=\"mobileNav\"><i class=\"iconic iconic-menu\"></i></a>               
              <ul>
           <li><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lsi_market_homepage");
        echo "\" class=\"menu_blue meta-civilinc\">Accueil</a>   
           </li>
           <li><a href=\"#\" class=\"scrollLink menu_blue meta-civilinc\">Qui sommes nous ?</a>
                       <ul class=\"dir-right level-1 sub-menu\">
                          <li style=\"background-color:#f6f6f6;\"><a href=\"#a_propos\">Un concept Innovant</a></li>
                           <li style=\"background-color:#f6f6f6;\"><a href=\"#histoire\">Une histoire et des valeurs de service public</a></li>
                       </ul>    
           </li>
           <li><a href=\"#\" class=\"scrollLink menu_blue meta-civilinc\">Notre solution</a>
                       <ul class=\"dir-right level-1 sub-menu\">
                           <li style=\"background-color:#f6f6f6;\"><a href=\"#respect\">Respect des marchés publics</a></li>
                           <li style=\"background-color:#f6f6f6;\"><a href=\"#solution\">Une solution complète</a></li>
                       </ul>
           </li>
           <li><a href=\"#annonces\" class=\"menu_blue meta-civilinc\">Publier vos annonces</a>  
           </li> 
           <li><a href=\"aide\" class=\"menu_blue meta-civilinc\">Aide</a>  
           </li> 
           <li><a href=\"#contact\" class=\"menu_blue meta-civilinc\">Contact</a>
           </Li>
                 <li>
                 ";
        // line 94
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 95
            echo "        <a href='";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_mon_espace");
            echo "'  class=\"iconic iconic-user2\"></a>
        ";
        } else {
            // line 97
            echo "           <a href='";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "' class=\"menu_blue meta-civilinc\" >Mon compte</a>

                 ";
        }
        // line 99
        echo "   
           </li>
              </ul>
           </div>




<form class=\"form-wrapper\" method=\"post\" action=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_annonce_rechindex");
        echo "\" name=\"formrechindex\">


<div col-md-12 class=\"style_pad\" > 
    <h4> <span class=\"meta-civilinc\">Trouvez des biens autour de vous avec CIVILINC</span></h4>
</div>
<div col-md-4 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 class=\"style_pad\"> 
    <input type=\"text\" name=\"titre_name\" id=\"search\" class=\"titre\"  placeholder=\"Quoi ?\" >
</div>
<div col-md-4 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 class=\"style_pad\">
    <input type=\"text\" id=\"search\" class=\"ville\" name=\"ville_name\" placeholder=\"Où ?\" >
</div>

           <input type=\"text\" id=\"date_debut\" class=\"datepick style_pad \" name=\"datedebut\" placeholder=\"Début\" col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 >

           <input type=\"text\" id=\"date_fin\" class=\"datepick style_pad \" name=\"datefin\" placeholder=\"Fin\"  col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 >
      
    <input type=\"submit\" value=\"Rechercher\" name=\"rechbtn\" id=\"submit\" onclick=\"recheaccueil\">



</form>


</header>





<!-- Map Search -->
 <div class=\"map-section \"> 
  <div class=\"map-contents-wrap\">
  <div class=\"map-contents-left\"> </div>
  <div class=\"container\">
    <div class=\"map-contents\">
      <div class=\"title-row heading\">
      <div class=\"col-md-12\" style=\"margin-top:80px\">
        <h4>Disponible <br>
        autour <br>de vous</h4>
        <p>Pour en savoir plus  <br>
        Cliquer sur l'icone </p>
        <span class=\"\"><img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/icons/map-marker2.png"), "html", null, true);
        echo "\" height=\"63\" width=\"44\" alt=\"\"></span>
      </div>
    </div>
    </div>
  </div>
  </div> 
  <div id=\"map\" style=\"border: 0; margin-top:100px;margin-bottom:100px; width:100%; height:450px\"></div>

</div> 

<!-- Map Search // -->
 




<!-- Content Section -->
<section class=\"content-section\">
<div class=\"map-search-form\">
  <div class=\"container\">      
          <div class=\"col-md-12\">
            <div class=\"title-row heading pad-top-large\"> 
             <h3>Catégories</h3><br>        
            </div>
         </div>
    <div class=\"content-box\">
      
         
      <div class=\"list-view-all row-float\">
        <div class=\"grid-list\">
        <div class=\"background\">
          <a class=\"image\" href=\"#\">
          
            <img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/property-list/vehicule_leges.jpg"), "html", null, true);
        echo "\" alt=\"Véhicules légers\">
          </a>
          <div class=\"description\">
            <h3><span class=\"type meta-civilinc\"><h5>Véhicules légers:</h5></span> 
            Lorem ipsum dolor sit amet </h3>            
            
          </div> 
          </div>       
        </div>
        <div class=\"grid-list\">
        <div class=\"background\">
          <a class=\"image\" href=\"#\">
         
            <img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/property-list/vehicules-industriels.jpg"), "html", null, true);
        echo "\" alt=\"Véhicules industriels\">
          </a>
          <div class=\"description\">
            <h3><span class=\"type meta-civilinc\"><h5>Véhicules industriels :</h5></span> 
            Lorem ipsum dolor sit amet</h3>            
            
          </div> 
          </div>       
        </div>
        <div class=\"grid-list\">
        <div class=\"background\">
          <a class=\"image\" href=\"#\">     
            <img src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/property-list/vehicules_agricoles.jpg"), "html", null, true);
        echo "\" alt=\"Véhicules agricoles\">
          </a>
          <div class=\"description\">
            <h3><span class=\"type meta-civilinc\"><h5>Véhicules agricoles:</h5></span> 
            Lorem ipsum dolor sit amet</h3>            
            
          </div> 
          </div>       
        </div>
        <div class=\"grid-list\">
        <div class=\"background\">
          <a class=\"image\" href=\"#\">
            <img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/property-list/btp.jpg"), "html", null, true);
        echo "\" alt=\"Bâtiment et travaux publics\">
          </a>
          <div class=\"description\">
            <h3><span class=\"type meta-civilinc\"><h5>BTP:</h5></span> 
            Lorem ipsum dolor sit amet</h3>            
            
          </div> 
          </div>       
        </div>
        <div class=\"grid-list\">
        <div class=\"background\">
          <a class=\"image\" href=\"#\">
            <img src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/property-list/voirie.jpg"), "html", null, true);
        echo "\" alt=\"Voirie\">
          </a>
          <div class=\"description\">
            <h3><span class=\"type meta-civilinc\"><h5>Voirie:</h5></span> 
            Lorem ipsum dolor sit amet</h3>            
           
          </div> 
          </div>       
        </div>
        <div class=\"grid-list\">
        <div class=\"background\">
          <a class=\"image\" href=\"#\">
            <img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/property-list/espace-de-stockage.jpg"), "html", null, true);
        echo "\" alt=\"Espace de Stockage\">
          </a>
          <div class=\"description\">
            <h3><span class=\"type meta-civilinc\"><h5>Espace de Stockage:</h5></span> 
            Lorem ipsum dolor sit amet</h3>            
            
          </div> 
          </div>       
        </div>
        <div class=\"grid-list\">
        <div class=\"background\">
          <a class=\"image\" href=\"#\">
            <img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/property-list/paysage.jpg"), "html", null, true);
        echo "\" alt=\"Entretien et paysagé\">
          </a>
          <div class=\"description\">
            <h3><span class=\"type meta-civilinc\"><h5>Entretien et paysagé:</h5></span> 
            Lorem ipsum dolor sit amet</h3>            
            
          </div> 
          </div>       
        </div>
        <div class=\"grid-list\">
        <div class=\"background\">
          <a class=\"image\" href=\"#\">
            <img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/property-list/mobilier_urbain.jpg"), "html", null, true);
        echo "\" alt=\"Mobilier urbain\">
          </a>
          <div class=\"description\">
            <h3><span class=\"type meta-civilinc\"><h5>Mobilier urbain:</h5></span> 
            Lorem ipsum dolor sit amet</h3>            
            
          </div> 
          </div>       
        </div>
        <div class=\"grid-list\">
        <div class=\"background\">
          <a class=\"image\" href=\"#\">
            <img src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/property-list/evenementiel.jpg"), "html", null, true);
        echo "\" alt=\"Espace évènementiel\">
          </a>
          <div class=\"description\">
            <h3><span class=\"type meta-civilinc\"><h5>Espace évènementiel:</h5></span> 
            Lorem ipsum dolor sit amet</h3>            
            
          </div> 
          </div>       
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Content Section // -->
 
<!-- Content Section Infos -->

<div id=\"a_propos\"></div>
<div class=\"content-section\">
  <div class=\"container\">
  <div class=\"background\">
    <div class=\"col-md-3\">
      <div class=\"title-row heading pad-top-large\">        
        <h3>Quelques infos sur nous!
        </h3>
        <p>En savoir plus sur nous avant de vous engager</p>      
      </div>
      <img  src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/qui.png"), "html", null, true);
        echo "\" height=\"227\" width=\"207\" alt=\"\">
    </div>
    <div class=\"col-md-6 col-md-push-1\">
      <div class=\"heading pad-top-large\">
        <h4>CIVILINC</h4>
      </div>
      <div class=\"contents\">  
      <p>C\"est un concept français né en 2018,  partant de l’idée simple de créer un mode de collaboration innovant au service de l’action publique, dans un contexte de restriction des financements à destination des mairies et des collectivités.</p>

      <p style=\"Font-Weight: Bold;\">Notre démarche :</p>
      - Proposer une plateforme de mutualisation ponctuelle de biens et services entre personnes publiques, dans un schéma collaboratif horizontal, local et durable<br>
      - Permettre d’accéder à une offre globale de services libres d’accès (intégrant couverture assurantielle, planning, validation, facturation, aide à la contractualisation,…)<br>
      - Mettre à disposition un outil simple d’utilisation, dynamique et innovant. </p>
      <p style=\"Font-Weight: Bold;\">Nos valeurs :</p>
      En savoir plus ..
 </p>
      <div class=\"social-links pad-top-large\">
        <a href=\"#\" class=\"iconic iconic-twitter wow fadeInDown\" data-wow-duration=\"1700ms\"></a>
        <a href=\"#\" class=\"iconic iconic-dribbble wow fadeInDown\" data-wow-duration=\"1800ms\"></a>
        <a href=\"#\" class=\"iconic iconic-facebook wow fadeInDown\" data-wow-duration=\"1900ms\"></a>
        <a href=\"#\" class=\"iconic iconic-google-plus wow fadeInDown\" data-wow-duration=\"2100ms\"></a>
      </div>
      </div>    
    </div>
    </div>
  </div>
</div>
<!-- Content Section // -->

<div id=\"respect\"></div>
<!-- Content Section Respect des marchés publics -->
<div class=\"content-section\">
  <div class=\"container\">
  <div class=\"background\">
    <div class=\"col-md-3\">
      <div class=\"title-row heading pad-top-large\">        
        <h3>Respect des marchés publics
        </h3>
        <p>Qu'est ce que cela veut dire ?</p>     
      </div>     
     <img src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/quoi.jpg"), "html", null, true);
        echo "\" height=\"227\" width=\"207\" alt=\"\">
    </div>
    <div class=\"col-md-6 col-md-push-1\">
      <div class=\"contents\">  

      <p>Construit avec le concours d’avocats experts en domanialité publique, droit des marchés publics, droit de la concurrence ; le modèle CIVILINC est une solution sécurisée et responsable, spécialement dans sa dimension juridique et réglementaire.</p>
      <p> Adossée  au code des marchés publics, notre démarche assure une conformité rigoureuse de l’ensemble du processus d’engagement et de formalisme des échanges.</p>
      <p>Toutes les opérations de mise à disposition font l’objet de traitements automatisés permettant de garantir à nos partenaires le respect  des obligations de droit dans un schéma contractuel clair et opérationnel.</p>
      <p>Nous assurons par ailleurs un rôle de conseil, d’accompagnement, de modération et d’alerte dans toute la dimension juridique et contractuelle de l’expérience CIVILINC.</p>
      <p>Ainsi, nos partenaires sont accompagnés par un interlocuteur unique et dédié depuis la démarche  d’engagement de dépense jusqu’à l’édition des contrats finaux de mise à disposition. Le compte utilisateur permet par ailleurs de suivre au jour le jour l’ensemble des engagements pris et reçus, de stocker les documents nécessaires et de garantir de manière dynamique la conformité stricte du modèle.</p>

     <p>En savoir plus sur les règles  de droit des marchés publics (cliquer sur le lien)</p>
     <p>Télécharger la procédure simplifiée  d’engagement dans ma mairie (cliquer sur le lien)</p>

      </div>    
    </div>
    </div>
  </div>
</div>
<!-- Content Section // -->

<div id=\"histoire\"></div>
<!-- Content Section Respect des marchés publics -->
<div class=\"content-section\">
  <div class=\"container\">
  <div class=\"background\">
    <div class=\"col-md-3\">
      <div class=\"title-row heading pad-top-large\">        
        <h3>Une histoire et des valeurs de service public
        </h3>
        <p>Qu'est ce que cela veut dire ?</p>     
      </div>     
     <img src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/quoi.jpg"), "html", null, true);
        echo "\" height=\"227\" width=\"207\" alt=\"\">
    </div>
    <div class=\"col-md-6 col-md-push-1\">
      <div class=\"contents\">  
      <p>Fervents défenseurs des valeurs d’un service public local, nous avons souhaité capitaliser sur notre longue expérience professionnelle de service public dans le secteur énergétique.</p>
      <p>Ainsi, nous considérons la culture du service public local comme un vecteur fort de sens et d’identité pour les personnes et les territoires.</p>
      <p>Réfléchir sur le service public, c’est aussi réfléchir sur les modalités de son financement dans un environnement de plus en plus contraint pour les collectivités locales.</p>
      <p>A travers CIVILINC, nous proposons un outil efficace de création de valeur, permettant de trouver un optimum économique au service du financement et de la pérennité d’une culture de service public local.</p>
      <p><a href=\"";
        // line 387
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_liste_annonce");
        echo "\" class=\"menu_blue meta-civilinc\">Voir les objets autour de moi...</a></p>
      </div>    
    </div>
    </div>
  </div>
</div>
<!-- Content Section // -->

<div id=\"solution\"></div>
<!-- Content Section Une solution complète -->
<div class=\"content-section\">
  <div class=\"container\">
  <div class=\"background\">
    <div class=\"col-md-3\">
      <div class=\"title-row heading pad-top-large\">        
        <h3>Une solution complète
        </h3>
        <p>Que proposons-nous ?</p>      
      </div>
      <img  src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/quoi.jpg"), "html", null, true);
        echo "\" height=\"227\" width=\"207\" alt=\"\">
    </div>
    <div class=\"col-md-6 col-md-push-1\">
      <div class=\"contents\">  
     <p> CIVILINC crée un mode de collaboration innovant au service de l’action publique. Cette démarche repose sur la confiance et l’autonomie de l’échelon local, tirant partie de la dynamique engagée de transition numérique des territoires. </p>

Le modèle repose sur la création d’un avantage économique significatif pour le preneur comme pour l’offreur du bien ou du service :
<ul>
<li>  En louant à tarif préférentiel un bien à une commune voisine plutôt qu’à un acteur privé,</li>
<li>  En valorisant un bien dont la commune est propriétaire mais dont l’utilisation est ponctuelle / périodique,</li>
<li>  En envisageant différemment l’acquisition de matériel dans le cadre d’une utilisation partagée.</li>
</ul>
<p>La solution a été construite avec le concours d’experts de différents domaines, dans le but de la rendre simple, souple, sécurisée :</p>
<ul>
<li>  Un outil simple et évolutif</li>
<li>  Des procédures opérationnelles et transparentes</li>
<li>  Une offre de service globale (gestion des plannings en ligne, dématérialisation des validation, déversmeent autonome des flux de facturation, …)</li>
<li>  Une solution d’assurance intégrée</li>
<li>  L’automatisation et l’accompagnement dans le processus d’engagement et de formalisme des échanges</li>
</ul>
<p>Notre ambition : vous proposer un outil sûr et fiable vous permettant d’être acteur de la création de valeur de votre municipalité.</p>

      </div>    
    </div>
    </div>
  </div>
</div>

<!-- Fin content Section // -->

<div id=\"annonces\"></div>
<!-- Content Section annonces// -->
<div class=\"content-section\">
  <div class=\"container\">
  <div class=\"background\">
    <div class=\"col-md-3\">
      <div class=\"title-row heading pad-top-large\">        
        <h3>ANNONCES
        </h3>
        <p>Les objets autour de moi</p>
              
      </div>
      <img  src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/annonce.jpg"), "html", null, true);
        echo "\" alt=\"Annonces Civilinc\" style=\"height:227px;width:207px;object-fit: cover;\">
    </div>
    <div class=\"col-md-6 col-md-push-1\">
      <div class=\"contents\">  
         <p>Publier vos annonces sur CIVILINC, c’est intégrer une communauté de collectivités publiques partageant les mêmes valeurs, et désireuses de contribuer à un mouvement collaboratif local et de confiance au service de l’action publique.</p>
         <p>Devenez Offreur de biens et de services sur CIVILINC, et valorisez le patrimoine public tout en créant une ressource complémentaire pour votre collectivité.
         <p>Je souhaite rejoindre la communauté 
         <p>« Être contacté par un partenaire CIVILINC » =>  on clique dessus et ouverture d’un formulaire de demande de contact transmis par mail à CIVILINC</p>
         <p><a href=\"";
        // line 456
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_liste_annonce");
        echo "\" class=\"menu_blue meta-civilinc\">Voir les objets autour de moi...</a></p>
      </div>    
    </div>
    </div>
  </div>
</div>
<!-- fin content Section annonces // -->

<!-- Content Section News -->
<div class=\"content-section\">
  <div class=\"container\">
  <div class=\"background\">
    <div class=\"col-md-3\">
      <div class=\"title-row heading pad-top-large\">        
        <h3>News
        </h3>
        <p>Nous avons une information à partager</p>
              
      </div>
      <img  src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/interrior/room-1.jpg"), "html", null, true);
        echo "\" height=\"227\" width=\"207\" alt=\"\">
    </div>
    <div class=\"col-md-6 col-md-push-1\">
      <div class=\"contents\">  
    <div class=\"heading pad-top-large\">
          <h5><a href=\"#\"></a>LA MUTUALISATION DES BIENS ET DES SERVICES</h5>
      </div>
      <p>CIVILINC, la nouvelle plateforme web de mutualisation de biens et services entre collectivités, fait son apparition sur le marché de l’économie collaborative et durable.</p>
<p>Dans un contexte de difficultés financières grandissantes pour les municipalités, CIVILINC fait le pari de l’échelon local et de la mutualisation horizontale des biens et services entre elles.</p>
<p>Affichant un avantage économique significatif pour le preneur comme l’offreur, le modèle CIVILINC propose de réinjecter les bénéfices de la chaine de valeur dans le budget public, au service de l’action collective.</p>
<p>Adossé à un outil simple, souple et sécurisé ; CIVILINC verra son lancement commercial intervenir dès le premier trimestre 2019.

      </div>    
    </div>
    </div>
  </div>
</div>
<!-- Content Section // -->

<!-- Content Section Testimonial -->
<div class=\"content-section\">
  <div class=\"container\">
  <div class=\"background\">
    <div class=\"col-md-3\">
      <div class=\"title-row heading pad-top-large\">        
        <h3>NOUS TRAVAILLONS AVEC EUX
        </h3>
        <p>Ce qu'ils pensent de notre collaboration</p>
              
      </div>
      <img  src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/interrior/room-1.jpg"), "html", null, true);
        echo "\" height=\"227\" width=\"207\" alt=\"\">
    </div>
    <div class=\"row\">
                    <div class=\"col-md-8\">
                    <!-- Testimonials  -->
                        <div id=\"testimonials1\" class=\"carousel slide testimonials testimonials-v1\">
                            <div class=\"carousel-inner\">
                                <div class=\"item\">
                                    <p>Crasjusto ducimus qui cupiditate non provident, similique sunt in culpaid est anditiis praesentium praesentium blanditiis praesentium non provident, similique sunt in culpaid est anditiis praesentium praesentium..</p>
                                    <div class=\"testimonial-info\">
                                        <img src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/comment-user/user-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <span class=\"testimonial-author\">
                                            Jhon Do 
                                            <em>Maire, Bagneux.</em>
                                        </span>
                                    </div>
                                </div>
                                <div class=\"item active\">
                                    <p>Crasjusto ducimus qui cupiditate non provident, similique sunt in culpaid est anditiis praesentium praesentium blanditiis praesentium non provident, similique sunt in culpaid est anditiis praesentium praesentium..</p>
                                    <div class=\"testimonial-info\">
                                        <img src=\"";
        // line 525
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/comment-user/user-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <span class=\"testimonial-author\">
                                            Jhon Do 
                                            <em>Maire adjoint, Montpelier</em>
                                        </span>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class=\"carousel-arrow\">
                                <a class=\"left carousel-control\" href=\"#testimonials1\" data-slide=\"prev\">
                                    <i class=\"iconc iconic-angle-left\"></i>
                                </a>
                                <a class=\"right carousel-control\" href=\"#testimonials1\" data-slide=\"next\">
                                    <i class=\"iconc iconic-angle-right\"></i>
                                </a>
                            </div>
                        </div>                        
                    </div>
                    <!-- Testimonials  -->
                    <div class=\"col-md-8\">
                        <div id=\"testimonials2\" class=\"carousel slide testimonials testimonials-v1 testimonials-bg-dark\">
                            <div class=\"carousel-inner\">
                                <div class=\"item active\">
                                    <p>Crasjusto ducimus qui cupiditate non provident, similique sunt in culpaid est anditiis praesentium praesentium blanditiis praesentium non provident, similique sunt in culpaid est anditiis praesentium praesentium..</p>
                                    <div class=\"testimonial-info\">
                                        <img src=\"";
        // line 552
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/comment-user/user-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <span class=\"testimonial-author\">
                                            Jhon Do 
                                            <em>Maire, Strasbourg.</em>
                                        </span>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <p>Crasjusto ducimus qui cupiditate non provident, similique sunt in culpaid est anditiis praesentium praesentium blanditiis praesentium non provident, similique sunt in culpaid est anditiis praesentium praesentium..</p>
                                    <div class=\"testimonial-info\">
                                        <img src=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/comment-user/user-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <span class=\"testimonial-author\">
                                            Jhon Do 
                                            <em>Maire, Have</em>
                                        </span>
                                    </div>
                                </div>
                               
                            </div>
                            
                            <div class=\"carousel-arrow\">
                                <a class=\"left carousel-control\" href=\"#testimonials2\" data-slide=\"prev\">
                                    <i class=\"iconic iconic-angle-left\"></i>
                                </a>
                                <a class=\"right carousel-control\" href=\"#testimonials2\" data-slide=\"next\">
                                    <i class=\"iconic iconic-angle-right\"></i>
                                </a>
                            </div>
                        </div>                        
                    </div>
          <!-- Testimonials  -->
                    <div class=\"col-md-8\">
                        <div id=\"testimonials3\" class=\"carousel slide testimonials testimonials-v1 testimonials-v1\">
                            <div class=\"carousel-inner\">
                                <div class=\"item active\">
                                    <p>Crasjusto ducimus qui cupiditate non provident, similique sunt in culpaid est anditiis praesentium praesentium blanditiis praesentium non provident, similique sunt in culpaid est anditiis praesentium praesentium..</p>
                                    <div class=\"testimonial-info\">
                                        <img src=\"";
        // line 589
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/comment-user/user-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <span class=\"testimonial-author\">
                                            Jhon Do 
                                            <em>Maire, Strasbourg.</em>
                                        </span>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <p>Crasjusto ducimus qui cupiditate non provident, similique sunt in culpaid est anditiis praesentium praesentium blanditiis praesentium non provident, similique sunt in culpaid est anditiis praesentium praesentium..</p>
                                    <div class=\"testimonial-info\">
                                        <img src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/comment-user/user-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <span class=\"testimonial-author\">
                                            Jhon Do 
                                            <em>Maire, Have</em>
                                        </span>
                                    </div>
                                </div>
                               
                            </div>
                            
                            <div class=\"carousel-arrow\">
                                <a class=\"left carousel-control\" href=\"#testimonials3\" data-slide=\"prev\">
                                    <i class=\"iconic iconic-angle-left\"></i>
                                </a>
                                <a class=\"right carousel-control\" href=\"#testimonials3\" data-slide=\"next\">
                                    <i class=\"iconic iconic-angle-right\"></i>
                                </a>
                            </div>
                        </div>                        
                    </div>         
                </div>              
    </div>
  </div>
</div>
<!-- Content Section // -->



<div id=\"contact\"></div>
<!-- Content Section Contact -->
<div class=\"content-section\">
  <div class=\"container\">
  <div class=\"background\">
    <div class=\"col-md-3\">
      <div class=\"title-row heading pad-top-large\">        
        <h3>Contact
        </h3>
        <p>Paris</p>      
      </div>
      <img  src=\"";
        // line 638
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/contact_girl.png"), "html", null, true);
        echo "\" height=\"227\" width=\"207\" alt=\"\">
    </div>
    <div class=\"col-md-6 col-md-push-1\">
      <p>Notre servicle clientèle est disponible de 9h00 à 18h00 pour vous aider et répondre à vos questons. N'hésitez pas à nous envoyer un message.</p>
       <form data-parsley-validate class=\"footer-contact\">
         <div class=\"form-group\">
           <input type=\"text\" placeholder=\"Name\" class=\"form-control\"  required data-parsley-required-message=\"Merci d'inscrire votre nom\" name=\"name\">
         </div>
         <div class=\"form-group\">
           <input type=\"email\" placeholder=\"Email\" class=\"form-control\" required data-parsley-required-message=\"Merci d'inscrire votre email\" name=\"email\">
         </div>
     <div class=\"form-group\">
            <TEXTAREA placeholder=\"Message\" class=\"form-control\" required data-parsley-required-message=\"Merci d'inscrire votre message\" name=\"message\" rows=10 cols=70%></TEXTAREA>
         </div>
         <div class=\"form-group\">
           <button class=\"pull-right btn btn-ghost hvr-shutter-out-vertical\">Envoyer</button>
         </div>
         <div class=\"form-messges hideen\"></div>
       </form>   
    </div>
    </div>
  </div>
</div>
<!-- Content Section // -->
<!-- Footer 2 -->
<footer class=\"footer-sub\">
  <div class=\"container\">
    <div class=\"footer-text-1\"><p>Copyright Civilinc © 2018. Tous droits réservés.</</p></div>
    <div class=\"footer-text-2 text-right\"><p>Réalisé par <a href=\"http://www.graphitys-web-design.com/\">Graphitys Web Design</a></p></div>
  </div>
</footer>
</div>
</div>


<script type=\"text/javascript\" src=\"";
        // line 673
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/js/vendor/vendor.js"), "html", null, true);
        echo "\"></script>         
<script type=\"text/javascript\" src=\"";
        // line 674
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/js/main.js"), "html", null, true);
        echo "\"></script>
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 677
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/js/vendor/modernizr.js"), "html", null, true);
        echo "\"></script> 
<script type=\"text/javascript\" src=\"";
        // line 678
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/js/jquery-ui-1.10.3.custom.js"), "html", null, true);
        echo "\"></script> 
<script type=\"text/javascript\" src=\"";
        // line 679
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/js/jquery.ui.datepicker-fr.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"http://maps.googleapis.com/maps/api/js?sensor=false&amp;callback=initialize\"> </script>

<script   src=\"https://code.jquery.com/jquery-2.2.3.min.js\"   integrity=\"sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=\"   crossorigin=\"anonymous\"></script>
<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker3.min.css\">

";
        // line 713
        echo "
";
        // line 715
        echo "
<script>
    \$(document).ready(function() {
        \$(\"#date_debut\").datepicker({
            format: 'yyyy-mm-dd'
        });
        \$(\"#date_debut\").on(\"change\", function () {
            var fromdate = \$(this).val();
        });
    });
</script>

<script>
    \$(document).ready(function() {
        \$(\"#date_fin\").datepicker({
            format: 'yyyy-mm-dd'
        });
        \$(\"#date_fin\").on(\"change\", function () {
            var fromdate = \$(this).val();
        });
    });
</script>
<!-- <div id=\"map\" style=\"border: 0; margin-top:100px;margin-bottom:100px; width:100%; height:450px\"></div> -->

<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
<!-- <script>
     var map, infoWindow;;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 48.864716, lng: 2.349014},
            zoom: 12
        });
        infoWindow = new google.maps.InfoWindow;
        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                infoWindow.setPosition(pos);
                infoWindow.setContent('Vous êtes ici');
                infoWindow.open(map);
                map.setCenter(pos);


            }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\\'t support geolocation.');
            infoWindow.open(map);
        }
    }



</script> -->

<script>

    function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      center: new google.maps.LatLng(48.864716, 2.349014),
      zoom: 12
    });
    var infoWindow = new google.maps.InfoWindow;
            ";
        // line 791
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 792
            echo "                    var usercoordonnes = {lat: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "mairie", array()), "latitude", array()), "html", null, true);
            echo ", lng: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "mairie", array()), "longitude", array()), "html", null, true);
            echo " };
                     var makeruser = usercoordonnes;
                     var markeruser = new google.maps.Marker({
                        position: makeruser,
                        map: map,
                        title: '";
            // line 797
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "'

                     });

            ";
        }
        // line 802
        echo "          
        // Marqueur pour l'utilisateur qui fait la recherche

    // Traitement pour geocoder les adresses d'annonces

        ";
        // line 807
        if ((isset($context["annadress"]) || array_key_exists("annadress", $context))) {
            // line 808
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["annadress"]);
            foreach ($context['_seq'] as $context["_key"] => $context["annadress"]) {
                // line 809
                echo "                var location = \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annadress"], "adresse", array()), "codePostal", array()), "html", null, true);
                echo "  \";
                axios.get('https://maps.googleapis.com/maps/api/geocode/json',{
                    params:{
                        address: location,
                        key:'AIzaSyCZZVKfAjhdfo0VN0mk5IOq6ml3y1Ccuss'
                    }
                })
                .then(function(response) {
                
                        var on = true;
                        var intervalSeconds = 0.5;
                     var coordinates = response.data.results[0].geometry.location;

                            // Afficher les annonces au click des markers


                         ";
                // line 825
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["annadress"], "images", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["annonceimage"]) {
                    // line 826
                    echo "
                            var contentString =
                                '<div>'+
                                    '<img src=\"";
                    // line 829
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["annonceimage"], "webPath", array())), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["annonceimage"], "alt", array()), "html", null, true);
                    echo "\" style=\"float:left; width: 100px; height: 90px;object-fit: cover;margin-right:5px\">'+
                                    '<h5 style=\"color:#204d74; position: relative; botton: 15px;\">";
                    // line 830
                    echo twig_escape_filter($this->env, $this->getAttribute($context["annadress"], "titre", array()), "html", null, true);
                    echo "</h5>'+
                                    '<h5 >";
                    // line 831
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["annadress"], "description", array()), 50), "html", null, true);
                    echo "</h5>'+
                                    '<h5 style=\"color: red\">Prix : ";
                    // line 832
                    echo twig_escape_filter($this->env, $this->getAttribute($context["annadress"], "prixDefaut", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["annadress"], "typeforfait", array()), "html", null, true);
                    echo "</h5>'+
                                '</div>'+
                                '<div id=\"output\"></div>'

                                ;

                         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonceimage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 839
                echo "
                         var infowindow = new google.maps.InfoWindow({
                              content: contentString
                         });

                      ";
                // line 844
                if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "mairie", array()), "epci", array()), "nom", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["annadress"], "mairie", array()), "epci", array()), "nom", array())))) {
                    // line 845
                    echo "                             var marker = new google.maps.Marker({
                              position: coordinates,
                              map: map,
                              title: 'Cliquez pour voir l\\'annonce',
                              animation: google.maps.Animation.BOUNCE,
                              icon: {
                                    url: '../../../web/bundles/lsimarket/images/epci.png',
                                    scaledSize: new google.maps.Size(30, 30)
                                }

                            });

                             ";
                } elseif ((($this->getAttribute(                // line 857
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "mairie", array()), "epci", array()), "nom", array()) != $this->getAttribute($this->getAttribute($this->getAttribute($context["annadress"], "mairie", array()), "epci", array()), "nom", array())))) {
                    // line 858
                    echo "                                var marker = new google.maps.Marker({
                                  position: coordinates,
                                  map: map,
                                  title: 'Cliquez pour voir l\\'annonce',
                                  animation: google.maps.Animation.BOUNCE,
                                  icon: {
                                        url: '../../../web/bundles/lsimarket/images/non_epci.png',
                                        scaledSize: new google.maps.Size(30, 30)
                                    }

                                });

                             ";
                } else {
                    // line 871
                    echo "                                var marker = new google.maps.Marker({
                                  position: coordinates,
                                  map: map,
                                  title: 'Cliquez pour voir l\\'annonce',
                                  animation: google.maps.Animation.BOUNCE,
                                  icon: {
                                        url: '../../../web/bundles/lsimarket/images/logo_civilinc.png',
                                        scaledSize: new google.maps.Size(30, 30)
                                    }

                                });
                                // Try HTML5 geolocation.
                                    if (navigator.geolocation) {
                                      navigator.geolocation.getCurrentPosition(function(position) {
                                        var pos = {
                                          lat: position.coords.latitude,
                                          lng: position.coords.longitude
                                        };

                                       infoWindow.setPosition(pos);
                                        infoWindow.setContent('Vous 뵥s ici');
                                        infoWindow.open(map);
                                        map.setCenter(pos);


                                      }, function() {
                                        handleLocationError(true, infoWindow, map.getCenter());
                                      });
                                    } else {
                                      // Browser doesn't support Geolocation
                                      handleLocationError(false, infoWindow, map.getCenter());
                                    }

                                function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                                    infoWindow.setPosition(pos);
                                    infoWindow.setContent(browserHasGeolocation ?
                                                          'Error: The Geolocation service failed.' :
                                                          'Error: Your browser doesn\\'t support geolocation.');
                                    infoWindow.open(map);
                                }



                     ";
                }
                // line 915
                echo "
                     marker.addListener('mouseover', function() {

                         infowindow.open(map, marker);

                    });
                     marker.addListener('mouseout', function() {
                      infowindow.close(map, marker);
                    });
                     marker.addListener('click', function() {
                      infowindow.open(map, marker);
                      window.location.href = '";
                // line 926
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_voir_annonce", array("id" => $this->getAttribute($context["annadress"], "id", array()))), "html", null, true);
                echo "';
                    });
                })
                .catch(function(error) {
                  console.log(error);
                });

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annadress'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 934
            echo "        ";
        }
        // line 935
        echo "
    }


</script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCZZVKfAjhdfo0VN0mk5IOq6ml3y1Ccuss&callback=initMap\"
        async defer>
</script>


</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "LSIMarketBundle:market:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1155 => 935,  1152 => 934,  1138 => 926,  1125 => 915,  1079 => 871,  1064 => 858,  1062 => 857,  1048 => 845,  1046 => 844,  1039 => 839,  1024 => 832,  1020 => 831,  1016 => 830,  1010 => 829,  1005 => 826,  1001 => 825,  981 => 809,  976 => 808,  974 => 807,  967 => 802,  959 => 797,  948 => 792,  946 => 791,  868 => 715,  865 => 713,  853 => 679,  849 => 678,  845 => 677,  839 => 674,  835 => 673,  797 => 638,  755 => 599,  742 => 589,  712 => 562,  699 => 552,  669 => 525,  656 => 515,  643 => 505,  610 => 475,  588 => 456,  577 => 448,  532 => 406,  510 => 387,  499 => 379,  464 => 347,  421 => 307,  390 => 279,  375 => 267,  360 => 255,  345 => 243,  330 => 231,  315 => 219,  300 => 207,  285 => 195,  269 => 182,  233 => 149,  188 => 107,  178 => 99,  171 => 97,  165 => 95,  163 => 94,  139 => 73,  129 => 68,  120 => 62,  116 => 61,  106 => 53,  100 => 52,  92 => 50,  90 => 49,  69 => 31,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  25 => 1,);
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
    <meta charset=\"utf-8\">
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>CIVILINC</title>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->   
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('bundles/lsimarket/images/logo_civilink.png') }}\"> 
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/lsimarket/css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/lsimarket/iconic.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/lsimarket/css/jquery-ui-1.10.3.custom.min.css') }}\">
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>

<div class=\"navigation-mobile\">
   <div>
      <i class=\"iconic iconic-close\" id=\"mobileNav2\"></i>
   </div>
   <ul> 
        <li><a href=\"{{ path('lsi_market_homepage') }}\">Accueil</a>   
        </li>
        <li class=\"menu-item-has-children\"><a href=\"#a_propos\">Qui sommes nous ?</a>
           <ul class=\"dir-right level-1 sub-menu\">
               <li><a href=\"#a_propos\">Un concept Innovant</a></li>
               <li><a href=\"#histoire\">Une histoire et des valeurs de service public</a></li>
          </ul>    
        </li>
        <li class=\"menu-item-has-children\"><a href=\"#respect\">Notre solution</a>
            <ul class=\"dir-right level-1 sub-menu\">
                <li><a href=\"#respect\">Respect des marchés publics</a></li>
                <li><a href=\"#solution\">Une solution complète</a></li>
            </ul>   
        </li>
        <li><a href=\"#annonces\">Publiez vos annonces</a></li>      
        <li><a href=\"#\">Aide</a></li>
        <li><a href=\"#contact\">Contact</a></Li>
        <li>
           {% if app.user %}
              <a href='{{ path('ls_imarket_mon_espace') }}'>{{ app.user.username }}</a>
           {% else %}
              <a href='{{ path('fos_user_security_login') }}'>Mon compte</a>
           {% endif %}  
       </li>
   </ul>
</div>

<div class=\"wrap\">

<!-- Header  -->
  <header class=\"main-header header-home\" style=\"background-image: url({{ asset('bundles/lsimarket/images/banner/banner-6.jpg') }})\">
  <img src=\"{{ asset('bundles/lsimarket/images/banner/banner-6.jpg') }}\"  class=\"banner-img\" alt=\"\">
  <div class=\"header-content\">
 <div class=\"header-V2-civilinc\"> 
 <!--        <div class=\"navigation-bar\">-->
        <div class=\"container\">
           <div class=\"logo wow \" data-wow-delay=\"200ms\"  style=\"margin-top:-10px;margin-left:-30px\">
              <a href=\"{{ path('lsi_market_homepage') }}\"><img src=\"{{ asset('bundles/lsimarket/images/logo_civilinc.png')}}\" height=\"100\" width=\"100\" alt=\"\" class=\"logo_layout logo_home\"  ></a>
           </div>  
           <div class=\"navigation menu_layout\">
              <a href=\"#\" class=\"navigation-button\" id=\"mobileNav\"><i class=\"iconic iconic-menu\"></i></a>               
              <ul>
           <li><a href=\"{{ path('lsi_market_homepage') }}\" class=\"menu_blue meta-civilinc\">Accueil</a>   
           </li>
           <li><a href=\"#\" class=\"scrollLink menu_blue meta-civilinc\">Qui sommes nous ?</a>
                       <ul class=\"dir-right level-1 sub-menu\">
                          <li style=\"background-color:#f6f6f6;\"><a href=\"#a_propos\">Un concept Innovant</a></li>
                           <li style=\"background-color:#f6f6f6;\"><a href=\"#histoire\">Une histoire et des valeurs de service public</a></li>
                       </ul>    
           </li>
           <li><a href=\"#\" class=\"scrollLink menu_blue meta-civilinc\">Notre solution</a>
                       <ul class=\"dir-right level-1 sub-menu\">
                           <li style=\"background-color:#f6f6f6;\"><a href=\"#respect\">Respect des marchés publics</a></li>
                           <li style=\"background-color:#f6f6f6;\"><a href=\"#solution\">Une solution complète</a></li>
                       </ul>
           </li>
           <li><a href=\"#annonces\" class=\"menu_blue meta-civilinc\">Publier vos annonces</a>  
           </li> 
           <li><a href=\"aide\" class=\"menu_blue meta-civilinc\">Aide</a>  
           </li> 
           <li><a href=\"#contact\" class=\"menu_blue meta-civilinc\">Contact</a>
           </Li>
                 <li>
                 {% if app.user %}
        <a href='{{ path('ls_imarket_mon_espace') }}'  class=\"iconic iconic-user2\"></a>
        {% else %}
           <a href='{{ path('fos_user_security_login') }}' class=\"menu_blue meta-civilinc\" >Mon compte</a>

                 {% endif %}   
           </li>
              </ul>
           </div>




<form class=\"form-wrapper\" method=\"post\" action=\"{{ path('ls_imarket_annonce_rechindex') }}\" name=\"formrechindex\">


<div col-md-12 class=\"style_pad\" > 
    <h4> <span class=\"meta-civilinc\">Trouvez des biens autour de vous avec CIVILINC</span></h4>
</div>
<div col-md-4 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 class=\"style_pad\"> 
    <input type=\"text\" name=\"titre_name\" id=\"search\" class=\"titre\"  placeholder=\"Quoi ?\" >
</div>
<div col-md-4 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 class=\"style_pad\">
    <input type=\"text\" id=\"search\" class=\"ville\" name=\"ville_name\" placeholder=\"Où ?\" >
</div>

           <input type=\"text\" id=\"date_debut\" class=\"datepick style_pad \" name=\"datedebut\" placeholder=\"Début\" col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 >

           <input type=\"text\" id=\"date_fin\" class=\"datepick style_pad \" name=\"datefin\" placeholder=\"Fin\"  col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 >
      
    <input type=\"submit\" value=\"Rechercher\" name=\"rechbtn\" id=\"submit\" onclick=\"recheaccueil\">



</form>


</header>





<!-- Map Search -->
 <div class=\"map-section \"> 
  <div class=\"map-contents-wrap\">
  <div class=\"map-contents-left\"> </div>
  <div class=\"container\">
    <div class=\"map-contents\">
      <div class=\"title-row heading\">
      <div class=\"col-md-12\" style=\"margin-top:80px\">
        <h4>Disponible <br>
        autour <br>de vous</h4>
        <p>Pour en savoir plus  <br>
        Cliquer sur l'icone </p>
        <span class=\"\"><img src=\"{{ asset('bundles/lsimarket/images/icons/map-marker2.png')}}\" height=\"63\" width=\"44\" alt=\"\"></span>
      </div>
    </div>
    </div>
  </div>
  </div> 
  <div id=\"map\" style=\"border: 0; margin-top:100px;margin-bottom:100px; width:100%; height:450px\"></div>

</div> 

<!-- Map Search // -->
 




<!-- Content Section -->
<section class=\"content-section\">
<div class=\"map-search-form\">
  <div class=\"container\">      
          <div class=\"col-md-12\">
            <div class=\"title-row heading pad-top-large\"> 
             <h3>Catégories</h3><br>        
            </div>
         </div>
    <div class=\"content-box\">
      
         
      <div class=\"list-view-all row-float\">
        <div class=\"grid-list\">
        <div class=\"background\">
          <a class=\"image\" href=\"#\">
          
            <img src=\"{{ asset('bundles/lsimarket/images/property-list/vehicule_leges.jpg') }}\" alt=\"Véhicules légers\">
          </a>
          <div class=\"description\">
            <h3><span class=\"type meta-civilinc\"><h5>Véhicules légers:</h5></span> 
            Lorem ipsum dolor sit amet </h3>            
            
          </div> 
          </div>       
        </div>
        <div class=\"grid-list\">
        <div class=\"background\">
          <a class=\"image\" href=\"#\">
         
            <img src=\"{{ asset('bundles/lsimarket/images/property-list/vehicules-industriels.jpg') }}\" alt=\"Véhicules industriels\">
          </a>
          <div class=\"description\">
            <h3><span class=\"type meta-civilinc\"><h5>Véhicules industriels :</h5></span> 
            Lorem ipsum dolor sit amet</h3>            
            
          </div> 
          </div>       
        </div>
        <div class=\"grid-list\">
        <div class=\"background\">
          <a class=\"image\" href=\"#\">     
            <img src=\"{{ asset('bundles/lsimarket/images/property-list/vehicules_agricoles.jpg') }}\" alt=\"Véhicules agricoles\">
          </a>
          <div class=\"description\">
            <h3><span class=\"type meta-civilinc\"><h5>Véhicules agricoles:</h5></span> 
            Lorem ipsum dolor sit amet</h3>            
            
          </div> 
          </div>       
        </div>
        <div class=\"grid-list\">
        <div class=\"background\">
          <a class=\"image\" href=\"#\">
            <img src=\"{{ asset('bundles/lsimarket/images/property-list/btp.jpg') }}\" alt=\"Bâtiment et travaux publics\">
          </a>
          <div class=\"description\">
            <h3><span class=\"type meta-civilinc\"><h5>BTP:</h5></span> 
            Lorem ipsum dolor sit amet</h3>            
            
          </div> 
          </div>       
        </div>
        <div class=\"grid-list\">
        <div class=\"background\">
          <a class=\"image\" href=\"#\">
            <img src=\"{{ asset('bundles/lsimarket/images/property-list/voirie.jpg') }}\" alt=\"Voirie\">
          </a>
          <div class=\"description\">
            <h3><span class=\"type meta-civilinc\"><h5>Voirie:</h5></span> 
            Lorem ipsum dolor sit amet</h3>            
           
          </div> 
          </div>       
        </div>
        <div class=\"grid-list\">
        <div class=\"background\">
          <a class=\"image\" href=\"#\">
            <img src=\"{{ asset('bundles/lsimarket/images/property-list/espace-de-stockage.jpg') }}\" alt=\"Espace de Stockage\">
          </a>
          <div class=\"description\">
            <h3><span class=\"type meta-civilinc\"><h5>Espace de Stockage:</h5></span> 
            Lorem ipsum dolor sit amet</h3>            
            
          </div> 
          </div>       
        </div>
        <div class=\"grid-list\">
        <div class=\"background\">
          <a class=\"image\" href=\"#\">
            <img src=\"{{ asset('bundles/lsimarket/images/property-list/paysage.jpg') }}\" alt=\"Entretien et paysagé\">
          </a>
          <div class=\"description\">
            <h3><span class=\"type meta-civilinc\"><h5>Entretien et paysagé:</h5></span> 
            Lorem ipsum dolor sit amet</h3>            
            
          </div> 
          </div>       
        </div>
        <div class=\"grid-list\">
        <div class=\"background\">
          <a class=\"image\" href=\"#\">
            <img src=\"{{ asset('bundles/lsimarket/images/property-list/mobilier_urbain.jpg') }}\" alt=\"Mobilier urbain\">
          </a>
          <div class=\"description\">
            <h3><span class=\"type meta-civilinc\"><h5>Mobilier urbain:</h5></span> 
            Lorem ipsum dolor sit amet</h3>            
            
          </div> 
          </div>       
        </div>
        <div class=\"grid-list\">
        <div class=\"background\">
          <a class=\"image\" href=\"#\">
            <img src=\"{{ asset('bundles/lsimarket/images/property-list/evenementiel.jpg') }}\" alt=\"Espace évènementiel\">
          </a>
          <div class=\"description\">
            <h3><span class=\"type meta-civilinc\"><h5>Espace évènementiel:</h5></span> 
            Lorem ipsum dolor sit amet</h3>            
            
          </div> 
          </div>       
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Content Section // -->
 
<!-- Content Section Infos -->

<div id=\"a_propos\"></div>
<div class=\"content-section\">
  <div class=\"container\">
  <div class=\"background\">
    <div class=\"col-md-3\">
      <div class=\"title-row heading pad-top-large\">        
        <h3>Quelques infos sur nous!
        </h3>
        <p>En savoir plus sur nous avant de vous engager</p>      
      </div>
      <img  src=\"{{ asset('bundles/lsimarket/images/qui.png') }}\" height=\"227\" width=\"207\" alt=\"\">
    </div>
    <div class=\"col-md-6 col-md-push-1\">
      <div class=\"heading pad-top-large\">
        <h4>CIVILINC</h4>
      </div>
      <div class=\"contents\">  
      <p>C\"est un concept français né en 2018,  partant de l’idée simple de créer un mode de collaboration innovant au service de l’action publique, dans un contexte de restriction des financements à destination des mairies et des collectivités.</p>

      <p style=\"Font-Weight: Bold;\">Notre démarche :</p>
      - Proposer une plateforme de mutualisation ponctuelle de biens et services entre personnes publiques, dans un schéma collaboratif horizontal, local et durable<br>
      - Permettre d’accéder à une offre globale de services libres d’accès (intégrant couverture assurantielle, planning, validation, facturation, aide à la contractualisation,…)<br>
      - Mettre à disposition un outil simple d’utilisation, dynamique et innovant. </p>
      <p style=\"Font-Weight: Bold;\">Nos valeurs :</p>
      En savoir plus ..
 </p>
      <div class=\"social-links pad-top-large\">
        <a href=\"#\" class=\"iconic iconic-twitter wow fadeInDown\" data-wow-duration=\"1700ms\"></a>
        <a href=\"#\" class=\"iconic iconic-dribbble wow fadeInDown\" data-wow-duration=\"1800ms\"></a>
        <a href=\"#\" class=\"iconic iconic-facebook wow fadeInDown\" data-wow-duration=\"1900ms\"></a>
        <a href=\"#\" class=\"iconic iconic-google-plus wow fadeInDown\" data-wow-duration=\"2100ms\"></a>
      </div>
      </div>    
    </div>
    </div>
  </div>
</div>
<!-- Content Section // -->

<div id=\"respect\"></div>
<!-- Content Section Respect des marchés publics -->
<div class=\"content-section\">
  <div class=\"container\">
  <div class=\"background\">
    <div class=\"col-md-3\">
      <div class=\"title-row heading pad-top-large\">        
        <h3>Respect des marchés publics
        </h3>
        <p>Qu'est ce que cela veut dire ?</p>     
      </div>     
     <img src=\"{{ asset('bundles/lsimarket/images/quoi.jpg') }}\" height=\"227\" width=\"207\" alt=\"\">
    </div>
    <div class=\"col-md-6 col-md-push-1\">
      <div class=\"contents\">  

      <p>Construit avec le concours d’avocats experts en domanialité publique, droit des marchés publics, droit de la concurrence ; le modèle CIVILINC est une solution sécurisée et responsable, spécialement dans sa dimension juridique et réglementaire.</p>
      <p> Adossée  au code des marchés publics, notre démarche assure une conformité rigoureuse de l’ensemble du processus d’engagement et de formalisme des échanges.</p>
      <p>Toutes les opérations de mise à disposition font l’objet de traitements automatisés permettant de garantir à nos partenaires le respect  des obligations de droit dans un schéma contractuel clair et opérationnel.</p>
      <p>Nous assurons par ailleurs un rôle de conseil, d’accompagnement, de modération et d’alerte dans toute la dimension juridique et contractuelle de l’expérience CIVILINC.</p>
      <p>Ainsi, nos partenaires sont accompagnés par un interlocuteur unique et dédié depuis la démarche  d’engagement de dépense jusqu’à l’édition des contrats finaux de mise à disposition. Le compte utilisateur permet par ailleurs de suivre au jour le jour l’ensemble des engagements pris et reçus, de stocker les documents nécessaires et de garantir de manière dynamique la conformité stricte du modèle.</p>

     <p>En savoir plus sur les règles  de droit des marchés publics (cliquer sur le lien)</p>
     <p>Télécharger la procédure simplifiée  d’engagement dans ma mairie (cliquer sur le lien)</p>

      </div>    
    </div>
    </div>
  </div>
</div>
<!-- Content Section // -->

<div id=\"histoire\"></div>
<!-- Content Section Respect des marchés publics -->
<div class=\"content-section\">
  <div class=\"container\">
  <div class=\"background\">
    <div class=\"col-md-3\">
      <div class=\"title-row heading pad-top-large\">        
        <h3>Une histoire et des valeurs de service public
        </h3>
        <p>Qu'est ce que cela veut dire ?</p>     
      </div>     
     <img src=\"{{ asset('bundles/lsimarket/images/quoi.jpg') }}\" height=\"227\" width=\"207\" alt=\"\">
    </div>
    <div class=\"col-md-6 col-md-push-1\">
      <div class=\"contents\">  
      <p>Fervents défenseurs des valeurs d’un service public local, nous avons souhaité capitaliser sur notre longue expérience professionnelle de service public dans le secteur énergétique.</p>
      <p>Ainsi, nous considérons la culture du service public local comme un vecteur fort de sens et d’identité pour les personnes et les territoires.</p>
      <p>Réfléchir sur le service public, c’est aussi réfléchir sur les modalités de son financement dans un environnement de plus en plus contraint pour les collectivités locales.</p>
      <p>A travers CIVILINC, nous proposons un outil efficace de création de valeur, permettant de trouver un optimum économique au service du financement et de la pérennité d’une culture de service public local.</p>
      <p><a href=\"{{ path('ls_imarket_liste_annonce') }}\" class=\"menu_blue meta-civilinc\">Voir les objets autour de moi...</a></p>
      </div>    
    </div>
    </div>
  </div>
</div>
<!-- Content Section // -->

<div id=\"solution\"></div>
<!-- Content Section Une solution complète -->
<div class=\"content-section\">
  <div class=\"container\">
  <div class=\"background\">
    <div class=\"col-md-3\">
      <div class=\"title-row heading pad-top-large\">        
        <h3>Une solution complète
        </h3>
        <p>Que proposons-nous ?</p>      
      </div>
      <img  src=\"{{ asset('bundles/lsimarket/images/quoi.jpg') }}\" height=\"227\" width=\"207\" alt=\"\">
    </div>
    <div class=\"col-md-6 col-md-push-1\">
      <div class=\"contents\">  
     <p> CIVILINC crée un mode de collaboration innovant au service de l’action publique. Cette démarche repose sur la confiance et l’autonomie de l’échelon local, tirant partie de la dynamique engagée de transition numérique des territoires. </p>

Le modèle repose sur la création d’un avantage économique significatif pour le preneur comme pour l’offreur du bien ou du service :
<ul>
<li>  En louant à tarif préférentiel un bien à une commune voisine plutôt qu’à un acteur privé,</li>
<li>  En valorisant un bien dont la commune est propriétaire mais dont l’utilisation est ponctuelle / périodique,</li>
<li>  En envisageant différemment l’acquisition de matériel dans le cadre d’une utilisation partagée.</li>
</ul>
<p>La solution a été construite avec le concours d’experts de différents domaines, dans le but de la rendre simple, souple, sécurisée :</p>
<ul>
<li>  Un outil simple et évolutif</li>
<li>  Des procédures opérationnelles et transparentes</li>
<li>  Une offre de service globale (gestion des plannings en ligne, dématérialisation des validation, déversmeent autonome des flux de facturation, …)</li>
<li>  Une solution d’assurance intégrée</li>
<li>  L’automatisation et l’accompagnement dans le processus d’engagement et de formalisme des échanges</li>
</ul>
<p>Notre ambition : vous proposer un outil sûr et fiable vous permettant d’être acteur de la création de valeur de votre municipalité.</p>

      </div>    
    </div>
    </div>
  </div>
</div>

<!-- Fin content Section // -->

<div id=\"annonces\"></div>
<!-- Content Section annonces// -->
<div class=\"content-section\">
  <div class=\"container\">
  <div class=\"background\">
    <div class=\"col-md-3\">
      <div class=\"title-row heading pad-top-large\">        
        <h3>ANNONCES
        </h3>
        <p>Les objets autour de moi</p>
              
      </div>
      <img  src=\"{{ asset('bundles/lsimarket/images/annonce.jpg') }}\" alt=\"Annonces Civilinc\" style=\"height:227px;width:207px;object-fit: cover;\">
    </div>
    <div class=\"col-md-6 col-md-push-1\">
      <div class=\"contents\">  
         <p>Publier vos annonces sur CIVILINC, c’est intégrer une communauté de collectivités publiques partageant les mêmes valeurs, et désireuses de contribuer à un mouvement collaboratif local et de confiance au service de l’action publique.</p>
         <p>Devenez Offreur de biens et de services sur CIVILINC, et valorisez le patrimoine public tout en créant une ressource complémentaire pour votre collectivité.
         <p>Je souhaite rejoindre la communauté 
         <p>« Être contacté par un partenaire CIVILINC » =>  on clique dessus et ouverture d’un formulaire de demande de contact transmis par mail à CIVILINC</p>
         <p><a href=\"{{ path('ls_imarket_liste_annonce') }}\" class=\"menu_blue meta-civilinc\">Voir les objets autour de moi...</a></p>
      </div>    
    </div>
    </div>
  </div>
</div>
<!-- fin content Section annonces // -->

<!-- Content Section News -->
<div class=\"content-section\">
  <div class=\"container\">
  <div class=\"background\">
    <div class=\"col-md-3\">
      <div class=\"title-row heading pad-top-large\">        
        <h3>News
        </h3>
        <p>Nous avons une information à partager</p>
              
      </div>
      <img  src=\"{{ asset('bundles/lsimarket/images/interrior/room-1.jpg') }}\" height=\"227\" width=\"207\" alt=\"\">
    </div>
    <div class=\"col-md-6 col-md-push-1\">
      <div class=\"contents\">  
    <div class=\"heading pad-top-large\">
          <h5><a href=\"#\"></a>LA MUTUALISATION DES BIENS ET DES SERVICES</h5>
      </div>
      <p>CIVILINC, la nouvelle plateforme web de mutualisation de biens et services entre collectivités, fait son apparition sur le marché de l’économie collaborative et durable.</p>
<p>Dans un contexte de difficultés financières grandissantes pour les municipalités, CIVILINC fait le pari de l’échelon local et de la mutualisation horizontale des biens et services entre elles.</p>
<p>Affichant un avantage économique significatif pour le preneur comme l’offreur, le modèle CIVILINC propose de réinjecter les bénéfices de la chaine de valeur dans le budget public, au service de l’action collective.</p>
<p>Adossé à un outil simple, souple et sécurisé ; CIVILINC verra son lancement commercial intervenir dès le premier trimestre 2019.

      </div>    
    </div>
    </div>
  </div>
</div>
<!-- Content Section // -->

<!-- Content Section Testimonial -->
<div class=\"content-section\">
  <div class=\"container\">
  <div class=\"background\">
    <div class=\"col-md-3\">
      <div class=\"title-row heading pad-top-large\">        
        <h3>NOUS TRAVAILLONS AVEC EUX
        </h3>
        <p>Ce qu'ils pensent de notre collaboration</p>
              
      </div>
      <img  src=\"{{ asset('bundles/lsimarket/images/interrior/room-1.jpg') }}\" height=\"227\" width=\"207\" alt=\"\">
    </div>
    <div class=\"row\">
                    <div class=\"col-md-8\">
                    <!-- Testimonials  -->
                        <div id=\"testimonials1\" class=\"carousel slide testimonials testimonials-v1\">
                            <div class=\"carousel-inner\">
                                <div class=\"item\">
                                    <p>Crasjusto ducimus qui cupiditate non provident, similique sunt in culpaid est anditiis praesentium praesentium blanditiis praesentium non provident, similique sunt in culpaid est anditiis praesentium praesentium..</p>
                                    <div class=\"testimonial-info\">
                                        <img src=\"{{ asset('bundles/lsimarket/images/comment-user/user-1.jpg') }}\" alt=\"\">
                                        <span class=\"testimonial-author\">
                                            Jhon Do 
                                            <em>Maire, Bagneux.</em>
                                        </span>
                                    </div>
                                </div>
                                <div class=\"item active\">
                                    <p>Crasjusto ducimus qui cupiditate non provident, similique sunt in culpaid est anditiis praesentium praesentium blanditiis praesentium non provident, similique sunt in culpaid est anditiis praesentium praesentium..</p>
                                    <div class=\"testimonial-info\">
                                        <img src=\"{{ asset('bundles/lsimarket/images/comment-user/user-2.jpg') }}\" alt=\"\">
                                        <span class=\"testimonial-author\">
                                            Jhon Do 
                                            <em>Maire adjoint, Montpelier</em>
                                        </span>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class=\"carousel-arrow\">
                                <a class=\"left carousel-control\" href=\"#testimonials1\" data-slide=\"prev\">
                                    <i class=\"iconc iconic-angle-left\"></i>
                                </a>
                                <a class=\"right carousel-control\" href=\"#testimonials1\" data-slide=\"next\">
                                    <i class=\"iconc iconic-angle-right\"></i>
                                </a>
                            </div>
                        </div>                        
                    </div>
                    <!-- Testimonials  -->
                    <div class=\"col-md-8\">
                        <div id=\"testimonials2\" class=\"carousel slide testimonials testimonials-v1 testimonials-bg-dark\">
                            <div class=\"carousel-inner\">
                                <div class=\"item active\">
                                    <p>Crasjusto ducimus qui cupiditate non provident, similique sunt in culpaid est anditiis praesentium praesentium blanditiis praesentium non provident, similique sunt in culpaid est anditiis praesentium praesentium..</p>
                                    <div class=\"testimonial-info\">
                                        <img src=\"{{ asset('bundles/lsimarket/images/comment-user/user-1.jpg') }}\" alt=\"\">
                                        <span class=\"testimonial-author\">
                                            Jhon Do 
                                            <em>Maire, Strasbourg.</em>
                                        </span>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <p>Crasjusto ducimus qui cupiditate non provident, similique sunt in culpaid est anditiis praesentium praesentium blanditiis praesentium non provident, similique sunt in culpaid est anditiis praesentium praesentium..</p>
                                    <div class=\"testimonial-info\">
                                        <img src=\"{{ asset('bundles/lsimarket/images/comment-user/user-2.jpg') }}\" alt=\"\">
                                        <span class=\"testimonial-author\">
                                            Jhon Do 
                                            <em>Maire, Have</em>
                                        </span>
                                    </div>
                                </div>
                               
                            </div>
                            
                            <div class=\"carousel-arrow\">
                                <a class=\"left carousel-control\" href=\"#testimonials2\" data-slide=\"prev\">
                                    <i class=\"iconic iconic-angle-left\"></i>
                                </a>
                                <a class=\"right carousel-control\" href=\"#testimonials2\" data-slide=\"next\">
                                    <i class=\"iconic iconic-angle-right\"></i>
                                </a>
                            </div>
                        </div>                        
                    </div>
          <!-- Testimonials  -->
                    <div class=\"col-md-8\">
                        <div id=\"testimonials3\" class=\"carousel slide testimonials testimonials-v1 testimonials-v1\">
                            <div class=\"carousel-inner\">
                                <div class=\"item active\">
                                    <p>Crasjusto ducimus qui cupiditate non provident, similique sunt in culpaid est anditiis praesentium praesentium blanditiis praesentium non provident, similique sunt in culpaid est anditiis praesentium praesentium..</p>
                                    <div class=\"testimonial-info\">
                                        <img src=\"{{ asset('bundles/lsimarket/images/comment-user/user-3.jpg') }}\" alt=\"\">
                                        <span class=\"testimonial-author\">
                                            Jhon Do 
                                            <em>Maire, Strasbourg.</em>
                                        </span>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <p>Crasjusto ducimus qui cupiditate non provident, similique sunt in culpaid est anditiis praesentium praesentium blanditiis praesentium non provident, similique sunt in culpaid est anditiis praesentium praesentium..</p>
                                    <div class=\"testimonial-info\">
                                        <img src=\"{{ asset('bundles/lsimarket/images/comment-user/user-4.jpg') }}\" alt=\"\">
                                        <span class=\"testimonial-author\">
                                            Jhon Do 
                                            <em>Maire, Have</em>
                                        </span>
                                    </div>
                                </div>
                               
                            </div>
                            
                            <div class=\"carousel-arrow\">
                                <a class=\"left carousel-control\" href=\"#testimonials3\" data-slide=\"prev\">
                                    <i class=\"iconic iconic-angle-left\"></i>
                                </a>
                                <a class=\"right carousel-control\" href=\"#testimonials3\" data-slide=\"next\">
                                    <i class=\"iconic iconic-angle-right\"></i>
                                </a>
                            </div>
                        </div>                        
                    </div>         
                </div>              
    </div>
  </div>
</div>
<!-- Content Section // -->



<div id=\"contact\"></div>
<!-- Content Section Contact -->
<div class=\"content-section\">
  <div class=\"container\">
  <div class=\"background\">
    <div class=\"col-md-3\">
      <div class=\"title-row heading pad-top-large\">        
        <h3>Contact
        </h3>
        <p>Paris</p>      
      </div>
      <img  src=\"{{ asset('bundles/lsimarket/images/contact_girl.png') }}\" height=\"227\" width=\"207\" alt=\"\">
    </div>
    <div class=\"col-md-6 col-md-push-1\">
      <p>Notre servicle clientèle est disponible de 9h00 à 18h00 pour vous aider et répondre à vos questons. N'hésitez pas à nous envoyer un message.</p>
       <form data-parsley-validate class=\"footer-contact\">
         <div class=\"form-group\">
           <input type=\"text\" placeholder=\"Name\" class=\"form-control\"  required data-parsley-required-message=\"Merci d'inscrire votre nom\" name=\"name\">
         </div>
         <div class=\"form-group\">
           <input type=\"email\" placeholder=\"Email\" class=\"form-control\" required data-parsley-required-message=\"Merci d'inscrire votre email\" name=\"email\">
         </div>
     <div class=\"form-group\">
            <TEXTAREA placeholder=\"Message\" class=\"form-control\" required data-parsley-required-message=\"Merci d'inscrire votre message\" name=\"message\" rows=10 cols=70%></TEXTAREA>
         </div>
         <div class=\"form-group\">
           <button class=\"pull-right btn btn-ghost hvr-shutter-out-vertical\">Envoyer</button>
         </div>
         <div class=\"form-messges hideen\"></div>
       </form>   
    </div>
    </div>
  </div>
</div>
<!-- Content Section // -->
<!-- Footer 2 -->
<footer class=\"footer-sub\">
  <div class=\"container\">
    <div class=\"footer-text-1\"><p>Copyright Civilinc © 2018. Tous droits réservés.</</p></div>
    <div class=\"footer-text-2 text-right\"><p>Réalisé par <a href=\"http://www.graphitys-web-design.com/\">Graphitys Web Design</a></p></div>
  </div>
</footer>
</div>
</div>


<script type=\"text/javascript\" src=\"{{ asset('bundles/lsimarket/js/vendor/vendor.js') }}\"></script>         
<script type=\"text/javascript\" src=\"{{ asset('bundles/lsimarket/js/main.js') }}\"></script>
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ asset('bundles/lsimarket/js/vendor/modernizr.js') }}\"></script> 
<script type=\"text/javascript\" src=\"{{ asset('bundles/lsimarket/js/jquery-ui-1.10.3.custom.js') }}\"></script> 
<script type=\"text/javascript\" src=\"{{ asset('bundles/lsimarket/js/jquery.ui.datepicker-fr.js') }}\"></script>
<script type=\"text/javascript\" src=\"http://maps.googleapis.com/maps/api/js?sensor=false&amp;callback=initialize\"> </script>

<script   src=\"https://code.jquery.com/jquery-2.2.3.min.js\"   integrity=\"sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=\"   crossorigin=\"anonymous\"></script>
<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker3.min.css\">

{#<script>
  \$(document).ready(function() { 
  \$( \"#date_debut\" ).datepicker({ 
    defaultDate: \"+1w\", 
    numberOfMonths: 1, 
    changeMonth: true, 
    changeYear: true, 
    yearRange: '-1:+1', 
    maxDate: '+1Y',
    onClose: function( selectedDate ) { 
    \$( \"#date_fin\" ).datepicker( \"option\", \"minDate\", selectedDate ); 
    } 
  }); 
  \$( \"#date_fin\" ).datepicker({ 
    defaultDate: \"+1w\", 
    numberOfMonths: 1, 
    changeMonth: true, 
    changeYear: true, 
    maxDate: '+2Y',
    onClose: function( selectedDate ) { 
    \$( \"#date_debut\" ).datepicker( \"option\", \"maxDate\", selectedDate ); 
    } 
  });     
});  
</script>#}

{#Changer le format de la date#}

<script>
    \$(document).ready(function() {
        \$(\"#date_debut\").datepicker({
            format: 'yyyy-mm-dd'
        });
        \$(\"#date_debut\").on(\"change\", function () {
            var fromdate = \$(this).val();
        });
    });
</script>

<script>
    \$(document).ready(function() {
        \$(\"#date_fin\").datepicker({
            format: 'yyyy-mm-dd'
        });
        \$(\"#date_fin\").on(\"change\", function () {
            var fromdate = \$(this).val();
        });
    });
</script>
<!-- <div id=\"map\" style=\"border: 0; margin-top:100px;margin-bottom:100px; width:100%; height:450px\"></div> -->

<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
<!-- <script>
     var map, infoWindow;;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 48.864716, lng: 2.349014},
            zoom: 12
        });
        infoWindow = new google.maps.InfoWindow;
        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                infoWindow.setPosition(pos);
                infoWindow.setContent('Vous êtes ici');
                infoWindow.open(map);
                map.setCenter(pos);


            }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\\'t support geolocation.');
            infoWindow.open(map);
        }
    }



</script> -->

<script>

    function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      center: new google.maps.LatLng(48.864716, 2.349014),
      zoom: 12
    });
    var infoWindow = new google.maps.InfoWindow;
            {% if app.user %}
                    var usercoordonnes = {lat: {{ app.user.mairie.latitude }}, lng: {{ app.user.mairie.longitude }} };
                     var makeruser = usercoordonnes;
                     var markeruser = new google.maps.Marker({
                        position: makeruser,
                        map: map,
                        title: '{{ app.user.nom }}'

                     });

            {% endif %}
          
        // Marqueur pour l'utilisateur qui fait la recherche

    // Traitement pour geocoder les adresses d'annonces

        {% if annadress is defined %}
            {% for annadress in annadress %}
                var location = \"{{ annadress.adresse.codePostal }}  \";
                axios.get('https://maps.googleapis.com/maps/api/geocode/json',{
                    params:{
                        address: location,
                        key:'AIzaSyCZZVKfAjhdfo0VN0mk5IOq6ml3y1Ccuss'
                    }
                })
                .then(function(response) {
                
                        var on = true;
                        var intervalSeconds = 0.5;
                     var coordinates = response.data.results[0].geometry.location;

                            // Afficher les annonces au click des markers


                         {% for annonceimage in annadress.images %}

                            var contentString =
                                '<div>'+
                                    '<img src=\"{{ asset(annonceimage.webPath) }}\" alt=\"{{ annonceimage.alt }}\" style=\"float:left; width: 100px; height: 90px;object-fit: cover;margin-right:5px\">'+
                                    '<h5 style=\"color:#204d74; position: relative; botton: 15px;\">{{ annadress.titre }}</h5>'+
                                    '<h5 >{{ annadress.description|truncate(50) }}</h5>'+
                                    '<h5 style=\"color: red\">Prix : {{ annadress.prixDefaut }} {{ annadress.typeforfait }}</h5>'+
                                '</div>'+
                                '<div id=\"output\"></div>'

                                ;

                         {% endfor %}

                         var infowindow = new google.maps.InfoWindow({
                              content: contentString
                         });

                      {% if app.user != null and app.user.mairie.epci.nom == annadress.mairie.epci.nom %}
                             var marker = new google.maps.Marker({
                              position: coordinates,
                              map: map,
                              title: 'Cliquez pour voir l\\'annonce',
                              animation: google.maps.Animation.BOUNCE,
                              icon: {
                                    url: '../../../web/bundles/lsimarket/images/epci.png',
                                    scaledSize: new google.maps.Size(30, 30)
                                }

                            });

                             {% elseif app.user != null and app.user.mairie.epci.nom != annadress.mairie.epci.nom %}
                                var marker = new google.maps.Marker({
                                  position: coordinates,
                                  map: map,
                                  title: 'Cliquez pour voir l\\'annonce',
                                  animation: google.maps.Animation.BOUNCE,
                                  icon: {
                                        url: '../../../web/bundles/lsimarket/images/non_epci.png',
                                        scaledSize: new google.maps.Size(30, 30)
                                    }

                                });

                             {% else %}
                                var marker = new google.maps.Marker({
                                  position: coordinates,
                                  map: map,
                                  title: 'Cliquez pour voir l\\'annonce',
                                  animation: google.maps.Animation.BOUNCE,
                                  icon: {
                                        url: '../../../web/bundles/lsimarket/images/logo_civilinc.png',
                                        scaledSize: new google.maps.Size(30, 30)
                                    }

                                });
                                // Try HTML5 geolocation.
                                    if (navigator.geolocation) {
                                      navigator.geolocation.getCurrentPosition(function(position) {
                                        var pos = {
                                          lat: position.coords.latitude,
                                          lng: position.coords.longitude
                                        };

                                       infoWindow.setPosition(pos);
                                        infoWindow.setContent('Vous 뵥s ici');
                                        infoWindow.open(map);
                                        map.setCenter(pos);


                                      }, function() {
                                        handleLocationError(true, infoWindow, map.getCenter());
                                      });
                                    } else {
                                      // Browser doesn't support Geolocation
                                      handleLocationError(false, infoWindow, map.getCenter());
                                    }

                                function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                                    infoWindow.setPosition(pos);
                                    infoWindow.setContent(browserHasGeolocation ?
                                                          'Error: The Geolocation service failed.' :
                                                          'Error: Your browser doesn\\'t support geolocation.');
                                    infoWindow.open(map);
                                }



                     {% endif %}

                     marker.addListener('mouseover', function() {

                         infowindow.open(map, marker);

                    });
                     marker.addListener('mouseout', function() {
                      infowindow.close(map, marker);
                    });
                     marker.addListener('click', function() {
                      infowindow.open(map, marker);
                      window.location.href = '{{ path(\"ls_imarket_voir_annonce\", {\"id\": annadress.id}) }}';
                    });
                })
                .catch(function(error) {
                  console.log(error);
                });

            {% endfor %}
        {% endif %}

    }


</script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCZZVKfAjhdfo0VN0mk5IOq6ml3y1Ccuss&callback=initMap\"
        async defer>
</script>


</body>
</html>", "LSIMarketBundle:market:index.html.twig", "C:\\wamp\\www\\laschekina0311\\laschekina0311\\src\\LSI\\MarketBundle/Resources/views/market/index.html.twig");
    }
}
