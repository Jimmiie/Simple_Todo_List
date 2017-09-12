<html><head>
  <meta charset="utf-8">
  <title>Simple Todos List</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{asset('css.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<!-- <div class="page-container"> -->

  <h1>Simple Todo List</h1>
  <p class="mtop0">Using Laravel 5.2, jQuery and Ajax</p>

  <div class="main-tabs mtop40">
    <a href="#" class="main-tab active">Todo List</a>
    
  </div>
<!-- <div class="containt"> -->
  <!-- <todos _nghost-tfa-1=""> -->
  <div _ngcontent-tfa-1="" class="box1"> 
  <div _ngcontent-tfa-1="" class="todos"> 
  <div _ngcontent-tfa-1=""> 
  <form _ngcontent-tfa-1="" class="ng-valid ng-dirty ng-touched" id="form_tambah" method="POST"> 
  {{ csrf_field() }} {{ method_field('POST') }}
  <input _ngcontent-tfa-1="" class="textfield ng-valid ng-dirty ng-touched" id="name"  name="name"> 
  <button id="add" type="button" _ngcontent-tfa-1="" href="#" disabled="" onClick="save()" >Add Todo</button> 
  </form> </div> <div id="type"_ngcontent-tfa-1=""> Type in a new todo... </div> 
 </div>
<form method="POST" id="form-data">
{{csrf_field()}}
   <ul _ngcontent-tfa-1=""> <!--template bindings={}-->
  
 <div class="tampildata">
  
</div>

  </ul> <div _ngcontent-tfa-1="" class="mtop20"> 
  <button _ngcontent-tfa-1="" type="button" onClick="deleteAll()">Delete Selected</button> 
  </form></div></div> </div>  
  <!-- </todos> -->
</div>
</div>
<script type="text/javascript">
var table, save_method;
$(document).ready(function(){
  $('.tampildata').load("{{'home/tampil'}}");
    $("#name").keyup(function(){
        if($(this).val() == ''){
            $("#add").attr("disabled", true);
            $("#type").html("Type in a new todo...");
        }
        else {
            $("#add").attr("disabled", false);
            $("#type").html("Type: "+$("#name").val());
        }
    });
});

function save(){
     $.ajax({
       url : "home",
       type : "POST",
       data : {'name': $("#name").val(),'_method' : 'POST', '_token' : '{{ csrf_token() }}'},
       success : function(data){
         $("#name").val("");
         $("#type").html("Type in a new todo...");
         $('.tampildata').load("{{'home/tampil'}}");
       },
       error : function(){
         alert("Error");
       }
     });
   
}

function deleteData(id){
     $.ajax({
       url : "home/"+id,
       type : "POST",
       data : {'_method' : 'DELETE', '_token' : '{{csrf_token()}}'},
       success : function(data){
         $('.tampildata').load("{{'home/tampil'}}");
       },
       error : function(){
         alert("Error");
       }
     });
   
}

function deleteAll(){
    if($('input:checked').length > 0){
     $.ajax({
       url : "home/hapusall",
       type : "POST",
       data : $('#form-data').serialize(),
       success : function(data){
          $('.tampildata').load("{{'home/tampil'}}");
       },
       error : function(){
         alert("Error");
       }
     });
   }
}

</script>
</body>
</html>