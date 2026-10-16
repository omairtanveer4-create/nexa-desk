{{-- Pagination: navigation links for long lists and tables. --}}
<nav aria-label="Page navigation">
    <ul class="pagination">
        <li class="page-item disabled"><a class="page-link" href="#"><i class="ti ti-chevrons-left"></i></a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item"><a class="page-link" href="#"><i class="ti ti-chevrons-right"></i></a></li>
    </ul>
</nav>

<nav aria-label="Page navigation with dots">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#"><i class="ti ti-chevron-left"></i></a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item disabled"><a class="page-link" href="#">…</a></li>
        <li class="page-item active"><a class="page-link" href="#">12</a></li>
        <li class="page-item"><a class="page-link" href="#">13</a></li>
        <li class="page-item disabled"><a class="page-link" href="#">…</a></li>
        <li class="page-item"><a class="page-link" href="#">20</a></li>
        <li class="page-item"><a class="page-link" href="#"><i class="ti ti-chevron-right"></i></a></li>
    </ul>
</nav>

<div class="d-flex align-items-center gap-3 mt-3">
    <span class="text-muted">Showing 11–20 of 96 results</span>
    <select class="form-select w-auto">
        <option>10 / page</option>
        <option selected>25 / page</option>
        <option>50 / page</option>
    </select>
</div>