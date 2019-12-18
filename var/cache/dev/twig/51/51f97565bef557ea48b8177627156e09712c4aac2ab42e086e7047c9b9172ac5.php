<?php

/* LSIMarketBundle:market:offres.html.twig */
class __TwigTemplate_6ff982a21069cbcccb5a40f234147ed1991ce54c12432e84415140ad6f51f325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LSIMarketBundle:market:offres.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LSIMarketBundle:market:offres.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LSIMarketBundle:market:offres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/css/index.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lsimarket/css/jquery-ui-1.10.3.custom.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "<section class=\"content-section\">
    <div class=\"container\">

        <div class=\"title-row heading\">
            <div class=\"col-md-12\">
                <h2>Matériels disponibles autour de moi </h2>
            </div>
        </div>
        <div class=\"page-layout two-column sidebar-right\">
            <main id=\"main\" class=\"main\">


                <div class=\"row-float pad-top-large\">
                    <div class=\"grid-box-all row\">
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 30
            echo "
                            <div class=\"grid-box\">
                                ";
            // line 32
            if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "mairie", array()), "epci", array()), "nom", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["annonce"], "mairie", array()), "epci", array()), "nom", array())))) {
                // line 33
                echo "                                    <span class=\"box-type\">
              ";
                // line 36
                echo "                                        <span class=\"text\">EPCI</span>

                                        ";
                // line 39
                echo "            </span>
                                ";
            } else {
                // line 41
                echo "                                    <div style=\"height:100px;\"><br></div>
                                ";
            }
            // line 43
            echo "
                                <div class=\"description\">
                                    <h6><span class=\"type img_search\">
                        ";
            // line 46
            if ( !(null === $this->getAttribute($context["annonce"], "images", array()))) {
                // line 47
                echo "                                            ";
                // line 48
                echo "                                            ";
                $context["break"] = false;
                // line 49
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["annonce"], "images", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["images"]) {
                    if ( !(isset($context["break"]) ? $context["break"] : $this->getContext($context, "break"))) {
                        // line 50
                        echo "                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_voir_annonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
                        echo "\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["images"], "webPath", array())), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["images"], "alt", array()), "html", null, true);
                        echo "\"
                                                                                                                     class=\"responsive\" style=\"width: 260px; height: 150px;object-fit: cover;\"/>
                                                ";
                        // line 52
                        $context["break"] = true;
                        // line 53
                        echo "                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['images'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "                                                ";
            }
            // line 55
            echo "                                                <h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "</h4></span></a>
                                        <p>";
            // line 56
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["annonce"], "description", array()), 70), "html", null, true);
            echo "</p>
                                        <p>EPCI : ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["annonce"], "mairie", array()), "epci", array()), "nom", array()), "html", null, true);
            echo "</p>
                                        ";
            // line 58
            if ((isset($context["mairiename"]) || array_key_exists("mairiename", $context))) {
                // line 59
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["mairiename"]) ? $context["mairiename"] : $this->getContext($context, "mairiename")));
                foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                    // line 60
                    echo "                                                ";
                    if (($this->getAttribute($this->getAttribute($context["name"], "mairie", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["annonce"], "mairie", array()), "id", array()))) {
                        // line 61
                        echo "                                                    <p>Mairie : ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["name"], "nom", array()), "html", null, true);
                        echo " </p>
                                                ";
                    }
                    // line 63
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "                                        ";
            }
            // line 65
            echo "                                    </h6>

                                    <span class=\"meta\" style=\"font-weight:bold;\"><h6><i >Règles et conditions :</i> ";
            // line 67
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["annonce"], "regleCond", array()), 50), "html", null, true);
            echo "</h6></span>
                                    <p><span class=\"price\">Prix : ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "prixDefaut", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "typeforfait", array()), "html", null, true);
            echo "</span></p>
                                    <a class=\"link-arrow iconic iconic-arrow-forward\" href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_voir_annonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">
                                        ";
            // line 70
            if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                // line 71
                echo "                                            <center><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\" class=\"btn btn-success\">Reserver</a></center>
                                        ";
            } elseif ($this->getAttribute($this->getAttribute(            // line 72
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_MAIRIE"), "method")) {
                // line 73
                echo "
                                            ";
                // line 74
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "mairie", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["annonce"], "mairie", array()), "id", array()))) {
                    // line 75
                    echo "                                                <center><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_modifier_annonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
                    echo "\"
                                                           class=\"btn btn-warning\">Modifier</a></center>
                                            ";
                } else {
                    // line 78
                    echo "                                                <center><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_dupliquer_annonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
                    echo "\"
                                                           class=\"btn btn-info\">Créer à partir</a>
                                                    <a href=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_reserver_annonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
                    echo "\"
                                                       class=\"btn btn-success\">Reserver</a></center>
                                            ";
                }
                // line 83
                echo "                                        ";
            } else {
                // line 84
                echo "                                            <center><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_reserver_annonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
                echo "\"
                                                       class=\"btn btn-success\">Reserver</a></center>
                                        ";
            }
            // line 87
            echo "                                </div>
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                        <!--
                              <div class=\"row-float text-center\">
                                <ul class=\"pagination\">
                                  <li>
                                    <a href=\"#\" aria-label=\"Previous\">
                                      <span aria-hidden=\"true\">«</span>
                                    </a>
                                  </li>
                                  <li><a href=\"#\">1</a></li>
                                  <li><a href=\"#\">2</a></li>
                                  <li><a href=\"#\">3</a></li>
                                  <li><a href=\"#\">4</a></li>
                                  <li><a href=\"#\">5</a></li>
                                  <li>
                                    <a href=\"#\" aria-label=\"Next\">
                                      <span aria-hidden=\"true\">»</span>
                                    </a>
                                  </li>
                                </ul>
                              </div>

                        <br><br>
                        -->
                    </div>
            </main>
            <!-- Sidebar  -->


        </div>
    </div>
