<x-app-layout>

    <div class="container d-flex justify-content-center">
        <div class="row">
            @foreach ($critters as $index => $critter)
                <div class="col-12 col-md-6">
                    <div class="card mb-4" style="width: 350px">
                        <audio id="{{ $critter->name }}Sound" hidden>
                            <source src="/media/sounds/{{ $critter->sound }}" type="audio/mpeg">
                        </audio>

                        <img src="/media/images/{{ $critter->image }}" class="card-img-top crittopediaPhoto p-2"
                            alt="{{ $critter->image == null ? 'No image' : $critter->name . ' photo' }}">

                        <div class="card-body">
                            <h5 class="card-title fs-5"><strong>ID:</strong> {{ $critter->id }}</h5>
                            <h5 class="fs-5"><strong>Registered by:</strong> {{ $investigatorName }}</h5>
                            <h5 class="fs-5"><strong>Name:</strong> {{ $critter->name }}</h5>
                            <p class="card-text"><strong>Description:</strong> {{ $critter->description }}</p>
                            <p class="card-text"><strong>Habitat:</strong> {{ $critter->region }}</p>
                            <button id="{{ $critter->name }}SoundBtn"
                                class="btn btn-primary soundBtn"><strong>Sound</strong></button>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>First type:</strong> {{ $critter->type_1 }}</li>
                            @if ($critter->type_2 != null)
                                <li class="list-group-item"><strong>Second type:</strong> {{ $critter->type_2 }}</li>
                            @endif
                            @if ($critter->type_3 != null)
                                <li class="list-group-item"><strong>Third type:</strong> {{ $critter->type_3 }}</li>
                            @endif
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    </div>
</x-app-layout>
