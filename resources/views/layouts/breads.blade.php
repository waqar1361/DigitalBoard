<nav  class="{{ url()->current() == url('/') || request()->segments()[0] == ('admin' or 'document') ? 'd-none' : '' }} " aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb text-capitalize">
        <li class="breadcrumb-item" aria-current="page">
            <a href="/">home</a>
        </li>
        @php($seg_link = '')
        @for($i = 0; $i < count(Request::segments()); $i++)
            <?php
            $myLinks = Request::segments();
            $last = count(Request::segments()) - 1;
            $seg_link .= "/" . $myLinks[$i];
            ?>

            @if($i == $last)
                <li class="breadcrumb-item active" aria-current="page">
                    {{$myLinks[$i]}}
                </li>
            @else
                <li class="breadcrumb-item">
                    <a href="{{$seg_link}}">{{$myLinks[$i]}}</a>
                </li>
            @endif

        @endfor

    </ol>
</nav>