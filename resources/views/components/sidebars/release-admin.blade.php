<div class="relative h-full">
    <div class="w-[18rem] fixed top-0 left-0 bottom-0 bg-white overflow-hidden px-[1rem] py-[1.2rem]">
        <section class="flex items-center space-x-2">
            <img src="/assets/darbc-logo.svg" alt="darbc logo" class="w-[3rem] h-[3rem]">
            <h1 class="text-3xl font-[900] text-custom-blue">DARBC</h1>
        </section>

        <div class="mt-[2.5rem] z-[9999]">
            <x-minor.nav-link href="{{ route('release-admin.dashboard') }}" :active="request()->routeIs('release-admin.dashboard')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                </svg>
                <span class="font-medium">Overview</span>
            </x-minor.nav-link>
            <x-minor.nav-link href="{{ route('release-admin.manage-members') }}" :active="request()->routeIs('release-admin.manage-members')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                </svg>
                <span class="font-medium">Members</span>
            </x-minor.nav-link>
            <x-minor.nav-link href="{{ route('release-admin.manage-clusters') }}" :active="request()->routeIs('release-admin.manage-clusters')">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" stroke-width=".1" stroke="currentColor" class="w-5 h-5">
                    <path class="fill-current"
                        d="M2 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H2zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm8.284 3.703A8.002 8.002 0 0 1 23 22h-2a6.001 6.001 0 0 0-3.537-5.473l.82-1.824zm-.688-11.29A5.5 5.5 0 0 1 21 8.5a5.499 5.499 0 0 1-5 5.478v-2.013a3.5 3.5 0 0 0 1.041-6.609l.555-1.943z" />
                </svg>
                <span class="font-semibold">Clusters</span>
            </x-minor.nav-link>
            <x-minor.nav-link href="{{ route('release-admin.manage-users') }}" :active="request()->routeIs('release-admin.manage-users')">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5" class="w-5 h-5">
                    <path class="fill-current"
                        d="M4 22a8 8 0 1 1 16 0H4zm9-5.917V20h4.659A6.009 6.009 0 0 0 13 16.083zM11 20v-3.917A6.009 6.009 0 0 0 6.341 20H11zm1-7c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z" />
                </svg>
                <span class="font-semibold">Staff management</span>
            </x-minor.nav-link>
            <x-minor.nav-link href="{{ route('release-admin.manage-releases') }}" :active="request()->routeIs('release-admin.manage-releases')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                </svg>
                <span class="font-medium">Release management</span>
            </x-minor.nav-link>
            <x-minor.nav-link href="#" :active="false">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" stroke-width=".1" stroke="currentColor" class="w-5 h-5">
                    <path class="fill-current" d="M11.27 12.216L15 6l8 15H2L9 8l2.27 4.216zm1.12 2.022L14.987 19h4.68l-4.77-8.942-2.507 4.18zM5.348 19h7.304L9 12.219 5.348 19zM5.5 8a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z" />
                </svg>
                <span class="font-semibold">Free Lot Distribution</span>
            </x-minor.nav-link>
            <x-minor.nav-link href="#" :active="false">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" stroke-width=".1" stroke="currentColor" class="w-5 h-5">
                    <path class="fill-current" d="M2 13h6v8H2v-8zm14-5h6v13h-6V8zM9 3h6v18H9V3zM4 15v4h2v-4H4zm7-10v14h2V5h-2zm7 5v9h2v-9h-2z" />
                </svg>
                <span class="font-semibold">Reports</span>
            </x-minor.nav-link>
        </div>

        <!-- SVG lines -->
        <section class="transform rotate-12 absolute -bottom-[5rem] -z-10">
            <svg width="669" height="1025" viewBox="0 0 669 1025" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class='stroke-[#7D7D7D]/90' opacity="0.05" d="M614.731 55.5594C347.011 167.057 256.002 339.824 341.704 573.861C427.405 807.898 391.934 999.921 235.289 1149.93" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.08" d="M601.856 51.0958C342.719 165.569 256.002 339.825 341.704 573.861C427.405 807.898 387.642 998.433 222.415 1145.47" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.12" d="M588.982 46.6316C338.428 164.081 256.002 339.824 341.704 573.861C427.405 807.898 383.351 996.945 209.54 1141" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.15" d="M576.107 42.1678C334.136 162.593 256.002 339.825 341.704 573.861C427.406 807.898 379.059 995.457 196.665 1136.54" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.18" d="M563.232 37.7044C329.845 161.106 256.002 339.825 341.704 573.862C427.405 807.898 374.768 993.97 183.791 1132.08" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.21" d="M550.358 33.24C325.553 159.617 256.002 339.825 341.704 573.861C427.406 807.898 370.476 992.481 170.916 1127.61" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.25" d="M537.483 28.776C321.261 158.129 256.002 339.824 341.704 573.861C427.405 807.898 366.185 990.993 158.041 1123.15" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.28" d="M524.609 24.3125C316.97 156.642 256.002 339.825 341.704 573.862C427.406 807.898 361.893 989.506 145.167 1118.68" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.31" d="M511.734 19.8485C312.679 155.154 256.002 339.825 341.704 573.862C427.406 807.898 357.602 988.018 132.292 1114.22" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.34" d="M498.859 15.3845C308.387 153.666 256.002 339.825 341.704 573.861C427.406 807.898 353.31 986.53 119.417 1109.76" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.38" d="M485.984 10.9205C304.095 152.178 256.002 339.825 341.704 573.861C427.405 807.898 349.018 985.042 106.543 1105.29" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.41" d="M473.11 6.45642C299.804 150.69 256.002 339.824 341.704 573.861C427.405 807.898 344.727 983.553 93.668 1100.83" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.44" d="M460.235 1.99237C295.512 149.201 256.002 339.824 341.704 573.861C427.405 807.898 340.435 982.065 80.7934 1096.36" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.48" d="M447.361 -2.47097C291.221 147.714 256.002 339.825 341.704 573.862C427.406 807.898 336.144 980.578 67.9188 1091.9" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.51" d="M434.486 -6.93508C286.929 146.226 256.002 339.825 341.704 573.861C427.405 807.898 331.852 979.09 55.0441 1087.44" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.54" d="M421.611 -11.3991C282.638 144.738 256.002 339.825 341.704 573.861C427.406 807.898 327.561 977.602 42.1694 1082.97" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.57" d="M408.737 -15.8632C278.346 143.25 256.002 339.824 341.704 573.861C427.406 807.898 323.269 976.114 29.2949 1078.51" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.61" d="M395.862 -20.3269C274.055 141.762 256.002 339.825 341.704 573.861C427.406 807.898 318.978 974.626 16.4202 1074.04" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.64" d="M382.987 -24.7911C269.763 140.274 256.002 339.824 341.704 573.861C427.406 807.898 314.686 973.138 3.54556 1069.58" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.67" d="M370.113 -29.2547C265.471 138.786 256.002 339.825 341.704 573.861C427.406 807.898 310.395 971.65 -9.32909 1065.12" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.71" d="M357.238 -33.7188C261.18 137.298 256.002 339.824 341.704 573.861C427.406 807.898 306.103 970.162 -22.2038 1060.65" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.74" d="M344.363 -38.1825C256.888 135.81 256.002 339.825 341.704 573.861C427.405 807.898 301.811 968.674 -35.0785 1056.19" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.77" d="M331.489 -42.6466C252.597 134.322 256.002 339.825 341.704 573.861C427.406 807.898 297.52 967.186 -47.9532 1051.73" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.8" d="M318.614 -47.1103C248.305 132.834 256.002 339.825 341.704 573.861C427.406 807.898 293.228 965.698 -60.8278 1047.26" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.84" d="M305.739 -51.5742C244.014 131.346 256.002 339.825 341.704 573.861C427.406 807.898 288.937 964.21 -73.7025 1042.8" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.87" d="M292.865 -56.0383C239.722 129.858 256.002 339.825 341.704 573.861C427.406 807.898 284.645 962.722 -86.577 1038.33" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.9" d="M279.99 -60.5022C235.431 128.37 256.002 339.825 341.704 573.861C427.406 807.898 280.354 961.234 -99.4518 1033.87" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.93" d="M267.115 -64.9661C231.139 126.882 256.002 339.825 341.704 573.861C427.405 807.898 276.062 959.746 -112.327 1029.41" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
                <path class='stroke-[#7D7D7D]/90' opacity="0.97" d="M254.241 -69.4302C226.848 125.394 256.002 339.824 341.704 573.861C427.406 807.898 271.771 958.258 -125.201 1024.94" stroke="#7D7D7D" stroke-opacity="0.1" stroke-width="2.5"
                    stroke-linecap="round" />
            </svg>
        </section>
    </div>
</div>
