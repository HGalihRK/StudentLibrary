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
                          <h3 class="text-lg font-medium leading-6 text-gray-900">Edit Project</h3>
                          <p class="mt-1 text-sm text-gray-500">
                            Update Project Kebanggaanmu
                          </p>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                          <form class="space-y-6" action="{{route('saveproject')}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-3 gap-6">
                              <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">
                                  Judul
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                  <input type="hidden" value="{{$project->id}}" name="project_id">
                                  <input type="text" name="name" id="company-website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" value="{{$project->name }}">
                                </div>
                              </div>
                            </div>
                  
                            <div>
                              <label for="about" class="block text-sm font-medium text-gray-700">
                                Deskripsi
                              </label>
                              <div class="mt-1">
                                <textarea id="about" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md">{{$project->description}}</textarea>
                              </div>
                            </div>
                  
<div class="px-4 py-3 bg-white text-right sm:px-6">
    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
      Save
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
