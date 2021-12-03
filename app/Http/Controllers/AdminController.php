<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\Campaign_Schedule;
use App\Models\Schedule_Week;
use App\Models\Week;
use App\Models\Schedule;

class AdminController extends Controller
{
    public function getCampaigns()
    {
        $campaigns = Campaign::get();
        return view('admin.admindash', compact('campaings'));
    }

    public function getCampaignSchedule($id)
    {
        $campaignSchedule = Campaign_Schedule::where('campaign_id', '=', 'id')->get();
        return view('admin.admindash', compact('campaignSchedule'));
    }

    public function getScheduleWeeks($id)
    {
        $scheduleWeeks = Schedule_Week::where('schedule_id', '=', 'id')->get();
        return view('admin.admindash', compact('scheduleWeeks'));
    }

    public function index($camp=null){

        $campaigns = Campaign::get();
        $schedules = Schedule::get();
        $weeks = Week::get();
        if($camp==null){
        $campaign = Campaign::first();
        }

        else{
            $campaign = Campaign::find($camp);
        }
        $campaignSchedule = Campaign_Schedule::with('schedule_week.week','schedule_week.schedule')->where('campaign_id', '=', $campaign->id)->get();

        return view('admin.admindash', compact('campaignSchedule','campaign','campaigns','schedules','weeks'));
    }
}
