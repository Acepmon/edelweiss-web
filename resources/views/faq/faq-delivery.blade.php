<h3>Delivery Questions <small>({{ $faqs->count() }})</small></h3>
<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam auam quaerat voluptatem.</p>
<div class="accordion toggle fancy radius clean">
    @each('faq.faq-item', $faqs, 'faq')
</div>