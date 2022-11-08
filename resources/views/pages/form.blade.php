<x-guest-layout>
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
    <!-- Page Title ends
============================================= -->

    <!-- == main content starts == -->
    <div id="dtr-main-content" class="bg-white">
        <div class="container">
            @livewire('form')
        </div>
    </div>
    <!-- == main content ends == -->

</x-guest-layout>
