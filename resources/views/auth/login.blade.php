@extends('layouts.layouts')

@section('content')

    <section class="py-5" style="margin-top: 100px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center">Login</div>
        
                        <div class="card-body">
                            <form action="{{ route('login') }}" method="post">
                                @csrf
        
                                <div class="form-group py-3">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
        
                                    @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
        
                                <div class="form-group py-3">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
        
                                    @error('password')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
        
                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="checkbox" name="remember" id="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember" class="form-check-label">Remember Me</label>
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
@endsection