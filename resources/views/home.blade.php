@extends('components.app')

@section('content')
<div class="go-to-product bg-myOrange hover:bg-transparent rounded-s-lg py-4 px-2 fixed right-0 bottom-5 cursor-pointer shadow-md">
        <a href="/products">
            <i class="fa-solid fa-cart-shopping text-myBlue animate-bounce"></i>
        </a>
    </div>
        <!-- Head -->
        
        <nav class="flex bg-white fixed top-0 w-full h-[70px] shadow-md  items-center z-10">
            <div class="logo cursor-pointer">
                <img src={{asset('img/logo.png')}} alt="biochem_logo" class="h-20">
            </div>
            <h2 class="text-2xl font-extrabold text-myBlue cursor-pointer">BIOCHEM SCIENTIFIC DIAGNOSTIC SUPPLY</h2>
        </nav>
        <!-- End Head -->

        <!-- Hero -->
       <div class="relative overflow-hidden bg-cover bg-no-repeat p-12 text-center" style="background-image: url('img/bg.JPG'); height: 600px">
            <div
                class="absolute bottom-0 left-0 right-0  h-full w-full overflow-hidden bg-fixed"
                style="background-color: rgba(0, 0, 0, 0.6)">
                <div class="flex h-full items-center justify-center mx-14">
                    <div class="text-white">
                            <button
                            type="button"
                            class="rounded px-7 pb-[8px] pt-[10px] text-sm font-medium uppercase bg-myBlue leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                            data-te-ripple-init
                            data-te-ripple-color="light">
                            <a href="/products">
                                <i class="fa-solid fa-cart-shopping"></i>
                                Products
                            </a>
                            </button>
                            <button
                            type="button"
                            class="rounded px-7 pb-[8px] pt-[10px] text-sm font-medium uppercase bg-myBlue leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                            data-te-ripple-init
                            data-te-ripple-color="light">
                            <a href="https://www.google.com/maps/dir//Biochem+Scientific+Diagnostic+Supply,+PUROK+3,+0757+NATIONAL+ROAD,+Bustos,+Bulacan/@14.9305087,120.8346373,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397ab58cea4b027:0xe716e6292eb3ed48!2m2!1d120.9278153!2d14.93708?entry=ttu" target="_blank">
                                <i class="fa-solid fa-location-dot"></i>
                                Direction
                            </a>
                            </button>
                            


                            <div class="mt-14 italic rounded-lg hover:scale-150 transition delay-150 duration-1000 ease-in-out">“Trusted by Hospitals, Clinics, and Diagnostic Laboratories since 1998.”</div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- End Hero -->

        <!-- About Us -->
        <div class="about-us p-10">
                <div class="header">
                    <h2 class="text-2xl text-center font-extrabold text-myBlue mb-7">ABOUT US</h2>
                </div>

                
                <!-- Letter Founder -->
                <div class="grid-sys grid grid-cols-1 md:grid-cols-2">
                        <div data-aos="fade-right" data-aos-duration="10000"  class="letter-founder">
                        <h3 id="founder" class="text-2xl font-extrabold text-myBlue">A Letter from our <span class="italic text-myOrange">Founder</span></h3>
                            <p class="text-justify px-8 mt-6">First of all, thank you for your time and considering our services. 
                                As the founder of Biochem Scientific Diagnostic Supply, I am honored
                                to share our story of relentless dedication and unwavering commitment 
                                to healthcare excellence. Since our establishment in 1998, we have embarked
                                on an extraordinary journey, standing tall as the sole Filipino-owned enterprise
                                among multinational giants. At Biochem Scientific Diagnostic Supply, we take
                                immense pride in our heritage, embodying the essence of Filipino ingenuity and
                                genuine passion for uplifting healthcare standards. Our mission has always been
                                to provide superior quality yet affordable supplies and equipment, ensuring that
                                healthcare professionals like you can deliver nothing short of excellence to your
                                patients.
                            </p>
                        </div>
                    <!-- End Letter Founder -->

                    <!-- Founder Pic -->
                        <div data-aos="fade-down" data-aos-duration="10000" class="picture-founder px-8 cursor-pointer">
                            <img src={{asset('img/grp1.jpg')}} alt="" class="h-96">
                        </div>
                    <!-- End Founder Pic -->
                </div>


                

                <!-- Vission -->
                <div class="grid-sys grid grid-cols-1 md:grid-cols-2 mt-8 grid-auto-flow-row">

                <!-- Vission Pic -->
                <div data-aos="fade-down" data-aos-duration="10000" class="picture-vission px-8 cursor-pointer">
                            <img src={{asset('img/grp3.jpg')}} alt="" class="h-96">
                        </div>
                <!-- End Vission Pic -->

                        <div data-aos="fade-right" data-aos-duration="10000" class="letter-vission">
                        <h3 class="text-2xl font-extrabold text-myBlue">A Vision Fueled by <span class="italic text-myOrange">Growth</span></h3>
                            <p class="text-justify px-8 mt-6">
                            From the very beginning, we knew that to make a lasting impact, we needed to 
                            surpass expectations continuously. Over the years, our phenomenal growth in market 
                            share and profits has been the result of our team’s expertise in ensuring operational 
                            efficiency and productive interactions with our valued clients. As we envision the next
                            five years, we remain steadfast in our commitment to surpassing our competitors and
                            fulfilling our expansion plans and programs. With a carefully curated distribution network,
                            diverse product lines, and industry-specific accreditations, we are ready to redefine healthcare
                            excellence together.
                            </p>
                        </div>
                    <!-- End Vission -->                   
                </div>


                <!-- Letter Succes -->
                <div data-aos="fade-right" data-aos-duration="10000" class="grid-sys grid grid-cols-1 md:grid-cols-2 mt-8">
                        <div class="letter-founder">
                        <h3 class="text-2xl font-extrabold text-myBlue">Partnering for Unparalleled<span class="italic text-myOrange">Success</span></h3>
                            <p class="text-justify px-8 mt-6">
                                With great pride and humility, allow me to extend a warm
                                invitation to you to partner with us and avail of our services.
                                Just like we have done for all of our clients, we promise to do
                                everything in our power to uplift your healthcare practice and
                                take it to new heights. As your trusted supplier, our team will
                                dedicate themselves to get to know your business and harness a
                                solid relationship built on reliability, personalized support,
                                and exceptional customer service.
                            </p>
                        </div>
                    <!-- End Letter Succes -->

                    <!-- Succes Pic -->
                        <div data-aos="fade-down" data-aos-duration="10000" class="picture-founder px-8 cursor-pointer">
                            <img src={{asset('img/grp10.jpg')}} alt="" class="h-96">
                        </div>
                    <!-- End Succes Pic -->
                </div>
        </div>
        <!-- End About Us -->

        <!-- Get In Touch -->

        <!-- Head -->
        <div class="get-in-touch p-10">
            <div class="header">
                <h2 class="text-2xl text-center font-extrabold text-myBlue mb-7">GET IN TOUCH</h2>
            </div>

            <!-- Cards -->
            <div class="card grid gap-4 grid-cols-1 md:grid-cols-3 lg:grid-cols-3 ">
                <!-- Location -->
                <div data-aos="flip-up" data-aos-duration="10000" data-aos-delay="50" class="cards rounded-lg px-14 pt-8 pb-11 text-center shadow-md bg-[#EBF3E8] hover:bg-myBlue hover:text-white hover:transition delay-150 duration-1000">
                    <div class="icon flex justify-center">
                    <i class="fa-solid fa-location-dot text-myOrange"></i>
                    </div>
                    <h3 class="font-bold">WE ARE LOCATED AT</h3>
                    <h4 ><a class="text-zinc-400 hover:text-myOrange" href="https://www.google.com/maps/dir//Biochem+Scientific+Diagnostic+Supply,+PUROK+3,+0757+NATIONAL+ROAD,+Bustos,+Bulacan/@14.9305087,120.8346373,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397ab58cea4b027:0xe716e6292eb3ed48!2m2!1d120.9278153!2d14.93708?entry=ttu" target="_blank">0757 A National Road, Purok 3 Bustos, 3007 Bulacan Philippines</a></h4>
                </div>
                <!-- Link -->
                <div data-aos="flip-up" data-aos-duration="10000" data-aos-delay="100" class="cards rounded-lg px-14 pt-8 pb-11 text-center shadow-md bg-[#EBF3E8] hover:bg-myBlue hover:text-white transition delay-150 duration-1000">
                    <div class="icon flex justify-center">
                    <i class="fa-solid fa-link text-myOrange"></i>
                    </div>
                        <h3 class="font-bold">LINKS</h3>
                        <h4><a class="text-zinc-400 hover:text-myOrange" href="https://www.facebook.com/biochemscientificdiagnosticsupply" target="_blank"><span><i class="fa-brands fa-facebook mr-4"></i></span>Facebook</a></h4>
                        <h4><a class="text-zinc-400 hover:text-myOrange" href="mailto:sales@biochemsds.com"><span><i class="fa-solid fa-envelope mr-4"></i></span>Email</a></h4>
                </div>
                <!-- Phone -->
                <div data-aos="flip-up" data-aos-duration="10000" data-aos-delay="150" class="cards rounded-lg px-14 pt-8 pb-11 text-center shadow-md bg-[#EBF3E8] hover:bg-myBlue hover:text-white transition delay-150 duration-1000">
                    <div class="icon flex justify-center">
                    <i class="fa-solid fa-phone text-myOrange"></i>
                    </div>
                    <h3 class="font-bold">CALL US</h3>
                    <h4 class="text-zinc-400 hover:text-myOrange">(044) 769 6382</h4>
                    <h4 class="text-zinc-400 hover:text-myOrange">(0917) 103 7258</h4>
                </div>
            </div>
            
            
            
        </div>
        <!-- End Get In Touch -->
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