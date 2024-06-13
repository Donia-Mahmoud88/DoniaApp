@extends('adminLayout.main.master')
@section('DynamicContent')
<table class="table table-dark">
    <thead>
        <tr>
         <th>#</th>
         <th>Name</th>
         <th>Age</th>
         <th>Gender</th>
         <th>Action</th>
        </tr>

    </thead>
    <tbody>
        <tr>

<td>1</td>
<td>Anjom</td>
<td>25</td>
<td>female</td>
<td>
    <a href="" class="btn btn-success">Edit</a>
    <a href="" class="btn btn-danger">Delete</a>
</td>
        </tr>
        <tr>

            <td>2</td>
            <td>Ghazal</td>
            <td>22</td>
            <td>female</td>
            <td>
                <a href="" class="btn btn-success">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
            </td>
                    </tr>
                    <tr>

                        <td>3</td>
                        <td>Ahmed</td>
                        <td>25</td>
                        <td>female</td>
                        <td>
                            <a href="" class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                                </tr>
                                <tr>

                                    <td>4</td>
                                    <td>Donia</td>
                                    <td>22</td>
                                    <td>female</td>
                                    <td>
                                        <a href="" class="btn btn-success">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                            </tr>
    </tbody>
</table>
@endsection
