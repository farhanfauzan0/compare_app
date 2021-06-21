<div class="col-lg-12 col-md-12 dropdown-menu show" aria-labelledby="dropdownMenuLink">
    @foreach ($data['data']['suggestions'] as $datas)
        <a class="dropdown-item" href="#">{{ $datas['term'] }}</a>
    @endforeach

</div>
