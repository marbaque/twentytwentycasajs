<?php

// @TODO hacer que fecha_final no pueda ser menor que la fecha de inicio por medio de validación

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_6425e2859ba3b',
	'title' => 'Información del evento',
	'fields' => array(
		array(
			'key' => 'field_6425e28523fa7',
			'label' => 'Fecha de inicio',
			'name' => 'fecha_inicio',
			'aria-label' => '',
			'type' => 'date_picker',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'd/m/Y',
			'return_format' => 'Ymd',
			'first_day' => 0,
		),
		array(
			'key' => 'field_6425e2ec3973f',
			'label' => 'Fecha de finalización (opcional)',
			'name' => 'fecha_final',
			'aria-label' => '',
			'type' => 'date_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'd/m/Y',
			'return_format' => 'Ymd',
			'first_day' => 0,
		),
		array(
			'key' => 'field_6425e34339742',
			'label' => 'Evento de todo el día',
			'name' => 'evento_dia',
			'aria-label' => '',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_6425e31539740',
			'label' => 'Hora de inicio',
			'name' => 'hora_inicio',
			'aria-label' => '',
			'type' => 'time_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_6425e34339742',
						'operator' => '!=',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'g:i a',
			'return_format' => 'g:i a',
		),
		array(
			'key' => 'field_6425e32e39741',
			'label' => 'Hora de finalización',
			'name' => 'hora_final',
			'aria-label' => '',
			'type' => 'time_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_6425e34339742',
						'operator' => '!=',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'g:i a',
			'return_format' => 'g:i a',
		),
		array(
			'key' => 'field_6425e39c39743',
			'label' => 'Ubicación',
			'name' => 'ubicacion',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => 'Ejemplo: Sala principal',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_6425e48c39744',
			'label' => 'Enlace a más información',
			'name' => 'mas_info',
			'aria-label' => '',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Ejemplo: casajimenezsancho.uned.ac.cr',
		),
		array(
			'key' => 'field_6425e711ba6f8',
			'label' => 'Texto del enlace',
			'name' => 'txt_enlace',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Más información',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_6425e4e3b96cf',
			'label' => 'Resumen personalizado',
			'name' => 'resumen',
			'aria-label' => '',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'rows' => 5,
			'placeholder' => 'Esto reemplazará el resumen predeterminado.',
			'new_lines' => 'wpautop',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'evento',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));

endif;		