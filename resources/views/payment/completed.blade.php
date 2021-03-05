<section id="shop-checkout-completed">
    <div class="container">
        <div class="p-t-10 m-b-20 text-center">
            <div class="text-center">
                <h3>Баяр хүргэе! Таны захиалга бүртгэгдлээ!</h3>
                <p>Таны захиалгын дугаар {{ $order->id }}. Та профайл хуудас дээр
                    <a href="{{ route('orders.show', $order->id) }}" class="text-underline">
                        <mark>өөрийн захиалгаа</mark>
                    </a> харж болно.</p>
            </div>
            <a class="btn icon-left" href="{{ route('index') }}"><span>Нүүр хуудас руу буцах</span></a>
        </div>
    </div>
</section>