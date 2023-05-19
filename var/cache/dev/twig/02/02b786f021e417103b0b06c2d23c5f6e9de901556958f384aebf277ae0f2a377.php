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

/* @EasyjetSfsu/Files/new.html.twig */
class __TwigTemplate_ab00fe39e792d3b0d5f1fb03f56fad732d01bf5a9f78c92e27f5858d35544574 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'specificJs' => [$this, 'block_specificJs'],
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@EasyjetSfsu/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSfsu/Files/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSfsu/Files/new.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetSfsu/Files/new.html.twig", 2)->unwrap();
        // line 4
        $context["viewUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sfsu_files_multiple_show");
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetSfsu/Base/structure.html.twig", "@EasyjetSfsu/Files/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Change the max file size upload";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_specificJs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificJs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificJs"));

        $this->displayParentBlock("specificJs", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
    var browserdetected = null;
    var clsMutationObserver = window.MutationObserver || window.WebKitMutationObserver || false;
   
   
   // Get IE or Edge browser version
    var version = detectIE();

    /**
     * detect IE
     * returns version of IE or false, if browser is not Internet Explorer
     */
    function detectIE() {
      var ua = window.navigator.userAgent;
      // Test values; Uncomment to check result …

      // IE 10
      // ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)';

      // IE 11
      // ua = 'Mozilla/5.0 (Windows NT 6.3; Trident/7.0; rv:11.0) like Gecko';

      // Edge 12 (Spartan)
      // ua = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36 Edge/12.0';

      // Edge 13
      // ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586';

      var msie = ua.indexOf('MSIE ');
      if (msie > 0) {
        // IE 10 or older => return version number
        return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
      }

      var trident = ua.indexOf('Trident/');
      if (trident > 0) {
        // IE 11 => return version number
        var rv = ua.indexOf('rv:');
        return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
      }

      var edge = ua.indexOf('Edge/');
      if (edge > 0) {
        // Edge (IE 12+) => return version number
        return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
      }

      // other browser
      return false;
    }
    

    \$(function() {
        var totalSize = 0;
        window.filesList = new Array();
        var isOldIe = version !== false && version < 10;
        if (isOldIe) {
            \$(\"#ie-alert\").slideDown();
        }

        \$('#fileupload').fileupload({
            add: function(e, data) {
                if(data.originalFiles.length>5){
                    alert(\"Max 5 files are allowed\");
                    return false;
                }
                \$.each( data.originalFiles, function( key, value ) {
                   \$.each(value, function (index, value) {
                        if(index ==='size') {
                            totalSize += value;
                        }
                    });
                });
                //totalSize = 5368709122;
          
                if(totalSize > ";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["maxUploadSize"]) || array_key_exists("maxUploadSize", $context) ? $context["maxUploadSize"] : (function () { throw new RuntimeError('Variable "maxUploadSize" does not exist.', 84, $this->source); })()), "html", null, true);
        echo ") {
                    bootbox.alert(\"Your total file size is too big\");return false ;
                } else {
                    \$(\".fileinput-button\").addClass(\"disabled\");
                    if (isOldIe) {
                        \$(\"#ie-progress\").slideDown();
                    }
                    data.submit();
                }
            },
            // Uncomment the following to send cross-domain cookies:
            //xhrFields: {withCredentials: true},
            url: '";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sfsu_files_send");
        echo "',
            autoUpload: true
        }).bind('fileuploaddone', function (e, data) {
            if (data.jqXHR.responseJSON) {
                if (data.jqXHR.responseJSON['sfsu_file_upload_form'][0].error) {
                    bootbox.alert(data.jqXHR.responseJSON['sfsu_file_upload_form'][0].error);
                } else {
                    var fileId = data.jqXHR.responseJSON['sfsu_file_upload_form'][0].fileId;
                    filesList.push(fileId);
                    var activeUploads = \$('#fileupload').fileupload('active');
                    if(activeUploads == 1) {
                        var htmlParameters = \"\";
                        for (var i = 0; i < filesList.length; i++) {
                            htmlParameters += \"&file[]=\" + filesList[i];
                        }
                        window.location.href = '";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["viewUrl"]) || array_key_exists("viewUrl", $context) ? $context["viewUrl"] : (function () { throw new RuntimeError('Variable "viewUrl" does not exist.', 111, $this->source); })()), "html", null, true);
        echo "?' + htmlParameters.substr(1);
                    }

                }
                
            } else {
                bootbox.alert(\"An error occured while parsing your file. Please refresh the window and try again\");
            }
        }).bind('fileuploadfail', function (e, data) {
            bootbox.alert(\"An error occured while parsing your file. Please refresh the window and try again\");
        });
    });

    \$(document).bind('dragover', function (e) {
        var dropZone = \$('#upload-zone'),
            timeout = window.dropZoneTimeout;
        if (!timeout) {
            dropZone.addClass('in');
        } else {
            clearTimeout(timeout);
        }
        var found = false,
            node = e.target;
        do {
            if (node === dropZone[0]) {
                found = true;
                break;
            }
            node = node.parentNode;
        } while (node != null);
        if (found) {
            dropZone.addClass('hover');
        } else {
            dropZone.removeClass('hover');
        }
        window.dropZoneTimeout = setTimeout(function () {
            window.dropZoneTimeout = null;
            dropZone.removeClass('in hover');
        }, 100);
    });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 157
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 158
        echo "        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Upload your file</h1>         
    </div>
    
    
    ";
        // line 165
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["sfsuForm"]) || array_key_exists("sfsuForm", $context) ? $context["sfsuForm"] : (function () { throw new RuntimeError('Variable "sfsuForm" does not exist.', 165, $this->source); })()), 'form_start');
        echo "

        <div class=\"row\" id=\"ie-alert\" style=\"display: none;\">
            <div class=\"col-xs-12\">
                <div class=\"alert alert-info\">
                    <strong>Important ! </strong>You are using an old version of Internet explorer. Note that you won't have any progress bar and file size check before your upload. Please use Internet Explorer version 10 or another browser which works with HTML5.
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div id=\"upload-zone\" class=\"well block-upload\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <i class=\"icon-cloud-upload very-big-icon\"></i>
                            <p>
                                Welcome to the easyJet <strong>OrangeFile</strong>. Use this to safely and securely transfer
                                data to your colleagues within easyJet, or to external 3 rd parties.
                            </p>
                            <p>
                                Once you’ve uploaded your file, you’ll need to add the email addresses of the
                                recipients. The recipient will then receive an email with a link to the file which they
                                can download. First time 3 rd party users will receive an additional email to register
                                their details before they can download.
                            </p>
                            <p>
                                The file is held in the <strong>OrangeFile</strong> for 7 days, after which it’s deleted.
                                GDPR compliant and ideally used for sending large files containing personal or
                                sensitive data, <strong>OrangeFile</strong> helps to reduce your data footprint by avoiding having
                                emails with confidential attachments in your sent items or inbox.
                            </p>
                            <p>
                                If you have an issue please email <a href=\"mailto:easyjetITservicedesk@easyjet.com\">easyjetITservicedesk@easyjet.com</a>, if you have questions related to the functionalities, you can email <a href=\"mailto:ezs-it@easyjet.com\">ezs-it@easyjet.com</a>
                            </p>
                            <div class=\"message\">
                                
                                <strong>Drag and drop your file (maximum file size : ";
        // line 201
        echo twig_escape_filter($this->env, (isset($context["maxHumanFileSize"]) || array_key_exists("maxHumanFileSize", $context) ? $context["maxHumanFileSize"] : (function () { throw new RuntimeError('Variable "maxHumanFileSize" does not exist.', 201, $this->source); })()), "html", null, true);
        echo "B)</strong><br>
                                or<br>
                                <span class=\"btn btn-primary fileinput-button\">
                                    <span>Select your file(s)</span>
";
        // line 206
        echo "                                      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["sfsuForm"]) || array_key_exists("sfsuForm", $context) ? $context["sfsuForm"] : (function () { throw new RuntimeError('Variable "sfsuForm" does not exist.', 206, $this->source); })()), "uploadFile", [], "any", false, false, false, 206), 'widget', ["attr" => ["accept" => (isset($context["acceptedExtensions"]) || array_key_exists("acceptedExtensions", $context) ? $context["acceptedExtensions"] : (function () { throw new RuntimeError('Variable "acceptedExtensions" does not exist.', 206, $this->source); })()), "multiple" => "multiple"]]);
        echo "
                                </span><br><br>
                                <div id=\"ie-progress\" style=\"display: none;\"><br>Progress bar not displayed in IE < 10 (transfer in progress ...)</div>
                            </div>
                        </div>
                    </div>


                    <div class=\"row\">
                        <div class=\"col-xs-12 fileupload-progress fade\">
                        <!-- The global progress bar -->
                        <div class=\"progress progress-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                            <div class=\"progress-bar progress-bar-success\" style=\"width:0%;\"></div>
                        </div>
                        <!-- The extended global progress state -->
                        <div class=\"progress-extended\">&nbsp;</div>
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>

      ";
        // line 229
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["sfsuForm"]) || array_key_exists("sfsuForm", $context) ? $context["sfsuForm"] : (function () { throw new RuntimeError('Variable "sfsuForm" does not exist.', 229, $this->source); })()), 'form_end');
        echo "
        
</div>
   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetSfsu/Files/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 229,  323 => 206,  316 => 201,  277 => 165,  268 => 158,  258 => 157,  205 => 111,  187 => 96,  172 => 84,  84 => 8,  65 => 6,  54 => 1,  52 => 4,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@EasyjetSfsu/Base/structure.html.twig\" %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% set viewUrl = url('sfsu_files_multiple_show') %}

{% block title %}Change the max file size upload{% endblock %}

{% block specificJs %}{{ parent() }}
    <script type=\"text/javascript\">
    var browserdetected = null;
    var clsMutationObserver = window.MutationObserver || window.WebKitMutationObserver || false;
   
   
   // Get IE or Edge browser version
    var version = detectIE();

    /**
     * detect IE
     * returns version of IE or false, if browser is not Internet Explorer
     */
    function detectIE() {
      var ua = window.navigator.userAgent;
      // Test values; Uncomment to check result …

      // IE 10
      // ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)';

      // IE 11
      // ua = 'Mozilla/5.0 (Windows NT 6.3; Trident/7.0; rv:11.0) like Gecko';

      // Edge 12 (Spartan)
      // ua = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36 Edge/12.0';

      // Edge 13
      // ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586';

      var msie = ua.indexOf('MSIE ');
      if (msie > 0) {
        // IE 10 or older => return version number
        return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
      }

      var trident = ua.indexOf('Trident/');
      if (trident > 0) {
        // IE 11 => return version number
        var rv = ua.indexOf('rv:');
        return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
      }

      var edge = ua.indexOf('Edge/');
      if (edge > 0) {
        // Edge (IE 12+) => return version number
        return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
      }

      // other browser
      return false;
    }
    

    \$(function() {
        var totalSize = 0;
        window.filesList = new Array();
        var isOldIe = version !== false && version < 10;
        if (isOldIe) {
            \$(\"#ie-alert\").slideDown();
        }

        \$('#fileupload').fileupload({
            add: function(e, data) {
                if(data.originalFiles.length>5){
                    alert(\"Max 5 files are allowed\");
                    return false;
                }
                \$.each( data.originalFiles, function( key, value ) {
                   \$.each(value, function (index, value) {
                        if(index ==='size') {
                            totalSize += value;
                        }
                    });
                });
                //totalSize = 5368709122;
          
                if(totalSize > {{ maxUploadSize }}) {
                    bootbox.alert(\"Your total file size is too big\");return false ;
                } else {
                    \$(\".fileinput-button\").addClass(\"disabled\");
                    if (isOldIe) {
                        \$(\"#ie-progress\").slideDown();
                    }
                    data.submit();
                }
            },
            // Uncomment the following to send cross-domain cookies:
            //xhrFields: {withCredentials: true},
            url: '{{ url(\"sfsu_files_send\") }}',
            autoUpload: true
        }).bind('fileuploaddone', function (e, data) {
            if (data.jqXHR.responseJSON) {
                if (data.jqXHR.responseJSON['sfsu_file_upload_form'][0].error) {
                    bootbox.alert(data.jqXHR.responseJSON['sfsu_file_upload_form'][0].error);
                } else {
                    var fileId = data.jqXHR.responseJSON['sfsu_file_upload_form'][0].fileId;
                    filesList.push(fileId);
                    var activeUploads = \$('#fileupload').fileupload('active');
                    if(activeUploads == 1) {
                        var htmlParameters = \"\";
                        for (var i = 0; i < filesList.length; i++) {
                            htmlParameters += \"&file[]=\" + filesList[i];
                        }
                        window.location.href = '{{ viewUrl }}?' + htmlParameters.substr(1);
                    }

                }
                
            } else {
                bootbox.alert(\"An error occured while parsing your file. Please refresh the window and try again\");
            }
        }).bind('fileuploadfail', function (e, data) {
            bootbox.alert(\"An error occured while parsing your file. Please refresh the window and try again\");
        });
    });

    \$(document).bind('dragover', function (e) {
        var dropZone = \$('#upload-zone'),
            timeout = window.dropZoneTimeout;
        if (!timeout) {
            dropZone.addClass('in');
        } else {
            clearTimeout(timeout);
        }
        var found = false,
            node = e.target;
        do {
            if (node === dropZone[0]) {
                found = true;
                break;
            }
            node = node.parentNode;
        } while (node != null);
        if (found) {
            dropZone.addClass('hover');
        } else {
            dropZone.removeClass('hover');
        }
        window.dropZoneTimeout = setTimeout(function () {
            window.dropZoneTimeout = null;
            dropZone.removeClass('in hover');
        }, 100);
    });
    </script>

{% endblock specificJs %}



{% block container %}
        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Upload your file</h1>         
    </div>
    
    
    {{ form_start(sfsuForm) }}

        <div class=\"row\" id=\"ie-alert\" style=\"display: none;\">
            <div class=\"col-xs-12\">
                <div class=\"alert alert-info\">
                    <strong>Important ! </strong>You are using an old version of Internet explorer. Note that you won't have any progress bar and file size check before your upload. Please use Internet Explorer version 10 or another browser which works with HTML5.
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div id=\"upload-zone\" class=\"well block-upload\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <i class=\"icon-cloud-upload very-big-icon\"></i>
                            <p>
                                Welcome to the easyJet <strong>OrangeFile</strong>. Use this to safely and securely transfer
                                data to your colleagues within easyJet, or to external 3 rd parties.
                            </p>
                            <p>
                                Once you’ve uploaded your file, you’ll need to add the email addresses of the
                                recipients. The recipient will then receive an email with a link to the file which they
                                can download. First time 3 rd party users will receive an additional email to register
                                their details before they can download.
                            </p>
                            <p>
                                The file is held in the <strong>OrangeFile</strong> for 7 days, after which it’s deleted.
                                GDPR compliant and ideally used for sending large files containing personal or
                                sensitive data, <strong>OrangeFile</strong> helps to reduce your data footprint by avoiding having
                                emails with confidential attachments in your sent items or inbox.
                            </p>
                            <p>
                                If you have an issue please email <a href=\"mailto:easyjetITservicedesk@easyjet.com\">easyjetITservicedesk@easyjet.com</a>, if you have questions related to the functionalities, you can email <a href=\"mailto:ezs-it@easyjet.com\">ezs-it@easyjet.com</a>
                            </p>
                            <div class=\"message\">
                                
                                <strong>Drag and drop your file (maximum file size : {{ maxHumanFileSize }}B)</strong><br>
                                or<br>
                                <span class=\"btn btn-primary fileinput-button\">
                                    <span>Select your file(s)</span>
{#                                    <input type=\"file\" name=\"upload-file\">#}
                                      {{ form_widget(sfsuForm.uploadFile, {\"attr\":{ \"accept\" : acceptedExtensions , \"multiple\" : \"multiple\"}}) }}
                                </span><br><br>
                                <div id=\"ie-progress\" style=\"display: none;\"><br>Progress bar not displayed in IE < 10 (transfer in progress ...)</div>
                            </div>
                        </div>
                    </div>


                    <div class=\"row\">
                        <div class=\"col-xs-12 fileupload-progress fade\">
                        <!-- The global progress bar -->
                        <div class=\"progress progress-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                            <div class=\"progress-bar progress-bar-success\" style=\"width:0%;\"></div>
                        </div>
                        <!-- The extended global progress state -->
                        <div class=\"progress-extended\">&nbsp;</div>
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>

      {{ form_end(sfsuForm) }}
        
</div>
   
{% endblock container %}", "@EasyjetSfsu/Files/new.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\SfsuBundle\\Resources\\views\\Files\\new.html.twig");
    }
}
