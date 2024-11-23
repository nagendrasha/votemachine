@extends('layout.master') @section('main')

<div
    id="carouselExampleControls"
    class="carousel slide"
    data-bs-ride="carousel"
>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img
                src="{{ asset('images/b1.jpg') }}"
                class="d-block w-100"
                alt="..."
                height="500px"
            />
        </div>
        <div class="carousel-item">
            <img
                src="{{ asset('images/b2.jpg') }}"
                class="d-block w-100"
                alt="..."
                height="500px"
            />
        </div>
        <div class="carousel-item">
            <img
                src="{{ asset('images/b3.jpg') }}"
                class="d-block w-100"
                alt="..."
                height="500px"
            />
        </div>
    </div>
    <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="prev"
    >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="next"
    >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="continer m-5">
    <h2 class="text-center fs-2" >Welcome to VoteIndia – <br> Empowering Democracy, One Vote at a Time</h2>
    <p class="text-center">
        VoteIndia is your one-stop solution for a transparent, secure, and
        user-friendly voting system designed for the diverse and vibrant
        democracy of India. <br> Our mission is to make every citizen’s vote count
        and bring about a seamless and efficient electoral process.
    </p>
    <div class="text-center">

        <a href="#" class="btn btn-success">Vote Now</a>
    </div>
    <hr />
    <h2 class="text-center fs-2">Why Choose VoteIndia?</h2>
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-6">
                <img src="{{ asset('images/vote.jpg') }}" alt="" width="70%">
            </div>
            <div class="col-lg-6">
                <ul>
                    <li>
                       <b>Secure Voting:</b> Advanced encryption technology to ensure
                        your vote is safe.
                    </li>
                    <li>
                        <b>Transparent Results:</b> Fair counting and real-time updates
                        to maintain trust.
                    </li>
                    <li>
                       <b> Inclusive Participation:</b> Accessible to all eligible
                        voters, irrespective of location.
                    </li>
                </ul>
                <p>Let’s Shape the Future Together. Cast your vote with confidence on VoteIndia.

                </p>
            </div>
        </div>
    </div>
</div>

@endsection
