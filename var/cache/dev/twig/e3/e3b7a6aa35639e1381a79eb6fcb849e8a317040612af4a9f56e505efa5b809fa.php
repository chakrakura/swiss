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

/* @EasyjetHris/Report/userImport.html.twig */
class __TwigTemplate_4e1f3bf3d591409192f7b8ab041a6ffe3aa6fbb8645fb0adaf0e74b90a5935c9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/Report/userImport.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/Report/userImport.html.twig"));

        // line 1
        echo "<h2>Report of the import from worday to swissinside</h2>

<h3>Status</h3>
";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "

<h3>List of new employees created in swissinside</h3>

";
        // line 8
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reportData"]) || array_key_exists("reportData", $context) ? $context["reportData"] : (function () { throw new RuntimeError('Variable "reportData" does not exist.', 8, $this->source); })()), "new_users", [], "any", false, false, false, 8))) {
            // line 9
            echo "    <table class=\"table table-bordered table-striped table-hover data-table\" >
        <thead>
            <tr>
                <th>Station</th>
                <th>Employee ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Contract</th>
                <th>Engagement date</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["reportData"]) || array_key_exists("reportData", $context) ? $context["reportData"] : (function () { throw new RuntimeError('Variable "reportData" does not exist.', 21, $this->source); })()), "new_users", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 22
                echo "                <tr>
                    <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "station", [], "any", false, false, false, 23), "html", null, true);
                echo "</td>
                    <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "employeeId", [], "any", false, false, false, 24), "html", null, true);
                echo "</td>
                    <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
                    <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                    <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "contract", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                    <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "engagementDate", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        </tbody>

    </table>
";
        } else {
            // line 35
            echo "    <p>No new employee found</p>
";
        }
        // line 37
        echo "
<h3>List of updates</h3>

";
        // line 40
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reportData"]) || array_key_exists("reportData", $context) ? $context["reportData"] : (function () { throw new RuntimeError('Variable "reportData" does not exist.', 40, $this->source); })()), "update_users", [], "any", false, false, false, 40))) {
            // line 41
            echo "    <table class=\"table table-bordered table-striped table-hover data-table\" >
        <thead>
            <tr>
                <th colspan=\"2\">Station</th>
                <th>Employee ID</th>
                <th colspan=\"2\">First name</th>
                <th colspan=\"2\">Last name</th>
                <th colspan=\"2\">Contract</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th>Previous</th>
                <th>New</th>
                <th>Both</th>
                <th>Previous</th>
                <th>New</th>
                <th>Previous</th>
                <th>New</th>
                <th>Previous</th>
                <th>New</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["reportData"]) || array_key_exists("reportData", $context) ? $context["reportData"] : (function () { throw new RuntimeError('Variable "reportData" does not exist.', 65, $this->source); })()), "update_users", [], "any", false, false, false, 65));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 66
                echo "                <tr>
                    <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "old_station", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
                    <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "new_station", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
                    <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "employeeId", [], "any", false, false, false, 69), "html", null, true);
                echo "</td>
                    <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "old_firstname", [], "any", false, false, false, 70), "html", null, true);
                echo "</td>
                    <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "new_firstname", [], "any", false, false, false, 71), "html", null, true);
                echo "</td>
                    <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "old_lastname", [], "any", false, false, false, 72), "html", null, true);
                echo "</td>
                    <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "new_lastname", [], "any", false, false, false, 73), "html", null, true);
                echo "</td>
                    <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "old_contract", [], "any", false, false, false, 74), "html", null, true);
                echo "</td>
                    <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "new_contract", [], "any", false, false, false, 75), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "        </tbody>

    </table>
";
        } else {
            // line 82
            echo "    <p>No updates found</p>
";
        }
        // line 84
        echo "
<h3>List of new leavers created in swissinside</h3>

";
        // line 87
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reportData"]) || array_key_exists("reportData", $context) ? $context["reportData"] : (function () { throw new RuntimeError('Variable "reportData" does not exist.', 87, $this->source); })()), "new_leavers", [], "any", false, false, false, 87))) {
            // line 88
            echo "    <table class=\"table table-bordered table-striped table-hover data-table\" >
        <thead>
            <tr>
                <th>Station</th>
                <th>Employee ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Leave date</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["reportData"]) || array_key_exists("reportData", $context) ? $context["reportData"] : (function () { throw new RuntimeError('Variable "reportData" does not exist.', 99, $this->source); })()), "new_leavers", [], "any", false, false, false, 99));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 100
                echo "                <tr>
                    <td>";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "station", [], "any", false, false, false, 101), "html", null, true);
                echo "</td>
                    <td>";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "employeeId", [], "any", false, false, false, 102), "html", null, true);
                echo "</td>
                    <td>";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 103), "html", null, true);
                echo "</td>
                    <td>";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 104), "html", null, true);
                echo "</td>
                    <td>";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "leaveDate", [], "any", false, false, false, 105), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "        </tbody>
    </table>
