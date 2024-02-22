<!DOCTYPE html>
<html lang="en">
@include('meta')

<body class="bg-background">

    <section class="px-10 py-10">
        <h1 class="text-5xl font-bold mb-5 text-text"><span class="underline">Watchlist</span></h1>
    </section>

    <div class="grid grid-cols-3 gap-4">
        @foreach ($titles as $title)
        <div class="relative flex max-w-[16rem] min-h-[26rem] flex-col overflow-hidden rounded-xl bg-card-background bg-clip-border text-gray-700 shadow-md">
            <div class="min-h-[60%] relative m-0 overflow-hidden text-gray-700 bg-transparent rounded-none shadow-none bg-clip-border">
                <img src="{{ $title->poster_url }}" alt="{{ $title->title }}" class="h-full object-cover" />
            </div>
            <div class="p-3 flex flex-col justify-center items-center">
                <h1 class="text-2xl antialiased font-semibold leading-snug tracking-normal text-center  text-text">
                    {{ $title->title }}
                </h1>
                <div class="">
                    <form action="{{ route('watchlist.destroy', $title->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn py-2 px-4 rounded text-text bg-red-600 mx-auto mt-">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>


</body>

</html>