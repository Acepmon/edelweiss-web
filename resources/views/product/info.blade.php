<!-- Product additional tabs -->
<div class="tabs tabs-folder">
    <ul class="nav nav-tabs" id="myTab3" role="tablist">
        <li class="nav-item">
            <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="false"><i class="fa fa-align-justify"></i>{{ __('Description') }}</a>
        </li>
        
    </ul>
    <div class="tab-content" id="myTabContent3">
        <div class="tab-pane fade active show" id="home3" role="tabpanel" aria-labelledby="home-tab">
            {!! $product->product_desc !!}
        </div>
    </div>
</div>

<h5 class="mt-4">
    {{ __('Additional Info') }}
</h4>
<table class="table">
    <tbody>
        <tr>
            <td>{{ __('Size') }}</td>
            <td>Small, Medium &amp; Large</td>
        </tr>
        <tr>
            <td>{{ __('Color') }}</td>
            <td>Pink &amp; White</td>
        </tr>
        <tr>
            <td>{{ __('Width') }}</td>
            <td>26 cm</td>
        </tr>
        <tr>
            <td>{{ __('Length') }}</td>
            <td>40 cm</td>
        </tr>
        <tr>
            <td>{{ __('Stems') }}</td>
            <td>Carnation, Daisy, Rose</td>
        </tr>
    </tbody>
</table>
<!-- end: Product additional tabs -->