function isset(param) {
    if (typeof (param) !== "undefined" && param !== null && param !== '') {
        return param;
    } else {
        return false;
    }
    // window.hasOwnProperty("var"}`) === true
}

function preloader(time = false, show = false) {
	if(time == false) { time = 800; }
	
	if(document.querySelector(".preloader-container")) { 
		
		if(time == null) { return; }
		// Aktiviranje preloadera u slucaju mijenjanja dimenzija prozora
		else if(show == true) {
			 document.querySelector(".preloader-container").style.cssText = `
				display: block; 
				opacity: 1;
			`;
		} else {
			document.addEventListener('load', jusFadeOut(".preloader-container", time));
		}

	}
}

preloader();

function jusFadeOut(el = false, time = false) {
    let fadeTarget = document.querySelector(el);
    setTimeout(function () {
        let fadeEffect = setInterval(function () {
            if (!fadeTarget.style.opacity) {
                fadeTarget.style.opacity = 1;
            }
            if (fadeTarget.style.opacity > 0) {
                fadeTarget.style.opacity -= 0.1;
            } else {
                clearInterval(fadeEffect);
            }
        }, time / 10);
    }, time);

    setTimeout(function () {
        fadeTarget.style.display = "none";
    }, time + 600);
}



const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

const body = document.querySelector("body"),
    sidebarCollapse = body.querySelector("#sidebarCollapse"),
    top_navbar = body.querySelector(".top-navbar"),
    sidebar = body.querySelector("#sidebar"),
    content = body.querySelector("#content"),
    more_button = body.querySelector(".more-button"),
    body_overlay = body.querySelector(".body-overlay");

sidebarCollapse.addEventListener('click', function () {
    sidebar.classList.toggle("active");
    content.classList.toggle("active");
    top_navbar.classList.toggle("expanded");
    //top_navbar.style.setProperty('width', '100%', 'important');

});

more_button.addEventListener('click', function () {
    sidebar.classList.toggle("show-nav");
    body_overlay.classList.toggle("show-nav");

});

body_overlay.addEventListener('click', function () {
    sidebar.classList.toggle("show-nav");
    body_overlay.classList.toggle("show-nav");

});



function urlReplaceQueryParam(data = []) {
    let param = data.param;
    let value = data.value;

    var lst_temp = window.location.href.split('?');
    if (lst_temp.length > 1) {
        var lst_parts = lst_temp[1].split('&');
        let url_params = [];

        for (let i = 0; i < lst_parts.length; i++) {
            let parts = lst_parts[i].split('=');
            url_params[parts[0]] = parts[1];

        }
        let current_param = `${param}=${url_params[param]}`;
        let replace_param = `${param}=${value}`;
        // Kreiranje nove putanje
        let url = new URL(window.location.href.replace(current_param, replace_param));
        window.location.href = url;
    }


}

let btn_close = document.querySelectorAll('.btn-close');
let j_btn_reset = document.querySelectorAll('.j-btn-reset');
let j_btn_nav_link_reset = document.querySelectorAll('.j-reset-form-action .nav-link');

btn_close.forEach((btn) => {
    btn.addEventListener('click', function () {
        resetModalFormAction();
    });
});

j_btn_reset.forEach((btn) => {
    btn.addEventListener('click', function () {
        resetModalFormAction();
    });
});

j_btn_nav_link_reset.forEach((btn) => {
    btn.addEventListener('click', function () {
        resetModalFormAction();

        let value = btn.getAttribute('data-bs-target');
        value = value.replace('#nav-', '');
        urlReplaceQueryParam({
            'param': 'option',
            'value': value
        });


    });
});


