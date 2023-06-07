
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" >




<form  action="{{ route('family.store') }}" method="post">
        @csrf

            <div class="mb-3">
    <label class="form-label"> # first name:</label>
    <input type="text" class="form-control" name="first_name" require>

  </div>

  <div class="mb-3">
    <label class="form-label"># middle name:</label>
    <input type="text" class="form-control" name="middle_name" require>
  </div>


  <div class="mb-3">
    <label class="form-label"># last name:</label>
    <input type="text" class="form-control" name="last_name" require >
  </div>


  <div class="mb-3">
    <label class="form-label"># ID number:</label>
    <input type="text" class="form-control" name="id_card" require >
  </div>

  <select  name='place_id' class="form-select" aria-label="Default select example" require>
  <option selected># Address</option>

 @foreach ($places as $place )
     <option value='{{$place->id}}'>{{$place->place_name}}</option>

 @endforeach
</select>


  <br>
<!-- 
    <select  name='plant_id' class="form-select" aria-label="Default select example" require>
        <option selected># plants</option>

        @foreach ($plants as $plant )
            <option value='{{$plant->id}}'>{{$plant->plant_name}}</option>

        @endforeach
    </select> -->
    <br>


  <button type="submit" class="btn btn-primary">Submit</button>

</form>













