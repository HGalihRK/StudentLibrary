<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard > Play') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="space-y-6">
                    <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      {{$project->name}}
    </h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
      {{$project->user->name}} / {{date('d M Y',strtotime($project->created_at))}}
    </p>
  </div>
  <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
    <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
      <div id="iframecontainer" class="sm:col-span-2">
        <iframe src="{{asset('projects')}}/{{$project->id}}/index.html" title="W3Schools Free Online Web Tutorials" class="w-full h-96 fullscreen"></iframe>
      </div>
      <div class="sm:col-span-1" id="container">
        <x-jet-button class="button">Fullscreen</x-jet-button>
        <form class="inline-block" action="{{route('storelike')}}" method="POST">
        @csrf
        <input type="hidden" value="{{$project->id}}" name="project_id">
        @if($project->likes->where('user_id',Auth::user()->id)->count() != 0)
        <input type="hidden" value="{{$project->likes->where('user_id',Auth::user()->id)->first()->id}}" name="delete">
        <x-jet-button type="submit" class="">Unlike</x-jet-button>
        @else 
        <x-jet-button type="submit" class="">Like</x-jet-button>
        @endif
        </form>
      </div>
      <div class="sm:col-span-1" id="container">
        <div class="text-lg md:text-right leading-6 font-medium text-blue-600">
          Disukai {{$project->likes()->count()}} Orang
        </div>
      </div>
      <div class="sm:col-span-2">
        <dt class="text-sm font-medium text-gray-500">
          Deskripsi
        </dt>
        <dd class="mt-1 text-sm text-gray-900">
          {{$project->description}}
        </dd>
      </div>
              <!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white py-5 border-b border-gray-200 sm:col-span-2">
  <div class="-ml-4 -mt-2 flex items-center justify-between flex-wrap sm:flex-nowrap mb-5">
    <div class="ml-4 mt-2">
      <h3 class="text-lg leading-6 font-medium text-gray-900">
        Komentar ({{$project->comments()->count()}})
      </h3>
    </div>
    
    
  </div>
  <div style="max-height: 400px"  class="overflow-y-scroll">
@foreach($project->comments as $comment)
  <!-- This example requires Tailwind CSS v2.0+ -->

<div class="bg-white shadow sm:rounded-md mb-2">
  <ul role="list" class="divide-y divide-gray-200">
    <li>
      <a href="#" class="block hover:bg-gray-50">
        <div class="px-4 py-4 flex items-center sm:px-6">
          <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
            <div class=" break-words">
              <div class="flex text-sm">
                <p class="font-medium text-indigo-600 truncate">{{$comment->user->name}}</p>
         
              </div>
              <div class="mt-2 flex break-all">
                <div class="flex items-center text-sm break-all text-gray-500">
                  <!-- Heroicon name: solid/calendar -->
                  {{$comment->message}}
       
                </div>
              </div>
            </div>
            <div class="mt-4 flex-shrink-0 sm:mt-0 sm:ml-5">
          
            </div>
          </div>
          <div class="ml-5 flex-shrink-0">
            <!-- Heroicon name: solid/chevron-right -->
            
          </div>
        </div>
      </a>
    </li>

  </ul>
</div>
@endforeach
</div>
  <div class="mt-5">
    <form method="POST" action="{{route('storecomment')}}" class="w-full max-w-xl bg-gray-100 px-5 rounded-lg py-5">
      @csrf
       <div class="flex flex-wrap -mx-3 mb-6">
          <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Tambahkan Komentar</h2>
          <div class="w-full md:w-full px-3 mb-2 mt-2">
             <textarea class="bg-white rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="message" placeholder='Komentar..' required></textarea>
          </div>
          <input type="hidden" name="project_id" value={{$project->id}}>
          <div class="w-full md:w-full flex items-start px-3">
             <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
                <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p class="text-xs md:text-sm pt-px">Some HTML is okay.</p>
             </div>
             <div class="-mr-1">
                <input type='submit' class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100" value='Submit'>
                
              </div>
          </div>
       </form>
    </div>
 </div>
    </dl>
  </div>
</div>

                    </div>
            </div>
        </div>

</div>


    </div>
    
    <script>
      var button = document.querySelector('#container .button');
button.addEventListener('click', fullscreen);
// when you are in fullscreen, ESC and F11 may not be trigger by keydown listener. 
// so don't use it to detect exit fullscreen
document.addEventListener('keydown', function (e) {
  console.log('key press' + e.keyCode);
});
// detect enter or exit fullscreen mode
document.addEventListener('webkitfullscreenchange', fullscreenChange);
document.addEventListener('mozfullscreenchange', fullscreenChange);
document.addEventListener('fullscreenchange', fullscreenChange);
document.addEventListener('MSFullscreenChange', fullscreenChange);

function fullscreen() {
  // check if fullscreen mode is available
  if (document.fullscreenEnabled || 
    document.webkitFullscreenEnabled || 
    document.mozFullScreenEnabled ||
    document.msFullscreenEnabled) {
    
    // which element will be fullscreen
    var iframe = document.querySelector('#iframecontainer iframe');
    // Do fullscreen
    if (iframe.requestFullscreen) {
      iframe.requestFullscreen();
    } else if (iframe.webkitRequestFullscreen) {
      iframe.webkitRequestFullscreen();
    } else if (iframe.mozRequestFullScreen) {
      iframe.mozRequestFullScreen();
    } else if (iframe.msRequestFullscreen) {
      iframe.msRequestFullscreen();
    }
  }
  else {
    document.querySelector('.error').innerHTML = 'Your browser is not supported';
  }
}

function fullscreenChange() {
  if (document.fullscreenEnabled ||
       document.webkitIsFullScreen || 
       document.mozFullScreen ||
       document.msFullscreenElement) {
    console.log('enter fullscreen');
  }
  else {
    console.log('exit fullscreen');
  }
  // force to reload iframe once to prevent the iframe source didn't care about trying to resize the window
  // comment this line and you will see
  var iframe = document.querySelector('iframe');
  iframe.src = iframe.src;
}
    </script>
</x-app-layout>
