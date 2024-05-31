
@extends('admin.main')

@section('content')
<div class="pagetitle">
    <h1>Courses</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="admin/dashboard">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
      <div class="card-body py-4">
        <a href="\admin\courses\form" class="btn btn-primary m-3">+Courses</a>
        <div class="table-responsive">
          <table class="table">
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Category</th>
              <th>Description</th>
              <th>Action</th>
           </tr>

            @foreach ($courses as $course )
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $course->name }}</td>
                  <td>{{ $course->category }}</td>
                  <td>{{ $course->desc }}</td>
                  <td>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                  </td>
              </tr>
            @endforeach

          </table>
       </div>
      </div>
    </div>






  </section>
  @endsection