@extends('layouts.main')
@section('title','Add new contact')
@section('content')

<div class="m-4">
    <div class="w-full">
        <div id="message-box" class="px-4 py-3 text-white bg-green-500 rounded-lg" style="display: none">
            <p class="text-sm font-medium text-center">
                Contact added successfully.
            </p>
          </div>
        <div class="p-8 bg-white rounded-lg shadow-lg lg:p-12 lg:col-span-3 divide-y">
            <div>
            <h3 class="font-bold text-xl" >Personal information</h3>
            </div>
            <div>
            <form class="space-y-4 my-4" id="storecontact" name="storecontact">
                @csrf
              <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <label class="relative block p-3 border-2 border-gray-200 rounded-lg" for="firstname">
                    <span class="text-xs font-medium text-gray-500" for="firstname">
                      First name
                    </span>

                    <input class="w-full p-0 text-sm border-none focus:ring-0" id="firstname" name="firstname" type="text" placeholder="John" />
                  </label>

                  <label class="relative block p-3 border-2 border-gray-200 rounded-lg" for="lastname">
                    <span class="text-xs font-medium text-gray-500" for="lastname">
                      Last Name
                    </span>

                    <input class="w-full p-0 text-sm border-none focus:ring-0" id="lastname" name="lastname" type="text" placeholder="Doe" />
                  </label>

                  <label class="relative block p-3 border-2 border-gray-200 rounded-lg" for="email">
                    <span class="text-xs font-medium text-gray-500" for="email">
                      Email
                    </span>

                    <input class="w-full p-0 text-sm border-none focus:ring-0" id="email" name="email" type="email" placeholder="JohnDoe@example.com" />
                  </label>

                  <label class="relative block p-3 border-2 border-gray-200 rounded-lg" for="phone">
                    <span class="text-xs font-medium text-gray-500" for="phone">
                      Phone
                    </span>

                    <input class="w-full p-0 text-sm border-none focus:ring-0" id="phone" name="phone" type="number" placeholder="00123456789" />
                  </label>
              </div>

              <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <label class="relative block p-3 border-2 border-gray-200 rounded-lg" for="address1">
                    <span class="text-xs font-medium text-gray-500" for="address1">
                      Address 1
                    </span>

                    <input class="w-full p-0 text-sm border-none focus:ring-0" id="address1" name="address1" type="text" placeholder="address 1" />
                  </label>

                  <label class="relative block p-3 border-2 border-gray-200 rounded-lg" for="address2">
                    <span class="text-xs font-medium text-gray-500" for="address2">
                      Address 2
                    </span>

                    <input class="w-full p-0 text-sm border-none focus:ring-0" id="address2" name="address2" type="text" placeholder="address 2" />
                  </label>
              </div>

              <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                <label class="relative block p-3 border-2 border-gray-200 rounded-lg" for="city">
                    <span class="text-xs font-medium text-gray-500" for="city">
                     City
                    </span>

                    <input class="w-full p-0 text-sm border-none focus:ring-0" id="city" name="city" type="text" placeholder="Montreal" />
                  </label>

                  <label class="relative block p-3 border-2 border-gray-200 rounded-lg" for="state">
                    <span class="text-xs font-medium text-gray-500" for="state">
                      State
                    </span>

                    <input class="w-full p-0 text-sm border-none focus:ring-0" id="state" name="state" type="text" placeholder="LA" />
                  </label>

                  <label class="relative block p-3 border-2 border-gray-200 rounded-lg" for="nationality">
                    <span class="text-xs font-medium text-gray-500" for="nationality">
                      Nationality
                    </span>

                    <input class="w-full p-0 text-sm border-none focus:ring-0" name="nationality" id="nationality" type="text" placeholder="Canada" />
                  </label>
                </div>
                <div class="flex items-center justify-center">
                    <div class="datepicker relative form-floating mb-3" data-mdb-toggle-button="false">
                      <input type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Birth date" name="birthdate" data-mdb-toggle="datepicker" />
                      <label for="floatingInput" class="text-gray-700">Birth date</label>
                    </div>

                </div>

              <div class="mt-4">
                <button
                  type="button"
                  onclick="addcontact()"
                  class="inline-flex items-center justify-center w-full px-5 py-3 text-white bg-blue-600 rounded-lg sm:w-auto"
                >
                  <span class="font-medium" > Add Contact </span>
                </button>
              </div>
            </form>
            </div>
          </div>
    </div>
</div>

<script>
    function addcontact(){
      $("#overlay").css("display", "block");
        let form =  $('#storecontact').serialize();
        axios.post('/store-contact', form)
    .then((res) => {
        contacts = res.data
        console.log(contacts)
      $("#overlay").css("display", "none");
      $('#message-box').css("display", "block");


    })
    .catch((error) => {
      console.error(error)
      $("#overlay").css("display", "none");
    })
    }
</script>

@endsection
