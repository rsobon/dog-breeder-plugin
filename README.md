# DogBreeder
OctoberCMS plugin for dog breeders

## Backend Area
After installing the plugin head to the October's backend and open plugin from top ribbon. You can enter all information there regarding your doggies.

You need to "publish" dogs and litters in order to display them on page. **Published date must me earlier than or equal today** for item to be considered "published".

## Components
There are two components that allow displaying items on page.

#### "Dogs" component
"Dogs" component has two parameters:
* itemId: Optional ID of a dog to display. If not provided, component will display all dogs
* category: ID of the category. Component will display only dogs from that category

Use component on page like that:
```php
title = "Dogs"
url = "/api/dogs/:id?"
is_hidden = 0

[Dogs]
category = 1
itemId = "{{ :id }}"
==
{% component 'Dogs' %}
```

By accessing `/api/dogs` you can display all dogs. By accessiong `/api/dogs/1` you can display only dog with ID "1". By default component will return "raw" data in JSON format:
```json

{
    "id": 1,
    "name": "Dog1",
    "birth": "2017-05-08"
}
```

If you want, you can format your data in TWIG template like this:

```twig
    <div class="ui three stackable link cards" id="dog-cards">
        {% for dog in dogs %}
            <div class="card" data-href="{{ dog.slug|page({ id: dog.id }) }}">
                <img class="ui image"
                     data-src="{{ dog.picture.thumb(540, 300, 'crop') }}"
                     src="{{ 'assets/images/image-16by9.png'|theme }}"
                />
                <div class="content">
                    <a class="header" href="{{ dog.slug|page({ id: dog.id }) }}">{{ dog.name }}</a>
                </div>
            </div>
        {% endfor %}
    </div>
```

You can see all available properties of the "Dog" object by returning its raw JSON output first as shown above (you will need some browser extension like JSONView for Chrome to display JSON data in pretty format).


#### "Puppies" component
"Puppies" component has one parameter:
* itemId: Optional ID of a litter to display. If not provided, component will display all litters

Everything works the same as with the "Dogs" component. Use component on page like that:
```php
title = "Puppies"
url = "/api/puppies/:id?"
is_hidden = 0

[Puppies]
itemId = "{{ :id }}"
==

{% component 'Puppies' %}

```