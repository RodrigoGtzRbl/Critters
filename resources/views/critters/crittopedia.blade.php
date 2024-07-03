<x-app-layout>

    <div class="container pt-5">

        <div class="row g-5">
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
        <div class="row mt-5 pt-5">
            {!! $pagination !!}
        </div>


    </div>
</x-app-layout>
