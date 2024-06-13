@extends('adminLayout.main.master')
@section('DynamicContent')
<div class="row" my-2 justify-content-center>
    <a href="" class="btn btn-success col-3" data-toggle="modal" data-target="#Add new Category">Add new Category</a>
</div>
<div class="row" my-2 justify-content-center><table class="table table-dark">
    <thead>
        <tr>
         <th>#</th>
         <th>Name</th>
         <th>Descreption</th>
         <th>Action</th>
        </tr>
    </thead>
    <tbody>
@php
    $i=1;

@endphp
@foreach ($data as $item)
<tr>
    <td>{{ $i++ }}</td>
    <td>{{ $item->name }}</td>
    <td>{{ $item->descreption }}</td>
    <td>
<a href="" class="btn btn-success">Edit</a>
<a href="" class="btn btn-danger">Delete</a>
       </td>
</tr>

@endforeach
    </tbody>
</table>
</div>
{{-- Add modal to create new instanmce --}}

<!-- Modal -->
<div class="modal fade" id="Add new Category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('CategoryTrans.addTitle') }}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      <form action="" method="POST">
        <div class="modal-body">
        <div class="row">

        <div class="col-6">
            <label for="" class="form-text"></label>
            <input type="text" name="" id="" class="form-control">
        </div>
        <div class="col-6">
            <label for="" class="form-text"></label>
            <textarea class="form-control"></textarea>
        </div>
    </div>
        <div class="row">
        <div class="col-6">
            <label for="" class="form-text"></label>
        </div>
        <div class="col-6">
            <label for="" class="form-text"></label>
        </div>
        </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
      </form>
      </div>
    </div>
  </div>
@endsection
