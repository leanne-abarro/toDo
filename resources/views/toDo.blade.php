<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
  <!-- style sheets -->
  <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
  <link rel="stylesheet" href="{{asset('css/styles.css')}}">
	
	<title>TODO</title>
</head>
<body>
  <main>
    <div class="wrapper">
      <!-- todo form starts here -->
      <section id="form">
        {!! Form::open(array('url' => 'items', 'id' => 'add-form')) !!}
          <div class="field">
              {!! Form::text('task', '' ,array('placeholder' => 'What do you have to do?')) !!}
          </div>
          
          <div class="button">
              {!! Form::submit('Add TODO',["name"=>"submit", "id" => "submit"])!!}
          </div>
          {!! Form::hidden("table_id", 1)!!}
        {!! Form::close() !!}
      </section> <!-- end of form section -->
      <!-- task list view starts here -->
      <h1>To Do:</h1>
      <section id="list-view">
        @foreach($items as $item)
        <div class="task-item">
          <p>{{$item -> task}}</p>
        </div>
        <div class="task-delete">
           <!-- delete form starts -->
          {!! Form::open(["url" => "items/".$item -> id, "method"=>"delete"])!!}
        
          {!! Form::submit("Delete")!!}

          {!! Form::close()!!}
        </div> <!-- end of delete -->
        @endforeach
      </section> <!-- end of task list -->
    </div>  
   </main>
</body>
</html>