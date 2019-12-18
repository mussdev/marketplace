<?php

/* LSIMarketBundle:market:voir.html.twig */
class __TwigTemplate_b4fc51d0848ef53408a3f7762cddb480374fba79baa0fb2f9c1588c1c2692b03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LSIMarketBundle:market:voir.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LSIMarketBundle:market:voir.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LSIMarketBundle:market:voir.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 11
        echo "
    Details de l'annonce

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "
    ";
        // line 20
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\" />

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "
    <!-- Page layout -->

<section class=\"content-section\">

        <div class=\"container\">

        <div class=\"title-row heading\">
           <div class=\"col-md-12\">
              <h2>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "titre", array()), "html", null, true);
        echo "</h2>        
           </div>
        </div>

            <!-- Properties  Details -->
            <div class=\"row pad-top-large\">
                <div class=\"col-sm-12 content-table\">
                    <div class=\"content-back row-float\">
                        <div class=\"col-md-4 content-table-image\">
                            <div class=\"owlCarousel properties-slider\">
                                   ";
        // line 48
        if ( !(null === $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "images", array()))) {
            // line 49
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["images"]) {
                // line 50
                echo "                                            <div class=\"item\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["images"], "webPath", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["images"], "alt", array()), "html", null, true);
                echo "\" class=\"responsive\" style=\"width:390px ; height:350px;;object-fit: cover;\"/></div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['images'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                                    ";
        }
        // line 53
        echo "                            </div>
                        </div>
                        <div class=\"col-md-8 pull-right contents grid-gap-large\">
                            <div class=\"pad-top-small\"> Le prix proposé :

                                <span class=\"btn btn-primary btn-info\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "prixDefaut", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "typeforfait", array()), "html", null, true);
        echo "</span> 
                            </div>
                            <div class=\"pad-top-small meta-list\">
                               <span class=\"meta\">Mise en ligne par ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "nom", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "dateCreation", array()), "d/m/Y"), "html", null, true);
        echo "</span>
                            </div>

                           ";
        // line 65
        echo "                            <p> EPCI : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "mairie", array()), "epci", array()), "nom", array()), "html", null, true);
        echo "</p>

                            ";
        // line 68
        echo "                            <br>

                                ";
        // line 70
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 71
            echo "
                                <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_reserver_annonce", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
            echo "\"

                                   class=\"btn btn-success\">Reserver</a>

                                ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 76
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_MAIRIE"), "method")) {
            // line 77
            echo "


                                ";
            // line 80
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "mairie", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "mairie", array()), "id", array()))) {
                // line 81
                echo "
                                <a href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_modifier_annonce", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
                echo "\"

                                   class=\"btn btn-warning\">Modifier</a>

                               ";
                // line 98
                echo "
                                ";
                // line 99
                if ((isset($context["var"]) || array_key_exists("var", $context))) {
                    // line 100
                    echo "                                    ";
                    if (twig_test_empty((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")))) {
                        // line 101
                        echo "
                                    \t<a href=\"";
                        // line 102
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_supprimer_annonce", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
                        echo "\" class=\"btn btn-danger\">Supprimer</a>

                                    ";
                    }
                    // line 105
                    echo "                                ";
                }
                // line 106
                echo "
                                ";
                // line 108
                echo "
                                ";
            } else {
                // line 110
                echo "
                            <center><a href=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_dupliquer_annonce", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
                echo "\"

                                       class=\"btn btn-info\">Créer à partir</a>

                                <a href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_reserver_annonce", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
                echo "\"

                                   class=\"btn btn-success\">Reserver</a>

                                ";
                // line 122
                echo "
                            </center>

                            ";
            }
            // line 126
            echo "
                            ";
        } else {
            // line 128
            echo "
                                <a href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_reserver_annonce", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
            echo "\"

                                   class=\"btn btn-success\">Reserver</a>

                                <a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_traitement_messagerie", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
            echo "\"

                                   class=\"btn btn-warning\">Envoyer un message</a>

                            ";
        }
        // line 138
        echo "
                            <div class=\"meta pad-top-large pad-bottom-small\">
                               <hr style=\"width:100%\">
                               <a href=\"#meme_categorie\">Annonces dans la même catégorie</a><br>
                               <a href=\"#meme_auteur\">Les autres annonces de ";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "nom", array()), "html", null, true);
        echo "</a><br>
                               <a href=\"#meme_epci\">Annonces dans le même EPCI</a><br>             
                            </div>
                         </div>
                      </div>
                 </div>

            <!-- Properties  Details -->

            <!-- Properties description -->

            <div class=\"row pad-top-large\">

                <div class=\"container\">

                    <div class=\"properties-descriptions tabs-vertical\" role=\"tabpanel\">

                        <ul class=\"nav nav-tabs\">

                            <li class=\"active\"><a href=\"#features\" data-toggle=\"tab\">FONTIONNALITES</a></li>

                            <li><a href=\"#disponibles\" data-toggle=\"tab\">DISPONIBILITES</a></li>

                            <li><a href=\"#openhouse\" data-toggle=\"tab\">MAIRIE</a></li>

                            <li><a href=\"#video\" data-toggle=\"tab\">VIDEO</a></li>

                            <li><a href=\"#map\" data-toggle=\"tab\">MAP</a></li>

                            <li><a href=\"#community\" data-toggle=\"tab\">EPCI</a></li>

                        </ul>
                        <div class=\"tab-content\">  
                            <div class=\"tab-pane fade in active\" id=\"features\">
                                <div class=\"contents\">
                                    <h2>Plus d'information sur l'article</h2>

                                    <p>";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "description", array()), "html", null, true);
        echo "</p>

                                    <p>Règles et conditions : <i>";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "regleCond", array()), "html", null, true);
        echo "</i>
                                </div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"disponibles\">                               
                               <div id=\"calendar\">
                                 ";
        // line 186
        $this->loadTemplate("@FullCalendar/Calendar/calendar.html.twig", "LSIMarketBundle:market:voir.html.twig", 186)->display($context);
        // line 187
        echo "                               </div>
                           </div>                           
                            <div class=\"tab-pane fade\" id=\"openhouse\">
                                <div class=\"contents\">
                                    <h2>Lorem Ipsum</h2>

                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition.</p>

                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin </p>

                                </div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"video\">
                                <div class=\"contents\">
                                    <h3>Regarder la vidéo</h3>

                                    <div class=\"video-embed\">
                                        <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/watch?v=Tu-XNVI_mV0\"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"map\">
                                <iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2710.207049454749!2d-1.5729033!3d47.2125309!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4805ec0fcda6c4cb%3A0xd620ca38dafa1e9a!2s2+Rue+La+Motte+Picquet%2C+44100+Nantes!5e0!3m2!1sfr!2sfr!4v1423244007186\" width=\"100%\" height=\"400\" frameborder=\"0\"></iframe>
                            </div>
                            <div class=\"tab-pane fade\" id=\"community\">
                                <div class=\"contents\">
                                    <h3>Plus d'informations sur les mairies</h3>

                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition.</p>

                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Properties description // -->

            

            <!-- Contact To Agent -->
            <div class=\"title-row heading pad-top-large\">
                <div class=\"col-md-12\">
                    <h2>Agent responsable</h2>
                    <p>Vous pouvez contacter cet agent avant toute opération</p>
                </div>
            </div>
            <div class=\"row pad-top-small layout-flex\">
                <div class=\"col-md-4\">
                    <div class=\"content-box-2\">
                        <figure class=\"image-box\">
                            <img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/images/properties-details/agents-1.jpg"), "html", null, true);
        echo "\" height=\"278\" width=\"330\" alt=\"\">
                        </figure>
                        <div class=\"contents\">
                            <h3 class=\"heading-style-1\">";
        // line 243
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "nom", array()), "html", null, true);
        echo "</h3>

                            <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly. </p>

                            <p class=\"text-right\"><a href=\"#\" class=\"btn btn-large btn-primary\">En savoir plus</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-8\">
                    <div class=\"content-box-2 agents-contact\">
                        <div class=\"heading\">
                            <h5>Contactez ";
        // line 254
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "nom", array()), "html", null, true);
        echo "</h5>
                        </div>
                        <form class=\"form-content pad-top-small\" data-parsley-validate>
                            <div class=\"row\">
                                <div class=\"col-md-6 form-group-1\">
                                    <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Nom\" required data-parsley-required-message=\"Please insert your name\" name=\"name\">
                                </div>
                                <div class=\"col-md-6 form-group-1\">
                                    <input type=\"text\" class=\"form-control input-lg\" placeholder=\"E-mail\" required data-parsley-required-message=\"Please insert your Email\" name=\"email\">
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-6 form-group-1\">
                                    <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Téléphone\" required data-parsley-required-message=\"Please insert your contact no\" data-parsley-min=\"10\" name=\"contact\">
                                </div>
                                <div class=\"col-md-6 form-group-1\">
                                    <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Ville\" required name=\"location\">
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"form-group-1 col-md-12\">
                                    <textarea class=\"form-control\" placeholder=\"Merci de noter votre question puis de valider le formulaire.\" rows=\"3\"  required data-parsley-minlength=\"20\" data-parsley-minlength-message = \"Come on! You need to enter at least a 20 character comment..\"  data-parsley-validation-threshold=\"10\" data-parsley-maxlength=\"100\" name=\"message\"></textarea>
                                </div>
                            </div>
                            <div class=\"row pad-top-small\">
                                <div class=\"col-md-12\">
                                    <button class=\"btn btn-primary btn-large pull-right\">Envoyer</button>
                                </div>
                                <div class=\"text-success col-xs-12 hidden form-messges text-center\">

                                    <p>Nous vous enverrons une réponse dès que possible.</p>
                                </div>
                            </div>
                        </form>
                        <div class=\"info-box-1\">
                            <h5><span>Ou appeler un agent</span></h5>

                            <p><span class=\"large-text-1\"><span class=\"iconic-phone-square\"></span>+33 01 45 87 45</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact To Agent // -->
        </div>
