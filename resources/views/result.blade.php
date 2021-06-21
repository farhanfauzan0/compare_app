<div class="tab-pane fade show active" id="grid" role="tabpanel">
    <div class="row">
        @foreach ($data as $datas)

            <div class="col-lg-4 col-md-6">
                <div class="tab-item">
                    <div class="tab-img">
                        <img class="main-img img-fluid" src="{{ $datas['img'] }}" alt="">
                    </div>
                    <div class="tab-heading">
                        <p><a href="#">{{ $datas['nama'] }}</a></p>
                    </div>
                    <div class="img-content d-flex justify-content-between">
                        <div>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">Rp. {{ $datas['harga'] }}</li>
                            </ul>
                            <ul class="list-unstyled list-inline price">
                                <li class="list-inline-item" style="text-decoration: auto;">
                                    {{ $datas['lokasi'] }}</li>
                            </ul>
                            <ul class="list-unstyled list-inline price">
                                <i class="fa fa-truck" style="color: rgb(79, 190, 79);"></i>
                                <li class="list-inline-item" style="text-decoration: auto;">
                                    Bandung: Rp. {{ $datas['ongkir_bandung'] }}</li>
                            </ul>
                            <ul class="list-unstyled list-inline price">
                                <i class="fa fa-truck" style="color: rgb(79, 190, 79);"></i>
                                <li class="list-inline-item" style="text-decoration: auto;">
                                    Jakarta: Rp. {{ $datas['ongkir_jakarta'] }}</li>
                            </ul>
                            <ul class="list-unstyled list-inline price">
                                <i class="fa fa-truck" style="color: rgb(79, 190, 79);"></i>
                                <li class="list-inline-item" style="text-decoration: auto;">
                                    Surabaya: Rp. {{ $datas['ongkir_surabaya'] }}</li>
                            </ul>
                            <br>
                            <ul class="list-unstyled list-inline price" style="overflow-x: auto; height: 150px;">
                                <li class="list-inline-item" style="text-decoration: auto;">-
                                    {{ $datas['desc'] }}
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12" style="text-align: center; padding: 10px;">
                            <a type="button" class="btn btn-primary" href="compare.html" name="button">Bandingkan</a>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
