<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit employee
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('employee.update', $edit_emp->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                            <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('name', $edit_emp->name) }}" />

                        </div>
                        <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="age" class="block font-medium text-sm text-gray-700">Age</label>
                            <input type="text" name="age" id="age" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('age', $edit_emp->age) }}" />

                        </div>
                         <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="phone" class="block font-medium text-sm text-gray-700">Phone</label>
                            <input type="text" name="phone" id="phone" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('phone', $edit_emp->phone) }}" />

                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="role" class="block font-medium text-sm text-gray-700">Role</label>
                            <input type="text" name="role" id="role" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('role', $edit_emp->role) }}" />

                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                            <input type="email" name="email" id="email" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('email', $edit_emp->email) }}" />

                        </div>

                         <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="DoB" class="block font-medium text-sm text-gray-700">Birth Day</label>
                            <input type="date" name="DoB" id="DoB" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('DoB', $edit_emp->DoB) }}" />

                        </div>
                           <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="address" class="block font-medium text-sm text-gray-700">Address</label>
                            <input type="text" name="address" id="address" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('address', $edit_emp->address) }}" />

                        </div>
                         <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="about" class="block font-medium text-sm text-gray-700">About</label>
                            <input type="text" name="about" id="about" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('about', $edit_emp->about) }}" />

                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="details" class="block font-medium text-sm text-gray-700">Details</label>
                            <input type="details" name="details" id="details" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('details', $edit_emp->details) }}" />

                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>