</section>

<div id=\"meme_categorie\" ></div>
";
        // line 302
        echo "<section class=\"content-section\">
  <div class=\"container\">
          <div class=\"col-md-12\">
              <div class=\"title-row heading pad-top-large\">
                  <h2>Objets dans la même catégorie</h2>
              </div>
          </div>
          <div class=\"content-box\">
              <div class=\"list-view-all row-float\">

                  ";
        // line 312
        if ( !(null === (isset($context["anncat"]) ? $context["anncat"] : $this->getContext($context, "anncat")))) {
            // line 313
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["anncat"]) ? $context["anncat"] : $this->getContext($context, "anncat")));
            foreach ($context['_seq'] as $context["_key"] => $context["ancat"]) {
                // line 314
                echo "                        <div class=\"grid-list\">
                          <div class=\"background\">
                              <a class=\"image\" href=\"";
                // line 316
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_voir_annonce", array("id" => $this->getAttribute($context["ancat"], "id", array()))), "html", null, true);
                echo "\">
                                  ";
                // line 317
                if ( !(null === $this->getAttribute($context["ancat"], "images", array()))) {
                    // line 318
                    echo "                                      ";
                    $context["break"] = false;
                    echo " ";
                    // line 319
                    echo "                                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ancat"], "images", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["images"]) {
                        if ( !(isset($context["break"]) ? $context["break"] : $this->getContext($context, "break"))) {
                            // line 320
                            echo "                                          <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["images"], "webpath", array())), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["images"], "alt", array()), "html", null, true);
                            echo "\" style=\"width: 260px; height: 130px;object-fit: cover;\">
                                          ";
                            // line 321
                            $context["break"] = true;
                            // line 322
                            echo "                                      ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['images'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 323
                    echo "                                  ";
                }
                // line 324
                echo "                              </a>
                              <div class=\"description\">
                                  <h3><span class=\"type meta-civilinc\"><h5>";
                // line 326
                echo twig_escape_filter($this->env, $this->getAttribute($context["ancat"], "titre", array()), "html", null, true);
                echo "</h5></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ancat"], "description", array()), "html", null, true);
                echo " </h3>
                                  <span class=\"price\"><h5>Prix : ";
                // line 327
                echo twig_escape_filter($this->env, $this->getAttribute($context["ancat"], "prixDefaut", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ancat"], "typeforfait", array()), "html", null, true);
                echo "</h5></span>
                              </div>  
                          </div>
                        </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ancat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 332
            echo "                  ";
        }
        // line 333
        echo "
              </div>
          </div>
      </div>
</section>
      ";
        // line 339
        echo "

<div id=\"meme_auteur\" ></div>
      ";
        // line 343
        echo "<section class=\"content-section\">
      <div class=\"container\">
          <div class=\"col-md-12\">
              <div class=\"title-row heading pad-top-large\">
                  <h2>Autres objets mise en ligne par ";
        // line 348
        echo "                     ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "nom", array()), "html", null, true);
        echo "
                     ";
        // line 349
        echo " </h2><br>
              </div>
          </div>
          <div class=\"content-box\">
              <div class=\"list-view-all row-float\">

                  ";
        // line 355
        if ( !(null === (isset($context["memeAuteur"]) ? $context["memeAuteur"] : $this->getContext($context, "memeAuteur")))) {
            // line 356
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["memeAuteur"]) ? $context["memeAuteur"] : $this->getContext($context, "memeAuteur")));
            foreach ($context['_seq'] as $context["_key"] => $context["mauth"]) {
                // line 357
                echo "                          <div class=\"grid-list\">
                              <div class=\"background\">
                                  <a class=\"image\" href=\"";
                // line 359
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_voir_annonce", array("id" => $this->getAttribute($context["mauth"], "id", array()))), "html", null, true);
                echo "\">
                                      ";
                // line 360
                if ( !(null === $this->getAttribute($context["mauth"], "images", array()))) {
                    // line 361
                    echo "                                          ";
                    $context["break"] = false;
                    // line 362
                    echo "                                          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["mauth"], "images", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["images"]) {
                        if ( !(isset($context["break"]) ? $context["break"] : $this->getContext($context, "break"))) {
                            // line 363
                            echo "                                              <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["images"], "webpath", array())), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["images"], "alt", array()), "html", null, true);
                            echo "\" style=\"width: 260px; height: 130px;object-fit: cover;\">
                                              ";
                            // line 364
                            $context["break"] = true;
                            // line 365
                            echo "                                          ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['images'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 366
                    echo "                                      ";
                }
                // line 367
                echo "                                  </a>
                                  <div class=\"description\">
                                      <h3><span class=\"type meta-civilinc\"><h5>
                                      ";
                // line 370
                echo twig_escape_filter($this->env, $this->getAttribute($context["mauth"], "titre", array()), "html", null, true);
                echo "</h5></span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mauth"], "description", array()), "html", null, true);
                echo " </h3>
                                      <span class=\"price\"><h5>Prix : ";
                // line 371
                echo twig_escape_filter($this->env, $this->getAttribute($context["mauth"], "prixDefaut", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mauth"], "typeforfait", array()), "html", null, true);
                echo "</h5></span>
                                  </div>

                              </div>
                          </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mauth'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 377
            echo "                  ";
        }
        // line 378
        echo "
              </div>
          </div>
      </div>
</section>
      ";
        // line 384
        echo "

<div id=\"meme_epci\" ></div>
      ";
        // line 388
        echo " <section class=\"content-section\"> 
    <div class=\"container\">
          <div class=\"col-md-12\">
              <div class=\"title-row heading pad-top-large\">
                  <h2>Objets dans le même EPCI</h2><br>
              </div>
          </div>
          <div class=\"content-box\">
              <div class=\"list-view-all row-float\">

                  ";
        // line 398
        if ( !(null === (isset($context["memeEpci"]) ? $context["memeEpci"] : $this->getContext($context, "memeEpci")))) {
            // line 399
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["memeEpci"]) ? $context["memeEpci"] : $this->getContext($context, "memeEpci")));
            foreach ($context['_seq'] as $context["_key"] => $context["mepci"]) {
                // line 400
                echo "                          <div class=\"grid-list\">
                              <div class=\"background\">
                                  <a class=\"image\" href=\"";
                // line 402
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_voir_annonce", array("id" => $this->getAttribute($context["mepci"], "id", array()))), "html", null, true);
                echo "\">
                                      ";
                // line 403
                if ( !(null === $this->getAttribute($context["mepci"], "images", array()))) {
                    // line 404
                    echo "                                          ";
                    $context["break"] = false;
                    // line 405
                    echo "                                          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["mepci"], "images", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["images"]) {
                        if ( !(isset($context["break"]) ? $context["break"] : $this->getContext($context, "break"))) {
                            // line 406
                            echo "                                              <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["images"], "webpath", array())), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["images"], "alt", array()), "html", null, true);
                            echo "\"  style=\"width: 260px; height: 130px;object-fit: cover;\">
                                              ";
                            // line 407
                            $context["break"] = true;
                            // line 408
                            echo "                                          ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['images'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 409
                    echo "                                      ";
                }
                // line 410
                echo "                                  </a>
                                  <div class=\"description\">
                                      <h3><span class=\"type meta-civilinc\"><h5>";
                // line 412
                echo twig_escape_filter($this->env, $this->getAttribute($context["mepci"], "titre", array()), "html", null, true);
                echo "</h5>
                                      </span>";
                // line 413
                echo twig_escape_filter($this->env, $this->getAttribute($context["mepci"], "description", array()), "html", null, true);
                echo " </h3>
                                      <span class=\"price\"><h5>Prix : ";
                // line 414
                echo twig_escape_filter($this->env, $this->getAttribute($context["mepci"], "prixDefaut", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mepci"], "typeforfait", array()), "html", null, true);
                echo "</h5></span>
                                  </div>

                              </div>
                          </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mepci'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 420
            echo "                  ";
        }
        // line 421
        echo "
              </div>
          </div>
      </div>
</section>
      ";
        // line 427
        echo "
    <!-- Page layout // -->



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 436
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 437
        echo "
    ";
        // line 439
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/js/vendor/vendor.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/js/main.js"), "html", null, true);
        echo "\"></script>



    ";
        // line 447
        echo "
    ";
        // line 449
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/lib/moment.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/fullcalendar.default-settings.js"), "html", null, true);
        echo "\"></script>
    
    <script type=\"text/javascript\" src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/locale/fr.js"), "html", null, true);
        echo "\"></script>


    



    <script>



        \$(document).on('click', 'button#delete', function () {

            that = \$(this);

            if (confirm('Voulez vous supprimer l\\'annonce ?')) {

                \$.ajax({

                    url: \"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_supprimer_annonce", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
        echo "\",

                    type: \"GET\",

                    data: {

                        \"btn-delete\": \"delete\"

                    },

                    async: true,

                    success: function () {

                        /* Redirection vers la page de consultation des annonces*/

                        window.location.href = \"";
        // line 491
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_mes_annonces");
        echo "\";

                    }

                })

            }

        })



    </script>

 ";
        // line 505
        if ((isset($context["datedebut"]) || array_key_exists("datedebut", $context))) {
            // line 506
            echo "      ";
            if ((isset($context["datefin"]) || array_key_exists("datefin", $context))) {
                // line 507
                echo "          ";
                if ((isset($context["statut"]) || array_key_exists("statut", $context))) {
                    // line 508
                    echo "
              <script>
                  \$('#calendar-holder').fullCalendar({
                      events: [
                          {
                              title: '";
                    // line 513
                    echo twig_escape_filter($this->env, (isset($context["statut"]) ? $context["statut"] : $this->getContext($context, "statut")), "html", null, true);
                    echo "',
                              start: '";
                    // line 514
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["datedebut"]) ? $context["datedebut"] : $this->getContext($context, "datedebut")), "Y-m-d"), "html", null, true);
                    echo "',
                              end: '";
                    // line 515
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["datefin"]) ? $context["datefin"] : $this->getContext($context, "datefin")), "+1 day"), "Y-m-d"), "html", null, true);
                    echo "',
                              color: '";
                    // line 516
                    echo twig_escape_filter($this->env, (isset($context["colordispo"]) ? $context["colordispo"] : $this->getContext($context, "colordispo")), "html", null, true);
                    echo "'
                          },

                          ";
                    // line 519
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["periodreserv"]) ? $context["periodreserv"] : $this->getContext($context, "periodreserv")));
                    foreach ($context['_seq'] as $context["_key"] => $context["reserve"]) {
                        // line 520
                        echo "                              ";
                        if (($this->getAttribute($context["reserve"], "reserveEtat", array()) == "V")) {
                            // line 521
                            echo "                                  {


                                      title: 'Réservé',
                                      start: '";
                            // line 525
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reserve"], "debutPrestation", array()), "Y-m-d"), "html", null, true);
                            echo "',
                                      end: '";
                            // line 526
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["reserve"], "finPrestation", array()), "+1 day"), "Y-m-d"), "html", null, true);
                            echo "',
                                      color: 'blue',


                                  },

                              ";
                        }
                        // line 533
                        echo "                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserve'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 534
                    echo "
                      ]

                  });
              </script>

          ";
                }
                // line 541
                echo "      ";
            }
            // line 542
            echo "
  ";
        } else {
            // line 544
            echo "
      <script>
          \$('#calendar-holder').fullCalendar({
              ";
            // line 547
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["periodreserv"]) ? $context["periodreserv"] : $this->getContext($context, "periodreserv")));
            foreach ($context['_seq'] as $context["_key"] => $context["reserve"]) {
                // line 548
                echo "                  ";
                if (($this->getAttribute($context["reserve"], "reserveEtat", array()) == "V")) {
                    // line 549
                    echo "                      events: [
                          {

                              title: 'Réservé',
                              start: '";
                    // line 553
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reserve"], "debutPrestation", array()), "Y-m-d"), "html", null, true);
                    echo "',
                              end: '";
                    // line 554
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["reserve"], "finPrestation", array()), "+1 day"), "Y-m-d"), "html", null, true);
                    echo "',
                              color: 'blue',

                          },

                      ]
                  ";
                }
                // line 561
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserve'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 562
            echo "
          });
      </script>

  ";
        }
        // line 567
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "LSIMarketBundle:market:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1012 => 567,  1005 => 562,  999 => 561,  989 => 554,  985 => 553,  979 => 549,  976 => 548,  972 => 547,  967 => 544,  963 => 542,  960 => 541,  951 => 534,  945 => 533,  935 => 526,  931 => 525,  925 => 521,  922 => 520,  918 => 519,  912 => 516,  908 => 515,  904 => 514,  900 => 513,  893 => 508,  890 => 507,  887 => 506,  885 => 505,  868 => 491,  849 => 475,  827 => 456,  822 => 454,  817 => 452,  812 => 450,  809 => 449,  806 => 447,  799 => 442,  794 => 440,  791 => 439,  788 => 437,  779 => 436,  764 => 427,  757 => 421,  754 => 420,  740 => 414,  736 => 413,  732 => 412,  728 => 410,  725 => 409,  718 => 408,  716 => 407,  709 => 406,  703 => 405,  700 => 404,  698 => 403,  694 => 402,  690 => 400,  685 => 399,  683 => 398,  671 => 388,  666 => 384,  659 => 378,  656 => 377,  642 => 371,  636 => 370,  631 => 367,  628 => 366,  621 => 365,  619 => 364,  612 => 363,  606 => 362,  603 => 361,  601 => 360,  597 => 359,  593 => 357,  588 => 356,  586 => 355,  578 => 349,  573 => 348,  567 => 343,  562 => 339,  555 => 333,  552 => 332,  539 => 327,  533 => 326,  529 => 324,  526 => 323,  519 => 322,  517 => 321,  510 => 320,  504 => 319,  500 => 318,  498 => 317,  494 => 316,  490 => 314,  485 => 313,  483 => 312,  471 => 302,  421 => 254,  407 => 243,  401 => 240,  346 => 187,  344 => 186,  336 => 181,  331 => 179,  291 => 142,  285 => 138,  277 => 133,  270 => 129,  267 => 128,  263 => 126,  257 => 122,  250 => 115,  243 => 111,  240 => 110,  236 => 108,  233 => 106,  230 => 105,  224 => 102,  221 => 101,  218 => 100,  216 => 99,  213 => 98,  206 => 82,  203 => 81,  201 => 80,  196 => 77,  194 => 76,  187 => 72,  184 => 71,  182 => 70,  178 => 68,  172 => 65,  164 => 61,  156 => 58,  149 => 53,  146 => 52,  135 => 50,  130 => 49,  128 => 48,  115 => 38,  104 => 29,  95 => 28,  82 => 22,  77 => 20,  74 => 19,  65 => 18,  52 => 11,  43 => 10,  11 => 1,);
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
    auth : pour l'auteur de l'annonce
    ancat : accessible à partir de la ligne 325 uniquement à l'intérieur de la bouble for
    mauth : accessible à partir de la ligne 368 uniquement à l'intérieur de la bouble for
    mepci : accessible à partir de la ligne 411 uniquement à l'intérieur de la bouble for
