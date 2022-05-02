@extends('layouts.main')
@section('title','Home Page')
@section('content')

<div id="user-cards" class="m-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
@foreach ($contacts as $user)
<div id="{{$user['fields']['all']['id']}}" class="relative block p-8 border bg-white border-gray-100 transition ease-out duration-300 shadow-md hover:shadow-xl hover:-translate-y-1 rounded-xl">
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
    <div class='absolute right-4 bottom-4'>
    <button onclick="deletecontact({{$user['fields']['all']['id']}})" class=" rounded-full px-2 py-1.5  text-red-600 font-medium text-xs">

        <i class="fa-solid fa-trash-can text-xl"></i>
      </button>

      <button  class="rounded-full px-2 py-1.5  text-blue-400 font-medium text-xs">
        <a href="/edit/{{$user['fields']['all']['id']}}">
        <i class="fa-regular fa-pen-to-square text-xl"></i>
        </a>
      </button>
    </div>
  </div>
  @endforeach
</div>
<script>
    function deletecontact(id){
        Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#d33',
  cancelButtonColor: '#3085d6',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    $("#overlay").css("display", "block");
      axios.delete('/delete-contact/'+id).then((res) => {
      $("#overlay").css("display", "none");
                  $('#'+id).remove();
        Swal.fire(
      'Deleted!',
      'Your contact has been deleted.',
      'success'
    )
      }).catch((error) => {
      $("#overlay").css("display", "none");
          console.log(error)
      })

  }
})
    }
</script>
@endsection
