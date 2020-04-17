@extends('layouts.app')
@section('content')
    <div class="flex justify-between mt-4 text-xl">
        <div class="flex flex-col justify-center w-full h-full">
            <div class="flex flex-col justify-between w-full">
                <div class="flex flex-col flex-wrap items-center relative">

                    <div class="flex justify-evenly w-1/2">
                        <span>Planing</span>
                        <input type="text" class="w-1/2" placeholder="name">
                        <button>Start</button>
                        <button>End</button>
                    </div>
                    <div class="flex justify-evenly w-1/2 mt-10 flex-wrap">
                        <div class="flex justify-start w-full mb-2 text-2xl border-b-2 border-red-600">
                            <h1>User Stories</h1>
                        </div>
                        <div class="flex justify-between w-full pt-2">
                            <span>Story</span>
                            <input type="text" class="w-3/4" placeholder="name">
                            <span>5</span>
                            <button>Edit</button>
                            <button>Del</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="flex flex-col w-1/4">
            <span>Choose card algoritms</span>
            <span>Select evaluation rules</span>
        </section>
    </div>
@endsection
