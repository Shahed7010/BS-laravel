
    @foreach($array as $cat)
        <li>
            {{ $cat['Name'] }}
            @if(count($cat['children']))
                ({{ countChildrenInArray($cat['children']->toArray()) + count($cat['items']) }})
                <ul>
                    @include('partials.cat_list', ['array' => $cat['children']])
                </ul>
            @else
                ({{ count($cat['items']) }})
            @endif
        </li>
    @endforeach
