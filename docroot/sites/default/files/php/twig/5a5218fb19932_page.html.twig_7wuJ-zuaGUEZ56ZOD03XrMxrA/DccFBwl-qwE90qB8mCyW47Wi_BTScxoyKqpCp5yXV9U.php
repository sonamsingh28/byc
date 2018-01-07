<?php

/* themes/drupal8_parallax_theme/templates/layout/page.html.twig */
class __TwigTemplate_95fa4d861f3cfcba8fe718789b722ef3af0e676ed32d1cebeae68aecb32cd700 extends Twig_Template
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
        $tags = array("if" => 62, "for" => 125);
        $filters = array("raw" => 126, "date" => 439);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array('raw', 'date'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 60
        echo "

";
        // line 62
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contact_email", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_menu", array()))) {
            // line 63
            echo "  <div class=\"top-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Contact Phone & Email -->
        <div class=\"col-sm-8\">
          ";
            // line 69
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contact_email", array())) {
                // line 70
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contact_email", array()), "html", null, true));
                echo "
          ";
            }
            // line 72
            echo "        </div>
        <!-- End: Contact Phone & Email -->

        <!-- Start: Top menu -->
        <div class=\"col-sm-4\">
          ";
            // line 77
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_menu", array())) {
                // line 78
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_menu", array()), "html", null, true));
                echo "
          ";
            }
            // line 80
            echo "        </div>
        <!-- End: Top menu -->

      </div>
    </div>
  </div>
";
        }
        // line 87
        echo "

<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->
        <div class=\"navbar-header col-md-3\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          ";
        // line 102
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 103
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
          ";
        }
        // line 105
        echo "        </div>
        <!-- End: Header -->

        <!-- Start: Main menu -->
        <div class=\"col-md-9\">
          ";
        // line 110
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 111
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
          ";
        }
        // line 113
        echo "        </div>

        </div>
      </div>
    </nav>
</header>


<!-- Start: Slider -->
  ";
        // line 122
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && (isset($context["show_slideshow"]) ? $context["show_slideshow"] : null))) {
            // line 123
            echo "    <div class=\"flexslider wow bounceInUp\">
      <ul class=\"slides\">
        ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["slider_content"]) ? $context["slider_content"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 126
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "      </ul>
    </div>
  ";
        }
        // line 131
        echo "<!-- End: Slider -->


<!-- Start: Home page message -->
  ";
        // line 135
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "homepagemessage", array())))) {
            // line 136
            echo "    <div class=\"parallax-widget zero\" id=\"about\">
      <div class=\"container\">
        <div class=\"parallax-region wow bounceInDown\">

          <!-- Start: Home page message -->
          ";
            // line 141
            if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "homepagemessage", array()))) {
                // line 142
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "homepagemessage", array()), "html", null, true));
                echo "
          ";
            }
            // line 144
            echo "          <!--End: Home page message -->

          ";
            // line 146
            if (((isset($context["is_front"]) ? $context["is_front"] : null) && (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array())))) {
                // line 147
                echo "            <div class=\"row topwidget\">

              <!-- Start: Top wid
              get first -->          
              ";
                // line 151
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array())) {
                    // line 152
                    echo "                <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["topwidget_class"]) ? $context["topwidget_class"] : null), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array()), "html", null, true));
                    echo "</div>
              ";
                }
                // line 153
                echo "          
              <!-- End: Top widget first --> 

              <!-- Start: Top widget second -->          
              ";
                // line 157
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array())) {
                    // line 158
                    echo "                <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["topwidget_class"]) ? $context["topwidget_class"] : null), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array()), "html", null, true));
                    echo "</div>
              ";
                }
                // line 159
                echo "          
              <!-- End: Top widget second --> 
              
              <!-- Start: Top widget third -->         
              ";
                // line 163
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array())) {
                    // line 164
                    echo "                <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["topwidget_third_class"]) ? $context["topwidget_third_class"] : null), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array()), "html", null, true));
                    echo "</div>
              ";
                }
                // line 165
                echo "          
              <!-- End: Top widget third -->

            </div>
          ";
            }
            // line 170
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 175
        echo "<!--End: Home page message -->


