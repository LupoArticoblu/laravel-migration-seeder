@extends('layouts.main')

@section('content') 
<table class="table">
  <thead>
      <tr>
          <th scope="col">AZIENDA</th>
          <th scope="col">STAZIONE PARTENZA</th>
          <th scope="col">STAZIONE ARRIVO</th>
          <th scope="col">ORARIO PARTENZA</th>
          <th scope="col">ORARIO ARRIVO</th>
          <th scope="col">CODICE TRENO</th>
          <th scope="col">NUMERO CARROZZE</th>
          <th scope="col">RITARDI</th>
          <th scope="col">STATO</th>
      </tr>
  </thead>
  <tbody>
      @foreach ($trains as $train)
          <tr>
              <td>{{ $train->azienda }}</td>
              <td>{{ $train->stazione_di_partenza }}</td>
              <td>{{ $train->stazione_di_arrivo }}</td>
              <td>{{ $train->orario_di_partenza }}</td>
              <td>{{ $train->orario_di_arrivo }}</td>
              <td>{{ $train->codice_treno }}</td>
              <td>{{ $train->numero_carrozze }}</td>

              @if ($train->in_orario)
                  <td>IN ORARIO</td>
              @else
                  <td>IN RITARDO</td>
              @endif

              @if ($train->Cancellato)
                  <td>ATTIVO</td>
              @else
                  <td>CANCELLATO</td>
              @endif
          </tr>
      @endforeach
  </tbody>
</table>
@endsection