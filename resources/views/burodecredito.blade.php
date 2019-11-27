@extends('layouts.interface')
@section('CSS')
<link rel="stylesheet" href="css/burodecredito.css">
@endsection

@section('content')
<div class="container-fluid rounded-lg">
  <div class="card container-fluid">

  <div class="container">
    <div class="row">
      <div class="col">
        Buro de Credito
      </div>
    </div>
    <div class="row">
      <div class="col">
        <form class="form-inline active-cyan-4">
          <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search">
          <i class="fas fa-search" aria-hidden="true"></i>
          <!-- Material inline 1 -->
        <div class="form-check form-check-inline">
          <input type="radio" class="form-check-input" id="materialInline1" name="inlineMaterialRadiosExample">
          <label class="form-check-label" for="materialInline1">1</label>
        </div>

        <!-- Material inline 2 -->
        <div class="form-check form-check-inline">
          <input type="radio" class="form-check-input" id="materialInline2" name="inlineMaterialRadiosExample">
          <label class="form-check-label" for="materialInline2">2</label>
        </div>

        <!-- Material inline 3 -->
        <div class="form-check form-check-inline">
          <input type="radio" class="form-check-input" id="materialInline3" name="inlineMaterialRadiosExample">
          <label class="form-check-label" for="materialInline3">3</label>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div class="table-responsive">
      <!--Table-->
      <table class="table table-striped">

      <!--Table head-->
      <thead>
        <tr>
          <th>Folio</th>
          <th>Nombre</th>
          <th>Fecha de Nacimiento</th>
          <th>Rfc</th>
          <th>Fecha de Regsitro de BC</th>
          <th>Position</th>
        </tr>
      </thead>
      <!--Table head-->

      <!--Table body-->
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Kate</td>
          <td>Moss</td>
          <td>USA / The United Kingdom / China / Russia </td>
          <td>New York City / Warsaw / Lodz / Amsterdam / London / Chicago</td>
          <td>Web Designer /UX designer / Ul designer / JavaScript Developer</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Anna</td>
          <td>Wintour</td>
          <td>USA / The United Kingdom / China / Russia </td>
          <td>New York City / Warsaw / Lodz / Amsterdam / London / Chicago</td>
          <td>Web Designer /UX designer / Ul designer / JavaScript Developer</td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Jerry</td>
          <td>Horwitz</td>
          <td>USA / The United Kingdom / China / Russia </td>
          <td>New York City / Warsaw / Lodz / Amsterdam / London / Chicago</td>
          <td>Web Designer /UX designer / Ul designer / JavaScript Developer</td>
        </tr>
      </tbody>
      <!--Table body-->
      </table>
      <!--Table-->
  </div>

  </div>
<div>
@endsection

@section('JS')
<script>
  $(document).ready(function () {

});
</script>
@endsection