<!-- Start: xxx -->
<div class=\"parallax-widget one\">
  <div class=\"parallax-region- wow bounceInDown\">
    
    ";
        // line 182
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 183
            echo "      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 186
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    ";
        }
        // line 191
        echo "
    ";
        // line 192
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()) &&  !(isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 193
            echo "      <div id=\"page-title\">
        <div id=\"page-title-inner\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                ";
            // line 198
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 205
        echo "    ";
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 206
            echo "      <div class=\"\">
    ";
        } else {
            // line 208
            echo "      <div class=\"container\">
    ";
        }
        // line 210
        echo "        <div class=\"parallax-region\">

          ";
        // line 212
        if ( !(isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 213
            echo "            <div class=\"row\">
              <div class=\"col-md-12\">";
            // line 214
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
            echo "</div>
            </div>
          ";
        }
        // line 217
        echo "
          <div class=\"row layout\">

            ";
        // line 220
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 221
            echo "              <div class=\"sidebar\">
                <div class=";
            // line 222
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["sidebarfirst"]) ? $context["sidebarfirst"] : null), "html", null, true));
            echo "> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo " </div>
              </div>
            ";
        }
        // line 225
        echo "
            ";
        // line 226
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 227
            echo "              <div class=\"content_layout row\">
                <div class=";
            // line 228
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["contentlayout"]) ? $context["contentlayout"] : null), "html", null, true));
            echo "> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo " </div>
              </div>
            ";
        }
        // line 231
        echo "
            ";
        // line 232
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 233
            echo "              <div class=\"sidebar\">
                <div class=";
            // line 234
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["sidebarsecond"]) ? $context["sidebarsecond"] : null), "html", null, true));
            echo "> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo " </div>
              </div>
            ";
        }
        // line 237
        echo "
          </div>
        </div>
      </div>
  </div>
</div>
<!-- End: xxx -->


<!-- Start: Home page message -->
  ";
        // line 247
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "services", array()))) {
            // line 248
            echo "    <div class=\"parallax-widget two\" id=\"services\">
      <div class=\"container\">
        <div class=\"parallax-region wow bounceInDown\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 253
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "services", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 260
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
  ";
        // line 264
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "clients", array()))) {
            // line 265
            echo "    <div class=\"parallax-widget three\" id=\"clients\">
      <div class=\"container\">
        <div class=\"parallax-region wow bounceInDown\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 270
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "clients", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 277
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
";
        // line 281
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array())))) {
            // line 282
            echo "  <div class=\"parallax-widget four\" id=\"products\">    
    <div class=\"container\">
      <div class=\"parallax-region wow bounceInDown\">
        <div class=\"row\">

          <!-- Start: Bottom First -->          
          ";
            // line 288
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array())) {
                // line 289
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
              ";
                // line 290
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 292
            echo "          
          <!-- End: Bottom First -->

          <!-- Start: Bottom Second -->
          ";
            // line 296
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array())) {
                // line 297
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
              ";
                // line 298
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 300
            echo "          
          <!-- End: Bottom Second -->

          <!-- Start: Bottom third -->          
          ";
            // line 304
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array())) {
                // line 305
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
              ";
                // line 306
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 308
            echo "          
          <!-- End: Bottom Third -->

          <!-- Start: Bottom Forth -->
          ";
            // line 312
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array())) {
                // line 313
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
              ";
                // line 314
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 317
            echo "          <!-- End: Bottom Forth -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 324
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
";
        // line 328
        if ((((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "google_map", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "address", array()))) {
            // line 329
            echo "  <div class=\"parallax-widget five map-and-address\" id=\"contact\">
    <div class=\"container\">
      <div class=\"parallax-region wow bounceInUp\">
        <div class=\"row\">
          <div class=\"col-md-6\">
            <!-- Start: Google map -->
            ";
            // line 335
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "google_map", array())) {
                // line 336
                echo "              <div class=\"google_map\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "google_map", array()), "html", null, true));
                echo "</div>
            ";
            }
            // line 338
            echo "            <!-- End: Google map -->
          </div>
          <div class=\"col-md-6\">
            <!-- Start: Address -->
            ";
            // line 342
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "address", array())) {
                // line 343
                echo "              <div class=\"address-wrap\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "address", array()), "html", null, true));
                echo "</div>
            ";
            }
            // line 345
            echo "          <!--End: Address -->
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 352
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
";
        // line 356
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())))) {
            // line 357
            echo "  <div class=\"parallax-widget six\" id=\"footer\">
    <div class=\"container\">
      <div class=\"parallax-region wow bounceInUp\">  
        <div class=\"row\">

          <!-- Start: Footer First -->
          ";
            // line 363
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 364
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["footer_first_class"]) ? $context["footer_first_class"] : null), "html", null, true));
                echo ">
              ";
                // line 365
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 368
            echo "          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          ";
            // line 371
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 372
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
                echo ">
              ";
                // line 373
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 376
            echo "          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          ";
            // line 379
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 380
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
                echo ">
              ";
                // line 381
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 384
            echo "          <!-- End: Footer Third -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 391
        echo "<!--End: Home page message -->


