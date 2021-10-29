<h1>{{ $title }}</h1>

@foreach ($jobs as $job)
    <section>
        <h2>{{ $job->name }}</h2>
        <p>{{ $job->company }}</p>
        <p>{{ $job->rating }}</p>
        <p>{{ $job->location }}</p>
        <p>{{ $job->type }}</p>
        <p>{{ $job->company }}</p>
        <p>{{ $job->description }}</p>
        <p>{{ $job->listed }}</p>
    </section>
@endforeach
