<div class="min-h-screen flex w-full items-center pt-6 sm:pt-0 ">

    <div class="w-full mt-6 w-1/2 ">
        <img src="{{asset('assets/images/undraw_mobile_login_re_9ntv.svg')}}" class="w-fit object-cover w-2/3 mx-auto" alt="">
    </div>
    <div class="w-full min-h-screen mt-6 px-6 overflow-hidden w-1/2 flex items-center">
        <div class="w-2/3 mx-auto">
            {{ $slot }}
        </div>
    </div>
</div>
