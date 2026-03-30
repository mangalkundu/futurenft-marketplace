<style>
.custom-pagination {
    display: flex;
    justify-content: center;
    margin-bottom: 15px;
    width: 100%;
}

.pagination-list {
    display: flex;
    gap: 8px;
    list-style: none;
    padding: 0;
    margin: 0;
    align-items: center;
    flex-wrap: wrap;
}

.pagination-item {
    display: flex;
    align-items: center;
    justify-content: center;
}

.pagination-link {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 30px;
    height: 30px;
    border-radius: 18px;
    background-color: var(--border);
    color: var(--text);
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    border: 1px solid var(--border);
    transition: all 0.3s ease;
}

.pagination-link:hover {
    transform: translateY(-2px);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.pagination-link.active-rgb {
    background: linear-gradient(90deg, 
        #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
    background-size: 400% 400%;
    animation: rgbFlow 6s ease infinite;
    color: white;
    font-weight: 600;
    border: none;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.pagination-ellipsis {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 35px;
    padding: 0 5px;
    color: var(--text-light);
    font-size: 14px;
}

@keyframes rgbFlow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

@media (max-width: 350px) {
    .pagination-link {
        min-width: 25px;
        height: 25px;
        font-size: 10px;
    }
    
    .pagination-ellipsis {
        padding: 0 8px;
    }
}
</style>    

@if ($paginator->hasPages())
<div class="custom-pagination">
    <ul class="pagination-list">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="pagination-item disabled">
                <span class="pagination-link"><i class="fas fa-chevron-left"></i></span>
            </li>
        @else
            <li class="pagination-item">
                <a href="{{ $paginator->previousPageUrl() }}" class="pagination-link" rel="prev">
                    <i class="fas fa-chevron-left"></i>
                </a>
            </li>
        @endif

        {{-- First Page --}}
        @if ($paginator->currentPage() > 3 && $paginator->lastPage() > 3)
            <li class="pagination-item">
                <a href="{{ $paginator->url(1) }}" class="pagination-link">1</a>
            </li>
            @if ($paginator->currentPage() > 4)
                <li class="pagination-item disabled">
                    <span class="pagination-ellipsis">...</span>
                </li>
            @endif
        @endif

        {{-- Middle Pages --}}
        @foreach(range(1, $paginator->lastPage()) as $page)
            @if ($page >= $paginator->currentPage() - 1 && $page <= $paginator->currentPage() + 1)
                <li class="pagination-item">
                    @if ($page == $paginator->currentPage())
                        <span class="pagination-link active-rgb">{{ $page }}</span>
                    @else
                        <a href="{{ $paginator->url($page) }}" class="pagination-link">{{ $page }}</a>
                    @endif
                </li>
            @endif
        @endforeach

        {{-- Last Page --}}
        @if ($paginator->currentPage() < $paginator->lastPage() - 2 && $paginator->lastPage() > 3)
            @if ($paginator->currentPage() < $paginator->lastPage() - 3)
                <li class="pagination-item disabled">
                    <span class="pagination-ellipsis">...</span>
                </li>
            @endif
            <li class="pagination-item">
                <a href="{{ $paginator->url($paginator->lastPage()) }}" class="pagination-link">
                    {{ $paginator->lastPage() }}
                </a>
            </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="pagination-item">
                <a href="{{ $paginator->nextPageUrl() }}" class="pagination-link" rel="next">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </li>
        @else
            <li class="pagination-item disabled">
                <span class="pagination-link"><i class="fas fa-chevron-right"></i></span>
            </li>
        @endif
    </ul>
</div>
@endif