@extends('layouts.admin')

@section('content')
    <form method="post" action="{{ route('customers.store') }}" enctype='multipart/form-data'>
        @csrf
        <!-- general form elements disabled -->
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Müşteri Ekle</h3>
            </div>
            <!-- /.card-header -->


            <div class="card-body">
                <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Müşteri Kodu</label>
                        <input type="text" class="form-control" placeholder="Müşteri Kodunu Girin..." name="code">
                    </div>
                    <div class="form-group">
                        <label>Müşteri Adı/Ünvanı/Firma Adı</label>
                        <input type="text" class="form-control" placeholder="Müşteri Adını Girin..." name="company_name"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Yetkili Kişi</label>
                        <input type="text" class="form-control" placeholder="Yetkili Kişiyi Girin..."
                            name="authorized_person">
                    </div>
                    <div class="form-group">
                        <label for="mobile_phone">Mobil Telefon:</label><br>
                        <input type="tel" id="mobile_phone" name="mobile_phone" placeholder="544-586-3005"
                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br><br>
                    </div>
                    <div class="form-group">
                        <label for="land_phone">Sabit Telefon:</label><br>
                        <input type="tel" id="land_phone" name="land_phone" placeholder="212-999-9999"
                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br><br>
                    </div>

                    <!-- textarea -->
                    <div class="form-group">
                        <label>Açıklama</label>
                        <textarea class="form-control" rows="3" placeholder="Ürün Açıklaması Girin ..." name="descriptipn"></textarea>
                    </div>

                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="form-check">
                            <input type="hidden" name="raw" value="0">
                            <input class="form-check-input" type="checkbox" value="1" name="raw">
                            <label class="form-check-label">Hammadde mi?</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="hidden" name="buyable" value="0">
                            <input class="form-check-input" type="checkbox" value="1" name="buyable">
                            <label class="form-check-label">Alınabilir mi?</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="hidden" name="sellable" value="0">
                            <input class="form-check-input" type="checkbox" value="1" name="sellable">
                            <label class="form-check-label">Satılabilir mi?</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="hidden" name="use_average_price" value="0">
                            <input class="form-check-input" type="checkbox" value="1" name="use_average_price">
                            <label class="form-check-label">Birim fiyat kategori ortalamasından kullanılsın mı?</label>
                        </div>
                    </div>

                </form>
            </div>
            <!-- /.card-body -->
            <button type="submit" value="submit" class="btn btn-primary">Kaydet</button>

        </div>
        <!-- /.card -->
    </form>
@endsection
