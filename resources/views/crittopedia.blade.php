<x-app-layout>

    <div class="container border">
        @foreach ($critters as $critter)
            <audio hidden>
                <source src="/media/sounds/{{ $critter->sound }}" type="audio/mpeg">
            </audio>
            <div class="card" style="width: 18rem;">
                <img src="/media/images/{{ $critter->image }}" class="card-img-top crittopediaPhoto"
                    alt="{{ $critter->name }} photo">
                <div class="card-body">
                    <h5 class="card-title"><strong>Name:</strong> {{ $critter->name }}</h5>
                    <p class="card-text"><strong>Desc:</strong> {{ $critter->description }}</p>
                    <button id="{{ $critter->name }}SoundBtn" class="btn btn-primary"><strong>Sound</strong></button>
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
        @endforeach
    </div>
</x-app-layout>
