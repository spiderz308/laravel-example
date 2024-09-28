<x-layout>
    <x-slot:heading>
        Jobs  Page
    </x-slot:heading>

    <div class="space-y-4">
        @foreach($jobs as $job)
                <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-grey-200 rounded-lg">
                    <div class="font-bold text-green-500 text-sm">{{ $job->employer->name }}
                    </div>
                    <div>
                        <strong>{{ $job['title'] }} :</strong> Pays {{ $job['salary'] }} per year.
                    </div>
                </a>
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </div>


<!--    <ul>-->
<!--        @foreach($jobs as $job)-->
<!--        <li>-->
<!--            <a href="/jobs/{{ $job['id'] }}" class="hover:underline">-->
<!--                <strong>{{ $job['title'] }} :</strong> Pays {{ $job['salary'] }} per year.-->
<!--            </a>-->
<!--        </li>-->
<!--        @endforeach-->
<!--    </ul>-->
</x-layout>

