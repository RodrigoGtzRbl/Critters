<x-app-layout>

    <div class="container pt-5">

        <div class="row g-5">
            <div class="col-12">
                <form action="{{ route('critters.search') }}" method="GET" class="d-flex" role="search">
                    <input class="form-control me-2" type="search" name="id" placeholder="Search by id"
                        aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
                @php
                    if ($critters) {
                        // dd($critters);
                    }

                @endphp

            </div>
            @foreach ($critters as $critter)
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <div class="card cardSmall pulseAnimation">
                        <a href="{{ route('critters.showById', ['id' => $critter->id]) }}"
                            class="text-black link-underline link-underline-opacity-0">
                            <img src="/media/images/{{ $critter->image }}" class="card-img-top crittopediaThumbnail p-2"
                                alt="{{ $critter->name }} photo">

                            <div class="card-body">
                                <h5 class="card-title"><strong>Name:</strong> {{ $critter->name }}</h5>
                            </div>
                        </a>

                    </div>
                </div>
            @endforeach
        </div>

        {{-- PAGINATION --}}
        @if (isset($pagination))
            <div class="row mt-5 pt-5">
                {!! $pagination !!}
            </div>
        @endif



    </div>
</x-app-layout>
