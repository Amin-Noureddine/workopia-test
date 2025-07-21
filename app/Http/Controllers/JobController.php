<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View; // Add this line

class JobController extends Controller
{
    // @desc    Show all jobs
    // @route   GET /jobs
    public function index(): View
    {
        $title = 'Available Jobs'; // Define $title here
        $jobs = [
            'Software Engineer',
            'Web Developer',
            'Data Scientist',
        ];

        // FIX: Pass both 'title' and 'jobs' to the view
        return view('jobs/index', compact('title', 'jobs'));
    }

    // @desc    Show create job form
    // @route   GET /jobs/create
    public function create(): View
    {
        return view('jobs.create');
    }

    // @desc    Store a new job
    // @route   POST /jobs
    public function store(Request $request): string
    {
        $title = $request->input('title');
        $description = $request->input('description');

        return "Title: $title, Description: $description";
    }

    // @desc    Show a single job
    // @route   GET /jobs/{id}
    public function show(string $id): string
    {
        return "Showing job $id";
    }

    // @desc    Show the form for editing a job
    // @route   GET /jobs/{id}/edit
    public function edit(string $id): string
    {
        return "Edit job $id";
    }

    // @desc    Update a job
    // @route   PUT /jobs/{id}
    public function update(Request $request, string $id): string
    {
        return "Update job $id";
    }

    // @desc    Delete a job
    // @route   DELETE /jobs/{id}
    public function destroy(string $id): string
    {
        return "Delete job $id";
    }

    // @desc    Save a job (added as per your web.php route)
    // @route   GET /jobs/{id}/save
    public function save(string $id): string
    {
        return "Saving job $id";
    }
}
