<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Agent_Extratime;
use App\Models\Week;
use App\Models\Campaign;
use App\Models\Agent_Week;
use App\Models\Campaign_Schedule;
use App\Models\Schedule;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware(["guest"]);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $weeks = Week::with('agent_week.agent')->get();
    $agentWeeks = Agent_Week::get();
    $campaigns = Campaign::get();
    $campaignSchedule = Campaign_Schedule::get();
    $schedules = Schedule::get();

    return view('dashboard', compact('weeks', 'agentWeeks','campaigns','schedules'));
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/getAgentSchedule', [AgentController::class, "getAgentSchedule"])->name('getAgentSchedule');

Route::get('/AgentWeek/{week}', [\App\Http\Controllers\AgentController::class, 'storeAgentWeek']);

Route::get('/ScheduleWeeks/{schedule}', [\App\Http\Controllers\AdminController::class, 'getScheduleWeeks']);

Route::get('admin', function () {
    return "Registrado";
});

Route::get('agente', function () {
    $agent = User::find(2);
    $agent->assignRole("agent");
    return "Registrado";
});

Route::get('test', function () {
 return Agent_Week::where('agent_id', auth()->user()->agent->id)->count();
});

