<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_template-tabs',
		'title' => 'Template - Tabs',
		'fields' => array (
			array (
				'key' => 'field_5214310b88219',
				'label' => 'Tabs',
				'name' => 'tabs',
				'type' => 'flexible_content',
				'layouts' => array (
					array (
						'label' => 'Overview Tab',
						'name' => 'overview_tab',
						'display' => 'row',
						'sub_fields' => array (
							array (
								'key' => 'field_52602f9975b5f',
								'label' => 'Tab Label',
								'name' => 'tab_label',
								'type' => 'text',
								'column_width' => 10,
								'default_value' => 'Overview',
								'placeholder' => 'Overview',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_52602f9975b60',
								'label' => 'Tab Content',
								'name' => 'tab_content',
								'type' => 'wysiwyg',
								'column_width' => 90,
								'default_value' => '',
								'toolbar' => 'full',
								'media_upload' => 'yes',
							),
							array (
								'key' => 'field_5260308075b66',
								'label' => 'Tab Image',
								'name' => 'tab_image',
								'type' => 'image',
								'column_width' => '',
								'save_format' => 'id',
								'preview_size' => 'thumbnail',
								'library' => 'uploadedTo',
							),
						),
					),
					array (
						'label' => 'Specifications Tab',
						'name' => 'specifications_tab',
						'display' => 'row',
						'sub_fields' => array (
							array (
								'key' => 'field_5260306c75b64',
								'label' => 'Tab Label',
								'name' => 'tab_label',
								'type' => 'text',
								'column_width' => 10,
								'default_value' => 'Specifications',
								'placeholder' => 'Specifications',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_5260306c75b65',
								'label' => 'Tab Content',
								'name' => 'tab_content',
								'type' => 'wysiwyg',
								'column_width' => 90,
								'default_value' => '',
								'toolbar' => 'full',
								'media_upload' => 'yes',
							),
							array (
								'key' => 'field_5260309775b67',
								'label' => 'Tab Image',
								'name' => 'tab_image',
								'type' => 'image',
								'column_width' => '',
								'save_format' => 'id',
								'preview_size' => 'thumbnail',
								'library' => 'all',
							),
						),
					),
					array (
						'label' => 'Product Information Tab',
						'name' => 'product_information_tab',
						'display' => 'row',
						'sub_fields' => array (
							array (
								'key' => 'field_526030d075b6a',
								'label' => 'Tab Label',
								'name' => 'tab_label',
								'type' => 'text',
								'column_width' => 10,
								'default_value' => 'Product Information',
								'placeholder' => 'Product Information',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_526030ea75b6d',
								'label' => 'Tab Content',
								'name' => 'tab_content',
								'type' => 'wysiwyg',
								'column_width' => 90,
								'default_value' => '',
								'toolbar' => 'full',
								'media_upload' => 'yes',
							),
							array (
								'key' => 'field_526a1f0df7f08',
								'label' => 'Tab Image',
								'name' => 'tab_image',
								'type' => 'image',
								'column_width' => '',
								'save_format' => 'id',
								'preview_size' => 'thumbnail',
								'library' => 'uploadedTo',
							),
							array (
								'key' => 'field_526a23a7fc79c',
								'label' => 'Panel Heading',
								'name' => 'panel_heading',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_526a23bcfc79d',
								'label' => 'Panel Body',
								'name' => 'panel_body',
								'type' => 'textarea',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'maxlength' => '',
								'formatting' => 'br',
							),
							array (
								'key' => 'field_526a23cffc79e',
								'label' => 'Panel Footer',
								'name' => 'panel_footer',
								'type' => 'text',
								'instructions' => 'If the product information table has notes, this is where they should go. ',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
						),
					),
					array (
						'label' => 'Chart Tab',
						'name' => 'chart_tab',
						'display' => 'row',
						'sub_fields' => array (
							array (
								'key' => 'field_526082ed9bca9',
								'label' => 'Tab Label',
								'name' => 'tab_label',
								'type' => 'text',
								'column_width' => 10,
								'default_value' => 'Product Information',
								'placeholder' => 'Product Information',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_526082ed9bcaa',
								'label' => 'Tab Content',
								'name' => 'tab_content',
								'type' => 'ShortCode',
								'column_width' => '',
							),
							array (
								'key' => 'field_526a21cbf7f0b',
								'label' => 'Chart Labels',
								'name' => 'chart_labels',
								'type' => 'repeater',
								'column_width' => '',
								'sub_fields' => array (
									array (
										'key' => 'field_526a21eaf7f0c',
										'label' => 'Label',
										'name' => 'label',
										'type' => 'text',
										'column_width' => '',
										'default_value' => '',
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'formatting' => 'html',
										'maxlength' => '',
									),
								),
								'row_min' => 0,
								'row_limit' => '',
								'layout' => 'table',
								'button_label' => 'Add Row',
							),
							array (
								'key' => 'field_526a2186f7f0a',
								'label' => 'Datasets',
								'name' => 'datasets',
								'type' => 'repeater',
								'column_width' => '',
								'sub_fields' => array (
									array (
										'key' => 'field_526a22e4f7f10',
										'label' => 'Fill Color',
										'name' => 'fillcolor',
										'type' => 'color_picker',
										'column_width' => '',
										'default_value' => '',
									),
									array (
										'key' => 'field_526a22faf7f11',
										'label' => 'Stroke Color',
										'name' => 'strokecolor',
										'type' => 'color_picker',
										'column_width' => '',
										'default_value' => '',
									),
									array (
										'key' => 'field_526a2305f7f12',
										'label' => 'Point Color',
										'name' => 'point_color',
										'type' => 'color_picker',
										'column_width' => '',
										'default_value' => '',
									),
									array (
										'key' => 'field_526a2314f7f13',
										'label' => 'Point Stroke Color',
										'name' => 'pointstrokecolor',
										'type' => 'color_picker',
										'column_width' => '',
										'default_value' => '',
									),
									array (
										'key' => 'field_526a220af7f0d',
										'label' => 'Data',
										'name' => 'data',
										'type' => 'repeater',
										'column_width' => '',
										'sub_fields' => array (
											array (
												'key' => 'field_526a225df7f0e',
												'label' => 'Data Item',
												'name' => 'data_item',
												'type' => 'number',
												'column_width' => '',
												'default_value' => '',
												'placeholder' => '',
												'prepend' => '',
												'append' => '',
												'min' => '',
												'max' => '',
												'step' => '',
											),
										),
										'row_min' => 0,
										'row_limit' => '',
										'layout' => 'row',
										'button_label' => 'Add Data',
									),
								),
								'row_min' => 0,
								'row_limit' => '',
								'layout' => 'table',
								'button_label' => 'Add Dataset',
							),
						),
					),
					array (
						'label' => 'PDF Tab',
						'name' => 'pdf_tab',
						'display' => 'row',
						'sub_fields' => array (
							array (
								'key' => 'field_5265cef6e0c61',
								'label' => 'Tab Label',
								'name' => 'tab_label',
								'type' => 'text',
								'column_width' => 10,
								'default_value' => 'Product Information',
								'placeholder' => 'Product Information',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_5265cef6e0c62',
								'label' => 'Chart Type',
								'name' => 'chart_type',
								'type' => 'select',
								'column_width' => '',
								'choices' => array (
									'line' => 'line',
									'bar' => 'bar',
									'radar' => 'radar',
									'polar' => 'polar',
									'pie' => 'pie',
									'doughnut' => 'doughnut',
								),
								'default_value' => '',
								'allow_null' => 0,
								'multiple' => 0,
							),
						),
					),
					array (
						'label' => 'Tab with Sub Sections',
						'name' => 'tab_with_sub_sections',
						'display' => 'row',
						'sub_fields' => array (
							array (
								'key' => 'field_52607dd337f17',
								'label' => 'Tab Label',
								'name' => 'tab_label',
								'type' => 'text',
								'column_width' => 10,
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_52607dee37f19',
								'label' => 'Sub Sections',
								'name' => 'sub_sections',
								'type' => 'repeater',
								'column_width' => '',
								'sub_fields' => array (
									array (
										'key' => 'field_52607e0b37f1a',
										'label' => 'Sub Section Label',
										'name' => 'sub_section_label',
										'type' => 'text',
										'column_width' => '',
										'default_value' => '',
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'formatting' => 'none',
										'maxlength' => '',
									),
									array (
										'key' => 'field_52607e1d37f1b',
										'label' => 'Sub Section Content',
										'name' => 'sub_section_content',
										'type' => 'wysiwyg',
										'column_width' => '',
										'default_value' => '',
										'toolbar' => 'full',
										'media_upload' => 'yes',
									),
									array (
										'key' => 'field_5265ce90e0c5f',
										'label' => 'Sub Section Image',
										'name' => 'sub_section_image',
										'type' => 'image',
										'column_width' => '',
										'save_format' => 'id',
										'preview_size' => 'thumbnail',
										'library' => 'all',
									),
								),
								'row_min' => 2,
								'row_limit' => '',
								'layout' => 'row',
								'button_label' => 'Add Sub Section',
							),
						),
					),
					array (
						'label' => 'Normal Tab',
						'name' => 'normal_tab',
						'display' => 'row',
						'sub_fields' => array (
							array (
								'key' => 'field_52143a9905a81',
								'label' => 'Tab Label',
								'name' => 'tab_label',
								'type' => 'text',
								'column_width' => 10,
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_52143ab005a82',
								'label' => 'Tab Content',
								'name' => 'tab_content',
								'type' => 'wysiwyg',
								'column_width' => 90,
								'default_value' => '',
								'toolbar' => 'full',
								'media_upload' => 'yes',
							),
							array (
								'key' => 'field_526a1f4df7f09',
								'label' => 'Tab Image',
								'name' => 'tab_image',
								'type' => 'image',
								'column_width' => '',
								'save_format' => 'id',
								'preview_size' => 'thumbnail',
								'library' => 'uploadedTo',
							),
						),
					),
				),
				'button_label' => 'Add Tab',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'product',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-tabs.php',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-map.php',
					'order_no' => 0,
					'group_no' => 2,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'discussion',
				1 => 'comments',
				2 => 'revisions',
				3 => 'slug',
				4 => 'author',
				5 => 'format',
				6 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}
