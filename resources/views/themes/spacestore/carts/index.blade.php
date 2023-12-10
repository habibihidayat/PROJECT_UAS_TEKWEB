@extends('themes.spacestore.layouts.app')

@section('content')
<section class="breadcrumb-section pb-4 pb-md-4 pt-4 pt-md-4">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
    </div>
</section>
<section class="main-content">
    <div class="container">
        <div class="row">
            <section class="col-lg-12 col-md-12 shopping-cart">
                <div class="card mb-4 bg-light border-0 section-header">
                    <div class="card-body p-5">
                        <h2 class="mb-0">Shopping Cart</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <ul class="list-group list-group-flush">
                            
                            <li class="list-group-item py-3 border-top">
                                <div class="row align-items-center">
                                    <div class="col-6 col-md-6 col-lg-7">
                                        <div class="d-flex">
                                            <img src="" alt="Ecommerce" style="height: 70px;">
                                            <div class="ms-3">
                                                <a href="product.html">
                                                    <h6 class="mb-0"></h6>
                                                </a>
                                                <span>
                                                    <small class="text-muted">IDR </small>
                                                </span>
                                                <div class="mt-2 small lh-1">
                                                    <a href="#!" class="text-decoration-none text-inherit">
                                                        <span class="me-1 align-text-bottom">
                                                            <i class='bx bx-trash'></i>
                                                        </span>
                                                        <span class="text-muted">Remove</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-2 col-lg-2">
                                        <input type="number" name="qty"  class="form-control" min="1">
                                    </div>
                                    <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                                        <span class="fw-bold">IDR </span>
                                    </div>
                                </div>
                            </li>
                           
                        </ul>
                        <div class="d-flex justify-content-between mt-4">
                            <a href="#!" class="btn btn-first">Continue Shopping</a>
                            <a href="#!" class="btn btn-second">Update Cart</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-5">
                        <div class="mb-5 card mt-6">
                            <div class="card-body p-6">
                                <!-- heading -->
                                <h2 class="h5 mb-4">Summary</h2>
                                <div class="card mb-2">
                                    <!-- list group -->
                                    <ul class="list-group list-group-flush">
                                        <!-- list group item -->
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="me-auto">
                                                <div>Item Subtotal</div>
                                            </div>
                                            <span></span>
                                        </li>

                                        <!-- list group item -->
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="me-auto">
                                                <div>Tax</div>
                                            </div>
                                            <span></span>
                                        </li>
                                        <!-- list group item -->
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="me-auto">
                                                <div class="fw-bold">Subtotal</div>
                                            </div>
                                            <span class="fw-bold">/span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-grid mb-1 mt-4">
                                    <!-- btn -->
                                    <button class="btn btn-first btn-lg d-flex justify-content-between align-items-center" type="submit">
                                        Go to Checkout
                                        <span class="fw-bold">0</span>
                                    </button>
                                </div>
                                <!-- text -->
                                <p>
                                    <small>
                                        By placing your order, you agree to be bound by the Freshcart
                                        <a href="#!">Terms of Service</a>
                                        and
                                        <a href="#!">Privacy Policy.</a>
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
@endsection