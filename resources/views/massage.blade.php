@if ($errors->any())
    <div class="alert alert-danger" style="margin-bottom:0px">

            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>


                @foreach ($errors->all() as $error)

                <strong>errors!</strong> <li>{{ $error }}</li>
                @endforeach
            </div>



    </div>
@endif


@if (session('success'))
    <div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Well done!You successfully Insert </strong>
    </div>
@endif

