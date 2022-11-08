<div class="dtr-page-with-sidebar dtr-has-right-sidebar">
    <section class="bg-white dark:bg-gray-900 mx-auto">
        <div class="flex justify-content-center item-center pt-12 pb-6">
            @if($step == 1)
            <div class="flex justify-center items-center text-lg transition duration-300" wire:click="changeStep('1')">
                <div class="border rounded-xl bg-indigo-600 text-white px-3 py-2 shadow-sm cursor-pointer">
                    1
                </div>
                <span class="ml-2 text-indigo-600 text-base">City and persons</span>
                <span class="w-20 border-t-2 border-indigo-600 border-dashed mx-2"></span>
            </div>
            @else
                <div class="flex justify-center items-center text-lg transition duration-300" wire:click="changeStep('1')">
                    <div class="border rounded-xl bg-green-600 text-white px-3 py-2 shadow-sm cursor-pointer">
                        ✔
                    </div>
                    <span class="ml-2 text-green-600 text-base">City and persons</span>
                    <span class="w-20 border-t-4 border-green-500 mx-2"></span>
                </div>
            @endif
                @if($step == 1)
                    <div class="flex justify-center items-center text-base transition duration-300" wire:click="changeStep('2')">
                        <div class="border rounded-xl bg-gray-400 text-white px-3 py-2 shadow-sm cursor-pointer">
                            2
                        </div>
                        <span class="ml-2 text-gray-400 text-base">Personal Information</span>
                        <span class="w-20 border-t border-gray-400 border-dashed mx-2"></span>
                    </div>
                @elseif($step == 2)
                    <div class="flex justify-center items-center text-lg transition duration-300" wire:click="changeStep('2')">
                        <div class="border rounded-xl bg-indigo-600 text-white px-3 py-2 shadow-sm cursor-pointer">
                            2
                        </div>
                        <span class="ml-2 text-indigo-600 text-base">Personal Information</span>
                        <span class="w-20 border-t-2 border-indigo-600 border-dashed mx-2"></span>
                    </div>
                @else
                    <div class="flex justify-center items-center text-base transition duration-300" wire:click="changeStep('2')">
                        <div class="border rounded-xl bg-green-600 text-white px-3 py-2 shadow-sm cursor-pointer">
                            ✔
                        </div>
                        <span class="ml-2 text-green-600 text-base">Personal Information</span>
                        <span class="w-20 border-t-4 border-green-500 mx-2"></span>
                    </div>
                @endif

                @if($step == 3)
                    <div class="flex justify-center items-center text-base transition duration-300" wire:click="changeStep('3')">
                        <div class="border rounded-xl bg-indigo-600 text-white px-3 py-2 shadow-sm cursor-pointer">
                            ✔
                        </div>
                        <span class="mx-2 text-indigo-400 text-base">Confirmations</span>
                    </div>
                @elseif($step == 4)
                    <div class="flex justify-center items-center text-base transition duration-300" wire:click="changeStep('3')">
                        <div class="border rounded-xl bg-green-600 text-white px-3 py-2 shadow-sm cursor-pointer">
                            ✔
                        </div>
                        <span class="mx-2 text-green-600 text-base">Confirmations</span>
                    </div>
                @else
                    <div class="flex justify-center items-center text-base transition duration-300" wire:click="changeStep('3')">
                        <div class="border rounded-xl bg-white text-gray-600 px-3 py-2 shadow-sm cursor-pointer">
                            3
                        </div>
                        <span class="mx-2 text-gray-400 text-base">Confirmations</span>
                    </div>
                @endif


        </div>
        @if($step ==1)
            <div class="pb-10 px-4 mx-auto max-w-6xl mx-auto lg:px-6">
                <form wire:submit.prevent="StepOne" class="flex flex-wrap pt-8 mt-8 text-left border-t border-gray-200 dark:border-gray-700 max-w-4xl mx-auto">
                    <div class="mb-8 w-full">
                        <h3 class="flex items-center mb-3 text-lg font-medium text-gray-900 dark:text-white">
                            Preferred area <span class="text-danger mx-2">*</span>
                        </h3>
                        <div class="items-center w-full text-sm font-medium text-gray-900 bg-white sm:flex" x-data="{city: $wire.city}">
                            <label @click="city = 'Amsterdam'" class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600 px-1 w-1/3 cursor-pointer" for="Amsterdam">
                                <input id="Amsterdam" type="radio"  wire:model="city" value="Amsterdam" class="hidden" checked="">
                                <div class="flex items-center py-3 bg-gray-100 rounded-lg border flex-col"
                                     :class="{ 'border-2 bg-dark border-info font-bold text-white shadow-lg': city === 'Amsterdam' }">
                                    <img src="{{asset('assets/images/Amsterdam.jpg')}}" alt="" class="w-48 h-36 object-cover rounded-lg" >
                                    <span class="pt-3 text-center w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                                    :class="{ 'font-bold text-white shadow-lg': city === 'Amsterdam' }">Amsterdam</span>
                                </div>
                            </label>
                            <label @click="city = 'Haarlem'" class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600 px-1 w-1/3 cursor-pointer" for="Haarlem">
                                <input id="Haarlem" type="radio"  wire:model="city" value="Haarlem" class="hidden">
                                <div  class="flex items-center py-3 bg-gray-100 rounded-lg border flex-col"
                                     :class="{ 'border-2 bg-dark border-info font-bold text-white shadow-lg': city === 'Haarlem' }">
                                    <img src="{{asset('assets/images/Haarlem.jpg')}}" alt="Haarlem" class="w-48 h-36 object-cover rounded-lg">
                                    <span  class="pt-3 text-center w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                                    :class="{ 'font-bold text-white shadow-lg': city === 'Haarlem' }">Haarlem</span>
                                </div>
                            </label>
                            <label @click="city = 'Netherlands'" class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600 px-1 w-1/3 cursor-pointer"  for="Netherlands">
                                <input id="Netherlands" type="radio"  wire:model="city" value="Netherlands" class="hidden">
                                <div class="flex items-center py-3 bg-gray-100 rounded-lg border flex-col"
                                     :class="{ 'border-2 bg-dark border-info font-bold text-white shadow-lg': city === 'Netherlands' }">
                                    <img src="{{asset('assets/images/Netherlands.jpg')}}" alt="Netherlands" class="w-48 h-36 object-cover rounded-lg">
                                    <span  class="pt-3 text-center w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                                    :class="{ 'font-bold text-white shadow-lg': city === 'Netherlands' }">Other in the Netherlands</span>
                                </div>
                            </label>

                        </div>
                        <x-jet-input-error for="city" class="mt-2" />
                    </div>
                    <div class="mb-8 w-full">
                        <h3 class="flex items-center mb-3 text-lg font-medium text-gray-900 dark:text-white">
                            Number <span class="text-danger mx-2">*</span>
                        </h3>
                        <div class="flex items-center">
                            <div class="w-1/5 text-center h-full input text-xl bg-gray-200 hover:bg-indigo-800 transition duration-400 cursor-pointer hover:text-white" wire:click="decrease">-</div>
                            <input  type="text" value="{{$number}}" class="required text-lg text-center rounded-0 " wire:model="number"  readonly >
                            <div class="w-1/5 text-center h-full input text-xl bg-gray-200 hover:bg-indigo-800 transition duration-400 cursor-pointer hover:text-white" wire:click="increase">+</div>
                        </div>
                        <x-jet-input-error for="number" class="mt-2" />

                    </div>
                    <div class="mb-8 w-full">
                        <h3 class="flex items-center mb-3 text-lg font-medium text-gray-900 dark:text-white">
                            Family composition <span class="text-danger mx-2">*</span>
                        </h3>
                        <div class="flex flex-wrap" x-data="{composition: $wire.composition}">
                            <label for="single" @click="composition = 'single'" class="px-1 w-1/6 flex text-center items-center justify-center text-indigo-900 hover:text-indigo-700 cursor-pointer ">
                                <div class="w-full rounded-xl bg-gray-50 hover:bg-gray-100 py-2 border border-gray-200 hover:border-gray-900 cursor-pointer"
                                     :class="{ 'border-2 bg-dark border-dark font-bold text-white shadow-lg': composition === 'single' }">
                                    <input id="single" type="radio" value="single" wire:model="composition" class="hidden" checked="">
                                    <span  class="w-full text-sm font-medium" :class="{ 'font-bold text-white shadow-lg': composition === 'single' }">Single</span>
                                </div>
                            </label>
                            <div class="px-1 w-1/6 flex text-center items-center justify-center text-indigo-900 hover:text-indigo-700 cursor-pointer ">
                                <label for="composition" @click="composition = 'couple'"
                                     class="w-full rounded-xl bg-gray-50 hover:bg-gray-100 py-2 border border-gray-200 hover:border-gray-900 cursor-pointer"
                                     :class="{ 'border-2 bg-dark border-dark font-bold text-white shadow-lg': composition === 'couple' }">
                                    <input id="composition" type="radio" value="couple" wire:model="composition" class="hidden">
                                    <span  class="w-full text-sm font-medium" :class="{ 'font-bold text-white shadow-lg': composition === 'couple' }">Couple</span>
                                </label>
                            </div>
                            <div class="px-1 w-1/6 flex text-center items-center justify-center text-indigo-900 hover:text-indigo-700 cursor-pointer ">
                                <label for="family" @click="composition = 'family'"
                                     class="w-full rounded-xl bg-gray-50 hover:bg-gray-100 py-2 border border-gray-200 hover:border-gray-900 cursor-pointer"
                                     :class="{ 'border-2 bg-dark border-dark font-bold text-white shadow-lg': composition === 'family' }">
                                    <input id="family" type="radio" value="family" wire:model="composition" class="hidden">
                                    <span  class="w-full text-sm font-medium"
                                           :class="{ 'font-bold text-white shadow-lg': composition === 'family' }">
                                        Family
                                    </span>
                                </label>
                            </div>
                            <div class="px-1 w-1/6 flex text-center items-center justify-center text-indigo-900 hover:text-indigo-700 cursor-pointer ">
                                <label for="colleagues" @click="composition = 'colleagues'"
                                     class="w-full rounded-xl bg-gray-50 hover:bg-gray-100 py-2 border border-gray-200 hover:border-gray-900 cursor-pointer"
                                     :class="{ 'border-2 bg-dark border-dark font-bold text-white shadow-lg': composition === 'colleagues' }">
                                    <input id="colleagues" type="radio" value="colleagues" wire:model="composition" class="hidden">
                                    <span  class="w-full text-sm font-medium"
                                           :class="{ 'font-bold text-white shadow-lg': composition === 'colleagues' }">
                                        Colleagues sharing
                                    </span>
                                </label>
                            </div>
                            <div class="px-1 w-1/6 flex text-center items-center justify-center text-indigo-900 hover:text-indigo-700 cursor-pointer ">
                                <label for="friends" @click="composition = 'friends'"
                                     class="w-full rounded-xl bg-gray-50 hover:bg-gray-100 py-2 border border-gray-200 hover:border-gray-900 cursor-pointer"
                                     :class="{ 'border-2 bg-dark border-dark font-bold text-white shadow-lg': composition === 'friends' }">
                                    <input id="friends" type="radio" value="friends" wire:model="composition" class="hidden">
                                    <span  class="w-full text-sm font-medium"
                                           :class="{ 'font-bold text-white shadow-lg': composition === 'friends' }">
                                        Friends sharing
                                    </span>
                                </label>
                            </div>
                            <div class="px-1 w-1/6 flex text-center items-center justify-center text-indigo-900 hover:text-indigo-700  cursor-pointer ">
                                <label @click="composition = 'other'" for="other"
                                       class="w-full rounded-xl bg-gray-50 hover:bg-gray-100 py-2 border border-gray-200 hover:border-gray-900 cursor-pointer"
                                       :class="{ 'border-2 bg-dark border-dark font-bold text-white shadow-lg': composition === 'other' }">
                                    <input id="other" type="radio" value="other" wire:model="composition" class="hidden">
                                    <span  class="w-full text-sm font-medium"
                                           :class="{ 'font-bold text-white shadow-lg': composition === 'other' }">
                                        Other
                                    </span>
                                </label>
                            </div>
                        </div>
                        <x-jet-input-error for="composition" class="mt-2" />
                    </div>
                    <div class="mb-8 w-full"  >
                        <h3 class="flex items-center mb-3 text-lg font-medium text-gray-900 dark:text-white">
                            Pets <span class="text-danger mx-2">*</span>
                        </h3>
                        <div class="items-center w-full text-sm font-medium text-gray-900 bg-white sm:flex" x-data="{pet: $wire.pet }">
                            <div class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600 px-1 w-1/4 ">
                                <label for="no-pets" @click="pet = 'no-pets'" class="flex items-center py-3  rounded-lg border flex-col cursor-pointer"
                                     :class="{ 'border-2 bg-dark border-info font-bold text-white shadow-lg': pet === 'no-pets' }">
                                    <img src="{{asset('assets/images/no-pets.png')}}" alt="dog" class="w-auto h-24 object-cover rounded-lg">
                                    <input id="no-pets" type="radio" value="no-pets" class="hidden" wire:model="pet" >
                                    <span  class="pt-3 text-center w-full font-medium text-gray-900"
                                           :class="{ 'text-white': pet === 'no-pets' }">No pets</span>
                                </label>
                            </div>
                            <div class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600 px-1 w-1/4 ">
                                <label or="dog" @click="pet = 'dog'" class="flex items-center py-3  rounded-lg border flex-col cursor-pointer"
                                     :class="{ 'border-2 bg-dark border-info font-bold text-white shadow-lg': pet === 'dog' }">
                                    <img src="{{asset('assets/images/dog.png')}}" alt="dog" class="w-auto h-24 object-cover rounded-lg">
                                    <input id="dog" type="radio" value="dog" class="hidden" wire:model="pet" >
                                    <span class="pt-3 text-center w-full font-medium text-gray-900"
                                           :class="{ 'text-white': pet === 'dog' }">Dog</span>
                                </label>
                            </div>
                            <div class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600 px-1 w-1/4 ">
                                <label for="cat" @click="pet = 'cat'" class="flex items-center py-3  rounded-lg border flex-col cursor-pointer"
                                     :class="{ 'border-2 bg-dark border-info font-bold text-white shadow-lg': pet === 'cat' }">
                                    <img src="{{asset('assets/images/cat.png')}}" alt="cat" class="w-auto h-24 object-cover rounded-lg">
                                    <input id="cat" type="radio" value="cat" class="hidden" wire:model="pet" >
                                    <span  class="pt-3 text-center w-full font-medium text-gray-900"
                                           :class="{ 'text-white': pet === 'cat' }">Cat</span>
                                </label>
                            </div>
                            <div class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600 px-1 w-1/4 ">
                                <label for="bird" @click="pet = 'bird'" class="flex items-center py-3  rounded-lg border flex-col cursor-pointer"
                                     :class="{ 'border-2 bg-dark border-info font-bold text-white shadow-lg': pet === 'bird' }">
                                    <img src="{{asset('assets/images/bird.png')}}" alt="bird" class="w-auto h-24 object-cover rounded-lg">
                                    <input id="bird" type="radio" value="bird" class="hidden" wire:model="pet" >
                                    <span  class="pt-3 text-center w-full font-medium text-gray-900"
                                           :class="{ 'text-white': pet === 'bird' }">Bird</span>
                                </label>
                            </div>
                            <div class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600 px-1 w-1/4 ">
                                <label for="other-pet" @click="pet = 'other'" class="flex items-center py-3  rounded-lg border flex-col cursor-pointer"
                                     :class="{ 'border-2 bg-dark border-info font-bold text-white shadow-lg': pet === 'other' }">
                                    <img src="{{asset('assets/images/pets.png')}}" alt="pets" class="w-32 h-24 object-cover rounded-lg">
                                    <input id="other-pet" type="radio" value="other" class="hidden" wire:model="pet" >
                                    <span class="pt-3 text-center w-full font-medium text-gray-900"
                                           :class="{ 'text-white': pet === 'other' }">Other</span>
                                </label>
                            </div>
                        </div>
                        <x-jet-input-error for="pets" class="mt-2" />
                    </div>
                    <div class="mb-8 w-full">
                        <h3 class="flex items-center mb-3 text-lg font-medium text-gray-900 dark:text-white">
                            Budget <span class="text-danger mx-2">*</span>
                        </h3>
                        <input wire:model="budget"  class="required"  type="text" placeholder="€">
                        <x-jet-input-error for="budget" class="mt-2" />
                    </div>
                    <div class="mb-8 w-full">
                        <h3 class="flex items-center mb-3 text-lg font-medium text-gray-900 dark:text-white">
                            Interior <span class="text-danger mx-2">*</span>
                        </h3>
                        <div class="flex">
                            <div class="flex mr-4">
                                <input id="Furnished" type="checkbox" value="Furnished" wire:model.array="interior" checked="" class="w-5 h-5 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-0 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="Furnished" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Furnished</label>
                            </div>
                            <div class="flex mr-4">
                                <input id="Unfurnished" type="checkbox" value="Unfurnished" wire:model.array="interior" class="w-5 h-5 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-0 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="Unfurnished" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Unfurnished</label>
                            </div>
                        </div>
                        <x-jet-input-error for="interior" class="mt-2" />
                    </div>
                    <div class="w-full">
                        <button type="submit" class="btn btn-dark-blue bg-dark w-full flex justify-content-center py-2.5 mt-3 text-center">
                            Save & Continue
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" focusable="false" class="chakra-icon css-6ey7w3"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </button>
                    </div>
                </form>
            </div>
        @endif
        @if($step ==2)
            <div class="pb-10 px-4 mx-auto max-w-6xl mx-auto lg:px-6">
                <form wire:submit.prevent="StepTwo" class="flex flex-wrap pt-8 mt-8 text-left border-t border-gray-200 dark:border-gray-700 max-w-4xl mx-auto">
                    <div class="mb-6 w-full">
                        <h3 class="flex items-center mb-3 text-lg font-medium text-gray-900 dark:text-white">
                            Mr/Miss and First/Last Name <span class="text-danger mx-2">*</span>
                        </h3>
                        <input wire:model="name"  class="required" type="text" placeholder="Mr/Mrs - First and last name*">
                        <x-jet-input-error for="name" class="mt-2" />
                    </div>
                    <div class="mb-6 w-full">
                        <h3 class="flex items-center mb-3 text-lg font-medium text-gray-900 dark:text-white">
                            Email <span class="text-danger mx-2">*</span>
                        </h3>
                        <input wire:model="email"  class="required email " type="email" placeholder="john@example.com">
                        <x-jet-input-error for="email" class="mt-2" />
                    </div>
                    <div class="mb-6 w-full">
                        <h3 class="flex items-center mb-3 text-lg font-medium text-gray-900 dark:text-white">
                            Phone <span class="text-danger mx-2">*</span>
                        </h3>
                        <input wire:model="phone"  class="required" type="text" placeholder="Phone number*">
                        <x-jet-input-error for="phone" class="mt-2" />
                    </div>
                    <div class="mb-6 w-full">
                        <h3 class="flex items-center mb-3 text-lg font-medium text-gray-900 dark:text-white">
                            Date of birth <span class="text-danger mx-2">*</span>
                        </h3>
                        <input wire:model="birth_date"  class="required" type="date">
                        <x-jet-input-error for="birth_date" class="mt-2" />
                    </div>
                    <div class="mb-6 w-full">
                        <h3 class="flex items-center mb-3 text-lg font-medium text-gray-900 dark:text-white">
                            Employer <span class="text-danger mx-2">*</span>
                        </h3>
                        <input wire:model="employer"  class="required email " type="text" placeholder="Employer *">
                        <x-jet-input-error for="employer" class="mt-2" />
                    </div>
                    <div class="mb-6 w-full">
                        <h3 class="flex items-center mb-3 text-lg font-medium text-gray-900 dark:text-white">
                            Gross income <span class="text-danger mx-2">*</span>
                        </h3>
                        <input wire:model="income"  class="required email " type="text" placeholder="€">
                        <x-jet-input-error for="income" class="mt-2" />
                    </div>
                    <div class="w-full">
                        <button type="submit" class="btn btn-dark-blue bg-dark w-full flex justify-content-center py-2.5 mt-3 text-center">
                            Save & Confirm
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" focusable="false" class="chakra-icon css-6ey7w3"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </button>
                    </div>
                </form>
            </div>
        @endif
        @if($step == 3)
            <div class="pb-10 mx-auto mx-auto">
                <div class="border rounded-lg pt-6 pb-3 mt-6 text-left border-gray-200 dark:border-gray-700 max-w-6xl mx-auto">
                    <div class="flex pl-3 ">
                        <img src="{{asset('assets/images/'.$city.'.jpg')}}" alt="" class="w-64 h-48 object-cover rounded-lg pb-2" >
                        <div class="px-4 w-full">
                            <div class="mt-2 w-full text font-medium text-green-600 font-semibold">Confirm your choice</div>
                            <div class="mt-1 w-full text-xl font-medium text-indigo-900 dark:text-gray-300">{{$city}}</div>
                            <div class="flex flex-wrap mt-4">
                                <div class="w-1/4 text-center pr-1">
                                    <div class="shadow-sm bg-medium-blue rounded-lg p-2 text-sm">
                                        <i class="icon-user text-lg"></i>
                                        <div class="my-1">
                                            <span class="font-semibold"> {{$number}} </span>
                                        </div>
                                        Guests
                                    </div>
                                </div>
                                <div class="w-1/4 text-center pr-1">
                                    <div class="shadow-sm bg-medium-blue rounded-lg p-2 text-sm">
                                        <i class="icon-hospital-user text-lg"></i>
                                        <div class="my-1">
                                            <span class="font-semibold">{{$composition}}</span>
                                        </div>
                                        Composition
                                    </div>
                                </div>
                                <div class="w-1/4 text-center pr-1">
                                    <div class="shadow-sm bg-medium-blue rounded-lg p-2 text-sm">
                                            <i class="icon-dog text-lg"></i>
                                            <div class="my-1">
                                                <span class="font-semibold">{{$pet}}</span>
                                            </div>
                                            Pets
                                        </div>
                                    </div>
                                <div class="w-1/4 text-center pr-1">
                                    <div class="shadow-sm bg-medium-blue rounded-lg p-2 text-sm">
                                        <i class="icon-credit-card text-lg"></i>
                                        <div class="my-1">
                                            <span class="font-semibold">{{$budget}}€</span>
                                        </div>
                                        Budget
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto px-3 mt-3" x-data="{ expanded: false }">
                        <h2 class="text-indigo-900 font-bold mb-2 text-xl">Good to Know :</h2>
                        <div  class="max-w-3xl">
                        <p class="">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            <br>
                            <span :class="{ 'opacity-50': expanded === false }">
                                 Deleniti modi quo vero. Adipisci aliquid doloremque eveniet in,
                            </span>
                            <br>
                            <span :class="{ 'opacity-25': expanded === false }">
                                quisquam quod tempora. Consequatur debitis earum illum magnam maxime nemo obcaecati voluptatibus! Quos.
                            </span>
                        </p>
                        <div class="flex justify-content-center" :class="{ '-mt-2 z-20': expanded === false }">
                            <button class="rounded-lg px-3 py-1 border border-dark text-dark" type="button"  @click="expanded = ! expanded" x-show="!expanded">
                                read more
                                <i class="icon-angle-down"></i>
                            </button>
                        </div>
                            <div x-show="expanded">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad atque consequuntur dicta doloribus
                                    et in magni perspiciatis possimus, rerum sequi. Blanditiis cum illum iste nesciunt quaerat?
                                    Ab amet cumque dignissimos ea eum, ex in, inventore maiores nemo officia pariatur quam quis reprehenderit velit,
                                    voluptatibus! At consequatur debitis, dolorum eveniet explicabo nam nemo quos rerum saepe totam? Ad molestiae natus
                                    praesentium qui temporibus. Animi architecto aut culpa dolore ducimus fuga fugiat impedit ipsa maxime nam, nesciunt
                                    nihil nobis nulla odit quasi quia ullam. Alias atque consectetur cum cupiditate delectus dicta fugiat hic illum magni
                                    maxime molestiae, nesciunt nisi nobis numquam quod tenetur voluptatum! Beatae fugiat inventore labore molestias neque
                                    praesentium voluptatem? Adipisci consectetur doloribus eius laboriosam quibusdam repellendus suscipit vel voluptatibus!
                                    Architecto aspernatur dolorem enim.
                                </p>
                            </div>
                        </div>
                        <form wire:submit.prevent="StepThree">
                            <div class="flex items-center my-4">
                                <input id="checkbox-1a" type="checkbox" value="accept" wire:model="accept" class="w-5 h-5 text-indigo-800 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" >
                                <label for="checkbox-1a" class="ml-2 text font-medium text-gray-900 dark:text-gray-300 pt-2">
                                    I agree to the <a href="#" class="text-indigo-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
                            </div>
                            <x-jet-input-error for="accept" class="mt-2" />
                            <div class="my-3">
                                <button type="submit" class="flex items-center btn btn-dark-blue bg-dark w-full flex justify-content-center py-2.5 mt-3 text-center">
                                    Send
                                    <i class="mx-2 icon-send"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
        @if($step == 4)
            <div class="pb-10 mx-auto mx-auto pt-6">
                <div class="flex justify-center mx-auto w-1/4">
                    <img src="{{asset('assets/images/ty.png')}}" alt="ty" class="max-w-lg p-2">
                </div>
                <div class="text-center py-6 text-green-400 font-semibold text-lg animated" >
                    Thanks for submitting! We'll get back to you soon.
                </div>

            </div>
        @endif
    </section>
    @push('modals')
        <script>
            window.onload = function () {
                Livewire.on('step-2', () => {
                        //alert('here')
                    window.scrollTo({top: 250, behavior: 'smooth'})
                    }
                )
            };
        </script>
    @endpush
</div>
