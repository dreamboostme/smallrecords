<?php return [
    'plugin' => [
        'name' => 'Small records',
        'name_short' => 'Records',
        'name_original' => 'Small records',
        'description' => 'Universal records storage plugin',
    ],

    'common' => [

        'import' => 'Import',
        'export' => 'Export',
        'edit' => 'Edit',
        'desc' => 'Descending',
        'asc' => 'Ascending',

        'menu' => [
            'areas' => 'Lists',
            'area' => 'List',
        ],

        'tabs' => [
            'info' => 'Info',
            'images' => 'Images',
            'content' => 'Content',
            'fields' => 'Fields',
            'notes' => 'Notes',
            'tags' => 'Tags',
            'attributes' => 'Attributes',
            'attachments' => 'Attachments',
            'secondary_categories' => 'Categories',
            'testimonials' => 'Testimonials',
            'content_blocks' => 'Content blocks',
            'records' => 'Records',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'slug' => 'Slug',
            'active' => 'Active',
            'favourite' => 'Favourite',
            'date' => 'Date',
            'url' => 'URL',
            'description' => 'Description',
            'content' => 'Content',
            'preview_image' => 'Preview image',
            'preview_image_media' => 'Preview (Media)',
            'images' => 'Images',
            'images_media' => 'Images (Media)',
            'attached_images_count' => 'Images',
            'area' => 'List',
            'category' => 'Main category',
            'category_comment' => 'You can manage items on <a href="'.Backend::url('janvince/smallrecords/categories/index').'">Categories page</a>',
            'tags' => 'Tags',
            'attributes' => 'Attributes',
            'files' => 'Files',
            'categories' => 'Categories',
            'repeater' => 'Information',
            'repeater_prompt' => 'Add new record ...',
            'testimonials' => 'Testimonials',
            'testimonials_prompt' => 'Add new record ...',
            'created_at' => 'Created',
            'updated_at' => 'Updated',
            'sort_order' => 'Custom order',
        ],

        'fields' => [
            'empty_option' => 'Not selected ...',
        ],

        'buttons' => [
            'reorder' => 'Reorder',
            'back_to_list' => 'Back to list',
            'create_and_new' => 'Create and NEW',
            'update_and_new' => 'Save and NEW',
        ],

        'import_settings' => [
            'truncate_table' => 'Empty table before import',
            'truncate_table_description' => 'Delete all categories and reset autoincrement',
            'delete_relations' => 'Delete records relations to categories',
            'delete_relations_description' => 'Delete all record\'s relations to categories',
        ],

    ],

    'areas' => [
        'new_area' => 'New records list',
        'menu_label' => 'Records lists',

        'import' => [
            'import_records' => 'Import records',
            'export_records' => 'Export records',
            'area_id_description' => 'You can export data only from a specific List',
            'area_id_empty_option' => '-- All records --',
        ],

        'columns' => [
            'allowed_fields' => 'Available records fields',
            'allowed_fields_comment' => 'Checked fields will be visible in records editing form. This list is long so scroll down! <br><em>Some field will be visible after you create a record (they are dependent on record\'s ID)!</em>',

            'custom_repeater_allow' => 'Allow custom repeater form field',
            'custom_repeater_tab_title' => 'Custom repeater tab title',
            'custom_repeater_prompt' => 'Custom repeater "Add new item" custom prompt',
            'custom_repeater_min_items' => 'Custom repeater minimum required items',
            'custom_repeater_max_items' => 'Custom repeater maximum allowed items',

            'custom_repeater' => [
                'repeater_prompt' => 'Add field',
                'field_type' => 'Field type',
                'field_name' => 'Field name',
                'field_name_comment' => 'Field name like: my_record_name. You will use this in Twig to access field value.',
                'field_label' => 'Field label',
                'field_span' => 'Field span',
                'field_mode' => 'Mode',
                'field_size' => 'Size',
                'options' => [
                    'text' => 'Text',
                    'textarea' => 'Text area',
                    'richeditor' => 'Richtext editor',
                    'number' => 'Number',
                    'checkbox' => 'Checkbox',
                    'mediafinder' => 'Mediafinder',
                    'section' => 'Section',
                    'left' => 'Left',
                    'right' => 'Right',
                    'full' => 'Full',
                    'file' => 'File',
                    'image' => 'Image',
                    'tiny' => 'Tiny',
                    'small' => 'Small',
                    'large' => 'Large',
                    'huge' => 'Huge',
                    'giant' => 'Giant',
                    'empty_option' => 'Select ...'
                ]
            ],
        ],

        'tabs' => [
            'custom_repeater' => 'Custom repeater',
        ]

    ],

    'records' => [
        'menu_label' => 'Records',
        'return_to_records' => 'Return to Records',
        'reordering_description' => 'Use "Custom order" in components\'s sorting option.',
        'reorder' => 'Custom order',

        'images_media' => [
            'image' => 'Image',
            'title' => 'Title',
            'description' => 'Description',
        ],

        'repeater' => [
            'repeater_prompt' => 'Add item ...',
            'value1' => 'Value 1',
            'value2' => 'Value 2',
            'value3' => 'Value 3',
            'value4' => 'Value 4',
            'text' => 'Text',
        ],

        'testimonials' => [
            'title' => 'Title',
            'image' => 'Image',
            'author' => 'Author',
            'date' => 'Date',
            'content' => 'Content',
        ],

        'content_blocks' => [
            'title' => 'Title',
            'subtitle' => 'Subtitle',
            'image' => 'Image',
            'author' => 'Author',
            'date' => 'Date',
            'content' => 'Content',
            'preview_image' => 'Preview image',
            'description' => 'Description',
            'code' => 'Code',
            'disable' => 'Disable',
            'favourite' => 'Favourite',
        ],

        'scoreboard' => [
            'records_count' => 'Records count',
            'records_active' => 'Active',
            'records_hidden' => 'Hidden',
            'records_favourite' => 'Favourite',
            'records_common' => 'Common',
            'latest_record' => 'Latest',
            'latest_record_date' => 'Created: ',
            'active_area' => '{0} records in|{1} record in|[2,Inf[ %count% records in',
        ]

    ],

    'categories' => [
        'menu_label' => 'Categories',
        'category' => 'Category',
        'new_category' => 'New category',
        'return_to_categories' => 'Return to Categories',
        'category' => 'Category',
        'secondary_categories' => 'More categories',

        'columns' => [
            'main_category' => 'Main category',
            'parent' => 'Parent category',
            'parent_comment' => 'You can change hierarchy and order on <a href="'.Backend::url('janvince/smallrecords/categories/reorder').'">Reorder page</a>',
        ],

        'tabs' => [
            'secondary_categories' => 'Secondary categories',
            'secondary_categories_comment' => 'Records can have one main category and many secondary categories',
        ]

    ],

    'attributes' => [
        'menu_label' => 'Attributes',
        'new_attribute' => 'New attribute',
        'attribute' => 'Attribute',
        'return_to_attributes' => 'Return to Attributes',

        'columns' => [
            'name' => 'Name',
            'slug' => 'Slug',
            'value_text' => 'Text',
            'value_number' => 'Number',
            'value_boolean' => 'State',
            'value_switch' => 'Switch (Yes/No)',
            'value_type' => 'Type of value data',
            'value_type_comment' => 'Based on selected data type, correct input field will be shown in relation form',
            'value_string' => 'String',
        ],

        'tabs' => [
            'attributes' => 'Attributes',
            'attributes_comment' => 'You can assign attributes and add their values',

        ],


    ],

    'tags' => [
        'menu_label' => 'Tags',
        'return_to_tags' => 'Return to Tags',
        'new_tag' => 'New Tag',
        'tag' => 'Tag',
        'reorder' => 'Reorder',

        'columns' => [
            'name' => 'Name',
            'slug' => 'Slug',
            'description' => 'Description',
            'value' => 'Value',
            'icon' => 'Icon',
        ],

        'tabs' => [
            'tags' => 'Tags'
        ]

    ],

    'forms' => [
        'reorder' => 'Reorder',
        'delete_attached_images' => 'Delete all attached images',
        'delete_attached_images_confirm' => 'Really delete all attached images on tab Images?',
        'deleting_attached_images' => 'Deleting all attached images ...',
    ],

    'components' => [

        'records' => [
            'name' => 'Records',
            'description' => 'Get list of records',

            'properties' => [
                'area' => 'List',
                'area_description' => 'Select a List to get records from',
                'category' => 'Category slug',
                'category_description' => 'Category slug (dynamic like :category or manually entered)',
                'tag' => 'Tag slug',
                'tag_description' => 'Tag slug (dynamic like :tag or manually entered)',
                'active_only' => 'Active records only',
                'active_only_description' => 'Get only active records (unchecked will get all records)',
                'favourite_only' => 'Favourite records only',
                'favourite_only_description' => 'Get only favourite records (unchecked will get all records)',
                'detail_page_slug' => 'Detail page slug',
                'detail_page_slug_description' => 'Enter a slug of CMS page where you want to render a record\'s details',
                'detail_page_param' => 'Parameter used on detail page',
                'detail_page_param_description' => 'Enter a URL parameter name used on record detail page (eg. "slug" when URL is /records/detail/:slug)',
                'sort_by' => 'Sort by',
                'sort_by_direction' => 'Sort direction',
                'allow_limit' => 'Limit number or records',
                'allow_limit_description' => 'If checked, only required number of records will be returned',
                'limit' => 'Number of records',
                'limit_description' => 'How many records will be returned',
                'pagination_slug' => 'Pagination slug',
                'pagination_slug_description' => 'Enter a slug to use for pagination records',

                'empty_option' => 'Not selected',

                'groups' => [
                    'links' => 'Links',
                    'sort' => 'Sorting',
                    'limit' => 'Limit',
                    'with_categories' => 'With categories',
                    'with_tags' => 'With tags',
                ],

            ],

        ],

        'record' => [
            'name' => 'Record',
            'description' => 'Get one specific record',

            'properties' => [
                'record_slug' => 'Record slug',
                'record_slug_description' => 'Enter a slug of specific record',
                'throw404' => '404 error on invalid slug',
                'throw404_description' => 'Return 404 error when slug is invalid',
            ],

        ],

        'categories' => [
            'name' => 'Categories',
            'description' => 'Get list of categories',

            'properties' => [
                'area' => 'Only with records from list',
                'area_description' => 'Select only categories with records from this list',
                'category_slug' => 'Category slug',
                'category_slug_description' => 'Category slug (dynamic like :category or manually entered)',
                'parent_category_slug' => 'Parent category slug',
                'parent_category_slug_description' => 'Only children of this category will be listed',
                'category_page' => 'Categories page',
                'category_page_description' => 'CMS page where category slug is used in URL (like /category/:category?).',
                'active_only' => 'Active categories only',
                'active_only_description' => 'Get only active categories (unchecked will get all categories)',
                'root_only' => 'Root categories only',
                'root_only_description' => 'Return only root categories',
                'with_records_only' => 'With records only',
                'with_records_only_description' => 'Return only categories with records',
                'area_id_empty_option' => '-- Do not limit to --',

                'allow_limit' => 'Limit number or categories',
                'allow_limit_description' => 'If checked, only required number of categories will be returned',
                'limit' => 'Number of categories',
                'limit_description' => 'How many categories will be returned',

                'use_main_category' => 'With main category records',
                'use_main_category_description' => 'Get only those categories that have records using them as main (on tab Info)',
                'use_multicategories' => 'With secondary categories records',
                'use_multicategories_description' => 'Get only those categories that have records using them as secondary (on tab Categories)',

                'empty_option' => 'Not selected',

                'groups' => [
                    'links' => 'Links',
                    'limit' => 'Limit',
                    'with_records' => 'With records from',
                ],
                
            ],

        ],

        'category' => [
            'name' => 'Category',
            'description' => 'Get one specific category',

            'properties' => [
                'throw404' => '404 error on invalid slug',
                'throw404_description' => 'Return 404 error when slug is invalid',
            ],
        ],
    ],

    'permissions' => [
        'tab_name' => 'Small records permissions',
        'access_areas' => 'Access Lists',
        'access_area' => '> Access to list ',
        'access_records' => 'Access Records',
        'access_categories' => 'Access Categories',
        'access_attributes' => 'Access Attributes',
        'access_settings' => 'Access Settings',
        'access_tags' => 'Access Tags',
        'access_denied' => 'Access denied',
    ],

    'settings' => [
        'main_section' => 'Small records settings',
        'main_section_comment' => 'Some settings for Small records plugin',

        'tabs' => [
            'lists' => 'Lists',
            'connections' => 'Connections',
        ],

        'fields' => [
            'preview_width' => 'Image width for Preview image column',
            'preview_height' => 'Image height for Preview image column',
            'connections_section_blog' => '(Rainlab) Blog',
            'connections_section_pages' => '(Rainlab) Static pages',
            'allow_records_in_blog_posts' => 'Allow records in Blog posts',
            'allow_records_in_blog_posts_comment' => 'Show records list in blog posts (Rainlab.Blog plugin must be installed)',
            'allow_records_in_blog_posts_area' => 'Show records from List',

            'allow_records_in_pages' => 'Allow records in Static pages',
            'allow_records_in_pages_comment' => 'Show records list in static page (Rainlab.Pages plugin must be installed)',
            'allow_records_in_pages_area' => 'Show records from List',
        ],
    ]
];
