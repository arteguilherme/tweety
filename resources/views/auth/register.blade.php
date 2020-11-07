@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center bg-gray-50 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full">
        <div class="">
            <div class="text-center text-2xl leading-9 font-extrabold text-gray-900">
                {{ __('Register') }}
            </div>
            <form class="mt-4" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Name') }}</label>
                    <input id="name" type="text" class="bg-gray-200 appearance-none border-2 border-gray-300 rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="bg-gray-200 appearance-none border-2 border-gray-300 rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Password') }}</label>
                    <input id="password" type="password" class="bg-gray-200 appearance-none border-2 border-gray-300 rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="bg-gray-200 appearance-none border-2 border-gray-300 rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="mb-3">
                    <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-base leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