function actBtn() {
    let act_btn_show    = document.querySelectorAll('[data-j-show]');
    let act_btn_edit    = document.querySelectorAll('[data-j-edit]');
    let act_btn_del     = document.querySelectorAll('[data-j-del]');   
    let act_btn_recyclebin_empty   = document.querySelectorAll('[data-j-recycle-bin-empty]');
    let act_btn_recyclebin_restore   = document.querySelectorAll('[data-j-recycle-bin-restore]');

    for(let i=0; i<act_btn_show.length; i++) {
        act_btn_show[i].classList.add('hint--top-right');
        act_btn_show[i].classList.add('hint--bounce');
        act_btn_show[i].setAttribute('aria-label', 'Prikaži');
   
    }
    for(let i=0; i<act_btn_edit.length; i++) {
        act_btn_edit[i].classList.add('hint--top');  
        act_btn_edit[i].classList.add('hint--bounce');
        act_btn_edit[i].setAttribute('aria-label', 'Ažuriraj');
   
    }
    for(let i=0; i<act_btn_del.length; i++) {
        act_btn_del[i].classList.add('hint--top-left');
        act_btn_del[i].classList.add('hint--bounce');
        act_btn_del[i].setAttribute('aria-label', 'Obriši');
   
    }
    for(let i=0; i<act_btn_recyclebin_empty .length; i++) {
        act_btn_recyclebin_empty[i].classList.add('hint--top-left');
        act_btn_recyclebin_empty[i].classList.add('hint--bounce');
        act_btn_recyclebin_empty[i].setAttribute('aria-label', 'Obriši trajno | OPCIJA TRENUTNO NE RADI');
   
    }
    for(let i=0; i<act_btn_recyclebin_restore .length; i++) {
        act_btn_recyclebin_restore[i].classList.add('hint--top-right');
        act_btn_recyclebin_restore[i].classList.add('hint--bounce');
        act_btn_recyclebin_restore[i].setAttribute('aria-label', 'Vrati');
   
    }
    
}

function tooltipOptions() {

    let tooltip_options = {
        'label_more_option':"Za izbor više opcija držite pritisnuto dugme '\CTRL\' i kliknite na željene opcije."
    }
    
    // Oznacavanje svih elemenata atributom 'j-ttip'
    let j_tooltip = document.querySelectorAll('[j-ttip]');

    for(let i=0; i<j_tooltip.length; i++) {

        // Preuzimanje svih atributa u izabranom elementu
        let attrs = j_tooltip[i].getAttributeNames().reduce((att, name) => {
            return {...att, [name]: j_tooltip[i].getAttribute(name)};
        }, {});

        let tooltip_label = attrs['j-ttip-label'] ?? null;  
        if(tooltip_label) { 
            // Definisanje indeksa(kljuca), potrebnog za pretragu u nizu tooltip_options[]
            // Zamjena srednje crte sa donjom, i dodavanje prefiksa 'label_' na pocetku 
            // opcije(oznacava da se u nizu trazi label vrijednost)
            // Dobijeni rezultat moze biti npr. 'label_more_option' ili 'label_more_option2'...
            index_label = 'label_' + tooltip_label.replace('-','_');  

            // Dodavanje atributa 'aria-label' izabranom elementu
            j_tooltip[i].setAttribute('aria-label', tooltip_options[index_label]);
            // Dodavanje 'hint' klase
            j_tooltip[i].classList.add('hint--top', 'hint--bounce');

            // Uklanjanje cuvara mjesta(atributi 'j-ttip' i 'j-ttip-label')
            // Uklanjanje atributa 'j-ttip'
            j_tooltip[i].removeAttribute('j-ttip-label');
            // Uklanjanje atributa 'j-ttip-label'
            j_tooltip[i].removeAttribute('j-ttip-label');

        }
        
    }

    let hint_top = 'hint--top';
    let hint_top_bounce = 'hint--top hint--bounce';
    let hint_bottom = 'hint--bottom';
    let hint_bottom_bounce = 'hint--bottom hint--bounce';

}


actBtn(); tooltipOptions();


/*
	ClassicEditor
		.create( document.querySelector( '#editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );

  */  


        let deleteLinks = document.querySelectorAll('.delete');
        if(deleteLinks.length > 0) {
            for (var i = 0; i < deleteLinks.length; i++) {
                deleteLinks[i].addEventListener('click', function(event) {
                    event.preventDefault();
                    let modalDelete = document.querySelector('#Delete');
                    let modalForm = modalDelete.querySelector('[j-form]');
                    let a_href = this.getAttribute('href');
                    modalForm.action = a_href;

                });
            }
        }
  