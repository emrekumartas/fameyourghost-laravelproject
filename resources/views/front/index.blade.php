@extends("layouts.front")

@section("css")

@endsection

@section("content")

    <x-article>
        <x-slot name="title">Article 1</x-slot>
        <hr>
        <x-slot name="content">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aspernatur debitis dolorum eligendi, magni nam
            obcaecati possimus. Amet asperiores ducimus earum, esse ipsum quaerat veniam? Cumque debitis dignissimos
            doloremque molestiae.
        </x-slot>
    </x-article>

@endsection

@section("js")

@endsection
