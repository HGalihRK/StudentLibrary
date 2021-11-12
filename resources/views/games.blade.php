<x-main>
    <x-slot name="content">
     <div class="py-10">
         <header>
           <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
             <h1 class="text-3xl font-bold leading-tight text-gray-900">
               Explore Karya
             </h1>
             <div class="relative flex mt-5 w-full flex-wrap items-stretch mb-3">
              <span
                class="
                  z-10
                  h-full
                  leading-snug
                  font-normal
                  absolute
                  text-center text-gray-400
                  
                  bg-transparent
                  rounded
                  text-base
                  items-center
                  justify-center
                  w-8
                  pl-3
                  py-3
                "
              >
                <i class="fas fa-search"></i>
              </span>
              <form class="mx-0 my-0 px-0 py-0 w-full" action="{{route('search')}}" method="POST">
                @csrf
              <input
              name="search"
                type="text"
                placeholder="Search"
                class="
                  px-3
                  py-3
                  placeholder-gray-400
                  text-gray-600
                  relative
                  bg-white 
                  rounded
                  text-sm
                  border border-gray-400
                  outline-none
                  focus:outline-none focus:ring
                  w-full
                  pl-10
                "
              />

                <input type="submit" style="height: 0px; width: 0px; border: none; padding: 0px;" hidefocus="true" />
              </form>
            </div>
           </div>
         </header>
         <main>
           <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             <!-- This example requires Tailwind CSS v2.0+ -->
   <ul role="list" class="grid mb-5 mt-5 grid-cols-1 gap-x-4 gap-y-8 px-5 md:px-0 sm:gap-x-6 md:grid-cols-3 lg:grid-cols-4 xl:gap-x-8">
     @forelse($project as $pro)
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
    @empty
    <h1 class="text-3xl col-span-4 text-gray-500 text-center w-full">Tidak ada hasil pencarian karya</h1>
    @endforelse
    
      <!-- More files... -->
    </ul>
    
   
             
             <!-- /End replace -->
           </div>
           @if($user!=null)
           <header>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <h1 class="mb-5 text-3xl font-bold leading-tight text-gray-900">
                User
              </h1>
              <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                @forelse($user as $user)
                <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                  <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="https://images.squarespace-cdn.com/content/v1/54b7b93ce4b0a3e130d5d232/1519987020970-8IQ7F6Z61LLBCX85A65S/icon.png?format=1000w" alt="">
                  </div>
                  <div class="flex-1 min-w-0">
                    <a href="{{route('showmine',$user->id)}}" class="focus:outline-none">
                      <span class="absolute inset-0" aria-hidden="true"></span>
                      <p class="text-sm font-medium text-gray-900">
                        {{$user->name}}
                      </p>
                      <p class="text-sm text-gray-500 truncate">
                        {{$user->email}}
                      </p>
                    </a>
                  </div>
                </div>
                @empty
                <h1 class="text-3xl col-span-4 text-gray-500 text-center w-full">Tidak ada hasil pencarian user</h1>
                
                @endforelse
                
              
                <!-- More people... -->
              </div>
            </div>
            
          </header>
          @endif
         </main>
       </div>
     </div>
        
    </x-slot>
 </x-main>
 