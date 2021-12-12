<x-app-layout>
    <x-slot name="header">
    <a href="/"><h4>Home</h4></a>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <h2>Edit Post</h2>

                <form action="edit" method="post">
                    @csrf
                    <input type="hidden" name='id' value={{$data['id']}}>
                    <label for="">Title</label> <br>
                    <input type="text" name="title" value="{{$data['title']}}"> <br> <br>
                    <label for="">Description</label> <br>
                    <input type="text" name="description" value="{{$data['description']}}"> <br> <br>

                    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"   type="submit">Update Post</button>
                </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
