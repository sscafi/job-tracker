<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        $jobs = Job::all();

        return view('jobs.index', compact('jobs'));
    }

    public function show(Job $job)
    {
        return view('jobs.show', compact('job'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'application_status' => 'required',
            // Add validation rules for other job fields
        ]);

        $job = Job::create($validatedData);

        return redirect()->route('jobs.show', $job);
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', compact('job'));
    }

    public function update(Request $request, Job $job)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'application_status' => 'required',
            // Add validation rules for other job fields
        ]);

        $job->update($validatedData);

        return redirect()->route('jobs.show', $job);
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('jobs.index');
    }

    public function checklists(Job $job)
    {
        $checklists = $job->checklists;

        return view('checklists.index', compact('checklists', 'job'));
    }

    public function storeChecklist(Request $request, Job $job)
    {
        $validatedData = $request->validate([
            'item' => 'required',
            'completed' => 'boolean',
        ]);

        $job->checklists()->create($validatedData);

        return redirect()->route('checklists.index', $job);
    }

    public function destroyChecklist(Job $job, Checklist $checklist)
    {
        $checklist->delete();

        return redirect()->route('checklists.index', $job);
    }

    public function files(Job $job)
    {
        $files = $job->files;

        return view('files.index', compact('files', 'job'));
    }

    public function storeFile(Request $request, Job $job)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'path' => 'required',
        ]);

        $job->files()->create($validatedData);

        return redirect()->route('files.index', $job);
    }

    public function destroyFile(Job $job, File $file)
    {
        $file->delete();

        return redirect()->route('files.index', $job);
    }

    public function calendarEvents(Job $job)
    {
        $calendarEvents = $job->calendarEvents;

        return view('calendarEvents.index', compact('calendarEvents', 'job'));
    }

    public function storeCalendarEvent(Request $request, Job $job)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $job->calendarEvents()->create($validatedData);

        return redirect()->route('calendarEvents.index', $job);
    }

    public function editCalendarEvent(Job $job, CalendarEvent $event)
    {
        return view('calendarEvents.edit', compact('job', 'event'));
    }

    public function updateCalendarEvent(Request $request, Job $job, CalendarEvent $event)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $event->update($validatedData);

        return redirect()->route('calendarEvents.index', $job);
    }

    public function destroyCalendarEvent(Job $job, CalendarEvent $event)
    {
        $event->delete();

        return redirect()->route('calendarEvents.index', $job);
    }
}
