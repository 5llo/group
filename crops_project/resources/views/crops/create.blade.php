<center>
    <h3>Enter crop information</h3><br><br><br>
    <form action="{{route('crops.store')}}" method="post">
    @csrf
    * <input type="text" name="crop_type" placeholder="Crop type"><br><br>
    * <input type="text" name="crop_name" placeholder="Crop name"><br><br>
    <br> <input type="submit" value="Add" name="add">
    </form>
</center>