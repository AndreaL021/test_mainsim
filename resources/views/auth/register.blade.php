
<x-layout>
    <x-slot name="title">Home</x-slot>
    <div class="container-fluid text-center" style="min-height: 75vh">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1 class="pt-5">Sign in</h1>
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-5">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="exampleInputEmail1" class="form-label"><h5>Name</h5></label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><h5>Email</h5></label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="mypassword" class="form-label"><h5>Password</h5></label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-5">
                        <label for="mypassword2" class="form-label"><h5>Confirm password</h5></label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    <div class="mb-4 d-flex justify-content-around">
                        <button type="submit" class="btn btn-info mb-5">Sign in</button>
                        <a href="{{route('homepage')}}">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>