<?php
    // Single Page
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Page', 'xisen' ),
        'id'     => 'xisen_page',
        'desc'   => esc_html__( 'Page options', $xisen_textdomain ),
        'icon'   => 'el el-th-large',
        'fields' => array(
            array(
                'id'       => 'page_header_bg',
                'type'     => 'color',
                'title'    => __('Color', $opt_name), 
                'subtitle' => __('Page Header Background Color (default: #f0f9ff).', $xisen_textdomain),
                'default'  => '#f0f9ff',
                'validate' => 'color',
			),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'FAQ Page Options', 'xisen' ),
        'id'     => 'faq_page',
        // 'icon'   => 'el el-th-large',
        'subsection'    =>  true,
        'fields' => array(
            array(
                'id'        =>  'faq_page_under_header_title',
                'type'      =>  'text',
                'title'     =>  __('Heading', $opt_name), 
                'subtitle'  =>  __('Under Page Header Section Heading Text', $xisen_textdomain),
            ),
            array(
                'id'        =>  'faq_page_under_header_short_desc',
                'type'      =>  'textarea',
                'rows'      =>  2,
                'title'     =>  __('Short Description', $opt_name), 
                'subtitle'  =>  __('Write a short description about FAQ page', $xisen_textdomain),
            ),
        )
    ) );

    // Service Page
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Service Page Options', 'xisen' ),
        'id'     => 'service_page',
        // 'icon'   => 'el el-th-large',
        'subsection'    =>  true,
        'fields' => array(
            array(
                'id'        =>  'service_page_features_section_title',
                'type'      =>  'text',
                'title'     =>  __('Heading', $opt_name), 
                'subtitle'  =>  __('Service Page Features Section Heading Text', $xisen_textdomain),
            ),
            array(
                'id'        =>  'service_page_features_section_subtitle',
                'type'      =>  'text',
                'title'     =>  __('Sub Title', $opt_name), 
                'subtitle'  =>  __('Service Page Features Section Subtitle', $xisen_textdomain),
            ),
            array(
                'id'        =>  'service_page_features_section_under_header_divider',
                'type'      =>  'media',
                'url'       =>  true,
                'title'     =>  __('Divider Image', $opt_name), 
                'subtitle'  =>  __('Upload a transparent divider line image', $xisen_textdomain),
            ),
        )
    ) );