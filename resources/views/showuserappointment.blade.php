{{--

<main id="main">






<table class="table">
    <thead class="thead-dark">
      <tr>

        <th scope="col">date</th>
        <th scope="col">time</th>
        <th scope="col">department</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($appointment as $user)
      <tr>

        <td>{{ $user->date }}</td>

        <td>{{ $user->time }}</td>
        <td>{{ $user->department}}</td>
       <a> <td>View,Edit</td></a>
      </tr>
      @endforeach
    </tbody>
  </table>




</main>










 --}}




