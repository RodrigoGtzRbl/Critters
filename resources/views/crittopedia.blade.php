<x-app-layout>

    <div class="container d-flex justify-content-center">

        <div id="CrittopediaCarousel" class="carousel slide">
            <div class="carousel-inner">
                @php
                    $showBtns = false;
                @endphp
                @foreach ($critters as $index => $critter)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <audio id="{{ $critter->name }}Sound" hidden>
                            <source src="/media/sounds/{{ $critter->sound }}" type="audio/mpeg">
                        </audio>
                        <div class="card" style="width: 18rem;">
                            <img src="/media/images/{{ $critter->image }}" class="card-img-top crittopediaPhoto"
                                alt="{{ $critter->name }} photo">
                            <div class="card-body">
                                <h5 class="card-title"><strong>Name:</strong> {{ $critter->name }}</h5>
                                <p class="card-text"><strong>Desc:</strong> {{ $critter->description }}</p>
                                <button id="{{ $critter->name }}SoundBtn"
                                    class="btn btn-primary soundBtn"><strong>Sound</strong></button>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>First type:</strong> {{ $critter->type_1 }}</li>
                                @if ($critter->type_2 != null)
                                    <li class="list-group-item"><strong>Second type:</strong> {{ $critter->type_2 }}
                                    </li>
                                @endif
                                @if ($critter->type_3 != null)
                                    <li class="list-group-item"><strong>Third type:</strong> {{ $critter->type_3 }}
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    @if ($index > 0)
                        {{ $showBtns = true }}
                    @endif
                @endforeach
            </div>
            @if ($showBtns)
                <div class="buttons text-center pt-4 row">
                    <div class="col-6 text-end pe-4">
                        <a href="">
                            <i class="bi bi-arrow-left fs-1 text-black" data-bs-target="#CrittopediaCarousel"
                                data-bs-slide="prev"></i>
                        </a>
                    </div>

                    <div class="col-6 text-start ps-4">
                        <a href="">
                            <i class="bi bi-arrow-right fs-1 text-black" data-bs-target="#CrittopediaCarousel"
                                data-bs-slide="next"></i>
                        </a>
                    </div>
                </div>
            @endif
        </div>

    </div>
</x-app-layout>
