<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Latepoint_Bricks_Widget_Book_Button extends \Bricks\Element {

	public $category = 'latepoint';
	public $name = 'latepoint_book_button';
	public $icon = 'ti-control-stop';
	public $scripts = ['init_booking_button'];


	public function get_label(): string {
		return esc_html__( 'Booking Button', 'latepoint' );
	}

	public function enqueue_scripts() {
		if ( bricks_is_builder() ) {
			wp_enqueue_script(
				'bricks_widget_book_button_script',
				LATEPOINT_PLUGIN_URL . 'blocks/assets/javascripts/bricks-widget-book-button.js',
				[ 'jquery' ],
				LATEPOINT_VERSION
			);
		}
	}

	public function set_control_groups() {
		$this->control_groups['general'] = array(
			'title' => esc_html__( 'Booking Form Settings', 'latepoint' ),
			'tab'   => 'content',
		);
		$this->control_groups['step_settings'] = array(
			'title' => esc_html__( 'Step Settings', 'latepoint' ),
			'tab'   => 'content',
		);
		$this->control_groups['other_settings'] = array(
			'title' => esc_html__( 'Other Settings', 'latepoint' ),
			'tab'   => 'content',
		);
		$this->control_groups['button_styling'] = array(
			'title' => esc_html__( 'Button', 'latepoint' ),
			'tab'   => 'style',
		);
		unset( $this->control_groups['_typography'] );
		unset( $this->control_groups['_transform'] );
	}

	// Set builder controls
	public function set_controls() {
		$this->controls['_width']['default']   = '100%';

		$this->controls['caption'] = array(
			'label'       => esc_html__( 'Button Caption', 'latepoint' ),
			'tab'         => 'content',
			'group'       => 'general',
			'type'        => 'text',
			'default'     => esc_html__( 'Book Appointment', 'latepoint' ),
		);
		$this->controls['hide_summary'] = array(
			'tab'         => 'content',
			'group'       => 'general',
			'label'       => esc_html__( 'Hide Summary', 'latepoint' ),
			'type'        => 'checkbox',
			'inline'      => true,
		);

		$this->controls['hide_side_panel'] = array(
			'tab'         => 'content',
			'group'       => 'general',
			'label'       => esc_html__( 'Hide Side Panel', 'latepoint' ),
			'type'        => 'checkbox',
			'inline'      => true,
		);


		#step settings group

		$this->controls['selected_agent'] = [
			'tab'         => 'content',
			'group'       => 'step_settings',
			'label'       => esc_html__( 'Preselected Agent', 'latepoint' ),
			'type'        => 'select',
			'options'     => OsBricksHelper::get_data('selected_agents'),
			'placeholder' => esc_html__( 'Preselected Agent', 'latepoint' ),
			'searchable'  => true,
			'clearable'   => true,
		];
		$this->controls['selected_service'] = [
			'tab'         => 'content',
			'group'       => 'step_settings',
			'label'       => esc_html__( 'Preselected Service', 'latepoint' ),
			'type'        => 'select',
			'options'     => OsBricksHelper::get_data('selected_services'),
			'placeholder' => esc_html__( 'Preselected Service', 'latepoint' ),
			'searchable'  => true,
			'clearable'   => true,
		];
		$this->controls['selected_service_category'] = [
			'tab'         => 'content',
			'group'       => 'step_settings',
			'label'       => esc_html__( 'Preselected Service Category', 'latepoint' ),
			'type'        => 'select',
			'options'     => OsBricksHelper::get_data('selected_service_categories'),
			'placeholder' => esc_html__( 'Preselected Service Category', 'latepoint' ),
			'searchable'  => true,
			'clearable'   => true,
		];

		$this->controls['selected_bundle'] = [
			'tab'         => 'content',
			'group'       => 'step_settings',
			'label'       => esc_html__( 'Preselected Bundle', 'latepoint' ),
			'type'        => 'select',
			'options'     => OsBricksHelper::get_data('selected_bundles'),
			'placeholder' => esc_html__( 'Preselected Bundle', 'latepoint' ),
			'searchable'  => true,
			'clearable'   => true,
		];

		$this->controls['selected_location'] = [
			'tab'         => 'content',
			'group'       => 'step_settings',
			'label'       => esc_html__( 'Preselected Location', 'latepoint' ),
			'type'        => 'select',
			'options'     => OsBricksHelper::get_data('selected_locations'),
			'placeholder' => esc_html__( 'Preselected Location', 'latepoint' ),
			'searchable'  => true,
			'clearable'   => true,
		];
		$this->controls['selected_start_date'] = [
			'tab'     => 'content',
			'group'   => 'step_settings',
			'label'   => esc_html__( 'Preselected Booking Start Date', 'latepoint' ),
			'type'    => 'datepicker',
			'inline'  => true,
			'options' => [
				'enableTime' => false,
				'time_24hr'  => true
			]
		];
		$this->controls['selected_start_time'] = [
			'tab'     => 'content',
			'group'   => 'step_settings',
			'label'   => esc_html__( 'Preselected Booking Start Time', 'latepoint' ),
			'type'    => 'datepicker',
			'inline'  => true,
			'options' => [
				'enableTime' => true,
				'time_24hr'  => true,
				'noCalendar' => true
			]
		];

		$this->controls['selected_duration'] = [
			'tab'    => 'content',
			'group'  => 'step_settings',
			'label'  => esc_html__( 'Preselected Duration', 'latepoint' ),
			'type'   => 'number',
			'min'    => 0,
			'inline' => true,
		];
		$this->controls['selected_total_attendees'] = [
			'tab'    => 'content',
			'group'  => 'step_settings',
			'label'  => esc_html__( 'Preselected Total Attendees', 'latepoint' ),
			'type'   => 'number',
			'min'    => 0,
			'inline' => true,
		];


		#other settings
		$this->controls['source_id'] = [
			'tab'    => 'content',
			'group'  => 'other_settings',
			'label'  => esc_html__( 'Source ID', 'latepoint' ),
			'type'   => 'number',
			'min'    => 0,
			'inline' => true,
		];
		$this->controls['calendar_start_date'] = [
			'tab'     => 'content',
			'group'   => 'other_settings',
			'label'   => esc_html__( 'Calendar Start Date', 'latepoint' ),
			'type'    => 'datepicker',
			'inline'  => true,
			'options' => [
				'enableTime' => false,
				'time_24hr'  => true
			]
		];
		$this->controls['show_services'] = [
			'tab'         => 'content',
			'group'       => 'other_settings',
			'label'       => esc_html__( 'Show Services', 'latepoint' ),
			'type'        => 'select',
			'options'     => OsBricksHelper::get_data('services'),
			'placeholder' => esc_html__( 'Show Services', 'latepoint' ),
			'multiple'    => true,
			'searchable'  => true,
			'clearable'   => true,
		];
		$this->controls['show_service_categories'] = [
			'tab'         => 'content',
			'group'       => 'other_settings',
			'label'       => esc_html__( 'Show Service Categories', 'latepoint' ),
			'type'        => 'select',
			'options'     => OsBricksHelper::get_data('service_categories'),
			'placeholder' => esc_html__( 'Show Service Categories', 'latepoint' ),
			'multiple'    => true,
			'searchable'  => true,
			'clearable'   => true,
		];
		$this->controls['show_agents'] = [
			'tab'         => 'content',
			'group'       => 'other_settings',
			'label'       => esc_html__( 'Show Agents', 'latepoint' ),
			'type'        => 'select',
			'options'     => OsBricksHelper::get_data('agents'),
			'placeholder' => esc_html__( 'Show Agents', 'latepoint' ),
			'multiple'    => true,
			'searchable'  => true,
			'clearable'   => true,
		];


		$this->controls['align'] = array(
			'tab'     => 'style',
			'group'   => 'button_styling',
			'label'   => esc_html__( 'Position', 'latepoint' ),
			'type'    => 'text-align',
			'inline'  => true,
			'exclude' => 'justify',
			'css'   => array(
				array(
					'property' => 'text-align',
					'selector' => '.latepoint-book-button-wrapper',
				)
			),
			'required' => array( 'button_full_width', '!=', true ),
		);
		$this->controls['button_full_width'] = array(
			'tab'     => 'style',
			'group'   => 'button_styling',
			'label'   => esc_html__( 'Full Width', 'latepoint' ),
			'type'    => 'checkbox',
			'inline'  => true,
			'default' => false,
			'css'   => array(
				array(
					'property' => 'display',
					'selector' => '.latepoint-book-button',
					'value'    => 'block',
					'required' => true
				),
			),
		);

		$this->controls['btn_font'] = [
			'tab'    => 'style',
			'group'  => 'button_styling',
			'label'  => esc_html__( 'Typography', 'latepoint' ),
			'type'   => 'typography',
			'css'    => [
				[
					'property' => 'typography',
					'selector' => '.latepoint-book-button',
				],
			],
			'exclude' => ['text-align', 'color'],
			'inline' => true,
		];

		$this->controls['bg_color_separator'] = array(
			'tab'    => 'style',
			'group'  => 'button_styling',
			'type'     => 'separator',
		);

		$this->controls['bg_color'] = array(
			'tab'      => 'style',
			'group'    => 'button_styling',
			'label'    => esc_html__( 'Background Color', 'latepoint' ),
			'type'     => 'color',
			'css'      => array(
				array(
					'property' => 'background-color',
					'selector' => '.latepoint-book-button',
				),
			),
		);

		$this->controls['text_color'] = array(
			'tab'      => 'style',
			'group'    => 'button_styling',
			'label'    => esc_html__( 'Text Color', 'latepoint' ),
			'type'     => 'color',
			'css'      => array(
				array(
					'property' => 'color',
					'selector' => '.latepoint-book-button',
				),
			),
		);

		$this->controls['border_separator'] = array(
			'tab'    => 'style',
			'group'  => 'button_styling',
			'type'     => 'separator',
		);

		$this->controls['btn_border'] = [
			'tab'      => 'style',
			'group'    => 'button_styling',
			'label' => esc_html__( 'Border', 'latepoint' ),
			'type' => 'border',
			'css' => [
				[
					'property' => 'border',
					'selector' => '.latepoint-book-button',
				],
			],
			'inline' => true,
			'small' => true,
		];

		$this->controls['btn_shadow'] = [
			'tab'      => 'style',
			'group'    => 'button_styling',
			'label' => esc_html__( 'Box Shadow', 'latepoint' ),
			'type' => 'box-shadow',
			'css' => [
				[
					'property' => 'box-shadow',
					'selector' => '.latepoint-book-button',
				],
			],
			'inline' => true,
			'small' => true,
		];

		$this->controls['bg_padding_separator'] = array(
			'tab'    => 'style',
			'group'  => 'button_styling',
			'type'     => 'separator',
		);

		$this->controls['btn_padding'] = [
			'tab'    => 'style',
			'group'  => 'button_styling',
			'label' => esc_html__( 'Padding', 'latepoint' ),
			'type' => 'dimensions',
			'css' => [
				[
					'property' => 'padding',
					'selector' => '.latepoint-book-button',
				]
			],
			'default' => [
				'top'    => '15px',
				'right'  => '30px',
				'bottom' => '15px',
				'left'   => '30px',
			]
		];

	}


	// Render element HTML
	public function render() {

		$allowed_params = [
			'caption',
			'hide_summary',
			'hide_side_panel',
			'selected_agent',
			'selected_service',
			'selected_bundle',
			'selected_service_category',
			'selected_location',
			'selected_start_date',
			'selected_start_time',
			'selected_duration',
			'selected_total_attendees',
			'source_id',
			'calendar_start_date',
			'show_services',
			'show_service_categories',
			'show_agents',
			'show_locations',
			'btn_wrapper_classes',
			'btn_classes'
		];
		$this->settings['btn_wrapper_classes'] = 'bricks-button-wrapper';
		$this->settings['btn_classes'] = 'bricks-button bricks-background-primary';

		$params = OsBlockHelper::attributes_to_data_params($this->settings, $allowed_params);
		$output = "<div {$this->render_attributes( '_root' )}>";
		$output .= do_shortcode('[latepoint_book_button ' . $params . ']');
		$output .= '</div>';
		echo $output;
	}
}