

<!-- component -->

<header   class=" backdrop-blur-sm backdrop-opacity-90  sticky top-0 z-30" :class="top ? 'header' : 'matchheader ' ">
    
    <nav x-data="{ isOpen: false }"  class=" backdrop-blur-sm">
        <div class="container px-6  mx-auto lg:flex lg:justify-between lg:items-center transition-all duration-500 ease-in-out" :class="!top ?'py-1' :'py-8'">
            <div class="flex items-center justify-between">
                <div>
                    <a class="text-2xl font-bold   lg:text-3xl" href="#Home" :class="top ? 'text-white' : 'text-violet-600'">
                        <svg width="100" height="50" viewBox="0 0 699 208" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            {{-- <path d="M285.859 0H270.316C270.31 0 270.306 0.00420499 270.306 0.00939199V207.065C270.306 207.07 270.31 207.074 270.316 207.074H285.859C285.864 207.074 285.868 207.07 285.868 207.065V0.00939199C285.868 0.00420499 285.864 0 285.859 0Z" fill="black"/> --}}
                            <path d="M344.432 143.77C344.906 148.833 346.773 153.612 350.033 158.106C353.261 162.632 357.645 166.272 363.183 169.025C368.721 171.81 375.13 173.203 382.409 173.203C393.644 173.203 402.87 170.623 410.086 165.465C417.27 160.338 420.862 152.869 420.862 143.058C420.862 136.095 418.963 130.272 415.165 125.588C411.367 120.936 406.699 117.217 401.161 114.432C395.622 111.679 388.027 108.482 378.374 104.843C368.089 101.045 359.781 97.5159 353.451 94.2561C347.122 91.028 341.789 86.5972 337.453 80.9639C333.086 75.3622 330.902 68.2097 330.902 59.5064C330.902 52.5438 332.88 45.9294 336.836 39.663C340.792 33.4283 346.773 28.3805 354.78 24.5194C362.756 20.6267 372.598 18.6803 384.308 18.6803C392.062 18.6803 398.471 19.2341 403.534 20.3418C408.598 21.4495 413.741 23.2693 418.963 25.8011L413.741 41.9417C403.93 37.6692 394.277 35.5329 384.783 35.5329C373.548 35.5329 364.734 37.78 358.341 42.274C351.916 46.7997 348.783 52.9394 348.941 60.6932C348.941 65.4405 350.603 69.5072 353.926 72.8936C357.249 76.3116 361.363 79.2074 366.269 81.581C371.174 83.9546 377.82 86.6447 386.207 89.6513C397.442 93.7656 406.62 97.6899 413.741 101.425C420.862 105.127 426.922 110.254 431.923 116.806C436.892 123.388 439.376 131.585 439.376 141.396C439.376 155.954 434.755 167.664 425.514 176.526C416.241 185.387 401.952 189.818 382.647 189.818C370.937 189.818 360.936 187.634 352.644 183.267C344.321 178.931 337.991 173.313 333.655 166.414C329.288 159.546 326.946 152.394 326.629 144.957L344.432 143.77ZM565.652 143.295C565.652 159.277 560.778 171.019 551.031 178.519C541.315 186.052 529.652 189.818 516.044 189.818C507.499 189.818 499.428 188.267 491.833 185.166C484.237 182.096 478.018 177.079 473.176 170.117C468.366 163.154 465.96 154.214 465.96 143.295V66.8646C465.96 50.5658 470.423 38.223 479.348 29.8363C488.304 21.4495 500.615 17.2561 516.281 17.2561C531.947 17.2561 544.084 21.6869 552.692 30.5484C561.332 39.4098 565.652 51.5944 565.652 67.102V143.295ZM548.562 68.0514C548.562 57.1328 545.745 48.8252 540.112 43.1285C534.51 37.4318 526.408 34.5835 515.806 34.5835C505.204 34.5835 497.086 37.3844 491.453 42.9861C485.851 48.6195 483.05 56.9746 483.05 68.0514V141.871C483.05 151.998 486.057 159.72 492.07 165.037C498.083 170.323 505.995 172.965 515.806 172.965C525.617 172.965 533.529 170.323 539.542 165.037C545.556 159.72 548.562 151.84 548.562 141.396V68.0514ZM677.212 187.207L626.179 110.064L617.872 123.357V187.207H600.069V20.8166H617.872V93.4491L666.531 20.8166H686.706L636.86 94.3985L698.052 187.207H677.212Z" fill="currentColor"/>
                            <path d="M226.877 81.7787L123.974 13.6813C122.642 12.7898 120.997 12.4799 119.421 12.809L5.4479 36.8791C3.14458 37.3612 1.33864 39.1556 0.829775 41.4551L0.144905 44.539C-0.398407 46.9648 0.615515 49.4785 2.6931 50.8483L50.4125 82.4291L47.6539 94.8946C46.265 101.2 50.9443 108.829 61.9062 116.08C82.7203 129.854 118.234 137.062 141.291 132.192C152.191 129.892 158.34 125.297 159.595 119.642L161.971 108.879L192.76 102.379C196.59 107.793 199.084 114.358 199.716 122.734C196.59 124.352 194.424 127.574 194.424 131.342C194.424 134.499 195.951 137.277 198.292 139.056C195.645 152.551 192.117 177.355 199.157 188.348C201.231 191.585 204.165 193.651 207.647 194.313C207.923 194.366 208.198 194.393 208.47 194.393C210.517 194.393 212.342 192.943 212.74 190.854C213.187 188.493 211.638 186.213 209.281 185.761C208.516 185.62 207.513 185.249 206.492 183.657C204.009 179.777 203.427 172.121 203.886 163.482C206.033 170.185 209.334 176.215 214.419 179.563C216.44 180.898 219.133 180.328 220.449 178.32C221.769 176.315 221.211 173.617 219.206 172.293C212.365 167.786 209.476 152.336 208.86 139.81C211.841 138.145 213.88 135 213.88 131.35C213.88 127.52 211.649 124.245 208.435 122.661C207.861 113.738 205.543 106.473 201.962 100.439L224.122 95.7555C226.426 95.2734 228.232 93.479 228.741 91.1795L229.425 88.0956C229.965 85.666 228.951 83.1522 226.877 81.7787ZM108.91 58.2212C109.002 57.433 109.802 56.7902 111.29 56.4765C114.248 55.8528 118.831 56.7826 121.506 58.5579C122.849 59.4379 123.457 60.3753 123.358 61.1635L122.921 63.3176H122.918C122.822 64.102 122.022 64.7409 120.542 65.0547C117.576 65.6822 113.004 64.7524 110.326 62.9809C108.983 62.0933 108.375 61.1597 108.47 60.3753L108.91 58.2212Z" fill="currentColor"/>
                            </svg>
                            
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden z-30 ">
                    <button x-cloak @click="isOpen = !isOpen" type="button" class="   focus:outline-none  " :class="top 'text-white' ?'text-gray-500'" aria-label="toggle menu">
                        <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6  " :class="top? 'text-white' :'text-gray-500'"  fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                        </svg>
                
                        <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6  " :class="top? 'text-white' :'text-gray-500'"  fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div x-cloak :class="[isOpen ? ' scale-100 opacity-100 ' : 'opacity-0  scale-0']" class="absolute top-[100%] inset-x-0 z-20 w-full mx-auto  lg:h-auto lg:scale-100 lg:mx-[initial] shadow-md  rounded-lg lg:rounded-none px-6 py-4 transition-all duration-300 ease-in-out bg-gray-50  lg:bg-transparent  lg:shadow-none  lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center">
                <div class="flex flex-col items-center space-y-2 lg:flex-row lg:items-center lg:space-y-0 lg:-px-8 " :class="top ? ' text-violet-400 lg:text-white' :'text-gray-700'">
                    <a @click="isOpen=false" class="block font-medium   px-4 py-2 rounded-md " :class=" currentActiveLink == 'Home'  && 'linkactive' " href="#home" >Home</a>
                    <a @click="isOpen=false" class="block font-medium   px-4 py-2 rounded-md  " :class=" currentActiveLink == 'features' && 'linkactive' " href="#features">Features</a>
                    <a @click="isOpen=false" class="block font-medium   px-4 py-2 rounded-md  " :class=" currentActiveLink == 'faculty' && 'linkactive' " href="#faculty">Faculty</a>
                    <a @click="isOpen=false" class="block font-medium   px-4 py-2 rounded-md  " :class=" currentActiveLink == 'courses' && 'linkactive' " href="#courses">Courses</a>
                    <a @click="isOpen=false" class="block font-medium   px-4 py-2 rounded-md  " :class=" currentActiveLink == 'contact' && 'linkactive' " href="#contact">Contact</a>
                    
                  
                </div>
            </div>
        </div>
    </nav>

   
</header>    
