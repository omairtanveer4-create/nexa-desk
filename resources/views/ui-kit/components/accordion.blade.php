{{-- Accordion: collapsible content panels. --}}
<div class="accordion" id="demo-accordion">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#acc-one">
                What is Nexa Desk?
            </button>
        </h2>
        <div id="acc-one" class="accordion-collapse collapse show" data-bs-parent="#demo-accordion">
            <div class="accordion-body text-muted">
                Nexa Desk is a Laravel admin dashboard built with the Tablar (Tabler) UI kit.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-two">
                How do I reuse a component?
            </button>
        </h2>
        <div id="acc-two" class="accordion-collapse collapse" data-bs-parent="#demo-accordion">
            <div class="accordion-body text-muted">
                Open any component page from the sidebar, then copy the Blade source shown below the demo.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-three">
                Does it support dark mode?
            </button>
        </h2>
        <div id="acc-three" class="accordion-collapse collapse" data-bs-parent="#demo-accordion">
            <div class="accordion-body text-muted">
                Yes — use the theme toggle in the header. Every component adapts automatically.
            </div>
        </div>
    </div>
</div>