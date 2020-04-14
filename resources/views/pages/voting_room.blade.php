@extends('layouts.app');
@section('content')
    <div class="flex justify-between mt-4">
        <div class="flex flex-col justify-center w-full h-full">
            <div class="flex">
                <div id="cards-options" class="flex flex-col items-center content-center justify-center w-1/12 border border-2 border-red-600">
                    <div class="py-2 px-4 w-1/2 items-center">0</div>
                    <div class="py-2 px-4 w-1/2 items-center">1/2</div>
                    <div class="py-2 px-4 w-1/2 items-center">3</div>
                    <div class="py-2 px-4 w-1/2 items-center">5</div>
                    <div class="py-2 px-4 w-1/2 items-center">8</div>
                    <div class="py-2 px-4 w-1/2 items-center">13</div>
                    <div class="py-2 px-4 w-1/2 items-center">20</div>
                    <div class="py-2 px-4 w-1/2 items-center">40</div>
                </div>
                <div  id="bet-table" class="flex flex-col justify-between w-full">
                <div class="flex flex-col flex-wrap items-center relative">

                    <div class="flex flex-col w-1/2">
                        <p>Story description goes here : </p>
                        <span class="absolute right-0 mr-10">Time: 00:00 </span>
                    </div>
                    <div class="flex justify-evenly w-1/2 mt-20 flex-wrap">
                        <div class="">X</div>
                        <div class="">X</div>
                        <div class="">X</div>
                        <div class="">X</div>
                        <div class="">X</div>
                        <div class="">X</div>
                        <div class="">X</div>
                    </div>
                </div>
            </div>
            </div>
            <div id="player-seats" class="flex items-center justify-evenly mt-10">
                <div class="flex flex-col items-center border border-2 border-red-400 w-1/12">
                    <span>icon</span>
                    <span>vote</span>
                    <span>Name</span>
                </div>
                <div class="flex flex-col items-center border border-2 border-red-400 w-1/12">
                    <span>icon</span>
                    <span>vote</span>
                    <span>Name</span>
                </div>
                <div class="flex flex-col items-center border border-2 border-red-400 w-1/12">
                    <span>icon</span>
                    <span>vote</span>
                    <span>Name</span>
                </div>
                <div class="flex flex-col items-center border border-2 border-red-400 w-1/12">
                    <span>icon</span>
                    <span>vote</span>
                    <span>Name</span>
                </div>
                <div class="flex flex-col items-center border border-2 border-red-400 w-1/12">
                    <span>icon</span>
                    <span>vote</span>
                    <span>Name</span>
                </div>
                <div class="flex flex-col items-center border border-2 border-red-400 w-1/12">
                    <span>icon</span>
                    <span>vote</span>
                    <span>Name</span>
                </div>
                <div class="flex flex-col items-center border border-2 border-red-400 w-1/12">
                    <span>icon</span>
                    <span>vote</span>
                    <span>Name</span>
                </div>
            </div>
        </div>

        <section id="dealer-seat" class="border items-center border-2 border-red-500">
            <div class="flex flex-col h-auto m-2">
                <div class="w-full justify-evenly">
                    <span class="w-1/3">Round</span>
                    <button class="w-1/3">Start</button>
                    <button class="w-1/3">End</button>
                </div>
                <span class="w-full flex justify-center">Planing start </span>
                <span class="w-full flex justify-center">Planing End </span>

                <span class="my-4">Results</span>
                <div>
                    <div>
                        <span>[00:00]</span>
                        <span>the story description</span>
                        <span>[estimation]</span>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
