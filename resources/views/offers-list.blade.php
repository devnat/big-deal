@extends ('layout')

@section ('content')
    <div class="container mt-5">
        <h1 class='text-center'>Offers</h1>
        <table class="table table-bordered table-hover mb-5">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Cashback Value</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($offers as $offer)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $offer->name }}</td>
                    <td><img src="{{ $offer->image_url }}" alt="{{ $offer->name }} offer image"></td>
                    <td>${{ number_format(($offer->cash_back /100), 2, '.', ' ') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">
        {!! $offers->links() !!}
    </div>
@endsection