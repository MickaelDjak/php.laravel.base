@php($list = [
    'Peanut',
    'Jelly',
    'Grapes',
    'Bread',
    'Bananas',
    'Chicken',
    'LEmonaide',
    'Cheese',
    'Mayonaisse',
    'Lettuce',
])

<section class="tag-cloud-section">
    <div class="tag-cloud">
        @each('blocks.tags.item', $list, 'name')
    </div>
</section>

