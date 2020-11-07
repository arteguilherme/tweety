@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center bg-gray-50 py-2 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full">
        <div class="">
            <div class="text-center text-2xl leading-9 font-extrabold text-gray-900">
                {{ __('Login') }}
            </div>
            <form class="mt-8" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="rounded-md shadow-sm">

                    <div class="">
                        <input
                            id="email"
                            type="email"
                            class="appearance-none rounded-none relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 @error('email') is-invalid @enderror"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="E-mail Address"
                            required
                            autocomplete="email"
                            autofocus>

                    </div>
                </div>
                <div class="-mt-px">
                    <input
                        id="password"
                        type="password"
                        class="appearance-none rounded-none relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 @error('password') is-invalid @enderror"
                        name="password"
                        placeholder="Password"
                        required
                        autocomplete="current-password">

                </div>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="mt-6 flex items-center justify-between">
                    <div class="flex items-center">
                        <input class="form-check h4 text-indigo-600 transition duration-150 ease-in-out" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="ml-2 block text-sm leading-5 text-gray-900" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                        <div class="text-sm leading-5">
                            <a class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150"
                               href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    @endif
                </div>
                <div class="mt-6">
                    <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-base leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        {{ __('Login') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
