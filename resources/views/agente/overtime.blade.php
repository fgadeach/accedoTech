<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="text-center text-3xl m-4 font-bold font-mono">Overtime</h1>
                <div class="grid grid-cols-7 gap-4 my-2">
                    @foreach ($weeks as $week)
                        <div>
                            <div class="p-auto m-3 py-4 bg-indigo-400 text-center text-xl font-bold rounded-lg tracking-wide text-white">
                                <h1> {{$week->name}}</h1>
                            </div>
                            <div class="grid gap-4 my-2 text-center  p-auto m-3 ">
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="grid grid-cols-7 gap-4 my-2">
                @foreach($weeks as $week)
                    <div>
                        @foreach($scheduls as $schedule)
                            <div class="grid gap-4 my-2 text-center p-auto m-3 hover:bg-green-400 bg-gray-400 text-white p-auto cursor-pointer text-xl rounded-lg ">
                                <h1>{{$schedule->hour}}</h1>
                            </div>
                        </a>
                        @endforeach
                        </div>
                @endforeach
                </div>
            </div>
        </div>
</x-app-layout>
            