#}

{% block title %}

    Details de l'annonce

{% endblock title %}



{% block stylesheets %}

    {{ parent() }}

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css') }}\" />

{% endblock stylesheets %}



{% block body %}

    <!-- Page layout -->

<section class=\"content-section\">

        <div class=\"container\">

        <div class=\"title-row heading\">
           <div class=\"col-md-12\">
              <h2>{{ annonce.titre }}</h2>        
           </div>
        </div>

            <!-- Properties  Details -->
            <div class=\"row pad-top-large\">
                <div class=\"col-sm-12 content-table\">
                    <div class=\"content-back row-float\">
                        <div class=\"col-md-4 content-table-image\">
                            <div class=\"owlCarousel properties-slider\">
                                   {% if annonce.images is not null %}
                                        {% for images in annonce.images %}
                                            <div class=\"item\"><img src=\"{{ asset(images.webPath) }}\" alt=\"{{ images.alt }}\" class=\"responsive\" style=\"width:390px ; height:350px;;object-fit: cover;\"/></div>
                                        {% endfor %}
                                    {% endif %}
                            </div>
                        </div>
                        <div class=\"col-md-8 pull-right contents grid-gap-large\">
                            <div class=\"pad-top-small\"> Le prix proposé :

                                <span class=\"btn btn-primary btn-info\">{{ annonce.prixDefaut }} {{ annonce.typeforfait }}</span> 
                            </div>
                            <div class=\"pad-top-small meta-list\">
                               <span class=\"meta\">Mise en ligne par {{ auth.nom }}, le {{ annonce.dateCreation|date('d/m/Y') }}</span>
                            </div>

                           {#  <p>{{ annonce.description }}</p> #}
                            <p> EPCI : {{ auth.mairie.epci.nom }}</p>

                            {#<i> <a href=\"{{ path('ls_imarket_plage_annonce' , { 'id' :annonce.id})}}\">consulter la disponibilité<a/> </i></p>#}
                            <br>

                                {% if not app.user %}

                                <a href=\"{{ path('ls_imarket_reserver_annonce', {'id': annonce.id}) }}\"

                                   class=\"btn btn-success\">Reserver</a>

                                {% elseif app.user.hasRole('ROLE_MAIRIE') %}



                                {% if app.user.mairie.id == annonce.mairie.id %}

                                <a href=\"{{ path('ls_imarket_modifier_annonce', {'id' :annonce.id}) }}\"

                                   class=\"btn btn-warning\">Modifier</a>

                               {# {% if var is defined %}
                                    {% if var is empty %}

                                        <button type=\"submit\" id=\"delete\" class=\"btn btn-danger\" value=\"delete\" name=\"btn-delete\" >Supprimer</button>

                                    {% else %}

                                {% endif %}

                                    <button type=\"submit\" id=\"delete\" class=\"btn btn-danger\" value=\"delete\" name=\"btn-delete\" disabled>Supprimer</button>

                                {% endif %}#}

                                {% if var is defined %}
                                    {% if var is empty %}

                                    \t<a href=\"{{ path('ls_imarket_supprimer_annonce', {'id': annonce.id }) }}\" class=\"btn btn-danger\">Supprimer</a>

                                    {% endif %}
                                {% endif %}

                                {#<a href=\"{{ path('ls_imarket_supprimer_annonce', {'id': annonce.id }) }}\" class=\"btn btn-danger\">Supprimer</a>#}

                                {% else %}

                            <center><a href=\"{{ path('ls_imarket_dupliquer_annonce', {'id' :annonce.id}) }}\"

                                       class=\"btn btn-info\">Créer à partir</a>

                                <a href=\"{{ path('ls_imarket_reserver_annonce', {'id': annonce.id}) }}\"

                                   class=\"btn btn-success\">Reserver</a>

                                {# <a href=\"{{ path('ls_imarket_traitement_messagerie', {'id' :annonce.id}) }}\"

                                 class=\"btn btn-warning\">Envoyer un message</a> #}

                            </center>

                            {% endif %}

                            {% else %}

                                <a href=\"{{ path('ls_imarket_reserver_annonce', {'id': annonce.id}) }}\"

                                   class=\"btn btn-success\">Reserver</a>

                                <a href=\"{{ path('ls_imarket_traitement_messagerie', {'id' :annonce.id}) }}\"

                                   class=\"btn btn-warning\">Envoyer un message</a>

                            {% endif %}

                            <div class=\"meta pad-top-large pad-bottom-small\">
                               <hr style=\"width:100%\">
                               <a href=\"#meme_categorie\">Annonces dans la même catégorie</a><br>
                               <a href=\"#meme_auteur\">Les autres annonces de {{ auth.nom }}</a><br>
                               <a href=\"#meme_epci\">Annonces dans le même EPCI</a><br>             
                            </div>
                         </div>
                      </div>
                 </div>

            <!-- Properties  Details -->

            <!-- Properties description -->

            <div class=\"row pad-top-large\">

                <div class=\"container\">

                    <div class=\"properties-descriptions tabs-vertical\" role=\"tabpanel\">

                        <ul class=\"nav nav-tabs\">

                            <li class=\"active\"><a href=\"#features\" data-toggle=\"tab\">FONTIONNALITES</a></li>

                            <li><a href=\"#disponibles\" data-toggle=\"tab\">DISPONIBILITES</a></li>

                            <li><a href=\"#openhouse\" data-toggle=\"tab\">MAIRIE</a></li>

                            <li><a href=\"#video\" data-toggle=\"tab\">VIDEO</a></li>

                            <li><a href=\"#map\" data-toggle=\"tab\">MAP</a></li>

                            <li><a href=\"#community\" data-toggle=\"tab\">EPCI</a></li>

                        </ul>
                        <div class=\"tab-content\">  
                            <div class=\"tab-pane fade in active\" id=\"features\">
                                <div class=\"contents\">
                                    <h2>Plus d'information sur l'article</h2>

                                    <p>{{ annonce.description }}</p>

                                    <p>Règles et conditions : <i>{{ annonce.regleCond }}</i>
                                </div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"disponibles\">                               
                               <div id=\"calendar\">
                                 {% include '@FullCalendar/Calendar/calendar.html.twig' %}
                               </div>
                           </div>                           
                            <div class=\"tab-pane fade\" id=\"openhouse\">
                                <div class=\"contents\">
                                    <h2>Lorem Ipsum</h2>

                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition.</p>

                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin </p>

                                </div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"video\">
                                <div class=\"contents\">
                                    <h3>Regarder la vidéo</h3>

                                    <div class=\"video-embed\">
                                        <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/watch?v=Tu-XNVI_mV0\"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"map\">
                                <iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2710.207049454749!2d-1.5729033!3d47.2125309!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4805ec0fcda6c4cb%3A0xd620ca38dafa1e9a!2s2+Rue+La+Motte+Picquet%2C+44100+Nantes!5e0!3m2!1sfr!2sfr!4v1423244007186\" width=\"100%\" height=\"400\" frameborder=\"0\"></iframe>
                            </div>
                            <div class=\"tab-pane fade\" id=\"community\">
                                <div class=\"contents\">
                                    <h3>Plus d'informations sur les mairies</h3>

                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition.</p>

                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Properties description // -->

            

            <!-- Contact To Agent -->
            <div class=\"title-row heading pad-top-large\">
                <div class=\"col-md-12\">
                    <h2>Agent responsable</h2>
                    <p>Vous pouvez contacter cet agent avant toute opération</p>
                </div>
            </div>
            <div class=\"row pad-top-small layout-flex\">
                <div class=\"col-md-4\">
                    <div class=\"content-box-2\">
                        <figure class=\"image-box\">
                            <img src=\"{{ asset('bundles/lsimarket/images/properties-details/agents-1.jpg')}}\" height=\"278\" width=\"330\" alt=\"\">
                        </figure>
                        <div class=\"contents\">
                            <h3 class=\"heading-style-1\">{{ auth.nom }}</h3>

                            <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly. </p>

                            <p class=\"text-right\"><a href=\"#\" class=\"btn btn-large btn-primary\">En savoir plus</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-8\">
                    <div class=\"content-box-2 agents-contact\">
                        <div class=\"heading\">
                            <h5>Contactez {{ auth.nom }}</h5>
                        </div>
                        <form class=\"form-content pad-top-small\" data-parsley-validate>
                            <div class=\"row\">
                                <div class=\"col-md-6 form-group-1\">
                                    <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Nom\" required data-parsley-required-message=\"Please insert your name\" name=\"name\">
                                </div>
                                <div class=\"col-md-6 form-group-1\">
                                    <input type=\"text\" class=\"form-control input-lg\" placeholder=\"E-mail\" required data-parsley-required-message=\"Please insert your Email\" name=\"email\">
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-6 form-group-1\">
                                    <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Téléphone\" required data-parsley-required-message=\"Please insert your contact no\" data-parsley-min=\"10\" name=\"contact\">
                                </div>
                                <div class=\"col-md-6 form-group-1\">
                                    <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Ville\" required name=\"location\">
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"form-group-1 col-md-12\">
                                    <textarea class=\"form-control\" placeholder=\"Merci de noter votre question puis de valider le formulaire.\" rows=\"3\"  required data-parsley-minlength=\"20\" data-parsley-minlength-message = \"Come on! You need to enter at least a 20 character comment..\"  data-parsley-validation-threshold=\"10\" data-parsley-maxlength=\"100\" name=\"message\"></textarea>
                                </div>
                            </div>
                            <div class=\"row pad-top-small\">
                                <div class=\"col-md-12\">
                                    <button class=\"btn btn-primary btn-large pull-right\">Envoyer</button>
                                </div>
                                <div class=\"text-success col-xs-12 hidden form-messges text-center\">

                                    <p>Nous vous enverrons une réponse dès que possible.</p>
                                </div>
                            </div>
                        </form>
                        <div class=\"info-box-1\">
                            <h5><span>Ou appeler un agent</span></h5>

                            <p><span class=\"large-text-1\"><span class=\"iconic-phone-square\"></span>+33 01 45 87 45</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact To Agent // -->
        </div>
</section>

<div id=\"meme_categorie\" ></div>
{# Affichage des annonces de la même catégorie #}
<section class=\"content-section\">
  <div class=\"container\">
          <div class=\"col-md-12\">
              <div class=\"title-row heading pad-top-large\">
                  <h2>Objets dans la même catégorie</h2>
              </div>
          </div>
          <div class=\"content-box\">
              <div class=\"list-view-all row-float\">

                  {% if anncat is not null %}
                      {% for ancat in anncat %}
                        <div class=\"grid-list\">
                          <div class=\"background\">
                              <a class=\"image\" href=\"{{ path('ls_imarket_voir_annonce', {'id': ancat.id}) }}\">
                                  {% if ancat.images is not null %}
                                      {% set break = false %} {# Pour limiter l'affichage des images à la première #}
                                      {% for images in ancat.images if not break %}
                                          <img src=\"{{ asset(images.webpath) }}\" alt=\"{{ images.alt }}\" style=\"width: 260px; height: 130px;object-fit: cover;\">
                                          {% set break = true %}
                                      {% endfor %}
                                  {% endif %}
                              </a>
                              <div class=\"description\">
                                  <h3><span class=\"type meta-civilinc\"><h5>{{ ancat.titre }}</h5></span> {{ ancat.description }} </h3>
                                  <span class=\"price\"><h5>Prix : {{ ancat.prixDefaut }} {{ ancat.typeforfait }}</h5></span>
                              </div>  
                          </div>
                        </div>
                      {% endfor %}
                  {% endif %}

              </div>
          </div>
      </div>
</section>
      {# Fin affichage des annonces de la même catégorie #}


<div id=\"meme_auteur\" ></div>
      {# Affichage des annonces du même auteur #}
<section class=\"content-section\">
      <div class=\"container\">
          <div class=\"col-md-12\">
              <div class=\"title-row heading pad-top-large\">
                  <h2>Autres objets mise en ligne par {# {% for auth in auteur %} #}
                     {{ auth.nom }}
                     {# {% endfor %} #} </h2><br>
              </div>
          </div>
          <div class=\"content-box\">
              <div class=\"list-view-all row-float\">

                  {% if memeAuteur is not null %}
                      {% for mauth in memeAuteur %}
                          <div class=\"grid-list\">
                              <div class=\"background\">
                                  <a class=\"image\" href=\"{{ path('ls_imarket_voir_annonce', {'id': mauth.id}) }}\">
                                      {% if mauth.images is not null %}
                                          {% set break = false %}
                                          {% for images in mauth.images if not break %}
                                              <img src=\"{{ asset(images.webpath) }}\" alt=\"{{ images.alt }}\" style=\"width: 260px; height: 130px;object-fit: cover;\">
                                              {% set break = true %}
                                          {% endfor %}
                                      {% endif %}
                                  </a>
                                  <div class=\"description\">
                                      <h3><span class=\"type meta-civilinc\"><h5>
                                      {{ mauth.titre }}</h5></span>{{ mauth.description }} </h3>
                                      <span class=\"price\"><h5>Prix : {{ mauth.prixDefaut }} {{ mauth.typeforfait }}</h5></span>
                                  </div>

                              </div>
                          </div>
                      {% endfor %}
                  {% endif %}

              </div>
          </div>
      </div>
</section>
      {# Fin affichage des annonces du même auteur #}


<div id=\"meme_epci\" ></div>
      {# Affichage des annonces du même EPCI #}
 <section class=\"content-section\"> 
    <div class=\"container\">
          <div class=\"col-md-12\">
              <div class=\"title-row heading pad-top-large\">
                  <h2>Objets dans le même EPCI</h2><br>
              </div>
          </div>
          <div class=\"content-box\">
              <div class=\"list-view-all row-float\">

                  {% if memeEpci is not null %}
                      {% for mepci in memeEpci %}
                          <div class=\"grid-list\">
                              <div class=\"background\">
                                  <a class=\"image\" href=\"{{ path('ls_imarket_voir_annonce', {'id': mepci.id}) }}\">
                                      {% if mepci.images is not null %}
                                          {% set break = false %}
                                          {% for images in mepci.images if not break %}
                                              <img src=\"{{ asset(images.webpath) }}\" alt=\"{{ images.alt }}\"  style=\"width: 260px; height: 130px;object-fit: cover;\">
                                              {% set break = true %}
                                          {% endfor %}
                                      {% endif %}
                                  </a>
                                  <div class=\"description\">
                                      <h3><span class=\"type meta-civilinc\"><h5>{{ mepci.titre }}</h5>
                                      </span>{{ mepci.description }} </h3>
                                      <span class=\"price\"><h5>Prix : {{ mepci.prixDefaut }} {{ mepci.typeforfait }}</h5></span>
                                  </div>

                              </div>
                          </div>
                      {% endfor %}
                  {% endif %}

              </div>
          </div>
      </div>
</section>
      {# Fin affichage des annonces du même EPCI #}

    <!-- Page layout // -->



{% endblock body %}



{% block javascripts %}

    {# Liens JS #}

    <script type=\"text/javascript\" src=\"{{ asset('bundles/lsimarket/js/vendor/vendor.js') }}\"></script>

    <script type=\"text/javascript\" src=\"{{ asset('bundles/lsimarket/js/main.js') }}\"></script>



    {#lien JS pour le calendrier#}

    {# <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/lib/jquery.min.js') }}\"></script> #}

    <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/lib/moment.min.js') }}\"></script>

    <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js') }}\"></script>

    <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.default-settings.js') }}\"></script>
    
    <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/locale/fr.js') }}\"></script>


    



    <script>



        \$(document).on('click', 'button#delete', function () {

            that = \$(this);

            if (confirm('Voulez vous supprimer l\\'annonce ?')) {

                \$.ajax({

                    url: \"{{ path('ls_imarket_supprimer_annonce', {'id': annonce.id }) }}\",

                    type: \"GET\",

                    data: {

                        \"btn-delete\": \"delete\"

                    },

                    async: true,

                    success: function () {

                        /* Redirection vers la page de consultation des annonces*/

                        window.location.href = \"{{ path('ls_imarket_mes_annonces') }}\";

                    }

                })

            }

        })



    </script>

 {% if datedebut is defined %}
      {% if datefin is defined %}
          {% if statut is defined %}

              <script>
                  \$('#calendar-holder').fullCalendar({
                      events: [
                          {
                              title: '{{ statut }}',
                              start: '{{ datedebut|date('Y-m-d') }}',
                              end: '{{ datefin|date_modify(\"+1 day\")|date('Y-m-d') }}',
                              color: '{{ colordispo }}'
                          },

                          {% for reserve in periodreserv %}
                              {% if reserve.reserveEtat == \"V\" %}
                                  {


                                      title: 'Réservé',
                                      start: '{{ reserve.debutPrestation|date('Y-m-d') }}',
                                      end: '{{ reserve.finPrestation|date_modify(\"+1 day\")|date('Y-m-d') }}',
                                      color: 'blue',


                                  },

                              {% endif %}
                          {% endfor %}

                      ]

                  });
              </script>

          {% endif %}
      {% endif %}

  {% else %}

      <script>
          \$('#calendar-holder').fullCalendar({
              {% for reserve in periodreserv %}
                  {% if reserve.reserveEtat == \"V\" %}
                      events: [
                          {

                              title: 'Réservé',
                              start: '{{ reserve.debutPrestation|date('Y-m-d') }}',
                              end: '{{ reserve.finPrestation|date_modify(\"+1 day\")|date('Y-m-d') }}',
                              color: 'blue',

                          },

                      ]
                  {% endif %}
              {% endfor %}

          });
      </script>

  {% endif %}


{% endblock %}



", "LSIMarketBundle:market:voir.html.twig", "C:\\wamp\\www\\laschekina0311\\laschekina0311\\src\\LSI\\MarketBundle/Resources/views/market/voir.html.twig");
    }
}
