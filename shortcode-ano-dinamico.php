/** shortcode para ano */
function get_year($atts){
	echo '<span style="color: rgb(250, 250, 248); font-family: Roboto, sans-serif; font-size: 15px; font-weight: 400; white-space: normal;">Desenvolvido por&nbsp;</span><span style="font-weight: bolder; color: rgb(248, 182, 0); font-family: Roboto, sans-serif; font-size: 15px; white-space: normal;">WRR</span><span style="color: rgb(250, 250, 248); font-family: Roboto, sans-serif; font-size: 15px; font-weight: 400; white-space: normal;">Developer&nbsp;</span><span style="color: rgb(250, 250, 248); font-family: Roboto, sans-serif; font-size: 15px; font-weight: 400; white-space: normal;">' . date('Y') . ' | Todos os direitos reservados</span>';
}

add_shortcode('currentYear', 'get_year');


//Criado por
Criado por <a style="color: #d7ffff;" href="https://wrrdev.com" target="_blank" rel="noopener"><b style="color: #d78708;">WRR</b><b>D</b>eveloper</a>
