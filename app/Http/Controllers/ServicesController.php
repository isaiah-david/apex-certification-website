<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = [
            'iso_services' => [
                'ISO 9001:2015 - Quality Management System',
                'ISO 45001:2018 - Occupational Health and Safety Management System',
                'ISO 14001:2015 - Environmental Management System',
                'ISO 22000:2018 - Food Safety Management System',
                'ISO 21001:2018 - Management Systems for Educational Organizations',
                'ISO 30401:2018 - Human Resource Management - Knowledge Management System',
                'ISO 39001:2012 - Road Traffic Safety (RTS) Management System'
            ],
            'training_services' => [
                'Auditor/Lead Auditor Training',
                'Internal Auditor Training',
                'Workplace Safety & Environmental Training',
                'Quality Assurance & Document Control Training'
            ],
            'competency_services' => [
                'Full range of competency management services'
            ]
        ];

        return view('services', compact('services'));
    }
}