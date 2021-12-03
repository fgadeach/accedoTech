<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <h1 class="text-center text-3xl m-4 font-bold font-mono">Holidays (Dayshift)</h1>
        <div class="grid grid-cols-4 gap-4">
            @foreach ($weeks as $week)
                <a class="p-auto cursor-pointer hover:bg-indigo-400 m-5 py-4 text-center text-xl font-bold rounded-lg tracking-wide text-white {{ $week->agent_week ? 'bg-indigo-400' : 'bg-green-400'  }}"
                   href="/AgentWeek/{{ $week->id }}">
                    <div>
                        <h1> {{$week->name}}</h1>
                    </div>
                </a>
            @endforeach
            <div class="p-auto m-5 py-4 bg-gray-700 text-center text-xl font-bold rounded-lg tracking-wide text-white">
                <div>
                    <h1> Total Horas: {{ (7 - \App\Models\Agent_Week::where('agent_id', auth()->user()->agent->id)->count()) * 8 }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-6">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <h1 class="text-center text-3xl m-4 font-bold font-mono">Extratime</h1>
        <div class="grid grid-cols-7 gap-4 my-2">
            @foreach ($weeks as $week)
                <div>
                    <div class="p-auto m-3 py-4 bg-indigo-400 text-center text-xl font-bold rounded-lg tracking-wide text-white">
                        <h1> {{$week->name}}</h1>
                    </div>
                    <div class="grid gap-4 my-2 text-center  p-auto m-3 ">
                        <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 18:00-19:00</div>
                        <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 19:00-20:00</div>
                        <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 20:00-21:00</div>
                        <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 22:00-23:00</div>
                        <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 23:00-24:00</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>