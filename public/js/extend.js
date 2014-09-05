function extendSidebar(id_one, id_two) {
	var main = document.getElementById(id_one).offsetHeight;
	var sidebar = document.getElementById(id_two).offsetHeight;
	var pageHeight = 0;
	if(main > sidebar) {
		pageHeight = main;
	}
	else if(main = sidebar) {
		pageHeight = main;
	}
	else {
		pageHeight = sidebar;
	}
	
	extend_sidebar.style.height = pageHeight + "px";
	}