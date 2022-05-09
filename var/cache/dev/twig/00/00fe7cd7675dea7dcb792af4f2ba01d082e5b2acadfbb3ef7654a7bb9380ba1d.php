<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* front.html.twig */
class __TwigTemplate_c4d0541512216b068f70370ecb63945512a265cb7239a121b8a7703859779f15 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
    <title> ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    

    ";
        // line 12
        $this->displayBlock('css', $context, $blocks);
        // line 24
        echo "</head>

<body class=\"overflow-hidden\">
    <header id=\"home\">

        <!-- navbar -->
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"#\">
                    <h2 class=\"gradient-mask \"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/logo-restoflex2.png"), "html", null, true);
        echo "\"  alt=\"image\" width=\"120\" height=\"35\" /></h2>
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#site-nav\" aria-controls=\"site-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon\"></span>
            </button>

                <div class=\"collapse navbar-collapse\" id=\"site-nav\">
                    <ul class=\"navbar-nav text-sm-left ml-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#features\">Fonctionnalités</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#pricing\">Pricing</a>
                        </li>


                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link\" href=\"#\" data-toggle=\"dropdown\">Pages <span class=\"pe-2x pe-7s-angle-down\"></span>  </a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"index-two.html\">Landing Style Two</a>
                                <a class=\"dropdown-item\" href=\"blog.html\">Blog Page</a>
                                <a class=\"dropdown-item\" href=\"blog-single.html\">Blog Single</a>
                            </div>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Help</a>
                        </li>

                        <li class=\"nav-item text-center\">
                            <a  href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
        echo "\" class=\"btn align-middle btn-outline-primary my-2 my-lg-0\">Se connecter</a>
                        </li>
                        <li class=\"nav-item text-center\">
                            <a href=\"#signup\" class=\"btn align-middle btn-primary my-2 my-lg-0\">Enregistrer-Vous</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- // end navbar -->


        <!-- hero -->
        <section class=\"jumbotron-two\">

            <div class=\"container\">

                <div class=\"row align-items-center\">
                    <div class=\"col-12 col-md-6\">
                        <h1 class=\"display-5\">Contrôlez votre restaurant.</h1>
                        <p class=\"text-muted mb-3\">Ayez toujours vos données les plus importantes à portée de main et optimisez votre gestion
                            commerciale
                            <div class=\"elementor-widget-container\">
                                <p><img class=\"alignleft entered lazyloaded\" src=\"https://swiver.io/wp-content/uploads/2021/03/check.png\" alt=\"\"
                                        width=\"20\" height=\"20\" data-lazy-src=\"https://swiver.io/wp-content/uploads/2021/03/check.png\"
                                        data-ll-status=\"loaded\">
                                    <noscript><img class=\"alignleft\" src=\"https://swiver.io/wp-content/uploads/2021/03/check.png\" alt=\"\"
                                            width=\"20\" height=\"20\" /></noscript>
                                    De la maison ou du bureau, travaillez où que vous soyez</p>
                                <p>
                                    <img class=\"alignleft entered lazyloaded\" src=\"https://swiver.io/wp-content/uploads/2021/03/check.png\"
                                        alt=\"\" width=\"20\" height=\"20\" data-lazy-src=\"https://swiver.io/wp-content/uploads/2021/03/check.png\"
                                        data-ll-status=\"loaded\"><noscript><img class=\"alignleft\"
                                            src=\"https://swiver.io/wp-content/uploads/2021/03/check.png\" alt=\"\" width=\"20\"
                                            height=\"20\" /></noscript></p>
                                <p>Travaillez en toute sécurité et contrôlez les accès de vos collaborateurs</p>
                                <p><img class=\"alignleft entered lazyloaded\" src=\"https://swiver.io/wp-content/uploads/2021/03/check.png\" alt=\"\"
                                        width=\"20\" height=\"20\" data-lazy-src=\"https://swiver.io/wp-content/uploads/2021/03/check.png\"
                                        data-ll-status=\"loaded\"><noscript><img class=\"alignleft\"
                                            src=\"https://swiver.io/wp-content/uploads/2021/03/check.png\" alt=\"\" width=\"20\"
                                            height=\"20\" /></noscript></p>
                                <p>Bénéficiez de mises à jour gratuites et régulières</p>
                            </div>
                        </p>
                        <p>
                            <a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test");
        echo "\" class=\"btn btn-xl btn-primary\">Créer votre compte</a>
                        </p>

                    </div>
                    <div class=\"col-12 col-md-6 my-3 my-md-lg\">

                        <div class=\"youtube cast-shadow\" data-video-id=\"sr_7b4i0TxA\" data-params=\"modestbranding=1&amp;showinfo=0&amp;controls=1&amp;vq=hd720\">
                            <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/web_landing.png"), "html", null, true);
        echo "\" alt=\"image\" class=\"img-fluid\">
                            <div class=\"play\"><span class=\"pe-7s-play pe-3x\"></span></div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- // end hero -->


        <div class=\"bg-shape\"></div>
        <div class=\"bg-circle\"></div>
        <div class=\"bg-circle-two\"></div>

    </header>
    
    <!-- // end #services.section -->
    <div class=\"section bg-light pt-lg\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"media mb-5\">
                        <div class=\"media-icon d-flex mr-3\"> <i class=\"pe-7s-paint-bucket pe-3x\"></i> </div>
                        <!-- // end .di -->
                        <div class=\"media-body\">
                            <h5 class=\"mt-0\">Personnalisation facile</h5> 
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"media mb-5\">
                        <div class=\"media-icon d-flex mr-3\"> <i class=\"pe-7s-rocket pe-3x\"></i> </div>
                        <!-- // end .di -->
                        <div class=\"media-body\">
                            <h5 class=\"mt-0\">Super rapide</h5>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"media mb-5\">
                        <div class=\"media-icon d-flex mr-3\"> <i class=\"pe-7s-piggy pe-3x\"></i> </div>
                        <!-- // end .di -->
                        <div class=\"media-body\">
                            <h5 class=\"mt-0\">Économiser de l'argent</h5>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"media mb-5\">
                        <div class=\"media-icon d-flex mr-3\"> <i class=\"pe-7s-server pe-3x\"></i> </div>
                        <!-- // end .di -->
                        <div class=\"media-body\">
                            <h5 class=\"mt-0\">Données Sécurisées</h5>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"media mb-5\">
                        <div class=\"media-icon d-flex mr-3\"> <i class=\"pe-7s-science pe-3x\"></i> </div>
                        <!-- // end .di -->
                        <div class=\"media-body\">
                            <h5 class=\"mt-0\">Technologie éprouvée</h5> 
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"media mb-5\">
                        <div class=\"media-icon d-flex mr-3\"> <i class=\"pe-7s-like2 pe-3x\"></i> </div>
                        <!-- // end .di -->
                        <div class=\"media-body\">
                            <h5 class=\"mt-0\">100% Satisfaction</h5>
                        </div>
                    </div>
                </div>
                <!-- // end .col -->
            </div>
        </div>
    </div>

    <!-- Features -->
    <div class=\"section\" id=\"features\">

        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-sm-8\">
                    <div class=\"browser-window limit-height my-5 mr-0 mr-sm-5\">
                        <div class=\"top-bar\">
                            <div class=\"circles\">
                                <div class=\"circle circle-red\"></div>
                                <div class=\"circle circle-yellow\"></div>
                                <div class=\"circle circle-blue\"></div>
                            </div>
                        </div>
                        <div class=\"content\">
                            <img src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/attendance-1 – 1.png"), "html", null, true);
        echo "\" alt=\"image\">
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"media\">
                        <div class=\"media-body\">
                            <div class=\"media-icon mb-3\"> <i class=\"pe-7s-like2 pe-3x\"></i> </div>
                            <h3 class=\"mt-0\">Tableau de bord parfait</h3>
                            <p> Restoflex vous permet de prendre les bonnes décisions au bon moment : Meilleurs clients, les
                                clients les plus endettés, suivi du chiffre d’affaires par semaine, par mois, par
                                produit ou encore vos recettes et dépenses.
                                Vous aurez tout ce qu'il faut pour définir et informer la stratégie de développement de
                                votre entreprise.</p>
                            </div>
                    </div>
                </div>

            </div>



            <div class=\"row align-items-center mt-5\">

                <div class=\"col-sm-4\">
                    <div class=\"media\">
                        <div class=\"media-body\">
                            <div class=\"media-icon mb-3\"> <i class=\"pe-7s-graph1 pe-3x\"></i> </div>
                            <h3 class=\"mt-0\">Graphiques et diagrammes</h3>
                            <p> Vous avez plusieurs Fournisseurs ou Restaurants, vous pouvez assigner un compte d’utilisateur à chaque restaurant ou fournisseurs pour évaluer leur performance.</p>
                        </div>
                    </div>
                </div>


                <div class=\"col-sm-8\">
                    <img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/attendance-1.png"), "html", null, true);
        echo "\" alt=\"image\" class=\"img-fluid cast-shadow my-5\">
                </div>


            </div>
        </div>



    </div>



    <!-- features -->


    <div class=\"section bg-light py-lg\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-6 col-lg-6\">
                    <div class=\"media\">

                        <!-- // end .di -->
                        <div class=\"media-body text-center\">
                            <div class=\"color-icon mb-3\"> <i class=\"pe-7s-headphones pe-3x\"></i> </div>
                            <h5 class=\"mt-0\">Support client</h5> Bloqué ou perdu sur le logiciel ?
                            Notre équipe vous répond en 10 minutes !
                            Mises à jour gratuites et régulières.
                            </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-6\">
                    <div class=\"media\">
                        <!-- // end .di -->
                        <div class=\"media-body text-center\">
                            <div class=\"color-icon mb-3\"> <i class=\"pe-7s-diamond pe-3x\"></i> </div>
                            <h5 class=\"mt-0\">Soigneusement conçu</h5>Ce site Web moderne est soigneusement organisé
                            afin que les visiteurs puissent facilement naviguer et trouver exactement ce qu’ils
                            recherchent.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- // end features -->



    <!-- Testimonials -->
    <div class=\"section\">
        <div class=\"container\">
            <div class=\"section-title text-center\">
                <h3>Recommandé par des entrepreneurs comme vous</h3>
                <p>Ils adorent ça. Lisez ce que nos clients avaient à dire!</p>
            </div>

            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"embed-tweet-item\">
                        <blockquote class=\"twitter-tweet\" data-cards=\"hidden\" lang=\"en\" data-width=\"550\" data-link-color=\"#7642FF\" data-align=\"center\">
                            <a href=\"https://twitter.com/Abir_Moula/status/1513259271101763584\"></a>
                        </blockquote>
                    </div>
                    <!-- end .embed-tweet-item -->
                </div>
                <!-- end .col -->
                <div class=\"col-md-4\">
                    <div class=\"embed-tweet-item\">
                        <blockquote class=\"twitter-tweet\" data-cards=\"hidden\" lang=\"en\" data-width=\"550\" data-link-color=\"#7642FF\" data-align=\"center\">
                            <a href=\"https://twitter.com/anis__bh/status/1513259687579471877\"></a>
                        </blockquote>
                    </div>
                    <!-- end .embed-tweet-item -->
                </div>
                <!-- end .col -->
                <div class=\"col-md-4\">
                    <div class=\"embed-tweet-item\">
                        <blockquote class=\"twitter-tweet\" data-cards=\"hidden\" lang=\"en\" data-width=\"550\" data-link-color=\"#7642FF\" data-align=\"center\">
                            <a href=\"https://twitter.com/yosr_belaam/status/1513281555103420426\"></a>
                        </blockquote>
                    </div>
                    <!-- end .embed-tweet-item -->
                </div>
                <!-- end .col -->
            </div>
            <!-- end .row -->


        </div>
    </div>
    <!-- // end Testimonials -->




    <!-- Pricing -->
    <div class=\"section bg-light py-lg\" id=\"pricing\">
        <div class=\"container\">

            <div class=\"section-title text-center mt-0 mb-5\">
                <h3>Choisissez le plan qui convient à vos besoins.</h3>
                <p>En choisissant un plan premium vous bénéficiez d'une garantie Satisfait ou Remboursé valable 30 jours de la date du paiement.</p>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"card pricing\">
                        <div class=\"card-body\">
                            <small class=\"text-muted\">NOUVEAU RESTAURANT</small>
                            <h5 class=\"card-title\">29 TND HT/mois</h5>
                            <p class=\"card-text\">
                                <ul class=\"list-unstyled\">
                                    <li>3 Projets</li>
                                    <li class=\"plan-muted\">Collaboration d'équipe</li>
                                    <li class=\"plan-muted\">Statistiques &amp; Rapports</li>
                                    <li>1 Gérant</li>
                                </ul>
                            </p>
                            <a href=\"#\" class=\"btn btn-xl btn-outline-primary\">Créer votre compte</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"card pricing\">
                        <div class=\"card-body\">
                            <small class=\"text-muted\">PETIT RESTAURANT</small>
                            <h5 class=\"card-title\">49 TND HT/ mois</h5>
                            <p class=\"card-text\">
                                <ul class=\"list-unstyled\">
                                    <li>20 Projets</li>
                                    <li>Collaboration d'équipe</li>
                                    <li>Statistiques &amp; Rapports</li>
                                    <li>5 Gérants</li>
                                </ul>
                            </p>
                            <a href=\"#\" class=\"btn btn-xl btn-primary\">Créer votre compte</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"card pricing\">
                        <div class=\"card-body\">
                            <small class=\"text-muted\">GRAND RESTAURANT</small>
                            <h4 class=\"card-title\">199 TND HT/ mois</h4>
                            <p class=\"card-text\">
                                <ul class=\"list-unstyled\">
                                    <li>Projets illimités</li>
                                    <li>Collaboration d'équipe</li>
                                    <li>Statistiques &amp; Rapports</li>
                                    <li>Soutien Prioritaire</li>
                                </ul>
                            </p>
                            <a href=\"#\" class=\"btn btn-xl btn-outline-primary\">Créer votre compte</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- // end Pricing -->

    <!-- Signup -->
    <div class=\"section\" id=\"signup\">
        <div class=\"container\">
            <div class=\"section-title text-center\">
                <h3>Start your free trial</h3>
                <p>Signup now. Its free and takes less than 3 minutes</p>
            </div>
            <div class=\"row justify-content-md-center\">
                <div class=\"col col-md-5\">
                    <form>
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Full Name\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-xl btn-block btn-primary\">GET STARTED FOR FREE</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>



    <div class=\"section bg-light mt-4\" id=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4\"> <img src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/logo-restoflex2.png"), "html", null, true);
        echo "\"  alt=\"image\" width=\"120\" height=\"35\" />
                    <p class=\"mt-3 ml-1 text-muted\">Restoflex c'est votre solution. </p>
                    <p class=\"ml-1\"><a href=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://themeforest.net/user/surjithctly/portfolio?ref=surjithctly&utm_source=footer_content"), "html", null, true);
        echo "\" target=\"_blank\">Acheter maintenant →</a></p>
                    <!-- // end .lead -->
                </div>
                <!-- // end .col-sm-3 -->
                <div class=\"col-sm-2\">
                    <ul class=\"list-unstyled footer-links ml-1\">
                        <li><a href=\"#portfolio\">Portfolio</a></li>
                        <li><a href=\"#about\">About us</a></li>
                        <li><a href=\"#services\">Services</a></li>
                        <li><a href=\"#contact\">Contact</a></li>
                    </ul>
                </div>
                <!-- // end .col-sm-3 -->
                <div class=\"col-sm-2\">
                    <ul class=\"list-unstyled footer-links ml-1\">
                        <li><a href=\"#\">Terms</a></li>
                        <li><a href=\"#about\">Privacy</a></li>
                    </ul>
                </div>
                <!-- // end .col-sm-3 -->
                <div class=\"col-sm-2\">
                    <ul class=\"list-unstyled footer-links ml-1\">
                        <li><a href=\"#\">Facebook</a></li>
                        <li><a href=\"#\">Twitter</a></li>
                        <li><a href=\"#\">Linkedin</a></li>
                    </ul>
                </div>
                <!-- // end .col-sm-3 -->
                <div class=\"col-sm-2\">
                    <a href=\"#home\" class=\"btn btn-sm btn-outline-primary ml-1\">Go to Top</a>
                </div>
                <!-- // end .col-sm-3 -->
            </div>
            <!-- // end .row -->
            <div class=\" text-center mt-4\"> <small class=\"text-muted\">Copyright ©
                          <script type=\"text/javascript\">
                          document.write(new Date().getFullYear());
                          </script>
                          All rights reserved. Restoflex
                      </small></div>
        </div>
        <!-- // end .container -->
    </div>
    <!-- // end #about.section -->
    <!-- // end .agency -->
    <!-- JS Files -->
    <!-- build:js js/app.min.js -->
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/global/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap JS -->
    <script src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/global/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Main JS -->
    <script src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/script.js"), "html", null, true);
        echo "\"></script>
    <!-- /build -->
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Restoflex Landing page ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        echo "  
    <!-- CSS Files -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Product+Sans:300,400,700"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- build:css css/app.min.css -->
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/global/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Plugins -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/global/plugins/icon-font.css"), "html", null, true);
        echo "\">
    <!-- Main CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/style.css"), "html", null, true);
        echo "\">
    <!-- /build -->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  636 => 21,  631 => 19,  626 => 17,  620 => 14,  607 => 12,  588 => 9,  573 => 502,  568 => 500,  563 => 498,  512 => 450,  507 => 448,  304 => 248,  265 => 212,  165 => 115,  155 => 108,  106 => 62,  74 => 33,  63 => 24,  61 => 12,  55 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
    <title> {% block title %} Restoflex Landing page {% endblock %}</title>
    

    {% block css %}  
    <!-- CSS Files -->
    <link href=\"{{asset('https://fonts.googleapis.com/css?family=Product+Sans:300,400,700')}}\" rel=\"stylesheet\">
    <!-- build:css css/app.min.css -->
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('front-office/css/global/bootstrap.min.css')}}\">
    <!-- Plugins -->
    <link rel=\"stylesheet\" href=\"{{asset('front-office/css/global/plugins/icon-font.css')}}\">
    <!-- Main CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('front-office/css/style.css')}}\">
    <!-- /build -->
    {% endblock %}
