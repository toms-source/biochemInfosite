@extends('components.app')
@section('content')
<div class="mb-8">
    <nav class="bg-white top-0 w-full h-[70px] shadow-md ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between">
                <a href="/" class="flex items-center">
                    <img src={{asset('img/logo.png')}} alt="biochem_logo" class="h-20" />  
                    <h2 class="text-2xl md:text-lg sm:text-base xs:text-sm font-extrabold text-myBlue cursor-pointer">BIOCHEM SCIENTIFIC DIAGNOSTIC SUPPLY</h2>     
                </a>

                <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none dark:text-gray-400" aria-controls="navbar-default" aria-expanded="false">
                    <svg class="w-5 h-5" aria-hidden="true">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>

        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <div>
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border md:flex-row md:space-x-8 md:mt-0 md:border-0">
                    <li>
                        <a href="/" class="text-myBlue" aria-current="page">Home</a>
                    </li>

                    <li>
                        <a href="https://www.google.com/maps/dir//Biochem+Scientific+Diagnostic+Supply,+PUROK+3,+0757+NATIONAL+ROAD,+Bustos,+Bulacan/@14.9305087,120.8346373,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397ab58cea4b027:0xe716e6292eb3ed48!2m2!1d120.9278153!2d14.93708?entry=ttu" target="_blank" class="text-myBlue">Direction</a>
                    </li>
                </ul>
            </div>
        </div>

               
       
    </nav>
</div>

<div class="product-nam mx-14">
    <h2 class="text-2xl font-bold underline lg:font-2xl md:font-lg sm:font-md">
        <ul class="list-disc">
            <li>PRODUCTS</li>
        </ul>
    </h2>
