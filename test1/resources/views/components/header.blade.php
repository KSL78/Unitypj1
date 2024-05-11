<div>
    Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh <br>
    {{ $company }}

    <ul>
        @foreach ($products as $product)
            <li>{{ $product }}</li>
        @endforeach
    </ul>
</div>