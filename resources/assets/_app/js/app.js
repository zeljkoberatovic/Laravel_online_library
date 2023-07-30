
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
  
  const body = document.querySelector("body"),
      sidebarCollapse 	= body.querySelector("#sidebarCollapse"),
	  top_navbar 		= body.querySelector(".top-navbar"),
      sidebar 			= body.querySelector("#sidebar"),
      content 			= body.querySelector("#content"),
	  more_button 		= body.querySelector(".more-button"),
	  body_overlay 		= body.querySelector(".body-overlay");
	  
	  sidebarCollapse.addEventListener('click', function() {
		sidebar.classList.toggle("active");
		content.classList.toggle("active");
		//top_navbar.style.setProperty('width', '100%', 'important');
		
	  });
	  
	  more_button.addEventListener('click', function() {  
		sidebar.classList.toggle("show-nav");
		body_overlay.classList.toggle("show-nav");
	  
	  });
	  
	  body_overlay.addEventListener('click', function() {	
		sidebar.classList.toggle("show-nav");
		body_overlay.classList.toggle("show-nav");
	  
	  });