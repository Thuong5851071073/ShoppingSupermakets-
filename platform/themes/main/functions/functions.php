<?php

register_page_template([
    'default' => 'Default',
    'home-page' => 'Home Page', 
]);

register_sidebar([
    'id'          => 'second_sidebar',
    'name'        => 'Second sidebar',
    'description' => 'This is a sample sidebar for main theme',
]);

theme_option()
    ->setField([
        'id'         => 'copyright',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'text',
        'label'      => __('Copyright'),
        'attributes' => [
            'name'    => 'copyright',
            'value'   => '© 2021  Shop Tham Ty . All right reserved.',
            'options' => [
                'class'        => 'form-control',
                'placeholder'  => __('Change copyright'),
                'data-counter' => 250,
            ],
        ],
        'helper'     => __('Copyright on footer of site'),
    ])
    ->setField([
        'id'         => 'primary_font',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'googleFonts',
        'label'      => __('Primary font'),
        'attributes' => [
            'name'  => 'primary_font',
            'value' => 'Roboto',
        ],
    ])
    ->setField([
        'id'         => 'primary_color',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'customColor',
        'label'      => __('Primary color'),
        'attributes' => [
            'name'  => 'primary_color',
            'value' => '#ff2b4a',
        ],
    ])
    ->setField([
        'id'         => 'primary_color_text',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'customColor',
        'label'      => __('Primary color text'),
        'attributes' => [
            'name'  => 'primary_color_text',
            'value' => '#000000',
        ],
    ])
    ->setField([
        'id'         => 'primary_color_text_white',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'customColor',
        'label'      => __('Primary color text white'),
        'attributes' => [
            'name'  => 'primary_color_text_white',
            'value' => '#FFFFFF',
        ],
    ])

    ->setSection([ 
        'title' => __('Logo header'),
        'desc' => __(''),
        'id' => 'opt-text-subsection-logo',
        'subsection' => true,
        'icon' => 'fa fa-image',
        'fields' => [
            [
                'id' => 'logo',
                'type' => 'mediaImage',
                'label' =>"logo header",
                'attributes' => [
                    'name' => 'logo',
                    'value' => null,
                    'options' => [
                        'class' => 'form-control'
                    ]
                ],
            ],
            [
                'id' => 'logo_footer',
                'type' => 'mediaImage',
                'label' =>"logo footer",
                'attributes' => [
                    'name' => 'logo_footer',
                    'value' => null,
                    'options' => [
                        'class' => 'form-control'
                    ]
                ],
            ],
        ],
    ])
    ->setSection([ // Set section with some fields
        'title' => __('Thông Tin Liên Hệ'),
        'desc' => __('Change logo'),
        'id' => 'opt-text-subsection-contact',
        'subsection' => true,
        'icon' => 'fa-address-book',
        'fields' => [
            [
                'id' => 'name_shop',
                'type' => 'text',
                'label' => __('Tên Shop'),
                'attributes' => [
                    'name' => 'name_shop',
                    'value' => null,
                    'options' => [
                        'class' => 'form-control'
                    ]
                ],
            ],
            [
                'id' => 'address_shop',
                'type' => 'text',
                'label' => __('Nhập số nhà , Thôn xóm'),
                'attributes' => [
                    'name' => 'address_shop_sonha',
                    'value' => null,
                    'options' => [
                        'class' => 'form-control'
                    ]
                ],
            ],
            [
                'id' => 'address_shop_tinh',
                'type' => 'text',
                'label' => __('Nhập Huyện , Tỉnh'),
                'attributes' => [
                    'name' => 'address_shop_Tinh',
                    'value' => null,
                    'options' => [
                        'class' => 'form-control'
                    ]
                ],
            ],
            [
                'id' => 'Email',
                'type' => 'text',
                'label' => __('Nhập gmail'),
                'attributes' => [
                    'name' => 'Email',
                    'value' => null,
                    'options' => [
                        'class' => 'form-control'
                    ]
                ],
            ],
            [
                'id' => 'Phone',
                'type' => 'text',
                'label' => __('Nhập Số Điện Thoại'),
                'attributes' => [
                    'name' => 'phone',
                    'value' => null,
                    'options' => [
                        'class' => 'form-control'
                    ]
                ],
            ],
            [
                'id' => 'Phone2',
                'type' => 'text',
                'label' => __('Nhập Số Điện Thoại 2'),
                'attributes' => [
                    'name' => 'phone2',
                    'value' => null,
                    'options' => [
                        'class' => 'form-control'
                    ]
                ],
            ],

        ],
    ])
    ;

add_action('init', function () {
    config(['filesystems.disks.public.root' => public_path('storage')]);
}, 124);
