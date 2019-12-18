<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_fea18235d69d28712b27d4c00a363b44730f9c08b275e05649d6faabe4c92c5e extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "

<!-- Page layout -->
<section class=\"content-section\">
    <div class=\"\">
    <div class=\"title-row heading\">
      <div class=\"col-md-12\">
        <h2>Accéder à mon espace </h2>        
    </div>
    </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <section class=\"content-section\">
                    <div class=\"\">

                        <div class=\"row-float contents pad-top-large\">
                            <div>&nbsp;
                                <div class=\"comment-respond\">

                                    <form action=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                                        <div >
                                            ";
        // line 27
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 28
            echo "                                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" class=\"form-control\"/>
                                            ";
        }
        // line 30
        echo "                                            <center><p><h3><strong>VOUS AVEZ DEJA UN COMPTE ?</strong></h3></p></center>
                                            ";
        // line 32
        echo "
                                            <div class=\"form-group col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12\">
                                                <div class=\"input-group\">
                                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                                    <input type=\"text\" class=\"form-control input-lg\"  id=\"username\" name=\"_username\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                                                           required=\"required\" autocomplete=\"username\" class=\"form-control\"  placeholder=\"Adresse e-mail ou Nom d'utilisateur\" />
                                                </div>
                                            </div>


                                            ";
        // line 43
        echo "                                        </div>
                                        <div class=\"form-group col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12\">
                                            <div class=\"input-group\">
                                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                                                <input type=\"password\" class=\"form-control input-lg\" id=\"password\" name=\"_password\"
                                                       required=\"required\" autocomplete=\"current-password\" class=\"form-control\" placeholder=\"Mot de passe\"/>
                                            </div>
                                        </div>


                                        <div class=\"form-group col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12\">
                                            <div>
                                                <center><table><tr><td>
                                                 <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" style=\"width:15px; height: 18px; margin-top:-20px\"/></td><td>&nbsp; 
                                            <label for=\"remember_me\" class=\"control-label\">
                                                ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></td></tr></table><br>
                                                    <input type=\"submit\" id=\"_submit\" name=\"_submit\"
                                                           value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"
                                                           class=\"btn btn-primary\"/>
                                                </center>
                                            </div>

                                            <br/>
                                            <center>
                                                <p>
                                                    <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié ?</a>
                                                </p>
                                                <p style=\"font:400 16px/1.38 Helvetica;color:rgb(139, 138, 138);\">
                                                    Pas encore inscrit, <a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Rejoignez notre réseau</a>
                                                </p>
                                            </center>
                                        </div>
                                </div>
                                </form>

                            </div></div>
                    </div>
            </div>
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

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 71,  118 => 68,  107 => 60,  102 => 58,  85 => 43,  76 => 36,  70 => 32,  67 => 30,  61 => 28,  59 => 27,  54 => 25,  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
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

{% if error %}
    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}


<!-- Page layout -->
<section class=\"content-section\">
    <div class=\"\">
    <div class=\"title-row heading\">
      <div class=\"col-md-12\">
        <h2>Accéder à mon espace </h2>        
    </div>
    </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <section class=\"content-section\">
                    <div class=\"\">

                        <div class=\"row-float contents pad-top-large\">
                            <div>&nbsp;
                                <div class=\"comment-respond\">

                                    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                                        <div >
                                            {% if csrf_token %}
                                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" class=\"form-control\"/>
                                            {% endif %}
                                            <center><p><h3><strong>VOUS AVEZ DEJA UN COMPTE ?</strong></h3></p></center>
                                            {#<label for=\"username\" class=\"control-label\">{{ 'security.login.username'|trans }}</label>#}

                                            <div class=\"form-group col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12\">
                                                <div class=\"input-group\">
                                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                                    <input type=\"text\" class=\"form-control input-lg\"  id=\"username\" name=\"_username\" value=\"{{ last_username }}\"
                                                           required=\"required\" autocomplete=\"username\" class=\"form-control\"  placeholder=\"Adresse e-mail ou Nom d'utilisateur\" />
                                                </div>
                                            </div>


                                            {#<label for=\"password\" class=\"control-label\">{{ 'security.login.password'|trans }}</label>#}
                                        </div>
                                        <div class=\"form-group col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12\">
                                            <div class=\"input-group\">
                                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                                                <input type=\"password\" class=\"form-control input-lg\" id=\"password\" name=\"_password\"
                                                       required=\"required\" autocomplete=\"current-password\" class=\"form-control\" placeholder=\"Mot de passe\"/>
                                            </div>
                                        </div>


                                        <div class=\"form-group col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12\">
                                            <div>
                                                <center><table><tr><td>
                                                 <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" style=\"width:15px; height: 18px; margin-top:-20px\"/></td><td>&nbsp; 
                                            <label for=\"remember_me\" class=\"control-label\">
                                                {{ 'security.login.remember_me'|trans }}</label></td></tr></table><br>
                                                    <input type=\"submit\" id=\"_submit\" name=\"_submit\"
                                                           value=\"{{ 'security.login.submit'|trans }}\"
                                                           class=\"btn btn-primary\"/>
                                                </center>
                                            </div>

                                            <br/>
                                            <center>
                                                <p>
                                                    <a href=\"{{ path('fos_user_resetting_request') }}\">Mot de passe oublié ?</a>
                                                </p>
                                                <p style=\"font:400 16px/1.38 Helvetica;color:rgb(139, 138, 138);\">
                                                    Pas encore inscrit, <a href=\"{{ path('fos_user_registration_register') }}\">Rejoignez notre réseau</a>
                                                </p>
                                            </center>
                                        </div>
                                </div>
                                </form>

                            </div></div>
                    </div>
            </div>
</section>
</div>
</div>
<div class=\"row-float contents pad-top-large\">

</div>
</div>
</section>
<!-- Page layout // -->
", "@FOSUser/Security/login_content.html.twig", "C:\\wamp\\www\\marketplace\\src\\LSI\\MarketBundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}
