{{-- Tooltips & Popovers: hover/focus bubbles with extra content. --}}
<div class="btn-list">
    <button class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">Top</button>
    <button class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">Right</button>
    <button class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">Bottom</button>
    <button class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">Left</button>

    <button class="btn btn-outline-primary" data-bs-toggle="popover" data-bs-placement="right"
            data-bs-content="Popovers support rich content — text, links, even forms.">
        Popover (click)
    </button>

    <button class="btn btn-outline-secondary" data-bs-toggle="popover" data-bs-trigger="hover"
            data-bs-placement="top" data-bs-content="Shown on hover, no click needed.">
        Popover (hover)
    </button>
</div>