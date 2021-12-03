<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\Campaign_Schedule;
use App\Models\Schedule_Week;

class AdminController extends Controller
{
    public function getCampaigns()
    {
        $campaigns = Campaign::get();
        return view('admin.admindash', compact('campaings'));
    }

    public function getCampaignSchedule($id)
    {
        $campaignSchedule = Campaign_Schedule::where('campain_id', '=', 'id')->get();
        return view('admin.admindash', compact('campaignSchedule'));
    }

    public function getScheduleWeeks($id)
    {
        $scheduleWeeks = Schedule_Week::where('schedule_id', '=', 'id')->get();
        return view('admin.admindash', compact('scheduleWeeks'));
    }
}
