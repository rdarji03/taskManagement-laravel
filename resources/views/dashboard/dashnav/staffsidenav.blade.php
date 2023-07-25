<header class="min-h-[100vh]  bg-[#2658acfa]">
    <div class="BannerHead flex flex-col items-center">
        <span class=" text-[1.5rem] font-semibold text-white h-12 ">{{auth()->user()->name}}</span>
    </div>
    <nav id="sidebarMenu" class="p-2">
        <div class="list-group list-group-flush">
            <a href="/staff/home" class="text-white text-decoration-none p-3">Dashboard</a>
        </div>
        <div class="list-group list-group-flush">
            <a href="/staff/leave/{{auth()->user()->id}}" class="text-white text-decoration-none p-3" target="_blank"> Apply
                Leave</a>
            <a href="/staff/sendMail" class="text-white text-decoration-none p-3" target="_blank"> Send Mail</a>
        </div>
    </nav>
</header>