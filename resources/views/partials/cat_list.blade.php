
    @foreach($array as $cat)
        <li>
            {{ $cat['Name'] }}
            @if(count($cat['children']))
            ({{ countChildrenInArray($cat['children']->toArray()) + $cat['items_count'] }})
            <ul>
                @include('partials.cat_list', ['array' => $cat['children']])
            </ul>
            @else
            ({{ $cat['items_count'] }})
            @endif
        </li>
    @endforeach
