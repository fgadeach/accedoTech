
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 my-6">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="text-center text-3xl m-4 font-bold font-mono">Manpower</h1>
                <div class="inline-block relative w-64 mx-1">
                        <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        @foreach($campaigns as $campaign)
                                <option>{{$campaign->name}}</option>
                        @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"></div>
                </div>
                <div class="grid grid-cols-8 gap-4 my-2">
                        <div>
                                <div class="p-auto m-1 py-4 bg-gray-700 text-center text-xl font-bold rounded-lg tracking-wide text-white">
                                        <h1>Time</h1>
                                </div>
                                @foreach($schedules as $schedule)
                                        <h1 class="text-center my-2">{{$schedule->hour}}</h1>
                                @endforeach
                        </div>
                        @foreach ($weeks as $week)
                        <div>
                                <div class="p-auto m-1 py-4 bg-indigo-400 text-center text-xl font-bold rounded-lg tracking-wide text-white">
                                        <h1>{{$week->name}}</h1>
                                </div>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
