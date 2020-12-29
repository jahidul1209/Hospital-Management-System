<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Post List
        </h2>
    </x-slot>

        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">

     <a href="{{ route('post.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add post</a>

            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

                    <table class="min-w-full divide-y divide-gray-200 w-full">
                         <thead>
                            <tr>
                                <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Title
                                </th>
                               <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Category
                                </th>

                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Author
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Details
                                </th>

                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Photo
                                </th>
                                <th scope="col" width="200" class="px-6 py-3 bg-gray-50">
                                    Action
                                </th>
                               </tr> 
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($data as $task)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $task->id }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $task->title }}
                                </td>
                                 <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $task->category }}
                                </td>

                             <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $task->author }}
                                </td>
                               <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $task->details }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">

                                <img src="{{asset('public/image/'.$task->photo)}}"  style ="height:80px;width:80px"/>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="{{ route('post.show', $task->id) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">View</a>
                                    <a href="{{ route('post.edit', $task->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Edit</a>
                                    <form class="inline-block" action="{{ route('post.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Delete">
                                    </form>
                                </td>
                                </tr>
                                @endforeach
                               </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

<!--Data Insert modal here-->
<!-- Modal -->
<!-- <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
       <form method="post" data-toogle="validator">
        @csrf {{ method_field('POST') }}
         <div class="form-group">
         <input type="hidden" name="id" id="id">
           <label for="exampleInputEmail1">Title</label>
           <input type="text" class="form-control" name="title" id="title" placeholder="Title" required="" autofocus="">
         </div>
         <div class="form-group">
           <label for="exampleInputEmail1">Author </label>
           <input type="text" class="form-control" name="author" id="author" placeholder="Author" required="" autofocus="">
         </div>
          <div class="form-group">
           <label for="exampleInputEmail1">Photo </label>
           <input type="file" name= "photo" accept ="image/*" class ="upload" required onchange="readURL(this)" id="exampleInputPassword1" >
         </div>
         <div class="form-group">
           <label for="exampleInputEmail1">Details </label>
           <textarea class="form-control" row='4' name="details" id="details" required=""></textarea>
         </div>  
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="insertbutton"></button>
      </div>
      </form>
    </div>
  </div>
</div>
</div> -->

</x-admin-layout>

