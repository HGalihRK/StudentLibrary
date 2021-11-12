<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        <x-jet-application-logo class="block h-12 w-auto" />
    </div>

    <div class="mt-8 text-2xl">
        Selamat Datang {{$user}}!
    </div>

    <div class="mt-6 text-gray-500">
        Dashboard ini adalah tempat untuk membantumu membagikan karya yang sudah kamu buat! Tentunya kamu juga bisa melihat karya teman-temanmu. Jangan lupa berikan komentar dan like agar mereka senang 
    </div>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    <div class="p-6">
        <div class="flex items-center">
            <svg class="w-8 h-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
              </svg>
            
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{route('createproject')}}">Upload Game</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
               Bagikan karyamu kepada dunia! 
            </div>

            <a href="{{route('createproject')}}">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                        <div>Upload Sekarang</div>

                        <div class="ml-1 text-indigo-500">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{route('games')}}">Lihat Seluruh Library</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
               Lihat seluruh game yang sudah dibuat oleh teman-temanmu di sini!
            </div>

            <a href="{{route('games')}}">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                        <div>Lihat Library Lengkap</div>

                        <div class="ml-1 text-indigo-500">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                </div>
            </a>
        </div>
    </div>


    </div>
    
</div>
<!-- This example requires Tailwind CSS v2.0+ -->
<div>
   
    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
      <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
        <dt class="text-sm font-medium text-gray-500 truncate">
          Karya Terupload
        </dt>
        <dd class="mt-1 text-3xl font-semibold text-gray-900">
          {{$karya}}
        </dd>
      </div>
  
      <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
        <dt class="text-sm font-medium text-gray-500 truncate">
          Total Komentar Diterima
        </dt>
        <dd class="mt-1 text-3xl font-semibold text-gray-900">
          {{$komentar}}
        </dd>
      </div>
  
      <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
        <dt class="text-sm font-medium text-gray-500 truncate">
          Total Like Diterima
        </dt>
        <dd class="mt-1 text-3xl font-semibold text-gray-900">
          {{$like}}
        </dd>
      </div>
    </dl>
    <dl class="mt-5 grid grid-cols-1 ">
  
     <a href="{{route('showmine',Auth::User()->id)}}" <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
        <h3 class="text-center text-lg">Lihat Halaman Karyaku</h3>
      </a>
      </div>
    
    </dl>
  </div>
  