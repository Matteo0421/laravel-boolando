@extends('layout.main')

@section('contect')

<div class="container">
    <div class="row">
      <!-- CARD  -->
      <Productcard
        v-for="product in db.products"
        :key="product.id"
        :productImage="product.frontImage"
        :secondaryImage="product.backImage"
        :brand="product.brand"
        :productName="product.name"
        :price="product.price"
        :oldPrice="product.oldPrice"
      />
      <!-- /CARD  -->
    </div>
  </div>


@endsection
