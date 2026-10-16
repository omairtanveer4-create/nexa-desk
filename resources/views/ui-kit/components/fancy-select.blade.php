{{-- Fancy Select: searchable multi-selects powered by Tom Select. --}}
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Single select with search</label>
            <select id="demo-ts-single" placeholder="Search a framework…">
                <option value="">Choose…</option>
                <option value="laravel">Laravel</option>
                <option value="livewire">Livewire</option>
                <option value="vue">Vue.js</option>
                <option value="react">React</option>
                <option value="svelte">Svelte</option>
                <option value="astro">Astro</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Multi select with tags (type to create)</label>
            <select id="demo-ts-multi" multiple placeholder="Add tags…">
                <option selected>php</option>
                <option selected>blade</option>
                <option>javascript</option>
                <option>tailwind</option>
            </select>
        </div>
    </div>
</div>

<p class="text-muted small">
    Requires <code>window.TomSelect</code> (already imported in <code>resources/js/app.js</code>).
</p>

@push('js')
    <script>
        new window.TomSelect('#demo-ts-single', {
            allowEmptyOption: true,
            maxOptions: 50,
        });

        new window.TomSelect('#demo-ts-multi', {
            plugins: { remove_button: { title: 'Remove' } },
            create: true,
            persist: false,
        });
    </script>
@endpush