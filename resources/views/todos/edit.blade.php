@extends('todos.app')  

@section('titre')
    | Edit a Todo
@endsection

@section('contenu')

<div class="liste">

 <div class="head" style="display: flex;align-items:center;justify-content:center;"><h3 style="font-weight: bold; margin-right:5%">Edit a Todo</h3> <a href="/todos/index" style="color:rgb(51, 177, 235) "><i class="fas fa-arrow-left"></i></a></div> 
 <hr>
 <div class="body">

 @if( session()->has('message'))
<center>
    <div class="alert" style="color: rgba(129, 248, 145); fontweight:bold;">
        
        {{ session()->get('message')}}

    </div></center>

    @endif


    @if( session()->has('error'))

    <center><div class="alert" style="color: rgba(243, 28, 39); fontweight:bold;">

        {{ session()->get('message')}}

    </div></center>

    @endif

    @if ($errors->any())

    <center><div class="alert" style="color: rgba(243, 28, 39); fontweight:bold;">

        @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach

    </div> </center>

    @endif

    

<div class="form">

    <form action="/todos/update/{{$todo->id}}" method="post">
@csrf
        <input type="text" name="titre" placeholder="Enter the Todo label" style="grid-area:ti; margin-bottom:2%;height:40px;" value="{{$todo->titre}}">

        <textarea name="description" placeholder="Enter the Todo description" maxlength="100" style="grid-area:des;margin-bottom:2%;resize:none;height:120px;">{{$description->text}}</textarea>

        

        <button style="grid-area:btn;height:40px;"> Save </button>

    </form>
    

</div>
    
 </div>

</div>
    
@endsection