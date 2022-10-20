<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{

    // ===========================================================
    public function index()
    {
        return view('pages.programs.index');
    }

    // ===========================================================
    public function department_of_human_resources_management()
    {
        return view('pages.programs.department-of-human-resources-management');
    }

    // ===========================================================
    public function department_of_business_consulting()
    {
        return view('pages.programs.department-of-business-consulting');
    }

    // ===========================================================
    public function department_accounting_and_auditing()
    {
        return view('pages.programs.department-accounting-and-auditing');
    }

    // ===========================================================
    public function department_of_integrated_quality_management_system()
    {
        return view('pages.programs.department-of-integrated-quality-management-system');
    }

    // ===========================================================
    public function department_of_political_Science()
    {
        return view('pages.programs.department-of-political-Science');
    }

    // ===========================================================
    public function department_of_Law_criminal_law()
    {
        return view('pages.programs.department-of-Law-criminal-law');
    }

    // ===========================================================
    public function department_of_health_nutrition()
    {
        return view('pages.programs.department-of-health-nutrition');
    }

    // ===========================================================
    public function department_international_arbitration_and_international_law()
    {
        return view('pages.programs.department-international-arbitration-and-international-law');
    }

    // ===========================================================
    public function department_of_international_relations_and_diplomacy()
    {
        return view('pages.programs.department-of-international-relations-and-diplomacy');
    }

    // ===========================================================
    public function department_of_crisis_management()
    {
        return view('pages.programs.department-of-crisis-management');
    }

    // ===========================================================
    public function department_of_physical_education()
    {
        return view('pages.programs.department-of-physical-education');
    }

    // ===========================================================
    public function department_of_business_administration()
    {
        return view('pages.programs.department-of-business-administration');
    }

    // ===========================================================
    public function department_of_integrated_non_surgical_aesthetic_medicine()
    {
        return view('pages.programs.department-of-integrated-non-surgical-aesthetic-medicine');
    }
}
