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

/* @EasyjetSwissinsideCore/Default/dashboardFinal.html.twig */
class __TwigTemplate_2e17f49dd1c174cb41a3634ce2b7a9a1d9a9aa3054d39ec1832b9eb10a58c5cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSwissinsideCore/Default/dashboardFinal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSwissinsideCore/Default/dashboardFinal.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-xs-12\">
        <div class=\"widget-box\">
            <div class=\"widget-title\"><span class=\"icon\"><i class=\"icon-home\"></i></span><h5>Important information</h5></div>
            <div class=\"widget-content\">
                <p>Dear ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["myself"]) || array_key_exists("myself", $context) ? $context["myself"] : (function () { throw new RuntimeError('Variable "myself" does not exist.', 6, $this->source); })()), "html", null, true);
        echo ",</p>
                <p>
                    <b>Swiss switchover to new HR system and payslip processes</b>
                </p>
                <p>
                    easyJet has introduced a new global HR system called Workday,
                    which is now live.
                </p>

                <h4>Changes to uMan</h4>
                <p>Here's what you need to know and do:
                  <ul>
                    <li>
                      You’ll be able to make changes to your personal details in
                      Workday (like contact details and bank information)
                    <li>
                      All accidents will need to be reported through Workday
                    </li>
                    <li>
                      You can still update your Significant Others through Staff
                      Travel, but any changes will be through Workday
                    </li>
                    <li>
                      If you’re M&A, you’ll be able to use Workday to request
                      leave and enter sickness
                    </li>
                  </ul>
                </p>

                <h4>Changes to ePayslip</h4>
                <p>Workday will also replace ePayslip. Here's what you need to know:
                  <ul>
                    <li>the last ePayslip will be published at the end of August</li>
                    <li>ePayslip will still be available to view payslips before August 16</li>
                    <li>
                      From September 2016 your payslips and a new Payslip
                      Supplement (for crew) will be available in Workday
                    </li>
                  </ul>
                </p>

                <p>
                  To help and support you through these changes, we’ve built a
                  new HR Homepage with lots of ‘How Do I’ guides and information
                  on what’s changed and before you make any changes in Workday,
                  it’s a good idea to visit the pages for advice.
                </p>

                <p>
                  Visit
                  <a href=\"http://inside/teams/people/Pages/SwitzerlandHRHomepage.aspx\">
                    <strong>http://inside/teams/people/Pages/SwitzerlandHRHomepage.aspx</strong>
                  </a>
                </p>

                <p>
                  If you’re confident about using Workday or just want to have a
                  quick look around, you can access it by visiting
                  <a href=\"https://workday.easyjet.com\">
                    <strong>workday.easyjet.com</strong>
                  </a>
                </p>

                <p>
                  If you need any information or support, your HR team are here
                  to help. Just send a note to
                  <a href=\"mailto:swissHR@easyJet.com\">
                    <strong>swissHR@easyJet.com</strong>
                  </a>
                </p>

                <p>
                    Thanks for your attention,<br>
                    Yours, sincerely <br>
                    HR team
                </p>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetSwissinsideCore/Default/dashboardFinal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-xs-12\">
        <div class=\"widget-box\">
            <div class=\"widget-title\"><span class=\"icon\"><i class=\"icon-home\"></i></span><h5>Important information</h5></div>
            <div class=\"widget-content\">
                <p>Dear {{ myself }},</p>
                <p>
                    <b>Swiss switchover to new HR system and payslip processes</b>
                </p>
                <p>
                    easyJet has introduced a new global HR system called Workday,
                    which is now live.
                </p>

                <h4>Changes to uMan</h4>
                <p>Here's what you need to know and do:
                  <ul>
                    <li>
                      You’ll be able to make changes to your personal details in
                      Workday (like contact details and bank information)
                    <li>
                      All accidents will need to be reported through Workday
                    </li>
                    <li>
                      You can still update your Significant Others through Staff
                      Travel, but any changes will be through Workday
                    </li>
                    <li>
                      If you’re M&A, you’ll be able to use Workday to request
                      leave and enter sickness
                    </li>
                  </ul>
                </p>

                <h4>Changes to ePayslip</h4>
                <p>Workday will also replace ePayslip. Here's what you need to know:
                  <ul>
                    <li>the last ePayslip will be published at the end of August</li>
                    <li>ePayslip will still be available to view payslips before August 16</li>
                    <li>
                      From September 2016 your payslips and a new Payslip
                      Supplement (for crew) will be available in Workday
                    </li>
                  </ul>
                </p>

                <p>
                  To help and support you through these changes, we’ve built a
                  new HR Homepage with lots of ‘How Do I’ guides and information
                  on what’s changed and before you make any changes in Workday,
                  it’s a good idea to visit the pages for advice.
                </p>

                <p>
                  Visit
                  <a href=\"http://inside/teams/people/Pages/SwitzerlandHRHomepage.aspx\">
                    <strong>http://inside/teams/people/Pages/SwitzerlandHRHomepage.aspx</strong>
                  </a>
                </p>

                <p>
                  If you’re confident about using Workday or just want to have a
                  quick look around, you can access it by visiting
                  <a href=\"https://workday.easyjet.com\">
                    <strong>workday.easyjet.com</strong>
                  </a>
                </p>

                <p>
                  If you need any information or support, your HR team are here
                  to help. Just send a note to
                  <a href=\"mailto:swissHR@easyJet.com\">
                    <strong>swissHR@easyJet.com</strong>
                  </a>
                </p>

                <p>
                    Thanks for your attention,<br>
                    Yours, sincerely <br>
                    HR team
                </p>
            </div>
        </div>
    </div>
</div>
", "@EasyjetSwissinsideCore/Default/dashboardFinal.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\SwissinsideCoreBundle\\Resources\\views\\Default\\dashboardFinal.html.twig");
    }
}
