<?php return [
    'plugin' => [
        'name' => 'Hodowca',
        'description' => 'Plugin dla hodowców psów.',
        'dogs' => 'Psy',
        'categories' => 'Kategorie',
        'puppies' => 'Szczenięta',
        'published_at' => 'Opublikowano',
        'date' => 'Data'
    ],
    'dog' => [
        'name' => 'Imię',
        'birthdate' => 'Data urodzenia',
        'titles' => 'Tytuły',
        'description' => 'Opis',
        'create' => 'Nowy pies',
        'category' => 'Kategoria',
        'lineage' => 'Rodowód',
        'father' => 'Ojciec',
        'mother' => 'Matka',
        'picture' => 'Zdjęcie',
        'pictures' => 'Zdjęcia',
        'grandfather' => 'Dziadek',
        'grandmother' => 'Babcia',
        'fatherslineage' => 'Rodowód ojca',
        'motherslineage' => 'Rodowód matki',
        'grandfathersection' => 'Rodzice dziadka',
        'grandmothersection' => 'Rodzice babci',
        'greatgrandfather' => 'Pra pradziadek',
        'greatgrandmother' => 'Pra prababcia',
    ],
    'category' => [
        'name' => 'Nazwa',
        'description' => 'Opis',
        'empty' => 'Bez kategorii',
    ],
    'permissions' => [
        'dogs' => 'Może edytować psy',
    ],
    'components' => [
        'dogs' => [
            'name' => 'Dogs',
            'description' => 'Pokaż psy na stronie',
            'property_id_desc' => 'Wybierz id psa',
            'property_category_desc' => 'Wybierz kategorię psa',
        ],
        'puppies' => [
            'name' => 'Szczenięta',
            'description' => 'Pokaż szeczenięta na stronie',
            'property_id_desc' => 'Wybierz id kolekcji szczeniąt'
        ],
    ],
    'puppies' => [
        'name' => 'Nazwa miotu',
    ],
];