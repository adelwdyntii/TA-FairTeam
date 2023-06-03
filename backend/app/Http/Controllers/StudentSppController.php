<?php

namespace App\Http\Controllers;

use App\Models\StudentSpp;
use Illuminate\Http\Request;

class StudentSppController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $isAllowed = false;
            if (auth()->check()) {
                $user = auth()->user();
                $isAllowed = $user->role == 'admin';
            }
            if (!$isAllowed) {
                return abort(403);
            }
            return $next($request);
        });
    }

    public function index()
    {
        $spps = StudentSpp::orderBy('year', 'desc')->get();
        return view('student-spps.index', compact('spps'));
    }

    public function create()
    {
        return view('student-spps.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'year' => 'required|integer',
            'amount' => 'required|integer|min:0',
        ]);
        $studentSpp = StudentSpp::create([
            'year' => request('year'),
            'amount' => request('amount'),
        ]);
        session()->flash('successMessage', 'Data saved');
        return redirect()->back();
    }

    public function show(StudentSpp $studentSpp)
    {
        return view('student-spps.show', compact('studentSpp'));
    }

    public function edit(StudentSpp $studentSpp)
    {
        return view('student-spps.edit', compact('studentSpp'));
    }

    public function update(Request $request, StudentSpp $studentSpp)
    {
        request()->validate([
            'year' => 'required|integer',
            'amount' => 'required|integer|min:0',
        ]);
        $studentSpp->update([
            'year' => request('year'),
            'amount' => request('amount'),
        ]);
        session()->flash('successMessage', 'Data updated');
        return redirect()->back();
    }

    public function destroy(StudentSpp $studentSpp)
    {
        //
    }
}
