{{-- Signature Pad: draw signatures on a canvas (signature_pad). --}}
<div class="card">
    <div class="card-body p-0">
        <canvas id="demo-signature" style="width: 100%; height: 220px; touch-action: none; display: block;"></canvas>
    </div>
    <div class="card-footer d-flex justify-content-between align-items-center">
        <span class="text-muted small">Sign inside the box using mouse or touch.</span>
        <div class="btn-list">
            <button type="button" class="btn btn-outline-secondary" id="demo-signature-clear">Clear</button>
            <button type="button" class="btn btn-primary" id="demo-signature-save">Save PNG</button>
        </div>
    </div>
</div>

<p class="text-muted small mt-2">
    Requires <code>window.SignaturePad</code> (already imported in <code>resources/js/app.js</code>).
</p>

@push('js')
    <script>
        (function () {
            var canvas = document.getElementById('demo-signature');
            var pad = new window.SignaturePad(canvas, {
                backgroundColor: 'rgb(255, 255, 255)',
                penColor: 'rgb(32, 107, 196)',
            });

            function resizeCanvas() {
                var data = pad.toDataURL();
                canvas.width = canvas.offsetWidth;
                canvas.height = canvas.offsetHeight;
                pad.clear();
                var img = new Image();
                img.onload = function () { pad.fromDataURL(data); };
                img.src = data;
            }

            resizeCanvas();
            window.addEventListener('resize', resizeCanvas);

            document.getElementById('demo-signature-clear').addEventListener('click', function () {
                pad.clear();
            });

            document.getElementById('demo-signature-save').addEventListener('click', function () {
                if (pad.isEmpty()) {
                    alert('Please sign first.');
                    return;
                }
                var link = document.createElement('a');
                link.download = 'signature.png';
                link.href = pad.toDataURL();
                link.click();
            });
        })();
    </script>
@endpush