</head>

<body class=\"overflow-hidden\">
    <header id=\"home\">

        <!-- navbar -->
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"#\">
                    <h2 class=\"gradient-mask \"><img src=\"{{asset('front-office/images/logo-restoflex2.png')}}\"  alt=\"image\" width=\"120\" height=\"35\" /></h2>
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#site-nav\" aria-controls=\"site-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon\"></span>
            </button>

                <div class=\"collapse navbar-collapse\" id=\"site-nav\">
                    <ul class=\"navbar-nav text-sm-left ml-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#features\">Fonctionnalités</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#pricing\">Pricing</a>
                        </li>


                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link\" href=\"#\" data-toggle=\"dropdown\">Pages <span class=\"pe-2x pe-7s-angle-down\"></span>  </a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"index-two.html\">Landing Style Two</a>
                                <a class=\"dropdown-item\" href=\"blog.html\">Blog Page</a>
                                <a class=\"dropdown-item\" href=\"blog-single.html\">Blog Single</a>
                            </div>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Help</a>
                        </li>

                        <li class=\"nav-item text-center\">
                            <a  href=\"{{ path('connexion') }}\" class=\"btn align-middle btn-outline-primary my-2 my-lg-0\">Se connecter</a>
                        </li>
                        <li class=\"nav-item text-center\">
                            <a href=\"#signup\" class=\"btn align-middle btn-primary my-2 my-lg-0\">Enregistrer-Vous</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- // end navbar -->


        <!-- hero -->
        <section class=\"jumbotron-two\">

            <div class=\"container\">

                <div class=\"row align-items-center\">
                    <div class=\"col-12 col-md-6\">
                        <h1 class=\"display-5\">Contrôlez votre restaurant.</h1>
                        <p class=\"text-muted mb-3\">Ayez toujours vos données les plus importantes à portée de main et optimisez votre gestion
                            commerciale
                            <div class=\"elementor-widget-container\">
                                <p><img class=\"alignleft entered lazyloaded\" src=\"https://swiver.io/wp-content/uploads/2021/03/check.png\" alt=\"\"
                                        width=\"20\" height=\"20\" data-lazy-src=\"https://swiver.io/wp-content/uploads/2021/03/check.png\"
                                        data-ll-status=\"loaded\">
                                    <noscript><img class=\"alignleft\" src=\"https://swiver.io/wp-content/uploads/2021/03/check.png\" alt=\"\"
                                            width=\"20\" height=\"20\" /></noscript>
                                    De la maison ou du bureau, travaillez où que vous soyez</p>
                                <p>
                                    <img class=\"alignleft entered lazyloaded\" src=\"https://swiver.io/wp-content/uploads/2021/03/check.png\"
                                        alt=\"\" width=\"20\" height=\"20\" data-lazy-src=\"https://swiver.io/wp-content/uploads/2021/03/check.png\"
                                        data-ll-status=\"loaded\"><noscript><img class=\"alignleft\"
                                            src=\"https://swiver.io/wp-content/uploads/2021/03/check.png\" alt=\"\" width=\"20\"
                                            height=\"20\" /></noscript></p>
                                <p>Travaillez en toute sécurité et contrôlez les accès de vos collaborateurs</p>
                                <p><img class=\"alignleft entered lazyloaded\" src=\"https://swiver.io/wp-content/uploads/2021/03/check.png\" alt=\"\"
                                        width=\"20\" height=\"20\" data-lazy-src=\"https://swiver.io/wp-content/uploads/2021/03/check.png\"
                                        data-ll-status=\"loaded\"><noscript><img class=\"alignleft\"
                                            src=\"https://swiver.io/wp-content/uploads/2021/03/check.png\" alt=\"\" width=\"20\"
                                            height=\"20\" /></noscript></p>
                                <p>Bénéficiez de mises à jour gratuites et régulières</p>
                            </div>
                        </p>
                        <p>
                            <a href=\"{{ path('app_test') }}\" class=\"btn btn-xl btn-primary\">Créer votre compte</a>
                        </p>

                    </div>
                    <div class=\"col-12 col-md-6 my-3 my-md-lg\">

                        <div class=\"youtube cast-shadow\" data-video-id=\"sr_7b4i0TxA\" data-params=\"modestbranding=1&amp;showinfo=0&amp;controls=1&amp;vq=hd720\">
                            <img src=\"{{asset('front-office/images/web_landing.png')}}\" alt=\"image\" class=\"img-fluid\">
                            <div class=\"play\"><span class=\"pe-7s-play pe-3x\"></span></div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- // end hero -->


        <div class=\"bg-shape\"></div>
        <div class=\"bg-circle\"></div>
        <div class=\"bg-circle-two\"></div>

    </header>
    
    <!-- // end #services.section -->
    <div class=\"section bg-light pt-lg\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"media mb-5\">
                        <div class=\"media-icon d-flex mr-3\"> <i class=\"pe-7s-paint-bucket pe-3x\"></i> </div>
                        <!-- // end .di -->
                        <div class=\"media-body\">
                            <h5 class=\"mt-0\">Personnalisation facile</h5> 
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"media mb-5\">
                        <div class=\"media-icon d-flex mr-3\"> <i class=\"pe-7s-rocket pe-3x\"></i> </div>
                        <!-- // end .di -->
                        <div class=\"media-body\">
                            <h5 class=\"mt-0\">Super rapide</h5>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"media mb-5\">
                        <div class=\"media-icon d-flex mr-3\"> <i class=\"pe-7s-piggy pe-3x\"></i> </div>
                        <!-- // end .di -->
                        <div class=\"media-body\">
                            <h5 class=\"mt-0\">Économiser de l'argent</h5>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"media mb-5\">
                        <div class=\"media-icon d-flex mr-3\"> <i class=\"pe-7s-server pe-3x\"></i> </div>
                        <!-- // end .di -->
                        <div class=\"media-body\">
                            <h5 class=\"mt-0\">Données Sécurisées</h5>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"media mb-5\">
                        <div class=\"media-icon d-flex mr-3\"> <i class=\"pe-7s-science pe-3x\"></i> </div>
                        <!-- // end .di -->
                        <div class=\"media-body\">
                            <h5 class=\"mt-0\">Technologie éprouvée</h5> 
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"media mb-5\">
                        <div class=\"media-icon d-flex mr-3\"> <i class=\"pe-7s-like2 pe-3x\"></i> </div>
                        <!-- // end .di -->
                        <div class=\"media-body\">
                            <h5 class=\"mt-0\">100% Satisfaction</h5>
                        </div>
                    </div>
                </div>
                <!-- // end .col -->
            </div>
        </div>
    </div>

    <!-- Features -->
    <div class=\"section\" id=\"features\">

        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-sm-8\">
                    <div class=\"browser-window limit-height my-5 mr-0 mr-sm-5\">
                        <div class=\"top-bar\">
                            <div class=\"circles\">
                                <div class=\"circle circle-red\"></div>
                                <div class=\"circle circle-yellow\"></div>
                                <div class=\"circle circle-blue\"></div>
                            </div>
                        </div>
                        <div class=\"content\">
                            <img src=\"{{asset('front-office/images/attendance-1 – 1.png')}}\" alt=\"image\">
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"media\">
                        <div class=\"media-body\">
                            <div class=\"media-icon mb-3\"> <i class=\"pe-7s-like2 pe-3x\"></i> </div>
                            <h3 class=\"mt-0\">Tableau de bord parfait</h3>
                            <p> Restoflex vous permet de prendre les bonnes décisions au bon moment : Meilleurs clients, les
                                clients les plus endettés, suivi du chiffre d’affaires par semaine, par mois, par
                                produit ou encore vos recettes et dépenses.
                                Vous aurez tout ce qu'il faut pour définir et informer la stratégie de développement de
                                votre entreprise.</p>
                            </div>
                    </div>
                </div>

            </div>



            <div class=\"row align-items-center mt-5\">

                <div class=\"col-sm-4\">
                    <div class=\"media\">
                        <div class=\"media-body\">
                            <div class=\"media-icon mb-3\"> <i class=\"pe-7s-graph1 pe-3x\"></i> </div>
                            <h3 class=\"mt-0\">Graphiques et diagrammes</h3>
                            <p> Vous avez plusieurs Fournisseurs ou Restaurants, vous pouvez assigner un compte d’utilisateur à chaque restaurant ou fournisseurs pour évaluer leur performance.</p>
                        </div>
                    </div>
                </div>


                <div class=\"col-sm-8\">
                    <img src=\"{{asset('front-office/images/attendance-1.png')}}\" alt=\"image\" class=\"img-fluid cast-shadow my-5\">
                </div>


            </div>
        </div>



    </div>



    <!-- features -->


    <div class=\"section bg-light py-lg\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-6 col-lg-6\">
                    <div class=\"media\">

                        <!-- // end .di -->
                        <div class=\"media-body text-center\">
                            <div class=\"color-icon mb-3\"> <i class=\"pe-7s-headphones pe-3x\"></i> </div>
                            <h5 class=\"mt-0\">Support client</h5> Bloqué ou perdu sur le logiciel ?
                            Notre équipe vous répond en 10 minutes !
                            Mises à jour gratuites et régulières.
                            </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-6\">
                    <div class=\"media\">
                        <!-- // end .di -->
                        <div class=\"media-body text-center\">
                            <div class=\"color-icon mb-3\"> <i class=\"pe-7s-diamond pe-3x\"></i> </div>
                            <h5 class=\"mt-0\">Soigneusement conçu</h5>Ce site Web moderne est soigneusement organisé
                            afin que les visiteurs puissent facilement naviguer et trouver exactement ce qu’ils
                            recherchent.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- // end features -->



    <!-- Testimonials -->
    <div class=\"section\">
        <div class=\"container\">
            <div class=\"section-title text-center\">
                <h3>Recommandé par des entrepreneurs comme vous</h3>
                <p>Ils adorent ça. Lisez ce que nos clients avaient à dire!</p>
            </div>

            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"embed-tweet-item\">
                        <blockquote class=\"twitter-tweet\" data-cards=\"hidden\" lang=\"en\" data-width=\"550\" data-link-color=\"#7642FF\" data-align=\"center\">
                            <a href=\"https://twitter.com/Abir_Moula/status/1513259271101763584\"></a>
                        </blockquote>
                    </div>
                    <!-- end .embed-tweet-item -->
                </div>
                <!-- end .col -->
                <div class=\"col-md-4\">
                    <div class=\"embed-tweet-item\">
                        <blockquote class=\"twitter-tweet\" data-cards=\"hidden\" lang=\"en\" data-width=\"550\" data-link-color=\"#7642FF\" data-align=\"center\">
                            <a href=\"https://twitter.com/anis__bh/status/1513259687579471877\"></a>
                        </blockquote>
                    </div>
                    <!-- end .embed-tweet-item -->
                </div>
                <!-- end .col -->
                <div class=\"col-md-4\">
                    <div class=\"embed-tweet-item\">
                        <blockquote class=\"twitter-tweet\" data-cards=\"hidden\" lang=\"en\" data-width=\"550\" data-link-color=\"#7642FF\" data-align=\"center\">
                            <a href=\"https://twitter.com/yosr_belaam/status/1513281555103420426\"></a>
                        </blockquote>
                    </div>
                    <!-- end .embed-tweet-item -->
                </div>
                <!-- end .col -->
            </div>
            <!-- end .row -->


        </div>
    </div>
    <!-- // end Testimonials -->




    <!-- Pricing -->
    <div class=\"section bg-light py-lg\" id=\"pricing\">
        <div class=\"container\">

            <div class=\"section-title text-center mt-0 mb-5\">
                <h3>Choisissez le plan qui convient à vos besoins.</h3>
                <p>En choisissant un plan premium vous bénéficiez d'une garantie Satisfait ou Remboursé valable 30 jours de la date du paiement.</p>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"card pricing\">
                        <div class=\"card-body\">
                            <small class=\"text-muted\">NOUVEAU RESTAURANT</small>
                            <h5 class=\"card-title\">29 TND HT/mois</h5>
                            <p class=\"card-text\">
                                <ul class=\"list-unstyled\">
                                    <li>3 Projets</li>
                                    <li class=\"plan-muted\">Collaboration d'équipe</li>
                                    <li class=\"plan-muted\">Statistiques &amp; Rapports</li>
                                    <li>1 Gérant</li>
                                </ul>
                            </p>
                            <a href=\"#\" class=\"btn btn-xl btn-outline-primary\">Créer votre compte</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"card pricing\">
                        <div class=\"card-body\">
                            <small class=\"text-muted\">PETIT RESTAURANT</small>
                            <h5 class=\"card-title\">49 TND HT/ mois</h5>
                            <p class=\"card-text\">
                                <ul class=\"list-unstyled\">
                                    <li>20 Projets</li>
                                    <li>Collaboration d'équipe</li>
                                    <li>Statistiques &amp; Rapports</li>
                                    <li>5 Gérants</li>
                                </ul>
                            </p>
                            <a href=\"#\" class=\"btn btn-xl btn-primary\">Créer votre compte</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"card pricing\">
                        <div class=\"card-body\">
                            <small class=\"text-muted\">GRAND RESTAURANT</small>
                            <h4 class=\"card-title\">199 TND HT/ mois</h4>
                            <p class=\"card-text\">
                                <ul class=\"list-unstyled\">
                                    <li>Projets illimités</li>
                                    <li>Collaboration d'équipe</li>
                                    <li>Statistiques &amp; Rapports</li>
                                    <li>Soutien Prioritaire</li>
                                </ul>
                            </p>
                            <a href=\"#\" class=\"btn btn-xl btn-outline-primary\">Créer votre compte</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- // end Pricing -->

    <!-- Signup -->
    <div class=\"section\" id=\"signup\">
        <div class=\"container\">
            <div class=\"section-title text-center\">
                <h3>Start your free trial</h3>
                <p>Signup now. Its free and takes less than 3 minutes</p>
            </div>
            <div class=\"row justify-content-md-center\">
                <div class=\"col col-md-5\">
                    <form>
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Full Name\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-xl btn-block btn-primary\">GET STARTED FOR FREE</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>



    <div class=\"section bg-light mt-4\" id=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4\"> <img src=\"{{asset('front-office/images/logo-restoflex2.png')}}\"  alt=\"image\" width=\"120\" height=\"35\" />
                    <p class=\"mt-3 ml-1 text-muted\">Restoflex c'est votre solution. </p>
                    <p class=\"ml-1\"><a href=\"{{asset('https://themeforest.net/user/surjithctly/portfolio?ref=surjithctly&utm_source=footer_content')}}\" target=\"_blank\">Acheter maintenant →</a></p>
                    <!-- // end .lead -->
                </div>
                <!-- // end .col-sm-3 -->
                <div class=\"col-sm-2\">
                    <ul class=\"list-unstyled footer-links ml-1\">
                        <li><a href=\"#portfolio\">Portfolio</a></li>
                        <li><a href=\"#about\">About us</a></li>
                        <li><a href=\"#services\">Services</a></li>
                        <li><a href=\"#contact\">Contact</a></li>
                    </ul>
                </div>
                <!-- // end .col-sm-3 -->
                <div class=\"col-sm-2\">
                    <ul class=\"list-unstyled footer-links ml-1\">
                        <li><a href=\"#\">Terms</a></li>
                        <li><a href=\"#about\">Privacy</a></li>
                    </ul>
                </div>
                <!-- // end .col-sm-3 -->
                <div class=\"col-sm-2\">
                    <ul class=\"list-unstyled footer-links ml-1\">
                        <li><a href=\"#\">Facebook</a></li>
                        <li><a href=\"#\">Twitter</a></li>
                        <li><a href=\"#\">Linkedin</a></li>
                    </ul>
                </div>
                <!-- // end .col-sm-3 -->
                <div class=\"col-sm-2\">
                    <a href=\"#home\" class=\"btn btn-sm btn-outline-primary ml-1\">Go to Top</a>
                </div>
                <!-- // end .col-sm-3 -->
            </div>
            <!-- // end .row -->
            <div class=\" text-center mt-4\"> <small class=\"text-muted\">Copyright ©
                          <script type=\"text/javascript\">
                          document.write(new Date().getFullYear());
                          </script>
                          All rights reserved. Restoflex
                      </small></div>
        </div>
        <!-- // end .container -->
    </div>
    <!-- // end #about.section -->
    <!-- // end .agency -->
    <!-- JS Files -->
    <!-- build:js js/app.min.js -->
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src=\"{{asset('front-office/js/global/jquery-3.2.1.min.js')}}\"></script>
    <!-- Bootstrap JS -->
    <script src=\"{{asset('front-office/js/global/bootstrap.bundle.min.js')}}\"></script>
    <!-- Main JS -->
    <script src=\"{{asset('front-office/js/script.js')}}\"></script>
    <!-- /build -->
</body>

</html>", "front.html.twig", "C:\\xampp\\htdocs\\Pidev_symfony_TANYT\\templates\\front.html.twig");
    }
}
