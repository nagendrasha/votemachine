@extends('layout.master') @section('main')

<div class="continer m-5">
    <h2 class="text-center fs-2">{{ $title }}</h2>
    <p class="text-center">
        VoteIndia is an innovative platform designed to modernize India's voting
        system while preserving its integrity. <br />
        We blend cutting-edge technology with the principles of democracy to
        create a transparent <br />
        and accessible voting experience for every Indian citizen.
    </p>
    <div class="text-center">
        <a href="#" class="btn btn-success">Vote Now</a>
    </div>
    <hr />
    <h2 class="text-center fs-2">Our Mission</h2>
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-6">
                <img src="{{ asset('images/vote.jpg') }}" alt="" width="70%" />
            </div>
            <div class="col-lg-6">
                <ul>
                    <li>
                        Empower every citizen to exercise their voting rights
                        with ease.
                    </li>
                    <li>
                        Ensure fairness, transparency, and accuracy in electoral
                        processes.
                    </li>
                    <li>
                        Use technology to bridge the gap between citizens and
                        the electoral system.
                    </li>
                </ul>
                <p>
                    Let’s Shape the Future Together. Cast your vote with
                    confidence on VoteIndia.
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
