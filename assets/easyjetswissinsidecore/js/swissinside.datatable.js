
$.fn.dataTableExt.oApi.fnReloadAjax = function ( oSettings, sNewSource ) {
 
  if ( typeof sNewSource != 'undefined' ) {
    oSettings.sAjaxSource = sNewSource;
  }
 
  this.fnClearTable( this );
  this.oApi._fnProcessingDisplay( oSettings, true );
 
  $.getJSON( oSettings.sAjaxSource, null, $.proxy(function(json) {
 
    for ( var i=0 ; i<json.aaData.length ; i++ ) {
    this.oApi._fnAddData( oSettings, json.aaData[i] );
    }
 
    oSettings.aiDisplay = oSettings.aiDisplayMaster.slice();
    this.fnDraw( this );
    this.oApi._fnProcessingDisplay( oSettings, false );
  }, this));
};

jQuery.extend( jQuery.fn.dataTableExt.oSort, {
    "date-uk-pre": function ( a ) {
        var ukDatea = a.split('/');
        return (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1;
    },
 
    "date-uk-asc": function ( a, b ) {
        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
    },
 
    "date-uk-desc": function ( a, b ) {
        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
    }
} );

jQuery.fn.dataTableExt.aTypes.unshift(
   function ( sData )
   {
       if (sData !== null && sData.toString().match(/\d{1,2}\/\d{1,2}\/\d{2,4}/))
       {
 
           return 'date-uk';
       }
       return null;
   }
);