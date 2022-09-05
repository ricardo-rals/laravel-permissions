<x-admin-layout>

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end">
                    <a href="" class="px-4 py-2 bg-green-700 hover:bg-green-500 rounded-md">Create</a>
                </div>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($permissions as $permission)
                        <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            {{ $permission->name }}
                        </div>
                        </td>
                        <td>
                            <a href="">Edit</a>
                            <a href="">Delete</a>
                        </td>
                    </tr>  
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
