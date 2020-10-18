<?php

class SIMP_SimpleHeader extends ET_Builder_Module {

	public $slug       = 'simp_simple_header';
	public $vb_support = 'on';

	public function init() {
		$this->name = esc_html__( 'Simple Header', 'simp-simple-extension' );	
	}

	public function get_fields() {
		return array(
			'header_image' => array(
				'label'              => esc_html__( 'Heading', 'simp-simple-extension' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'description'        => esc_html__( 'Upload your desired image, or type in the URL to the image you would like to display.', 'simp-simple-extension' ),
				'toggle_slug'        => 'main_content',
				'upload_button_text' => et_builder_i18n( 'Upload an image' ),
				'choose_text'        => esc_attr__( 'Choose an Image', 'et_builder' ),
				'update_text'        => esc_attr__( 'Set As Image', 'et_builder' ),
				'hide_metadata'      => true,
				'affects'            => array(
					'alt',
					'title_text',
				),
				'dynamic_content'    => 'image',
				'mobile_options'     => true,
				'hover'              => 'tabs',
			),
			'heading'     => array(
				'label'              => esc_html__( 'Heading', 'simp-simple-extension' ),
				'type'               => 'text',
				'option_category'    => 'basic_option',
				'description'        => esc_html__( 'Input your desired heading here.', 'simp-simple-extension' ),
				'toggle_slug'        => 'main_content',
			),
			'content'     => array(
				'label'              => esc_html__( 'Content', 'simp-simple-extension' ),
				'type'               => 'tiny_mce',
				'option_category'    => 'basic_option',
				'description'        => esc_html__( 'Content entered here will appear below the heading text.', 'simp-simple-extension' ),
				'toggle_slug'        => 'main_content',
			),
		);
	}

	public function render( $unprocessed_props, $content = null, $render_slug ) {
		return sprintf(
			'
			<div class="od_flip-card">
				<div class="od_flip-card-inner">
					<div class="od_flip-card-front">
						<img src="%1$s" alt="Avatar" />
					</div>
					<div class="od_flip-card-back">
						<h1>%2$s</h1> 
						<p>%3$s</p>
					</div>
				</div>
			</div>
			',
			esc_html( $this->props['header_image'] ),
			esc_html( $this->props['heading'] ),
			$this->props['content']
		);
	}
}

new SIMP_SimpleHeader;