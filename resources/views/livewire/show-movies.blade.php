@if($title != 'Catalogo')
    <div style="text-align: center; max-width: 80%; padding-left: 15%; color: white; margin-top: 15px;">
        Pelicula a buscar: {{$title}}
    </div>
@else
    <div style="text-align: center; max-width: 80%; padding-left: 15%; color: white; margin-top: 15px; margin-bottom: 15px;">
        {{$title}}
    </div>

    <div class="px-6 py-4">
        <input type="text" wire:model="search">
    </div>

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light">
                    <thead
                        class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Img</th>
                            <th scope="col">Title</th>
                            <th scope="col">year</th>
                            <th scope="col">rating</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($movies)
                            @foreach ($movies as $movie)
                                <tr
                                    class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{$movie->imdbID}}</td>
                                    <td class="whitespace-nowrap px-6 py-4"><img src="{{$movie->Poster}}" alt="{{$movie->Title}}"></td>
                                    <td class="whitespace-nowrap px-6 py-4">{{$movie->Title}}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{$movie->Year}}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{$movie->Type}}</td>
                                    <td class="whitespace-nowrap px-6 py-4"><a href="#">guardar</a> </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endif