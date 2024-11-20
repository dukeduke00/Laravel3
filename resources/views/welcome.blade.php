@extends("layout")

@section("nazivStranice")
    Moj Sajt
@endsection


@section("sadrzajStranice")
    <p class="text-primary">Trenutno sati je: {{ $sat }}</p>
    <p class="text-danger ">Trenutno vrijeme je {{ $trenutnoVrijeme  }}</p>
    <p>{{ $poruka }}</p>
@endsection


