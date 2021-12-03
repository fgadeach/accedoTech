<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <h1 class="text-center text-3xl m-4 font-bold font-mono">Manpower: {{$campaign->name}}</h1>
                        <div class="grid grid-cols-4 gap-4 my-2">
                                @foreach($campaigns as $campaign)
                                        <a class="p-auto m-1 py-4 bg-gray-700 hover:bg-gray-400 text-center text-xl font-bold rounded-lg tracking-wide text-white" href="/CampaignSchedule/{{$campaign->id}}">{{$campaign->name}}</a>
                                @endforeach
                                        <a class="p-auto cursor-pointer m-1 py-4 text-center text-xl font-bold rounded-lg tracking-wide text-gray-700"> Update</a>
                        </div>
                                <div class="grid grid-cols-8 gap-4 my-2">
                                        <div>
                                                <div class="p-auto m-1 my-5 py-4 bg-indigo-400 text-center text-xl font-bold rounded-lg tracking-wide text-white">
                                                        <h1>Time</h1>
                                                </div>
                                                @foreach($schedules as $schedule)
                                                        <h1 class="grid gap-4 my-3 text-center bg-gray-400 text-white p-auto m-3 p-auto text-lg rounded-lg ">{{$schedule->hour}}</h1>
                                                @endforeach
                                        </div>
                                        @foreach($weeks as $week)
                                        <div>
                                                <div class="p-auto m-1 my-5 py-4 bg-indigo-400 text-center text-xl font-bold rounded-lg tracking-wide text-white">
                                                        <h1>{{$week->name}}</h1>
                                                </div>
                                                @foreach($week->schedule_week as $sw)
                                                        <h1 class="grid gap-4 bg-green-200 my-3 text-center p-auto m-3 p-auto text-lg rounded-lg ">{{$sw->campaign_schedule->headcount}}</h1>
                                                @endforeach
                                        </div>
                                        @endforeach
                                        
                                </div>
                        </div> 
                </div>
            </div>
    </x-app-layout>
            
           