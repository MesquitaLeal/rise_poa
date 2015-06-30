<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'RISE';
?>
<div class="site-index">

    <div id="home">
    	<img src="images/home.png" />
    	<?= Html::img('images/' . Yii::$app->language . '/logo_rise.png');?>
    	<?= Html::img('images/logos.png', array('class'=>'img-logo img-responsive'));?>		
    </div>

    <div id="about">
        <div class="row content">
        	<div class="col-md-5" id="about-title">
           		<h2> <?= Yii::t('app', 'Sobre');?> </h2>
        	</div>
        	<div class="col-md-7">
        		<p> <?= Yii::t('app', 'Fundada en 1989, la Sociedad para el Desarrollo de la Socioeconomía (Society for the Advancement of Socio-Economics – SASE) es una institución internacional con miembros en más de cincuenta países. La SASE organiza una reunión anual principal, además de reuniones regionales, eventos académicos locales, y publica una revista, la Socio-Economic Review. En paralelo a la creación de la sección Iberoamericana de la SASE, fue organizada en 2013, en la Universidad Autónoma de México, la Primera Reunión Iberoamericana de Socioeconomía, el primer encuentro regional de la SASE.');?> </p>
				<p> <?= Yii::t('app', 'En 2015, la II Reunión Iberoamericana de Socioeconomía tendrá lugar en Porto Alegre, Rio Grande do Sul, en Brasil, con la organización de la SASE, del Programa de Posgrado en Economía de la Universidade Federal do Rio Grande do Sul, del Centro de Estudos Internacionais sobre Governo (CEGOV/UFRGS), con el apoyo de la Universidad Autónoma de Madrid. La reunión es el esfuerzo de profundización de las actividades de internacionalización de la investigación y la docencia en el nivel de posgrado, destacando también el carácter multidisciplinar de las áreas temáticas.');?> </p>
				<div class="row">
				<div class="col-xs-4">
					<img src="images/logo_sase.png" alt="Logo da SASE" />
				</div>
				<div class="col-xs-4">
					<img src="images/logo_ufrgs.png" alt="Logo da UFRGS" />
				</div>
				<div class="col-xs-4">
					<img src="images/logo_cegov.png" alt="Logo do CEGOV" />
				</div>

				</div>
        	</div>
        </div>
    </div>

    <div id="theme">
        <div class="row content">
        	<div class="col-md-6">
	        	<h2> <?= Yii::t('app', 'Estado, sociedad');?> </h2>
	        	<h2> <?= Yii::t('app', 'y mercado');?> </h2>
	        	<h3> <?= Yii::t('app', 'nuevas perspectivas para el desarrollo');?> </h3>
        		<p> <?= Yii::t('app', 'Las instituciones neoliberales y la estrategia de promoción del desarrollo económico con protagonimdo del mercado, vaciamiento del papel del estado y escasa política social parecía que entraba en jaque con la crisis financiera internacional y la gran depresión. Ya a finales de los años 1990 se observaba una cierta tendencia de cambio en la estrategia de desarrollo de los países iberoamericanos, dado la incapacidad de ese modelo neoliberal para promover crecimiento económico con distribución de la renta. Esa tendencia también se ha manifestado en el mundo académico, con una constante búsqueda de revisión del paradigma dominante y la recuperación de una perspectiva teórica heterodoxa y multidisciplinar. Sin embargo, después de seis años desde la deflagración de la crisis, persisten los interrogantes políticos y teóricos sobre las nuevas estrategias para el desarrollo de la región. Los países emergentes están en un momento decisivo de definición de esas estrategias de desarrollo sostenido, no obstante, el debate teórico académico, a pesar de haber avanzado mucho en los últimos años, todavía no es capaz de ofrecer una respuesta mínimamente consensuada sobre varios aspectos chaves del desarrollo.');?> </p>
			</div>
        	<div class="col-md-6">
				<p> <?= Yii::t('app', 'En este contexto surgen varias cuestiones fundamentales para el estudio del desarrollo socioeconómico de la región y que serán objeto de debate en la II RISE. Se destaca, por un laco, el papel del Estado, i.e., la construcción de una agenda que defina las características de la actuación del Estado en el desarrollo, especialmente en el contexto de la globalización, con autonomía para tomar decisiones, articular el mercado y la política industrial, con un papel proactivo en la promoción del desarrollo, con una política fiscal y crediticia contra-cíclica, de estimulo a la modernización de las infraestructuras, del fortalecimiento de la industria y mejoras en la calidad de las políticas sociales. Se admite, además, la existencia de varias formas de capitalismo, con distintas combinaciones institucionales, destacando la importancia del Estado en la coordinación de políticas promotoras del crecimiento y de la productividad.');?> </p>
				<p> <?= Yii::t('app', 'En fin, las demandas socioeconómicas de los países iberoamericanos colocan en la agenda de discusión cuestiones relevantes sobre las estrategias y obstáculos del desarrollo sostenido a largo plazo, y que deben analizarse desde el punto de vista teórico, político y multidisciplinar. En este sentido, la II RISE pretende debatir cuestiones relacionadas con los siguientes temas: el papel del estado en la socio-economía; el desarrollo en los países iberoamericanos: desafíos y perspectivas; democracia, ciudadanía y movimientos sociales: macroeconomía, sistemas financieros y regulación; demografía y desarrollo regional; empleo, calidad de vida y políticas sociales; desarrollo sostenido y medio-ambiente; desindustrialización y patrones de comercio; y relaciones internacionales e integración regional.');?> </p>
        	</div>
        </div>
    </div>

    <div id="panels">
        <div class="row content">
        	<div class="col-lg-6">
	        	<div id='panels-title'>
	        		<h2><?= Yii::t('app', 'Mesas Temáticas');?></h2>
	        	</div>
        		<ol class="panels-list">
        			<li> <?= Yii::t('app', 'El debate sobre el Estado de la Socio-economia');?> </li>
					<li> <?= Yii::t('app', 'Desarrollo en los Países Ibero-americanos: desafios y perspectivas');?> </li>
					<li> <?= Yii::t('app', 'Democracia, Ciudadanía y Movimientos Sociales');?> </li>
					<li> <?= Yii::t('app', 'Macroeconomía, Sistemas Financieros y Regulación');?> </li>
					<li> <?= Yii::t('app', 'Cultura, Desarrollo y Economía Creativa');?> </li>
					<li> <?= Yii::t('app', 'Empleo, Calidad de Vida y Políticas Sociales');?></li>
					<li> <?= Yii::t('app', 'Desarrollo sostenible y Medio Ambiente');?> </li>
					<li> <?= Yii::t('app', 'Desindustrialización y Patrones de Comercio');?> </li>
					<li> <?= Yii::t('app', 'Relaciones Internacionales e Integración Regional');?> </li>
    				<li> <?= Yii::t('app', 'Ibero-América y Países Emergentes');?> </li>
        		</ol>
			</div>
        	<!--<div class="col-lg-6" id="members">
				<div class="row">
					<div class="col-lg-6">
						<ul>
							<li>Dr. Pedro Cezar Dutra Fonseca (UFRGS)</li>
							<li>Dr. Fernando Ferrari Filho (UFRGS)</li>
							<li>Dr. Santos M. Ruesga (UAM)</li>
							<li>Dr. Rolando Cordera (UNAM - Mexico)</li>
							<li>Dr. Gerardo Fujii (UNAM - Mexico)</li>
							<li>Dr. Glenn Morgan (SASE President, Cardiff Business School)</li>
							<li>Dr. Gregory Jackson (Freie Universität Berlin)</li>
							<li>Dr. Ricardo Bielschowsky (UFRJ-Cepal)</li>
							<li>Dr. Claudio Dedecca (Unicamp)</li>
							<li>Dra. Maria Cristina Cacciamali (USP)</li>
							<li>Dra. Maria de Lourdes Mollo (UnB)</li>
						</ul>
					</div>
					<div class="col-lg-6">
						<h2 id="left-side">Científico</h2>
						<ul>
							<li>Dra. Magna Inácio (UFMG)</li>
							<li>Dra. Leda Paulani (USP)</li>
							<li>Dra. Nadya Araujo Guimarães (USP)</li>
							<li>Dra. Marianne L. Wiesebron (University of Leiden - Holland)</li>
							<li>Dr. Andrew Schrank (Brown University - USA)</li>
							<li>Dr. Michael Piore (MIT - USA)</li>
							<li>Dr. Diego Sánchez-Ancochea (University of Oxford - UK)</li>
							<li>Dr. Marcio Pochmann (Unicamp)</li>
							<li>Dr. Marco Lima da Costa (UFPE)</li>
							<li>Dr. Ricardo Carneiro (World Bank)</li>
							<li>Dr. Paulo Nogueira Batista (IMF)</li>
							<li>Dr. Miguel Atienza (U. Antofagasta - Chile)</li>
						</ul>
					</div>
				<div class="row">
					<div class="col-lg-5">
						<h2>Organizador</h2>
					</div>
					<div class="col-lg-7">
						<ul>
							<li>Dr. Pedro Cezar Dutra Fonseca (UFRGS)</li>
							<li>Dr. Fernando Ferrari Filho (UFRGS)</li>
							<li>Dr. André Moreira Cunha (UFRGS)</li>
							<li>Dr. Marco Aurélio Chaves Cepik (UFRGS)</li>
							<li>Dr. Ricardo Dathein (UFRGS)</li>
							<li>Dra. Sonia Maria Ranincheski (UFRGS)</li>
							<li>Dr. Leandro Valiati (UFRGS)</li>
							<li>Dr. Julimar da Silva Bichara (UAM)</li>
						</ul>
					</div>


					</div>
				</div>
        	</div>-->
        </div>
    </div>

    <div id="papers">
        <div class="row content">
        	<div class="col-lg-12">
	        	<h2> <?= Yii::t('app', 'Envío de Comunicaciones');?> </h2>
        		<ol>
        			<li> <?= Yii::t('app', 'Enviar resúmenes hasta el 30 de Junio de 2015.');?> </li>
        			<li> <?= Yii::t('app', 'Aviso de aceptación de la comunicación hasta el 30 de Julio de 2015.');?> </li>
        			<li> <?= Yii::t('app', 'El resumen deberá contener como elementos mínimos: ');?> </li>
        			<ul>
						<li> <?= Yii::t('app', 'Objetivo(s),');?> </li>
						<li> <?= Yii::t('app', 'Metodología,');?> </li>
						<li> <?= Yii::t('app', 'Principales resultados,');?> </li>
						<li> <?= Yii::t('app', 'Bibliografía más actual');?> </li>
						<li> <?= Yii::t('app', 'Nombres, email y créditos académicos de todos los autores');?> </li>
						<li> <?= Yii::t('app', 'Deberá tener una extensión de hasta 500 palabras como máximo.');?> </li>
						<li> <?= Yii::t('app', 'Se remitirán en español o portugués e inglés');?> </li>
						<li> <?= Yii::t('app', 'Los idiomas del evento serán el español, el portugués y el inglés');?> </li>
					</ul>
					<li> <?= Yii::t('app', 'Indicar a qué mesa temática se remite la comunicación.');?> </li>
        		</ol>
        		<p> <?= Yii::t('app', '*La aceptación del resumen por el Comité Científico es el requisito imprescindible para presentar la comunicación en la RISE. No será necesario remitir la comunicación completa.');?> </p>
        		<a href="index.php?r=abstracts/create"><button class="btn btn-primary"><h4> <?= Yii::t('app', 'Enviar Resumen');?> </h4></button></a>
			</div>
        </div>
    </div>

    <div id="deadline">
        <div class="row content">
        	<div class="col-lg-12">
	        	<h2><?= Yii::t('app', 'Fechas');?></h2>
			</div>
        </div>
        <div class="row content box">
        	<div class="col-sm-3">
        		<h6><?= Yii::t('app', '01/04/2015');?></h6>
        		<p><?= Yii::t('app', 'Abre plazo para recibir las comunicaciones');?></p>
        	</div>
        	<div class="col-sm-3">
        		<h6><?= Yii::t('app', '30/06/2015');?></h6>
        		<p><?= Yii::t('app', 'Finaliza plazo para recibir las comunicaciones');?></p>
        	</div>
        	<div class="col-sm-3">
        		<h6><?= Yii::t('app', '30/07/2015');?></h6>
        		<p><?= Yii::t('app', 'Selección de comunicaciones');?></p>
        	</div>
        	<div class="col-sm-3">
        		<h6><?= Yii::t('app', '19 a 21');?><br><?= Yii::t('app', 'NOV 2015');?></h6>
        		<p><?= Yii::t('app', 'Congresso');?></p>
        	</div>
        </div>
    </div>

    <div id="infos">
    	<div class="row content">
    		<div class="col-lg-12">
    			<h2><?= Yii::t('app', 'Info Util');?></h2>
    		</div>
    	</div>
    	<div class="row content">
	    	<div class="col-sm-3">
	    		<img src="images/icone-info.png" data-toggle="modal" data-target="#myModal"/><br/>
	    		<p class="link-title"><?= Yii::t('app', 'General');?></p>

	    		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content">
				    	 <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title">General</h4>
					      </div>
					      <div class="modal-body">
					      	<div class="row">
						      	<div class="col-sm-6">
							        <h6>UFRGS</h6>
									<p>La Universidade Federal do Rio Grande do Sul, en Porto Alegre, es una institución con 80 años de atividades, reconocida nacional y internacionalmente. Según la evaluación del Ministerio de la Educación brasileño, UFRGS es considerada la mejor universidad de Brasil. La Universidad ofrece cursos en todas las áreas del conocimiento y en todos los niveles de formación, de instituto a posgrado. Actualmente son ofrecidos 93 cursos de grado y más de 80 cursos de posgrado en sus cinco campi: Centro, Vale, Saúde, Olímpico e Litoral Norte. <br/> Las actividades del II RISE serán realizadas en el Campus Centro, donde está el Programa e Posgrado en Economía, en la Facultad de Ciencias Económicas de UFRGS.</p>

									<h6>AEROPUERTO </h6>
									<p>El Aeropuerto Internacional Salgado Filho está ubicado a 10km del centro de la ciudad de Porto Alegre. Diversas empresas de autobuses y taxis ofrecen transporte al aeropuerto.</p>
								</div>

								<div class="col-sm-6">
									<h6><?=Yii::t('app', 'Transporte')?></h6>
									<p>Táxi e Ônibus Urbanos em Porto Alegre</p>
									<p>EPTC – Empresa Pública de Transporte e Circulação (informações sobre táxis, lotações, ônibus)</p>
									<p>Fone: 118 ou 156 | www.eptc.com.br</p>
									<p>TRENSURB - Região Metropolitana de Porto Alegre (saiba sobre serviços, itinerários e	horários)</p>
									<p>Fone: (51) 3363.8477 | www.trensurb.com.br/home.php</p>
								
									<h6>COMUNICAÇÃO</h6>

									Para ligações nacionais, utilize as operadoras e disque:
									00 + (14) ou (21) ou (25) + nº da operadora + cód. de área + número desejado;

									Para ligações internacionais, disque:
									00 + (14) ou (21) ou (25) nº da operadora + cód. do país + cód. da cidade + número desejado.

									<h6>TELEFONES ÚTEIS</h6>
									190 Polícia Militar
									197 Polícia Civil
									51 3235.9000 Polícia Federal
									193 Bombeiros
									192 Samu
									(51) 3371.2703 DPTUR – Delegacia de Polícia ao Turista 
								</div>
						      </div>
					      </div>
				    </div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->

	    	</div>
	    	<div class="col-sm-3">
	    		<img src="images/icone-poa.png" /><br/>
	    		<p class="link-title"><?= Yii::t('app', 'Porto Alegre');?></p>
	    	</div>
	    	<div class="col-sm-3">
	    		<img src="images/icone-cultura.png" /><br/>
	    		<p class="link-title"><?= Yii::t('app', 'Cultural');?></p>
	    	</div>
	    	<div class="col-sm-3">
	    		<img src="images/icone-hotel.png" /><br/>
	    		<p class="link-title"><?= Yii::t('app', 'Hoteles');?></p>
	    	</div>
	    </div>
    </div>

    <div id="contact">
        <div class="row content">
        	<div class="col-lg-6">
	        	<h2><?= Yii::t('app', 'Contacto');?></h2>
	        	<?= Html::mailto('2rise.ufrgs.portoalegre@gmail.com', '2rise.ufrgs.portoalegre@gmail.com'); ?>
			</div>
        </div>
    </div>

</div>
