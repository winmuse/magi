<header>
    <div class="px-3 py-2 text-bg-dark border-bottom mb-2">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('107.png') }}" alt="" width="auto" height="auto">
                        </a>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <form class="d-flex mt-3 mt-lg-0" role="search">
                            <input type="search" class="form-control me-3" placeholder="Search..." aria-label="Search">
                            <a href="{{ route('advanced_search') }}" class="btn btn-outline-success" type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Advanced Search"><i class="bi bi-search-heart"></i></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</header>
