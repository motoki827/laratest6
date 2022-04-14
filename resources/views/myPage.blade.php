<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>
    <div class="max-w-5xl bg-blue-300 h-full m-8 p-5 flex justify-center ">

        <div class=" border-b-2 block md:flex">

            <div class="w-full md:w-2/5 p-4 sm:p-6 lg:p-8 bg-white mr-4 shadow-md">
                <div class="flex justify-end">
                    <a href="#" class="-mt-2 text-md  font-bold text-white bg-gray-700 rounded-full px-5 py-2 hover:bg-gray-800">更新</a>
                </div>
                <span class="text-xl font-semibold block">Admin Profile</span>

                <span class="text-gray-600">This information is secret so be careful</span>
                <div class="w-full p-8 mx-2 flex justify-center">
                    <img id="showImage" class="max-w-xs w-32 items-center border" src="" alt="">
                </div>
            </div>

            <div class="w-full md:w-3/5 p-8 bg-white lg:ml-4 shadow-md">
                <div class="rounded  shadow p-6">
                    <div class="pb-6">
                        <label for="name" class="font-semibold text-gray-700 block pb-1">氏名</label>
                        <div class="flex">
                            <input disabled id="username" class="border-1  rounded-r px-4 py-2 w-full" type="text" value="{{$user['name']}}" />
                        </div>
                    </div>
                    <div class="pb-4">
                        <label for="about" class="font-semibold text-gray-700 block pb-1">メールアドレス</label>
                        <input disabled id="email" class="border-1  rounded-r px-4 py-2 w-full" type="email" value="{{$user['email']}}" />
                        <span class="text-gray-600 pt-4 block opacity-70">Personal login information of your account</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

</x-app-layout>