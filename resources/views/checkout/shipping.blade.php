<div class="row">
    <div class="col-lg-12">
        <h4 class="upper my-2">Хүргэлтийн хаяг</h4>
    </div>
    <div class="col-lg-6 form-group">
        <label class="text-dark font-weight-bold">Нэр</label>
        <input type="text" class="form-control" placeholder="Нэр" name="first_name" value="{{ Auth::user()->first_name }}" required>
    </div>
    <div class="col-lg-6 form-group">
        <label class="text-dark font-weight-bold">Овог</label>
        <input type="text" class="form-control" placeholder="Овог" name="last_name" value="{{ Auth::user()->last_name }}" required>
    </div>

    <div class="col-lg-6 form-group">
        <label class="text-dark font-weight-bold">Имэйл</label>
        <input type="text" class="form-control" placeholder="Имэйл" name="email" value="{{ Auth::user()->email }}" required>
    </div>
    <div class="col-lg-6 form-group">
        <label class="text-dark font-weight-bold">Утасны дугаар</label>
        <input type="text" class="form-control" placeholder="Утасны дугаар" name="phone_number" value="{{ Auth::user()->phone_number }}" required>
    </div>
    
    <div class="col-lg-6 form-group">
        <label class="text-dark font-weight-bold">Хот/Аймаг</label>
        <input type="text" class="form-control" placeholder="Хот/Аймаг" name="city" value="" required>
    </div>
    <div class="col-lg-6 form-group">
        <label class="text-dark font-weight-bold">Дүүрэг/Сум</label>
        <input type="text" class="form-control" placeholder="Дүүрэг/Сум" name="district" value="" required>
    </div>
    <div class="col-lg-6 form-group">
        <label class="text-dark font-weight-bold">Хороо/Баг</label>
        <input type="text" class="form-control" placeholder="Хороо/Баг" name="khoroo" value="" required>
    </div>
    <div class="col-lg-12 form-group">
        <label class="text-dark font-weight-bold">Дэлгэрэнгүй хаяг</label>
        <textarea class="form-control" placeholder="Дэлгэрэнгүй хаяг" name="address" rows="5"></textarea>
    </div>
</div>