<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Employee
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('employee.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
    @php
    $usertype = DB::table('usertypes')->get();
    @endphp



        <div class="px-4 py-5 bg-white sm:p-6">
        <label for="name" class="block font-medium text-sm text-gray-700">User Role</label>
         <select name="role" id="role" class="form-select rounded-md shadow-sm mt-1 block w-full">
       <option disabled="" selected="">Select....</option>
          @foreach( $usertype as $user)
              <option value="{{$user->typename}}">{{$user->typename}}</option>
          @endforeach
          </select>
        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                            <input type="text" name="name" id="name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name', '') }}" />
                        </div>
                       <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="age" class="block font-medium text-sm text-gray-700">Age</label>
                            <input type="text" name="age" id="age" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('age', '') }}" />
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                            <input type="email" name="email" id="email" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('email', '') }}" />
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="phone" class="block font-medium text-sm text-gray-700">Phone</label>
                            <input type="text" name="phone" id="phone"  class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('phone', '') }}" />
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="DoB" class="block font-medium text-sm text-gray-700">Birth Day</label>
                            <input type="date" name="DoB" id="DoB" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('DoB', '') }}" />
                        </div>
                         <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="about" class="block font-medium text-sm text-gray-700">About</label>
                            <input type="text" name="about" id="about" about class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('about', '') }}" />
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="address" class="block font-medium text-sm text-gray-700">Address</label>
                            <input type="text" name="address" id="address" type="text" class="form-input rounded-md detailsshadow-sm mt-1 block w-full"
                                   value="{{ old('address', '') }}" />
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="details" class="block font-medium text-sm text-gray-700">Details</label>
                            <textarea type="text" name="details" id="details" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('details', '') }}"></textarea>  
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>