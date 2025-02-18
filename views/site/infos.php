<section id="infos">
        <div class="row content">
            <div class="col-lg-12">
                <span class="section-title"><h2><?= Yii::t('app', 'Info');?></h2></span>
            </div>
        </div>
        <br/>
        <div class="row content">
            <div class="col-sm-2">
                <img src="images/icone-info.png" data-toggle="modal" data-target="#infoModal"/><br/>
                <p class="link-title"><?= Yii::t('app', 'General');?></p>

                <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <span class="section-title"><h2><?=Yii::t('app', 'General')?></h2></span>
                                            <p class="modal-source">* <?= Yii::t('app', 'Fuente')?>: <a href="http://www.turismo.rs.gov.br/conteudo/2670/guia-do-torcedor-guia-del-hincha-fan-guide">Secretaria de Turismo, Esporte e Lazer do Rio Grande do Sul</a></p>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row modal-text">
                                        <div class="col-md-6">
                                            <h6>UFRGS</h6>
                                            <p><?=Yii::t('app', 'La Universidade Federal do Rio Grande do Sul, en Porto Alegre, es una institución con 80 años de atividades, reconocida nacional y internacionalmente. Según la evaluación del Ministerio de la Educación brasileño, UFRGS es considerada la mejor universidad de Brasil. La Universidad ofrece cursos en todas las áreas del conocimiento y en todos los niveles de formación, de instituto a posgrado. Actualmente son ofrecidos 92 cursos de grado y más de 80 cursos de posgrado en sus cinco campi: Centro, Vale, Saúde, Olímpico e Litoral Norte. <br/> Las actividades del II RISE serán realizadas en el Campus Centro, donde está el Programa e Posgrado en Economía, en la Facultad de Ciencias Económicas de UFRGS.')?></p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'Aeropuerto')?></h6>
                                            <p><?= Yii::t('app', 'El Aeropuerto Internacional Salgado Filho está ubicado a 10km del centro de la ciudad de Porto Alegre. Diversas empresas de autobuses y taxis ofrecen transporte al aeropuerto.')?></p>
                                            <br/>
                                        </div>
                                        <div class="col-md-6">
                                            <h6><?=Yii::t('app', 'Transporte')?></h6>
                                            <p>EPTC – <?= Yii::t('app', 'Empresa Pública de Transporte y Circulación (informaciones sobre taxis, microbuses y buses)')?>)<br/><?= Yii::t('app', 'Teléfono')?>: 118 ou 156 | www.eptc.com.br</p>
                                            <p>TRENSURB - <?=Yii::t('app', 'Región Metropolitana de Porto Alegre (sepa sobre servicios, itinerarios y horarios)')?><br/><?= Yii::t('app', 'Teléfono')?>: (5551) 3363.8477<br/> www.trensurb.com.br/home.php</p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'COMUNICACIÓN')?></h6>
                                            <p><?= Yii::t('app', 'Para llamadas locales use el código local de la operadora y pulse: <br/>0 + (14) o (21) o (25) + código de área (sin el 0) + número deseado;')?></p>
                                            <p><?= Yii::t('app', 'Para llamadas internacionales, pulse: <br/> 00 + (14) o (21) o (25) + el código del país + código de la ciudad + número deseado.')?></p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'TELÉFONOS UTILES')?></h6>
                                            <p>190 - <?= Yii::t('app', 'Emergencias')?>
                                            <br/>197 - <?= Yii::t('app', 'Policía Civil de RS')?>
                                            <br/>51 3235.9000 - <?= Yii::t('app', 'Policía Federal de RS')?>
                                            <br/>193 - <?= Yii::t('app', 'Bombeiros')?>
                                            <br/>192 - <?= Yii::t('app', 'Samu')?>
                                            <br/>(51) 3371.2703 DPTUR – <?= Yii::t('app', 'Jefatura de Policía al Turista')?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
            <div class="col-sm-2">
                <img src="images/icone-poa.png" data-toggle="modal" data-target="#poaModal" /><br/>
                <p class="link-title">Porto Alegre</p>

                <div class="modal fade" id="poaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <span class="section-title"><h2>Porto Alegre</h2></span>
                                            <p class="modal-source">* <?= Yii::t('app', 'Fuente')?>: <a href="http://www.turismo.rs.gov.br/conteudo/2670/guia-do-torcedor-guia-del-hincha-fan-guide">Secretaria de Turismo, Esporte e Lazer do Rio Grande do Sul</a></p>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row modal-text">
                                        <div class="col-md-6">
                                            <h6>Porto Alegre</h6>
                                            <p><?=Yii::t('app', 'Porto Alegre es el polo de preservación e irradiaciones de la historia gaúcha, del folclor, de los hábitos y de las creencias de los gaúchos. Y lo hace de una forma peculiar, que da valor a las tradiciones sin perder el dinamismo y la sintonía con la modernidad propia de un centro cosmopolita. Porto Alegre es sinónimo de otro Brasil, que se destinos tropicales de sol y mar y no solo por el paisaje, sino porque hace de la cultura su especialidad. Esta diferencia se expresa desde la música hasta la poesía, desde la literatura hasta las artes plásticas y visuales, desde la arquitectura hasta los hábitos y modo de vida de su gente.')?></p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'Localización estratégica')?></h6>
                                            <p><?= Yii::t('app', 'Porto Alegre es un punto estratégico del Mercosur y centro geográfico de las principales rutas del Cono Sur, equidistante del eje Buenos Aires/Argentina (1.063km), Montevideo/Uruguay (890km), São Paulo (1.109km) y Río de Janeiro (1.558km). La ciudad está ligada a carreteras federales que permiten la conexión a otros estados de Brasil, de Uruguay y de Argentina, países que hacen frontera con el estado de Rio Grande do Sul. El Aeropuerto Internacional Salgado Filho, en expansión está ubicada a solamente 15 minutos del centro de la ciudad, atendiendo a un movimiento promedio de más de 650 mil pasajeros por mes.')?></p>
                                            <br/>
                                            <h6><?=Yii::t('app', 'Itinerario a pie por el Centro Histórico')?></h6>
                                            <p><?= Yii::t('app', 'El itinerario a pie puede empezar por el Centro Histórico, región revitalizada, donde la ciudad nació hace 242 años y que oferece un tour por importantes y movidos espacios culturales, iglesias, palacios y monumentos. Allí está el 80% de los edificios que son los guardianes de la historia del estado, como el Memorial de Rio Grande do Sul, el Museo de Artes del Estado, con un atrayente bistrô al aire libre, y el Santander Cultural, con bar, restaurante, café y cine. Todos ellos juntito a la histórica Praça da Alfândega. Además de la Casa de la Cultura Mário Quintana, cuyo edificio fue listado como patrimonio histórico y homenajea grandes nombres de la cultura del estado de Rio Grande do Sul. Como un museo al aire libre, la región de la Praça da Matriz abriga la Catedral Metropolitana y el Palacio Piratini, cuyos frescos valen ser conferidos, el Solar dos Câmara y el Theatro São Pedro, la niña de los ojos de los gaúchos. El gran icono del Centro Histórico es el neoclásico Mercado Público Central, edificio de 1869 levantado em la época de la esclavitud y que guarda muchas historias y creencias relacionadas a la memoria y al imaginario de la ciudad.')?>)</p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'La vida del “Lado de Afuera”')?></h6>
                                            <p><?= Yii::t('app', 'Los finales de semana, especialmente los domingos, son dedicados al popular Brique da Redenção, tradicional feria que se realiza todos los domingos en la extensión de la Avenida José Bonifácio, junto al Parque Farroupilha, o Parque da Redenção, en Porto Alegre. En el parque, la ciudad muestra su espíritu. Amantes de la vida al aire libre, miles de portoalegrenses aprovechan el área verde de 40 hectáreas para pasear, caminar, correr, encontrar a amigos, tumbarse al sol y tomar chimarrão. Espacios como el Parque Moinhos de Vento y Marinha do Brasil también forman parte de los destinos preferidos de los gaúchos a quienes les gusta aprovechar los lindos días de sol al aire libre.')?></p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'Turismo rural muy cercano')?></h6>
                                            <p><?= Yii::t('app', 'Porto Alegre es la segunda capital de Brasil con la más grande área rural productiva, a pocos minutos del centro de la ciudad. En esa región, está la ruta Caminos Rurales, un producto turístico diferenciado. La miel, la floricultura, la pesca, la agroecología y su diversidad, así como la crianza de ovejas y caballos, despiertan interés en este destino que cuenta hoy con diversos emprendimientos y equipos turísticos, con potenciales diversos y atracciones como espacios para ecoturismo, turismo cultural, turismo rural, además de estudios e intercambio, con temas diversos.')?></p>
                                            <br/>
                                        </div>
                                        <div class="col-md-6">
                                            <h6><?=Yii::t('app', 'El Guaíba y su encantador atardecer (encantadora puesta de sol)')?></h6>
                                            <p><?= Yii::t('app', 'El Lago Guaíba es la más fuerte expresión geográfica de Porto Alegre. La mejor forma de de ver el paisaje que el lago nos ofrece de la ciudad y de las islas del Delta del Jacuí es navegando por sus aguas a bordo de los barcos que hacen paseos turísticos saliendo desde el Cais de la Usina do Gasômetro, Cais Mauá y playa de Ipanema. El lago forma 72 kilómetros de la orla fluvial, buena parte urbanizada y aprovechada para actividades de esparcimiento y recreación por una población que valora la vida al aire libre. Los colores de la puesta del sol en las aguas del Guaíba son un espectáculo imperdible y la mejor postal de la ciudad.')?></p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'City tour línea turismo')?></h6>
                                            <p><?= Yii::t('app', 'Para tener un primer contacto con la ciudad, con su imperdible Centro Histórico y los agradables paisajes de la Zona Sur, nada mejor que embarcar en uno de los autobuses de dos pisos del city tour Línea Turismo. A cuatro metros de altura, el pasajero tiene uma visión panorámica de calles, monumentos, del Lago Guaíba y de tantos otros atractivos. En el itinerario Centro Histórico, el enfoque son los atractivos históricos, arquitectónicos y culturales de la región donde la ciudad nació. El itinerario tiene cinco puntos de embarque y desembarque para que el visitante conozca y experimente los lugares y servicios de los barrios recorridos.')?></p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'Arte y cultura')?></h6>
                                            <p><?= Yii::t('app', 'En el teatro, en la música o en las artes plásticas y visuales, son muchas y calificadas las producciones locales, nacionales e internacionales en esta tierra de importantes escritores, artistas y celebridades. Los conceptos audaces del premiado arquitecto portugués, Álvaro Siza Vieira, están en el edificio del museo de la Fundación Iberê Camargo (FIC), que ofrece un viaje visual increíble e integrado a las aguas del lago Guaíba. Además de la muestra permanente del pintor y grabador gaúcho Iberê Camargo (1914 - 1994), el complejo recibe exposiciones de importantes artistas brasileños y extranjeros.')?></p>
                                            <br/>
                                            <h6><?=Yii::t('app', 'Ciencia, tecnología e innovación con mucha diversión')?></h6>
                                            <p><?= Yii::t('app', 'Un verdadero parque temático que estimula la curiosidad científica y los sentidos de adultos y niños. Así es el museo de Ciencias y Tecnología de la Universidad Católica de Rio Grande do Sul (PUCRS), una de las más conceptuadas del país. Son tres pisos de pura interactividad en más de 800 experimentos científicos y tecnológicos, distribuidos en un área de 17,5 mil metros cuadrados. El espacio es referencia en América Latina.')?></p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'La noche en la capital')?></h6>
                                            <p><?= Yii::t('app', 'Eventos culturales, bares, pubs, cervecerías, cafés y casas de shows disputan la noche portoalegrense en ritmos y estilos variados. El circuito más refinado y de glamur está en la disputada Calçada da Fama, en el Barrio Moinhos de Vento, especie de Soho portoalegrense. Tiendas de moda sofisticadas, muchos bares, casas nocturnas, restaurantes y caserones del siglo passado componen el clima del barrio, lleno de árboles y agradable. En el barrio Cidade Baixa, la noche es de la bohemia y se mezcla con la significativa concentración de caseríos de arquitectura portuguesa, restaurados y transformados en bares, restaurantes y talleres de arte.  Las opciones nocturnas del Bom Fim, tradicional barrio judío, son preferidas por segmentos alternativos. Y en la Zona Sur, donde se concentran los clubes náuticos, el residencial barrio de Ipanema se destaca por la playa, bares y restaurantes de frente a las aguas del Lago Guaíba.')?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
            <div class="col-sm-2">
                <img src="images/icone-cultura.png" data-toggle="modal" data-target="#culturaModal" /><br/>
                <p class="link-title"><?= Yii::t('app', 'Cultural');?></p>

                <div class="modal fade" id="culturaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <span class="section-title"><h2><?=Yii::t('app', 'Cultural')?></h2></span>
                                            <p class="modal-source">* <?= Yii::t('app', 'Fuente')?>: <a href="http://www.turismo.rs.gov.br/conteudo/2670/guia-do-torcedor-guia-del-hincha-fan-guide">Secretaria de Turismo, Esporte e Lazer do Rio Grande do Sul</a></p>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row modal-text">
                                        <div class="col-md-6">
                                            <h6><?= Yii::t('app', 'BRIQUE DA REDENÇÃO')?></h6>
                                            <p>Av. José Bonifácio (Parque Farroupilha) – Bairro Bom Fim<br/><?= Yii::t('app', 'Página web')?>: www.briquedaredencao.com.br<br/><?= Yii::t('app', 'Feria al aire libre con artesanía, productos locales, artes plásticas, alimentación y anticuario.')?><br/><?= Yii::t('app', 'Horario de atención')?>: <?= Yii::t('app', 'Todos los domingos, de 09:00 a 18:00.')?></p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'CASA DE CULTURA MÁRIO QUINTANA')?></h6>
                                            <p>Rua dos Andradas, 736 - Centro Histórico<br/><?= Yii::t('app', 'Teléfono')?>: (5551) 3221.7147<br/><?= Yii::t('app', 'Página web')?>: www.ccmq.com.br<br/><?= Yii::t('app', 'Horario de atención')?>: <?= Yii::t('app', 'Lunes, de 14:00 a 21:00, De martes a viernes, de 09:00 a 21:00, Sábados y domingos, de 12:00 a 21:00')?><br/><?= Yii::t('app', 'La Casa de Cultura Mário Quintana es una de las principales referencias culturales de Porto Alegre, fuerte por su linda arquitectura. En el lugar funcionaba el antiguo Hotel Majestic, donde el poeta que le dio nombre al espacio, vivió durante años.')?></p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'CENTRO MUNICIPAL DE CULTURA, ARTE Y ENTRETENIMIENTO LUPICÍNIO RODRIGUES')?></h6>
                                            <p>Av. Érico Veríssimo, 307 – Menino Deus<br/><?= Yii::t('app', '')?><?= Yii::t('app', 'Teléfono')?>: (5551) 3289.8000<br/><?= Yii::t('app', 'Horario de atención')?>: <?= Yii::t('app', 'De lunes a viernes, de 08:30 a 10:00. Sábados, de 14:00 a 22:00. Horarios varían conforme programación.')?><br/><?= Yii::t('app', 'Integran el espacio del Centro Municipal de Cultura. Zaguán de Exposiciones, Espacio Alternativo de Exposiciones del Taller Libre, Biblioteca Pública Municipal Josué Guimarães, Teatro Renascença, Bar do Lupi y otros espacios culturales.')?></p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'FUNDACIÓN IBERÊ CAMARGO')?></h6>
                                            <p>Av. Padre Cacique, 2000 – Porto Alegre – RS<br/><?= Yii::t('app', 'Teléfono')?>: (5551) 3247.8000<br/><?= Yii::t('app', 'Página web')?>: www.iberecamargo.org.br<br/><?= Yii::t('app', 'Horario de atención')?>: <?= Yii::t('app', 'De martes a domingo, de 12:00 a 19:00. Jueves, hasta las 21:00. ')?><br/><?= Yii::t('app', 'Inaugurada en mayo de 2008, la sede de la Fundación fue proyectada por el portugués Álvaro Siza, uno de los arquitectos contemporáneos más importantes del mundo, para abrigar el acervo y todas las demás actividades. El edificio tiene salas exposiciones, atrio, reserva técnica, centro de documentación e investigación, taller de grabado, atelier del programa educativo, auditorio, tienda, cafetería y estacionamiento propio.')?></p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'FUNDACIÓN THEATRO SÃO PEDRO')?></h6>
                                            <p>Praça Marechal Deodoro, s/nº - Centro<br/><?= Yii::t('app', 'Teléfono')?>: (5551) 3227.5300<br/><?= Yii::t('app', 'Página web')?>: www.teatrosaopedro.com.br<br/><?= Yii::t('app', 'Una de las más bellas casas de espectáculos del mundo, que recibe a miles de visitantes, además del público que habitualmente prestigia los eventos de teatro, baile, música, exposiciones y otras manifestaciones culturales.')?></p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'MEMORIAL DE RIO GRANDE DO SUL')?></h6>
                                            <p>Rua 7 de Setembro, 1020<br/><?= Yii::t('app','Teléfono')?>: (5551) 3224.7210<br/><?= Yii::t('app', 'Página web')?>: www.memorial.rs.gov.br<br/><?= Yii::t('app', 'Horario de atención')?>:<?= Yii::t('app', 'De martes a sábados, de 10:00 a 18:00, Domingos y feriados, de 13:00 a 17:00.')?></p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'MERCADO PÚBLICO CENTRAL DE PORTO ALEGRE')?></h6>
                                            <p>Largo Glênio Peres, s/nº - Centro Histórico<br/><?= Yii::t('app', 'Página web')?>: www.mercadopublico.com.br<br/><?= Yii::t('app', 'Horario de funcionamiento del Mercado: De lunes a viernes, de 7:30 a 19:30. Sábados, de 07:30 a 18:30.')?><br/><?= Yii::t('app', 'Horario de funcionamiento dos restaurantes: De lunes a viernes, hasta las 24:00, Sábados, hasta las 18:30.')?><br/><?= Yii::t('app', 'Entrada gratis; Total accesibilidad.')?><br/><?= Yii::t('app', 'Una de las principales postales de Porto Alegre, el Mercado Público conmemora 140 años de existencia. Con sus paredes y bares centenarios, el viejo Mercado es un paseo en la memoria de la historia de la ciudad.')?></p>
                                            <br/>
                                        </div>
                                        <div class="col-md-6">
                                            <h6><?= Yii::t('app', 'MUSEO DE ARTE CONTEMPORÁNEO DE RS (MACRS)')?></h6>
                                            <p>Rua dos Andradas, 736<br/><?= Yii::t('app', 'Teléfono')?>: (5551) 3221.5900<br/><?= Yii::t('app', 'Página web')?>: www.macrs.blogspot.com.br<br/><?= Yii::t('app', 'Horario de atención')?>: <?= Yii::t('app','Lunes, de 14:00 a 19:00. De martes a viernes, de 10:00 a 19:00. Sábados, domingos y feriados, de 12:00 a 19:00.')?></p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'MUSEO DE ARTE DO RIO GRANDE DO SUL - MARGS')?></h6>
                                            <p>Praça da Alfândega, s/nº - Centro<br/><?= Yii::t('app', '')?><?= Yii::t('app', 'Teléfono')?>s: (5551) 3227.2311<br/><?= Yii::t('app', 'Página web')?>: www.margs.rs.gov.br<br/><?= Yii::t('app', 'Horario de atención')?>: <?= Yii::t('app', 'De martes a domingos, de 10:00 a 19:00, excepto en el caso de eventos especiales.')?></p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'MUSEO DE CIENCIA Y TECNOLOGÍA DE LA PUCRS')?></h6>
                                            <p>Av. Ipiranga, 6.681 – Prédio 40 – Partenon<br/><?= Yii::t('app', '')?><?= Yii::t('app', 'Página web')?>: www.pucrs.br/mct<br/><?= Yii::t('app', 'Horario de atención')?>: <?= Yii::t('app','Martes, miércoles y jueves, de 09:00 a 17:00. Viernes, de 09:00 a 21:00. Sábados, domingos y feriados, de 10:00 a 18:00.')?><br/><?= Yii::t('app','El museo tiene colecciones científicas en las áreas de zoología, botánica, paleontología y arqueología. Juntas, ellas componen un vasto testimonio de la biodiversidad y de la ocupación humana de la región sur de Brasil. También abriga espécimenes provenientes de otras regiones del país y del exterior.')?></p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'MUSEO DE COMUNICACIÓN HIPÓLITO JOSÉ DA COSTA')?></h6>
                                            <p>Rua dos Andradas, 959 - Centro<br/><?= Yii::t('app', '')?><?= Yii::t('app', 'Teléfono')?>: (5551) 3224.4252<br/><?= Yii::t('app', 'Página web')?>:museudacomunicacao.rs.gov.br<br/><?= Yii::t('app', 'Horario de atención')?>: <?= Yii::t('app','De martes a sábados, de 09:00 a 18:00.')?></p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'MUSEO JOAQUIM JOSÉ FELIZARDO')?></h6>
                                            <p>Av. João Alfredo, 582 – Cidade Baixa<br/><?= Yii::t('app', '')?><?= Yii::t('app', 'Teléfono')?>: (5551) 3289.8270<br/><?= Yii::t('app', 'Página web')?>: www.museudepoa.blogspot.com.br<br/><?= Yii::t('app', 'Horario de atención')?>: <?= Yii::t('app','Lunes, de 13:30 a 17:30. De martes a sábados, de 09:00 a 17:30. Entrada gratis.')?></p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'MUSEO JÚLIO DE CASTILHOS')?></h6>
                                            <p>Rua Duque de Caxias, 1205 - Centro Histórico<br/><?= Yii::t('app', '')?><?= Yii::t('app', 'Página web')?>: www.museujuliodecastilhos.rs.gov.br<br/><?= Yii::t('app', 'Horario de atención')?>: <?= Yii::t('app','De martes a sábados, de 10:00 a 17:00')?></p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'PINACOTECA RUBEN BERTA')?></h6>
                                            <p>Rua Duque de Caxias, 973 – Centro Histórico<br/><?= Yii::t('app', 'Teléfono')?>: (5551) 3221.8373</p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'SANTANDER CULTURAL')?></h6>
                                            <p>Rua 7 de Setembro, 1028<br/><?= Yii::t('app', 'Teléfono')?>: (5551) 3287.5500<br/><?= Yii::t('app', 'Página web')?>: santandercultural.com.br<br/><?= Yii::t('app', 'Horario de atención')?>: <?= Yii::t('app','De martes a sábado, de 10:00 a 19:00, Domingos y feriados, de 13:00 a 19:00')?></p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'USINA DO GASÔMETRO')?></h6>
                                            <p>Av. Presidente João Goulart, 551 – Centro Histórico<br/><?= Yii::t('app', '')?><?= Yii::t('app', 'Teléfono')?>: (5551) 3289.8100, 3289.8111, 3289.8112 y 3289.8140<br/><?= Yii::t('app','Correo Electrónico')?>: usina@smc.prefpoa.com.br</p>
                                            <br/>
                                            <h6><?= Yii::t('app', 'VIVA EL CENTRO A PIE')?></h6>
                                            <p><?= Yii::t('app', 'Horario de atención')?>: <?= Yii::t('app', 'Sábados, de 10:00 a 12:00.')?><br/><?= Yii::t('app', '')?><?= Yii::t('app','Lugar: Salidas del Caminho dos Antiquários (Rua Demétrio Ribeiro, enfrente a la Praça Daltro Filho, en el encuentro de las Ruas Coronel Genuíno y Marechal Floriano).')?><br/><?= Yii::t('app','Inscripciones: Las inscripciones se realizan por caminada por medio del correo Electrónico vivaocentroape@gmail.com y cada participante deberá donar 1kg de alimento no perecible.')?><br/>* <?= Yii::t('app','Si llueve se cancelará el paseo.')?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
            <div class="col-sm-2">
                <img src="images/icone-hotel.png" data-toggle="modal" data-target="#hotelModal" /><br/>
                <p class="link-title"><?= Yii::t('app', 'Hoteles');?></p>

                <div class="modal fade" id="hotelModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <span class="section-title"><h2><?=Yii::t('app', 'Hoteles')?></h2></span>
                                            <p class="modal-source">* <?= Yii::t('app', 'Fuente')?>: <a href="http://www.ufrgs.br/decor/pasghosp/Tarifas%20Hoteis%202012.pdf">UFRGS</a></p>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row modal-text">
                                        <div class="col-md-6">
                                            <h6>Arvoredo Residence</h6>
                                            <p>http://www.master-hoteis.com.br/<br/>Rua Fernando Machado, 347<br/>0800 707 6444 | (51) 3287 4466 | (51) 3027 5199</p>
                                            <br/>
                                            <h6>Blue Tree Towers Millenium</h6>
                                            <p>http://www.bluetree.com.br/hotel/blue-tree-towers-millenium-porto-alegre<br/>Av. Borges de Medeiros, 3120<br/>(51) 3026 2200</p>
                                            <br/>
                                            <h6>Coral Tower</h6>
                                            <p>http://www.coraltower.com.br/<br/>Av. Protásio Alves, 2966<br/>(51)  3014 3550</p>
                                            <br/>
                                            <h6>Everest Porto Alegre</h6>
                                            <p>http://www.everest.com.br/portoalegre/<br/>Rua Duque de Caxias, 1357<br/>0800 600 0995 | (51)  3215 9500 | (51)  3024 9500</p>
                                            <br/>
                                            <h6>Express Alberto Bins</h6>
                                            <p>http://www.master-hoteis.com.br/<br/>Av. Alberto Bins, 618<br/>0800 707 6444 | (51) 3287 4466 | (51)  3025 4000</p>
                                            <br/>
                                            <h6>Express Cidade Baixa</h6>
                                            <p>http://www.master-hoteis.com.br/<br/>Rua Sarmento Leite, 865<br/>0800 707 6444 | (51) 3287 4466 | (51) 3018 3636 </p>
                                            <br/>
                                            <h6>Express Grande Hotel</h6>
                                            <p>http://www.master-hoteis.com.br/<br/>Rua Riachuelo, 1070<br/>0800 707 6444 | (51) 3287 4466 | (51) 3287 4411</p>
                                            <br/>
                                            <h6>Express Perimetral</h6>
                                            <p>http://www.master-hoteis.com.br/<br/>Av. Loureiro da Silva, 1840<br/>0800 707 6444 | (51) 3287 4466 | (51) 3023 9503</p>
                                            <br/>
                                            <h6>Hotel Embaixador</h6>
                                            <p>http://www.embaixador.com.br/<br/>Rua Jerônimo Coelho, 354<br/>(51) 3215 6600</p>
                                            <br/>
                                            <h6>Hotel Ibis Porto Alegre Moinhos de Vento</h6>
                                            <p>http://www.ibis.com<br/>Rua Marquês do Herval, 540<br/>(51) 2112 2772</p>
                                            <br/>
                                            <h6>Holiday Inn – POA</h6>
                                            <p>http://www.ihg.com/holidayinn/hotels<br/>Av. Carlos Gomes, 565<br/>0800 770 0858 | (51) 3378 2727</p>
                                            <br/>
                                        </div>
                                        <div class="col-md-6">
                                            <h6>Hotel Laghetto Viverone Moinhos</h6>
                                            <p>http://www.hotellaghettomoinhos.com.br/<br/>Rua Dr. Vale, 579 <br/>(51) 2102 7272</p>
                                            <br/>
                                            <h6>Hotel Embaixador</h6>
                                            <p>http://www.embaixador.com.br/<br/>Rua Jerônimo Coelho, 354<br/>(51) 3215 6600</p>
                                            <br/>
                                            <h6>Master Bordini’s</h6>
                                            <p>http://www.master-hoteis.com.br/<br/>Rua Coronel Bordini, 707<br/>0800 707 6444 | (51) 3287 4466 | (51) 3083 1188 </p>
                                            <br/>
                                            <h6>Master Palace Express & Suítes</h6>
                                            <p>http://www.master-hoteis.com.br/<br/>Rua Senhor dos Passos, 221<br/>0800 707 6444 | (51) 3287 4466 | (51) 3027 5711</p>
                                            <br/>
                                            <h6>Mercure Porto Alegre Manhattan Hotel</h6>
                                            <p>http://www.mercure.com<br/>Rua Miguel Tostes, 30<br/>(51) 3024 3030</p>
                                            <br/>
                                            <h6>Plaza Porto Alegre</h6>
                                            <p>http://www.plazahoteis.com.br/<br/>Rua Senhor dos Passos, 154<br/>0800 70 75 292 | (51) 3220 8000</p>
                                            <br/>
                                            <h6>Plaza São Rafael</h6>
                                            <p>http://www.plazahoteis.com.br/saorafael/<br/>Av. Alberto Bins,<br/>0800 70 75 292 | (51) 3220 7000</p>
                                            <br/>
                                            <h6>Quality Hotel Porto Alegre</h6>
                                            <p>https://www.choicehotels.com<br/>Rua Comendador Caminha, 42<br/>(51) 3275 1555</p>
                                            <br/>
                                            <h6>Royal Palace Airport</h6>
                                            <p>http://www.master-hoteis.com.br/<br/>Av. Maranhão, 1061<br/>0800 707 6444 | (51) 3287 4466 | (51) 3079 4700 </p>
                                            <br/>
                                            <h6>Sheraton Porto Alegre Hotel</h6>
                                            <p>http://www.sheraton-poa.com.br/<br/>Rua Olavo Barreto Viana 18<br/>(51) 2121 6000</p>
                                            <br/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
            <div class="col-sm-2">
                <img src="images/icone-restaurante.png" data-toggle="modal" data-target="#restauranteModal" /><br/>
                <p class="link-title"><?= Yii::t('app', 'Restaurantes');?></p>

                <div class="modal fade" id="restauranteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <span class="section-title"><h2><?=Yii::t('app', 'Restaurantes')?></h2></span>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row modal-text">
                                        <div class="col-md-6">
                                            <h6>Armazém do Sabor</h6>
                                            <p>Avenida Independencia, 488<br/>(51) 3779 7601<br/>Buffet, Internacional</p>
                                            <br/>
                                            <h6>Atelier das Massas</h6>
                                            <p>http://www.atelierdemassas.com.br/<br/>Rua Riachuelo, 1482<br/>(51) 3225 1125<br/>Italiana </p>
                                            <br/>
                                            <h6>Barranco </h6>
                                            <p>http://www.restaurantebarranco.com.br/<br/>Av. Protásio Alves, 1578<br/>(51) 3331 6172<br/>Churrascaria/Steakhouse</p>
                                            <br/>
                                            <h6>Casa do Marquês</h6>
                                            <p>http://galeteriacasadomarques.com.br/site/<br/>Rua Marques do Pombal, 1814<br/>(51) 3343 4303<br/>Italiana, Pizza</p>
                                            <br/>
                                            <h6>Chicafundó</h6>
                                            <p>http://www.chicafundo.com.br/<br/>Rua Coronel Bordini, 232<br/>(51) 3028 6091<br/>Francesa</p>
                                            <br/>
                                            <h6>Del Barbieri</h6>
                                            <p>http://www.delbarbiere.com.br<br/>Rua Jerônimo Coelho, 188<br/>(51) 3019 4202<br/>Contemporânea</p>
                                            <br/>
                                            <h6>Galpão Crioulo</h6>
                                            <p>http://www.churrascariagalpaocrioulo.com.br/<br/>Parque Maurício Sirotsky Sobrinho, s/nº <br/>(51) 3226 8194<br/>Churrascaria/Steakhouse</p>
                                            <br/>
                                            <h6>Mandarinier Gastronomia</h6>
                                            <p>Rua Alberto Torres, 228<br/>(51) 3517 7703<br/>Francesa</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h6>NB Steak</h6>
                                            <p>http://www.nbsteak.com.br/<br/>Rua Ramiro Barcelos, 389<br/>(51) 3225 2205<br/>Churrascaria/Steakhouse</p>
                                            <br/>
                                            <h6>Parrilla del Sur</h6>
                                            <p>http://parrilladelsur.com.br/site<br/>Avenida Nilópolis, 111<br/>(51) 3012 7878</p>
                                            <br/>
                                            <h6>Churrascaria/Steakhouse </h6>
                                            <p>Restaurante Du’Attos Multipalco - Theatro São Pedro<br/>Praça Marechal Deodoro, s/n°<br/>(51) 3211 4000<br/>Cafeteria</p>
                                            <br/>
                                            <h6>Restaurante Gambrinus</h6>
                                            <p>http://www.gambrinus.com.br<br/>Mercado Publico, Loja 85<br/>(51) 3226 6914<br/>Internacional</p>
                                            <br/>
                                            <h6>Restaurante Manhattan - Edel Trade Center</h6>
                                            <p>http://www.edeltradecenter-rs.com.br/<br/>Av. Loureiro da Silva, 2001<br/>(51) 3028 1711<br/>Buffet, Internacional</p>
                                            <br/>
                                            <h6>Restaurante Vida</h6>
                                            <p>Rua Jeronimo Coelho, 298<br/>(51) 3228 9439<br/>Buffet, Internacional</p>
                                            <br/>
                                            <h6>Via Imperatore</h6>
                                            <p>http://www.viaimperatore.com.br<br/>Rua da Republica, 509<br/>(51) 3026 3071<br/>Italiana, Contemporânea</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
            <div class="col-sm-2">
                <img src="images/icone-mapa.png" data-toggle="modal" data-target="#mapaModal" /><br/>
                <p class="link-title"><?= Yii::t('app', 'Mapa de interés');?></p>

                <div class="modal fade" id="mapaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <span class="section-title"><h2><?=Yii::t('app', 'Mapa de interés')?></h2></span>
                                            <!--<p class="modal-source">* <?//= Yii::t('app', 'Fuente')?>: <a href="http://www.ufrgs.br/decor/pasghosp/Tarifas%20Hoteis%202012.pdf">UFRGS</a></p>-->
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row modal-text">
                                        <div class="col-md-12">
                                            <img src="images/map.jpg" class="map img-responsive">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
        </div>
    </section>