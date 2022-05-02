@extends('layouts.main')
@section('title','Home Page')
@section('content')

<div id="user-cards" class="m-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
@foreach ($contacts as $user)
<div class="relative block p-8 border bg-white border-gray-100 transition ease-out duration-300 shadow-md hover:shadow-xl hover:-translate-y-1 rounded-xl">
    <span class="absolute right-4 top-4 rounded-full px-3 py-1.5 bg-green-100 text-green-600 font-medium text-xs">
      {{$user['fields']['all']['Campus']}}
    </span>

    <div class="mt-4 text-gray-500 sm:pr-8">
        <i class="fa-solid fa-user text-3xl px-2"></i>
      <a class="mt-4 text-xl font-bold text-gray-900" href="/{{$user['fields']['all']['id']}}">{{$user['fields']['all']['firstname']}} {{$user['fields']['all']['lastname']}}</a>


      <p class="hidden mt-2 text-sm sm:block">
        <i class="fa-regular fa-envelope text-xl px-2"></i>
        {{$user['fields']['all']['email']}}
      </p>
    </div>
    <button class="absolute right-4 bottom-4 rounded-full px-3 py-1.5  text-red-600 font-medium text-xs">

        <i class="fa-solid fa-trash-can text-xl"></i>
      </button>
  </div>
  @endforeach
</div>
@endsection
