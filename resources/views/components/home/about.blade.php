<section id="about" class="dark:bg-slate-800 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
    <div class="container">
        <div class="flex flex-wrap justify-between items-center -mx-4">
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex items-center -mx-3 sm:-mx-4">
                    <div class="w-full xl:w-1/2">
                        <div class="py-3 sm:py-4">
                            <img src="{{ url('/img/me3.jpg')}}" alt="" class="rounded-2xl w-full">
                        </div>
                        <div class="py-3 sm:py-4">
                            <img src="{{ url('/img/me2.jpg')}}" alt="" class="rounded-2xl w-full">
                        </div>
    
                    </div>

                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="my-4 relative z-10">
                            <img src="{{ url('/img/me4.jpg')}}" alt="" class="rounded-2xl w-full">

                            <x-about-dots></x-about-dots>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                <div class="mt-10 lg:mt-0">
                    <span class="font-semibold text-lg text-primary mb-2 block">
                        <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500">
                            "Do What You Can, With What You Have, Where You Are."
                        </blockquote>
                    </span>
                    <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8">
                        About Me
                    </h2>
                    <p class="text-base dark:text-gray-400 mb-8">
                    I am a Full-Stack Developer with an attitude to continuous improvement in all job areas. <br>
                    Willing to keep technical background always up-to-date and commitment to technical excellence. <br>
                    I Am A Fast Leaner With A Flair For Leaning.
                    </p>
                    <p class="text-base dark:text-gray-400 mb-8">
                        Since I started my journey as a developer, I have worked on various projects to improvise on my technical skills. 
                        <span class="text-amber-500 font-bold">PHP</span> and <span class="text-amber-500 font-bold">JavaScript</span>. <br />
                        My content is mostly focused on practical examples and projects. <br />
                    </p>
                    <!-- <x-button-link href="https://youtube.com/thecodeholic" variant="red" target="_blank">
                        View my channel
                    </x-button-link> -->
                </div>
            </div>
        </div>
    </div>
</section>