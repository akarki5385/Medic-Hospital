@extends('layouts.app')



<table class="table table-dark">
    <thead>
        <tr>


          <th scope="col"><div class="btn-group-vertical">
    <button type="button" class="btn btn-primary">Menu</button>
  </div></th>



  <th scope="col"><div class="btn-group-vertical">
    <button type="button" class="btn btn-primary">Action</button>
  </div></th>



</thead>
<tbody>
    <tr>

        <th scope="row">1</th>
        <td><div class="btn-group-vertical">
            <button type="button" class="btn btn-primary">View Appointment</button>
          </div></td>
        <td>Otto</td>
        <td>@mdo</td>


{{--
  <div class="btn-group-vertical">
    <button type="button" class="btn btn-primary">view doctor</button>
  </div> --}}


{{--
  <div class="btn-group-vertical">
    <button type="button" class="btn btn-primary">View Patient</button>
  </div>



  <div class="btn-group-vertical">
    <button type="button" class="btn btn-primary">Page setting</button>
  </div> --}}

</tr>
</tbody>
</table>
  @endsection

