function extendSidebar(id_one, id_two) {
	var main = document.getElementById(id_one).offsetHeight;
	var sidebar = document.getElementById(id_two).offsetHeight;
	var page_height = 0;
	if(main > sidebar) {
		page_height = main;
	}
	else if(main = sidebar) {
		page_height = main;
	}
	else {
		page_height = sidebar;
	}
	
	extend_sidebar.style.height = page_height + "px";
	}