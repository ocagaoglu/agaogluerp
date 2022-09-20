@extends('layouts.admin')

@section('content')
    <form method="post" action="{{ route('currencies.store') }}" enctype='multipart/form-data'>
        @csrf
        <!-- general form elements disabled -->
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Para Birimi Ekle</h3>
            </div>
            <!-- /.card-header -->


            <div class="card-body">
                <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Para Birimi</label>
                        <input type="text" class="form-control" placeholder="Para birimini girin." name="name">
                    </div>
                    <div class="form-group">
                        <label>Sembol</label>
                        <input type="text" class="form-control" placeholder="Sembolünü girin" name="symbol">
                    </div>
                    <div class="form-group">
                        <label>Oran</label>
                        <input type="number" step=0.01 class="form-control" placeholder="Döviz/TRY" name="rate">
                    </div>

                </form>
            </div>
            <!-- /.card-body -->
            <button type="submit" value="submit" class="btn btn-primary">Para Birimi Oluştur</button>

        </div>
        <!-- /.card -->
    </form>
@endsection
