<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Category</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}

    <!-- Styles -->
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

</head>

</head>

<body >
    <div style="display: flex; justify-content: center">
        <h2>Category list with Item count.</h2>
    </div>

    <div style="margin-left: 20%">

        @foreach ($categories as $cat)

            -- {{$cat['Name'] }}

            @if(count($cat['children']))
                ({{ countChildrenInArray($cat['children']->toArray()) }})
                <ul>
                    @include('partials.cat_list', ['array' => $cat['children']])
                </ul>
            @else
                <br><br>
            @endif
            
        @endforeach

    </div>
   
</body>

</html>