</section>

<section class=\"content-section\">
    <div class=\"container\">
        <div class=\"title-row heading\">
            <div class=\"col-md-12\">
                <aside class=\"sidebar\" id=\"map\" style=\"height: 480px; width: 100%;\"> </aside>
            </div>
        </div>
    </div>
</section>



<!-- Map Search -->
<div class=\"container\">

    <div class=\"title-row heading\">
        <div class=\"col-md-8\">
            <section class=\"content-section\">
                <div class=\"container\">

                    <div class=\"row-float contents pad-top-large\">
                        <div>&nbsp;
                            <div class=\"comment-respond\">
                                <h2>Recherche avancée</h2>

                                <div class=\"form-content form-cotent-map map-search-control\">
                                    ";
        // line 149
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formrechavancee"]) ? $context["formrechavancee"] : $this->getContext($context, "formrechavancee")), 'form_start', array("attr" => array("id" => "form-1", "class" => "form-1")));
        echo "
                                    ";
        // line 151
        echo "                                    <div class=\"row pad-top-large\">
                                        <div class=\"col-md-3\">
                                            <div class=\"form-group has-feedback\">
                                                ";
        // line 155
        echo "                                                ";
        // line 156
        echo "                                                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formrechavancee"]) ? $context["formrechavancee"] : $this->getContext($context, "formrechavancee")), "categorie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                ";
        // line 158
        echo "                                            </div>
                                        </div>
                                        <div class=\"col-md-3\">
                                            <div class=\"form-group has-feedback\">
                                                ";
        // line 165
        echo "                                                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formrechavancee"]) ? $context["formrechavancee"] : $this->getContext($context, "formrechavancee")), "pays", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "France")));
        // line 166
        echo "
                                            </div>
                                        </div>
                                       ";
        // line 171
        echo "                                                ";
        // line 174
        echo "                                                ";
        // line 178
        echo "                                        <div class=\"col-md-3\">
                                            <div class=\"form-group has-feedback\">
                                                ";
        // line 183
        echo "                                                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formrechavancee"]) ? $context["formrechavancee"] : $this->getContext($context, "formrechavancee")), "ville", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ville...")));
        // line 184
        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">

                                        <div class=\"col-md-3\">
                                            <div class=\"form-group has-feedback\">
                                                ";
        // line 195
        echo "                                                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formrechavancee"]) ? $context["formrechavancee"] : $this->getContext($context, "formrechavancee")), "mini", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prix min...")));
        echo "
                                            </div>
                                        </div>
                                        <div class=\"col-md-3\">
                                            <div class=\"form-group has-feedback\">
                                                ";
        // line 203
        echo "                                                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formrechavancee"]) ? $context["formrechavancee"] : $this->getContext($context, "formrechavancee")), "max", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prix max...")));
        echo "
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div  class=\"no-slider\">
            <span class=\"info\">

            <table >
               <tr>
                   <td class=\"td_title\">Début</td>
                   <td class=\"td_datepicker\">
                      ";
        // line 214
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formrechavancee"]) ? $context["formrechavancee"] : $this->getContext($context, "formrechavancee")), "debutdate", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "date_debut")));
        echo "
                   </td>
               </tr>
            </table>
            <table >
