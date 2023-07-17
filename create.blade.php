<!-- Create a new job -->
<form method="POST" action="{{ route('jobs.store') }}">
    @csrf

    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
    </div>

    <div>
        <label for="company">Company:</label>
        <input type="text" name="company" id="company" required>
    </div>

    <!-- Add more job fields as needed -->

    <button type="submit">Create Job</button>
</form>
