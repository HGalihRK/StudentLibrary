<x-main>
<x-slot name="content">
    <div class="hidden  xl:block absolute right-20 top-44" style="z-index: -1"><video autoplay="" loop="" muted="" playsinline="" style="width:700px">
        <source src="https://construct-static.com/videos/v951/construct3/goose.mp4" type="video/mp4">
         </video></div>
        <div class="hidden md:block xl:hidden absolute right-10 top-72" style="z-index: -1"><video autoplay="" loop="" muted="" playsinline="" style="width:350px">
            <source src="https://construct-static.com/videos/v951/construct3/goose.mp4" type="video/mp4">
             </video></div>
        <div class="container mt-2 lg:mt-14 py-2 md:py-10 lg:px-32 mx-auto gap-10">
          <div class="flex flex-wrap ml-auto md:ml-20 lg:ml-auto  overflow-hidden mb-14 lg:mb-72">
            <div class="font-medium my-3 px-3 tracking-wide text-center md:w-auto w-full text-blue-600 uppercase">Mainkan & Bagikan!</div>
            <div class="my-3 px-3 w-full md:block hidden text-3xl font-extrabold  md:text-5xl">
              Student Library
            </div>
            <div class="my-3 px-3 w-full overflow-hidden font-black md:hidden block text-3xl md:text-4xl text-center">
              Student Library
            </div>
          
            <div class="my-3 w-full px-3 mb-10 text-center md:block md:text-left overflow-hidden md:w-1/2">
              Mainkan berbagai game seru yang telah dibagikan oleh teman-temanmu!<br> Kamu juga bisa menjadi salah satunya!
              
            </div>
            <video class="mx-auto md:hidden" autoplay="" loop="" muted="" playsinline="" style="width:300px">
                <source src="https://construct-static.com/videos/v951/construct3/goose.mp4" type="video/mp4">
                 </video>
            <div class="mt-3 px-3 w-full overfelow-hidden text-center md:text-left">
              <a href="{{route('register')}}"><x-jet-button class="text-base rounded-full">Daftar Sekarang</x-jet-button></a>
            </div>
          </div>
          <div class="mx-auto text-center text-3xl md:mt-32 lg:text-center">Karya Terbaru</div>
          <div class="mx-auto text-center mt-2 text-3xl w-36 mb-16 rounded-full h-2 bg-blue-600"></div>
          <ul role="list" class="grid mb-5 grid-cols-1 gap-x-4 gap-y-8 px-5 md:px-0 sm:gap-x-6 md:grid-cols-3 lg:grid-cols-4 xl:gap-x-8">
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
          <div class="text-center"><x-jet-button class="text-base rounded-full text-center mx-auto">Lihat Selengkapnya</x-jet-button></div> 
</x-slot> 
</x-main>
