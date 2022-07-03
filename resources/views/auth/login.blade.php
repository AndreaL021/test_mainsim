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
        <h1 class="pt-5 mb-5">Log in</h1>
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-12 col-md-5">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label"><h5>Email</h5></label>
                        <input type="email" class="form-control authinput" name="email">
                    </div>
                    <div class="mb-5">
                        <label for="mypassword" class="form-label"><h5>Password</h5></label>
                        <input type="password" class="form-control authinput" name="password">
                    </div>
                    <div class="d-flex justify-content-around">
                        <button type="submit" class="btn mb-5 btn btn-info">Log in</button>
                        <a href="{{route('register')}}">Sign in</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>