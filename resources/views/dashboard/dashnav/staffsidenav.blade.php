<header class="min-h-[100vh]  bg-[#2658acfa]">
    <div class="BannerHead flex flex-col items-center">
        <span class=" text-[1.5rem] font-semibold text-white h-12 ">{{auth()->user()->name}}</span>
    </div>
    <nav id="sidebarMenu" class="p-2">
        <div class="">
        <ul>
            <li class="my-3">
                <a href="/staff/home/{{auth()->user()->id}}" class="text-white p-1">Dashboard</a>
            </li>
        </ul>
        </div>
        <div class="">
            <ul>

                <li class="my-3">

                    <a href="/staff/leave/{{auth()->user()->id}}" class="text-white text-decoration-none p-1 "
                        target="_blank"> Apply
                        Leave</a>

                </li>
                <li class="my-3">

                    <a href="/staff/sendMail" class="text-white text-decoration-none p-1" target="_blank"> Send Mail</a>
                </li>
            </ul>
        </div>
    </nav>
</header>