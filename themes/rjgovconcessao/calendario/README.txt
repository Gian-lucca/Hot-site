PASSO 1-> Colocar a pasta Calendario no tema.


PASSO 2-> Incluir no "libraries.yml":

css:    
    theme:
	css/theme1.css: {}
		OU
	css/theme2.css: {}
		OU
	css/theme3.css: {}
    
js:    
    calendario/js/caleandar.js: {}
    calendario/js/demo.js: {}



PASSO 3-> Incluir no HTML:

<div class="full-calendar">
<div class="calendar" data-url="api/URL_DA_SUA_API" id="calendar">&nbsp;</div>
<div class="cld-resume" id="popup">&nbsp;</div>
</div>


 