";
        } else {
            // line 111
            echo "    <p>No new employee found</p>
";
        }
        // line 113
        echo "
<h3>List of movers who will be marked as new leavers in swissinside</h3>
";
        // line 115
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reportData"]) || array_key_exists("reportData", $context) ? $context["reportData"] : (function () { throw new RuntimeError('Variable "reportData" does not exist.', 115, $this->source); })()), "new_movers", [], "any", false, false, false, 115))) {
            // line 116
            echo "    <table class=\"table table-bordered table-striped table-hover data-table\" >
        <thead>
            <tr>
                <th>Station</th>
                <th>Employee ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Leave date</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["reportData"]) || array_key_exists("reportData", $context) ? $context["reportData"] : (function () { throw new RuntimeError('Variable "reportData" does not exist.', 127, $this->source); })()), "new_movers", [], "any", false, false, false, 127));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 128
                echo "                <tr>
                    <td>";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "station", [], "any", false, false, false, 129), "html", null, true);
                echo "</td>
                    <td>";
                // line 130
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "employeeId", [], "any", false, false, false, 130), "html", null, true);
                echo "</td>
                    <td>";
                // line 131
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 131), "html", null, true);
                echo "</td>
                    <td>";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 132), "html", null, true);
                echo "</td>
                    <td>";
                // line 133
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "leaveDate", [], "any", false, false, false, 133), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "        </tbody>
    </table>
";
        } else {
            // line 139
            echo "    <p>No new employee found</p>
";
        }
        // line 141
        echo "
<h3>List of employees to be checked</h3>

";
        // line 144
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reportData"]) || array_key_exists("reportData", $context) ? $context["reportData"] : (function () { throw new RuntimeError('Variable "reportData" does not exist.', 144, $this->source); })()), "user_to_be_checked", [], "any", false, false, false, 144))) {
            // line 145
            echo "    <table class=\"table table-bordered table-striped table-hover data-table\" >
        <thead>
            <tr>
                <th>Employee ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Employee exists in Swissinside</th>
                <th>Previous station</th>
                <th>New station</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["reportData"]) || array_key_exists("reportData", $context) ? $context["reportData"] : (function () { throw new RuntimeError('Variable "reportData" does not exist.', 157, $this->source); })()), "user_to_be_checked", [], "any", false, false, false, 157));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 158
                echo "                <tr>
                    <td>";
                // line 159
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "employeeId", [], "any", false, false, false, 159), "html", null, true);
                echo "</td>
                    <td>";
                // line 160
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 160), "html", null, true);
                echo "</td>
                    <td>";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 161), "html", null, true);
                echo "</td>
                    <td>";
                // line 162
                if (twig_get_attribute($this->env, $this->source, $context["user"], "userExist", [], "any", false, false, false, 162)) {
                    echo "<span class=\"badge badge-success\">Yes</span>";
                } else {
                    echo "<span class=\"badge badge-danger\">No</span>";
                }
                echo "</td>
                    <td>";
                // line 163
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "previousStation", [], "any", false, false, false, 163), "html", null, true);
                echo "</td>
                    <td>";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "newStation", [], "any", false, false, false, 164), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "        </tbody>

    </table>
";
        } else {
            // line 171
            echo "    <p>No new employee found</p>
";
        }
        // line 173
        echo "

<h3>Detailed report</h3>

<pre>
";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["logContent"]) || array_key_exists("logContent", $context) ? $context["logContent"] : (function () { throw new RuntimeError('Variable "logContent" does not exist.', 178, $this->source); })()), "html", null, true);
        echo "
</pre>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetHris/Report/userImport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 178,  400 => 173,  396 => 171,  390 => 167,  381 => 164,  377 => 163,  369 => 162,  365 => 161,  361 => 160,  357 => 159,  354 => 158,  350 => 157,  336 => 145,  334 => 144,  329 => 141,  325 => 139,  320 => 136,  311 => 133,  307 => 132,  303 => 131,  299 => 130,  295 => 129,  292 => 128,  288 => 127,  275 => 116,  273 => 115,  269 => 113,  265 => 111,  260 => 108,  251 => 105,  247 => 104,  243 => 103,  239 => 102,  235 => 101,  232 => 100,  228 => 99,  215 => 88,  213 => 87,  208 => 84,  204 => 82,  198 => 78,  189 => 75,  185 => 74,  181 => 73,  177 => 72,  173 => 71,  169 => 70,  165 => 69,  161 => 68,  157 => 67,  154 => 66,  150 => 65,  124 => 41,  122 => 40,  117 => 37,  113 => 35,  107 => 31,  98 => 28,  94 => 27,  90 => 26,  86 => 25,  82 => 24,  78 => 23,  75 => 22,  71 => 21,  57 => 9,  55 => 8,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>Report of the import from worday to swissinside</h2>

