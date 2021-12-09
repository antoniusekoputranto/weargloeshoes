@extends('admin.index')

@section('data')
    <div class="container">
        <h1>account</h1>
        <form action="/admin/create_account" method="post" enctype="multipart/form-data">
            @csrf
            {{-- <h1>image_feed</h1>
            <img style="width: 200px; display: none" src="" class="card-img-top fade-1" alt="..." id="output"/>
            <br>
            <input type="file" class="form-control-file" id="image_feed" name="image_feed" accept="image/*" onchange="loadFile(event)">
      
            <script>
              var loadFile = function(event) {
                var reader = new FileReader();
                reader.onload = function(){
                  var output = document.getElementById('output');
                  output.style.removeProperty("display");
                  output.src = reader.result;
                };
                reader.readAsDataURL(event.target.files[0]);
              };
            </script> --}}
            <label for="description_company">description_company</label>
            <textarea id="#mytextarea" type="text" class="form-control" id="description_company" name="description_company"></textarea>
            <h1>link_whatsapp</h1>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">+62</span>
                <input type="text" class="form-control" placeholder="whatsapp" name="link_whatsapp" aria-label="whatsapp" aria-describedby="basic-addon1">
            </div>
            <h1>link_facebook</h1>
            <input class="form-control" type="text" placeholder="Default input" name="link_facebook" aria-label="default input example">
            <h1>link_instagram</h1>
            <input class="form-control" type="text" placeholder="Default input" name="link_instagram" aria-label="default input example">
            <h1>link_tokopedia</h1>
            <input class="form-control" type="text" placeholder="Default input" name="link_tokopedia" aria-label="default input example">
            <h1>link_shopee</h1>
            <input class="form-control" type="text" placeholder="Default input" name="link_shopee" aria-label="default input example">
            {{-- <h1>active</h1>            
            <select class="form-control" id="active" name="active">
            <option value="1">yes</option>
            <option value="0">no</option> --}}
            </select>
      
            <button type="submit" name="feed" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
    <script src="https://cdn.tiny.cloud/1/335cnq2eqfigigqkkhiors0zhjyb1261kurmdgx5in5f3os4/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: 'textarea',
        plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
        toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
        toolbar_mode: 'floating',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
      });
    </script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@endSection