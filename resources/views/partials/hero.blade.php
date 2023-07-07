<div id="{{ $data->link_section }}" class="from-yellow-400 to-yellow-300  bg-gradient-to-b w-full lg:h-screen h-full">
    <div class="grid lg:grid-cols-2 lg:pt-0 pt-20 h-full items-center justify-items-center">
        <div class="lg:w-[70%] w-[90%] lg:block flex flex-col ">
            <h1 class="lg:text-6xl text-4xl lg:text-start text-center text-white font-extrabold mb-3">{{ $data->title }}
            </h1>
            <p class="mb-3  lg:text-start text-center">{{ $data->subtitle }}
            </p>
            <a href="" class="btn btn-neutral normal-case"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="currentColor" class="fill-current" viewBox="0 0 16 16">
                    <path
                        d="M14.222 9.374c1.037-.61 1.037-2.137 0-2.748L11.528 5.04 8.32 8l3.207 2.96 2.694-1.586Zm-3.595 2.116L7.583 8.68 1.03 14.73c.201 1.029 1.36 1.61 2.303 1.055l7.294-4.295ZM1 13.396V2.603L6.846 8 1 13.396ZM1.03 1.27l6.553 6.05 3.044-2.81L3.333.215C2.39-.341 1.231.24 1.03 1.27Z" />
                </svg>{{ $data->btn_text }}</a>
        </div>
        <div class="w-[80%]">
            <img src="{{ asset('storage/' . $data->img) }}" alt="hero">
        </div>
    </div>
</div>
