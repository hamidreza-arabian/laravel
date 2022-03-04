<x-layout>
    <form action="/register" method="post">
        <h1 class="text-center font-bold text-xl">register form</h1>
        @csrf
        <div>
            <label for="name">name</label>
            <input value="{{ old('name') }}" class="border border-gray-400 " type="text" name="name" id="name" >
            @error('name')
             <p class="text-red-200 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="user_name">user name</label>
            <input value="{{ old('user_name') }}" class="border border-gray-400 " type="text" name="user_name" id="user_name" >
            @error('user_name')
            <p class="text-red-200 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="password">password</label>
            <input value="{{ old('password') }}" class="border border-gray-400 " type="text" name="password" id="password" >
            @error('password')
            <p class="text-red-200 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="email">email</label>
            <input value="{{ old('email') }}" class="border border-gray-400 " type="text" name="email" id="email" >
            @error('email')
            <p class="text-red-200 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button type="submit">submit</button>
        </div>
    </form>
</x-layout>
