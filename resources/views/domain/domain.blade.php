@extends('layout')

@section('content')
<div class="container my-12 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">
        <!-- Column -->
            @foreach ($practices as $practice)
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h3 class="text-sm text-gray-500 pb-2">
                        <a class="bg-indigo-600 py-1 px-2 text-white rounded-lg" href="{{route('domain',['id' => $practice->Domain->id]) }}">
                            {{$practice->Domain->name}}
                        </a>
                    </h3>
                    <p class="text-grey-darker text-sm">
                       Modifié le {{$practice->updated_at->isoformat('D MMMM Y à HH:mm')}}
                    </p>
                </header>

                <p >
                    {{$practice->description}}
                </p>
                <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                </footer>

            </article>
            <!-- END Article -->

        </div>
            @endforeach
        </div>
@endsection