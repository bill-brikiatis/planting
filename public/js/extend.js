function extendSidebar(idOne, idTwo) {
	var main = $('#' + idOne).height();
	var sidebar = $('#' + idTwo).height();
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