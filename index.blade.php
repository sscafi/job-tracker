<!-- Display a list of jobs -->
@foreach ($jobs as $job)
    <div>
        <h2>{{ $job->title }}</h2>
        <p>Company: {{ $job->company }}</p>
        <!-- Add more job details as needed -->
        <a href="{{ route('jobs.show', $job) }}">View Details</a>
    </div>
@endforeach
