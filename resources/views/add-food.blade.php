
@include('partials.navigation')
<section class="container">
  <h3>Create Food Page</h3>
  <div class="col-md-6 offset-3">

    @if (session('success'))
        <script>
            Swal.fire({icon: 'success',text: '{{ session("success") }}'});
        </script>
     @endif

    <form method="POST" action="{{route('submit_food')}}" enctype="multipart/form-data">
        @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Enter Name of Food">
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="Image">Image</label>
                    <input type="file" class="form-control @error('imgurl') is-invalid @enderror" name="imgurl">
                    @error('imgurl')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group ">
                    <label for="Description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Enter Food Description" value="{{ old('description') }}"></textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

        <div class="col-md-12 mt-4">
            <button type="submit" class="btn btn-style">Add Food</button>
        </div>

    </form>
  </div>
</section>
    <br>

@include('partials.footer')


</body>
</html>

