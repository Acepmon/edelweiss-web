@if ($invoice)
    <div class="row">
        <div class="col-6 text-center">
            <h4>QR код уншуулах</h4>
            <img src="{{ 'data:image/png;base64,' . $invoice->qr_image }}" alt="{{ $invoice->qr_text }}" class="img-fluid" style="max-height: 300px; max-width: 300px;">
        </div>
        <div class="col-6">
            <p>Банкны аппликэйшнруу үсрэх</p>

            <div class="list-group list-group-flush">
                @foreach ($invoice->urls as $url)
                <a href="{{ $url['link'] }}" class="list-group-item list-group-item-action">
                    <div class="media">
                        <img src="{{ $url['logo'] }}" alt="{{ $url['name'] }}" class="img-fluid img-thumbnail mr-2" width="30" height="30">
                        <div class="media-body">
                            <h5 class="font-weight-semibold">{{ $url['description'] }}</h5>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
@endif