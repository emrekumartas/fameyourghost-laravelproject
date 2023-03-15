@extends("layouts.front")
@section("css")
@endsection

@section("content")
    Contacts Page
    <hr>
    <div class="col-8 mx-auto">
        <form action="{{ route("contact") }}" method="POST">
            @csrf

            <input type="hidden" name="_token" value="gy6XNlF2CmAjbhniQluxpdDg3G9rtwjMORnmV1lX">
            <h3>Username</h3>
            <label>
                <input type="text" class="form-control" name="fullname">
            </label>

            <br>
            <h3>e-mail</h3>
            <label>
                <input type="text" class="form-control" name="e-mail">
            </label>
            <br>
            <button class="btn btn-success" type="Submit">Send</button>


        </form>
    </div>

    <hr>

    <div class="col-8 mx-auto">
        Contacts Page 2
        <hr>
        <form action="{{ route("user", ['id' => 5]) }}" method="POST">
            @csrf

            <input type="hidden" name="_token" value="gy6XNlF2CmAjbhniQluxpdDg3G9rtwjMORnmV1lX">
            <label>
                <input type="text" class="form-control" name="fullname">
            </label>
            <br>
            <input type="e-mail" class="form-control" name="e-mail">
            <br>
            <button class="btn btn-success" type="Submit">Send</button>


        </form>
    </div>
    <hr>
    <div class="col-8 mx-auto">
        Support Page
        <hr>
        <form action="{{ route('support-form.support') }}" method="POST">
            @csrf

            <input type="hidden" name="_token" value="gy6XNlF2CmAjbhniQluxpdDg3G9rtwjMORnmV1lX">
            <input type="text" class="form-control" name="fullname">
            <br>
            <input type="e-mail" class="form-control" name="e-mail">
            <br>
            <button class="btn btn-success" type="Submit">Send</button>


        </form>
    </div>

    <hr>
    <div class="col-8 mx-auto">
        Support Page
        <hr>
        <form action="{{ route('user.update', ['id' =>9]) }}" method="POST">
            @csrf
            @method('PATCH')

            <input type="hidden" name="_token" value="gy6XNlF2CmAjbhniQluxpdDg3G9rtwjMORnmV1lX">
            <input type="text" class="form-control" name="fullname">
            <br>
            <input type="e-mail" class="form-control" name="e-mail">
            <br>
            <button class="btn btn-success" type="Submit">Send</button>


        </form>
    </div>
@endsection

@section("js")
@endsection
