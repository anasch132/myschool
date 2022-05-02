@extends('layouts.main')
@section('title','Add new contact')
@section('content')

<div class="m-4">
    <div class="w-full">
        <div class="p-8 bg-white rounded-lg shadow-lg lg:p-12 lg:col-span-3 divide-y">
            <div>
            <h3 class="font-bold text-xl" >Personal information</h3>
            </div>
            <div>
            <form action="" class="space-y-4 my-4">
              <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <label class="relative block p-3 border-2 border-gray-200 rounded-lg" for="firstname">
                    <span class="text-xs font-medium text-gray-500" for="firstname">
                      First name
                    </span>

                    <input class="w-full p-0 text-sm border-none focus:ring-0" id="firstname" type="text" placeholder="John" />
                  </label>

                  <label class="relative block p-3 border-2 border-gray-200 rounded-lg" for="lastname">
                    <span class="text-xs font-medium text-gray-500" for="lastname">
                      Last Name
                    </span>

                    <input class="w-full p-0 text-sm border-none focus:ring-0" id="lastname" type="text" placeholder="Doe" />
                  </label>

                  <label class="relative block p-3 border-2 border-gray-200 rounded-lg" for="email">
                    <span class="text-xs font-medium text-gray-500" for="email">
                      Email
                    </span>

                    <input class="w-full p-0 text-sm border-none focus:ring-0" id="email" type="email" placeholder="JohnDoe@example.com" />
                  </label>

                  <label class="relative block p-3 border-2 border-gray-200 rounded-lg" for="phone">
                    <span class="text-xs font-medium text-gray-500" for="phone">
                      Phone
                    </span>

                    <input class="w-full p-0 text-sm border-none focus:ring-0" id="phone" type="number" placeholder="00123456789" />
                  </label>
              </div>

              <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <label class="relative block p-3 border-2 border-gray-200 rounded-lg" for="name">
                    <span class="text-xs font-medium text-gray-500" for="address1">
                      Address 1
                    </span>

                    <input class="w-full p-0 text-sm border-none focus:ring-0" id="firstname" type="text" placeholder="John" />
                  </label>

                  <label class="relative block p-3 border-2 border-gray-200 rounded-lg" for="name">
                    <span class="text-xs font-medium text-gray-500" for="address2">
                      Address 2
                    </span>

                    <input class="w-full p-0 text-sm border-none focus:ring-0" id="firstname" type="text" placeholder="John" />
                  </label>
              </div>

              <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                <label class="relative block p-3 border-2 border-gray-200 rounded-lg" for="city">
                    <span class="text-xs font-medium text-gray-500" for="city">
                     City
                    </span>

                    <input class="w-full p-0 text-sm border-none focus:ring-0" id="city" type="text" placeholder="Montreal" />
                  </label>

                  <label class="relative block p-3 border-2 border-gray-200 rounded-lg" for="state">
                    <span class="text-xs font-medium text-gray-500" for="state">
                      State
                    </span>

                    <input class="w-full p-0 text-sm border-none focus:ring-0" id="state" type="text" placeholder="LA" />
                  </label>

                  <label class="relative block p-3 border-2 border-gray-200 rounded-lg" for="country">
                    <span class="text-xs font-medium text-gray-500" for="country">
                      Country
                    </span>

                    <input class="w-full p-0 text-sm border-none focus:ring-0" id="country" type="text" placeholder="Canada" />
                  </label>
                </div>
                <div class="flex items-center justify-center">
                    <div class="datepicker relative form-floating mb-3 xl:w-96">
                      <input type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Select a date" />
                      <label for="floatingInput" class="text-gray-700">Select a date</label>
                    </div>
                  </div>

              <div class="mt-4">
                <button
                  type="submit"
                  class="inline-flex items-center justify-center w-full px-5 py-3 text-white bg-black rounded-lg sm:w-auto"
                >
                  <span class="font-medium"> Send Enquiry </span>

                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 ml-3"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                  </svg>
                </button>
              </div>
            </form>
            </div>
          </div>
    </div>
</div>

@endsection