</div>
    <div class="items grid grid-cols-3 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 xs:grid-cols-1">
        <div data-aos="flip-left" class="card my-[50px] p-12 mx-5 bg-cyan-100 rounded-tl-[70px] rounded-tr-lg rounded-bl-lg rounded-br-lg">
            <div class="picture flex justify-center">
                <img src={{asset('img/ms-380pm.png')}} alt="">
            </div>

            <h4 class="title text-center text-lg font-bold">MS-380P</h4>
            <h5 class="sub-title text-center text-sm font-light">Fully Automated Biochemistry Analyzer</h5>

            <ol class="list-disc text-justify mt-3 text-sm">
                <li>Constant 300T/H(450/H with ISE optional)</li>
                <li>13 wavelength options, 340-800 nm</li>
                <li>79 positions(39 interchangable) for routine samples, all positions can be used for STAT samples</li>
                <li>80 (39 interchangable) refrigerating reagent positions</li>
                <li>Automatic cleaning system; carrying rate <= 0.05%</li>
                <li>Automatic sample dilution: Pre-dillution and post dilution</li>
                <li>Water bath reaction tray, 37-+0.1C</li>
            </ol>
        </div>

        <div data-aos="flip-left" class="card my-[50px] p-12 mx-5 bg-cyan-100 rounded-tl-[70px] rounded-tr-lg rounded-bl-lg rounded-br-lg">
            <div class="picture flex justify-center">
                <img src={{asset('img/480m.png')}} alt="">
            </div>

            <h4 class="title text-center text-lg font-bold">MS-480</h4>
            <h5 class="sub-title text-center text-sm font-light">Automatic Biochemistry Analyzer</h5>

            <ol class="list-disc text-justify mt-3 text-sm">
                <li>Automatic, discrete, random access</li>
                <li>Internal & external probe cleaning, liquid level detection, probe depth adjustment automatically, vertical and horizontal collision protection</li>
                <li>10-step auto washing system</li>
            </ol>
        </div>

        <div data-aos="flip-left" class="card my-[50px] p-12 mx-5 bg-cyan-100 rounded-tl-[70px] rounded-tr-lg rounded-bl-lg rounded-br-lg">
            <div class="picture flex justify-center">
                <img src={{asset('img/ms-680m.png')}} alt="">
            </div>

            <h4 class="title text-center text-lg font-bold">MS-680</h4>
            <h5 class="sub-title text-center text-sm font-light">Automatic Biochemistry Analyzer</h5>
            <ol class="list-disc text-justify mt-3 text-sm">
                <li>Auto-rack sampling design</li>
                <li>High throughput & wide range test menu</li>
                <li>Accurate testing results</li>
                <li>Economic use & maintenance</li>
                <li>Intelligent system</li>
            </ol>
        </div>

        <div data-aos="flip-left" class="card my-[50px] p-12 mx-5 bg-cyan-100 rounded-tl-[70px] rounded-tr-lg rounded-bl-lg rounded-br-lg">
            <div class="picture flex justify-center">
                <img src={{asset('img/ms-u530m.png')}} alt="">
            </div>

            <h4 class="title text-center text-lg font-bold">MS-U530</h4>
            <h5 class="sub-title text-center text-sm font-light">Fully Auto Urine Dry Chemistry Analyzer</h5>

            <ol class="list-disc text-justify mt-3 text-sm">
                <li>throughput:240samples/hour</li>
                <li>Up to 15 tset parameters which are optional</li>
                <li>sample Volume:3ml</li>
                <li>Auto-loader system with a capacity of 60 samples</li>
                <li>8 inch color touch-screen, responsive</li>
                <li>Up to 10,000 results capacity</li>
                <li>Removable test paper, easy cleaning, reduce pollution</li>
                <li>The built-in thermal printers, real-time print support results</li>
            </ol>
        </div>

        <div data-aos="flip-left" class="card my-[50px] p-12 mx-5 bg-cyan-100 rounded-tl-[70px] rounded-tr-lg rounded-bl-lg rounded-br-lg">
            <div class="picture flex justify-center">
                <img src={{asset('img/650m.png')}} alt="">
            </div>

            <h4 class="title text-center text-lg font-bold">MS-H650</h4>
            <h5 class="sub-title text-center text-sm font-light">Auto Hematology Analyzer</h5>

            <ol class="list-disc text-justify mt-3 text-sm">
                <li>23 reportable and 4 research parameters CBC</li>
                <li>3 histograms(WBC, RBC, PLT) and 3 scattergrams for WBC differential and 1 dedicated to Basophil measurement</li>
                <li>User-friendly interface and easy operation with intuative color touch screen </li>
                <li>Innovate technology incl. Tri-angle Laser Scatter, Flow Cytometry, Chemical Dye</li>
                <li>Open Tube Sampling Mode for whole blood, capillary, pre-dilluted</li>
                <li>Minimized sample volume 50 15uL</li>
                <li>Compact and cost effective hemotology platform with Laser Optical Counting Technology</li>
            </ol>
        </div>

        <div data-aos="flip-left" class="card my-[50px] p-12 mx-5 bg-cyan-100 rounded-tl-[70px] rounded-tr-lg rounded-bl-lg rounded-br-lg">
            <div class="picture flex justify-center">
                <img src={{asset('img/ms-h655m.png')}} alt="">
            </div>

            <h4 class="title text-center text-lg font-bold">MS-H655</h4>
            <h5 class="sub-title text-center text-sm font-light">5-Part Differential Auto Hematology Analyzer with Autoloader</h5>

            <ol class="text-justify mt-3 text-sm">
                <li>The MS-H655 utilizes the latest technology of 3-dimensional laser simulation for the blood cell identification. The 3-dimentional scattergram makes the WBC differential analysis more accurate, with sensitive flagging(WBC, RBC & PLT) for pathologiacal sample discrimination and counting failure flags</li>
                
            </ol>
        </div>

        <div data-aos="flip-left" class="card my-[50px] p-12 mx-5 bg-cyan-100 rounded-tl-[70px] rounded-tr-lg rounded-bl-lg rounded-br-lg">
            <div class="picture flex justify-center">
                <img src={{asset('img/ms-h660m.png')}} alt="">
            </div>

            <h4 class="title text-center text-lg font-bold">MS-H660</h4>
            <h5 class="sub-title text-center text-sm font-light">Automatic Hematology Analyzer</h5>

            <ol class="list-disc text-justify mt-3 text-sm">
                <li>Latex-enhanced scattering immunoturbidemetry CRP</li>
                <li>One 3D scattergram, three 2D scattergram and three histogra</li>
                <li>5 test mode: CBC, CBC+DIFF, CRP, CBC+CRP, CBC+DIFF+CRP</li>
                <li>PC software and BI-Directional LIS connection</li>
            </ol>
        </div>

        <div data-aos="flip-left" class="card my-[50px] p-12 mx-5 bg-cyan-100 rounded-tl-[70px] rounded-tr-lg rounded-bl-lg rounded-br-lg">
            <div class="picture flex justify-center">
                <img src={{asset('img/ms-h668m.png')}} alt="">
            </div>

            <h4 class="title text-center text-lg font-bold">MS-H668</h4>
            <h5 class="sub-title text-center text-sm font-light">5-Part + CRP Joint Analyzer with Autoloader</h5>

            <ol class="list-disc text-justify mt-3 text-sm">
                <li>Easy and auto maintenance by probe cleanser</li>
                <li>CRP test combined with WBC test will help a lot for diagnosis of respiratory tract infection</li>
                <li>Buit-in cooling system is specially for CRP reagent storage. Cooling system won't be affected when power is off</li>
                <li>Space-saving design of reagent chamber is also convinient for reagent storage.</li>
                <li>The rising of Hs-CRP is early than WBC rising, in which case efficient treatment fot infection can be implemented earlier.</li>
                <li>Only three lyses for CBC+DIFF.</li>
            </ol>
        </div>

        

    </div>
    <div class="inline-flex items-center justify-center w-full">
        <hr class="w-full h-px bg-myBlue border-0 my-5">
        <span class="absolute px-3 font-medium text-gray-900 -translate-x-1/2 bg-white left-1/2">© Biochem Scientific Diagnostic Supply</span>
    </div>
    
        <footer class="bg-gray-300 grid grid-cols-3 lg:grid-cols-3 md:grid-cols-1 sm:grid-cols-1 text-myBlue ">
                <div class="column1 p-3">
                        <img src={{asset('img/logo.png')}} alt="biochem_Logo" class="h-14">
                        <div class="h3 font-bold">Keep Connected</div>

                        <div class="facebook">
                            <a href="https://www.facebook.com/biochemscientificdiagnosticsupply" target="_blank"><span><i class="fa-brands fa-facebook mr-4"></i></span>Facebook</a>
                        </div>

                        <div class="email">
                            <a href="mailto:sales@biochemsds.com"><span><i class="fa-solid fa-envelope mr-4"></i></span>sales@biochemsds.com</a>
                        </div>

                        <div class="Contact">
                            <a href="#"><i class="fa-solid fa-phone mr-4"></i>(044) 769 6382 | (0917) 103 7258</a>
                        </div>
                </div>

                <div class="colum2 mt-16 p-3">
                        <div><span><i class="fa-solid fa-location-dot mr-4"></i></span>Address</div>
                        <div class="mx-6"><a href="https://www.google.com/maps/dir//Biochem+Scientific+Diagnostic+Supply,+PUROK+3,+0757+NATIONAL+ROAD,+Bustos,+Bulacan/@14.9305087,120.8346373,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397ab58cea4b027:0xe716e6292eb3ed48!2m2!1d120.9278153!2d14.93708?entry=ttu" target="_blank">0757 A National Road, Purok 3 Bustos, 3007 Bulacan Philippines</a></div>
                </div>

                <div class="column3 mt-16 p-3">
                        <div><span><i class="fa-solid fa-clock mr-4"></i></span>Business Hours:</div>
                    
                    <ol class="list-disc text-justify mt-3 text-sm mx-6">
                        <li>Mon-Thurs: 8:00 AM – 5:00 PM</li>
                        <li>Friday: 8:00 AM – 4:00 PM</li>
                        <li>Sat-Sun: CLOSED</li>
                    </ol>
                </div>
        </footer>
@endsection