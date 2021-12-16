@extends('layout')

@section('content')
<div class="container my-12 mx-auto px-4 md:px-12">
    <h1 class="text-5xl">
        {{$domainName}}
    </h1>
    <div class="flex flex-wrap -mx-1 lg:-mx-4">
        <!-- Column -->
        @foreach ($practices as $practice)
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <p class="text-grey-darker text-sm">
                        Modifié le {{$practice->updated_at->isoformat('D MMMM Y à HH:mm')}}
                    </p>
                </header>

                <p>
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