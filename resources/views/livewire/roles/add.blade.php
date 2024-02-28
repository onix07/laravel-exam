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
   

    <div class="flex justify-between mt-12">
      <a href="{{route('roles')}}" class="py-2 px-4 border bg-blue-600  rounded-md flex items-center">
             Back to Roles
      </a>
      <button type="submit" class="py-2 px-4 border bg-green-500 rounded-md">Submit</button>
    </div>
</form>

@if(session()->has('message'))
    <div>{{ session('message') }}</div>
@endif

</div>
