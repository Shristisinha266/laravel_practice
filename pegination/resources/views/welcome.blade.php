<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>hello world</h1>
    @foreach ($data as $item)
        {{$item->id}}
        {{$item->fname}}
        {{$item->lname}}
        {{$item->city}}
        <br>
    @endforeach
    {{-- <a href="{{$data->onFirstPage()}}">first page</a> --}}
    {{-- {{$data->links("vendor/pagination/bootstrap-4")}} --}}
    {{-- {{$data->links()}} --}}
    {{-- this is count {{$data->count()}} <br> --}}
    {{-- this is firstItem {{$data->firstItem()}} <br>/ --}}
    {{-- this is lastItem {{$data->lastItem()}} <br> --}}
    {{-- this is last page {{$data->lastPage()}} <br> --}}
    {{-- this is first page {{$data->onFirstPage()}} <br> --}}
    {{-- this is getoptin {{$data->getOptions()}} <br> --}}
    {{-- this is getoptin {{$data->getOptions()}} <br> --}}
    {{-- current page: {{$data->currentPage()}}<br> --}}
    {{-- Next Url: {{$data->nextPageUrl()}}<br> --}}

    {{$data->links("vendor/pagination/bootstrap-4")}}

    {{-- {{$data->lastPage()}} --}}
    

  
   {{-- {{$data->count()}}
   {{$data->total()}} --}}
       
   
   {{-- @if($data->onFirstPage())
    function limit(){
        <a href="{{$data->previousPageUrl()}}">Previous</a> 
    }
   @else
   {{ $data }} --}}
`   
   {{-- @endif --}}

{{-- {{$data->perPage()}} --}}
{{$data->currentPage()}}
{{-- 
@if ({{$data->currentPage()}})
for($i=1; $i<=3; $i++){

} --}}
    
@endif
   
    
    @if ($data->onFirstPage())
    Previous
    @else
        <a href="{{$data->previousPageUrl()}}">Previous</a>       
    @endif

    @if ($data->hasMorePages())
        <a href="{{$data->nextPageUrl()}}">Next</a>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>