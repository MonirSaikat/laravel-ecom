<x-app title="Login">

    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="contact-form pt-5">
                    <h1 class="text-center">Login</h1>

                    <form id="contact" action="{{route('auth.login')}}" method="post">
                        @csrf 
                        <div class="row pt-4">

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email"
                                        placeholder="E-Mail Address" required="" value="{{ old('email') }}">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="password" type="password" class="form-control" id="password"
                                        placeholder="Password" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="filled-button">Login</button>
                                </fieldset>
                                <p class="my-2">Don't have any account ? <a
                                        href="{{ route('register') }}">Register</a> </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app>
