<nav class="navbar navbar-expand-xl bg-ghost-white" style="width: 100%;">
    <div class="container-xxl justify-content-md-start">
        <a class="navbar-brand" href="#">
            <img src="./assets/GDP.jpg" alt="" />
        </a>
        <!-- /.navbar-brand -->

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="./assets/icons/bars.svg" class="svg-inject svg-icon" alt="" />
        </button>
        <!-- /.navbar-toggler-mobile -->
        <!-- /.btn-login and btn-signup mobile -->
        <div class="collapse navbar-collapse" id="navbarContent" style="margin-left: -50%;">
            <div class=" d-grid d-xl-flex align-items-xl-center pb-15 pb-xl-0 w-100 gap-20 gap-xl-0">
                <ul class="navbar-nav mx-xl-auto order-2 order-xl-1">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a class="nav-link" aria-current=" page" href="/">Home</a>
                    </li>
                    <li class="nav-item {{ request()->is('index_datakelurahan') ? 'active' : '' }}" s>
                        <a class="nav-link" href="">Input Data kelurahan</a>
                    </li>
                    <li class="nav-item {{ request()->is('index_datapasien') ? 'active' : '' }}">
                        <a class="nav-link" href="">Register Pasien</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="hidden sm:flex sm:items-center sm:ml-6">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                        <div>{{ Auth::user()->name }}</div>

                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>
                <x-slot name="content">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</nav>