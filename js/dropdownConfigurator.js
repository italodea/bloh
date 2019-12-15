document.addEventListener('DOMContentLoaded', function() {
  	var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, {
	    alignment: 'left',
	    autoTrigger: true,
	    constrainWidth: false,
	    container: null,
	    coverTrigger: false,
	    closeOnClick: true,
	    hover : false,
	    inDuration: 250,
	    outDuration: 300,
	    onOpenStart: null,
	    onOpenEnd: null,
	    onCloseStart: null,
	    onCloseEnd: null
	});
});