@extends('layouts.app')
@section('content')
    <div class="flex w-screen h-screen flex-col justify-center items-center relative">
        <img src="{{ asset('assets/laundry-bg.jpg') }}" class="absolute w-full h-full object-fill">
        <div class="flex w-60 h-20 justify- items-center z-50 absolute top-0 left-5">
            <img src="{{ asset('/assets/logo-ct.png') }}" class="w-12 h-12">
            <span class=" flex w-44 h-10 text-xl font-semibold justify-center items-center text-white">Laundry Booking</span>
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

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<button type="submit" 
                            class="focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center border border-slate-600 hover:border-b-4 
                            hover:border-r-4 hover:border-black hover:-translate-y-1 hover:-translate-x-1 hover:transition ease-in-out">Submit</button>

    <div class="modal" id="location_modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

    <script>
        var myModal = new bootstrap.Modal(document.getElementById('location_modal'));
        $(document).ready(function() {
            myModal.show();
        });
    </script> --}}
@endsection
