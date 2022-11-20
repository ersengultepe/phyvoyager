<nav class="collapse">
    <ul class="nav nav-pills" id="mainNav" >

        @php

            if (Voyager::translatable($items)) {
                $items = $items->load('translations');
            }

        @endphp

        @foreach ($items as $item)

            @php

                $originalItem = $item;
                if (Voyager::translatable($item)) {
                    $item = $item->translate($options->locale);
                }

                $isActive = null;
                $styles = null;
                $icon = null;

                // Background Color or Color
                if (isset($options->color) && $options->color == true) {
                    $styles = 'color:'.$item->color;
                }
                if (isset($options->background) && $options->background == true) {
                    $styles = 'background-color:'.$item->color;
                }

                // Check if link is current
                if(url($item->link()) == url()->current()){
                    $isActive = 'active';
                }

                // Set Icon
                if(isset($options->icon) && $options->icon == true){
                    $icon = '<i class="' . $item->icon_class . '"></i>';
                }

            @endphp

                    <li class="dropdown">
                        <a class="dropdown-item dropdown-toggle phy-header {{ $isActive }}" href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}">
                            {{ $item->title }}
                        </a>
                        @if(!$originalItem->children->isEmpty())
                            @include('layouts.menuChildPhy', ['items' => $originalItem->children, 'options' => $options])
                        @endif
                    </li>

        @endforeach

    </ul>
</nav>