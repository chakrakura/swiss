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

/* @EasyjetSwissinsideCore/Default/dashboardTransition.html.twig */
class __TwigTemplate_a20d91ac8d0e834d9b2f835499842693fa50824952ce18e20f6dad406c441133 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSwissinsideCore/Default/dashboardTransition.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSwissinsideCore/Default/dashboardTransition.html.twig"));

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
                    easyJet is introducing a new global HR system and Swiss
                    colleagues will be making the switch next month. On 9 August,
                    uMan will be replaced by Workday.
                </p>

                <h4>Changes to uMan</h4>
                <p>Here's what you need to know and do:
                  <ul>
                    <li>
                      uMan will be frozen from 28 July so you won’t be able to
                      make changes to your personal details in UMan from now on.
                    <li>
                      you won’t be able to add or remove dependants on Staff
                      Travel, but you can still change Significant Others
                    </li>
                    <li>
                      eLeave will be available for crew during the freeze period
                    </li>
                    <li>
                      eLeave will be unavailable for M&A from 6pm on 28 July
                    </li>
                    <li>from 9 August you’ll be able to add your dependants or
                    make changes to your personal details in Workday, and if
                    you’re M&A you’ll be able to use Workday to request leave</li>
                  </ul>
                </p>

                <h4>Changes to ePayslip</h4>
                <p>Workday will also replace ePayslip. Here's what you need to know:
                  <ul>
                    <li>the last ePayslip will be published at the end of August</li>
                    <li>ePayslip will still be available to view payslips before August 16</li>
                    <li>from September your payslips will be published in Workday</li>
                  </ul>
                </p>

                <p>
                  More information will follow in email communications. If you need
                  any information or support, your HR team are here to help.
                  Just send a note to swissHR@easyJet.com
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
        return "@EasyjetSwissinsideCore/Default/dashboardTransition.html.twig";
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
                    easyJet is introducing a new global HR system and Swiss
                    colleagues will be making the switch next month. On 9 August,
                    uMan will be replaced by Workday.
                </p>

                <h4>Changes to uMan</h4>
                <p>Here's what you need to know and do:
                  <ul>
                    <li>
                      uMan will be frozen from 28 July so you won’t be able to
                      make changes to your personal details in UMan from now on.
                    <li>
                      you won’t be able to add or remove dependants on Staff
                      Travel, but you can still change Significant Others
                    </li>
                    <li>
                      eLeave will be available for crew during the freeze period
                    </li>
                    <li>
                      eLeave will be unavailable for M&A from 6pm on 28 July
                    </li>
                    <li>from 9 August you’ll be able to add your dependants or
                    make changes to your personal details in Workday, and if
                    you’re M&A you’ll be able to use Workday to request leave</li>
                  </ul>
                </p>

                <h4>Changes to ePayslip</h4>
                <p>Workday will also replace ePayslip. Here's what you need to know:
                  <ul>
                    <li>the last ePayslip will be published at the end of August</li>
                    <li>ePayslip will still be available to view payslips before August 16</li>
                    <li>from September your payslips will be published in Workday</li>
                  </ul>
                </p>

                <p>
                  More information will follow in email communications. If you need
                  any information or support, your HR team are here to help.
                  Just send a note to swissHR@easyJet.com
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
", "@EasyjetSwissinsideCore/Default/dashboardTransition.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\SwissinsideCoreBundle\\Resources\\views\\Default\\dashboardTransition.html.twig");
    }
}
