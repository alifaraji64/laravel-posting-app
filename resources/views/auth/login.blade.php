@extends('layouts.app')
@section('content')
    <div class="flex justify-center">
        <section class="bg-white p-6 w-6/12 rounded-lg flex justify-center">
            <form action="{{ route('login') }}" method="post" class="w-1/2">
                @csrf
                @if (session('status'))
                    <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                    value="{{ old('email') }}"
                    />
                    @error('email')
                        <p class="text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                    value="{{ old('password') }}"
                    />
                    @error('password')
                        <p class="text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember me</label>
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                </div>
            </form>
        </section>
    </div>
@endsection