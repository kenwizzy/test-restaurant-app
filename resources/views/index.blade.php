
@include('partials.navigation')
  <section class="container col-lg-12">
    <div class="row">

       @foreach($foods as $item)
                 <div class="col-md-4 ">
                 <div class="card">

                <img src="{{$item->imgurl}}" class="img-fluid" >

                <div class="py-2 px-2">
                      <h4>{{ucfirst($item->food)}}</h4>
                        <p>{{$item->description}}</p>
                    <button class="btn btn-sm {{$item->like == 1?"btn-danger":"btn-primary"}}" id="food_{{$item->id}}" onclick="showID(this.id)" value="{{$item->id}}"><span class="fa {{$item->like == 1?"fa-thumbs-down":"fa-thumbs-up"}} like_{{$item->id}}"></span>{{$item->like == 1?"Unlike":"Like"}}</button>
                    <br><br>
                </div>
                </div><br>
            </div>
      @endforeach
    </div>
  </section>
      <br>

@include('partials.footer')

<script>

    function showID(id){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content')
       let val =  document.getElementById(id).value;

       $.ajax({
                type: "POST",
                url: "{{url('/update')}}",
                data: {'id': val, _token: CSRF_TOKEN},

                success: function(msg){
                    if (msg.status == "successful") {

                        if(msg.data.like == 1){

                            $('#food_'+msg.data.id).removeClass('btn-primary');
                            $('#food_'+msg.data.id).addClass('btn-danger');
                            $('.like_'+msg.data.id.selector).addClass("fa-thumbs-up");
                            $('#food_'+msg.data.id).html('Unlike');
                            Swal.fire({icon: 'success',title: msg.status,text: msg.message});

                        }else if(msg.data.like == 2){

                            $('#food_'+msg.data.id).removeClass('btn-danger');
                            $('#food_'+msg.data.id).html('Like');
                            $('#food_'+msg.data.id).addClass('btn-primary');
                            Swal.fire({icon: 'success',title: msg.status,text: msg.message});

                        }


                    } else {


                    }

                }

            });

    }

</script>
</body>
</html>

