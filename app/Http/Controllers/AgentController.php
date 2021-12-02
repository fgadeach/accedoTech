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

    public function storeAgentWeek(Request $request): \Illuminate\Http\JsonResponse
    {
        if ($agent_week = Agent_Week::where('week_id', $request['week']['id'])->first()) {
            $agent_week->delete();
        }else{

            $agent_week = new Agent_Week();
            $agent_week->available = true;
            $agent_week->agent_id = auth()->user()->agent->id;
            $agent_week->week_id = $request['week']['id'];

            $agent_week->save();
        }

        return response()->json([
            'saved' => true,
            'weeks' => Week::with('agent_week.agent')->get()
        ]);
    }
}
