

<?php
get_template_part('/inc/theme-options/cs-framework');

// framework Metabox options filter example

function afflifiate_theme_framework_options($options)
{
    $options = array(); // remove old options
    
    // All page option meta
    
    $options[] = array(
        'id' => 'afflifiate_theme_page_meta',
        'title' => 'Page Options',
        'post_type' => 'page',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'afflifiate_theme_page_metabox',
                'title' => 'Page Options',
                'fields' => array(
                    
                    // begin: a field
                    
                    array(
                        'id' => 'enable_title',
                        'type' => 'switcher',
                        'title' => 'Enable Page Title',
                        'default' => 'false'
                    ),
                    
                    // end: a field
                    
                    array(
                        'id' => 'custom_title',
                        'type' => 'textarea',
                        'title' => 'Add Page custom Title',
                        'dependency' => array(
                            'enable_title',
                            '==',
                            'true'
                        )
                    ),
                    
                    // end: a field
                    
                    array(
                        'id' => 'text_title_direction',
                        'type' => 'select',
                        'title' => 'Select Text Align',
                        'options' => array(
                            'center' => 'Center',
                            'left' => 'Left',
                            'right' => 'Right'
                        ),
                        'default' => 'left',
                        'dependency' => array(
                            'enable_title',
                            '==',
                            'true'
                        )
                    ),
                    
                    // end: a field
                    
                    array(
                        'id' => 'header_style',
                        'type' => 'select',
                        'title' => 'Select Header Style',
                        'options' => array(
                            '8' => 'Header 1',
                            '12' => 'Header 2'
                        ),
                        'default' => 'Header 1'
                    )
                    
                    // end: a field
                    
                )
            )
        )
    );
    return $options;
}

add_filter('cs_metabox_options', 'afflifiate_theme_framework_options');

// framework Theme options filter example

