<div>
  <form wire:submit.prevent="submit">
    <div class="mb-4">
      <x-label for="name">
        <span class="font-bold">Name</span>
      </x-label>
      <x-input class="block mt-1 w-full" name="name" type="text" placeholder="Name"
        wire:model="name" />
      @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
      <x-label for="email">
        <span class="font-bold">Email</span>
      </x-label>
      <x-input class="block mt-1 w-full" name="name" type="email" placeholder="Email"
        wire:model="email" />
      @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
    </div>
     <div class="mb-4">
        <x-label for="selectedRoles">
        <span class="font-bold">Role</span>
      </x-label>
       @foreach($roles as $role)
        <div>
            <input
          class="h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
          type="checkbox" value="{{$role->id}}" wire:model="selectedRoles" name="selectedRoles[]">
                    <label for="role_{{ $role->id }}">{{ $role->name }}</label>
            </div>
        @endforeach
        @error('selectedRoles') <span>{{ $message }}</span> @enderror
    </div>

    <div class="flex justify-between mt-12">
      <a href="{{route('users')}}" class="py-2 px-4 border bg-blue-600  rounded-md flex items-center">
             Back to Users
      </a>
      <button type="submit" class="py-2 px-4 border bg-green-500 rounded-md">Submit</button>
    </div>
</form>

@if(session()->has('message'))
    <div>{{ session('message') }}</div>
@endif

</div>
