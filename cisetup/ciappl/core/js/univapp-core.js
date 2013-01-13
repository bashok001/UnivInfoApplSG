$(document).ready(function () {
	$("#tabs").tabs();
	$( "#accordion" ).accordion();
	
	$('#news-container').vTicker({
		speed : 500,
		pause : 3000,
		animation : 'fade',
		mousePause : true,
		height: 0,
		showItems : 10,
		direction: 'up'
	});
	
	$('#inputUnivName').keyup(function () { 
		addTableRow($('#searchResults'));
	});
	
	$("#open").click(function () {
		$("div#panel").slideDown("slow");
	});
	$("#close").click(function () {
		$("div#panel").slideUp("slow");
	});
	$("#toggle a").click(function () {
		$("#toggle a").toggle();
	});
});

jQuery(document).bind('keydown', 'esc', function (e) {
	if ($("#open").attr("style") == 'display: none;') {
		$("div#panel").slideUp("slow");
		$("#toggle a").toggle();
	}
});

function addTableRow(jQtable){
    jQtable.each(function(){
        var $table = $(this);
        // Number of td's in the last table row
        var n = $('tr:last td', this).length;
        var tds = '<tr class="univRow">';
        //for(var i = 0; i < n; i++){
        //    tds += '<td>&nbsp;</td>';
        //}
		tds += '<td>New University</td>';
        tds += '</tr>';
        if($('tbody', this).length > 0){
            $('tbody', this).append(tds);
        }else {
            $(this).append(tds);
        }
    });
}
