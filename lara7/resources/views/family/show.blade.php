
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" >
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Middle Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">ID Card</th>
      <th scope="col">ِAddress</th>
      
    
    </tr>
  </thead>
  <tbody>
    @foreach($families as $family )

    <tr>
      <th scope="row">{{$family->id}}</th>
      <td>{{$family->first_name}}</td>
      <td>{{$family->middle_name}}</td>
      <td>{{$family->last_name}}</td>
      <td>{{$family->id_card}}</td>
      @foreach($places as $place )
         @if($place->id==$family->place_id)
      <td>{{$place->place_name}}</td>
      @endif
      @endforeach

        <!-- @foreach($plants as $plant )
            @if($plant->id==$family->plant_id)
                <td>{{$plant->plant_name}}</td>
            @endif
        @endforeach -->
       
    </tr>

   @endforeach
  </tbody>
</table>
