<!-- sub-dtls start -->
<div class="sub-dtls card text-white my-4">
    <img
    class="sub-dtls-img card-img"
    src="{{ asset('assets/Group 335941.png') }}"
    alt="Card image"
    />
    <div class="card-img-overlay">
        <!-- dropdown start -->
        <div class="more m-3 dropdown d-inline float-end">
            <img
            src="{{ asset('assets/more-white.png') }}"
            alt=""
            class="dropdown-toggle"
            type="button"
            id="dropdownMenuButton1"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            />
            {{-- <i
            class="fa-solid fa-ellipsis-vertical dropdown-toggle"
            alt=""
            type="button"
            id="dropdownMenuButton1"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            </i> --}}
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dd-item dropdown-item" href="#">Remove</a></li>
            <li><a class="dd-item dropdown-item" href="#">Make host</a></li>
            </ul>
        </div>
        <!-- dropdown end -->

        <h5 class="card-title mt-3 ms-4">
            {{ $classroom->name }}
        </h5>
        <p class="sub-dtls-sec card-text ms-4">{{ $classroom->section }}</p>
        <p class="card-text my-4 ms-4">{{ $classroom->user->name }}</p>

        <div class="col-lg-3 col-md-5">
            <div class="foy-copy d-flex align-items-center my-4 ms-4">
                <input id="myInput" class="foy-copy-input" type="text" value="{{ $classroom->code }}" readonly>
                <button class="foy-copy-button" id="btn-copy" onclick=" myFunction()">Copy</button>
            </div>
        </div>

    </div>
</div>
<!-- sub-dtls end -->
