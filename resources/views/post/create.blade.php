<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create post
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
                            <input type="text" name="title" id="title"  class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('title', '') }}" />
                        </div>

                        @php
                        $cat_id = DB::table('postcategories')->get();
                        @endphp

                       <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="category" class="block font-medium text-sm text-gray-700">Post Category</label>
                            <select  name = "category" class="form-input rounded-md shadow-sm mt-1 block w-full" id="exampleInputEmail1"> 
                            <option disabled="" selected="">Select....</option>
                            @foreach( $cat_id as $row)
                            <option value="{{$row->cat_name}}">{{$row->cat_name}}</option>
                            @endforeach
                            </select>
                      </div>

<!--                         @php
                        $role = DB::table('usertypes')->get();
                        @endphp

                       <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="role" class="block font-medium text-sm text-gray-700">User Type</label>
                            <select  name = "role" class="form-input rounded-md shadow-sm mt-1 block w-full" id="exampleInputEmail1"> 
                            <option disabled="" selected="">Select....</option>
                            @foreach( $role as $row)
                            <option value="{{$row->typename}}">{{$row->typename}}</option>
                            @endforeach
                            </select>
                      </div> -->

<!--                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="author" class="block font-medium text-sm text-gray-700">Author</label>
                            <input type="text" name="author" id="author" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('author', '') }}" />
                        </div> -->
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="details" class="block font-medium text-sm text-gray-700">Details</label>
                            <textarea type="details" name="details" id="details" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('details', '') }}"></textarea>
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="photo" class="block font-medium text-sm text-gray-700">Photo</label>
                            <img id = "output" src="#" style ="height:100px;width:100px"/>
                            <input type="file" name="photo" id="photo" accept ="image/*" class ="upload" required onchange="loadFile(event)"  class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('photo', '') }}" />
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