<div {{ $attributes->class("card text-center") }}>

    @if(isset($title))
        <div class="card-header fs-6 fst-italic border-indigo-400">

            {{ $title }}
        </div>
    @endif

    @if(isset($content))
        <div class="card-body">
            {{ $content }}
        </div>
    @endif

    @if(isset($footer))

        <div class="card-footer text-start">



            {{ $footer }}
        </div>
    @endif

</div>
