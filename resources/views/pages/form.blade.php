<x-guest-layout>
    @switch($city)
        @case('Haarlem')
            <div class="w-full rounded-2xl" style="background-image: url({{asset('assets/images/Haarlem.jpg')}});">
                <div class="dtr-page-title-wrapper py-48 backdrop-brightness-50 mt-24" >
                    <div class="container" >
                        <div class="row" >
                            <div class="col-12" >
                                <h1 class="dtr-entry-title text-gray-50 text-uppercase text-shadow-green">
                                    Let's  <span class="text-red-500">Find </span>
                                    you a house in <span class="text-red-500">Haarlem</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @break
        @case('Amsterdam')
            <div class="w-full rounded-2xl" style="background-image: url({{asset('assets/images/Amsterdam.jpg')}});">
                <div class="dtr-page-title-wrapper py-48 backdrop-brightness-50 mt-24" >
                    <div class="container" >
                        <div class="row" >
                            <div class="col-12" >
                                <h1 class="dtr-entry-title text-gray-50 text-uppercase text-shadow-green">
                                    Let's  <span class="text-red-500">Find </span> you a house in <span class="text-red-500">
                                         Amsterdam</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @break
        @default
            <div class="w-full bg-object bg-center rounded-2xl" style="background-image: url({{asset('assets/images/c4.jpg')}});">
                <div class="dtr-page-title-wrapper pt-48 backdrop-brightness-50 mt-24" >
                    <div class="container" >
                        <div class="row" >
                            <div class="col-12" >
                                <h1 class="dtr-entry-title text-gray-50 text-uppercase text-shadow-green">Let's  <span class="text-red-500">Find </span> you a <span class="text-red-500">house</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endswitch

    <!-- Page Title ends
============================================= -->

    <!-- == main content starts == -->
    <div id="dtr-main-content" class="bg-white">
        <div class="container">
            @livewire('form',['city' => $city])
        </div>
    </div>
    <!-- == main content ends == -->

</x-guest-layout>
