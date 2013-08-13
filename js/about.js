$(document).on('ready', function(){
	cargar('tmp1.html');
	// $('section #content-about').perfectScrollbar();
});
function cargar(tmp){
	$('section #content-about').load('data/'+tmp);
}