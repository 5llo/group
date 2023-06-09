<head>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" >
</head>
    
     <!-- <h1>All Places</h1>
    <table class="table table-dark table-striped-columns">
    @foreach ($place as $places)
    <p>{{ $places->name }}</p>
@endforeach
   
</table> -->
<table class="table table-light table-striped">
    <thead>
        <tr>
        
            <th>Name Place</th>
           
        </tr>
    </thead>
 
    <tbody>
        @foreach ($place as $places)
        <tr>
           
           <td>{{ $places->id }}</td>
           <td>{{ $places->name }}</td>
         
       </tr>
    
        @endforeach
    </tbody>
</table>

    