@extends('layouts.master')

@section('content')
  <br>
  <section class="content">
    <div class="container-fluid style='background-image:flag.png;'">
    Receptionist home page 
      <div class="row">
        <div class="col-md-4 col-sm-6 col-12">
          <a href="#">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="fas fa-check"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Completed Tasks</span>
                <span class="info-box-number">3</span>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4 col-sm-6 col-12">
          <a href="#">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="fas fa-spinner"></i></span>

              <div class="info-box-content">
                  <span class="info-box-text">Ongoing Tasks</span>
                  <span class="info-box-number">3</span>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4 col-sm-6 col-12">
          <a href="#">
              <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-tasks"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Assigned Task</span>
                  <span class="info-box-number">3</span>
                </div>
              </div>
            </a>
        </div>

      </div>
    </div>
  </section>

@endsection
       
@section('pagescripts')

@endsection