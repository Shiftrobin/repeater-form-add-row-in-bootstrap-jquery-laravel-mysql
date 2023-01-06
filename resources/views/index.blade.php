<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Employee Record</title>
  </head>
  <body>

    <div class="container">

        <div class="row">
            <div class="form-group col-md-12">
                <h4 class="text-center text-success mt-3 mb-3 text-bold">Employee Records</h4>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                @php
                    $success = Session()->get("success");
                @endphp
                @if ($success)
                    <div class="alert alert-success"> {{$success}}</div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="form group col-xl-12 col-lg-12 col-md-12 col-12 child-repeater-table">
                <form action="{{url('/store')}}" method="POST">
                    @csrf
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Birth</th>
                                <th>Age</th>
                                <th>Blood Group</th>
                                <th><a href="javascript:void(0)" class="btn btn-success addRow">+</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type='text' name='name[]' class='form-control' /></td>
                                <td><input type='date' name='birth[]' class='form-control' /></td>
                                <td><input type='text' name='age[]' class='form-control'/></td>
                                <td>
                                    <select name='blood_group[]' id='' class='form-control'>
                                        <option>--Select--</option>
                                        <option value='A+'>A+</option>
                                        <option value='A-'>A-</option>
                                        <option value='B+'>B+</option>
                                        <option value='B-'>B-</option>
                                        <option value='O+'>O+</option>
                                        <option value='O-'>O-</option>
                                        <option value='AB+'>AB+</option>
                                        <option value='AB-'>AB-</option>
                                    </select>
                                </td>

                                <td><a href="javascript:void(0)" class="btn btn-danger deleteRow">-</a></td>

                            </tr>
                        </tbody>
                    </table>

                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

    <Script>
        $('thead').on('click', '.addRow', function(){
            var tr = "<tr>"+
                            "<td><input type='text' name='name[]' class='form-control' /></td>"+
                            "<td><input type='date' name='birth[]' class='form-control' /></td>"+
                            "<td><input type='text' name='age[]' class='form-control'/></td>"+
                            "<td>"+
                                "<select name='blood_group[]' id='' class='form-control'>"+
                                    "<option>--Select--</option>"+
                                    "<option value='A+'>A+</option>"+
                                    "<option value='A-'>A-</option>"+
                                    "<option value='B+'>B+</option>"+
                                    "<option value='B-'>B-</option>"+
                                    "<option value='O+'>O+</option>"+
                                    "<option value='O-'>O-</option>"+
                                    "<option value='AB+'>AB+</option>"+
                                    "<option value='AB-'>AB-</option>"+
                                "</select>"+
                            "</td>"+

                            "<td><a href='javascript:void(0)' class='btn btn-danger deleteRow'>-</a></td>"+

                        "</tr>"
                $('tbody').append(tr);
        });

        $('tbody').on('click','.deleteRow',function(){
            $(this).parent().parent().remove();
        });

    </Script>



  </body>
</html>
