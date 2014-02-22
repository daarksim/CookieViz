
<!-- Copyright (c) 2013, Stéphane Petitcolas
This file is part of CookieViz

CookieViz is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

CookieViz is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with CookieViz.  If not, see <http://www.gnu.org/licenses/>.
-->
<html>
	<head>
		<title>Cookie Viz</title>
		<meta http-equiv= "content-type" content= "text/html; charset=utf-8" >
		<link rel="stylesheet" href="libs/jquery/themes/base/jquery.ui.all.css">
		<link type="text/css" rel="stylesheet" href="main.css"/>
		<script type="text/javascript" src="libs/jquery/jquery-1.7.1.js"></script>
		<script type="text/javascript" src="libs/jquery/ui/jquery.ui.core.js"></script>
		<script type="text/javascript" src="libs/jquery/ui/jquery.ui.widget.js"></script>
		<script type="text/javascript" src="libs/jquery/ui/jquery.ui.mouse.js"></script>
		<script type="text/javascript" src="libs/jquery/ui/jquery.ui.slider.js"></script>
		<script type="text/javascript" src="libs/noty/jquery.noty.js"></script>
		<script type="text/javascript" src="libs/noty/layouts/top.js"></script>
		<script type="text/javascript" src="libs/noty/layouts/topLeft.js"></script>
		<script type="text/javascript" src="libs/noty/layouts/topRight.js"></script>
		<script type="text/javascript" src="libs/noty/themes/default.js"></script>
		<script type="text/javascript" src="libs/d3/d3.min.js"></script>
		<script type="text/javascript" src="libs/d3/src/geom.js"></script>
		<script type="text/javascript" src="libs/d3/layout/layout.js"></script>
		<script type="text/javascript" src="function.js"></script>
		<script type="text/javascript" src="libs/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="libs/jquery/jquery.fixheadertable.min.js"></script>
	</head>
	<body>
		

		<div class="menu" name="menu" id="menu">
			<div class="title"><img  src="./img/logo.png"/></div>
			<div class="filter" name="cookie" id="cookie">Recharger le graphique</div>
			<div class="filter" name="reset" id="reset">Vider le graphique</div>
			<div class="subtitle">Actions</div>
			<div class="filter" name="zoomin" id="zoomin">Zoom +</div>
			<div class="filter" name="zoomout" id="zoomout">Zoom -</div>
			<div class="axis_y" name="haut" id="haut"><img  src="./img/Haut.png"/></div>
			<div class="axis_x_container">
								<div class="axis_x" name="gauche" id="gauche"><img  src="./img/Gauche.png"/></div>
								<div class="axis_x" name="droite" id="droite"><img  src="./img/Droite.png"/></div>
			</div>
			<div class="axis_y" name="bas" id="bas"><img  src="./img/Bas.png"/></div>
			
			<div class="subtitle">Légende</div>
			<div class="legende_container">
				<div class="legende">Acteur</div>
				<div class="legende_img"><img  src="./img/point.png"/></div>
			</div>
			<div class="legende_container">
			<div class="legende">Acteur avec liens cachés</div>
				<div class="legende_img"><img  src="./img/point_with_link.png"/></div>
			</div>
			<div class="legende_container">
				<div class="legende">Requête sans cookie</div>
				<div class="legende_img"><img  src="./img/link.png"/></div>
			</div>
			<div class="legende_container">
				<div class="legende">Requête avec cookie</div>
				<div class="legende_img"><img  src="./img/cookie_link.png"/></div>
			</div>
			
		</div>
		<div class="context_menu" name="context_menu" id="context_menu">
			<div class="context_line" name="info" id="info">Info</div>
			<div class="context_line" name="center_to_point" id="center_to_point">Centrer</div>
			<div class="context_line" name="expand" id="expand">Etendre</div>
		</div>
		<div class="info_window" name="info_window" id="info_window">
			<div class="close_window" name="close_window" id="close_window"><b>Close</b></div>
			<div class="window_content" name="window_content" id="window_content"></div>
			
		</div>
	
		<div id="chart" oncontextmenu="return false"></div>
		<script type="text/javascript" src="./main.js"></script>
		</body>
</html>
