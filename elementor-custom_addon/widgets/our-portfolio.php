<?php
namespace ElementorHelloWorld\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Repeater;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Hello World
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class Our_Portfolio_Section extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'our-portfolio';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Our Portfolio', 'elementor-hello-world' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-gallery-grid';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'general' ];
	}

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends() {
		return [ 'elementor-contact' ];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _register_controls() {


		$this->start_controls_section(
			'tab_section_1_portfolio',
			[
				'label' => __( 'Tab 1', 'elementor-pro' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

			$this->add_control(
				'tab_1_category_portfolio',
				[
					'label' => __( 'Category name', 'elementor-hello-world' ),
					'type' => Controls_Manager::TEXT,
				]
			);

			$repeater = new Repeater();

					$repeater->add_control(
						'tab_1_logos_porfolio',
						[
							'label' => __( 'Logo', 'elementor-hello-world' ),
							'type' => Controls_Manager::MEDIA,
						]
					);

					$repeater->add_control(
						'tab_1_investment',
						[
							'label' => __( 'Investment', 'elementor-hello-world' ),
							'type' => Controls_Manager::TEXT,
						]
					);

					$repeater->add_control(
						'tab_1_uninvested',
						[
							'label' => __( 'Uninvested', 'elementor-hello-world' ),
							'type' => Controls_Manager::TEXT,
						]
					);

					$repeater->add_control(
						'tab_1_link',
						[
							'label' => __( 'Link', 'elementor-hello-world' ),
							'type' => Controls_Manager::TEXT,
						]
					);	

			$this->add_control(
				'tab_1__portfolio_list',
				[
					'label' => __( 'Portfolio', 'elementor-pro' ),
					'type' => Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
					'default' => [],
					'title_field' => '{{{ tab_1_investment }}}',
				]
			);	

		$this->end_controls_section();

//tab2-----------	

		$this->start_controls_section(
			'tab_section_2_portfolio',
			[
				'label' => __( 'Tab 2', 'elementor-pro' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

			$this->add_control(
				'tab_2_category_portfolio',
				[
					'label' => __( 'Category name', 'elementor-hello-world' ),
					'type' => Controls_Manager::TEXT,
				]
			);

			$repeater2 = new Repeater();

					$repeater->add_control(
						'tab_2_logos_porfolio',
						[
							'label' => __( 'Logo', 'elementor-hello-world' ),
							'type' => Controls_Manager::MEDIA,
						]
					);

					$repeater->add_control(
						'tab_2_investment',
						[
							'label' => __( 'Investment', 'elementor-hello-world' ),
							'type' => Controls_Manager::TEXT,
						]
					);

					$repeater->add_control(
						'tab_2_uninvested',
						[
							'label' => __( 'Uninvested', 'elementor-hello-world' ),
							'type' => Controls_Manager::TEXT,
						]
					);

					$repeater->add_control(
						'tab_2_link',
						[
							'label' => __( 'Link', 'elementor-hello-world' ),
							'type' => Controls_Manager::TEXT,
						]
					);

			$this->add_control(
				'tab_2__portfolio_list',
				[
					'label' => __( 'Portfolio', 'elementor-pro' ),
					'type' => Controls_Manager::REPEATER,
					'fields' => $repeater2->get_controls(),
					'default' => [],
					'title_field' => '{{{ tab_2_investment }}}',
				]
			);	

		$this->end_controls_section();


	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
		?>

		<div class="tab_header">
			<div class="tab_category_p tab_1_category tab_active" data-tab="1"><span><?=$settings['tab_1_category_portfolio']?></span></div>
			<div class="tab_category_p tab_2_category" data-tab="2"><span><?=$settings['tab_2_category_portfolio']?></span></div>
		</div>

		<div class="tab_section_p tab_section_p_1 current">
			<div class="tab_section_wrap tab_section_1_wrap">

				<?php 
					foreach ( $settings['tab_1__portfolio_list'] as $index => $item ) : 

						if ($item['tab_1_uninvested']) {
							$class = 'bglink';
						} else {
							$class ='';
						}
						?>	
						<?php if ($index<=9) :?>
							<div class="project_el_p project_el_p-<?=$index?> <?=$class?>  project__hovers_p_mobile" >
								<div class="project_el_main_p">
									<img src="<?=$item['tab_1_logos_porfolio']["url"]?>" class="tab_logos">

							    </div>
								<div class="project_el_hover_p">
									<div class="tab__investment"><?=$item['tab_1_investment']?></div>
									<?php if ($item['tab_1_uninvested']) { ?>
							        	<div class="tab__uninvested"><?=$item['tab_1_uninvested']?></div>
							        <?php } ?>
							        <?php if ($item['tab_1_link']) { ?>
							        	<a class="tab__link" href="<?=$item['tab_1_link']?>" target="_blank">#</a>
							        <?php } ?>
							    </div>						        
						    </div>
						 <?php endif; ?>
						<?php if ($index>9) :?>
							<div class="project_el_p project_el_p-<?=$index?> <?=$class?> collapse-tab1-section   project__hovers_p_mobile">
								<div class="project_el_main_p">
									<img src="<?=$item['tab_1_logos_porfolio']["url"]?>" class="tab_logos">

							    </div>
								<div class="project_el_hover_p">
									<div class="tab__investment"><?=$item['tab_1_investment']?></div>
									<?php if ($item['tab_1_uninvested']) { ?>
							        	<div class="tab__uninvested"><?=$item['tab_1_uninvested']?></div>
							        <?php } ?>
							        <?php if ($item['tab_1_link']) { ?>
							        	<a class="tab__link" href="<?=$item['tab_1_link']?>" target="_blank">#</a>
							        <?php } ?>
							        
							    </div>						        
						    </div>
						 <?php endif; ?>

						<?php
					endforeach;
				?>

				<div class="tab-image tab1-image">
					<img width="40" height="40" src="https://www.goclap.com/c2/wp-content/uploads/2020/06/c2_arrow.svg" class="attachment-full size-full" alt="" srcset="https://www.goclap.com/c2/wp-content/uploads//2020/06/c2_arrow.svg 150w, https://www.goclap.com/c2/wp-content/uploads//2020/06/c2_arrow.svg 300w, https://www.goclap.com/c2/wp-content/uploads//2020/06/c2_arrow.svg 1024w, https://www.goclap.com/c2/wp-content/uploads//2020/06/c2_arrow.svg 40w" sizes="(max-width: 40px) 100vw, 40px">
				</div>

			</div>
		</div>

		<div class="tab_section_p tab_section_p_2 ">
			<div class="tab_section_wrap tab_section_2_wrap">

				<?php 
					foreach ( $settings['tab_2__portfolio_list'] as $index => $item ) : 

						if ($item['tab_2_uninvested']) {
							$class = 'bglink';
						} else {
							$class ='';
						}
						?>	
						<?php if ($index<=9) :?>
							<div class="project_el_p project_el_p-<?=$index?> <?=$class?>  project__hovers_p_mobile">
								<div class="project_el_main_p">
									<img src="<?=$item['tab_2_logos_porfolio']["url"]?>" class="tab_logos">

							    </div>
								<div class="project_el_hover_p">
									<div class="tab__investment"><?=$item['tab_2_investment']?></div>
									<?php if ($item['tab_2_uninvested']) { ?>
							        	<div class="tab__uninvested"><?=$item['tab_2_uninvested']?></div>
							        <?php } ?>
							        <?php if ($item['tab_2_link']) { ?>
							        	<a class="tab__link" href="<?=$item['tab_2_link']?>" target="_blank">#</a>
							        <?php } ?>
							        
							    </div>						        
						    </div>
						 <?php endif; ?>
						<?php if ($index>9) :?>
							<div class="project_el_p project_el_p-<?=$index?> <?=$class?> collapse-tab2-section  project__hovers_p_mobile">
								<div class="project_el_main_p">
									<img src="<?=$item['tab_2_logos_porfolio']["url"]?>" class="tab_logos">

							    </div>
								<div class="project_el_hover_p">
									<div class="tab__investment"><?=$item['tab_2_investment']?></div>
									<?php if ($item['tab_2_uninvested']) { ?>
							        	<div class="tab__uninvested"><?=$item['tab_2_uninvested']?></div>
							        <?php } ?>
							        <?php if ($item['tab_2_link']) { ?>
							        	<a class="tab__link" href="<?=$item['tab_2_link']?>" target="_blank">#</a>
							        <?php } ?>
							        
							    </div>						        
						    </div>
						 <?php endif; ?>

						<?php
					endforeach;
				?>

				<div class="tab-image tab2-image">
					<img width="40" height="40" src="https://www.goclap.com/c2/wp-content/uploads/2020/06/c2_arrow.svg" class="attachment-full size-full" alt="" srcset="https://www.goclap.com/c2/wp-content/uploads//2020/06/c2_arrow.svg 150w, https://www.goclap.com/c2/wp-content/uploads//2020/06/c2_arrow.svg 300w, https://www.goclap.com/c2/wp-content/uploads//2020/06/c2_arrow.svg 1024w, https://www.goclap.com/c2/wp-content/uploads//2020/06/c2_arrow.svg 40w" sizes="(max-width: 40px) 100vw, 40px">
				</div>

			</div>
		</div>

		<style>
		.tab-image {
			width: 100%;
			text-align: center;
			    margin-top: 20px;
		}
		.tab__investment { font-size: 14px;}
		.tab__uninvested  { font-size: 14px;}
		.tab-image:hover {
			cursor: pointer;
		}
		img.button-tab-rotate {
			transform: rotate(180deg);
		}

		.collapse-tab1-section, .collapse-tab2-section {
			display: none;
		}
		.tab_section_p {
			display: none;
		}
		.tab_section_p.current {
			display: block
		}

			.project_el_main_p {
				display: flex;
			    flex-direction: column;
			    flex-wrap: wrap;
			    height: 100%;
			    /*padding: 50px;	*/			
			}

			.tab_category_p.tab_active {
				border-bottom: 5px solid;
				color: #51626f;
			}
			.tab_category_p {
				min-width: 200px;
    			text-align: center;
				padding: 10px;
				text-transform: uppercase;
				border-bottom: 5px solid #ccc;
				color: #cccccc;
			}
			.tab_category_p:hover {
				cursor: pointer;
			}
			.tab_header {
			    display: flex;
			    align-items: center;
			    justify-content: center;
			    margin-bottom: 40px;				
			}
			.tab_section_wrap {
			    display: flex;
			    flex-wrap: wrap;
			}

			.project_el_p {
				color: white;

				flex: 20%;
				position: relative;
flex-wrap: wrap;
    max-width: 269px;
    height: 269px;				
			}

			.project_el_p:hover {
				/*cursor: pointer;*/
			}	
			.project__hovers_p {
    			background-color: #6b93c2 !important;
    			color: white;
			}
			.project__hovers_p.bglink {
    			background-color: #9fa9b0 !important;
			}				
			.project__hovers_p .project_el_main_p {
				  visibility: hidden;
			  opacity: 0;
			  transition: visibility 0s, opacity 0.5s linear;
			  position: absolute;

			}
			.project__hovers_p .project_el_hover_p {
				visibility: visible;
  				opacity: 1;
			}
			.project_el_hover_p {
				  visibility: hidden;
				  opacity: 0;
				  transition: visibility 0s, opacity 0.5s linear;
			    height: 100%;
			    position: relative;
				text-transform: uppercase;
    			padding: 30px 40px;
			}
			.tab_regist_number {
				position: absolute;
			    bottom: 15px;
			    left: 15px;
			        color: #51626f;
			}
			.tab_regist_number:before {
				content: '';
				border-bottom: 1px solid;
				width: 30px;
			    height: 2px;
			    position: absolute;
			    top: -4px;
			}
			.project_el_hover_p div {
				width: 50%;
				    position: relative;
    			margin-bottom: 10px;
			}
			.tab__uninvested:before {
			    content: '';
			    border-bottom: 1px solid;
			    width: 30px;
			    height: 1px;
			    position: absolute;
			    top: -4px;
			}
			.project_el_hover_p a.tab__link {
				position: absolute;
    			bottom: 30px;
    			text-indent: -10000000px;
			}
			.project_el_hover_p a.tab__link::before {
				content: '\2795';
				position: absolute;
				width: 20px;
				height: 20px;
				border-radius: 50%;
				border: 1px solid;
				left: 0;
    color: #3c70c8;
        text-indent: 0;
    padding-left: 2px;
    font-size: 11px;
    line-height: 1.6;
			}


			@media (max-width: 1200px) {

			}

			@media (max-width: 998px) {

			}

			@media (max-width: 768px) {
				.project_el_p {
					flex: 100%;
				    flex-wrap: wrap;
				    max-width: 100%;
				    height: 100%;
				}
/*				.project_el_main_p, .project_el_hover_p {
					  visibility: visible;
				  opacity: 1;
				  position: relative;

				}*/	
				.project__hovers_p_mobile .project_el_hover_p,
				.project__hovers_p_mobile .project_el_main_p {
					visibility: visible;
	  				opacity: 1;
	  				position: relative;
	  				height: 269px;
	  				    float: left;
	  				    width: 50%;
				}	
				.project__hovers_p, 
				.project__hovers_p_mobile {
	    			background-color: #6b93c2 !important;
	    			color: white;
				}
				.project__hovers_p.bglink,
				.project__hovers_p_mobile.bglink {
	    			background-color: #9fa9b0 !important;
				}		
				.project_el_main_p {
					background-color: white;
				}									
			}

			@media (max-width: 480px) {
				.project_el_hover_p div {
				    width: 100%;
				}
			}

		</style>
		<script>
			jQuery(function ($) {
				$('.project_el_p').hover(function() {
					$(this).addClass('project__hovers_p');
				}, function() {
					$(this).removeClass('project__hovers_p');
				});

				$('.tab_category_p').click(function(){
					var tab_id = $(this).attr('data-tab');

					$('.tab_category_p').removeClass('tab_active');
					$('.tab_section_p').removeClass('current');

					$(this).addClass('tab_active');
					$(".tab_section_p_"+tab_id).addClass('current');
				});

				$(document).on('click', '.tab1-image img', function(e) {
				    var $target = $(e.currentTarget);
				    $('.collapse-tab1-section').slideToggle();
				    $(this).toggleClass('button-tab-rotate');
				});

				$(document).on('click', '.tab2-image img', function(e) {
				    var $target = $(e.currentTarget);
				    $('.collapse-tab2-section').slideToggle();
				    $(this).toggleClass('button-tab-rotate');
				});

			}); 
		</script>

		<?php
	}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _content_template() {
		?>

		<?php
	}
}
