<header>
    <nav id="sidebarMenu" class=" bg-[#2658acfa] min-h-[100vh]">
        <div class="BannerHead flex flex-col items-center">
            <span class=" text-[1.5rem] font-semibold text-white p-2">{{auth()->user()->name}}</span>
        </div>
        <div>
            <div class="list-group list-group-flush">
                <ul>
                    <li class=""><a href="/admin/home"
                            class="text-white text-decoration-none  font-semibold">Dashboard</a></li>
                    <ul>
                        <li class=" text-white">Maintain Staff</li>
                        <li> <a href="/admin/user" class="text-white text-decoration-none p-3">Staff List</a></li>
                        <li><a href="/register"  class="text-white text-decoration-none p-3">Add Staff</a></li>
                    </ul>
                    <ul>
                        <li class=" text-white">Maintain Task</li>
                        <li> <a href="/admin/importExcel" target="_blank" class="text-white text-decoration-none p-3">Import  Task</a></li>
                        <li><a href="/register"  class="text-white text-decoration-none p-3">Add Staff</a></li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
</header>