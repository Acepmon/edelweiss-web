<section id="page-title">
    <div class="container icon-set-container">
        <div class="page-title row">

            <div class="col-3">
                <div class="icon-preview text-left">
                    <div class="icon-holder border-rounded">
                        <i class="icon-shopping-cart"></i>
                    </div>
                    <div class="icon-class text-left" style="padding-right: 50px; width: 225px;">
                        <h5 class="mb-0 font-weight-bold" style="color: inherit;">Миний сагс</h5>
                        <span>Алхам 1</span>
                    </div>
                </div>
            </div>

            <div class="col-3 active">
                <div class="icon-preview text-left">
                    <div class="icon-holder border-rounded">
                        <i class="icon-truck"></i>
                    </div>
                    <div class="icon-class text-left" style="padding-right: 50px; width: 225px;">
                        <h5 class="mb-0 font-weight-bold" style="color: inherit;">Хүргэлтийн хаяг</h5>
                        <span>Алхам 2</span>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="icon-preview text-left">
                    <div class="icon-holder border-rounded">
                        <i class="icon-credit-card"></i>
                    </div>
                    <div class="icon-class text-left" style="padding-right: 50px; width: 225px;">
                        <h5 class="mb-0 font-weight-bold" style="color: inherit;">Төлбөр</h5>
                        <span>Алхам 3</span>
                    </div>
                </div>
            </div>
    

            <div class="col-3">
                <div class="icon-preview text-left">
                    <div class="icon-holder border-rounded">
                        <i class="icon-check-circle"></i>
                    </div>
                    <div class="icon-class text-left" style="padding-right: 50px; width: 225px;">
                        <h5 class="mb-0 font-weight-bold" style="color: inherit;">Дуусгах</h5>
                        <span>Алхам 4</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@push('styles')
<style>
.icon-set-container .row > [class^="col-"].active {
  transform: translateY(-5px);
  background-color: #231F20;
  color: #ffffff;
  box-shadow: 0 6px 38px rgba(0, 0, 0, 0.05);
}
.icon-set-container .row > [class^="col-"].active .icon-holder {
  background-color: #fff;
  color: #231F20;
}
</style>
@endpush