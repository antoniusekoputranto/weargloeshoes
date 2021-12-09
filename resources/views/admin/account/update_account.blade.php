@extends('admin.index')

@section('data')

{{-- <style>
    #description_company{
        height: auto;
        border: 1px solid black;
        background-color: aquamarine;
    }
</style> --}}

<div class="container">

    <h1>account</h1>
    <form action="/admin/update_account/{{$accounts->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="description_company">description_company</label>
        <textarea id="#mytextarea" type="text" class="form-control" id="description_company" style="height: 450px" name="description_company">{{($accounts->description_company)}}</textarea>
        <h1>link_whatsapp</h1>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">+62</span>
            <input type="text" class="form-control" placeholder="whatsapp" name="link_whatsapp" aria-label="whatsapp" aria-describedby="basic-addon1" value="{{($accounts->link_whatsapp)}}">
        </div>
        <h1>link_facebook</h1>
        <input class="form-control" type="text" placeholder="Default input" name="link_facebook" aria-label="default input example" value="{{($accounts->link_facebook)}}">
        <h1>link_instagram</h1>
        <input class="form-control" type="text" placeholder="Default input" name="link_instagram" aria-label="default input example" value="{{($accounts->link_instagram)}}">
        <h1>link_tokopedia</h1>
        <input class="form-control" type="text" placeholder="Default input" name="link_tokopedia" aria-label="default input example" value="{{($accounts->link_tokopedia)}}">
        <h1>link_shopee</h1>
        <input class="form-control" type="text" placeholder="Default input" name="link_shopee" aria-label="default input example" value="{{($accounts->link_shopee)}}">

        <button type="submit" name="account" class="btn btn-primary mt-3">Submit</button>
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