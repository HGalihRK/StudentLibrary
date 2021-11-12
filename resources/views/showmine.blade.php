<x-main>
   <x-slot name="content">
    <div class="py-10">
        <header>
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold leading-tight text-gray-900">
              Karya {{$user->name}}
            </h1>
          </div>
        </header>
        <main>
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- This example requires Tailwind CSS v2.0+ -->
<div class="mx-5 sm:mx-0">
    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
      <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
        <dt class="text-sm font-medium text-gray-500 truncate">
          Total Karya 
        </dt>
        <dd class="mt-1 text-3xl font-semibold text-gray-900">
          {{$project->count()}}
        </dd>
      </div>
  
      <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
        <dt class="text-sm font-medium text-gray-500 truncate">
          Total Like Diterima {{$user->name}}
        </dt>
        <dd class="mt-1 text-3xl font-semibold text-gray-900">
          {{$like}}
        </dd>
      </div>
  
      <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
        <dt class="text-sm font-medium text-gray-500 truncate">
          Total Komentar Diterima
        </dt>
        <dd class="mt-1 text-3xl font-semibold text-gray-900">
            {{$comment}}
        </dd>
      </div>
    </dl>
  </div>
  <ul role="list" class="grid mb-5 mt-5 grid-cols-1 gap-x-4 gap-y-8 px-5 md:px-0 sm:gap-x-6 md:grid-cols-3 lg:grid-cols-4 xl:gap-x-8">
    @foreach($project as $pro)
    <a href="{{route('showproject',$pro->id)}}">
     <li class="relative">
       <div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
         @if($pro->thumbnail != null)
         <img src="{{asset('thumbnail')."/".$pro->thumbnail}}" alt="" class="object-cover pointer-events-none group-hover:opacity-75">
         @else
         <img src="{{asset('thumbnail/thumbnail.png')}}" alt="" class="object-cover pointer-events-none group-hover:opacity-75">
         @endif
         <button type="button" class="absolute inset-0 focus:outline-none">
           <span class="sr-only">View details for IMG_4985.HEIC</span>
         </button>
       </div>
       <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">{{$pro->name}}</p>
       <p class="block text-sm font-medium text-gray-500 pointer-events-none">{{$pro->user->name}}</p>
     </li>
   </a>
   @endforeach
     <!-- More files... -->
   </ul>
  
            
            <!-- /End replace -->
          </div>
        </main>
      </div>
    </div>
       
   </x-slot>
</x-main>
