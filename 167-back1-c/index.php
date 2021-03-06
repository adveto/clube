
<!DOCTYPE html>
<html lang="pt-BR">
<head>

	<meta charset="UTF-8">
	<title>Clube da Renda</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>

		img.wp-smiley, img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}

		.inp{
            border-radius: 8px !important;
            height: 25px !important;
            border:  solid #bfa6a6 1px !important;
            margin-top: 9px !important;
            height: 45px !important;
            font-size: 1.5rem !important;
            padding-left: 14px !important;
            padding-right: 14px !important;
            width: 100% !important;
        }

        .inp:focus{
            outline: none !important;
            border:  solid #111010 2px !important;
        }

        #for{
            margin-top: 40px;
            justify-content: center;
            flex-direction: column;
            align-self: center;
            width: 90%;
            height: fit-content;
            margin: auto;
            display: flex;    
        }

        .btn{
            text-decoration: none;
            background-color: #6db54f !important;
            border: none !important;
            color: white !important;
            width: fit-content !important;
            padding: 35px 30px 35px 30px !important;
            font-size: 1.5rem !important ;
            border-radius: 10px !important;
            margin: auto !important;
            line-height: 21px !important;
            text-align: center;
        }

        
        .btn:hover{
            background-color: #2f5b1c ;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 0% auto;
            padding: 5px;
            width: 30% !important;
            border: solid #e49e3f 20px !important; 
        }

        @media screen and (max-width: 800px) {

            #for{
               width: 90%;
            }

            .modal-content{
               width: 95% !important;
            }

        }

        .modal {
            display: none; 
            position: fixed; 
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: hidden; 
            background-color: rgb(0,0,0); 
       	    background-color: rgba(0,0,0,0.4);
    	}

        .infusion .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
     	}

        .close:hover, .close:focus {
        	color: black;
    		text-decoration: none;
            cursor: pointer;
     	}

     	.accordion-button{
     		font-size: 1.3rem !important;
     	}

	</style>


	<link rel='stylesheet' id='elementor-frontend-css'  href='https://clubedarenda.com/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.3.1' media='all' />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link href="styles/extra43a0.css?v5" rel="stylesheet" />
	<link href="styles/extra43a02.css?v5" rel="stylesheet" />
	<link href="styles/extra43a03.css?v5" rel="stylesheet" />
	<link href="styles/extra43a0.css?v3" rel="stylesheet" />

	<style id='elementor-frontend-inline-css'>

		@font-face{
			font-family:eicons;
			src:url(https://clubedarenda.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0);
			src:url(https://clubedarenda.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0#iefix) format("embedded-opentype"),url(https://clubedarenda.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.10.0) format("woff2"),url(https://clubedarenda.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.10.0) format("woff"),url(https://clubedarenda.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.10.0) format("truetype"),url(https://clubedarenda.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.10.0#eicon) format("svg");
			font-weight:400;
			font-style:normal
		}


		@media (min-width: 500px){
			.vid{
				width: 70%;
				margin: auto;
			}
		}

	</style>

	<style type="text/css">

        .newclass {
            visibility: visible !important;
            display: all !important;
        }

        .sumiu {

            display: none;
        }


      </style>

	<link rel='stylesheet' id='elementor-post-277-css'  href='https://clubedarenda.com/wp-content/uploads/elementor/css/post-277.css?ver=1631051171' media='all' />

	<link rel='stylesheet' id='elementor-global-css'  href='https://clubedarenda.com/wp-content/uploads/elementor/css/global.css?ver=1631051172' media='all' />
	<link rel='stylesheet' id='elementor-post-1019-css'  href='https://clubedarenda.com/wp-content/uploads/elementor/css/post-1019.css?ver=1641561603' media='all' />
	
	<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=5.5.1' media='all' />
	<link rel='stylesheet' id='elementor-icons-shared-0-css'  href='https://clubedarenda.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3' media='all' />
	<link rel='stylesheet' id='elementor-icons-fa-solid-css'  href='https://clubedarenda.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3' media='all' />
	<script src='https://clubedarenda.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp' id='jquery-core-js'></script>
	<script src='https://clubedarenda.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1' id='jquery-migrate-js'></script>
	<script src='https://clubedarenda.com/wp-content/plugins/optimizePressPlugin/lib/js/op-jquery-base-all.min.js?ver=2.5.19.1' id='optimizepress-op-jquery-base-all-js'></script>


    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" /></head>
	<body class="page-template page-template-elementor_canvas page page-id-1019 wp-embed-responsive op-plugin singular image-filters-enabled elementor-default elementor-template-canvas elementor-kit-277 elementor-page elementor-page-1019">
		<div data-elementor-type="wp-page" data-elementor-id="1019" class="elementor elementor-1019" data-elementor-settings="[]">
			<div class="elementor-section-wrap">
				<section class="elementor-section elementor-top-section elementor-element elementor-element-72c63487 elementor-section-boxed elementor-section-height-default elementor-section-height-default sumiu" data-id="72c63487" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="background-color: #000000 !important">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4a19d535" data-id="4a19d535" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-57115f0 elementor-widget elementor-widget-image" data-id="57115f0" data-element_type="widget" data-widget_type="image.default">
									<div class="elementor-widget-container">
										<img width="237" height="236" src="https://clubedarenda.com/wp-content/uploads/2022/01/7-dias-a.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://clubedarenda.com/wp-content/uploads/2022/01/7-dias-a.png 237w, https://clubedarenda.com/wp-content/uploads/2022/01/7-dias-a-150x150.png 150w" sizes="(max-width: 237px) 100vw, 237px" />													
									</div>
								</div>
								<div class="elementor-element elementor-element-20742907 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading" data-id="20742907" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h2 class="elementor-heading-title elementor-size-default">
											OU <SPAN style="color: #479EF8">VOC?? TEM RESULTADO</SPAN>, OU EU <SPAN style="color: #479EF8">DEVOLVO</span> TODO SEU DINHEIRO
										</h2>		
									</div>
								</div>
								<div class="elementor-element elementor-element-1ed3b12c elementor-button-success elementor-align-center elementor-widget elementor-widget-button" data-id="1ed3b12c" data-element_type="widget" data-widget_type="button.default">
									<div class="elementor-widget-container">
										<div class="elementor-button-wrapper">
											<a id="myBtn1" target="_blank" class="elementor-button-link elementor-button elementor-size-md" role="button">
												<span class="elementor-button-content-wrapper">
													<span class="elementor-button-text">QUERO FAZER PARTE DO CLUBE</span>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-23fd66e9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="23fd66e9" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1110daee" data-id="1110daee" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-0ca6169 elementor-widget elementor-widget-html" data-id="0ca6169" data-element_type="widget" data-widget_type="html.default">
									<div class="elementor-widget-container">
			   							<style type="text/css">
       										h1:not(.site-title):before, h2:before {
           										background: #46464600 !important;
           									}
   										</style>
   
   										<script type="text/javascript">
											var back_redirect_back_link = 'https://clubedarenda.com/167-back2-c/';

											history.pushState({},"",location.href);
		    								history.pushState({},"",location.href);

		    								window.onpopstate = function(){
		        								setTimeout(function () {
		        									location.href = back_redirect_back_link;
		        								},1);
		    								};
    									</script>		
    								</div>
								</div>
								<div class="elementor-element elementor-element-6d9a0437 elementor-widget elementor-widget-text-editor" data-id="6d9a0437" data-element_type="widget" data-widget_type="text-editor.default">
									<div class="elementor-widget-container">
										<h4>
											<span style="margin: 0px; padding: 0px; border: 0px; font-family: Oswald, sans-serif; font-stretch: inherit; line-height: inherit; vertical-align: baseline;"><span style="font-weight: normal;">A</span></span><span style="font-style: italic; color: #f7f200; font-family: Oswald, sans-serif; font-weight: 900;"> Tecnologia </span><span style="margin: 0px; padding: 0px; border: 0px; font-family: Oswald, sans-serif; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-weight: normal;">que vai</span><span style="font-size: 1.125em; letter-spacing: -0.02em; margin: 0px; padding: 0px; border: 0px; font-family: Oswald, sans-serif; font-stretch: inherit; line-height: inherit; vertical-align: baseline; color: #f7f200;"><span style="font-style: italic;"><br /></span></span><span style="font-size: var(--heading--font-size-h4); letter-spacing: var(--heading--letter-spacing-h4); margin: 0px; padding: 0px; border: 0px; font-family: Oswald, sans-serif; font-stretch: inherit; line-height: inherit; vertical-align: baseline; color: #f7f200;"><span style="font-style: italic;">Eliminar o Emprego de Milh??es de Brasileiros</span></span><span style="font-size: var(--heading--font-size-h4); letter-spacing: var(--heading--letter-spacing-h4); margin: 0px; padding: 0px; border: 0px; font-family: Oswald, sans-serif; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-weight: normal;"> j?? est?? </span><span style="font-size: var(--heading--font-size-h4); font-weight: var(--heading--font-weight-strong); letter-spacing: var(--heading--letter-spacing-h4); margin: 0px; padding: 0px; border: 0px; font-family: Oswald, sans-serif; font-stretch: inherit; line-height: inherit; vertical-align: baseline;"><i>escondida</i></span><span style="font-size: var(--heading--font-size-h4); letter-spacing: var(--heading--letter-spacing-h4); margin: 0px; padding: 0px; border: 0px; font-family: Oswald, sans-serif; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-weight: normal;"> no seu celular.</span>
										</h4>
										<div class="vid">
    										<div class="responsive-video">                 
												<div id="loadingVideo" style="display:none;"></div>
	 											<div id="cfs" style="display:block;"></div>
	 											<div class="cov"></div>
	 											<div class="covall"></div>
	 											<div id="player" style="border: #033558 solid 3px"></div>
    										</div>
										</div>						
									</div>
								</div>
						
							
						
								<div class="elementor-element elementor-element-dad58f1 elementor-widget elementor-widget-text-editor" data-id="dad58f1" data-element_type="widget" data-widget_type="text-editor.default" style="margin-bottom: 3px !important;">
									<div class="elementor-widget-container" style="margin-bottom: 0px !important;">
										<h6 style="margin-bottom: 0px !important;">
											<span style="font-family: Oswald, sans-serif; font-weight: normal;">E esta</span><span style="font-style: italic; color: #479ef8; font-family: Oswald, sans-serif; font-weight: 900;"> NOVA REVOLU????O TECNOL??GICA <br /></span><span style="margin: 0px; padding: 0px; border: 0px; font-family: Oswald, sans-serif; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-weight: normal;">pode te deixar </span><span style="font-size: var(--heading--font-size-h4); letter-spacing: var(--heading--letter-spacing-h4); margin: 0px; padding: 0px; border: 0px; font-family: Oswald, sans-serif; font-stretch: inherit; line-height: inherit; vertical-align: baseline; color: #f7f200;"><span style="font-style: italic;">RICO.</span></span>
										</h6>						
									</div>
								</div>
								<div class="elementor-element elementor-element-24c027ca elementor-widget elementor-widget-text-editor" data-id="24c027ca" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-text-editor elementor-clearfix">
                                          	<p style="line-height: 1.4;text-align: center;"><span style="color: #F7F200; font-family: &#39;Open Sans&#39;, sans-serif; font-size: 15px; font-weight: bolder; caret-color: #ffbe00;">Clique no Play e Assista Este V??deo<br>Antes que os ???Poderosos??? Tirem do Ar.<br></span></p>
                                       	</div>
                                    </div>
                                </div>
								<section class="elementor-element elementor-element-61eeba52 elementor-button-success elementor-align-center elementor-widget elementor-widget-button sumiu" data-id="61eeba52" data-element_type="widget" data-widget_type="button.default">
									<div class="elementor-widget-container">
										<div class="elementor-button-wrapper">
											<a id="myBtn" target="_blank" class="elementor-button-link elementor-button elementor-size-md" role="button">
												<span class="elementor-button-content-wrapper">
													<span class="elementor-button-text">
														QUERO FAZER PARTE DO CLUBE
													</span>
												</span>
											</a>
										</div>
									</div>
								</section>
								<div class="elementor-element elementor-element-50bb3d2c elementor-widget elementor-widget-text-editor" data-id="50bb3d2c" data-element_type="widget" data-widget_type="text-editor.default">
									<div class="elementor-widget-container">
										<p>
											<span style="color: #ffffff; font-family: 'Russo One', sans-serif; text-shadow: #000000 0px 0px 3px; font-size: 20px;">???? </span><span style="font-family: Oswald, sans-serif; font-size: 15.644420623779297px; letter-spacing: -0.31288841366767883px;">Verifique se o seu ??udio est?? ligado&#8230;</span>
										</p>						
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="elementor-section elementor-top-section elementor-element elementor-element-7085e66 elementor-section-boxed elementor-section-height-default elementor-section-height-default sumiu" data-id="7085e66" data-element_type="section">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7ece526b" data-id="7ece526b" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-420e5c3 elementor-widget elementor-widget-heading" data-id="420e5c3" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h2 class="elementor-heading-title elementor-size-large">
											QUEM EXECUTA, <br>TEM RESULTADO!
										</h2>		
									</div>
								</div>
								<div class="elementor-element elementor-element-6ab66293 elementor-widget__width-initial elementor-arrows-position-inside elementor-pagination-position-outside elementor-widget elementor-widget-image-carousel" data-id="6ab66293" data-element_type="widget" data-settings="{&quot;slides_to_show&quot;:&quot;1&quot;,&quot;slides_to_show_mobile&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;speed&quot;:500}" data-widget_type="image-carousel.default">
									<div class="elementor-widget-container">
										<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
							  				<div class="carousel-inner">
									    		<div class="carousel-item active" data-bs-interval="3000">
										      		<img src="imagens/dp1.png" class="d-block w-100" alt="">
										    	</div>
										    	<div class="carousel-item" data-bs-interval="3000">
										      		<img src="imagens/dp2.png" class="d-block w-100" alt="">
										    	</div>
										    	<div class="carousel-item" data-bs-interval="3000">
										      		<img src="imagens/dp3.png" class="d-block w-100" alt="">
										    	</div>
										    	<div class="carousel-item" data-bs-interval="3000">
										      		<img src="imagens/dp4.png" class="d-block w-100" alt="">
										    	</div>
										    	<div class="carousel-item" data-bs-interval="3000">
										      		<img src="imagens/dp5.png" class="d-block w-100" alt="">
										    	</div>
										    	<div class="carousel-item" data-bs-interval="3000">
										      		<img src="imagens/dp6.png" class="d-block w-100" alt="">
										    	</div>
										    	<div class="carousel-item" data-bs-interval="3000">
										      		<img src="imagens/dp7.jpg" class="d-block w-100" alt="">
										    	</div>
										  	</div>
										  	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
										   		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										   		<span class="visually-hidden">Previous</span>
										  	</button>
										  	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
										    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
										    	<span class="visually-hidden">Next</span>
										  	</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<section class="elementor-section elementor-top-section elementor-element elementor-element-153b3094 elementor-section-boxed elementor-section-height-default elementor-section-height-default sumiu" data-id="153b3094" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6ff15bd8" data-id="6ff15bd8" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-1395521b elementor-widget elementor-widget-heading" data-id="1395521b" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h2 class="elementor-heading-title elementor-size-large">
											PERGUNTAS FREQUENTAS<br>
										</h2>		
									</div>
								</div>
								<div class="accordion" id="accordionExample" style="width:100% !important">
								  	<div class="accordion-item" >
								    	<h2 class="accordion-header" id="headingOne">
								      		<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="width:100% !important">
								        		O que ?? o Clube da Renda?
								      		</button>
								    	</h2>
								    	<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							     	 		<div class="accordion-body">
								        		Infelizmente n??o se pode explicar o que ?? o <strong>Clube da Renda,</strong> voc?? precisa ver por si pr??prio. Assista ao V??deo no Topo da P??gina, esta ?? a <strong>??NICA</strong> forma de voc?? entender como <strong>tudo funciona.</strong>
								      		</div>
								    	</div>
								  	</div>
								  	<div class="accordion-item">
								    	<h2 class="accordion-header" id="headingTwo">
								      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								        		O que preciso para entrar no Clube?
								      		</button>
								    	</h2>
								    	<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								      		<div class="accordion-body">
								        		<ul>
								        			<li>De um Smartphone Android ou IOS fabricado <strong>ap??s 2017.</strong></li>
								        			<li>Uma <strong>Conta Corrente</strong> em seu Nome para Sacar os seus Ganhos.</li>
								        			<li>Ao menos <strong>R$ 60,00</strong> para come??ar.</li>
								        			<li>Ter <strong>VONTADE</strong> de participar e <strong>Receber Pagamentos</strong> em Conta.</li>
								        		</ul>
								      		</div>
								    	</div>
								  	</div>
								  	<div class="accordion-item">
								    	<h2 class="accordion-header" id="headingThree">
								      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								        		Quanto eu Posso Ganhar?
								      		</button>
								    	</h2>
								    	<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
								      		<div class="accordion-body">
								        		O resultado <strong>pode variar</strong> de pessoa para pessoa.
								        		<br>
												S?? no <strong>??ltimo ano,</strong> o Grupo de Pessoas que acompanham o meu trabalho no Clube da Renda, sacou entre <strong>R$1.300,00 a R$7.000,00 EXTRAS por Semana.</strong>
												<br>
												Isso foi a fase de Testes. <strong>Agora</strong> a estrat??gia <strong>est?? otimizada</strong> com potencial nunca isto antes.
								      		</div>
								    	</div>
								  	</div>
								  	<div class="accordion-item">
								    	<h2 class="accordion-header" id="headingFour">
								      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								        		Como entro para o Clube?
								      		</button>
								    	</h2>
								    	<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
								      		<div class="accordion-body">
								        		A <strong>??NICA FORMA</strong> ?? atrav??s do <strong>Bot??o Abaixo:</strong> ???Quero Fazer Parte do Clube???.
								      		</div>
								    	</div>
								  	</div>
								  	<div class="accordion-item">
								    	<h2 class="accordion-header" id="headingFive">
								      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								        		Como vou ter Acesso?
								      		</button>
								    	</h2>
								    	<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
								      		<div class="accordion-body">
								        			O seu acesso ?? enviado <strong>IMEDIATAMENTE</strong> ap??s a confirma????o da inscri????o, atrav??s de <strong>e-mail e SMS.</strong>
								      		</div>
								    	</div>
								  	</div>
								  	<div class="accordion-item">
								    	<h2 class="accordion-header" id="headingSix">
								      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
								        		Quanto tempo demora para chegar o meu acesso?
								      		</button>
								    	</h2>
								    	<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
								      		<div class="accordion-body">
								        		PIX/Cart??o de Cr??dito: Acesso <strong>IMEDIATO</strong>
								        		<br>
												Boleto Banc??rio: Acesso <strong>ap??s Confirma????o</strong> do Pagamento (1 a 3 dias ??teis).
								      		</div>
								    	</div>
								  	</div>
								  	<div class="accordion-item">
								    	<h2 class="accordion-header" id="headingEight">
								      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
								        			Como vou Aprender a usar o Clube da Renda
								      		</button>
								    	</h2>
								    	<div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
								      		<div class="accordion-body">
								        			Atrav??s do <strong>aplicativo oficial</strong> da nossa comunidade. J?? est?? <strong>tudo pronto</strong> e <strong>pr??-configurado</strong> para voc?? usar. Dentro do App voc?? tamb??m tem acesso a v??deo aulas <strong>ensinando tudo,</strong> clique por clique.
								      		</div>
								    	</div>
								  	</div>
								  	<div class="accordion-item">
								    	<h2 class="accordion-header" id="headingTen">
								      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
								        		Por Quanto Tempo ?? o Acesso?
								      		</button>
								    	</h2>
								    	<div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
								      		<div class="accordion-body">
								        		O <strong>Acesso ?? Anual,</strong> por 12 Meses voc?? tem acesso <strong>ILIMITADO</strong> aos c??digos gerados de pagamentos em conta.
								      		</div>
								    	</div>
								  	</div>
								  	<div class="accordion-item">
								    	<h2 class="accordion-header" id="headingEleven">
								      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
								        		Vou ter suporte se precisar?
								      		</button>
								    	</h2>
								    	<div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
								      		<div class="accordion-body">
								        		Sim, voc?? contar?? com canal de <strong>suporte todos os dias da semana</strong> para te ajudar em tudo o que voc?? precisar.
								      		</div>
								    	</div>
								  	</div>
								  	<div class="accordion-item">
								    	<h2 class="accordion-header" id="headingTwelve">
								      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
								        		Em quais dispositvos o Clube da Renda funciona?
								      		</button>
								    	</h2>
								    	<div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
								      		<div class="accordion-body">
								        		Em <strong>qualquer celular</strong> Android/IOS fabricado <strong>ap??s 2017.</strong> Funciona tamb??m em <strong>Tablets/Desktops.</strong>
								      		</div>
								    	</div>
								  	</div>
								  	<div class="accordion-item">
								    	<h2 class="accordion-header" id="headingThirteen">
								      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
								        		Tenho garantia? Posso pedir Reembolso?
								      		</button>
								    	</h2>
								    	<div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
								      		<div class="accordion-body">
								        		Te damos <strong>garantia de funcionamento da ferramenta.</strong> Voc?? pode estar optando pelo cancelamento/reembolso da compra em um prazo de <strong>at?? sete dias.</strong> Para isso voc?? dever?? contatar nossa central de relacionamento e suporte.
								      		</div>
								    	</div>
								  	</div>
								</div>
							<div class="elementor-element elementor-element-64935bbe elementor-button-success elementor-align-center elementor-widget elementor-widget-button" data-id="64935bbe" data-element_type="widget" data-widget_type="button.default">
								<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
										<a id="myBtn2" target="_blank" class="elementor-button-link elementor-button elementor-size-md" role="button">
											<span class="elementor-button-content-wrapper">
												<span class="elementor-button-text">
													QUERO FAZER PARTE DO CLUBE
												</span>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="elementor-section elementor-top-section elementor-element elementor-element-2d534cb elementor-section-boxed elementor-section-height-default elementor-section-height-default sumiu" data-id="2d534cb" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-22159f6d" data-id="22159f6d" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-234100c elementor-widget elementor-widget-text-editor" data-id="234100c" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<p>PRECISA DE AJUDA?</p>						
								</div>
							</div>
							<div class="elementor-element elementor-element-2074260 elementor-widget elementor-widget-text-editor" data-id="2074260" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<a href="https://faqfacil.com/clubedarenda2/" target="_blank" style="text-decoration: underline;color: white;">
										ACESSE NOSSO FAQ
									</a>						
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-c8a6224" data-id="c8a6224" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-8e21cc3 elementor-widget elementor-widget-text-editor" data-id="8e21cc3" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<p>
										COMPRE COM SEGURAN??A
									</p>						
								</div>
							</div>
							<div class="elementor-element elementor-element-36b491f elementor-widget elementor-widget-image" data-id="36b491f" data-element_type="widget" data-widget_type="image.default">
								<div class="elementor-widget-container">
									<img width="300" height="93" src="https://clubedarenda.com/wp-content/uploads/2022/01/site-seguro-300x93-1.png" class="attachment-medium size-medium" alt="" loading="lazy" />	
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-eb99808" data-id="eb99808" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-15f4da8 elementor-widget elementor-widget-text-editor" data-id="15f4da8" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<p>
										FORMAS DE PAGAMENTO
									</p>						
								</div>
							</div>
							<div class="elementor-element elementor-element-ee0dd7a elementor-widget elementor-widget-image" data-id="ee0dd7a" data-element_type="widget" data-widget_type="image.default">
								<div class="elementor-widget-container">
									<img width="310" height="147" src="https://clubedarenda.com/wp-content/uploads/2022/01/pagamentos.fw_-1.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://clubedarenda.com/wp-content/uploads/2022/01/pagamentos.fw_-1.png 310w, https://clubedarenda.com/wp-content/uploads/2022/01/pagamentos.fw_-1-300x142.png 300w" sizes="(max-width: 310px) 100vw, 310px" />											
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

	<link rel='stylesheet' id='e-animations-css'  href='https://clubedarenda.com/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.3.1' media='all' />
	<script src="scripts/jquery-3.3.1.js?v=5"></script>
	<script src="scripts/youtube-mobilefb1b.js?v=7"></script>
	<script src="scripts/youtube-mobilefb2b.js?v=5"></script>
	<script src="scripts/youtube-mobilefb3b.js?v=5"></script>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<div id="myModal" class="modal">

         <div class="modal-content">
            <span class="close">&times;</span>
            <p style="text-align:center; font-size: 1.8rem;font-weight: bold;line-height: 28px;">Valide sua licen??a:</p>
			<form id="for" accept-charset="UTF-8" action="https://acesso.cdrfacil.com/redirect"   method="GET" style="margin-top: 30px;">

				<input name="url" type="hidden" value="https://appdarenda.com/clube-red1/" />
				<input name="src" type="hidden" value="<?php echo $_GET['src'] ; ?>" />
           		<input name="utm_source" type="hidden" value="<?php echo $_GET['utm_source'] ; ?>" />

				<div class="infusion-field" style="margin: auto;">
				   <label for="inf_field_FirstName">Nome</label>
				   <br>
				   <input required class="inp" id="inf_field_FirstName" name="nome" placeholder="Digite seu nome aqui" type="text" autofocus="true"/>
				</div>

				<div class="infusion-field" style="margin: auto;margin-top: 20px;">
				   <label for="inf_field_Email">E-mail </label>
				   <br>
				   <input required class="inp" id="inf_field_Email" name="email" placeholder="Digite seu melhor e-mail" type="text"  />
				</div>

				<div class="infusion-field" style="margin: auto;margin-top:20px;">
				   <label for="inf_field_Phone1">Telefone</label>
				   <br>
				   <input required class="inp" id="inf_field_Phone1" name="telefone" placeholder="(xx) x xxxx-xxxx" maxlength="16" type="text"  />
				   <input class="inp" id="src" name="src" type="hidden"  />
				</div>

				<div>
				   <div>&nbsp;</div>
				</div>

				<div class="infusion-submit" style="margin: auto;margin-top:10px;margin-bottom: 20px;">
				   <button class="btn" type="submit">ACESSO IMEDIATO >></button>
				</div>

		 </form>
         </div>

      </div>


     

      <script>

        time = 300000; //segundos x mil... por exemplo: 60 segundos = 60.000ms

        var cookieName = "_SHOULD_WAIT"
        //Get the cookies and convert them into an object
        var cookies = document.cookie.split('; ').reduce((prev, current) => {
          const [name, value] = current.split('=');
          prev[name] = value;
          return prev
        }, {});

        //Create a cookie with the expiring date in days
        function createCookie(name, value, days) {
          var date, expires;
          if (days) {
            date = new Date();
            date.setTime(date.getTime()+(days*24*60*60*1000));
            expires = "; expires="+date.toGMTString();
          } else {
            expires = "";
          }
          document.cookie = name+"="+value+expires+"; path=/";
        }

        if(cookies[cookieName] === undefined || cookies[cookieName] === null){
          createCookie(cookieName, "TRUE", 30)//The value is not really important since we only need to know if the cookie exist
          setTimeout(function() {
            $("section").removeClass("sumiu");
          }, time);
        }else{
          $("section").removeClass("sumiu");
        }


            var input = document.querySelector('#inf_field_Phone1');


            var t = 0;

            

            input.addEventListener('input', function()
            {
               var q = input.value.length-1;
               n = input.value[q];
               

               if(isNaN(Number(n))){
                  if (t != 0) {
                     t--;
                  } 

                  input.value = input.value.substring(0, q);
                  
                  
               }else{


               if (input.value.length == 2) {
                  
                  if (t==0) {
                     input.value = "("+input.value+") ";
                     t++;
                  }else{
                     t = 0;
                  }
                  
               }

               if (input.value.length == 6) {

                  if (t==1) {
                     input.value = input.value+" ";
                     t++;
                  }else{
                     t = 1;
                  }
                  
               }

               if (input.value.length == 11) {
                  if (t==2) {
                     input.value = input.value+"-";
                     t++;
                  }else{
                     t = 2;
                  }

               }

            
            }
            });
         

            var query = location.search.slice(1);

            var src1 = document.querySelector('#src');
            

            var partes = query.split('&');
            var data = {};
            partes.forEach(function (parte) {
            var chaveValor = parte.split('=');
            var chave = chaveValor[0];
            var valor = chaveValor[1];


            if (chave == "src") {
               src1.value = valor;
            } 

         });

            var modal = document.getElementById("myModal");
            var btn = document.getElementById("myBtn");
            var btn1 = document.getElementById("myBtn1");
            var btn2 = document.getElementById("myBtn2");
            var span = document.getElementsByClassName("close")[0];
            //var act = "https://kc283.infusionsoft.com/app/form/process/7efe990b5486032ee94ae1f6cf8d9402?" + query;
            
            btn.onclick = function() {
              modal.style.display = "block";
              document.getElementById("inf_field_FirstName").focus();
              alterar();
            }

            btn1.onclick = function() {
              modal.style.display = "block";
              alterar();
            }

            btn2.onclick = function() {
              modal.style.display = "block";
              alterar();
            }
            
            span.onclick = function() {
              modal.style.display = "none";
            }

            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }

            function alterar(){
               $("#for").attr("action", act);
            }


      </script>

</body>
</html>
