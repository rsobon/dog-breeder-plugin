<?php return [
    'plugin' => [
        'name' => 'Dogbreeder',
        'description' => 'Plugin for dog breeders',
        'dogs' => 'Dogs',
        'categories' => 'Categories',
        'puppies' => 'Puppies',
        'published_at' => 'Published at',
        'date' => 'Date'
    ],
    'dog' => [
        'name' => 'Name',
        'birthdate' => 'Birth Date',
        'titles' => 'Titles',
        'description' => 'Description',
        'create' => 'New dog',
        'category' => 'Category',
        'lineage' => 'Lineage',
        'father' => 'Father',
        'mother' => 'Mother',
        'picture' => 'Picture',
        'pictures' => 'Pictures',
        'grandfather' => 'Grandfather',
        'grandmother' => 'Grandmother',
        'fatherslineage' => 'Lineage father\'s side',
        'motherslineage' => 'Lineage mother\'s side',
        'grandfathersection' => 'Grandfather\'s section',
        'grandmothersection' => 'Grandmother\'s section',
        'greatgrandfather' => 'Great Grandfather',
        'greatgrandmother' => 'Great Grandmother',
    ],
    'category' => [
        'name' => 'Name',
        'description' => 'Description',
        'empty' => 'None',
    ],
    'permissions' => [
        'dogs' => 'Can edit dogs',
    ],
    'components' => [
        'dogs' => [
            'name' => 'Dogs',
            'description' => 'Show your dogs on your site',
            'property_id_desc' => 'Choose id of the dog',
            'property_category_desc' => 'Choose dog category'
        ],
        'puppies' => [
            'name' => 'Puppies',
            'description' => 'Show your puppies on your site',
            'property_id_desc' => 'Choose id of the puppies collection'
        ]
    ],
    'puppies' => [
        'name' => 'Litter name',
    ],
];