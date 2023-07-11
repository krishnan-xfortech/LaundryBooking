<div>
    <div class="flex w-screen h-screen flex-col justify-center items-center relative">
        <img src="{{ asset('assets/laundry-bg.jpg') }}" class="absolute w-full h-full object-fill">
        <div class="flex w-60 h-20 justify- items-center z-50 absolute top-0 left-5">
            <img src="{{ asset('/assets/logo-ct.png') }}" class="w-12 h-12">
            <span class=" flex w-44 h-10 text-xl font-semibold justify-center items-center text-white">Laundry
                Booking</span>
        </div>
        <div
            class="flex w-[30%] h-[30%] flex-col justify-center items-center bg-white/30 backdrop-blur-lg drop-shadow-lg rounded-lg z-50 gap-10">
            <div class="flex w-full h-10 justify-between px-10 items-center">
                <label class="text-base">Select your location</label>
                <select class=" w-40 h-8 rounded-lg px-3 drop-shadow-lg focus:ring-0 focus:outline-none">
                    <option selected disabled>select a city</option>
                    <option value="">City 1</option>
                    <option value="">City 2</option>
                    <option value="">City 3</option>
                    <option value="">City 4</option>
                    <option value="">City 5</option>
                    <option value="">City 6</option>
                </select>
            </div>
            <a type="button" href="{{ url('/welcome') }}">
                <button
                    class="w-24 h-10 rounded-lg bg-white drop-shadow-lg border border-slate-600 hover:border-b-4 hover:border-r-4 hover:border-black hover:-translate-y-1 hover:-translate-x-1 hover:transition ease-in-out">
                    Proceed</button>
            </a>
        </div>
    </div>
</div>
