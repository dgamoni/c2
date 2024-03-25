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
class Our_Funds_Section extends Widget_Base {

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
		return 'our-funds';
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
		return __( 'Our Funds', 'elementor-hello-world' );
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
			'tab_section_1',
			[
				'label' => __( 'Tab 1', 'elementor-pro' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

			$this->add_control(
				'tab_1_category',
				[
					'label' => __( 'Category name', 'elementor-hello-world' ),
					'type' => Controls_Manager::TEXT,
				]
			);

			$this->add_control(
				'color_style_1',
				[
					'label' => __( 'Color Style', 'elementor-hello-world' ),
					'type' => Controls_Manager::SELECT,
					'default' => 'orange',
					'options' => [
						'orange'  => __( 'Orange', 'elementor-hello-world' ),
						'blue' => __( 'Blue', 'elementor-hello-world' ),
					],
				]
			);

			$repeater = new Repeater();

					$repeater->add_control(
						'tab_1_year',
						[
							'label' => __( 'Year', 'elementor-hello-world' ),
							'type' => Controls_Manager::NUMBER,
						]
					);

					$repeater->add_control(
						'tab_1_fund_name',
						[
							'label' => __( 'Fund name', 'elementor-hello-world' ),
							'type' => Controls_Manager::TEXT,
						]
					);

					$repeater->add_control(
						'tab_1_fund_type',
						[
							'label' => __( 'Fund type', 'elementor-hello-world' ),
							'type' => Controls_Manager::TEXT,
						]
					);

					$repeater->add_control(
						'tab_1_logos',
						[
							'label' => __( 'Logos', 'elementor-hello-world' ),
							'type' => Controls_Manager::MEDIA,
						]
					);

					$repeater->add_control(
						'tab_1_regist_number',
						[
							'label' => __( 'Regist number', 'elementor-hello-world' ),
							'type' => Controls_Manager::TEXT,
						]
					);	

			$this->add_control(
				'tab_1_project_list',
				[
					'label' => __( 'Projects', 'elementor-pro' ),
					'type' => Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
					'default' => [],
					'title_field' => '{{{ tab_1_fund_name }}}',
				]
			);	

		$this->end_controls_section();

//tab2-----------	

		$this->start_controls_section(
			'tab_section_2',
			[
				'label' => __( 'Tab 2', 'elementor-pro' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

			$this->add_control(
				'tab_2_category',
				[
					'label' => __( 'Category name', 'elementor-hello-world' ),
					'type' => Controls_Manager::TEXT,
				]
			);

			$this->add_control(
				'color_style_2',
				[
					'label' => __( 'Color Style', 'elementor-hello-world' ),
					'type' => Controls_Manager::SELECT,
					'default' => 'orange',
					'options' => [
						'orange'  => __( 'Orange', 'elementor-hello-world' ),
						'blue' => __( 'Blue', 'elementor-hello-world' ),
					],
				]
			);

			$repeater2 = new Repeater();

					$repeater2->add_control(
						'tab_2_year',
						[
							'label' => __( 'Year', 'elementor-hello-world' ),
							'type' => Controls_Manager::NUMBER,
						]
					);

					$repeater2->add_control(
						'tab_2_fund_name',
						[
							'label' => __( 'Fund name', 'elementor-hello-world' ),
							'type' => Controls_Manager::TEXT,
						]
					);

					$repeater2->add_control(
						'tab_2_fund_type',
						[
							'label' => __( 'Fund type', 'elementor-hello-world' ),
							'type' => Controls_Manager::TEXT,
						]
					);

					$repeater2->add_control(
						'tab_2_logos',
						[
							'label' => __( 'Logos', 'elementor-hello-world' ),
							'type' => Controls_Manager::MEDIA,
						]
					);

					$repeater2->add_control(
						'tab_2_regist_number',
						[
							'label' => __( 'Regist number', 'elementor-hello-world' ),
							'type' => Controls_Manager::TEXT,
						]
					);	

			$this->add_control(
				'tab_2_project_list',
				[
					'label' => __( 'Projects', 'elementor-pro' ),
					'type' => Controls_Manager::REPEATER,
					'fields' => $repeater2->get_controls(),
					'default' => [],
					'title_field' => '{{{ tab_2_fund_name }}}',
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
			<div class="tab_category tab_1_category tab_active" data-tab="1"><span><?=$settings['tab_1_category']?></span></div>
			<div class="tab_category tab_2_category" data-tab="2"><span><?=$settings['tab_2_category']?></span></div>
		</div>

		<div class="tab_section tab_section_1 current <?=$settings['color_style_1']?>">
			<div class="tab_section_wrap tab_section_1_wrap">

				<?php 
					foreach ( $settings['tab_1_project_list'] as $index => $item ) : 
						//var_dump($item);
						?>
							<div class="project_el project_el-<?=$index?>">
								<div class="project_el_main">
									<span class="tab__year"><?=$item['tab_1_year']?></span>
							        <span class="tab__fund_name"><?=$item['tab_1_fund_name']?></span>
							        <span class="tab__fund_type"><?=$item['tab_1_fund_type']?></span>
							    </div>
								<div class="project_el_hover">
									<?php if ($item['tab_1_logos']["url"]) : 
										$tab_logos_none = '';
									?>
										<img src="<?=$item['tab_1_logos']["url"]?>" class="tab_logos">
									<?php else: 
										$tab_logos_none = 'tab_logos_none';
									?>
									<?php endif; ?>
							        <span class="tab_regist_number <?php echo $tab_logos_none; ?>"><?php echo __( '', 'elementor-hello-world' ) . ' ' . $item['tab_1_regist_number']; ?></span>
							    </div>						        
						    </div>
						
						<?php
					endforeach;
				?>


			</div>
		</div>

		<div class="tab_section tab_section_2 <?=$settings['color_style_2']?>">
			<div class="tab_section_wrap tab_section_2_wrap">

				<?php 
					foreach ( $settings['tab_2_project_list'] as $index => $item ) : 
						//var_dump($item);
						?>
							<div class="project_el project_el-<?=$index?>">
								<div class="project_el_main">
									<span class="tab__year"><?=$item['tab_2_year']?></span>
							        <span class="tab__fund_name"><?=$item['tab_2_fund_name']?></span>
							        <span class="tab__fund_type"><?=$item['tab_2_fund_type']?></span>
							    </div>
								<div class="project_el_hover">

									<?php if ($item['tab_2_logos']["url"]) : 
										$tab_logos_none = '';
									?>
										<img src="<?=$item['tab_2_logos']["url"]?>" class="tab_logos">
									<?php else: 
										$tab_logos_none = 'tab_logos_none';
									?>										
									<?php endif; ?>
							        <span class="tab_regist_number <?php echo $tab_logos_none; ?>"><?php echo __( '', 'elementor-hello-world' ) . ' ' . $item['tab_2_regist_number']; ?></span>
							    </div>						        
						    </div>
						
						<?php
					endforeach;
				?>


			</div>
		</div>

		<style>
		.tab_section {
			display: none;
		}
		.tab_section.current {
			display: block
		}
			.tab__year {
				font-size: 16px;
				line-height: 2;
			}
			.tab__fund_name {
				font-size: 40px;
				line-height: 1.2;
			}
			.tab__fund_type {
				font-size: 24px;
				line-height: 1;
			}
			.project_el_main {
				display: flex;
			    flex-direction: column;
			    flex-wrap: wrap;
			    height: 100%;
			    /*padding: 50px;*/	
			    padding: 40px 50px;			
			}

			.tab_category.tab_active {
				border-bottom: 9px solid;
				color: #51626f;
			}
			.tab_category.tab_active span {
			    margin-top: 7px;
			    display: block;				
			}			
			.tab_category {
				min-width: 200px;
    			text-align: center;
				padding: 10px;
				text-transform: uppercase;
				border-bottom: 1px solid #ccc;
				color: #cccccc;
			}
			.tab_category:hover {
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

			.project_el {
				color: white;
/*				min-height: 340px;
				max-height: 340px;*/
				min-height: 200px;
				max-height: 200px;				
				flex: 50%;
				position: relative;
			}

			.project_el-2:before {
				content: '';
				position: absolute;
				background-image: url(<?php echo plugins_url( '/assets/img/pr-3.png', __DIR__ ); ?>);
				    width: 146px;
			    height: 67px;
			    background-repeat: no-repeat;
				right: -1px;
			    top: -1px;
			}
			.project_el-1:before {
				content: '';
				position: absolute;
				background-image: url(<?php echo plugins_url( '/assets/img/pr-2-new.png', __DIR__ ); ?>);
			    width: 37px;
			    /*height: 146px;*/
			    background-repeat: no-repeat;
			    right: 0;
			    /*top: 95px;*/
			    height: 100px;
			    top: -1px;
			}
			.blue .project_el-3:before {
				content: '';
				position: absolute;
				background-image: url(<?php echo plugins_url( '/assets/img/pr-2-new.png', __DIR__ ); ?>);
			    width: 37px;
			   /* height: 146px;*/
			    background-repeat: no-repeat;
			    right: 0;
			    /*top: 95px;*/
			    left: initial;
			    height: 100px;
			    top: -1px;
			}
			.blue .project_el-1:before, .blue .project_el-2:before {
				content: '';
				position: absolute;
				background-image: url(<?php echo plugins_url( '/assets/img/pr-1.png', __DIR__ ); ?>);
				width: 147px;
			    height: 37px;
			    background-repeat: no-repeat;
			    left: calc(50% - 70px);
			    bottom: -1px;
			    top: inherit;
			}
			.blue .project_el-2:before {

			}			
			.blue .project_el-0:before {
				content: '';
				position: absolute;
				background-image: url(<?php echo plugins_url( '/assets/img/pr-3.png', __DIR__ ); ?>);
				    width: 146px;
			    height: 67px;
			    background-repeat: no-repeat;
				right: -1px;
			    top: -2px;
			    left: initial;
			}

			.project_el-0:before,
			.project_el-3:before,
			.project_el-4:before {
				content: '';
				position: absolute;
				background-image: url(<?php echo plugins_url( '/assets/img/pr-1.png', __DIR__ ); ?>);
				width: 147px;
			    height: 37px;
			    background-repeat: no-repeat;
			    left: calc(50% - 70px);
			}
			.project_el-0:before {
				top: -1px;
			}			
			.project_el-3:before, 
			.project_el-4:before {
				bottom: -2px;
			}

			.project_el-0 {
				background-color: #51626f;
			}
			.blue .project_el-0 {
				background-color: #cccccc;
			}

			.project_el-1 {
				background-color: #ef4136;
			}
			.blue .project_el-1 {
				background-color: #1c4587;
			}

			.project_el-2 {
				background-color: #002336;
			}
			.blue .project_el-2 {
				background-color: #0086cf;
			}

			.project_el-3 {
				background-color: #ded9cc;
			}
			.blue .project_el-3 {
				background-color: #efdbc8;
			}

			.project_el-4 {
				background-color: #9ebdcf;
			}
			.project_el:hover {
				cursor: pointer;
			}	
			.project__hovers {
    			background-color: white !important;
    			color: black;
			}	
			.project__hovers .project_el_main {
				  visibility: hidden;
			  opacity: 0;
			  transition: visibility 0s, opacity 0.5s linear;
			  position: absolute;

			}
			.project__hovers .project_el_hover {
				visibility: visible;
  				opacity: 1;
			}
			.project_el_hover {
				  visibility: hidden;
			  opacity: 0;
			  transition: visibility 0s, opacity 0.5s linear;
			  display: flex;
			    height: 100%;
			    flex-wrap: wrap;
			    align-items: center;
			    justify-content: center;
			    position: relative;

			}
			.tab_regist_number {
				position: absolute;
			    bottom: 15px;
			    left: 15px;
			        color: #51626f;
			}
			.tab_regist_number:before {
				content: '';
				border-bottom: 2px solid;
				width: 30px;
			    height: 2px;
			    position: absolute;
			    top: -4px;
			}
			.tab_regist_number.tab_logos_none {
				position: relative;
			}
			.tab_regist_number.tab_logos_none:before {
				left: 50%;
			    margin-left: -20px;
			}			

			@media (max-width: 1200px) {

			}

			@media (max-width: 998px) {

			}

			@media (max-width: 768px) {
				.project_el {
				    flex: 100%;
				}
			}

			@media (max-width: 480px) {
				.tab_category {
				    font-size: 12px;
				}
			}

		</style>
		<script>
			jQuery(function ($) {

				// for (var i = 0; i < 4; i++) {
				// 	var timer = {};
				// 	$('.project_el-'+i).click(function() {
				// 		window.clearTimeout(timer[i]);

				// 		var project_el = $(this);
				// 		project_el.addClass('project__hovers');

				// 	    timer[i] = setTimeout(function () {
				// 	      project_el.removeClass('project__hovers');
				// 	    }, 3000);

				// 	});
				// }

				var timer;

				$('.project_el').click(function() {
					 window.clearTimeout(timer);
					 $('.project_el').removeClass('project__hovers');

					var project_el = $(this);
					project_el.addClass('project__hovers');

				    timer = setTimeout(function () {
				      project_el.removeClass('project__hovers');
				    }, 3000);

				});

				// $('.project_el').toggle(function() {
				// 	$(this).addClass('project__hovers');
				// }, function() {
				// 	$(this).removeClass('project__hovers');
				// });

				$('.tab_category').click(function(){
					var tab_id = $(this).attr('data-tab');

					$('.tab_category').removeClass('tab_active');
					$('.tab_section').removeClass('current');

					$(this).addClass('tab_active');
					$(".tab_section_"+tab_id).addClass('current');
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
