<x-layout>
    <form action="/login" method="post">
        @csrf
        <h1 class="text-center font-bold text-xl">Log IN</h1>



        <div>
            <label for="email">email</label>
            <input value="{{ old('email') }}" class="border border-gray-400 " type="text" name="email" id="email" >
            @error('email')
            <p class="text-red-200 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="password">password</label>
            <input  class="border border-gray-400 " type="text" name="password" id="password" >
            @error('password')
            <p class="text-red-200 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <button type="submit">submit</button>
        </div>
    </form>
</x-layout>
