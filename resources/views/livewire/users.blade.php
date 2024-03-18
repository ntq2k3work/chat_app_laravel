<div class="max-w-6xl mx-auto my-16">
    <h2 class="text-center text-5xl font-bold py-3 text-white" style="font-size: 48px">Users</h2>

    <div class="grid md:grid-cols-4 lg:grid-cols-3 xl:grid-cols-4 gap-5 p-5" style="grid-template-columns: repeat(4,minmax(0, 1fr))">

    @foreach ($users as $key => $user )
        <div class="w-full bg-white border border-gray-200 rounded-lg p-3 shadow">

            <div class="flex flex-col items-center pb-10">
                <img src="https://source.unsplash.com/500x500?face-{{ $key}}" alt="" class="w-24 h-24 mb-2  rounded-full shadow-lg">
                <h5 class="mb-1 text-xl font-medium text-gray-900 ">
                    {{ $user->name }}
                </h5>
                <span class="text-sm text-gray-500"> {{ $user->email }} </span>
                <div class="flex mt-4 space-x-3 md:mt-6">
                    <x-secondary-button>
                        Thêm bạn
                    </x-secondary-button>
                    <x-primary-button wire:click="message( {{ $user->id }} )">
                        Nhắn tin
                    </x-primary-button>
                </div>
            </div>

        </div>
    @endforeach

    </div>

</div>
