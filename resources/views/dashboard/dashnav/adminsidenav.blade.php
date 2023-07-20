<header class="min-h-[100vh]  bg-[#2658acfa]">
    <div class="BannerHead flex flex-col items-center">
        <span class=" text-[1.5rem] font-semibold text-white h-12 ">{{auth()->user()->name}}</span>
    </div>
    <nav id="sidebarMenu" class="p-2">
        <div>
            <div class="list-group list-group-flush">
                <ul>
                    <div class="p-2">
                        <ul>
                            <li >
                                <a class="text-white text-decoration-none p-1" href="/admin/home">Dashboard </a>
                            </li>
                        </ul>
                    </div>
                    <div id="accordionFlushExample" class="my-4" >
                        <div class="">
                            <h2 class="mb-0" id="flush-headingTwo">
                                <button
                                    class="group relative flex w-full items-center rounded-none border-0  p-2 text-left text-base text-white transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white  [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
                                    type="button" data-te-collapse-init data-te-collapse-collapsed
                                    data-te-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Maintain Staff
                                    <span
                                        class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="!visible hidden border-0" data-te-collapse-item
                                aria-labelledby="flush-headingTwo" data-te-parent="#accordionFlushExample">
                                <ul class="block text-sm bg-white text-left " aria-labelledby="dropdownLargeButton">
                                    <li class="py-1"> <a href="/admin/user"
                                            class="text-gray-900 text-decoration-none  p-1">Staff List</a></li>
                                    <li class="py-1"><a href="/register"
                                            class="text-gray-900 text-decoration-none p-1">Add
                                            Staff</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2 class="mb-0" id="flush-headingThree">
                            <button
                                class="group relative flex w-full items-center rounded-none border-0  p-2 text-left text-base text-white transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white  [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
                                type="button" data-te-collapse-init data-te-collapse-collapsed
                                data-te-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Maintain Task
                                <span
                                    class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="!visible hidden rounded" data-te-collapse-item
                            aria-labelledby="flush-headingThree" data-te-parent="#accordionFlushExample">
                            <ul class="block text-sm bg-white text-left border rounded" aria-labelledby="dropdownLargeButton">
                                <li class="py-1"><a href="/admin/importExcel"
                                        class="text-gray-900 text-decoration-none p-3">Import Task</a></li>
                            </ul>
                        </div>
                </ul>

                </ul>
            </div>
        </div>
    </nav>




</header>