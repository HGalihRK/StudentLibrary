<!-- This example requires Tailwind CSS v2.0+ -->
<nav x-data="{open: false, profile: false, mobileprofile: false}" class="bg-white shadow">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <div class="flex">
        <div class="-ml-2 mr-2 flex items-center md:hidden">
          <!-- Mobile menu button -->
          <button  @click="open = ! open; mobileprofile=false" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!--
              Icon when menu is closed.

              Heroicon name: outline/menu

              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!--
              Icon when menu is open.

              Heroicon name: outline/x

              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex-shrink-0 flex items-center">
          <img class="block lg:hidden h-14 w-auto" src="{{asset('img/logo.svg')}}" alt="Workflow">
          <img class="hidden lg:block h-14 w-auto" src="{{asset('img/logo.svg')}}" alt="Workflow">
        </div>
        <div class="hidden md:ml-6 md:flex md:space-x-8">
          <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
          <a href="{{route('welcome')}}" class=" {{ Route::is('welcome')? 'border-blue-600 border-b-2': '' }}  text-gray-900 inline-flex items-center px-1 pt-1  text-sm font-medium">
            Home
          </a>
          <a href="{{route('dashboard')}}" class="{{ Route::is('dashboard')? 'border-blue-600': '' }} border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
            Dashboard
          </a>
          <a href="{{route('games')}}" class="{{ Route::is('games')? 'border-blue-600 border-b-2': '' }}  border-transparent  text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 text-sm font-medium">
            Explore Karya
          </a>
          <a href="{{route('random')}}" class="{{ Route::is('showproject')? 'border-blue-600 border-b-2': '' }} border-transparent  text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 text-sm font-medium">
            Surprise me
          </a>

        </div>
      </div>

      <div class="flex items-center">
        @auth
        <div class="flex-shrink-0">
          <a href="{{route('createproject')}}">
          <button type="button" class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <!-- Heroicon name: solid/plus-sm -->
            <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>
            <span>Upload Game</span>
          </button>
          </a>
        </div>
        <div class="hidden md:ml-4 md:flex-shrink-0 md:flex md:items-center">
       

          <!-- Profile dropdown -->
          <div class="ml-3 relative">
            <div>
              <button @click="profile = !profile" type="button" class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="sr-only">Open user menu</span>
                <img class="h-8 w-8 rounded-full" src="https://images.squarespace-cdn.com/content/v1/54b7b93ce4b0a3e130d5d232/1519987020970-8IQ7F6Z61LLBCX85A65S/icon.png?format=1000w" alt="">
              </button>
            </div>

            <!--
              Dropdown menu, show/hide based on menu state.

              Entering: "transition ease-out duration-200"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
            <div
            x-transition:enter="transition ease-out duration-200"
          x-transition:enter-start="transform opacity-0 scale-95"
          x-transition:enter-end="opacity-100 transform scale-100"
          x-transition:leave="transform opacity-100 scale-100"
          x-transition:leave-start="transform opacity-100 scale-100"
          x-transition:leave-end="transform opacity-0 scale-95"
          x-show="profile"
            
            
            class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              <!-- Active: "bg-gray-100", Not Active: "" -->
              <a href="{{route('profile.show')}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Profile</a>
              <a href="{{route('showmine',Auth::User()->id)}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Karyaku</a>
              <form method="POST" class="p-0 m-0" action="{{ route('logout') }}">
                @csrf
                <a href="{{route('logout')}}" onclick="event.preventDefault();
                this.closest('form').submit();" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Log Out</a>
            
            </form>
              
            </div>
          </div>
        </div>
        @endauth
        @guest
        <div class="flex-shrink-0 mx-1">
          <a href="{{route('register')}}">
          <button type="button" class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <!-- Heroicon name: solid/plus-sm -->
            
            <span>Register</span>
          </button>
          </a>
        </div>
        <div class="flex-shrink-0 mx-1">
          <a href="{{route('login')}}">
          <button type="button" class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <!-- Heroicon name: solid/plus-sm -->
            
            <span>Login</span>
          </button>
          </a>
        </div>
        @endguest
      </div>



    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="md:hidden" id="mobile-menu">
    <div x-show="open" class="pt-2 pb-3 space-y-1">
      <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
      <a href="{{route('welcome')}}" class="{{ Route::is('welcome')? 'text-blue-600 bg-indigo-50 border-blue-600': 'text-gray-500' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium sm:pl-5 sm:pr-6">Home</a>
      <a href="{{route('dashboard')}}" class="{{ Route::is('dashboard')? 'text-blue-600 bg-indigo-50 border-blue-600': 'text-gray-500' }} border-transparent  hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium sm:pl-5 sm:pr-6">Dashboard</a>
      <a href="{{route('games')}}" class="border-transparent {{ Route::is('games')? 'text-blue-600 bg-indigo-50 border-blue-600': 'text-gray-500' }} hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium sm:pl-5 sm:pr-6">Explore Karya</a>
      <a href="#" class="border-transparent {{ Route::is('showproject')? 'text-blue-600 bg-indigo-50 border-blue-600': 'text-gray-500' }} hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium sm:pl-5 sm:pr-6">Surprise me</a>
    </div>
    @auth
    <div x-show="open" class="pt-4 pb-3 border-t border-gray-200">
      <div class="flex items-center px-4 sm:px-6">
        <div class="flex-shrink-0">
          <img class="h-10 w-10 rounded-full" src="https://images.squarespace-cdn.com/content/v1/54b7b93ce4b0a3e130d5d232/1519987020970-8IQ7F6Z61LLBCX85A65S/icon.png?format=1000w" alt="">
        </div>
        <div class="ml-3">
          <div class="text-base font-medium text-gray-800">{{Auth::user()->name}}</div>
          <div class="text-sm font-medium text-gray-500">{{Auth::user()->email}}</div>
        </div>
   
      </div>
      <div class="mt-3 space-y-1">
        <a href="{{route('welcome')}}" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100 sm:px-6">Your Profile</a>
        <a href="{{route('dashboard')}}" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100 sm:px-6">Settings</a>
        <form method="POST" class="p-0 m-0" action="{{ route('logout') }}">
          @csrf
          <a href="{{route('logout')}}" onclick="event.preventDefault();this.closest('form').submit();" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100 sm:px-6">Sign out</a>
   
      
      </form>
        
        
        
      </div>
    </div>
    @endauth
  </div>
</nav>
