/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)

import './sfsu/css/jquery.fileupload.css'
import './sfsu/css/style.css'
import './sfsu/css/jquery.fileupload-ui.css'
import './sfsu/css/emails-multiple.css'



const $ = require('jquery'); global.$ = global.jQuery = $;

import 'blueimp-file-upload'

import 'blueimp-file-upload/js/vendor/jquery.ui.widget.js'
import 'blueimp-file-upload/js/jquery.iframe-transport.js'
import 'blueimp-file-upload/js/jquery.fileupload-ui.js'
import 'blueimp-file-upload/js/jquery.fileupload.js'
import 'blueimp-file-upload/js/jquery.fileupload-image.js'
import './sfsu/js/clipboard.js'
import './sfsu/js/emails-multiple.js'



// start the Stimulus application
import './bootstrap';




