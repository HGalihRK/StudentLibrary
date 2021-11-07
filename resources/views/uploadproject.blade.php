<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard > Upload') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="space-y-6">
                    <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
                      <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                          <h3 class="text-lg font-medium leading-6 text-gray-900">Upload Project</h3>
                          <p class="mt-1 text-sm text-gray-500">
                            Upload Project Kebanggaanmu
                          </p>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                          <form class="space-y-6" action="{{route('storeproject')}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-3 gap-6">
                              <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">
                                  Judul
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                           
                                  <input type="text" name="name" id="company-website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Pokemon Game">
                                </div>
                              </div>
                            </div>
                  
                            <div>
                              <label for="about" class="block text-sm font-medium text-gray-700">
                                Deskripsi
                              </label>
                              <div class="mt-1">
                                <textarea id="about" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Cara memainkan, tingkat kesulitan, dst.."></textarea>
                              </div>
                            </div>
                  
                  
                            <div>
                              <label class="block text-sm font-medium text-gray-700">
                                Thumbnail Picture (optional)
                              </label>
                              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                  <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>
                                  <div class="flex text-sm text-gray-600">
                                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                      <span>Upload a file</span>
                                      <input id="file-upload" name="input_png" type="file" class="sr-only">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                  </div>
                                  <p class="text-xs text-gray-500">
                                    PNG, JPG, GIF up to 10MB
                                  </p>
                                </div>
                              </div>
                            </div>
                            <link
  href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css"
  rel="stylesheet"
/>

<label for="c3p"
  class="
    w-64
    flex flex-col
    items-center
    px-4
    py-6
    bg-white
    rounded-md
    shadow-md
    tracking-wide
    uppercase
    border border-blue
    cursor-pointer
    hover:bg-purple-600 hover:text-white
    text-purple-600
    ease-linear
    transition-all
    duration-150
  "
>
  <i class="fas fa-cloud-upload-alt fa-3x"></i>
  <span class="mt-2 text-base leading-normal">Upload File Construct</span>
  <input id="c3p" type="file" name="input_c3p" class="hidden" />
</label>
<div class="px-4 py-3 bg-white text-right sm:px-6">
    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
      Upload
    </button>
  </div>
                          </form>
                        </div>
                      </div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
