<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agent;
use App\Models\Agent_Week;
use App\Models\Agent_Extratime;
use App\Models\Week;
use App\Models\Schedule_Week;
use App\Models\Schedule;

class AgentController extends Controller
{
    public function getAgents()
    {
        $agents = Agent::get();
        $ag = Agent::Where('id','=',auth()->user()->agent->id)->get();

        $scheduls = Schedule::Where('schedule_hour','<',$ag->end_date)->get();

        return view('admin.admindash', compact('agents','scheduls'));
    }

    public function getAgentSchedule($id)
    {
        $agentWeeks = Agent_Week::where('agent_id', '=', 'id')->get();
        $week = Week::where('id', '=', 'agentWeeks.id')->get();
        return view('agente.agentedash', compact('agentWeeks', 'week'));
    }

    public function storeAgentWeek(Week $week)
    {
        if ($agent_week = Agent_Week::where('week_id', $week->id)->first()) {
            $agent_week->delete();
        }else{

            if(count(Agent_Week::where('agent_id', auth()->user()->agent->id)->get())<2){
                $agent_week = new Agent_Week();
                $agent_week->available = true;
                $agent_week->agent_id = auth()->user()->agent->id;
                $agent_week->week_id = $week->id;

                $agent_week->save();
            }
        }

        return back();
    }

    public function storeAgentExtratime(Agent $agent)
    {
        $scheduls = Schedule::Where('hour','>',auth()->user()->agent->endTime)->get();
        $weeks = Week::get();

        return view('agente.overtime', compact('scheduls','weeks'));
    }

}