<!-- Start: Footer Menu -->
";
        // line 395
        if ((isset($context["show_social_icon"]) ? $context["show_social_icon"] : null)) {
            // line 396
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Social media links -->
        <div class=\"col-sm-12\">
          <div class=\"social-media\">
            ";
            // line 403
            if ((isset($context["facebook_url"]) ? $context["facebook_url"] : null)) {
                // line 404
                echo "              <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["facebook_url"]) ? $context["facebook_url"] : null), "html", null, true));
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            ";
            }
            // line 406
            echo "            ";
            if ((isset($context["google_plus_url"]) ? $context["google_plus_url"] : null)) {
                // line 407
                echo "              <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["google_plus_url"]) ? $context["google_plus_url"] : null), "html", null, true));
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            ";
            }
            // line 409
            echo "            ";
            if ((isset($context["twitter_url"]) ? $context["twitter_url"] : null)) {
                // line 410
                echo "              <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["twitter_url"]) ? $context["twitter_url"] : null), "html", null, true));
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            ";
            }
            // line 412
            echo "            ";
            if ((isset($context["linkedin_url"]) ? $context["linkedin_url"] : null)) {
                // line 413
                echo "              <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["linkedin_url"]) ? $context["linkedin_url"] : null), "html", null, true));
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
            }
            // line 415
            echo "            ";
            if ((isset($context["pinterest_url"]) ? $context["pinterest_url"] : null)) {
                // line 416
                echo "              <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["pinterest_url"]) ? $context["pinterest_url"] : null), "html", null, true));
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
            ";
            }
            // line 418
            echo "            ";
            if ((isset($context["rss_url"]) ? $context["rss_url"] : null)) {
                // line 419
                echo "              <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["rss_url"]) ? $context["rss_url"] : null), "html", null, true));
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
            }
            // line 421
            echo "          </div>
        </div>
        <!-- End: Social media links -->

      </div>
    </div>
  </div>
";
        }
        // line 429
        echo "<!-- End: Footer Menu -->


<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Copyright -->
      <div class=\"col-sm-6\">
        <p>Copyright © ";
        // line 439
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo ". All rights reserved.</p>
      </div>
      <!-- End: Copyright -->

      <!-- Start: Credit link -->
      ";
        // line 444
        if ((isset($context["show_credit_link"]) ? $context["show_credit_link"] : null)) {
            // line 445
            echo "        <div class=\"col-sm-6\">
          <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
        }
        // line 449
        echo "      <!-- End: Credit link -->
      
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/drupal8_parallax_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  757 => 449,  751 => 445,  749 => 444,  741 => 439,  729 => 429,  719 => 421,  713 => 419,  710 => 418,  704 => 416,  701 => 415,  695 => 413,  692 => 412,  686 => 410,  683 => 409,  677 => 407,  674 => 406,  668 => 404,  666 => 403,  657 => 396,  655 => 395,  649 => 391,  640 => 384,  634 => 381,  629 => 380,  627 => 379,  622 => 376,  616 => 373,  611 => 372,  609 => 371,  604 => 368,  598 => 365,  593 => 364,  591 => 363,  583 => 357,  581 => 356,  575 => 352,  566 => 345,  560 => 343,  558 => 342,  552 => 338,  546 => 336,  544 => 335,  536 => 329,  534 => 328,  528 => 324,  519 => 317,  513 => 314,  508 => 313,  506 => 312,  500 => 308,  494 => 306,  489 => 305,  487 => 304,  481 => 300,  475 => 298,  470 => 297,  468 => 296,  462 => 292,  456 => 290,  451 => 289,  449 => 288,  441 => 282,  439 => 281,  433 => 277,  423 => 270,  416 => 265,  414 => 264,  408 => 260,  398 => 253,  391 => 248,  389 => 247,  377 => 237,  369 => 234,  366 => 233,  364 => 232,  361 => 231,  353 => 228,  350 => 227,  348 => 226,  345 => 225,  337 => 222,  334 => 221,  332 => 220,  327 => 217,  321 => 214,  318 => 213,  316 => 212,  312 => 210,  308 => 208,  304 => 206,  301 => 205,  291 => 198,  284 => 193,  282 => 192,  279 => 191,  271 => 186,  266 => 183,  264 => 182,  255 => 175,  248 => 170,  241 => 165,  233 => 164,  231 => 163,  225 => 159,  217 => 158,  215 => 157,  209 => 153,  201 => 152,  199 => 151,  193 => 147,  191 => 146,  187 => 144,  181 => 142,  179 => 141,  172 => 136,  170 => 135,  164 => 131,  159 => 128,  150 => 126,  146 => 125,  142 => 123,  140 => 122,  129 => 113,  123 => 111,  121 => 110,  114 => 105,  108 => 103,  106 => 102,  89 => 87,  80 => 80,  74 => 78,  72 => 77,  65 => 72,  59 => 70,  57 => 69,  49 => 63,  47 => 62,  43 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/drupal8_parallax_theme/templates/layout/page.html.twig", "/var/www/html/byc/docroot/themes/drupal8_parallax_theme/templates/layout/page.html.twig");
    }
}
