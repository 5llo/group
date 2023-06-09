<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background-color:gray;
        }
        </style>
         
<title>Places</title>
</head>
<center>
   
<body>
<form action="{{ route('place.store')}}" method="POST" >
    @csrf
    <label>Name</label>
    <input type="text" name="name"  placeholder="place name">


 <button type="submit">Save</button>
</form>
<a href="{{url('place')}}">back home</a>
</body>
</center>
</html>