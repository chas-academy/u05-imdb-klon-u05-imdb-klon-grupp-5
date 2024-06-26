<!DOCTYPE html>
<html lang="en">

@include('meta')

<body class="bg-background">

    @include('navbar')

    <div class="container mx-auto flex flex-col items-center justify-center min-h-screen">
        <h1 class="text-5xl font-bold mb-5 text-text"><span class="underline">Movie trailer</span></h1>


        <div class="mb-10 max-w-xl bg-card-background rounded-lg overflow-hidden shadow-lg">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2 text-text"> Title: {{ $movie->title }}</div>
                <div class="text-text mb-2">Genre: {{ $movie->genre }}</div>
                <div class="text-text mb-2">Description: {{ $movie->description }}</div>
                <div class="relative flex justify-center">
                    <div style="padding: 0.5rem;">
                        {!! $movie->embedCode->html() !!}
                    </div>
                </div>
            </div>
        </div>

    </div>

    @if(session('status'))
        <div class="">
            <h1 class="text-text">{{ session('status') }}</h1>
        </div>
        @endif
    </section>

    @include('footer')

</body>

</html>