@extends('layout.main')

@section('content')

  <section class="container mt-5">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Disponibilità</th>
            <th scope="col">REF</th>
            <th scope="col">Indirizzo</th>
            <th scope="col">CAP</th>
            <th scope="col">Città</th>
            <th scope="col">Stanze</th>
            <th scope="col">Prezzo</th>
            <th scope="col">WI-Fi</th>
            <th scope="col">Animali Ammessi</th>
            <th scope="col">Tv</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($houses as $house )
                <tr>
                  <td>{{ ($house['is_available'] === 0 ? 'No' : 'Si') }}</td>
                  <td>{{ $house['reference'] }}</td>
                  <td>{{ $house['address'] }}</td>
                  <td>{{ $house['postal_code'] }}</td>
                  <td>{{ $house['city'] }}</td>
                  <td>{{ $house['rooms'] }}</td>
                  <td>{{ $house['price'] }}</td>
                  <td>{{ ($house['wifi'] === 0 ? 'No' : 'Si') }}</td>
                  <td>{{ ($house['animals'] === 0 ? 'No' : 'Si') }}</td>
                  <td>{{ ($house['tv'] === 0 ? 'No' : 'Si') }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
  </section>

  <section class="container">{{ $houses->links() }}</section>
@endsection
