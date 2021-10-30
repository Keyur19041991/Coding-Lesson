<ul>
    @foreach($children as $child)
        <li>
            <a href="">{{ $child->name }}</a>
            @if($child->children->count() > 0)
                @include('child_menus',['children' => $child->children])
            @endif
        </li>
    @endforeach
</ul>
