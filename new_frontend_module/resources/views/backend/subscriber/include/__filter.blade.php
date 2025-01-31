
<form action="{{ request()->url() }}" method="get" id="filterForm">
<div class="table-filter">
    <div class="filter">
        <div class="search">
            <input type="text" id="search" name="search" value="{{ request('search') }}" placeholder="Search..."/>
        </div>
        <button type="submit" class="apply-btn"><i data-lucide="search"></i>Search</button>
    </div>
    <div class="filter d-flex">
        @if(isset($status) && $status == true)
        <select
            class="form-select form-select-sm"
            aria-label=".form-select-sm example"
            name="status"
            id="status"
        >
            <option value="" disabled selected>--Status--</option>
            <option value="all" {{ request('status') == 'all' ? 'selected' : '' }}>All</option>
            <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
            <option value="deactive" {{ request('status') == 'deactive' ? 'selected' : '' }}>Deactive</option>
        </select>
        @endif
        <select
            class="form-select form-select-sm"
            aria-label=".form-select-sm example"
            name="order"
            id="order"
        >
            <option value="asc" {{ request('order') == 'asc' ? 'selected' : '' }}>ASC</option>
            <option value="desc" {{ request('order') == 'desc' ? 'selected' : '' }}>DESC</option>
        </select>
        <select
            class="form-select form-select-sm show"
            aria-label=".form-select-sm example"
            name="perPage"
            id="perPage"
        >
            <option value="15" {{ request('perPage') == 15 ? 'selected' : '' }}>15</option>
            <option value="30" {{ request('perPage') == 30 ? 'selected' : '' }}>30</option>
            <option value="45" {{ request('perPage') == 45 ? 'selected' : '' }}>45</option>
            <option value="60" {{ request('perPage') == 60 ? 'selected' : '' }}>60</option>
        </select>
        @if(isset($button))
            <a href="{{ $route }}" class="apply-btn"><i data-lucide="settings"></i>{{ $text }}</a>
        @endif

    </div>
</div>
</form>
@push('single-script')
    <script>
        (function ($) {
            "use strict";
            $('#perPage').on('change', function() {
                $('#filterForm').submit();
            });

            $('#order').on('change', function() {
                $('#filterForm').submit();
            });

            $('#status').on('change', function() {
                $('#filterForm').submit();
            });
        })(jQuery);

    </script>
@endpush