<br>
               <tr>
                   <td class=\"td_title\">Fin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   <td class=\"td_datepicker\">
                       ";
        // line 223
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formrechavancee"]) ? $context["formrechavancee"] : $this->getContext($context, "formrechavancee")), "findate", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "date_fin")));
        echo "
                   </td>
                </tr>
            </table>

            </span>
                                            </div>

                                        </div>

                                    </div>
                                    <div class=\"row-float pad-top-small\">
                                        <button class=\"btn btn-dark btn-large pull-right hvr-shutter-out-vertical\" style=\"margin-bottom:20px\">Rechercher</button>
                                    </div>

                                    ";
        // line 239
        echo "                                    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formrechavancee"]) ? $context["formrechavancee"] : $this->getContext($context, "formrechavancee")), 'form_end');
        echo "

                                </div></div>
                        </div>
                    </div>
                </div>
                <!-- Map Search // -->

                <!-- Page layout // -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 249
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 250
        echo "    ";
        // line 251
        echo "
    ";
        // line 254
        echo "    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>

    <script>

        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: new google.maps.LatLng(48.864716, 2.349014),
                zoom: 12
            });
            var infoWindow = new google.maps.InfoWindow;
            ";
        // line 264
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 265
            echo "            var usercoordonnes = {lat: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "mairie", array()), "latitude", array()), "html", null, true);
            echo ", lng: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "mairie", array()), "longitude", array()), "html", null, true);
            echo " };
            var makeruser = usercoordonnes;
            var markeruser = new google.maps.Marker({
                position: makeruser,
                map: map,
                title: '";
            // line 270
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "'

            });

            ";
        }
        // line 275
        echo "

            // Traitement pour geocoder les adresses d'annonces

            ";
        // line 279
        if ((isset($context["annadress"]) || array_key_exists("annadress", $context))) {
            // line 280
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["annadress"]);
            foreach ($context['_seq'] as $context["_key"] => $context["annadress"]) {
                // line 281
                echo "            var location = \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annadress"], "adresse", array()), "codePostal", array()), "html", null, true);
                echo "  \";
            axios.get('https://maps.googleapis.com/maps/api/geocode/json',{
                params:{
                    address: location,
                    key:'AIzaSyCZZVKfAjhdfo0VN0mk5IOq6ml3y1Ccuss'
                }
            })
                .then(function(response) {

                    var coordinates = response.data.results[0].geometry.location;


                    // Afficher les annonces au click des markers


                    ";
                // line 296
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["annadress"], "images", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["annonceimage"]) {
                    // line 297
                    echo "
                    var contentString =
                        '<div>'+
                        '<img src=\"";
                    // line 300
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["annonceimage"], "webPath", array())), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["annonceimage"], "alt", array()), "html", null, true);
                    echo "\" style=\"float:left; width: 100px; height: 90px;object-fit: cover;margin-right:5px\">'+
                        '<h5 style=\"color: blue; position: relative; botton: 15px;font-size: 15px;font-family:gisha;text-transform: lowercase;\">";
                    // line 301
                    echo twig_escape_filter($this->env, $this->getAttribute($context["annadress"], "titre", array()), "html", null, true);
                    echo "</h5>'+
                        '<h5 style=\"font-size: 12px;;font-family:gisha; text-transform: lowercase;\">";
                    // line 302
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["annadress"], "description", array()), 50), "html", null, true);
                    echo "</h5>'+
                        '<h5 style=\"color: red; font-size: 12px;;font-family:gisha; text-transform: lowercase;\">Prix : ";
                    // line 303
                    echo twig_escape_filter($this->env, $this->getAttribute($context["annadress"], "prixDefaut", array()), "html", null, true);
                    echo " &euro; / jour</h5>'+
                        '</div>'
                    ;

                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonceimage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 308
                echo "
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });

                    ";
                // line 313
                if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "mairie", array()), "epci", array()), "nom", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["annadress"], "mairie", array()), "epci", array()), "nom", array())))) {
                    // line 314
                    echo "                    var marker = new google.maps.Marker({
                        position: coordinates,
                        map: map,
                        title: 'Double cliquer pour voir l\\'annonce',
                        animation: google.maps.Animation.BOUNCE,
                        icon: {
                            url: '../../../web/bundles/lsimarket/images/epci.png',
                            scaledSize: new google.maps.Size(30, 30)
                        }

                    });

                    ";
                } elseif ((($this->getAttribute(                // line 326
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "mairie", array()), "epci", array()), "nom", array()) != $this->getAttribute($this->getAttribute($this->getAttribute($context["annadress"], "mairie", array()), "epci", array()), "nom", array())))) {
                    // line 327
                    echo "                    var marker = new google.maps.Marker({
                        position: coordinates,
                        map: map,
                        title: 'Double cliquer pour voir l\\'annonce',
                        animation: google.maps.Animation.BOUNCE,
                        icon: {
                            url: '../../../web/bundles/lsimarket/images/non_epci.png',
                            scaledSize: new google.maps.Size(30, 30)
                        }

                    });

                    ";
                } else {
                    // line 340
                    echo "                    var marker = new google.maps.Marker({
                        position: coordinates,
                        map: map,
                        title: 'Double cliquer pour voir l\\'annonce',
                        animation: google.maps.Animation.BOUNCE,
                        icon: {
                            url: '../../../web/bundles/lsimarket/images/logo_civilink.png',
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



                    ";
                }
                // line 384
                echo "
                    marker.addListener('mouseover', function() {

                        infowindow.open(map, marker);

                    });
                    marker.addListener('mouseout', function() {
                        infowindow.close(map, marker);
                    });
                    marker.addListener('dblclick', function() {
                       // infowindow.open(map, marker);
                        window.location.href = '";
                // line 395
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ls_imarket_voir_annonce", array("id" => $this->getAttribute($context["annadress"], "id", array()))), "html", null, true);
                echo "';
                    });
                    marker.addListener('click', function() {
                      infowindow.open(map, marker); 
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
            // line 407
            echo "            ";
        }
        // line 408
        echo "
        }


    </script>


    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCZZVKfAjhdfo0VN0mk5IOq6ml3y1Ccuss&callback=initMap\">
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "LSIMarketBundle:market:offres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  689 => 408,  686 => 407,  668 => 395,  655 => 384,  609 => 340,  594 => 327,  592 => 326,  578 => 314,  576 => 313,  569 => 308,  558 => 303,  554 => 302,  550 => 301,  544 => 300,  539 => 297,  535 => 296,  516 => 281,  511 => 280,  509 => 279,  503 => 275,  495 => 270,  484 => 265,  482 => 264,  470 => 254,  467 => 251,  465 => 250,  456 => 249,  435 => 239,  417 => 223,  405 => 214,  390 => 203,  381 => 195,  371 => 184,  368 => 183,  364 => 178,  362 => 174,  360 => 171,  355 => 166,  352 => 165,  346 => 158,  341 => 156,  339 => 155,  334 => 151,  330 => 149,  270 => 91,  261 => 87,  254 => 84,  251 => 83,  245 => 80,  239 => 78,  232 => 75,  230 => 74,  227 => 73,  225 => 72,  220 => 71,  218 => 70,  214 => 69,  208 => 68,  204 => 67,  200 => 65,  197 => 64,  191 => 63,  185 => 61,  182 => 60,  177 => 59,  175 => 58,  171 => 57,  167 => 56,  162 => 55,  159 => 54,  152 => 53,  150 => 52,  140 => 50,  134 => 49,  131 => 48,  129 => 47,  127 => 46,  122 => 43,  118 => 41,  114 => 39,  110 => 36,  107 => 33,  105 => 32,  101 => 30,  97 => 29,  81 => 15,  72 => 14,  60 => 11,  56 => 10,  51 => 9,  42 => 8,  11 => 1,);
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

{# Varables accessibles: 
    annonce : accessible à partir de la ligne 28 uniquement à l'intérieur de la bouble for
    mairiename : accessible à partir de la ligne 58 uniquement à l'intérieur de la bouble for
#}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/lsimarket/css/index.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/lsimarket/css/jquery-ui-1.10.3.custom.min.css') }}\">
{% endblock stylesheets %}

{%  block body %}
<section class=\"content-section\">
    <div class=\"container\">

        <div class=\"title-row heading\">
            <div class=\"col-md-12\">
                <h2>Matériels disponibles autour de moi </h2>
            </div>
        </div>
        <div class=\"page-layout two-column sidebar-right\">
            <main id=\"main\" class=\"main\">


                <div class=\"row-float pad-top-large\">
                    <div class=\"grid-box-all row\">
                        {% for annonce in annonces %}

                            <div class=\"grid-box\">
                                {% if app.user != null and app.user.mairie.epci.nom == annonce.mairie.epci.nom %}
                                    <span class=\"box-type\">
              {# {% if app.user %}
                {{ dump(app.user) }} #}
                                        <span class=\"text\">EPCI</span>

                                        {# {% endif %}  #}
            </span>
                                {% else %}
                                    <div style=\"height:100px;\"><br></div>
                                {% endif %}

                                <div class=\"description\">
                                    <h6><span class=\"type img_search\">
                        {% if annonce.images is not null %}
                                            {# <img src=\"{{ asset(annonce.images.webPath) }}\" alt=\"{{ annonce.images.alt }}\" /> #}
                                            {% set break = false %}
                                            {% for images in annonce.images if not break %}
                                            <a href=\"{{ path('ls_imarket_voir_annonce', {'id': annonce.id}) }}\"><img src=\"{{ asset(images.webPath) }}\" alt=\"{{ images.alt }}\"
                                                                                                                     class=\"responsive\" style=\"width: 260px; height: 150px;object-fit: cover;\"/>
                                                {% set break = true %}
                                                {% endfor %}
                                                {% endif %}
                                                <h4>{{ annonce.titre }}</h4></span></a>
                                        <p>{{ annonce.description|truncate(70) }}</p>
                                        <p>EPCI : {{ annonce.mairie.epci.nom }}</p>
                                        {% if mairiename is defined %}
                                            {% for name in mairiename %}
                                                {% if name.mairie.id == annonce.mairie.id %}
                                                    <p>Mairie : {{ name.nom }} </p>
                                                {% endif %}
                                            {% endfor %}
                                        {% endif %}
                                    </h6>

                                    <span class=\"meta\" style=\"font-weight:bold;\"><h6><i >Règles et conditions :</i> {{ annonce.regleCond|truncate(50) }}</h6></span>
                                    <p><span class=\"price\">Prix : {{ annonce.prixDefaut }} {{ annonce.typeforfait }}</span></p>
                                    <a class=\"link-arrow iconic iconic-arrow-forward\" href=\"{{ path('ls_imarket_voir_annonce', {'id': annonce.id}) }}\">
                                        {% if not app.user %}
                                            <center><a href=\"{{ path('fos_user_security_login') }}\" class=\"btn btn-success\">Reserver</a></center>
                                        {% elseif app.user.hasRole('ROLE_MAIRIE') %}

                                            {% if app.user.mairie.id == annonce.mairie.id %}
                                                <center><a href=\"{{ path('ls_imarket_modifier_annonce', {'id' :annonce.id})}}\"
                                                           class=\"btn btn-warning\">Modifier</a></center>
                                            {% else %}
                                                <center><a href=\"{{ path('ls_imarket_dupliquer_annonce', {'id' :annonce.id})}}\"
                                                           class=\"btn btn-info\">Créer à partir</a>
                                                    <a href=\"{{ path('ls_imarket_reserver_annonce', {'id': annonce.id}) }}\"
                                                       class=\"btn btn-success\">Reserver</a></center>
                                            {% endif %}
                                        {% else %}
                                            <center><a href=\"{{ path('ls_imarket_reserver_annonce', {'id': annonce.id}) }}\"
                                                       class=\"btn btn-success\">Reserver</a></center>
                                        {% endif %}
                                </div>
                            </div>

                        {% endfor %}
                        <!--
                              <div class=\"row-float text-center\">
                                <ul class=\"pagination\">
                                  <li>
                                    <a href=\"#\" aria-label=\"Previous\">
                                      <span aria-hidden=\"true\">«</span>
                                    </a>
                                  </li>
                                  <li><a href=\"#\">1</a></li>
                                  <li><a href=\"#\">2</a></li>
                                  <li><a href=\"#\">3</a></li>
                                  <li><a href=\"#\">4</a></li>
                                  <li><a href=\"#\">5</a></li>
                                  <li>
                                    <a href=\"#\" aria-label=\"Next\">
                                      <span aria-hidden=\"true\">»</span>
                                    </a>
                                  </li>
                                </ul>
                              </div>

                        <br><br>
                        -->
                    </div>
            </main>
            <!-- Sidebar  -->


        </div>
    </div>
</section>

<section class=\"content-section\">
    <div class=\"container\">
        <div class=\"title-row heading\">
            <div class=\"col-md-12\">
                <aside class=\"sidebar\" id=\"map\" style=\"height: 480px; width: 100%;\"> </aside>
            </div>
        </div>
    </div>
</section>



<!-- Map Search -->
<div class=\"container\">

    <div class=\"title-row heading\">
        <div class=\"col-md-8\">
            <section class=\"content-section\">
                <div class=\"container\">

                    <div class=\"row-float contents pad-top-large\">
                        <div>&nbsp;
                            <div class=\"comment-respond\">
                                <h2>Recherche avancée</h2>

                                <div class=\"form-content form-cotent-map map-search-control\">
                                    {{ form_start(formrechavancee, {'attr': {'id': 'form-1', 'class': 'form-1'}}) }}
                                    {#<form class=\"form-1\" id=\"form-1\">#}
                                    <div class=\"row pad-top-large\">
                                        <div class=\"col-md-3\">
                                            <div class=\"form-group has-feedback\">
                                                {#<select class=\"form-control\">#}
                                                {#<option value=\"\">Catégorie</option>#}
                                                {{ form_widget(formrechavancee.categorie, {'attr': {'class': 'form-control'}}) }}
                                                {#</select>          #}
                                            </div>
                                        </div>
                                        <div class=\"col-md-3\">
                                            <div class=\"form-group has-feedback\">
                                                {#<select class=\"form-control\">
                                                  <option value=\"\">Pays</option>
                                                </select> #}
                                                {{ form_widget(formrechavancee.pays, {'attr': {'class': 'form-control',
                                                    'placeholder': 'France'}}) }}
                                            </div>
                                        </div>
                                       {# <div class=\"col-md-3\">
                                            <div class=\"form-group has-feedback\">#}
                                                {#<select class=\"form-control\">
                                                  <option value=\"\">Département</option>
                                                </select> #}
                                                {#{{ form_widget(formrechavancee.departement, {'attr': {'class': 'form-control',
                                                    'placeholder': 'Departement...'}}) }}
                                            </div>
                                        </div>#}
                                        <div class=\"col-md-3\">
                                            <div class=\"form-group has-feedback\">
                                                {#<select class=\"form-control\">
                                                  <option value=\"\">Ville</option>
                                                </select> #}
                                                {{ form_widget(formrechavancee.ville, {'attr': {'class': 'form-control',
                                                    'placeholder': 'Ville...'}}) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">

                                        <div class=\"col-md-3\">
                                            <div class=\"form-group has-feedback\">
                                                {#<select class=\"form-control\">
                                                   <option value=\"\">Mini</option>
                                                </select> #}
                                                {{ form_widget(formrechavancee.mini, {'attr': {'class': 'form-control', 'placeholder': 'Prix min...'}}) }}
                                            </div>
                                        </div>
                                        <div class=\"col-md-3\">
                                            <div class=\"form-group has-feedback\">
                                                {#<select class=\"form-control\">
                                                  <option value=\"\">Max</option>
                                                </select>  #}
                                                {{ form_widget(formrechavancee.max, {'attr': {'class': 'form-control', 'placeholder': 'Prix max...'}}) }}
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div  class=\"no-slider\">
            <span class=\"info\">

            <table >
               <tr>
                   <td class=\"td_title\">Début</td>
                   <td class=\"td_datepicker\">
                      {{ form_widget(formrechavancee.debutdate, {'attr': {'class': 'form-control', 'id': 'date_debut'}}) }}
                   </td>
               </tr>
            </table>
            <table >
<br>
               <tr>
                   <td class=\"td_title\">Fin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   <td class=\"td_datepicker\">
                       {{ form_widget(formrechavancee.findate, {'attr': {'class': 'form-control', 'id': 'date_fin'}}) }}
                   </td>
                </tr>
            </table>

            </span>
                                            </div>

                                        </div>

                                    </div>
                                    <div class=\"row-float pad-top-small\">
                                        <button class=\"btn btn-dark btn-large pull-right hvr-shutter-out-vertical\" style=\"margin-bottom:20px\">Rechercher</button>
                                    </div>

                                    {#</form>#}
                                    {{ form_end(formrechavancee) }}

                                </div></div>
                        </div>
                    </div>
                </div>
                <!-- Map Search // -->

                <!-- Page layout // -->
{%  endblock body %}
{% block javascripts %}
    {#<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>#}

    {#<script type=\"text/javascript\" src=\"{{ asset('bundles/lsimarket/js/jquery-ui-1.10.3.custom.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/lsimarket/js/jquery.ui.datepicker-fr.js') }}\"></script>#}
    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>

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

                    var coordinates = response.data.results[0].geometry.location;


                    // Afficher les annonces au click des markers


                    {% for annonceimage in annadress.images %}

                    var contentString =
                        '<div>'+
                        '<img src=\"{{ asset(annonceimage.webPath) }}\" alt=\"{{ annonceimage.alt }}\" style=\"float:left; width: 100px; height: 90px;object-fit: cover;margin-right:5px\">'+
                        '<h5 style=\"color: blue; position: relative; botton: 15px;font-size: 15px;font-family:gisha;text-transform: lowercase;\">{{ annadress.titre }}</h5>'+
                        '<h5 style=\"font-size: 12px;;font-family:gisha; text-transform: lowercase;\">{{ annadress.description|truncate(50) }}</h5>'+
                        '<h5 style=\"color: red; font-size: 12px;;font-family:gisha; text-transform: lowercase;\">Prix : {{ annadress.prixDefaut }} &euro; / jour</h5>'+
                        '</div>'
                    ;

                    {% endfor %}

                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });

                    {% if app.user != null and app.user.mairie.epci.nom == annadress.mairie.epci.nom %}
                    var marker = new google.maps.Marker({
                        position: coordinates,
                        map: map,
                        title: 'Double cliquer pour voir l\\'annonce',
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
                        title: 'Double cliquer pour voir l\\'annonce',
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
                        title: 'Double cliquer pour voir l\\'annonce',
                        animation: google.maps.Animation.BOUNCE,
                        icon: {
                            url: '../../../web/bundles/lsimarket/images/logo_civilink.png',
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



                    {% endif %}

                    marker.addListener('mouseover', function() {

                        infowindow.open(map, marker);

                    });
                    marker.addListener('mouseout', function() {
                        infowindow.close(map, marker);
                    });
                    marker.addListener('dblclick', function() {
                       // infowindow.open(map, marker);
                        window.location.href = '{{ path(\"ls_imarket_voir_annonce\", {\"id\": annadress.id}) }}';
                    });
                    marker.addListener('click', function() {
                      infowindow.open(map, marker); 
                    });

                })
                .catch(function(error) {
                    console.log(error);
                });

            {% endfor %}
            {% endif %}

        }


    </script>


    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCZZVKfAjhdfo0VN0mk5IOq6ml3y1Ccuss&callback=initMap\">
    </script>

{% endblock %}
", "LSIMarketBundle:market:offres.html.twig", "C:\\wamp\\www\\laschekina0311\\laschekina0311\\src\\LSI\\MarketBundle/Resources/views/market/offres.html.twig");
    }
}
