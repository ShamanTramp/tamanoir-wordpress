<div id="tm-msg">
	<span><h1>Info Tamanoir</h1></span>
	<p><strong>
		Pour que vos articles prennent la bonne mise en page il faut leur attribuer une classe à la création, grâce au menu d'ajout de classes sur la droite de l'interface de création d'un article.
	</strong></p>
	<img src='http://puu.sh/AzjR3/66d140055c.png'>
	<p>Les classes disponibles sont les suivantes :</p>
	<p style="text-decoration: underline">Dans les projets officiels :</p>
	<ul>
		<li>
			projets-cm (courts-métrages)
		</li>
		<li>
			projets-event (évênements)
		</li>
	</ul>
	<p style="text-decoration: underline">Dans la Fourmilière :</p>
	<ul>
		<li>
			fourmis-video
		</li>
		<li>
			fourmis-audio
		</li>
		<li>
			fourmis-photo
		</li>
		<li>
			fourmis-texte
		</li>
		<li>
			fourmis-illus
		</li>
	</ul>

	<p><strong>D'autres classes pourront évidemment faire leur apparition au besoin !</strong></p>
</div>



<style type="text/css">
	
#tm-msg {
	margin: 0;
	padding: 10px;
	display: flex;
	flex-direction: column;
}
	
#tm-msg span {
	background-color: #F55437;
	border-radius: 5px;
}
	
#tm-msg span h1 {
	font-size: 50px;
	line-height: 50px;
	text-align: center;
	padding-bottom: 15px;
	color: white;
    animation: blink 2s infinite;
}
	
#tm-msg ul {
	border-radius: 5px;
	background-color: #f1f1f1;
	padding-top: 10px;
	padding-bottom: 10px;
}
	
#tm-msg li {
	list-style: disc;
	margin-left: 30px;
	font-size: 120%;
	letter-spacing: 2px;
}
	
#tm-msg p {
	text-align: justify;
	font-size: 115%;
}
	
#tm-msg img {
	margin: auto;
	width: 100%;
	border-radius: 5px;
}

@keyframes blink{
    0%{opacity: 1;}
    50%{opacity: 0;}
    100%{opacity: 1;}
}

</style>