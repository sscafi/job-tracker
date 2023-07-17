<!-- Display detailed information about a job -->
<h2>{{ $job->title }}</h2>
<p>Company: {{ $job->company }}</p>
<!-- Add more job details as needed -->

<!-- Show checklists -->
<h3>Checklist</h3>
<ul>
    @foreach ($job->checklists as $item)
        <li>
            <input type="checkbox" {{ $item->completed ? 'checked' : '' }} disabled>
            {{ $item->item }}
        </li>
    @endforeach
</ul>

<!-- Show files -->
<h3>Files</h3>
<ul>
    @foreach ($job->files as $file)
        <li>
            <a href="{{ $file->path }}">{{ $file->name }}</a>
        </li>
    @endforeach
</ul>

<!-- Show calendar events -->
<h3>Calendar Events</h3>
<ul>
    @foreach ($job->calendarEvents as $event)
        <li>
            <strong>{{ $event->title }}</strong>
            <p>{{ $event->description }}</p>
            <p>{{ $event->start_date }} to {{ $event->end_date }}</p>
        </li>
    @endforeach
</ul>
