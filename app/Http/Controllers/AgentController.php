<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agent;
use App\Models\Agent_Week;
use App\Models\Week;

class AgentController extends Controller
{
    public function getAgents()
    {
        $agents = Agent::get();
        return view('admin.admindash', compact('agents'));
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
}
