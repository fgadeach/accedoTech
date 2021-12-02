<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agent;
use App\Models\Agent_Week;
use App\Models\Week;

class AgentController extends Controller
{
    public function getAgents(){
        $agents = Agent::get();
        return view('admin.admindash', compact('agents'));
    }

    public function getAgentSchedule($id){
        $agentWeeks = Agent_Week::get()->where('agent_id','=','id');
        $week = Week::get()->where('id','=','agentWeeks.id');
        return view('agente.agentedash', compact('agentWeeks','week'));
    }
}
