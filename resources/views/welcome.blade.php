@extends('layout')

@section('content')
<article class="text-3xl max-w-prose mx-auto py-8">

  <div class="flex justify-around pb-8">
      <h1 class="flex-auto text-5xl font-bold">Pratiques</h1>
      <div class="m-auto text-sm">
          <label for="day"><?= isset($day) ? "Nouveau de ". $day . " jours": "" ;?> </label>
      </div>
  </div>
  @forelse  ($publicationState as $practice)
      <h2 class="mt-2 pt-8 text-sm text-gray-500">
          Dernière mis à jour : {{ $practice->updated_at->isoformat('D MMMM Y à HH:mm') }}
      </h2>
      <p class="mt-4 text-lg">{{ $practice->description }} </p>
      <span
          class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none bg-green-600 rounded-full">
          {{ $practice->domain->name }}
      </span>
  @empty
      <h3 class="text-blue-600 md:text-red-600">Aucune bonne pratique</h3>
  @endforelse
</article>

@endsection
