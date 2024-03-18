<div class="w-full overflow-hidden">
    <div class="border-b flex flex-col overflow-y-scroll grow h-full">
        {{-- Header --}}
        <header class="w-full sticky inset-x-0 flex pb-[5px] pt-[5px] top-0 z-10 bg-white border-b ">
            <div class="flex w-full items-center px-2 lg:px-4 gap-2 md:gap-5">
                <a class="shrink-0 lg:hidden" href="#">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                    </svg>

                </a>
                {{-- avatar --}}
                <div class="shrink-0">
                    <x-avatar class="h-9 w-9 lg:w-11 lg:h-11" />
                </div>

                <h6 class="font-bold truncate"> {{ $selectedConversation->getReceiver()-> name }}</h6>
            </div>
        </header>
        {{-- body --}}
        <main class="flex flex-col gap-3 p-2.5 overflow-y-auto flex-grown overscroll-contain overflow-x-hidden">
            <div @class([
                'max-w-[85%] md:max-w-[78%] flex w-auto gap-2 relative'
            ])>

            {{-- avatar --}}

                <div @class(['shrink-0'])>
                    <x-avatar/>
                </div>
                {{-- message body --}}
                <div @class(['flex flex-wrap text-[15px] rounded-xl p-2.5 flex flex-col text-black bg-[#f6f6f8fb]',
                    'rounded-bl-none border border-gray-200/40' => false,
                    'rounded-bl-none bg-blue-500/80 text-white' => true,

                    ])>
                    <p class="whitespace-normal truncate text-sm md:text-base tracking-wide lg:tracking-normal">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente quidem provident illo consectetur sint, cumque nam eveniet. Aut esse consequuntur dolorum aperiam tenetur modi, repellendus cumque porro facilis maxime! Quas?
                    </p>

                    <div class="ml-auto flex gap-2">

                        <p @class([
                            'text-xs ',
                            'text-gray-500'=>false,
                            'text-white'=>true,

                                ]) >
                            <p style="font-size:12px">5:20 am</p>
                        </p>
                        <div>
                            {{-- đã xem --}}
                            <span x-cloak x-show="markAsRead" @class('text-gray-200') title="Đã xem">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                    <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                    <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                                </svg>
                            </span>

                            {{-- đã gửi --}}
                            <span x-show="!markAsRead" @class('text-gray-200') title="Đã gửi">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                </svg>
                            </span>

                        </div>
                </div>
            </div>
        </main>

        {{-- send message --}}
        <footer class="shrink-0 z-10 bg-white inset-x-0 bottom-0">
            <div class="p-2 border-t">
                <form action="" method="POST" autocapitalize="offf">
                    @csrf

                    <input type="hidden" name="" id="">
                    <div class="grid grid-cols-12">
                        <input type="text" name="" id=""
                        autocomplete="off" autofocus placeholder="Nhập nội dung ..."
                        maxlength="1700"
                        class="col-span-10 bg-gray-100 border-0 outline-0 focus:border-0 focus:ring-0 rounded-lg focus:outline-none">
                        <button type="submit" class="col-span-2">Gửi</button>
                    </div>
                </form>
            </div>
        </footer>
    </div>
</div>
