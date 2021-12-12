<x-app-layout>
    <x-slot name="header">
    <a href="/"><h4>Home</h4></a>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Page Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <h2>Edit Page</h2>

                <form action="edit-page" method="post">
                    @csrf
                        <input type="hidden" name='id' value={{$data['id']}}>

                    <div class="md:w-1/3">
                        <label >
                            Title
                        </label>
                    </div>

                    <div class="md:w-2/3">
                        <input type="text" name="title" value="{{ $data->title }}"> <br> <br>  
                    </div>
    
                    <div class="md:w-1/3">
                        <label >
                            Subtitle
                        </label>
                    </div>
                    <div class="md:w-2/3">
                    <input type="text" name="subtitle" value="{{ $data->subtitle }}"> <br> <br>
                    </div>
                    
                    <div class="md:w-1/3">
                        <label >
                            Description
                        </label>
                    </div>
    
                    <div class="md:w-2/3">
                        <input type="text" name="description" value="{{ $data->description }}"> <br> <br>
                    </div>

                    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"  type="submit">Update Page</button>
                </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
