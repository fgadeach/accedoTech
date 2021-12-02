<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;400&display=swap" rel="stylesheet">
    </head>
    <body class="m-auto">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="text-center text-3xl m-4 font-bold font-mono">Holidays (Dayshift)</h1>
                <div class="grid grid-cols-4 gap-4">
                    @foreach ($weeks as $week)
                    <div class="p-auto  cursor-pointer hover:bg-indigo-400 m-5 py-4 bg-green-400 text-center text-xl font-bold rounded-lg tracking-wide text-white">
                        <div>
                            <h1> {{$week->name}}</h1>
                        </div>
                    </div>
                    @endforeach
                    <div class="p-auto m-5 py-4 bg-gray-700 text-center text-xl font-bold rounded-lg tracking-wide text-white">
                        <div>
                            <h1> Total Horas: 40</h1>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-6">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="text-center text-3xl m-4 font-bold font-mono">Extratime</h1>
                <div class="grid grid-cols-7 gap-4 my-2">
                    <div>
                        <div class="p-auto m-3 py-4 bg-indigo-400 text-center text-xl font-bold rounded-lg tracking-wide text-white">
                            <h1> Monday</h1>
                        </div>
                        <div class="grid gap-4 my-2 text-center  p-auto m-3 ">
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 18:00-19:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 19:00-20:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 20:00-21:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 22:00-23:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 23:00-24:00</div>
                        </div>
                    </div>
                    <div>
                        <div class="p-auto m-3 py-4 bg-indigo-400 text-center text-xl font-bold rounded-lg tracking-wide text-white">
                            <h1> Tuesday</h1>
                        </div>
                        <div class="grid gap-4 my-2 text-center  p-auto m-3 ">
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 18:00-19:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 19:00-20:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 20:00-21:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 22:00-23:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 23:00-24:00</div>
                        </div>
                    </div>
                    <div>
                        <div class="p-auto m-3 py-4 bg-indigo-400 text-center text-xl font-bold rounded-lg tracking-wide text-white">
                            <h1> Wednesday</h1>
                        </div>
                        <div class="grid gap-4 my-2 text-center  p-auto m-3 ">
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 18:00-19:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 19:00-20:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 20:00-21:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 22:00-23:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 23:00-24:00</div>
                        </div>
                    </div>
                    <div>
                        <div class="p-auto m-3 py-4 bg-indigo-400 text-center text-xl font-bold rounded-lg tracking-wide text-white">
                            <h1> Thursday</h1>
                        </div>
                        <div class="grid gap-4 my-2 text-center  p-auto m-3 ">
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 18:00-19:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 19:00-20:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 20:00-21:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 22:00-23:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 23:00-24:00</div>
                        </div>
                    </div>
                    <div>
                        <div class="p-auto m-3 py-4 bg-indigo-400 text-center text-xl font-bold rounded-lg tracking-wide text-white">
                            <h1> Friday</h1>
                        </div>
                        <div class="grid gap-4 my-2 text-center  p-auto m-3 ">
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 18:00-19:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 19:00-20:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 20:00-21:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 22:00-23:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 23:00-24:00</div>
                        </div>
                    </div>
                    <div>
                        <div class="p-auto m-3 py-4 bg-indigo-400 text-center text-xl font-bold rounded-lg tracking-wide text-white">
                            <h1> Saturday</h1>
                        </div>
                        <div class="grid gap-4 my-2 text-center  p-auto m-3 ">
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 18:00-19:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 19:00-20:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 20:00-21:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 22:00-23:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 23:00-24:00</div>
                        </div>
                    </div>
                    <div>
                        <div class="p-auto m-3 py-4 bg-indigo-400 text-center text-xl font-bold rounded-lg tracking-wide text-white">
                            <h1> Sunday</h1>
                        </div>
                        <div class="grid gap-4 my-2 text-center  p-auto m-3 ">
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 18:00-19:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 19:00-20:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 20:00-21:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 22:00-23:00</div>
                            <div class="bg-white txt-sm text-gray-700 hover:bg-indigo-400 rounded-lg hover:text-white"> 23:00-24:00</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>