function afflifiate_theme_options($options)
{
    $options = array();
    /*remove old options*/
    
    // Add acording option
    
    $options[] = array(
        'name' => 'header_options',
        'title' => 'Header Options',
        'icon' => 'fa fa-minus',
        'sections' => array(
            
            // Header top left start
            
            array(
                'name' => 'header_top',
                'title' => 'Header Top',
                'icon' => 'fa fa-minus',
                'fields' => array(
                    array(
                        'id' => 'header_top_option',
                        'type' => 'switcher',
                        'title' => 'Header Top Option',
                        'default' => true
                    ),
                    array(
                        'id' => 'bloginfo_options',
                        'type' => 'switcher',
                        'title' => 'Blog Info Options',
                        'default' => true
                    ),
                    array(
                        'id' => 'header_top_left',
                        'type' => 'fieldset',
                        'title' => 'Header Top Left',
                        'dependency' => array(
                            'bloginfo_options',
                            '==',
                            'true'
                        ),
                        'fields' => array(
                            array(
                                'id' => 'site_title',
                                'type' => 'text',
                                'title' => 'Site Title'
                            ),
                            array(
                                'id' => 'site_tagline',
                                'type' => 'text',
                                'title' => 'Site Tagline'
                            ),
                            array(
                                'id' => 'blog_info_name',
                                'type' => 'text',
                                'title' => 'Blog Info Name'
                            ),
                            array(
                                'id' => 'blog_info_url',
                                'type' => 'text',
                                'title' => 'Blog Info Url'
                            )
                        )
                    ),
                    array(
                        'id' => 'social_link_array',
                        'type' => 'group',
                        'title' => 'Social Link Add',
                        'button_title' => 'Add New',
                        'accordion_title' => 'Add New Social Link',
                        'fields' => array(
                            array(
                                'id' => 'social_icon',
                                'type' => 'icon',
                                'title' => 'Select social Icon'
                            ),
                            array(
                                'id' => 'htop_icon_bg_color',
                                'type' => 'color_picker',
                                'title' => 'Icon Background Color',
                                'default' => '#000',
                                'rgba' => true
                            ),
                            array(
                                'id' => 'htop_icon_color',
                                'type' => 'color_picker',
                                'title' => 'Icon Color',
                                'default' => '#fff',
                                'rgba' => true
                            ),
                            array(
                                'id' => 'social_link',
                                'type' => 'text',
                                'title' => 'Social link add'
                            )
                        )
                    )
                )
            ),
            array(
                'name' => 'header_middle',
                'title' => 'Header Middle',
                'icon' => 'fa fa-minus',
                'fields' => array(
                    array(
                        'id' => 'header_middle_options',
                        'type' => 'switcher',
                        'title' => 'Header Middle Options',
                        'default' => true
                    ),
                    array(
                        'id' => 'header_middle_option',
                        'type' => 'fieldset',
                        'title' => 'Header Top Left',
                        'dependency' => array(
                            'header_middle_options',
                            '==',
                            'true'
                        ),
                        'fields' => array(
                            array(
                                'id' => 'header_logo',
                                'type' => 'image',
                                'title' => 'Image with Custom Title',
                                'add_title' => 'Add Logo'
                            ),
                            array(
                                'id' => 'header_banner',
                                'type' => 'image',
                                'title' => 'Header Banner With Logo',
                                'desc' => 'If use this option (not use gradient color option) ',
                                'add_title' => 'Add Banner'
                            ),
                            array(
                                'id' => 'header_logo_text',
                                'type' => 'text',
                                'title' => 'Logo Right Text'
                            ),
                            array(
                                'id' => 'hlogo_bg_color',
                                'type' => 'textarea',
                                'title' => 'Logo Area BG Color',
                                'default' => 'linear-gradient(to bottom, #33ccff 6%, #66ff99 84%);',
                                'desc' => 'This is gradient color option'
                                
                            ),
                            array(
                                'id' => 'hlogo_text_color',
                                'type' => 'color_picker',
                                'title' => 'Logo Area Text Color',
                                'default' => '#ffbc00',
                                'rgba' => true
                            )
                        )
                    ),
                    array(
                        'id' => 'header_after_options',
                        'type' => 'switcher',
                        'title' => 'Header After Options',
                        'default' => true
                    ),
                    array(
                        'id' => 'after_header_option',
                        'type' => 'fieldset',
                        'title' => 'After Header Option',
                        'dependency' => array(
                            'header_after_options',
                            '==',
                            'true'
                        ),
                        'fields' => array(
                            array(
                                'id' => 'after_header_text',
                                'type' => 'text',
                                'title' => 'After Header Text'
                            ),
                            array(
                                'id' => 'after_header_bg_color',
                                'type' => 'color_picker',
                                'title' => 'After Header BG Color',
                                'default' => '#999999',
                                'rgba' => true
                            ),
                            array(
                                'id' => 'after_header_text_color',
                                'type' => 'color_picker',
                                'title' => 'After Header Text Color',
                                'default' => '#000',
                                'rgba' => true
                            )
                        )
                    )
                )
            ),
            array(
                'name' => 'header_bottom',
                'title' => 'Header Bottom',
                'icon' => 'fa fa-minus',
                'fields' => array(
                    array(
                        'id' => 'header_bottom_options',
                        'type' => 'switcher',
                        'title' => 'Header Bottom Options',
                        'default' => true
                    ),
                    array(
                        'id' => 'marquee_label_option',
                        'type' => 'fieldset',
                        'title' => 'Marquee Option',
                        'dependency' => array(
                            'header_bottom_options',
                            '==',
                            'true'
                        ),
                        'fields' => array(
                            array(
                                'id' => 'marquee_label_text',
                                'type' => 'text',
                                'title' => 'Marquee Label Text'
                            ),
                            array(
                                'id' => 'marquee_label_bg_color',
                                'type' => 'color_picker',
                                'title' => 'Marquee Label BG Color',
                                'default' => '#fff',
                                'rgba' => true
                            ),
                            array(
                                'id' => 'marquee_label_text_color',
                                'type' => 'color_picker',
                                'title' => 'Marquee Label Text Color',
                                'default' => '#0b9',
                                'rgba' => true
                            )
                        )
                    ),
                    array(
                        'id' => 'marquee_post_option',
                        'type' => 'fieldset',
                        'title' => 'Marquee Post Option',
                        'dependency' => array(
                            'header_bottom_options',
                            '==',
                            'true'
                        ),
                        'fields' => array(
                            array(
                                'id' => 'marquee_post_text',
                                'type' => 'textarea',
                                'title' => 'Marquee Post Text'
                            ),
                            array(
                                'id' => 'marquee_post_bg_color',
                                'type' => 'color_picker',
                                'title' => 'Marquee Post BG Color',
                                'default' => '#fff',
                                'rgba' => true
                            ),
                            array(
                                'id' => 'marquee_post_text_color',
                                'type' => 'color_picker',
                                'title' => 'Marquee Post Text Color',
                                'default' => '#0b9',
                                'rgba' => true
                            )
                        )
                    ),
                    
                    array(
                        'id' => 'marquee_post_link_option',
                        'type' => 'fieldset',
                        'title' => 'Marquee Post Link Option',
                        'dependency' => array(
                            'header_bottom_options',
                            '==',
                            'true'
                        ),
                        'fields' => array(
                            array(
                                'id' => 'marquee_post_type',
                                'type' => 'select',
                                'title' => 'Select Your Post Type',
                                'options' => 'post_type',
                                'class' => 'chosen',
                                'default_option' => 'Select a type'
                            ),
                            
                            array(
                                'id' => 'marquee_post_count',
                                'type' => 'number',
                                'title' => 'How Many Post Show',
                                'default' => '5'
                            )
                            
                        )
                    )
                )
            )
        )
    );
    
    // End header acordian option
    // Blog Option Start
    
    $options[] = array(
        'name' => 'afflifiate_theme_blog_options',
        'title' => 'Blog Options',
        'icon' => 'fa fa-heart',
        'fields' => array(
            array(
                'id' => 'enable_post_by',
                'type' => 'switcher',
                'title' => 'Display Posted By',
                'default' => true
            ),
            array(
                'id' => 'enable_posted_on',
                'type' => 'switcher',
                'title' => 'Display Posted On',
                'default' => true
            ),
            
            array(
                'id' => 'enable_post_category',
                'type' => 'switcher',
                'title' => 'Display Posted category',
                'default' => true
            ),
            array(
                'id' => 'enable_post_tag',
                'type' => 'switcher',
                'title' => 'Display Posted Tag',
                'default' => true
            ),
            array(
                'id' => 'enable_single_post_pagination',
                'type' => 'switcher',
                'title' => 'Display Single Post Pagination',
                'default' => true
            ),
            array(
                'id' => 'blog_full_width',
                'type' => 'switcher',
                'title' => 'Display Full Width Blog',
                'default' => false
            )
        )
    );
    
    // Blog Option End
    
    // Advertise section acordian    
    $options[] = array(
        'name' => 'advertise_options',
        'title' => 'Advertise Options',
        'icon' => 'fa fa-minus',
        'sections' => array(
            
            array(
                'name' => 'blog_page_advertise',
                'title' => 'Blog Page Adds',
                'icon' => 'fa fa-minus',
                'fields' => array(
                    array(
                        'id' => 'blog_post_adds_two',
                        'type' => 'switcher',
                        'title' => 'Its Option For Blog Page',
                        'desc' => 'Use code for after two post',
                        'default' => true
                    ),
                    array(
                        'id' => 'blog_post_adds_field_two',
                        'type' => 'textarea',
                        'title' => 'Blog Post cript Option',
                        'dependency' => array(
                            'blog_post_adds_two',
                            '==',
                            'true'
                        )
                        
                    ),
                    array(
                        'id' => 'blog_post_adds_four',
                        'type' => 'switcher',
                        'title' => 'Its Option For Blog Page',
                        'desc' => 'Use code for after four post',
                        'default' => true
                    ),
                    array(
                        'id' => 'blog_post_adds_field_four',
                        'type' => 'textarea',
                        'title' => 'Blog Post cript Option',
                        'dependency' => array(
                            'blog_post_adds_four',
                            '==',
                            'true'
                        )
                        
                    ),
                    
                    array(
                        'id' => 'blog_post_adds_six',
                        'type' => 'switcher',
                        'title' => 'Its Option For Blog Page',
                        'desc' => 'Use code for after six post',
                        'default' => true
                    ),
                    array(
                        'id' => 'blog_post_adds_field_six',
                        'type' => 'textarea',
                        'title' => 'Blog Post cript Option',
                        'dependency' => array(
                            'blog_post_adds_six',
                            '==',
                            'true'
                        )
                        
                    ),
                    
                    array(
                        'id' => 'blog_post_adds_eight',
                        'type' => 'switcher',
                        'title' => 'Its Option For Blog Page',
                        'desc' => 'Use code for after eight post',
                        'default' => true
                    ),
                    array(
                        'id' => 'blog_post_adds_field_eight',
                        'type' => 'textarea',
                        'title' => 'Blog Post cript Option',
                        'dependency' => array(
                            'blog_post_adds_eight',
                            '==',
                            'true'
                        )
                        
                    ),
                    
                    array(
                        'id' => 'blog_post_adds_ten',
                        'type' => 'switcher',
                        'title' => 'Its Option For Blog Page',
                        'desc' => 'Use code for after ten post',
                        'default' => true
                    ),
                    array(
                        'id' => 'blog_post_adds_field_ten',
                        'type' => 'textarea',
                        'title' => 'Blog Post cript Option',
                        'dependency' => array(
                            'blog_post_adds_ten',
                            '==',
                            'true'
                        )
                        
                    )
                    
                )
            ),
            
            array(
                'name' => 'footer_page_advertise',
                'title' => 'Footer Page Top Adds',
                'icon' => 'fa fa-minus',
                'fields' => array(
                    array(
                        'id' => 'footer_page_top_advertise',
                        'type' => 'switcher',
                        'title' => 'Its Option For Footer Section',
                        'desc' => 'On this option for footer',
                        'default' => true
                    ),

                    array(
                        'id' => 'footer_page_top_adds',
                        'type' => 'group',
                        'title' => 'Footer Page Top  Adds',
                        'dependency' => array(
                            'footer_page_top_advertise',
                            '==',
                            'true'
                        ),
                        'button_title' => 'Add New Advertise',
                        'accordion_title' => 'Add New Page Adds',
                        'fields' => array(
                            array(
                                'id' => 'col_number',
                                'type' => 'select',
                                'title' => 'Select Colum Number',
                                'options' => array(
                                    '1' => 'col-md-1',
                                    '2' => 'col-md-2',
                                    '3' => 'col-md-3',
                                    '4' => 'col-md-4',
                                    '5' => 'col-md-5',
                                    '6' => 'col-md-6',
                                    '7' => 'col-md-7',
                                    '8' => 'col-md-8',
                                    '9' => 'col-md-9',
                                    '10' => 'col-md-10',
                                    '11' => 'col-md-11',
                                    '12' => 'col-md-12'
                                )
                            ),
                            array(
                                'id' => 'offset_number',
                                'type' => 'select',
                                'title' => 'Select Offset Number',
                                'options' => array(
                                    '0' => 'offset-md-0',
                                    '1' => 'offset-md-1',
                                    '2' => 'offset-md-2',
                                    '3' => 'offset-md-3',
                                    '4' => 'offset-md-4',
                                    '5' => 'offset-md-5',
                                    '6' => 'offset-md-6',
                                    '7' => 'offset-md-7',
                                    '8' => 'offset-md-8',
                                    '9' => 'offset-md-9',
                                    '10' => 'offset-md-10',
                                    '11' => 'offset-md-11',
                                    '12' => 'offset-md-12'
                                )
                            ),
                            array(
                                'id' => 'front_page_add',
                                'type' => 'textarea',
                                'title' => 'This adds for Page'
                            )
  
                        )
 
                    ),

                    array(
                        'id' => 'footer_page_blog_top_adds',
                        'type' => 'group',
                        'title' => 'Footer Blog Page Top Adds',
                        'dependency' => array(
                            'footer_page_top_advertise',
                            '==',
                            'true'
                        ),
                        'button_title' => 'Add New Advertise',
                        'accordion_title' => 'Add New Blog Adds',
                        'fields' => array(
                            array(
                                'id' => 'col_number',
                                'type' => 'select',
                                'title' => 'Select Colum Number',
                                'options' => array(
                                    '1' => 'col-md-1',
                                    '1' => 'col-md-1',
                                    '2' => 'col-md-2',
                                    '3' => 'col-md-3',
                                    '4' => 'col-md-4',
                                    '5' => 'col-md-5',
                                    '6' => 'col-md-6',
                                    '7' => 'col-md-7',
                                    '8' => 'col-md-8',
                                    '9' => 'col-md-9',
                                    '10' => 'col-md-10',
                                    '11' => 'col-md-11',
                                    '12' => 'col-md-12'
                                )
                            ),
                            array(
                                'id' => 'offset_number',
                                'type' => 'select',
                                'title' => 'Select Offset Number',
                                'options' => array(
                                    '0' => 'offset-md-0',
                                    '1' => 'offset-md-1',
                                    '2' => 'offset-md-2',
                                    '3' => 'offset-md-3',
                                    '4' => 'offset-md-4',
                                    '5' => 'offset-md-5',
                                    '6' => 'offset-md-6',
                                    '7' => 'offset-md-7',
                                    '8' => 'offset-md-8',
                                    '9' => 'offset-md-9',
                                    '10' => 'offset-md-10',
                                    '11' => 'offset-md-11',
                                    '12' => 'offset-md-12'
                                )
                            ),
                            array(
                                'id' => 'front_page_add',
                                'type' => 'textarea',
                                'title' => 'This adds for blog Page'
                            )
  
                        )
 
                    ),

                    array(
                        'id' => 'footer_single_page_top_adds',
                        'type' => 'group',
                        'title' => 'Footer Single Page Top Adds',
                        'dependency' => array(
                            'footer_page_top_advertise',
                            '==',
                            'true'
                        ),
                        'button_title' => 'Add New Advertise',
                        'accordion_title' => 'Add New Single Adds',
                        'fields' => array(
                            array(
                                'id' => 'col_number',
                                'type' => 'select',
                                'title' => 'Select Colum Number',
                                'options' => array(
                                    '1' => 'col-md-1',
                                    '2' => 'col-md-2',
                                    '3' => 'col-md-3',
                                    '4' => 'col-md-4',
                                    '5' => 'col-md-5',
                                    '6' => 'col-md-6',
                                    '7' => 'col-md-7',
                                    '8' => 'col-md-8',
                                    '9' => 'col-md-9',
                                    '10' => 'col-md-10',
                                    '11' => 'col-md-11',
                                    '12' => 'col-md-12'
                                )
                            ),
                            array(
                                'id' => 'offset_number',
                                'type' => 'select',
                                'title' => 'Select Offset Number',
                                'options' => array(
                                    '0' => 'offset-md-0',
                                    '1' => 'offset-md-1',
                                    '2' => 'offset-md-2',
                                    '3' => 'offset-md-3',
                                    '4' => 'offset-md-4',
                                    '5' => 'offset-md-5',
                                    '6' => 'offset-md-6',
                                    '7' => 'offset-md-7',
                                    '8' => 'offset-md-8',
                                    '9' => 'offset-md-9',
                                    '10' => 'offset-md-10',
                                    '11' => 'offset-md-11',
                                    '12' => 'offset-md-12'
                                )
                            ),
                            array(
                                'id' => 'single_page_ads',
                                'type' => 'textarea',
                                'title' => 'This adds for single Page'
                            )
  
                        )
 
                    ),

                        array(
                        'id' => 'footer_category_page_top_adds',
                        'type' => 'group',
                        'title' => 'Footer Category Page Top Adds',
                        'dependency' => array(
                            'footer_page_top_advertise',
                            '==',
                            'true'
                        ),
                        'button_title' => 'Add New Advertise',
                        'accordion_title' => 'Add New Category Adds',
                        'fields' => array(
                            array(
                                'id' => 'col_number',
                                'type' => 'select',
                                'title' => 'Select Colum Number',
                                'options' => array(
                                    '1' => 'col-md-1',
                                    '2' => 'col-md-2',
                                    '3' => 'col-md-3',
                                    '4' => 'col-md-4',
                                    '5' => 'col-md-5',
                                    '6' => 'col-md-6',
                                    '7' => 'col-md-7',
                                    '8' => 'col-md-8',
                                    '9' => 'col-md-9',
                                    '10' => 'col-md-10',
                                    '11' => 'col-md-11',
                                    '12' => 'col-md-12'
                                )
                            ),
                            array(
                                'id' => 'offset_number',
                                'type' => 'select',
                                'title' => 'Select Offset Number',
                                'options' => array(
                                    '0' => 'offset-md-0',
                                    '1' => 'offset-md-1',
                                    '2' => 'offset-md-2',
                                    '3' => 'offset-md-3',
                                    '4' => 'offset-md-4',
                                    '5' => 'offset-md-5',
                                    '6' => 'offset-md-6',
                                    '7' => 'offset-md-7',
                                    '8' => 'offset-md-8',
                                    '9' => 'offset-md-9',
                                    '10' => 'offset-md-10',
                                    '11' => 'offset-md-11',
                                    '12' => 'offset-md-12'
                                )
                            ),
                            array(
                                'id' => 'single_page_ads',
                                'type' => 'textarea',
                                'title' => 'This adds for single Page'
                            )
  
                        )
 
                    ),
                 
   
                )
            ),
            array(
                'name' => 'footer_bottom_advertise',
                'title' => 'Footer Page bottom Adds',
                'icon' => 'fa fa-minus',
                'fields' => array(
                    array(
                        'id' => 'footer_page_bottom_advertise',
                        'type' => 'switcher',
                        'title' => 'Its Option For Footer Section',
                        'desc' => 'On this option for footer',
                        'default' => true
                    ),

                    array(
                        'id' => 'footer_page_bottom_adds',
                        'type' => 'group',
                        'title' => 'Footer Page bottom  Adds',
                        'dependency' => array(
                            'footer_page_bottom_advertise',
                            '==',
                            'true'
                        ),
                        'button_title' => 'Add New Advertise',
                        'accordion_title' => 'Add New Page Adds',
                        'fields' => array(
                            array(
                                'id' => 'col_number',
                                'type' => 'select',
                                'title' => 'Select Colum Number',
                                'options' => array(
                                    '1' => 'col-md-1',
                                    '2' => 'col-md-2',
                                    '3' => 'col-md-3',
                                    '4' => 'col-md-4',
                                    '5' => 'col-md-5',
                                    '6' => 'col-md-6',
                                    '7' => 'col-md-7',
                                    '8' => 'col-md-8',
                                    '9' => 'col-md-9',
                                    '10' => 'col-md-10',
                                    '11' => 'col-md-11',
                                    '12' => 'col-md-12'
                                )
                            ),
                            array(
                                'id' => 'offset_number',
                                'type' => 'select',
                                'title' => 'Select Offset Number',
                                'options' => array(
                                    '0' => 'offset-md-0',
                                    '1' => 'offset-md-1',
                                    '2' => 'offset-md-2',
                                    '3' => 'offset-md-3',
                                    '4' => 'offset-md-4',
                                    '5' => 'offset-md-5',
                                    '6' => 'offset-md-6',
                                    '7' => 'offset-md-7',
                                    '8' => 'offset-md-8',
                                    '9' => 'offset-md-9',
                                    '10' => 'offset-md-10',
                                    '11' => 'offset-md-11',
                                    '12' => 'offset-md-12'
                                )
                            ),
                            array(
                                'id' => 'front_page_add',
                                'type' => 'textarea',
                                'title' => 'This adds for Page'
                            )
  
                        )
 
                    ),

                    array(
                        'id' => 'footer_page_blog_bottom_adds',
                        'type' => 'group',
                        'title' => 'Footer Blog Page bottom Adds',
                        'dependency' => array(
                            'footer_page_bottom_advertise',
                            '==',
                            'true'
                        ),
                        'button_title' => 'Add New Advertise',
                        'accordion_title' => 'Add New Blog Adds',
                        'fields' => array(
                            array(
                                'id' => 'col_number',
                                'type' => 'select',
                                'title' => 'Select Colum Number',
                                'options' => array(
                                    '1' => 'col-md-1',
                                    '1' => 'col-md-1',
                                    '2' => 'col-md-2',
                                    '3' => 'col-md-3',
                                    '4' => 'col-md-4',
                                    '5' => 'col-md-5',
                                    '6' => 'col-md-6',
                                    '7' => 'col-md-7',
                                    '8' => 'col-md-8',
                                    '9' => 'col-md-9',
                                    '10' => 'col-md-10',
                                    '11' => 'col-md-11',
                                    '12' => 'col-md-12'
                                )
                            ),
                            array(
                                'id' => 'offset_number',
                                'type' => 'select',
                                'title' => 'Select Offset Number',
                                'options' => array(
                                    '0' => 'offset-md-0',
                                    '1' => 'offset-md-1',
                                    '2' => 'offset-md-2',
                                    '3' => 'offset-md-3',
                                    '4' => 'offset-md-4',
                                    '5' => 'offset-md-5',
                                    '6' => 'offset-md-6',
                                    '7' => 'offset-md-7',
                                    '8' => 'offset-md-8',
                                    '9' => 'offset-md-9',
                                    '10' => 'offset-md-10',
                                    '11' => 'offset-md-11',
                                    '12' => 'offset-md-12'
                                )
                            ),
                            array(
                                'id' => 'front_page_add',
                                'type' => 'textarea',
                                'title' => 'This adds for blog Page'
                            )
  
                        )
 
                    ),

                    array(
                        'id' => 'footer_single_page_bottom_adds',
                        'type' => 'group',
                        'title' => 'Footer Single Page bottom Adds',
                        'dependency' => array(
                            'footer_page_bottom_advertise',
                            '==',
                            'true'
                        ),
                        'button_title' => 'Add New Advertise',
                        'accordion_title' => 'Add New Single Adds',
                        'fields' => array(
                            array(
                                'id' => 'col_number',
                                'type' => 'select',
                                'title' => 'Select Colum Number',
                                'options' => array(
                                    '1' => 'col-md-1',
                                    '2' => 'col-md-2',
                                    '3' => 'col-md-3',
                                    '4' => 'col-md-4',
                                    '5' => 'col-md-5',
                                    '6' => 'col-md-6',
                                    '7' => 'col-md-7',
                                    '8' => 'col-md-8',
                                    '9' => 'col-md-9',
                                    '10' => 'col-md-10',
                                    '11' => 'col-md-11',
                                    '12' => 'col-md-12'
                                )
                            ),
                            array(
                                'id' => 'offset_number',
                                'type' => 'select',
                                'title' => 'Select Offset Number',
                                'options' => array(
                                    '0' => 'offset-md-0',
                                    '1' => 'offset-md-1',
                                    '2' => 'offset-md-2',
                                    '3' => 'offset-md-3',
                                    '4' => 'offset-md-4',
                                    '5' => 'offset-md-5',
                                    '6' => 'offset-md-6',
                                    '7' => 'offset-md-7',
                                    '8' => 'offset-md-8',
                                    '9' => 'offset-md-9',
                                    '10' => 'offset-md-10',
                                    '11' => 'offset-md-11',
                                    '12' => 'offset-md-12'
                                )
                            ),
                            array(
                                'id' => 'single_page_ads',
                                'type' => 'textarea',
                                'title' => 'This adds for single Page'
                            )
  
                        )
 
                    ),

                        array(
                        'id' => 'footer_category_page_bottom_adds',
                        'type' => 'group',
                        'title' => 'Footer Category Page bottom Adds',
                        'dependency' => array(
                            'footer_page_bottom_advertise',
                            '==',
                            'true'
                        ),
                        'button_title' => 'Add New Advertise',
                        'accordion_title' => 'Add New Category Adds',
                        'fields' => array(
                            array(
                                'id' => 'col_number',
                                'type' => 'select',
                                'title' => 'Select Colum Number',
                                'options' => array(
                                    '1' => 'col-md-1',
                                    '2' => 'col-md-2',
                                    '3' => 'col-md-3',
                                    '4' => 'col-md-4',
                                    '5' => 'col-md-5',
                                    '6' => 'col-md-6',
                                    '7' => 'col-md-7',
                                    '8' => 'col-md-8',
                                    '9' => 'col-md-9',
                                    '10' => 'col-md-10',
                                    '11' => 'col-md-11',
                                    '12' => 'col-md-12'
                                )
                            ),
                            array(
                                'id' => 'offset_number',
                                'type' => 'select',
                                'title' => 'Select Offset Number',
                                'options' => array(
                                    '0' => 'offset-md-0',
                                    '1' => 'offset-md-1',
                                    '2' => 'offset-md-2',
                                    '3' => 'offset-md-3',
                                    '4' => 'offset-md-4',
                                    '5' => 'offset-md-5',
                                    '6' => 'offset-md-6',
                                    '7' => 'offset-md-7',
                                    '8' => 'offset-md-8',
                                    '9' => 'offset-md-9',
                                    '10' => 'offset-md-10',
                                    '11' => 'offset-md-11',
                                    '12' => 'offset-md-12'
                                )
                            ),
                            array(
                                'id' => 'single_page_ads',
                                'type' => 'textarea',
                                'title' => 'This adds for single Page'
                            )
  
                        )
 
                    ),
                 
   
                )
            )
        )
        
    );
    
    // Start footer acordian    
    $options[] = array(
        'name' => 'footer_options',
        'title' => 'Footer Options',
        'icon' => 'fa fa-minus',
        'sections' => array(
            
            // Header top left start
            
            array(
                'name' => 'footer_copy_write_section',
                'title' => 'Footer CopyWrite Section',
                'icon' => 'fa fa-minus',
                
                'fields' => array(
                    array(
                        'id' => 'footer_copy_write_field',
                        'type' => 'fieldset',
                        'title' => 'Footer CopyWrite Field',
                        'fields' => array(
                            
                            array(
                                'id' => 'footer_copy_write_text',
                                'type' => 'textarea',
                                'title' => 'Footer CopyWrite Text'
                            ),
                            array(
                                'id' => 'footer_copy_write_bg_color',
                                'type' => 'color_picker',
                                'title' => 'Footer CopyWrite BG Color',
                                'default' => '#fff',
                                'rgba' => true
                            ),
                            array(
                                'id' => 'footer_copy_write_text_color',
                                'type' => 'color_picker',
                                'title' => 'Footer CopyWrite Text Color',
                                'default' => '#0b9',
                                'rgba' => true
                            )
                            
                        )
                    )
                    
                    
                )
                
            )
        )
        
    );
    // End footer acordian
    
    $options[] = array(
        'name' => 'script_section',
        'title' => 'Script Section',
        'fields' => array(
            array(
                'id' => 'custom_css',
                'type' => 'textarea',
                'sanitize' => false,
                'title' => 'Custom Css'
            )
        )
    );
    return $options;
}

add_filter('cs_framework_options', 'afflifiate_theme_options');

// framework Custom options filter example

function afflifiate_theme_custom_framework_options($options)
{
    $options = array(); // remove old options
    return $options;
}

add_filter('cs_customize_options', 'afflifiate_theme_custom_framework_options');

