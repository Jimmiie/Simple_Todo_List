    @foreach($listdata as $data)
  <li _ngcontent-tfa-1=""> 
  <input _ngcontent-tfa-1="" class="checkbox ng-untouched ng-pristine ng-valid" type="checkbox" name="{{"id[]"}}" value="{{$data->id}}">
  <span _ngcontent-tfa-1="">{{$data->name}}</span> 
 <a href="#" onClick="deleteData({{$data->id}})"> <span _ngcontent-tfa-1="" class="delete-icon">[X]</span> </li></a>
  @endforeach

