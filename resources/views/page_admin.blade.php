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
                <h1>Page List</h1>
                    <!-- <Table> -->

                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Sub Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Description
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Action
                                    </th>
                                    <!-- <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th> -->
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($pages as $page)
                                    <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                    {{$page['id']}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                    {{$page['title']}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                    {{$page['subtitle']}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{$page['description']}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href={{"edit-page/".$page['id']}} class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    </td>
                                    </tr>
                                    @endforeach

                                    <!-- More people... -->
                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                        </div>

                    <!-- </Table> -->

                </div>
            </div>
        </div>
    </div>


    
</x-app-layout>
