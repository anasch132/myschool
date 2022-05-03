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
                <label id="firstname" class="relative block p-3 border-2 border-gray-200 rounded-lg" for="firstname">
                    <span class="text-xs font-medium text-gray-500" for="firstname">
                      First name
                    </span>

                    <input onfocus="removeError(this)" required class="w-full p-0 text-sm border-none focus:ring-0"  name="firstname" type="text" placeholder="John" />
                  </label>

                  <label id="lastname" class="relative block p-3 border-2 border-gray-200 rounded-lg" for="lastname">
                    <span class="text-xs font-medium text-gray-500" for="lastname">
                      Last Name
                    </span>

                    <input onfocus="removeError(this)" required class="w-full p-0 text-sm border-none focus:ring-0"  name="lastname" type="text" placeholder="Doe" />
                  </label>

                  <label id="email" class="relative block p-3 border-2 border-gray-200 rounded-lg" for="email">
                    <span class="text-xs font-medium text-gray-500" for="email">
                      Email
                    </span>

                    <input onfocus="removeError(this)" class="w-full p-0 text-sm border-none focus:ring-0" name="email" type="email" placeholder="JohnDoe@example.com" />
                  </label>

                  <label class="relative block p-3 border-2 border-gray-200 rounded-lg" id="phone" for="phone">
                    <span class="text-xs font-medium text-gray-500" for="phone">
                      Phone
                    </span>

                    <input onfocus="removeError(this)" class="w-full p-0 text-sm border-none focus:ring-0"  name="phone" type="number" placeholder="00123456789" />
                  </label>
              </div>

              <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <label class="relative block p-3 border-2 border-gray-200 rounded-lg" id="address1" for="address1">
                    <span class="text-xs font-medium text-gray-500" for="address1">
                      Address 1
                    </span>

                    <input onfocus="removeError(this)" class="w-full p-0 text-sm border-none focus:ring-0"  name="address1" type="text" placeholder="address 1" />
                  </label>

                  <label class="relative block p-3 border-2 border-gray-200 rounded-lg" id="address2" for="address2">
                    <span class="text-xs font-medium text-gray-500" for="address2">
                      Address 2
                    </span>

                    <input onfocus="removeError(this)" class="w-full p-0 text-sm border-none focus:ring-0"  name="address2" type="text" placeholder="address 2" />
                  </label>
              </div>

              <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                <label class="relative block p-3 border-2 border-gray-200 rounded-lg" id="city" for="city">
                    <span class="text-xs font-medium text-gray-500" for="city">
                     City
                    </span>

                    <input onfocus="removeError(this)" class="w-full p-0 text-sm border-none focus:ring-0"  name="city" type="text" placeholder="Montreal" />
                  </label>

                  <label id="state" class="relative block p-3 border-2 border-gray-200 rounded-lg" for="state">
                    <span class="text-xs font-medium text-gray-500" for="state">
                      State
                    </span>

                    <input onfocus="removeError(this)"  class="w-full p-0 text-sm border-none focus:ring-0" name="state" type="text" placeholder="LA" />
                </label>

                  <label class="relative block p-3 border-2 border-gray-200 rounded-lg" id="nationality" for="nationality">
                    <span class="text-xs font-medium text-gray-500" for="nationality">
                      Nationality
                    </span>

                    <input onfocus="removeError(this)" class="w-full p-0 text-sm border-none focus:ring-0" name="nationality"  type="text" placeholder="Canada" />
                  </label>
                </div>
                <div class="flex items-start justify-center">
                    <div class="datepicker form-floating mb-3 border-gray-200 relative block p-3 border-2 rounded-lg" data-mdb-toggle-button="false">
                      <input onfocus="removeError(this)" type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border-none transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
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
        $("#overlay").css("display", "none");
        if (contacts.errors)
        {
            for (const [key, value] of Object.entries(contacts.errors[0].details)) {

            $(`#${key}`).addClass('border-red-400')
            $(`#${key}`).removeClass('border-gray-200')
            $(`#${key}`).append(`<p class="text-xs text-red-500 font-medium">${value}</p>`)
        }
        }
        else
            $('#message-box').css("display", "block");
    })
    .catch((error) => {
        $("#overlay").css("display", "none");
        console.log(error)
    })
}


</script>

@endsection
