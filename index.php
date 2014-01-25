<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

	<link type="image/x-icon" rel="icon" href="interface/favicon.ico" />

	<link type="text/css" rel="stylesheet" media="all" href="css/style.css" />
	<link type="text/css" rel="stylesheet" media="all" href="css/default.css" />
	<link type="text/css" rel="stylesheet" media="all" href="css/nivo-slider.css" />
	<link type="text/css" rel="stylesheet" media="all" href="css/colorbox.css" />
	
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput-1.3.min.js"></script>
	<script type="text/javascript" src="js/utils.js"></script>
	<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
	<script type="text/javascript" src="js/jquery.colorbox.js"></script>
       <script type="text/javascript" src="js/AnalyticsCarousel.js"></script>
       <script type="text/javascript" src="js/function.js"></script>
       
	<title>.:: GAMES ::.</title>

</head>
<body>
	<header>
		<div id="menu">
			<a href="javascript:void(0);"><img src="interface/logo.jpg" height="83" width="220" alt="Logo" /></a>
			<ul>
				<li><a href="javascript:void(0);">PRINCIPAL</a></li>
				<li><a href="javascript:void(0);">NOVIDADE</a>
					<ul id="submenu">
						<li><a href="javascript:void(0);">NOTÍCIAS</a></li>
						<li><a href="javascript:void(0);">ANÁLISE</a></li>
						<li><a href="javascript:void(0);">ESPECIAIS</a></li>
					</ul>
				</li>
				<li><a href="javascript:void(0);">PC</a></li>
				<li><a href="javascript:void(0);">XBOX</a></li>
				<li><a href="javascript:void(0);">PLAYSTATION</a></li>
				<li><a href="javascript:void(0);">NINTENDO</a></li>
			</ul>
		</div>
		<div id="buscar">
			<div id="boxbuscar">
				<button type="button"></button>
				<input onFocus="this.value=='Buscar Jogos'?(this.value=''):1" onBlur="this.value==''?this.value='Buscar Jogos':1"  value="Buscar Jogos"  />
			</div>
		</div>
	</header>
	

	<section>
		<div class="meio">
                     <div class="box">
                            <div class="theme-default">
                                    <div id="slider" class="nivoSlider">
                                          <?php
                                               $topos = scandir("interface/banner");
                                               unset($topos[0]);
                                               unset($topos[1]);
                                               foreach($topos as $content)
                                           {
                                           ?>
                                                   <div style="display:none;">
                                                    <img src="interface/banner/<?php echo $content?>" alt="" border="0" />
                                                   </div>
                                           <?php
                                          }
                                          ?>
                                    </div><!-- slider -->
                            </div><!-- theme-default -->
                     </div> <!-- BANNER -->
                     
                     <!-- box de jogos -->
       
                     
                     <!-- box de novidade -->
       
                     <p class="ttlo" id="aba1">Invadindo a semana!</p>
       
                     <div id="boxnovelty">
                            <a href="javascript:void(0);" class="novelty">
                                   <div><img src="interface/img2.jpg" height="90" width="90" alt="" /></div>
                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa.</p>
                            </a>
                            <a href="javascript:void(0);" class="novelty">
                                   <div><img src="interface/img2.jpg" height="90" width="90" alt="" /></div>
                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa.</p>
                            </a>
                            <a href="javascript:void(0);" class="novelty">
                                   <div><img src="interface/img2.jpg" height="90" width="90" alt="" /></div>
                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa.</p>
                            </a>
                            <a href="javascript:void(0);" class="novelty">
                                   <div><img src="interface/img2.jpg" height="90" width="90" alt="" /></div>
                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa.</p>
                            </a>
                            <a href="javascript:void(0);" class="novelty">
                                   <div><img src="interface/img2.jpg" height="90" width="90" alt="" /></div>
                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa.</p>
                            </a>
                            <a href="javascript:void(0);" class="novelty">
                                   <div><img src="interface/img2.jpg" height="90" width="90" alt="" /></div>
                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa.</p>
                            </a>
                            <a href="javascript:void(0);" class="novelty">
                                   <div><img src="interface/img2.jpg" height="90" width="90" alt="" /></div>
                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa.</p>
                            </a>
                            <a href="javascript:void(0);" class="novelty">
                                   <div><img src="interface/img2.jpg" height="90" width="90" alt="" /></div>
                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa.</p>
                            </a>
                            <a href="javascript:void(0);" class="novelty">
                                   <div><img src="interface/img2.jpg" height="90" width="90" alt="" /></div>
                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa. condimentum at, laoreet mattis, massa.</p>
                            </a>
                            <a href="javascript:void(0);"><img src="interface/seta1.jpg" height="27" width="485" alt="" /></a>
                            <a href="javascript:void(0);"><img src="interface/seta2.jpg" height="27" width="485" alt="" /></a>
                     </div>
       
       
                     <!-- box de de games e mobile -->
                     
                     <a href="javascript:void(0);" class="destc" style="margin-left:15px;">
                            <img src="interface/xbox.jpg" alt="Xbox" />
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet.</p>
                     </a>
                     <a href="javascript:void(0);" class="destc">
                            <img src="interface/ps4.jpg" alt="Playstation" />
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet.</p>
                     </a>
                     <a href="javascript:void(0);" class="destc">
                            <img src="interface/mobile.jpg" alt="PC" />
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet.</p>
                     </a>
                     <a href="javascript:void(0);" class="destc">
                            <img src="interface/nintendo.jpg" alt="Nintendo" />
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet.</p>
                     </a>
                     <a href="javascript:void(0);" class="destc">
                            <img src="interface/pc.jpg" alt="PC" />
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet.</p>
                     </a>
                     
       
                     <!-- box top 10 -->
       
                     <p class="ttlo" id="aba2">Invasão Top 10</p>
                     
                     <div style="float:left; background:#039; padding:15px 0 60px 0; margin-bottom:-50px; width:1000px;">
                            <a href="javascript:void(0);" class="conteu">
                                   <img src="interface/not.jpg" height="200" width="301" alt="" />
                                   <h4>Notícia</h4>
                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo.</p>
                            </a>
                            <a href="javascript:void(0);" class="conteu">
                                   <img src="interface/analise.jpg" height="200" width="301" alt="" />
                                   <h4>Análise</h4>
                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo.</p>
                            </a>
                            <a href="javascript:void(0);" class="conteu">
                                   <img src="interface/especiais.jpg" height="200" width="301" alt="" />
                                   <h4>Especiais</h4>
                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo.</p>
                            </a>
                     </div>
       
       
                     <p class="ttlo" id="aba3">Jogos do Mês</p>
                     
                     
                     
                     <div class="carrousel" data-pos="0">
                            <a href="javascript:void(0);" class="carrousel_left"></a>
                            <div class="carrousel_inner">
                                   <ul>
                                          <li><a href="javascript:void(0);"><img src="interface/jogo1.jpg" /></a></li>
                                          <li><a href="javascript:void(0);"><img src="interface/jogo2.jpg" /></a></li>
                                          <li><a href="javascript:void(0);"><img src="interface/jogo3.jpg" /></a></li>
                                          <li><a href="javascript:void(0);"><img src="interface/jogo4.jpg" /></a></li>
                                          <li><a href="javascript:void(0);"><img src="interface/jogo1.jpg" /></a></li>
                                          <li><a href="javascript:void(0);"><img src="interface/jogo2.jpg" /></a></li>
                                          <li><a href="javascript:void(0);"><img src="interface/jogo3.jpg" /></a></li>
                                          <li><a href="javascript:void(0);"><img src="interface/jogo4.jpg" /></a></li>
                                          <li><a href="javascript:void(0);"><img src="interface/jogo1.jpg" /></a></li>
                                          <li><a href="javascript:void(0);"><img src="interface/jogo2.jpg" /></a></li>
                                          <li><a href="javascript:void(0);"><img src="interface/jogo3.jpg" /></a></li>
                                          <li><a href="javascript:void(0);"><img src="interface/jogo4.jpg" /></a></li>
                                   </ul>
                            </div>
                            <a href="javascript:void(0);" class="carrousel_right right_inactive"></a>
                     </div>
       
       
                     <p class="ttlo" id="aba4">Invasão Retror</p>
       
                     <div id="retror">
                     
                            <div class="main_image">
                                   <img src="images/banner01.png" alt="- banner1" />
                                   <div class="desc">
                                          <!--<a href="#" class="collapse">Close Me!</a>-->
                                          <div class="block">
                                                 <h2>Luigi's Mansion</h2>
                                                 <small>08/27/2013</small>
                                                 
                                                 <p>Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et.<br /><a href="http://dribbble.com/shots/1212598-Luigi-s-Mansion" target="_blank">Artwork By Glenn Jones</a> </p>
                                          </div>
                                   </div>
                            </div>
                            <div class="image_thumb">
                                   <ul>
                                          <li>
                                                 <a href="images/banner01.png"><img src="images/banner01_thumb.png" alt="Luigi Mansion" /></a>
                                                 <div class="block">
                                                        <h2>Luigi's Mansion</h2>
                                                        <small>08/27/2013</small>
                                                        
                                                        <p>Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et.<br /><a href="http://dribbble.com/shots/1212598-Luigi-s-Mansion" target="_blank">Artwork by Scott Balmer</a> </p>
                                                 </div>
                                          </li>
                                          <li>
                                                 <a href="images/banner02.png"><img src="images/banner02_thumb.png" alt="The Outichoke Lantern" /></a>
                                                 <div class="block">
                                                        <h2>The Outichoke Lantern</h2>
                                                        <small>08/21/2013</small>
                                                        <p>Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et. Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et.</p>
                                                        <p>Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et.<br /><a href="http://dribbble.com/shots/1205317-The-Outichoke-Lantern" target="_blank">Artwork by Steve Lowtwait</a></p>
                                                 </div>
                                          </li>
                                          <li>
                                                 <a href="images/banner03.png"><img src="images/banner03_thumb.png" alt="waiter illustration" /></a>
                                                 <div class="block">
                                                        <h2>Waiter</h2>
                                                        <small>08/27/2013</small>
                                                        <p>Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et.<br /><a href="http://dribbble.com/shots/1212154-Waiter" target="_blank">Artwork by CROP</a></p>
                                                 </div>
                                          </li>
                                          <li>
                                                 <a href="images/banner04.png"><img src="images/banner04_thumb.png" alt="magic rabbit in the hat" /></a>
                                                 <div class="block">
                                                        <h2>Rabbit in the Hat</h2>
                                                        <small>08/29/2013</small>
                                                        <p>Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et. Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et.<br /><a href="http://dribbble.com/shots/1214764-Rabbit-In-The-Hat" target="_blank">Artwork by Fabricio Rosa Marques</a></p>
                                                 </div>
                                          </li>
                                          <li>
                                                 <a href="images/banner05.png"><img src="images/banner05_thumb.png" alt="Puzzled Putter" /></a>
                                                 <div class="block">
                                                        <h2>Wafer</h2>
                                                        <small>08/28/2013</small>
                                                        <p>Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et. <br /><a href="http://dribbble.com/shots/1214342-wafer" target="_blank">Artwork by Gunay</a></p>
                                                 </div>
                                          </li>
                                          <li>
                                                 <a href="images/banner06.png"><img src="images/banner06_thumb.png" alt="laboratory background night" /></a>
                                                 <div class="block">
                                                        <h2>Laboratory</h2>
                                                        <small>06/07/2013</small>
                                                        <p>Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem.<br /><a href="http://dribbble.com/shots/1104743-Laboratory-background" target="_blank">Artwork By Ricardo</a></p>
                                                 </div>
                                          </li>
                                   </ul>
                            </div>
                     </div>
                     
                     
                     
                     <p class="ttlo" id="aba5">Vídeos</p>
       
                     <div id="boxvideos">
                            <div id="intvideo"><iframe style="z-index:-10000;" width="485" height="392" src="//www.youtube.com/embed/Uk69ub1b5Sc?rel=0" frameborder="0" allowfullscreen></iframe></div>
                            <a href="javascript:void(0);" class="minintvideo">
                                   <iframe width="200" height="150" src="//www.youtube.com/embed/Uk69ub1b5Sc?rel=0" frameborder="0" allowfullscreen></iframe>
                                   <h4>Titulo do Vídeo</h4>
                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                            </a>
                            <a href="javascript:void(0);" class="minintvideo">
                                   <iframe width="200" height="150" src="//www.youtube.com/embed/Uk69ub1b5Sc?rel=0" frameborder="0" allowfullscreen></iframe>
                                   <h4>Titulo do Vídeo</h4>
                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                            </a>
                            <a href="javascript:void(0);" id="seta3"></a>
                            <a href="javascript:void(0);" id="seta4"></a>
                     </div>
              
		</div>
	</section>


	<div id="fb-root"></div>
	<!-- widgets facebook -->

	<footer>
		<div>	
			
			<div class="fb-like-box" data-href="http://www.facebook.com/FacebookDevelopers" data-width="290" data-height="227" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
			<!-- widgets facebook -->

			<ul>
				<h3>INSTITUIÇÃO</h3>
				<li><a href="javascript:void(0);">Quem Somos</a></li>
				<li><a href="javascript:void(0);">Nosaa Política</a></li>
				<li><a href="javascript:void(0);">Anuncio</a></li>
				<li><a href="javascript:void(0);">Contato</a></li>
			</ul>
		</div>
	</footer>

</body>
</html>