<h3>Status</h3>
{{ status }}

<h3>List of new employees created in swissinside</h3>

{% if reportData.new_users|length %}
    <table class=\"table table-bordered table-striped table-hover data-table\" >
        <thead>
            <tr>
                <th>Station</th>
                <th>Employee ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Contract</th>
                <th>Engagement date</th>
            </tr>
        </thead>
        <tbody>
            {% for user in reportData.new_users %}
                <tr>
                    <td>{{ user.station }}</td>
                    <td>{{ user.employeeId }}</td>
                    <td>{{ user.firstname }}</td>
                    <td>{{ user.lastname }}</td>
                    <td>{{ user.contract }}</td>
                    <td>{{ user.engagementDate }}</td>
                </tr>
            {% endfor %}
        </tbody>

    </table>
{% else %}
    <p>No new employee found</p>
{% endif %}

<h3>List of updates</h3>

{% if reportData.update_users|length %}
    <table class=\"table table-bordered table-striped table-hover data-table\" >
        <thead>
            <tr>
                <th colspan=\"2\">Station</th>
                <th>Employee ID</th>
                <th colspan=\"2\">First name</th>
                <th colspan=\"2\">Last name</th>
                <th colspan=\"2\">Contract</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th>Previous</th>
                <th>New</th>
                <th>Both</th>
                <th>Previous</th>
                <th>New</th>
                <th>Previous</th>
                <th>New</th>
                <th>Previous</th>
                <th>New</th>
            </tr>
        </thead>
        <tbody>
            {% for user in reportData.update_users %}
                <tr>
                    <td>{{ user.old_station }}</td>
                    <td>{{ user.new_station }}</td>
                    <td>{{ user.employeeId }}</td>
                    <td>{{ user.old_firstname }}</td>
                    <td>{{ user.new_firstname }}</td>
                    <td>{{ user.old_lastname }}</td>
                    <td>{{ user.new_lastname }}</td>
                    <td>{{ user.old_contract }}</td>
                    <td>{{ user.new_contract }}</td>
                </tr>
            {% endfor %}
        </tbody>

    </table>
{% else %}
    <p>No updates found</p>
{% endif %}

<h3>List of new leavers created in swissinside</h3>

{% if reportData.new_leavers|length %}
    <table class=\"table table-bordered table-striped table-hover data-table\" >
        <thead>
            <tr>
                <th>Station</th>
                <th>Employee ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Leave date</th>
            </tr>
        </thead>
        <tbody>
            {% for user in reportData.new_leavers %}
                <tr>
                    <td>{{ user.station }}</td>
                    <td>{{ user.employeeId }}</td>
                    <td>{{ user.firstname }}</td>
                    <td>{{ user.lastname }}</td>
                    <td>{{ user.leaveDate }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% else %}
    <p>No new employee found</p>
{% endif %}

<h3>List of movers who will be marked as new leavers in swissinside</h3>
{% if reportData.new_movers|length %}
    <table class=\"table table-bordered table-striped table-hover data-table\" >
        <thead>
            <tr>
                <th>Station</th>
                <th>Employee ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Leave date</th>
            </tr>
        </thead>
        <tbody>
            {% for user in reportData.new_movers %}
                <tr>
                    <td>{{ user.station }}</td>
                    <td>{{ user.employeeId }}</td>
                    <td>{{ user.firstname }}</td>
                    <td>{{ user.lastname }}</td>
                    <td>{{ user.leaveDate }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% else %}
    <p>No new employee found</p>
{% endif %}

<h3>List of employees to be checked</h3>

{% if reportData.user_to_be_checked|length %}
    <table class=\"table table-bordered table-striped table-hover data-table\" >
        <thead>
            <tr>
                <th>Employee ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Employee exists in Swissinside</th>
                <th>Previous station</th>
                <th>New station</th>
            </tr>
        </thead>
        <tbody>
            {% for user in reportData.user_to_be_checked %}
                <tr>
                    <td>{{ user.employeeId }}</td>
                    <td>{{ user.firstname }}</td>
                    <td>{{ user.lastname }}</td>
                    <td>{% if user.userExist %}<span class=\"badge badge-success\">Yes</span>{% else %}<span class=\"badge badge-danger\">No</span>{% endif %}</td>
                    <td>{{ user.previousStation }}</td>
                    <td>{{ user.newStation }}</td>
                </tr>
            {% endfor %}
        </tbody>

    </table>
{% else %}
    <p>No new employee found</p>
{% endif %}


<h3>Detailed report</h3>

<pre>
{{ logContent }}
</pre>
", "@EasyjetHris/Report/userImport.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\HrisBundle\\Resources\\views\\Report\\userImport.html.twig");
    }
}
