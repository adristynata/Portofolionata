<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Project') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">



            <button type="button"
                class="text-body bg-neutral-primary-soft border border-default hover:bg-neutral-secondary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary-soft shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none"
                data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example"
                data-drawer-placement="right" aria-controls="">Tambah</button>
            <div
                class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default bg -white rounded-lg mt-4">
                <table class="w-full text-sm text-left rtl:text-right text-body">
                    <thead class="bg-neutral-100 border-b border-default">
                        <tr>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Gambar
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Judul
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Deskripsi
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Github
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Link Demo
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $item)
                            <tr class="odd:bg-neutral-primary even:bg-neutral-secondary-soft">
                                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                    {{ $item->image }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $item->title }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->description }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->github_link }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->demo_link }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-fg-brand hover:underline">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>



    <!-- drawer component -->
    <div id="drawer-right-example"
        class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-right-label">
        <h5 id="drawer-right-label"
            class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"><svg
                class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>Right drawer</h5>
        <button type="button" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="grid grid-cols-2 gap-4">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg></a>
        </div>
     <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="space-y-4">

            <!-- Title -->
            <div>
                <label class="block mb-1 text-sm font-medium">Title</label>
                <input type="text" name="title" class="w-full border rounded-lg p-2" required>
            </div>

            <!-- Description -->
            <div>
                <label class="block mb-1 text-sm font-medium">Description</label>
                <textarea name="description" class="w-full border rounded-lg p-2" required></textarea>
            </div>

            <!-- Github -->
            <div>
                <label class="block mb-1 text-sm font-medium">Github Link</label>
                <input type="text" name="github_link" class="w-full border rounded-lg p-2">
            </div>

            <!-- Demo -->
            <div>
                <label class="block mb-1 text-sm font-medium">Demo Link</label>
                <input type="text" name="demo_link" class="w-full border rounded-lg p-2">
            </div>

            <!-- Image -->
            <div>
                <label class="block mb-1 text-sm font-medium">Image</label>
                <input type="file" name="image" class="w-full border rounded-lg p-2">
            </div>

            <!-- Button -->
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                Simpan Project
            </button>

        </div>
    </form>


    </div>

   
    </div>
</x-app-layout>
